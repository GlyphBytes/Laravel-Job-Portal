<!-- For desktop -->
<header class="items-center justify-start gap-20 py-3 px-10 lg:flex hidden h-16 fixed w-full top-0 left-0 bg-primary-blue z-50">
    <!-- Logo -->
    <div>
        <h2 class="text-2xl font-bold">
            Jobs Portal.
        </h2>
    </div>

    <ul class="flex gap-10">
        <x-global.navlink>Browse Jobs</x-global.navlink>
        <x-global.navlink>Explore Companies</x-global.navlink>
    </ul>

    <div class="flex gap-3 ml-auto lg">
        <x-global.button class=" text-white hover:bg-dark-blue bg-light-blue border-white border-2 rounded-md" href="hello">
            <i class="fas fa-briefcase"></i>
            <span></span>Post a Job Opening
        </x-global.button>
        <x-global.button class="bg-primary-yellow hover:bg-highlight-yellow text-black">
            <i class="fas fa-paper-plane"></i>
            Apply Now
        </x-global.button>
    </div>
</header>


<!-- For mobile -->
<header class="items-center justify-start gap-20 py-3 sm:px-10 lg:hidden flex px-5 h-16 fixed w-full top-0 left-0 bg-primary-blue z-50">
    <!-- Logo -->
    <div>
        <h2 class="text-2xl font-bold">
            Jobs Portal.
        </h2>
    </div>

    <i class="fa-solid fa-bars ml-auto text-2xl cursor-pointer" id="menu-btn"></i>

    <div class="fixed top-0 left-0 min-h-screen min-w-full bg-transparent-black z-20 hidden" id="overlay"></div>

    <div class="min-h-screen max-h-screen min-w-64
        border border-black
        absolute top-0 -right-64
        bg-gray-200
        z-30
        flex justify-start items-center flex-col
        p-6 gap-8
        transition-all
        duration-500
        text-black"
        id="menu">

        <div class="w-full flex justify-end text-2xl">
            <i class="fa-solid fa-xmark cursor-pointer" id="menu-close-btn"></i>
        </div>

        <ul class="flex gap-6 flex-col w-full">
            <x-global.navlink>Browse Jobs</x-global.navlink>
            <span class="border border-primary-gray -translate-y-3 opacity-20"></span>
            <x-global.navlink>Explore Companies</x-global.navlink>
            <span class="border border-primary-gray -translate-y-3 opacity-20"></span>
        </ul>


        <div class="flex gap-3 flex-col mt-auto">
            <x-global.button class=" text-white hover:bg-dark-blue bg-light-blue">
                <i class="fas fa-briefcase"></i>
                <span></span>Post a Job Opening
            </x-global.button>
            <x-global.button class="bg-primary-yellow hover:bg-highlight-yellow text-black">
                <i class="fas fa-paper-plane"></i>
                Apply Now
            </x-global.button>

        </div>
    </div>
</header>

@vite('resources/js/components/navbar.js')