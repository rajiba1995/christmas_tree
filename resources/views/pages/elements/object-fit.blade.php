
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Object Fit</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Elements <i
                              class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                          </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">Object Fit 
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
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit Contain</div>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="object-contain border dark:border-defaultborder/10 !rounded-md"
                                    alt="...">
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">
&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}" class="object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;
    </code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit Cover</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="object-cover border dark:border-defaultborder/10 md:!rounded-md" alt="...">
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
        class="object-cover border dark:border-defaultborder/10 md:!rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit Fill</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="object-fill border dark:border-defaultborder/10 !rounded-md" alt="...">
                                </div>
                               
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
   class="object-fill border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit Scale Down</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="object-scale-down border dark:border-defaultborder/10 !rounded-md" alt="...">
                                </div>
                               
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
     class="object-scale-down border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit None</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="object-none border dark:border-defaultborder/10 !rounded-md" alt="...">
                                </div>
                               
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
    class="object-none border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit Contain (SM - responsive)</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="sm:object-contain border dark:border-defaultborder/10 !rounded-md" alt="...">
                                </div>
                               
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
    class="sm:object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit Contain (MD - responsive)</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="md:object-contain border dark:border-defaultborder/10 !rounded-md" alt="...">
                                </div>
                                
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
        class="md:object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit Contain (LG - responsive)</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="lg:object-contain border dark:border-defaultborder/10 !rounded-md" alt="...">
                                </div>
                               
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
        class="lg:object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit Contain (XL - responsive)</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="xl:object-contain border dark:border-defaultborder/10 !rounded-md" alt="...">
                                </div>
                               
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
        class="xl:object-contain border dark:border-defaultborder/10 !rounded-md" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Object Fit Contain (XXL - responsive)</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}"
                                    class="xxl:object-contain border dark:border-defaultborder/10 !rounded-md"
                                    alt="...">
                                </div>
                                
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;img src="{{asset('build/assets/images/media/media-28.jpg')}}"
        class="xxl:object-contain border dark:border-defaultborder/10 !rounded-md"
        alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Object Fit Contain Video
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <video src="{{asset('build/assets/video/1.mp4')}}"
                                    class="object-contain !rounded-md border dark:border-defaultborder/10"
                                    autoplay loop muted></video>
                                </div>
                               
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
        class="object-contain !rounded-md border dark:border-defaultborder/10"
        autoplay loop muted&gt;&lt;/video&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Object Fit Cover Video
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <video src="{{asset('build/assets/video/1.mp4')}}"
                                    class="object-cover !rounded-md border dark:border-defaultborder/10"
                                    autoplay loop muted></video>
                                </div>
                               
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
        class="object-cover !rounded-md border dark:border-defaultborder/10"
        autoplay loop muted&gt;&lt;/video&gt;
    </code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Object Fit Fill Video
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <video src="{{asset('build/assets/video/1.mp4')}}"
                                    class="object-fill !rounded-md border dark:border-defaultborder/10"
                                    autoplay loop muted></video>
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
        class="object-fill !rounded-md border dark:border-defaultborder/10"
        autoplay loop muted&gt;&lt;/video&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Object Fit Scale Video
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <video src="{{asset('build/assets/video/1.mp4')}}"
                                    class="object-scale-down !rounded-md border dark:border-defaultborder/10"
                                    autoplay loop muted></video>
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
        class="object-scale-down !rounded-md border dark:border-defaultborder/10"
        autoplay loop muted&gt;&lt;/video&gt;
    </code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Object Fit None Video
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="object-fit-container">
                                    <video src="{{asset('build/assets/video/1.mp4')}}"
                                    class="object-none !rounded-md border dark:border-defaultborder/10"
                                    autoplay loop muted></video>
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre
    class="language-html"><code class="language-html">&lt;video src="{{asset('build/assets/video/1.mp4')}}"
        class="object-none !rounded-md border dark:border-defaultborder/10"
        autoplay loop muted&gt;&lt;/video&gt;
    </code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
