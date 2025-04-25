@extends('client.layout.main')


@section('title', 'Home')

@section('content')
    <div class="container">
    
        @include('client.home.sections.graphics')


        <div class="grid grid-cols-4 gap-6 mt-6">
            @include('client.home.sections.invoices')
            @include('client.home.sections.client')
        </div>

    </div>
@endsection