@extends('template')

@section('title')
    Home Coordinatore | TAXATIO 
@endsection

@section('body')
    <div class="flex flex-row h-16 px-3">
        <div class="flex items-end h-16 w-4/6">
            <p class="flex text-3xl mb-1">Ciao _________!</p>
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
                    <input type="search" class="h-7 w-48 rounded-2xl text-black my-1 mx-2 bg-[#CFFFF3]">
                </div>
            </form>
        </div>
    </div>
    <div class="flex h-9 px-3">
        <p class="flex items-center">Ti sei loggato come _______, dai un occhio allo stato delle valutazioni...
        </p>
    </div>
    <div class="flex flex-col mt-4">
        <div class="flex flex-row justify-between px-3">
            <p class="text-3xl">PRIMO ANNO</p>
        </div>
        <div class="flex flex-row overflow-x-scroll">
            <div class="glide flex h-[450px] px-3">
                <div class="flex flex-col h-[400px] w-[400px] bg-[#EED9FE] rounded-[50px] my-auto">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex h-[230px] p-3">
                        <div class="w-[150px] bg-[#E4C0FF] rounded-2xl p-3">
                            <span>
                                <p>aaaa</p>
                                <p>bbbbb</p>
                            </span>
                            <span>
                                <p>ccccc</p>
                                <p>ddddd</p>
                            </span>
                            <span>
                                <p>eeee</p>
                            </span>
                        </div>
                        <div class="w-[250px] p-3">
                            <div class="flex justify-between mb-1">
                                <span class="text-lg font-medium">Stato valutazione</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-[#B95DFF] h-2.5 rounded-full" style="width: 45%"></div>
                            </div>
                            <div class="flex justify-end">
                                <span class="text-lg font-medium">45%</span>
                            </div>
                            <div>
                                <p>dfgwehrgsefhgsr</p>
                                <p>sgdfgsdfbsdfhs</p>
                            </div>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px] px-4">
                        <button
                            class="m-auto h-[50px] w-[160px] bg-[#B95DFF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            STUDENTI
                        </button>
                        <button
                            class="m-auto h-[50px] w-[160px] bg-[#B95DFF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            INSEGNANTI
                        </button>
                    </div>
                </div>
            </div>
            
            
            
            <div class="flex h-[450px] px-3">
                <div class="flex flex-col h-[400px] w-[400px] bg-blue-300 rounded-[50px] my-auto">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex h-[230px] p-3">
                        <div class="w-[150px] bg-blue-400 rounded-2xl p-3">
                            <span>
                                <p>aaaa</p>
                                <p>bbbbb</p>
                            </span>
                            <span>
                                <p>ccccc</p>
                                <p>ddddd</p>
                            </span>
                            <span>
                                <p>eeee</p>
                            </span>
                        </div>
                        <div class="w-[250px] p-3">
                            <div class="flex justify-between mb-1">
                                <span class="text-lg font-medium">Stato valutazione</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                            </div>
                            <div class="flex justify-end">
                                <span class="text-lg font-medium">45%</span>
                            </div>
                            <div>
                                <p>dfgwehrgsefhgsr</p>
                                <p>sgdfgsdfbsdfhs</p>
                            </div>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px] px-4">
                        <button
                            class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            STUDENTI
                        </button>
                        <button
                            class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            INSEGNANTI
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex h-[450px] px-3">
                <div class="flex flex-col h-[400px] w-[400px] bg-blue-300 rounded-[50px] my-auto">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex h-[230px] p-3">
                        <div class="w-[150px] bg-blue-400 rounded-2xl p-3">
                            <span>
                                <p>aaaa</p>
                                <p>bbbbb</p>
                            </span>
                            <span>
                                <p>ccccc</p>
                                <p>ddddd</p>
                            </span>
                            <span>
                                <p>eeee</p>
                            </span>
                        </div>
                        <div class="w-[250px] p-3">
                            <div class="flex justify-between mb-1">
                                <span class="text-lg font-medium">Stato valutazione</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                            </div>
                            <div class="flex justify-end">
                                <span class="text-lg font-medium">45%</span>
                            </div>
                            <div>
                                <p>dfgwehrgsefhgsr</p>
                                <p>sgdfgsdfbsdfhs</p>
                            </div>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px] px-4">
                        <button
                            class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            STUDENTI
                        </button>
                        <button
                            class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            INSEGNANTI
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex h-[450px] px-3">
                <div class="flex flex-col h-[400px] w-[400px] bg-blue-300 rounded-[50px] my-auto">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex h-[230px] p-3">
                        <div class="w-[150px] bg-blue-400 rounded-2xl p-3">
                            <span>
                                <p>aaaa</p>
                                <p>bbbbb</p>
                            </span>
                            <span>
                                <p>ccccc</p>
                                <p>ddddd</p>
                            </span>
                            <span>
                                <p>eeee</p>
                            </span>
                        </div>
                        <div class="w-[250px] p-3">
                            <div class="flex justify-between mb-1">
                                <span class="text-lg font-medium">Stato valutazione</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                            </div>
                            <div class="flex justify-end">
                                <span class="text-lg font-medium">45%</span>
                            </div>
                            <div>
                                <p>dfgwehrgsefhgsr</p>
                                <p>sgdfgsdfbsdfhs</p>
                            </div>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px] px-4">
                        <button
                            class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            STUDENTI
                        </button>
                        <button
                            class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            INSEGNANTI
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex h-[450px] px-3">
                <div class="flex flex-col h-[400px] w-[400px] bg-blue-300 rounded-[50px] my-auto">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex h-[230px] p-3">
                        <div class="w-[150px] bg-blue-400 rounded-2xl p-3">
                            <span>
                                <p>aaaa</p>
                                <p>bbbbb</p>
                            </span>
                            <span>
                                <p>ccccc</p>
                                <p>ddddd</p>
                            </span>
                            <span>
                                <p>eeee</p>
                            </span>
                        </div>
                        <div class="w-[250px] p-3">
                            <div class="flex justify-between mb-1">
                                <span class="text-lg font-medium">Stato valutazione</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                            </div>
                            <div class="flex justify-end">
                                <span class="text-lg font-medium">45%</span>
                            </div>
                            <div>
                                <p>dfgwehrgsefhgsr</p>
                                <p>sgdfgsdfbsdfhs</p>
                            </div>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px] px-4">
                        <button
                            class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            STUDENTI
                        </button>
                        <button
                            class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                            INSEGNANTI
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-4">
            <div class="flex flex-row justify-between px-3">
                <p class="text-3xl">SECONDO ANNO</p>
            </div>
            <div class="flex flex-row overflow-x-scroll">
                <div class="glide flex h-[450px] px-3">
                    <div class="flex flex-col h-[400px] w-[400px] bg-blue-300 rounded-[50px] my-auto">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex h-[230px] p-3">
                            <div class="w-[150px] bg-blue-400 rounded-2xl p-3">
                                <span>
                                    <p>aaaa</p>
                                    <p>bbbbb</p>
                                </span>
                                <span>
                                    <p>ccccc</p>
                                    <p>ddddd</p>
                                </span>
                                <span>
                                    <p>eeee</p>
                                </span>
                            </div>
                            <div class="w-[250px] p-3">
                                <div class="flex justify-between mb-1">
                                    <span class="text-lg font-medium">Stato valutazione</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <div class="flex justify-end">
                                    <span class="text-lg font-medium">45%</span>
                                </div>
                                <div>
                                    <p>dfgwehrgsefhgsr</p>
                                    <p>sgdfgsdfbsdfhs</p>
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px] px-4">
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                STUDENTI
                            </button>
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                INSEGNANTI
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[450px] px-3">
                    <div class="flex flex-col h-[400px] w-[400px] bg-blue-300 rounded-[50px] my-auto">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex h-[230px] p-3">
                            <div class="w-[150px] bg-blue-400 rounded-2xl p-3">
                                <span>
                                    <p>aaaa</p>
                                    <p>bbbbb</p>
                                </span>
                                <span>
                                    <p>ccccc</p>
                                    <p>ddddd</p>
                                </span>
                                <span>
                                    <p>eeee</p>
                                </span>
                            </div>
                            <div class="w-[250px] p-3">
                                <div class="flex justify-between mb-1">
                                    <span class="text-lg font-medium">Stato valutazione</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <div class="flex justify-end">
                                    <span class="text-lg font-medium">45%</span>
                                </div>
                                <div>
                                    <p>dfgwehrgsefhgsr</p>
                                    <p>sgdfgsdfbsdfhs</p>
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px] px-4">
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                STUDENTI
                            </button>
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                INSEGNANTI
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[450px] px-3">
                    <div class="flex flex-col h-[400px] w-[400px] bg-blue-300 rounded-[50px] my-auto">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex h-[230px] p-3">
                            <div class="w-[150px] bg-blue-400 rounded-2xl p-3">
                                <span>
                                    <p>aaaa</p>
                                    <p>bbbbb</p>
                                </span>
                                <span>
                                    <p>ccccc</p>
                                    <p>ddddd</p>
                                </span>
                                <span>
                                    <p>eeee</p>
                                </span>
                            </div>
                            <div class="w-[250px] p-3">
                                <div class="flex justify-between mb-1">
                                    <span class="text-lg font-medium">Stato valutazione</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <div class="flex justify-end">
                                    <span class="text-lg font-medium">45%</span>
                                </div>
                                <div>
                                    <p>dfgwehrgsefhgsr</p>
                                    <p>sgdfgsdfbsdfhs</p>
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px] px-4">
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                STUDENTI
                            </button>
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                INSEGNANTI
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[450px] px-3">
                    <div class="flex flex-col h-[400px] w-[400px] bg-blue-300 rounded-[50px] my-auto">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex h-[230px] p-3">
                            <div class="w-[150px] bg-blue-400 rounded-2xl p-3">
                                <span>
                                    <p>aaaa</p>
                                    <p>bbbbb</p>
                                </span>
                                <span>
                                    <p>ccccc</p>
                                    <p>ddddd</p>
                                </span>
                                <span>
                                    <p>eeee</p>
                                </span>
                            </div>
                            <div class="w-[250px] p-3">
                                <div class="flex justify-between mb-1">
                                    <span class="text-lg font-medium">Stato valutazione</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <div class="flex justify-end">
                                    <span class="text-lg font-medium">45%</span>
                                </div>
                                <div>
                                    <p>dfgwehrgsefhgsr</p>
                                    <p>sgdfgsdfbsdfhs</p>
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px] px-4">
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                STUDENTI
                            </button>
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                INSEGNANTI
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex h-[450px] px-3">
                    <div class="flex flex-col h-[400px] w-[400px] bg-blue-300 rounded-[50px] my-auto">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex h-[230px] p-3">
                            <div class="w-[150px] bg-blue-400 rounded-2xl p-3">
                                <span>
                                    <p>aaaa</p>
                                    <p>bbbbb</p>
                                </span>
                                <span>
                                    <p>ccccc</p>
                                    <p>ddddd</p>
                                </span>
                                <span>
                                    <p>eeee</p>
                                </span>
                            </div>
                            <div class="w-[250px] p-3">
                                <div class="flex justify-between mb-1">
                                    <span class="text-lg font-medium">Stato valutazione</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <div class="flex justify-end">
                                    <span class="text-lg font-medium">45%</span>
                                </div>
                                <div>
                                    <p>dfgwehrgsefhgsr</p>
                                    <p>sgdfgsdfbsdfhs</p>
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px] px-4">
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                STUDENTI
                            </button>
                            <button
                                class="m-auto h-[50px] w-[160px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
                                INSEGNANTI
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        
@endsection
