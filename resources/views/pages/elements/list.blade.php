
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">List</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">List 
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
                    <div class="grid grid-cols-12  gap-x-6">
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title"> Basic List Type disc</h5>
                                    <div class="prism-toggle">
                                      <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                              class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                  </div>
                                </div>
                                <div class="box-body">
                                  <ul class="list-disc list-inside text-gray-900 dark:text-gray-200">
                                    <li>Now this is a story all about how, my life got flipped turned upside down</li>
                                    <li>And I like to take a minute and sit right here</li>
                                    <li>I'll tell you how I became the prince of a town called Bel-Air </li>
                                  </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
  &lt;ul class="list-disc list-inside text-gray-900 dark:text-gray-200"&gt;
    &lt;li&gt;Now this is a story all about how, my life got flipped turned upside down&lt;/li&gt;
    &lt;li&gt;And I like to take a minute and sit right here&lt;/li&gt;
    &lt;li&gt;I'll tell you how I became the prince of a town called Bel-Air &lt;/li&gt;
  &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                               </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                          <div class="box">
                            <div class="box-header flex justify-between">
                              <h5 class="box-title"> Basic List Type Decimal</h5>
                              <div class="prism-toggle">
                                <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                        class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                              <ol class="list-decimal list-inside text-gray-900 dark:text-gray-200">
                                <li>Now this is a story all about how, my life got flipped turned upside down</li>
                                <li>And I like to take a minute and sit right here</li>
                                <li>I'll tell you how I became the prince of a town called Bel-Air </li>
                              </ol>
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
  &lt;ol class="list-decimal list-inside text-gray-900 dark:text-gray-200"&gt;
    &lt;li&gt;Now this is a story all about how, my life got flipped turned upside down&lt;/li&gt;
    &lt;li&gt;And I like to take a minute and sit right here&lt;/li&gt;
    &lt;li&gt;I'll tell you how I became the prince of a town called Bel-Air &lt;/li&gt;
  &lt;/ol&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                          <div class="box">
                            <div class="box-header flex justify-between">
                              <h5 class="box-title"> Basic List Type None</h5>
                              <div class="prism-toggle">
                                <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                        class="ri-code-line ms-2 inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                              <ul class="list-none list-inside text-gray-900 dark:text-gray-200">
                                <li>Now this is a story all about how, my life got flipped turned upside down</li>
                                <li>And I like to take a minute and sit right here</li>
                                <li>I'll tell you how I became the prince of a town called Bel-Air </li>
                              </ul>
                            </div>
                            <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
  &lt;ul class="list-none list-inside text-gray-900 dark:text-gray-200"&gt;
    &lt;li&gt;Now this is a story all about how, my life got flipped turned upside down&lt;/li&gt;
    &lt;li&gt;And I like to take a minute and sit right here&lt;/li&gt;
    &lt;li&gt;I'll tell you how I became the prince of a town called Bel-Air &lt;/li&gt;
  &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                             </div>
                          </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12  gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        List inline
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                                class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">This is a list item.</li>
                                        <li class="list-inline-item">And another one.</li>
                                        <li class="list-inline-item">But they're displayed inline.</li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-inline mb-0"&gt;
    &lt;li class="list-inline-item"&gt;This is a list item.&lt;/li&gt;
    &lt;li class="list-inline-item"&gt;And another one.&lt;/li&gt;
    &lt;li class="list-inline-item"&gt;But they're displayed inline.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="box">
                              <div class="box-header flex justify-between">
                                <h5 class="box-title">Checked style</h5>
                                <div class="prism-toggle">
                                  <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                          class="ri-code-line ms-2 inline-block align-middle"></i></button>
                              </div>
                              </div>
                              <div class="box-body">
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                                  <ul class="space-y-3 text-sm">
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-800 dark:text-white/70">
                                        FAQ
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-800 dark:text-white/70">
                                        License
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-800 dark:text-white/70">
                                        Terms &amp; Conditions
                                      </span>
                                    </li>
                                  </ul>
        
                                  <ul class="space-y-3 text-sm">
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-800 dark:text-white/70">
                                        FAQ
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-800 dark:text-white/70">
                                        License
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-800 dark:text-white/70">
                                        Terms &amp; Conditions
                                      </span>
                                    </li>
                                  </ul>
        
                                  <ul class="space-y-3 text-sm">
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-primary"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor" class="fill-white"></path>
                                      </svg>
                                      <span class="text-gray-800 dark:text-white/70">
                                        FAQ
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-primary"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor" class="fill-white"></path>
                                      </svg>
                                      <span class="text-gray-800 dark:text-white/70">
                                        License
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-primary"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor" class="fill-white"></path>
                                      </svg>
                                      <span class="text-gray-800 dark:text-white/70">
                                        Terms &amp; Conditions
                                      </span>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
  &lt;div class="grid grid-cols-1 sm:grid-cols-3 gap-6"&gt;
    &lt;ul class="space-y-3 text-sm"&gt;
      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-800 dark:text-white/70"&gt;
          FAQ
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-800 dark:text-white/70"&gt;
          License
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-800 dark:text-white/70"&gt;
          Terms &amp; Conditions
        &lt;/span&gt;
      &lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class="space-y-3 text-sm"&gt;
      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-800 dark:text-white/70"&gt;
          FAQ
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-800 dark:text-white/70"&gt;
          License
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-800 dark:text-white/70"&gt;
          Terms &amp; Conditions
        &lt;/span&gt;
      &lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class="space-y-3 text-sm"&gt;
      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-primary"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor" class="fill-white"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-800 dark:text-white/70"&gt;
          FAQ
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-primary"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor" class="fill-white"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-800 dark:text-white/70"&gt;
          License
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-primary"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor" class="fill-white"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-800 dark:text-white/70"&gt;
          Terms &amp; Conditions
        &lt;/span&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                 </div>
                            </div>
                            <div class="box">
                              <div class="box-header flex justify-between">
                                <h5 class="box-title">Separator</h5>
                                <div class="prism-toggle">
                                  <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                          class="ri-code-line ms-2 inline-block align-middle"></i></button>
                              </div>
                              </div>
                              <div class="box-body">
                                <ul class="text-sm text-gray-600">
                                  <li class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-gray-300 before:rounded-full dark:text-white/70 dark:before:bg-white/80">
                                    FAQ
                                  </li>
                                  <li class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-gray-300 before:rounded-full dark:text-white/70 dark:before:bg-white/80">
                                    License
                                  </li>
                                  <li class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-gray-300 before:rounded-full dark:text-white/70 dark:before:bg-white/80">
                                    Terms &amp; Conditions
                                  </li>
                                </ul>
                              </div>
                              <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
  &lt;ul class="text-sm text-gray-600"&gt;
    &lt;li class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-gray-300 before:rounded-full dark:text-white/70 dark:before:bg-white/80"&gt;
      FAQ
    &lt;/li&gt;
    &lt;li class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-gray-300 before:rounded-full dark:text-white/70 dark:before:bg-white/80"&gt;
      License
    &lt;/li&gt;
    &lt;li class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-gray-300 before:rounded-full dark:text-white/70 dark:before:bg-white/80"&gt;
      Terms &amp; Conditions
    &lt;/li&gt;
  &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="box">
                              <div class="box-header flex justify-between">
                                <h5 class="box-title"> List checked color variations</h5>
                                <div class="prism-toggle">
                                  <button class="ti-btn !py-1 !px-2 ti-btn-primary !font-[500] !text-[0.75rem]">Show Code<i
                                          class="ri-code-line ms-2 inline-block align-middle"></i></button>
                              </div>
                              </div>
                              <div class="box-body">
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                                  <ul class="space-y-3 text-sm">
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-800 dark:text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Dark
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Gray
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-danger" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Red
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-warning" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Yellow
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-success" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Green
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Blue
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-indigo" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Indigo
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-purple" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Purple
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-pink" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Pink
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Light
                                      </span>
                                    </li>
                                  </ul>
        
                                  <ul class="space-y-3 text-sm">
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-800 dark:text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Dark
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Gray
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-danger" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Red
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-warning" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Yellow
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-success" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Green
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Blue
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-indigo" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Indigo
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-purple" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Purple
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-pink" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Pink
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Light
                                      </span>
                                    </li>
                                  </ul>
        
                                  <ul class="space-y-3 text-sm">
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300 dark:text-gray-800" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-gray-900 dark:fill-white"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Dark
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-gray-500"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Gray
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-danger"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Red
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-warning"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Yellow
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-success"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Green
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-primary"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Blue
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-indigo-800"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Indigo
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-purple-800"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Purple
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-pink-800"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Pink
                                      </span>
                                    </li>
        
                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                      <svg class="flex-shrink-0 h-6 w-6 text-gray-300 dark:text-gray-800" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-gray-500 dark:fill-white"></path>
                                        <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"></path>
                                      </svg>
                                      <span class="text-gray-600 dark:text-white/70">
                                        Light
                                      </span>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
  &lt;div class="grid grid-cols-1 sm:grid-cols-3 gap-6"&gt;
    &lt;ul class="space-y-3 text-sm"&gt;
      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-800 dark:text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Dark
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Gray
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-danger" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Red
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-warning" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Yellow
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-success" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Green
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Blue
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-indigo" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Indigo
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-purple" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Purple
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-pink" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Pink
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Light
        &lt;/span&gt;
      &lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class="space-y-3 text-sm"&gt;
      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-800 dark:text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Dark
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Gray
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-danger" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Red
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-warning" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Yellow
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-success" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Green
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-primary" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Blue
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-indigo" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Indigo
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-purple" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Purple
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-pink" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Pink
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Light
        &lt;/span&gt;
      &lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class="space-y-3 text-sm"&gt;
      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300 dark:text-gray-800" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-gray-900 dark:fill-white"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Dark
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-gray-500"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Gray
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-danger"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Red
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-warning"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Yellow
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-success"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Green
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-primary"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Blue
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-indigo"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Indigo
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-purple"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Purple
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-pink"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Pink
        &lt;/span&gt;
      &lt;/li&gt;

      &lt;li class="flex space-x-3 rtl:space-x-reverse"&gt;
        &lt;svg class="flex-shrink-0 h-6 w-6 text-gray-300 dark:text-gray-800" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
          &lt;path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" class="fill-gray-500 dark:fill-white"&gt;&lt;/path&gt;
          &lt;path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"&gt;&lt;/path&gt;
        &lt;/svg&gt;
        &lt;span class="text-gray-600 dark:text-white/70"&gt;
          Light
        &lt;/span&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
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
