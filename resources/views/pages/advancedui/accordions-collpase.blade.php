
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Accordions</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Advanced Ui <i
                              class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                          </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">Accordions 
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
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Basic Accordion
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-accordion-group">
                                    <div class="hs-accordion accordion-item overflow-hidden !border-b-0" id="hs-basic-heading-one">
                                      <button class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-collapse-one" type="button">
                                        Accordion #1
                                      </button>

                                      <div id="hs-basic-collapse-one"
                                        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-one">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use
                                            to
                                            style each element. These classes control the overall appearance, as
                                            well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that
                                            just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow.
                                        </div>
                                      </div>
                                    </div>

                                    <div class="hs-accordion accordion-item !border-b-0" id="hs-basic-heading-two">
                                      <button
                                        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-collapse-two" type="button">
                                        Accordion #2
                                      </button>
                                      <div id="hs-basic-collapse-two"
                                        class="hs-accordion-content hidden overflow-hidden w-full transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-two">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use
                                            to
                                            style each element. These classes control the overall appearance, as
                                            well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that
                                            just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow.
                                        </div>
                                      </div>
                                    </div>

                                    <div class="hs-accordion accordion-item overflow-hidden" id="hs-basic-heading-three">
                                      <button
                                        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-collapse-three" type="button">
                                        Accordion #3
                                      </button>
                                      <div id="hs-basic-collapse-three"
                                        class="hs-accordion-content  overflow-hidden  w-full hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-three">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use
                                            to
                                            style each element. These classes control the overall appearance, as
                                            well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that
                                            just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow.
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
                                    &lt;div class="hs-accordion-group"&gt;
                                        &lt;div class="hs-accordion accordion-item  overflow-hidden  !border-b-0" id="hs-basic-heading-one"&gt;
                                          &lt;button class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-one" type="button"&gt;
                                            Accordion #1
                                          &lt;/button&gt;
                                          &lt;div id="hs-basic-collapse-one"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-heading-one"&gt;
                                            &lt;div class="accordion-body"&gt;
                                                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use
                                                to
                                                style each element. These classes control the overall appearance, as
                                                well as
                                                the
                                                showing and hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS or overriding our default variables. It's also worth noting that
                                                just
                                                about
                                                any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
                                                transition
                                                does limit overflow.
                                            &lt;/div&gt;
                                          &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="hs-accordion accordion-item !border-b-0" id="hs-basic-heading-two"&gt;
                                          &lt;button
                                            class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-two" type="button"&gt;
                                            Accordion #2
                                          &lt;/button&gt;
                                          &lt;div id="hs-basic-collapse-two"
                                            class="hs-accordion-content hidden overflow-hidden w-full transition-[height] duration-300"
                                            aria-labelledby="hs-basic-heading-two"&gt;
                                            &lt;div class="accordion-body"&gt;
                                                &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use
                                                to
                                                style each element. These classes control the overall appearance, as
                                                well as
                                                the
                                                showing and hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS or overriding our default variables. It's also worth noting that
                                                just
                                                about
                                                any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
                                                transition
                                                does limit overflow.
                                            &lt;/div&gt;
                                          &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-heading-three"&gt;
                                          &lt;button
                                            class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="hs-basic-collapse-three" type="button"&gt;
                                            Accordion #3
                                          &lt;/button&gt;
                                          &lt;div id="hs-basic-collapse-three"
                                            class="hs-accordion-content  overflow-hidden  w-full hidden transition-[height] duration-300"
                                            aria-labelledby="hs-basic-heading-three"&gt;
                                            &lt;div class="accordion-body"&gt;
                                                &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use
                                                to
                                                style each element. These classes control the overall appearance, as
                                                well as
                                                the
                                                showing and hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS or overriding our default variables. It's also worth noting that
                                                just
                                                about
                                                any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
                                                transition
                                                does limit overflow.
                                            &lt;/div&gt;
                                          &lt;/div&gt;
                                        &lt;/div&gt;
                                      &lt;/div&gt;
                                    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Basic Accordion With Icon
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-accordion-group">
                                    <div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-with-arrow-heading-one">
                                      <button
                                        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-with-arrow-collapse-one" type="button">
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Accordion #1
                                      </button>
                                      <div id="hs-basic-with-arrow-collapse-one"
                                        class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-with-arrow-heading-one">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use
                                            to
                                            style each element. These classes control the overall appearance, as
                                            well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that
                                            just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="hs-accordion accordion-item !border-b-0" id="hs-basic-with-arrow-heading-two">
                                      <button
                                        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-with-arrow-collapse-two" type="button">
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Accordion #2
                                      </button>
                                      <div id="hs-basic-with-arrow-collapse-two"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-with-arrow-heading-two">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use
                                            to
                                            style each element. These classes control the overall appearance, as
                                            well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that
                                            just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="hs-accordion accordion-item  overflow-hidden" id="hs-basic-with-arrow-heading-three">
                                      <button
                                        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-with-arrow-collapse-three" type="button">
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Accordion #3
                                      </button>
                                      <div id="hs-basic-with-arrow-collapse-three"
                                        class="hs-accordion-content hidden overflow-hidden w-full transition-[height] duration-300"
                                        aria-labelledby="hs-basic-with-arrow-heading-three">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden
                                            by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use
                                            to
                                            style each element. These classes control the overall appearance, as
                                            well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that
                                            just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow.
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
&lt;div class="hs-accordion-group"&gt;
&lt;div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-with-arrow-heading-one"&gt;
  &lt;button
    class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
    aria-controls="hs-basic-with-arrow-collapse-one" type="button"&gt;
    &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    Accordion #1
  &lt;/button&gt;
  &lt;div id="hs-basic-with-arrow-collapse-one"
    class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300"
    aria-labelledby="hs-basic-with-arrow-heading-one"&gt;
    &lt;div class="accordion-body"&gt;
        &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
        default, until the collapse plugin adds the appropriate classes that we
        use
        to
        style each element. These classes control the overall appearance, as
        well as
        the
        showing and hiding via CSS transitions. You can modify any of this with
        custom
        CSS or overriding our default variables. It's also worth noting that
        just
        about
        any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
        transition
        does limit overflow.
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="hs-accordion accordion-item !border-b-0" id="hs-basic-with-arrow-heading-two"&gt;
  &lt;button
    class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
    aria-controls="hs-basic-with-arrow-collapse-two" type="button"&gt;
    &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    Accordion #2
  &lt;/button&gt;
  &lt;div id="hs-basic-with-arrow-collapse-two"
    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
    aria-labelledby="hs-basic-with-arrow-heading-two"&gt;
    &lt;div class="accordion-body"&gt;
        &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
        default, until the collapse plugin adds the appropriate classes that we
        use
        to
        style each element. These classes control the overall appearance, as
        well as
        the
        showing and hiding via CSS transitions. You can modify any of this with
        custom
        CSS or overriding our default variables. It's also worth noting that
        just
        about
        any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
        transition
        does limit overflow.
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-with-arrow-heading-three"&gt;
  &lt;button
    class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
    aria-controls="hs-basic-with-arrow-collapse-three" type="button"&gt;
    &lt;svg
      class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    &lt;svg
      class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
      &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
    Accordion #3
  &lt;/button&gt;
  &lt;div id="hs-basic-with-arrow-collapse-three"
    class="hs-accordion-content hidden overflow-hidden w-full transition-[height] duration-300"
    aria-labelledby="hs-basic-with-arrow-heading-three"&gt;
    &lt;div class="accordion-body"&gt;
        &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
        by
        default, until the collapse plugin adds the appropriate classes that we
        use
        to
        style each element. These classes control the overall appearance, as
        well as
        the
        showing and hiding via CSS transitions. You can modify any of this with
        custom
        CSS or overriding our default variables. It's also worth noting that
        just
        about
        any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
        transition
        does limit overflow.
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->    

                <!-- Start:: row-2 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Accordion Arrow Streched
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body p-0">
                                 <div class="hs-accordion-group">
                                    <div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                                      <button
                                        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one" type="button">
                                        Accordion #1
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                        <p class="text-gray-800 !py-3 !px-4 dark:text-gray-200">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                                    <div class="hs-accordion accordion-item !border-b-0" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                                      <button
                                        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two" type="button">
                                        Accordion #2
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                                        class="hs-accordion-content accordion-body hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                                        <p class="text-gray-800 dark:text-gray-200">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                                    <div class="hs-accordion accordion-item  overflow-hidden" id="hs-basic-with-title-and-arrow-stretched-heading-three">
                                      <button
                                        class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three" type="button">
                                        Accordion #3
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                        class="hs-accordion-content accordion-body hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                                        <p class="text-gray-800 dark:text-gray-200">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">
                                    &lt;div class="hs-accordion-group"&gt;
                                      &lt;div class="hs-accordion accordion-item  overflow-hidden !border-b-0" id="hs-basic-with-title-and-arrow-stretched-heading-one"&gt;
                                        &lt;button
                                          class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                          aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one" type="button"&gt;
                                          Accordion #1
                                          &lt;svg
                                            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                                            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
                                          &lt;/svg&gt;
                                          &lt;svg
                                            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                                            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
                                          &lt;/svg&gt;
                                        &lt;/button&gt;
                                        &lt;div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                          class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                          aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one"&gt;
                                          &lt;p class="text-gray-800 !py-3 !px-4 dark:text-gray-200"&gt;
                                            &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions.
                                          &lt;/p&gt;
                                        &lt;/div&gt;
                                      &lt;/div&gt;
                                      &lt;div class="hs-accordion accordion-item !border-b-0" id="hs-basic-with-title-and-arrow-stretched-heading-two"&gt;
                                        &lt;button
                                          class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                          aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two" type="button"&gt;
                                          Accordion #2
                                          &lt;svg
                                            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                                            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
                                          &lt;/svg&gt;
                                          &lt;svg
                                            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                                            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
                                          &lt;/svg&gt;
                                        &lt;/button&gt;
                                        &lt;div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                                          class="hs-accordion-content accordion-body hidden w-full overflow-hidden transition-[height] duration-300"
                                          aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two"&gt;
                                          &lt;p class="text-gray-800 dark:text-gray-200"&gt;
                                            &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions.
                                          &lt;/p&gt;
                                        &lt;/div&gt;
                                      &lt;/div&gt;
                                      &lt;div class="hs-accordion accordion-item  overflow-hidden" id="hs-basic-with-title-and-arrow-stretched-heading-three"&gt;
                                        &lt;button
                                          class="hs-accordion-toggle accordion-button hs-accordion-active:text-primary hs-accordion-active:pb-3 group pb-0 pt-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                          aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three" type="button"&gt;
                                          Accordion #3
                                          &lt;svg
                                            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                                            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
                                          &lt;/svg&gt;
                                          &lt;svg
                                            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-textmuted"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                                            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                              stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
                                          &lt;/svg&gt;
                                        &lt;/button&gt;
                                        &lt;div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                          class="hs-accordion-content accordion-body hidden w-full overflow-hidden transition-[height] duration-300"
                                          aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three"&gt;
                                          &lt;p class="text-gray-800 dark:text-gray-200"&gt;
                                            &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions.
                                          &lt;/p&gt;
                                        &lt;/div&gt;
                                      &lt;/div&gt;
                                    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <h6 class="mb-3 !text-defaulttextcolor">Light Colors:</h6>
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Primary Soft Color
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-accordion-group">
                                    <div class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-1">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-accordion-collapse-1" type="button">
                                        Accordion #1
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-accordion-collapse-1"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-accordion-heading-1">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                  
                                    <div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-2">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-accordion-collapse-2" type="button">
                                        Accordion #2
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-accordion-collapse-2"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-accordion-heading-2">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                  
                                    <div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-3">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-accordion-collapse-3" type="button">
                                        Accordion #3
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-accordion-collapse-3"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-accordion-heading-3">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-primary" id="accordionPrimaryExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimaryOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsePrimaryOne" aria-expanded="true"
                aria-controls="collapsePrimaryOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimaryOne" class="accordion-collapse collapse show"
            aria-labelledby="headingPrimaryOne"
            data-bs-parent="#accordionPrimaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimaryTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsePrimaryTwo"
                aria-expanded="false" aria-controls="collapsePrimaryTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimaryTwo" class="accordion-collapse collapse"
            aria-labelledby="headingPrimaryTwo"
            data-bs-parent="#accordionPrimaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimaryThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsePrimaryThree"
                aria-expanded="false" aria-controls="collapsePrimaryThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimaryThree" class="accordion-collapse collapse"
            aria-labelledby="headingPrimaryThree"
            data-bs-parent="#accordionPrimaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Secondary Soft Color
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-accordion-group">
                                    <div class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-1-primary">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-accordion-collapse-1-primary" type="button">
                                        Accordion #1
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-accordion-collapse-1-primary"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-accordion-heading-1-primary">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                  
                                    <div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-2-primary">
                                      <button
                                      class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                                      aria-controls="hs-accordion-collapse-1-primary" type="button">
                                      Accordion #2
                                      <svg
                                        class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                      </svg>
                                      <svg
                                        class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                      </svg>
                                    </button>
                                      <div id="hs-accordion-collapse-2-primary"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-accordion-heading-2-primary">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                  
                                    <div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-3-primary">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-accordion-collapse-1-primary" type="button">
                                        Accordion #3
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-accordion-collapse-3-primary"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-accordion-heading-3-primary">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-secondary" id="accordionSecondaryExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondaryOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSecondaryOne" aria-expanded="true"
                aria-controls="collapseSecondaryOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondaryOne" class="accordion-collapse collapse show"
            aria-labelledby="headingSecondaryOne"
            data-bs-parent="#accordionSecondaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondaryTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseSecondaryTwo"
                aria-expanded="false" aria-controls="collapseSecondaryTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondaryTwo" class="accordion-collapse collapse"
            aria-labelledby="headingSecondaryTwo"
            data-bs-parent="#accordionSecondaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondaryThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseSecondaryThree"
                aria-expanded="false" aria-controls="collapseSecondaryThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondaryThree" class="accordion-collapse collapse"
            aria-labelledby="headingSecondaryThree"
            data-bs-parent="#accordionSecondaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <h6 class="mb-3 !text-defaulttextcolor">Solid Colors:</h6>
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Primary
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-accordion-group">
                                    <div class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-primary-heading-1">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-primary-collapse-1" type="button">
                                        Accordion #1
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-primary-collapse-1"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-primary-heading-1">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                  
                                    <div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-primary-heading-2">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-primary-collapse-2" type="button">
                                        Accordion #2
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-primary-collapse-2"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-primary-heading-2">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                  
                                    <div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-primary-heading-3">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-primary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-primary-collapse-3" type="button">
                                        Accordion #3
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-primary-collapse-3"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-primary-heading-3">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-solid-primary" id="accordionPrimarySolidExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimarySolidOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsePrimarySolidOne" aria-expanded="true"
                aria-controls="collapsePrimarySolidOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimarySolidOne" class="accordion-collapse collapse show"
            aria-labelledby="headingPrimarySolidOne"
            data-bs-parent="#accordionPrimarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimarySolidTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidTwo"
                aria-expanded="false" aria-controls="collapsePrimarySolidTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimarySolidTwo" class="accordion-collapse collapse"
            aria-labelledby="headingPrimarySolidTwo"
            data-bs-parent="#accordionPrimarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimarySolidThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidThree"
                aria-expanded="false" aria-controls="collapsePrimarySolidThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimarySolidThree" class="accordion-collapse collapse"
            aria-labelledby="headingPrimarySolidThree"
            data-bs-parent="#accordionPrimarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Secondary
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-accordion-group">
                                    <div class="hs-accordion active overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-secondary-heading-1">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-secondary-collapse-1" type="button">
                                        Accordion #1
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-secondary-collapse-1"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-secondary-heading-1">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                  
                                    <div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-secondary-heading-2">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-secondary-collapse-2" type="button">
                                        Accordion #2
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-secondary-collapse-2"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-secondary-heading-2">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                  
                                    <div class="hs-accordion overflow-hidden bg-white dark:bg-bodybg border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-secondary-heading-3">
                                      <button
                                        class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-secondary group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-white dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="hs-secondary-collapse-3" type="button">
                                        Accordion #3
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-white hs-accordion-active:group-hover:text-white block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-white hs-accordion-active:group-hover:text-white hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                      </button>
                                      <div id="hs-secondary-collapse-3"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="hs-secondary-heading-3">
                                        <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                          <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                          plugin adds the appropriate classes that we use to style each element. These classes control the
                                          overall appearance, as well as the showing and hiding via CSS transitions.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-solid-secondary" id="accordionSecondarySolidExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondarySolidOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSecondarySolidOne" aria-expanded="true"
                aria-controls="collapseSecondarySolidOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondarySolidOne" class="accordion-collapse collapse show"
            aria-labelledby="headingSecondarySolidOne"
            data-bs-parent="#accordionSecondarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondarySolidTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidTwo"
                aria-expanded="false" aria-controls="collapseSecondarySolidTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondarySolidTwo" class="accordion-collapse collapse"
            aria-labelledby="headingSecondarySolidTwo"
            data-bs-parent="#accordionSecondarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondarySolidThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidThree"
                aria-expanded="false" aria-controls="collapseSecondarySolidThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondarySolidThree" class="accordion-collapse collapse"
            aria-labelledby="headingSecondarySolidThree"
            data-bs-parent="#accordionSecondarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start::row-5 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6">
                    <div class="box">
                        <div class="box-header flex justify-between">
                        <h5 class="box-title">primary Soft Colored Accordion</h5>
                        <div class="prism-toggle">
                            <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                        </div>
                        </div>
                        <div class="box-body">
                        <div class="hs-accordion-group">
                            <div class="hs-accordion active overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-1">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-accordion-collapse-1" type="button">
                                Accordion #1
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="hs-accordion-collapse-1"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-accordion-heading-1">
                                <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
        
                            <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-2">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-accordion-collapse-2" type="button">
                                Accordion #2
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="hs-accordion-collapse-2"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-accordion-heading-2">
                                <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
        
                            <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-3">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-accordion-collapse-3" type="button">
                                Accordion #3
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="hs-accordion-collapse-3"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-accordion-heading-3">
                                <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="box-footer hidden border-t-0">
                            <!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion active overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-1"&gt;
    &lt;button
        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-accordion-collapse-1" type="button"&gt;
        Accordion #1
        &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-accordion-collapse-1"
        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
        aria-labelledby="hs-accordion-heading-1"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-2"&gt;
    &lt;button
        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-accordion-collapse-2" type="button"&gt;
        Accordion #2
        &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-accordion-collapse-2"
        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
        aria-labelledby="hs-accordion-heading-2"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-3"&gt;
    &lt;button
        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-accordion-collapse-3" type="button"&gt;
        Accordion #3
        &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-accordion-collapse-3"
        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
        aria-labelledby="hs-accordion-heading-3"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
        &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            <!-- Prism Code -->
                        </div>
                    </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                    <div class="box">
                        <div class="box-header flex justify-between">
                        <h5 class="box-title"> Soft Colored Accordion</h5>
                        <div class="prism-toggle">
                            <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                        </div>
                        </div>
                        <div class="box-body">
                        <div class="hs-accordion-group">
                            <div class="hs-accordion active overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-1-primary">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-accordion-collapse-1-primary" type="button">
                                Accordion #1
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="hs-accordion-collapse-1-primary"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-accordion-heading-1-primary">
                                <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
        
                            <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-2-primary">
                            <button
                            class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                            aria-controls="hs-accordion-collapse-1-primary" type="button">
                            Accordion #2
                            <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <svg
                                class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            </button>
                            <div id="hs-accordion-collapse-2-primary"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-accordion-heading-2-primary">
                                <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
        
                            <div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-3-primary">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-accordion-collapse-1-primary" type="button">
                                Accordion #3
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                            <div id="hs-accordion-collapse-3-primary"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-accordion-heading-3-primary">
                                <p class="text-gray-800 dark:text-gray-200 py-4 px-5">
                                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="box-footer hidden border-t-0">
                            <!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="hs-accordion-group"&gt;
        &lt;div class="hs-accordion active overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-1-primary"&gt;
        &lt;button
            class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
            aria-controls="hs-accordion-collapse-1-primary" type="button"&gt;
            Accordion #1
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-accordion-collapse-1-primary"
            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-accordion-heading-1-primary"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
            &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
            plugin adds the appropriate classes that we use to style each element. These classes control the
            overall appearance, as well as the showing and hiding via CSS transitions.
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-2-primary"&gt;
        &lt;button
        class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-accordion-collapse-1-primary" type="button"&gt;
        Accordion #2
        &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-accordion-collapse-2-primary"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-accordion-heading-2-primary"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
            &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
            plugin adds the appropriate classes that we use to style each element. These classes control the
            overall appearance, as well as the showing and hiding via CSS transitions.
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="hs-accordion overflow-hidden bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-accordion-heading-3-primary"&gt;
        &lt;button
            class="hs-accordion-toggle hs-accordion-active:text-secondary hs-accordion-active:bg-secondary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-secondary dark:text-gray-200 dark:hover:text-white/80"
            aria-controls="hs-accordion-collapse-1-primary" type="button"&gt;
            Accordion #3
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-secondary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;div id="hs-accordion-collapse-3-primary"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-accordion-heading-3-primary"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200 py-4 px-5"&gt;
            &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
            plugin adds the appropriate classes that we use to style each element. These classes control the
            overall appearance, as well as the showing and hiding via CSS transitions.
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            <!-- Prism Code -->
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End::row-5 -->

                <!-- Start:: row-6 -->
                <h6 class="mb-3 !text-defaulttextcolor">Colored Borders:</h6>
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Primary
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="accordion accordion-border-primary accordions-items-seperate"
                                    id="accordionprimaryborderExample">
                                    <div class="hs-accordion-group">
                                        <div class="hs-accordion  accordion-item" id="hs-basic-heading-one">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between  gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-one" type="button">
                                                Accordion Item #1
                                                <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                              <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                            </button>
    
                                            <div id="hs-basic-collapse-one"
                                                class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300"
                                                aria-labelledby="hs-basic-heading-one">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion  accordion-item" id="hs-basic-heading-two">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-two" type="button">
                                                Accordion Item #2
                                                <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                              <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                            </button>
    
                                            <div id="hs-basic-collapse-two"
                                                class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
                                                aria-labelledby="hs-basic-heading-two">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion  accordion-item" id="hs-basic-heading-tree">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-tree" type="button">
                                                Accordion Item #3
                                                <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                              <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-primary group-hover:text-primary dark:text-primary"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                            </button>
    
                                            <div id="hs-basic-collapse-tree"
                                                class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-heading-two">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-border-primary accordions-items-seperate"
    id="accordionprimaryborderExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingborderprimaryOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#primaryBorderOne" aria-expanded="true"
                aria-controls="primaryBorderOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="primaryBorderOne" class="accordion-collapse collapse show"
            aria-labelledby="headingborderprimaryOne"
            data-bs-parent="#accordionprimaryborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingborderprimaryTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#primaryBorderTwo"
                aria-expanded="false" aria-controls="primaryBorderTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="primaryBorderTwo" class="accordion-collapse collapse"
            aria-labelledby="headingborderprimaryTwo"
            data-bs-parent="#accordionprimaryborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingborderprimaryThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
                aria-expanded="false" aria-controls="primaryBorderThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="primaryBorderThree" class="accordion-collapse collapse"
            aria-labelledby="headingborderprimaryThree"
            data-bs-parent="#accordionprimaryborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Success
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="accordion accordion-border-success accordions-items-seperate"
                                    id="accordionsuccessborderExample">
                                    <div class="hs-accordion-group">
                                        <div class="hs-accordion  accordion-item" id="hs-basic-heading-one">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-one" type="button">
                                                Accordion Item #1
                                                <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-success block w-3 h-3 text-success group-hover:text-success dark:text-success"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                              <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-success hs-accordion-active:group-hover:text-success hidden w-3 h-3 text-success group-hover:text-success dark:text-success"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                            </button>
    
                                            <div id="hs-basic-collapse-one"
                                                class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300"
                                                aria-labelledby="hs-basic-heading-one">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion  accordion-item" id="hs-basic-heading-two">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-two" type="button">
                                                Accordion Item #2
                                                <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-success block w-3 h-3 text-success group-hover:text-success dark:text-success"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                              <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-success hs-accordion-active:group-hover:text-success hidden w-3 h-3 text-success group-hover:text-success dark:text-success"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                            </button>
    
                                            <div id="hs-basic-collapse-two"
                                                class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
                                                aria-labelledby="hs-basic-heading-two">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion accordion-item" id="hs-basic-heading-tree">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-tree" type="button">
                                                Accordion Item #3
                                                <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:text-secondary hs-accordion-active:group-hover:text-success block w-3 h-3 text-success group-hover:text-success dark:text-success"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                              <svg
                                                class="hs-accordion-active:block hs-accordion-active:text-success hs-accordion-active:group-hover:text-success hidden w-3 h-3 text-success group-hover:text-success dark:text-success"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                              </svg>
                                            </button>
    
                                            <div id="hs-basic-collapse-tree"
                                                class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-heading-two">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-border-success accordions-items-seperate"
    id="accordionsuccessborderExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingbordersuccessOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#successBorderOne" aria-expanded="true"
                aria-controls="successBorderOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="successBorderOne" class="accordion-collapse collapse show"
            aria-labelledby="headingbordersuccessOne"
            data-bs-parent="#accordionsuccessborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingbordersuccessTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#successBorderTwo"
                aria-expanded="false" aria-controls="successBorderTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="successBorderTwo" class="accordion-collapse collapse"
            aria-labelledby="headingbordersuccessTwo"
            data-bs-parent="#accordionsuccessborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingbordersuccessThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#successBorderThree"
                aria-expanded="false" aria-controls="successBorderThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="successBorderThree" class="accordion-collapse collapse"
            aria-labelledby="headingbordersuccessThree"
            data-bs-parent="#accordionsuccessborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
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
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Left Aligned Icons
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="accordion accordionicon-left accordions-items-seperate"
                                    id="accordioniconLeftExample">
                                    <div class="hs-accordion-group">
                                        <div class="hs-accordion  accordion-item" id="hs-basic-heading-one">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-one" type="button">
                                        <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                                Accordion Item #1
                                            </button>
    
                                            <div id="hs-basic-collapse-one"
                                                class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-heading-one">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion  accordion-item" id="hs-basic-heading-two">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-two" type="button">
                                                <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                                Accordion Item #2
                                            </button>
    
                                            <div id="hs-basic-collapse-two"
                                                class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
                                                aria-labelledby="hs-basic-heading-two">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion  accordion-item" id="hs-basic-heading-tree">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-tree" type="button">
                                                <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                                Accordion Item #3
                                            </button>
    
                                            <div id="hs-basic-collapse-tree"
                                                class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-heading-two">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="accordion accordionicon-left accordions-items-seperate"
    id="accordioniconLeftExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingleftOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseleftOne" aria-expanded="true"
                aria-controls="collapseleftOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseleftOne" class="accordion-collapse collapse show"
            aria-labelledby="headingleftOne" data-bs-parent="#accordioniconLeftExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingleftTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseLeftTwo"
                aria-expanded="false" aria-controls="collapseLeftTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseLeftTwo" class="accordion-collapse collapse"
            aria-labelledby="headingleftTwo" data-bs-parent="#accordioniconLeftExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden
                by default, until the collapse plugin adds the appropriate classes that
                we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You
                can modify any of this with custom CSS or overriding our default
                variables. It's also worth noting that just about any HTML can go within
                the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingleftThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseLeftThree"
                aria-expanded="false" aria-controls="collapseLeftThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseLeftThree" class="accordion-collapse collapse"
            aria-labelledby="headingleftThree"
            data-bs-parent="#accordioniconLeftExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
                by default, until the collapse plugin adds the appropriate classes that
                we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You
                can modify any of this with custom CSS or overriding our default
                variables. It's also worth noting that just about any HTML can go within
                the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Custom Accordion
                                </div>
                                <div class="prism-toggle">
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                        Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="accordion customized-accordion accordions-items-seperate"
                                    id="customizedAccordion">
                                    <div class="hs-accordion-group">
                                        <div class="hs-accordion  accordion-item custom-accordion-primary" id="hs-basic-heading-one">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-one" type="button">
                                                Accordion Item #1
                                                <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                            </button>
    
                                            <div id="hs-basic-collapse-one"
                                                class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-heading-one">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion  accordion-item custom-accordion-secondary" id="hs-basic-heading-two">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-two" type="button">
                                                Accordion Item #2
                                                <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                            </button>
    
                                            <div id="hs-basic-collapse-two"
                                                class="hs-accordion-content accordion-collapse w-full hidde transition-[height] duration-300 hidden"
                                                aria-labelledby="hs-basic-heading-two">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion  accordion-item custom-accordion-danger" id="hs-basic-heading-tree">
                                            <button
                                                class="hs-accordion-toggle accordion-button  hs-accordion-active:pb-3 group py-0 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start  transition"
                                                aria-controls="hs-basic-collapse-tree" type="button">
                                                Accordion Item #3
                                                <svg
                                          class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <svg
                                          class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                            </button>
    
                                            <div id="hs-basic-collapse-tree"
                                                class="hs-accordion-content accordion-collapse w-full hidden transition-[height] duration-300"
                                                aria-labelledby="hs-basic-heading-two">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="accordion customized-accordion accordions-items-seperate" id="customizedAccordion"&gt;
    &lt;div class="accordion-item custom-accordion-primary"&gt;
        &lt;h2 class="accordion-header" id="customizedAccordionOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#customized-AccordionOne" aria-expanded="true"
                aria-controls="customized-AccordionOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="customized-AccordionOne" class="accordion-collapse collapse show"
            aria-labelledby="customizedAccordionOne" data-bs-parent="#customizedAccordion"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item custom-accordion-secondary"&gt;
        &lt;h2 class="accordion-header" id="customizedAccordionTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#customized-AccordionTwo" aria-expanded="false"
                aria-controls="customized-AccordionTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="customized-AccordionTwo" class="accordion-collapse collapse"
            aria-labelledby="customizedAccordionTwo" data-bs-parent="#customizedAccordion"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item custom-accordion-danger"&gt;
        &lt;h2 class="accordion-header" id="customizedAccordionThree"&gt;
            &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#customized-AccordionThree" aria-expanded="false"
                aria-controls="customized-AccordionThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="customized-AccordionThree" class="accordion-collapse collapse"
            aria-labelledby="customizedAccordionThree" data-bs-parent="#customizedAccordion"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
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
               
                <!-- Start::row-8 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6">
                    <div class="box">
                        <div class="box-header flex justify-between">
                        <h5 class="box-title">Nested Accordion</h5>
                        <div class="prism-toggle">
                            <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                        </div>
                        </div>
                        <div class="box-body">
                        <div class="hs-accordion-group">
                            <div class="hs-accordion active" id="hs-basic-nested-heading-one">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-basic-nested-collapse-one" type="button">
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                Accordion #1
                            </button>
                            <div id="hs-basic-nested-collapse-one"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-nested-heading-one">
                                <div class="hs-accordion-group ps-6">
                                <div class="hs-accordion active" id="hs-basic-nested-sub-heading-one">
                                    <button
                                    class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                    aria-controls="hs-basic-nested-sub-collapse-one" type="button">
                                    <svg
                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                        <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    <svg
                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    Sub accordion #1
                                    </button>
                                    <div id="hs-basic-nested-sub-collapse-one"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="hs-basic-nested-sub-heading-one">
                                    <p class="text-gray-800 dark:text-gray-200">
                                        <em>This is the third item's accordion body.</em> It is hidden by default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element. These
                                        classes control the overall appearance, as well as the showing and hiding via CSS
                                        transitions.
                                    </p>
                                    </div>
                                </div>
        
                                <div class="hs-accordion" id="hs-basic-nested-sub-heading-two">
                                    <button
                                    class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                    aria-controls="hs-basic-nested-sub-collapse-two" type="button">
                                    <svg
                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                        <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    <svg
                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    Sub accordion #2
                                    </button>
                                    <div id="hs-basic-nested-sub-collapse-two"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="hs-basic-nested-sub-heading-two">
                                    <p class="text-gray-800 dark:text-gray-200">
                                        <em>This is the second item's accordion body.</em> It is hidden by default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element. These
                                        classes control the overall appearance, as well as the showing and hiding via CSS
                                        transitions.
                                    </p>
                                    </div>
                                </div>
        
                                <div class="hs-accordion" id="hs-basic-nested-sub-heading-three">
                                    <button
                                    class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                    aria-controls="hs-basic-nested-sub-collapse-three" type="button">
                                    <svg
                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                        <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    <svg
                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    Sub accordion #3
                                    </button>
                                    <div id="hs-basic-nested-sub-collapse-three"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="hs-basic-nested-sub-heading-three">
                                    <p class="text-gray-800 dark:text-gray-200">
                                        <em>This is the first item's accordion body.</em> It is hidden by default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element. These
                                        classes control the overall appearance, as well as the showing and hiding via CSS
                                        transitions.
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
        
                            <div class="hs-accordion" id="hs-basic-nested-heading-two">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-basic-nested-collapse-two" type="button">
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                Accordion #2
                            </button>
                            <div id="hs-basic-nested-collapse-two"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-nested-heading-two">
                                <p class="text-gray-800 dark:text-gray-200">
                                <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
        
                            <div class="hs-accordion" id="hs-basic-nested-heading-three">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-basic-nested-collapse-three" type="button">
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                Accordion #3
                            </button>
                            <div id="hs-basic-nested-collapse-three"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-nested-heading-three">
                                <p class="text-gray-800 dark:text-gray-200">
                                <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
        &lt;div class="hs-accordion active" id="hs-basic-nested-heading-one"&gt;
        &lt;button
            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 py-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
            aria-controls="hs-basic-nested-collapse-one" type="button"&gt;
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            Accordion #1
        &lt;/button&gt;
        &lt;div id="hs-basic-nested-collapse-one"
            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-nested-heading-one"&gt;
            &lt;div class="hs-accordion-group ps-6"&gt;
            &lt;div class="hs-accordion active" id="hs-basic-nested-sub-heading-one"&gt;
                &lt;button
                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-0 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                aria-controls="hs-basic-nested-sub-collapse-one" type="button"&gt;
                &lt;svg
                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" /&gt;
                    &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" /&gt;
                &lt;/svg&gt;
                &lt;svg
                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" /&gt;
                &lt;/svg&gt;
                Sub accordion #1
                &lt;/button&gt;
                &lt;div id="hs-basic-nested-sub-collapse-one"
                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                aria-labelledby="hs-basic-nested-sub-heading-one"&gt;
                &lt;p class="text-gray-800 dark:text-gray-200"&gt;
                    &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These
                    classes control the overall appearance, as well as the showing and hiding via CSS
                    transitions.
                &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="hs-accordion" id="hs-basic-nested-sub-heading-two"&gt;
                &lt;button
                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                aria-controls="hs-basic-nested-sub-collapse-two" type="button"&gt;
                &lt;svg
                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" /&gt;
                    &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" /&gt;
                &lt;/svg&gt;
                &lt;svg
                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" /&gt;
                &lt;/svg&gt;
                Sub accordion #2
                &lt;/button&gt;
                &lt;div id="hs-basic-nested-sub-collapse-two"
                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                aria-labelledby="hs-basic-nested-sub-heading-two"&gt;
                &lt;p class="text-gray-800 dark:text-gray-200"&gt;
                    &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These
                    classes control the overall appearance, as well as the showing and hiding via CSS
                    transitions.
                &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="hs-accordion" id="hs-basic-nested-sub-heading-three"&gt;
                &lt;button
                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                aria-controls="hs-basic-nested-sub-collapse-three" type="button"&gt;
                &lt;svg
                    class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" /&gt;
                    &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" /&gt;
                &lt;/svg&gt;
                &lt;svg
                    class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" /&gt;
                &lt;/svg&gt;
                Sub accordion #3
                &lt;/button&gt;
                &lt;div id="hs-basic-nested-sub-collapse-three"
                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                aria-labelledby="hs-basic-nested-sub-heading-three"&gt;
                &lt;p class="text-gray-800 dark:text-gray-200"&gt;
                    &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These
                    classes control the overall appearance, as well as the showing and hiding via CSS
                    transitions.
                &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="hs-accordion" id="hs-basic-nested-heading-two"&gt;
        &lt;button
            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
            aria-controls="hs-basic-nested-collapse-two" type="button"&gt;
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            Accordion #2
        &lt;/button&gt;
        &lt;div id="hs-basic-nested-collapse-two"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-nested-heading-two"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200"&gt;
            &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
            plugin adds the appropriate classes that we use to style each element. These classes control the
            overall appearance, as well as the showing and hiding via CSS transitions.
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="hs-accordion" id="hs-basic-nested-heading-three"&gt;
        &lt;button
            class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-3 pb-0 pt-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
            aria-controls="hs-basic-nested-collapse-three" type="button"&gt;
            &lt;svg
            class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;svg
            class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            Accordion #3
        &lt;/button&gt;
        &lt;div id="hs-basic-nested-collapse-three"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-nested-heading-three"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200"&gt;
            &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
            plugin adds the appropriate classes that we use to style each element. These classes control the
            overall appearance, as well as the showing and hiding via CSS transitions.
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    </code></pre>
<!-- Prism Code -->
                        </div>
                    </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                    <div class="box">
                        <div class="box-header flex justify-between">
                        <h5 class="box-title">Active content bordered</h5>
                        <div class="prism-toggle">
                            <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                        </div>
                        </div>
                        <div class="box-body">
                        <div class="hs-accordion-group">
                            <div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-sm dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent" id="hs-active-bordered-heading-one">
                            <button type="button" class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-active-bordered-collapse-one">
                                Accordion #1
                                <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                            </button>
                            <div id="hs-basic-active-bordered-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-one">
                                <div class="pb-4 px-5">
                                <p class="text-gray-800 dark:text-gray-200">
                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                                </div>
                            </div>
                            </div>
        
                            <div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-sm dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent" id="hs-active-bordered-heading-two">
                            <button type="button" class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-active-bordered-collapse-two">
                                Accordion #2
                                <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                            </button>
                            <div id="hs-basic-active-bordered-collapse-two" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-two">
                                <div class="pb-4 px-5">
                                <p class="text-gray-800 dark:text-gray-200">
                                    <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                                </div>
                            </div>
                            </div>
        
                            <div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-sm dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent" id="hs-active-bordered-heading-three">
                            <button type="button" class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-active-bordered-collapse-three">
                                Accordion #3
                                <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                            </button>
                            <div id="hs-basic-active-bordered-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-three">
                                <div class="pb-4 px-5">
                                <p class="text-gray-800 dark:text-gray-200">
                                    <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="box-footer hidden border-t-0">
                            <!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-sm dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent" id="hs-active-bordered-heading-one"&gt;
    &lt;button type="button" class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-active-bordered-collapse-one"&gt;
        Accordion #1
        &lt;svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-basic-active-bordered-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-one"&gt;
        &lt;div class="pb-4 px-5"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
            &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-sm dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent" id="hs-active-bordered-heading-two"&gt;
    &lt;button type="button" class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-active-bordered-collapse-two"&gt;
        Accordion #2
        &lt;svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-basic-active-bordered-collapse-two" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-two"&gt;
        &lt;div class="pb-4 px-5"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
            &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-sm dark:hs-accordion-active:border-white/10 dark:bg-bodybg dark:border-transparent" id="hs-active-bordered-heading-three"&gt;
    &lt;button type="button" class="hs-accordion-toggle hs-accordion-active:text-primary inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-active-bordered-collapse-three"&gt;
        Accordion #3
        &lt;svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;path d="M12 5v14"/&gt;&lt;/svg&gt;
        &lt;svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M5 12h14"/&gt;&lt;/svg&gt;
    &lt;/button&gt;
    &lt;div id="hs-basic-active-bordered-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-three"&gt;
        &lt;div class="pb-4 px-5"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200"&gt;
            &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                            <!-- Prism Code -->
                                                    </div>
                    </div>
                    </div>
                </div>
                <!-- End::row-8 -->
        
                <!-- Start::row-9 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between">
                        <h5 class="box-title">Nested Accordion With Borders</h5>
                        <div class="prism-toggle">
                            <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                        </div>
                        </div>
                        <div class="box-body">
                        <div class="hs-accordion-group">
                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10 active" id="hs-basic-nested-heading-1">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-0 py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-basic-nested-collapse-1" type="button">
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                Accordion #1
                            </button>
                            <div id="hs-basic-nested-collapse-1"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-nested-heading-1">
                                <div class="hs-accordion-group px-6 py-3">
                                <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10 active" id="hs-basic-nested-sub-heading-1">
                                    <button
                                    class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                    aria-controls="hs-basic-nested-sub-collapse-1" type="button">
                                    <svg
                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                        <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    <svg
                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    Sub accordion #1
                                    </button>
                                    <div id="hs-basic-nested-sub-collapse-1"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="hs-basic-nested-sub-heading-1">
                                    <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                        <em>This is the third item's accordion body.</em> It is hidden by default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element. These
                                        classes control the overall appearance, as well as the showing and hiding via CSS
                                        transitions.
                                    </p>
                                    </div>
                                </div>
        
                                <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-basic-nested-sub-heading-2">
                                    <button
                                    class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                    aria-controls="hs-basic-nested-sub-collapse-2" type="button">
                                    <svg
                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                        <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    <svg
                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    Sub accordion #2
                                    </button>
                                    <div id="hs-basic-nested-sub-collapse-2"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="hs-basic-nested-sub-heading-2">
                                    <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                        <em>This is the second item's accordion body.</em> It is hidden by default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element. These
                                        classes control the overall appearance, as well as the showing and hiding via CSS
                                        transitions.
                                    </p>
                                    </div>
                                </div>
        
                                <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-basic-nested-sub-heading-3">
                                    <button
                                    class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                    aria-controls="hs-basic-nested-sub-collapse-3" type="button">
                                    <svg
                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                        <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    <svg
                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                    </svg>
                                    Sub accordion #3
                                    </button>
                                    <div id="hs-basic-nested-sub-collapse-3"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="hs-basic-nested-sub-heading-3">
                                    <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                        <em>This is the first item's accordion body.</em> It is hidden by default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element. These
                                        classes control the overall appearance, as well as the showing and hiding via CSS
                                        transitions.
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
        
                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-basic-nested-heading-2">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-basic-nested-collapse-2" type="button">
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                Accordion #2
                            </button>
                            <div id="hs-basic-nested-collapse-2"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-nested-heading-2">
                                <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
        
                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-basic-nested-heading-3">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
                                aria-controls="hs-basic-nested-collapse-3" type="button">
                                <svg
                                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                <svg
                                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                                </svg>
                                Accordion #3
                            </button>
                            <div id="hs-basic-nested-collapse-3"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-nested-heading-3">
                                <p class="text-gray-800 dark:text-gray-200 pb-4 px-5">
                                <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse
                                plugin adds the appropriate classes that we use to style each element. These classes control the
                                overall appearance, as well as the showing and hiding via CSS transitions.
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="box-footer hidden border-t-0">
                            <!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="hs-accordion-group"&gt;
    &lt;div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10 active" id="hs-basic-nested-heading-1"&gt;
    &lt;button
        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:pb-0 py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-basic-nested-collapse-1" type="button"&gt;
        &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" /&gt;
        &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        Accordion #1
    &lt;/button&gt;
    &lt;div id="hs-basic-nested-collapse-1"
        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
        aria-labelledby="hs-basic-nested-heading-1"&gt;
        &lt;div class="hs-accordion-group px-6 py-3"&gt;
        &lt;div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10 active" id="hs-basic-nested-sub-heading-1"&gt;
            &lt;button
            class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
            aria-controls="hs-basic-nested-sub-collapse-1" type="button"&gt;
            &lt;svg
                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
                &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;svg
                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            Sub accordion #1
            &lt;/button&gt;
            &lt;div id="hs-basic-nested-sub-collapse-1"
            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-nested-sub-heading-1"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200 pb-4 px-5"&gt;
                &lt;em&gt;This is the third item's accordion body.&lt;/em&gt; It is hidden by default, until the
                collapse plugin adds the appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing and hiding via CSS
                transitions.
            &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-basic-nested-sub-heading-2"&gt;
            &lt;button
            class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
            aria-controls="hs-basic-nested-sub-collapse-2" type="button"&gt;
            &lt;svg
                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
                &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;svg
                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            Sub accordion #2
            &lt;/button&gt;
            &lt;div id="hs-basic-nested-sub-collapse-2"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-nested-sub-heading-2"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200 pb-4 px-5"&gt;
                &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the
                collapse plugin adds the appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing and hiding via CSS
                transitions.
            &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-basic-nested-sub-heading-3"&gt;
            &lt;button
            class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
            aria-controls="hs-basic-nested-sub-collapse-3" type="button"&gt;
            &lt;svg
                class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
                &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            &lt;svg
                class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
                width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" /&gt;
            &lt;/svg&gt;
            Sub accordion #3
            &lt;/button&gt;
            &lt;div id="hs-basic-nested-sub-collapse-3"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-nested-sub-heading-3"&gt;
            &lt;p class="text-gray-800 dark:text-gray-200 pb-4 px-5"&gt;
                &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the
                collapse plugin adds the appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing and hiding via CSS
                transitions.
            &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-basic-nested-heading-2"&gt;
    &lt;button
        class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-basic-nested-collapse-2" type="button"&gt;
        &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" /&gt;
        &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        Accordion #2
    &lt;/button&gt;
    &lt;div id="hs-basic-nested-collapse-2"
        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
        aria-labelledby="hs-basic-nested-heading-2"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200 pb-4 px-5"&gt;
        &lt;em&gt;This is the second item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="hs-accordion bg-white border -mt-px first:rounded-t-sm last:rounded-b-sm dark:bg-bodybg dark:border-white/10" id="hs-basic-nested-heading-3"&gt;
    &lt;button
        class="hs-accordion-toggle hs-accordion-active:text-primary py-4 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-primary dark:text-gray-200 dark:hover:text-white/80"
        aria-controls="hs-basic-nested-collapse-3" type="button"&gt;
        &lt;svg
        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" /&gt;
        &lt;path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        &lt;svg
        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-white/70"
        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        Accordion #3
    &lt;/button&gt;
    &lt;div id="hs-basic-nested-collapse-3"
        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
        aria-labelledby="hs-basic-nested-heading-3"&gt;
        &lt;p class="text-gray-800 dark:text-gray-200 pb-4 px-5"&gt;
        &lt;em&gt;This is the first item's accordion body.&lt;/em&gt; It is hidden by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                            </code></pre>
                            <!-- Prism Code -->
                                                    </div>
                    </div>
                    </div>
                </div>
                <!-- End::row-9 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
