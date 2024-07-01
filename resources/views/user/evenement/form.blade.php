@extends('user.layouts.template')

@section('content')

<div class="h-[15vh] text-5xl font-semibold w-full pl-10 text-white text-left flex items-center">
    Créer un évènement
</div>

<div class="flex flex-col lg:flex-row px-4 lg:px-20">

    <div class="w-full lg:w-2/3 mx-auto">
        <div class="xl:px-10 w-full mb-6">
            <div class="flex flex-col lg:flex-row gap-6 py-10">
                <div class="flex-1 bg-gray-300 rounded-3xl mb-4 flex justify-center items-center">
                    <p class="font-bold mt-10">
                        <i data-lucide="plus" class="text-black w-32"></i>
                        Ajouter image
                    </p>
                </div>
                <div class="flex-1 rounded-3xl overflow-hidden mb-4">
                    <img src={{ asset('image/img1.jpeg') }} alt="" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-6">
                <div class="flex-1 rounded-3xl overflow-hidden mb-8">
                    <img src={{ asset('image/img5.jpeg') }} alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 rounded-3xl overflow-hidden mb-8">
                    <img src={{ asset('image/img3.jpeg') }} alt="" class="w-full h-full object-cover">
                </div>
            </div>

            <form action="" class="flex flex-col gap-4">
                <div class="flex flex-col pb-4">
                    <label for="title" class="text-white px-2 py-2">
                        Nom de l'évènement
                    </label>
                    {{-- <p class="text-white/80 px-2 py-2">
                        Give a description headline.
                    </p> --}}
                    <input type="text" id="title" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full lg:w-[800px] pt-50">
                </div>

                <div class="flex flex-col pb-4">
                    <label for="category" class="text-white px-2 py-2">
                        Thème de l'évènement
                    </label>
                    <div class="relative w-full lg:w-[800px]">
                        <input type="text" id="category" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                        {{-- <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i> --}}
                    </div>
                </div>
                <div class="flex flex-col pb-4">
                    <label for="country" class="text-white px-2 py-2">
                        Lieu de l'évènement
                    </label>
                    <div class="relative w-full lg:w-[800px]">
                        <input type="text" id="country" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                        {{-- <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i> --}}
                    </div>
                </div>
                <div class="flex flex-col pb-4">
                    <label for="city" class="text-white px-2 py-2">
                        Date de l'évènement
                    </label>
                    <div class="relative w-full lg:w-[800px]">
                        <input type="text" id="city" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                        <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i>
                    </div>
                </div>
                <div class="flex flex-col pb-4">
                    <label for="description" class="text-white px-2 py-2">
                        Description
                    </label>
                    {{-- <p class="text-white/80 px-2 py-2">
                        Give a description headline.
                    </p> --}}
                    <input type="text" id="description" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-52 w-full lg:w-[800px] pt-50 pl-2">
                </div>
                {{-- <div class="flex flex-col pb-4">
                    <label for="org-details" class="text-white px-2 py-2">
                        Organizational detail
                    </label>
                    <p class="text-white/80 px-2 py-2">
                        Give a description headline.
                    </p>
                    <input type="text" id="org-details" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-40 w-full lg:w-[800px] pt-50 pl-2">
                </div> --}}
                <div class="flex flex-col pb-4 space-y-4">
                    <label for="conditionals" class="text-white px-2 py-4 font-bold">
                        Date et Heure
                    </label>
                    <div class="flex flex-row items-center space-x-4">
                        <label for="language" class="text-white w-40 py-4 px-2 ">
                            Informations
                        </label>
                        <div class="relative w-[620px]">
                            <input type="text" id="language" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                            <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i>
                        </div>
                    </div>
                    <div class="flex flex-row items-center space-x-4">
                        <label for="duration" class="text-white w-40 py-2 px-2">
                            Heure de début
                        </label>
                        <div class="relative w-[620px]">
                            <input type="text" id="duration" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                            <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i>
                        </div>
                    </div>
                    <div class="flex flex-row items-center space-x-4">
                        <label for="participants" class="text-white w-40 py-2 px-2">
                            Nombre de places disponible
                        </label>
                        <div class="relative w-[620px]">
                            <input type="text" id="participants" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                            <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i>
                        </div>
                    </div>
                    <div class="flex flex-row items-center space-x-4">
                        <label for="transportation" class="text-white w-40 py-2 px-2">
                            Date limite d'inscription
                        </label>
                        <div class="relative w-[620px]">
                            <input type="text" id="transportation" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                            <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i>
                        </div>
                    </div>
                </div>
                {{-- <div class="flex flex-col pb-4 space-y-4">
                    <label for="schedule" class="text-white px-2 py-4 font-bold">
                        Schedule and Start Time
                    </label>
                    <div class="flex flex-col space-y-4">
                        @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                        <div class="relative w-full lg:w-[800px] pb-4">
                            <div class="flex flex-row justify-between items-center">
                                <span class="flex-1 text-white/80">{{ $day }}</span>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="plus" class="text-white/70 w-4"></i>
                                    <p class="text-white/80">Add Time</p>
                                </div>
                            </div>
                            <hr class="absolute top-8 w-full bg-transparent" style="transform: translateY(-50%); height: 1px;">
                        </div>
                        @endforeach
                    </div>
                </div> --}}
                {{-- <div class="flex flex-col pb-4 space-y-4">
                    <label for="" class="text-white px-2 py-4 font-bold">
                        Confirmation an order
                    </label>
                    <div class="flex flex-col items-start space-y-1">
                        <div class="flex items-center space-x-2">
                            <input type="radio" class="hidden peer">
                            <label for="" class="flex items-center space-x-2 cursor-pointer text-white gap-2">
                                <span class="w-4 h-4 border border-white rounded-full flex items-center justify-center peer-checked:bg-purple-600">
                                    <span class="w-2 h-2 bg-transparent rounded-full peer-checked:bg-white"></span>
                                </span>
                                    Manual order confirmation
                            </label>
                        </div>
                        <p class="text-white" id="confirmYesText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class="flex flex-col items-start space-y-1">
                        <div class="flex items-center space-x-2">
                            <input type="radio" class="hidden peer">
                            <label for="" class="flex items-center space-x-2 cursor-pointer text-white gap-2">
                                <span class="w-4 h-4 border border-white rounded-full flex items-center justify-center peer-checked:bg-purple-600">
                                    <span class="w-2 h-2 bg-transparent rounded-full peer-checked:bg-white"></span>
                                </span>
                                    Instant booking
                            </label>
                        </div>
                        <p class="text-white" id="confirmNoText">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div> --}}
                <div class="flex flex-col pb-4 space-y-4">
                    <label for="" class="text-white px-2 py-4 font-bold">
                        Adapter c'est encore plus compliqué que créer les pages quoi
                    </label>
                    <div class="flex flex-row items-center space-x-4 space-y-4">
                        <label for="" class="text-white w-40 py-4 px-2 ">
                            Organisateurs
                        </label>
                        <div class="relative w-[620px]">
                            <input type="text" placeholder="Rejoindre les organisateurs" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                            <i data-lucide="dollar-sign" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i>
                        </div>
                    </div>
                    <div class="flex flex-row items-center space-x-4 space-y-4">
                        <label for="" class="text-white w-40 py-2 px-2">
                            Sponsors
                        </label>
                        <div class="relative w-[620px]">
                            <input type="text" placeholder="Ajouter sponsor" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                            <i data-lucide="chevron-down" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-white/70"></i>
                        </div>
                    </div>
                    {{-- <div class="flex flex-row items-center space-x-4 space-y-4 ">
                        <label for="" class="text-transparent w-40 py-2 px-2">
                            Discount
                        </label>
                        <div class="relative w-[620px]">
                            <input type="text" placeholder="Enter code"  class="border-[1px] border-white/70 bg-transparent rounded-3xl h-10 w-full pl-4 pr-10">
                        </div>
                    </div> --}}

                </div>
                <div class="flex flex-col pb-4">
                    <label for="" class="text-white px-2 py-2">
                        A propos de vous
                    </label>
                    <p class="text-white/80 px-2 py-2">
                        Give a description headline.
                    </p>
                    <input type="text" id="description" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-52 w-full lg:w-[800px] pt-50 pl-2">
                </div>
                <div class="flex space-x-4 w-full ">
                    <button class="bg-[#e9ec3f] text-black font-bold py-2 px-4 rounded-full w-[50%]">
                        Annuler
                    </button>
                    <button class="bg-purple-400 text-black font-bold py-2 px-4 rounded-full w-[50%]">
                        Soumettre
                    </button>
                </div>




            </form>

        </div>


    </div>



    <div class="w-full lg:w-auto lg:pl-3">
        <div class="flex flex-col rounded-3xl lg:w-[350px] lg:ml-4 bg-[#161616] overflow-hidden">
            <div class="bg-purple-500 w-full h-10 flex justify-between items-center px-12">
                <div class="text-white space-y-1">
                    <p class="font-bold text-base">Manager</p>
                </div>
            </div>
            <div>
                <div class="flex flex-col space-y-2 px-3 py-12">
                    <div class="flex items-center space-x-2 relative">
                        <i data-lucide="square" class="text-white/70 w-4"></i>
                        <span class="flex-1 text-white/80 py-2">Events List</span>
                        <hr class="absolute top-10 left-4 w-[80%] h-0.5 bg-slate-900" style="transform: translateY(-50%); height: 1px;">
                    </div>
                    <div class="flex items-center space-x-2 relative">
                        <i data-lucide="square" class="text-white/70 w-4"></i>
                        <span class="flex-1 text-white/80 py-2">Messages</span>
                        <hr class="absolute top-10 left-4 w-[80%] bg-slate-900" style="transform: translateY(-50%); height: 1px;">
                    </div>
                    <div class="flex items-center space-x-2 relative">
                        <i data-lucide="square" class="text-white/70 w-4"></i>
                        <span class="flex-1 text-white/80 py-2">Orders</span>
                        <hr class="absolute top-10 left-4 w-[80%] bg-slate-900" style="transform: translateY(-50%); height: 1px;">
                    </div>
                    <div class="flex items-center space-x-2 relative">
                        <i data-lucide="square" class="text-white/70 w-4"></i>
                        <span class="flex-1 text-white/80 py-2">Marketing</span>
                        <hr class="absolute top-10 left-4 w-[80%] bg-slate-900" style="transform: translateY(-50%); height: 1px;">
                    </div>
                    <div class="flex items-center space-x-2 relative">
                        <i data-lucide="square" class="text-white/70 w-4"></i>
                        <span class="flex-1 text-white/80 py-2">Fiances</span>
                        <hr class="absolute top-10 left-4 w-[80%] bg-slate-900" style="transform: translateY(-50%); height: 1px;">
                    </div>
                    <div class="flex items-center space-x-2 relative">
                        <i data-lucide="square" class="text-white/70 w-4"></i>
                        <span class="flex-1 text-white/80 py-2">Stats</span>
                        <hr class="absolute top-10 left-4 w-[80%] bg-slate-900" style="transform: translateY(-50%); height: 1px;">
                    </div>
                    <div class="flex items-center space-x-2 relative">
                        <i data-lucide="square" class="text-white/70 w-4"></i>
                        <span class="flex-1 text-white/80 py-2">Settings</span>
                        <hr class="absolute top-10 left-4 w-[80%] bg-slate-900" style="transform: translateY(-50%); height: 1px;">
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
