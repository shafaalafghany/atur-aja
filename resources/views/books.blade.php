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

    @include('navbar')

    <div class="grid lg:grid-cols-4">   

        <div class="col-span-3">
            
            <h1 class="text-3xl mt-12 mb-8 md:mt-20 md:mb-16 font-extrabold leading-10 tracking-tight text-gray-900 text-center sm:leading-none md:text-4xl lg:text-5xl"><span class="inline-block lg:inline">Daftar</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-blue-600 to-blue-500 lg:inline">Buku Kas</span></h1>

            <!-- Add Group Button -->
            <div class="container flex mx-auto my-auto w-full h-200 items-center justify-center hidden">
                <a href="" class="cursor-pointer">
                    <div id="empty-cover-art" class="flex-col container items-center justify-center rounded sm:w-full md:w-48 md:h-48 py-16 text-center opacity-50 md:border-dashed md:border-2 md:border-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16 w-16" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clipRule="evenodd" />
                        </svg>
                        <div class="flex-col container">
                            Tambah Buku Kas
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Group Items -->
            <div class="container mx-auto mt-10 w-full items-start justify-center min-h-200">
            
                <ul class="item-ul">
                    <li class="item-li">
                        <a href="" class="w-full">
                            <div class="item-box">
                                <div class="item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                    </svg>
                                </div>
                                <div class="flex-1 pl-1 mr-16">
                                    <div class="font-medium">Buku Kas 1</div>
                                    <div class="text-gray-600 text-sm">Keterangan 1</div>
                                </div>
                                <div class="text-gray-600 text-xs">Dibuat pada 6:00 AM</div>
                            </div>
                        </a>
                        <a href="" class="bg-red-400 rounded-full ml-4 font-bold text-white px-4 py-4 transition duration-300 ease-in-out hover:bg-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li class="item-li">
                        <a href="" class="w-full">
                            <div class="item-box">
                                <div class="item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                    </svg>
                                </div>
                                <div class="flex-1 pl-1 mr-16">
                                    <div class="font-medium">Buku Kas 2</div>
                                    <div class="text-gray-600 text-sm">Keterangan 2</div>
                                </div>
                                <div class="text-gray-600 text-xs">Dibuat pada 10:00 AM</div>
                            </div>
                        </a>
                        <a href="" class="bg-red-400 rounded-full ml-4 font-bold text-white px-4 py-4 transition duration-300 ease-in-out hover:bg-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li class="item-li">
                        <a href="" class="w-full">
                            <div class="item-box">
                                <div class="item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                    </svg>
                                </div>
                                <div class="flex-1 pl-1 mr-10">
                                    <div class="font-medium">Buku Kas 3</div>
                                    <div class="text-gray-600 text-sm">Keterangan 3</div>
                                </div>
                                <div class="text-gray-600 text-xs">
                                    Dibuat pada 1:00 PM
                                </div>
                            </div>
                        </a>
                        <a href="" class="bg-red-400 rounded-full ml-4 font-bold text-white px-4 py-4 transition duration-300 ease-in-out hover:bg-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>

                <div class="flex flex-col p-4 w-full">
                    <a href="" class="inline mx-auto justify-center items-center bg-blue-500 rounded-full font-bold text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600">
                        Tambah
                    </a>
                </div>
            
            </div>

        </div>

        <div class="col-span-1 justify-center mx-6">
            <h1 class="text-xl mt-12 mb-8 md:mt-16 md:mb-6 font-extrabold leading-10 tracking-tight text-gray-900 text-center sm:leading-none md:text-2xl lg:text-3xl"><span class="inline-block lg:inline">Daftar Anggota</span></h1>
            <div class="bg-white rounded-2xl w-full min-h-200 mb-8 drop-shadow-md">

            </div>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" />
            </svg> -->
        </div>

    </div>
    
    
    <!-- </div> -->

    @include('footer')

    <div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 opacity-75 hidden">
        <div class="bg-white rounded-lg w-1/2">
            <div class="flex flex-col items-start p-4">
                <div class="flex items-center w-full">
                    <div class="text-gray-900 font-medium text-lg mb-2">My modal title</div>
                    <svg class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
                    </svg>
                </div>
                <hr>
                    <div class="mb-5">Apakah anda yakin, untuk menghapus buku kas ini?</div>
                <hr>
                <div class="ml-auto">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                        Iya
                    </button>
                    <button class="bg-transparent hover:bg-gray-500 text-blue-600 font-semibold hover:text-white py-2 px-4 border border-blue-600 hover:border-transparent rounded">
                        Tidak
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>