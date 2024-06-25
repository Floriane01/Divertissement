@extends('user.layouts.template')

@section('content')

<h1 class="text-4xl font-bold w-full px-8 xl:px-28 text-white mb-10">
    Event Discovery
</h1>

{{-- <div class="relative xl:hidden group">
    <div class="flex items-center justify-center p-0 text-white hover:bg-slate-50/20 rounded-full">
        <i data-lucide="menu"></i>
    </div>

    <div class="hidden absolute border border-[#232323] w-52 h-auto py-4 px-2 right-2 top-12 transition-all bg-[#232323f6] rounded-md group-hover:flex flex-col gap-2">
        <a href="#" class="text-white hover:bg-slate-50/20 p-1 rounded">Show on Map</a>
        <a href="#" class="text-white hover:bg-slate-50/20 p-1 rounded">This Weekend</a>
        <a href="#" class="text-white hover:bg-slate-50/20 p-1 rounded">Availability</a>
        <a href="#" class="text-white hover:bg-slate-50/20 p-1 rounded">Price Range</a>
        <a href="#" class="text-white hover:bg-slate-50/20 p-1 rounded">Recommended</a>
    </div>

</div> --}}

<div class="h-10 bg-[#161616] hidden lg:flex gap-8 justify-between items-center px-8 xl:px-28 w-full mb-8">
    <div class="font-semibold flex items-center gap-4 justify-evenly px-4 py-0.5 rounded-full border-[0.5px] bg-transparent">
        <span class="text-white/80 text-xs">Show on Map</span>
        <i data-lucide="compass" class="text-white/70 size-4"></i>
    </div>

    <div class="h-full flex justify-end xl:justify-evenly items-center space-x-8">
        <div class="font-semibold flex items-center gap-4 justify-evenly px-4 py-0.5 rounded-full border-[0.5px] bg-transparent">
            <span class="text-white/80 text-xs">This Weekend</span>
            <i data-lucide="chevron-down" class="text-white/70 ml-1"></i>
        </div>
        <div class="font-semibold flex items-center gap-4 justify-evenly px-4 py-0.5 rounded-full border-[0.5px] bg-transparent">
            <span class="text-white/80 text-xs">Availability</span>
            <i data-lucide="chevron-down" class="text-white/70 ml-1"></i>
        </div>
        <div class="font-semibold flex items-center gap-4 justify-evenly px-4 py-0.5 rounded-full border-[0.5px] bg-transparent">
            <span class="text-white/80 text-xs">Price Range</span>
            <i data-lucide="chevron-down" class="text-white/70 ml-1"></i>
        </div>
        <div class="flex items-center space-x-6">
            <span class="text-white/80 ml-40 text-xs">Sort by</span>
            <div class="font-semibold flex items-center gap-4 justify-evenly px-4 py-0.5 rounded-full border-[0.5px] bg-transparent">
                <span class="text-white/80 text-xs">Recommended</span>
                <i data-lucide="chevron-down" class="text-white/70 ml-1"></i>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-4 xl:gap-8 px-8 xl:px-28 relative ">

    <div class="w-full xl:col-span-1 lg:w-auto mb-8 xl:mb-0 flex justify-center  p-1 h-fit max-h-[700px] top-2 xl:sticky ">
        <div class="flex flex-col rounded-3xl w-full lg:w-[320px] bg-[#161616] overflow-hidden ">
            <div class="bg-[#d6f260] w-full h-12 flex justify-start items-center px-6">
                <p class="font-bold text-base">Evènements</p>
            </div>
            <div class=" pb-8">
                <div class="flex items-center gap-4 mx-6 py-3 relative border-b-[1px] border-white/30">
                    <input type="checkbox" name="" class="" id="">
                    <label for="" class="text-white">Comedy</label>
                </div>
                <div class="flex items-center gap-4 mx-6 py-3 relative border-b-[1px] border-white/30">
                    <input type="checkbox" name="" class="" id="">
                    <label for="" class="text-white">Concerts</label>
                </div>
                <div class="flex items-center gap-4 mx-6 py-3 relative border-b-[1px] border-white/30">
                    <input type="checkbox" name="" class="" id="">
                    <label for="" class="text-white">Exhibition</label>
                </div>
                <div class="flex items-center gap-4 mx-6 py-3 relative border-b-[1px] border-white/30">
                    <input type="checkbox" name="" class="" id="">
                    <label for="" class="text-white">Sport</label>
                </div>

                

                {{-- <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Performing & Visual Arts</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-transparent" style="transform: translateY(-50%); height: 1px;">
                </div> --}}
            </div>
        </div>
    </div>

    <div class="w-full col-span-3 p-1">
        <div class="w-full h-full mb-12">

            <div class="flex flex-col gap-6 lg:flex-row-reverse lg:gap-0 lg:rounded-3xl overflow-hidden mb-8 xl:h-[350px]">
                <div class="h-[310px] lg:h-[full] w-full">
                    <img src={{ asset('image/img2.jpeg')}} alt="" class="w-full h-full object-cover">
                </div>
                <div class="w-full lg:w-[630px] rounded-3xl lg:rounded-none min-h-[300px] bg-[#232323] p-2 py-4 flex flex-col gap-2 ">
                    <div class="w-full flex flex-col justify-center items-center px-4 lg:items-start">
                        <span class="text-xs text-slate-50/70 font-semibold mb-2 self-start">13 mars 2025</span>
                        <p class="text-2xl text-white font-bold w-60">Jazz Party</p>
                    </div>
                    <div class="flex flex-col gap-4 items-center p-4 font-semibold flex-grow">
                        <p class="text-center text-white/90 lg:text-start text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat?
                            Harum magnam reprehenderit quam a, architecto placeat?
                        </p>

                    </div>
                    <div class="w-full flex justify-between items-center px-4">
                        <button  class="bg-[#d6f260] px-6 py-1 rounded-full hover:bg-[#d6f260]/80 font-bold">Read More</button>
                        <i data-lucide="circle-arrow-out-up-right" class="size-6 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6 lg:flex-row-reverse lg:gap-0 lg:rounded-3xl overflow-hidden mb-8 xl:h-[350px]">
                <div class="h-[310px] lg:h-full w-full">
                    <img src={{ asset('image/img1.jpeg')}} alt="" class="w-full h-full object-cover">
                </div>
                <div class="w-full lg:w-[630px] rounded-3xl lg:rounded-none min-h-[300px] bg-[#232323] p-2 py-4 flex flex-col gap-2 ">
                    <div class="w-full flex flex-col justify-center items-center px-4 lg:items-start">
                        <span class="text-xs text-slate-50/70 font-semibold mb-2 self-start">13 mars 2025</span>
                        <p class="text-2xl text-white font-bold w-60">Jazz Party</p>
                    </div>
                    <div class="flex flex-col gap-4 items-center p-4 font-semibold flex-grow">
                        <p class="text-center text-white/90 lg:text-start text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat?
                            Harum magnam reprehenderit quam a, architecto placeat?
                        </p>

                    </div>
                    <div class="w-full flex justify-between items-center px-4">
                        <button  class="bg-[#d6f260] px-6 py-1 rounded-full hover:bg-[#d6f260]/80 font-bold">Read More</button>
                        <i data-lucide="circle-arrow-out-up-right" class="size-6 text-white"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
