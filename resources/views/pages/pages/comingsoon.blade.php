
@extends('layouts.custom-master2')

@section('styles')



@endsection

@section('content')
	
        <div class="grid grid-cols-12 p-[3rem] authentication coming-soon mx-0 text-defaulttextcolor dark:text-defaulttextcolor/70 text-defaultsize text-center">
        
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4  col-span-12 lg:block hidden px-0">
                <div class="primary-background w-full h-full flex items-center justify-center coming-soom-image-container">
                    <img src="{{asset('build/assets/images/authentication/4.png')}}" alt="" class="imig-fluid">
                </div>
            </div>

            <div class="xxl:col-span-8 xl:col-span-8 lg:col-span-8 col-span-12">
                <div class="grid grid-cols-12 items-center h-full">
                <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-2 md:col-span-2 sm:col-span-2 col-span-12"></div>
                    <div class="xxl:col-span-6 xl:col-span-8 lg:col-span-8 md:col-span-8 sm:col-span-8 col-span-12">
                        <div class="mb-2 flex justify-center">
                            <a href="{{url('index')}}">
                                <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="" class="authentication-brand !w-10 !h-10">
                            </a>
                        </div>
                        <p class="font-semibold text-[0.75rem] mb-1 opacity-[0.4]">STAY TUNED</p>
                        <h1 class="font-bold mb-4 text-[2rem] sm:text-[2.5rem]">Coming Soon</h1>
                        <p class="mb-6">Our website is currently under construction, enter your email id to get latest updates and notifications about the website.</p>
                        <div class="input-group mb-[3em]">
                            <input type="email" class="form-control w-full !rounded-tl-md !rounded-bl-md form-control-lg " placeholder="info@gmail.com" aria-label="info@gmail.com" aria-describedby="button-addon2">
                            <button class="ti-btn bg-primary text-white !rounded-tl-none !rounded-bl-none !mb-0" type="button" id="button-addon2">Subscribe</button>
                        </div>
                        <div class="grid grid-cols-12 mt-6 mb-[3rem] xxl:gap-y-0 gap-4 justify-center" id="timer">
                        </div>
                        <div class="mt-[3rem]">
                            <div class="btn-list">
                                <button class="ti-btn ti-btn-icon bg-primary text-white font-[500] me-[0.365rem]">
                                    <i class="ri-facebook-line font-bold"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon bg-secondary text-white font-[500] me-[0.365rem]">
                                    <i class="ri-twitter-x-line"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon bg-warning text-white font-[500] me-[0.365rem]">
                                    <i class="ri-instagram-line font-bold"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon bg-success text-white font-[500] me-[0.365rem]">
                                    <i class="ri-github-line font-bold"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon bg-danger text-white font-[500]">
                                    <i class="ri-youtube-line font-bold"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-2 lg:col-span-2 md:col-span-2 sm:col-span-2 col-span-12">
                    </div>
                </div>
            </div>
    
        </div>

@endsection

@section('scripts')
	
        <!-- Internal Coming Soon JS -->
        <script src="{{asset('build/assets/coming-soon.js')}}"></script>

@endsection
