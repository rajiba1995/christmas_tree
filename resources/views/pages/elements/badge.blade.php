
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Badge</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Badge 
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <span class="badge bg-primary text-white">Primary</span>
                                    <span class="badge bg-secondary text-white">Secondary</span>
                                    <span class="badge bg-success text-white">Success</span>
                                    <span class="badge bg-danger text-white">Danger</span>
                                    <span class="badge bg-warning text-white">Warning</span>
                                    <span class="badge bg-info text-white">Info</span>
                                    <span class="badge bg-light text-dark">Light</span>
                                    <span class="badge bg-black dark:bg-white dark:text-black text-white">Dark</span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-primary text-white">Primary&lt;/span&gt;
    &lt;span class="badge bg-secondary text-white"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge bg-success text-white"&gt;Success&lt;/span&gt;
    &lt;span class="badge bg-danger text-white"&gt;Danger&lt;/span&gt;
    &lt;span class="badge bg-warning text-white"&gt;Warning&lt;/span&gt;
    &lt;span class="badge bg-info text-white"&gt;Info&lt;/span&gt;
    &lt;span class="badge bg-light text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge bg-dark text-white"&gt;Dark&lt;/span&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Pill badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <span class="badge !rounded-full bg-primary text-white">Primary</span>
                                    <span class="badge !rounded-full bg-secondary text-white">Secondary</span>
                                    <span class="badge !rounded-full bg-success text-white">Success</span>
                                    <span class="badge !rounded-full bg-danger text-white">Danger</span>
                                    <span class="badge !rounded-full bg-warning text-white">Warning</span>
                                    <span class="badge !rounded-full bg-info text-white">Info</span>
                                    <span class="badge !rounded-full bg-light text-dark">Light</span>
                                    <span class="badge !rounded-full bg-black dark:bg-white dark:text-black text-white">Dark</span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="badge rounded-full bg-primary text-white">Primary&lt;/span&gt;
    &lt;span class="badge rounded-full bg-secondary text-white"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge rounded-full bg-success text-white"&gt;Success&lt;/span&gt;
    &lt;span class="badge rounded-full bg-danger text-white"&gt;Danger&lt;/span&gt;
    &lt;span class="badge rounded-full bg-warning text-white"&gt;Warning&lt;/span&gt;
    &lt;span class="badge rounded-full bg-info text-white"&gt;Info&lt;/span&gt;
    &lt;span class="badge rounded-full bg-light text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge rounded-full bg-dark text-white"&gt;Dark&lt;/span&gt; </code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Light Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <span class="badge bg-primary/10 text-primary">Primary</span>
                                    <span class="badge bg-secondary/10 text-secondary">Secondary</span>
                                    <span class="badge bg-success/10 text-success">Success</span>
                                    <span class="badge bg-danger/10 text-danger">Danger</span>
                                    <span class="badge bg-warning/10 text-warning">Warning</span>
                                    <span class="badge bg-info/10 text-info">Info</span>
                                    <span class="badge bg-light/10 text-black dark:text-defaulttextcolor/70">Light</span>
                                    <span class="badge bg-black/10 text-black dark:text-defaulttextcolor/70">Dark</span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-primary/10 text-primary">Primary&lt;/span&gt;
    &lt;span class="badge bg-secondary/10 text-secondary"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge bg-success/10 text-success"&gt;Success&lt;/span&gt;
    &lt;span class="badge bg-danger/10 text-danger"&gt;Danger&lt;/span&gt;
    &lt;span class="badge bg-warning/10 text-warning"&gt;Warning&lt;/span&gt;
    &lt;span class="badge bg-info/10 text-info"&gt;Info&lt;/span&gt;
    &lt;span class="badge bg-light/10 text-black dark:text-defaulttextcolor/70"&gt;Light&lt;/span&gt;
    &lt;span class="badge text-black dark:text-defaulttextcolor/70"&gt;Dark&lt;/span&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Light Pill Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <span class="badge !rounded-full bg-primary/10 text-primary">Primary</span>
                                    <span class="badge !rounded-full bg-secondary/10 text-secondary">Secondary</span>
                                    <span class="badge !rounded-full bg-success/10 text-success">Success</span>
                                    <span class="badge !rounded-full bg-danger/10 text-danger">Danger</span>
                                    <span class="badge !rounded-full bg-warning/10 text-warning">Warning</span>
                                    <span class="badge !rounded-full bg-info/10 text-info">Info</span>
                                    <span class="badge !rounded-full bg-light/10 text-dark">Light</span>
                                    <span class="badge !rounded-full bg-black/10">Dark</span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="badge rounded-full bg-primary/10 text-primary"&gt;Primary&lt;/span&gt;
    &lt;span class="badge rounded-full bg-secondary/10 text-secondary"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge rounded-full bg-success/10 text-success"&gt;Success&lt;/span&gt;
    &lt;span class="badge rounded-full bg-danger/10 text-danger"&gt;Danger&lt;/span&gt;
    &lt;span class="badge rounded-full bg-warning/10 text-warning"&gt;Warning&lt;/span&gt;
    &lt;span class="badge rounded-full bg-info/10 text-info"&gt;Info&lt;/span&gt;
    &lt;span class="badge rounded-full bg-light/10 text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge rounded-full bg-dark/10"&gt;Dark&lt;/span&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Gradient Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <span class="badge bg-primary-gradient text-white">Primary</span>
                                    <span class="badge bg-secondary-gradient text-white">Secondary</span>
                                    <span class="badge bg-success-gradient text-white">Success</span>
                                    <span class="badge bg-danger-gradient text-white">Danger</span>
                                    <span class="badge bg-warning-gradient text-white">Warning</span>
                                    <span class="badge bg-info-gradient text-white">Info</span>
                                    <span class="badge bg-orange-gradient text-white">orange</span>
                                    <span class="badge bg-purple-gradient text-white">purple</span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="badge badge-primary-gradient"&gt;Primary&lt;/span&gt;
    &lt;span class="badge badge-secondary-gradient"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge badge-success-gradient"&gt;Success&lt;/span&gt;
    &lt;span class="badge badge-danger-gradient"&gt;Danger&lt;/span&gt;
    &lt;span class="badge badge-warning-gradient"&gt;Warning&lt;/span&gt;
    &lt;span class="badge badge-info-gradient"&gt;Info&lt;/span&gt;
    &lt;span class="badge badge-orange-gradient"&gt;orange&lt;/span&gt;
    &lt;span class="badge badge-purple-gradient"&gt;purple&lt;/span&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Gradient Pill Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <span class="badge bg-primary-gradient text-white !rounded-full">Primary</span>
                                    <span class="badge bg-secondary-gradient text-white !rounded-full">Secondary</span>
                                    <span class="badge bg-success-gradient text-white !rounded-full">Success</span>
                                    <span class="badge bg-danger-gradient text-white !rounded-full">Danger</span>
                                    <span class="badge bg-warning-gradient text-white !rounded-full">Warning</span>
                                    <span class="badge bg-info-gradient text-white !rounded-full">Info</span>
                                    <span class="badge bg-orange-gradient text-white !rounded-full">orange</span>
                                    <span class="badge bg-purple-gradient text-white !rounded-full">purple</span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="badge badge-primary-gradient"&gt;Primary&lt;/span&gt;
    &lt;span class="badge rounded-full badge-secondary-gradient"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge rounded-full badge-success-gradient"&gt;Success&lt;/span&gt;
    &lt;span class="badge rounded-full badge-danger-gradient"&gt;Danger&lt;/span&gt;
    &lt;span class="badge rounded-full badge-warning-gradient"&gt;Warning&lt;/span&gt;
    &lt;span class="badge rounded-full badge-info-gradient"&gt;Info&lt;/span&gt;
    &lt;span class="badge rounded-full badge-orange-gradient"&gt;orange&lt;/span&gt;
    &lt;span class="badge rounded-full badge-purple-gradient"&gt;purple&lt;/span&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Outline Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <span class="badge bg-outline-primary">Primary</span>
                                    <span class="badge bg-outline-secondary">Secondary</span>
                                    <span class="badge bg-outline-success">Success</span>
                                    <span class="badge bg-outline-danger">Danger</span>
                                    <span class="badge bg-outline-warning">Warning</span>
                                    <span class="badge bg-outline-info">Info</span>
                                    <span class="badge bg-outline-light !text-black dark:!text-defaulttextcolor/70">Light</span>
                                    <span class="badge bg-outline-dark dark:!border-white dark:!text-defaulttextcolor/70">Dark</span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-outline-primary">Primary&lt;/span&gt;
    &lt;span class="badge bg-outline-secondary"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge bg-outline-success"&gt;Success&lt;/span&gt;
    &lt;span class="badge bg-outline-danger"&gt;Danger&lt;/span&gt;
    &lt;span class="badge bg-outline-warning"&gt;Warning&lt;/span&gt;
    &lt;span class="badge bg-outline-info"&gt;Info&lt;/span&gt;
    &lt;span class="badge bg-outline-light text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge bg-outline-dark"&gt;Dark&lt;/span&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Outline Pill Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <span class="badge !rounded-full bg-outline-primary">Primary</span>
                                    <span class="badge !rounded-full bg-outline-secondary">Secondary</span>
                                    <span class="badge !rounded-full bg-outline-success">Success</span>
                                    <span class="badge !rounded-full bg-outline-danger">Danger</span>
                                    <span class="badge !rounded-full bg-outline-warning">Warning</span>
                                    <span class="badge !rounded-full bg-outline-info">Info</span>
                                    <span class="badge !rounded-full bg-outline-light !text-black dark:!text-defaulttextcolor/70">Light</span>
                                    <span class="badge !rounded-full bg-outline-dark dark:!border-white  dark:!text-defaulttextcolor/70">Dark</span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-outline-primary">Primary&lt;/span&gt;
    &lt;span class="badge !rounded-full bg-outline-secondary"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge !rounded-full bg-outline-success"&gt;Success&lt;/span&gt;
    &lt;span class="badge !rounded-full bg-outline-danger"&gt;Danger&lt;/span&gt;
    &lt;span class="badge !rounded-full bg-outline-warning"&gt;Warning&lt;/span&gt;
    &lt;span class="badge !rounded-full bg-outline-info"&gt;Info&lt;/span&gt;
    &lt;span class="badge !rounded-full bg-outline-light text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge !rounded-full bg-outline-dark"&gt;Dark&lt;/span&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

                    <!-- Start::row-5 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Buttons With Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <button type="button" class="ti-btn bg-primary text-white my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-secondary">4</span>
                                    </button>
                                    <button type="button" class="ti-btn bg-secondary text-white my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-primary">7</span>
                                    </button>
                                    <button type="button" class="ti-btn bg-success text-white my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-danger">12</span>
                                    </button>
                                    <button type="button" class="ti-btn bg-info text-white my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-warning">32</span>
                                    </button>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary text-white my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-secondary text-white"&gt;4&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary text-white my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-primary text-white"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-success text-white my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-danger"&gt;12&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-info text-white my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-warning"&gt;32&lt;/span&gt;
    &lt;/button&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Outline Button Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body flex flex-wrap gap-2">
                                    <button type="button" class="ti-btn ti-btn-outline-primary my-1 me-2">
                                        Notifications <span class="badge bg-primary ms-2 text-white">4</span>
                                    </button>
                                    <button type="button" class="ti-btn ti-btn-outline-secondary my-1 me-2">
                                        Notifications <span class="badge bg-secondary ms-2 text-white">7</span>
                                    </button>
                                    <button type="button" class="ti-btn ti-btn-outline-success my-1 me-2">
                                        Notifications <span class="badge bg-success ms-2 text-white">12</span>
                                    </button>
                                    <button type="button" class="ti-btn ti-btn-outline-info my-1 me-2">
                                        Notifications <span class="badge bg-info ms-2 text-white">32</span>
                                    </button>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-outline-primary  my-1 me-2"&gt;
        Notifications &lt;span class="badge bg-primary ms-2 text-white"&gt;4&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary my-1 me-2"&gt;
        Notifications &lt;span class="badge bg-secondary ms-2 text-white"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success my-1 me-2"&gt;
        Notifications &lt;span class="badge bg-success ms-2 text-white"&gt;12&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-info my-1 me-2"&gt;
        Notifications &lt;span class="badge bg-info ms-2 text-white"&gt;32&lt;/span&gt;
    &lt;/button&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-5 -->

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Badges with Remove Button</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="badge gap-2 bg-primary/10 text-primary !mb-1">
                                        Badge
                                        <button type="button"
                                            class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-primary hover:bg-primary/10 hover:text-primary focus:outline-none focus:bg-primary/10 focus:text-primary">
                                            <span class="sr-only">Remove badge gap-2</span>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="badge gap-2 bg-secondary/10 text-secondary !mb-1">
                                        Badge
                                        <button type="button"
                                            class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary/10 hover:text-secondary focus:outline-none focus:bg-secondary focus:text-secondary">
                                            <span class="sr-only">Remove badge</span>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="badge gap-2 bg-success/10 text-success !mb-1">
                                        Badge
                                        <button type="button"
                                            class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-success hover:bg-success/10 hover:text-success focus:outline-none focus:bg-red-200 focus:text-success">
                                            <span class="sr-only">Remove badge</span>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="badge gap-2 bg-danger/10 text-danger !mb-1">
                                        Badge
                                        <button type="button"
                                            class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-danger hover:bg-danger/10 hover:text-danger focus:outline-none focus:bg-danger/10 focus:text-danger">
                                            <span class="sr-only">Remove badge</span>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="badge gap-2 bg-warning/10 text-warning !mb-1">
                                        Badge
                                        <button type="button"
                                            class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-warning hover:bg-warning/10 hover:text-warning focus:outline-none focus:bg-warning/10 focus:text-warning">
                                            <span class="sr-only">Remove badge</span>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="badge gap-2 !mb-1 bg-black/10 dark:bg-light dark:text-white text-black">
                                        Badge
                                        <button type="button"
                                            class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full dark:text-white text-black hover:bg-black/10 hover:text-black focus:outline-none focus:bg-black/10 focus:text-black/10">
                                            <span class="sr-only">Remove badge</span>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="badge gap-2 bg-orangemain/10 text-orangemain !mb-1">
                                        Badge
                                        <button type="button"
                                            class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-orange-600 hover:bg-orange-200 hover:text-orange-500 focus:outline-none focus:bg-orange-200 focus:text-orange-500">
                                            <span class="sr-only">Remove badge</span>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="badge gap-2 bg-pinkmain/10 text-pinkmain !mb-1">
                                        Badge
                                        <button type="button"
                                            class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-pinkmain hover:bg-pinkmain/10 hover:text-pinkmain focus:outline-none focus:bg-pinkmain/10 focus:text-pinkmain">
                                            <span class="sr-only">Remove badge</span>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="badge gap-2 bg-purplemain/10 text-purplemain !mb-1">
                                        Badge
                                        <button type="button"
                                            class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-purplemain dark:text-purplemain hover:bg-purplemain/10 hover:text-purplemain dark:hover:bg-black/20 dark:hover:text-purplemain focus:outline-none focus:bg-gray-200 focus:text-gray-500">
                                            <span class="sr-only">Remove badge</span>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;span class="badge gap-2 bg-primary/10 text-primary"&gt;
            Badge
            &lt;button type="button"
                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-primary hover:bg-primary/10 hover:text-primary focus:outline-none focus:bg-primary/10 focus:text-primary"&gt;
                &lt;span class="sr-only"&gt;Remove badge gap-2&lt;/span&gt;
                &lt;svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/span&gt;
        &lt;span class="badge gap-2 bg-secondary/10 text-secondary"&gt;
            Badge
            &lt;button type="button"
                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary/10 hover:text-secondary focus:outline-none focus:bg-secondary focus:text-secondary"&gt;
                &lt;span class="sr-only"&gt;Remove badge&lt;/span&gt;
                &lt;svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/span&gt;
        &lt;span class="badge gap-2 bg-success/10 text-success"&gt;
            Badge
            &lt;button type="button"
                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-success hover:bg-success/10 hover:text-success focus:outline-none focus:bg-red-200 focus:text-success"&gt;
                &lt;span class="sr-only"&gt;Remove badge&lt;/span&gt;
                &lt;svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/span&gt;
        &lt;span class="badge gap-2 bg-danger/10 text-danger"&gt;
            Badge
            &lt;button type="button"
                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-danger hover:bg-danger/10 hover:text-danger focus:outline-none focus:bg-danger/10 focus:text-danger"&gt;
                &lt;span class="sr-only"&gt;Remove badge&lt;/span&gt;
                &lt;svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/span&gt;
        &lt;span class="badge gap-2 bg-warning/10 text-warning"&gt;
            Badge
            &lt;button type="button"
                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-warning hover:bg-warning/10 hover:text-warning focus:outline-none focus:bg-warning/10 focus:text-warning"&gt;
                &lt;span class="sr-only"&gt;Remove badge&lt;/span&gt;
                &lt;svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/span&gt;
        &lt;span class="badge gap-2 bg-black/10 text-black"&gt;
            Badge
            &lt;button type="button"
                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-black hover:bg-black/10 hover:text-black focus:outline-none focus:bg-black/10 focus:text-black/10"&gt;
                &lt;span class="sr-only"&gt;Remove badge&lt;/span&gt;
                &lt;svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/span&gt;
        &lt;span class="badge gap-2 bg-orangemain/10 text-orangemain"&gt;
            Badge
            &lt;button type="button"
                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-orange-600 hover:bg-orange-200 hover:text-orange-500 focus:outline-none focus:bg-orange-200 focus:text-orange-500"&gt;
                &lt;span class="sr-only"&gt;Remove badge&lt;/span&gt;
                &lt;svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/span&gt;
        &lt;span class="badge gap-2 bg-pinkmain/10 text-pinkmain"&gt;
            Badge
            &lt;button type="button"
                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-pinkmain hover:bg-pinkmain/10 hover:text-pinkmain focus:outline-none focus:bg-pinkmain/10 focus:text-pinkmain"&gt;
                &lt;span class="sr-only"&gt;Remove badge&lt;/span&gt;
                &lt;svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/span&gt;
        &lt;span class="badge gap-2 bg-purplemain/10 text-purplemain"&gt;
            Badge
            &lt;button type="button"
                class="flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-purplemain dark:text-purplemain hover:bg-purplemain/10 hover:text-purplemain dark:hover:bg-black/20 dark:hover:text-purplemain focus:outline-none focus:bg-gray-200 focus:text-gray-500"&gt;
                &lt;span class="sr-only"&gt;Remove badge&lt;/span&gt;
                &lt;svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Badge With Indicator</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <span class="badge gap-2 bg-primary/10 text-primary">
                                        <span class="w-1.5 h-1.5 inline-block bg-primary rounded-full"></span>
                                        Badge
                                    </span>
                                    <span class="badge gap-2 bg-secondary/10 text-secondary">
                                        <span class="w-1.5 h-1.5 inline-block bg-secondary rounded-full"></span>
                                        Badge
                                    </span>
                                    <span class="badge gap-2 bg-success/10 text-success">
                                        <span class="w-1.5 h-1.5 inline-block bg-success rounded-full"></span>
                                        Badge
                                    </span>
                                    <span class="badge gap-2 bg-danger/10 text-danger">
                                        <span class="w-1.5 h-1.5 inline-block bg-danger rounded-full"></span>
                                        Badge
                                    </span>
                                    <span class="badge gap-2 bg-warning/10 text-warning">
                                        <span class="w-1.5 h-1.5 inline-block bg-warning rounded-full"></span>
                                        Badge
                                    </span>
                                    <span class="badge gap-2 bg-black/10 text-black dark:bg-light dark:text-white">
                                        <span class="w-1.5 h-1.5 inline-block dark:bg-white bg-black rounded-full"></span>
                                        Badge
                                    </span>
                                    <span class="badge gap-2 bg-orangemain/10 text-orangemain">
                                        <span class="w-1.5 h-1.5 inline-block bg-orangemain rounded-full"></span>
                                        Badge
                                    </span>
                                    <span class="badge gap-2 bg-pinkmain/10 text-pinkmain">
                                        <span class="w-1.5 h-1.5 inline-block bg-pinkmain rounded-full"></span>
                                        Badge
                                    </span>
                                    <span class="badge gap-2 bg-purplemain/10 text-purplemain">
                                        <span class="w-1.5 h-1.5 inline-block bg-purplemain rounded-full"></span>
                                        Badge
                                    </span>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;span class="badge gap-2 bg-primary/10 text-primary"&gt;
        &lt;span class="w-1.5 h-1.5 inline-block bg-primary rounded-full">&lt;/span&gt;
        Badge
    &lt;/span&gt;
    &lt;span class="badge gap-2 bg-secondary/10 text-secondary"&gt;
        &lt;span class="w-1.5 h-1.5 inline-block bg-secondary rounded-full"&gt;&lt;/span&gt;
        Badge
    &lt;/span&gt;
    &lt;span class="badge gap-2 bg-success/10 text-success"&gt;
        &lt;span class="w-1.5 h-1.5 inline-block bg-success rounded-full"&gt;&lt;/span&gt;
        Badge
    &lt;/span&gt;
    &lt;span class="badge gap-2 bg-danger/10 text-danger"&gt;
        &lt;span class="w-1.5 h-1.5 inline-block bg-danger rounded-full"&gt;&lt;/span&gt;
        Badge
    &lt;/span&gt;
    &lt;span class="badge gap-2 bg-warning/10 text-warning"&gt;
        &lt;span class="w-1.5 h-1.5 inline-block bg-warning rounded-full"&gt;&lt;/span&gt;
        Badge
    &lt;/span&gt;
    &lt;span class="badge gap-2 bg-black/10 text-black"&gt;
        &lt;span class="w-1.5 h-1.5 inline-block bg-black rounded-full"&gt;&lt;/span&gt;
        Badge
    &lt;/span&gt;
    &lt;span class="badge gap-2 bg-orangemain/10 text-orangemain"&gt;
        &lt;span class="w-1.5 h-1.5 inline-block bg-orangemain rounded-full"&gt;&lt;/span&gt;
        Badge
    &lt;/span&gt;
    &lt;span class="badge gap-2 bg-pinkmain/10 text-pinkmain"&gt;
        &lt;span class="w-1.5 h-1.5 inline-block bg-pinkmain rounded-full"&gt;&lt;/span&gt;
        Badge
    &lt;/span&gt;
    &lt;span class="badge gap-2 bg-purplemain/10 text-purplemain"&gt;
        &lt;span class="w-1.5 h-1.5 inline-block bg-purplemain rounded-full"&gt;&lt;/span&gt;
        Badge
    &lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start::row- -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Headings
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <h1 class="text-[2.5rem]">Example heading <span class="badge bg-primary text-white">New</span></h1>
                                    <h2 class="text-[2rem]">Example heading <span class="badge bg-primary text-white">New</span></h2>
                                    <h3 class="text-[1.75rem]">Example heading <span class="badge bg-primary text-white">New</span></h3>
                                    <h4 class="text-[1.5rem]">Example heading <span class="badge bg-primary text-white">New</span></h4>
                                    <h5 class="text-[1.25rem]">Example heading <span class="badge bg-primary text-white">New</span></h5>
                                    <h6 class="text-[1rem]">Example heading <span class="badge bg-primary text-white">New</span></h6>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;h1&gt;Example heading &lt;span class="badge bg-primary"&gt;New&lt;/span&gt;&lt;/h1&gt;
    &lt;h2&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h2&gt;
    &lt;h3&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h3&gt;
    &lt;h4&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h4&gt;
    &lt;h5&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h5&gt;
    &lt;h6&gt;Example heading &lt;span class="badge bg-primary text-white"&gt;New&lt;/span&gt;&lt;/h6&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">Positioned Badges</div>
                                            <div class="prism-toggle">
                                                <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                        class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body flex flex-wrap gap-6">
                                            <button type="button" class="ti-btn bg-primary text-white relative">
                                                Inbox
                                                <span
                                                    class="absolute -top-2 left-[60%] translate-middle  badge !rounded-full bg-danger">
                                                    99+
                                                    <span class="hidden">unread messages</span>
                                                </span>
                                            </button>
                                            <button type="button" class="ti-btn bg-secondary text-white relative">
                                                Profile
                                                <span
                                                    class="absolute -top-2 left-[80%] translate-middle p-2 bg-success border border-light !rounded-full">
                                                    <span class="hidden">New alerts</span>
                                                </span>
                                            </button>
                                            <span class="avatar relative">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img" class="!rounded-md">
                                                <span
                                                    class="absolute -top-2 left-[80%] translate-middle p-1 bg-success border border-light !rounded-full">
                                                    <span class="hidden">New alerts</span>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-rounded relative">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                <span
                                                    class="absolute -top-2 left-[80%] translate-middle p-1 bg-success border border-light !rounded-full">
                                                    <span class="hidden">New alerts</span>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-rounded relative">
                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                <span
                                                    class="absolute -top-2 left-[60%] translate-middle badge bg-secondary !rounded-full shadow-lg text-white">1000+
                                                    <span class="hidden">New alerts</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="box-footer hidden !border-t-0">
                                            <!-- Prism Code -->
                                            <pre class="language-html"><code class="language-html">&lt;button type="button" class="ti-btn bg-primary text-white relative"&gt;
        Inbox
        &lt;span
            class="absolute -top-2 left-[60%] translate-middle  badge !rounded-full bg-danger"&gt;
            99+
            &lt;span class="hidden"&gt;unread messages&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="ti-btn bg-secondary text-white relative"&gt;
        Profile
        &lt;span
            class="absolute -top-2 left-[80%] translate-middle p-2 bg-success border border-light !rounded-full"&gt;
            &lt;span class="hidden"&gt;New alerts&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;span class="avatar relative"&gt;
        &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img" class="!rounded-md"&gt;
        &lt;span
            class="absolute -top-2 left-[80%] translate-middle p-1 bg-success border border-light !rounded-full"&gt;
            &lt;span class="hidden"&gt;New alerts&lt;/span&gt;
        &lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded relative"&gt;
        &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
        &lt;span
            class="absolute -top-2 left-[80%] translate-middle p-1 bg-success border border-light !rounded-full"&gt;
            &lt;span class="hidden"&gt;New alerts&lt;/span&gt;
        &lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded relative"&gt;
        &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
        &lt;span
            class="absolute -top-2 left-[60%] translate-middle badge bg-secondary !rounded-full shadow-lg text-white"&gt;1000+
            &lt;span class="hidden"&gt;New alerts&lt;/span&gt;
        &lt;/span&gt;
    &lt;/span&gt;</code></pre>
                                            <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row- -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
