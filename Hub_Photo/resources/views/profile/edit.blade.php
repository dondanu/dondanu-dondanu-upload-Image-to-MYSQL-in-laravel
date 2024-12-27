<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-dark-blue">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <!-- Update Profile Section -->
            <div class="p-6 sm:p-8 bg-gradient-to-r from-indigo-600 via-blue-600 to-teal-600 shadow-xl sm:rounded-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <div class="max-w-xl text-black">
                    <h3 class="text-2xl font-extrabold mb-4 text-shadow-md">Update Profile Information</h3>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Section -->
            <div class="p-6 sm:p-8 bg-gradient-to-r from-green-600 via-yellow-500 to-red-500 shadow-xl sm:rounded-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <div class="max-w-xl text-black">
                    <h3 class="text-2xl font-extrabold mb-4 text-shadow-md">Change Your Password</h3>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User Section -->
            <div class="p-6 sm:p-8 bg-gradient-to-r from-pink-500 via-purple-500 to-blue-700 shadow-xl sm:rounded-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <div class="max-w-xl text-black">
                    <h3 class="text-2xl font-extrabold mb-4 text-shadow-md">Delete Your Account</h3>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            
        </div>
    </div>

    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1a202c; /* Darker background */
            color:rgb(20, 44, 77); /* Light text for better contrast */
        }

        /* Header Styles */
        .font-semibold {
            color:rgb(83, 33, 221);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Section Styling */
        .p-6 {
            padding: 2rem;
        }

        .p-8 {
            padding: 2.5rem;
        }

        /* Interactive Card Styles */
        .shadow-xl {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .text-shadow-md {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .hover\:shadow-2xl:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .hover\:scale-105:hover {
            transform: scale(1.05);
        }

        .text-extrabold {
            font-weight: 800;
        }

        .text-white {
            color: white;
        }

        /* Gradient Styling */
        .bg-gradient-to-r {
            background: linear-gradient(to right, var(--tw-gradient-stops));
        }

        .from-indigo-600 {
            --tw-gradient-from: #4c51bf;
        }

        .via-blue-600 {
            --tw-gradient-stops: #3182ce;
        }

        .to-teal-600 {
            --tw-gradient-to: #2c7a7b;
        }

        .from-green-600 {
            --tw-gradient-from: #2f855a;
        }

        .via-yellow-500 {
            --tw-gradient-stops: #ecc94b;
        }

        .to-red-500 {
            --tw-gradient-to: #e53e3e;
        }

        .from-pink-500 {
            --tw-gradient-from: #d53f8c;
        }

        .via-purple-500 {
            --tw-gradient-stops: #9f7aea;
        }

        .to-blue-700 {
            --tw-gradient-to: #2b6cb0;
        }

        /* Background for the whole page */
        .bg-dark-blue {
            background-color:rgb(177, 216, 211); /* Dark background color */
        }
    </style>
</x-app-layout>
