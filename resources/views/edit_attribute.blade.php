<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atur Aja</title>
</head>
<body>

@include('navbar')

<div class="relative">
    <a href="/groups">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-grey-600 h-10 w-10 ml-8 mt-8 md:absolute" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>    
    </a>
</div>

<div class="min-h-200 pt-12 pb-40">

    <h1 class="text-3xl mt-12 mb-8 md:mt-20 md:mb-16 font-extrabold leading-10 tracking-tight text-gray-900 text-center sm:leading-none md:text-4xl lg:text-5xl"><span class="inline-block lg:inline">Edit</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-blue-600 to-blue-500 lg:inline">Kolom Data</span></h1>

    <div class="leading-loose">
        <form action="/transactions/add" method="POST" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl mx-auto">
            <p class="text-gray-800 text-md font-semibold">List Kolom Data</p>
            @csrf
            <!-- for each setiap attribut untuk dijadikan form di sini -->
            <input type="hidden" id="counter" value="0">
            <div id="list_input_form">
                Silahkan tekan tombol dibawah untuk menambahkan kolom
            </div>
            <div class="flex mt-4">
                <div id="add_input" class="inline-flex bg-blue-400 rounded-full mx-auto font-bold text-white px-2 py-2 transition duration-300 ease-in-out hover:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
                    </svg>
                </div>
            </div>
            <input type="submit" value="Simpan Kolom Data" class="block mt-8 mx-auto items-center bg-blue-400 rounded-full font-bold text-white px-3 py-2 transition duration-300 ease-in-out hover:bg-blue-500">
        </form>
    </div>

</div>

@include('footer')

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>