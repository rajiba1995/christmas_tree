
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Dropdown</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Dropdown 
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

                    <!--Start:: row-1-->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Dropdowns
                                    </div>  
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list flex align-center flex-wrap">
                                        <div class="hs-dropdown ti-dropdown me-2">
                                            <button class="ti-btn ti-btn-primary-full !py-2"
                                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Dropdown button<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a class="ti-btn ti-btn-secondary-full !py-2"
                                                href="javascript:void(0);" role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown link<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuLink">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="ti-btn-list flex align-center flex-wrap"&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle !py-2"
            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Dropdown button&lt;i
                class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuButton1"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;a class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !py-2"
            href="javascript:void(0);" role="button" id="dropdownMenuLink"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Dropdown link&lt;i
                class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
        &lt;/a&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuLink"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End:: row-1-->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Single button Dropdowns</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-primary-full" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-secondary-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-success-full" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-info-full" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-warning-full" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-danger-full" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-success-full ti-dropdown-toggle" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-info-full ti-dropdown-toggle" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-warning-full ti-dropdown-toggle" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-danger-full ti-dropdown-toggle" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Rounded dropdown buttons</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-primary-full !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button
                                                    class="ti-btn ti-btn-secondary-full !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-success-full !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-info-full !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-warning-full !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-danger-full !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-success-full ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-info-full ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-warning-full ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-danger-full ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i
                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Outline button Dropdowns</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-outline-primary !border-primary ti-dropdown-toggle"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-outline-secondary !border-secondary ti-dropdown-toggle"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-outline-success  ti-dropdown-toggle"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-outline-info ti-dropdown-toggle" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-outline-warning ti-dropdown-toggle"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-outline-danger !border-danger ti-dropdown-toggle"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
    &lt;div class="ti-btn-group !me-2"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-outline-primary ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !me-2"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-outline-secondary ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !me-2"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-outline-success ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !me-2"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-outline-info ti-dropdown-toggle" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !me-2"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-outline-warning ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !me-2"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-outline-danger ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>

                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Outline button Dropdowns</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button
                                                    class="ti-btn ti-btn-outline-primary !border-primary ti-dropdown-toggle !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button
                                                    class="ti-btn ti-btn-outline-secondary !border-secondary ti-dropdown-toggle !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button
                                                    class="ti-btn ti-btn-outline-success ti-dropdown-toggle !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-outline-info ti-dropdown-toggle !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button
                                                    class="ti-btn ti-btn-outline-warning ti-dropdown-toggle !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button
                                                    class="ti-btn ti-btn-outline-danger !border-danger ti-dropdown-toggle !rounded-full"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-outline-primary ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-outline-secondary ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-outline-success ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-outline-info ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-outline-warning ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-outline-danger ti-dropdown-toggle !rounded-full"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Split Buttons</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <div class="ti-btn-group  !m-0">
                                            <div class="ti-dropdown m-1">
                                                <button type="button"
                                                    class="ti-btn ti-btn-primary-full !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] !pt-[4.45px]">
                                                Action
                                                </button>
                                                <div class="hs-dropdown ti-dropdown [--placement:bottom-left]">
                                                    <button id="hs-split-dropdown" type="button"
                                                        class="ti-btn ti-btn-primary-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm -ms-[4px] !pt-[4.45px] pb-[0.4rem]">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                        <i class="ri-arrow-down-s-line align-middle inline-block"
                                                        ></i>
                                                    </button>
            
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group  !m-0">
                                            <div class="ti-dropdown m-1">
                                                <button type="button"
                                                    class="ti-btn ti-btn-secondary-full !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] !pt-[4.45px]">
                                                Action
                                                </button>
                                                <div class="hs-dropdown ti-dropdown [--placement:bottom-left]">
                                                    <button id="hs-split-dropdown" type="button"
                                                        class="ti-btn ti-btn-secondary-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm  -ms-[4px] !pt-[4.45px] pb-[0.4rem]">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                        <i class="ri-arrow-down-s-line align-middle inline-block"
                                                        ></i>
                                                    </button>
            
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group  !m-0">
                                            <div class="ti-dropdown m-1">
                                                <button type="button"
                                                    class="ti-btn ti-btn-success-full !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] !pt-[4.45px]">
                                                Action
                                                </button>
                                                <div class="hs-dropdown ti-dropdown [--placement:bottom-left]">
                                                    <button id="hs-split-dropdown" type="button"
                                                        class="ti-btn ti-btn-success-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm  -ms-[4px] !pt-[4.45px] pb-[0.4rem]">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                        <i class="ri-arrow-down-s-line align-middle inline-block"
                                                        ></i>
                                                    </button>
            
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group  !m-0">
                                            <div class="ti-dropdown m-1">
                                                <button type="button"
                                                    class="ti-btn ti-btn-info-full !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] !pt-[4.45px]">
                                                Action
                                                </button>
                                                <div class="hs-dropdown ti-dropdown [--placement:bottom-left]">
                                                    <button id="hs-split-dropdown" type="button"
                                                        class="ti-btn ti-btn-info-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm  -ms-[4px] !pt-[4.45px] pb-[0.4rem]">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                        <i class="ri-arrow-down-s-line align-middle inline-block"
                                                        ></i>
                                                    </button>
            
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group  !m-0">
                                            <div class="ti-dropdown m-1">
                                                <button type="button"
                                                    class="ti-btn ti-btn-warning-full !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] !pt-[4.45px]">
                                                Action
                                                </button>
                                                <div class="hs-dropdown ti-dropdown [--placement:bottom-left]">
                                                    <button id="hs-split-dropdown" type="button"
                                                        class="ti-btn ti-btn-warning-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm  -ms-[4px] !pt-[4.45px] pb-[0.4rem]">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                        <i class="ri-arrow-down-s-line align-middle inline-block"
                                                        ></i>
                                                    </button>
            
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group  !m-0">
                                            <div class="ti-dropdown m-1">
                                                <button type="button"
                                                    class="ti-btn ti-btn-danger-full !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] !pt-[4.45px]">
                                                Action
                                                </button>
                                                <div class="hs-dropdown ti-dropdown [--placement:bottom-left]">
                                                    <button id="hs-split-dropdown" type="button"
                                                        class="ti-btn ti-btn-danger-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm  -ms-[4px] !pt-[4.45px] pb-[0.4rem]">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                        <i class="ri-arrow-down-s-line align-middle inline-block"
                                                        ></i>
                                                    </button>
            
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                            action</a></li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                            else here</a></li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="ti-btn-list"&gt;
        &lt;div class="ti-btn-group !me-2 !m-0"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-primary-full !me-0 !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm "
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action
                &lt;/button&gt;
                &lt;button
                    class="ti-btn ti-btn-primary-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2 !m-0"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-secondary-full !me-0 !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm "
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action
                &lt;/button&gt;
                &lt;button
                    class="ti-btn ti-btn-secondary-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2 !m-0"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-success-full !me-0 !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm "
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action
                &lt;/button&gt;
                &lt;button
                    class="ti-btn ti-btn-success-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2 !m-0"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-info-full !me-0 !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm "
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action
                &lt;/button&gt;
                &lt;button
                    class="ti-btn ti-btn-info-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2 !m-0"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-warning-full !me-0 !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action
                &lt;/button&gt;
                &lt;button
                    class="ti-btn ti-btn-warning-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm "&gt;&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2 !m-0"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button
                    class="ti-btn ti-btn-danger-full !me-0 !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm "
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false"&gt;
                    Action
                &lt;/button&gt;
                &lt;button
                    class="ti-btn ti-btn-danger-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuButton1"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                            action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                            else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
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
                                        Dropdown Sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-group !me-2 my-1  ti-dropdown hs-dropdown">
                                        <button class="ti-btn-primary-full !bg-primary !text-white ti-btn-lg ti-dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Large button<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ti-btn-group !me-2 my-1 ">
                                        <div class="ti-dropdown m-1">
                                            <button type="button"
                                                class="ti-btn-lg !py-[0.75rem] !px-[1rem] ti-dropdown-toggle ti-btn-light !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px]">
                                            Split large button
                                            </button>
                                            <div class="hs-dropdown ti-dropdown [--placement:bottom-left]">
                                                <button id="hs-split-dropdown" type="button"
                                                    class="ti-btn-lg !py-[0.75rem] !px-[1rem] ti-btn-light hover:!bg-light !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm ti-dropdown-toggle -ms-[4px]">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                    <i class="ri-arrow-down-s-line align-middle inline-block"
                                                    ></i>
                                                </button>
        
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group !me-2 my-1 ">
                                        <div class="ti-btn-group !me-2 my-1  ti-dropdown hs-dropdown">
                                            <button
                                                class="ti-btn ti-btn-primary-full !bg-primary  !text-white !py-1 !px-4 !text-[0.75rem] ti-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Small button<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group !me-2 my-1 ">
                                        <div class="ti-dropdown m-1">
                                            <button type="button"
                                                class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-light !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] ">
                                            Small Split button
                                            </button>
                                            <div class="hs-dropdown ti-dropdown [--placement:bottom-left]">
                                                <button id="hs-split-dropdown" type="button"
                                                    class="ti-btn !py-1 !px-2 hover:!bg-light  ti-btn-light opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm ti-dropdown-toggle -ms-[4px]  pb-[0.4rem]">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                    <i class="ri-arrow-down-s-line align-middle inline-block"
                                                    ></i>
                                                </button>
        
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="ti-btn-group !me-2 my-1  ti-dropdown hs-dropdown"&gt;
    &lt;button class="ti-btn-primary-full ti-btn-lg ti-dropdown-toggle" type="button"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Large button&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !me-2 my-1 me-2"&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button
            class="ti-btn-lg ti-btn-light !me-0 !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm !border-0 ti-dropdown-toggle"
            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Large split button
        &lt;/button&gt;
        &lt;button
            class="ti-btn ti-btn-light opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;&lt;i
                class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuButton1"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !me-2 my-1 me-2"&gt;
    &lt;div class="ti-btn-group !me-2 my-1 me-2 ti-dropdown hs-dropdown"&gt;
        &lt;button
            class="ti-btn ti-btn-primary-full !py-1 !px-4 !text-[0.75rem] ti-dropdown-toggle"
            type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Small button&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                    link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !me-2 my-1 me-2"&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button
            class="ti-btn !py-1 !px-4 !text-[0.75rem]  ti-btn-light !me-0 !rounded-tr-none !border-0 !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm ti-dropdown-toggle"
            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Small split button
        &lt;/button&gt;
        &lt;button
            class="ti-btn !py-1 !px-4 !text-[0.75rem]  ti-btn-light opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;&lt;i
                class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuButton1"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Dropup
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap">
                                    <div class="hs-dropdown ti-dropdown [--placement:top-left] m-1">
                                        <button id="hs-dropup" type="button"
                                            class="hs-dropdown-toggle  ti-btn ti-btn-primary-full !py-2">
                                            Dropup
                                            <i class="ri-arrow-up-s-line align-middle inline-block"
                                            ></i>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="hs-dropup">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Another action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ti-dropdown m-1">
                                        <button type="button"
                                            class="ti-btn ti-btn-secondary-full !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] !pt-[4.45px]">
                                        Split dropup
                                        </button>
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                            <button id="hs-split-dropdown" type="button"
                                                class="ti-btn ti-btn-secondary-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm  -ms-[4px] !pt-[4.45px] pb-[0.4rem]">
                                                <span class="sr-only">Toggle Dropdown</span>
                                                <i class="ri-arrow-up-s-line align-middle inline-block"
                                                ></i>
                                            </button>

                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                    else here</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="hs-dropdown ti-dropdown [--placement:top-left] m-1"&gt;
    &lt;button id="hs-dropup" type="button"
    class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2"&gt;
    Dropup
    &lt;svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white"
        width="16" height="16" viewBox="0 0 16 16" fill="none"
        xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path
            d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;/button&gt;

    &lt;div class="hs-dropdown-menu  mt-0 ti-dropdown-menu hidden"
    aria-labelledby="hs-dropup"&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Another action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Something else here
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown m-1"&gt;
    &lt;button type="button"
    class="relative ti-dropdown-toggle  ti-btn ti-btn-secondary-full !py-1 !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm !me-0"&gt;
    Split dropup
    &lt;/button&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
    &lt;button id="hs-split-dropup" type="button"
        class="hs-dropdown-toggle relative ti-btn ti-btn-secondary-full !opacity-[0.85]  !rounded-tl-none !rounded-bl-none ti-dropdown-toggle  rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;
        &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
        &lt;svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white"
            width="16" height="16" viewBox="0 0 16 16" fill="none"
            xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path
                d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;

    &lt;div class="hs-dropdown-menu  mt-0 ti-dropdown-menu hidden"
        aria-labelledby="hs-split-dropup"&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Action
        &lt;/a&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Another action
        &lt;/a&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Something else here
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Drop right
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap">
                                    <div class="hs-dropdown ti-dropdown [--placement:right-top] m-1">
                                        <button id="hs-dropright" type="button"
                                            class="hs-dropdown-toggle  ti-btn ti-btn-primary-full !py-2">
                                            Dropright
                                            <svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                        </button>

                                        <div class="hs-dropdown-menu  ti-dropdown-menu hidden"
                                            aria-labelledby="hs-dropright">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Another action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Something else here
                                            </a>
                                            <a>
                                                <hr class="dropdown-divider">
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ti-dropdown m-1">
                                        <button type="button"
                                            class="ti-btn ti-btn-secondary-full !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] !pt-[4.45px]">
                                        Split dropright
                                        </button>
                                        <div class="hs-dropdown ti-dropdown [--placement:right-top]">
                                            <button id="hs-split-dropdown" type="button"
                                                class="ti-btn ti-btn-secondary-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm  -ms-[4px] !pt-[4.45px] pb-[0.4rem]">
                                                <span class="sr-only">Toggle Dropdown</span>
                                                <svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>

                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                    else here</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown [--placement:right-top] m-1"&gt;
    &lt;button id="hs-dropright" type="button"
    class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2"&gt;
    Dropright
    &lt;svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16" height="16"
        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path
            d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;/button&gt;

    &lt;div class="hs-dropdown-menu  ti-dropdown-menu hidden"
    aria-labelledby="hs-dropright"&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Another action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Something else here
    &lt;/a&gt;
    &lt;a&gt;
        &lt;hr class="dropdown-divider"&gt;
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Separated link
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:right-top] m-1"&gt;
    &lt;button type="button"
    class="hs-dropdown-toggle relative ti-btn ti-btn-secondary-full  !py-2 !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm ti-dropdown-toggle !me-0"&gt;
    Split dropright
    &lt;/button&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:right-top]"&gt;
    &lt;button id="hs-split-dropright" type="button"
        class="hs-dropdown-toggle relative  ti-dropdown-toggle !opacity-[0.85] rounded-none  ti-btn ti-btn-secondary-full !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;
        &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
        &lt;svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16"
            height="16" viewBox="0 0 16 16" fill="none"
            xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path
                d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;

    &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
        aria-labelledby="hs-split-dropright"&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Action
        &lt;/a&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Another action
        &lt;/a&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Something else here
        &lt;/a&gt;
        &lt;a&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/a&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Separated link
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Dropup left
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap">
                                    <div class="hs-dropdown ti-dropdown [--placement:left-top] m-1">
                                        <button id="hs-dropright" type="button"
                                            class="hs-dropdown-toggle  ti-btn ti-btn-primary-full !py-2">
                                            <svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            Dropleft
                                        </button>
                                        <div class="hs-dropdown-menu  ti-dropdown-menu  hidden"
                                            aria-labelledby="hs-dropright">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Another action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Something else here
                                            </a>
                                            <a>
                                                <hr class="dropdown-divider">
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ti-dropdown m-1">
                                        <button type="button"
                                            class="ti-btn ti-btn-secondary-full !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] !pt-[4.45px]">
                                        Split dropleft
                                        </button>
                                        <div class="hs-dropdown ti-dropdown [--placement:left-top]">
                                            <button id="hs-split-dropdown" type="button"
                                                class="ti-btn ti-btn-secondary-full opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm -ms-[4px] !pt-[4.45px] pb-[0.4rem]">
                                                <span class="sr-only">Toggle Dropdown</span>
                                                <svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            </button>

                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                    else here</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown [--placement:left-top] m-1"&gt;
    &lt;button id="hs-dropright" type="button"
    class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2"&gt;
    &lt;svg class="w-auto h-2.5 text-white" width="16" height="16" viewBox="0 0 16 16"
        fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path
            d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    Dropleft
    &lt;/button&gt;

    &lt;div class="hs-dropdown-menu  ti-dropdown-menu hidden"
    aria-labelledby="hs-dropright"&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Another action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Something else here
    &lt;/a&gt;
    &lt;a&gt;
        &lt;hr class="dropdown-divider"&gt;
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Separated link
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:left-top] m-1"&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:left-top]"&gt;
    &lt;button id="hs-split-dropright" type="button"
        class="hs-dropdown-toggle relative  ti-dropdown-toggle !opacity-[0.85] rounded-none  ti-btn ti-btn-secondary-full !rounded-tr-none !rounded-br-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"&gt;
        &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
        &lt;svg class="w-auto h-2.5 text-white" width="16" height="16"
            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path
                d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;

    &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"
        aria-labelledby="hs-split-dropright"&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Action
        &lt;/a&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Another action
        &lt;/a&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Something else here
        &lt;/a&gt;
        &lt;a&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/a&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
            Separated link
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="button"
    class="hs-dropdown-toggle relative ti-btn ti-btn-secondary-full  !py-2 !rounded-tl-none !rounded-bl-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm ti-dropdown-toggle !me-0"&gt;
    Split dropleft
    &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Active
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button type="button" class="ti-btn ti-btn-primary-full !bg-primary !text-white ti-dropdown-toggle !py-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropstart<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Regular link</a></li>
                                            <li><a class="ti-dropdown-item active" href="javascript:void(0);"
                                                    aria-current="true">Active
                                                    link</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown"&gt;
    &lt;button type="button" class="ti-btn ti-btn-primary-full ti-dropdown-toggle !py-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropstart&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"
                aria-current="true"&gt;Active
                link&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Disabled
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button type="button" class="ti-btn-primary-full !bg-primary !text-white ti-dropdown-toggle  !py-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropstart<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Regular link</a></li>
                                            <li><a class="ti-dropdown-item disabled" href="javascript:void(0);"
                                                    aria-current="true">Active
                                                    link</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown"&gt;
    &lt;button type="button" class="ti-btn-primary-full ti-dropdown-toggle !py-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropstart&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item disabled" href="javascript:void(0);"
                aria-current="true"&gt;Active
                link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Auto close behavior
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-primary-full " type="button"
                                                    id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true"
                                                    aria-expanded="false">
                                                    Default dropdown<i
                                                        class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="defaultDropdown">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-secondary-full "
                                                    type="button" id="dropdownMenuClickableOutside"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="inside"
                                                    aria-expanded="false">
                                                    Clickable outside<i
                                                        class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="defaultDropdown">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-info-full " type="button"
                                                    id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                                    data-bs-auto-close="outside" aria-expanded="false">
                                                    Clickable inside<i
                                                        class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuClickableInside">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ti-btn-group !me-2">
                                            <div class="hs-dropdown ti-dropdown">
                                                <button class="ti-btn ti-btn-warning-full " type="button"
                                                    id="dropdownMenuClickable" data-bs-toggle="dropdown"
                                                    data-bs-auto-close="false" aria-expanded="false">
                                                    Manual close<i
                                                        class="ri-arrow-down-s-line align-middle inline-block"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                    aria-labelledby="dropdownMenuClickable">
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle" type="button"
                    id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true"
                    aria-expanded="false"&gt;
                    Default dropdown&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="defaultDropdown"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle"
                    type="button" id="dropdownMenuClickableOutside"
                    data-bs-toggle="dropdown" data-bs-auto-close="inside"
                    aria-expanded="false"&gt;
                    Clickable outside&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="defaultDropdown"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-info-full ti-dropdown-toggle" type="button"
                    id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" aria-expanded="false"&gt;
                    Clickable inside&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuClickableInside"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-btn-group !me-2"&gt;
            &lt;div class="hs-dropdown ti-dropdown"&gt;
                &lt;button class="ti-btn ti-btn-warning-full ti-dropdown-toggle" type="button"
                    id="dropdownMenuClickable" data-bs-toggle="dropdown"
                    data-bs-auto-close="false" aria-expanded="false"&gt;
                    Manual close&lt;i
                        class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                    aria-labelledby="dropdownMenuClickable"&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        dropdowns with Forms
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown [--auto-close:inside]">
                                        <button class="ti-btn ti-btn-secondary-full !py-2" id="hs-dropdown-auto-close-inside" type="button"
                                            id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-auto-close-inside">
                                            <form class="!px-6 !py-4">
                                                <div class="mb-4">
                                                    <label for="exampleDropdownFormEmail1" class="form-label">Email
                                                        address</label>
                                                    <input type="email" class="form-control w-full !rounded-md"
                                                        id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="exampleDropdownFormPassword1"
                                                        class="form-label">Password</label>
                                                    <input type="password" class="form-control w-full !rounded-md"
                                                        id="exampleDropdownFormPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-4">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                        <label class="form-check-label" for="dropdownCheck">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="ti-btn ti-btn-primary-full">Sign in</button>
                                            </form>
                                            <div class="dropdown-divider"></div>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">New around here? Sign
                                                up</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !py-2" type="button"
            id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Dropdown&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
            &lt;form class="!px-6 !py-4"&gt;
                &lt;div class="mb-4"&gt;
                    &lt;label for="exampleDropdownFormEmail1" class="form-label"&gt;Email
                        address&lt;/label&gt;
                    &lt;input type="email" class="form-control w-full !rounded-md"
                        id="exampleDropdownFormEmail1" placeholder="email@example.com"&gt;
                &lt;/div&gt;
                &lt;div class="mb-4"&gt;
                    &lt;label for="exampleDropdownFormPassword1"
                        class="form-label"&gt;Password&lt;/label&gt;
                    &lt;input type="password" class="form-control w-full !rounded-md"
                        id="exampleDropdownFormPassword1" placeholder="Password"&gt;
                &lt;/div&gt;
                &lt;div class="mb-4"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input type="checkbox" class="form-check-input" id="dropdownCheck"&gt;
                        &lt;label class="form-check-label" for="dropdownCheck"&gt;
                            Remember me
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;button type="submit" class="ti-btn ti-btn-primary-full"&gt;Sign in&lt;/button&gt;
            &lt;/form&gt;
            &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
            &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;New around here? Sign
                up&lt;/a&gt;
            &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Forgot password?&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

                    <!-- Start:: row-7 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Alignment options
                                    </div>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap">
                                        <div class="ti-dropdown hs-dropdown">
                                            <button class="ti-btn ti-btn-primary-full  mb-0  !font-normal !me-2"
                                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Dropdown<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden "
                                                aria-labelledby="dropdownMenuButton">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button type="button"
                                                class="ti-btn ti-btn-secondary-full  mb-0  !font-normal !me-2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Right-aligned menu<i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul
                                                class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu ti-dropdown-menu-end hidden ">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown" data-hs-dropdown-strategy="absolute">
                                            <button type="button" id="hs-dropdown-left-but-right-on-lg"
                                                class="ti-btn ti-btn-info-full  mb-0  !font-normal !me-2"
                                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                                Left-aligned, right-aligned lg<i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu hidden ti-dropdown-menu-lg-end "
                                                aria-labelledby="hs-dropdown-left-but-right-on-lg">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown" data-hs-dropdown-strategy="absolute">
                                            <button type="button" id="hs-dropdown-right-but-left-on-lg"
                                                class="ti-btn ti-btn-warning-full  mb-0  !font-normal !me-2"
                                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                                Right-aligned, left-aligned lg<i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu hidden  ti-dropdown-menu-end hs-dropdown-menu ti-dropdown-menu-lg-start"
                                                aria-labelledby="hs-dropdown-right-but-left-on-lg">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown [--placement:left-top] m-1">
                                            <button id="hs-dropright" type="button"
                                                class="hs-dropdown-toggle  ti-btn ti-btn-success-full  !font-normal !-ms-1 !-mt-[4px]">
                                                <svg class="w-auto h-2.5 text-white" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                Dropstart
                                            </button>

                                            <ul class="hs-dropdown-menu  ti-dropdown-menu  hidden"
                                                aria-labelledby="hs-dropright">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown [--placement:right-top] m-1">
                                            <button id="hs-dropright" type="button"
                                                class="hs-dropdown-toggle  ti-btn ti-btn-primary-full  !font-normal !-mt-[4px]">
                                                Dropend
                                                <svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </button>

                                            <ul class="hs-dropdown-menu  ti-dropdown-menu  hidden"
                                                aria-labelledby="hs-dropright">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown [--placement:top-left] m-1">
                                            <button id="hs-dropup" type="button"
                                                class="hs-dropdown-toggle  ti-btn ti-btn-success-full  !font-normal !-mt-[4px]">
                                                Dropup
                                                <svg class="ti-dropdown-caret !text-white"
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </button>

                                            <ul class="hs-dropdown-menu  mt-0  ti-dropdown-menu hidden"
                                                aria-labelledby="hs-dropup">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class=""&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle mb-0 !py-2"
            type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Dropdown&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden "
            aria-labelledby="dropdownMenuButton"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button type="button"
            class="ti-btn ti-btn-secondary-full ti-dropdown-toggle mb-0 !py-2"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Right-aligned menu&lt;i
                class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul
            class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu ti-dropdown-menu-end hidden "&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown" data-hs-dropdown-strategy="absolute"&gt;
        &lt;button type="button" id="hs-dropdown-left-but-right-on-lg"
            class="ti-btn ti-btn-info-full ti-dropdown-toggle mb-0 !py-2"
            data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"&gt;
            Left-aligned, right-aligned lg&lt;i
                class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu hidden ti-dropdown-menu-lg-end "
            aria-labelledby="hs-dropdown-left-but-right-on-lg"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown" data-hs-dropdown-strategy="absolute"&gt;
        &lt;button type="button" id="hs-dropdown-right-but-left-on-lg"
            class="ti-btn ti-btn-warning-full ti-dropdown-toggle mb-0 !py-2"
            data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"&gt;
            Right-aligned, left-aligned lg&lt;i
                class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu hidden  ti-dropdown-menu-end hs-dropdown-menu ti-dropdown-menu-lg-start"
            aria-labelledby="hs-dropdown-right-but-left-on-lg"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:left-top] m-1"&gt;
        &lt;button id="hs-dropright" type="button"
            class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-success-full !py-2"&gt;
            &lt;svg class="w-auto h-2.5 text-white" width="16" height="16"
                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path
                    d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            Dropstart
        &lt;/button&gt;

        &lt;ul class="hs-dropdown-menu  ti-dropdown-menu hidden"
            aria-labelledby="hs-dropright"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:right-top] m-1"&gt;
        &lt;button id="hs-dropright" type="button"
            class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2"&gt;
            Dropend
            &lt;svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16"
                height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path
                    d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;

        &lt;ul class="hs-dropdown-menu  ti-dropdown-menu hidden"
            aria-labelledby="hs-dropright"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="hs-dropdown ti-dropdown [--placement:top-left] m-1"&gt;
        &lt;button id="hs-dropup" type="button"
            class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-success-full !py-2"&gt;
            Dropup
            &lt;svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white"
                width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path
                    d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;

        &lt;ul class="hs-dropdown-menu  mt-0 ti-dropdown-menu hidden"
            aria-labelledby="hs-dropup"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Dark Dropdowns
                                    </div>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-dark ti-dropdown-toggle !py-2" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul
                                            class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu !bg-black dark:!bg-white hidden">
                                            <li><a class="ti-dropdown-item !text-white dark:!text-black"
                                                    href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item !text-white dark:!text-black"
                                                    href="javascript:void(0);">Another action</a></li>
                                            <li><a class="ti-dropdown-item !text-white dark:!text-black"
                                                    href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-dark ti-dropdown-toggle !py-2" type="button"
        id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropdown button&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul
        class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu !bg-black dark:!bg-defaulttextcolor/10 hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item !text-white dark:!text-defaulttextcolor"
                href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item !text-white dark:!text-defaulttextcolor"
                href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item !text-white dark:!text-defaulttextcolor"
                href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-7 -->

                    <!-- Start:: row-8 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Custom Dropdown Menu's
                                    </div>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list flex flex-wrap gap-2">
                                        <div class="ti-dropdown hs-dropdown">
                                            <button class="ti-btn ti-btn-primary-full !bg-primary ti-dropdown-toggle !py-2"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Primary<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul
                                                class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu !bg-primary hidden">
                                                <li><a class="ti-dropdown-item !text-white"
                                                        href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item !text-white"
                                                        href="javascript:void(0);">Another action</a></li>
                                                <li><a class="ti-dropdown-item !text-white"
                                                        href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button class="ti-btn ti-btn-secondary-full !bg-secondary ti-dropdown-toggle !py-2"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                secondary<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul
                                                class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu !bg-secondary hidden">
                                                <li><a class="ti-dropdown-item !text-white"
                                                        href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item !text-white"
                                                        href="javascript:void(0);">Another action</a></li>
                                                <li><a class="ti-dropdown-item !text-white"
                                                        href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button class="ti-btn ti-btn-warning-full !bg-warning ti-dropdown-toggle !py-2"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                warning<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu !bg-warning ti-dropdown-menu dropmenu-item-warning hidden">
                                                <li><a class="ti-dropdown-item active !text-white" href="javascript:void(0);">Active</a>
                                                </li>
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button class="ti-btn ti-btn-info-full !bg-info ti-dropdown-toggle !py-2" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                info<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu !bg-info dropmenu-item-info hidden">
                                                <li><a class="ti-dropdown-item !text-white active" href="javascript:void(0);">Active</a>
                                                </li>
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button class="ti-btn ti-btn-success !bg-success !text-white ti-dropdown-toggle !py-2" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                success<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu !bg-success dropmenu-light-success hidden">
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item !text-white active" href="javascript:void(0);">Active</a>
                                                </li>
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button class="ti-btn ti-btn-danger !bg-danger !text-white ti-dropdown-toggle !py-2" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                danger<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu !bg-danger dropmenu-light-danger hidden">
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item !text-white active" href="javascript:void(0);">Active</a>
                                                </li> 
                                                <li><a class="ti-dropdown-item !text-white" href="javascript:void(0);">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="ti-btn-list"&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle !py-2"
            type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Primary&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul
            class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu !bg-primary hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                    href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                    href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                    href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !py-2"
            type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            secondary&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul
            class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu !bg-secondary hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                    href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                    href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                    href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-warning-full ti-dropdown-toggle !py-2"
            type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            warning&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-item-warning hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-info-full ti-dropdown-toggle !py-2" type="button"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            info&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-item-info hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-success ti-dropdown-toggle !py-2" type="button"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            success&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-light-success hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-danger ti-dropdown-toggle !py-2" type="button"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            danger&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-light-danger hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
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
                                        Ghost Button Dropdowns
                                    </div>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list flex flex-wrap gap-2">
                                        <div class="ti-dropdown hs-dropdown">
                                            <button type="button"
                                                class="ti-btn !shadow-none ti-btn-ghost-primary ti-btn-wave  !py-2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Primary<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button type="button"
                                                class="ti-btn !shadow-none ti-btn-ghost-secondary ti-btn-wave  !py-2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Secondary<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button type="button"
                                                class="ti-btn !shadow-none ti-btn-ghost-success ti-btn-wave  !py-2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Success<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button type="button" class="ti-btn !shadow-none ti-btn-ghost-info ti-btn-wave  !py-2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Info<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button type="button"
                                                class="ti-btn !shadow-none ti-btn-ghost-warning ti-btn-wave  !py-2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Warning<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                        <div class="ti-dropdown hs-dropdown">
                                            <button type="button"
                                                class="ti-btn !shadow-none ti-btn-ghost-danger ti-btn-wave  !py-2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Danger<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                        link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button type="button"
            class="ti-btn ti-btn-ghost-primary ti-dropdown-toggle !py-2"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Primary&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                    link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button type="button"
            class="ti-btn ti-btn-ghost-secondary ti-dropdown-toggle !py-2"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Secondary&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                    link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button type="button"
            class="ti-btn ti-btn-ghost-success ti-dropdown-toggle !py-2"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Success&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                    link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-info ti-dropdown-toggle !py-2"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Info&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                    link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button type="button"
            class="ti-btn ti-btn-ghost-warning ti-dropdown-toggle !py-2"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Warning&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                    link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ti-dropdown hs-dropdown"&gt;
        &lt;button type="button"
            class="ti-btn ti-btn-ghost-danger ti-dropdown-toggle !py-2"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Danger&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                    link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-8 -->    

                    <!-- Start:: row-9 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        non-interactive dropdown items
                                    </div>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class=" mb-3">Use <code>.ti-dropdown-item-text.</code> to create non-interactive
                                        dropdown items.</p>
                                    <div class="bd-example rounded-sm">
                                        <ul class="dropdown-menu  border rounded-md dark:border-defaultborder/10 shadow-sm">
                                            <li><span class="ti-dropdown-item">Dropdown item text</span>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;p class=" mb-3">Use &lt;code>.ti-dropdown-item-text.&lt;/code> to create non-interactive
        dropdown items.&lt;/p&gt;
    &lt;div class="bd-example"&gt;
        &lt;ul class="dropdown-menu border dark:border-defaultborder/10 shadow-sm"&gt;
            &lt;li&gt;&lt;span class="!py-2 !px-4 !text-[0.875rem]"&gt;Dropdown item text&lt;/span&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                    here&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Dropdown Headers
                                    </div>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="card-titlte mb-3">Add a <code>.dropdown-header</code> to label sections of
                                        actions in any dropdown menu.</p>
                                    <div class="bd-example">
                                        <ul class="dropdown-menu border rounded-md dark:border-defaultborder/10 shadow-sm">
                                            <li>
                                                <h6 class="ti-dropdown-item">Dropdown header</h6>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;p class="card-titlte mb-3">Add a &lt;code>.dropdown-header&lt;/code> to label sections of
    actions in any dropdown menu.&lt;/p>
    &lt;div class="bd-example">
    &lt;ul class="dropdown-menu border dark:border-defaultborder/10 shadow-sm">
        &lt;li>
            &lt;h6 class="dropdown-header">Dropdown header&lt;/h6>
        &lt;/li>
        &lt;li>&lt;a class="ti-dropdown-item" href="javascript:void(0);">Action&lt;/a>&lt;/li>
        &lt;li>&lt;a class="ti-dropdown-item" href="javascript:void(0);">Another action&lt;/a>
        &lt;/li>
        &lt;li>&lt;a class="ti-dropdown-item" href="javascript:void(0);">Something else
                here&lt;/a>&lt;/li>
    &lt;/ul>
    &lt;/div></code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Dropdown Dividers
                                    </div>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example">
                                        <ul class="dropdown-menu border  rounded-md dark:border-defaultborder/10 shadow-sm">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Heading</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;ul class="dropdown-menu border dark:border-defaultborder/10 shadow-sm"&gt;
        &lt;li&gt;&lt;a class="dropdown-header" href="javascript:void(0);"&gt;Heading&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Dropdown Menu Text
                                    </div>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example">
                                        <div class="dropdown-menu border dark:border-defaultborder/10 shadow-sm p-6 text-[#8c9097] text-[0.875rem]"
                                            style="max-width: 200px;">
                                            <p>
                                                Some example text that's free-flowing within the dropdown menu.
                                            </p>
                                            <p class="mb-0">
                                                And this is more example text.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;div class="dropdown-menu border dark:border-defaultborder/10 shadow-sm p-6 text-[#8c9097] text-[0.875rem]"
        style="max-width: 200px;"&gt;
        &lt;p&gt;
            Some example text that's free-flowing within the dropdown menu.
        &lt;/p&gt;
        &lt;p class="mb-0"&gt;
            And this is more example text.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-9 -->

                    <!-- Start::row-10 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-6 xl:!col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Dropdown Dividers</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button id="hs-dropdown-with-dividers" type="button"
                                        class="ti-btn ti-btn-primary-full ">
                                        Actions
                                        <i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>

                                        <div class="hs-dropdown-menu hidden ti-dropdown-menu divide-y divide-gray-200"
                                            aria-labelledby="hs-dropdown-with-dividers">
                                            <div class="ti-dropdown-divider">
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Newsletter
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Purchases
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Downloads
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Team Account
                                                </a>
                                            </div>
                                            <div class="ti-dropdown-divider">
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Upgrade License
                                                </a>
                                            </div>
                                            <div class="ti-dropdown-divider">
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Account Settings
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button id="hs-dropdown-with-dividers" type="button"
            class="ti-btn ti-btn-primary-full ti-dropdown-toggle"&gt;
            Actions
            &lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu hidden ti-dropdown-menu divide-y divide-gray-200"
                aria-labelledby="hs-dropdown-with-dividers"&gt;
                &lt;div class="ti-dropdown-divider"&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Newsletter
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Purchases
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Downloads
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Team Account
                    &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="ti-dropdown-divider"&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Upgrade License
                    &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="ti-dropdown-divider"&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Account Settings
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Sign out
                    &lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:!col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Dropdown With Icons</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button id="hs-dropdown-with-icons" type="button"
                                        class="ti-btn ti-btn-primary-full">
                                        Actions
                                        <i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu divide-y divide-gray-200"
                                            aria-labelledby="hs-dropdown-with-icons">
                                            <div class="ti-dropdown-divider">
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z">
                                                        </path>
                                                    </svg>
                                                    Newsletter
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z">
                                                        </path>
                                                        <path
                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z">
                                                        </path>
                                                    </svg>
                                                    Purchases
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z">
                                                        </path>
                                                        <path
                                                            d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z">
                                                        </path>
                                                    </svg>
                                                    Downloads
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                                                        </path>
                                                    </svg>
                                                    Team Account
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button id="hs-dropdown-with-icons" type="button"
            class="ti-btn ti-btn-primary-full ti-dropdown-toggle"&gt;
            Actions
            &lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu ti-dropdown-menu divide-y divide-gray-200"
                aria-labelledby="hs-dropdown-with-icons"&gt;
                &lt;div class="ti-dropdown-divider"&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"&gt;
                            &lt;/path&gt;
                        &lt;/svg&gt;
                        Newsletter
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"&gt;
                            &lt;/path&gt;
                            &lt;path
                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"&gt;
                            &lt;/path&gt;
                        &lt;/svg&gt;
                        Purchases
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path fill-rule="evenodd"
                                d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z"&gt;
                            &lt;/path&gt;
                            &lt;path
                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"&gt;
                            &lt;/path&gt;
                        &lt;/svg&gt;
                        Downloads
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"&gt;
                            &lt;/path&gt;
                        &lt;/svg&gt;
                        Team Account
                    &lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:!col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Dropdown With Title</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button id="hs-dropdown-with-title" type="button"
                                        class="ti-btn ti-btn-primary-full">
                                        Actions
                                        <i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu divide-y divide-gray-200"
                                            aria-labelledby="hs-dropdown-with-title">
                                            <div class="ti-dropdown-divider">
                                                <span class="ti-dropdown-title !text-defaulttextcolor dark:!text-defaulttextcolor/70">
                                                    Settings
                                                </span>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                                    </svg>
                                                    Newsletter
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                        <path
                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                    </svg>
                                                    Purchases
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" />
                                                        <path
                                                            d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                                    </svg>
                                                    Downloads
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                                    </svg>
                                                    Team Account
                                                </a>
                                            </div>
                                            <div class="ti-dropdown-divider">
                                                <span class="ti-dropdown-title !text-defaulttextcolor dark:!text-defaulttextcolor/70">
                                                    Contacts
                                                </span>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                        <path
                                                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                                    </svg>
                                                    Contact support
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button id="hs-dropdown-with-title" type="button"
            class="ti-btn ti-btn-primary-full ti-dropdown-toggle"&gt;
            Actions
            &lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu ti-dropdown-menu divide-y divide-gray-200"
                aria-labelledby="hs-dropdown-with-title"&gt;
                &lt;div class="ti-dropdown-divider"&gt;
                    &lt;span class="ti-dropdown-title"&gt;
                        Settings
                    &lt;/span&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" /&gt;
                        &lt;/svg&gt;
                        Newsletter
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" /&gt;
                            &lt;path
                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" /&gt;
                        &lt;/svg&gt;
                        Purchases
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path fill-rule="evenodd"
                                d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" /&gt;
                            &lt;path
                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" /&gt;
                        &lt;/svg&gt;
                        Downloads
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" /&gt;
                        &lt;/svg&gt;
                        Team Account
                    &lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="ti-dropdown-divider"&gt;
                    &lt;span class="ti-dropdown-title"&gt;
                        Contacts
                    &lt;/span&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" /&gt;
                            &lt;path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" /&gt;
                        &lt;/svg&gt;
                        Contact support
                    &lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                                                                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:!col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Dropdown With Header</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button id="hs-dropdown-with-header" type="button"
                                        class="ti-btn ti-btn-primary-full ">
                                        Actions
                                        <i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu"
                                            aria-labelledby="hs-dropdown-with-header">
                                            <div class="ti-dropdown-header !m-0">
                                                <p class="ti-dropdown-header-title">Signed in as</p>
                                                <p class="ti-dropdown-header-content">james@site.com</p>
                                            </div>
                                            <div class="mt-2 ti-dropdown-divider">
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                                    </svg>
                                                    Newsletter
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                        <path
                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                    </svg>
                                                    Purchases
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" />
                                                        <path
                                                            d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                                    </svg>
                                                    Downloads
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="currentColor">
                                                        <path
                                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                                    </svg>
                                                    Team Account
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button id="hs-dropdown-with-header" type="button"
            class="ti-btn ti-btn-primary-full ti-dropdown-toggle"&gt;
            Actions
            &lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu ti-dropdown-menu"
                aria-labelledby="hs-dropdown-with-header"&gt;
                &lt;div class="ti-dropdown-header"&gt;
                    &lt;p class="ti-dropdown-header-title"&gt;Signed in as&lt;/p&gt;
                    &lt;p class="ti-dropdown-header-content"&gt;james@site.com&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="mt-2 ti-dropdown-divider"&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" /&gt;
                        &lt;/svg&gt;
                        Newsletter
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" /&gt;
                            &lt;path
                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" /&gt;
                        &lt;/svg&gt;
                        Purchases
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path fill-rule="evenodd"
                                d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" /&gt;
                            &lt;path
                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" /&gt;
                        &lt;/svg&gt;
                        Downloads
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                            fill="currentColor"&gt;
                            &lt;path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" /&gt;
                        &lt;/svg&gt;
                        Team Account
                    &lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                                                                                                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:!col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Custom Trigger Dropdown</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button aria-label="button" id="hs-dropdown-default16" type="button"
                                            class="hs-dropdown-toggle ti-btn p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] ti-btn-primary-full">
                                            <svg class="fill-white ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu"
                                            aria-labelledby="hs-dropdown-custom-trigger">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Newsletter
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Purchases
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Downloads
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Team Account
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button aria-label="button" id="hs-dropdown-default16" type="button"
                class="hs-dropdown-toggle ti-btn p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] ti-btn-primary-full"&gt;
                &lt;svg class="fill-white ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"&gt;
                    &lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu ti-dropdown-menu"
                aria-labelledby="hs-dropdown-custom-trigger"&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Newsletter
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Purchases
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Downloads
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Team Account
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:!col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Custom Trigger Dropdown</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger" type="button"
                                            class="ti-btn ti-btn-primary-full  hs-dropdown-toggle p-3 !py-3">
                                            <svg class="ti-dropdown-icon !text-white" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu"
                                            aria-labelledby="hs-dropdown-custom-trigger">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Newsletter
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Purchases
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Downloads
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Team Account
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button aria-label="button" id="hs-dropdown-custom-icon-trigger" type="button"
                class="ti-btn ti-btn-primary-full ti-dropdown-toggle hs-dropdown-toggle p-3 !py-3"&gt;
                &lt;svg class="ti-dropdown-icon !text-white" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"&gt;
                    &lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu ti-dropdown-menu"
                aria-labelledby="hs-dropdown-custom-trigger"&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Newsletter
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Purchases
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Downloads
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Team Account
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:!col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Dropdown With Slide Up Animation</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button id="hs-dropdown-slideup-animation" type="button"
                                        class="ti-btn ti-btn-primary-full">
                                        Actions
                                        <i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>

                                        <div class="hs-dropdown-menu w-72 duration-300 ti-dropdown-menu"
                                            aria-labelledby="hs-dropdown-slideup-animation">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Newsletter
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Purchases
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Downloads
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Team Account
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button id="hs-dropdown-slideup-animation" type="button"
            class="ti-btn ti-btn-primary-full ti-dropdown-toggle"&gt;
            Actions
            &lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu w-72 duration-300 ti-dropdown-menu"
                aria-labelledby="hs-dropdown-slideup-animation"&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Newsletter
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Purchases
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Downloads
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Team Account
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:!col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Dropdown With Transform Style</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button id="hs-dropdown-transform-style" type="button"
                                        class="ti-btn ti-btn-primary-full">
                                        Actions
                                        <i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>

                                        <div class="hs-dropdown-menu w-72 hidden z-10">
                                            <div class="hs-dropdown-open:ease-in hs-dropdown-open:opacity-100 hs-dropdown-open:scale-100 transition ease-out scale-95 duration-200 origin-top-left ti-dropdown-menu block"
                                                aria-labelledby="hs-dropdown-transform-style" data-hs-transition>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Newsletter
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Purchases
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Downloads
                                                </a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);">
                                                    Team Account
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button id="hs-dropdown-transform-style" type="button"
            class="ti-btn ti-btn-primary-full ti-dropdown-toggle"&gt;
            Actions
            &lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu w-72 hidden z-10"&gt;
                &lt;div class="hs-dropdown-open:ease-in hs-dropdown-open:opacity-100 hs-dropdown-open:scale-100 transition ease-out scale-95 duration-200 origin-top-left ti-dropdown-menu block"
                    aria-labelledby="hs-dropdown-transform-style" data-hs-transition&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Newsletter
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Purchases
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Downloads
                    &lt;/a&gt;
                    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                        Team Account
                    &lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:!col-span-3">
                            <div class="box">   
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Dropdown Item Checkbox</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown" data-hs-dropdown-auto-close="inside">
                                        <button id="hs-dropdown-item-checkbox1" type="button" class="ti-btn ti-btn-primary-full hs-dropdown-toggle ">
                                            Actions
                                            <svg  class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-item-checkbox1" >
                                            <div class="relative flex items-start py-2 px-3 rounded-sm hover:bg-gray-100 dark:hover:bg-black/20">
                                                <div class="flex items-center h-5">
                                                    <input id="hs-dropdown-item-checkbox-delete" name="hs-dropdown-item-checkbox-delete" type="checkbox" class="form-check-input" aria-describedby="hs-dropdown-item-checkbox-delete-description" checked="">
                                                </div>
                                                <label for="hs-dropdown-item-checkbox-delete" class="ms-3.5">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-white me-1">Delete</span>
                                                    <span id="hs-dropdown-item-checkbox-delete-description" class="block text-sm text-gray-600 dark:text-white/70">Notify me
                                                        when this action happens.</span>
                                                </label>
                                            </div>
                                            <div class="relative flex items-start py-2 px-3 rounded-sm hover:bg-gray-100 dark:hover:bg-black/20">
                                                <div class="flex items-center h-5">
                                                    <input id="hs-dropdown-item-checkbox-archive1" name="hs-dropdown-item-checkbox-archive1" type="checkbox" class="form-check-input" aria-describedby="hs-dropdown-item-checkbox-archive-description">
                                                </div>
                                                <label for="hs-dropdown-item-checkbox-archive1" class="ms-3.5">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-white me-1">Archive</span>
                                                    <span id="hs-dropdown-item-checkbox-archive-description" class="block text-sm text-gray-600 dark:text-white/70">Notify me
                                                        when this action happens.</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown" data-hs-dropdown-auto-close="inside"&gt;
            &lt;button id="hs-dropdown-item-checkbox1" type="button" class="ti-btn ti-btn-primary-full hs-dropdown-toggle ti-dropdown-toggle"&gt;
                Actions
                &lt;svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-item-checkbox1" &gt;
                &lt;div class="relative flex items-start py-2 px-3 rounded-sm hover:bg-gray-100 dark:hover:bg-black/20"&gt;
                    &lt;div class="flex items-center h-5 mt-1"&gt;
                        &lt;input id="hs-dropdown-item-checkbox-delete" name="hs-dropdown-item-checkbox-delete" type="checkbox" class="form-check-input" aria-describedby="hs-dropdown-item-checkbox-delete-description" checked=""&gt;
                    &lt;/div&gt;
                    &lt;label for="hs-dropdown-item-checkbox-delete" class="ms-3.5"&gt;
                        &lt;span class="block text-sm font-semibold text-gray-800 dark:text-white"&gt;Delete&lt;/span&gt;
                        &lt;span id="hs-dropdown-item-checkbox-delete-description" class="block text-sm text-gray-600 dark:text-white/70"&gt;Notify me
                            when this action happens.&lt;/span&gt;
                    &lt;/label&gt;
                &lt;/div&gt;
                &lt;div class="relative flex items-start py-2 px-3 rounded-sm hover:bg-gray-100 dark:hover:bg-black/20"&gt;
                    &lt;div class="flex items-center h-5 mt-1"&gt;
                        &lt;input id="hs-dropdown-item-checkbox-archive1" name="hs-dropdown-item-checkbox-archive1" type="checkbox" class="form-check-input" aria-describedby="hs-dropdown-item-checkbox-archive-description"&gt;
                    &lt;/div&gt;
                    &lt;label for="hs-dropdown-item-checkbox-archive1" class="ms-3.5"&gt;
                        &lt;span class="block text-sm font-semibold text-gray-800 dark:text-white"&gt;Archive&lt;/span&gt;
                        &lt;span id="hs-dropdown-item-checkbox-archive-description" class="block text-sm text-gray-600 dark:text-white/70"&gt;Notify me
                            when this action happens.&lt;/span&gt;
                    &lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                        <div class="col-span-12 lg:col-span-6  xl:!col-span-3">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Dropdown Item Radio</h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown" data-hs-dropdown-auto-close="inside">
                                        <button id="hs-dropdown-item-checkbox2" type="button" class="ti-btn ti-btn-primary-full hs-dropdown-toggle ">
                                            Actions
                                            <svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-item-checkbox2" >
                                            <div class="relative flex items-start py-2 px-3 rounded-sm hover:bg-gray-100 dark:hover:bg-black/20">
                                                <div class="flex items-center h-5">
                                                    <input id="hs-dropdown-item-radio-delete" name="hs-dropdown-item-radio" type="radio" class="form-check-input" aria-describedby="hs-dropdown-item-radio-delete-description" checked="">
                                                </div>
                                                <label for="hs-dropdown-item-radio-delete" class="ms-3.5">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-white me-1">Delete</span>
                                                    <span id="hs-dropdown-item-radio-delete-description" class="block text-sm text-gray-600 dark:text-white/70">Notify me
                                                        when this action happens.</span>
                                                </label>
                                            </div>
                                            <div class="relative flex items-start py-2 px-3 rounded-sm hover:bg-gray-100 dark:hover:bg-black/20">
                                                <div class="flex items-center h-5">
                                                    <input id="hs-dropdown-item-radio-archive" name="hs-dropdown-item-radio" type="radio" class="form-check-input" aria-describedby="hs-dropdown-item-radio-archive-description">
                                                </div>
                                                <label for="hs-dropdown-item-radio-archive" class="ms-3.5">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-white me-1">Archive</span>
                                                    <span id="hs-dropdown-item-radio-archive-description" class="block text-sm text-gray-600 dark:text-white/70">Notify me
                                                        when this action happens.</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown" data-hs-dropdown-auto-close="inside"&gt;
            &lt;button id="hs-dropdown-item-checkbox2" type="button" class="ti-btn ti-btn-primary-full hs-dropdown-toggle ti-dropdown-toggle"&gt;
                Actions
                &lt;svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;

            &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-item-checkbox2" &gt;
                &lt;div class="relative flex items-start py-2 px-3 rounded-sm hover:bg-gray-100 dark:hover:bg-black/20"&gt;
                    &lt;div class="flex items-center h-5 mt-1"&gt;
                        &lt;input id="hs-dropdown-item-radio-delete" name="hs-dropdown-item-radio" type="radio" class="form-check-input" aria-describedby="hs-dropdown-item-radio-delete-description" checked=""&gt;
                    &lt;/div&gt;
                    &lt;label for="hs-dropdown-item-radio-delete" class="ms-3.5"&gt;
                        &lt;span class="block text-sm font-semibold text-gray-800 dark:text-white"&gt;Delete&lt;/span&gt;
                        &lt;span id="hs-dropdown-item-radio-delete-description" class="block text-sm text-gray-600 dark:text-white/70"&gt;Notify me
                            when this action happens.&lt;/span&gt;
                    &lt;/label&gt;
                &lt;/div&gt;
                &lt;div class="relative flex items-start py-2 px-3 rounded-sm hover:bg-gray-100 dark:hover:bg-black/20"&gt;
                    &lt;div class="flex items-center h-5 mt-1"&gt;
                        &lt;input id="hs-dropdown-item-radio-archive" name="hs-dropdown-item-radio" type="radio" class="form-check-input" aria-describedby="hs-dropdown-item-radio-archive-description"&gt;
                    &lt;/div&gt;
                    &lt;label for="hs-dropdown-item-radio-archive" class="ms-3.5"&gt;
                        &lt;span class="block text-sm font-semibold text-gray-800 dark:text-white"&gt;Archive&lt;/span&gt;
                        &lt;span id="hs-dropdown-item-radio-archive-description" class="block text-sm text-gray-600 dark:text-white/70"&gt;Notify me
                            when this action happens.&lt;/span&gt;
                    &lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div> 

                        <div class="col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Dropdowns With Icon Sizes </h5>
                                    <div class="prism-toggle">
                                        <button
                                            class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button aria-label="button" id="hs-dropdown-default16" type="button"
                                            class="hs-dropdown-toggle ti-btn p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] ti-btn-primary-full">
                                            <svg class="fill-white ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu"
                                            aria-labelledby="hs-dropdown-default16">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Newsletter
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Purchases
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Downloads
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Team Account
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                        <button aria-label="button" id="hs-dropdown-default17" type="button"
                                            class="hs-dropdown-toggle ti-btn p-0 flex-shrink-0 h-[2.875rem] w-[2.875rem] ti-btn-primary-full">
                                            <svg class="fill-white ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu"
                                            aria-labelledby="hs-dropdown-default17">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Newsletter
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Purchases
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Downloads
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Team Account
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                        <button aria-label="button" id="hs-dropdown-default18" type="button"
                                            class="hs-dropdown-toggle ti-btn p-0 flex-shrink-0 h-[3.875rem] w-[3.875rem] ti-btn-primary-full">
                                            <svg class="fill-white ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu"
                                            aria-labelledby="hs-dropdown-default18">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Newsletter
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Purchases
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Downloads
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Team Account
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button aria-label="button" id="hs-dropdown-default16" type="button"
                class="hs-dropdown-toggle ti-btn p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] ti-btn-primary-full"&gt;
                &lt;svg class="fill-white ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"&gt;
                    &lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu"
                aria-labelledby="hs-dropdown-default16"&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Newsletter
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Purchases
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Downloads
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Team Account
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button aria-label="button" id="hs-dropdown-default17" type="button"
                class="hs-dropdown-toggle ti-btn p-0 flex-shrink-0 h-[2.875rem] w-[2.875rem] ti-btn-primary-full"&gt;
                &lt;svg class="fill-white ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"&gt;
                    &lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu"
                aria-labelledby="hs-dropdown-default17"&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Newsletter
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Purchases
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Downloads
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Team Account
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button aria-label="button" id="hs-dropdown-default18" type="button"
                class="hs-dropdown-toggle ti-btn p-0 flex-shrink-0 h-[3.875rem] w-[3.875rem] ti-btn-primary-full"&gt;
                &lt;svg class="fill-white ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"&gt;
                    &lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;div class="hs-dropdown-menu ti-dropdown-menu"
                aria-labelledby="hs-dropdown-default18"&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Newsletter
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Purchases
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Downloads
                &lt;/a&gt;
                &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
                    Team Account
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-10 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
