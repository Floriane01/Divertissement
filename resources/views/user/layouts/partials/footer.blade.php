<footer class="bg-[#232323] text-white py-4">
    <div class="container mx-auto px-2 xl:px-28">
        <div class="flex flex-wrap justify-between items-start gap-8">
            <!-- Logo and Join section -->
            <div class="w-full md:w-1/2 lg:w-auto px-2 flex flex-col gap-4">
                <div class="text-white font-bold text-2xl flex flex-row mt-8">
                    Logo
                </div>
                <div class="text-white flex flex-row items-center mb-8">
                    <input type="text" class="border-[1px] border-white/70 bg-transparent rounded-full w-40 pl-2 h-[30px] pr-6">
                    <button class="text-black bg-[#d6f260] rounded-full h-8 w-40 pb-4 flex justify-center -ml-6">
                        <span class="text-center text-lg text-black font-semibold mb-2 self-start">
                            Nous joindre
                        </span>
                    </button>
                </div>
                <div class="w-full flex items-center space-x-4 p-2">
                    <div class="w-10 h-10 rounded-full border-2 border-purple-400 flex items-center justify-center">
                        <i data-lucide="instagram" class="w-6 h-6 text-purple-400"></i>
                    </div>
                    <div class="w-10 h-10 rounded-full border-2 border-yellow-400 flex items-center justify-center">
                        <i data-lucide="facebook" class="w-6 h-6 text-yellow-400"></i>
                    </div>
                    <div class="w-10 h-10 rounded-full border-2 border-green-400 flex items-center justify-center">
                        <i data-lucide="twitter" class="w-6 h-6 text-green-400"></i>
                    </div>
                </div>

                <div class="w-full flex items-center pt-20">
                    <span class="text-center text-sm text-white font-semibold mb-2 self-start">
                        &copy; Avis de droit d’auteur : @ Événements 2024. Tous droits réservés.
                    </span>
                </div>
            </div>

            <!-- Quick Links sections -->
            <div class="w-full md:w-1/2 lg:w-auto px-2 flex flex-col gap-4">
                <div class="text-white font-semibold text-sm mt-10">
                    QUICK LINKS
                </div>
                <a href="#" class="text-white">À propos de nous</a>
                <a href="#" class="text-white">Evènement</a>
                <a href="#" class="text-white">Organisation d'événements</a>
                <a href="#" class="text-white">Partenariat</a>
                {{-- <a href="#" class="text-white">Support</a> --}}
                <a href="#" class="text-white">FAQ</a>
            </div>

            <div class="w-full md:w-1/2 lg:w-auto px-2 flex flex-col gap-4">
                <div class="text-white font-semibold text-sm mt-10">
                    RESSOURCES
                </div>
                {{-- <a href="#" class="text-white">Blog</a> --}}
                {{-- <a href="#" class="text-white">Help Center</a> --}}
                <a href="#" class="text-white">Politique privée</a>
                {{-- <a href="#" class="text-white">Terms of Use</a> --}}
            </div>

            <div class="w-full md:w-1/2 lg:w-auto px-2 flex flex-col gap-4">
                <div class="text-white font-semibold text-sm mt-10">
                    CONNECTE-TOI AVEC NOUS
                </div>
                <a href="#" class="text-white">Contactez-nous</a>
                <a href="#" class="text-white">Inscription à la newsletter</a>
                <a href="#" class="text-white">Nous suivre</a>
            </div>

            <div class="w-full md:w-1/2 lg:w-auto px-2 flex flex-col gap-4">
                <div class="text-white font-semibold text-sm mt-10">
                    LEGAL
                </div>
                <a href="#" class="text-white">Accessibilité</a>
                <a href="#" class="text-white">Accord de l'utilisateur</a>
            </div>
        </div>
    </div>
</footer>


<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
<script>
    lucide.createIcons();
</script>

{{-- Pour gérer le changement de thème --}}

{{-- <script>
    const themeToggle = document.getElementById('theme-toggle');
    themeToggle.addEventListener('click', () => {
      if (document.documentElement.getAttribute('data-theme') === 'dark') {
        document.documentElement.removeAttribute('data-theme');
      } else {
        document.documentElement.setAttribute('data-theme', 'dark');
      }
    });
  </script> --}}
