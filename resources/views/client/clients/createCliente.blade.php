@extends('client.layout.main')


@section('title', 'Home')

@section('content')
    <div class="container">
        
        @include('client.clients.sections.formClient')

    </div>
@endsection