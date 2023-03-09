@extends('template')

@section('title')
    Home Professore | TAXATIO
@endsection

@section('body')
    <div class="w-full h-full bg-amber-100 p-4">
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
                        <input type="search" class="h-8 w-64 rounded-2xl text-black my-1 px-8 border border-black">
                    </div>
                </form>
            </div>
        </div>
        <div class="flex h-9">
            <p class="flex items-center font-medium">Ti sei loggato come studente PASCAL , dai un occhio alle valutazioni...
            </p>
        </div>
        <div class="flex flex-row h-[150px] justify-center my-5 space-x-10">
            <div class="w-[400px] flex items-center justify-between bg-amber-200 rounded-[50px]">
                <div class="w-[200px] text-lg font-medium mx-5">
                    <p>La media delle tue valutazioni è:</p>
                </div>
                <div class="w-[100px] h-[100px] flex bg-orange-400 rounded-3xl mx-5">
                    <p class="text-4xl text-white font-medium m-auto">23</p>
                </div>
            </div>
            <div class="w-[400px] flex items-center justify-between bg-amber-200 rounded-[50px]">
                <div class="w-[200px] text-lg font-medium mx-5">
                    <p>Numero di classi del docente:</p>
                </div>
                <div class="w-[100px] h-[100px] flex bg-orange-400 rounded-3xl mx-5">
                    <p class="text-4xl text-white font-medium m-auto">23</p>
                </div>
            </div>
            <div class="w-[400px] flex items-center justify-between bg-amber-200 rounded-[50px]">
                <div class="w-[200px] text-lg font-medium mx-5">
                    <p>Numero alunni del docente:</p>
                </div>
                <div class="w-[100px] h-[100px] flex bg-orange-400 rounded-3xl mx-5">
                    <p class="text-4xl text-white font-medium m-auto">23</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex flex-row">
                <p class="text-2xl px-2">I tuoi commenti preferiti</p>
            </div>
            <div class="flex flex-row overflow-x-scroll space-x-5">
                <div class="flex h-[300px] px-2">
                    <div class="flex-row h-[250px] w-[400px] bg-white rounded-[50px] my-auto">
                        <div class="flex justify-around mt-4">
                            <p class="text-lg font-medium">studente 2021</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                            </p>
                        </div>
                        <div class="p-8">
                            <p> “ Lorem ipsum dolor sit amet consectetur. Cursus arcu facilisi nisl viverra ipsum leo. Sed
                                consectetur gravida egestas tellus est morbi.Sed consectetur gravida egestas tellus est
                                morbi. “</p>
                        </div>
                    </div>
                </div>
                <div class="flex h-[300px] px-2">
                    <div class="flex-row h-[250px] w-[400px] bg-white rounded-[50px] my-auto">
                        <div class="flex justify-around mt-4">
                            <p class="text-lg font-medium">studente 2021</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                            </p>
                        </div>
                        <div class="p-8">
                            <p> “ Lorem ipsum dolor sit amet consectetur. Cursus arcu facilisi nisl viverra ipsum leo. Sed
                                consectetur gravida egestas tellus est morbi.Sed consectetur gravida egestas tellus est
                                morbi. “</p>
                        </div>
                    </div>
                </div>
                <div class="flex h-[300px] px-2">
                    <div class="flex-row h-[250px] w-[400px] bg-white rounded-[50px] my-auto">
                        <div class="flex justify-around mt-4">
                            <p class="text-lg font-medium">studente 2021</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                            </p>
                        </div>
                        <div class="p-8">
                            <p> “ Lorem ipsum dolor sit amet consectetur. Cursus arcu facilisi nisl viverra ipsum leo. Sed
                                consectetur gravida egestas tellus est morbi.Sed consectetur gravida egestas tellus est
                                morbi. “</p>
                        </div>
                    </div>
                </div>
                <div class="flex h-[300px] px-2">
                    <div class="flex-row h-[250px] w-[400px] bg-white rounded-[50px] my-auto">
                        <div class="flex justify-around mt-4">
                            <p class="text-lg font-medium">studente 2021</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                            </p>
                        </div>
                        <div class="p-8">
                            <p> “ Lorem ipsum dolor sit amet consectetur. Cursus arcu facilisi nisl viverra ipsum leo. Sed
                                consectetur gravida egestas tellus est morbi.Sed consectetur gravida egestas tellus est
                                morbi. “</p>
                        </div>
                    </div>
                </div>
                <div class="flex h-[300px] px-2">
                    <div class="flex-row h-[250px] w-[400px] bg-white rounded-[50px] my-auto">
                        <div class="flex justify-around mt-4">
                            <p class="text-lg font-medium">studente 2021</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                            </p>
                        </div>
                        <div class="p-8">
                            <p> “ Lorem ipsum dolor sit amet consectetur. Cursus arcu facilisi nisl viverra ipsum leo. Sed
                                consectetur gravida egestas tellus est morbi.Sed consectetur gravida egestas tellus est
                                morbi. “</p>
                        </div>
                    </div>
                </div>
                <div class="flex h-[300px] px-2">
                    <div class="flex-row h-[250px] w-[400px] bg-white rounded-[50px] my-auto">
                        <div class="flex justify-around mt-4">
                            <p class="text-lg font-medium">studente 2021</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                            </p>
                        </div>
                        <div class="p-8">
                            <p> “ Lorem ipsum dolor sit amet consectetur. Cursus arcu facilisi nisl viverra ipsum leo. Sed
                                consectetur gravida egestas tellus est morbi.Sed consectetur gravida egestas tellus est
                                morbi. “</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex flex-row">
                <p class="text-2xl px-2">Le tue statistiche</p>
            </div>
        </div>
        <div class="rounded-lg w-1/2 overflow-hidden">
            <canvas class="p-10" id="chartBar"></canvas>
        </div>
    </div>
          
          <!-- Required chart.js -->
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          
          <!-- Chart bar -->
          <script>
            const labelsBarChart = [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
            ];

            const dataBarChart = {
              labels: labelsBarChart,
              datasets: [
                {
                  label: "Media",
                  backgroundColor: "hsl(252, 82.9%, 67.8%)",
                  borderColor: "hsl(252, 82.9%, 67.8%)",
                  data: [4.6, 6.2, 5, 8.78, 5.4, 7.1, 6.6],
                },
              ],
            };
          
            const configBarChart = {
              type: "bar",
              data: dataBarChart,
              options: {},
            };
          
            var chartBar = new Chart(
              document.getElementById("chartBar"),
              configBarChart
            );
          </script>
    @endsection
