
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Popovers</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Popovers 
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

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-5 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Default Popovers
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-mediumt">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list rtl:space-x-reverse">
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);">Popover Top
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Popover Top</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">And here's some amazing content. It's very engaging. Right?</p>
                                            </div>
                                            </a>
                                        </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);">Popover Right
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Popover Right</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">And here's some amazing content. It's very engaging. Right?</p>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);">Popover Bottom
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Popover Bottom</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">And here's some amazing content. It's very engaging. Right?</p>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);">Popover Left
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Popover Left</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">And here's some amazing content. It's very engaging. Right?</p>
                                            </div>
                                            </a>
                                        </div>
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
                &lt;div class="ti-btn-list rtl:space-x-reverse"&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);"&gt;Header Primary
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);"&gt;Header Primary
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);"&gt;Header Primary
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);"&gt;Header Primary
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-7 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Colored Headers
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list rtl:space-x-reverse">
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);">Header Primary
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-primary !rounded-t-md !py-2  !px-4 text-white border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor  !text-[0.8rem] !py-4 !px-4 text-start">Popover With Primary Header</p>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-secondary me-2" href="javascript:void(0);">Header Secondary
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-secondary !py-2 !rounded-t-md !px-4 text-white border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With Secondary Header</p>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-info me-2" href="javascript:void(0);">Header Info
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-info !py-2 !px-4 !rounded-t-md text-white border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With Info Header</p>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-warning me-2" href="javascript:void(0);">Header warning
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-warning !py-2 !px-4 !rounded-t-md text-white border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With warning Header</p>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-success me-2" href="javascript:void(0);">Header succuss
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-success !py-2 !px-4 text-white !rounded-t-md border-defaultborder text-start w-full text-[1rem]">
                                                <h6>Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With succuss Header</p>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-danger me-2" href="javascript:void(0);">Header danger
                                            <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                <div  class="!border-b !border-solid dark:border-defaultborder/10 bg-danger !py-2 !px-4 text-white border-defaultborder !rounded-t-md text-start w-full text-[1rem]">
                                                <h6>Color Header</h6>
                                                </div>
                                                <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover With danger Header</p>
                                            </div>
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
                &lt;div class="ti-btn-list rtl:space-x-reverse"&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-primary me-2" href="javascript:void(0);"&gt;Header Primary
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-primary !rounded-t-md !py-2  !px-4 text-white border-defaultborder text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor  !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Primary Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-secondary me-2" href="javascript:void(0);"&gt;Header Secondary
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-secondary !py-2 !rounded-t-md !px-4 text-white border-defaultborder text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Secondary Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-info me-2" href="javascript:void(0);"&gt;Header Info
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-info !py-2 !px-4 !rounded-t-md text-white border-defaultborder text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With Info Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:left]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-warning me-2" href="javascript:void(0);"&gt;Header warning
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-warning !py-2 !px-4 !rounded-t-md text-white border-defaultborder text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With warning Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-success me-2" href="javascript:void(0);"&gt;Header succuss
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-success !py-2 !px-4 text-white !rounded-t-md border-defaultborder text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With succuss Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
                &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-outline-danger me-2" href="javascript:void(0);"&gt;Header danger
                &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 bg-danger !py-2 !px-4 text-white border-defaultborder !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color Header&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With danger Header&lt;/p&gt;
                &lt;/div&gt;
                &lt;/a&gt;
                &lt;/div&gt;
                &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Colored Popovers
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list rtl:space-x-reverse">
                                        <div class="hs-tooltip ti-main-tooltip  [--trigger:click] [--placement:top]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-primary-full me-2" href="javascript:void(0);">Primary
                                                <div class="hs-tooltip-content ti-main-tooltip-content !bg-primary !z-[1000] !p-0 !max-w-[276px] !border-white/10" role="tooltip">
                                                    <div  class="!border-b !border-solid dark:border-white/10 !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6>Primary Color background</h6>
                                                    </div>
                                                    <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With primary background</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-secondary-full me-2" href="javascript:void(0);">Secondary
                                                <div class="hs-tooltip-content ti-main-tooltip-content !bg-secondary !p-0 !max-w-[276px] !border-white/10" role="tooltip">
                                                    <div  class="!border-b !border-solid dark:border-white/10 !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6>Secondary Color background</h6>
                                                    </div>
                                                    <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With secondary background</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-info-full me-2" href="javascript:void(0);">Info
                                                <div class="hs-tooltip-content ti-main-tooltip-content !bg-secondary  !p-0 !max-w-[276px]  !border-white/10" role="tooltip">
                                                    <div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6>Info Color background</h6>
                                                    </div>
                                                    <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With info background</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-warning-full me-2" href="javascript:void(0);">Warning
                                                <div class="hs-tooltip-content ti-main-tooltip-content !bg-warning  !p-0 !max-w-[276px] !border-white/10" role="tooltip">
                                                    <div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6>Warning Color background</h6>
                                                    </div>
                                                    <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With warning background</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-success-full me-2" href="javascript:void(0);">Success
                                                <div class="hs-tooltip-content ti-main-tooltip-content !bg-success  !p-0 !max-w-[276px] !border-white/10" role="tooltip">
                                                    <div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6>Success Color background</h6>
                                                    </div>
                                                    <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With success background</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-danger-full me-2" href="javascript:void(0);">Danger
                                                <div class="hs-tooltip-content ti-main-tooltip-content !bg-danger  !p-0 !max-w-[276px] !border-white/10" role="tooltip">
                                                    <div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]">
                                                    <h6>Danger Color background</h6>
                                                    </div>
                                                    <p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start">Popover With danger background</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                    <!-- Prism Code -->
                    <pre class="language-html"><code class="language-html">
                    &lt;div class="ti-btn-list rtl:space-x-reverse"&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip  [--trigger:click] [--placement:top]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-primary-full me-2" href="javascript:void(0);"&gt;Primary
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-primary !z-[1000] !p-0 !max-w-[276px] !border-white/10" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-white/10 !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Primary Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With primary background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-secondary-full me-2" href="javascript:void(0);"&gt;Secondary
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-secondary !p-0 !max-w-[276px] !border-white/10" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid dark:border-white/10 !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Secondary Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With secondary background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-info-full me-2" href="javascript:void(0);"&gt;Info
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-secondary  !p-0 !max-w-[276px]  !border-white/10" role="tooltip"&gt;
                    &lt;div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Info Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With info background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-warning-full me-2" href="javascript:void(0);"&gt;Warning
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-warning  !p-0 !max-w-[276px] !border-white/10" role="tooltip"&gt;
                    &lt;div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Warning Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With warning background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-success-full me-2" href="javascript:void(0);"&gt;Success
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-success  !p-0 !max-w-[276px] !border-white/10" role="tooltip"&gt;
                    &lt;div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Success Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With success background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-danger-full me-2" href="javascript:void(0);"&gt;Danger
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-danger  !p-0 !max-w-[276px] !border-white/10" role="tooltip"&gt;
                    &lt;div  class="!border-b dark:border-white/10 !border-solid !py-2 !px-4 text-white border-white/10 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Danger Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-white !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With danger background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;</code></pre>
                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Light Popovers
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list rtl:space-x-reverse">
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top] ">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-primary me-2" href="javascript:void(0);">Primary
                                                <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                    <div class="!bg-primary/10">
                                                        <div  class="!border-b !border-solid !py-2 !px-4  text-primary !border-primary/20 !rounded-t-md text-start w-full text-[1rem]">
                                                        <h6>Color background</h6>
                                                        </div>
                                                        <p class="!text-primary !text-[0.8rem] !py-4 !px-4 text-start">Popover With primary background</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-secondary me-2" href="javascript:void(0);">Secondary
                                                <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                    <div class="!bg-secondary/10">
                                                        <div  class="!border-b !border-solid !py-2 !px-4  text-secondary !border-secondary/20 !rounded-t-md text-start w-full text-[1rem]">
                                                        <h6>Color background</h6>
                                                        </div>
                                                        <p class="!text-secondary !text-[0.8rem] !py-4 !px-4 text-start">Popover With secondary background</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-info me-2" href="javascript:void(0);">Info
                                                <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                    <div class="!bg-info/10">
                                                        <div  class="!border-b !border-solid !py-2 !px-4  text-info !border-info/20 !rounded-t-md text-start w-full text-[1rem]">
                                                        <h6>Color background</h6>
                                                        </div>
                                                        <p class="!text-info !text-[0.8rem] !py-4 !px-4 text-start">Popover With info background</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-warning me-2" href="javascript:void(0);">Warning
                                                <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                    <div class="!bg-warning/10">
                                                        <div  class="!border-b !border-solid !py-2 !px-4  text-warning !border-warning/20 !rounded-t-md text-start w-full text-[1rem]">
                                                        <h6>Color background</h6>
                                                        </div>
                                                        <p class="!text-warning !text-[0.8rem] !py-4 !px-4 text-start">Popover With warning background</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-success me-2" href="javascript:void(0);">Success
                                                <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                    <div class="!bg-success/10">
                                                        <div  class="!border-b !border-solid !py-2 !px-4  text-success !border-success/20 !rounded-t-md text-start w-full text-[1rem]">
                                                        <h6>Color background</h6>
                                                        </div>
                                                        <p class="!text-success !text-[0.8rem] !py-4 !px-4 text-start">Popover With success background</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]">
                                            <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-danger me-2" href="javascript:void(0);">danger
                                                <div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !z-[1000] !p-0 !max-w-[276px] overflow-hidden" role="tooltip">
                                                    <div class="!bg-danger/10">
                                                        <div  class="!border-b !border-solid !py-2 !px-4  text-danger !border-danger/20 !rounded-t-md text-start w-full text-[1rem]">
                                                        <h6>Color background</h6>
                                                        </div>
                                                        <p class="!text-danger !text-[0.8rem] !py-4 !px-4 text-start">Popover With danger background</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                    <!-- Prism Code -->
                    <pre class="language-html"><code class="language-html">
                    &lt;div class="ti-btn-list rtl:space-x-reverse"&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top] "&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-primary me-2" href="javascript:void(0);"&gt;Primary
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-primary/10 !z-[1000] !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid !py-2 !px-4 text-primary !border-primary/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-primary !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With primary background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-secondary me-2" href="javascript:void(0);"&gt;Secondary
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-secondary/10 !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid !py-2 !px-4 text-secondary !border-secondary/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-secondary !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With secondary background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-info me-2" href="javascript:void(0);"&gt;Info
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-info/10  !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid !py-2 !px-4 text-info !border-info/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-info !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With info background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-warning me-2" href="javascript:void(0);"&gt;Warning
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-warning/10  !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid !py-2 !px-4 text-warning !border-warning/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-warning !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With warning background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-success me-2" href="javascript:void(0);"&gt;Success
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-success/10  !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid !py-2 !px-4 text-success !border-success/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-success !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With success background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-danger me-2" href="javascript:void(0);"&gt;danger
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-danger/10  !p-0 !max-w-[276px]" role="tooltip"&gt;
                    &lt;div  class="!border-b !border-solid !py-2 !px-4 text-danger !border-danger/20 !rounded-t-md text-start w-full text-[1rem]"&gt;
                    &lt;h6&gt;Color background&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;p class="!text-danger !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover With danger background&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;</code></pre>
                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Disabled Popover
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-primary-full opacity-60" href="javascript:void(0);">
                                            Disabled button
                                            <div class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !text-[0.75rem]  !bg-black text-white !opacity-[1]" role="tooltip">
                                                <p>Disabled Popover</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                    <!-- Prism Code -->
                    <pre class="language-html"><code class="language-html">&lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:top]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-primary-full opacity-60" href="javascript:void(0);"&gt;
                    Disabled button
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content" role="tooltip"&gt;
                    Diabled Popover
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;</code></pre>
                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Icon Popovers
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex">
                                    <div class="hs-tooltip ti-main-tooltip me-6 !max-w-[276px] [--trigger:click] [--placement:top]">
                                        <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg>
                                        <div class="hs-tooltip-content ti-main-tooltip-content !py-4 !px-4 !bg-primary !text-white" role="tooltip">
                                        <p>The Icon Popover</p>
                                        </div>
                                        </a>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip !max-w-[276px] [--trigger:click] [--placement:left]">
                                    <a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-secondary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                        <div class="hs-tooltip-content ti-main-tooltip-content !bg-secondary !text-white !py-4 !px-4" role="tooltip">
                                            <p>The Icon Popover</p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                                <div class="box-footer hidden !border-t-0">
                    <!-- Prism Code -->
                    <pre class="language-html"><code class="language-html">
                    &lt;div class="hs-tooltip ti-main-tooltip me-6 !max-w-[276px] [--trigger:click] [--placement:top]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);"&gt;
                    &lt;svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/&gt;&lt;/svg&gt;
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !py-4 !px-4 !bg-primary !text-white" role="tooltip"&gt;
                    &lt;p&gt;The Icon Popover&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip !max-w-[276px] [--trigger:click] [--placement:left]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle" href="javascript:void(0);"&gt;
                    &lt;svg xmlns="http://www.w3.org/2000/svg" class="fill-secondary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M0 0h24v24H0V0z" fill="none"/&gt;&lt;path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/&gt;&lt;/svg&gt;
                    &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-secondary !text-white !py-4 !px-4" role="tooltip"&gt;
                    &lt;p&gt;The Icon Popover&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;/div&gt;</code></pre>
                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title flex justify-between">Review popover</h5>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <!-- Popover -->
                                    <div class="hs-tooltip ti-main-tooltip [--trigger:click]">
                                        <div class="hs-tooltip-toggle ti-main-tooltip-toggle">
                                            <button type="button"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary hover:text-primary/80 disabled:opacity-50 disabled:pointer-events-none dark:text-primary dark:hover:text-primary/80 dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-primary">
                                                Preline review
                                                <i class="ri-arrow-up-s-line"></i>
                                            </button>

                                            <div class="hs-tooltip-content ti-main-tooltip-content !bg-white dark:!bg-bodybg hidden max-w-xs w-full"
                                                role="tooltip">
                                                <div class="p-4">
                                                    <!-- Header -->
                                                    <div class="mb-3 flex justify-between items-center gap-x-3">
                                                        <div class="flex items-center gap-x-2">
                                                            <h4 class="font-semibold text-gray-800 dark:text-white">
                                                                5.0
                                                            </h4>

                                                            <!-- Rating -->
                                                            <div class="flex">
                                                                <i
                                                                    class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                                                <i
                                                                    class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                                                <i
                                                                    class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                                                <i
                                                                    class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                                                <i
                                                                    class="ri-star-fill text-lg text-warning dark:text-warning"></i>
                                                            </div>
                                                            <!-- End Rating -->
                                                        </div>

                                                        <a class="inline-flex items-center gap-x-1 text-xs text-primary decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-0 dark:focus:shadow-none dark:focus:ring-primary"
                                                            href="javascript:void(0);">
                                                            See all (4)
                                                        </a>
                                                    </div>
                                                    <!-- End Header -->

                                                    <div class="mb-3">
                                                        <!-- Progress -->
                                                        <div class="flex items-center gap-x-3 whitespace-nowrap">
                                                            <div class="w-10 text-end">
                                                                <span class="text-sm text-gray-800 dark:text-white">5
                                                                    star</span>
                                                            </div>
                                                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                                role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                                    style="width: 78%"></div>
                                                            </div>
                                                            <div class="w-10 text-end">
                                                                <span
                                                                    class="text-sm text-gray-800 dark:text-white">78%</span>
                                                            </div>
                                                        </div>
                                                        <!-- End Progress -->

                                                        <!-- Progress -->
                                                        <div class="flex items-center gap-x-3 whitespace-nowrap">
                                                            <div class="w-10 text-end">
                                                                <span class="text-sm text-gray-800 dark:text-white">4
                                                                    star</span>
                                                            </div>
                                                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                                role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                                    style="width: 20%"></div>
                                                            </div>
                                                            <div class="w-10 text-end">
                                                                <span
                                                                    class="text-sm text-gray-800 dark:text-white">20%</span>
                                                            </div>
                                                        </div>
                                                        <!-- End Progress -->

                                                        <!-- Progress -->
                                                        <div class="flex items-center gap-x-3 whitespace-nowrap">
                                                            <div class="w-10 text-end">
                                                                <span class="text-sm text-gray-800 dark:text-white">3
                                                                    star</span>
                                                            </div>
                                                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                                role="progressbar" aria-valuenow="6" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                                    style="width: 6%"></div>
                                                            </div>
                                                            <div class="w-10 text-end">
                                                                <span
                                                                    class="text-sm text-gray-800 dark:text-white">6%</span>
                                                            </div>
                                                        </div>
                                                        <!-- End Progress -->

                                                        <!-- Progress -->
                                                        <div class="flex items-center gap-x-3 whitespace-nowrap">
                                                            <div class="w-10 text-end">
                                                                <span class="text-sm text-gray-800 dark:text-white">2
                                                                    star</span>
                                                            </div>
                                                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                                role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                                    style="width: 2%"></div>
                                                            </div>
                                                            <div class="w-10 text-end">
                                                                <span
                                                                    class="text-sm text-gray-800 dark:text-white">2%</span>
                                                            </div>
                                                        </div>
                                                        <!-- End Progress -->

                                                        <!-- Progress -->
                                                        <div class="flex items-center gap-x-3 whitespace-nowrap">
                                                            <div class="w-10 text-end">
                                                                <span class="text-sm text-gray-800 dark:text-white">1
                                                                    star</span>
                                                            </div>
                                                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                                role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                                    style="width: 0%"></div>
                                                            </div>
                                                            <div class="w-10 text-end">
                                                                <span
                                                                    class="text-sm text-gray-800 dark:text-white">0%</span>
                                                            </div>
                                                        </div>
                                                        <!-- End Progress -->
                                                    </div>

                                                    <a class="inline-flex items-center gap-x-1 text-xs text-gray-600 decoration-2 hover:underline dark:text-white/70 dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-gray-400"
                                                        href="javascript:void(0);">
                                                        How reviews and ratings work
                                                        <i class="ri-arrow-right-s-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Popover -->
                                </div>
                                <div class="box-footer hidden !border-t-0">
                    <!-- Prism Code -->
                    <pre class="language-html"><code class="language-html">
                        &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click]"&gt;
                            &lt;div class="hs-tooltip-toggle ti-main-tooltip-toggle"&gt;
                                &lt;button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary hover:text-primary/80 disabled:opacity-50 disabled:pointer-events-none dark:text-primary dark:hover:text-primary/80 dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-primary"&gt;
                                    Preline review
                                    &lt;i class="ri-arrow-up-s-line"&gt;&lt;/i&gt;
                                &lt;/button&gt;

                                &lt;div class="hs-tooltip-content ti-main-tooltip-content !bg-white dark:!bg-bodybg hidden max-w-xs w-full"
                                    role="tooltip"&gt;
                                    &lt;div class="p-4"&gt;
                                        &lt;!-- Header --&gt;
                                        &lt;div class="mb-3 flex justify-between items-center gap-x-3"&gt;
                                            &lt;div class="flex items-center gap-x-2"&gt;
                                                &lt;h4 class="font-semibold text-gray-800 dark:text-white"&gt;
                                                    5.0
                                                &lt;/h4&gt;

                                                &lt;!-- Rating --&gt;
                                                &lt;div class="flex"&gt;
                                                    &lt;i
                                                        class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                                                    &lt;i
                                                        class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                                                    &lt;i
                                                        class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                                                    &lt;i
                                                        class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                                                    &lt;i
                                                        class="ri-star-fill text-lg text-warning dark:text-warning"&gt;&lt;/i&gt;
                                                &lt;/div&gt;
                                                &lt;!-- End Rating --&gt;
                                            &lt;/div&gt;

                                            &lt;a class="inline-flex items-center gap-x-1 text-xs text-primary decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-0 dark:focus:shadow-none dark:focus:ring-primary"
                                                href="javascript:void(0);"&gt;
                                                See all (4)
                                            &lt;/a&gt;
                                        &lt;/div&gt;
                                        &lt;!-- End Header --&gt;

                                        &lt;div class="mb-3"&gt;
                                            &lt;!-- Progress --&gt;
                                            &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;5
                                                        star&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                    role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                                    aria-valuemax="100"&gt;
                                                    &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                        style="width: 78%"&gt;&lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span
                                                        class="text-sm text-gray-800 dark:text-white"&gt;78%&lt;/span&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;!-- End Progress --&gt;

                                            &lt;!-- Progress --&gt;
                                            &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;4
                                                        star&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                    role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                    aria-valuemax="100"&gt;
                                                    &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                        style="width: 20%"&gt;&lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span
                                                        class="text-sm text-gray-800 dark:text-white"&gt;20%&lt;/span&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;!-- End Progress --&gt;

                                            &lt;!-- Progress --&gt;
                                            &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;3
                                                        star&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                    role="progressbar" aria-valuenow="6" aria-valuemin="0"
                                                    aria-valuemax="100"&gt;
                                                    &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                        style="width: 6%"&gt;&lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span
                                                        class="text-sm text-gray-800 dark:text-white"&gt;6%&lt;/span&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;!-- End Progress --&gt;

                                            &lt;!-- Progress --&gt;
                                            &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;2
                                                        star&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                    role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"&gt;
                                                    &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                        style="width: 2%"&gt;&lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span
                                                        class="text-sm text-gray-800 dark:text-white"&gt;2%&lt;/span&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;!-- End Progress --&gt;

                                            &lt;!-- Progress --&gt;
                                            &lt;div class="flex items-center gap-x-3 whitespace-nowrap"&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;1
                                                        star&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-bgdark"
                                                    role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"&gt;
                                                    &lt;div class="flex flex-col justify-center rounded-full overflow-hidden bg-warning text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-yellow-600"
                                                        style="width: 0%"&gt;&lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="w-10 text-end"&gt;
                                                    &lt;span
                                                        class="text-sm text-gray-800 dark:text-white"&gt;0%&lt;/span&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;!-- End Progress --&gt;
                                        &lt;/div&gt;

                                        &lt;a class="inline-flex items-center gap-x-1 text-xs text-gray-600 decoration-2 hover:underline dark:text-white/70 dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-gray-400"
                                            href="javascript:void(0);"&gt;
                                            How reviews and ratings work
                                            &lt;i class="ri-arrow-right-s-line"&gt;&lt;/i&gt;
                                        &lt;/a&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code></pre>
                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Popover With Content</h5>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex justify-center">
                                        <div class="hs-tooltip ti-main-tooltip [--trigger:click]">
                                            <a class="ti-btn ti-btn-primary-full hs-tooltip-toggle ti-main-tooltip-toggle"
                                                href="javascript:;">
                                                Popover
                                                <div class="hs-tooltip-content ti-main-tooltip-content hidden p-0 max-w-xs  text-start rounded-sm"
                                                    role="tooltip">
                                                    <span
                                                        class="pt-3 px-4 block text-lg font-bold text-defaulttextcolor dark:text-defaulttextcolor/70">Overview</span>
                                                    <div class="py-2 px-3 text-sm text-gray-600 dark:text-white/70">
                                                        <img class="rounded-sm mb-3"
                                                            src="{{asset('build/assets/images/media/media-25.jpg')}}"
                                                            alt="Image Description">
                                                        <p class="text-defaulttextcolor dark:text-defaulttextcolor/70">This
                                                            is a popover body with supporting text below as a natural
                                                            lead-in to additional content.</p>
                                                        <dl class="mt-3">
                                                            <dt
                                                                class="font-bold pt-3 first:pt-0 !mb-2 text-textmuted dark:text-defaulttextcolor/70">
                                                                Assigned to:</dt>
                                                            <dd
                                                                class="m-0 text-defaulttextcolor dark:text-defaulttextcolor/70">
                                                                Mark Welson</dd>
                                                            <dt
                                                                class="font-bold pt-3 first:pt-0 !mb-2text-textmuted dark:text-defaulttextcolor/70">
                                                                Due:</dt>
                                                            <dd
                                                                class="m-0 text-defaulttextcolor dark:text-defaulttextcolor/70">
                                                                December 21, 2021</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                    <!-- Prism Code -->
                    <pre class="language-html"><code class="language-html">
                        &lt;div class="flex justify-center"&gt;
                            &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click]"&gt;
                                &lt;a class="ti-btn ti-btn-primary-full hs-tooltip-toggle ti-main-tooltip-toggle"
                                    href="javascript:;"&gt;
                                    Popover
                                    &lt;div class="hs-tooltip-content ti-main-tooltip-content hidden p-0 max-w-xs  text-start rounded-sm"
                                        role="tooltip"&gt;
                                        &lt;span
                                            class="pt-3 px-4 block text-lg font-bold text-defaulttextcolor dark:text-defaulttextcolor/70"&gt;Overview&lt;/span&gt;
                                        &lt;div class="py-2 px-3 text-sm text-gray-600 dark:text-white/70"&gt;
                                            &lt;img class="rounded-sm mb-3"
                                                src="{{asset('build/assets/images/media/media-25.jpg')}}"
                                                alt="Image Description"&gt;
                                            &lt;p class="text-defaulttextcolor dark:text-defaulttextcolor/70"&gt;This
                                                is a popover body with supporting text below as a natural
                                                lead-in to additional content.&lt;/p&gt;
                                            &lt;dl class="mt-3"&gt;
                                                &lt;dt
                                                    class="font-bold pt-3 first:pt-0 !mb-2 text-textmuted dark:text-defaulttextcolor/70"&gt;
                                                    Assigned to:&lt;/dt&gt;
                                                &lt;dd
                                                    class="m-0 text-defaulttextcolor dark:text-defaulttextcolor/70"&gt;
                                                    Mark Welson&lt;/dd&gt;
                                                &lt;dt
                                                    class="font-bold pt-3 first:pt-0 !mb-2text-textmuted dark:text-defaulttextcolor/70"&gt;
                                                    Due:&lt;/dt&gt;
                                                &lt;dd
                                                    class="m-0 text-defaulttextcolor dark:text-defaulttextcolor/70"&gt;
                                                    December 21, 2021&lt;/dd&gt;
                                            &lt;/dl&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code></pre>
                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
