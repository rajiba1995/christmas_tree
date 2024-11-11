
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">DraggableCards</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Apps <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">DraggableCards 
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
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12" id="draggable-left">
                            <div class="box custom-box box-bg-primary">
                                <a href="javascript:void(0);" class="box-anchor"></a>
                                <div class="box-body">
                                <blockquote class="blockquote mb-0 text-center">
                                    <h6 class="font-medium text-white">The best and most beautiful things in the world cannot be seen or even touched — they must be felt with the heart..</h6>
                                    <div class="blockquote-footer mt-4 text-[.875rem] text-white opacity-[0.7]">Someone famous as <cite title="Source Title">-Helen Keller</cite></div>
                                </blockquote>
                                </div>
                            </div>
                            <div class="box terms-box">
                                <div class="box-header flex justify-between">
                                <div class="box-title my-auto">
                                    Card With Fullscreen Button
                                </div>
                                <a aria-label="anchor" href="javascript:void(0);" class="terms-fullscreen">
                                    <i class="ri-fullscreen-line"></i>
                                </a>
                                </div>
                                <div class="box-body flex-grow">
                                <h6 class="text-base font-semibold">FullScreen card</h6>
                                <p class="text-[0.813rem] mb-0">There are many variations of passages of Lorem Ipsum available, but the
                                    majority
                                    have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="box-footer">
                                <button type="button" class="ti-btn ti-btn-primary">Read More</button>
                                </div>
                            </div>
                            <div class="box overlay-box !text-white">
                                <img src="{{asset('build/assets/images/media/media-35.jpg')}}" class="box-img" alt="...">
                                <div class="box-img-overlay flex flex-col p-0">
                                    <div class="box-header header-bg">
                                        <div class="box-title !text-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="box-body !text-white ">
                                        <div class="box-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="box-text">Last updated 3 mins ago</div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="box overlay-box  text-white">
                                <img src="{{asset('build/assets/images/media/media-35.jpg')}}" class="box-img" alt="...">
                                <div class="box-img-overlay flex flex-col p-0 top-auto">
                                    <div class="box-header !text-white">
                                        <div class="box-title !text-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="box-body  !text-white">
                                        <div class="box-text mb-2 !text-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="box-text ">Last updated 3 mins ago</div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="box custom-box">
                                <a href="javascript:void(0);" class="box-anchor"></a>
                                <div class="box-body">
                                    <div class="flex items-center">
                                        <div class="me-4">
                                            <span class="avatar avatar-md">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div>
                                            <p class="box-text mb-0 text-[.875rem] font-semibold">Atharva Simon.</p>
                                            <div class="box-title !text-[#8c9097] !text-[0.75rem] !font-normal mb-0">Correspondent Professor</div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="box custom-box border !border-info">
                                <a href="javascript:void(0);" class="box-anchor"></a>
                                <div class="box-body">
                                    <div class="flex align-items-center">
                                        <div class="me-3">
                                            <span class="avatar avatar-xl">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div>
                                            <p class="box-text text-info mb-1 text-[.875rem] font-semibold">Alicia Keys.</p>
                                            <div class="box-title !text-[0.75rem] mb-1 !font-normal">Department Of Commerce</div>
                                            <div class="box-title !text-[#8c9097] !text-[.6875rem] !font-normal mb-0">24 Years, Female</div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12" id="draggable-right">
                            <div class="box custom-box overlay-box">
                                <img src="{{asset('build/assets/images/media/media-36.jpg')}}" class="box-img" alt="...">
                                <div class="box-img-overlay flex flex-col p-0 !top-auto left-0 bottom-0 right-0">
                                    <div class="box-body text-white">
                                        <div class="box-text !text-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                        <div class="box-text mb-2 sm:block hidden !text-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="box-text !text-white">Last updated 3 mins ago</div>
                                    </div>
                                    <div class="box-footer !text-white">Last updated 3 mins ago</div>
                                </div>
                            </div>
                            <div class="box custom-box !bg-success">
                                <div class="box-body">
                                    <div class="flex align-items-center w-full">
                                        <div class="me-2">
                                            <span class="avatar">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"class="!rounded-full">
                                            </span>
                                        </div>
                                        <div class="text-white">
                                            <div class="fs-15 font-semibold">Samantha sid</div>
                                            <p class="mb-0 opacity-[0.7] text-[0.75rem]">In leave for 1 month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header !pb-3 flex justify-between">
                                    <div class="box-title"> Card With Collapse Button </div> 
                                    <button type="button" class="hs-collapse-toggle text-defaulttextcolor dark:text-defaulttextcolor/70 inline-flex items-center gap-x-2 text-sm font-semibold  disabled:opacity-50 disabled:pointer-events-none open" id="hs-basic-collapse" data-hs-collapse="#hs-basic-collapse-heading">
                                        <svg class="hs-collapse-open:rotate-180 flex-shrink-0 size-4 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                        </button>
                                </div>
                                <div id="hs-basic-collapse-heading" class="hs-collapse open w-full  overflow-hidden  transition-[height] duration-100" aria-labelledby="hs-basic-collapse">
                                    <div class="box-body !pt-0">
                                        <h6 class="card-text font-semibold">Collapsible Card</h6>
                                        <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by injected
                                            humour, or randomised words</p>
                                    </div>
                                    <div class="box-footer"> <button type="button" class="ti-btn ti-btn-primary-full">Read
                                        More</button> </div>
                                </div>
                            </div>
                            <div class="box custom-box" id="dismiss-alert">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Card With Close Button
                                    </div>
                                    <button type="button"
                                    class="inline-flex  rounded-sm text-defaulttextcolor dark:text-defaulttextcolor/70 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-teal-50 focus:ring-teal-600"
                                    data-hs-remove-element="#dismiss-alert">
                                    <span class="sr-only">Dismiss</span>
                                    <svg class="h-2 w-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path
                                        d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                        fill="currentColor" />
                                    </svg>
                                    </button>
                                </div>
                                <div class="box-body">
                                    <h6 class="box-text font-semibold">Closed card</h6>
                                    <p class="box-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="box-footer">
                                    <button class="ti-btn ti-btn-primary-full">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Dragula JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>
        @vite('resources/assets/js/draggable.js')

        <!-- Internal Dragula JS -->
        @vite('resources/assets/js/cards.js')

@endsection
