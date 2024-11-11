
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Avatars</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Avatars 
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

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Avatars
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body py-4">
                                    <span class="avatar me-2 avatar-radius-0">
                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar me-2">
                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                    </span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="avatar me-2 avatar-radius-0"&gt;
        &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar me-2"&gt;
        &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
    &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Avatar Sizes
                                        <p class="subtitle text-muted text-[0.75rem] font-normal normal-case">
                                            Avatars of different sizes
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="avatar avatar-xs me-2">
                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm me-2">
                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-md me-2">
                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-lg me-2">
                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-xl me-2">
                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-xxl me-2">
                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                    </span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2"&gt;
        &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-sm me-2"&gt;
        &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-md me-2"&gt;
        &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-lg me-2"&gt;
        &lt;img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xl me-2"&gt;
        &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xxl me-2"&gt;
        &lt;img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img"&gt;
    &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Avatar With Icons
                                        <p class="subtitle text-muted text-[0.75rem] font-normal normal-case">
                                            Avatar contains icons to perform respective action.
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="avatar avatar-xs me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        <a aria-label="anchor" href="javascript:void(0);" class="badge bg-success rounded-full avatar-badge"><i class="fe fe-camera text-[.5rem]"></i></a>
                                    </span>
                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-secondary avatar-badge"><i class="fe fe-edit text-[.5rem]"></i></a>
                                    </span>
                                    <span class="avatar avatar-md me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                        <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-warning avatar-badge"><i class="fe fe-plus text-[.5rem]"></i></a>
                                    </span>
                                    <span class="avatar avatar-lg me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-info avatar-badge"><i class="fe fe-edit text-[.625rem]"></i></a>
                                    </span>
                                    <span class="avatar avatar-xl me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-success avatar-badge"><i class="fe fe-camera text-[.625rem]"></i></a>
                                    </span>
                                    <span class="avatar avatar-xxl me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                        <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-danger avatar-badge"><i class="fe fe-plus text-[.625rem]"></i></a>
                                    </span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html"> &lt;span class="avatar avatar-xs me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
        &lt;a aria-label="anchor" href="javascript:void(0);" class="badge bg-success rounded-full avatar-badge"&gt;&lt;i class="fe fe-camera text-[.5rem]"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-sm me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
        &lt;a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-secondary avatar-badge"&gt;&lt;i class="fe fe-edit text-[.5rem]"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-md me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
        &lt;a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-warning avatar-badge"&gt;&lt;i class="fe fe-plus text-[.5rem]"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-lg me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
        &lt;a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-info avatar-badge"&gt;&lt;i class="fe fe-edit text-[.625rem]"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xl me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
        &lt;a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-success avatar-badge"&gt;&lt;i class="fe fe-camera text-[.625rem]"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xxl me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img"&gt;
        &lt;a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-danger avatar-badge"&gt;&lt;i class="fe fe-plus text-[.625rem]"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Avatar With Online Status Indicators
                                        <p class="subtitle text-muted text-[0.75rem] font-normal normal-case">
                                            avatars having online status indicator.
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="avatar avatar-xs me-2 online avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm online me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-md me-2 online avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-lg me-2 online avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-xl me-2 online avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-xxl me-2 online avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                    </span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-sm online me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-md me-2 online avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-lg me-2 online avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xl me-2 online avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xxl me-2 online avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
    &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Avatar With Ofline Status Indicators
                                        <p class="subtitle text-muted text-[0.75rem] font-normal normal-case">
                                            avatars having a offline status indicator.
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="avatar avatar-xs me-2 offline avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm offline me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-md me-2 offline avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-lg me-2 offline avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-xl me-2 offline avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-xxl me-2 offline avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                    </span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 offline avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-sm offline me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-md me-2 offline avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-lg me-2 offline avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xl me-2 offline avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xxl me-2 offline avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img"&gt;
    &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Avatars With Number Badges
                                        <p class="subtitle text-muted text-[0.75rem] font-normal normal-case">
                                            Avatar numbers indicates the no. of unread notififactions/messages.
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="avatar avatar-xs me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        <span class="badge rounded-full bg-primary avatar-badge">2</span>
                                    </span>
                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        <span class="badge rounded-full bg-secondary avatar-badge">5</span>
                                    </span>
                                    <span class="avatar avatar-md me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                        <span class="badge rounded-full bg-warning avatar-badge">1</span>
                                    </span>
                                    <span class="avatar avatar-lg me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        <span class="badge rounded-full bg-info avatar-badge">7</span>
                                    </span>
                                    <span class="avatar avatar-xl me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        <span class="badge rounded-full bg-success avatar-badge">3</span>
                                    </span>
                                    <span class="avatar avatar-xxl me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                        <span class="badge rounded-full bg-danger avatar-badge">9</span>
                                    </span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html"> &lt;span class="avatar avatar-xs me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
        &lt;span class="badge rounded-full bg-primary avatar-badge"&gt;2&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-sm me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
        &lt;span class="badge rounded-full bg-secondary avatar-badge"&gt;5&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-md me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
        &lt;span class="badge rounded-full bg-warning avatar-badge"&gt;1&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-lg me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
        &lt;span class="badge rounded-full bg-info avatar-badge"&gt;7&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xl me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
        &lt;span class="badge rounded-full bg-success avatar-badge"&gt;3&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-xxl me-2 avatar-rounded"&gt;
        &lt;img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img"&gt;
        &lt;span class="badge rounded-full bg-danger avatar-badge"&gt;9&lt;/span&gt;
    &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Avatar With Initials
                                        <p class="subtitle text-muted text-[0.75rem] font-normal normal-case">
                                            Avatar contains intials when user profile doesn't exist.
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="avatar avatar-xs me-2 bg-primary">
                                        xs
                                    </span>
                                    <span class="avatar avatar-sm me-2 bg-secondary">
                                        SM
                                    </span>
                                    <span class="avatar avatar-md me-2 bg-warning">
                                        MD
                                    </span>
                                    <span class="avatar avatar-lg me-2 bg-danger">
                                        LG
                                    </span>
                                    <span class="avatar avatar-xl me-2 bg-success">
                                        XL
                                    </span>
                                    <span class="avatar avatar-xxl me-2 bg-info">
                                        XXL
                                    </span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 bg-primary"&gt;
        xs
    &lt;/span&gt;
    &lt;span class="avatar avatar-sm me-2 bg-secondary"&gt;
        SM
    &lt;/span&gt;
    &lt;span class="avatar avatar-md me-2 bg-warning"&gt;
        MD
    &lt;/span&gt;
    &lt;span class="avatar avatar-lg me-2 bg-danger"&gt;
        LG
    &lt;/span&gt;
    &lt;span class="avatar avatar-xl me-2 bg-success"&gt;
        XL
    &lt;/span&gt;
    &lt;span class="avatar avatar-xxl me-2 bg-info"&gt;
        XXL
    &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-6 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Stacked Avatars
                                        <p class="subtitle text-muted text-[0.75rem] font-normal normal-case">
                                            Group of avatars stacked together.
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                        <span class="avatar">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar bg-primary text-white" href="javascript:void(0);">
                                            +8
                                        </a>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="avatar-list-stacked"&gt;
            &lt;span class="avatar"&gt;
                &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar"&gt;
                &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar"&gt;
                &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar"&gt;
                &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar"&gt;
                &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar"&gt;
                &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;a class="avatar bg-primary text-white" href="javascript:void(0);"&gt;
                +8
            &lt;/a&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Rounded Stacked Avatars
                                        <p class="subtitle text-muted text-[0.75rem] font-normal normal-case">
                                            Group of avatars stacked together.
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                        <span class="avatar avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar bg-primary avatar-rounded text-white" href="javascript:void(0);">
                                            +8
                                        </a>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="avatar-list-stacked"&gt;
            &lt;span class="avatar avatar-rounded"&gt;
                &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar avatar-rounded"&gt;
                &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar avatar-rounded"&gt;
                &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar avatar-rounded"&gt;
                &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar avatar-rounded"&gt;
                &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;span class="avatar avatar-rounded"&gt;
                &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
            &lt;/span&gt;
            &lt;a class="avatar bg-primary avatar-rounded text-white" href="javascript:void(0);"&gt;
                +8
            &lt;/a&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                            <div class="box-header flex justify-between">
                            <h5 class="box-title ">
                                Avatars Stack
                            </h5>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                            <div class="grid gap-5 sm:items-end">
                                <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                    <img class="avatar avatar-xs avatar-rounded" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-xs avatar-rounded" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-xs avatar-rounded" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-xs avatar-rounded" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                </div>
                                <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                    <img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                </div>
                                <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                    <img class="avatar avatar-rounded" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-rounded" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-rounded" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-rounded" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                </div>
                                <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                    <img class="avatar avatar-lg avatar-rounded" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-lg avatar-rounded" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-lg avatar-rounded" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                    <img class="avatar avatar-lg avatar-rounded" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                </div>
                            </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="grid gap-5 sm:items-end"&gt;
            &lt;div class="flex -space-x-2 rtl:space-x-reverse"&gt;
                &lt;img class="avatar avatar-xs avatar-rounded" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-xs avatar-rounded" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-xs avatar-rounded" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-xs avatar-rounded" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
            &lt;/div&gt;
            &lt;div class="flex -space-x-2 rtl:space-x-reverse"&gt;
                &lt;img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
            &lt;/div&gt;
            &lt;div class="flex -space-x-2 rtl:space-x-reverse"&gt;
                &lt;img class="avatar avatar-rounded" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-rounded" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-rounded" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-rounded" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
            &lt;/div&gt;
            &lt;div class="flex -space-x-2 rtl:space-x-reverse"&gt;
                &lt;img class="avatar avatar-lg avatar-rounded" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-lg avatar-rounded" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-lg avatar-rounded" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
                &lt;img class="avatar avatar-lg avatar-rounded" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                                            </div>
                        </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                            <div class="box-header flex justify-between">
                            <h5 class="box-title">
                                Avatars Stack With Tooltip
                            </h5>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                            <div class="grid gap-5 sm:items-end">
                                <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                </div>
                                <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-sm rounded-full" src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-sm rounded-full" src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-sm rounded-full" src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-sm rounded-full" src="{{asset('build/assets/images/faces/16.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                </div>
                                <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar rounded-full" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar rounded-full" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar rounded-full" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                </div>
                                <div class="avatar-list-stacked hidden sm:flex -space-x-2 rtl:space-x-reverse">
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-lg rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-lg rounded-full" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-lg rounded-full" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                <div class="hs-tooltip inline-block">
                                    <a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);">
                                    <img class="avatar avatar-lg rounded-full" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                    <div
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                                        role="tooltip">
                                        Maria Wanner
                                    </div>
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="grid gap-5 sm:items-end"&gt;
            &lt;div class="flex -space-x-2 rtl:space-x-reverse"&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-xs rounded-full" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex -space-x-2 rtl:space-x-reverse"&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-sm rounded-full" src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-sm rounded-full" src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-sm rounded-full" src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-sm rounded-full" src="{{asset('build/assets/images/faces/16.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex -space-x-2 rtl:space-x-reverse"&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar rounded-full" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar rounded-full" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar rounded-full" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="hidden sm:flex -space-x-2 rtl:space-x-reverse"&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-lg rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-lg rounded-full" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-lg rounded-full" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="hs-tooltip inline-block"&gt;
                &lt;a class="hs-tooltip-toggle relative inline-block" href="javascript:void(0);"&gt;
                &lt;img class="avatar avatar-lg rounded-full" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
                &lt;div
                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-sm shadow-sm dark:bg-slate-700"
                    role="tooltip"&gt;
                    Maria Wanner
                &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                                                                        </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-4-->

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header flex justify-between">
                            <h5 class="box-title">
                                Avatars Grid
                            </h5>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                            <div class="grid gap-10 sm:items-end">
                                <div class="grid xxl:!grid-cols-8 md:!grid-cols-11 sm:grid-cols-7 grid-cols-4 gap-4">
                                <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description">
                                <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Image Description">
                                <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image Description">
                                    <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/16.jpg')}}" alt="Image Description">
                                    <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/17.jpg')}}" alt="Image Description">
                                    <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                    <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                    <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description">
                                    <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Image Description">
                                    <img
                                    class="avatar rounded-full"
                                    src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image Description">
                                <span
                                    class="inline-flex items-center justify-center h-[2.875rem] w-[2.875rem] rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                    <span class="font-medium text-gray-500 leading-none dark:text-white/70">9+</span>
                                </span>
                                </div>
                            </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="grid gap-10 sm:items-end"&gt;
            &lt;div class="grid xxl:!grid-cols-8 md:!grid-cols-11 sm:grid-cols-7 grid-cols-4 gap-4"&gt;
                &lt;img
                class="avatar rounded-full"
                src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
                &lt;img
                class="avatar rounded-full"
                src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description"&gt;
                &lt;img
                class="avatar rounded-full"
                src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
                &lt;img
                class="avatar rounded-full"
                src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
                &lt;img
                class="avatar rounded-full"
                src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description"&gt;
                &lt;img
                class="avatar rounded-full"
                src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Image Description"&gt;
                &lt;img
                class="avatar rounded-full"
                src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image Description"&gt;
                &lt;img
                    class="avatar rounded-full"
                    src="{{asset('build/assets/images/faces/16.jpg')}}" alt="Image Description"&gt;
                &lt;img
                    class="avatar rounded-full"
                    src="{{asset('build/assets/images/faces/17.jpg')}}" alt="Image Description"&gt;
                &lt;img
                    class="avatar rounded-full"
                    src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
                &lt;img
                    class="avatar rounded-full"
                    src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
                &lt;img
                    class="avatar rounded-full"
                    src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description"&gt;
                &lt;img
                    class="avatar rounded-full"
                    src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Image Description"&gt;
                &lt;img
                    class="avatar rounded-full"
                    src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image Description"&gt;
                &lt;span
                class="inline-flex items-center justify-center h-[2.875rem] w-[2.875rem] rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10"&gt;
                &lt;span class="font-medium text-gray-500 leading-none dark:text-white/70"&gt;9+&lt;/span&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                                                                        </div>
                        </div>
                        </div>
                        <div class="col-span-12 xxl:col-span-3">
                        <div class="box">
                            <div class="box-header flex justify-between">
                            <h5 class="box-title">
                                Avatars Bordered
                            </h5>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                            <div class="avatar-list-stacked flex flex-wrap -space-x-2 rtl:space-x-reverse">
                                <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description">
                                <img class="hidden sm:inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Image Description">
                                <img class="hidden sm:inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image Description">
                            </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="flex -space-x-2 rtl:space-x-reverse"&gt;
            &lt;img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"&gt;
            &lt;img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description"&gt;
            &lt;img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"&gt;
            &lt;img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"&gt;
            &lt;img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description"&gt;
            &lt;img class="hidden sm:inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Image Description"&gt;
            &lt;img class="hidden sm:inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image Description"&gt;
            &lt;img class="hidden sm:inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/16.jpg')}}" alt="Image Description"&gt;
            &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                                                                                                    </div>
                        </div>
                        </div>
                        <div class="col-span-12 xxl:col-span-3">
                        <div class="box">
                            <div class="box-header flex justify-between">
                            <h5 class="box-title">
                                Avatars With Dropdown
                            </h5>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                            <div class="avatar-list-stacked flex -space-x-2 rtl:space-x-reverse">
                                <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Image Description">
                                <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Image Description">
                                <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/4.jpg')}}" alt="Image Description">
                                <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Image Description">
                                <div class="hs-dropdown relative inline-flex" data-hs-dropdown-placement="top-left">
                                <button type="button" id="hs-dropdown-avatar-more" class="hs-dropdown-toggle inline-flex items-center justify-center h-[2.875rem] w-[2.875rem] rounded-full bg-gray-200 border-2 border-white font-medium text-gray-700 shadow-sm align-middle hover:bg-gray-300 focus:outline-none focus:bg-primary focus:text-white focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:bg-primary dark:focus:text-white dark:focus:ring-offset-white/10">
                                    <span class="font-medium leading-none">9+</span>
                                </button>
                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-72 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mb-2 min-w-[15rem] bg-white shadow-md rounded-sm p-2 dark:bg-bodybg dark:border dark:border-white/10 dark:divide-white/10">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                    Chris Lynch
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                    Maria Guan
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                    Amil Evara
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);">
                                    Ebele Egbuna
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
                                <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="flex -space-x-2 rtl:space-x-reverse"&gt;
            &lt;img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Image Description"&gt;
            &lt;img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Image Description"&gt;
            &lt;img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/4.jpg')}}" alt="Image Description"&gt;
            &lt;img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full ring-2 ring-white dark:ring-bodybg" src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Image Description"&gt;
            &lt;div class="hs-dropdown relative inline-flex" data-hs-dropdown-placement="top-left"&gt;
                &lt;button type="button" id="hs-dropdown-avatar-more" class="hs-dropdown-toggle inline-flex items-center justify-center h-[2.875rem] w-[2.875rem] rounded-full bg-gray-200 border-2 border-white font-medium text-gray-700 shadow-sm align-middle hover:bg-gray-300 focus:outline-none focus:bg-primary focus:text-white focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:bg-primary dark:focus:text-white dark:focus:ring-offset-white/10"&gt;
                &lt;span class="font-medium leading-none"&gt;9+&lt;/span&gt;
                &lt;/button&gt;
                &lt;div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-72 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mb-2 min-w-[15rem] bg-white shadow-md rounded-sm p-2 dark:bg-bodybg dark:border dark:border-white/10 dark:divide-white/10"&gt;
                &lt;a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);"&gt;
                    Chris Lynch
                &lt;/a&gt;
                &lt;a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);"&gt;
                    Maria Guan
                &lt;/a&gt;
                &lt;a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);"&gt;
                    Amil Evara
                &lt;/a&gt;
                &lt;a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300" href="javascript:void(0);"&gt;
                    Ebele Egbuna
                &lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header flex justify-between">
                            <h5 class="box-title">
                                Placeholder initials With Solid color variants
                            </h5>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-primary font-semibold text-white leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-secondary font-semibold text-white leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-danger font-semibold text-white leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-warning font-semibold text-white leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-info font-semibold text-white leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-success font-semibold text-white leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-gray-100 font-semibold text-gray-600 leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-black dark:bg-gray-900 text-white font-semibold leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            </div>
                            <div class="box-footer hidden !border-t-0">
                <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-primary font-semibold text-white leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-secondary font-semibold text-white leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-danger font-semibold text-white leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-warning font-semibold text-white leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-info font-semibold text-white leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-success font-semibold text-white leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-gray-100 font-semibold text-gray-600 leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-black dark:bg-gray-900 text-white font-semibold leading-none"&gt;
            AC
            &lt;/span&gt;</code></pre>
                <!-- Prism Code -->
                                                                                                                                                </div>
                        </div>
                        </div>
                        <div class="col-span-12 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header flex justify-between">
                            <h5 class="box-title">
                                Placeholder initials With Soft color variants
                            </h5>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-primary/10 font-semibold text-primary leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-secondary/10 font-semibold text-secondary leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-danger/10 font-semibold text-danger leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-warning/10 font-semibold text-warning leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-info/10 font-semibold text-info leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-success/10 font-semibold text-success leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-gray-100 dark:bg-gray-100/10 font-semibold text-gray-600 dark:text-white leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-gray-800/[.1] text-gray-600 dark:bg-gray-900/[.1]  dark:text-white font-semibold leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-primary/10 font-semibold text-primary leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-secondary/10 font-semibold text-secondary leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-danger/10 font-semibold text-danger leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-warning/10 font-semibold text-warning leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-info/10 font-semibold text-info leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-success/10 font-semibold text-success leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-gray-100/10 font-semibold text-gray-600 dark:text-white leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-gray-800/[.1] text-gray-600 dark:bg-gray-900/[.1]  dark:text-white font-semibold leading-none"&gt;
            AC
            &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                                                                                                                                </div>
                        </div>
                        </div>
                        <div class="col-span-12 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header flex justify-between">
                            <h5 class="box-title">
                                Placeholder initials With Outline color variants
                            </h5>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-primary font-semibold text-primary leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-secondary font-semibold text-secondary leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-danger font-semibold text-danger leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-warning font-semibold text-warning leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-info font-semibold text-info leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-success font-semibold text-success leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-gray-200 dark:border-white/10 text-gray-600 dark:text-white/70 font-semibold leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-gray-900 text-gray-900 dark:border-white/10 dark:text-gray-100 font-semibold leading-none mb-2 sm:mb-0">
                                AC
                            </span>
                            </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-primary font-semibold text-primary leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-secondary font-semibold text-secondary leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-danger font-semibold text-danger leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-warning font-semibold text-warning leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-info font-semibold text-info leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-success font-semibold text-success leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-gray-200 dark:border-white/10 text-gray-600 dark:text-white/70 font-semibold leading-none"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white dark:bg-bodybg border border-gray-900 text-gray-900 dark:border-white/10 dark:text-gray-100 font-semibold leading-none"&gt;
            AC
            &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                                                                                                                                </div>
                        </div>
                        </div>
                        <div class="col-span-12 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header flex justify-between">
                            <h5 class="box-title">
                            Placeholder Initials with White color variants
                            </h5>
                            <div class="prism-toggle">
                                <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body space-x-2 rtl:space-x-reverse sm:space-x-6 last:xl:space-x-0">
                            <span class="inline-flex items-center justify-center size-8 text-xs font-semibold rounded-full leading-none border border-gray-200 bg-white text-gray-800 shadow-sm dark:bg-bodybg dark:border-white/10 dark:text-white">
                                AC
                            </span>
            
                            <span class="inline-flex items-center justify-center size-[38px] text-sm font-semibold rounded-full leading-none border border-gray-200 bg-white text-gray-800 shadow-sm dark:bg-bodybg dark:border-white/10 dark:text-white">
                                AC
                            </span>
                            <span class="inline-flex items-center justify-center size-[46px] text-sm font-semibold rounded-full leading-none border border-gray-200 bg-white text-gray-800 shadow-sm dark:bg-bodybg dark:border-white/10 dark:text-white">
                                AC
                            </span>
            
                            <span class="inline-flex items-center justify-center size-[62px] font-semibold rounded-full leading-none border border-gray-200 bg-white text-gray-800 shadow-sm dark:bg-bodybg dark:border-white/10 dark:text-white">
                                AC
                            </span>
                            </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;span class="inline-flex items-center justify-center size-8 text-xs font-semibold rounded-full leading-none border border-gray-200 bg-white text-gray-800 shadow-sm dark:bg-bodybg dark:border-white/10 dark:text-white"&gt;
            AC
            &lt;/span&gt;

            &lt;span class="inline-flex items-center justify-center size-[38px] text-sm font-semibold rounded-full leading-none border border-gray-200 bg-white text-gray-800 shadow-sm dark:bg-bodybg dark:border-white/10 dark:text-white"&gt;
            AC
            &lt;/span&gt;
            &lt;span class="inline-flex items-center justify-center size-[46px] text-sm font-semibold rounded-full leading-none border border-gray-200 bg-white text-gray-800 shadow-sm dark:bg-bodybg dark:border-white/10 dark:text-white"&gt;
            AC
            &lt;/span&gt;

            &lt;span class="inline-flex items-center justify-center size-[62px] font-semibold rounded-full leading-none border border-gray-200 bg-white text-gray-800 shadow-sm dark:bg-bodybg dark:border-white/10 dark:text-white"&gt;
            AC
            &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
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
