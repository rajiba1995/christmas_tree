
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Terms & Conditions</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Pages <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Terms & Conditions 
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

                    <div class="container">
                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 !mx-auto text-defaultsize">
                            <div class="xl:col-span-2 col-span-12"></div>
                            <div class="xl:col-span-8 col-span-12">
                                <div class="box overflow-hidden terms-box">
                                    <div class="box-body !p-0 flex-grow">
                                        <div class="p-4 terms-heading-cover flex items-center text-white bg-primary h5 font-semibold mb-0">
                                            <span>Valex - Terms &amp; Conditions </span>
                                            <a aria-label="anchor" href="javascript:void(0);"  class="ms-auto text-white terms-fullscreen">
                                                <i class="ri-fullscreen-line"></i>
                                            </a>
                                        </div>
                                        <div class="p-6 text-muted terms-conditions" id="terms-scroll">
                                            <div class="mb-[3rem]">
                                                <p class="mb-4 opacity-[0.7]">
                                                    <span class="font-bold text-default opacity-[0.8]">If you stay in the USA </span>the Valex <a class="text-primary" href="javascript:void(0);"><u>Terms and Conditions</u></a> consists of below rules and <a class="text-primary" href="javascript:void(0);"><u>User Agreements</u></a> consists of below policies <a class="text-primary" href="javascript:void(0);"><u>Valex Rules &amp; Privacy Policies</u></a> incorporated with the below conditions.
                                                </p>
                                                <p class="mb-0 opacity-[0.7]">
                                                    <span class="font-bold text-default opacity-[0.8]">If you stay any where in the world other than USA </span>the Valex <a class="text-primary" href="javascript:void(0);"><u>Terms and Conditions</u></a> consists of below rules and <a class="text-primary" href="javascript:void(0);"><u>User Agreements</u></a> consists of below policies <a class="text-primary" href="javascript:void(0);"><u>Valex Rules &amp; Privacy Policies</u></a> incorporated with the below conditions.
                                                </p>
                                            </div>
                                            <h6 class="font-bold pb-3 text-default opacity-[0.7]"><span class="terms-heading">Terms &amp; Services :</span></h6>
                                            <div class="mb-4">
                                                <p class="font-semibold text-muted mb-2 text-[.875rem] opacity-[0.7]">1 - Lorem ipsum dolor sit amet.</p>
                                                <p class="opacity-[0.7] mb-0">
                                                    Note that you'll sometimes see this agreement referred to as a Terms of Use, User Agreement or Terms of Service agreement. These terms are interchangeable and refer to the same type of agreement
                                                </p>
                                            </div>
                                            <div class="mb-4">
                                                <p class="font-semibold text-muted mb-2 text-[.875rem] opacity-[0.7]">2 - Consectetur adipisicing elit.</p>
                                                <p class="opacity-[0.7] mb-2">
                                                    While they are not legally required, terms and conditions set the stage for any successful business relationship. By making it clear and putting these guidelines in writing, business owners can avoid misunderstandings with their customers.
                                                </p>
                                                <p class="opacity-[0.7]">
                                                It also allows you to decide what you consider acceptable and which type of conduct could lead you to terminate a relationship with a user.
                                                </p>
                                            </div>
                                            <div class="mb-4">
                                                <p class="font-semibold text-muted mb-2 text-[.875rem] opacity-[0.7]">3 - There are many variations.</p>
                                                <p class="opacity-[0.7]">
                                                    Limitation of liability disclaimers is one of the main reasons why business owners take the time to include terms and conditions on their websites. When reasonable and drafted adequately, such clauses can help protect your business against claims and lawsuits and limit the amount of money that you would have to pay in damages.
                                                </p>
                                            </div>
                                            <div class="mb-4">
                                                <p class="font-semibold text-muted mb-2 text-[.875rem] opacity-[0.7]">4 - If you allow your users to share.</p>
                                                <p class="opacity-[0.7] mb-2">
                                                    If you allow your users to share comments or photos on your website or leave reviews of the products that you sell, you will want to have a section in your terms that governs their conduct and sets out what is acceptable and what isn’t.
                                                </p>
                                                <p class="opacity-[0.7] mb-2">
                                                    In this clause, you could reserve the right to monitor the user-generated content shared on your website and remove anything that goes against your guidelines. You could expressly ask your users not to post anything that contains obscene language or any material that could be considered harmful or violent or infringes on someone else’s copyright.
                                                </p>
                                            </div>
                                            <div class="mb-0">
                                                <p class="font-semibold text-muted mb-2 text-[.875rem] opacity-[0.7]">5 - You could also make it clear.</p>
                                                <p class="opacity-[0.7] mb-2">
                                                    You could also make it clear that you reserve the right to suspend or delete the accounts of repeat infringers. This will help you make your website a safe space where people can feel comfortable sharing their opinions, which is especially important if you operate a news site, blog, or forum.
                                                </p>
                                                <p class="opacity-[0.7] mb-0">
                                                    From a business point of view, you could reserve the right to use the submitted content for marketing purposes which a lot of big box stores and eCommerce retailers do in order to promote products that get rave reviews. It’s important for your customers to know that you plan on doing so, otherwise they could be surprised to see their words or photo used in a commercial!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer md:flex block items-center justify-between shadow-lg !border-t">
                                        <div>
                                            <div class="!ps-0 form-check !flex">
                                                <input class="form-check-input" type="checkbox" value="" id="privacy-policy">
                                                <label class="ps-3 form-check-label text-defaulttextcolor/70 inline-block" for="privacy-policy">
                                                    I agree with the <a href="javascript:void(0);" class="font-semibold text-defaulttextcolor/70"><u>Privacy Policy</u></a>
                                                </label>
                                            </div>
                                            <div class="!ps-0 form-check !flex">
                                                <input class="form-check-input" type="checkbox" value="" id="terms_conditions">
                                                <label class="ps-3 form-check-label text-defaulttextcolor/70 inline-block" for="terms_conditions">
                                                    I agree with the <a href="javascript:void(0);" class="font-semibold text-defaulttextcolor/70"><u>Terms &amp; Conditions</u></a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="btn-list sm:mt-0 mt-2">
                                            <button type="button" class="ti-btn ti-btn-outline-danger">DECLINE</button>
                                            <button type="button" class="ti-btn ti-btn-primary-full">ACCEPT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-2 col-span-12"></div>
                        </div>
                        <!--End::row-1 -->
                    </div>

@endsection

@section('scripts')
	
        <!-- Internal Terms & Conditions JS -->
        @vite('resources/assets/js/terms_conditions.js')

@endsection