
@extends('layouts.custom-master1')

@section('styles')



@endsection

@section('content')
            
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 authentication authentication-basic items-center h-full text-defaultsize text-defaulttextcolor">
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2"></div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 flex flex-col">
                    <div class="my-[3rem] flex justify-center">
                        <a href="{{url('index')}}">
                        <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                        <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                        </a>
                    </div>
                    <div class="box">
                        <div class="box-body !p-[3rem]">
                        <p class="h5 font-semibold mb-2 text-center text-[1.25rem]">Verify Your Account</p>
                        <p class="mb-4 text-[#8c9097] opacity-[0.7] font-normal text-center">Enter the 4 digit code sent to the
                            registered email Id.</p>
                        <div class="grid grid-cols-12 gap-y-4">
                            <div class="xl:col-span-12 col-span-12 mb-2">
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-3 px-1">
                                <input type="text" class="form-control w-full sm:!p-3 !p-1 !rounded-md form-control-lg text-center !text-[1rem]"
                                    id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                </div>
                                <div class="col-span-3 px-1">
                                <input type="text" class="form-control w-full sm:!p-3 !p-1 !rounded-md form-control-lg text-center !text-[1rem]"
                                    id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                </div>
                                <div class="col-span-3 px-1">
                                <input type="text" class="form-control w-full sm:!p-3 !p-1 !rounded-md form-control-lg text-center !text-[1rem]"
                                    id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                </div>
                                <div class="col-span-3 px-1">
                                <input type="text" class="form-control w-full sm:!p-3 !p-1 !rounded-md form-control-lg text-center !text-[1rem]"
                                    id="four" maxlength="1">
                                </div>
                            </div>
                            <div class="form-check flex items-center gap-2 mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Did not recieve a code ?<a href="{{url('mail')}}" class="text-primary ms-2 d-inline-block">Resend</a>
                                </label>
                            </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12 grid mt-2">
                            <a href="{{url('index')}}"
                                class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10">Verify</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="text-[0.75rem] text-[#8c9097] mt-4 text-danger"><sup><i class="ri-asterisk"></i></sup>Don't share
                            the verification code with anyone !</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2"></div>
            </div>
        </div>

@endsection

@section('scripts')
	
        <!-- Internal Two Step Verification JS -->
        <script src="{{asset('build/assets/two-step-verification.js')}}"></script>

@endsection
