
@extends('layouts.custom-master2')

@section('styles')



@endsection

@section('content')
	
        <div class="grid grid-cols-12 authentication mx-0 text-defaulttextcolor text-defaultsize">
            <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12 xl:block hidden px-0">
                <div class="bg-primary/10  w-full h-full flex items-center justify-center coming-soom-image-container">
                    <img src="{{asset('build/assets/images/authentication/11.png')}}" alt="" class="imig-fluid">
                </div>
            </div>
            <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-12 col-span-12">
                <div class="grid grid-cols-12  items-center h-full">
                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2"></div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12">
                        <div class="p-[3rem]">
                            <div class="mb-4">
                                <a href="{{url('index')}}">
                                    <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="" class="authentication-brand desktop-logo">
                                    <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="" class="authentication-brand desktop-dark">
                                </a>
                            </div>
                            <p class="h5 font-semibold mb-2 text-[1.25rem]">Verify Your Account</p>
                            <p class="mb-4 text-[#8c9097] opacity-[0.7] font-normal">Enter the 4 digit code sent to the registered email Id.</p>
                            <div class="grid grid-cols-12 gap-4">
                                <div class="xl:col-span-12 col-span-12 mb-4">
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-3 px-1">
                                            <input type="text" class="form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                        </div>
                                        <div class="col-span-3 px-1">
                                            <input type="text" class="form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                        </div>
                                        <div class="col-span-3 px-1">
                                            <input type="text" class="form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                        </div>
                                        <div class="col-span-3 px-1">
                                            <input type="text" class="form-control form-control-lg w-full !rounded-md !text-[1rem] text-center" id="four" maxlength="1">
                                        </div>
                                    </div>
                                    <div class="form-check flex items-center gap-2 mt-2 mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Did not recieve a code ?<a href="{{url('mail')}}" class="text-primary ms-2 inline-block">Resend</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12 grid">
                                    <a href="{{url('index')}}" class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10">Verify</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-[0.75rem] text-danger mt-4"><sup><i class="ri-asterisk"></i></sup>Don't share the verification code with anyone !</p>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2 "></div>
                </div>
            </div>
        </div>

@endsection

@section('scripts')
	
        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <script src="{{asset('build/assets/two-step-verification.js')}}"></script>
        <!-- Internal Two Step Verification JS -->

        <!-- Internal Sing-Up JS -->
        @vite('resources/assets/js/authentication.js')

@endsection
