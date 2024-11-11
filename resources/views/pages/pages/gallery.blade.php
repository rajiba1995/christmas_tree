
@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Gallery</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Pages <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Gallery 
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
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-43.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <a href="{{asset('build/assets/images/media/media-60.jpg')}}" class="glightbox box" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="image" >
                            </a>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Image With Description</h5>
                                </div>
                                <div class="box-body">
                                    <div class="sm:grid grid-cols-12 gap-6 sm:space-y-0 space-y-6">
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="inner">
                                                <a href="{{asset('build/assets/images/media/media-40.jpg')}}"   class="gallery2"
                                            data-glightbox='title:Description Bottom; description: Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'>
                                                    <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="w-full !rounded-sm" >
                                                    <div class="image-overlay">
                                                        <h5 class="image-caption">Image-5</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="inner">
                                                <a href="{{asset('build/assets/images/media/media-41.jpg')}}"   class="gallery2"
                                            data-glightbox='title:Description Bottom; description: Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'>
                                                    <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" class="w-full !rounded-sm" >
                                                    <div class="image-overlay">
                                                        <h5 class="image-caption">Image-6</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="inner">
                                                <a href="{{asset('build/assets/images/media/media-42.jpg')}}"   class="gallery2"
                                            data-glightbox='title:Description Bottom; description: Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'>
                                                    <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" class="w-full !rounded-sm" >
                                                    <div class="image-overlay">
                                                        <h5 class="image-caption">Image-7</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="inner">
                                                <a href="{{asset('build/assets/images/media/media-43.jpg')}}"   class="gallery2"
                                            data-glightbox='title:Description Bottom; description: Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'>
                                                    <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image" class="w-full !rounded-sm" >
                                                    <div class="image-overlay">
                                                        <h5 class="image-caption">Image-8</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Video Gallery</h5>
                                </div>
                                <div class="box-body">
                                    <div class="sm:grid grid-cols-12 gap-6 sm:space-y-0 space-y-6">
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="inner">
                                                <a href="{{asset('build/assets/images/video/gallery-video-1.mp4')}}" class="gallery3">
                                                    <img src="{{asset('build/assets/images/gallery/10.jpg')}}" alt="image" class="w-full !rounded-sm" >
                                                    <div class="image-overlay">
                                                        <h5 class="image-caption">Image-9</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="inner">
                                                <a href="{{asset('build/assets/images/video/gallery-video-1.mp4')}}" class="gallery3">
                                                    <img src="{{asset('build/assets/images/gallery/9.jpg')}}" alt="image" class="w-full !rounded-sm" >
                                                    <div class="image-overlay">
                                                        <h5 class="image-caption">Image-10</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="inner">
                                                <a href="{{asset('build/assets/images/video/gallery-video-1.mp4')}}" class="gallery3">
                                                    <img src="{{asset('build/assets/images/gallery/8.jpg')}}" alt="image" class="w-full !rounded-sm" >
                                                    <div class="image-overlay">
                                                        <h5 class="image-caption">Image-11</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="inner">
                                                <a href="{{asset('build/assets/images/video/gallery-video-1.mp4')}}" class="gallery3">
                                                    <img src="{{asset('build/assets/images/gallery/7.jpg')}}" alt="image" class="w-full !rounded-sm" >
                                                    <div class="image-overlay">
                                                        <h5 class="image-caption">Image-12</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

@endsection

@section('scripts')
	
        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')

@endsection
