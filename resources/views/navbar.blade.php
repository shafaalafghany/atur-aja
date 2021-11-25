<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Atur Aja</title>
</head>
<body class="bg-gray-100 font-body">

    <div> <!-- content wrapper beginning -->

        <!-- Navigagtion Bar -->
        <div class="bg-white">
            <nav class="flex-inline justify-center items-center md:grid md:grid-cols-6 px-4 py-4">
                <div class="md:col-span-2 flex justify-between items-center mb-2 md:mb-0">
                    <h1 class="">
                        <a href="/" class="text-blue-600 text-2xl md:text-3xl pl-4 hover:text-blue-500 font-bold uppercase">Atur Aja</a>
                    </h1>
                    <div class="md:hidden cursor-pointer" id="brgr_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="col-span-2 pt-1 flex justify-center mb-6 md:mb-0">
                    <ul id="list_of_menu" class="flex-inline md:flex divide-y md:divide-y-0 justify-center items-center font-semibold hidden">
                        <li class="flex justify-center text-lg pt-6 md:pt-0 tracking-wider uppercase">
                            <a href="#">
                                <span class="tracking-wider md:tracking-normal">Home</span>
                            </a>
                        </li>
                        <li class="flex justify-center text-lg md:pl-10 pt-6 md:pt-0 uppercase">
                            <a href="#">
                                <span class="tracking-wider md:tracking-normal">About</span>
                            </a>
                        </li>
                        <li class="flex justify-center text-lg md:pl-10 pt-6 md:pt-0 uppercase">
                            <a href="#">
                                <span class="tracking-wider md:tracking-normal">Contact</span>
                            </a>
                        </li>
                        <li class="mb-6 md:mb-0"></li>
                    </ul>
                </div>
                <div class="flex col-span-2 justify-center md:justify-end mb-2 md:mb-0">
                    <div class="inline-flex justify-center w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">
                        <a href="/login" class="">Sign In</a>
                    </div>
                    <div class="inline-flex justify-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-blue-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-blue-400 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-blue-600">
                        <a href="/register" class="">Sign Up</a>
                    </div>
                </div>
            </nav>
        </div>

    </div> <!-- content wrapper end -->

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>