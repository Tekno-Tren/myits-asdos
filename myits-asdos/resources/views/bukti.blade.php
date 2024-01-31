@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwind.com"></script>
    <link rel="icon" href="img/Logo_SKPB-biru.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <!--Upload Foto-->
    <body style="background-color: #bacfe6">
    <section id="formupload" class="pt-10 pb-16">
        <div class="container">
            <div class="w-full px-4 lg:w-1/2 lg:mx-auto">
                <div class="w-full px-4 border border-slate-300 rounded-xl mx-auto p-5 shadow-md font-inter"
                    style="background-color: aliceblue">
                    <div class="max-w-xl mx-auto text-center mt-6 mb-4">
                        <h4 class="font-bold text-3xl text-dark mt-6">BUKTI KEHADIRAN</h4>
                        <h2 class="font-bold text-xl text-slate-400">Upload Foto</h2>
                    </div>
                    <form action="bukti" method="post" enctype="multipart/form-data">
                        <div class="w-full px-4 mb-4">
                            <h1>Silahkan upload foto di kelas sebagai bukti kehadiran</h1>
                            <h2>Format : Nama_Kelas_Buktikehadiran</h2>
                            <label for="file">
                                <span
                                    class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Upload
                                    Foto</span>
                        </div>
                        <div class="w-full px-4 mb-6 flex justify-end">
                            <input type="file" id="bukti" name="bukti" value="bukti"
                                class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary mb-2">
                            <button
                                class="text-base font-semibold text-black bg-bisque py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                                style="background-color: bisque;" type="submit" name="upload">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
