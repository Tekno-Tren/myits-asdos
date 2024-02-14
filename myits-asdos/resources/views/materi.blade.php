@extends('layouts.app')

@section('content')

    <script src="https://cdn.tailwind.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <body style="background-color: #bacfe6">
    <div class="container pt-10 pb-16">
        <div class="w-100">
            <div class="w-100 px-4 border border-slate-300 rounded-xl mx-auto p-5 shadow-md font-inter"
                style="background-color: aliceblue">
                <div class="max-w-xl mx-auto text-center mt-6 mb-4 ">
                    <h4 class="font-bold text-3xl text-dark mt-6">Berita Acara</h4>
                </div>
                <form action="{{route('materi.store', $kelas_id)}}" method="POST">
                    @csrf
                    <!--<div class="w-100 px-4 mb-8">
                    <label for="nama" class="text-base font-bold ">Nama :</label>
                    <input type="text" id="nama" name="nama" class="w-100 bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary"/>
                </div>
                <div class="w-100 px-4 mb-8">
                    <label for="matkul" class="text-base font-bold ">Mata Kuliah :</label>
                    <input type="text" id="matkul" name="matkul" class="w-100 bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary"/>
                </div>-->
                    <div class="w-100 px-4 mb-8">
                        <label for="materi" class="text-base font-bold">Materi yang diberikan :</label>
                        <input type="text" id="materi" name="materi"
                            class="w-100 bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary" />
                        <input type="hidden" id="user_id" name="user_id" value="{{ $user_id }}">
                        <input type="hidden" id="kelas_id" name="kelas_id" value="{{ $kelas_id }}">
                    </div>
                    <div class="w-100 px-4 mb-6 flex justify-between">
                        <button
                            class="text-base font-semibold text-black bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                            style="background-color: bisque;" type="submit" name="upload" h>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
