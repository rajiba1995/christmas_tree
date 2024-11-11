
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Navbar</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Navbar 
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

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12">
                          <div class="box">
                            <div class="box-header">
                              <h5 class="box-title">Basic Navbar</h5>
                            </div>
                            <div class="box-body">
                              <header
                                class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                                <nav class=" w-full mx-auto sm:px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                  <a href="javascript:void(0);" class="header-logo">
                                    <img src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="logo" class="dark:hidden block w-10 h-10">
                                    <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block w-10 h-10">
                                  </a>
                                  <div class="flex flex-row items-center gap-5 mt-5 sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                    <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Account</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Work</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Blog</a>
                                  </div>
                                </nav>
                              </header>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="box">
                            <div class="box-header">
                              <h5 class="box-title">Navbar With horizontal scroll</h5>
                            </div>
                            <div class="box-body">
                              <header
                                class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                                <nav class="w-full mx-auto px-4 xxl:flex xxl:items-center xxl:justify-between" aria-label="Global">
                                  <a href="javascript:void(0);" class="header-logo">
                                    <img src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="logo" class="dark:hidden block w-10 h-10">
                                    <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block w-10 h-10">
                                  </a>
                                  <div
                                    class="flex flex-row items-center gap-5 mt-5 pb-2 overflow-x-auto xxl:justify-end xxl:mt-0 ltr:xxl:pl-5 rtl:xxl:pr-5 xxl:pb-0 xxl:overflow-x-visible">
                                    <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Dashboard</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Widgets</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Components</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Advanced Ui</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Basic Ui</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Elements</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Forms</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Pages</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Authentication</a>
                                    <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                      href="javascript:void(0);">Maps</a>
                                  </div>
                                </nav>
                              </header>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="box">
                            <div class="box-header">
                              <h5 class="box-title">Navbar With collapse</h5>
                            </div>
                            <div class="box-body">
                              <header
                                class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                                <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                  <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);" class="header-logo">
                                      <img src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="logo" class="dark:hidden block w-10 h-10">
                                      <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block w-10 h-10">
                                    </a>
                                    <div class="sm:hidden">
                                      <button type="button"
                                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-collapse="#navbar-with-collapse" aria-controls="navbar-with-collapse"
                                        aria-label="Toggle navigation">
                                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                  <div id="navbar-with-collapse" class="hidden basis-full grow sm:block">
                                    <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                      <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Account</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Work</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Blog</a>
                                    </div>
                                  </div>
                                </nav>
                              </header>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="box">
                            <div class="box-header">
                              <h5 class="box-title">Navbar Collapse with animation</h5>
                            </div>
                            <div class="box-body">
                              <header
                                class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                                <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                  <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);" class="header-logo">
                                      <img src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="logo" class="dark:hidden block w-10 h-10">
                                      <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block w-10 h-10">
                                    </a>
                                    <div class="sm:hidden">
                                      <button type="button"
                                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-collapse="#navbar-collapse-with-animation"
                                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                  <div id="navbar-collapse-with-animation"
                                    class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                    <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                      <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Account</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Work</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Blog</a>
                                    </div>
                                  </div>
                                </nav>
                              </header>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="box">
                            <div class="box-header">
                              <h5 class="box-title">Navbar with Image</h5>
                            </div>
                            <div class="box-body">
                              <header
                                class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                                <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                  <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);" class="header-logo">
                                      <img src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="logo" class="dark:hidden block w-10 h-10">
                                      <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block w-10 h-10">
                                    </a>
                                    <div class="sm:hidden">
                                      <button type="button"
                                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-collapse="#navbar-image-2" aria-controls="navbar-image-2"
                                        aria-label="Toggle navigation">
                                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                  <div id="navbar-image-2"
                                    class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                    <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                      <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Account</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Work</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Blog</a>
                                    </div>
                                  </div>
                                </nav>
                              </header>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="box">
                            <div class="box-header">
                              <h5 class="box-title">Navbar with Alignment</h5>
                            </div>
                            <div class="box-body">
                              <header
                                class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm dark:bg-bodybg">
                                <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                  <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);" class="header-logo">
                                      <img src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="logo" class="dark:hidden block w-10 h-10">
                                      <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block w-10 h-10">
                                    </a>
                                    <div class="sm:hidden">
                                      <button type="button"
                                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-collapse="#navbar-alignment" aria-controls="navbar-alignment"
                                        aria-label="Toggle navigation">
                                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                  <div id="navbar-alignment"
                                    class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                    <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                      <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Account</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Work</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Blog</a>
                                    </div>
                                  </div>
                                </nav>
                              </header>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="box">
                            <div class="box-header">
                              <h5 class="box-title">Navbar with MegaMenu</h5>
                            </div>
                            <div class="box-body">
                              <header
                                class="relative flex flex-wrap sm:justify-start sm:flex-nowrap z-9 w-full bg-white text-sm dark:bg-bodybg">
                                <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                  <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);" class="header-logo">
                                      <img src="{{asset('build/assets/images/brand-logos/favicon.ico')}}" alt="logo" class="dark:hidden block w-10 h-10">
                                      <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="hidden dark:block w-10 h-10">
                                    </a>
                                    <div class="sm:hidden">
                                      <button type="button"
                                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-collapse="#navbar-with-mega-menu" aria-controls="navbar-with-mega-menu"
                                        aria-label="Toggle navigation">
                                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                  <div id="navbar-with-mega-menu"
                                    class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                    <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                      <a class="font-medium text-primary" href="javascript:void(0);" aria-current="page">Landing</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Account</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Work</a>
                                      <a class="font-medium text-gray-600 hover:text-primary dark:text-white/70 dark:hover:text-primary whitespace-nowrap"
                                        href="javascript:void(0);">Blog</a>
                                      <div class="hs-mega-menu">
                                        <div class="hs-dropdown ti-dropdown me-2">
                                          <button class="!p-0 !shadow-none !bg-transparent !border-0 !font-medium  !text-gray-600 !hover:text-primary !dark:text-white/70 !dark:hover:text-primary whitespace-nowrap"
                                              type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                              aria-expanded="false">
                                              Dropdown<i
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
              
                                        <div
                                          class="hs-mega-menu-content hs-mega-menu-open:opacity-100 opacity-0 top-full ltr:right-0 rtl:left-0 hidden z-10 rounded-sm before:absolute before:-top-5 ltr:before:left-0 rtl:before:right-0 before:w-full before:h-5 w-full bg-white p-2 sm:w-48 sm:transition-all sm:absolute sm:shadow-md sm:duration-300 dark:bg-bodybg"
                                          aria-labelledby="hs-mega-menu-basic-dr">
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            About
                                          </a>
                                          <div class="hs-mega-menu relative sm:flex sm:items-center sm:gap-x-3.5 rounded-sm">
                                            <a id="hs-mega-menu-basic-sub-dr"
                                              class="hs-mega-menu-toggle flex justify-between w-full items-center text-sm text-gray-800 rounded-sm py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                              href="javascript:;">
                                              Sub menu
                                              <svg class="sm:-rotate-90 ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600 rtl:rotate-90" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                              </svg>
                                            </a>
              
                                            <div
                                              class="hs-mega-menu-content hs-mega-menu-open:opacity-100 sm:hs-mega-menu-open:mt-0 opacity-0 sm:mt-2 sm:mx-2.5 top-0 ltr:right-full rtl:left-full hidden z-10 sm:rounded-sm before:absolute before:top-0 ltr:before:-left-5 rtl:before:-right-5 before:w-5 before:h-full after:absolute after:top-0 ltr:after:-right-5 rtl:after:-left-5 after:w-5 after:h-full w-full bg-white p-2 sm:w-48 sm:transition-all sm:absolute sm:shadow-md sm:duration-300 dark:bg-bodybg"
                                              aria-labelledby="hs-mega-menu-basic-sub-dr">
                                              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                                href="javascript:void(0);">
                                                Newsletter
                                              </a>
                                              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                                href="javascript:void(0);">
                                                Purchases
                                              </a>
                                              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                                href="javascript:void(0);">
                                                Downloads
                                              </a>
                                              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                                href="javascript:void(0);">
                                                Team Account
                                              </a>
                                            </div>
                                          </div>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Services
                                          </a>
                                          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Customer Story
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </nav>
                              </header>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="box">
                            <div class="box-header">
                              <h5 class="box-title">Navbar with Color variants</h5>
                            </div>
                            <div class="box-body space-y-4">
                              <header
                                class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-primary text-sm py-4 rounded-sm">
                                <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                  <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);" class="header-logo">
                                      <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="block w-10 h-10">
                                    </a>
                                    <div class="sm:hidden">
                                      <button type="button"
                                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border border-white/[.25] font-medium bg-primary text-white shadow-sm align-middle hover:bg-primary focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white/10 focus:ring-primary transition-all text-sm dark:bg-transparent dark:hover:bg-primary dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-collapse="#navbar-primary" aria-controls="navbar-primary" aria-label="Toggle navigation">
                                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                  <div id="navbar-primary"
                                    class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                    <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                      <a class="font-medium text-white" href="javascript:void(0);" aria-current="page">Landing</a>
                                      <a class="font-medium text-gray-300 hover:text-white"
                                        href="javascript:void(0);">Account</a>
                                      <a class="font-medium text-gray-300 hover:text-white"
                                        href="javascript:void(0);">Work</a>
                                      <a class="font-medium text-gray-300 hover:text-white"
                                        href="javascript:void(0);">Blog</a>
                                    </div>
                                  </div>
                                </nav>
                              </header>
              
                              <header
                                class="flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-secondary text-sm py-4 rounded-sm">
                                <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                  <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);" class="header-logo">
                                      <img src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="logo" class="block w-10 h-10">
                                    </a>
                                    <div class="sm:hidden">
                                      <button type="button"
                                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border border-white/[.25] font-medium bg-secondary text-white shadow-sm align-middle hover:bg-white/[.15] focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-secondary focus:ring-white transition-all text-sm"
                                        data-hs-collapse="#navbar-secondary" aria-controls="navbar-secondary"
                                        aria-label="Toggle navigation">
                                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                                          viewBox="0 0 16 16">
                                          <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                                  <div id="navbar-secondary"
                                    class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                    <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:pl-5 rtl:sm:pr-5">
                                      <a class="font-medium text-white" href="javascript:void(0);" aria-current="page">Landing</a>
                                      <a class="font-medium text-gray-300 hover:text-white" href="javascript:void(0);">Account</a>
                                      <a class="font-medium text-gray-300 hover:text-white" href="javascript:void(0);">Work</a>
                                      <a class="font-medium text-gray-300 hover:text-white" href="javascript:void(0);">Blog</a>
                                    </div>
                                  </div>
                                </nav>
                              </header>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

@endsection

@section('scripts')
	


@endsection
