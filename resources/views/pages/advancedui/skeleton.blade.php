
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Skeleton</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Advanced Ui <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Skeleton 
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
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <img class="card-img-top" src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="">
                                        <div class="box-body">
                                            <h5 class="box-title">Card title</h5>
                                            <p class="card-text mb-3">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="ti-btn bg-primary text-white">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <img class="card-img-top" src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="">
                                        <div class="box-body !mb-0">
                                            <div class="animate-pulse">
                                                <div class="h5 card-title placeholder-glow">
                                                    <span class="placeholder col-6"></span>
                                                </div>
                                                <h3 class="h-4 bg-secondary opacity-10 rounded-full dark:bg-gray-700"
                                                    style="width: 40%;"></h3>

                                                <ul class="mt-2 space-y-3 mb-3">
                                                    <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700"></li>
                                                    <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700"></li>
                                                    <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700"></li>
                                                </ul>
                                            </div>
                                            <a href="#" tabindex="-1"
                                                class="ti-btn bg-primary opacity-75 disabled placeholder col-6 w-1/3 h-8"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between !mb-0">
                                            <div class="box-title">Animation</div>
                                            <div class="prism-toggle">
                                                <button
                                                    class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                                    Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body animate-pulse !-mt-[20px]">
                                            <ul class="mt-2 space-y-3 mb-3">
                                                <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700"></li>
                                                <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700"></li>
                                                <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700"></li>
                                            </ul>
                                        </div>
                                        <div class="box-footer hidden !border-t-0">
                                            <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;p class="placeholder-glow mb-0"&gt;&lt;span class="placeholder col-12"&gt;&lt;/span&gt;
    &lt;/p&gt;
    &lt;p class="placeholder-wave mb-0"&gt;
        &lt;span class="placeholder col-12"&gt;&lt;/span&gt;
    &lt;/p&gt;</code></pre>
                                            <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-header flex justify-between">
                                                    <div class="box-title">
                                                        Sizing
                                                    </div>
                                                    <div class="prism-toggle">
                                                        <button
                                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                                            Code<i
                                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <ul class="mt-2 space-y-3 mb-3">
                                                        <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700 p-3">
                                                        </li>
                                                        <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700 p-2">
                                                        </li>
                                                        <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700 p-2">
                                                        </li>
                                                        <li class="w-full h-3 bg-secondary opacity-10 dark:bg-gray-700">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer hidden !border-t-0">
                                                    <!-- Prism Code -->
                                                    <pre
                                                        class="language-html"><code class="language-html">&lt;span class="placeholder col-12 placeholder-xl mb-1"&gt;&lt;/span&gt;
                                                        &lt;span class="placeholder col-12 placeholder-lg"&gt;&lt;/span&gt;
                                                        &lt;span class="placeholder col-12"&gt;&lt;/span&gt;
                                                        &lt;span class="placeholder col-12 placeholder-sm"&gt;&lt;/span&gt;
                                                        &lt;span class="placeholder col-12 placeholder-xs"&gt;&lt;/span&gt;</code></pre>
                                                    <!-- Prism Code -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-header flex justify-between">
                                                    <div class="box-title">
                                                        Colors
                                                    </div>
                                                    <div class="prism-toggle">
                                                        <button
                                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                                            Code<i
                                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                                    </div>
                                                </div>
                                                <div class="box-body !-mt-3">
                                                    <ul class="mt-2 space-y-3 mb-3">
                                                        <li class="w-full h-3 bg-secondary opacity-50 dark:bg-gray-700">
                                                        </li>
                                                        <li class="w-full h-3 bg-primary opacity-50 dark:bg-primary"></li>
                                                        <li class="w-full h-3 bg-secondary opacity-50 dark:bg-gray-700">
                                                        </li>
                                                        <li class="w-full h-3 bg-success opacity-50 dark:bg-success"></li>
                                                        <li class="w-full h-3 bg-danger opacity-50 dark:bg-gray-700"></li>
                                                        <li class="w-full h-3 bg-warning opacity-50 dark:bg-primary"></li>
                                                        <li class="w-full h-3 bg-info opacity-50 dark:bg-secondary"></li>
                                                        <li class="w-full h-3 bg-light opacity-50 dark:bg-success"></li>
                                                        <li class="w-full h-3 bg-gray-400 dark:bg-success"></li>
                                                    </ul>
                                                </div>
                                                <div class="box-footer hidden !border-t-0">
                                                    <!-- Prism Code -->
                                                    <pre class="language-html"><code class="language-html">&lt;span class="placeholder col-12"&gt;&lt;/span&gt;
            &lt;span class="placeholder col-12 bg-primary"&gt;&lt;/span&gt;
            &lt;span class="placeholder col-12 bg-secondary"&gt;&lt;/span&gt;
            &lt;span class="placeholder col-12 bg-success"&gt;&lt;/span&gt;
            &lt;span class="placeholder col-12 bg-danger"&gt;&lt;/span&gt;
            &lt;span class="placeholder col-12 bg-warning"&gt;&lt;/span&gt;
            &lt;span class="placeholder col-12 bg-info"&gt;&lt;/span&gt;
            &lt;span class="placeholder col-12 bg-light"&gt;&lt;/span&gt;
            &lt;span class="placeholder col-12 bg-dark"&gt;&lt;/span&gt;</code></pre>
                                                    <!-- Prism Code -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Width
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="mt-2 space-y-3 mb-3">
                                        <li class="h-3 bg-primary opacity-50 dark:bg-primary w-3/5"></li>
                                        <li class="h-3 bg-primary opacity-50 dark:bg-primary w-4/5"></li>
                                        <li class="h-3 bg-primary opacity-50 dark:bg-primary w-2/5"></li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="placeholder bg-primary col-6"&gt;&lt;/span&gt;
    &lt;span class="placeholder bg-primary w-75"&gt;&lt;/span&gt;
    &lt;span class="placeholder bg-primary" style="width: 25%;"&gt;&lt;/span&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>

                            <!-- Start:: row-2 -->

                        </div>
                    </div>

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
