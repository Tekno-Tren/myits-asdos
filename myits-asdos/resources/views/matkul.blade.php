@extends('layouts.app')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" kelas-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" kelas-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-flex justify-content-between  mb-2 border-rad-0 mx-4 my-3">
        <div>
            <h5>{{ $kelas->nama }}</h5>
            <h3> {{ $kelas->nama_dosen }}</h3>
        </div>
        <div>
            <a type="button" class="btn btn-outline-secondary mx-8"
                href="{{ route('pertemuan.index', 'matkul=' . $kelas->id) }}">+ Pertemuan</a>
        </div>
    </div>
    <div class="container mb-3">
        <div class="card ">
            <div class="card-body d-flex flex-wrap justify-content-between justify-content-lg-around ">
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold" style="color: #2FC2A5">Hadir</h6>
                    <p id="countHadir">0</p>
                </div>
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold" style="color: #356099">Izin</h6>
                    <p id="countIzin">0</p>
                </div>
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold" style="color: #FFCD35">Sakit</h6>
                    <p id="countSakit">0</p>
                </div>
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold" style="color: #E74E3E">Alpa</h6>
                    <p id="countAlpa">8</p>
                </div>
                <div class="d-flex flex-column align-items-center mx-2">
                    <h6 class="fs-6 fw-semibold">Total Tatap Muka</h6>
                    <p id="countTotal">8</p>
                </div>
            </div>
        </div>
    </div>

    <div id="alert_message" style="max-height: 150px; overflow-y:auto;"></div>

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
                        @if ($pertemuan != '')
                            @foreach ($pertemuan as $key => $p)
                                <tr>
                                    <td align="center">
                                        {{ $key + 1 }}
                                    </td>
                                    <td align="center">
                                        <div>
                                            <p>{{ $p->tanggal }}</p>
                                            <p>{{ $p->jam }}</p>
                                            <p>{{ $p->tempat }}</p>
                                        </div>
                                    </td>
                                    <td align="center">
                                        <div class="vertical-buttons switch-field justify-content-center">
                                            @if ($p->materi && $p->filename)
                                                <input type="radio" id="{{ 'hadir_' . $p->id }}" class="btn_hadir"
                                                    name="p_{{ $p->id }}" value="1"
                                                    data-pertemuan="{{ $p->id }}"
                                                    {{ $p->status_kehadiran == 1 ? 'checked' : '' }} />
                                                <label for="{{ 'hadir_' . $p->id }}">H</label>

                                                <input type="radio" id="{{ 'izin_' . $p->id }}" class="btn_izin"
                                                    name="p_{{ $p->id }}" value="2"
                                                    data-pertemuan="{{ $p->id }}"
                                                    {{ $p->status_kehadiran == 2 ? 'checked' : '' }} />
                                                <label for="{{ 'izin_' . $p->id }}">I</label>

                                                <input type="radio" id="{{ 'sakit_' . $p->id }}" class="btn_sakit"
                                                    name="p_{{ $p->id }}" value="3"
                                                    data-pertemuan="{{ $p->id }}"
                                                    {{ $p->status_kehadiran == 3 ? 'checked' : '' }} />
                                                <label for="{{ 'sakit_' . $p->id }}">S</label>

                                                <input type="radio" id="{{ 'alpa_' . $p->id }}" class="btn_alpa"
                                                    name="p_{{ $p->id }}" value="0"
                                                    data-pertemuan="{{ $p->id }}"
                                                    {{ $p->status_kehadiran == 0 ? 'checked' : '' }} />
                                                <label for="{{ 'alpa_' . $p->id }}">A</label>
                                            @else
                                                <input type="radio" id="{{ 'hadir_' . $p->id }}" class="btn_hadir"
                                                    name="p_{{ $p->id }}" value="1"
                                                    data-pertemuan="{{ $p->id }}" disabled />
                                                <label for="{{ 'hadir_' . $p->id }}">H</label>

                                                <input type="radio" id="{{ 'izin_' . $p->id }}" class="btn_izin"
                                                    name="p_{{ $p->id }}" value="2"
                                                    data-pertemuan="{{ $p->id }}" disabled />
                                                <label for="{{ 'izin_' . $p->id }}">I</label>

                                                <input type="radio" id="{{ 'sakit_' . $p->id }}" class="btn_sakit"
                                                    name="p_{{ $p->id }}" value="3"
                                                    data-pertemuan="{{ $p->id }}" disabled />
                                                <label for="{{ 'sakit_' . $p->id }}">S</label>

                                                <input type="radio" id="{{ 'alpa_' . $p->id }}" class="btn_alpa"
                                                    name="p_{{ $p->id }}" value="0"
                                                    data-pertemuan="{{ $p->id }}"
                                                    {{ $p->status_kehadiran == 0 ? 'checked' : '' }} />
                                                <label for="{{ 'alpa_' . $p->id }}">A</label>
                                            @endif
                                        </div>
                                    </td>
                                    <td align="center">
                                        @if (Auth::check() && Auth::user()->departemen != '000')
                                            <form action="{{ route('materi.index', $p->id) }}" method="get">
                                                @csrf
                                                @method('GET')
                                                <input type="hidden" name="pertemuan_id" value="{{ $p->id }}"
                                                    id="">
                                                <input type="hidden" name="kelas_id" value="{{ $kelas->id }}"
                                                    id="">
                                                <button type="submit" class="btn btn-outline-secondary mx-8 mt-3">Berita
                                                    Acara</button>
                                            </form>

                                            <form action="{{ route('bukti.index', $p->id) }}" method="get">
                                                @csrf
                                                @method('GET')
                                                <input type="hidden" name="pertemuan_id" value="{{ $p->id }}"
                                                    id="">
                                                <input type="hidden" name="kelas_id" value="{{ $kelas->id }}"
                                                    id="">
                                                <button type="submit" class="btn btn-outline-secondary mx-8 mt-2">Bukti
                                                    Kehadiran</button>
                                            </form>
                                        @else
                                        <button type="button" class="btn btn-berita_acara btn-outline-secondary mx-8 mt-2"
                                        class="btn btn_modal btn-primary" data-id="{{ $p->id }}" onclick="modalBeritaAcara('{!!$p->berita_acara != null ? $p->berita_acara->materi : ''!!}')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#beritaAcaraModal">
                                        Berita Acara
                                    </button>
                                            @if ($p->bukti_kehadiran)
                                                <a type="button"
                                                    href="{{ url('/') . '/storage/' . $p->bukti_kehadiran->file_path }}"
                                                    class="btn btn-outline-secondary mx-8 mt-2" target="blank">Bukti
                                                    Kehadiran
                                                </a>
                                            @else
                                                <button type="button" class="btn btn-outline-secondary mx-8 mt-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-custom-class="custom-tooltip"
                                                    data-bs-title="Bukti belum di upload">
                                                    Bukti
                                                    Kehadiran
                                                </button>
                                            @endif
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if (Auth::check() && Auth::user()->departemen == '000')
        <div class="modal berita_acara fade" id="beritaAcaraModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Berita Acara</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="content-berita_acara"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@section('scripts')
    @if (Auth::check() && Auth::user()->departemen == '000')
        <script>
            // show modal
            function modalBeritaAcara(content) {
                $('#content-berita_acara').empty();
 ;               $('#content-berita_acara').append('<p>' + content + '</p>');
                $('#beritaAcaraModal').modal('show');
            }

        </script>
    @endif

    <script>
        $('.btn_hadir, .btn_izin, .btn_sakit, .btn_alpa').on('change', function() {
            var id_pertemuan = $(this).data('pertemuan');
            var status = $(this).val();
            $.ajax({
                url: "{{ route('update.kehadiran') }}",
                // url: "https://6ef8-182-253-50-130.ngrok-free.app/update-kehadiran",
                type: "POST",
                data: {
                    id_pertemuan: id_pertemuan,
                    status: status,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    var message = data.message;

                    $('#alert_message').append(`
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    ${message}

                    <button type="button" class="btn-close" kelas-bs-dismiss="alert" aria-label="Close">
                    </button>

                </div>
                `), setTimeout(() => {
                        $('#alert_message').empty();
                    }, 3000)
                    countHadir();
                }
            });
        });
    </script>

    <script>
        countHadir();

        function countHadir() {
            let countHadir = $('input[type="radio"][id^="hadir_"]:checked').length;
            let countIzin = $('input[type="radio"][id^="izin_"]:checked').length;
            let countAlpa = $('input[type="radio"][id^="alpa_"]:checked').length;
            let countSakit = $('input[type="radio"][id^="sakit_"]:checked').length;

            $('#countHadir').text(countHadir);
            $('#countIzin').text(countIzin);
            $('#countSakit').text(countSakit);
            $('#countAlpa').text(countAlpa);
            $('#countTotal').text(countAlpa + countIzin + countSakit + countHadir);

        }
    </script>
@endsection
