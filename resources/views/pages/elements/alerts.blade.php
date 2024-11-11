
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Alerts</h5>
                            <nav>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                    href="javascript:void(0);"> Elements <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                                </a> </li>
                                <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                    href="javascript:void(0);">Alerts 
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
                                        Basic Alert
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-warning  fade show flex" role="alert" id="dismiss-alert1">
                                        <div class="">
                                            <strong>Holy guacamole!</strong> You should check in on some of those fields
                                            below.
                                        </div>
                                        <div class="ltr:pl-3 ltr:ltr:ml-auto  rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert1">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-warning  fade show flex" role="alert" id="dismiss-alert1"&gt;
&lt;div class=""&gt;
    &lt;strong&gt;Holy guacamole! &lt;/strong&gt; You should check in on some of those fields
below.
&lt;/div&gt;
&lt;div class="ltr:pl-3 ltr:ltr:ml-auto  rtl:mr-auto"&gt;
    &lt;div class="mx-1 my-1"&gt;
        &lt;button type="button"
        class="inline-flex  rounded-sm text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
        data-hs-remove-element="#dismiss-alert1"&gt;
            &lt;span class="sr-only"&gt;Dismiss &lt;/span&gt;
            &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
            fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                &lt;path
                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                fill="currentColor" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
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
                                        Live example
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bg-gray-50 border border-gray-200 dark:bg-light dark:border-defaultborder/10 alert mb-0"
                                        role="alert">
                                        <div class="flex">
                                            <div class="sm:flex-shrink-0">
                                                <svg class="h-4 w-4 text-gray-500 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                                </svg>
                                            </div>
                                            <div class="flex-1 md:flex md:justify-between ltr:ml-2 rtl:mr-2">
                                                <p class="text-sm dark:text-defaulttextcolor/70">
                                                    A new software update is available. See what's new in version 3.0.7
                                                </p>
                                                <p class="text-sm mt-3 md:mt-0 ltr:md:ml-6 ltr:md:mr-6">
                                                    <a class="dark:text-defaulttextcolor/70 hover:text-gray-500 font-medium whitespace-nowrap"
                                                        href="javascript:void(0);">Details</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="bg-gray-50 border border-gray-200 dark:bg-light dark:border-defaultborder/10 alert mb-0"
role="alert"&gt;
&lt;div class="flex"&gt;
    &lt;div class="sm:flex-shrink-0"&gt;
        &lt;svg class="h-4 w-4 text-gray-500 mt-0.5" xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
            &lt;path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" /&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class="flex-1 md:flex md:justify-between ltr:ml-2 rtl:mr-2"&gt;
        &lt;p class="text-sm dark:text-defaulttextcolor/70"&gt;
            A new software update is available. See what's new in version 3.0.7
        &lt;/p&gt;
        &lt;p class="text-sm mt-3 md:mt-0 ltr:md:ml-6 ltr:md:mr-6"&gt;
            &lt;a class="dark:text-defaulttextcolor/70 hover:text-gray-500 font-medium whitespace-nowrap"
                href="javascript:void(0);"&gt;Details&lt;/a&gt;
        &lt;/p&gt;
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
                                        Default alerts
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        A simple secondary alert—check it out!
                                    </div>
                                    <div class="alert alert-success !border-success/10" role="alert">
                                        A simple success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        A simple info alert—check it out!
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        A simple light alert—check it out!
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        A simple dark alert—check it out!
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-primary" role="alert"&gt;
        A simple primary alert—check it out!
    &lt;/div&gt;
    &lt;div class="alert alert-secondary" role="alert"&gt;
        A simple secondary alert—check it out!
    &lt;/div&gt;
    &lt;div class="alert alert-success !border-success/10" role="alert"&gt;
        A simple success alert—check it out!
    &lt;/div&gt;
    &lt;div class="alert alert-danger" role="alert"&gt;
        A simple danger alert—check it out!
    &lt;/div&gt;
    &lt;div class="alert alert-warning" role="alert"&gt;
        A simple warning alert—check it out!
    &lt;/div&gt;
    &lt;div class="alert alert-info" role="alert"&gt;
        A simple info alert—check it out!
    &lt;/div&gt;
    &lt;div class="alert alert-light" role="alert"&gt;
        A simple light alert—check it out!
    &lt;/div&gt;
    &lt;div class="alert alert-dark" role="alert"&gt;
        A simple dark alert—check it out!
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Links in alerts
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert with <a href="#" class="alert-link">an example
                                            link</a>.
                                        Give it a click if you like.
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        A simple secondary alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-success !border-success/10" role="alert">
                                        A simple success alert with <a href="#" class="alert-link">an example
                                            link</a>.
                                        Give it a click if you like.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple danger alert with <a href="#" class="alert-link">an example
                                            link</a>.
                                        Give it a click if you like.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple warning alert with <a href="#" class="alert-link">an example
                                            link</a>.
                                        Give it a click if you like.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        A simple info alert with <a href="#" class="alert-link">an example link</a>.
                                        Give it a click if you like.
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        A simple light alert with <a href="#" class="alert-link">an example
                                            link</a>.
                                        Give it a click if you like.
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        A simple dark alert with <a href="#"
                                            class="alert-link dark:text-defaulttextcolor/70">an example link</a>.
                                        Give it a click if you like.
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-primary" role="alert"&gt;
        A simple primary alert with &lt;a href="#" class="alert-link"&gt;an example
            link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;

    &lt;div class="alert alert-secondary" role="alert"&gt;
        A simple secondary alert with &lt;a href="#" class="alert-link"&gt;an example
            link&lt;/a&gt;. Give it a click if you like.
    &lt;/div&gt;

    &lt;div class="alert alert-success" role="alert"&gt;
        A simple success alert with &lt;a href="#" class="alert-link"&gt;an example
            link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;

    &lt;div class="alert alert-danger" role="alert"&gt;
        A simple danger alert with &lt;a href="#" class="alert-link"&gt;an example
            link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;

    &lt;div class="alert alert-warning" role="alert"&gt;
        A simple warning alert with &lt;a href="#" class="alert-link"&gt;an example
            link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;

    &lt;div class="alert alert-info" role="alert"&gt;
        A simple info alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;

    &lt;div class="alert alert-light" role="alert"&gt;
        A simple light alert with &lt;a href="#" class="alert-link"&gt;an example
            link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;

    &lt;div class="alert alert-dark" role="alert"&gt;
        A simple dark alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Solid Colored Alerts
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-solid-primary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert2">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid primary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert2">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-secondary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert3">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid secondary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert3">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-info alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert4">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid info alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert4">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-warning alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert5">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid warning alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert5">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-success alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert6">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid success alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert6">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-danger alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert7">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid danger alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert7">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-light alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert8">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid light alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert8">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-dark dark:bg-white dark:text-black alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert9">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid dark alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white dark:text-black focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert9">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-solid-primary alert-dismissible fade show flex"&gt;
        A simple solid primary alert—check it out!
        &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;

    &lt;div class="alert alert-solid-secondary alert-dismissible fade show flex"&gt;
        A simple solid secondary alert—check it out!
        &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;

    &lt;div class="alert alert-solid-info alert-dismissible fade show flex"&gt;
        A simple solid info alert—check it out!
        &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;

    &lt;div class="alert alert-solid-warning alert-dismissible fade show flex"&gt;
        A simple solid warning alert—check it out!
        &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;

    &lt;div class="alert alert-solid-success alert-dismissible fade show flex"&gt;
        A simple solid success alert—check it out!
        &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;

    &lt;div class="alert alert-solid-danger alert-dismissible fade show flex"&gt;
        A simple solid danger alert—check it out!
        &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;

    &lt;div class="alert alert-solid-light alert-dismissible fade show flex"&gt;
        A simple solid light alert—check it out!
        &lt;button type="button" class="btn-close text-default" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;

    &lt;div class="alert alert-solid-dark alert-dismissible fade show flex"&gt;
        A simple solid dark alert—check it out!
        &lt;button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Outline Alerts
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-outline-primary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert10">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline primary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-primary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert10">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-secondary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert11">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline secondary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-secondary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert11">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-info alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert12">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline info alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-info focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert12">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-warning alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert13">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline warning alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert13">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-success alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert14">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline success alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-success focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert14">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-danger alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert15">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline danger alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-danger focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert15">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-light alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert16">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline light alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex dark:!text-white/70 rounded-sm text-light focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert16">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-dark dark:border-white alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert17">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline dark alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-black dark:text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert17">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-outline-primary alert-dismissible fade show flex" role="alert"
        id="dismiss-alert10"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline primary alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert10"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-secondary alert-dismissible fade show flex" role="alert"
        id="dismiss-alert11"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline secondary alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert11"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-info alert-dismissible fade show flex" role="alert"
        id="dismiss-alert12"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline info alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert12"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-warning alert-dismissible fade show flex" role="alert"
        id="dismiss-alert13"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline warning alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert13"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-success alert-dismissible fade show flex" role="alert"
        id="dismiss-alert14"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline success alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert14"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-danger alert-dismissible fade show flex" role="alert"
        id="dismiss-alert15"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline danger alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert15"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-light alert-dismissible fade show flex" role="alert"
        id="dismiss-alert16"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline light alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert16"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-dark alert-dismissible fade show flex" role="alert"
        id="dismiss-alert17"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline dark alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert17"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
                            </code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Solid Alerts With Different Shadows
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-solid-primary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert18">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid primary alert with small shadow—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert18">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-primary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert19">
                                        <div class="">
                                            A simple solid primary alert with normal shadow—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert19">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-primary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert20">
                                        <div class="">
                                            A simple solid primary alert with large shadow—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert20">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-secondary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert21">
                                        <div class="">
                                            A simple solid secondary alert with small shadow—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert21">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-secondary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert22">
                                        <div class="">
                                            A simple solid secondary alert with normal shadow—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert22">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-secondary alert-dismissible fade show flex" role="alert"
                                        id="dismiss-alert23">
                                        <div class="">
                                            A simple solid secondary alert with large shadow—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert23">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-solid-primary alert-dismissible fade show flex" role="alert"id="dismiss-alert18"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid primary alert with small shadow—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert18"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-solid-primary alert-dismissible fade show flex" role="alert"
        id="dismiss-alert19"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid primary alert with normal shadow—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert19"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-solid-primary alert-dismissible fade show flex" role="alert"
        id="dismiss-alert20"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid primary alert with large shadow—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert20"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-solid-secondary alert-dismissible fade show flex" role="alert"
        id="dismiss-alert21"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid secondary alert with small shadow—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert21"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-solid-secondary alert-dismissible fade show flex" role="alert"
        id="dismiss-alert22"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid secondary alert with normal shadow—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert22"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-solid-secondary alert-dismissible fade show flex" role="alert"
        id="dismiss-alert23"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid secondary alert with large shadow—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert23"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
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
                                        Default Alerts With Different Shadows
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-primary shadow-sm">A simple primary alert with small
                                        shadow—check it out!</div>
                                    <div class="alert alert-primary shadow">A simple primary alert with normal shadow—check
                                        it out!</div>
                                    <div class="alert alert-primary shadow-lg">A simple primary alert with large
                                        shadow—check it out!</div>
                                    <div class="alert alert-secondary shadow-sm">A simple secondary alert with small
                                        shadow—check it out!</div>
                                    <div class="alert alert-secondary shadow">A simple secondary alert with normal
                                        shadow—check it out!</div>
                                    <div class="alert alert-secondary shadow-lg">A simple secondary alert with large
                                        shadow—check it out!</div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre
                                        class="language-html"><code class="language-html">&lt;div class="alert alert-primary shadow-sm">A simple primary alert with small shadow—check it out!&lt;/div&gt;

        &lt;div class="alert alert-primary shadow"&gt;A simple primary alert with normal shadow—check it out!&lt;/div&gt;

        &lt;div class="alert alert-primary shadow-lg"&gt;A simple primary alert with large shadow—check it out!&lt;/div&gt;

        &lt;div class="alert alert-secondary shadow-sm"&gt;A simple secondary alert with small shadow—check it out!&lt;/div&gt;

        &lt;div class="alert alert-secondary shadow"&gt;A simple secondary alert with normal shadow—check it out!&lt;/div&gt;

        &lt;div class="alert alert-secondary shadow-lg"&gt;A simple secondary alert with large shadow—check it out!&lt;/div&gt; </code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Rounded Solid Alerts
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-solid-primary !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert24">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid rounded primary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert24">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-secondary !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert25">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid rounded secondary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert25">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-warning !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert26">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid rounded warning alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert26">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-solid-danger !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert27">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid rounded danger alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert27">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-solid-primary !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert24"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid rounded primary alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert24"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-solid-secondary !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert25"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid rounded secondary alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert25"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-solid-warning !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert26"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid rounded warning alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert26"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-solid-danger !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert27"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid rounded danger alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert27"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
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
                                        Rounded Outline Alerts
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-outline-primary !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert28">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline rounded primary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-primary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert28">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-secondary !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert29">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline rounded secondary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-secondary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert29">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-warning !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert30">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline rounded warning alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert30">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-outline-danger !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert31">
                                        <div class="sm:flex-shrink-0">
                                            A simple outline rounded danger alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-danger focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert31">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="alert alert-outline-primary !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert28"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline rounded primary alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert28"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-secondary !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert29"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline rounded secondary alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert29"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-warning !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert30"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline rounded warning alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert30"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-outline-danger !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert31"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple outline rounded danger alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert31"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
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
                                        Rounded Default Alerts
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-primary !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert32">
                                        <div class="sm:flex-shrink-0">
                                            A simple solid rounded primary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-primary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert32">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-secondary !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert33">
                                        <div class="sm:flex-shrink-0">
                                            A simple rounded secondary alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-secondary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert33">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-warning !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert34">
                                        <div class="sm:flex-shrink-0">
                                            A simple rounded warning alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert34">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-danger !rounded-full alert-dismissible fade show flex"
                                        role="alert" id="dismiss-alert35">
                                        <div class="sm:flex-shrink-0">
                                            A simple rounded danger alert—check it out!
                                        </div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-danger focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert35">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-primary !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert32"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple solid rounded primary alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert32"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-secondary !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert33"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple rounded secondary alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert33"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-warning !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert34"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple rounded warning alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert34"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-danger !rounded-full alert-dismissible fade show flex"
        role="alert" id="dismiss-alert35"&gt;
        &lt;div class="sm:flex-shrink-0"&gt;
            A simple rounded danger alert—check it out!
        &lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert35"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
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
                                        Rounded Alerts With Custom Close Button
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-primary flex items-center justify-between  !rounded-full alert-dismissible fade show"
                                        id="dismiss-alert36">
                                        A simple rounded primary alert—check it out!
                                        <button type="button"
                                            class="inline-flex  float-right rtl:float-left  text-primary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                            data-hs-remove-element="#dismiss-alert36">
                                            <span class="sr-only">Dismiss</span>
                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path
                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="alert alert-secondary flex items-center justify-between  !rounded-full alert-dismissible fade show"
                                        id="dismiss-alert37">
                                        A simple rounded secondary alert—check it out!
                                        <button type="button"
                                            class="inline-flex  rounded-sm float-right rtl:float-left text-secondary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                            data-hs-remove-element="#dismiss-alert37">
                                            <span class="sr-only">Dismiss</span>
                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path
                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="alert alert-warning flex items-center justify-between  !rounded-full alert-dismissible fade show"
                                        id="dismiss-alert38">
                                        A simple rounded warning alert—check it out!
                                        <button type="button"
                                            class="inline-flex  rounded-sm float-right rtl:float-left text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                            data-hs-remove-element="#dismiss-alert38">
                                            <span class="sr-only">Dismiss</span>
                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path
                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="alert alert-danger flex items-center justify-between  !rounded-full alert-dismissible fade show"
                                        id="dismiss-alert39">
                                        A simple rounded danger alert—check it out!
                                        <button type="button"
                                            class="inline-flex  float-right rtl:float-left rounded-sm text-danger focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                            data-hs-remove-element="#dismiss-alert39">
                                            <span class="sr-only">Dismiss</span>
                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path
                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-primary !rounded-full alert-dismissible fade show"
        id="dismiss-alert36"&gt;
        A simple rounded primary alert—check it out!
        &lt;button type="button"
            class="inline-flex  float-right rtl:float-left  text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
            data-hs-remove-element="#dismiss-alert36"&gt;
            &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
            &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                &lt;path
                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                    fill="currentColor" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-secondary !rounded-full alert-dismissible fade show"
        id="dismiss-alert37"&gt;
        A simple rounded secondary alert—check it out!
        &lt;button type="button"
            class="inline-flex  rounded-sm float-right rtl:float-left text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
            data-hs-remove-element="#dismiss-alert37"&gt;
            &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
            &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                &lt;path
                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                    fill="currentColor" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-warning !rounded-full alert-dismissible fade show"
        id="dismiss-alert38"&gt;
        A simple rounded warning alert—check it out!
        &lt;button type="button"
            class="inline-flex  rounded-sm float-right rtl:float-left text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
            data-hs-remove-element="#dismiss-alert38"&gt;
            &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
            &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                &lt;path
                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                    fill="currentColor" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-danger !rounded-full alert-dismissible fade show"
        id="dismiss-alert39"&gt;
        A simple rounded danger alert—check it out!
        &lt;button type="button"
            class="inline-flex  float-right rtl:float-left rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
            data-hs-remove-element="#dismiss-alert39"&gt;
            &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
            &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                &lt;path
                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                    fill="currentColor" /&gt;
            &lt;/svg&gt;
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
                                        Alerts with icons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-primary flex items-center" role="alert">
                                        <svg class="sm:flex-shrink-0 me-2 svg-primary" xmlns="http://www.w3.org/2000/svg"
                                            height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                        </svg>
                                        <div>
                                            An example alert with an icon
                                        </div>
                                    </div>
                                    <div class="alert alert-success !border-success/10 flex items-center" role="alert">
                                        <svg class="sm:flex-shrink-0 me-2 fill-success" xmlns="http://www.w3.org/2000/svg"
                                            height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                            <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                                        </svg>
                                        <div>
                                            An example success alert with an icon
                                        </div>
                                    </div>
                                    <div class="alert alert-warning flex items-center" role="alert">
                                        <svg class="sm:flex-shrink-0 me-2 fill-warning" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24"
                                            width="1.5rem" fill="#000000">
                                            <g>
                                                <rect fill="none" height="24" width="24" />
                                            </g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path d="M12,5.99L19.53,19H4.47L12,5.99 M12,2L1,21h22L12,2L12,2z" />
                                                        <polygon points="13,16 11,16 11,18 13,18" />
                                                        <polygon points="13,10 11,10 11,15 13,15" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div>
                                            An example warning alert with an icon
                                        </div>
                                    </div>
                                    <div class="alert alert-danger flex items-center" role="alert">
                                        <svg class="sm:flex-shrink-0 me-2 fill-danger" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24"
                                            width="1.5rem" fill="#000000">
                                            <g>
                                                <rect fill="none" height="24" width="24" />
                                            </g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z" />
                                                        <rect height="6" width="2" x="11" y="7" />
                                                        <rect height="2" width="2" x="11" y="15" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div>
                                            An example danger alert with an icon
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-primary flex items-center" role="alert"&gt;
        &lt;svg class="sm:flex-shrink-0 me-2 svg-primary" xmlns="http://www.w3.org/2000/svg"
            height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"&gt;
            &lt;path d="M0 0h24v24H0V0z" fill="none" /&gt;
            &lt;path
                d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" /&gt;
        &lt;/svg&gt;
        &lt;div&gt;
            An example alert with an icon
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-success !border-success/10 flex items-center" role="alert"&gt;
        &lt;svg class="sm:flex-shrink-0 me-2 fill-success" xmlns="http://www.w3.org/2000/svg"
            height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"&gt;
            &lt;path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" /&gt;
            &lt;path
                d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" /&gt;
        &lt;/svg&gt;
        &lt;div&gt;
            An example success alert with an icon
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-warning flex items-center" role="alert"&gt;
        &lt;svg class="sm:flex-shrink-0 me-2 fill-warning" xmlns="http://www.w3.org/2000/svg"
            enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24"
            width="1.5rem" fill="#000000"&gt;
            &lt;g&gt;
                &lt;rect fill="none" height="24" width="24" /&gt;
            &lt;/g&gt;
            &lt;g&gt;
                &lt;g&gt;
                    &lt;g&gt;
                        &lt;path d="M12,5.99L19.53,19H4.47L12,5.99 M12,2L1,21h22L12,2L12,2z" /&gt;
                        &lt;polygon points="13,16 11,16 11,18 13,18" /&gt;
                        &lt;polygon points="13,10 11,10 11,15 13,15" /&gt;
                    &lt;/g&gt;
                &lt;/g&gt;
            &lt;/g&gt;
        &lt;/svg&gt;
        &lt;div&gt;
            An example warning alert with an icon
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-danger flex items-center" role="alert"&gt;
        &lt;svg class="sm:flex-shrink-0 me-2 fill-danger" xmlns="http://www.w3.org/2000/svg"
            enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24"
            width="1.5rem" fill="#000000"&gt;
            &lt;g&gt;
                &lt;rect fill="none" height="24" width="24" /&gt;
            &lt;/g&gt;
            &lt;g&gt;
                &lt;g&gt;
                    &lt;g&gt;
                        &lt;path
                            d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z" /&gt;
                        &lt;rect height="6" width="2" x="11" y="7" /&gt;
                        &lt;rect height="2" width="2" x="11" y="15" /&gt;
                    &lt;/g&gt;
                &lt;/g&gt;
            &lt;/g&gt;
        &lt;/svg&gt;
        &lt;div&gt;
            An example danger alert with an icon
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
                                        Customized Alerts With SVG's
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-primary alert-dismissible dark:!bg-bodybg fade show custom-alert-icon shadow-sm flex items-center"
                                        role="alert" id="dismiss-alert40">
                                        <div>
                                            <svg class="svg-primary me-1" xmlns="http://www.w3.org/2000/svg" height="1.5rem"
                                                viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
                                            </svg>
                                        </div>
                                        <div>A customized primary alert with an icon</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-primary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert40">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-secondary alert-dismissible fade show custom-alert-icon shadow-sm flex items-center"
                                        role="alert" id="dismiss-alert41">
                                        <div>
                                            <svg class="fill-secondary me-1" xmlns="http://www.w3.org/2000/svg"
                                                height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                            </svg>
                                        </div>
                                        <div>A customized primary alert with an icon</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-secondary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert41">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show custom-alert-icon shadow-sm flex items-center"
                                        role="alert" id="dismiss-alert42">
                                        <div>
                                            <svg class="fill-warning me-1" xmlns="http://www.w3.org/2000/svg"
                                                height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z" />
                                            </svg>
                                        </div>
                                        <div>A customized primary alert with an icon</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert42">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show custom-alert-icon shadow-sm flex items-center"
                                        role="alert" id="dismiss-alert43">
                                        <div>
                                            <svg class="fill-danger me-1" xmlns="http://www.w3.org/2000/svg" height="1.5rem"
                                                viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM12 17.3c-.72 0-1.3-.58-1.3-1.3 0-.72.58-1.3 1.3-1.3.72 0 1.3.58 1.3 1.3 0 .72-.58 1.3-1.3 1.3zm1-4.3h-2V7h2v6z" />
                                            </svg>
                                        </div>
                                        <div>A customized primary alert with an icon</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-danger focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert43">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-primary alert-dismissible dark:!bg-bodybg fade show custom-alert-icon shadow-sm flex items-center"
        role="alert" id="dismiss-alert40"&gt;
        &lt;div&gt;
            &lt;svg class="svg-primary me-1" xmlns="http://www.w3.org/2000/svg" height="1.5rem"
                viewBox="0 0 24 24" width="1.5rem" fill="#000000"&gt;
                &lt;path d="M0 0h24v24H0z" fill="none" /&gt;
                &lt;path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" /&gt;
            &lt;/svg&gt;
        &lt;/div&gt;
        &lt;div&gt;A customized primary alert with an icon&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert40"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-secondary alert-dismissible fade show custom-alert-icon shadow-sm flex items-center"
        role="alert" id="dismiss-alert41"&gt;
        &lt;div&gt;
            &lt;svg class="fill-secondary me-1" xmlns="http://www.w3.org/2000/svg"
                height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"&gt;
                &lt;path d="M0 0h24v24H0z" fill="none" /&gt;
                &lt;path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" /&gt;
            &lt;/svg&gt;
        &lt;/div&gt;
        &lt;div&gt;A customized primary alert with an icon&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert41"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-warning alert-dismissible fade show custom-alert-icon shadow-sm flex items-center"
        role="alert" id="dismiss-alert42"&gt;
        &lt;div&gt;
            &lt;svg class="fill-warning me-1" xmlns="http://www.w3.org/2000/svg"
                height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"&gt;
                &lt;path d="M0 0h24v24H0z" fill="none" /&gt;
                &lt;path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z" /&gt;
            &lt;/svg&gt;
        &lt;/div&gt;
        &lt;div&gt;A customized primary alert with an icon&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert42"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-danger alert-dismissible fade show custom-alert-icon shadow-sm flex items-center"
        role="alert" id="dismiss-alert43"&gt;
        &lt;div&gt;
            &lt;svg class="fill-danger me-1" xmlns="http://www.w3.org/2000/svg" height="1.5rem"
                viewBox="0 0 24 24" width="1.5rem" fill="#000000"&gt;
                &lt;path d="M0 0h24v24H0z" fill="none" /&gt;
                &lt;path
                    d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM12 17.3c-.72 0-1.3-.58-1.3-1.3 0-.72.58-1.3 1.3-1.3.72 0 1.3.58 1.3 1.3 0 .72-.58 1.3-1.3 1.3zm1-4.3h-2V7h2v6z" /&gt;
            &lt;/svg&gt;
        &lt;/div&gt;
        &lt;div&gt;A customized primary alert with an icon&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert43"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
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
                                <h5 class="box-title">
                                Rounded Solid Colored Alerts With Image
                                </h5>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="bg-primary border border-primary text-white alert !rounded-full px-6" role="alert">
                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Primary</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-secondary border border-secondary text-white alert !rounded-full px-6" role="alert">
                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Secondary</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-danger border border-danger text-white alert !rounded-full px-6" role="alert">
                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Danger</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-warning border border-warning text-white alert !rounded-full px-6" role="alert">
                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Warning</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-info  border border-info text-white alert !rounded-full px-6" role="alert">
                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Info</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-success  border border-success text-white alert !rounded-full px-6" role="alert">
                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Success</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-light border-light text-gray-600 alert !rounded-full px-6" role="alert">
                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Light</span> alert! You should check in on some of those fields below.
                                </div>
                                <div
                                class="bg-black border border-white/10 text-white alert dark:bg-gray-900 dark:text-white !rounded-full px-6"
                                role="alert">
                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Dark</span> alert! You should check in on some of those fields below.
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
                                <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="bg-primary border border-primary text-white alert !rounded-full px-6" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Primary&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-secondary border border-secondary text-white alert !rounded-full px-6" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Secondary&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-danger border border-danger text-white alert !rounded-full px-6" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Danger&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-warning border border-warning text-white alert !rounded-full px-6" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Warning&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-info  border border-info text-white alert !rounded-full px-6" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Info&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-success  border border-success text-white alert !rounded-full px-6" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Success&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-light border-light text-gray-600 alert !rounded-full px-6" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/7.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Light&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div
    class="bg-black border border-white/10 text-white alert dark:bg-gray-900 dark:text-white !rounded-full px-6"
    role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Dark&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="box">
                            <div class="box-header flex justify-between">
                                <h5 class="box-title">
                                Rounded Outline Alerts With Image
                                </h5>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="bg-white dark:bg-bodybg border border-primary alert !rounded-full px-6 text-primary" role="alert">
                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Primary</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-white dark:bg-bodybg border border-secondary alert !rounded-full px-6 text-secondary"
                                role="alert">
                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Secondary</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-white dark:bg-bodybg border border-danger alert !rounded-full px-6 text-danger" role="alert">
                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Danger</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-white dark:bg-bodybg border border-warning alert !rounded-full px-6 text-warning" role="alert">
                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Warning</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-white dark:bg-bodybg border border-info alert !rounded-full px-6 text-info" role="alert">
                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">info</span> alert! You should check in on some of those fields below.
                                </div>
                                <div class="bg-white dark:bg-bodybg border border-success alert !rounded-full px-6 text-success" role="alert">
                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Success</span> alert! You should check in on some of those fields below.
                                </div>
                                <div
                                class="bg-white dark:bg-bodybg border border-gray-200 dark:border-white/10 alert !rounded-full px-6 text-gray-600 dark:text-white/70"
                                role="alert">
                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Light</span> alert! You should check in on some of those fields below.
                                </div>
                                <div
                                class="bg-white dark:bg-bodybg border border-gray-900 alert !rounded-full px-6 text-gray-900 dark:border-gray-900 dark:text-gray-100"
                                role="alert">
                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img">
                                <span class="font-bold">Dark</span> alert! You should check in on some of those fields below.
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
                                <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="bg-white dark:bg-bodybg border border-primary alert !rounded-full px-6 text-primary" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/9.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Primary&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-white dark:bg-bodybg border border-secondary alert !rounded-full px-6 text-secondary"
    role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Secondary&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-white dark:bg-bodybg border border-danger alert !rounded-full px-6 text-danger" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/11.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Danger&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-white dark:bg-bodybg border border-warning alert !rounded-full px-6 text-warning" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Warning&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-white dark:bg-bodybg border border-info alert !rounded-full px-6 text-info" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;info&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div class="bg-white dark:bg-bodybg border border-success alert !rounded-full px-6 text-success" role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Success&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div
    class="bg-white dark:bg-bodybg border border-gray-200 dark:border-white/10 alert !rounded-full px-6 text-gray-600 dark:text-white/70"
    role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Light&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;
    &lt;div
    class="bg-white dark:bg-bodybg border border-gray-900 alert !rounded-full px-6 text-gray-900 dark:border-gray-900 dark:text-gray-100"
    role="alert"&gt;
    &lt;img src="{{asset('build/assets/images/faces/16.jpg')}}" class="avatar avatar-sm w-6 h-6 me-2 !rounded-full ring-0" alt="user-img"&gt;
    &lt;span class="font-bold"&gt;Dark&lt;/span&gt; alert! You should check in on some of those fields below.
    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                            </div>
                        </div>

                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Alerts With Images
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-img alert-primary alert-dismissible fase show !rounded-full flex-wrap"
                                        role="alert" id="dismiss-alert44">
                                        <div class="avatar avatar-sm me-3 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple primary alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-primary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert44">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-secondary alert-dismissible fase show !rounded-full flex-wrap"
                                        role="alert" id="dismiss-alert45">
                                        <div class="avatar avatar-sm me-3 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple secondary alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-secondary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert45">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-warning alert-dismissible fase show !rounded-full flex-wrap"
                                        role="alert" id="dismiss-alert46">
                                        <div class="avatar avatar-sm me-3 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple warning alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert46">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-danger alert-dismissible fase show !rounded-full flex-wrap"
                                        role="alert" id="dismiss-alert47">
                                        <div class="avatar avatar-sm me-3 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple danger alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-danger focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert47">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-info alert-dismissible fase show !rounded-full flex-wrap"
                                        role="alert" id="dismiss-alert48">
                                        <div class="avatar avatar-sm me-3 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple info alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-info focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert48">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-light alert-dismissible fase show !rounded-full flex-wrap"
                                        role="alert" id="dismiss-alert49">
                                        <div class="avatar avatar-sm me-3 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple light alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-defaulttextcolor focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert49">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-dark alert-dismissible fase show !rounded-full flex-wrap"
                                        role="alert" id="dismiss-alert50">
                                        <div class="avatar avatar-sm me-3 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple dark alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-dark focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert50">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-img alert-primary alert-dismissible fase show !rounded-full flex-wrap"
        role="alert" id="dismiss-alert44"&gt;
        &lt;div class="avatar avatar-sm me-3 avatar-rounded"&gt;
            &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple primary alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert44"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-secondary alert-dismissible fase show !rounded-full flex-wrap"
        role="alert" id="dismiss-alert45"&gt;
        &lt;div class="avatar avatar-sm me-3 avatar-rounded"&gt;
            &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple secondary alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert45"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-warning alert-dismissible fase show !rounded-full flex-wrap"
        role="alert" id="dismiss-alert46"&gt;
        &lt;div class="avatar avatar-sm me-3 avatar-rounded"&gt;
            &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple warning alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert46"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-danger alert-dismissible fase show !rounded-full flex-wrap"
        role="alert" id="dismiss-alert47"&gt;
        &lt;div class="avatar avatar-sm me-3 avatar-rounded"&gt;
            &lt;img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple danger alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert47"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-info alert-dismissible fase show !rounded-full flex-wrap"
        role="alert" id="dismiss-alert48"&gt;
        &lt;div class="avatar avatar-sm me-3 avatar-rounded"&gt;
            &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple info alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert48"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-light alert-dismissible fase show !rounded-full flex-wrap"
        role="alert" id="dismiss-alert49"&gt;
        &lt;div class="avatar avatar-sm me-3 avatar-rounded"&gt;
            &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple light alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert49"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-dark alert-dismissible fase show !rounded-full flex-wrap"
        role="alert" id="dismiss-alert50"&gt;
        &lt;div class="avatar avatar-sm me-3 avatar-rounded"&gt;
            &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple dark alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert50"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
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
                                        Alerts With Different size Images
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-img alert-primary alert-dismissible fase show flex-wrap"
                                        role="alert" id="dismiss-alert51">
                                        <div class="avatar avatar-xs me-3">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple primary alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-primary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert51">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-secondary alert-dismissible fase show flex-wrap"
                                        role="alert" id="dismiss-alert52">
                                        <div class="avatar avatar-sm me-3">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple secondary alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-secondary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert52">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-warning alert-dismissible fase show flex-wrap"
                                        role="alert" id="dismiss-alert53">
                                        <div class="avatar me-3">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple warning alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert53">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-danger alert-dismissible fase show flex-wrap"
                                        role="alert" id="dismiss-alert54">
                                        <div class="avatar avatar-md me-3">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple danger alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-danger focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert54">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-info alert-dismissible fase show flex-wrap"
                                        role="alert" id="dismiss-alert55">
                                        <div class="avatar avatar-lg me-3">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple info alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-info focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert55">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-img alert-dark alert-dismissible fase show flex-wrap"
                                        role="alert" id="dismiss-alert56">
                                        <div class="avatar avatar-xl me-3">
                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                        </div>
                                        <div>A simple info alert with image—check it out!</div>
                                        <div class="pl-3 ltr:ml-auto rtl:mr-auto">
                                            <div class="mx-1 my-1">
                                                <button type="button"
                                                    class="inline-flex  rounded-sm text-dark focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                    data-hs-remove-element="#dismiss-alert56">
                                                    <span class="sr-only">Dismiss</span>
                                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="alert alert-img alert-primary alert-dismissible fase show flex-wrap"
        role="alert" id="dismiss-alert51"&gt;
        &lt;div class="avatar avatar-xs me-3"&gt;
            &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple primary alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert51"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-secondary alert-dismissible fase show flex-wrap"
        role="alert" id="dismiss-alert52"&gt;
        &lt;div class="avatar avatar-sm me-3"&gt;
            &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple secondary alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert52"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-warning alert-dismissible fase show flex-wrap"
        role="alert" id="dismiss-alert53"&gt;
        &lt;div class="avatar me-3"&gt;
            &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple warning alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert53"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-danger alert-dismissible fase show flex-wrap"
        role="alert" id="dismiss-alert54"&gt;
        &lt;div class="avatar avatar-md me-3"&gt;
            &lt;img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple danger alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert54"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-info alert-dismissible fase show flex-wrap"
        role="alert" id="dismiss-alert55"&gt;
        &lt;div class="avatar avatar-lg me-3"&gt;
            &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple info alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert55"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="alert alert-img alert-dark alert-dismissible fase show flex-wrap"
        role="alert" id="dismiss-alert56"&gt;
        &lt;div class="avatar avatar-xl me-3"&gt;
            &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
        &lt;/div&gt;
        &lt;div&gt;A simple info alert with image—check it out!&lt;/div&gt;
        &lt;div class="pl-3 ltr:ml-auto rtl:mr-auto"&gt;
            &lt;div class="mx-1 my-1"&gt;
                &lt;button type="button"
                    class="inline-flex  rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 "
                    data-hs-remove-element="#dismiss-alert56"&gt;
                    &lt;span class="sr-only"&gt;Dismiss&lt;/span&gt;
                    &lt;svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>

                        

                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div
                                    class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                    <div class="box   !border-0">
                                        <div class="alert custom-alert1 !bg-white dark:!bg-bodybg alert-primary" id="dismiss-alert69">
                                            <button type="button" class="btn-close ms-auto"
                                                data-hs-remove-element="#dismiss-alert69" aria-label="Close"><i
                                                    class="bi bi-x"></i></button>
                                            <div class="text-center px-[3rem] pb-0">
                                                <svg class="custom-alert-icon svg-primary inline-flex"
                                                    xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24"
                                                    width="1.5rem" fill="#000000">
                                                    <path d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
                                                </svg>
                                                <h5 class="text-[1.25rem] !font-medium !text-primary">Information?</h5>
                                                <p class="!mb-3">This alert is created to just show the related information.</p>
                                                <div class="">
                                                    <button
                                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-outline-danger m-1">Decline</button>
                                                    <button
                                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium bg-primary text-white m-1">Accept</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6  col-span-12">
                                    <div class="box  !border-0">
                                        <div class="alert custom-alert1 !bg-white dark:!bg-bodybg alert-success" id="dismiss-alert70">
                                            <button type="button" class="btn-close ms-auto"
                                                data-hs-remove-element="#dismiss-alert70" aria-label="Close"><i
                                                    class="bi bi-x"></i></button>
                                            <div class="text-center px-5 pb-0">
                                                <svg class="custom-alert-icon fill-success inline-flex"
                                                    xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24"
                                                    width="1.5rem" fill="#000000">
                                                    <path d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                                </svg>
                                                <h5 class="text-[1.25rem] !font-medium !text-success">Confirmed</h5>
                                                <p class="!mb-3">This alert is created to just show the confirmation message.</p>
                                                <div class="">
                                                    <button
                                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium bg-success text-white m-1">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6  col-span-12">
                                    <div class="box !border-0">
                                        <div class="alert !bg-white dark:!bg-bodybg custom-alert1 alert-warning" id="dismiss-alert71">
                                            <button type="button" class="btn-close ms-auto"
                                                data-hs-remove-element="#dismiss-alert71" aria-label="Close"><i
                                                    class="bi bi-x"></i></button>
                                            <div class="text-center px-5 pb-0">
                                                <svg class="custom-alert-icon fill-warning inline-flex"
                                                    xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24"
                                                    width="1.5rem" fill="#000000">
                                                    <path d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z" />
                                                </svg>
                                                <h5 class="text-[1.25rem] !font-medium !text-warning">Warning</h5>
                                                <p class="!mb-3">This alert is created to just show the warning alert message.</p>
                                                <div class="">
                                                    <button
                                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-outline-secondary m-1">Back</button>
                                                    <button
                                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium bg-warning text-white m-1">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                    <div class="box bg-white dark:bg-bodybg !border-0">
                                        <div class="alert custom-alert1 alert-danger" id="dismiss-alert72">
                                            <button type="button" class="btn-close ms-auto"
                                                data-hs-remove-element="#dismiss-alert72" aria-label="Close"><i
                                                    class="bi bi-x"></i></button>
                                            <div class="text-center px-5 pb-0">
                                                <svg class="custom-alert-icon fill-danger inline-flex"
                                                    xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24"
                                                    width="1.5rem" fill="#000000">
                                                    <path d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM12 17.3c-.72 0-1.3-.58-1.3-1.3 0-.72.58-1.3 1.3-1.3.72 0 1.3.58 1.3 1.3 0 .72-.58 1.3-1.3 1.3zm1-4.3h-2V7h2v6z" />
                                                </svg>
                                                <h5 class="text-[1.25rem] !font-medium">danger</h5>
                                                <p class="!mb-3">This alert is created to just show the danger alert message.</p>
                                                <div class="">
                                                    <button
                                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium bg-danger text-white m-1">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box !border-0">
                                        <div class="alert alert-primary border !border-primary mb-0 p-2"
                                            id="dismiss-alert57">
                                            <div class="flex items-start">
                                                <div class="me-2">
                                                    <svg class="sm:flex-shrink-0 svg-primary"
                                                        xmlns="http://www.w3.org/2000/svg" height="1.5rem"
                                                        viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                                    </svg>
                                                </div>
                                                <div class="text-primary w-full">
                                                    <div class="font-semibold flex justify-between">Information
                                                        Alert<button type="button"
                                                            class="inline-flex  rounded-sm text-primary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                            data-hs-remove-element="#dismiss-alert57">
                                                            <span class="sr-only">Dismiss</span>
                                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button></div>
                                                    <div class="text-[0.75rem] opacity-[0.8] mb-1">Information alert to show
                                                        to information
                                                    </div>
                                                    <div class="text-[0.75rem]">
                                                        <a href="javascript:void(0);"
                                                            class="text-secondary font-semibold me-2 inline-block">cancel</a>
                                                        <a href="javascript:void(0);"
                                                            class="text-primary font-semibold">open</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box !border-0">
                                        <div class="alert alert-secondary border !border-secondary mb-0 p-2"
                                            id="dismiss-alert58">
                                            <div class="flex align-items-start">
                                                <div class="me-2">
                                                    <svg class="sm:flex-shrink-0 fill-secondary"
                                                        xmlns="http://www.w3.org/2000/svg" height="1.5rem"
                                                        viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                        <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                                                    </svg>
                                                </div>
                                                <div class="text-secondary w-full">
                                                    <div class="font-semibold flex justify-between">Secondary
                                                        Alert<button type="button"
                                                            class="inline-flex  rounded-sm text-secondary focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                            data-hs-remove-element="#dismiss-alert58">
                                                            <span class="sr-only">Dismiss</span>
                                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button></div>
                                                    <div class="text-[0.75rem] opacity-[0.8] mb-1">Success alert to show to
                                                        success message
                                                    </div>
                                                    <div class="text-[0.75rem]">
                                                        <a href="javascript:void(0);"
                                                            class="text-danger font-semibold me-2 inline-block">cancel</a>
                                                        <a href="javascript:void(0);"
                                                            class="text-secondary font-semibold">open</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box !border-0">
                                        <div class="alert alert-warning border !border-warning mb-0 p-2"
                                            id="dismiss-alert59">
                                            <div class="flex align-items-start">
                                                <div class="me-2">
                                                    <svg class="sm:flex-shrink-0 fill-warning"
                                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                        height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M12,5.99L19.53,19H4.47L12,5.99 M12,2L1,21h22L12,2L12,2z" />
                                                                    <polygon points="13,16 11,16 11,18 13,18" />
                                                                    <polygon points="13,10 11,10 11,15 13,15" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="text-warning w-full">
                                                    <div class="font-semibold flex justify-between">Warning
                                                        Alert<button type="button"
                                                            class="inline-flex  rounded-sm text-warning focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                            data-hs-remove-element="#dismiss-alert59">
                                                            <span class="sr-only">Dismiss</span>
                                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button></div>
                                                    <div class="text-[0.75rem] opacity-[0.8] mb-1">This alert is created to just show the warning alert message.</div>
                                                    <div class="text-[0.75rem]">
                                                        <a href="javascript:void(0);"
                                                            class="text-black dark:text-white font-semibold me-2 inline-block">cancel</a>
                                                        <a href="javascript:void(0);"
                                                            class="text-warning font-semibold">open</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box !border-0">
                                        <div class="alert alert-danger border !border-danger mb-0 p-2" id="dismiss-alert60">
                                            <div class="flex align-items-start">
                                                <div class="me-2">
                                                    <svg class="sm:flex-shrink-0 fill-danger"
                                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                        height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z" />
                                                                    <rect height="6" width="2" x="11" y="7" />
                                                                    <rect height="2" width="2" x="11" y="15" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="text-danger w-full">
                                                    <div class="font-semibold flex justify-between">Danger
                                                        Alert<button type="button"
                                                            class="inline-flex  rounded-sm text-danger focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                            data-hs-remove-element="#dismiss-alert60">
                                                            <span class="sr-only">Dismiss</span>
                                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button></div>
                                                    <div class="text-[0.75rem] opacity-[0.8] mb-1">This alert is created to just show the danger alert message.
                                                    </div>
                                                    <div class="text-[0.75rem]">
                                                        <a href="javascript:void(0);"
                                                            class="text-info font-semibold me-2 inline-block">cancel</a>
                                                        <a href="javascript:void(0);"
                                                            class="text-danger font-semibold">open</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box !border-0">
                                        <div class="alert alert-solid-primary border border-primary mb-0 p-2"
                                            id="dismiss-alert61">
                                            <div class="flex align-items-start">
                                                <div class="me-2">
                                                    <svg class="sm:flex-shrink-0 svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                                    </svg>
                                                </div>
                                                <div class="text-white w-full">
                                                    <div class="font-semibold flex justify-between">Information
                                                        Alert<button type="button"
                                                            class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                            data-hs-remove-element="#dismiss-alert61">
                                                            <span class="sr-only">Dismiss</span>
                                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button></div>
                                                    <div class="text-[0.75rem] opacity-[0.8] mb-1">Information alert to show
                                                        to information
                                                    </div>
                                                    <div class="text-[0.75rem]">
                                                        <a href="javascript:void(0);"
                                                            class="text-white font-semibold me-2 op-7">cancel</a>
                                                        <a href="javascript:void(0);"
                                                            class="text-white font-semibold">open</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box !border-0">
                                        <div class="alert alert-solid-secondary border border-secondary mb-0 p-2"
                                            id="dismiss-alert62">
                                            <div class="flex align-items-start">
                                                <div class="me-2">
                                                    <svg class="sm:flex-shrink-0 svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                        <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                                                    </svg>
                                                </div>
                                                <div class="text-white w-full">
                                                    <div class="font-semibold flex justify-between">Success
                                                        Alert<button type="button"
                                                            class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                            data-hs-remove-element="#dismiss-alert62">
                                                            <span class="sr-only">Dismiss</span>
                                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button></div>
                                                    <div class="text-[0.75rem] opacity-[0.8] mb-1">Success alert to show to
                                                        success message
                                                    </div>
                                                    <div class="text-[0.75rem]">
                                                        <a href="javascript:void(0);"
                                                            class="text-white font-semibold me-2">close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box !border-0">
                                        <div class="alert alert-solid-warning border border-warning mb-0 p-2"
                                            id="dismiss-alert63">
                                            <div class="flex align-items-start">
                                                <div class="me-2">
                                                    <svg class="sm:flex-shrink-0 svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 24 24" height="1.5rem"
                                                        viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M12,5.99L19.53,19H4.47L12,5.99 M12,2L1,21h22L12,2L12,2z" />
                                                                    <polygon points="13,16 11,16 11,18 13,18" />
                                                                    <polygon points="13,10 11,10 11,15 13,15" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="text-white w-full">
                                                    <div class="font-semibold flex justify-between">Warning
                                                        Alert<button type="button"
                                                            class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                            data-hs-remove-element="#dismiss-alert63">
                                                            <span class="sr-only">Dismiss</span>
                                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button></div>
                                                    <div class="text-[0.75rem] opacity-[0.8] mb-1">Warning alert to show to
                                                        warning message
                                                    </div>
                                                    <div class="text-[0.75rem]">
                                                        <a href="javascript:void(0);"
                                                            class="text-white font-semibold me-2 op-7">skip</a>
                                                        <a href="javascript:void(0);"
                                                            class="text-white font-semibold">open</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box !border-0">
                                        <div class="alert alert-solid-danger border border-danger mb-0 p-2"
                                            id="dismiss-alert64">
                                            <div class="flex align-items-start">
                                                <div class="me-2">
                                                    <svg class="sm:flex-shrink-0 svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 24 24" height="1.5rem"
                                                        viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z" />
                                                                    <rect height="6" width="2" x="11" y="7" />
                                                                    <rect height="2" width="2" x="11" y="15" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="text-white w-full">
                                                    <div class="font-semibold flex justify-between">Danger
                                                        Alert<button type="button"
                                                            class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                            data-hs-remove-element="#dismiss-alert64">
                                                            <span class="sr-only">Dismiss</span>
                                                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button></div>
                                                    <div class="text-[0.75rem] opacity-[0.8] mb-1">Danger alert to show to
                                                        danger message
                                                    </div>
                                                    <div class="text-[0.75rem]">
                                                        <a href="javascript:void(0);"
                                                            class="text-white font-semibold me-2 op-7">close</a>
                                                        <a href="javascript:void(0);"
                                                            class="text-white font-semibold">continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Additional content
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="alert alert-primary overflow-hidden !p-0" role="alert"
                                                id="dismiss-alert65">
                                                <div class="p-4 bg-primary text-white flex justify-between">
                                                    <h6 class="aletr-heading mb-0 text-[1rem]">Thank you for reporting this.
                                                    </h6>
                                                    <button type="button"
                                                        class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                        data-hs-remove-element="#dismiss-alert65">
                                                        <span class="sr-only">Dismiss</span>
                                                        <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="p-3">
                                                    <p class="mb-0">We appreciate you to let us know the bug in the template
                                                        and for warning us about future consequences <a
                                                            href="javascript:void(0);"
                                                            class="font-semibold underline text-defaulttextcolor">Visit for
                                                            support
                                                            for queries ?</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="alert alert-secondary overflow-hidden !p-0" role="alert"
                                                id="dismiss-alert66">
                                                <div class="p-4 bg-secondary text-white flex justify-between">
                                                    <h6 class="aletr-heading mb-0 text-[1rem]">Thank you for reporting this.
                                                    </h6>
                                                    <button type="button"
                                                        class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                        data-hs-remove-element="#dismiss-alert66">
                                                        <span class="sr-only">Dismiss</span>
                                                        <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="p-4">
                                                    <p class="mb-0">We appreciate you to let us know the bug in the template
                                                        and for warning us about future consequences <a
                                                            href="javascript:void(0);"
                                                            class="font-semibold underline text-defaulttextcolor">Visit for
                                                            support
                                                            for queries ?</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="alert alert-success !border-success/10 overflow-hidden !p-0"
                                                role="alert" id="dismiss-alert67">
                                                <div class="p-4 bg-success text-white flex justify-between">
                                                    <h6 class="aletr-heading mb-0 text-[1rem]">Thank you for reporting this.
                                                    </h6>
                                                    <button type="button"
                                                        class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                        data-hs-remove-element="#dismiss-alert67">
                                                        <span class="sr-only">Dismiss</span>
                                                        <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="p-4">
                                                    <p class="mb-0">We appreciate you to let us know the bug in the template
                                                        and for warning us about future consequences <a
                                                            href="javascript:void(0);"
                                                            class="font-semibold underline text-defaulttextcolor">Visit for
                                                            support
                                                            for queries ?</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="alert alert-warning overflow-hidden !p-0" role="alert"
                                                id="dismiss-alert68">
                                                <div class="p-4 bg-warning text-white flex justify-between">
                                                    <h6 class="aletr-heading mb-0 text-[1rem]">Thank you for reporting this.
                                                    </h6>
                                                    <button type="button"
                                                        class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                                        data-hs-remove-element="#dismiss-alert68">
                                                        <span class="sr-only">Dismiss</span>
                                                        <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="p-4">
                                                    <p class="mb-0">We appreciate you to let us know the bug in the template
                                                        and for warning us about future consequences <a
                                                            href="javascript:void(0);"
                                                            class="font-semibold underline text-defaulttextcolor">Visit for
                                                            support
                                                            for queries ?</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="xl:col-span-6"&gt;
        &lt;div class="alert alert-primary overflow-hidden p-0" role="alert"&gt;
            &lt;div class="p-3 bg-primary text-white flex justify-between"&gt;
                &lt;h6 class="aletr-heading mb-0"&gt;Thank you for reporting this.&lt;/h6&gt;
                &lt;button type="button" class="btn-close p-0 text-white" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;hr class="my-0"&gt;
            &lt;div class="p-3"&gt;
                &lt;p class="mb-0"&gt;We appreciate you to let us know the bug in the template and for warning us about future consequences &lt;a href="javascript:void(0);" class="font-semibold text-decoration-underline"&gt;Visit for support for queries ?&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="xl:col-span-6"&gt;
        &lt;div class="alert alert-secondary overflow-hidden p-0" role="alert"&gt;
            &lt;div class="p-3 bg-secondary text-white flex justify-between"&gt;
                &lt;h6 class="aletr-heading mb-0"&gt;Thank you for reporting this.&lt;/h6&gt;
                &lt;button type="button" class="btn-close p-0 text-white" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;hr class="my-0"&gt;
            &lt;div class="p-3"&gt;
                &lt;p class="mb-0"&gt;We appreciate you to let us know the bug in the template and for warning us about future consequences &lt;a href="javascript:void(0);" class="font-semibold text-decoration-underline"&gt;Visit for support for queries ?&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="xl:col-span-6"&gt;
        &lt;div class="alert alert-success overflow-hidden p-0" role="alert"&gt;
            &lt;div class="p-3 bg-success text-white flex justify-between"&gt;
                &lt;h6 class="aletr-heading mb-0"&gt;Thank you for reporting this.&lt;/h6&gt;
                &lt;button type="button" class="btn-close p-0 text-white" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;hr class="my-0"&gt;
            &lt;div class="p-3"&gt;
                &lt;p class="mb-0"&gt;We appreciate you to let us know the bug in the template and for warning us about future consequences &lt;a href="javascript:void(0);" class="font-semibold text-decoration-underline"&gt;Visit for support for queries ?&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="xl:col-span-6"&gt;
        &lt;div class="alert alert-warning overflow-hidden p-0" role="alert"&gt;
            &lt;div class="p-3 bg-warning text-white flex justify-between"&gt;
                &lt;h6 class="aletr-heading mb-0"&gt;Thank you for reporting this.&lt;/h6&gt;
                &lt;button type="button" class="btn-close p-0 text-white" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;i class="bi bi-x"&gt;&lt;/i&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;hr class="my-0"&gt;
            &lt;div class="p-3"&gt;
                &lt;p class="mb-0"&gt;We appreciate you to let us know the bug in the template and for warning us about future consequences &lt;a href="javascript:void(0);" class="font-semibold text-decoration-underline"&gt;Visit for support for queries ?&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!--ROW-END-->

                    <!-- Start::row-6 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">
                                Alerts With Description
                            </h5>
                            </div>
                            <div class="box-body">
                            <div class="bg-warning/10 border border-warning/20 alert mb-0" role="alert">
                                <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-warning/40 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </div>
                                <div class="ms-2">
                                    <h3 class="text-sm text-yellow-800 font-semibold">
                                    Cannot connect to the database
                                    </h3>
                                    <div class="mt-1 text-sm text-yellow-700">
                                    We are unable to save any progress at this time.
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">
                                Alerts With Link on Right
                            </h5>
                            </div>
                            <div class="box-body">
                            <div class="bg-light border border-light alert mb-0" role="alert">
                                <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-gray-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </svg>
                                </div>
                                <div class="flex-1 md:flex md:justify-between ms-2">
                                    <p class="text-sm text-gray-700">
                                    A new software update is available. See what's new in version 3.0.7
                                    </p>
                                    <p class="text-sm mt-3 md:mt-0 md:ms-6">
                                    <a class="text-gray-700 hover:text-gray-500 font-medium whitespace-nowrap" href="javascript:void(0);">Details</a>
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-6 -->
        
                    <!-- Start::row-7 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">
                                Alerts With Actions
                            </h5>
                            </div>
                            <div class="box-body">
                            <div class="bg-primary/10 border border-primary alert mb-0" role="alert">
                                <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-primary mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </svg>
                                </div>
                                <div class="ms-2">
                                    <h6 class="text-gray-800 dark:text-gray-200 font-semibold">
                                    YouTube would like you to send notifications
                                    </h6>
                                    <div class="mt-2 mb-1 text-sm text-gray-600 dark:text-white/70">
                                    Notifications may include alerts, sounds and icon badges. These can be configured in Settings.
                                    </div>
                                    <div class="">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <button type="button"
                                        class="inline-flex px-2 py-1 justify-center underline items-center gap-2 rounded-sm border border-transparent font-medium text-primary hover:underline focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm">
                                        Don't allow
                                        </button>
                                        <button type="button"
                                        class="inline-flex px-2 py-1 justify-center underline items-center gap-2 rounded-sm border border-transparent font-medium text-primary hover:underline focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm">
                                        Allow
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">
                                Alerts With List
                            </h5>
                            </div>
                            <div class="box-body">
                            <div class="bg-danger/10 border border-danger alert mb-0" role="alert">
                                <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-danger mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                    </svg>
                                </div>
                                <div class="ms-2">
                                    <h3 class="text-sm text-danger font-semibold">
                                    A problem has been occurred while submitting your data.
                                    </h3>
                                    <div class="mt-2 text-sm text-danger">
                                    <ul class="list-disc space-y-1 ps-5">
                                        <li>
                                        This username is already in use
                                        </li>
                                        <li>
                                        Email field can't be empty
                                        </li>
                                        <li>
                                        Please enter a valid phone number
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-7 -->
            
                    <!-- Start::row-8 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">
                                Alerts With Dismissable
                            </h5>
                            </div>
                            <div class="box-body">
                            <div id="dismiss-alert"
                                class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-success/10 border border-success/20 alert mb-0"
                                role="alert">
                                <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-success mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </div>
                                <div class="ms-3">
                                    <div class="text-sm text-success font-medium">
                                    File has been successfully uploaded.
                                    </div>
                                </div>
                                <div class="ps-3 ms-auto">
                                    <div class="mx-1 my-auto">
                                    <button type="button"
                                        class="inline-flex  rounded-sm text-success focus:outline-none focus:ring-0 focus:ring-offset-0 "
                                        data-hs-remove-element="#dismiss-alert">
                                        <span class="sr-only">Dismiss</span>
                                        <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                            fill="currentColor" />
                                        </svg>
                                    </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                        <div class="box">
                            <div class="box-header">
                            <h5 class="box-title">
                                Alerts With Discovery
                            </h5>
                            </div>
                            <div class="box-body">
                            <div class="border shadow-lg alert mb-0 dark:bg-bodybg dark:border-white/10" role="alert">
                                <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-primary mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </svg>
                                </div>
                                <div class="ms-2">
                                    <h6 class="text-gray-800 font-semibold dark:text-white">
                                    New version published
                                    </h6>
                                    <p class="mt-2 text-sm text-gray-700 dark:text-white/70">
                                    Chris Lynch published a new version of this page. Refresh to see the changes.
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-8 -->
            
                    <!-- Start::row-8 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">
                                bordered Styles
                                </h5>
                                </div>
                                <div class="box-body space-y-3">
                                <div class="bg-success/10 border-t-2 border-success rounded-md p-4 dark:bg-success/30" role="alert">
                                    <div class="flex">
                                    <div class="flex-shrink-0">
                                        <!-- Icon -->
                                        <span class="inline-flex justify-center items-center  rounded-full  text-success   dark:text-white">
                                            <svg class="custom-alert-icon fill-success inline-flex" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                                            </svg>
                                        </span>
                                        <!-- End Icon -->
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="text-gray-800 font-semibold text-sm dark:text-white">
                                        Successfully updated.
                                        </h3>
                                        <p class="text-sm text-gray-700 dark:text-gray-200">
                                        You have successfully updated your email preferences.
                                        </p>
                                    </div>
                                    </div>
                                </div>
                                <div class="bg-danger/10 border-s-4 border-danger p-4 dark:bg-danger/30" role="alert">
                                    <div class="flex">
                                    <div class="flex-shrink-0">
                                        <!-- Icon -->
                                        <span class="inline-flex justify-center items-center  rounded-full  text-danger   dark:text-white">
                                            <svg class="custom-alert-icon fill-danger" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"></path>
                                                </svg>                            </span>
                                        <!-- End Icon -->
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="text-gray-800 font-semibold text-sm dark:text-white">
                                        Error!
                                        </h3>
                                        <p class="text-sm text-gray-700 dark:text-gray-200">
                                        Your purchase has been declined.
                                        </p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-8 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

        <!-- Alerts JS -->
        @vite('resources/assets/js/alerts.js')

@endsection
