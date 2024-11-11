
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Columns</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Utilities <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Columns 
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
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Based On Column Count</h5>
                                </div>
                                <div class="box-body">
                                    <div class="relative">
                                        <div class="absolute inset-0 -top-8 -bottom-8 grid grid-cols-1 sm:grid-cols-3 gap-8">
                                            <div class="bg-stripes-primary dark:bg-stripes-primary opacity-75 w-full h-full"></div>
                                            <div class="hidden sm:block bg-stripes-primary dark:bg-stripes-primary opacity-75 w-full h-full"></div>
                                            <div class="hidden sm:block bg-stripes-primary dark:bg-stripes-primary opacity-75 w-full h-full"></div>
                                        </div>
                                        <div class="relative columns-1 sm:columns-3 gap-8">
                                            <div class="relative aspect-w-16 aspect-h-9">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative aspect-w-1 aspect-h-1 mt-8">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative aspect-w-1 aspect-h-1 mt-8">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8 sm:mt-0">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-27.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="hidden sm:block relative aspect-w-16 aspect-h-9 mt-8">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8 sm:mt-0">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-31.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="hidden sm:block relative aspect-w-16 aspect-h-9 mt-8">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-25.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Based On Column Width</h5>
                                </div>
                                <div class="box-body">
                                    <div class="relative rounded-sm overflow-auto max-h-[800px]">
                                        <div class="relative">
                                            <div class="columns-3xs gap-8 space-y-8">
                                                <div class="relative aspect-w-16 aspect-h-9">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="Image Description">
                                                </div>
                                                <div class="relative aspect-w-1 aspect-h-1">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-27.jpg')}}" alt="Image Description">
                                                </div>
                                                <div class="relative hidden sm:block aspect-w-1 aspect-h-1">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="Image Description">
                                                </div>
                                                <div class="relative hidden sm:block aspect-w-16 aspect-h-9">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="Image Description">
                                                </div>
                                                <div class="relative hidden sm:block aspect-w-16 aspect-h-9">
                                                <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-25.jpg')}}" alt="Image Description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

@endsection

@section('scripts')
	


@endsection
