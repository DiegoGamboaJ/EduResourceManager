<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ciclo: ') . $schedule->cycle }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg grid gap-4 grid-cols-2">
                <div class="max-w-xl">
                    <section class="mr-2">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Informacion del ciclo') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Actualizar la informacion del ciclo: $schedule->cycle.") }}
                            </p>
                        </header>

                        <form method="post" action="{{route('schedules.update', ['id' => $schedule->id])}}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label for="cycle" :value="__('Cycle')" />
                                <x-text-input id="cycle" name="cycle" type="text" class="mt-1 block w-full"
                                    :value="old('cycle', $schedule->cycle)" required autofocus autocomplete="cycle" />
                                <x-input-error class="mt-2" :messages="$errors->get('cycle')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
