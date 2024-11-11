
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Borders</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Utilities <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Borders 
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
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Borders
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="border border-defaultborder dark:border-defaultborder/10 border-container"></span>
                                    <span class="border-t border-defaultborder dark:border-defaultborder/10 border-container"></span>
                                    <span class="border-e border-defaultborder dark:border-defaultborder/10 border-container"></span>
                                    <span class="border-b border-defaultborder dark:border-defaultborder/10 border-container"></span>
                                    <span class="border-s border-defaultborder dark:border-defaultborder/10 border-container"></span>
                                </div>
                                <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="border dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;
        &lt;span class="border-t dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;
        &lt;span class="border-e dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;
        &lt;span class="border-b dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;
        &lt;span class="border-s dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Remove borders
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="border-0 border-container"></span>
                                    <span class="border border-defaultborder dark:border-defaultborder/10 border-t-0 border-container"></span>
                                    <span class="border border-defaultborder dark:border-defaultborder/10 border-e-0 border-container"></span>
                                    <span class="border border-defaultborder dark:border-defaultborder/10 border-b-0 border-container"></span>
                                    <span class="border border-defaultborder dark:border-defaultborder/10 border-s-0 border-container"></span>
                                </div>
                                <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="border-0 border-container"&gt;&lt;/span&gt;
        &lt;span class="border dark:border-defaultborder/10 border-t-0 border-container"&gt;&lt;/span&gt;
        &lt;span class="border dark:border-defaultborder/10 border-e-0 border-container"&gt;&lt;/span&gt;
        &lt;span class="border dark:border-defaultborder/10 border-b-0 border-container"&gt;&lt;/span&gt;
        &lt;span class="border dark:border-defaultborder/10 border-s-0 border-container"&gt;&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Border Widths
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="border-1 border-defaultborder dark:border-defaultborder/10 border-container"></span>
                                    <span class="border-container border-defaultborder dark:border-defaultborder/10 border-2"></span>
                                    <span class="border-container border-defaultborder dark:border-defaultborder/10 border-4"></span>
                                    <span class="border-container border-defaultborder dark:border-defaultborder/10 border-8"></span>
                                </div>
                                <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="border-1 dark:border-defaultborder/10 border-container"&gt;&lt;/span&gt;
        &lt;span class="border-container dark:border-defaultborder/10 border-2"&gt;&lt;/span&gt;
        &lt;span class="border-container dark:border-defaultborder/10 border-4"&gt;&lt;/span&gt;
        &lt;span class="border-container dark:border-defaultborder/10 border-8"&gt;&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-8 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Border colors
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="border  border-container !border-primary"></span>
                                    <span class="border border-container !border-secondary"></span>
                                    <span class="border border-container !border-success"></span>
                                    <span class="border border-container !border-danger"></span>
                                    <span class="border border-container !border-warning"></span>
                                    <span class="border border-container !border-info"></span>
                                    <span class="border border-container !border-light"></span>
                                    <span class="border border-container !border-black dark:!border-white"></span>
                                    <span class="border border-container !border-white"></span>
                                </div>
                                <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="border border-container !border-primary"&gt;&lt;/span&gt;
        &lt;span class="border border-container !border-secondary"&gt;&lt;/span&gt;
        &lt;span class="border border-container !border-success"&gt;&lt;/span&gt;
        &lt;span class="border border-container !border-danger"&gt;&lt;/span&gt;
        &lt;span class="border border-container !border-warning"&gt;&lt;/span&gt;
        &lt;span class="border border-container !border-info"&gt;&lt;/span&gt;
        &lt;span class="border border-container !border-light"&gt;&lt;/span&gt;
        &lt;span class="border border-container !border-black"&gt;&lt;/span&gt;
        &lt;span class="border border-container !border-white"&gt;&lt;/span&gt;</code></pre>
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
                                    <div class="box-title">
                                        Border color Styling
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="mb-4">
                                        <label for="exampleFormControlInput1" class="form-label">Email
                                            address</label>
                                        <input type="email" class="form-control w-full !rounded-md !border-success"
                                            id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="h4 pb-4 mb-4 text-danger border-b !border-danger">
                                        Below Shows Danger Border
                                    </div>
                                    <div
                                        class="p-4 bg-info/10 border !border-info  !border-s-0 rounded-e-md mb-1">
                                        Customizing borders with background colors
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="mb-4"&gt;
        &lt;label for="exampleFormControlInput1" class="form-label"&gt;Email
            address&lt;/label&gt;
        &lt;input type="email" class="form-control w-full !rounded-md !border-success"
            id="exampleFormControlInput1" placeholder="name@example.com"&gt;
    &lt;/div&gt;    
    &lt;div class="h4 pb-4 mb-4 text-danger border-b !border-danger"&gt;
        Below Shows Danger Border
    &lt;/div&gt;
    &lt;div
        class="p-4 bg-info/10 border !border-info  !border-s-0 rounded-e-md mb-1"&gt;
        Customizing borders with backgrounud colors
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Border with opacity
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="border border-black dark:border-white p-2 mb-2">This is default success border</div>
                                    <div class="border border-black/75 dark:border-white/75 p-2 mb-2">This is 75%
                                        opacity
                                        success border
                                    </div>
                                    <div class="border border-black/50 dark:border-white/50 p-2 mb-2">This is 50%
                                        opacity
                                        success border
                                    </div>
                                    <div class="border border-black/25 dark:border-white/25 p-2 mb-2 ">This is 25%
                                        opacity
                                        success border
                                    </div>
                                    <div class="border border-black/10 dark:border-white/10 p-2">This is 10% opacity
                                        success
                                        border
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="border border-black dark:border-white p-2 mb-2"&gt;This is default success border&lt;/div&gt;
        &lt;div class="border border-black/75 dark:border-white/75 p-2 mb-2"&gt;This is 75%
            opacity
            success border
        &lt;/div&gt;
        &lt;div class="border border-black/50 dark:border-white/50 p-2 mb-2"&gt;This is 50%
            opacity
            success border
        &lt;/div&gt;
        &lt;div class="border border-black/25 dark:border-white/25 p-2 mb-2 "&gt;This is 25%
            opacity
            success border
        &lt;/div&gt;
        &lt;div class="border border-black/10 dark:border-white/10 p-2"&gt;This is 10% opacity
            success
            border
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
                                    <div class="box-title">
                                        Border Radius
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-md" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-t-md" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-e-md" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-b-md" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-s-md" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-full" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img  rounded-full" alt="...">
                                </div>
                                <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-md" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-t-md" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-e-md" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-b-md" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-s-md" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-full" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img  rounded-full" alt="..."&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-none" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-sm" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-md" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-lg" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-xl" alt="...">
                                    <img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-full" alt="...">
                                </div>
                                <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-none" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-sm" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-md" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-lg" alt="..."&gt;
        &lt;img src="{{asset('build/assets/images/media/media-58.jpg')}}" class="bd-placeholder-img rounded-xl" alt="..."&gt;</code></pre>
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
