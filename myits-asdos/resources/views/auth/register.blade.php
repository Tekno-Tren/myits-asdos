<x-guest-layout>

    <form method="POST" action="{{ route('register') }} style="padding: 20px; margin-top: 10px">
        @csrf
<body style="background-color: #013880">
            <div class="registrasi-container d-flex flex-column align-items-center px-3 pt-5 pb-5 ">
                <div class="form-container ">
                    <h1>Halaman Registrasi</h1>
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="nama" class="card-text">Nama :</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="card-text">NRP :</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="departemen" class="card-text">Departemen :</label>
                        <input type="text" name="departemen" id="departemen" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="card-text">Telepon :</label>
                        <input type="text" name="telp" id="telp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="bank" class="card-text">BANK :</label>
                        <input type="text" name="bank" id="bank" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="norek" class="card-text">Nomor Rekening :</label>
                        <input type="text" name="norek" id="norek" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="card-text">NIK :</label>
                        <input type="text" name="nik" id="nik" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="card-text">Alamat :</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="card-text">Password :</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="card-text">Konfirmasi Password :</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Register</button>
                </div>
            </div>
</body>

                    <!-- <div class="display: flex; color:#013880">
            <label for="remember" class="card-text">Remember me</label>
            <input type="checkbox" name="remember" id="remember" >
        </div> -->


    </form>
</x-guest-layout>
