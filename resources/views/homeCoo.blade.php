<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <div class="flex flex-row h-16 bg-blue-300">
        <div class="flex h-16 w-4/6">
            <p class="flex items-end text-3xl mb-1">Ciao _________!
            <p>
        </div>
        <div class="flex items-end h-16 w-2/6">
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
    <div class="flex bg-yellow-500 w-full h-9">
        <p class="flex items-center text-sm">Ti sei loggato come _______, dai un occhio allo stato delle valutazioni...
        </p>
    </div>
    <div class="flex flex-col">
        <div class="h-[550px] bg-red-400">
            <p class="text-2xl">Primo anno</p>

            <div class="flex flex-col h-[510px] w-[480px]">
                <div class="h-[170px] bg-blue-300">1</div>
                <div class="inline-flex h-[170px]">
                    <div class="bg-lime-400 w-[240px]">2</div>
                    <div class="bg-green-400 w-[240px]">3</div>
                </div>
                <div class="h-[170px] bg-gray-400">4</div>
            </div>

        </div>
        <div class="h-[550px] bg-green-200">
            <p class="text-2xl">Secondo anno</p>
        </div>
    </div>
</body>

</html>
