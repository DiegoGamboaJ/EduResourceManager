<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configuraciones / Colegio / Ciclos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-3/4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @include('components.alert')

                    <div class="flex flex-row-reverse mb-4">
                        <button onclick="location.href='{{route('schedules.create')}}'" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" type="button">Crear ciclo</button>
                    </div>

                    <div class="snap-x relative bg-slate-50 rounded-xl overflow-auto dark:bg-slate-800/25 w-3/4 sm:w-2/4 m-0 mx-auto">
                        <table class="scroll-ml-12 snap-start border-collapse table-auto lg:table-auto w-full">
                            <thead>
                                <tr class="bg-gradient-to-t from-neutral-300 to-neutral-200">
                                    <th class="border-b p-4 pb-3 sm:px-8 font-semibold text-slate-600 border-slate-300 sm:text-center">Ciclo</th>
                                    <th class="border-b p-4 pb-3 sm:px-8 font-semibold text-slate-600 border-slate-300">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($schedules as $schedule)
                                <tr class="hover:bg-slate-200 transition">
                                    <td class="text-center border-t p-4 pt-2 pb-3 sm:pl-8 font-medium text-slate-600 border-slate-300 sm:truncate">{{$schedule->cycle}}</td>
                                    <td class="border-t p-4 font-medium text-slate-600 border-slate-300 sm:truncate">
                                        <div class="flex gap-6 justify-center">
                                            <div>
                                                <a href="{{route('schedules.edit', ['id' => $schedule->id])}}" class="hover:text-red-950 active:text-red-700">
                                                    <i class="shadow-lg fa-solid fa-pen-to-square hover:scale-110 transition"></i>
                                                </a>
                                            </div>

                                            <div>
                                                <form action="{{route('schedules.destroy', ['id' => $schedule->id])}}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="hover:text-red-950 active:text-red-700">
                                                        <i class="shadow-lg fa-solid fa-trash-can hover:scale-110 transition"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

