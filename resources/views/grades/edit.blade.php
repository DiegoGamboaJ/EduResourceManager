<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Curso: ') . $grade->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg grid gap-4 grid-cols-2">
                <div class="max-w-xl">
                    <section class="mr-2">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Informacion del curso') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Actualizar la informacion del curso: $grade->name.") }}
                            </p>
                        </header>

                        <form method="post" action="{{route('grades.update', ['id' => $grade->id])}}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $grade->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="schedule" :value="__('Schedule')" />
                                <select class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="schedule" required>
                                    <option selected value="{{$grade->schedule->id}}">{{$grade->schedule->cycle}}</option>
                                        @foreach ($schedules as $schedule)
                                            @if($grade->schedule->id === $schedule->id)
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
