<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        <section class="mr-2">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Calendario de Reservas') }}
                </h2>
            </header>
            <input type="hidden" value="{{$reservations}}" id="reservations"/>
            {{-- <p class="mt-1 text-sm text-gray-600">
                {{ __('   ') }}
            </p> --}}
            <div class="mt-4 flex flex-row-reverse mb-4">
                <button type="button"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                    data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init
                    data-te-ripple-color="light">
                    Reservar
                </button>
            </div>
            <div id="calendar">
            </div>
            <script src="scripts.js"></script>

            {{-- Modal --}}
            <!--Verically centered modal-->
            <div data-te-modal-init
                class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true"
                role="dialog">
                <div data-te-modal-dialog-ref
                    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                    <div
                        class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                        <div
                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                            <!--Modal title-->
                            <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                id="exampleModalScrollableLabel">
                                Reservar
                            </h5>
                            <!--Close button-->
                            <button type="button"
                                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                data-te-modal-dismiss aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!--Modal body-->
                        <form method="POST" action="{{ route('reservation.store') }}">
                            <div class="relative p-4">
                                <p></p>

                                @csrf

                                @if (Auth::user()->role === 'admin' || Auth::user()->role === 'mod')
                                    {{-- Important --}}
                                    <div>
                                        <div class="flex">
                                            <div class="flex items-center h-5">
                                                <input id="important" aria-describedby="important-text" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                    name="important" />
                                            </div>
                                            <div class="ml-2 text-sm">
                                                <label for="important"
                                                    class="font-medium text-gray-900 dark:text-gray-300">¿Importante?</label>
                                                <p id="important-text"
                                                    class="mb-3 text-xs font-normal text-gray-500 dark:text-gray-300">
                                                    <u>Solo seleccione esta opcion si la reserva es para las pruebas
                                                        DIA.</u>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                {{-- Devices --}}
                                <div class="mt-2">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dispositivo</label>
                                    <select id="devices"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="device_id">
                                        <option selected disabled>Elige un dispositivo</option>

                                        @foreach ($devices as $device)
                                            <option value="{{ $device->id }}">{{ $device->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                {{-- Date --}}
                                <div>
                                    <x-input-label for="date" :value="__('Fecha')" />

                                    <div class="relative mb-3" id="datepicker-element" data-te-input-wrapper-init>
                                        <input type="text"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            name="date" />
                                    </div>
                                    <x-input-error :messages="$errors->get('date')" class="my-2" />
                                </div>

                                {{-- User --}}
                                <div>
                                    @if (Auth::user()->role === 'admin' || Auth::user()->role === 'mod')
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profesor</label>
                                        <select id="users" data-te-select-init data-te-select-option-height="52"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="user_id">
                                            <option selected disabled>Seleccione a un profesor</option>

                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}"
                                                    data-te-select-secondary-text="{{ $user->email }}">
                                                    {{ $user->name . ' ' . $user->surname }}</option>
                                            @endforeach

                                        </select>
                                    @else
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuario</label>
                                        <select data-te-select-init name="user_id">
                                            <option value="{{ Auth::user()->id }}">
                                                {{ auth()->user()->name . ' ' . Auth::user()->surname }}</option>
                                        </select>
                                    @endif
                                </div>

                                {{-- Curso --}}
                                <div class="mt-2">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Curso</label>
                                    <select id="grades"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="grade_id">
                                        <option selected disabled>Elige un curso</option>

                                        @foreach ($grades as $grade)
                                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                {{-- Bloque --}}

                                <label
                                    class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bloque</label>
                                <select id="blocks" data-te-select-init data-te-select-option-height="52"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="block_id">
                                    <option selected disabled>Elige un bloque</option>

                                    @foreach ($blocks as $block)
                                        <option value="{{ $block->id }}"
                                            data-te-select-secondary-text="{{ 'Ciclo ' . $block->schedule_id }}">
                                            {{ $block->start_time . ' - ' . $block->end_time }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <!--Modal footer-->
                            <div
                                class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <button type="button"
                                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                    data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                    Cerrar
                                </button>
                                <button type="submit"
                                    class="ml-1 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                    data-te-ripple-init data-te-ripple-color="light">
                                    Reservar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- End Modal --}}

            <div class="mt-10">
                <p class="mt-10 text-sm text-gray-600">
                    {{ __('*Importante*:') }}
                </p>
            </div>
        </section>
    </div>
</div>
