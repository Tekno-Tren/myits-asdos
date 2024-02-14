@extends('layouts.app')
@section('content')
    <div class="mb-2 border-rad-0 mx-3 my-3">
        <h5>{{ $data->nama }}</h5>
        <h3> {{ $data->nama_dosen }}</h3>
    </div>
    <div class="container mb-3">
        <div class="card ">
            <div class="card-body d-flex flex-wrap justify-content-between justify-content-lg-around ">
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold" style="color: #2FC2A5">Hadir</h6>
                    <p>0</p>
                </div>
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold" style="color: #356099">Izin</h6>
                    <p>0</p>
                </div>
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold" style="color: #FFCD35">Sakit</h6>
                    <p>0</p>
                </div>
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold" style="color: #E74E3E">Alpa</h6>
                    <p>8</p>
                </div>
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold">Total Tatap Muka</h6>
                    <p>8</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card card-body card-matkul">
            <div class="table-responsive">
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
                                <!-- <button id="buttonmateri" -->
                                    <!-- style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"> -->
                                    <a href="{{ route('materi.index', $data->id) }}">Materi</a>
                                <!-- </button> -->
                                <br>
                                <!-- <button id="buttonbukti" style="width: 125px; background-color: #bacfe6"> -->
                                    <a href="{{ route('bukti.index', $data->id) }}">Foto Kehadiran</a>
                                <!-- </button> -->
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td rowspan="3" align="center">2</td>
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
                                 <!-- <button id="buttonmateri" -->
                                    <!-- style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"> -->
                                    <a href="{{ route('materi.index', $data->id) }}">Materi</a>
                                <!-- </button> -->
                                <br>
                                <!-- <button id="buttonbukti" style="width: 125px; background-color: #bacfe6"> -->
                                    <a href="{{ route('bukti.index', $data->id) }}">Foto Kehadiran</a>
                                <!-- </button> -->
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td rowspan="3" align="center">3</td>
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
                                 <!-- <button id="buttonmateri" -->
                                    <!-- style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"> -->
                                    <a href="{{ route('materi.index', $data->id) }}">Materi</a>
                                <!-- </button> -->
                                <br>
                                <!-- <button id="buttonbukti" style="width: 125px; background-color: #bacfe6"> -->
                                    <a href="{{ route('bukti.index', $data->id) }}">Foto Kehadiran</a>
                                <!-- </button> -->
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td rowspan="3" align="center">4</td>
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
                                 <!-- <button id="buttonmateri" -->
                                    <!-- style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"> -->
                                    <a href="{{ route('materi.index', $data->id) }}">Materi</a>
                                <!-- </button> -->
                                <br>
                                <!-- <button id="buttonbukti" style="width: 125px; background-color: #bacfe6"> -->
                                    <a href="{{ route('bukti.index', $data->id) }}">Foto Kehadiran</a>
                                <!-- </button> -->
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td rowspan="3" align="center">5</td>
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
                                 <!-- <button id="buttonmateri" -->
                                    <!-- style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"> -->
                                    <a href="{{ route('materi.index', $data->id) }}">Materi</a>
                                <!-- </button> -->
                                <br>
                                <!-- <button id="buttonbukti" style="width: 125px; background-color: #bacfe6"> -->
                                    <a href="{{ route('bukti.index', $data->id) }}">Foto Kehadiran</a>
                                <!-- </button> -->
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td rowspan="3" align="center">6</td>
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
                                <!-- <button id="buttonmateri" -->
                                    <!-- style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"> -->
                                    <a href="{{ route('materi.index', $data->id) }}">Materi</a>
                                <!-- </button> -->
                                <br>
                                <!-- <button id="buttonbukti" style="width: 125px; background-color: #bacfe6"> -->
                                    <a href="{{ route('bukti.index', $data->id) }}">Foto Kehadiran</a>
                                <!-- </button> -->
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td rowspan="3" align="center">7</td>
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
                                 <!-- <button id="buttonmateri" -->
                                    <!-- style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"> -->
                                    <a href="{{ route('materi.index', $data->id) }}">Materi</a>
                                <!-- </button> -->
                                <br>
                                <!-- <button id="buttonbukti" style="width: 125px; background-color: #bacfe6"> -->
                                    <a href="{{ route('bukti.index', $data->id) }}">Foto Kehadiran</a>
                                <!-- </button> -->
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td rowspan="3" align="center">8</td>
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
                                 <!-- <button id="buttonmateri" -->
                                    <!-- style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"> -->
                                    <a href="{{ route('materi.index', $data->id) }}">Materi</a>
                                <!-- </button> -->
                                <br>
                                <!-- <button id="buttonbukti" style="width: 125px; background-color: #bacfe6"> -->
                                    <a href="{{ route('bukti.index', $data->id) }}">Foto Kehadiran</a>
                                <!-- </button> -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
