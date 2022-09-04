@extends("layout.base")

@section("content")
    <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="min-w-0 flex-1">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">Home</h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
            <a href="{{ route("sweepstakes.create") }}"
                    class="order-0 inline-flex items-center rounded-md border border-transparent bg-purple-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 sm:order-1 sm:ml-3">
                Novo Sorteio
            </a>
        </div>
    </div>
    <div class="mt-6 px-4 sm:px-6 lg:px-8">
        <h2 class="text-sm font-medium text-gray-900">Próximos sorteios</h2>
        <ul role="list" class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 xl:grid-cols-4">

            @foreach($near_sweepstakes as $sweepstake)
                <li class="relative col-span-1 flex rounded-md shadow-sm">
                    <div
                        class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                        {{ \Illuminate\Support\Str::substr($sweepstake->title, 0,2) }}
                    </div>
                    <div
                        class="flex flex-1 items-center justify-between truncate rounded-r-md border-t border-r border-b border-gray-200 bg-white">
                        <div class="flex-1 truncate px-4 py-2 text-sm">
                            <a href="{{ route('sweepstakes.show', $sweepstake) }}" class="font-medium text-gray-900 hover:text-gray-600">{{ $sweepstake->title }}</a>
                            <p class="text-gray-500">{{ $sweepstake->participants->count() }} Participantes</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Projects list (only on smallest breakpoint) -->
    <div class="mt-10 sm:hidden">
        <div class="px-4 sm:px-6">
            <h2 class="text-sm font-medium text-gray-900">Todos os Sorteios</h2>
        </div>
        <ul role="list" class="mt-3 divide-y divide-gray-100 border-t border-gray-200">

            @foreach($sweepstakes as $sweepstake)
                <li>
                    <a href="{{ route('sweepstakes.show', $sweepstake->id) }}" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                        <span class="flex items-center space-x-3 truncate">
                            <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600"
                                  aria-hidden="true"></span>
                            <span class="truncate text-sm font-medium leading-6">
                                {{ $sweepstake->title }}
                            </span>
                        </span>
                        <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                  clip-rule="evenodd"
                            />
                        </svg>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Projects table (small breakpoint and up) -->
    <div class="mt-8 hidden sm:block">
        <div class="inline-block min-w-full border-b border-gray-200 align-middle">
            <table class="min-w-full">
                <thead>
                    <tr class="border-t border-gray-200">
                        <th class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                            scope="col">
                            <span class="lg:pl-2">Sorteios</span>
                        </th>
                        <th class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900"
                            scope="col">Sorteado
                        </th>
                        <th class="hidden border-b border-gray-200 bg-gray-50 px-6 py-3 text-right text-sm font-semibold text-gray-900 md:table-cell"
                            scope="col">Criação
                        </th>
                        <th class="hidden border-b border-gray-200 bg-gray-50 px-6 py-3 text-right text-sm font-semibold text-gray-900 md:table-cell"
                            scope="col">Sorteio
                        </th>
                        <th class="border-b border-gray-200 bg-gray-50 py-3 pr-6 text-right text-sm font-semibold text-gray-900"
                            scope="col"></th>
                        <th class="border-b border-gray-200 bg-gray-50 py-3 pr-6 text-right text-sm font-semibold text-gray-900"
                            scope="col"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                @foreach($sweepstakes as $sweepstake)
                    <tr>
                        <td class="w-full max-w-0 whitespace-nowrap px-6 py-3 text-sm font-medium text-gray-900">
                            <div class="flex items-center space-x-3 lg:pl-2">
                                <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600"
                                     aria-hidden="true"></div>
                                <a href="{{ route("sweepstakes.show", $sweepstake->id) }}" class="truncate hover:text-gray-600">
                                    <span>
                                      {{ $sweepstake->title }}
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td class="px-6 py-3 text-sm font-medium text-gray-500">
                            <span>
                              {{ $sweepstake->participants->whereNotNull('awarded_at')->first() ? "Sim" : "Não" }}
                            </span>
                        </td>
                        <td class="hidden whitespace-nowrap px-6 py-3 text-right text-sm text-gray-500 md:table-cell">
                            {{ $sweepstake->created_at->format("d/m/Y") }}
                        </td>
                        <td class="hidden whitespace-nowrap px-6 py-3 text-right text-sm text-gray-500 md:table-cell">
                            {{ $sweepstake->end_date->format("d/m/Y") }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-3 text-right text-sm font-medium">
                            <a href="{{ route("sweepstakes.edit", $sweepstake->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                        </td>

                        <td class="whitespace-nowrap px-6 py-3 text-right text-sm font-medium">
                            <form action="{{ route("sweepstakes.destroy", $sweepstake->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="text-red-600 hover:text-indigo-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
