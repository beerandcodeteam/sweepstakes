<!doctype html>
<html class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    <script defer src="{{ asset("js/app.js") }}"></script>

</head>
<body class="h-full">
<div class="min-h-full" x-data>
    <div class="bg-white">

        <div
            class="flex flex-col mx-auto mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-16 lg:max-w-2xl">

                @if(session('success'))
                    <div class="p-2 flex flex-row items-center bg-green-100 rounded-lg border border-green-300 gap-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text text-sm">Teste de sucesso!</span>
                    </div>
               @endif

            <div class="flex flex-col-reverse">
                <div class="mt-4">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                        {{ $sweepstake->title }}
                    </h1>

                    <p class="mt-2 text-sm text-gray-500">
                        Data do sorteio:
                        <time
                            datetime="{{ $sweepstake->end_date->format("d/m/Y") }}">{{ $sweepstake->end_date->format("d/m/Y") }}</time>
                    </p>
                </div>
            </div>

            <p class="mt-6 text-gray-500">
                {{ $sweepstake->description }}
            </p>

            <form action="{{ route("sweepstake.storeParticipant", $sweepstake->id) }}"
                  class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2" method="POST">
                @csrf
                <div class="col-span-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Seu nome
                    </label>
                    <input value="{{ old('name') }}" placeholder="Nome completo" type="text" name="name" id="name"
                           autocomplete="given-name"
                           class="mt-1 block w-full rounded-md
                           @error('name') border-red-300 @else border-gray-300 @enderror
                           shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    >
                    @error('name')
                        <span class="text-xs text-red-300">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-6">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Seu email
                    </label>
                    <input value="{{ old('email') }}" placeholder="email@email.com" type="text" name="email" id="email"
                           autocomplete="given-name"
                           class="mt-1 block w-full rounded-md
                           @error('email') border-red-300 @else border-gray-300 @enderror
                           shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    >
                    @error('email')
                    <span class="text-xs text-red-300">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit"
                            class=" w-full inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Participar
                    </button>
                </div>
            </form>


        </div>


    </div>
</div>
</body>
</html>
