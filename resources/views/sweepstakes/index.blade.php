@extends("layout.base")

@section("content")
    <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="min-w-0 flex-1">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">Home</h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
            <button type="button"
                    class="order-0 inline-flex items-center rounded-md border border-transparent bg-purple-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 sm:order-1 sm:ml-3">
                Novo Sorteio
            </button>
        </div>
    </div>
    <div class="mt-6 px-4 sm:px-6 lg:px-8">
        <h2 class="text-sm font-medium text-gray-900">Próximos sorteios</h2>
        <ul role="list" class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 xl:grid-cols-4">


            <li class="relative col-span-1 flex rounded-md shadow-sm">
                <div
                    class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                    SA
                </div>
                <div
                    class="flex flex-1 items-center justify-between truncate rounded-r-md border-t border-r border-b border-gray-200 bg-white">
                    <div class="flex-1 truncate px-4 py-2 text-sm">
                        <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Sorteio ABC</a>
                        <p class="text-gray-500">12 Participantes</p>
                    </div>
                </div>
            </li>

            <!-- More items... -->
        </ul>
    </div>

    <!-- Projects list (only on smallest breakpoint) -->
    <div class="mt-10 sm:hidden">
        <div class="px-4 sm:px-6">
            <h2 class="text-sm font-medium text-gray-900">Todos os Sorteios</h2>
        </div>
        <ul role="list" class="mt-3 divide-y divide-gray-100 border-t border-gray-200">
            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                            <span class="flex items-center space-x-3 truncate">
                                <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600"
                                      aria-hidden="true"></span>
                                <span class="truncate text-sm font-medium leading-6">
                                    GraphQL API
                                    <span class="truncate font-normal text-gray-500">in Engineering</span>
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
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                <tr>
                    <td class="w-full max-w-0 whitespace-nowrap px-6 py-3 text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600"
                                 aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                                <span>
                                  GraphQL API
                                  <span class="font-normal text-gray-500">in Engineering</span>
                                </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm font-medium text-gray-500">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">
                                <img class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="Dries Vincent">

                                <img class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="Lindsay Walton">

                                <img class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="Courtney Henry">

                                <img class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="Tom Cook">
                            </div>

                            <span class="flex-shrink-0 text-xs font-medium leading-5">+8</span>
                        </div>
                    </td>
                    <td class="hidden whitespace-nowrap px-6 py-3 text-right text-sm text-gray-500 md:table-cell">
                        March 17, 2020
                    </td>
                    <td class="hidden whitespace-nowrap px-6 py-3 text-right text-sm text-gray-500 md:table-cell">
                        March 17, 2020
                    </td>
                    <td class="whitespace-nowrap px-6 py-3 text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
