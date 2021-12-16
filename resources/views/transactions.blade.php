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

    <!-- Add Group Button -->
    <div class="container flex mx-auto my-auto w-full h-200 items-center justify-center hidden">
        <a href="" class="cursor-pointer">
            <div id="empty-cover-art" class="container container items-center justify-center rounded sm:w-full md:w-48 md:h-48 py-16 text-center opacity-50 md:border-dashed md:border-2 md:border-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16 w-16" viewBox="0 0 20 20" fill="currentColor">
                    <path fillRule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clipRule="evenodd" />
                </svg>
                <div class="flex-col container">
                    Buat Tabel
                </div>
            </div>
        </a>
    </div>

    <div class="min-h-200">

        <h1 class="text-3xl mt-12 mb-8 md:mt-20 md:mb-16 font-extrabold leading-10 tracking-tight text-gray-900 text-center sm:leading-none md:text-4xl lg:text-5xl"><span class="inline-block lg:inline">Daftar</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-blue-600 to-blue-500 lg:inline">Transaksi</span></h1>

        <section class="container mx-auto p-6 font-mono mb-20">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto overflow-y-auto max-h-screen">
                    <table class="w-full">
                        <thead>
                            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-300 uppercase border-b border-gray-600">
                                <th class="px-4 py-3 border">Name</th>
                                <th class="px-4 py-3 border">Age</th>
                                <th class="px-4 py-3 border">Status</th>
                                <th class="px-4 py-3 border">Date</th>
                                <th class="flex bg-gray-200 ">
                                    <div class="px-4 py-3 w-full h-full mr-4 bg-gray-300 rounded-tr-md">
                                        Operation
                                    </div>
                                    <div class="flex mr-4 items-center cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md border">
                                    Sufyan
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    22
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    Acceptable
                                </td>
                                <td class="px-4 py-3 text-md border">
                                    6/4/2000
                                </td>
                                <td class="px-4 py-3 border text-center relative">
                                    <a href="" class="bg-yellow-400 rounded-full font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <a href="" class="bg-red-400 rounded-full ml-4 font-bold inline-flex text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="inline-flex w-full my-4">
                    <a href="" class="bg-blue-400 rounded-full mx-auto font-bold text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clipRule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    </div>

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
                    <div class="mb-5">Apakah anda yakin, untuk menghapus grup ini?</div>
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