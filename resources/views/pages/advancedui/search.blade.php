
@extends('layouts.master')

@section('styles')



@endsection

@section('content')


                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Search</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Advanced Ui <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Search 
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
                        <div class="col-span-12">
                            <div class="box">
                            <div class="box-body pb-0 border-b border-defaultborder dark:border-defaultborder/10"> <div class="input-group !mb-0"> <input type="text" class="form-control" placeholder="Searching....."> <button class="ti-btn ripple ti-btn-primary-full !mb-0" type="button">Search</button> </div> </div>
                            
                                <div class="box-body !pt-0">
                                <div class="border-b-2 border-gray-200 dark:border-white/10">
                                    <nav class="-mb-0.5 sm:flex block space-x-6 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                                    <a class=" hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-defaulttextcolor  dark:text-white/70 hover:text-primary active" href="javascript:void(0);" id="underline-item-1" data-hs-tab="#underline-1" aria-controls="underline-1" role="tab">
                                        ALL
                                    </a>
                                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-defaulttextcolor  dark:text-white/70 hover:text-primary" href="javascript:void(0);" id="underline-item-2" data-hs-tab="#underline-2" aria-controls="underline-2" role="tab">
                                        IMAGES
                                    </a>
                                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-defaulttextcolor  dark:text-white/70 hover:text-primary" href="javascript:void(0);" id="underline-item-3" data-hs-tab="#underline-3" aria-controls="underline-3" role="tab">
                                        BOOKS
                                    </a>
                                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-defaulttextcolor  dark:text-white/70 hover:text-primary" href="javascript:void(0);" id="underline-item-2" data-hs-tab="#underline-4" aria-controls="underline-4" role="tab">
                                        NEWS
                                    </a>
                                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-defaulttextcolor  dark:text-white/70 hover:text-primary" href="javascript:void(0);" id="underline-item-3" data-hs-tab="#underline-5" aria-controls="underline-5" role="tab">
                                        VIDEOS
                                    </a>
                                    </nav>
                                </div>
                                <p class="text-textmuted mb-0 pt-3">About 12,546,90000 results (0.56 Seconds)</p>
                                <div>
                                    <div id="underline-1" role="tabpanel" aria-labelledby="underline-item-1">
                                    <p class="text-gray-500 dark:text-white/70 dark:border-white/10 border-gray-200"></p>
                                    </div>
                                    <div id="underline-2" class="hidden" role="tabpanel" aria-labelledby="underline-item-2">
                                    <p class="text-gray-500 dark:text-white/70 dark:border-white/10 border-gray-200"></p>
                                    </div>
                                    <div id="underline-3" class="hidden" role="tabpanel" aria-labelledby="underline-item-3">
                                    <p class="text-gray-500 dark:text-white/70 dark:border-white/10 border-gray-200"></p>
                                    </div>
                                    <div id="underline-4" role="tabpanel" aria-labelledby="underline-item-4">
                                        <p class="text-gray-500 dark:text-white/70 dark:border-white/10 border-gray-200"></p>
                                    </div>
                                    <div id="underline-5" role="tabpanel" aria-labelledby="underline-item-5">
                                        <p class="text-gray-500 dark:text-white/70 dark:border-white/10 border-gray-200"></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="mb-2">
                                        <a href="javascript:void(0);" class="text-[14px] font-medium uppercase">Search the new animations</a>
                                    </div>
                                    <h6 class="text-[.8125rem] mb-2 font-medium">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
                                    <p class="mb-0 text-textmuted"> it is pleasure, but because those who do not know how to pursue
                                        pleasure rationally encounter consequences that are extremely painful. Nor again is there
                                        anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally
                                        circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which
                                            of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to
                                            find fault with a man who chooses to enjoy a pleasure that has no annoying consequences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="mb-2">
                                        <a href="javascript:void(0);" class="text-[14px] font-medium uppercase">Free Boostrap admin templates</a>
                                    </div>
                                    <h6 class="text-[.8125rem] mb-2 font-medium">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
                                    <p class="mb-0 text-textmuted"> it is pleasure, but because those who do not know how to pursue pleasure rationally
                                        encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to
                                        obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure
                                        him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain
                                        some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="mb-2">
                                        <a href="javascript:void(0);" class="text-[14px] font-medium uppercase">20+ download the free templates</a>
                                    </div>
                                    <h6 class="text-[.8125rem] mb-2 font-medium">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
                                    <p class="mb-0 text-textmuted"> it is pleasure, but because those who do not know how to pursue pleasure rationally
                                        encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to
                                        obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure
                                        him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain
                                        some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="mb-2">
                                        <a href="javascript:void(0);" class="text-[14px] font-medium uppercase">Customizable admin templates</a>
                                    </div>
                                    <h6 class="text-[.8125rem] mb-2 font-medium">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
                                    <p class="mb-0 text-textmuted"> it is pleasure, but because those who do not know how to pursue pleasure rationally
                                        encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to
                                        obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure
                                        him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain
                                        some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="mb-2">
                                        <a href="javascript:void(0);" class="text-[14px] font-medium uppercase">HTML Admin templates</a>
                                    </div>
                                    <h6 class="text-[.8125rem] mb-2 font-medium">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
                                    <p class="mb-0 text-textmuted"> it is pleasure, but because those who do not know how to pursue pleasure rationally
                                        encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to
                                        obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure
                                        him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain
                                            some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="mb-2">
                                        <a href="javascript:void(0);" class="text-[14px] font-medium uppercase">Best free admin templates</a>
                                    </div>
                                    <h6 class="text-[.8125rem] mb-2 font-medium">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
                                    <p class="mb-0 text-textmuted"> it is pleasure, but because those who do not know how to pursue pleasure rationally
                                        encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to
                                        obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure
                                        him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain
                                            some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->


@endsection

@section('scripts')
	


@endsection
