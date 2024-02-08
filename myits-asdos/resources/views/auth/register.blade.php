<x-guest-layout>

    <div class="container mt-4">
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form method="POST" action="{{ route('register.store') }}" style="">
            @csrf
            @method('POST')

            <body style="background-color: #013880">
                <div class="registrasi-container d-flex flex-column align-items-center px-3 pt-5 pb-5 ">
                    <div class="form-container ">
                        <h1 class="fw-normal">Halaman Registrasi</h1>
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="nama" class="card-text">Nama :</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                value="{{ old('nama') }}">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="card-text">NRP :</label>
                            <input type="text" name="username" id="username" class="form-control"
                                value="{{ old('username') }}">
                        </div>
                        <div class="mb-3">
                            <label for="departemen" class="card-text">Departemen :</label>
                            <input type="text" name="departemen" id="departemen" class="form-control"
                                value="{{ old('departemen') }}">
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="card-text">Telepon :</label>
                            <input type="text" name="telp" id="telp" class="form-control"
                                value="{{ old('telp') }}">
                        </div>
                        <div class="mb-3">
                            <label for="bank" class="card-text">BANK :</label>
                            <input type="text" name="bank" id="bank" class="form-control"
                                value="{{ old('bank') }}">
                        </div>
                        <div class="mb-3">
                            <label for="norek" class="card-text">Nomor Rekening :</label>
                            <input type="text" name="norek" id="norek" class="form-control"
                                value="{{ old('norek') }}">
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="card-text">NIK :</label>
                            <input type="text" name="nik" id="nik" class="form-control"
                                value="{{ old('nik') }}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="card-text">Alamat :</label>
                            <input type="text" name="alamat" id="alamat" class="form-control"
                                value="{{ old('alamat') }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="card-text">Password :</label>
                            <input type="password" name="password" id="password" class="form-control"
                                value="{{ old('password') }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="card-text">Konfirmasi Password :</label>
                            <input type="password" name="password" id="password" class="form-control"
                                value="{{ old('password') }}">
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>

</x-guest-layout>
