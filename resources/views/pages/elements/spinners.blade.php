
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Spinners</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Spinners 
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
                    <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Border spinner
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-spinner" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="ti-spinner" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Colors
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-spinner text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-secondary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-success" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-danger" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-warning" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-info" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner text-light" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-spinner text-primary" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner text-secondary" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner text-success" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner text-danger" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner text-warning" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner text-info" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner text-light" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Basic Growing Spinner
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-spinner !bg-black dark:!bg-light !animate-ping !border-transparent "
                                        role="status" aria-label="loading">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-spinner !bg-black dark:!bg-light !animate-ping !border-transparent " role="status"
        aria-label="loading"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Growing Spinner Sizes</h5>
                                </div>
                                <div class="box-body">
                                    <div class="space-x-6 rtl:space-x-reverse space-y-4">
                                        <div class="ti-spinner !w-4 !h-4 !animate-ping !border-transparent  bg-primary"
                                            role="status" aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>

                                        <div class="ti-spinner !animate-ping !border-transparent  bg-primary" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>

                                        <div class="ti-spinner !w-8 !h-8 !animate-ping !border-transparent  bg-primary"
                                            role="status" aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Colored Growing Spinner
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-x-6 space-y-4 rtl:space-x-reverse">
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-primary" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-secondary"
                                            role="status" aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-warning" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-danger" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-success" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-info" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="ti-spinner !animate-ping !border-transparent  bg-black/20 dark:!bg-light dark:animate-ping "
                                            role="status" aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>

                                        <div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
                                            aria-label="loading">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="space-x-6 space-y-4 rtl:space-x-reverse"&gt;
        &lt;div class="ti-spinner !animate-ping !border-transparent  bg-primary" role="status"
            aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="ti-spinner !animate-ping !border-transparent  bg-secondary" role="status"
            aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="ti-spinner !animate-ping !border-transparent  bg-warning" role="status"
            aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="ti-spinner !animate-ping !border-transparent  bg-danger" role="status"
            aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="ti-spinner !animate-ping !border-transparent  bg-success" role="status"
            aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="ti-spinner !animate-ping !border-transparent  bg-info" role="status"
            aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="ti-spinner !animate-ping !border-transparent  bg-black/20 dark:!bg-light dark:animate-ping "
            role="status" aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;

        &lt;div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
            aria-label="loading"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Alignment Flex
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex justify-center mb-6">
                                        <div class="ti-spinner" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <strong>Loading...</strong>
                                        <div class="ti-spinner" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="flex justify-center mb-6"&gt;
        &lt;div class="ti-spinner" role="status"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="flex items-center justify-between"&gt;
        &lt;strong&gt;Loading...&lt;/strong&gt;
        &lt;div class="ti-spinner" role="status"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Alignment Float
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="clearfix mb-6">
                                        <div class="ti-spinner float-right rtl:float-left " role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="ti-spinner float-start" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="clearfix mb-6"&gt;
        &lt;div class="ti-spinner float-right " role="status"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="clearfix"&gt;
        &lt;div class="ti-spinner float-start" role="status"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Alignment Text center
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="text-center">
                                        <div class="ti-spinner" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
        &lt;div class="ti-spinner" role="status"&gt;
            &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Spinner Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex items-center">
                                    <div class="ti-spinner !w-[1rem] !h-[1rem] me-6" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner !w-[1rem] !h-[1rem] !bg-black dark:!bg-white !animate-ping !border-transparent me-6"
                                        role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner me-6" style="width: 3rem; height: 3rem;" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="ti-spinner !bg-black dark:!bg-white !animate-ping !border-transparent"
                                        style="width: 2rem; height: 2rem;" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="ti-spinner !w-[1rem] !h-[1rem] me-6" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner !w-[1rem] !h-[1rem] !bg-black dark:!bg-white !animate-ping !border-transparent me-6" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner me-6" style="width: 3rem; height: 3rem;"
        role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="ti-spinner !bg-black dark:!bg-white !animate-ping !border-transparent" style="width: 2rem; height: 2rem;" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Alignment Margin
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-spinner m-[3rem]" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-spinner m-[3rem]" role="status"&gt;
        &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="grid grid-cols-12  gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Buttons</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Show Code<i
                                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-x-2">
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-primary-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-primary-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-secondary-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-secondary-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-warning-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-warning-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-danger-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-danger-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-info-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-info-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-success-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-disabled ti-btn-success-full" disabled>
                                            <span class="ti-spinner text-white" role="status" aria-label="loading"></span>
                                            <span>Loading...</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="space-x-2"&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-primary-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
                &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
            &lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-primary-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
            &lt;span&gt;Loading...&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-secondary-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
                &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
            &lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-secondary-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
            &lt;span&gt;Loading...&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-warning-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
                &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
            &lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-warning-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
            &lt;span&gt;Loading...&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-danger-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
                &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
            &lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-danger-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
            &lt;span&gt;Loading...&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-info-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
                &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
            &lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-info-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
            &lt;span&gt;Loading...&lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-success-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;
                &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
            &lt;/span&gt;
        &lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-disabled ti-btn-success-full" disabled&gt;
            &lt;span class="ti-spinner text-white" role="status" aria-label="loading"&gt;&lt;/span&gt;
            &lt;span&gt;Loading...&lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
