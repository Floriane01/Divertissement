@extends('user.layouts.template')

@section('content')

<div class="h-[15vh] text-5xl font-semibold w-full pl-10 text-white text-left flex items-center">
    Acheter un ticket
    <hr>

    {{-- <p>
        Veuillez remplir les champs çi-dessous.
    </p> --}}
</div>

<div class="w-full lg:w-2/3 mx-auto">
    <div class="xl:px-10 w-full mb-6">

        <form action="" class="flex flex-col gap-4">

            {{-- <p class="text-white" >
                Veuillez remplir les champs çi dessous
            </p> --}}

            <div class="flex flex-col pb-4">
                <label for="title" class="text-white px-2 py-2">
                    Nom
                </label>

                <input type="text" id="title" class="border-[1px] text-white border-white/70 bg-transparent rounded-3xl h-10 w-full lg:w-[800px] pt-50">
            </div>

            <div class="flex flex-col pb-4">
                <label for="title" class="text-white px-2 py-2">
                    Prénom
                </label>

                <input type="text" id="title" class="border-[1px] text-white border-white/70 bg-transparent rounded-3xl h-10 w-full lg:w-[800px] pt-50">
            </div>

            <div class="flex flex-col pb-4">
                <label for="title" class="text-white px-2 py-2">
                    Adresse email
                </label>

                <input type="text" id="title" class="border-[1px] text-white border-white/70 bg-transparent rounded-3xl h-10 w-full lg:w-[800px] pt-50">
            </div>

            <div class="flex flex-col pb-4">
                <label for="city" class="text-white px-2 py-2">
                    Sexe
                </label>
                <div class="relative w-full lg:w-[800px]">
                    <input type="text" id="city" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                    <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i>
                </div>
            </div>

            <div class="flex flex-col pb-4">
                <label for="city" class="text-white px-2 py-2">
                    Type de ticket
                </label>
                <div class="relative w-full lg:w-[800px]">
                    <input type="text" id="city" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                    <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i>
                </div>
            </div>


            <div class="flex space-x-4 w-[50%]">
                <button class="bg-[#e9ec3f] text-black font-bold py-2 px-4 rounded-full w-[50%]">
                    Annuler
                </button>
                <button class="bg-purple-400 text-black font-bold py-2 px-4 rounded-full w-[50%]">
                    Ajouter
                </button>
            </div>




        </form>

    </div>
</div>

@endsection
