<?php

namespace Src\Auth\Infrastructure\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Src\Auth\Application\UseCases\LoginUserUseCase;

class LoginController extends Controller
{



    public function __construct(private LoginUserUseCase $loginUserUseCase)
    {
        $this->loginUserUseCase = $loginUserUseCase;
    }
    /**
     * Display the login form.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        return view('auth.login');
    }


    public function store(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        $user = $this->loginUserUseCase->execute($email, $password);


        if (!$user) {
            return redirect()->back()->withErrors(['auth' => 'Invalid credentials']);
        }

        return redirect()->route('client.home')->with('success', 'Login successful');
    }
}
