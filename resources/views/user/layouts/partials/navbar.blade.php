<nav class="w-full h-16 px-6 2xl:px-28 py-2 flex justify-between">
    <div class="text-white font-bold text-2xl flex justify-center items-center">Logo</div>

    <div class=" hidden xl:flex justify-evenly items-center p-3 min-w-[50%]">
        <a href="#" class="text-white hover:text-blue-400">Evènement</a>
        <a href="#" class="text-white hover:text-blue-400">Créer un évènement</a>
        <a href="#" class="text-white hover:text-blue-400">Calendrier</a>

        <button class="p-2 rounded-full bg-blue-400 text-white min-w-32">Se connecter</button>
    </div>

    {{-- Mobile Menu --}}

    <div class="relative xl:hidden group">
        <div class="flex items-center justify-center p-2 text-white hover:bg-slate-50/20 rounded-full">
            <i data-lucide="menu"></i>
        </div>

        <div class="hidden absolute border border-[#232323] w-52 h-auto py-4 px-2 right-2 top-12 transition-all bg-[#232323f6] rounded-md group-hover:flex flex-col gap-2">
            <a href="#" class="text-white hover:bg-slate-50/20 p-1 rounded">Event Discovery</a>
            <a href="#" class="text-white hover:bg-slate-50/20 p-1 rounded">Create an Event</a>
            <a href="#" class="text-white hover:bg-slate-50/20 p-1 rounded">Community Forum</a>
        </div>

    </div>

</nav>
