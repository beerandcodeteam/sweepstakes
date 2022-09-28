@extends("layout.base")

@section("content")

    <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="min-w-0 flex-1">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">Criar Sorteio</h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
            <a href="{{ route("sweepstakes.show", $sweepstake->id) }}"
                    class="order-0 inline-flex items-center rounded-md border border-transparent bg-purple-600 px-4 py-2
                     text-sm font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2
                     focus:ring-purple-500 focus:ring-offset-2 sm:order-1 sm:ml-3"
            >
                Voltar
            </a>
        </div>
    </div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form action="{{ route('sweepstakes.update', $sweepstake->id) }}" method="POST">
                @csrf
                <input type="hidden" value="put" name="_method">
                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">
                                    Titulo
                                </label>
                                <input value="{{ old('title', $sweepstake->title) }}" type="text" name="title" id="title" autocomplete="given-name"
                                       class="mt-1 block w-full rounded-md
                                   @error('title') border-red-300 @else border-gray-300 @enderror
                                   shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                >
                                @error('title')
                                    <span class="text-xs text-red-300">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">Descrição</label>
                                <textarea name="description" id="description"
                                          class="mt-1 block w-full rounded-md
                                   @error('description') border-red-300 @else border-gray-300 @enderror
                                   shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                >{{ old('description', $sweepstake->description) }}</textarea>
                                @error('description')
                                    <span class="text-xs text-red-300">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="number_of_winners" class="block text-sm font-medium text-gray-700">
                                    Número de ganhadores
                                </label>
                                <input value="{{ old('number_of_winners', $sweepstake->number_of_winners) }}"
                                       type="number" name="number_of_winners" id="number_of_winners"
                                       class="mt-1 block w-full rounded-md
                                       @error('number_of_winners') border-red-300 @else border-gray-300 @enderror
                                       shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                >
                                @error('number_of_winners')
                                    <span class="text-xs text-red-300">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="end_date" class="block text-sm font-medium text-gray-700">
                                    Data do sorteio
                                </label>
                                <input
                                    value="{{ old('end_date', $sweepstake->end_date->format('Y-m-d')) }}"
                                    type="date" name="end_date" id="end_date"
                                    class="mt-1 block w-full rounded-md
                                       @error('end_date') border-red-300 @else border-gray-300 @enderror
                                       shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                >
                                @error('end_date')
                                    <span class="text-xs text-red-300">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600
                                py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700
                                focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            Atualizar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
