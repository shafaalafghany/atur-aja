<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

    <h1 class="text-3xl mt-12 mb-8 md:mt-20 md:mb-16 font-extrabold leading-10 tracking-tight text-gray-900 text-center sm:leading-none md:text-4xl lg:text-5xl"><span class="inline-block lg:inline">Edit</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-blue-600 to-blue-500 lg:inline">Grup</span></h1>

    <div class="leading-loose">
        <form action="/groups/edit/{{ $data->group_id }}" method="POST" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl mx-auto">
            <p class="text-gray-800 text-md font-semibold">Informasi Grup</p>
            @csrf
            <dev>
                <label for="group_name" class="mt-4 block text-sm text-gray-600">Nama Grup: </label>
                <input type="text" name="name" value="{{ $data->group_name }}" class="w-full h-8 px-2 py-2 text-gray-700 bg-gray-200 rounded">
            </dev>
            <dev>
                <label for="group_desc" class="mt-4 block text-sm text-gray-600">Deskripsi Grup: </label>
                <input type="text" name="desc" value="{{ $data->group_description }}" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded">
            </dev>
            <input type="submit" value="Simpan Grup" class="block mt-10 mx-auto items-center bg-blue-400 rounded-full font-bold text-white px-3 py-2 transition duration-300 ease-in-out hover:bg-blue-500">
        </form>
    </div>

</div>

@include('footer')

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>