
@extends('layouts.custom-master1')

@section('styles')



@endsection

@section('content')
	
        <div class="container">
            <div class="grid grid-cols-12 authentication authentication-basic items-center h-full w-full mx-auto">
                <div class="xxl:col-span-4 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12">
                    <div class="my-[3rem] flex justify-center">
                        <a href="{{url('index')}}">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                        </a>
                    </div>
                    <div class="box">
                        <div class="box-body !p-[3rem]">
                            <p class="h5 font-semibold mb-2 text-center">Create Password</p>
                            <p class="mb-4 text-[#8c9097] opacity-[0.7] font-normal text-center">Hello Jhon !</p>
                            <div class="grid grid-cols-12 gap-y-4">
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="create-password" class="form-label text-default">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg !rounded-tl-md !rounded-bl-md" id="create-password" placeholder="password">
                                        <button class="ti-btn ti-btn-light !rounded-tl-none !mb-0 !rounded-bl-none !border !border-s-0 !border-defaultborder/10" type="button" onclick="createpassword('create-password',this)"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="create-confirmpassword" class="form-label text-default">Confirm Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg !rounded-tl-md !rounded-bl-md" id="create-confirmpassword" placeholder="password">
                                        <button class="ti-btn ti-btn-light !rounded-tl-none !mb-0 !rounded-bl-none !border !border-s-0 !border-defaultborder/10" onclick="createpassword('create-confirmpassword',this)" type="button"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label text-[#8c9097] font-normal" for="defaultCheck1">
                                                Remember password ?
                                            </label>  
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12 grid mt-0">
                                    <button class="ti-btn ti-btn-lg bg-primary text-white !font-[500] dark:border-defaultborder/10">Save Password</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-[0.75rem] text-[#8c9097] mt-4">Back to home ? <a href="{{url('index')}}" class="text-primary">Click Here</a></p>
                            </div>
                            <div class="text-center my-4 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <div class="btn-list text-center">
                                <button class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <i class="ri-facebook-line font-bold text-dark opacity-[0.7]"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <i class="ri-google-line font-bold text-dark opacity-[0.7]"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <i class="ri-twitter-x-line font-bold text-dark opacity-[0.7]"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
            </div>
        </div>

@endsection

@section('scripts')
	
        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>

@endsection
