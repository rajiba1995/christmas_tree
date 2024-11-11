@extends('layouts.custom-master2')

@section('styles')
<!-- Add any custom styles here if needed -->
@endsection

@section('content')

<div class="container">
    <div class="grid grid-cols-12 authentication authentication-basic items-center h-full text-defaultsize text-defaulttextcolor">
        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-8 col-span-12">
            <div class="my-[2.5rem] flex justify-center">
                <a href="{{ url('index') }}">
                    <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                    <img src="{{ asset('build/assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                </a>
            </div>
            <div class="box">
                <div class="box-body !p-[3rem]">
                    <p class="h5 font-semibold mb-2 text-center !text-defaulttextcolor dark:!text-defaulttextcolor/85">Sign In</p>
                    <p class="mb-4 text-[#8c9097] opacity-[0.7] font-normal text-center">Welcome back!</p>
                    
                    <!-- Laravel Login Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="grid grid-cols-12 gap-y-4">
                            <!-- Email Field -->
                            <div class="xl:col-span-12 col-span-12">
                                <x-input-label for="email" class="form-label text-default" :value="__('Email')" />
                                <x-text-input id="email" class="form-control form-control-lg w-full !rounded-md" type="email" name="email" :value="old('email')" autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password Field -->
                            <div class="xl:col-span-12 col-span-12">
                                {{-- <label for="password" class="form-label text-default block">Password
                                    <a href="{{ route('password.request') }}" class="float-right text-danger">Forget password?</a>
                                </label> --}}
                                <div class="input-group">
                                    <x-text-input id="password" class="form-control form-control-lg !rounded-tl-md !rounded-bl-md" type="password" name="password" />
                                    <button class="ti-btn ti-btn-light !rounded-tl-none !rounded-bl-none !mb-0 !border !border-s-0 !border-defaultborder/10" type="button" onclick="createpassword('password',this)" id="button-addon2">
                                        <i class="ri-eye-off-line align-middle"></i>
                                    </button>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me Checkbox -->
                            {{-- <div class="mt-2">
                                <div class="form-check flex items-center gap-2">
                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                    <label class="form-check-label text-[#8c9097] font-normal" for="remember_me">
                                        Remember password?
                                    </label>
                                </div>
                            </div> --}}

                            <!-- Submit Button -->
                            <div class="xl:col-span-12 col-span-12 grid">
                                <x-primary-button class="ti-btn ti-btn-lg bg-primary !border-0 text-white !font-medium w-full">
                                    {{ __('Sign In') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                    
                    {{-- <div class="text-center">
                        <p class="text-[0.75rem] text-[#8c9097] mt-4">Don't have an account? <a href="{{ url('sign-up-basic') }}" class="text-primary">Sign Up</a></p>
                    </div> --}}
                    
                    {{-- <div class="text-center my-4 authentication-barrier">
                        <span>OR</span>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
    </div>
</div>

@endsection

@section('scripts')
<!-- Show Password JS -->
<script src="{{ asset('build/assets/show-password.js') }}"></script>
@endsection
