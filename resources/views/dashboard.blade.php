<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Atur Aja</title>
</head>
<body class="bg-gray-200 font-body">

    <div> <!-- content wrapper beginning -->

        <!-- Navigagtion Bar -->
        <div class="bg-white">
            <nav class="grid grid-cols-6 px-4 py-4">
                <div>
                    <h1>
                        <a href="/" class="text-blue-600 text-2xl pl-4 font-bold uppercase">Atur Aja</a>
                    </h1>
                </div>
                <div class="col-span-4 pt-1">
                    <ul class="flex items-centerx font-semibold">
                        <li class="inline-flex text-lg">
                            <a href="#">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="inline-flex text-lg pl-10">
                            <a href="#">
                                <span>About</span>
                            </a>
                        </li>
                        <li class="inline-flex text-lg pl-10">
                            <a href="#">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-end pr-6">
                    <div class="font-semibold rounded-lg uppercase px-3 py-1 text-sm text-white bg-blue-600">
                        <a href="#" class="">Sign In</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="flex items-center justify-center h-screen">
            <h1 class="text-4xl font-bold text-gray-600">
                Selamat Datang
            </h1>
        </div>

    </div> <!-- content wrapper end -->
    
    <!-- <footer class="bg-gray-600 w-18">
        <div></div>
    </footer> -->

</body>


</html>