<footer class="bg-primary-blue text-gray-300 py-10">
    <div class="max-w-6xl mx-auto px-5">
        <!-- Top Section -->
        <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
            <!-- About Section -->
            <div>
                <h4 class="text-lg font-bold mb-4">About Us</h4>
                <p class="text-sm">
                    We connect job seekers with employers, making the hiring process smooth and efficient. Start your journey with us today.
                </p>
            </div>

            <!-- Links Section -->
            <div>
                <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white">Browse Jobs</a></li>
                    <li><a href="#" class="hover:text-white">Post a Job</a></li>
                    <li><a href="#" class="hover:text-white">Explore Companies</a></li>
                    <li><a href="#" class="hover:text-white">Contact Us</a></li>
                </ul>
            </div>

            <!-- Newsletter Section -->
            <div>
                <h4 class="text-lg font-bold mb-4">Stay Updated</h4>
                <p class="text-sm mb-4">
                    Subscribe to our newsletter for the latest job updates and insights.
                </p>
                <form class="flex items-center">
                    <input 
                        type="email" 
                        placeholder="Enter your email" 
                        class="w-full py-2 px-3 rounded-l bg-gray-700 text-gray-200 focus:outline-none"
                    >
                    <button 
                        type="submit" 
                        class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-4 rounded-r"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="mt-10 text-center text-sm border-t border-gray-600 pt-6">
            <p>&copy; {{ date('Y') }} Your Job Portal. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="hover:text-white"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
