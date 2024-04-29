<x-guest-layout>
    <div class="container mt-4">
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form method="POST" action="{{ route('register-admin.store') }}" style="">
            @csrf
            @method('POST')

            <body style="background-color: #013880">
                <div class="registrasi-container d-flex flex-column align-items-center px-3 pt-5 pb-5 ">
                    <div class="form-container ">
                        <h1 class="fw-normal">Halaman Registrasi Admin</h1>
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="nama" class="card-text">Nama :</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                value="{{ old('nama') }}">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="card-text">NIP :</label>
                            <input type="text" name="username" id="username" class="form-control"
                                value="{{ old('username') }}">
                        </div>
                        <input type="hidden" id="departemen" name="departemen" value="000">
                        <input type="hidden" id="telp" name="telp" value="000">
                        <input type="hidden" id="bank" name="bank" value="000">
                        <input type="hidden" id="norek" name="norek" value="000">
                        <input type="hidden" id="nik" name="nik" value="000">
                        <input type="hidden" id="alamat" name="alamat" value="000">
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
