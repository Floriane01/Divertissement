@extends('user.layouts.template')

@section('content')
<div class="h-[50vh] text-6xl font-bold w-full text-white flex justify-center items-center">
    Quelque chose pour le hero banner
</div>

<div class="h-20 bg-yellow-300 flex gap-4 justify-between items-center px-28 w-full mb-8">
    <div class="w-1/3 relative">
        <input type="text"
            class="border-none bg-transparent font-semibold text-black/80 placeholder:text-black/70 placeholder:font-semibold h-[35px] outline-none w-full"
            placeholder="Search by name or type">
        <i data-lucide="search" class="absolute top-[25%] right-2 text-black/70"></i>
    </div>
    <div class="w-1/2 h-full flex justify-evenly items-center">
        <div class="relative ">
            <input type="text" placeholder="Date" name="text" id=""
                class="outline-none border-none placeholder:text-black/80 placeholder:font-bold text-black/80 bg-transparent pl-10 w-full h-[35px]">
            <i data-lucide="calendar" class="absolute top-[18%] left-2 text-black/70"></i>
        </div>
        <div class="relative ">
            <input type="text" placeholder="Location" name="text" id=""
                class="outline-none border-none placeholder:text-black/80 placeholder:font-bold text-black/80 bg-transparent pl-10 w-full h-[35px]">
            <i data-lucide="map-pin" class="absolute top-[18%] left-2 text-black/70"></i>
        </div>
        <div class="relative">
            <input type="text" placeholder="Type of Event" name="text" id=""
                class="outline-none border-none placeholder:text-black/80 placeholder:font-bold text-black/80 bg-transparent pl-10 w-full h-[35px]">
            <i data-lucide="grip-vertical" class="absolute top-[18%] left-2 text-black/70"></i>
        </div>
        <button class="text-black font-bold min-w-[120px] px-4 py-2 rounded-full bg-blue-400">Search</button>
    </div>
    
</div>
<div class="">
    <h2 class="font-bold text-5xl text-white my-20 ml-28">Upcoming Events</h2>
    <div class="grid grid-cols-3 gap-10 px-28 mb-8">
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
        <div class="flex flex-col rounded-3xl h-[300px] w-full bg-green-400 overflow-hidden">
            <div class="h-[75%]">
                <img src={{ asset('image/img2.jpeg')}} alt="" class="w-full h-full object-cover">
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
        <div class="flex flex-col rounded-3xl h-[300px] w-full bg-green-400 overflow-hidden">
            <div class="h-[75%]">
                <img src={{ asset('image/img5.jpeg')}} alt="" class="w-full h-full object-cover">
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
        <div class="flex flex-col rounded-3xl h-[300px] w-full bg-green-400 overflow-hidden">
            <div class="h-[75%]">
                <img src={{ asset('image/img2.jpeg')}} alt="" class="w-full h-full object-cover">
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
        <div class="flex flex-col rounded-3xl h-[300px] w-full bg-green-400 overflow-hidden">
            <div class="h-[75%]">
                <img src={{ asset('image/img3.jpeg')}} alt="" class="w-full h-full object-cover">
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
        <div class="flex flex-col rounded-3xl h-[300px] w-full bg-green-400 overflow-hidden">
            <div class="h-[75%]">
                <img src={{ asset('image/img1.jpeg')}} alt="" class="w-full h-full object-cover">
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
</div>

@endsection