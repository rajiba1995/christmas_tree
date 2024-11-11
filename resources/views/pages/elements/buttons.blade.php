
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Buttons</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Buttons 
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

                    <!--ROW-START-->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Default Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="ti-btn ti-btn-primary-full ti-btn-wave  me-[0.375rem]">Primary</button>
                                        <button type="button" class="ti-btn ti-btn-secondary-full ti-btn-wave  me-[0.375rem]">Secondary</button>
                                        <button type="button" class="ti-btn ti-btn-success-full ti-btn-wave  me-[0.375rem]">Success</button>
                                        <button type="button" class="ti-btn ti-btn-danger-full ti-btn-wave  me-[0.375rem]">Danger</button>
                                        <button type="button" class="ti-btn ti-btn-warning-full ti-btn-wave  me-[0.375rem]">Warning</button>
                                        <button type="button" class="ti-btn ti-btn-info-full ti-btn-wave  me-[0.375rem]">Info</button>
                                        <button type="button" class="ti-btn ti-btn-light ti-btn-wave  me-[0.375rem]">Light</button>
                                        <button type="button" class="ti-btn ti-btn-dark ti-btn-wave  me-[0.375rem] text-white">Dark</button>
                                        <button type="button" class="ti-btn ti-btn-link ti-btn-wave  me-[0.375rem]">Link</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary ti-btn-wave  me-[0.375rem]"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary ti-btn-wave  me-[0.375rem]"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success ti-btn-wave  me-[0.375rem]"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger ti-btn-wave  me-[0.375rem]"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning ti-btn-wave  me-[0.375rem]"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info ti-btn-wave  me-[0.375rem]"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn ti-btn-wave  me-[0.375rem]"&gt;Light&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-dark ti-btn-wave  me-[0.375rem] text-white"&gt;Dark&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-link ti-btn-wave  me-[0.375rem]"&gt;Link&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Rounded Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="ti-btn ti-btn-primary-full !rounded-full ti-btn-wave  me-[0.375rem]">Primary</button>
                                        <button type="button" class="ti-btn ti-btn-secondary-full !rounded-full ti-btn-wave  me-[0.375rem]">Secondary</button>
                                        <button type="button" class="ti-btn ti-btn-success-full !rounded-full ti-btn-wave  me-[0.375rem]">Success</button>
                                        <button type="button" class="ti-btn ti-btn-danger-full !rounded-full ti-btn-wave  me-[0.375rem]">Danger</button>
                                        <button type="button" class="ti-btn ti-btn-warning-full !rounded-full ti-btn-wave  me-[0.375rem]">Warning</button>
                                        <button type="button" class="ti-btn ti-btn-info-full !rounded-full ti-btn-wave  me-[0.375rem]">Info</button>
                                        <button type="button" class="ti-btn ti-btn-light !rounded-full ti-btn-wave  me-[0.375rem]">Light</button>
                                        <button type="button" class="ti-btn ti-btn-dark !rounded-full ti-btn-wave  me-[0.375rem] text-white">Dark</button>
                                        <button type="button" class="ti-btn ti-btn-link !rounded-full ti-btn-wave  me-[0.375rem]">Link</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary-full !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary-full !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success-full !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger-full !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning-full !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info-full !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-light !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Light&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-dark !rounded-full ti-btn-wave  me-[0.375rem] text-white"&gt;Dark&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-link !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Link&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Light Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="ti-btn ti-btn-primary ti-btn-wave  me-[0.375rem]">Primary</button>
                                        <button type="button" class="ti-btn ti-btn-secondary ti-btn-wave  me-[0.375rem]">Secondary</button>
                                        <button type="button" class="ti-btn ti-btn-success ti-btn-wave  me-[0.375rem]">Success</button>
                                        <button type="button" class="ti-btn ti-btn-danger ti-btn-wave  me-[0.375rem]">Danger</button>
                                        <button type="button" class="ti-btn ti-btn-warning ti-btn-wave  me-[0.375rem]">Warning</button>
                                        <button type="button" class="ti-btn ti-btn-info ti-btn-wave  me-[0.375rem]">Info</button>
                                        <button type="button" class="ti-btn ti-btn-purple ti-btn-wave  me-[0.375rem]">purple</button>
                                        <button type="button" class="ti-btn ti-btn-teal ti-btn-wave  me-[0.375rem]">teal</button>
                                        <button type="button" class="ti-btn ti-btn-orange ti-btn-wave  me-[0.375rem]">orange</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary ti-btn-wave  me-[0.375rem]"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary ti-btn-wave  me-[0.375rem]"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success ti-btn-wave  me-[0.375rem]"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger ti-btn-wave  me-[0.375rem]"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning ti-btn-wave  me-[0.375rem]"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info ti-btn-wave  me-[0.375rem]"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-purple ti-btn-wave  me-[0.375rem]"&gt;purple&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-teal ti-btn-wave  me-[0.375rem]"&gt;teal&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-orange ti-btn-wave  me-[0.375rem]"&gt;orange&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Light Rounded Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="ti-btn ti-btn-primary !rounded-full ti-btn-wave  me-[0.375rem]">Primary</button>
                                        <button type="button" class="ti-btn ti-btn-secondary !rounded-full ti-btn-wave  me-[0.375rem]">Secondary</button>
                                        <button type="button" class="ti-btn ti-btn-success !rounded-full ti-btn-wave  me-[0.375rem]">Success</button>
                                        <button type="button" class="ti-btn ti-btn-danger !rounded-full ti-btn-wave  me-[0.375rem]">Danger</button>
                                        <button type="button" class="ti-btn ti-btn-warning !rounded-full ti-btn-wave  me-[0.375rem]">Warning</button>
                                        <button type="button" class="ti-btn ti-btn-info !rounded-full ti-btn-wave  me-[0.375rem]">Info</button>
                                        <button type="button" class="ti-btn ti-btn-purple !rounded-full ti-btn-wave  me-[0.375rem]">purple</button>
                                        <button type="button" class="ti-btn ti-btn-teal !rounded-full ti-btn-wave  me-[0.375rem]">teal</button>
                                        <button type="button" class="ti-btn ti-btn-orange !rounded-full ti-btn-wave  me-[0.375rem]">orange</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-purple !rounded-full ti-btn-wave  me-[0.375rem]"&gt;purple&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-teal !rounded-full ti-btn-wave  me-[0.375rem]"&gt;teal&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-orange !rounded-full ti-btn-wave  me-[0.375rem]"&gt;orange&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Outline Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="ti-btn ti-btn-outline-primary ti-btn-wave  me-[0.375rem]">Primary</button>
                                        <button type="button" class="ti-btn ti-btn-outline-secondary ti-btn-wave  me-[0.375rem]">Secondary</button>
                                        <button type="button" class="ti-btn ti-btn-outline-success ti-btn-wave  me-[0.375rem]">Success</button>
                                        <button type="button" class="ti-btn ti-btn-outline-danger ti-btn-wave  me-[0.375rem]">Danger</button>
                                        <button type="button" class="ti-btn ti-btn-outline-warning ti-btn-wave  me-[0.375rem]">Warning</button>
                                        <button type="button" class="ti-btn ti-btn-outline-info ti-btn-wave  me-[0.375rem]">Info</button>
                                        <button type="button" class="ti-btn ti-btn-outline-light ti-btn-wave dark:hover:!text-black  me-[0.375rem]">Light</button>
                                        <button type="button" class="ti-btn ti-btn-outline-dark ti-btn-wave  me-[0.375rem]">Dark</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-primary ti-btn-wave  me-[0.375rem]"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-secondary ti-btn-wave  me-[0.375rem]"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-success ti-btn-wave  me-[0.375rem]"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-danger ti-btn-wave  me-[0.375rem]"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-warning ti-btn-wave  me-[0.375rem]"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-info ti-btn-wave  me-[0.375rem]"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline ti-btn-wave  me-[0.375rem]"&gt;Light&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-dark ti-btn-wave  me-[0.375rem]"&gt;Dark&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Rounded Outline Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="ti-btn ti-btn-outline-primary !rounded-full ti-btn-wave  me-[0.375rem]">Primary</button>
                                        <button type="button" class="ti-btn ti-btn-outline-secondary !rounded-full ti-btn-wave  me-[0.375rem]">Secondary</button>
                                        <button type="button" class="ti-btn ti-btn-outline-success !rounded-full ti-btn-wave  me-[0.375rem]">Success</button>
                                        <button type="button" class="ti-btn ti-btn-outline-danger !rounded-full ti-btn-wave  me-[0.375rem]">Danger</button>
                                        <button type="button" class="ti-btn ti-btn-outline-warning !rounded-full ti-btn-wave  me-[0.375rem]">Warning</button>
                                        <button type="button" class="ti-btn ti-btn-outline-info !rounded-full ti-btn-wave  me-[0.375rem]">Info</button>
                                        <button type="button" class="ti-btn ti-btn-outline-light !rounded-full ti-btn-wave dark:hover:!text-black   me-[0.375rem]">Light</button>
                                        <button type="button" class="ti-btn ti-btn-outline-dark !rounded-full ti-btn-wave  me-[0.375rem]">Dark</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-primary !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-secondary !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-success !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-danger !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-warning !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-info !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Light&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-outline-dark !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Dark&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Gradient Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="py-1 px-3 inline-flex items-center gap-x-2 text-sm rounded-sm ti-btn-primary-gradient text-white me-[0.375rem] !mb-2">Primary</button>
                                        <button type="button" class="py-1 px-3 inline-flex items-center gap-x-2 text-sm rounded-sm ti-btn-secondary-gradient text-white me-[0.375rem] !mb-2">Secondary</button>
                                        <button type="button" class="py-1 px-3 inline-flex items-center gap-x-2 text-sm rounded-sm ti-btn-success-gradient text-white me-[0.375rem] !mb-2">Success</button>
                                        <button type="button" class="py-1 px-3 inline-flex items-center gap-x-2 text-sm rounded-sm ti-btn-danger-gradient text-white me-[0.375rem] !mb-2">Danger</button>
                                        <button type="button" class="py-1 px-3 inline-flex items-center gap-x-2 text-sm rounded-sm ti-btn-warning-gradient text-white me-[0.375rem] !mb-2">Warning</button>
                                        <button type="button" class="py-1 px-3 inline-flex items-center gap-x-2 text-sm rounded-sm ti-btn-info-gradient text-white me-[0.375rem] !mb-2">Info</button>
                                        <button type="button" class="py-1 px-3 inline-flex items-center gap-x-2 text-sm rounded-sm ti-btn-orange-gradient text-white me-[0.375rem] !mb-2">Orange</button>
                                        <button type="button" class="py-1 px-3 inline-flex items-center gap-x-2 text-sm rounded-sm ti-btn-purple-gradient text-white me-[0.375rem] !mb-2">Purple</button>
                                        <button type="button" class="py-1 px-3 inline-flex items-center gap-x-2 text-sm rounded-sm ti-btn-teal-gradient text-white me-[0.375rem] !mb-2">Teal</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary-gradient ti-btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary-gradient ti-btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success-gradient ti-btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger-gradient ti-btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning-gradient ti-btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info-gradient ti-btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-orange-gradient ti-btn-wave"&gt;Orange&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-purple-gradient ti-btn-wave"&gt;Purple&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-teal-gradient ti-btn-wave"&gt;Teal&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Rounded Gradient Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="py-1 px-3  inline-flex items-center gap-x-2 text-sm rounded-full ti-btn-primary-gradient text-white  me-[0.375rem] !mb-2">Primary</button>
                                        <button type="button" class="py-1 px-3  inline-flex items-center gap-x-2 text-sm rounded-full ti-btn-secondary-gradient text-white  me-[0.375rem] !mb-2">Secondary</button>
                                        <button type="button" class="py-1 px-3  inline-flex items-center gap-x-2 text-sm rounded-full ti-btn-success-gradient text-white  me-[0.375rem] !mb-2">Success</button>
                                        <button type="button" class="py-1 px-3  inline-flex items-center gap-x-2 text-sm rounded-full ti-btn-danger-gradient text-white  me-[0.375rem] !mb-2">Danger</button>
                                        <button type="button" class="py-1 px-3  inline-flex items-center gap-x-2 text-sm rounded-full ti-btn-warning-gradient text-white  me-[0.375rem] !mb-2">Warning</button>
                                        <button type="button" class="py-1 px-3  inline-flex items-center gap-x-2 text-sm rounded-full ti-btn-info-gradient text-white  me-[0.375rem] !mb-2">Info</button>
                                        <button type="button" class="py-1 px-3  inline-flex items-center gap-x-2 text-sm rounded-full ti-btn-orange-gradient text-white  me-[0.375rem] !mb-2">Orange</button>
                                        <button type="button" class="py-1 px-3  inline-flex items-center gap-x-2 text-sm rounded-full ti-btn-purple-gradient text-white  me-[0.375rem] !mb-2">Purple</button>
                                        <button type="button" class="py-1 px-3  inline-flex items-center gap-x-2 text-sm rounded-full ti-btn-teal-gradient text-white  me-[0.375rem] !mb-2">Teal</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary-gradient !rounded-full ti-btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary-gradient !rounded-full ti-btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success-gradient !rounded-full ti-btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger-gradient !rounded-full ti-btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning-gradient !rounded-full ti-btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info-gradient !rounded-full ti-btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-orange-gradient !rounded-full ti-btn-wave"&gt;Orange&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-purple-gradient !rounded-full ti-btn-wave"&gt;Purple&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-teal-gradient !rounded-full ti-btn-wave"&gt;Teal&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Ghost Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="ti-btn ti-btn-ghost-primary ti-btn-wave  me-[0.375rem]">Primary</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-secondary ti-btn-wave  me-[0.375rem]">Secondary</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-success ti-btn-wave  me-[0.375rem]">Success</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-danger ti-btn-wave  me-[0.375rem]">Danger</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-warning ti-btn-wave  me-[0.375rem]">Warning</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-info ti-btn-wave  me-[0.375rem]">Info</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-orange ti-btn-wave  me-[0.375rem]">Orange</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-purple ti-btn-wave  me-[0.375rem]">Purple</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-teal ti-btn-wave  me-[0.375rem]">Teal</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-primary ti-btn-wave  me-[0.375rem]"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-secondary ti-btn-wave  me-[0.375rem]"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-success ti-btn-wave  me-[0.375rem]"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-danger ti-btn-wave  me-[0.375rem]"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-warning ti-btn-wave  me-[0.375rem]"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-info ti-btn-wave  me-[0.375rem]"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-orange ti-btn-wave  me-[0.375rem]"&gt;Orange&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-purple ti-btn-wave  me-[0.375rem]"&gt;Purple&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-teal ti-btn-wave  me-[0.375rem]"&gt;Teal&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                    Rounded Ghost Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button type="button" class="ti-btn ti-btn-ghost-primary !rounded-full ti-btn-wave  me-[0.375rem]">Primary</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-secondary !rounded-full ti-btn-wave  me-[0.375rem]">Secondary</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-success !rounded-full ti-btn-wave  me-[0.375rem]">Success</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-danger !rounded-full ti-btn-wave  me-[0.375rem]">Danger</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-warning !rounded-full ti-btn-wave  me-[0.375rem]">Warning</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-info !rounded-full ti-btn-wave  me-[0.375rem]">Info</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-orange !rounded-full ti-btn-wave  me-[0.375rem]">Orange</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-purple !rounded-full ti-btn-wave  me-[0.375rem]">Purple</button>
                                        <button type="button" class="ti-btn ti-btn-ghost-teal !rounded-full ti-btn-wave  me-[0.375rem]">Teal</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn  ti-btn-ghost-primary !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-secondary !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-success !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-danger !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-warning !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-info !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-orange !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Orange&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-purple !rounded-fullti-btn-wave  me-[0.375rem]"&gt;Purple&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-ghost-teal !rounded-full ti-btn-wave  me-[0.375rem]"&gt;Teal&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Button tags
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <a class="ti-btn ti-btn-primary-full ti-btn-wave  me-[0.375rem]" href="javascript:void(0);" role="button">Link</a>
                                        <button class="ti-btn ti-btn-secondary-full ti-btn-wave  me-[0.375rem]" type="submit">Button</button>
                                        <input class="ti-btn ti-btn-info-full  me-[0.375rem]" type="button" value="Input">
                                        <input class="ti-btn ti-btn-warning-full  me-[0.375rem]" type="submit" value="Submit">
                                        <input class="ti-btn ti-btn-success-full  me-[0.375rem]" type="reset" value="Reset">
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
            &lt;a class="ti-btn ti-btn-primary-full ti-btn-wave  me-[0.375rem]" href="javascript:void(0);" role="button"&gt;Link&lt;/a&gt;
            &lt;button class="ti-btn ti-btn-secondary-full ti-btn-wave  me-[0.375rem]" type="submit"&gt;Button&lt;/button&gt;
            &lt;input class="ti-btn ti-btn-info-full  me-[0.375rem]" type="button" value="Input"&gt;
            &lt;input class="ti-btn ti-btn-warning-full  me-[0.375rem]" type="submit" value="Submit"&gt;
            &lt;input class="ti-btn ti-btn-success-full  me-[0.375rem]" type="reset" value="Reset"&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        disabled state with anchor tags
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list flex">
                                        <div class="">
                                            <button type="button" class="ti-btn ti-btn-primary-full ti-btn-disabled  me-[0.375rem]">Primary
                                                button</button>
                                            <button type="button" class="ti-btn ti-btn-secondary-full ti-btn-disabled  me-[0.375rem]">Button</button>
                                            <button type="button" class="ti-btn ti-btn-outline-primary ti-btn-disabled  me-[0.375rem]">Primary
                                                button</button>
                                            <button type="button" class="ti-btn ti-btn-outline-secondary ti-btn-disabled  me-[0.375rem]">Button</button>
                                        </div>

                                        <div>
                                            <a class="ti-btn ti-btn-primary ti-btn-disabled  me-[0.375rem]" role="button" aria-disabled="true">Primary
                                                link</a>
                                            <a class="ti-btn ti-btn-secondary ti-btn-disabled  me-[0.375rem]" role="button" aria-disabled="true">Link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;div class="mb-4"&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary-full" disabled=""&gt;Primary
                button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-secondary-full" disabled=""&gt;Button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-outline-primary" disabled=""&gt;Primary
                button&lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-outline-secondary" disabled=""&gt;Button&lt;/button&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;a class="ti-btn ti-btn-primary ti-btn-disabled" role="button" aria-disabled="true"&gt;Primary
                link&lt;/a&gt;
            &lt;a class="ti-btn ti-btn-secondary ti-btn-disabled" role="button" aria-disabled="true"&gt;Link&lt;/a&gt;
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
                                        Loading Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list md:flex flex-wrap">
                                        <button class="ti-btn ti-btn-primary-full ti-btn-loader  me-[0.375rem]">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-2-fill text-[1rem] animate-spin"></i></span>
                                        </button>
                                        <button class="ti-btn ti-btn-outline-secondary ti-btn-loader  me-[0.375rem]">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-2-fill text-[1rem] animate-spin"></i></span>
                                        </button>
                                        <button class="ti-btn bg-info/10 text-info ti-btn-loader  me-[0.375rem]">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-4-line text-[1rem] animate-spin"></i></span>
                                        </button>
                                        <button class="ti-btn bg-warning/10 text-warning ti-btn-loader  me-[0.375rem]">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-5-line text-[1rem] animate-spin"></i></span>
                                        </button>
                                        <button class="ti-btn ti-btn-success-full ti-btn-loader ti-btn-disabled  me-[0.375rem]">
                                            <span class="me-2">Disabled</span>
                                            <span class="loading"><i class="ri-refresh-line text-[1rem] animate-spin"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list md:flex flex-wrap"&gt;
        &lt;button class="ti-btn ti-btn-primary-full ti-btn-loader"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-2-fill text-[1rem]"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-outline-secondary ti-btn-loader"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-2-fill text-[1rem]"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-info/10 ti-btn-loader"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-4-line text-[1rem]"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-warning/10 ti-btn-loader"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-5-line text-[1rem]"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-success-full ti-btn-loader disabled"&gt;
            &lt;span class="me-2"&gt;Disabled&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-refresh-line text-[1rem]"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Icon Buttons</div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list md:flex block">
                                        <div class="mb-md-0 mb-2 me-4">
                                            <button class="ti-btn ti-btn-icon ti-btn-primary-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-bank-fill"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon ti-btn-info-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-medal-line"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon ti-btn-danger-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-archive-line"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon ti-btn-warning-full ti-btn-wave  me-[0.375rem] me-5">
                                                <i class="ri-calendar-2-line"></i>
                                            </button>
                                        </div>
                                        <div class="mb-md-0 mb-2 me-4">
                                            <button class="ti-btn ti-btn-icon bg-primary/10 text-primary !border hover:bg-primary hover:text-white !rounded-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-home-smile-line"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon bg-secondary/10 text-secondary hover:bg-secondary hover:text-white !rounded-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon bg-success/10 text-success hover:bg-success hover:text-white !rounded-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-notification-3-line"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon bg-danger/10 text-danger hover:bg-danger hover:text-white !rounded-full ti-btn-wave  me-[0.375rem] me-5">
                                                <i class="ri-chat-settings-line"></i>
                                            </button>
                                        </div>
                                        <div class="">
                                            <button class="ti-btn ti-btn-icon ti-btn-outline-primary !rounded-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-phone-line"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon ti-btn-outline-teal !border-teal !text-teal !rounded-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-customer-service-2-line"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon ti-btn-outline-success !rounded-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-live-line"></i>
                                            </button>
                                            <button class="ti-btn ti-btn-icon ti-btn-outline-secondary !rounded-full ti-btn-wave  me-[0.375rem]">
                                                <i class="ri-save-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list md:flex d-block"&gt;
        &lt;div class="mb-md-0 mb-2"&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-primary ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-bank-fill"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-info ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-medal-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-danger ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-archive-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-warning ti-btn-wave  me-[0.375rem] me-5"&gt;
                &lt;i class="ri-calendar-2-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="mb-md-0 mb-2"&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-primary/10 !rounded-full ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-home-smile-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-secondary/10 !rounded-full ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-delete-bin-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-success/10 !rounded-full ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-notification-3-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-danger/10 !rounded-full ti-btn-wave  me-[0.375rem] me-5"&gt;
                &lt;i class="ri-chat-settings-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=""&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-outline-primary !rounded-full ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-phone-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-outline-teal !rounded-full ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-customer-service-2-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-outline-success !rounded-full ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-live-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="ti-btn ti-btn-icon ti-btn-outline-secondary !rounded-full ti-btn-wave  me-[0.375rem]"&gt;
                &lt;i class="ri-save-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt; </code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Social Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button class="ti-btn ti-btn-icon ti-btn-facebook ti-btn-wave  me-[0.375rem]">
                                            <i class="ri-facebook-line"></i>
                                        </button>
                                        <button class="ti-btn ti-btn-icon ti-btn-twitter ti-btn-wave  me-[0.375rem]">
                                            <i class="ri-twitter-x-line"></i>
                                        </button>
                                        <button class="ti-btn ti-btn-icon ti-btn-instagram ti-btn-wave  me-[0.375rem]">
                                            <i class="ri-instagram-line"></i>
                                        </button>
                                        <button class="ti-btn ti-btn-icon ti-btn-github ti-btn-wave  me-[0.375rem]">
                                            <i class="ri-github-line"></i>
                                        </button>
                                        <button class="ti-btn ti-btn-icon ti-btn-youtube ti-btn-wave  me-[0.375rem]">
                                            <i class="ri-youtube-line"></i>
                                        </button>
                                        <button class="ti-btn ti-btn-icon ti-btn-google ti-btn-wave  me-[0.375rem]">
                                            <i class="ri-google-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button class="ti-btn ti-btn-icon ti-btn-facebook ti-btn-wave  me-[0.375rem]"&gt;
            &lt;i class="ri-facebook-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-icon ti-btn-twitter ti-btn-wave  me-[0.375rem]"&gt;
            &lt;i class="ri-twitter-x-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-icon ti-btn-instagram ti-btn-wave  me-[0.375rem]"&gt;
            &lt;i class="ri-instagram-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-icon ti-btn-github ti-btn-wave  me-[0.375rem]"&gt;
            &lt;i class="ri-github-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-icon ti-btn-youtube ti-btn-wave  me-[0.375rem]"&gt;
            &lt;i class="ri-youtube-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-icon ti-btn-google ti-btn-wave  me-[0.375rem]"&gt;
            &lt;i class="ri-google-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">
                                                Sizes
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="ti-btn-list">
                                                <button type="button" class="ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]">Small
                                                    button</button>
                                                <button type="button" class="ti-btn ti-btn-secondary-full ti-btn-wave  me-[0.375rem]">Default
                                                    button</button>
                                                <button type="button" class="ti-btn ti-btn-success-full ti-btn-lg ti-btn-wave  me-[0.375rem]">Large
                                                    button</button>
                                            </div>
                                        </div>
                                        <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary ti-btn-sm ti-btn-wave  me-[0.375rem]"&gt;Small
            button&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary ti-btn-wave  me-[0.375rem]"&gt;Default
            button&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success ti-btn-lg ti-btn-wave  me-[0.375rem]"&gt;Large
            button&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">
                                                Button Widths
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="ti-btn-list">
                                                <button type="button" class="ti-btn ti-btn-primary-full ti-btn-w-xs ti-btn-wave  me-[0.375rem]">XS</button>
                                                <button type="button" class="ti-btn ti-btn-secondary-full ti-btn-w-sm ti-btn-wave  me-[0.375rem]">SM</button>
                                                <button type="button" class="ti-btn ti-btn-warning-full ti-btn-w-md ti-btn-wave  me-[0.375rem]">MD</button>
                                                <button type="button" class="ti-btn ti-btn-info-full ti-btn-w-lg ti-btn-wave  me-[0.375rem]">LG</button>
                                            </div>
                                        </div>
                                        <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary-full ti-btn-w-xs ti-btn-wave  me-[0.375rem]"&gt;XS&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-secondary-full ti-btn-w-sm ti-btn-wave  me-[0.375rem]"&gt;SM&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning-full ti-btn-w-md ti-btn-wave  me-[0.375rem]"&gt;MD&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-info-full ti-btn-w-lg ti-btn-wave  me-[0.375rem]"&gt;LG&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Buttons With Different Shadows
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list flex">
                                        <div class="me-[3rem]">
                                            <button class="ti-btn ti-btn-primary-full shadow-sm ti-btn-wave  me-[0.375rem]">Button</button>
                                            <button class="ti-btn ti-btn-primary-full shadow ti-btn-wave  me-[0.375rem]">Button</button>
                                            <button class="ti-btn ti-btn-primary-full shadow-lg ti-btn-wave  me-[0.375rem]">Button</button>
                                        </div>
                                        <div>
                                            <button class="ti-btn ti-btn-secondary-full !py-1 !px-2 shadow-sm ti-btn-wave  me-[0.375rem]">Button</button>
                                            <button class="ti-btn ti-btn-info-full shadow ti-btn-wave  me-[0.375rem]">Button</button>
                                            <button class="ti-btn ti-btn-lg ti-btn-success-full shadow-lg ti-btn-wave  me-[0.375rem]">Button</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list d-flex"&gt;
        &lt;div class="me-5"&gt;
            &lt;button class="ti-btn ti-btn-primary-full shadow-sm ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-primary-full shadow ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-primary shadow-lg ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;button class="ti-btn ti-btn-secondary-full ti-btn-sm shadow-sm ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-info-full shadow ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-lg ti-btn-success-full shadow-lg ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
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
                                        Different Colored Buttons With Shadows
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button class="ti-btn ti-btn-primary-full shadow-primary ti-btn-wave  me-[0.375rem]">Button</button>
                                        <button class="ti-btn ti-btn-secondary-full shadow-secondary ti-btn-wave  me-[0.375rem]">Button</button>
                                        <button class="ti-btn ti-btn-success-full shadow-success ti-btn-wave  me-[0.375rem]">Button</button>
                                        <button class="ti-btn ti-btn-info-full shadow-info ti-btn-wave  me-[0.375rem]">Button</button>
                                        <button class="ti-btn ti-btn-warning-full shadow-warning ti-btn-wave  me-[0.375rem]">Button</button>
                                        <button class="ti-btn ti-btn-danger-full shadow-danger ti-btn-wave  me-[0.375rem]">Button</button>
                                        <button class="ti-btn ti-btn-purple-full shadow-purple ti-btn-wave  me-[0.375rem]">Button</button>
                                        <button class="ti-btn ti-btn-orange-full shadow-orange ti-btn-wave  me-[0.375rem]">Button</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button class="ti-btn ti-btn-primary-full shadow-primary ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-secondary-full shadow-secondary ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-success-full shadow-success ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-info-full shadow-info ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-warning-full shadow-warning ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-danger-full shadow-danger ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-purple-full shadow-purple ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-orange-full shadow-orange ti-btn-wave  me-[0.375rem]"&gt;Button&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Label Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button class="ti-btn ti-btn-primary-full label-ti-btn  me-[0.375rem]">
                                            <i class="ri-chat-smile-line label-ti-btn-icon  me-2"></i>
                                            Primary
                                        </button>
                                        <button class="ti-btn ti-btn-secondary-full label-ti-btn  me-[0.375rem]">
                                            <i class="ri-settings-4-line label-ti-btn-icon me-2"></i>
                                            Secondary
                                        </button>
                                        <button class="ti-btn ti-btn-warning-full label-ti-btn !rounded-full  me-[0.375rem]">
                                            <i class="ri-spam-2-line label-ti-btn-icon me-2 !rounded-full"></i>
                                            Warning
                                        </button>
                                        <button class="ti-btn ti-btn-info-full label-ti-btn !rounded-full  me-[0.375rem]">
                                            <i class="ri-phone-line label-ti-btn-icon me-2 !rounded-full"></i>
                                            Info
                                        </button>
                                        <button class="ti-btn ti-btn-success-full label-ti-btn label-end  me-[0.375rem]">
                                            <i class="ri-thumb-up-line label-ti-btn-icon ms-2"></i>
                                            Success
                                        
                                        </button>
                                        <button class="ti-btn ti-btn-danger-full label-ti-btn label-end !rounded-full  me-[0.375rem]">
                                            <i class="ri-close-fill label-ti-btn-icon ms-2 !rounded-full"></i>
                                            Cancel
                                            
                                        </button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button class="ti-btn ti-btn-primary-full label-ti-btn  me-[0.375rem]"&gt;
            &lt;i class="ri-chat-smile-line label-ti-btn-icon me-2"&gt;&lt;/i&gt;
            Primary
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-secondary-full label-ti-btn  me-[0.375rem]"&gt;
            &lt;i class="ri-settings-4-line label-ti-btn-icon me-2"&gt;&lt;/i&gt;
            Secondary
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-warning-full label-ti-btn !rounded-full  me-[0.375rem]"&gt;
            &lt;i class="ri-spam-2-line label-ti-btn-icon me-2 !rounded-full"&gt;&lt;/i&gt;
            Warning
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-info-full label-ti-btn !rounded-full  me-[0.375rem]"&gt;
            &lt;i class="ri-phone-line label-ti-btn-icon me-2 !rounded-full"&gt;&lt;/i&gt;
            Info
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-success-full label-ti-btn label-end  me-[0.375rem]"&gt;
            Success
            &lt;i class="ri-thumb-up-line label-ti-btn-icon ms-2"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-danger-full label-ti-btn label-end !rounded-full  me-[0.375rem]"&gt;
            Cancel
            &lt;i class="ri-twitter-x-line label-ti-btn-icon ms-2 !rounded-full"&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Custom Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <button class="ti-btn ti-btn-info-full custom-button !rounded-full  me-[0.375rem]">
                                            <span class="custom-ti-btn-icons"><i class="ri-close-fill text-info"></i></span>
                                            Twitter
                                        </button>
                                        <button class="ti-btn ti-btn-teal ti-btn-border-down border-0  me-[0.375rem]">Border</button>
                                        <button class="ti-btn ti-btn-secondary ti-btn-border-start  me-[0.375rem]">Border</button>
                                        <button class="ti-btn ti-btn-purple ti-btn-border-end  me-[0.375rem]">Border</button>
                                        <button class="ti-btn ti-btn-warning ti-btn-border-top  me-[0.375rem]">Border</button>
                                        <button class="ti-btn ti-btn-danger-full ti-btn-hover ti-btn-hover-animate  me-[0.375rem]">Like</button>
                                        <button class="ti-btn ti-btn-success-full ti-btn-darken-hover  me-[0.375rem]">Hover</button>
                                        <button class="ti-btn ti-btn-orange-full ti-btn-custom-border  me-[0.375rem]">Hover</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;button class="ti-btn ti-btn-info custom-button !rounded-full"&gt;
            &lt;span class="custom-ti-btn-icons"&gt;&lt;i class="ri-twitter-line text-info"&gt;&lt;/i&gt;&lt;/span&gt;
            Twitter
        &lt;/button&gt;
        &lt;button class="ti-btn ti-btn-teal ti-btn-border-down"&gt;Border&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-secondary ti-btn-border-start"&gt;Border&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-purple ti-btn-border-end"&gt;Border&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-warning ti-btn-border-top"&gt;Border&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-secondary ti-btn-glare"&gt;&lt;span&gt;Glare Button&lt;/span&gt;&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-danger ti-btn-hover ti-btn-hover-animate"&gt;Like&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-success ti-btn-darken-hover"&gt;Hover&lt;/button&gt;
        &lt;button class="ti-btn ti-btn-orange ti-btn-custom-border"&gt;Hover&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Block buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-list">
                                        <div class="grid  gap-2 mb-6">
                                            <button class="ti-btn ti-btn-primary-full ti-btn-wave" type="button">Button</button>
                                            <button class="ti-btn ti-btn-secondary-full ti-btn-wave" type="button">Button</button>
                                        </div>
                                        <div class="grid gap-2 md:block">
                                            <button class="ti-btn ti-btn-info-full ti-btn-wave" type="button">Button</button>
                                            <button class="ti-btn ti-btn-success-full ti-btn-wave" type="button">Button</button>
                                        </div>
                                        <div class="grid !mx-auto gap-2 w-[50%] ">
                                            <button class="ti-btn ti-btn-danger-full ti-btn-wave" type="button">Button</button>
                                            <button class="ti-btn ti-btn-warning-full ti-btn-wave" type="button">Button</button>
                                        </div>
                                        <div class="grid gap-2 md:flex md:justify-end">
                                            <button class="ti-btn ti-btn-teal-full md:me-2 ti-btn-wave" type="button">Button</button>
                                            <button class="ti-btn ti-btn-purple-full ti-btn-wave" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
        &lt;div class="grid gap-2 mb-4"&gt;
            &lt;button class="ti-btn ti-btn-primary ti-btn-wave" type="button"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-secondary ti-btn-wave" type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="grid gap-2 d-md-block"&gt;
            &lt;button class="ti-btn ti-btn-info ti-btn-wave" type="button"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-success ti-btn-wave" type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="grid gap-2 col-6 mx-auto"&gt;
            &lt;button class="ti-btn ti-btn-danger ti-btn-wave" type="button"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-warning ti-btn-wave" type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="grid gap-2 md:flex md:justify-end"&gt;
            &lt;button class="ti-btn ti-btn-teal me-md-2 ti-btn-wave" type="button"&gt;Button&lt;/button&gt;
            &lt;button class="ti-btn ti-btn-purple ti-btn-wave" type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--ROW-END-->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
