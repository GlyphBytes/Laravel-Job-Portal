<section class="flex justify-center hero-section">

    <div class="lg:w-auto w-full lg:flex-grow flex justify-center lg:bg-transparent bg-light-blue mt-16 h-fit p-4">
        <div
            class="flex justify-around items-center lg:w-full lg:mt-0 sm:w-2/3 w-11/2 lg:flex-row flex-col-reverse">
            <div class='lg:max-w-100 w-full flex flex-col justify-between gap-5 '>
                <div
                    class="uppercase text-3xl sm:font-extrabold sm:text-4xl lg:text-5xl font-semibold sm:text-center lg:text-left text-left">
                    Your next career starts here
                </div>
                <div class="text-lg sm:text-center lg:text-left text-left">
                    Browse thousands of job listings from companies around the world.
                </div>
                <form class="flex items-center lg:justify-start sm:justify-center justify-start">
                    <input type="text" name="query" id="" placeholder="Find your dream job"
                        class="bg-transparent border-white border-y border-l outline-none w-64 py-1 px-3 h-9">
                    <button type="submit" class="bg-primary-yellow hover:bg-highlight-yellow h-9 px-2 rounded-r-lg">
                        <i class="fa-solid fa-magnifying-glass  text-2xl font-extrabold text-black"></i>
                    </button>
                </form>
            </div>
            <div class="hidden lg:block w-96">
                <img src="{{asset('images/man.png')}}" alt="man-smiling" class='w-full'>
            </div>
        </div>

    </div>
</section>

@vite('resources/css/components/home.css')