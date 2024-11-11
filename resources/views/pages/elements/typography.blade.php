
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Typography</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Typography 
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

                    <div class="grid grid-cols-12 gap-x-6">
                      <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Heading tags</h5>
                            </div>
                          <div class="box-body space-y-3">
                            <h1 class="font-semibold text-gray-800 dark:text-white text-4xl">h1. Tailwind heading</h1>
                            <h2 class="font-semibold text-gray-800 dark:text-white text-3xl">h2. Tailwind heading</h2>
                            <h3 class="font-semibold text-gray-800 dark:text-white text-2xl">h3. Tailwind heading</h3>
                            <h4 class="font-semibold text-gray-800 dark:text-white text-xl">h4. Tailwind heading</h4>
                            <h5 class="font-semibold text-gray-800 dark:text-white text-lg">h5. Tailwind heading</h5>
                            <h6 class="font-semibold text-gray-800 dark:text-white text-base">h6. Tailwind heading</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Inline text elements</h5>
                            </div>
                          <div class="box-body space-y-3">
                            <p class="text-gray-800 dark:text-white">You can use the mark tag to <mark>highlight</mark> text.</p>
                            <p class="text-gray-800 dark:text-white"><del>This line of text is meant to be treated as deleted text.</del></p>
                            <p class="text-gray-800 dark:text-white"><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p class="text-gray-800 dark:text-white"><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                            <p class="text-gray-800 dark:text-white"><u>This line of text will render as underlined.</u></p>
                            <p class="text-gray-800 dark:text-white"><small>This line of text is meant to be treated as fine print.</small></p>
                            <p class="text-gray-800 dark:text-white"><strong>This line rendered as bold text.</strong></p>
                            <p class="text-gray-800 dark:text-white"><em>This line rendered as italicized text.</em></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Description list alignment</h5>
                            </div>
                          <div class="box-body space-y-3">
                            <dl class="grid sm:grid-cols-3 gap-1 sm:gap-3">
                                <dt class="sm:col-span-1 font-semibold dark:text-white">Description lists</dt>
                                <dd class="sm:col-span-2 mb-3 sm:mb-0 dark:text-white">A description list is perfect for defining terms.</dd>
            
                                <dt class="sm:col-span-1 font-semibold dark:text-white">Term</dt>
                                <dd class="sm:col-span-2 mb-3 sm:mb-0 dark:text-white">
                                  <p>Definition for the term.</p>
                                  <p>And some more placeholder definition text.</p>
                                </dd>
            
                                <dt class="sm:col-span-1 font-semibold dark:text-white">Another term</dt>
                                <dd class="sm:col-span-2 mb-3 sm:mb-0 dark:text-white">This definition is short, so no extra paragraphs or anything.</dd>
            
                                <dt class="sm:col-span-1 font-semibold truncate dark:text-white">Truncated term is truncated</dt>
                                <dd class="sm:col-span-2 mb-3 sm:mb-0 dark:text-white">This can be useful when space is tight. Adds an ellipsis at the end.</dd>
            
                                <dt class="sm:col-span-1 font-semibold dark:text-white">Nesting</dt>
                                <dd class="sm:col-span-2 mb-3 sm:mb-0 dark:text-white">
                                  <dl class="grid sm:grid-cols-5 gap-1 sm:gap-3 dark:text-white">
                                    <dt class="sm:col-span-2 font-semibold dark:text-white">Nested definition list</dt>
                                    <dd class="sm:col-span-3 mb-3 sm:mb-0 dark:text-white">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
                                  </dl>
                                </dd>
                              </dl>
                          </div>
                        </div>
                      </div>
                      <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">First-line and first-letter</h5>
                            </div>
                          <div class="box-body space-y-8">
                            <p class="first-line:uppercase first-line:tracking-widest first-letter:text-slate-900 first-letter:text-7xl first-letter:leading-none first-letter:float-start first-letter:font-bold first-letter:me-3 dark:first-letter:text-white">
                                Well, let me tell you something, funny boy. Y'know that little stamp, the one that says "New York Public Library"? Well that may not mean anything to you, but that means a lot to me. One whole hell of a lot.
                            </p>
                            <p class="">
                                Sure, go ahead, laugh if you want to. I've seen your type before: Flashy, making the scene, flaunting convention. Yeah, I know what you're thinking. What's this guy making such a big stink about old library books? Well, let me give you a hint, junior.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Font Sizes</h5>
                            </div>
                          <div class="box-body space-y-3">
                            <p class="text-gray-800 dark:text-white text-xs">text-xs</p>
                            <p class="text-gray-800 dark:text-white text-sm">text-sm</p>
                            <p class="text-gray-800 dark:text-white text-base">text-base</p>
                            <p class="text-gray-800 dark:text-white text-lg">text-lg</p>
                            <p class="text-gray-800 dark:text-white text-xl">text-xl</p>
                            <p class="text-gray-800 dark:text-white text-2xl">text-2xl</p>
                            <p class="text-gray-800 dark:text-white text-3xl">text-3xl</p>
                            <p class="text-gray-800 dark:text-white text-4xl">text-4xl</p>
                            <p class="text-gray-800 dark:text-white text-5xl">text-5xl</p>
                            <p class="text-gray-800 dark:text-white text-6xl">text-6xl</p>
                            <p class="text-gray-800 dark:text-white text-7xl">text-7xl</p>
                            <p class="text-gray-800 dark:text-white text-8xl">text-8xl</p>
                            <p class="text-gray-800 dark:text-white text-[6.5rem] leading-none sm:text-9xl">text-9xl</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Open/closed state</h5>
                            </div>
                          <div class="box-body space-y-8">
                            <div class="">
                              <details class="open:bg-white dark:open:bg-bodybg open:ring-1 open:ring-black/5 dark:open:ring-white/10 open:shadow-lg p-6 rounded-lg" open>
                                <summary class="text-sm leading-6 text-gray-800 dark:text-white font-semibold select-none">
                                  Why do they call it Ovaltine?
                                </summary>
                                <div class="mt-3 text-sm leading-6 text-gray-800 dark:text-gray-300">
                                  <p>The mug is round. The jar is round. They should call it Roundtine.</p>
                                </div>
                              </details>
                            </div>
                          </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title"> Text Decoration </h5>
                            </div>
                          <div class="box-body space-y-3">
                            <p class="text-gray-800 dark:text-white underline ">This line of text will render as underlined. </p>
                            <p class="text-gray-800 dark:text-white no-underline ">This line of text will render as Not underlined.. </p>
                            <p class="text-gray-800 dark:text-white overline">This line of text will render as overline..</p>
                            <p class="text-gray-800 dark:text-white line-through">This line of text will render as line through.</p>
                          </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title"> Text Transform  </h5>
                            </div>
                          <div class="box-body space-y-3">
                            <p class="text-gray-800 dark:text-white lowercase ">Lowercased text. </p>
                            <p class="text-gray-800 dark:text-white uppercase ">Uppercased text</p>
                            <p class="text-gray-800 dark:text-white capitalize">Captalized text</p>
                            <p class="text-gray-800 dark:text-white normal-case">Normal Text</p>
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
