<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-blue-600 w-full py-3 shadow-lg text-white mb-4 ">
        <div class="container mx-auto text-center">
            <h1 class="text-xl font-bold">Hello </h1>
        </div>
    </nav>
<section class=" flex flex-row gap-8 h-fit justify-self-center">
<div class="justify-self-center flex flex-col gap-4  h-fit  ">
            <div class="h-1/6  shadow-md shadow-black  rounded-[360px] flex flex-row justify-center items-center gap-8 space-x-2 p-2">
                <button>
                    <div class="w-10 h-10 border-2px bg-black rounded-full  flex items-center justify-center "
                        id="to_do_cercle">

                    </div>
                </button>
                <span class="text-3xl p-4">À faire</span>
            </div>
            <div class="w-full shadow-md shadow-black border-cyan-100 rounded-[39px] h-fit to_do_content">
            </div>


        </div>
        </div>
        <div class=" justify-self-center flex flex-col gap-4 h-fit">
            <div class="h-1/6  shadow-md shadow-black  rounded-[360px] flex flex-row justify-center items-center gap-8 space-x-2 p-2">
                <button>
                    <div class="w-10 h-10 border-2px bg-black rounded-full  flex items-center justify-center ">
                    </div>
                </button>
                <span class="text-3xl p-4">En cours</span>
            </div>
            <div class="w-full shadow-md shadow-black border-cyan-100 rounded-[39px] doing">
            </div>

        </div>
        <div class="justify-self-center flex flex-col gap-4 h-fit ">
            <div class="h-1/6  shadow-md shadow-black  rounded-[360px] flex flex-row justify-center items-center gap-8 space-x-2 p-2">
                <button>
                    <div class="w-10 h-10 border-2px bg-black rounded-full  flex items-center justify-center">
                    </div>
                </button>
                <span class="text-3xl p-4">Terminé</span>
            </div>
            <div class="w-full shadow-md shadow-black border-cyan-100 rounded-[39px] done">

            </div>
        </div>
        </section>
</body>
</html>