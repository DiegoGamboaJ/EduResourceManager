<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configuraciones / Colegio / Crear Ciclo') }}
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


                            <form method="POST" action="{{route('schedules.save')}}">
                                @csrf

                                <!-- Cycle -->
                                <div>
                                    <x-input-label for="cycle" :value="__('Cycle')" />
                                    <x-text-input id="cycle" class="block mt-1 mb-2 w-full" type="text" name="cycle"
                                        :value="old('cycle')" required autofocus autocomplete="cycle" />
                                    <x-input-error :messages="$errors->get('cycle')" class="mt-2" />
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
