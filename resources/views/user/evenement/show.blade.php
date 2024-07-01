@extends('user.layouts.template')

@section('content')

<div class="h-[15vh] text-5xl font-semibold w-full pl-20 text-white text-left flex items-center">
    A la découverte de l'évènement
</div>

<div class="flex flex-col">
    <div class="px-4 sm:px-8 md:px-16 lg:px-28 mb-8 lg:ml-0 md:ml-0 ml-0">
        <div class="flex flex-col gap-6 lg:flex-row lg:gap-0 lg:rounded-3xl overflow-hidden lg:w-full">
            <div class="w-full lg:h-[450px]">
                <img src="{{ asset('image/img5.jpeg')}}" alt="" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row px-4 xl:px-28 lg:px-20 lg:space-x-8 mb-8 lg:ml-0 md:ml-0">
        <div class="w-full lg:w-[70%]">

            <div class="flex flex-col gap-6 mb-8">
                <div class="text-2xl font-semibold text-white">
                    A propos de l'évènement
                </div>
                <p class="text-white/90">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat? Harum magnam reprehenderit quam a, architecto placeat?
                </p>
                <p class="text-white/90">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat? Harum magnam reprehenderit quam a, architecto placeat?
                </p>
            </div>

            <div class="flex flex-col gap-6 mb-8">
                <div class="text-2xl font-semibold text-white">
                    Affiche de l'évènement
                </div>
            </div>

            <div class="flex flex-col gap-6 lg:flex-row-reverse lg:gap-0 lg:rounded-3xl overflow-hidden mb-8">
                <div class="h-[250px] w-full">
                    <img src="{{ asset('image/img2.jpeg')}}" alt="" class="w-full h-full object-cover">
                </div>
            </div>


            <div class="flex flex-col gap-6 mb-8">
                <div class="text-2xl font-semibold text-white">
                    Date et Heure de début
                </div>
                <span class="text-sm text-slate-50/70 font-semibold mb-2">13 mars 2025</span>
                <p class="text-white/90">
                    N'hésitez pas à nous rejoindre.
                </p>
            </div>

            <div class="flex flex-col gap-6 mb-8">
                <div class="text-2xl font-semibold text-white">
                    Localisation
                </div>
                <span class="text-sm text-slate-50/70 font-semibold mb-2">Cotonou</span>
                <p class="text-white/90">
                    Ce n'est pas bien perdu n'est ce pas !?
                </p>
            </div>

            <div class="flex flex-col gap-6 mb-8">
                <div class="text-2xl font-semibold text-white">
                    Les sponsors de l'évènement
                </div>
                <p class="text-white/90">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat? Harum magnam reprehenderit quam a, architecto placeat?
                </p>
            </div>

            {{-- <div class="flex flex-col gap-6 mb-8">
                <div class="text-2xl font-semibold text-white">
                    Amenities
                </div>
                <p class="text-white/90">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat? Harum magnam reprehenderit quam a, architecto placeat?
                </p>
            </div> --}}

            <div class="flex flex-col gap-6 mb-8">
                <div class="text-2xl font-semibold text-white">
                    Informations supplémentaires
                </div>
                <p class="text-white/90">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt nulla quasi repellat? Harum magnam reprehenderit quam a, architecto placeat?
                </p>
            </div>

            <div class="flex flex-col gap-6 mb-8">
                <div class="text-2xl font-semibold text-white">
                    Faire un commentaire
                </div>
                <div class="text-white/90 flex flex-col gap-8 ">
                    <input type="text" id="description" class="border-[1px] border-white/70 bg-transparent rounded-3xl h-52 w-full lg:w-[800px] pt-50 pl-2">
                    <button class="bg-purple-400 text-white font-bold py-2 px-4 rounded-full w-[50%]">
                        Soumettre
                    </button>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-auto lg:ml-auto">


            <div class="flex flex-col rounded-3xl bg-[#161616] overflow-hidden mb-8 w-full lg:w-[350px]">
                <div class="bg-[#e63fec] w-full h-10 flex justify-between items-center px-12">
                    <div class="text-black space-y-1">
                        <p class="font-bold text-base">Prix des tickets</p>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-center space-x-2 px-3 py-8 relative">
                        <div class="font-semibold inline-flex items-center px-4 py-0.5 mb-5 rounded-full border-black w-auto bg-transparent">
                            <span class="text-white/80">Entrée gratuite</span>
                        </div>
                        <div class="font-semibold inline-flex items-center px-4 py-0.5 mb-5 rounded-full border-black w-auto bg-yellow-300">
                            <span class="text-black/80">Voir les tickets</span>
                        </div>
                        <div class="font-semibold inline-flex items-center px-4 py-0.5 mb-5 rounded-full border-black w-auto bg-purple-400">
                            <span class="text-black/80">Acheter</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col rounded-3xl bg-[#161616] overflow-hidden mb-8 w-full lg:w-[350px] p-4">
                <div class="w-full flex items-center justify-between bg-[#161616] p-4">
                    <div class="flex items-center space-x-3">
                        <img src="image/img2.jpeg" alt="Logo" class="w-10 h-10 rounded-full">
                        <div>
                            <h3 class="text-white font-bold">Blue Moon Events</h3>
                            <div class="flex items-center space-x-1">
                                <span class="text-yellow-400">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                <span class="text-gray-400 text-sm">4.8 (189 reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex flex-col space-y-2 mb-4">
                        <i data-lucide="check-circle" class="text-green-400"></i>
                        <span class="text-white">Free Cancellation</span>
                        <p class="text-gray-400 text-sm">Cancel up to 24 hours in advance to receive a full refund</p>
                    </div>
                    <div class="flex flex-col space-y-2 mb-4">
                        <i data-lucide="file-text" class="text-blue-400"></i>
                        <span class="text-white">Free E - Tickets</span>
                        <p class="text-gray-400 text-sm">This event offers free, no-hassle, self-print or e-tickets</p>
                    </div>
                    <div class="flex flex-col space-y-2 mb-4">
                        <i data-lucide="gift" class="text-pink-400"></i>
                        <span class="text-white">Buy as a Gift</span>
                        <p class="text-gray-400 text-sm">This event is available as a branded gift e-voucher</p>
                    </div>
                    <div class="flex flex-col space-y-2 mb-4">
                        <i data-lucide="shield" class="text-purple-400"></i>
                        <span class="text-white">Guarantee</span>
                        <p class="text-gray-400 text-sm">100% secure booking process guaranteed</p>
                    </div>
                </div>
            </div>

            <div class="text-2xl font-semibold text-white mb-4">
                Localisation de l'évènement
            </div>

            <div class="flex flex-col rounded-3xl bg-[#161616] overflow-hidden mb-8 w-full lg:w-[350px] p-4">
                <div class="bg-[#e63fec] w-full h-10 flex justify-between items-center px-12">
                    <div class="text-black space-y-1">
                        <p class="font-bold text-base">Localisation</p>
                    </div>
                </div>
                <div>
                    <
                </div>
            </div>

            <div class="text-2xl font-semibold text-white mb-4">
                Partager avec vos amis
            </div>

            <div class="w-full flex items-center justify-between  p-4">
                <i data-lucide="twitter" class="w-10 h-10 rounded-full bg-white"> </i>
                <i data-lucide="facebook" class="w-10 h-10 rounded-full bg-white"> </i>
                <i data-lucide="instagram" class="w-10 h-10 rounded-full bg-white"> </i>
                {{-- <i data-lucide="utility-pole" class="w-10 h-10 rounded-full bg-white"> </i> --}}
            </div>
        </div>
    </div>

</div>







@endsection


