@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10">
         <!-- Success Message -->
         @if(session('success'))
         <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
             <p>{{ session('success') }}</p>
         </div>
         @endif
       <!-- Registration Form -->
       <form method="POST" action="{{ route('register') }}" class="bg-white p-8 shadow-md rounded-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full p-3 border border-gray-300 rounded-lg @error('name') border-red-500 @enderror" required>
            @error('name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full p-3 border border-gray-300 rounded-lg @error('email') border-red-500 @enderror" required>
            @error('email')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg @error('password') border-red-500 @enderror" required>
            @error('password')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-3 border border-gray-300 rounded-lg @error('password_confirmation') border-red-500 @enderror" required>
            @error('password_confirmation')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg">Register</button>
    </form>
    </div>
@endsection
