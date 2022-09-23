@extends('main')

@section('content')

<div class="flex flex-col items-center justify-center w-2/6 gap-5 p-8 my-5 border-2 border-gray-900 shadow-md shadow-gray-900 bg-gradient-to-r from-green-200 to-green-300 rounded-3xl">
    <div class="flex flex-col items-center justify-center gap-3 text-4xl font-bold tracking-tight">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 p-1 border-4 border-black rounded-full" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
        </svg>
        <div>
            Create your account
        </div>
    </div>
    <form action="validate_register" method="POST" class="flex flex-col items-start justify-center w-full gap-4 px-10 py-3">
        @csrf
        @if (session('message'))
            <div class="w-full p-2 text-sm text-center bg-green-400 rounded-full">
                {{ session('message') }}
            </div>
        @endif
        <div class='flex flex-col items-center justify-center w-full gap-2 pb-3 text-lg'>
            <!-- @if($errors->has('name'))
				<span class="text-danger">{{ $errors->first('name') }}</span>
			@endif -->
            <div class="flex items-center justify-center w-full gap-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
                <input class="w-full px-3 py-1 border-2 border-gray-700 border-solid rounded-sm bg-slate-100 " maxlength="30" name="name" type="text" placeholder="Name*" autocomplete="name" required/>
            </div>
            <div class="flex items-center justify-center w-full gap-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
                <input class="w-full px-3 py-1 border-2 border-gray-700 border-solid rounded-sm bg-slate-100 " maxlength="50" name="email" type="email" placeholder="Email*" autocomplete="email" required/>
            </div>
            <div class="flex items-center justify-center w-full gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                </svg>
                <input class="w-full px-3 py-1 border-2 border-gray-700 border-solid rounded-sm bg-slate-100 " minlength={6} maxlength="16" name="password" type="password" placeholder="Password*" autocomplete="password" required/>
            </div>
            <div class="flex items-center justify-center w-full gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                </svg>
                <input class="w-full px-3 py-1 border-2 border-gray-700 border-solid rounded-sm bg-slate-100 " minlength={6} maxlength="16" name="confirmPassword" type="password" placeholder="Confirm Password*" autocomplete="confirm password" required/>
            </div>
        </div>
        <button type="submit" class="w-full py-2 text-xl font-bold tracking-wide text-gray-200 bg-green-900 rounded-sm shadow-md shadow-black">
            LOGIN
        </button>
        <div class="w-full tracking-normal text-center">
            <span> Already registered ? </span>
            <a href="/" class="text-red-600 ">
                Just Sign In
            </a>
        </div>
    </form>
</div>

@endsection('content')