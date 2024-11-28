<x-global.layout>
    <div class="flex min-h-screen text-black">
        <!-- Left Side -->
        <div
            class="w-full md:w-1/2 hidden lg:flex flex-col items-center justify-start bg-primary-blue text-white p-8 md:p-12 min-h-full">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-extrabold mb-4">Welcome to Job Portal</h1>
                <p class="text-lg font-medium mb-6">
                    Join us and start applying for you dream jobs right now!
                </p>
            </div>

            <div class="flex items-center justify-center w-full mt-4">
                <img src="{{asset('images/woman.jpg')}}" alt="Sign Up Illustration" class="rounded-lg shadow-md">
            </div>
        </div>


        <!-- Right Side (Sign Up Form) -->
        <div
            class="w-full  lg:w-1/2 flex flex-col items-center justify-center bg-gray-50 p-6 md:p-12 rounded-lg shadow-lg border border-gray-200">
            <!-- Go Back Link -->
            <div class="w-full pb-4 pl-3 md:pb-6 md:pl-5">
                @if(Str::contains(url()->previous(), route('register-employee')))
                    <a href="/" class="group flex items-center text-primary-gray transition duration-200 max-h-fit">
                @else
                    <a href="{{ url()->previous() }}"
                        class="group flex items-center text-primary-gray transition duration-200 max-h-fit">
                @endif
                        <i
                            class="fas fa-arrow-left mr-2 text-primary-gray group-hover:text-primary-blue text-lg md:text-xl"></i>
                        <span class="font-medium group-hover:text-primary-blue">Go back</span>
                    </a>
            </div>

            <h2 class="text-2xl font-bold text-center text-primary-blue mb-6">Create Your Account</h2>

            <!-- Sign Up Form -->
            <form action="" method="POST" class="w-full">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-primary-gray font-medium mb-2">Full Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-primary-gray font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-primary-gray font-medium mb-2">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue"
                            required>
                        <span toggle="#password"
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer">
                            <i class="fas fa-eye text-gray-600"></i>
                        </span>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-5">
                    <label for="password_confirmation" class="block text-primary-gray font-medium mb-2">Confirm
                        Password</label>
                    <div class="relative">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue"
                            required>
                        <span toggle="#password_confirmation"
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer">
                            <i class="fas fa-eye text-gray-600"></i>
                        </span>
                    </div>
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Gender -->
                <div class="mb-5">
                    <label for="gender" class="block text-primary-gray font-medium mb-2">Gender</label>
                    <select id="gender" name="gender"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue"
                        required>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('gender')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full p-3 bg-primary-yellow text-white rounded-lg font-semibold hover:bg-highlight-yellow focus:outline-none focus:ring-2 focus:ring-primary-blue">Sign
                    Up</button>
            </form>

            <!-- Links Below Form -->
            <div class="mt-6 text-center">
                <p class="text-sm text-primary-gray">
                    Already have an account? <a href="#" class="text-primary-blue hover:underline">Login</a>
                </p>
                <p class="text-sm text-primary-gray mt-2">
                    Want to register a company account? <a href="#" class="text-primary-blue hover:underline">Click
                        Here</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelectorAll('span[toggle]');
        togglePassword.forEach((eyeIcon) => {
            eyeIcon.addEventListener('click', function () {
                const passwordField = document.querySelector(this.getAttribute('toggle'));
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);

                const icon = this.querySelector('i');
                icon.classList.toggle('fa-eye-slash');
                icon.classList.toggle('fa-eye');
            });
        });
    </script>
</x-global.layout>