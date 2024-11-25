<section class="flex justify-center hero-section mt-16 min-h-fit items-center bg-primary-blue overflow-hidden">

    <div class="lg:w-auto w-full lg:flex-grow flex justify-center h-fit p-4">
        <div class="flex justify-around items-center lg:w-full lg:mt-0 sm:w-2/3 w-11/2 lg:flex-row flex-col-reverse">
            <div class='lg:max-w-100 w-full flex flex-col justify-between gap-5 '>
                <div
                    class="uppercase text-3xl sm:font-extrabold sm:text-4xl lg:text-5xl font-semibold sm:text-center lg:text-left text-left">
                    Your next career starts here
                </div>
                <div class="text-lg sm:text-center lg:text-left text-left">
                    Browse thousands of job listings from companies around the world.
                </div>
                <form class="flex items-center lg:justify-start sm:justify-center justify-start">
                <form class="flex items-center">
                    <input 
                        type="text"
                        name="query" 
                        placeholder="Find your dream job" 
                        class="w-full py-2 px-3 rounded-l bg-gray-700 text-gray-200 focus:outline-none"
                    >
                    <button 
                        type="submit" 
                        class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-4 rounded-r"
                    >
                        Search
                    </button>
                </form>
                </form>
                <div class="flex gap-3 lg:justify-start sm:justify-center justify-start">
                    <x-global.button class=" text-white hover:bg-dark-blue bg-light-blue w-fit px-4">
                        <i class="fas fa-user"></i>
                        <span>
                            Login
                        </span>
                    </x-global.button>
                    <x-global.button class=" text-white hover:bg-highlight-yellow bg-primary-yellow w-fit px-4">
                        <i class="fas fa-user-plus"></i>
                        <span>
                            Register
                        </span>
                    </x-global.button>
                </div>
            </div>
            <div class="hidden lg:block w-96 max-h-full">
                <img src="{{asset('images/man.png')}}" alt="man-smiling" class='w-full max-h-full'>
            </div>
        </div>

    </div>
</section>

@vite('resources/css/components/home.css')