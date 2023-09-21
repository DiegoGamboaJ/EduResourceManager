<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil de ') . $user->name . ' ' . $user->surname }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg grid gap-4 grid-cols-2">
                <div class="max-w-xl">
                    <section class="mr-2">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Informacion del perfil') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Actualizar la informacion de la cuenta del usuario: $user->name $user->surname.") }}
                            </p>
                        </header>

                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <form method="post" action="{{ route('users.update', ['id' => $user->id]) }}"
                            class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="surname" :value="__('Surname')" />
                                <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full"
                                    :value="old('surname', $user->surname)" required autofocus autocomplete="surname" />
                                <x-input-error class="mt-2" :messages="$errors->get('surname')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                    :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition
                                    x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{
                                    __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>

                </div>

                <div class="border-l max-w-xl object-right">
                    <section class="ml-6">

                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Restablecer Contraseña') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('La constraseña se restablecera por defecto: "') }}
                                <label class="password font-discretionary-ligatures text-transparent" data-password="JWcolegio123">*********</label>
                                {{ __('"') }}
                            </p>

                            <a id="show-password" class="cursor-pointer text-gray-500 hover:text-gray-700 focus:text-gray-700">Mostrar contraseña</a>
                        </header>

                        <form method="post" action="{{route('users.passdefault', ['id' => $user->id])}}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Restablecer') }}</x-primary-button>
                            </div>
                        </form>

                    </section>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
