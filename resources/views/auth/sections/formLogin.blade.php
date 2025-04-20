<div class="pt-32 w-full flex justify-center bg-gray-50">

    <div class="w-[40rem] shadow-lg rounded-2xl p-8 bg-white border border-gray-200">

        <h2 class="text-2xl font-bold text-center text-gray-800 font-displayHat mb-2">¡Bienvenido de nuevo!</h2>
        <p class="text-sm text-center text-gray-500 mb-6">Inicia sesión para acceder a tu cuenta</p>

        <form action="{{ route('auth.login') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block mb-1 text-sm text-gray-700 font-displayHat font-bold">Correo electrónico</label>
                <input type="email" name="email" id="email" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    placeholder="ejemplo@correo.com">
            </div>

            <div>
                <label for="password" class="block mb-1 text-sm font-bold text-gray-700 font-displayHat">Contraseña</label>
                <input type="password" name="password" id="password" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    placeholder="••••••••">
            </div>

            <div class="flex justify-between items-center text-sm">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-500">
                    <span class="ml-2 text-gray-600">Recuérdame</span>
                </label>
                <a href="#" class="text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="pt-3">
                <button type="submit"
                    class="w-full cursor-pointer bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-3 rounded-lg transition duration-200 shadow-md">
                    Iniciar sesión
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-500">
            ¿No tienes una cuenta?
            <a href="#" class="text-blue-500 hover:underline">Regístrate</a>
        </p>

    </div>

</div>
