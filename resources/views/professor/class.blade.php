@extends('template')

@section('title')
    Home Coordinatore | TAXATIO 
@endsection

@section('body')
<div class="w-full bg-amber-100 p-4 space-y-10">
    <div class="flex justify-between h-[50px] space-x-8">
        <div class="w-[50px] bg-[#AA4FFF] rounded-xl p-1">
            <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
        </div>
        <div class="flex w-full h-[50px] rounded-2xl bg-[#EED9FE] p-2">
            <p class="font-medium text-4xl m-auto">LE TUE CLASSI</p>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="flex flex-row justify-between px-3">
            <p class="text-3xl">PRIMO ANNO</p>
        </div>
        <div class="flex flex-row overflow-x-scroll">
            <div class="glide flex h-[350px] px-3">
                <div class="flex flex-col w-[500px] bg-[#EED9FE] rounded-[50px] my-auto px-10">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex bg-[#E4C0FF] h-[150px] justify-around rounded-2xl p-3">
                        <div>
                            <span>
                                <p class="font-medium">COMPOSIZIONE</p>
                            </span>
                            <span>
                                <p>12 alunni</p>
                                <p>8 insegnanti</p>
                            </span>
                        </div>
                        <div>
                            <span>
                                <p class="font-medium">INIZIO CORSO</p>
                                <p>12 Ottobre 2022</p><br/>
                            </span>
                            <span>
                                <p class="font-medium">FINE CORSO</p>
                                <p>12 Maggio 2023</p>
                            </span>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px]">
                        <button
                            class="m-auto h-[50px] w-full bg-[#B95DFF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-3xl">
                            VISUALIZZA VALUTAZIONI
                        </button>
                    </div>
                </div>
            </div>

            <div class="glide flex h-[350px] px-3">
                <div class="flex flex-col w-[500px] bg-[#CFFFF3] rounded-[50px] my-auto px-10">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex bg-[#67EBCB] h-[150px] justify-around rounded-2xl p-3">
                        <div>
                            <span>
                                <p class="font-medium">COMPOSIZIONE</p>
                            </span>
                            <span>
                                <p>12 alunni</p>
                                <p>8 insegnanti</p>
                            </span>
                        </div>
                        <div>
                            <span>
                                <p class="font-medium">INIZIO CORSO</p>
                                <p>12 Ottobre 2022</p><br/>
                            </span>
                            <span>
                                <p class="font-medium">FINE CORSO</p>
                                <p>12 Maggio 2023</p>
                            </span>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px]">
                        <button
                            class="m-auto h-[50px] w-full bg-[#00CE9D] hover:bg-amber-500 text-white font-bold py-2 px-4 rounded-3xl">
                            VISUALIZZA VALUTAZIONI
                        </button>
                    </div>
                </div>
            </div>

            <div class="glide flex h-[350px] px-3">
                <div class="flex flex-col w-[500px] bg-[#FED9EA] rounded-[50px] my-auto px-10">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex bg-[#FFC0F5] h-[150px] justify-around rounded-2xl p-3">
                        <div>
                            <span>
                                <p class="font-medium">COMPOSIZIONE</p>
                            </span>
                            <span>
                                <p>12 alunni</p>
                                <p>8 insegnanti</p>
                            </span>
                        </div>
                        <div>
                            <span>
                                <p class="font-medium">INIZIO CORSO</p>
                                <p>12 Ottobre 2022</p><br/>
                            </span>
                            <span>
                                <p class="font-medium">FINE CORSO</p>
                                <p>12 Maggio 2023</p>
                            </span>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px]">
                        <button
                            class="m-auto h-[50px] w-full bg-[#FF01F5] hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-3xl">
                            VISUALIZZA VALUTAZIONI
                        </button>
                    </div>
                </div>
            </div>

            <div class="glide flex h-[350px] px-3">
                <div class="flex flex-col w-[500px] bg-[#EED9FE] rounded-[50px] my-auto px-10">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex bg-[#E4C0FF] h-[150px] justify-around rounded-2xl p-3">
                        <div>
                            <span>
                                <p class="font-medium">COMPOSIZIONE</p>
                            </span>
                            <span>
                                <p>12 alunni</p>
                                <p>8 insegnanti</p>
                            </span>
                        </div>
                        <div>
                            <span>
                                <p class="font-medium">INIZIO CORSO</p>
                                <p>12 Ottobre 2022</p><br/>
                            </span>
                            <span>
                                <p class="font-medium">FINE CORSO</p>
                                <p>12 Maggio 2023</p>
                            </span>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px]">
                        <button
                            class="m-auto h-[50px] w-full bg-[#B95DFF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-3xl">
                            VISUALIZZA VALUTAZIONI
                        </button>
                    </div>
                </div>
            </div>

            <div class="glide flex h-[350px] px-3">
                <div class="flex flex-col w-[500px] bg-[#CFFFF3] rounded-[50px] my-auto px-10">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex bg-[#67EBCB] h-[150px] justify-around rounded-2xl p-3">
                        <div>
                            <span>
                                <p class="font-medium">COMPOSIZIONE</p>
                            </span>
                            <span>
                                <p>12 alunni</p>
                                <p>8 insegnanti</p>
                            </span>
                        </div>
                        <div>
                            <span>
                                <p class="font-medium">INIZIO CORSO</p>
                                <p>12 Ottobre 2022</p><br/>
                            </span>
                            <span>
                                <p class="font-medium">FINE CORSO</p>
                                <p>12 Maggio 2023</p>
                            </span>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px]">
                        <button
                            class="m-auto h-[50px] w-full bg-[#00CE9D] hover:bg-amber-500 text-white font-bold py-2 px-4 rounded-3xl">
                            VISUALIZZA VALUTAZIONI
                        </button>
                    </div>
                </div>
            </div>

            <div class="glide flex h-[350px] px-3">
                <div class="flex flex-col w-[500px] bg-[#FED9EA] rounded-[50px] my-auto px-10">
                    <div class="flex items-center h-[80px] m-auto">
                        <p class="text-3xl">CLASSE PIXEL</p>
                    </div>
                    <div class="inline-flex bg-[#FFC0F5] h-[150px] justify-around rounded-2xl p-3">
                        <div>
                            <span>
                                <p class="font-medium">COMPOSIZIONE</p>
                            </span>
                            <span>
                                <p>12 alunni</p>
                                <p>8 insegnanti</p>
                            </span>
                        </div>
                        <div>
                            <span>
                                <p class="font-medium">INIZIO CORSO</p>
                                <p>12 Ottobre 2022</p><br/>
                            </span>
                            <span>
                                <p class="font-medium">FINE CORSO</p>
                                <p>12 Maggio 2023</p>
                            </span>
                        </div>
                    </div>
                    <div class="inline-flex h-[90px]">
                        <button
                            class="m-auto h-[50px] w-full bg-[#FF01F5] hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-3xl">
                            VISUALIZZA VALUTAZIONI
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex flex-row justify-between px-3">
                <p class="text-3xl">SECONDO ANNO</p>
            </div>
            <div class="flex flex-row overflow-x-scroll">
                <div class="glide flex h-[350px] px-3">
                    <div class="flex flex-col w-[500px] bg-[#EED9FE] rounded-[50px] my-auto px-10">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex bg-[#E4C0FF] h-[150px] justify-around rounded-2xl p-3">
                            <div>
                                <span>
                                    <p class="font-medium">COMPOSIZIONE</p>
                                </span>
                                <span>
                                    <p>12 alunni</p>
                                    <p>8 insegnanti</p>
                                </span>
                            </div>
                            <div>
                                <span>
                                    <p class="font-medium">INIZIO CORSO</p>
                                    <p>12 Ottobre 2022</p><br/>
                                </span>
                                <span>
                                    <p class="font-medium">FINE CORSO</p>
                                    <p>12 Maggio 2023</p>
                                </span>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px]">
                            <button
                                class="m-auto h-[50px] w-full bg-[#B95DFF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA VALUTAZIONI
                            </button>
                        </div>
                    </div>
                </div>
    
                <div class="glide flex h-[350px] px-3">
                    <div class="flex flex-col w-[500px] bg-[#CFFFF3] rounded-[50px] my-auto px-10">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex bg-[#67EBCB] h-[150px] justify-around rounded-2xl p-3">
                            <div>
                                <span>
                                    <p class="font-medium">COMPOSIZIONE</p>
                                </span>
                                <span>
                                    <p>12 alunni</p>
                                    <p>8 insegnanti</p>
                                </span>
                            </div>
                            <div>
                                <span>
                                    <p class="font-medium">INIZIO CORSO</p>
                                    <p>12 Ottobre 2022</p><br/>
                                </span>
                                <span>
                                    <p class="font-medium">FINE CORSO</p>
                                    <p>12 Maggio 2023</p>
                                </span>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px]">
                            <button
                                class="m-auto h-[50px] w-full bg-[#00CE9D] hover:bg-amber-500 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA VALUTAZIONI
                            </button>
                        </div>
                    </div>
                </div>
    
                <div class="glide flex h-[350px] px-3">
                    <div class="flex flex-col w-[500px] bg-[#FED9EA] rounded-[50px] my-auto px-10">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex bg-[#FFC0F5] h-[150px] justify-around rounded-2xl p-3">
                            <div>
                                <span>
                                    <p class="font-medium">COMPOSIZIONE</p>
                                </span>
                                <span>
                                    <p>12 alunni</p>
                                    <p>8 insegnanti</p>
                                </span>
                            </div>
                            <div>
                                <span>
                                    <p class="font-medium">INIZIO CORSO</p>
                                    <p>12 Ottobre 2022</p><br/>
                                </span>
                                <span>
                                    <p class="font-medium">FINE CORSO</p>
                                    <p>12 Maggio 2023</p>
                                </span>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px]">
                            <button
                                class="m-auto h-[50px] w-full bg-[#FF01F5] hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA VALUTAZIONI
                            </button>
                        </div>
                    </div>
                </div>

                <div class="glide flex h-[350px] px-3">
                    <div class="flex flex-col w-[500px] bg-[#EED9FE] rounded-[50px] my-auto px-10">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex bg-[#E4C0FF] h-[150px] justify-around rounded-2xl p-3">
                            <div>
                                <span>
                                    <p class="font-medium">COMPOSIZIONE</p>
                                </span>
                                <span>
                                    <p>12 alunni</p>
                                    <p>8 insegnanti</p>
                                </span>
                            </div>
                            <div>
                                <span>
                                    <p class="font-medium">INIZIO CORSO</p>
                                    <p>12 Ottobre 2022</p><br/>
                                </span>
                                <span>
                                    <p class="font-medium">FINE CORSO</p>
                                    <p>12 Maggio 2023</p>
                                </span>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px]">
                            <button
                                class="m-auto h-[50px] w-full bg-[#B95DFF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA VALUTAZIONI
                            </button>
                        </div>
                    </div>
                </div>
    
                <div class="glide flex h-[350px] px-3">
                    <div class="flex flex-col w-[500px] bg-[#CFFFF3] rounded-[50px] my-auto px-10">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex bg-[#67EBCB] h-[150px] justify-around rounded-2xl p-3">
                            <div>
                                <span>
                                    <p class="font-medium">COMPOSIZIONE</p>
                                </span>
                                <span>
                                    <p>12 alunni</p>
                                    <p>8 insegnanti</p>
                                </span>
                            </div>
                            <div>
                                <span>
                                    <p class="font-medium">INIZIO CORSO</p>
                                    <p>12 Ottobre 2022</p><br/>
                                </span>
                                <span>
                                    <p class="font-medium">FINE CORSO</p>
                                    <p>12 Maggio 2023</p>
                                </span>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px]">
                            <button
                                class="m-auto h-[50px] w-full bg-[#00CE9D] hover:bg-amber-500 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA VALUTAZIONI
                            </button>
                        </div>
                    </div>
                </div>
    
                <div class="glide flex h-[350px] px-3">
                    <div class="flex flex-col w-[500px] bg-[#FED9EA] rounded-[50px] my-auto px-10">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="inline-flex bg-[#FFC0F5] h-[150px] justify-around rounded-2xl p-3">
                            <div>
                                <span>
                                    <p class="font-medium">COMPOSIZIONE</p>
                                </span>
                                <span>
                                    <p>12 alunni</p>
                                    <p>8 insegnanti</p>
                                </span>
                            </div>
                            <div>
                                <span>
                                    <p class="font-medium">INIZIO CORSO</p>
                                    <p>12 Ottobre 2022</p><br/>
                                </span>
                                <span>
                                    <p class="font-medium">FINE CORSO</p>
                                    <p>12 Maggio 2023</p>
                                </span>
                            </div>
                        </div>
                        <div class="inline-flex h-[90px]">
                            <button
                                class="m-auto h-[50px] w-full bg-[#FF01F5] hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-3xl">
                                VISUALIZZA VALUTAZIONI
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection
