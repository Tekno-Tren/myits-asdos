<x-guest-layout>

<div class="container d-flex align-items-center my-auto">
    <div class="card">
        <div class="card-body">
            <h1>Login</h1>

            {{-- Nanti buat alert manual --}}
            {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="nrp" class="card-text">NRP :</label>
                    <input type="text" name="username" id="nrp" class="form-control">
                    {{-- @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $errors->get('email') }}</p>
                    @enderror --}}
                </div>
               <div class="mb-3">
                    <label for="password" class="card-text">Password :</label>
                    <input type="password" name="password" id="password" class="form-control">
                    {{-- @error('password')
                            <p class="text-red-500 text-sm mt-2">{{ $errors->get('password') }}</p>
                    @enderror --}}
               </div>


                <!-- <div class="display: flex; color:#013880">
                    <label for="remember" class="card-text">Remember me</label>
                    <input type="checkbox" name="remember" id="remember" >
                </div> -->

                <button type="submit" name="login" class="btn btn-primary">Login</button>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>
            <a href="{{route('register')}}">Register</a>
        </div>
    </div>
</div>
</x-guest-layout>
