<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configuraciones / Colegio / Crear bloque') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="min-h-full flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-transparent">
                        <div>
                            <a href="/">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                        </div>

                        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-2xl overflow-hidden sm:rounded-lg">


                            <form method="POST" action="{{route('blocks.save')}}">
                                @csrf

                                <!-- Start -->
                                <div>
                                    <x-input-label :value="__('Start')" />
                                    <input type="time" name="start" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" min="07:00" max="17:00"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('start')" />
                                </div>

                                <!-- End -->
                                <div>
                                    <x-input-label :value="__('End')" />
                                    <input type="time" name="end" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" min="07:00" max="17:00"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('end')" />
                                </div>

                                <!-- Schedules -->
                                <div>
                                    <x-input-label for="schedule" :value="__('Ciclo')" />
                                    <select class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="schedule" required>
                                            <option selected hidden disabled value="">Selecciona un ciclo</option>
                                        @foreach ($schedules as $schedule)
                                            <option value="{{$schedule->id}}">{{$schedule->cycle}}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('schedule')" class="mt-2" />
                                </div>



                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ml-4">
                                        {{ __('Registrar') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
