@extends('template')

@section('title')
    Home Studente | TAXATIO
@endsection

@section('body')
    <div class="w-full h-full bg-amber-100 px-3">
        <div class="flex flex-row h-16">
            <div class="flex items-end h-16 w-4/6">
                <p class="flex text-3xl mb-1">Ciao David!</p>
            </div>
            <div class="flex items-end justify-end h-16 w-2/6">
                <form>
                    <label for="default-search"></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" class="h-7 w-48 rounded-2xl text-black my-1 mx-2">
                    </div>
                </form>
            </div>
        </div>
        <div class="flex h-9">
            <p class="flex items-center">Ti sei loggato come studente PASCAL , dai un occhio alle valutazioni...</p>
        </div>
        <div class="flex flex-row h-[80px] justify-around w-full rounded-2xl bg-white">
            <div class="w-[400px] p-3">
                <p class="text-lg font-medium">Lo stato delle tue valutazioni è :</p>
                <div class="flex">
                    <div class="w-[250px] my-auto bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
                    <div class="justify-end items-center px-2">
                        <p class="text-lg font-medium">45%</p>
                    </div>
                </div>
            </div>
            <div class="w-[200px] p-3">
                <p class="text-lg font-medium">Hai valutato :</p>
                <p class="text-lg font-medium">12/20 insegnanti</p>
            </div>
            <div class="w-1/2 bg-orange-100 rounded-3xl m-1">
                <div class="flex flex-row justify-between m-2">
                    <p>ti è stata mandata la valutazione in data</p>
                    <p>12 maggio 2023</p>
                </div>
                <div class="flex flex-row justify-between m-2">
                    <p>ricordati di terminarla entro il</p>
                    <p>17 maggio 2023</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-4">
            <div class="flex flex-row justify-between">
                <p class="text-3xl">Da completare</p>
            </div>
            <div class="flex flex-row overflow-x-scroll">
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-orange-300 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-3xl">
                                VALUTA
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-orange-300 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-3xl">
                                VALUTA
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-orange-300 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-3xl">
                                VALUTA
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-orange-300 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-3xl">
                                VALUTA
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-orange-300 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-3xl">
                                VALUTA
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-3xl">Completate</p>
            </div>
            <div class="flex flex-row overflow-x-scroll">
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-amber-200 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-300 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-amber-200 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-300 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-amber-200 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-300 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-amber-200 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-300 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-amber-200 rounded-[50px] my-auto">
                        <div class="flex items-center justify-start h-[80px] px-6">
                            <p class="text-3xl">Marco Rocchetto</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-6 items-center text-xl">
                            <p>Cyber Security</p>
                            <p>5 lezioni</p>
                        </div>
                        <div class="inline-flex h-[90px] px-6 justify-end">
                            <button
                                class="my-auto h-[50px] w-[180px] bg-orange-300 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
