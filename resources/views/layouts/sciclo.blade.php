<div class="container mx-auto mt-5">
    <div class="wrapper bg-white rounded shadow-xl w-full">
        <div class="header flex justify-between border-b p-2">
            <span class="text-lg font-bold">
                -Rango de fecha de la semana-
            </span>
            <div class="buttons">
                <button class="p-1">
                    <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path fill-rule="evenodd"
                            d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                        <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z" />
                    </svg>
                </button>
                <button class="p-1">
                    <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16"
                        class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path fill-rule="evenodd"
                            d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                        <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
            </div>
        </div>
        <table class="w-full">
            <thead>
                <tr>
                    <th class="p-2 border-x h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                        <span class="xl:block lg:block md:block sm:block hidden"></span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block"></span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                        <span class="xl:block lg:block md:block sm:block hidden">Lunes</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Lu</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                        <span class="xl:block lg:block md:block sm:block hidden">Martes</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Ma</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                        <span class="xl:block lg:block md:block sm:block hidden">Miercoles</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mi</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                        <span class="xl:block lg:block md:block sm:block hidden">Jueves</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Ju</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                        <span class="xl:block lg:block md:block sm:block hidden">Viernes</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Vi</span>
                    </th>
                </tr>
            </thead>
            <tbody>

                @php
                    $contadorRec = 0;
                    $contadorBlock = 0;
                @endphp

                @foreach ($blocksS as $key => $blockk)
                    @if ($contadorRec === 0)
                        <tr class="text-center h-20">
                            <td
                                class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition duration-500 ease">
                                <span
                                    class="xl:block lg:block md:block sm:block hidden">{{ $blockk->start_time . ' - ' . $blockk->end_time }}</span>
                            </td>
                            <td
                                class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                <div
                                    class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">2</span>
                                    </div>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                        <div class="event bg-purple-400 text-white rounded p-1 text-sm mb-1">
                                            <span class="event-name">
                                                1°A prueba
                                            </span>
                                            <span class="time">
                                                12:00~14:00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                <div
                                    class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">3</span>
                                    </div>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                <div
                                    class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">3</span>
                                    </div>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                <div
                                    class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">3</span>
                                    </div>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                <div
                                    class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">3</span>
                                    </div>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                        </tr>
                        @php
                            $contadorBlock++;
                        @endphp
                    @else
                        <tr class="text-center h-10 transition duration-500 ease hover:bg-red-200">
                            <td class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                                <div
                                    class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">REC</span>
                                    </div>
                                </div>
                            </td>
                            <td class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                                <div
                                    class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">-</span>
                                    </div>
                                </div>
                            </td>
                            <td class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                                <div
                                    class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">-</span>
                                    </div>
                                </div>
                            </td>
                            <td class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                                <div
                                    class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">-</span>
                                    </div>
                                </div>
                            </td>
                            <td class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                                <div
                                    class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">-</span>
                                    </div>
                                </div>
                            </td>
                            <td class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                                <div
                                    class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                    <div class="top h-5 w-full">
                                        <span class="text-gray-500">-</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @php
                            $contadorRec--;
                        @endphp
                    @endif
                    @if ($contadorBlock === 3 && $key !== count($blocksS) - 1)
                        @php
                            $contadorRec = 1;
                            $contadorBlock = 0;
                        @endphp
                    @endif
                @endforeach

                {{-- <!--         line 0 -->
                <tr class="text-center h-20">
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition duration-500 ease">
                        <span class="xl:block lg:block md:block sm:block hidden">Horario</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">H 1</span>
                        <p class="mt-2 text-sm text-gray-600"> Bloque 1</p>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">2</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div class="event bg-purple-400 text-white rounded p-1 text-sm mb-1">
                                    <span class="event-name">
                                        1°A prueba
                                    </span>
                                    <span class="time">
                                        12:00~14:00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">3</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">4</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">6</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">7</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div class="event bg-blue-400 text-white rounded p-1 text-sm mb-1">
                                    <span class="event-name">
                                        Shopping
                                    </span>
                                    <span class="time">
                                        12:00~14:00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!--         line 0 -->

                <!--         line 1 -->
                <tr class="text-center h-20">
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition duration-500 ease">
                        <span class="xl:block lg:block md:block sm:block hidden">Horario</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">H 2</span>
                        <p class="mt-2 text-sm text-gray-600"> Bloque 2</p>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">10</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">12</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">13</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">14</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">15</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                </tr>
                <!--         line 1 -->

                <!--         line 2 -->
                <tr class="text-center h-20">
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition duration-500 ease">
                        <span class="xl:block lg:block md:block sm:block hidden">Horario</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">H 3</span>
                        <p class="mt-2 text-sm text-gray-600"> Bloque 3</p>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">2</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div class="event bg-purple-400 text-white rounded p-1 text-sm mb-1">
                                    <span class="event-name">
                                        1°A prueba
                                    </span>
                                    <span class="time">
                                        12:00~14:00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">3</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">4</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">6</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">7</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div class="event bg-blue-400 text-white rounded p-1 text-sm mb-1">
                                    <span class="event-name">
                                        Shopping
                                    </span>
                                    <span class="time">
                                        12:00~14:00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!--         line 2 -->

                <!--         line 3 -->
                <tr class="text-center h-10 transition duration-500 ease hover:bg-red-200">
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">REC</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <!--         line 3 -->

                <!--         line 4 -->
                <tr class="text-center h-20">
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition duration-500 ease">
                        <span class="xl:block lg:block md:block sm:block hidden">Horario</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">H 4</span>
                        <p class="mt-2 text-sm text-gray-600"> Bloque 4</p>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">10</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">12</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">13</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">14</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">15</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                </tr>
                <!--         line 4 -->

                <!--         line 5 -->
                <tr class="text-center h-20">
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition duration-500 ease">
                        <span class="xl:block lg:block md:block sm:block hidden">Horario</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">H 5</span>
                        <p class="mt-2 text-sm text-gray-600"> Bloque 5</p>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">2</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div class="event bg-purple-400 text-white rounded p-1 text-sm mb-1">
                                    <span class="event-name">
                                        1°A prueba
                                    </span>
                                    <span class="time">
                                        12:00~14:00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">3</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">4</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">6</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">7</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div class="event bg-blue-400 text-white rounded p-1 text-sm mb-1">
                                    <span class="event-name">
                                        Shopping
                                    </span>
                                    <span class="time">
                                        12:00~14:00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!--         line 5 -->

                <!--         line 6 -->
                <tr class="text-center h-10 transition duration-500 ease hover:bg-red-200">
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">REC</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <!--         line 6 -->

                <!--         line 7 -->
                <tr class="text-center h-20">
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition duration-500 ease">
                        <span class="xl:block lg:block md:block sm:block hidden">Horario</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">H 6</span>
                        <p class="mt-2 text-sm text-gray-600"> Bloque 6</p>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">10</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">12</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">13</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">14</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">15</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                </tr>
                <!--         line 7 -->

                <!--         line 8 -->
                <tr class="text-center h-20">
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition duration-500 ease">
                        <span class="xl:block lg:block md:block sm:block hidden">Horario</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">H 7</span>
                        <p class="mt-2 text-sm text-gray-600"> Bloque 7</p>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">2</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div class="event bg-purple-400 text-white rounded p-1 text-sm mb-1">
                                    <span class="event-name">
                                        1°A prueba
                                    </span>
                                    <span class="time">
                                        12:00~14:00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">3</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">4</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">6</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">7</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                <div class="event bg-blue-400 text-white rounded p-1 text-sm mb-1">
                                    <span class="event-name">
                                        Shopping
                                    </span>
                                    <span class="time">
                                        12:00~14:00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!--         line 8 -->

                <!--         line 9 -->
                <tr class="text-center h-10 transition duration-500 ease hover:bg-red-200">
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">REC</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-5 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <div
                            class="flex flex-col h-5 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">-</span>
                            </div>
                        </div>
                    </td>
                </tr>
                
                <!--         line 9 -->

                <!--         line 10 -->
                <tr class="text-center h-20">
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition duration-500 ease">
                        <span class="xl:block lg:block md:block sm:block hidden">Horario</span>
                        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">H 8</span>
                        <p class="mt-2 text-sm text-gray-600"> Bloque 8</p>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">10</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">12</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">13</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">14</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                    <td
                        class="border p-1 h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                        <div
                            class="flex flex-col h-20 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                            <div class="top h-5 w-full">
                                <span class="text-gray-500">15</span>
                            </div>
                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                        </div>
                    </td>
                </tr>
                <!--         line 10 --> --}}
            </tbody>
        </table>
    </div>
</div>
