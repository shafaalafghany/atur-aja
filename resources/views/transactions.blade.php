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

    <h1 class="text-3xl mt-12 mb-8 md:mt-20 md:mb-16 font-extrabold leading-10 tracking-tight text-gray-900 text-center sm:leading-none md:text-4xl lg:text-5xl"><span class="inline-block lg:inline">Daftar</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-blue-600 to-blue-500 lg:inline">Transaksi</span></h1>

    <div class="min-h-screen">

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
                    <div class="inline-flex w-full my-4">
                        <a href="" class="bg-blue-400 rounded-full mx-auto font-bold text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clipRule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- <table class="border-collapse w-full mx-10 ">
            <thead>
                <tr>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Company name</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Country</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Status</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white lg:hover:bg-gray-100 table-row flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                        KnobHome
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                        German
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                        <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">deleted</span>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                        <a href="#" class="text-blue-400 hover:text-blue-600 underline">Edit</a>
                        <a href="#" class="text-blue-400 hover:text-blue-600 underline pl-6">Remove</a>
                    </td>
                </tr>
            </tbody>
        </table> -->
    </div>

    @include('footer')

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>