@extends('user.layouts.template')

@section('content')

<div class="h-[15vh] text-5xl font-semibold w-full pl-10 text-white text-left flex items-center">
    Event Discovery
</div>

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

<div class="h-10 bg-[#161616] hidden lg:flex gap-8 justify-between items-center px-2 xl:px-10 w-full mb-8">
    <div class="font-semibold inline-flex items-center px-4 py-0.5 rounded-full border w-auto bg-transparent">
        <span class="text-white/80">Show on Map</span>
        <i data-lucide="compass" class="text-white/70 ml-1"></i>
    </div>

    <div class="max-w-2/3 h-full flex justify-end xl:justify-evenly items-center space-x-8">
        <div class="font-semibold inline-flex items-center px-4 py-0.5 rounded-full border w-auto bg-transparent">
            <span class="text-white/80">This Weekend</span>
            <i data-lucide="chevron-down" class="text-white/70 ml-1"></i>
        </div>
        <div class="font-semibold inline-flex items-center px-4 py-0.5 rounded-full border w-auto bg-transparent">
            <span class="text-white/80">Availability</span>
            <i data-lucide="chevron-down" class="text-white/70 ml-1"></i>
        </div>
        <div class="font-semibold inline-flex items-center px-4 py-0.5 rounded-full border w-auto bg-transparent">
            <span class="text-white/80">Price Range</span>
            <i data-lucide="chevron-down" class="text-white/70 ml-1"></i>
        </div>
        <div class="flex items-center space-x-6">
            <span class="text-white/80 ml-40">Sort by</span>
            <div class="font-bold inline-flex items-center px-4 py-0.5 rounded-full border w-auto bg-transparent">
                <span class="text-white/80">Recommended</span>
                <i data-lucide="chevron-down" class="text-white/70 ml-1"></i>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col lg:flex-row">

    <div class="w-full lg:w-auto">
        <div class="flex flex-col rounded-3xl h-full lg:w-[320px] ml-10 bg-[#161616] overflow-hidden">
            <div class="bg-[#e9ec3f] w-full h-10 flex justify-between items-center px-12">
                <div class="text-black space-y-1">
                    <p class="font-bold text-base">EVENEMENTS</p>
                </div>
            </div>
            <div>
                <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Concerts</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-transparent" style="transform: translateY(-50%); height: 1px;">
                </div>
                <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Performing & Visual Arts</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-transparent" style="transform: translateY(-50%); height: 1px;">
                </div>
                <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Cinema & Theatres</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-[#202020]" style="transform: translateY(-50%); height: 1px;">
                </div>
                <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Exhibitions</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-[#202020]" style="transform: translateY(-50%); height: 1px;">
                </div>
                <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Sports</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-[#202020]" style="transform: translateY(-50%); height: 1px;">
                </div>
                <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Festivals</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-[#202020]" style="transform: translateY(-50%); height: 1px;">
                </div>
                <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Fashion & Beauty</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-[#202020]" style="transform: translateY(-50%); height: 1px;">
                </div>
                <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Museums</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-[#202020]" style="transform: translateY(-50%); height: 1px;">
                </div>
                <div class="flex items-center space-x-2 px-3 py-8 relative">
                    <i data-lucide="square" class="text-white/70 w-4"></i>
                    <span class="flex-1 text-white/80">Business</span>
                    <i data-lucide="chevron-down" class="text-white/70 w-4"></i>
                    <hr class="absolute bottom-2 left-8 w-[80%] bg-[#202020]" style="transform: translateY(-50%); height: 1px;">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:ml-20">
        <div class="xl:px-28 w-full h-full mb-12">
            <div class="flex flex-col gap-6 lg:flex-row-reverse lg:gap-0 lg:rounded-3xl overflow-hidden mb-8">
                <div class="h-[310px] lg:h-[450px] w-full">
                    <img src={{ asset('image/img2.jpeg')}} alt="" class="w-full h-full object-cover">
                </div>
                <div class="w-full lg:w-[630px] rounded-3xl lg:rounded-none min-h-[300px] bg-[#232323] p-2 py-4 flex flex-col gap-2 ">
                    <div class="w-full flex flex-col justify-center items-center px-4 lg:items-start">
                        <span class="text-sm text-slate-50/70 font-semibold mb-2 self-start">13 mars 2025</span>
                        <p class="text-3xl text-white font-bold w-60">Jazz Party</p>
                    </div>
                    <div class="flex flex-col gap-4 items-center p-4 font-semibold flex-grow">
                        <p class="text-center text-white/90 lg:text-start">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat?
                            Harum magnam reprehenderit quam a, architecto placeat?
                        </p>

                    </div>
                    <div class="w-full flex space-x-40 mt-auto">
                        <button  class="bg-[#d6f260] px-10 py-2 rounded-full hover:bg-[#d6f260]/80 font-bold">Read More</button>
                        <i data-lucide="circle-arrow-out-up-right" class="size-8 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6 lg:flex-row-reverse lg:gap-0 lg:rounded-3xl overflow-hidden mb-8">
                <div class="h-[310px] lg:h-[450px] w-full">
                    <img src={{ asset('image/img1.jpeg')}} alt="" class="w-full h-full object-cover">
                </div>
                <div class="w-full lg:w-[630px] rounded-3xl lg:rounded-none min-h-[300px] bg-[#232323] p-2 py-4 flex flex-col gap-2">
                    <div class="w-full flex flex-col justify-center items-center px-4 lg:items-start">
                        <span class="text-sm text-slate-50/70 font-semibold mb-2 self-start">13 mars 2025</span>
                        <p class="text-3xl text-white font-bold w-60">Jazz Party</p>
                    </div>
                    <div class="flex flex-col gap-4 items-center p-4 font-semibold flex-grow">
                        <p class="text-center text-white/90 lg:text-start">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat?
                            Harum magnam reprehenderit quam a, architecto placeat?
                        </p>
                       
                    </div>
                    <div class="w-full flex space-x-40 mt-auto">
                        <button  class="bg-[#d6f260] px-10 py-2 rounded-full hover:bg-[#d6f260]/80 font-bold">Read More</button>
                        <i data-lucide="circle-arrow-out-up-right" class="size-8 text-white"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
