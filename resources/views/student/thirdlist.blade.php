@extends('template')

@section('title')
    Home Studente | TAXATIO
@endsection

@section('body')
    <div class="w-full h-full bg-amber-100 p-4 space-y-3">
        <div class="flex flex-row justify-between h-[50px]">
            <div class="w-[50px] bg-[#AA4FFF] rounded-xl p-1">
                <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </div>
            <div class="flex flex-row h-[50px] w-3/5 justify-between rounded-2xl bg-[#EED9FE] p-2">
                <div class="my-auto text-2xl font-medium ml-5">
                    <p>CLASSE PIXEL</p>
                </div>
                <div class="w-1/2 flex justify-between items-center bg-[#E4C0FF] rounded-xl px-2 font-medium">
                    <p>valutazione in data</p>
                    <p>12 maggio 2023</p>
                </div>
            </div>
            <div class="flex w-1/5 bg-[#00AF31] rounded-xl text-white text-lg">
                <p class="m-auto">COMPLETATA</p>
            </div>
        </div>

        <div class="flex w-full h-[50px] text-lg">
            <div class="flex w-[50px] justify-start bg-[#AA4FFF] rounded-l-xl">
                <p class="hidden">0</p>
            </div>
            <div class="flex w-3/5 h-[50px] justify-around bg-[#AA4FFF] rounded-r-xl items-center mr-auto text-white">
                <p class="w-[150px]">Nome</p>
                <p class="w-[150px]">Cognome</p>
                <p class="w-[150px]">Stato valutazione</p>
            </div>
            <div class="flex w-1/5 h-[50px] bg-[#9AFF91] rounded-xl px-3">
                <p class="m-auto text-base font-medium">completata in data 17 maggio 2023</p>
            </div>
        </div>


        <div class="flex w-full h-[50px] bg-[#DFFFC6] text-lg rounded-xl my-auto">
            <div class="flex w-[50px] justify-center text-2xl font-medium items-center">
                <p>1</p>
            </div>
            <div class="flex w-3/5 justify-around my-auto">
                <p class="w-[150px]">Alessia</p>
                <p class="w-[150px]">Tezza</p>
                <p class="w-[150px]">Completata</p>
            </div>
        </div>

        <div class="flex w-full h-[50px] bg-[#DFFFC6] text-lg rounded-xl my-auto">
            <div class="flex w-[50px] justify-center text-2xl font-medium items-center">
                <p>2</p>
            </div>
            <div class="flex w-3/5 justify-around my-auto">
                <p class="w-[150px]">Alessia</p>
                <p class="w-[150px]">Tezza</p>
                <p class="w-[150px]">Completata</p>
            </div>
        </div>

        <div class="flex w-full h-[50px] bg-[#DFFFC6] text-lg rounded-xl my-auto">
            <div class="flex w-[50px] justify-center text-2xl font-medium items-center">
                <p>3</p>
            </div>
            <div class="flex w-3/5 justify-around my-auto">
                <p class="w-[150px]">Alessia</p>
                <p class="w-[150px]">Tezza</p>
                <p class="w-[150px]">Completata</p>
            </div>
        </div>

        <div class="flex w-full h-[50px] bg-[#DFFFC6] text-lg rounded-xl my-auto">
            <div class="flex w-[50px] justify-center text-2xl font-medium items-center">
                <p>4</p>
            </div>
            <div class="flex w-3/5 justify-around my-auto">
                <p class="w-[150px]">Alessia</p>
                <p class="w-[150px]">Tezza</p>
                <p class="w-[150px]">Completata</p>
            </div>
        </div>

        <div class="flex w-full h-[50px] bg-[#DFFFC6] text-lg rounded-xl my-auto">
            <div class="flex w-[50px] justify-center text-2xl font-medium items-center">
                <p>5</p>
            </div>
            <div class="flex w-3/5 justify-around my-auto">
                <p class="w-[150px]">Alessia</p>
                <p class="w-[150px]">Tezza</p>
                <p class="w-[150px]">Completata</p>
            </div>
        </div>

        <div class="flex w-full h-[50px] bg-[#DFFFC6] text-lg rounded-xl my-auto">
            <div class="flex w-[50px] justify-center text-2xl font-medium items-center">
                <p>6</p>
            </div>
            <div class="flex w-3/5 justify-around my-auto">
                <p class="w-[150px]">Alessia</p>
                <p class="w-[150px]">Tezza</p>
                <p class="w-[150px]">Completata</p>
            </div>
        </div>

        <div class="flex w-full h-[50px] bg-[#DFFFC6] text-lg rounded-xl my-auto">
            <div class="flex w-[50px] justify-center text-2xl font-medium items-center">
                <p>7</p>
            </div>
            <div class="flex w-3/5 justify-around my-auto">
                <p class="w-[150px]">Alessia</p>
                <p class="w-[150px]">Tezza</p>
                <p class="w-[150px]">Completata</p>
            </div>
        </div>

        <div class="flex w-full h-[50px] bg-[#DFFFC6] text-lg rounded-xl my-auto">
            <div class="flex w-[50px] justify-center text-2xl font-medium items-center">
                <p>8</p>
            </div>
            <div class="flex w-3/5 justify-around my-auto">
                <p class="w-[150px]">Alessia</p>
                <p class="w-[150px]">Tezza</p>
                <p class="w-[150px]">Completata</p>
            </div>
        </div>

        <div class="flex w-full h-[50px] bg-[#DFFFC6] text-lg rounded-xl my-auto">
            <div class="flex w-[50px] justify-center text-2xl font-medium items-center">
                <p>9</p>
            </div>
            <div class="flex w-3/5 justify-around my-auto">
                <p class="w-[150px]">Alessia</p>
                <p class="w-[150px]">Tezza</p>
                <p class="w-[150px]">Completata</p>
            </div>
        </div>

    </div>
@endsection
