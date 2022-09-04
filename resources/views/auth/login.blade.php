@extends('auth.base')

@section('content')

<form action="{{ route('login') }}" method="POST">

    @csrf

    @error('email')
        <div class="bg-white text-primary-dark p-4 rounded mb-4">
            {{ $message }}
        </div>
    @enderror

    <div class="flex flex-col">
        <label for="email" class="block text-sm font-medium ">Email</label>
        <div class="mt-1">
            <input type="email" name="email" id="email" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com">
        </div>
    </div>

    <div class="flex flex-col mt-4">
        <label for="password" class="block text-sm font-medium ">Senha</label>
        <input name="password" id="password" type="password" placeholder="Sua senha" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
    </div>

    <button type="submit" class="text-white mt-4 flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium  shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        Entrar
    </button>


</form>

@endsection
