@extends('user.layouts.template')

@section('content')
<div class="h-[50vh] text-6xl font-bold w-full text-white text-center flex justify-center items-center">
    Quelque chose pour le hero banner
</div>

<div class="h-20 bg-[#d6f260] flex gap-4 justify-between items-center p-8 xl:px-28 w-full mb-8">
    <div class="w-1/3 relative">
        <input type="text"
            class="border-none pr-6 bg-transparent font-semibold text-black/80 placeholder:text-black/70 placeholder:font-semibold h-[40px] outline-none w-full"
            placeholder="Rechercher">
        <i data-lucide="search" class="absolute top-[55%] -translate-y-1/2 right-1 size-4 text-black/70"></i>
    </div>
    <div class="max-w-2/3 h-full flex justify-end xl:justify-evenly items-center">
        <div class="relative hidden xl:block">
            <input type="text" placeholder="Date" name="text" id=""
                class="outline-none border-none placeholder:text-black/80 placeholder:font-bold text-black/80 bg-transparent pl-10 w-full h-[35px]">
            <i data-lucide="calendar" class="absolute top-[18%] left-2 text-black/70"></i>
        </div>
        <div class="relative hidden xl:block ">
            <input type="text" placeholder="Localisation" name="text" id=""
                class="outline-none border-none placeholder:text-black/80 placeholder:font-bold text-black/80 bg-transparent pl-10 w-full h-[35px]">
            <i data-lucide="map-pin" class="absolute top-[18%] left-2 text-black/70"></i>
        </div>
        <div class="relative hidden xl:block">
            <input type="text" placeholder="Type d'évènement" name="text" id=""
                class="outline-none border-none placeholder:text-black/80 placeholder:font-bold text-black/80 bg-transparent pl-10 w-full h-[35px]">
            <i data-lucide="grip-vertical" class="absolute top-[18%] left-2 text-black/70"></i>
        </div>
        <button class="text-black font-bold min-w-[120px] px-4 py-2 rounded-full bg-blue-400">Rechercher</button>
    </div>

</div>
<div class=" p-8 xl:px-28 mb-12">
    <h2 class="font-bold text-4xl xl:text-5xl text-white my-20">Evènements à venir</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10  mb-8">
        <div class="flex flex-col rounded-3xl h-[300px] w-full bg-green-400 overflow-hidden">
            <div class="h-[75%]">
                <img src={{ asset('image/img4.jpeg')}} alt="" class="w-full h-full object-cover">
            </div>
            <div class="bg-[#222] w-full h-[25%] flex justify-between items-center px-12">
                <div class="text-white space-y-1">
                    <p class="font-bold text-base">Local art Fair</p>
                    <p class=" flex  text-xs font-semibold gap-2">
                        <i data-lucide="calendar" class="size-4"></i>
                        February 25, 2024
                    </p>
                </div>
                <div>
                    <i data-lucide="circle-arrow-out-up-right" class="size-8 text-white"></i>
                </div>
            </div>
        </div>


    </div>

    <div class="w-full px-8 xl:px-28 flex justify-center xl:justify-end">
        <p class="text-white underline transition-all cursor-pointer">Voir tout</p>
    </div>
</div>

<div class="px-8 xl:px-28 mb-8">
    <div class="flex flex-col gap-6 lg:flex-row-reverse lg:gap-0 lg:rounded-3xl overflow-hidden">
        <div class="h-[310px] lg:h-[450px] w-full">
            <img src={{ asset('image/img4.jpeg')}} alt="" class="w-full h-full object-cover">
        </div>
        <div
            class="w-full lg:w-[630px] rounded-3xl lg:rounded-none min-h-[300px] bg-[#232323] p-2 py-4 flex flex-col gap-2">
            <div class="w-full flex flex-col justify-center items-center px-4 lg:items-start">
                <span class="text-sm text-slate-50/70 font-semibold mb-2 self-start">Evènements en vedette</span>
                <p class="text-3xl text-white font-bold w-60">Jazz Nights by the River</p>
            </div>
            <div class="flex flex-col gap-4 items-center p-4 font-semibold">
                <p class="text-center text-white/90 lg:text-start">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat?
                    Harum magnam reprehenderit quam a, architecto placeat?
                </p>
                <p class="text-center text-white/90 lg:text-start">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus mollitia quod illo hic dolorem,
                    voluptates inventore voluptas nulla.
                </p>
            </div>
            <div class="w-full flex justify-center items-center p-4">
                <button class="bg-[#d6f260] px-12 py-2 rounded-full hover:bg-[#d6f260]/80 font-bold">Read More</button>
            </div>
        </div>
    </div>

</div>

<div class="px-8 xl:px-28 mb-8 bg-[#232323] py-4">
    <div class="flex flex-col gap-6 mb-8">
        <h1 class="text-4xl text-white">Rendons-le
            <span class="px-4 py-1 rounded-full text-3xl font-semibold text-[#232323] bg-[#d6f260]">
                personnel
            </span>
        </h1>
        <p class="text-slate-50/60 text-lg">Sélectionnez vos centres d'intérêt pour obtenir des suggestions d'événements en fonction de ce que vous aimez</p>
    </div>
    <div class="w-full">

        <form action="" class="flex flex-wrap gap-2 min-h-[150px]">
            <div>
                <input type="checkbox" name="" id="chk1" class="hidden peer">
                <label for="chk1"
                    class="bg-white min-w-[100px] p-2 rounded-full font-bold cursor-pointer peer-checked:bg-[#d6f260]">
                    Comedie </label>
            </div>
            <div>
                <input type="checkbox" name="" id="chk2" class="hidden peer">
                <label for="chk2"
                    class="bg-white min-w-[100px] p-2 rounded-full font-bold cursor-pointer peer-checked:bg-[#d6f260]">
                    Théatre </label>
            </div>
            <div>
                <input type="checkbox" name="" id="chk3" class="hidden peer">
                <label for="chk3"
                    class="bg-white min-w-[100px] p-2 rounded-full font-bold cursor-pointer peer-checked:bg-[#d6f260]">
                    Gala </label>
            </div>
            <div>
                <input type="checkbox" name="" id="chk4" class="hidden peer">
                <label for="chk4"
                    class="bg-white min-w-[100px] p-2 rounded-full font-bold cursor-pointer peer-checked:bg-[#d6f260]">
                    Formation universitaire </label>
            </div>
            <div>
                <input type="checkbox" name="" id="chk5" class="hidden peer">
                <label for="chk5"
                    class="bg-white min-w-[100px] p-2 rounded-full font-bold cursor-pointer peer-checked:bg-[#d6f260]">
                    Bal </label>
            </div>
        </form>

    </div>
</div>

<div class="w-full flex justify-center items-center min-h-[700px] relative bg-[#181818]">

    <div class="flex flex-col gap-6 justify-center items-center">
        <span class="text-white/70 text-base font-semibold">#Evènements</span>

        <h1 class="text-center font-bold text-4xl text-white xl:text-5xl xl:w-[600px]">Catégories d'évènements</h1>

        <button class="px-28 py-2 font-semibold text-2xl bg-violet-400/90  rounded-full">Parcourir!</button>
    </div>

    <div class="absolute w-full h-48 top-[40px] flex justify-center">
        <div class="h-24 w-24 sm:w-36 sm:h-36 xl:w-48 xl:h-48 rounded-full bg-yellow-200 overflow-hidden">
            <img src={{ asset('image/img4.jpeg')}} alt="" class="w-full h-full object-cover">
        </div>
    </div>
    <div
        class="absolute w-full h-48 top-[120px]  flex justify-between px-10 sm:px-[100px] xl:px-[210px] xl:top-[180px]">
        <div class="h-24 w-24 sm:w-36 sm:h-36 xl:w-48 xl:h-48 rounded-full bg-yellow-200 overflow-hidden">
            <img src={{ asset('image/avatar2.jpg')}} alt="" class="w-full h-full object-cover">
        </div>
        <div class="h-24 w-24 sm:w-36 sm:h-36 xl:w-48 xl:h-48 rounded-full bg-yellow-200 overflow-hidden">
            <img src={{ asset('image/avatar3.jpg')}} alt="" class="w-full h-full object-cover">
        </div>
    </div>

    <div
        class="absolute w-full h-48 bottom-[30px] xl:bottom-[45px] flex justify-between px-16 sm:px-[160px] xl:px-[350px]">
        <div class="h-24 w-24 sm:w-36 sm:h-36 xl:w-48 xl:h-48 rounded-full bg-yellow-200 overflow-hidden">
            <img src={{ asset('image/avatar1.jpg')}} alt="" class="w-full h-full object-cover">
        </div>
        <div class="h-24 w-24 sm:w-36 sm:h-36 xl:w-48 xl:h-48 rounded-full bg-yellow-200 overflow-hidden">
            <img src={{ asset('image/avatar2.jpg')}} alt="" class="w-full h-full object-cover">
        </div>
    </div>

</div>

<div class="w-full h-[80vh] flex flex-col items-center justify-center gap-16 bg-[#232323] ">
    <h1 class="text-4xl text-white font-bold">Les commentaires en rapport avec les évènements...</h1>
    <div class="w-full flex flex-nowrap items-center pl-28 gap-4 overflow-x-scroll scrollbar-none">
        <div
            class="bg-violet-300 w-[400px] h-[200px] min-w-[400px] rounded-[36px] flex flex-col justify-between px-8 py-10">
            <span class="text-4xl h-[16px] ">"</span>

            <p class=" font-light text-xs">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Dolore, perspiciatis nihil laboriosam qui rem officiis a.
            </p>

            <span class="text-xs">-Mia K.</span>

        </div>
        <div
            class="bg-yellow-100 w-[400px] h-[200px] min-w-[400px] rounded-[36px] flex flex-col justify-between px-8 py-10">
            <span class="text-4xl h-[16px] ">"</span>

            <p class=" font-light text-xs">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Dolore, perspiciatis nihil laboriosam qui rem officiis a.
            </p>

            <span class="text-xs">-Mia K.</span>

        </div>
        <div
            class="bg-green-100 w-[400px] h-[200px] min-w-[400px] rounded-[36px] flex flex-col justify-between px-8 py-10">
            <span class="text-4xl h-[16px] ">"</span>

            <p class=" font-light text-xs">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Dolore, perspiciatis nihil laboriosam qui rem officiis a.
            </p>

            <span class="text-xs">-Mia K.</span>

        </div>
        <div
            class="bg-violet-300 w-[400px] h-[200px] min-w-[400px] rounded-[36px] flex flex-col justify-between px-8 py-10">
            <span class="text-4xl h-[16px] ">"</span>

            <p class=" font-light text-xs">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Dolore, perspiciatis nihil laboriosam qui rem officiis a.
            </p>

            <span class="text-xs">-Mia K.</span>

        </div>
        <div
            class="bg-red-100 w-[400px] h-[200px] min-w-[400px] rounded-[36px] flex flex-col justify-between px-8 py-10">
            <span class="text-4xl h-[16px] ">"</span>

            <p class=" font-light text-xs">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Dolore, perspiciatis nihil laboriosam qui rem officiis a.
            </p>

            <span class="text-xs">-Mia K.</span>

        </div>
    </div>
</div>

<div class="px-8 xl:px-28 py-8 flex flex-col gap-8">
    <h1 class=" text-2xl lg:text-4xl text-white font-bold font-poppins">Opportunités de partenariat .</h1>
    {{-- <h1 class="text-4xl text-white font-bold font-inter">Partnership Opportunities .</h1> --}}
    <div class="w-full grid grid-cols-1 xl:grid-cols-2">
        <div class="flex flex-col gap-8">
            <div class="flex flex-col justify-center w-[280px] gap-4 ml-24 xl:ml-52">
                <div class="flex justify-center">
                    <div class="h-[90px] w-[130px] rounded-3xl bg-violet-300 overflow-hidden">
                        <img src={{ asset('image/avatar3.jpg')}} alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="h-[90px] w-[130px] rounded-3xl bg-yellow-100 overflow-hidden">
                        <img src={{ asset('image/avatar2.jpg')}} alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="h-[90px] w-[130px] rounded-3xl bg-green-100 overflow-hidden">
                        <img src={{ asset('image/avatar1.jpg')}} alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="h-[90px] w-[130px] rounded-3xl bg-red-100 overflow-hidden">
                        <img src={{ asset('image/avatar3.jpg')}} alt="" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-evenly items-center h-[100px] gap-4">
                <button class="px-4 xl:px-8 py-2 rounded-full border border-white/70 bg-transparent text-white font-bold">Créer votre évènement</button>
                <button
                    class="px-8 py-2 rounded-full border border-white/70 bg-violet-300 text-[#111111] font-bold">Devenir un partenaire</button>
            </div>
        </div>
        <div class="flex items-end justify-center text-white py-8">
            des choses bizarres en bas là
        </div>
    </div>

</div>

@endsection
