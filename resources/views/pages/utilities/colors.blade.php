
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Colors</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Utilities <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Colors 
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
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Background Colors
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid md:grid-cols-8 grid-cols-1 sm:grid-cols-4  items-center">
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-primary mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-primary</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-secondary mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-secondary</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-warning mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-warning</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-info mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-info</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-success mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-success</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-danger mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-danger</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-light mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-light</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-dark mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-dark</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Border Colors
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid md:grid-cols-8 grid-cols-1 sm:grid-cols-4  items-center">
                                        <div class="p-4 col">
                                            <div class="m-2 border border-primary mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-primary</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-secondary mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-secondary</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-warning mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-warning</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-info mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-info</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-success mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-success</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-danger mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-danger</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-light mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-light</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-dark mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-dark</code></p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Background Opacity
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid sm:grid-cols-5 items-center">
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success  bg-opacity-100 text-white mx-auto color-container">100%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success bg-opacity-75 text-white  mx-auto color-container">75%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity-75</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success bg-opacity-50 text-black  mx-auto color-container">50%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity-50</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success bg-opacity-25 text-black  mx-auto color-container">25%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity-25</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success bg-opacity-10 text-black  mx-auto color-container">10%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity-10</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                            Text Colors
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid md:grid-cols-9 sm:grid-cols-2 items-center">
                                        <div class="p-4 col">
                                            <div class="m-2 text-primary font-semibold text-[.875rem] text-center">primary</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-primary</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-secondary font-semibold text-[.875rem] text-center">secondary</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-secondary</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-warning font-semibold text-[.875rem] text-center">warning</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-warning</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-info font-semibold text-[.875rem] text-center">info</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-info</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-success font-semibold text-[.875rem] text-center">success</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-success</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-danger font-semibold text-[.875rem] text-center">danger</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-danger</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2  bg-dark text-light font-semibold text-[.875rem] text-center">light</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>.text-light</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-dark font-semibold text-[.875rem] text-center">dark</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-dark</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-textmuted font-semibold text-[.875rem] text-center">muted</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-muted</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Text Opacity
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid sm:grid-cols-4 items-center">
                                                <div class="p-4 col">
                                                    <div class="m-2 text-primary text-opacity-100 font-semibold text-[.875rem] text-center">Opacity-100</div>
                                                    <p class="pb-0 mb-0 font-semibold text-center"><code>100% opacity</code></p>
                                                </div>
                                                <div class="p-4 col">
                                                    <div class="m-2 text-primary text-opacity-75 font-semibold text-[.875rem] text-center">Opacity-100</div>
                                                    <p class="pb-0 mb-0 font-semibold text-center"><code>text-opacity-75</code></p>
                                                </div>
                                                <div class="p-4 col">
                                                    <div class="m-2 text-primary text-opacity-50 font-semibold text-[.875rem] text-center">Opacity-100</div>
                                                    <p class="pb-0 mb-0 font-semibold text-center"><code>text-opacity-50</code></p>
                                                </div>
                                                <div class="p-4 col">
                                                    <div class="m-2 text-primary text-opacity-25 font-semibold text-[.875rem] text-center">Opacity-100</div>
                                                    <p class="pb-0 mb-0 font-semibold text-center"><code>text-opacity-25</code></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-5 -->
                    <h6 class="mb-4">Other Colors:</h6>
                    <div class="grid  gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-blue-50">blue-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-blue-100">blue-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-blue-200">blue-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-blue-300">blue-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-blue-400">blue-400</div>

                                    <div class="flex-grow p-4 bg-blue-500 text-white">blue-500</div>

                                    <div class="flex-grow p-4 bg-blue-600 text-white">blue-600</div>

                                    <div class="flex-grow p-4 bg-blue-700 text-white">blue-700</div>

                                    <div class="flex-grow p-4 bg-blue-900 text-white">blue-900</div>

                                    <div class="flex-grow p-4 bg-blue-950 text-white">blue-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-indigo-50">indigo-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-indigo-100">indigo-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-indigo-200">indigo-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-indigo-300">indigo-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-indigo-400">indigo-400</div>

                                    <div class="flex-grow p-4 bg-indigo-500 text-white">indigo-500</div>

                                    <div class="flex-grow p-4 bg-indigo-600 text-white">indigo-600</div>

                                    <div class="flex-grow p-4 bg-indigo-800 text-white">indigo-800</div>

                                    <div class="flex-grow p-4 bg-indigo-900 text-white">indigo-900</div>

                                    <div class="flex-grow p-4 bg-indigo-950 text-white">indigo-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-purple-50">purple-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-purple-100">purple-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-purple-200">purple-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-purple-300">purple-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-purple-400">purple-400</div>

                                    <div class="flex-grow p-4 bg-purple-500 text-white">purple-500</div>

                                    <div class="flex-grow p-4 bg-purple-600 text-white">purple-600</div>

                                    <div class="flex-grow p-4 bg-purple-700 text-white">purple-700</div>

                                    <div class="flex-grow p-4 bg-purple-800 text-white">purple-800</div>

                                    <div class="flex-grow p-4 bg-purple-950 text-white">purple-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-pink-50">pink-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-pink-100">pink-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-pink-200">pink-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-pink-300">pink-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-pink-400">pink-400</div>

                                    <div class="flex-grow p-4 bg-pink-500 text-white">pink-500</div>

                                    <div class="flex-grow p-4 bg-pink-600 text-white">pink-600</div>

                                    <div class="flex-grow p-4 bg-pink-700 text-white">pink-700</div>

                                    <div class="flex-grow p-4 bg-pink-800 text-white">pink-800</div>

                                    <div class="flex-grow p-4 bg-pink-950 text-white">pink-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-red-50">red-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-red-100">red-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-red-200">red-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-red-300">red-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-red-400">red-400</div>

                                    <div class="flex-grow p-4 bg-red-500 text-white">red-500</div>

                                    <div class="flex-grow p-4 bg-red-600 text-white">red-600</div>

                                    <div class="flex-grow p-4 bg-red-700 text-white">red-700</div>

                                    <div class="flex-grow p-4 bg-red-800 text-white">red-800</div>

                                    <div class="flex-grow p-4 bg-red-950 text-white">red-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-orange-50">orange-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-orange-100">orange-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-orange-200">orange-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-orange-300">orange-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-orange-400">orange-400</div>

                                    <div class="flex-grow p-4 bg-orange-500 text-white">orange-500</div>

                                    <div class="flex-grow p-4 bg-orange-600 text-white">orange-600</div>

                                    <div class="flex-grow p-4 bg-orange-700 text-white">orange-700</div>

                                    <div class="flex-grow p-4 bg-orange-800 text-white">orange-800</div>

                                    <div class="flex-grow p-4 bg-orange-950 text-white">orange-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-yellow-50">yellow-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-yellow-100">yellow-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-yellow-200">yellow-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-yellow-300">yellow-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-yellow-400">yellow-400</div>

                                    <div class="flex-grow p-4 bg-yellow-500 text-white">yellow-500</div>

                                    <div class="flex-grow p-4 bg-yellow-600 text-white">yellow-600</div>

                                    <div class="flex-grow p-4 bg-yellow-700 text-white">yellow-700</div>

                                    <div class="flex-grow p-4 bg-yellow-800 text-white">yellow-800</div>

                                    <div class="flex-grow p-4 bg-yellow-950 text-white">yellow-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-green-50">green-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-green-100">green-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-green-200">green-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-green-300">green-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-green-400">green-400</div>

                                    <div class="flex-grow p-4 bg-green-500 text-white">green-500</div>

                                    <div class="flex-grow p-4 bg-green-600 text-white">green-600</div>

                                    <div class="flex-grow p-4 bg-green-700 text-white">green-700</div>

                                    <div class="flex-grow p-4 bg-green-800 text-white">green-800</div>

                                    <div class="flex-grow p-4 bg-green-950 text-white">green-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-teal-50">teal-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-teal-200">teal-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-teal-300">teal-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-teal-400">teal-400</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-teal-500">teal-500</div>

                                    <div class="flex-grow p-4 bg-teal-600 text-white">teal-600</div>

                                    <div class="flex-grow p-4 bg-teal-700 text-white">teal-700</div>

                                    <div class="flex-grow p-4 bg-teal-800 text-white">teal-800</div>

                                    <div class="flex-grow p-4 bg-teal-900 text-white">teal-900</div>

                                    <div class="flex-grow p-4 bg-teal-950 text-white">teal-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-cyan-50">cyan-50</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-cyan-100">cyan-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-cyan-200">cyan-200</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-cyan-300">cyan-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-cyan-500">cyan-500</div>

                                    <div class="flex-grow p-4 bg-cyan-600 text-white">cyan-600</div>

                                    <div class="flex-grow p-4 bg-cyan-700 text-white">cyan-700</div>

                                    <div class="flex-grow p-4 bg-cyan-800 text-white">cyan-800</div>

                                    <div class="flex-grow p-4 bg-cyan-900 text-white">cyan-900</div>

                                    <div class="flex-grow p-4 bg-cyan-950 text-white">cyan-950</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 !text-[#000] bg-gray-100">gray-100</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-gray-200">gray-200</div>

                                    <div class="flex-grow p-4 !text-[#000]  bg-gray-300">gray-300</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-gray-400">gray-400</div>

                                    <div class="flex-grow p-4 !text-[#000] bg-gray-500">gray-500</div>

                                    <div class="flex-grow p-4 bg-gray-600 text-white">gray-600</div>

                                    <div class="flex-grow p-4 bg-gray-700 text-white">gray-700</div>

                                    <div class="flex-grow p-4 bg-gray-800 text-white">gray-800</div>

                                    <div class="flex-grow p-4 bg-gray-900 text-white">gray-900</div>

                                    <div class="flex-grow p-4 bg-gray-900 text-white">gray</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

@endsection

@section('scripts')
	


@endsection
