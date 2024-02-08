<x-guest-layout>

<div class="container d-flex align-items-center my-auto justify-content-center" style="height: 100vh;">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="card " style=" width: 400px;max-width: 80% " >
        <div class="card-body">
            <h1 style="text-align: center">Login</h1>

            {{-- Nanti buat alert manual --}}
            {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="card-text mb-1">NRP :</label>
                    <input type="text" name="username" id="username" class="form-control">
                    {{-- @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $errors->get('email') }}</p>
                    @enderror --}}
                </div>
               <div class="mb-3">
                    <label for="password" class="card-text mb-1">Password :</label>
                    <input type="password" name="password" id="password" class="form-control">
                    {{-- @error('password')
                            <p class="text-red-500 text-sm mt-2">{{ $errors->get('password') }}</p>
                    @enderror --}}
               </div>


                <!-- <div class="display: flex; color:#013880">
                    <label for="remember" class="card-text">Remember me</label>
                    <input type="checkbox" name="remember" id="remember" >
                </div> -->

                <div class="d-flex flex-column">
                    <button type="submit" name="login" class="btn btn-primary"> <b>Login</b></button>
                    <a type="button" name="register" class="btn btn-warning mt-2" href="{{ route('register') }}">Register</a>
                </div>

                <div class="d-flex justify-content-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>
            <!-- <a href="{{route('register')}}">Register</a> -->
        </div>
    </div>
</div>
</x-guest-layout>
