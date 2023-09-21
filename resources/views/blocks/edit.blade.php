<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bloque: ') . $block->id . ' del ' . $block->schedule->cycle }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg grid gap-4 grid-cols-2">
                <div class="max-w-xl">
                    <section class="mr-2">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Informacion del bloque N° '. $block->id) }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Vista de la actualizacion del bloque") }}
                            </p>
                        </header>

                        <form method="post" action="{{route('blocks.update', ['id' => $block->id])}}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label :value="__('Start')" />
                                <input type="time" name="start" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" min="07:00" max="17:00" value="{{$block->start_time}}"/>
                                <x-input-error class="mt-2" :messages="$errors->get('start')" />
                            </div>

                            <div>
                                <x-input-label :value="__('End')" />
                                <input type="time" name="end" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" min="07:00" max="17:00" value="{{$block->end_time}}"/>
                                <x-input-error class="mt-2" :messages="$errors->get('end')" />
                            </div>

                            <div>
                                <x-input-label :value="__('Schedule')" />
                                <select class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="schedule" required>
                                    <option selected value="{{$block->schedule->id}}">{{$block->schedule->cycle}}</option>
                                        @foreach ($schedules as $schedule)
                                            @if($block->schedule->id === $schedule->id)
                                                @continue
                                            @endif
                                            <option value="{{ $schedule->id }}">{{ $schedule->cycle }}</option>
                                        @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('schedule')" class="mt-2" />
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
