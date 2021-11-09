<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sign In</title>
</head>
<body class="bg-gray-100 font-body h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">
            
            <div class="relative">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-grey-600 h-10 w-10 ml-8 mt-8 md:absolute" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>    
                </a>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Selamat datang.</p>
                <form class="flex flex-col pt-3 md:pt-8" onsubmit="#">

                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input type="email" id="email" placeholder="your@email.com" class="form focus:outline-none focus:shadow-outline">
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" id="password" placeholder="Password" class="form focus:outline-none focus:shadow-outline">
                    </div>
    
                    <input type="submit" value="Masuk" class="bg-blue-600 text-white font-bold text-lg hover:bg-blue-500 p-2 mt-8">
                    
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Belum punya akun? <a href="/register" class="underline font-semibold">Daftar di sini.</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="{{ asset('img/book2.jpg') }}">
        </div>
    </div>

</body>
</html>