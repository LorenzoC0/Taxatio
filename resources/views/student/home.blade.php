@extends('template')

@section('title')
    Home Studente | TAXATIO
@endsection

@section('body')
    <div class="w-screen h-screen bg-amber-100">
        <div class="flex flex-row h-16 px-3">
            <div class="flex items-end h-16 w-4/6">
                <p class="flex text-3xl mb-1">Ciao {{$student->name}}!</p>
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
        <div class="flex h-9 px-3">
            <p class="flex items-center">Ti sei loggato come studente PASCAL , dai un occhio alle valutazioni...
            </p>
        </div>
        <div class="flex flex-col mt-4">
            <div class="flex flex-row justify-between px-3">
                <p class="text-3xl">Da completare</p>
            </div>
            <div class="flex flex-row overflow-x-scroll">
                <div class="flex h-[350px] px-3">
                    <div class="flex flex-col h-[250px] w-[400px] bg-orange-300 rounded-[50px] my-auto">
                        <div class="flex items-center h-[80px] m-auto">
                            <p class="text-3xl">CLASSE PIXEL</p>
                        </div>
                        <div class="flex justify-between h-[80px] px-4 my-auto">
                            <p>aaaa</p>
                            <p>eeee</p>
                        </div>
                        <div class="inline-flex h-[90px] px-4">
                            <button
                                class="m-auto h-[50px] w-[160px] bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-xl">
                                VALUTA
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-between px-3">
                <p class="text-3xl px-3">Completate</p>
            </div>
        </div>
    @endsection
