
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
                
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Timeline 2</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Timeline <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Timeline 2 
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
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Basic Timeline</h5>
                        </div>
                        <div class="box-body">
                            <!-- Timeline -->
                            <div>
                            <!-- Heading -->
                            <div class="ps-2 my-2 first:mt-0">
                                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-white">
                                1 Mar, 2024
                                </h3>
                            </div>
                            <!-- End Heading -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    <svg class="flex-shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg>
                                    Created "Preline in React" task
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Find more detailed insctructions here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Release v5.2.0 quick bug fix &#128030;
                                </h3>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <span class="flex flex-shrink-0 justify-center items-center size-4  border border-gray-200 text-[10px] font-semibold uppercase text-gray-600 rounded-full  dark:border-white/10 dark:text-white/70">
                                    A
                                    </span>
                                    Alex Gregarov
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Marked "Install Charts" completed
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Finally! You can check it out here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Heading -->
                            <div class="ps-2 my-2 first:mt-0">
                                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-white">
                                29 Feb, 2024
                                </h3>
                            </div>
                            <!-- End Heading -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Take a break &#9971;
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Just chill for now... &#128521;
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->
                            </div>
                            <!-- End Timeline -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Collapsable Timeline</h5>
                        </div>
                        <div class="box-body">
                            <!-- Timeline -->
                            <div>
                            <!-- Heading -->
                            <div class="ps-2 my-2 first:mt-0">
                                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-white">
                                1 Mar, 2024
                                </h3>
                            </div>
                            <!-- End Heading -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    <svg class="flex-shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg>
                                    Created "Preline in React" task
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Find more detailed insctructions here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Release v5.2.0 quick bug fix &#128030;
                                </h3>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <span class="flex flex-shrink-0 justify-center items-center size-4  border border-gray-200 text-[10px] font-semibold uppercase text-gray-600 rounded-full  dark:border-white/10 dark:text-white/70">
                                    A
                                    </span>
                                    Alex Gregarov
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Marked "Install Charts" completed
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Finally! You can check it out here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Heading -->
                            <div class="ps-2 my-2 first:mt-0">
                                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-white">
                                29 Feb, 2024
                                </h3>
                            </div>
                            <!-- End Heading -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Take a break &#9971;
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Just chill for now... &#128521;
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->
                            <!-- Collapse -->
                            <div id="hs-timeline-collapse" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-timeline-collapse-content">
                                <!-- Heading -->
                                <div class="ps-2 my-2">
                                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-white">
                                    28 Feb, 2024
                                </h3>
                                </div>
                                <!-- End Heading -->

                                <!-- Item -->
                                <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                    <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                    </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                    <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Final touch ups
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Double check everything and make sure we're ready to go.
                                    </p>
                                </div>
                                <!-- End Right Content -->
                                </div>
                                <!-- End Item -->
                            </div>
                            <!-- End Collapse -->

                            <!-- Item -->
                            <div class="ps-[7px] flex gap-x-3">
                                <button type="button" class="hs-collapse-toggle hs-collapse-open:hidden text-start inline-flex items-center gap-x-1 text-sm text-primary font-medium decoration-2 hover:underline dark:text-primary dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" id="hs-timeline-collapse-content" data-hs-collapse="#hs-timeline-collapse">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                Show older
                                </button>
                            </div>
                            <!-- End Item -->
                            </div>
                            <!-- End Timeline -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Hoverable Timeline</h5>
                        </div>
                        <div class="box-body">
                            <!-- Timeline -->
                            <div>
                            <!-- Heading -->
                            <div class="ps-2 my-2 first:mt-0">
                                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-white">
                                1 MAR, 2024
                                </h3>
                            </div>
                            <!-- End Heading -->

                            <!-- Item -->
                            <div class="flex gap-x-3 relative group rounded-lg hover:bg-gray-100 dark:hover:bg-white/10">
                                <a class="absolute inset-0 z-[1]" href="#"></a>

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-0 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-white border-2 border-gray-300 group-hover:border-gray-600 dark:group-hover:border-white dark:bg-defaultborder/10 dark:border-white/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-2 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    <svg class="flex-shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg>
                                    Created "Preline in React" task
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Find more detailed insctructions here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 relative z-10 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-white hover:shadow-sm disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3 relative group rounded-lg hover:bg-gray-100 dark:hover:bg-white/10">
                                <a class="absolute inset-0 z-[1]" href="javascript:void(0);"></a>

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-0 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10 ">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-white border-2 border-gray-300 group-hover:border-gray-600 dark:group-hover:border-white dark:bg-defaultborder/10 dark:border-white/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-2 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Release v5.2.0 quick bug fix &#128030;
                                </h3>
                                <button type="button" class="mt-1 -ms-1 p-1 relative z-10 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-white hover:shadow-sm disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <span class="flex flex-shrink-0 justify-center items-center size-4  border border-gray-200 text-[10px] font-semibold uppercase text-gray-600 rounded-full  dark:border-white/10 dark:text-white/70">
                                    A
                                    </span>
                                    Alex Gregarov
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3 relative group rounded-lg hover:bg-gray-100 dark:hover:bg-white/10">
                                <a class="absolute inset-0 z-[1]" href="javascript:void(0);"></a>

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-0 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10 ">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-white border-2 border-gray-300 group-hover:border-gray-600 dark:group-hover:border-white dark:bg-defaultborder/10 dark:border-white/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-2 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Marked "Install Charts" completed
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Finally! You can check it out here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 relative z-10 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-white hover:shadow-sm disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Heading -->
                            <div class="ps-2 my-2 first:mt-0">
                                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-white">
                                29 FEB, 2024
                                </h3>
                            </div>
                            <!-- End Heading -->

                            <!-- Item -->
                            <div class="flex gap-x-3 relative group rounded-lg hover:bg-gray-100 dark:hover:bg-white/10">
                                <a class="absolute inset-0 z-[1]" href="javascript:void(0);"></a>

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-0 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10 ">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-white border-2 border-gray-300 group-hover:border-gray-600 dark:group-hover:border-white dark:bg-defaultborder/10 dark:border-white/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-2 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Take a break &#9971;
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Just chill for now... &#128521;
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->
                            </div>
                            <!-- End Timeline -->
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Timeline with Time</h5>
                        </div>
                        <div class="box-body">
                            <!-- Timeline -->
                            <div>
                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-xs text-gray-500 dark:text-white/70">12:05PM</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    <svg class="flex-shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg>
                                    Created "Preline in React" task
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Find more detailed insctructions here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-xs text-gray-500 dark:text-white/70">12:05PM</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Release v5.2.0 quick bug fix &#128030;
                                </h3>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <span class="flex flex-shrink-0 justify-center items-center size-4  border border-gray-200 text-[10px] font-semibold uppercase text-gray-600 rounded-full  dark:border-white/10 dark:text-white/70">
                                    A
                                    </span>
                                    Alex Gregarov
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-xs text-gray-500 dark:text-white/70">12:05PM</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Marked "Install Charts" completed
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Finally! You can check it out here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-xs text-gray-500 dark:text-white/70">12:05PM</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <div class="size-2 rounded-full bg-defaultborder dark:bg-defaultborder/10"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Take a break &#9971;
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Just chill for now... &#128521;
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->
                            </div>
                            <!-- End Timeline -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Timeline with Time</h5>
                        </div>
                        <div class="box-body">
                            <!-- Timeline -->
                            <div>
                            <!-- Heading -->
                            <div class="ps-2 my-2 first:mt-0">
                                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-white">
                                1 MAR, 2024
                                </h3>
                            </div>
                            <!-- End Heading -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <img class="flex-shrink-0 size-7 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    <svg class="flex-shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg>
                                    Created "Preline in React" task
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Find more detailed insctructions here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <span class="flex flex-shrink-0 justify-center items-center size-7 border border-gray-200 text-sm font-semibold uppercase text-gray-800 rounded-full dark:bg-bodybg dark:border-white/10 dark:text-white/70">
                                    A
                                    </span>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Release v5.2.0 quick bug fix &#128030;
                                </h3>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-defaultborder/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <span class="flex flex-shrink-0 justify-center items-center size-4  border border-gray-200 text-[10px] font-semibold uppercase text-gray-600 rounded-full dark:border-white/10 dark:text-white/70">
                                    A
                                    </span>
                                    Alex Gregarov
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <img class="flex-shrink-0 size-7 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Marked "Install Charts" completed
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Finally! You can check it out here.
                                </p>
                                <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white/70 dark:hover:dark:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10">
                                    <img class="flex-shrink-0 size-4 rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    James Collins
                                </button>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Heading -->
                            <div class="ps-2 my-2 first:mt-0">
                                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-white">
                                29 FEB, 2024
                                </h3>
                            </div>
                            <!-- End Heading -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-defaultborder dark:after:dark:bg-defaultborder/10">
                                <div class="relative z-10 size-7 flex justify-center items-center">
                                    <span class="flex flex-shrink-0 justify-center items-center size-7 bg-white border border-gray-200 text-[10px] font-semibold uppercase text-gray-600 rounded-full dark:bg-bodybg dark:border-white/10 dark:text-white/70">
                                    <svg class="flex-shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3h5v5"/><path d="M8 3H3v5"/><path d="M12 22v-8.3a4 4 0 0 0-1.172-2.872L3 3"/><path d="m15 9 6-6"/></svg>
                                    </span>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="flex gap-x-1.5 text-sm font-semibold text-gray-800 dark:text-white">
                                    Take a break &#9971;
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-white/70">
                                    Just chill for now... &#128521;
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->
                            </div>
                            <!-- End Timeline -->
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-2 -->

@endsection

@section('scripts')
	


@endsection
