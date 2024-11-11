
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Stocks</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Dashboard <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Stocks 
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
                    <div class="xxl:col-span-2 xl:col-span-4 sm:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex items-center gap-3 mb-3 flex-wrap">
                            <div class="lh-1"> <span class="avatar bg-primary !text-white"> <i class="bi bi-apple fs-18"></i>
                                </span> </div>
                            <div class="flex-grow"> <span class="block text-[0.925rem]">Apple</span> <span
                                class="block text-textmuted text-[0.75rem]">Apple Inc</span> </div>
                            <div class="text-end"> <span class="text-[0.75rem] text-textmuted">Apple</span> <span
                                class="text-success text-[0.75rem] block">+0.28%</span> </div>
                            </div>
                            <div class="flex items-center justify-between flex-wrap">
                            <div> <span class="text-[0.7rem] text-textmuted">CURRENT VALUE</span> <span
                                class="text-[1rem] font-medium block">$170.77</span>
                            </div>
                            <div id="apple-stock"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-2 xl:col-span-4 sm:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex items-center gap-3 mb-3 flex-wrap">
                            <div class="lh-1"> <span class="avatar border !border-danger !bg-danger text-white"><i
                                    class="bi bi-nvidia text-[1rem]"></i></span> </div>
                            <div class="flex-grow"> <span class="block text-[0.925rem]">Nvidia</span> <span
                                class="block text-textmuted text-[0.75rem]">NVIDIA Corp</span> </div>
                            <div class="text-end"> <span class="text-[0.75rem] text-textmuted">Nvidia</span> <span
                                class="text-success text-[0.75rem] block">+1.58%</span> </div>
                            </div>
                            <div class="flex items-center justify-between flex-wrap">
                            <div> <span class="text-[0.7rem] text-textmuted">CURRENT VALUE</span> <span
                                class="text-[1rem] font-medium block">$170.77</span>
                            </div>
                            <div id="nvida-stock"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-2 xl:col-span-4 sm:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex items-center gap-3 mb-3 flex-wrap">
                            <div class="lh-1"> <span class="avatar border !border-info bg-info text-white"><i
                                    class="bi bi-asterisk text-[1rem]"></i></span> </div>
                            <div class="flex-grow"> <span class="block text-[0.925rem]">Telsa</span> <span
                                class="block text-textmuted text-[0.75rem]">Tesla Inc</span> </div>
                            <div class="text-end"> <span class="text-[0.75rem] text-textmuted">Telsa</span> <span
                                class="text-success text-[0.75rem] block">+0.28%</span> </div>
                            </div>
                            <div class="flex items-center justify-between flex-wrap">
                            <div> <span class="text-[0.7rem] text-textmuted">CURRENT VALUE</span> <span
                                class="text-[1rem] font-medium block">$170.77</span>
                            </div>
                            <div id="tesla-stock"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-2 xl:col-span-4 sm:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex items-center gap-3 mb-3 flex-wrap">
                            <div class="lh-1"> <span class="avatar border !border-warning bg-warning text-white"><i
                                    class="bi bi-amazon text-[1rem]"></i></span> </div>
                            <div class="flex-grow"> <span class="block text-[0.925rem]">Amozan</span> <span
                                class="block text-textmuted text-[0.75rem]">Amazon.com, Inc.</span> </div>
                            <div class="text-end"> <span class="text-[0.75rem] text-textmuted">Amozan</span> <span
                                class="text-success text-[0.75rem] block">+0.62%</span> </div>
                            </div>
                            <div class="flex items-center justify-between flex-wrap">
                            <div> <span class="text-[0.7rem] text-textmuted">CURRENT VALUE</span> <span
                                class="text-[1rem] font-medium block">$170.77</span>
                            </div>
                            <div id="amazon-stock"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-2 xl:col-span-4 sm:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex items-center gap-3 mb-3 flex-wrap">
                            <div class="lh-1"> <span class="avatar border !border-success bg-success text-warning"><i
                                    class="bi bi-box2-heart text-[1rem]"></i></span> </div>
                            <div class="flex-grow"> <span class="block text-[0.925rem]">Ali Xpres</span> <span
                                class="block text-textmuted text-[0.75rem]">Ali Xpress.com</span> </div>
                            <div class="text-end"> <span class="text-[0.75rem] text-textmuted">Ali Xpres</span> <span
                                class="text-success text-[0.75rem] block">+0.32%</span> </div>
                            </div>
                            <div class="flex items-center justify-between flex-wrap">
                            <div> <span class="text-[0.7rem] text-textmuted">CURRENT VALUE</span> <span
                                class="text-[1rem] font-medium block">$170.77</span>
                            </div>
                            <div id="ali-stock"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-2 xl:col-span-4 sm:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex items-center gap-3 mb-3 flex-wrap">
                            <div class="lh-1"> <span class="avatar border !border-orangemain bg-orangemain text-white"><i
                                    class="bi bi-phone text-[1rem]"></i></span></div>
                            <div class="flex-grow"> <span class="block text-[0.925rem]">Samsung</span> <span
                                class="block text-textmuted text-[0.75rem]">Samsong Inc</span> </div>
                            <div class="text-end"> <span class="text-[0.75rem] text-textmuted">Samsung</span> <span
                                class="text-success text-[0.75rem] block">+1.26%</span> </div>
                            </div>
                            <div class="flex items-center justify-between flex-wrap">
                            <div> <span class="text-[0.7rem] text-textmuted">CURRENT VALUE</span> <span
                                class="text-[1rem] font-medium block">$170.77</span>
                            </div>
                            <div id="samsong-stock"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xxl:col-span-3">
                        <div class="box overflow-hidden">
                        <div class="box-header !pb-4  ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">TRENDING STOCKS</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[200]">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            </div>
                            <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Identifying Market Momentum, Analyzing
                                Popular Stocks.</p>
                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <ul class="ti-list-group !border-0 list-group-flush">
                            <li class="ti-list-group-item !py-[1rem] !border-t">
                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                <div class="flex flex-grow items-center">
                                    <div class="me-2">
                                    <span class="avatar bg-primary/10 !text-primary"><i
                                        class="bi bi-apple text-[1.2rem]"></i></span>
                                    </div>
                                    <div class="lh-1">
                                    <span class="font-medium block mb-1 text-default !text-[0.875rem]">Apple</span>
                                    <span class="block text-textmuted text-[0.75rem]">$12,289.44</span>
                                    </div>
                                </div>
                                <div class="fs-12 text-end">
                                    <span class="block text-success">1.14%<i class="text-success ti ti-arrow-bear-right"></i></span>
                                    <div class="btn-list text-end">
                                    <button type="button" class="!text-primary underline me-2 fonr-medium">Short</button>
                                    <button type="button" class="!text-danger underline  fonr-medium">Buy</button>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-group-item !py-[1rem]">
                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                <div class="flex flex-grow items-center">
                                    <div class="me-2">
                                    <span class="avatar  bg-danger/10 !text-danger"><i
                                        class="bi bi-windows !text-[1.2rem]"></i></span>
                                    </div>
                                    <div class="lh-1">
                                    <span class="font-medium block mb-1 text-default !text-[0.875rem]">Micorsoft</span>
                                    <span class="block text-textmuted text-[0.75rem]">$12,289.44</span>
                                    </div>
                                </div>
                                <div class="fs-12 text-end">
                                    <span class="block text-success">0.73%<i class="text-success ti ti-arrow-bear-right"></i></span>
                                    <div class="btn-list text-end">
                                    <button type="button" class="!text-primary underline me-2 fonr-medium">Short</button>
                                    <button type="button" class="!text-danger underline  fonr-medium">Buy</button>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-group-item !py-[1rem]">
                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                <div class="flex flex-grow items-center">
                                    <div class="me-2">
                                    <span class="avatar rounded-circle bg-warning/10 !text-warning"><i
                                        class="bi bi-film !text-[1.2rem]"></i></span>
                                    </div>
                                    <div class="lh-1">
                                    <span class="font-medium block mb-1 text-default !text-[0.875rem]">Netfllx</span>
                                    <span class="block text-textmuted text-[0.75rem]">$12,289.44</span>
                                    </div>
                                </div>
                                <div class="text-danger fs-12 text-end">
                                    <span class="block">1.24%<i class="ti ti-arrow-bear-right"></i></span>
                                    <div class="btn-list text-end">
                                    <button type="button" class="!text-primary underline me-2 fonr-medium">Short</button>
                                    <button type="button" class="!text-danger underline  fonr-medium">Buy</button>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-group-item !py-[1rem]">
                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                <div class="flex flex-grow items-center">
                                    <div class="me-2">
                                    <span class="avatar rounded-circle bg-success/10 !text-success"><i
                                        class="bi bi-github text-[1.2rem]"></i></span>
                                    </div>
                                    <div class="lh-1">
                                    <span class="font-medium block mb-2 text-default !text-[0.925rem]">Github</span>
                                    <span class="block text-textmuted text-[0.75rem]">$12,289.44</span>
                                    </div>
                                </div>
                                <div class="fs-12 text-end">
                                    <span class="block text-success">2.14%<i class="ti ti-arrow-bear-right text-success"></i></span>
                                    <div class="btn-list text-end">
                                    <button type="button" class="!text-primary underline me-2 fonr-medium">Short</button>
                                    <button type="button" class="!text-danger underline  fonr-medium">Buy</button>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-group-item !py-[1rem]">
                                <div class="flex gap-2 flex-wrap items-start justify-between">
                                <div class="flex flex-grow items-center">
                                    <div class="me-2">
                                    <span class="avatar rounded-circle bg-info/10 !text-info"><i
                                        class="bi bi-twitter-x text-[1.2rem]"></i></span>
                                    </div>
                                    <div class="lh-1">
                                    <span class="font-medium block mb-2 text-default !text-[0.925rem]">Twitter</span>
                                    <span class="block text-textmuted text-[0.75rem]">$12,289.44</span>
                                    </div>
                                </div>
                                <div class="fs-12 text-end">
                                    <span class="block text-success">0.32%<i class="ti ti-arrow-bear-right text-success"></i></span>
                                    <div class="btn-list text-end">
                                    <button type="button" class="!text-primary underline me-2 fonr-medium">Short</button>
                                    <button type="button" class="!text-danger underline  fonr-medium">Buy</button>
                                    </div>
                                </div>
                                </div>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <div class=" flex justify-between">
                            <h4 class="box-title mb-2">Total Investments</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            
                            </div>
                            <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-1">Summarizing Total Investments, Evaluating
                                Total Investment Trends.</p>
                            </div>
                        </div>
                        <div class="box-body !py-0">
                            <div class="flex items-center justify-between gap-4 flex-wrap">
                            <div class="flex flex-wrap flex-grow gap-3">
                                <div> <span class="block text-textmuted mb-1">Invested Value</span> <span
                                    class="block font-semibold">$1,290.94<span class="text-success ms-1 text-[0.75rem]"><i
                                        class="ti ti-chevron-up"></i>1.22%</span></span> </div>
                                <div> <span class="block text-textmuted mb-1">Total Returns</span> <span
                                    class="block font-semibold">$25,458.20<span class="text-success ms-1 text-[0.75rem]"><i
                                        class="ti ti-chevron-up"></i>10.14%</span></span> </div>
                            </div>
                            <div class="flex flex-wrap gap-3 text-end">
                                <div> <span class="block text-textmuted mb-1">Today Change</span> <span
                                    class="block font-semibold">$112.09</span> </div>
                                <div> <span class="block text-textmuted mb-1">Change In %</span> <span
                                    class="block font-semibold">+0.01%<span class="text-success ms-1 text-[0.75rem]"><i
                                        class="ti ti-chevron-up"></i>0.21%</span></span> </div>
                            </div>
                            </div>
                            <div id="totalInvestmentsStats"></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <div class="flex justify-between">
                                <h4 class="box-title mb-2">My Stocks</h4>
                                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto"> <a aria-label="anchor"
                                href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <div class="hs-dropdown-menu ti-dropdown-menu hidden"> <a class="ti-dropdown-item"
                                    href="javascript:void(0)">All Stocks</a> <a class="ti-dropdown-item"
                                    href="javascript:void(0)">Wishlist</a> <a class="ti-dropdown-item"
                                    href="javascript:void(0)">Stocks</a> <a class="ti-dropdown-item"
                                    href="javascript:void(0)">Crypto</a> <a class="ti-dropdown-item"
                                    href="javascript:void(0)">ETFs</a> <a class="ti-dropdown-item"
                                    href="javascript:void(0)">Bonds</a> </div>
                            </div>
                            </div>
                            <div>
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Tracking Your Investments, Monitoring
                                Your Holdings.</p>
                            </div>
                            </div>
                        <div class="box-body p-0">
                            <div class="hs-accordion-group my-stocks-container">
                            <div class="hs-accordion stock-item !mb-6" id="hs-basic-heading-one"> <button type="button"
                                class="hs-accordion-toggle  group py-0  inline-flex items-center gap-x-3 w-full font-medium text-start  transition  dark:hs-accordion-active:text-primary "
                                aria-controls="hs-basic-collapse-one"> <span class="flex items-center w-full"> <span
                                    class="flex justify-between items-center w-full"> <span class="ltr:mr-2 rtl:ml-2"> <span
                                        class="avatar avatar-md !rounded-full bg-primary/10 !text-primary p-2.5"><i
                                            class="ri-github-line text-xl leading-none"></i></span> </span> <span class="flex-1">
                                        <span class="flex justify-between items-center mb-1"> <span>GTHB (Gituhb, Demo Inc.)</span>
                                        <span class="text-end">$12,390.02</span> </span> <span
                                        class="flex justify-between items-center text-xs"> <span
                                            class="text-textmuted">12 shares</span> <span
                                            class="text-success inline-flex"><i
                                            class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>0.14%</span> </span> </span> </span>
                                    </span> </button>
                                <div id="hs-basic-collapse-one"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                aria-labelledby="hs-basic-heading-one">
                                <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                    <div class="flex-1 flex items-center gap-2"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a> <a
                                        href="javascript:void(0);" class="ti-btn ti-btn-danger h-7 w-7"
                                        data-hs-overlay="#sellStockModal">S</a> <span class="hs-tooltip ti-main-tooltip"> <span
                                        class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                        <i class="ti ti-chart-candle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                            role="tooltip" data-popper-placement="top"
                                            style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                            Market Cap </span> </span> </span> </div>
                                    <div class="min-w-fit flex items-center">
                                    <p class="mb-0 ltr:mr-3 rtl:ml-3"> <span
                                        class="text-textmuted ltr:mr-1 rtl:ml-1">High:</span> <span
                                        class="text-success">$20,399</span> </p>
                                    <p class="mb-0"> <span class="text-textmuted ltr:mr-1 rtl:ml-1">Low:</span>
                                        <span class="text-danger">$11,021</span>
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="hs-accordion stock-item !mb-6" id="hs-basic-heading-two"> <button type="button"
                                class="hs-accordion-toggle  group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start  transition  dark:hs-accordion-active:text-primary "
                                aria-controls="hs-basic-collapse-two"> <span class="flex items-center w-full"> <span
                                    class="flex justify-between items-center w-full"> <span class="ltr:mr-2 rtl:ml-2"> <span
                                        class="avatar avatar-md !rounded-full bg-info/10 !text-info p-2.5"><i
                                            class="ri-twitter-x-line text-xl leading-none"></i></span> </span> <span class="flex-1">
                                        <span class="flex justify-between items-center mb-1"> <span>TTR (Twiter.com, Inc.)</span>
                                        <span class="text-end">$15,526.01</span> </span> <span
                                        class="flex justify-between items-center text-xs"> <span
                                            class="text-textmuted">1,290 shares</span> <span
                                            class="text-success inline-flex"><i
                                            class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>2.14%</span> </span> </span> </span>
                                    </span> </button>
                                <div id="hs-basic-collapse-two"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                aria-labelledby="hs-basic-heading-two">
                                <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                    <div class="flex-1 flex gap-2 items-center"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a> <a
                                        href="javascript:void(0);" class="ti-btn ti-btn-danger h-7 w-7"
                                        data-hs-overlay="#sellStockModal">S</a> <span class="hs-tooltip ti-main-tooltip"> <span
                                        class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                        <i class="ti ti-chart-candle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                            role="tooltip" data-popper-placement="top"
                                            style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                            Market Cap </span> </span> </span> </div>
                                    <div class="min-w-fit flex items-center">
                                    <p class="mb-0 ltr:mr-3 rtl:ml-3"> <span
                                        class="text-textmuted ltr:mr-1 rtl:ml-1">High:</span> <span
                                        class="text-success">$20,399</span> </p>
                                    <p class="mb-0"> <span class="text-textmuted ltr:mr-1 rtl:ml-1">Low:</span>
                                        <span class="text-danger">$11,021</span>
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="hs-accordion stock-item !mb-5" id="hs-basic-heading-three"> <button type="button"
                                class="hs-accordion-toggle   group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start  transition  dark:hs-accordion-active:text-primary "
                                aria-controls="hs-basic-collapse-three"> <span class="flex items-center w-full"> <span
                                    class="flex justify-between items-center w-full"> <span class="ltr:mr-2 rtl:ml-2"> <span
                                        class="avatar avatar-md !rounded-full bg-danger/10 !text-danger p-2.5"><i
                                            class="ri-netflix-line text-xl leading-none"></i></span> </span> <span class="flex-1">
                                        <span class="flex justify-between items-center mb-1"> <span>NTFX (Netfllx.com, Inc.)</span>
                                        <span class="text-end">$41,250.50</span> </span> <span
                                        class="flex justify-between items-center text-xs"> <span
                                            class="text-textmuted">230 shares</span> <span
                                            class="text-danger inline-flex"><i
                                            class="ti ti-trending-down ltr:mr-1 rtl:ml-1"></i>4.02%</span> </span> </span> </span>
                                    </span> </button>
                                <div id="hs-basic-collapse-three"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                aria-labelledby="hs-basic-heading-three">
                                <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                    <div class="flex-1 flex gap-2 items-center"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a> <a
                                        href="javascript:void(0);" class="ti-btn ti-btn-danger h-7 w-7"
                                        data-hs-overlay="#sellStockModal">S</a> <span class="hs-tooltip ti-main-tooltip"> <span
                                        class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                        <i class="ti ti-chart-candle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                            role="tooltip" data-popper-placement="top"
                                            style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                            Market Cap </span> </span> </span> </div>
                                    <div class="min-w-fit flex items-center">
                                    <p class="mb-0 ltr:mr-3 rtl:ml-3"> <span
                                        class="text-textmuted ltr:mr-1 rtl:ml-1">High:</span> <span
                                        class="text-success">$20,399</span> </p>
                                    <p class="mb-0"> <span class="text-textmuted ltr:mr-1 rtl:ml-1">Low:</span>
                                        <span class="text-danger">$11,021</span>
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="hs-accordion stock-item !mb-5" id="hs-basic-heading-four"> <button type="button"
                                class="hs-accordion-toggle  group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start  transition  dark:hs-accordion-active:text-primary "
                                aria-controls="hs-basic-collapse-four"> <span class="flex items-center w-full"> <span
                                    class="flex justify-between items-center w-full"> <span class="ltr:mr-2 rtl:ml-2"> <span
                                        class="avatar avatar-md !rounded-full bg-success/10 !text-success p-2.5"><i
                                            class="ri-angularjs-line text-xl leading-none"></i></span> </span> <span class="flex-1">
                                        <span class="flex justify-between items-center mb-1"> <span>Ang (Angular, Inc.)</span> <span
                                            class="text-end">$30,500.15</span> </span> <span
                                        class="flex justify-between items-center text-xs"> <span
                                            class="text-textmuted">325 shares</span> <span
                                            class="text-danger inline-flex"><i
                                            class="ti ti-trending-down ltr:mr-1 rtl:ml-1"></i>2.73%</span> </span> </span> </span>
                                </span> </button>
                                <div id="hs-basic-collapse-four"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                aria-labelledby="hs-basic-heading-four">
                                <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                    <div class="flex-1 gap-2 flex items-center"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a> <a
                                        href="javascript:void(0);" class="ti-btn ti-btn-danger h-7 w-7"
                                        data-hs-overlay="#sellStockModal">S</a> <span class="hs-tooltip ti-main-tooltip"> <span
                                        class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                        <i class="ti ti-chart-candle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                            role="tooltip" data-popper-placement="top"
                                            style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                            Market Cap </span> </span> </span> </div>
                                    <div class="min-w-fit flex items-center">
                                    <p class="mb-0 ltr:mr-3 rtl:ml-3"> <span
                                        class="text-textmuted ltr:mr-1 rtl:ml-1">High:</span> <span
                                        class="text-success">$20,399</span> </p>
                                    <p class="mb-0"> <span class="text-textmuted ltr:mr-1 rtl:ml-1">Low:</span>
                                        <span class="text-danger">$11,021</span>
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="hs-accordion stock-item !mb-5 " id="hs-basic-heading-five"> <button type="button"
                                class="hs-accordion-toggle group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start  transition  dark:hs-accordion-active:text-primary "
                                aria-controls="hs-basic-collapse-five"> <span class="flex items-center w-full"> <span
                                    class="flex justify-between items-center w-full"> <span class="ltr:mr-2 rtl:ml-2"> <span
                                        class="avatar avatar-md !rounded-full bg-info/10 !text-info p-2.5"><i
                                            class="ri-microsoft-line text-xl leading-none"></i></span> </span> <span class="flex-1">
                                        <span class="flex justify-between items-center mb-1"> <span>MS (Micorsoft, Inc.)</span>
                                        <span class="text-end">$1,80,520.02</span> </span> <span
                                        class="flex justify-between items-center text-xs"> <span
                                            class="text-textmuted">1,523 shares</span> <span
                                            class="text-success inline-flex"><i
                                            class="ti ti-trending-up ltr:mr-1 rtl:ml-1"></i>8.63%</span> </span> </span> </span>
                                </span> </button>
                                <div id="hs-basic-collapse-five"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                aria-labelledby="hs-basic-heading-five">
                                <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                    <div class="flex-1 flex gap-2 items-center"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a> <a
                                        href="javascript:void(0);" class="ti-btn ti-btn-danger h-7 w-7"
                                        data-hs-overlay="#sellStockModal">S</a> <span class="hs-tooltip ti-main-tooltip"> <span
                                        class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                        <i class="ti ti-chart-candle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                            role="tooltip" data-popper-placement="top"
                                            style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                            Market Cap </span> </span> </span> </div>
                                    <div class="min-w-fit flex items-center">
                                    <p class="mb-0 ltr:mr-3 rtl:ml-3"> <span
                                        class="text-textmuted ltr:mr-1 rtl:ml-1">High:</span> <span
                                        class="text-success">$20,399</span> </p>
                                    <p class="mb-0"> <span class="text-textmuted ltr:mr-1 rtl:ml-1">Low:</span>
                                        <span class="text-danger">$11,021</span>
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="hs-accordion stock-item" id="hs-basic-heading-six"> <button type="button"
                                class="hs-accordion-toggle !mb-0  group py-0 inline-flex items-center gap-x-3 w-full font-medium text-start  transition  dark:hs-accordion-active:text-primary "
                                aria-controls="hs-basic-collapse-six"> <span class="flex items-center w-full"> <span
                                    class="flex justify-between items-center w-full"> <span class="ltr:mr-2 rtl:ml-2"> <span
                                        class="avatar avatar-md !rounded-full bg-warning/10 !text-warning p-2.5"><i
                                            class="ri-apple-line text-xl leading-none"></i></span> </span> <span class="flex-1">
                                        <span class="flex justify-between items-center mb-1"> <span>AAPL (Appil, Inc.)</span> <span
                                            class="text-end">$21,093.20</span> </span> <span
                                        class="flex justify-between items-center text-xs"> <span
                                            class="text-textmuted">30 shares</span> <span
                                            class="text-danger inline-flex"><i
                                            class="ti ti-trending-down ltr:mr-1 rtl:ml-1"></i>4.10%</span> </span> </span> </span>
                                </span> </button>
                                <div id="hs-basic-collapse-six"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 px-3 pt-3"
                                aria-labelledby="hs-basic-heading-six">
                                <div class="flex justify-between items-center overflow-auto space-x-6 rtl:space-x-reverse">
                                    <div class="flex-1 gap-2 flex items-center"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary h-7 w-7" data-hs-overlay="#buyStockModal">B</a> <a
                                        href="javascript:void(0);" class="ti-btn ti-btn-danger h-7 w-7"
                                        data-hs-overlay="#sellStockModal">S</a> <span class="hs-tooltip ti-main-tooltip"> <span
                                        class="m-0 hs-tooltip-toggle relative w-7 h-7 ti-btn transition-none focus:outline-none ti-btn-light">
                                        <i class="ti ti-chart-candle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700 hidden"
                                            role="tooltip" data-popper-placement="top"
                                            style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1818px, -249px);">
                                            Market Cap </span> </span> </span> </div>
                                    <div class="min-w-fit flex items-center">
                                    <p class="mb-0 ltr:mr-3 rtl:ml-3"> <span
                                        class="text-textmuted ltr:mr-1 rtl:ml-1">High:</span> <span
                                        class="text-success">$20,399</span> </p>
                                    <p class="mb-0"> <span class="text-textmuted ltr:mr-1 rtl:ml-1">Low:</span>
                                        <span class="text-danger">$11,021</span>
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex gap-3 flex-wrap items-top justify-between">
                            <div class="flex-grow flex items-top mb-sm-0">
                                <div class="me-3"> <span class="avatar avatar-rounded bg-primary/10 !text-primary"> <i
                                    class="ti ti-cash text-[1.2rem]"></i> </span> </div>
                                <div> <span class="block text-textmuted mb-1">Total amount Invested</span> <span
                                    class="text-[1.2rem] font-medium">$23,8998.99<span
                                    class="text-success ms-1 !text-[0.75rem] fw-normal"><i
                                        class="ti ti-arrow-narrow-up"></i>1.29%</span></span> </div>
                            </div>
                            <div>
                                <div id="total-invested"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex gap-3 flex-wrap items-top justify-between">
                            <div class="flex-grow flex items-top mb-sm-0">
                                <div class="me-3"> <span class="avatar avatar-rounded bg-danger/10 !text-danger"> <i
                                    class="ti ti-flame text-[1.2rem]"></i> </span> </div>
                                <div> <span class="block text-textmuted mb-1">Portfolio Value</span> <span
                                    class="text-[1.2rem] font-medium">$12,920.20<span
                                    class="text-success ms-1 !text-[0.75rem] fw-normal"><i
                                        class="ti ti-arrow-narrow-up"></i>0.89%</span></span> </div>
                            </div>
                            <div>
                                <div id="portfolio-value"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex gap-3 flex-wrap items-top justify-between">
                            <div class="flex-grow flex items-top mb-sm-0">
                                <div class="me-3"> <span class="avatar avatar-rounded bg-success/10 !text-success"> <i
                                    class="ti ti-wallet text-[1.2rem]"></i> </span> </div>
                                <div> <span class="block text-textmuted mb-1">Returns Rate</span> <span
                                    class="text-[1.2rem] font-medium">+12.08%<span
                                    class="text-danger ms-1 !text-[0.75rem] fw-normal"><i
                                        class="ti ti-arrow-narrow-down"></i>1.73%</span></span> </div>
                            </div>
                            <div>
                                <div id="returns-rate"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-body">
                            <div class="flex gap-3 flex-wrap items-top justify-between">
                            <div class="flex-grow flex items-top mb-sm-0">
                                <div class="me-3"> <span class="avatar avatar-rounded bg-info/10 !text-info"> <i
                                    class="ti ti-arrow-big-up-line  text-[1.2rem]"></i> </span> </div>
                                <div> <span class="block text-textmuted mb-1">No Of Investments</span> <span
                                    class="text-[1.2rem] font-medium">+17.08%<span
                                    class="text-danger ms-1 !text-[0.75rem] fw-normal"><i
                                        class="ti ti-arrow-narrow-down"></i>1.63%</span></span> </div>
                            </div>
                            <div>
                                <div id="investiments"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-7 col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Market Movers</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            
                            </div>
                            <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-0"> Identifying Stocks Making Waves,Tracking
                                Influential Stocks.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table class="ti-custom-table table-bordered table-striped ti-custom-table-head whitespace-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">1D Change</th>
                                    <th scope="col">1D Return %</th>
                                    <th scope="col">Volume</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"> APPL </th>
                                    <td> App1e Inc.<span class="fw-normal text-primary text-[0.7rem] ms-1">NASDAQ</span> </td>
                                    <td> <span>$1,116.90</span> </td>
                                    <td> <span class="text-success">$28.9<i class="ti ti-arrow-narrow-up"></i></span> </td>
                                    <td> <span class="text-success">6.8%</span> </td>
                                    <td> 12,389.30 </td>
                                </tr>
                                <tr>
                                    <th scope="row"> TTR </th>
                                    <td> Twiter.com Inc.<span class="fw-normal text-primary text-[0.7rem] ms-1">NYSE</span> </td>
                                    <td> <span>$993.21</span> </td>
                                    <td> <span class="text-success">$11.6<i class="ti ti-arrow-narrow-up"></i></span> </td>
                                    <td> <span class="text-success">10.25%</span> </td>
                                    <td> 32,125.03 </td>
                                </tr>
                                <tr>
                                    <th scope="row"> BS </th>
                                    <td> Boostrap.com.<span class="fw-normal text-primary text-[0.7rem] ms-1">NSE</span> </td>
                                    <td> <span>$11.00</span> </td>
                                    <td> <span class="text-danger">$16.0<i class="ti ti-arrow-narrow-down"></i></span> </td>
                                    <td> <span class="text-danger">9.0%</span> </td>
                                    <td> 27,911.16 </td>
                                </tr>
                                <tr>
                                    <th scope="row"> NFLX </th>
                                    <td> Netfilx.com Inc.<span class="fw-normal text-primary text-[0.7rem] ms-1">LSE</span> </td>
                                    <td> <span>$161.72</span> </td>
                                    <td> <span class="text-danger">$9.8<i class="ti ti-arrow-narrow-down"></i></span> </td>
                                    <td> <span class="text-danger">17.8%</span> </td>
                                    <td> 27,161.89 </td>
                                </tr>
                                <tr>
                                    <th scope="row"> ION </th>
                                    <td> Ion.com Corp.<span class="fw-normal text-primary text-[0.7rem] ms-1">FSX</span> </td>
                                    <td> <span>$52.65</span> </td>
                                    <td> <span class="text-success">$14.2<i class="ti ti-arrow-narrow-up"></i></span> </td>
                                    <td> <span class="text-success">30.2%</span> </td>
                                    <td> 65,785.01 </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:col-span-5 col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Transaction History</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            </div>
                            <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-0"> Reviewing Your Financial Activity
                                ,Tracking Your Financial Transactions.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table class="ti-custom-table table-bordered ti-custom-table-head whitespace-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Shares</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"> EPA:THI </th>
                                    <td> 12-06-2024 </td>
                                    <td> <span class="badge bg-primary !text-white">Buy</span> </td>
                                    <td> <span class="text-danger">-$1,290</span> </td>
                                    <td> <span class="text-success">+20</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row"> EPA:SCB </th>
                                    <td> 11-06-2024 </td>
                                    <td> <span class="badge bg-primary !text-white">Buy</span> </td>
                                    <td> <span class="text-danger">-$2,150</span> </td>
                                    <td> <span class="text-success">+15</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row"> EPA:CGIO </th>
                                    <td> 11-06-2024 </td>
                                    <td> <span class="badge bg-danger  !text-white">Sell</span> </td>
                                    <td> <span class="text-success">+$22,625</span> </td>
                                    <td> <span class="text-danger">-12</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row"> EPA:NTIX </th>
                                    <td> 05-06-2024 </td>
                                    <td> <span class="badge bg-primary !text-white">Buy</span> </td>
                                    <td> <span class="text-danger">-$3,680</span> </td>
                                    <td> <span class="text-success">+36</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row"> EPA:MOD </th>
                                    <td> 20-05-2024 </td>
                                    <td> <span class="badge bg-danger !text-white">Sell</span> </td>
                                    <td> <span class="text-success">+$30,750</span> </td>
                                    <td> <span class="text-danger">-25</span> </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

@endsection

@section('scripts')
	
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- CRM-Dashboard -->
        @vite('resources/assets/js/stocksdahboard.js')

@endsection
