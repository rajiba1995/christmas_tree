
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">List group</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">List group 
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
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Basic List
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Alicia Sierra
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Samantha Mery
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Juliana Pena
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Adam Smith
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Farhaan Amhed
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group"&gt;
&lt;li class="ti-list-group-item"&gt;
    &lt;div class="flex items-center"&gt;
        &lt;span class="avatar avatar-sm"&gt;
            &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img" class="!rounded-md"&gt;
        &lt;/span&gt;
        &lt;div class="ms-2 font-semibold"&gt;
            Alicia Sierra
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/li&gt;
&lt;li class="ti-list-group-item"&gt;
    &lt;div class="flex items-center"&gt;
        &lt;span class="avatar avatar-sm"&gt;
            &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img" class="!rounded-md"&gt;
        &lt;/span&gt;
        &lt;div class="ms-2 font-semibold"&gt;
            Samantha Mery
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/li&gt;
&lt;li class="ti-list-group-item"&gt;
    &lt;div class="flex items-center"&gt;
        &lt;span class="avatar avatar-sm"&gt;
            &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"class="!rounded-md"&gt;
        &lt;/span&gt;
        &lt;div class="ms-2 font-semibold"&gt;
            Juliana Pena
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/li&gt;
&lt;li class="ti-list-group-item"&gt;
    &lt;div class="flex items-center"&gt;
        &lt;span class="avatar avatar-sm"&gt;
            &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"class="!rounded-md"&gt;
        &lt;/span&gt;
        &lt;div class="ms-2 font-semibold"&gt;
            Adam Smith
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/li&gt;
&lt;li class="ti-list-group-item"&gt;
    &lt;div class="flex items-center"&gt;
        &lt;span class="avatar avatar-sm"&gt;
            &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"class="!rounded-md"&gt;
        &lt;/span&gt;
        &lt;div class="ms-2 font-semibold"&gt;
            Farhaan Amhed
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Active items
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item active" aria-current="true">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-house-door"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Home
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-bell"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Notifications
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-gift"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Sent Messages
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-person"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    New Requests
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-trash3"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Deleted Messages
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group"&gt;
        &lt;li class="ti-list-group-item active" aria-current="true"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-house-door"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    Home
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-bell"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    Notifications
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-gift"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    Sent Messages
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-person"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    New Requests
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-trash3"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    Deleted Messages
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Disabled items
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item disabled" aria-disabled="true">A disabled item meant to be disabled
                                        </li>
                                        <li class="ti-list-group-item">Simply dummy text of the printing</li>
                                        <li class="ti-list-group-item">There are many variations of passages</li>
                                        <li class="ti-list-group-item">All the Lorem Ipsum generators</li>
                                        <li class="ti-list-group-item">Written in 45 BC. This book is a treatise on the theory</li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group"&gt;
    &lt;li class="ti-list-group-item disabled" aria-disabled="true"&gt;A disabled item meant to be disabled
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Simply dummy text of the printing&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;There are many variations of passages&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;All the Lorem Ipsum generators&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory&lt;/li&gt;
&lt;/ul&gt;</code></pre>
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
                                        Flush
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group ti-list-group-flush">
                                        <li class="ti-list-group-item !!border-t-0 !border-l-0 !border-r-0 font-semibold"><i class="bi bi-envelope align-middle me-2 text-[#8c9097]"></i>Asish Trivedhi<span class="ms-1 text-[#8c9097] font-normal d-inline-block">(+1023-84534)</span></li>
                                        <li class="ti-list-group-item !border-l-0 !border-r-0  font-semibold"><i class="bi bi-tiktok align-middle me-2 text-[#8c9097]"></i>Alezander Russo<span class="ms-1 text-[#8c9097] font-normal d-inline-block">(+7546-12342)</span></li>
                                        <li class="ti-list-group-item !border-l-0 !border-r-0  font-semibold"><i class="bi bi-whatsapp align-middle me-2 text-[#8c9097]"></i>Karem Smith<span class="ms-1 text-[#8c9097] font-normal d-inline-block">(+9944-56632)</span></li>
                                        <li class="ti-list-group-item !border-l-0 !border-r-0  font-semibold"><i class="bi bi-facebook align-middle me-2 text-[#8c9097]"></i>Melissa Brien<span class="ms-1 text-[#8c9097] font-normal d-inline-block">(+1023-34323)</span></li>
                                        <li class="ti-list-group-item !border-l-0 !border-r-0 !border-b-0  font-semibold"><i class="bi bi-instagram align-middle me-2 text-[#8c9097]"></i>Kamala Harris<span class="ms-1 text-[#8c9097] font-normal d-inline-block">(+91-63421)</span></li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group ti-list-group-flush"&gt;
    &lt;li class="ti-list-group-item !!border-t-0 !border-l-0 !border-r-0 font-semibold"&gt;&lt;i class="bi bi-envelope align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Asish Trivedhi&lt;span class="ms-1 text-[#8c9097] font-normal d-inline-block"&gt;(+1023-84534)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="ti-list-group-item !border-l-0 !border-r-0 font-semibold"&gt;&lt;i class="bi bi-tiktok align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Alezander Russo&lt;span class="ms-1 text-[#8c9097] font-normal d-inline-block"&gt;(+7546-12342)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="ti-list-group-item !border-l-0 !border-r-0 font-semibold"&gt;&lt;i class="bi bi-whatsapp align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Karem Smith&lt;span class="ms-1 text-[#8c9097] font-normal d-inline-block"&gt;(+9944-56632)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="ti-list-group-item !border-l-0 !border-r-0 font-semibold"&gt;&lt;i class="bi bi-facebook align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Melissa Brien&lt;span class="ms-1 text-[#8c9097] font-normal d-inline-block"&gt;(+1023-34323)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="ti-list-group-item !border-l-0 !border-r-0 font-semibold"&gt;&lt;i class="bi bi-instagram align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Kamala Harris&lt;span class="ms-1 text-[#8c9097] font-normal d-inline-block"&gt;(+91-63421)&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Links
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-list-group">
                                        <ul class="list-none">
                                        <li class="ti-list-group-item ti-list-group-item-action active">
                                        <a href="javascript:void(0);" 
                                            aria-current="true">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-white dark:bg-bodybg !text-defaulttextcolor avatar-rounded">
                                                        C
                                                    </span>
                                                </div>
                                                <div class="ms-2">California</div>
                                            </div>
                                        </a>
                                        </li>
                                        <li class="ti-list-group-item ti-list-group-item-action hover:bg-gray-200 dark:hover:bg-light">
                                            <a href="javascript:void(0);" class="">
                                                <div class="flex items-center">
                                                    <div>
                                                        <span class="avatar avatar-xs bg-secondary text-white avatar-rounded">
                                                            N
                                                        </span>
                                                    </div>
                                                    <div class="ms-2">New Jersey</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item ti-list-group-item-action hover:bg-gray-200 dark:hover:bg-light">
                                            <a href="javascript:void(0);" class="">
                                                <div class="flex items-center">
                                                    <div>
                                                        <span class="avatar avatar-xs bg-info text-white avatar-rounded">
                                                            L
                                                        </span>
                                                    </div>
                                                    <div class="ms-2">Los Angeles</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item ti-list-group-item-action hover:bg-gray-200 dark:hover:bg-light">
                                            <a href="javascript:void(0);" class="">
                                                <div class="flex items-center">
                                                    <div>
                                                        <span class="avatar avatar-xs bg-warning text-white avatar-rounded">
                                                            M
                                                        </span>
                                                    </div>
                                                    <div class="ms-2">Miami Florida</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item ti-list-group-item-action disabled">
                                            <a class=" ">
                                                <div class="flex items-center">
                                                    <div>
                                                        <span class="avatar avatar-xs bg-success text-white avatar-rounded">
                                                            W
                                                        </span>
                                                    </div>
                                                    <div class="ms-2">Washington D.C</div>
                                                </div>
                                            </a>
                                        </li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="ti-list-group"&gt;
    &lt;a href="javascript:void(0);" class="ti-list-group-item ti-list-group-item-action active"
        aria-current="true"&gt;
        &lt;div class="flex items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-white text-default avatar-rounded"&gt;
                    C
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;California&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="ti-list-group-item ti-list-group-item-action"&gt;
        &lt;div class="flex items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-secondary avatar-rounded"&gt;
                    N
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;New Jersey&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="ti-list-group-item ti-list-group-item-action"&gt;
        &lt;div class="flex items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-info avatar-rounded"&gt;
                    L
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Los Angeles&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="ti-list-group-item ti-list-group-item-action"&gt;
        &lt;div class="flex items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-warning avatar-rounded"&gt;
                    M
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Miami Florida&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a class="ti-list-group-item ti-list-group-item-action disabled"&gt;
        &lt;div class="flex items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-success avatar-rounded"&gt;
                    W
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Washington D.C&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-list-group flex flex-col">
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action active" aria-current="true">Simply dummy text of the printing<span class="badge float-right rtl:float-left bg-primary text-white">243</span></button>
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action">There are many variations of passages<span class="badge float-right rtl:float-left bg-secondary/10 text-secondary">35</span></button>
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action">All the Lorem Ipsum generators<span class="badge float-right rtl:float-left bg-info/10 text-info">132</span></button>
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action">All the Lorem Ipsum generators<span class="badge float-right rtl:float-left bg-success/10 text-success">2525</span></button>
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action" disabled>A disabled item meant to be disabled<span class="badge float-right rtl:float-left bg-danger/10 text-danger">21</span></button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="ti-list-group"&gt;
    &lt;button type="button" class="ti-list-group-item ti-list-group-item-action active" aria-current="true"&gt;Simply dummy text of the printing&lt;span class="badge float-end bg-primary"&gt;243&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="ti-list-group-item ti-list-group-item-action"&gt;There are many variations of passages&lt;span class="badge float-end bg-secondary/10"&gt;35&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="ti-list-group-item ti-list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge float-end bg-info/10"&gt;132&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="ti-list-group-item ti-list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge float-end bg-success/10"&gt;2525&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="ti-list-group-item ti-list-group-item-action" disabled&gt;A disabled item meant to be disabled&lt;span class="badge float-end bg-danger/10"&gt;21&lt;/span&gt;&lt;/button&gt;
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
                                    <div class="box-title">
                                        Contextual classes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item">A simple default list group item</li>

                                        <li class="ti-list-group-item !bg-primary/10 !text-primary">A simple primary list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-secondary/10 !text-secondary">A simple secondary
                                            list
                                            group item</li>
                                        <li class="ti-list-group-item !bg-success/10 !text-success">A simple success list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-danger/10 !text-danger">A simple danger list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-warning/10 !text-warning">A simple warning list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-info/10 !text-info">A simple info list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-light/10 !text-defaulttextcolor">A simple light list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-black/10 dark:!bg-light !text-defaulttextcolor">A simple dark list group
                                            item
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group"&gt;
    &lt;li class="ti-list-group-item"&gt;A simple default list group item&lt;/li&gt;

    &lt;li class="ti-list-group-item !bg-primary/10 !text-primary"&gt;A simple primary list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-secondary/10 !text-secondary"&gt;A simple secondary
        list
        group item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-success/10 !text-success"&gt;A simple success list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-danger/10 !text-danger"&gt;A simple danger list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-warning/10 !text-warning"&gt;A simple warning list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-info/10 !text-info"&gt;A simple info list group
        item
    &lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-light/10 !text-defaulttextcolor"&gt;A simple light list group
        item
    &lt;/li&gt;
    &lt;li class="ti-list-group-item! bg-black/10 dark:!bg-light !text-defaulttextcolor"&gt;A simple dark list group
        item
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Contextual classes With Hover Styles
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item">A simple default list group item</li>

                                        <li class="ti-list-group-item !bg-primary/10 !text-primary hover:!bg-primary/20">A simple primary list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-secondary/10 !text-secondar hover:!bg-secondary/20">A simple secondary
                                            list
                                            group item</li>
                                        <li class="ti-list-group-item !bg-success/10 !text-success hover:!bg-success/20">A simple success list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-danger/10 !text-danger hover:!bg-danger/20">A simple danger list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-warning/10 !text-warning hover:!bg-warning/20">A simple warning list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-info/10 !text-info hover:!bg-info/20">A simple info list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-light/10 !text-defaulttextcolor hover:!bg-light/20">A simple light list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-black/10 dark:!bg-light !text-defaulttextcolor hover:!bg-black/20">A simple dark list group
                                            item
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group"&gt;
    &lt;li class="ti-list-group-item"&gt;A simple default list group item&lt;/li&gt;

    &lt;li class="ti-list-group-item !bg-primary/10 !text-primary !hover:bg-primary/20"&gt;A simple primary list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item  !bg-secondary/10 !text-secondar hover:bg-secondary/20"&gt;A simple secondary
        list
        group item&lt;/li&gt;
    &lt;li class="ti-list-group-item  !bg-success/10 !text-success hover:bg-success/20"&gt;A simple success list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-danger/10 !text-danger hover:bg-danger/20"&gt;A simple danger list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-warning/10 !text-warning hover:bg-warning/20"&gt;A simple warning list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-info/10 !text-info hover:bg-info/20"&gt;A simple info list group
        item
    &lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-light/10 !text-defaulttextcolor hover:bg-light/20"&gt;A simple light list group
        item
    &lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-black/10 dark:!bg-light !text-defaulttextcolor hover:bg-black/20"&gt;A simple dark list group
        item
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
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
                                        Solid Colored Lists
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group ">
                                        <li class="ti-list-group-item">A simple default list group item</li>

                                        <li class="ti-list-group-item !bg-primary !text-white !border-primary">A simple primary list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-secondary !text-white !border-secondary">A simple secondary
                                            list
                                            group item</li>
                                        <li class="ti-list-group-item !bg-success !text-white !border-success">A simple success list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-danger !text-white !border-danger">A simple danger list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-warning !text-white !border-warning">A simple warning list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-info !text-white !border-info">A simple info list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-light !border-light">A simple light list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-black dark:!bg-white dark:!text-black !text-white !border-black">A simple dark list group
                                            item
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group"&gt;
    &lt;li class="ti-list-group-item"&gt;A simple default list group item&lt;/li&gt;

    &lt;li class="ti-list-group-item  !bg-primary !text-white !border-primary"&gt;A simple primary list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-secondary !text-white !border-secondary"&gt;A simple secondary
        list
        group item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-success !text-white !border-success"&gt;A simple success list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-danger !text-white !border-danger"&gt;A simple danger list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-warning !text-white !border-warning"&gt;A simple warning list
        group
        item&lt;/li&gt;
    &lt;li class="ti-list-group-item  !bg-info !text-white !border-info"&gt;A simple info list group
        item
    &lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-light !border-light"&gt;A simple light list group
        item
    &lt;/li&gt;
    &lt;li class="ti-list-group-item !bg-black dark:!bg-white dark:!text-black !text-white !border-black"&gt;A simple dark list group
        item
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Custom content
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-list-group">
                                        <ul class="list-none">
                                            <li class="ti-list-group-item ti-list-group-item-action active">
                                                <a href="javascript:void(0);" 
                                                aria-current="true">
                                                <div class="sm:flex w-full justify-between">
                                                    <h6 class="mb-1 font-semibold">Web page editors now use Lorem Ipsum?</h6>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                <small>24,Nov 2022.</small>
                                               </a>
                                            </li>
                                            <li class="ti-list-group-item ti-list-group-item-action ">
                                                <a href="javascript:void(0);">
                                                    <div class="flex w-full justify-between">
                                                        <h6 class="mb-1 font-semibold">Richard McClintock, a Latin professor?</h6>
                                                        <small class="text-[#8c9097]">4 hrs ago</small>
                                                    </div>
                                                    <p class="mb-1">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                                    <small class="text-[#8c9097]">30,Nov 2022.</small>
                                                </a>
                                            </li>
                                            <li class="ti-list-group-item ti-list-group-item-action ">
                                                <a href="javascript:void(0);">
                                                    <div class="sm:flex w-full justify-between">
                                                        <h6 class="mb-1 font-semibold">It uses a dictionary of over 200 Latin words?</h6>
                                                        <small class="text-[#8c9097]">15 hrs ago</small>
                                                    </div>
                                                    <p class="mb-1">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                    <small class="text-[#8c9097]">4,Nov 2022.</small>
                                                </a>
                                            </li>
                                            <li class="ti-list-group-item ti-list-group-item-action ">
                                                <a href="javascript:void(0);">
                                                    <div class="sm:flex w-full justify-between">
                                                        <h6 class="mb-1 font-semibold">The standard Lorem Ipsum used since the 1500s?</h6>
                                                        <small class="text-[#8c9097]">45 mins ago</small>
                                                    </div>
                                                    <p class="mb-1">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                    <small class="text-[#8c9097]">28,Oct 2022.</small>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="ti-list-group"&gt;
    &lt;a href="javascript:void(0);" class="ti-list-group-item ti-list-group-item-action active"
        aria-current="true"&gt;
        &lt;div class="flexw-full justify-between"&gt;
            &lt;h6 class="mb-1 font-semibold"&gt;Web page editors now use Lorem Ipsum?&lt;/h6&gt;
            &lt;small&gt;3 days ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.&lt;/p&gt;
        &lt;small&gt;24,Nov 2022.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="ti-list-group-item ti-list-group-item-action"&gt;
        &lt;div class="flexw-full justify-between"&gt;
            &lt;h6 class="mb-1 font-semibold"&gt;Richard McClintock, a Latin professor?&lt;/h6&gt;
            &lt;small class="text-[#8c9097]"&gt;4 hrs ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.&lt;/p&gt;
        &lt;small class="text-[#8c9097]"&gt;30,Nov 2022.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="ti-list-group-item ti-list-group-item-action"&gt;
        &lt;div class="flexw-full justify-between"&gt;
            &lt;h6 class="mb-1 font-semibold"&gt;It uses a dictionary of over 200 Latin words?&lt;/h6&gt;
            &lt;small class="text-[#8c9097]"&gt;15 hrs ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.&lt;/p&gt;
        &lt;small class="text-[#8c9097]"&gt;4,Nov 2022.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="ti-list-group-item ti-list-group-item-action"&gt;
        &lt;div class="flexw-full justify-between"&gt;
            &lt;h6 class="mb-1 font-semibold"&gt;The standard Lorem Ipsum used since the 1500s?&lt;/h6&gt;
            &lt;small class="text-[#8c9097]"&gt;45 mins ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.&lt;/p&gt;
        &lt;small class="text-[#8c9097]"&gt;28,Oct 2022.&lt;/small&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box text-defaulttextcolor text-defaultsize">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Sub headings
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ol class="ti-list-group !list-decimal">
                                        <li class="ti-list-group-item flex justify-between align-items-start">
                                            <div class="ms-2 me-auto text-[#8c9097]">
                                                <div class="font-semibold text-[.875rem] !text-defaulttextcolor">What Happened?</div>
                                                Many experts have recently suggested may exist.
                                            </div>
                                            
                                        </li>
                                        <li class="ti-list-group-item flex justify-between align-items-start">
                                            <div class="ms-2 me-auto text-[#8c9097]">
                                                <div class="font-semibold text-[.875rem] !text-defaulttextcolor">It Was Amazing!</div>
                                                His idea involved taking red.
                                            </div>
                                            
                                        </li>
                                        <li class="ti-list-group-item flex justify-between align-items-start">
                                            <div class="ms-2 me-auto text-[#8c9097]">
                                                <div class="font-semibold text-[.875rem] !text-defaulttextcolor">News Is A Great Weapon.</div>
                                                News can influence in many ways.
                                            </div>
                                            
                                        </li>
                                        <li class="ti-list-group-item flex justify-between align-items-start">
                                            <div class="ms-2 me-auto text-[#8c9097]">
                                                <div class="font-semibold text-[.875rem] !text-defaulttextcolor">majority have suffered.</div>
                                                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.
                                            </div>
                                            
                                        </li>
                                    </ol>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ol class="ti-list-group ti-list-group-numbered"&gt;
    &lt;li class="ti-list-group-item flex justify-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-[#8c9097]"&gt;
            &lt;div class="font-semibold text-[.875rem] text-default"&gt;What Happened?&lt;/div&gt;
            Many experts have recently suggested may exist.
        &lt;/div&gt;
        &lt;span class="badge bg-primary/10"&gt;32 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="ti-list-group-item flex justify-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-[#8c9097]"&gt;
            &lt;div class="font-semibold text-[.875rem] text-default"&gt;It Was Amazing!&lt;/div&gt;
            His idea involved taking red.
        &lt;/div&gt;
        &lt;span class="badge bg-secondary/10"&gt;52 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="ti-list-group-item flex justify-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-[#8c9097]"&gt;
            &lt;div class="font-semibold text-[.875rem] text-default"&gt;News Is A Great Weapon.&lt;/div&gt;
            News can influence in many ways.
        &lt;/div&gt;
        &lt;span class="badge bg-success/10"&gt;1,204 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="ti-list-group-item flex justify-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-[#8c9097]"&gt;
            &lt;div class="font-semibold text-[.875rem] text-default"&gt;majority have suffered.&lt;/div&gt;
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.
        &lt;/div&gt;
        &lt;span class="badge bg-danger/10"&gt;14 Views&lt;/span&gt;
    &lt;/li&gt;
&lt;/ol&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Numbered Lists
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ol class="ti-list-group ti-list-group-numbered">
                                        <li class="ti-list-group-item">Simply dummy text of the printing.</li>
                                        <li class="ti-list-group-item">There are many variations of passages.</li>
                                        <li class="ti-list-group-item">All the Lorem Ipsum generators.</li>
                                        <li class="ti-list-group-item">Written in 45 BC. This book is a treatise on the theory.</li>
                                        <li class="ti-list-group-item">Randomised words which don't look.</li>
                                        <li class="ti-list-group-item">Always free from repetition, injected humour.</li>
                                    </ol>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ol class="ti-list-group ti-list-group-numbered"&gt;
    &lt;li class="ti-list-group-item"&gt;Simply dummy text of the printing.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;There are many variations of passages.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;All the Lorem Ipsum generators.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Randomised words which don't look.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Always free from repetition, injected humour.&lt;/li&gt;
&lt;/ol&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        List With Checkboxes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="..." checked>
                                                Accurate information at any given point.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="...">
                                                Hearing the information and responding.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="..." checked>
                                                Setting up and customizing your own sales.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="..." checked>
                                                New Admin Launched.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="...">
                                                To maximize profits and improve productivity.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="...">
                                                To have a complete 360° overview of sales information, having.
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group"&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
            aria-label="..." checked&gt;
            Accurate information at any given point.
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
            aria-label="..."&gt;
            Hearing the information and responding.
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
            aria-label="..." checked&gt;
            Setting up and customizing your own sales.
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
            aria-label="..." checked&gt;
            New Admin Launched.
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
            aria-label="..."&gt;
            To maximize profits and improve productivity.
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
            aria-label="..."&gt;
            To have a complete 360° overview of sales information, having.
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        List With Radios
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-list-group list-none">
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Accurate information at any given point.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Hearing the information and responding.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Setting up and customizing your own sales.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                New Admin Launched.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                To maximize profits and improve productivity.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                To have a complete 360° overview of sales information, having.
                                        </li>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="ti-list-group list-none"&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Accurate information at any given point.
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Hearing the information and responding.
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Setting up and customizing your own sales.
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            New Admin Launched.
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            To maximize profits and improve productivity.
    &lt;/label&gt;
    &lt;label class="ti-list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            To have a complete 360° overview of sales information, having.
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        List With badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Groceries
                                            <span class="badge bg-primary text-white">Available</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Furniture
                                            <span class="badge bg-secondary text-white">Buy</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Beauty
                                            <span class="badge bg-danger !rounded-full text-white">32</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Books
                                            <span class="badge bg-light text-default">New</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Toys
                                            <span class="badge bg-info-gradient">Hot</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Mobiles
                                            <span class="badge bg-warning text-white">Sold Out</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group"&gt;
    &lt;li
        class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
        Grocies
        &lt;span class="badge bg-primary"&gt;Available&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
        Furniture
        &lt;span class="badge bg-secondary"&gt;Buy&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
        Beauty
        &lt;span class="badge bg-danger rounded-pill"&gt;32&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
        Books
        &lt;span class="badge bg-light text-default"&gt;New&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
        Toys
        &lt;span class="badge bg-info-gradient"&gt;Hot&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
        Mobiles
        &lt;span class="badge bg-warning"&gt;Sold Out&lt;/span&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">List Group with No Gutters</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="flex flex-col sm:flex-row">
                                        <li class="ti-list-group gap-x-2.5 flex py-3 px-3 sm:!border-b !border-b-0 !rounded-br-none !rounded-bl-none sm:!rounded-bl-sm sm:!rounded-br-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                          <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
                                          </svg>
                                          Newsletter
                                        </li>
                                        <li class="ti-list-group gap-x-2.5 flex py-3 px-3 sm:!border-b !border-b-0 !rounded-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:!rounded-none sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                          <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z"></path>
                                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"></path>
                                          </svg>
                                          Downloads
                                        </li>
                                        <li class="ti-list-group gap-x-2.5 flex py-3 !rounded-tr-none !rounded-tl-none px-3 sm:-ms-px sm:mt-0 sm:!rounded-tr-sm sm:first:rounded-se-none sm:!rounded-tl-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                          <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
                                          </svg>
                                          Team Account
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
<pre class="language-html"><code class="language-html"> &lt;ul class="flex flex-col sm:flex-row"&gt;
    &lt;li class="ti-list-group flex py-3 px-4 !border-l-sm gap-x-2.5  text-gray-800 sm:first:rounded-s-sm sm:-ms-px sm:mt-0 sm:first:rounded-e-none dark:bg-bodybg dark:border-white/10 dark:text-white"&gt;
        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor"&gt;
        &lt;path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/&gt;
        &lt;/svg&gt;
        Newsletter
    &lt;/li&gt;
    &lt;li class="ti-list-group !rounded-none flex py-3 px-4 gap-x-2.5  text-gray-800 sm:-ms-px sm:mt-0 dark:bg-bodybg dark:border-white/10 dark:text-white"&gt;
        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor"&gt;
        &lt;path fill-rule="evenodd" d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z"/&gt;
        &lt;path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/&gt;
        &lt;/svg&gt;
        Downloads
    &lt;/li&gt;
    &lt;li class="ti-list-group flex py-3 px-4 gap-x-2.5  text-gray-800 sm:-ms-px sm:mt-0 sm:last::rounded-s-none sm:last:rounded-e-sm dark:bg-bodybg dark:border-white/10 dark:text-white !rounded-s-none"&gt;
        &lt;svg class="flex-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor"&gt;
        &lt;path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/&gt;
        &lt;/svg&gt;
        Team Account
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
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
