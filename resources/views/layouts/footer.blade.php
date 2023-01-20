<footer class="bg-orange-400 dark:bg-gray-900 text-gray-800">
    <div class="container flex flex-col-reverse justify-between px-6 py-2 mx-auto space-y-8 md:flex-row md:space-y-0">
        <!-- Logo and social links container -->
        <div class="flex flex-col-reverse items-center justify-between space-y-0 md:flex-col md:space-y-0 md:items-start">
            <div class="mx-auto my-6 text-center dark:text-gray-100 md:hidden"> Copyright &copy; 2022, All Rights Reserved</div>
            <!-- Logo -->
            <div class="flex justify-center flex-wrap">
                <x-application-logo class="block h-16 w-auto fill-current text-gray-800 dark:text-gray-200 hover:text-white" />
            </div>

            <!-- Social Links Container -->
            <div class="flex justify-center space-x-4">
                <!-- Link 1 -->
                <a href="#" class="hover:text-brightRed">
                    <i class="fa-brands fa-facebook fa-2x text-gray-800 dark:text-gray-200 hover:text-white"></i>
                </a>
                <!-- Link 2 -->
                <a href="https://youtu.be/XHOmBV4js_E" target="_blank">
                    <i class="fa-brands fa-youtube fa-2x text-gray-800 dark:text-gray-200 hover:text-white"></i>
                </a>
                <!-- Link 3 -->
                <a href="#" class="hover:text-brightRed">
                    <i class="fa-brands fa-twitter fa-2x text-gray-800 dark:text-gray-200 hover:text-white"></i>
                </a>
                <!-- Link 4 -->
                <a href="#" class="hover:text-brightRed">
                    <i class="fa-brands fa-instagram fa-2x text-gray-800 dark:text-gray-200 hover:text-white"></i>
                </a>
                <!-- Link 5 -->
                <a href="#" class="hover:text-brightRed">
                    <i class="fa-brands fa-github fa-2x text-gray-800 dark:text-gray-200 hover:text-white"></i>
                </a>
            </div>
        </div>
        <!-- List Container -->
        <div class="flex justify-around space-x-24">
            <div class="flex flex-col space-y-3 dark:text-gray-200 font-bold">
                <a href="#" class="transition duration-150 ease-out hover:ease-in hover:-translate-y-1 hover:text-white focus:text-gray-400 disabled:text-gray-200 dark:hover:text-orange-400 dark:hover:focus:text-gray-500">Home</a>
                <a href="#" class="transition duration-150 ease-out hover:ease-in hover:-translate-y-1 hover:text-white focus:text-gray-400 disabled:text-gray-200 dark:hover:text-orange-400 dark:hover:focus:text-gray-500">About</a>
                <a href="#" class="transition duration-150 ease-out hover:ease-in hover:-translate-y-1 hover:text-white focus:text-gray-400 disabled:text-gray-200 dark:hover:text-orange-400 dark:hover:focus:text-gray-500">Services</a>
                <a href="#" class="transition duration-150 ease-out hover:ease-in hover:-translate-y-1 hover:text-white focus:text-gray-400 disabled:text-gray-200 dark:hover:text-orange-400 dark:hover:focus:text-gray-500">Staff List</a>
                <a href="#" class="transition duration-150 ease-out hover:ease-in hover:-translate-y-1 hover:text-white focus:text-gray-400 disabled:text-gray-200 dark:hover:text-orange-400 dark:hover:focus:text-gray-500">Contact Us</a>
            </div>
            <div class="flex flex-col space-y-3 dark:text-gray-200">
                <a href="#" class="hover:text-white">Careers</a>
                <a href="#" class="hover:text-white">Community</a>
                <a href="#" class="hover:text-white">Privacy Policy</a>
            </div>
        </div>

        <!-- Input Container -->
        <div class="flex flex-col justify-between">
            <form>
                <div class="flex space-x-3">
                    <input type="text" class="flex-1 px-4 rounded-full focus:outline-none" placeholder="Updated in your inbox" />
                    <button class="px-6 py-2 dark:text-gray-100 rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none">Go</button>
                </div>
            </form>
            <div class="hidden dark:text-gray-100 md:block">
            Copyright &copy; 2023, All Rights Reserved
            </div>
        </div>
        </div>
</footer>
