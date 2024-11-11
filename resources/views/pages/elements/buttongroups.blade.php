
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Buttongroups</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Buttongroups 
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

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Basic example
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5">
                                        <button type="button"
                                            class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                            Year
                                        </button>
                                        <button type="button"
                                            class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                            Month
                                        </button>
                                        <button type="button"
                                            class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                            Date
                                        </button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5"&gt;
        &lt;button type="button"
            class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
            Year
        &lt;/button&gt;
        &lt;button type="button"
            class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
            Month
        &lt;/button&gt;
        &lt;button type="button"
            class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
            Date
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Mixed style
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-btn-group !gap-0" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="ti-btn-group py-3 px-4 border border-defaultborder dark:border-defaultborder/10 ti-btn-danger-full ti-btn-wave">Year</button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border border-defaultborder dark:border-defaultborder/10 ti-btn-warning-full ti-btn-wave">Month</button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border border-defaultborder dark:border-defaultborder/10 ti-btn-success-full ti-btn-wave">Date</button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-group" role="group" aria-label="Basic mixed styles example"&gt;
        &lt;button type="button" class="ti-btn ti-btn-danger ti-btn-wave"&gt;Year&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-warning ti-btn-wave"&gt;Month&lt;/button&gt;
        &lt;button type="button" class="ti-btn ti-btn-success ti-btn-wave"&gt;Date&lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Button group break</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-col md:inline-flex md:flex-row rounded-sm shadow-sm">
                                        <button type="button"
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                            Item 1
                                        </button>
                                        <button type="button"
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                            Item 2
                                        </button>
                                        <button type="button"
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                            Item 3
                                        </button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="flex flex-col md:inline-flex md:flex-row rounded-sm shadow-sm"&gt;
        &lt;button type="button"
            class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
            Item 1
        &lt;/button&gt;
        &lt;button type="button"
            class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
            Item 2
        &lt;/button&gt;
        &lt;button type="button"
            class="py-2 px-3 inline-flex justify-center items-center gap-2 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
            Item 3
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">
                                                Sizing
                                            </div>
                                            <div class="prism-toggle">
                                                <button
                                                    class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                                    Code<i
                                                        class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body space-y-2">
                                            <div class="inline-flex rounded-md shadow-sm ltr:mr-6 rtl:ml-6">
                                                <button type="button"
                                                    class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                                    Small
                                                </button>
                                                <button type="button"
                                                    class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                                    Small
                                                </button>
                                                <button type="button"
                                                    class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                                    Small
                                                </button>
                                            </div>

                                            <div class="inline-flex rounded-md shadow-sm ltr:mr-6 rtl:ml-6">
                                                <button type="button"
                                                    class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 sm:p-4 p-3">
                                                    Default
                                                </button>
                                                <button type="button"
                                                    class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 sm:p-4 p-3">
                                                    Default
                                                </button>
                                                <button type="button"
                                                    class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 sm:p-4 p-3">
                                                    Default
                                                </button>
                                            </div>

                                            <div class="inline-flex rounded-md shadow-sm">
                                                <button type="button"
                                                    class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 p-[1.3125rem]">
                                                    Large
                                                </button>
                                                <button type="button"
                                                    class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 p-[1.3125rem]">
                                                    Large
                                                </button>
                                                <button type="button"
                                                    class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 p-[1.3125rem]">
                                                    Large
                                                </button>
                                            </div>
                                        </div>
                                        <div class="box-footer hidden !border-t-0">
                                            <!-- Prism Code -->
                                            <pre class="language-html"><code class="language-html">&lt;div class="inline-flex rounded-md shadow-sm ltr:mr-6 rtl:ml-6"&gt;
        &lt;button type="button"
            class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
            Small
        &lt;/button&gt;
        &lt;button type="button"
            class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
            Small
        &lt;/button&gt;
        &lt;button type="button"
            class="ti-btn-group border py-3 px-4 bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
            Small
        &lt;/button&gt;
    &lt;/div&gt;

    &lt;div class="inline-flex rounded-md shadow-sm ltr:mr-6 rtl:ml-6"&gt;
        &lt;button type="button"
            class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 sm:p-4 p-3"&gt;
            Default
        &lt;/button&gt;
        &lt;button type="button"
            class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 sm:p-4 p-3"&gt;
            Default
        &lt;/button&gt;
        &lt;button type="button"
            class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 sm:p-4 p-3"&gt;
            Default
        &lt;/button&gt;
    &lt;/div&gt;

    &lt;div class="inline-flex rounded-md shadow-sm"&gt;
        &lt;button type="button"
            class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 p-[1.3125rem]"&gt;
            Large
        &lt;/button&gt;
        &lt;button type="button"
            class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 p-[1.3125rem]"&gt;
            Large
        &lt;/button&gt;
        &lt;button type="button"
            class="ti-btn-group bg-white dark:bg-bodybg border text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 p-[1.3125rem]"&gt;
            Large
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                            <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">
                                                Vertical variation
                                            </div>
                                            <div class="prism-toggle">
                                                <button
                                                    class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                                    Code<i
                                                        class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="max-w-xs flex flex-col rounded-sm shadow-sm">
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-t-md border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                                    Item 1
                                                </button>
                                                <button type="button"
                                                    class="-mt-px py-2 px-3 inline-flex justify-center items-center gap-2 border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                                    Item 2
                                                </button>
                                                <button type="button"
                                                    class="-mt-px py-2 px-3 inline-flex justify-center items-center gap-2 rounded-b-md border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                                    Item 3
                                                </button>
                                            </div>
                                        </div>
                                        <div class="box-footer hidden !border-t-0">
                                            <!-- Prism Code -->
                                            <pre class="language-html"><code class="language-html">&lt;div class="max-w-xs flex flex-col rounded-sm shadow-sm"&gt;
    &lt;button type="button"
        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-t-md border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
        Item 1
    &lt;/button&gt;
    &lt;button type="button"
        class="-mt-px py-2 px-3 inline-flex justify-center items-center gap-2 border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
        Item 2
    &lt;/button&gt;
    &lt;button type="button"
        class="-mt-px py-2 px-3 inline-flex justify-center items-center gap-2 rounded-b-md border font-medium bg-white dark:bg-bodybg text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
        Item 3
    &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                            <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header flex justify-between">
                                    <h5 class="box-title">Basic Button Group</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show
                                            Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                    </div>
                                    <div class="box-body">
                                    <div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5">
                                        <button type="button" class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                        Year
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                        Month
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70">
                                        Date
                                        </button>
                                    </div>
                                    <div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5">
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-primary-full border-white/10 dark:border-white/10">
                                        Year
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-primary-full border-white/10 dark:border-white/10">
                                        Month
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-primary-full border-white/10 dark:border-white/10">
                                        Date
                                        </button>
                                    </div>
                                    <div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5">
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-secondary-full border-white/10 dark:border-white/10">
                                        Year
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-secondary-full border-white/10 dark:border-white/10">
                                        Month
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-secondary-full border-white/10 dark:border-white/10">
                                        Date
                                        </button>
                                    </div>
                                    <div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5">
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-warning-full border-white/10 dark:border-white/10">
                                        Year
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-warning-full border-white/10 dark:border-white/10">
                                        Month
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-warning-full border-white/10 dark:border-white/10">
                                        Date
                                        </button>
                                    </div>
                                    <div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5">
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-danger-full border-white/10 dark:border-white/10">
                                        Year
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-danger-full border-white/10 dark:border-white/10">
                                        Month
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-danger-full border-white/10 dark:border-white/10">
                                        Date
                                        </button>
                                    </div>
                                    <div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5">
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-info-full border-white/10 dark:border-white/10">
                                        Year
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-info-full border-white/10 dark:border-white/10">
                                        Month
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-info-full border-white/10 dark:border-white/10">
                                        Date
                                        </button>
                                    </div>
                                    <div class="inline-flex rounded-md shadow-sm mb-0">
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-success-full border-white/10 dark:border-white/10">
                                        Year
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-success-full border-white/10 dark:border-white/10">
                                        Month
                                        </button>
                                        <button type="button" class="ti-btn-group py-3 px-4 border ti-btn-success-full border-white/10 dark:border-white/10">
                                        Date
                                        </button>
                                    </div>
                                    </div>
                                    <div class="box-footer hidden !border-t-0">
                                        <!-- Prism Code -->
                                        <pre class="language-html"><code class="language-html">&lt;div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5"&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
        Year
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
        Month
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border bg-white dark:bg-bodybg text-gray-700 hover:bg-gray-50 focus:ring-primary dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70"&gt;
        Date
    &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5"&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-primary-full border-white/10 dark:border-white/10"&gt;
        Year
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-primary-full border-white/10 dark:border-white/10"&gt;
        Month
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-primary-full border-white/10 dark:border-white/10"&gt;
        Date
    &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5"&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-secondary-full border-white/10 dark:border-white/10"&gt;
        Year
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-secondary-full border-white/10 dark:border-white/10"&gt;
        Month
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-secondary-full border-white/10 dark:border-white/10"&gt;
        Date
    &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5"&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-warning-full border-white/10 dark:border-white/10"&gt;
        Year
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-warning-full border-white/10 dark:border-white/10"&gt;
        Month
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-warning-full border-white/10 dark:border-white/10"&gt;
        Date
    &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5"&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-danger-full border-white/10 dark:border-white/10"&gt;
        Year
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-danger-full border-white/10 dark:border-white/10"&gt;
        Month
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-danger-full border-white/10 dark:border-white/10"&gt;
        Date
    &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="inline-flex rounded-md shadow-sm mb-5 ltr:mr-5 rtl:ml-5"&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-info-full border-white/10 dark:border-white/10"&gt;
        Year
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-info-full border-white/10 dark:border-white/10"&gt;
        Month
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-info-full border-white/10 dark:border-white/10"&gt;
        Date
    &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="inline-flex rounded-md shadow-sm mb-0"&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-success-full border-white/10 dark:border-white/10"&gt;
        Year
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-success-full border-white/10 dark:border-white/10"&gt;
        Month
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn-group py-3 px-4 border ti-btn-success-full border-white/10 dark:border-white/10"&gt;
        Date
    &lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                        <!-- Prism Code -->
                        </div>
                    </div>
                            </div>
                    </div>
                    </div>

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
