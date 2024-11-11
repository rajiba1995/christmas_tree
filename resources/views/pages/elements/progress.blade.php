
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Progress</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Progress 
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Basic Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress mb-4 !rounded-full" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 0%"></div>
                                    </div>
                                    <div class="progress mb-4 " role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !rounded-tl-full !rounded-bl-full" style="width: 25%"></div>
                                    </div>
                                    <div class="progress mb-4 !rounded-full" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !rounded-tl-full !rounded-bl-full" style="width: 50%"></div>
                                    </div>
                                    <div class="progress mb-4 !rounded-full" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !rounded-tl-full !rounded-bl-full" style="width: 75%"></div>
                                    </div>
                                    <div class="progress mb-0 !rounded-full" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !rounded-tl-full !rounded-bl-full" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="progress mb-4 !rounded-full" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        &lt;div class="progress-bar" style="width: 0%">&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-4 " role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !rounded-tl-full !rounded-bl-full" style="width: 25%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-4 !rounded-full" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !rounded-tl-full !rounded-bl-full" style="width: 50%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-4 !rounded-full" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !rounded-tl-full !rounded-bl-full" style="width: 75%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-0 !rounded-full" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !rounded-tl-full !rounded-bl-full" style="width: 100%"&gt;&lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Different Colored Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100">
                                        <div class="progress-bar !bg-secondary !rounded-tl-full !rounded-bl-full" style="width: 20%"></div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-warning !rounded-tl-full !rounded-bl-full" style="width: 40%"></div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-info !rounded-tl-full !rounded-bl-full" style="width: 60%"></div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-success !rounded-tl-full !rounded-bl-full" style="width: 80%"></div>
                                    </div>
                                    <div class="progress" role="progressbar"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-danger !rounded-tl-full !rounded-bl-full" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html"> &lt;div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0"
    aria-valuemax="100">
        &lt;div class="progress-bar !bg-secondary !rounded-tl-full !rounded-bl-full" style="width: 20%">&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-4" role="progressbar"
    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !bg-warning !rounded-tl-full !rounded-bl-full" style="width: 40%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-4" role="progressbar"
    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !bg-info !rounded-tl-full !rounded-bl-full" style="width: 60%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-4" role="progressbar"
    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !bg-success !rounded-tl-full !rounded-bl-full" style="width: 80%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress" role="progressbar"
    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !bg-danger !rounded-tl-full !rounded-bl-full" style="width: 100%"&gt;&lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Striped Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped" style="width: 10%">
                                        </div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped !bg-secondary !rounded-tl-full !rounded-bl-full" style="width: 25%">
                                        </div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped !bg-success !rounded-tl-full !rounded-bl-full" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped !bg-info !rounded-tl-full !rounded-bl-full" style="width: 75%">
                                        </div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped !bg-warning !rounded-tl-full !rounded-bl-full" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html"> &lt;div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped" style="width: 10%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped !bg-secondary !rounded-tl-full !rounded-bl-full" style="width: 25%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped !bg-success !rounded-tl-full !rounded-bl-full" style="width: 50%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped !bg-info !rounded-tl-full !rounded-bl-full" style="width: 75%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0"
aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped !bg-warning !rounded-tl-full !rounded-bl-full" style="width: 100%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Progress Height
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress progress-xs mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 10%">
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 25%">
                                        </div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="progress progress-lg mb-4" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 75%">
                                        </div>
                                    </div>
                                    <div class="progress progress-xl" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100">
                                        <div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html"> &lt;div class="progress progress-xs mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 10%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 25%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 50%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-lg mb-4" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 75%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl" role="progressbar" aria-valuenow="100" aria-valuemin="0"
        aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary !rounded-tl-full !rounded-bl-full" style="width: 100%"&gt;&lt;/div&gt;
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
                                        Progress With Labels
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress mb-4" role="progressbar"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !rounded-tl-full !rounded-bl-full !text-[0.65rem]" style="width: 10%;">10%</div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-secondary !rounded-tl-full !rounded-bl-full !text-[0.65rem]" style="width: 20%;">20%</div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-success !rounded-tl-full !rounded-bl-full !text-[0.65rem]" style="width: 40%;">40%</div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-info !rounded-tl-full !rounded-bl-full !text-[0.65rem]" style="width: 60%;">60%</div>
                                    </div>
                                    <div class="progress mb-0" role="progressbar"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-warning !rounded-tl-full !rounded-bl-full !text-[0.65rem]" style="width: 80%;">80%</div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-4" role="progressbar"
    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !rounded-tl-full !rounded-bl-full" style="width: 10%;"&gt;10%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-4" role="progressbar"
            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !bg-secondary !rounded-tl-full !rounded-bl-full" style="width: 20%;"&gt;20%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-4" role="progressbar"
    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !bg-success !rounded-tl-full !rounded-bl-full" style="width: 40%;"&gt;40%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-4" role="progressbar"
    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !bg-info !rounded-tl-full !rounded-bl-full" style="width: 60%;"&gt;60%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-0" role="progressbar"
    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar !bg-warning !rounded-tl-full !rounded-bl-full" style="width: 80%;"&gt;80%&lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Multiple bars With Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress-stacked progress-xs mb-4 flex">
                                        <div class="progress-bar" role="progressbar" style="width: 5%"
                                            aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !bg-secondary !rounded-none" role="progressbar" style="width: 10%"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !bg-success !rounded-none" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-stacked progress-sm mb-4 flex">
                                        <div class="progress-bar !bg-warning" role="progressbar" style="width: 10%"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !bg-info !rounded-none" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !bg-danger !rounded-none" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-stacked mb-4 flex">
                                        <div class="progress-bar !bg-info" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !bg-success !rounded-none" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !rounded-none" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-stacked progress-lg mb-4 flex">
                                        <div class="progress-bar !bg-purple" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !bg-teal !rounded-none" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !bg-orange !rounded-none" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-stacked progress-xl mb-0 flex">
                                        <div class="progress-bar !bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !bg-danger !rounded-none" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar !bg-warning !rounded-none" role="progressbar" style="width: 35%"
                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress-stacked progress-xs mb-4 flex"&gt;
    &lt;div class="progress-bar" role="progressbar" style="width: 5%"
        aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-secondary !rounded-none" role="progressbar" style="width: 10%"
        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-success !rounded-none" role="progressbar" style="width: 15%"
        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked progress-sm mb-4 flex"&gt;
    &lt;div class="progress-bar !bg-warning" role="progressbar" style="width: 10%"
        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-info !rounded-none" role="progressbar" style="width: 15%"
        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-danger !rounded-none" role="progressbar" style="width: 20%"
        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked mb-4 flex"&gt;
    &lt;div class="progress-bar !bg-info" role="progressbar" style="width: 15%"
        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-success !rounded-none" role="progressbar" style="width: 20%"
        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !rounded-none" role="progressbar" style="width: 25%"
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked progress-lg mb-4 flex"&gt;
    &lt;div class="progress-bar !bg-purple" role="progressbar" style="width: 20%"
        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-teal !rounded-none" role="progressbar" style="width: 25%"
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-orange !rounded-none" role="progressbar" style="width: 30%"
        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked progress-xl mb-0 flex"&gt;
    &lt;div class="progress-bar !bg-success" role="progressbar" style="width: 25%"
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-danger !rounded-none" role="progressbar" style="width: 30%"
        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-warning !rounded-none" role="progressbar" style="width: 35%"
        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
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
                                        Animated Stripped Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            style="width: 10%"></div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" style="width: 20%"></div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 40%"></div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 60%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped progress-bar-animated"
        style="width: 10%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" style="width: 20%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Gradient Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary-gradient" style="width: 10%"></div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary-gradient" style="width: 20%"></div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success-gradient" style="width: 40%"></div>
                                    </div>
                                    <div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger-gradient" style="width: 60%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning-gradient" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary-gradient" style="width: 10%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary-gradient" style="width: 20%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success-gradient" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info-gradient" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning-gradient" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Custom Animated Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary-gradient" style="width: 10%"></div>
                                    </div>
                                    <div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary-gradient" style="width: 20%"></div>
                                    </div>
                                    <div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success-gradient" style="width: 40%"></div>
                                    </div>
                                    <div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info-gradient" style="width: 60%"></div>
                                    </div>
                                    <div class="progress progress-animate" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning-gradient" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary-gradient" style="width: 10%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary-gradient" style="width: 20%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success-gradient" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-4 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info-gradient" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-animate" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning-gradient" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Custom Progress-1
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress progress-sm progress-custom mb-[3rem] progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <h6 class="progress-bar-title text-[1rem]">Mobiles</h6>
                                        <div class="progress-bar" style="width: 50%">
                                            <div class="progress-bar-value !bg-primary">50%</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-custom mb-[3rem] progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <h6 class="progress-bar-title after:!border-s-secondary !bg-secondary text-[1rem]">Watches</h6>
                                        <div class="progress-bar !bg-secondary after:!border-secondary" style="width: 60%">
                                            <div class="progress-bar-value !bg-secondary after:!border-secondary after:!border-s-transparent after:!border-e-transparent">60%</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-custom progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <h6 class="progress-bar-title after:!border-s-success !bg-success text-[1rem]">Shirts</h6>
                                        <div class="progress-bar !bg-success after:!border-success" style="width: 70%">
                                            <div class="progress-bar-value !bg-success after:!border-success after:!border-s-transparent after:!border-e-transparent">70%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html"> &lt;div class="progress progress-sm progress-custom mb-[3rem] progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;h6 class="progress-bar-title text-[1rem]">Mobiles&lt;/h6&gt;
    &lt;div class="progress-bar" style="width: 50%"&gt;
        &lt;div class="progress-bar-value !bg-primary"&gt;50%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm progress-custom mb-[3rem] progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;h6 class="progress-bar-title !bg-secondary text-[1rem]"&gt;Watches&lt;/h6&gt;
    &lt;div class="progress-bar !bg-secondary" style="width: 60%"&gt;
        &lt;div class="progress-bar-value !bg-secondary"&gt;60%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm progress-custom progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;h6 class="progress-bar-title !bg-success text-[1rem]"&gt;Shirts&lt;/h6&gt;
    &lt;div class="progress-bar !bg-success" style="width: 70%"&gt;
        &lt;div class="progress-bar-value !bg-success"&gt;70%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Custom Progress-2
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress progress-sm mb-6" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 !bg-primary"></div><div class="progress-item-2"></div><div class="progress-item-3"></div>
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <div class="progress progress-sm mb-6" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 !bg-secondary"></div><div class="progress-item-2 !bg-secondary"></div><div class="progress-item-3"></div>
                                        <div class="progress-bar !bg-secondary" style="width: 60%"></div>
                                    </div>
                                    <div class="progress progress-sm mb-6" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 !bg-success"></div><div class="progress-item-2 !bg-success"></div><div class="progress-item-3"></div>
                                        <div class="progress-bar !bg-success" style="width: 70%"></div>
                                    </div>
                                    <div class="progress progress-sm mb-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 !bg-info"></div><div class="progress-item-2 !bg-info"></div><div class="progress-item-3 !bg-info"></div>
                                        <div class="progress-bar !bg-info" style="width: 80%"></div>
                                    </div>
                                    <div class="progress progress-sm" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 !bg-warning"></div><div class="progress-item-2 !bg-warning"></div><div class="progress-item-3 !bg-warning"></div>
                                        <div class="progress-bar !bg-warning" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 !bg-primary"&gt;&lt;/div&gt;&lt;div class="progress-item-2"&gt;&lt;/div&gt;&lt;div class="progress-item-3"&gt;&lt;/div&gt;
    &lt;div class="progress-bar" style="width: 50%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 !bg-secondary"&gt;&lt;/div&gt;&lt;div class="progress-item-2 bg-secondary"&gt;&lt;/div&gt;&lt;div class="progress-item-3"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-secondary" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 !bg-success"&gt;&lt;/div&gt;&lt;div class="progress-item-2 bg-success"&gt;&lt;/div&gt;&lt;div class="progress-item-3"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-success" style="width: 70%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 !bg-info"&gt;&lt;/div&gt;&lt;div class="progress-item-2 bg-info"&gt;&lt;/div&gt;&lt;div class="progress-item-3 bg-info"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-info" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 !bg-warning"&gt;&lt;/div&gt;&lt;div class="progress-item-2 bg-warning"&gt;&lt;/div&gt;&lt;div class="progress-item-3 bg-warning"&gt;&lt;/div&gt;
    &lt;div class="progress-bar !bg-warning" style="width: 90%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Custom Progress-3
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress progress-lg mb-[3rem] custom-progress-3 progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%">
                                            <div class="progress-bar-value">50%</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-lg mb-[3rem] custom-progress-3 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-secondary" style="width: 60%">
                                            <div class="progress-bar-value secondary">60%</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-lg custom-progress-3 progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar !bg-success" style="width: 70%">
                                            <div class="progress-bar-value success">70%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress progress-lg mb-[3rem] custom-progress-3 progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar" style="width: 50%"&gt;
        &lt;div class="progress-bar-value"&gt;50%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-lg mb-[3rem] custom-progress-3 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-secondary" style="width: 60%"&gt;
        &lt;div class="progress-bar-value secondary"&gt;60%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-lg custom-progress-3 progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar !bg-success" style="width: 70%"&gt;
        &lt;div class="progress-bar-value success"&gt;70%&lt;/div&gt;
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Custom Progress-4
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="progress progress-xl mb-4 progress-animate custom-progress-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary-gradient !rounded-sm" style="width: 10%"></div>
                                        <div class="progress-bar-label">10%</div>
                                    </div>
                                    <div class="progress progress-xl mb-4 progress-animate custom-progress-4 secondary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary-gradient !rounded-sm" style="width: 20%"></div>
                                            <div class="progress-bar-label">20%</div>
                                    </div>
                                    <div class="progress progress-xl mb-4 progress-animate custom-progress-4 success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success-gradient !rounded-sm" style="width: 40%"></div>
                                            <div class="progress-bar-label">40%</div>
                                    </div>
                                    <div class="progress progress-xl mb-4 progress-animate custom-progress-4 info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info-gradient !rounded-sm" style="width: 60%"></div>
                                            <div class="progress-bar-label">60%</div>
                                    </div>
                                    <div class="progress progress-xl mb-4 progress-animate custom-progress-4 warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning-gradient !rounded-sm" style="width: 80%"></div>
                                            <div class="progress-bar-label">80%</div>
                                    </div>
                                    <div class="progress progress-xl progress-animate custom-progress-4 danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger-gradient !rounded-sm" style="width: 90%"></div>
                                            <div class="progress-bar-label">90%</div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary-gradient !rounded-sm" style="width: 10%"&gt;&lt;/div&gt;
    &lt;div class="progress-bar-label"&gt;10%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4 secondary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary-gradient !rounded-sm" style="width: 20%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;20%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4 success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success-gradient !rounded-sm" style="width: 40%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;40%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4 info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info-gradient !rounded-sm" style="width: 60%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;60%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-4 progress-animate custom-progress-4 warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning-gradient !rounded-sm" style="width: 80%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;80%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl progress-animate custom-progress-4 danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-danger-gradient !rounded-sm" style="width: 90%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;90%&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Custom Progress-5
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <h6 class="font-semibold mb-2">Project Dependencies</h6>
                                    <div class="progress-stacked progress-xl mb-[2rem] flex">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        <div class="progress-bar !rounded-none !bg-secondary" role="progressbar" style="width: 35%"
                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                                        <div class="progress-bar !rounded-none !bg-danger" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                    </div>
                                    <div class="grid grid-cols-12">
                                        <div class="xl:col-span-3 col-span-12"></div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="border border-defaultborder dark:border-defaultborder/10 p-4">
                                                <p class="text-[0.75rem] font-semibold mb-0 text-[#8c9097]">Html<span class="float-right rtl:float-left text-[0.625rem] font-normal">25%</span></p>
                                                <div class="progress progress-xs mb-4 progress-animate" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar !rounded-full bg-primary" style="width: 25%">
                                                    </div>
                                                </div>
                                                <p class="text-[0.75rem] font-semibold mb-0 text-[#8c9097]">Css<span class="float-right rtl:float-left text-[0.625rem] font-normal">35%</span></p>
                                                <div class="progress progress-xs mb-4 progress-animate " role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar !rounded-full !bg-secondary" style="width: 35%">
                                                    </div>
                                                </div>
                                                <p class="text-[0.75rem] font-semibold mb-0 text-[#8c9097]">Js<span class="float-right rtl:float-left text-[0.625rem] font-normal">40%</span></p>
                                                <div class="progress progress-xs mb-0 progress-animate " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar !rounded-full !bg-danger" style="width: 40%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12"></div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html"> &lt;h6 class="font-semibold mb-2">Project Dependencies&lt;/h6&gt;
    &lt;div class="progress-stacked progress-xl mb-[3rem] flex"&gt;
        &lt;div class="progress-bar" role="progressbar" style="width: 25%"
            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;25%&lt;/div&gt;
        &lt;div class="progress-bar !bg-secondary" role="progressbar" style="width: 35%"
            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"&gt;35%&lt;/div&gt;
        &lt;div class="progress-bar !bg-danger" role="progressbar" style="width: 40%"
            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;40%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="grid grid-cols-12 justify-center"&gt;
        &lt;div class="xl:col-span-5"&gt;
            &lt;div class="border p-4"&gt;
                &lt;p class="text-[0.75rem] font-semibold mb-0 text-[#8c9097]"&gt;Html&lt;span class="float-right text-[0.625rem] font-normal"&gt;25%&lt;/span&gt;&lt;/p&gt;
                &lt;div class="progress progress-xs mb-4 progress-animate" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
                    &lt;div class="progress-bar bg-primary" style="width: 25%"&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;p class="text-[0.75rem] font-semibold mb-0 text-[#8c9097]"&gt;Css&lt;span class="float-right text-[0.625rem] font-normal"&gt;35%&lt;/span&gt;&lt;/p&gt;
                &lt;div class="progress progress-xs mb-4 progress-animate " role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"&gt;
                    &lt;div class="progress-bar !rounded-none !bg-secondary" style="width: 35%"&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;p class="text-[0.75rem] font-semibold mb-0 text-[#8c9097]"&gt;Js&lt;span class="float-right text-[0.625rem] font-normal"&gt;40%&lt;/span&gt;&lt;/p&gt;
                &lt;div class="progress progress-xs mb-0 progress-animate " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
                    &lt;div class="progress-bar !rounded-br-full !rounded-tr-full !bg-danger" style="width: 40%"&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-7 -->

                    <!-- Start:: row-8 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Vertical Progress</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-8 rtl:space-x-reverse">
                                        <div class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-40 bg-gray-200 dark:bg-light">
                                            <div class="bg-primary ti-main-progress-bar" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ti-main-progress flex-col flex-nowrap justify-end !w-3 !h-40 bg-gray-200 dark:bg-light">
                                            <div class="bg-secondary ti-main-progress-bar" role="progressbar" style="height: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ti-main-progress flex-col flex-nowrap justify-end !w-4 !h-40 bg-gray-200 dark:bg-light">
                                            <div class="bg-warning ti-main-progress-bar" role="progressbar" style="height: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ti-main-progress flex-col flex-nowrap justify-end !w-5 !h-40 bg-gray-200 dark:bg-light">
                                            <div class="bg-info ti-main-progress-bar" role="progressbar" style="height: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ti-main-progress flex-col flex-nowrap justify-end !w-6 !h-40 bg-gray-200 dark:bg-light">
                                            <div class="bg-danger ti-main-progress-bar" role="progressbar" style="height: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="flex space-x-8 rtl:space-x-reverse"&gt;
        &lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-2 !h-40 bg-gray-200 dark:bg-light"&gt;
            &lt;div class="bg-primary ti-main-progress-bar" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-3 !h-40 bg-gray-200 dark:bg-light"&gt;
            &lt;div class="bg-secondary ti-main-progress-bar" role="progressbar" style="height: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-4 !h-40 bg-gray-200 dark:bg-light"&gt;
            &lt;div class="bg-warning ti-main-progress-bar" role="progressbar" style="height: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-5 !h-40 bg-gray-200 dark:bg-light"&gt;
            &lt;div class="bg-info ti-main-progress-bar" role="progressbar" style="height: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-main-progress flex-col flex-nowrap justify-end !w-6 !h-40 bg-gray-200 dark:bg-light"&gt;
            &lt;div class="bg-danger ti-main-progress-bar" role="progressbar" style="height: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                                                    </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Labels at The end</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-4">
                                    <!-- Progress -->
                                    <div class="flex items-center gap-x-3 whitespace-nowrap w-full">
                                        <div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light">
                                            <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">25%</span>
                                        </div>
                                    </div>
                                    <!-- End Progress -->
                                    <!-- Progress -->
                                    <div class="flex items-center gap-x-3 whitespace-nowrap w-full">
                                        <div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light">
                                            <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                        </div>
                                    </div>
                                    <!-- End Progress -->
                                    <!-- Progress -->
                                    <div class="flex items-center gap-x-3 whitespace-nowrap w-full">
                                        <div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light">
                                            <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">75%</span>
                                        </div>
                                    </div>
                                    <!-- End Progress -->
                                    <!-- Progress -->
                                    <div class="flex items-center gap-x-3 whitespace-nowrap w-full">
                                        <div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light">
                                            <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">100%</span>
                                        </div>
                                    </div>
                                    <!-- End Progress -->
                                    <!-- Progress -->
                                    <div class="flex items-center gap-x-3 whitespace-nowrap w-full">
                                        <div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light">
                                            <div class="ti-main-progress-bar bg-danger text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="w-10 text-end">
                                            <span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-danger text-white">
                                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                                </svg>
                                            </span>
                                            </div>
                                    </div>
                                    <!-- End Progress -->
                                    <!-- Progress -->
                                    <div class="flex items-center gap-x-3 whitespace-nowrap w-full">
                                        <div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light">
                                            <div class="ti-main-progress-bar bg-success text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="w-10 text-end">
                                            <span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white">
                                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End Progress -->
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html"> 
    <!-- Progress -->
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full"&gt;
    &lt;div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light"&gt;
        &lt;div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;25%&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full"&gt;
    &lt;div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light"&gt;
        &lt;div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;50%&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full"&gt;
    &lt;div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light"&gt;
        &lt;div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;75%&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full"&gt;
    &lt;div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light"&gt;
        &lt;div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="w-10 text-end"&gt;
    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;100%&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full"&gt;
    &lt;div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light"&gt;
        &lt;div class="ti-main-progress-bar bg-danger text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="w-10 text-end"&gt;
        &lt;span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-danger text-white"&gt;
            &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
            &lt;path d="M18 6 6 18"&gt;&lt;/path&gt;
            &lt;path d="m6 6 12 12"&gt;&lt;/path&gt;
            &lt;/svg&gt;
        &lt;/span&gt;
        &lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Progress --&gt;
&lt;!-- Progress --&gt;
&lt;div class="flex items-center gap-x-3 whitespace-nowrap w-full"&gt;
    &lt;div class="ti-main-progress w-full h-4 bg-gray-200 dark:bg-light"&gt;
        &lt;div class="ti-main-progress-bar bg-success text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="w-10 text-end"&gt;
        &lt;span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white"&gt;
            &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
            &lt;polyline points="20 6 9 17 4 12"&gt;&lt;/polyline&gt;
            &lt;/svg&gt;
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
<!-- End Progress --></code></pre>
<!-- Prism Code -->
                                                                    </div>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Progress With Steps</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-4">
                                    <div>
                                        <!-- Step Progress -->
                                        <div class="max-w-40 ti-main-progress !h-full items-center gap-x-1">
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div>
                                            <div class="w-10 text-end">
                                                <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- End Step Progress -->
                                        <!-- Step Progress -->
                                        <div class="ti-main-progress !h-full items-center gap-x-1">
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div>
                                            <div class="w-10 text-end">
                                                <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- End Step Progress -->
    
                                    </div>
                                    <div>
                                        <!-- Step Progress -->
                                        <div class="max-w-40 ti-main-progress !h-full items-center gap-x-1">
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-danger text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div>
                                                <div class="w-10 text-end">
                                                <span class="text-sm text-danger">25%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step Progress -->
                                        <!-- Step Progress -->
                                        <div class="w-full ti-main-progress !h-full items-center gap-x-1">
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-danger text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div>
                                                <div class="w-10 text-end">
                                                <span class="text-sm text-danger">25%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step Progress -->
                                    </div>
                                    <div>
                                        <!-- Step Progress -->
                                        <div class="max-w-40 ti-main-progress !h-full items-center gap-x-1">
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div>
                                                <div class="w-10 text-end">
                                                    <span class="text-sm text-gray-800 dark:text-white">100%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step Progress -->
                                        <!-- Step Progress -->
                                        <div class="ti-main-progress !h-full items-center gap-x-1">
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div>
                                                <div class="w-10 text-end">
                                                    <span class="text-sm text-gray-800 dark:text-white">100%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step Progress -->
                                    </div>
                                    <div>
                                        <!-- Step Progress -->
                                        <div class="max-w-[8.5rem] ti-main-progress !h-full items-center gap-x-1">
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="ms-1">
                                                <span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white">
                                                    <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                            </div>
                                        </div>
                                         <!-- End Step Progress -->
                                      
                                        <!-- Step Progress -->
                                        <div class="ti-main-progress !h-full items-center gap-x-1">
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="ms-1">
                                                <span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white">
                                                    <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- End Step Progress -->
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div&gt;
        &lt;!-- Step Progress --&gt;
        &lt;div class="max-w-40 ti-main-progress !h-full items-center gap-x-1"&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div&gt;
            &lt;div class="w-10 text-end"&gt;
                &lt;span class="text-sm text-gray-800 dark:text-white"&gt;50%&lt;/span&gt;
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Step Progress --&gt;
        &lt;!-- Step Progress --&gt;
        &lt;div class="ti-main-progress !h-full items-center gap-x-1"&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-gray-200 dark:bg-light text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div&gt;
            &lt;div class="w-10 text-end"&gt;
                &lt;span class="text-sm text-gray-800 dark:text-white"&gt;50%&lt;/span&gt;
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        <!-- End Step Progress -->

    &lt;/div&gt;
    &lt;div&gt;
        &lt;!-- Step Progress --&gt;
        &lt;div class="max-w-40 ti-main-progress !h-full items-center gap-x-1"&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div&gt;
                &lt;div class="w-10 text-end"&gt;
                &lt;span class="text-sm text-danger"&gt;25%&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Step Progress --&gt;
        &lt;!-- Step Progress --&gt;
        &lt;div class="w-full ti-main-progress !h-full items-center gap-x-1"&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-danger/10 text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div&gt;
                &lt;div class="w-10 text-end"&gt;
                &lt;span class="text-sm text-danger"&gt;25%&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Step Progress --&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;!-- Step Progress --&gt;
        &lt;div class="max-w-40 ti-main-progress !h-full items-center gap-x-1"&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div&gt;
                &lt;div class="w-10 text-end"&gt;
                    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;100%&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Step Progress --&gt;
        &lt;!-- Step Progress --&gt;
        &lt;div class="ti-main-progress !h-full items-center gap-x-1"&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div&gt;
                &lt;div class="w-10 text-end"&gt;
                    &lt;span class="text-sm text-gray-800 dark:text-white"&gt;100%&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Step Progress --&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;!-- Step Progress --&gt;
        &lt;div class="max-w-[8.5rem] ti-main-progress !h-full items-center gap-x-1"&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="ms-1"&gt;
                &lt;span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white"&gt;
                    &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;polyline points="20 6 9 17 4 12"/&gt;&lt;/svg&gt;
                &lt;/span&gt;
            &lt;/div&gt;
        &lt;/div&gt;
            &lt;!-- End Step Progress --&gt;
        
        &lt;!-- Step Progress --&gt;
        &lt;div class="ti-main-progress !h-full items-center gap-x-1"&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="w-full h-2.5 ti-main-progress-bar bg-success text-xs text-white text-center whitespace-nowrap transition duration-500" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="ms-1"&gt;
                &lt;span class="flex-shrink-0 ms-auto size-4 flex justify-center items-center rounded-full bg-success text-white"&gt;
                    &lt;svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;polyline points="20 6 9 17 4 12"/&gt;&lt;/svg&gt;
                &lt;/span&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Step Progress --&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                                                    </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Circular progress</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap gap-x-5">
                                        <!-- Circular Progress -->
                                        <div class="relative size-40">
                                            <svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                                            <!-- Background Circle -->
                                            <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-white/10" stroke-width="2"></circle>
                                            <!-- Progress Circle inside a group with rotation -->
                                            <g class="origin-center -rotate-90 transform">
                                                <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-primary" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="75"></circle>
                                            </g>
                                            </svg>
                                        </div>
                                        <!-- End Circular Progress -->
    
                                        <!-- Circular Progress -->
                                        <div class="relative size-40">
                                            <svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                                            <!-- Background Circle -->
                                            <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-white/10" stroke-width="2"></circle>
                                            <!-- Progress Circle inside a group with rotation -->
                                            <g class="origin-center -rotate-90 transform">
                                                <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-primary" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="75"></circle>
                                            </g>
                                            </svg>
                                            <!-- Percentage Text -->
                                            <div class="absolute top-1/2 start-1/2 rtl:top-1/2 rtl:start-[19%] transform -translate-y-1/2 -translate-x-1/2">
                                            <span class="text-center text-2xl font-bold text-gray-800 dark:text-white">72%</span>
                                            </div>
                                        </div>
                                        <!-- End Circular Progress -->
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="flex gap-x-5"&gt;
        &lt;!-- Circular Progress --&gt;
        &lt;div class="relative size-40"&gt;
            &lt;svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;!-- Background Circle --&gt;
            &lt;circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-white/10" stroke-width="2"&gt;&lt;/circle&gt;
            &lt;!-- Progress Circle inside a group with rotation --&gt;
            &lt;g class="origin-center -rotate-90 transform"&gt;
                &lt;circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-primary" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="75"&gt;&lt;/circle&gt;
            &lt;/g&gt;
            &lt;/svg&gt;
        &lt;/div&gt;
        &lt;!-- End Circular Progress --&gt;

        &lt;!-- Circular Progress --&gt;
        &lt;div class="relative size-40"&gt;
            &lt;svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;!-- Background Circle --&gt;
            &lt;circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-white/10" stroke-width="2"&gt;&lt;/circle&gt;
            &lt;!-- Progress Circle inside a group with rotation --&gt;
            &lt;g class="origin-center -rotate-90 transform"&gt;
                &lt;circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-primary" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="75"&gt;&lt;/circle&gt;
            &lt;/g&gt;
            &lt;/svg&gt;
            &lt;!-- Percentage Text --&gt;
            &lt;div class="absolute top-1/2 start-1/2 transform -translate-y-1/2 -translate-x-1/2"&gt;
            &lt;span class="text-center text-2xl font-bold text-gray-800 dark:text-white"&gt;72%&lt;/span&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- End Circular Progress --&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-8 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
