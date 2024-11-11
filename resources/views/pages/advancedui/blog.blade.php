
@extends('layouts.master')

@section('styles')

        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')
	
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Blog</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Blog <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Blog 
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
                    <div class="container">
                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                                <div class="box overflow-hidden">
                                    <div class="box-body !p-0">
                                        <div class="swiper mySwiper8">
                                            <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="rtl:dir-rtl">
                                                    <a href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-74.jpg')}}" class="block-full" alt="...">
                                                        <div class="blog-caption text-start">
                                                            <p class="mb-2 text-xs">The agency has a diverse workforce of just under 18,000 civil servants, and works with many more U.S.</p>
                                                            <h6 class="text-base font-semibold mb-2">N.A.S.A</h6>
                                                        
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="rtl:dir-rtl">
                                                    <a href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-70.jpg')}}" class="block-full" alt="...">
                                                        <div class="blog-caption text-start">
                                                            <p class="mb-2 text-xs">NASA is committed to providing all categories of businesses in both NASA prime contracts and subcontracts.</p>
                                                            <h6 class="text-base font-semibold mb-2">NASA Businesses</h6>
                                                        
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="rtl:dir-rtl">
                                                    <a href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-72.jpg')}}" class="block-full" alt="...">
                                                        <div class="blog-caption text-start">
                                                            <p class="mb-2 text-xs">NASA Nelson served in the U.S. Senate for 18 years from Florida space shuttle mission 61-C in 1986.</p>
                                                            <h6 class="text-base font-semibold mb-2">NASA Leadership</h6>
                                                        
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('build/assets/images/media/media-36.jpg')}}" class="card-img-top !rounded-t" alt="...">
                                            </a>
                                            <div class="box-body">
                                                <a href="{{url('blog-details')}}" class="font-semibold text-[0.875rem] text-dark mb-1">Touring excites in winter !</a>
                                                <p class="card-text text-textmuted mb-3">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Justin Kim</p>
                                                            <p class="text-textmuted text-[.625rem] mb-0">20,Dec 2022 - 16:32</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"><i class="ri-thumb-up-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm"><i class="ri-chat-2-line"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('build/assets/images/media/media-35.jpg')}}" class="card-img-top !rounded-t" alt="...">
                                            </a>
                                            <div class="box-body">
                                                <a href="{{url('blog-details')}}" class="font-semibold text-[0.875rem] text-dark mb-1"> Boat manufacutrers are in debt !</a>
                                                <p class="card-text text-textmuted mb-3">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Monika Karen</p>
                                                            <p class="text-textmuted text-[.625rem] mb-0">25,Dec 2022 - 12:45</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"><i class="ri-thumb-up-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm"><i class="ri-chat-2-line"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="flex justify-between items-center mb-3">
                                    <h5 class="mb-0 font-semibold text-[1.25rem] text-defaulttextcolor">Popular Topics</h5>
                                    <p class="mb-0 font-semibold">
                                        <a href="javascript:void(0);" class="text-primary"><u>View All</u></a>
                                    </p>
                                </div>
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-4 sm:col-span-6 col-span-12">
                                        <a href="javascript:void(0);">
                                            <div class="box !bg-black/20 overlay-card text-white">
                                                <img src="{{asset('build/assets/images/media/media-78.jpg')}}" class="card-img !h-[170px] !w-full" alt="...">
                                                <div class="card-img-overlay flex flex-column p-0 over-content-bottom">
                                                    <div class="box-footer border-t-0">
                                                        <h6 class="font-semibold mb-0 text-white text-[1rem]">Nature</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-4 sm:col-span-6 col-span-12">
                                        <a href="javascript:void(0);">
                                            <div class="box bg-dark overlay-card text-white">
                                                <img src="{{asset('build/assets/images/media/media-59.jpg')}}" class="card-img !h-[170px] !w-full" alt="...">
                                                <div class="card-img-overlay flex flex-column p-0 over-content-bottom">
                                                    <div class="box-footer border-t-0">
                                                        <h6 class="font-semibold mb-0 text-white text-[1rem]">Study</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-4 sm:col-span-6 col-span-12">
                                        <a href="javascript:void(0);">
                                            <div class="box bg-dark overlay-card text-white">
                                                <img src="{{asset('build/assets/images/media/media-44.jpg')}}" class="card-img !h-[170px] !w-full" alt="...">
                                                <div class="card-img-overlay flex flex-column p-0 over-content-bottom">
                                                    <div class="box-footer border-t-0">
                                                        <h6 class="font-semibold mb-0 text-white text-[1rem]">Food</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-4 sm:col-span-6 col-span-12">
                                        <a href="javascript:void(0);">
                                            <div class="box bg-dark overlay-card text-white">
                                                <img src="{{asset('build/assets/images/media/media-76.jpg')}}" class="card-img !h-[170px] !w-full" alt="...">
                                                <div class="card-img-overlay flex flex-column p-0 over-content-bottom">
                                                    <div class="box-footer border-t-0">
                                                        <h6 class="font-semibold mb-0 text-white text-[1rem]">Travel</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-4 sm:col-span-6 col-span-12">
                                        <a href="javascript:void(0);">
                                            <div class="box bg-dark overlay-card text-white">
                                                <img src="{{asset('build/assets/images/media/media-73.jpg')}}" class="card-img !h-[170px] !w-full" alt="...">
                                                <div class="card-img-overlay flex flex-column p-0 over-content-bottom">
                                                    <div class="box-footer border-t-0">
                                                        <h6 class="font-semibold mb-0 text-white text-[1rem]">Fashion</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-4 sm:col-span-6 col-span-12">
                                        <a href="javascript:void(0);">
                                            <div class="box bg-dark overlay-card text-white">
                                                <img src="{{asset('build/assets/images/media/media-39.jpg')}}" class="card-img !h-[170px] !w-full" alt="...">
                                                <div class="card-img-overlay flex flex-column p-0 over-content-bottom">
                                                    <div class="box-footer border-t-0">
                                                        <h6 class="font-semibold mb-0 text-white text-[1rem]">Animals</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xl:col-span-6 xxl:col-span-8 col-span-12">
                                        <div class="grid grid-cols-12 gap-x-6">
                                            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                                <div class="box">
                                                    <a href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-26.jpg')}}" class="card-img-top !rounded-t" alt="...">
                                                    </a>
                                                    <div class="box-body">
                                                        <a href="{{url('blog-details')}}" class="font-semibold text-[0.875rem] text-dark mb-1">Features of new car !</a>
                                                        <p class="card-text text-textmuted mb-3">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                                    </div>
                                                    <div class="box-footer">
                                                        <div class="flex flex-wrap items-center justify-between">
                                                            <div class="flex items-center">
                                                                <div class="avatar avatar-sm avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Alister Chuk</p>
                                                                    <p class="text-textmuted text-[.625rem] mb-0">18,Dec 2022 - 12:25</p>
                                                                </div>
                                                            </div>
                                                            <div class="btn-list">
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"><i class="ri-thumb-up-line"></i></button>
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm"><i class="ri-chat-2-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                                <div class="box">
                                                    <a href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-31.jpg')}}" class="card-img-top !rounded-t" alt="...">
                                                    </a>
                                                    <div class="box-body">
                                                        <a href="{{url('blog-details')}}" class="font-semibold text-[0.875rem] text-dark mb-1">Beautiful beach on a sunny day !</a>
                                                        <p class="card-text text-textmuted mb-3">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                                    </div>
                                                    <div class="box-footer">
                                                        <div class="flex flex-wrap items-center justify-between">
                                                            <div class="flex items-center">
                                                                <div class="avatar avatar-sm avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Samantha Nan</p>
                                                                    <p class="text-textmuted text-[.625rem] mb-0">25,Dec 2022 - 04:25</p>
                                                                </div>
                                                            </div>
                                                            <div class="btn-list">
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"><i class="ri-thumb-up-line"></i></button>
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm"><i class="ri-chat-2-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 xxl:col-span-4 col-span-12">
                                        <div class="box">
                                            <div class="box-header flex items-center justify-between">
                                                <div class="box-title">
                                                    Featured Blogs
                                                </div>
                                                <div>
                                                    <span class="badge bg-primary/10 text-primary">32 Blogs</span>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <ul class="ti-list-group">
                                                    <li class="ti-list-group-item">
                                                        <div class="flex flex-wrap items-center">
                                                            <span class="avatar avatar-xl me-4">
                                                                <img src="{{asset('build/assets/images/media/media-39.jpg')}}" class="img-fluid !rounded-md" alt="...">
                                                            </span>
                                                            <div class="flex-grow">
                                                                <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Samantha Jack</a>
                                                                <p class="mb-1 popular-blog-content truncate">
                                                                    There are many variations of passages of Lorem Ipsum available
                                                                </p>
                                                                <span class="text-textmuted text-[0.6875rem]">24,Nov 2022 - 18:27</span>
                                                            </div>
                                                            <div>
                                                                <button type="button" aria-label="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item">
                                                        <div class="flex flex-wrap items-center">
                                                            <span class="avatar avatar-xl me-4">
                                                                <img src="{{asset('build/assets/images/media/media-56.jpg')}}" class="img-fluid !rounded-md" alt="...">
                                                            </span>
                                                            <div class="flex-grow">
                                                                <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Kirsten Sam</a>
                                                                <p class="mb-1 popular-blog-content truncate">
                                                                    Latin words, combined with a handful of model sentence
                                                                </p>
                                                                <span class="text-textmuted text-[0.6875rem]">28,Nov 2022 - 10:45</span>
                                                            </div>
                                                            <div>
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item">
                                                        <div class="flex flex-wrap items-center">
                                                            <span class="avatar avatar-xl me-4">
                                                                <img src="{{asset('build/assets/images/media/media-54.jpg')}}" class="img-fluid !rounded-md" alt="...">
                                                            </span>
                                                            <div class="flex-grow">
                                                                <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Jessica Karon</a>
                                                                <p class="mb-1 popular-blog-content truncate">
                                                                    Contrary to popular belief, Lorem Ipsum is not simply random
                                                                </p>
                                                                <span class="text-textmuted text-[0.6875rem]">30,Nov 2022 - 08:32</span>
                                                            </div>
                                                            <div>
                                                                <button  type="button" aria-label="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item">
                                                        <div class="flex flex-wrap items-center">
                                                            <span class="avatar avatar-xl me-4">
                                                                <img src="{{asset('build/assets/images/media/media-52.jpg')}}" class="img-fluid !rounded-md" alt="...">
                                                            </span>
                                                            <div class="flex-grow">
                                                                <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Broad Stuart</a>
                                                                <p class="mb-1 popular-blog-content truncate">
                                                                    It was popularised in the 1960s with the release of Letraset sheets containing
                                                                </p>
                                                                <span class="text-textmuted text-[0.6875rem]">3,Dec 2022 - 12:56</span>
                                                            </div>
                                                            <div>
                                                                <button type="button" aria-label="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ti-list-group-item text-center">
                                                        <button type="button" class="ti-btn ti-btn-primary !font-medium !mb-0">Load more</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('build/assets/images/media/media-45.jpg')}}" class="card-img-top !rounded-t" alt="...">
                                            </a>
                                            <div class="box-body">
                                                <a href="{{url('blog-details')}}" class="font-semibold text-[0.875rem] text-dark mb-1">Strawberry juice recipe.</a>
                                                <p class="card-text text-textmuted mb-4">Want to have something different but healthy to drink? Then look no further!! Strawberry Juice is rich in vitamin C.</p>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Maria Bose</p>
                                                            <p class="text-textmuted text-[.625rem] mb-0">17,Dec 2022 - 12:32</p>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"><i class="ri-thumb-up-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm"><i class="ri-chat-2-line"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('build/assets/images/media/media-61.jpg')}}" class="card-img-top !rounded-t" alt="...">
                                            </a>
                                            <div class="box-body">
                                                <a href="{{url('blog-details')}}" class="font-semibold text-[0.875rem] text-dark mb-1">Nature is pleasent to watch.</a>
                                                <p class="card-text text-textmuted mb-4">
                                                    Nature is a vast and intricate web of interconnected ecosystems, encompassing everything. </p>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Helsenky</p>
                                                            <p class="text-textmuted text-[.625rem] mb-0">24,Dec 2022 - 14:21</p>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"><i class="ri-thumb-up-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm"><i class="ri-chat-2-line"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('build/assets/images/media/media-42.jpg')}}" class="card-img-top !rounded-t" alt="...">
                                            </a>
                                            <div class="box-body">
                                                <a href="{{url('blog-details')}}" class="font-semibold text-[0.875rem] text-dark mb-1">Time Is very important in our life.</a>
                                                <p class="card-text text-textmuted mb-4">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Jason Mama</p>
                                                            <p class="text-textmuted text-[.625rem] mb-0">19,Dec 2022 - 15:48</p>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"><i class="ri-thumb-up-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm"><i class="ri-chat-2-line"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('build/assets/images/media/media-59.jpg')}}" class="card-img-top !rounded-t" alt="...">
                                            </a>
                                            <div class="box-body">
                                                <a href="{{url('blog-details')}}" class="font-semibold text-[0.875rem] text-dark mb-1">Technology is key to development ..</a>
                                                <p class="card-text text-textmuted mb-4">Rising Sun is a 1993 American buddy cop crime thriller film directed by Philip Kaufman.</p>
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Stuart Hall</p>
                                                            <p class="text-textmuted text-[.625rem] mb-0">13,Dec 2022 - 19:08</p>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"><i class="ri-thumb-up-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm"><i class="ri-chat-2-line"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

                        <!-- Start: pagination -->
                        <div class="ltr:float-right rtl:float-left mb-6">
                            <nav aria-label="Page navigation" class="">
                                <ul class="ti-pagination mb-0 flex flex-row rounded-sm text-[1rem]">
                                    <li class="page-item disabled">
                                        <a class="page-link !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">
                                            Prev
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link !bg-primary !text-white !py-[0.375rem] !px-[0.75rem]"  href="javascript:void(0);">1</a></li>
                                    <li class="page-item "><a class="page-link !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">2</a></li>
                                    <li class="page-item ">
                                        <a aria-label="anchor" class="page-link !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                    </li>
                                    <li class="page-item "><a class="page-link !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">17</a></li>
                                    <li class="page-item">
                                        <a class="page-link !text-primary !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">
                                            next
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- End: pagination -->
                    </div>

@endsection

@section('scripts')
	
        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
        @vite('resources/assets/js/blog.js')

@endsection
