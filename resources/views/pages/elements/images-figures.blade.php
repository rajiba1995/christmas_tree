
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Images & Figures</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Images & Figures 
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
                                        Responsive image
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class=mb-4 !text-[0.813rem] !font-normal">Use <code> .img-fluid </code>class to the img tag to get responsive image.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-48.jpg')}}" class="img-fluid !inline-flex" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-48.jpg')}}" class="img-fluid !inline-flex" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Image With Radius
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-4 !text-[0.813rem] !font-normal">Use <code>.rounded-md</code> class along with <code>.img-fluid</code> to get border radius.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-49.jpg')}}" class="img-fluid !rounded-md !inline-flex" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-49.jpg')}}" class="img-fluid !rounded-md !inline-flex" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Rounded Image
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-4 !text-[0.813rem] !font-normal">Use <code>.rounded-full</code> class to <code>img</code> tag to get rounded image.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-50.jpg')}}" class="img-fluid !rounded-full !inline-flex" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-50.jpg')}}" class="img-fluid !rounded-full !inline-flex" alt="..."&gt;
&lt;/div&gt;</code></pre>
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
                                    <div class="box-title">Image Left Align</div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <img class="!rounded-md float-start" src="{{asset('build/assets/images/media/media-53.jpg')}}" alt="...">
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img class="!rounded-md float-start" src="{{asset('build/assets/images/media/media-53.jpg')}}" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Image Center Align</div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <img class="!rounded-md mx-auto block" src="{{asset('build/assets/images/media/media-55.jpg')}}" alt="...">
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img class="!rounded-md mx-auto block" src="{{asset('build/assets/images/media/media-55.jpg')}}" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Image Right Align</div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <img class="!rounded-md ltr:float-right rtl:float-left" src="{{asset('build/assets/images/media/media-54.jpg')}}" alt="...">
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img class="!rounded-md ltr:float-right rtl:float-left" src="{{asset('build/assets/images/media/media-54.jpg')}}" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Figures</div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex justify-between gap-2">
                                        <figure class="figure inline-block mb-4">
                                            <img class="m-[0.125rem] leading-none img-fluid rounded-md w-full" src="{{asset('build/assets/images/media/media-56.jpg')}}" alt="...">
                                            <figcaption class="text-[0.875em] text-textmuted dark:text-white/70 mt-2">A caption for the above image.
                                            </figcaption>
                                        </figure>
                                        <figure class="figure ltr:float-right rtl:float-left">
                                            <img class="m-[0.125rem] leading-none img-fluid rounded-md w-full" src="{{asset('build/assets/images/media/media-57.jpg')}}" alt="...">
                                            <figcaption class="text-[0.875em] text-textmuted dark:text-white/70 text-end mt-2">A caption for the above image.
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="flex justify-between gap-2"&gt;
        &lt;figure class="figure inline-block mb-4"&gt;
            &lt;img class="m-[0.125rem] leading-none img-fluid rounded-md w-full" src="{{asset('build/assets/images/media/media-56.jpg')}}" alt="..."&gt;
            &lt;figcaption class="text-[0.875em] text-textmuted dark:text-white/70 mt-2"&gt;A caption for the above image.
            &lt;/figcaption&gt;
        &lt;/figure&gt;
        &lt;figure class="figure ltr:float-right rtl:float-left"&gt;
            &lt;img class="m-[0.125rem] leading-none img-fluid rounded-md w-full" src="{{asset('build/assets/images/media/media-57.jpg')}}" alt="..."&gt;
            &lt;figcaption class="text-[0.875em] text-textmuted dark:text-white/70 text-end mt-2"&gt;A caption for the above image.
            &lt;/figcaption&gt;
        &lt;/figure&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Image Thumbnail</div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-3">Use <code>ti-img-thumbnail</code> to give an image a rounded 1px border.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-51.jpg')}}" class="ti-img-thumbnail" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-51.jpg')}}" class="ti-img-thumbnail" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Image Thumbnail</div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="mb-3">Use <code>ti-img-thumbnail-rounded</code> to give an image a rounded 1px border.</p>
                                    <div class="text-center">
                                        <img src="{{asset('build/assets/images/media/media-52.jpg')}}" class="ti-img-thumbnail-rounded" alt="...">
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="{{asset('build/assets/images/media/media-52.jpg')}}" class="ti-img-thumbnail-rounded" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
