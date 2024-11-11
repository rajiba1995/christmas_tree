
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">SwiperJs</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Advanced Ui <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">SwiperJs 
                            </a> </li>
                        </ol>
                        </nav>
                    </div>

                    <div class="flex xl:my-auto right-content align-items-center">
                        <div class="pe-1 xl:mb-0">
                        <button type="button" class="ti-btn ti-btn-info-full text-white ti-btn-icon me-2 btn-b !mb-0">
                            <i class="mdi mdi-filter-variant"></i>
                        </button>
                        </div>
                        <div class="pe-1 xl:mb-0">
                        <button type="button" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                            <i class="mdi mdi-star"></i>
                        </button>
                        </div>
                        <div class="pe-1 xl:mb-0">
                        <button type="button" class="ti-btn ti-btn-warning-full text-white  ti-btn-icon me-2 !mb-0">
                            <i class="mdi mdi-refresh"></i>
                        </button>
                        </div>
                        <div class="xl:mb-0">
                        <div class="hs-dropdown ti-dropdown">
                            <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button" id="dropdownMenuDate"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            14 Aug 2019 <i class="bi bi-chevron-down text-[.6rem] font-semibold"></i>
                            </button>
                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[100]" aria-labelledby="dropdownMenuDate">
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2015</a></li>
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2016</a></li>
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2017</a></li>
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2018</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Basic Swiper
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper swiper-basic">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-27.jpg')}}" class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-26.jpg')}}" class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}"  class="!rounded-sm" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Swiper With Navigation
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper swiper-navigation">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Swiper with Pagination
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper pagination">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-33.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Dynamic Pagination
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper pagination-dynamic">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-21.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-17.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-16.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Pagination With Progress
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper pagination-progress">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-12.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-5.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Pagination Fraction
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper swiper-basic pagination-fraction">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-16.jpg')}}" class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Custom Paginatioin
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper  custom-pagination">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-5.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-33.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Scrollbar Swiper
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper scrollbar-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Vertical Swiper
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper5 swiper-vertical !h-[352px] ">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}"class="!rounded-sm" alt=""></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}"class="!rounded-sm" alt=""></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-17.jpg')}}"class="!rounded-sm" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    </div>
                            </div>
                        </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Mouse Wheel Control
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper vertical vertical-mouse-control !h-[352px]">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" class="!rounded-sm"alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Keyboard Control
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper keyboard-control !h-[352px]">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-12.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Nested Swiper
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper keyboard-control !h-[352px]">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-12.jpg')}}"class="!rounded-sm" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}"class="!rounded-sm" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Effect Cube
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper swiper-effect-cube !h-[352px]">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Effect Fade
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper swiper-fade !h-[352px]">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide ">
                                                <img src="{{asset('build/assets/images/media/media-18.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-19.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-20.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Effect Flip
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper swiper-flip !h-[352px]">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Effect Coverflow
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="swiper swiper-overflow">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-59.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-6 text-defaultsize">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Thumbs Gallery
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-preview">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded-sm !w-full" src="{{asset('build/assets/images/media/media-1.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded-sm !w-full" src="{{asset('build/assets/images/media/media-2.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded-sm !w-full" src="{{asset('build/assets/images/media/media-3.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded-sm !w-full" src="{{asset('build/assets/images/media/media-6.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded-sm !w-full" src="{{asset('build/assets/images/media/media-7.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded-sm !w-full" src="{{asset('build/assets/images/media/media-10.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid rounded-sm !w-full" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div class="swiper swiper-view">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-1.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-2.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-3.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-6.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-7.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-10.jpg')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Space Between Swiper Slide</h5>
                            </div>
                            <div class="box-body">
                                <div class="swiper mySwiper6">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/1.jpg')}}" alt="image" class="rounded-sm"></div>
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/2.jpg')}}" alt="image" class="rounded-sm"></div>
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/3.jpg')}}" alt="image" class="rounded-sm"></div>
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/4.jpg')}}" alt="image" class="rounded-sm"></div>
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/5.jpg')}}" alt="image" class="rounded-sm"></div>
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/6.jpg')}}" alt="image" class="rounded-sm"></div>
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/7.jpg')}}" alt="image" class="rounded-sm"></div>
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/8.jpg')}}" alt="image" class="rounded-sm"></div>
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/9.jpg')}}" alt="image" class="rounded-sm"></div>
                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/10.jpg')}}" alt="image" class="rounded-sm"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">Free Mode Swiper Slide</h5>
                            </div>
                            <div class="box-body">
                            <div class="swiper mySwiper7">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/1.jpg')}}" alt="image" class="rounded-sm"></div>
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/2.jpg')}}" alt="image" class="rounded-sm"></div>
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/3.jpg')}}" alt="image" class="rounded-sm"></div>
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/4.jpg')}}" alt="image" class="rounded-sm"></div>
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/5.jpg')}}" alt="image" class="rounded-sm"></div>
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/6.jpg')}}" alt="image" class="rounded-sm"></div>
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/7.jpg')}}" alt="image" class="rounded-sm"></div>
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/8.jpg')}}" alt="image" class="rounded-sm"></div>
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/9.jpg')}}" alt="image" class="rounded-sm"></div>
                                <div class="swiper-slide"><img src="{{asset('build/assets/images/gallery/10.jpg')}}" alt="image" class="rounded-sm"></div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

@endsection

@section('scripts')
	
        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Internal Swiper JS -->
        @vite('resources/assets/js/swiper.js')

@endsection
