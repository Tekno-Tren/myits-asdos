@extends('layouts.app')
@section('content')

    <body style="background-color: #bacfe6">
        <section>
            <article class="custom-matkul mx-5 mt-3 mb-2">
                <h1 style="font-size: 20px">{{ $matkul->nama }}</h1>
                <p style="font-size: 20px">{{ $matkul->nama_dosen }}</p>
            </article>
        </section>
        <style>
            .button {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .button h6 {
                margin-bottom: 10px;
            }

            .button-row {
                display: flex;
            }
        </style>

        <div class="container mb-3">
            <div class="card mx-4">
                <div class="card-body d-flex flex-wrap justify-content-between">
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6" style="color: #2FC2A5">Hadir</h6>
                        <p>0</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6" style="color: #356099">Izin</h6>
                        <p>0</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6" style="color: #FFCD35">Sakit</h6>
                        <p>0</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6" style="color: #E74E3E">Alpa</h6>
                        <p>8</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6">Total Tatap Muka</h6>
                        <p>8</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="card mx-4">
                <div class="card-body d-flex flex-wrap justify-content-between">
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6">TATAP MUKA</h6>
                        <p>1</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6">JADWAL</h6>
                        <p>Tanggal</p>
                        <p>Jam</p>
                        <p>Ruang</p>
                    </div>

                    <div class="button1">
                        <h6 class="fs-6">STATUS KEHADIRAN</h6>
                        <div class="button-row">
                            <button class="hisa-button" onclick="changeColor(this, 1)">H</button>
                            <button class="hisa-button" onclick="changeColor(this, 1)">I</button>
                            <button class="hisa-button" onclick="changeColor(this, 1)">S</button>
                            <button class="hisa-button" onclick="changeColor(this, 1)">A</button>
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6">KETERANGAN</h6>
                        <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a
                                href="materi">Materi</button>
                        <button style="width: 125px; background-color: #bacfe6"><a href="bukti">Foto
                                Kehadiran</a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3">
            <div class="card mx-4">
                <div class="card-body d-flex flex-wrap justify-content-between">
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6">TATAP MUKA</h6>
                        <p>2</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6">JADWAL</h6>
                        <p>Tanggal</p>
                        <p>Jam</p>
                        <p>Ruang</p>
                    </div>

                    <div class="button1">
                        <h6 class="fs-6">STATUS KEHADIRAN</h6>
                        <div class="button-row">
                            <button class="hisa-button" onclick="changeColor(this, 1)">H</button>
                            <button class="hisa-button" onclick="changeColor(this, 1)">I</button>
                            <button class="hisa-button" onclick="changeColor(this, 1)">S</button>
                            <button class="hisa-button" onclick="changeColor(this, 1)">A</button>
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-center">
                        <h6 class="fs-6">KETERANGAN</h6>
                        <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a
                                href="materi">Materi</button>
                        <button style="width: 125px; background-color: #bacfe6"><a href="bukti">Foto
                                Kehadiran</a></button>
                    </div>
                </div>
            </div>
        </div>









        <div class="container">
            <div class="card card-body card-matkul">
                <table class="table" border="0" width="100%" style="border-collapse: collapse ">
                    <thead>
                        <tr>
                            <th class="text-center">TATAP MUKA</th>
                            <th class="text-center">JADWAL</th>
                            <th class="text-center">STATUS KEHADIRAN</th>
                            <th class="text-center">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3" align="center">1</td>
                            <td align="center">
                                <div>
                                    <p>Senin, 26 Februari 2024</p>
                                    <p>Jam</p>
                                    <p>Ruang</p>
                                </div>
                            </td>
                            <td rowspan="3" align="center">
                                <div class="vertical-buttons">
                                    <button class="btn hisa-button" onclick="changeColor(this, 1)">H</button>
                                    <button class="btn hisa-button" onclick="changeColor(this, 1)">I</button>
                                    <button class="btn hisa-button" onclick="changeColor(this, 1)">S</button>
                                    <button class="btn hisa-button" onclick="changeColor(this, 1)">A</button>
                                </div>
                            </td>

                            <td rowspan="3" align="center">
                                <button id="buttonmateri"
                                    style="width: 125px; margin-bottom: 5px; background-color: #bacfe6">
                                    <a href="materi">Materi</a></button>
                                <br />
                                <button id="buttonbukti" style="width: 125px; background-color: #bacfe6"><a
                                        href="bukti">Foto
                                        Kehadiran</a></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
@endsection

@section('scripts')
    <script>
        // Fungsi untuk merubah warna tombol dalam grup
        function changeColor(button, group) {
            // Mendapatkan elemen yang menjadi parent tombol
            var parentElement = button.parentElement;

            // Mendapatkan koleksi tombol dalam grup
            var buttonsInGroup = parentElement.querySelectorAll('.btn');

            // Toggle: mengembalikan warna semua tombol dalam grup ke warna asal jika tombol yang diklik sudah berwarna hijau
            if (button.style.backgroundColor === 'green') {
                buttonsInGroup.forEach(function(btn) {
                    btn.style.backgroundColor = '';
                });
            } else {
                // Mengembalikan warna semua tombol dalam grup ke warna asal
                buttonsInGroup.forEach(function(btn) {
                    btn.style.backgroundColor = '';
                });

                // Mengubah warna latar belakang tombol yang diklik menjadi hijau
                button.style.backgroundColor = 'green';
            }
        }
    </script>
@endsection
