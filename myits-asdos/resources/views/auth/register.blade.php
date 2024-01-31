<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="card-text">Name :</label>
            <input type="text" name="name" id="name" class="form-control">
            {{-- @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $errors->get('email') }}</p>
            @enderror --}}
        </div>
        <div class="mb-3">
            <label for="nrp" class="card-text">Username/NRP :</label>
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
    </form>
</x-guest-layout>
