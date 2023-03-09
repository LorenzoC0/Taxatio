@extends('template')

@section('title')
    Valutazione docente | TAXATIO
@endsection

@section('body')
<div class="w-screen h-screen bg-[#FBFFE4]">
    <div class="flex flex-row h-40 px-3">
        <div class="flex items-end h-16 w-4/6">
            <p class="flex text-2xl mb-1 font-semibold">CRITERI DI VALUTAZIONE</p>
        </div>
        <div class="flex items-end justify-end h-16 w-2/6">

        </div>
    </div>

    <div class="flex  px-5 mt-8 h-40">
        <div class="flex flex-col  justify-around w-3/6">
            <div class="font-medium text-[24px]">Chiarezza espositiva* </div>
            <div class="mx-2 my-3">
                <select name="work_days" id="id_work_days" multiple class="w-full h-20 text-[36px]">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                  </select>
            </div>

        </div>
        <div class="flex flex-col w-3/6">
            <div class="font-medium text-[24px] h-auto w-auto">Competenza* </div>
            <div class="mx-2  p-5 bg-[#BEFFE7] rounded-[25px] ">
                <div class="w-full flex flex-row justify-between my-2  text-[24px] font-medium"><p>1</p><p>2</p><p>3</p><p>4</p><p>5</p><p>6</p><p>7</p></div>
                <input id="minmax-range" type="range" min="1" max="7" value="1" class="w-full h-3 bg-[#67EBCB] rounded-lg appearance-none cursor-pointer text-[#FFFFFF] dark:bg-[#67EBCB]">
            </div>
        </div>

        
    </div>
    <div class="flex  px-5 mt-8">
        <div class="flex flex-col  justify-around w-3/6 h-15">
            <div class="font-medium text-[24px]">Chiarezza espositiva* </div>
            <div class="mx-2 my-3">
                <select name="work_days" id="id_work_days" multiple class="w-full text-[36px]">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                  </select>
            </div>

        </div>
        <div class="flex flex-col w-3/6">
            <div class="font-medium text-[24px] h-auto w-auto">Livello Approfondimento* </div>
            <div class="mx-2  p-5 bg-[#BEFFE7] rounded-[25px]">
                <div class="w-full flex flex-row justify-between my-2  text-[24px] font-medium"><p>1</p><p>2</p><p>3</p><p>4</p><p>5</p><p>6</p><p>7</p></div>
                <input id="minmax-range" type="range" min="1" max="7" value="1" class="w-full h-3 bg-[#67EBCB] rounded-lg appearance-none cursor-pointer text-[#FFFFFF] dark:bg-[#67EBCB]">
            </div>
        </div>

        
    </div>
    
    

</div>
@endsection
<style>
    #id_work_days{
     
     overflow: hidden; 
     background-color: transparent;
   }
   #id_work_days::-moz-focus-inner {
     border: 0;
   }
   #id_work_days:focus {
     outline: none;
   }
   #id_work_days option{
     font-size: 1.2em;
     background-color: #BEFFE7;
     font-weight: 500; 
     padding: 10px 20px; 
     text-align: center;
     margin-right: 20px;
     display: inline-block;
     cursor: pointer;
    
     border-radius: 40%;
     color: black
   }
   /* option:focus{
    background-color: #67EBCB;
    color: black;
   } */
   #id_work_days option:checked{
    background-color: #67EBCB;
    color: black;
   }
   #id_work_days option:hover{
    background-color: #67EBCB;

   }
   </style>