
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Pricing</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Pages <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Pricing 
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
                    <div class="grid grid-cols-12 gap-x-6 mb-[3rem]">
                        <div class="xl:col-span-12 col-span-12">
                            <h5 class="font-semibold text-center text-[1.25rem] !text-defaulttextcolor"> Simple Pricing For Everyone </h5>
                            <p class="text-textmuted mb-4 text-center">Choose plan that suits best for your business needs, Our plans scales with you based on your needs</p>
                            <div class="flex justify-center !mb-6">
                                <nav class="bg-primary/10 p-4 rounded-md mb-4" aria-label="Tabs" role="tablist">
                                    <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4  text-sm font-medium text-center rounded-sm hover:text-primary active" id="pricing-item" data-hs-tab="#pricing-monthly1-pane" aria-controls="pricing-monthly1-pane">
                                    Monthly
                                    </a>
                                    <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4 text-sm font-medium text-center  rounded-sm hover:text-primary " id="pricing-yearly1-item" data-hs-tab="#pricing-yearly1-pane" aria-controls="pricing-yearly1-pane">
                                      Yearly
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane show active !p-0 !border-0" id="pricing-monthly1-pane" role="tabpanel" aria-labelledby="pricing-monthly1" tabindex="0">
                                    <div class="grid grid-cols-12 gap-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box overflow-hidden">
                                                <div class="box-body !p-0">
                                                    <div class="px-1 py-2 bg-success/30"></div>
                                                    <div class="!p-6">
                                                        <div class="flex justify-between items-center mb-4">
                                                            <div class="text-[1.125rem] font-semibold">Free</div>
                                                            <div>
                                                                <span class="badge bg-success/10 text-success">For Indivudials</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-[1.5625rem] font-bold mb-1">$0<sub class="text-textmuted font-semibold text-[.6875rem] ms-1">/ Per Month</sub></div>
                                                        <div class="mb-1 text-textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                                        <ul class="list-none mb-0">
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">2 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">1 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">1 Year</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">2</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="grid">
                                                                <button type="button" class="ti-btn ti-btn-light">Choose Plan</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box overflow-hidden">
                                                <div class="box-body !p-0">
                                                    <div class="px-1 py-2 bg-success/30"></div>
                                                    <div class="!p-6">
                                                        <div class="flex justify-between items-center mb-4">
                                                            <div class="text-[1.125rem] font-semibold">Team</div>
                                                            <div>
                                                                <span class="badge bg-success/10 text-success">
                                                                    For Small Teams
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="text-[1.5625rem] font-bold mb-1">$149<sub class="text-textmuted font-semibold text-[.6875rem] ms-1">/ Per Month</sub></div>
                                                        <div class="mb-1 text-textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                                        <ul class="list-none mb-0">
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">5 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">5 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">2 Years</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">5</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="grid">
                                                                <button type="button" class="ti-btn ti-btn-light ">Choose Plan</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box overflow-hidden border border-primary">
                                                <div class="box-body !p-0">
                                                    <div class="px-1 py-2 bg-primary/50"></div>
                                                    <div class="!p-6">
                                                        <div class="flex justify-between items-center mb-4">
                                                            <div class="text-[1.125rem] font-semibold">Business</div>
                                                            <div>
                                                                <span class="badge bg-primary/10 text-primary">
                                                                    For Business Purpose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="text-[1.5625rem] font-bold mb-1">$1,299<sub class="text-textmuted font-semibold text-[.6875rem] ms-1">/ Per Month</sub></div>
                                                        <div class="mb-1 text-textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="text-[0.75rem] mb-4 text-dark"><u>Billed Monthly</u></div>
                                                        <ul class="list-none mb-0">
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">10 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">20 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">3 Years</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">15</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="grid">
                                                                <button type="button" class="ti-btn bg-primary text-white">Choose Plan</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box overflow-hidden">
                                                <div class="box-body !p-0">
                                                    <div class="px-1 py-2 bg-success opacity-[0.3]"></div>
                                                    <div class="!p-6">
                                                        <div class="flex justify-between items-center mb-4">
                                                            <div class="text-[1.125rem] font-semibold">Enterprise</div>
                                                            <div>
                                                                <span class="badge bg-success/10 text-success">
                                                                    For Large Companies
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="text-[1.5625rem] font-bold mb-1">$7,999<sub class="text-textmuted font-semibold text-[.6875rem] ms-1">/ Per Month</sub></div>
                                                        <div class="mb-1 text-textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                                        <ul class="list-none mb-0">
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">20 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">30 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">5 Year</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">50</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="grid">
                                                                <button type="button" class="ti-btn ti-btn-light ">Choose Plan</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane !p-0 !border-0 hidden" id="pricing-yearly1-pane" role="tabpanel" aria-labelledby="pricing-yearly1" tabindex="0">
                                    <div class="grid grid-cols-12 gap-6">
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box overflow-hidden">
                                                <div class="box-body !p-0">
                                                    <div class="px-1 py-2 bg-success opacity-[0.3]"></div>
                                                    <div class="!p-6">
                                                        <div class="flex justify-between items-center mb-4">
                                                            <div class="text-[1.125rem] font-semibold">Free</div>
                                                            <div>
                                                                <span class="badge bg-success/10 text-success">For Indivudials</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-[1.5625rem] font-bold mb-1">$0<sub class="text-textmuted font-semibold text-[.6875rem] ms-1">/ Per Year</sub></div>
                                                        <div class="mb-1 text-textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="text-[0.75rem] mb-4"><u>Billed Yearly</u></div>
                                                        <ul class="list-none mb-0">
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">2 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">1 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">1 Year</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">2</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="grid">
                                                                <button type="button" class="ti-btn ti-btn-light ">Choose Plan</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box overflow-hidden">
                                                <div class="box-body !p-0">
                                                    <div class="px-1 py-2 bg-success opacity-[0.3]"></div>
                                                    <div class="!p-6">
                                                        <div class="flex justify-between items-center mb-4">
                                                            <div class="text-[1.125rem] font-semibold">Team</div>
                                                            <div>
                                                                <span class="badge bg-success/10 text-success">
                                                                    For Small Teams
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="text-[1.5625rem] font-bold mb-1">$1,799<sub class="text-textmuted font-semibold text-[.6875rem] ms-1">/ Per Year</sub></div>
                                                        <div class="mb-1 text-textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="text-[0.75rem] mb-4"><u>Billed Yearly</u></div>
                                                        <ul class="list-none mb-0">
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">5 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">5 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">2 Years</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">5</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="grid">
                                                                <button type="button" class="ti-btn ti-btn-light ">Choose Plan</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box overflow-hidden border border-primary">
                                                <div class="box-body !p-0">
                                                    <div class="px-1 py-2 bg-primary/50"></div>
                                                    <div class="!p-6">
                                                        <div class="flex justify-between items-center mb-4">
                                                            <div class="text-[1.125rem] font-semibold">Business</div>
                                                            <div>
                                                                <span class="badge bg-primary/10 text-primary">
                                                                    For Business Purpose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="text-[1.5625rem] font-bold mb-1">$11,999<sub class="text-textmuted font-semibold text-[.6875rem] ms-1">/ Per Year</sub></div>
                                                        <div class="mb-1 text-textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="text-[0.75rem] mb-4 text-dark"><u>Billed Yearly</u></div>
                                                        <ul class="list-none mb-0">
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">10 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">20 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">3 Years</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">15</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-textmuted opacity-[0.3]"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="grid">
                                                                <button type="button" class="ti-btn bg-primary text-white">Choose Plan</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box overflow-hidden">
                                                <div class="box-body !p-0">
                                                    <div class="px-1 py-2 bg-success opacity-[0.3]"></div>
                                                    <div class="!p-6">
                                                        <div class="flex justify-between items-center mb-4">
                                                            <div class="text-[1.125rem] font-semibold">Enterprise</div>
                                                            <div>
                                                                <span class="badge !bg-success/10 !text-success">
                                                                    For Large Companies
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="text-[1.5625rem] font-bold mb-1">$83,999<sub class="text-textmuted font-semibold text-[.6875rem] ms-1">/ Per Year</sub></div>
                                                        <div class="mb-1 text-textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="text-[0.75rem] mb-4"><u>Billed Yearly</u></div>
                                                        <ul class="list-none mb-0">
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">20 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">30 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">5 Year</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1 inline-flex">50</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="flex items-center mb-4">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="grid">
                                                                <button type="button" class="ti-btn ti-btn-light ">Choose Plan</button>
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
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6 justify-center mb-[3rem]">
                        <div class="xxl:col-span-2 col-span-12"></div>
                        <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                            <div class="container">
                                <div class="flex justify-center !mx-auto">
                                    <div class="">
                                        <h5 class="font-semibold text-center text-[1.25rem] !text-defaulttextcolor"> Simple Pricing For Everyone </h5>
                                        <p class="text-textmuted mb-4 text-center">Choose plan that suits best for your business needs, Our plans scales with you based on your needs</p>
                                    </div>
                                </div>
                                <div class="flex justify-center mb-4">
                                    <nav class="bg-primary/10 p-4 rounded-md mb-4" aria-label="Tabs" role="tablist">
                                        <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4  text-sm font-medium text-center rounded-sm hover:text-primary active" id="pricing-item1" data-hs-tab="#pricing-monthly-pane" aria-controls="pricing-monthly-pane">
                                        Monthly
                                        </a>
                                        <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4 text-sm font-medium text-center  rounded-sm hover:text-primary " id="pricing-yearly1-item1" data-hs-tab="#pricing-yearly-pane" aria-controls="pricing-yearly-pane">
                                          Yearly
                                        </a>
                                    </nav>
                                </div>
                                <div class="box overflow-hidden">
                                    <div class="box-body !p-0">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane show active !border-0 !p-0 border-b-0 dark:border-defaultborder/10" id="pricing-monthly-pane" role="tabpanel" aria-labelledby="pricing-monthly" tabindex="0">
                                                <div class="grid grid-cols-12">
                                                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0">
                                                        <div class="p-6">
                                                            <h6 class="font-semibold text-center text-[1rem]">BASIC</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <i class="bi bi-tags"></i>
                                                                 </div>
                                                                <div class="text-end ms-5">
                                                                    <p class="text-[1.5625rem] font-semibold mb-0">$199</p>
                                                                    <p class="text-textmuted opacity-50 text-[.6875rem] font-semibold mb-0">per month</p>
                                                                </div>
                                                            </div>
                                                            <ul class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Storage Capacity<span class="badge bg-light text-defaulttextcolor ms-1">1Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Daily Updates<span class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Online Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Visitors Monitoring<span class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">2 Free Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Money Back Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn ti-btn-primary">Get Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0">
                                                        <div class="p-6">
                                                            <h6 class="font-semibold text-center text-[1rem]">ADVANCED</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <i class="bi bi-hand-thumbs-up"></i> 
                                                                 </div>
                                                                <div class="text-end ms-5">
                                                                    <p class="text-[1.5625rem] font-semibold mb-0">$499</p>
                                                                    <p class="text-textmuted opacity-50 text-[.6875rem] font-semibold mb-0">per month</p>
                                                                </div>
                                                            </div>
                                                            <ul class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Storage Capacity<span class="badge bg-light text-defaulttextcolor ms-1">5Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Daily Updates<span class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Online Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Visitors Monitoring<span class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">10 Free Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Money Back Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn ti-btn-primary">Get Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 ps-0">
                                                        <div class="p-6 pricing-offer overflow-hidden">
                                                            <span class="pricing-offer-details shadow">
                                                                <span class="font-semibold">10%</span> <span class="text-[0.625rem] op-8 ms-1">Off</span>
                                                            </span>
                                                            <h6 class="font-semibold text-center text-[1rem]">PREMIUM</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <i class="bi bi-gem"></i> 
                                                                </div>
                                                                <div class="text-end ms-5">
                                                                    <p class="text-[1.5625rem] font-semibold mb-0 text-primary">$1,299</p>
                                                                    <p class="text-textmuted opacity-50 text-[.6875rem] font-semibold mb-0">per month</p>
                                                                </div>
                                                            </div>
                                                            <ul class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Storage Capacity<span class="badge bg-light text-defaulttextcolor ms-1">10Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Daily Updates<span class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Online Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Visitors Monitoring<span class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">30 Free Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Money Back Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn bg-primary text-white">Get Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane !p-0 !border-0 border-b-0 dark:border-defaultborder/10 hidden" id="pricing-yearly-pane" role="tabpanel" aria-labelledby="pricing-yearly" tabindex="0">
                                                <div class="grid grid-cols-12">
                                                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12  col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0">
                                                        <div class="p-6">
                                                            <h6 class="font-semibold text-center text-[1rem]">BASIC</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <i class="bi bi-tags"></i> 
                                                                </div>
                                                                <div class="text-end ms-5">
                                                                    <p class="text-[1.5625rem] font-semibold mb-0">$1,499</p>
                                                                    <p class="text-textmuted opacity-50 text-[.6875rem] font-semibold mb-0">per Year</p>
                                                                </div>
                                                            </div>
                                                            <ul class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Storage Capacity<span class="badge bg-light text-defaulttextcolor ms-1">1Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Daily Updates<span class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Online Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Visitors Monitoring<span class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">2 Free Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Money Back Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn ti-btn-primary">Get Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0">
                                                        <div class="p-6">
                                                            <h6 class="font-semibold text-center text-[1rem]">ADVANCED</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <i class="bi bi-hand-thumbs-up"></i> 
                                                                 </div>
                                                                <div class="text-end ms-5">
                                                                    <p class="text-[1.5625rem] font-semibold mb-0">$5,999</p>
                                                                    <p class="text-textmuted opacity-50 text-[.6875rem] font-semibold mb-0">per Year</p>
                                                                </div>
                                                            </div>
                                                            <ul class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Storage Capacity<span class="badge bg-light text-defaulttextcolor ms-1">5Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Daily Updates<span class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Online Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Visitors Monitoring<span class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">10 Free Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Money Back Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn ti-btn-primary">Get Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 ps-0">
                                                        <div class="p-6 pricing-offer overflow-hidden">
                                                            <span class="pricing-offer-details shadow">
                                                                <span class="font-semibold">10%</span> <span class="text-[0.625rem] op-8 ms-1">Off</span>
                                                            </span>
                                                            <h6 class="font-semibold text-center text-[1rem]">PREMIUM</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <i class="bi bi-gem"></i> 
                                                                </div>
                                                                <div class="text-end ms-5">
                                                                    <p class="text-[1.5625rem] font-semibold mb-0 text-primary">$11,499</p>
                                                                    <p class="text-textmuted opacity-50 text-[.6875rem] font-semibold mb-0">per Year</p>
                                                                </div>
                                                            </div>
                                                            <ul class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Storage Capacity<span class="badge bg-light text-defaulttextcolor ms-1">10Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Daily Updates<span class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Online Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Visitors Monitoring<span class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">30 Free Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-textmuted">Money Back Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn bg-primary text-white">Get Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12"></div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start::row-3 -->
                    <div class="">
                        <div class="box-body">
                            <div class="text-center">
                                <h2 class="font-semibold text-2xl">Best Plans For You !</h2>
                                <p class="text-gray-500 dark:text-white/70 mb-4">We have several plans to showcase your business.</p>
                                <div class="flex justify-center !mb-0">
                                    <nav class="bg-primary/10 p-4 rounded-md mb-0" aria-label="Tabs" role="tablist">
                                        <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4  text-sm font-medium text-center rounded-sm hover:text-primary active" id="pricing-1" data-hs-tab="#pricing-style-1" aria-controls="pricing-style-1" role="tab">
                                            Monthly
                                        </a>
                                        <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4 text-sm font-medium text-center  rounded-sm hover:text-primary " id="pricing-2" data-hs-tab="#pricing-style-2" aria-controls="pricing-style-2" role="tab">
                                              Yearly
                                        </a>
                                    </nav>
                                </div>         
                            </div>

                            <div class="mt-3">
                                <div id="pricing-style-1" role="tabpanel" aria-labelledby="pricing-1">
                                    <div class="py-14">
                                        <div class="sm:grid grid-cols-12 xl:space-y-0 space-y-6 max-w-6xl mx-auto">
                                            <div class="lg:col-span-4 col-span-12">
                                                <div class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm  bg-white dark:bg-bodybg">
                                                    <div class="absolute top-0 inset-x-0 h-0.5 bg-warning" aria-hidden="true"></div>
                                                    <h3 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-warning">Basic</h3>
                                                    <p class="text-gray-500 dark:text-white/70">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
                                                    <div class="flex justify-center my-7 items-baseline">
                                                        <span class="me-2 text-5xl font-bold text-gray-800 dark:text-white">$10</span>
                                                        <span class="text-gray-500 dark:text-white/70 font-medium"> / Month</span>
                                                    </div>
                                                    <ul class="p-0 my-4 space-y-3">
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>2 Free Domain Name</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>3 One-Click Apps</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>1 Databases</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Money BackGuarantee</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>24/7 support</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Premium support: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Free Updates: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-2">
                                                        <div class="ti-btn w-full p-3 ti-btn-warning">Choose Plan</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lg:col-span-4 col-span-12 lg:scale-110 z-10 bg-white dark:bg-bodybg shadow-lg">
                                                <div class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm  bg-white dark:bg-bodybg">
                                                    <div class="absolute top-0 inset-x-0 h-0.5 bg-primary" aria-hidden="true"></div>
                                                    <h3 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-primary">Premium</h3>
                                                    <p class="text-gray-500 dark:text-white/70">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
                                                    <div class="flex justify-center my-7 items-baseline">
                                                        <span class="me-2 text-5xl font-bold text-gray-800 dark:text-white">$50</span>
                                                        <span class="text-gray-500 dark:text-white/70 font-medium"> / Month</span>
                                                    </div>
                                                    <ul class="p-0 my-4 space-y-3">
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>2 Free Domain Name</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>3 One-Click Apps</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>1 Databases</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Money BackGuarantee</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>24/7 support</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Premium support: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Free Updates: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-2">
                                                        <div class="ti-btn w-full p-3 ti-btn-primary">Choose Plan</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lg:col-span-4 col-span-12">
                                                <div class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm  bg-white dark:bg-bodybg">
                                                    <div class="absolute top-0 inset-x-0 h-0.5 bg-danger" aria-hidden="true"></div>
                                                    <h3 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-danger">Standard</h3>
                                                    <p class="text-gray-500 dark:text-white/70">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
                                                    <div class="flex justify-center my-7 items-baseline">
                                                        <span class="me-2 text-5xl font-bold text-gray-800 dark:text-white">$25</span>
                                                        <span class="text-gray-500 dark:text-white/70 font-medium"> / Month</span>
                                                    </div>
                                                    <ul class="p-0 my-4 space-y-3">
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>2 Free Domain Name</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>3 One-Click Apps</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>1 Databases</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Money BackGuarantee</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>24/7 support</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Premium support: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Free Updates: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-2">
                                                        <div class="ti-btn w-full p-3 ti-btn-danger">Choose Plan</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pricing-style-2" class="hidden" role="tabpanel" aria-labelledby="pricing-2">
                                    <div class="py-14">
                                        <div class="sm:grid grid-cols-12 xl:space-y-0 space-y-6 max-w-6xl mx-auto">
                                            <div class="lg:col-span-4 col-span-12">
                                                <div class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm  bg-white dark:bg-bodybg">
                                                    <div class="absolute top-0 inset-x-0 h-0.5 bg-warning" aria-hidden="true"></div>
                                                    <h3 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-warning">Basic</h3>
                                                    <p class="text-gray-500 dark:text-white/70">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
                                                    <div class="flex justify-center my-7 items-baseline">
                                                        <span class="me-2 text-5xl font-bold text-gray-800 dark:text-white">$180</span>
                                                        <span class="text-gray-500 dark:text-white/70 font-medium"> / Yearly</span>
                                                    </div>
                                                    <ul class="p-0 my-4 space-y-3">
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>2 Free Domain Name</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>3 One-Click Apps</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>1 Databases</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Money BackGuarantee</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>24/7 support</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Premium support: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Free Updates: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-2">
                                                        <div class="ti-btn w-full p-3 ti-btn-warning">Choose Plan</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lg:col-span-4 col-span-12 lg:scale-110 z-10 bg-white dark:bg-bodybg shadow-lg">
                                                <div class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm  bg-white dark:bg-bodybg">
                                                    <div class="absolute top-0 inset-x-0 h-0.5 bg-primary" aria-hidden="true"></div>
                                                    <h3 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-primary">Premium</h3>
                                                    <p class="text-gray-500 dark:text-white/70">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
                                                    <div class="flex justify-center my-7 items-baseline">
                                                        <span class="me-2 text-5xl font-bold text-gray-800 dark:text-white">$350</span>
                                                        <span class="text-gray-500 dark:text-white/70 font-medium"> / Yearly</span>
                                                    </div>
                                                    <ul class="p-0 my-4 space-y-3">
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>2 Free Domain Name</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>3 One-Click Apps</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>1 Databases</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Money BackGuarantee</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>24/7 support</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Premium support: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Free Updates: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-2">
                                                        <div class="ti-btn w-full p-3 ti-btn-primary">Choose Plan</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lg:col-span-4 col-span-12">
                                                <div class="relative p-6 shadow border dark:border-white/10 text-center rounded-sm  bg-white dark:bg-bodybg">
                                                    <div class="absolute top-0 inset-x-0 h-0.5 bg-danger" aria-hidden="true"></div>
                                                    <h3 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-white text-danger">Standard</h3>
                                                    <p class="text-gray-500 dark:text-white/70">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
                                                    <div class="flex justify-center my-7 items-baseline">
                                                        <span class="me-2 text-5xl font-bold text-gray-800 dark:text-white">$225</span>
                                                        <span class="text-gray-500 dark:text-white/70 font-medium"> / Yearly</span>
                                                    </div>
                                                    <ul class="p-0 my-4 space-y-3">
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>2 Free Domain Name</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>3 One-Click Apps</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>1 Databases</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Money BackGuarantee</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>24/7 support</span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Premium support: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                        <li class="flex space-x-4 rtl:space-x-reverse">
                                                            <span><i class="ri ri-check-line text-success text-xl"></i></span>
                                                            <span>Free Updates: <span class="ms-2 font-semibold">3 Months</span></span>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-2">
                                                        <div class="ti-btn w-full p-3 ti-btn-danger">Choose Plan</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 justify-center">
                        <div class="xxl:col-span-2 col-span-12"></div>
                        <div class="xxl:col-span-8 col-span-12">
                            <div class="container-lg">
                                <div class="flex justify-center">
                                    <div class="">
                                        <h5 class="font-semibold text-center text-[1.25rem] text-defaulttextcolor"> Pricing Plans </h5>
                                        <p class="text-textmuted text-center mb-6 text-[0.813rem]">Select best plans that fits your needs for your business growth,plans are flexible with the enterprise.Familiarize with the payment plans below</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered dark:border-defaultborder/10 whitespace-nowrap min-w-full">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-start">
                                                            <span class="text-[.9375rem] font-semibold">Chek Our Plans</span>
                                                        </th>
                                                        <th scope="col" class="pricing-basic text-start">
                                                            <span class="text-[.9375rem] font-semibold">Basic</span>
                                                        </th>
                                                        <th scope="col" class="pricing-pro text-start">
                                                            <span class="text-[.9375rem] font-semibold">Pro</span>
                                                        </th>
                                                        <th scope="col" class="pricing-premium text-start">
                                                            <span class="text-[.9375rem] font-semibold">Premium</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center bg-light border border-defaultborder dark:border-defaultborder/10">
                                                        <td colspan="4">
                                                            <span class="text-[.875rem] font-semibold">Main Features</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <td></td>
                                                        <td>
                                                            <span>
                                                                24/7 support <span class="badge bg-primary text-white ms-2">1
                                                                    Year</span>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                24/7 support <span class="badge bg-primary text-white ms-2">5
                                                                    Year</span>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                24/7 support <span class="badge bg-primary text-white ms-2">Life
                                                                    Long</span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <td></td>
                                                        <td>
                                                            <span>
                                                                Storage Capacity <span class="badge bg-success text-white ms-2">1
                                                                    TB</span>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                Storage Capacity <span class="badge bg-success text-white ms-2">5
                                                                    TB</span>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                Storage Capacity <span class="badge bg-success text-white ms-2">10
                                                                    TB</span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center bg-light dark:border-defaultborder/10">
                                                        <td colspan="4">
                                                            <span class="text-[.875rem] font-semibold">Complete Features</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <td>
                                                            <span class="font-bold text-[.875rem]">
                                                                Domains
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-semibold">2 Free</span> Domain names
                                                        </td>
                                                        <td>
                                                            <span class="font-semibold">5 Free</span> Domain names
                                                        </td>
                                                        <td>
                                                            <span class="font-semibold">10 Free</span> Domain names
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <td>
                                                            <span class="font-bold text-[.875rem]">
                                                                Money Back Guarentee
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <td>
                                                            <span class="font-bold text-[.875rem]">
                                                                App Integrations
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-danger/10 text-danger !p-1 leading-none !rounded-full">
                                                                <i class="ri-close-fill align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <td>
                                                            <span class="font-bold text-[.875rem]">
                                                                Future Updates
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-danger/10 text-danger !p-1 leading-none !rounded-full">
                                                                <i class="ri-close-fill align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <td>
                                                            <span class="font-bold text-[.875rem]">
                                                                Team Management
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-danger/10 text-danger !p-1 leading-none !rounded-full">
                                                                <i class="ri-close-fill align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge  bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <td>
                                                            <span class="font-bold text-[.875rem]">
                                                                Customer Support
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-danger/10 text-danger !p-1 leading-none !rounded-full">
                                                                <i class="ri-close-fill align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-danger/10 text-danger !p-1 leading-none !rounded-full">
                                                                <i class="ri-close-fill align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-success/10 text-success !p-1 leading-none !rounded-full">
                                                                <i class="ri-check-line align-middle font-semibold"></i>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center bg-light dark:border-defaultborder/10">
                                                        <td colspan="4">
                                                            <span class="text-[.875rem] font-semibold">Pricing</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <th scope="row">
                                                            <span class="font-bold text-[.875rem] text-start">Net Price</span>
                                                        </th>
                                                        <td>
                                                            <span class="text-[1.125rem] font-semibold text-dark">$99</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-[1.125rem] font-semibold text-dark">$299</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-[1.125rem] font-semibold text-dark">$499</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <th scope="row">
                                                            <span class="font-bold text-[.875rem] text-start">Annual
                                                                Subscription</span>
                                                        </th>
                                                        <td>
                                                            <span class="text-[1.125rem] font-semibold text-dark">$1,199</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-[1.125rem] font-semibold text-dark">$3,499</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-[1.125rem] font-semibold text-dark">$5,499</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <th scope="row">
                                                            <span class="font-bold text-[.875rem] text-start">Activation
                                                                Charges</span>
                                                        </th>
                                                        <td>
                                                            <span class="font-semibold">0% + $99</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-semibold">5% + $149</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-semibold">10% + $259</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                        <td class="border-b-0"></td>
                                                        <td class="border-b-0">
                                                            <button type="button" class="ti-btn bg-primary text-white">Choose
                                                                Plan</button>
                                                        </td>
                                                        <td class="border-b-0">
                                                            <button type="button" class="ti-btn bg-primary text-white">Choose
                                                                Plan</button>
                                                        </td>
                                                        <td class="border-b-0">
                                                            <button type="button" class="ti-btn bg-primary text-white">Choose
                                                                Plan</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12"></div>
                    </div>
                    <!--End::row-3 -->

@endsection

@section('scripts')
	


@endsection
