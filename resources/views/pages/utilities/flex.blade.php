
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Flex</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Utilities <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Flex 
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Enable flex behaviors
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container mb-4">
                                        <div class="flex p-2">I'm a flexbox container!</div>
                                    </div>
                                    <div class="bd-example flex-container">
                                        <div class="inline-flex p-2">I'm an inline flexbox container!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Direction
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container">
                                        <div class="flex flex-row mb-4">
                                            <div class="p-2">Flex item 1</div>
                                            <div class="p-2">Flex item 2</div>
                                            <div class="p-2">Flex item 3</div>
                                        </div>
                                        <div class="flex flex-row-reverse">
                                            <div class="p-2">Flex item 1</div>
                                            <div class="p-2">Flex item 2</div>
                                            <div class="p-2">Flex item 3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Direction flex-col and flex-col-reverse
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container mb-4">
                                        <p>Direction Column</p>
                                        <div class="flex flex-col mb-4">
                                            <div class="p-2">Flex item 1</div>
                                            <div class="p-2">Flex item 2</div>
                                            <div class="p-2">Flex item 3</div>
                                        </div>
                                        <p>Column Reverse</p>
                                        <div class="flex flex-col-reverse">
                                            <div class="p-2">Flex item 1</div>
                                            <div class="p-2">Flex item 2</div>
                                            <div class="p-2">Flex item 3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Justify content
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container mb-4">
                                        <div class="flex justify-start mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-end mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-center mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-between mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-around mb-4">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex justify-evenly">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Align items
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container mb-4">
                                        <div class="flex items-start mb-4" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex items-end mb-4" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex items-center mb-4" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex items-baseline mb-4" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex items-stretch" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Align self
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="bd-example flex-container mb-4">
                                        <div class="flex mb-4" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="self-start p-2">Aligned flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex mb-4" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="self-end p-2">Aligned flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex mb-4" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="self-center p-2">Aligned flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex mb-4" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="self-baseline p-2">Aligned flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                        <div class="flex" style="height: 100px">
                                            <div class="p-2">Flex item</div>
                                            <div class="self-stretch p-2">Aligned flex item</div>
                                            <div class="p-2">Flex item</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Align content ( Heads up! This property has no effect on single rows of flex
                                                items.)
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="bd-example flex-container mb-4">
                                                <div class="flex content-start flex-wrap mb-4 h-[200px]" style="height: 200px">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>
                                                <div class="flex content-end flex-wrap mb-4" style="height: 200px">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>
                                                <div class="flex content-center flex-wrap mb-4" style="height: 200px">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>
                                                <div class="flex content-between flex-wrap mb-4" style="height: 200px">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>
                                                <div class="flex content-around flex-wrap mb-4" style="height: 200px">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>
                                                <div class="flex content-stretch flex-wrap mb-4" style="height: 200px">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Order
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="bd-example flex-container mb-4">
                                                <div class="flex flex-nowrap">
                                                    <div class="order-3 p-2">First flex item</div>
                                                    <div class="order-2 p-2">Second flex item</div>
                                                    <div class="order-1 p-2">Third flex item</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid  gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Fill
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="bd-example flex-container mb-4">
                                                <div class="flex">
                                                    <div class="p-2 flex-grow">Flex item with a lot of content</div>
                                                    <div class="p-2 flex-grow">Flex item</div>
                                                    <div class="p-2 flex-grow">Flex item</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Grow and shrink
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="bd-example flex-container mb-4">
                                                <div class="flex mb-4">
                                                    <div class="p-2 flex-grow">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Third flex item</div>
                                                </div>
                                                <div class="flex">
                                                    <div class="p-2 w-full">Flex item</div>
                                                    <div class="p-2 flex-shrink">Flex item</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Auto margins
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="bd-example flex-container mb-4">
                                                <div class="flex mb-4">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>

                                                <div class="flex mb-4">
                                                    <div class="me-auto p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>

                                                <div class="flex mb-4">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="ms-auto p-2">Flex item</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Wrap
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="bd-example flex-container mb-4">
                                                <div class="flex flex-nowrap" style="width: 8rem;">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>

                                                <div class="flex flex-wrap">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>
                                                <div class="flex flex-wrap-reverse">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                With items
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="bd-example flex-container mb-4">
                                                <div class="flex items-start flex-col mb-4"
                                                    style="height: 200px;">
                                                    <div class="mb-auto p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                </div>

                                                <div class="flex items-end flex-col mb-4"
                                                    style="height: 200px;">
                                                    <div class="p-2">Flex item</div>
                                                    <div class="p-2">Flex item</div>
                                                    <div class="mt-auto p-2">Flex item</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

@endsection

@section('scripts')
	


@endsection
