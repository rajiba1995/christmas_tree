
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">NFT</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Dashboard <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">NFT 
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
                    <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                        <div class="xxl:col-span-12 col-span-12">
                        <div class="box overlay-card overflow-visible nft-banner"> <img src="{{asset('build/assets/images/nft-images/1.png')}}"
                            class="card-img rounded !h-[250px]" alt="...">
                            <div class="card-img-overlay flex flex-col p-0">
                            <div class="box-body !p-6 nft-main grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-7 col-span-12">
                                <p class="font-semibold !text-white mb-[2rem] sm:text-[2rem] text-[1.2rem] leading-[3rem]">
                                    Unveiling the Universe with
                                    <span class="text-primary">NFTs</span> Transcending Space and Time Art.
                                </p>
                                <div class="btn-list"> <button
                                    class="ti-btn bg-primary !border-primary text-white  me-3 btn-w-md">History</button>
                                    <button class="ti-btn !border-white/30 text-white btn-w-md">View Artwork</button>
                                </div>
                                </div>
                                <div class="xl:col-span-5 xl:block hidden col-span-12">
                                <div
                                    class="box-body bg-white/10 border !border-white/20 !rounded-md backdrop-blur-md nft-auction-time !text-white p-4">
                                    <h5 class="text-base font-semibold mb-4">Unveiling the Universe - NFT</h5>
                                    <div class="flex flex-wrap items-center justify-between">
                                    <div>
                                        <div class="text-sm font-semibold mb-2 text-white/70"> Highest Bid </div>
                                        <div class="flex flex-wrap items-center leading-none"> <img
                                            src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}" alt=""
                                            class="avatar avatar-sm me-2">0.35
                                        BTC </div>
                                    </div>
                                    <div class="sm:text-end">
                                        <div class="text-sm font-semibold mb-2 text-white/70">Ending -In </div>
                                        <div class="flex flex-wrap items-center leading-none p-2 bg-black/20 rounded-md"> 04 Days 02
                                        : 27 : 32</div>
                                    </div>
                                    </div> <button type="button"
                                    class="ti-btn ti-btn-success-full !border-success py-1 m-0 mt-4 w-full">Place
                                    Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-2 xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6 xxl:gap-x-0">
                        <div class="xxl:col-span-12 md:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex flex-wrap items-start">
                                <div class="me-4 leading-none">
                                    <span class="avatar avatar-lg bg-primary-gradient">
                                    <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                        d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3-2.25L13 13V4h5v16z" />
                                    </svg>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-textmuted">Total Assets</p>
                                    <h5 class="mb-1 font-semibold text-[1.25rem]">596</h5>
                                    <p class="text-[0.6875rem] text-textmuted mb-0"><span
                                        class="text-success badge me-2 bg-success/10 font-semibold">0.25%<i
                                        class="ri-arrow-up-s-line align-middle ms-1"></i></span>
                                    This month
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-12 md:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex flex-wrap items-start">
                                <div class="me-4 leading-none">
                                    <span class="avatar avatar-lg bg-success-gradient">
                                    <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <g>
                                        <path d="M0,0h24v24H0V0z" fill="none" />
                                        </g>
                                        <g>
                                        <g>
                                            <path
                                            d="M21.41,11.41l-8.83-8.83C12.21,2.21,11.7,2,11.17,2H4C2.9,2,2,2.9,2,4v7.17c0,0.53,0.21,1.04,0.59,1.41l8.83,8.83 c0.78,0.78,2.05,0.78,2.83,0l7.17-7.17C22.2,13.46,22.2,12.2,21.41,11.41z M12.83,20L4,11.17V4h7.17L20,12.83L12.83,20z" />
                                            <circle cx="6.5" cy="6.5" r="1.5" />
                                        </g>
                                        </g>
                                    </svg>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-textmuted">Total Sales</p>
                                    <h5 class="font-semibold mb-1 text-[1.25rem]">821</h5>
                                    <p class="text-[0.6875rem] text-textmuted mb-0"><span
                                        class="text-success bg-success/10 badge me-2 font-semibold">1.52%<i
                                        class="ri-arrow-up-s-line  align-middle ms-1"></i></span>
                                    This month</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-2 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6 xxl:gap-x-0">
                        <div class="xxl:col-span-12 md:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex flex-wrap items-start">
                                <div class="me-4 leading-none">
                                    <span class="avatar avatar-lg bg-danger-gradient">
                                    <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0,0h24v24H0V0z" fill="none" />
                                        <g>
                                        <path
                                            d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M15,20H6c-0.55,0-1-0.45-1-1v-1h10V20z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z" />
                                        <rect height="2" width="6" x="9" y="7" />
                                        <rect height="2" width="2" x="16" y="7" />
                                        <rect height="2" width="6" x="9" y="10" />
                                        <rect height="2" width="2" x="16" y="10" />
                                        </g>
                                    </svg>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-textmuted">Total Value</p>
                                    <h5 class="font-semibold mb-1 text-[1.25rem]">$1,298</h5>
                                    <p class="text-[0.6875rem] text-textmuted mb-0"><span
                                        class="text-success badge me-2 bg-success/10 font-semibold">0.74%<i
                                        class="ri-arrow-up-s-line  align-middle ms-1"></i></span>
                                    This month</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-12 md:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex flex-wrap items-start">
                                <div class="me-4 leading-none">
                                    <span class="avatar avatar-lg bg-warning-gradient">
                                    <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <g>
                                        <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                        <path
                                            d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8c0-4.41,3.59-8,8-8 s8,3.59,8,8C20,16.41,16.41,20,12,20z M12.89,11.1c-1.78-0.59-2.64-0.96-2.64-1.9c0-1.02,1.11-1.39,1.81-1.39 c1.31,0,1.79,0.99,1.9,1.34l1.58-0.67c-0.15-0.44-0.82-1.91-2.66-2.23V5h-1.75v1.26c-2.6,0.56-2.62,2.85-2.62,2.96 c0,2.27,2.25,2.91,3.35,3.31c1.58,0.56,2.28,1.07,2.28,2.03c0,1.13-1.05,1.61-1.98,1.61c-1.82,0-2.34-1.87-2.4-2.09L8.1,14.75 c0.63,2.19,2.28,2.78,3.02,2.96V19h1.75v-1.24c0.52-0.09,3.02-0.59,3.02-3.22C15.9,13.15,15.29,11.93,12.89,11.1z" />
                                        </g>
                                    </svg>
                                    </span>
                                </div>
                                <div>
                                    <p class=" text-textmuted">Total Revenue</p>
                                    <h5 class="font-semibold mb-1 text-[1.25rem]">$7,63,129.09</h5>
                                    <p class="text-[0.6875rem] text-textmuted mb-0"><span
                                        class="text-danger badge me-2 bg-danger/10 font-semibold">0.124%<i
                                        class="ri-arrow-up-s-line  align-middle ms-1"></i></span> This
                                    month</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-9 xl:col-span-12 lg:col-span-12 col-span-12">
                        <div class="mb-4 flex items-center justify-between">
                        <h6 class="font-semibold mb-0 text-[1rem] text-defaulttextcolor">Trending Auctions :</h6>
                        <div>
                            <button type="button"
                            class="tibtn !py-1 !px-[0.5rem] rounded-sm  text-[0.75rem] ti-btn-primary-full ti-btn-wave">View
                            All</button>
                        </div>
                        </div>
                        <div>
                        <nav class="sm:flex gap-x-5 mb-3" aria-label="Tabs" role="tablist">
                            <a class="w-full sm:w-auto hs-tab-active:bg-primary hs-tab-active:text-white mb-2  dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white py-[0.35rem] px-[0.65rem] inline-flex items-center gap-2 bg-primary/10 text-primary text-[0.813rem]  hover:text-textmuted font-medium rounded-sm hover:hover:text-primary dark:text-white/70 dark:hover:text-white active"
                            href="javascript:void(0);" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1">
                            All Collections
                            </a>
                            <a class="w-full sm:w-auto hs-tab-active:bg-primary hs-tab-active:text-white mb-2 dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white py-[0.35rem] px-[0.65rem] inline-flex items-center gap-2 bg-primary/10 text-primary text-[0.813rem]  hover:text-textmuted font-medium rounded-sm hover:hover:text-primary dark:text-white/70 dark:hover:text-white"
                            href="javascript:void(0);" id="segment-item-2" data-hs-tab="#segment-2" aria-controls="segment-2">
                            Photograph
                            </a>
                            <a class="w-full sm:w-auto hs-tab-active:bg-primary hs-tab-active:text-white mb-2 dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white py-[0.35rem] px-[0.65rem] inline-flex items-center gap-2 bg-primary/10 text-primary text-[0.813rem]  hover:text-textmuted font-medium rounded-sm hover:hover:text-primary dark:text-white/70 dark:hover:text-white"
                            href="javascript:void(0);" id="segment-item-3" data-hs-tab="#segment-3" aria-controls="segment-3">
                            Music
                            </a>
                            <a class="w-full sm:w-auto hs-tab-active:bg-primary hs-tab-active:text-white mb-2 dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white py-[0.35rem] px-[0.65rem] inline-flex items-center gap-2 bg-primary/10 text-primary text-[0.813rem]  hover:text-textmuted font-medium rounded-sm hover:hover:text-primary dark:text-white/70 dark:hover:text-white"
                            href="javascript:void(0);" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1">
                            Games
                            </a>
                            <a class="w-full sm:w-auto hs-tab-active:bg-primary hs-tab-active:text-white mb-2 dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white py-[0.35rem] px-[0.65rem] inline-flex items-center gap-2 bg-primary/10 text-primary text-[0.813rem]  hover:text-textmuted font-medium rounded-sm hover:hover:text-primary dark:text-white/70 dark:hover:text-white"
                            href="javascript:void(0);" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1">
                            Illustrations
                            </a>
                        </nav>
                        </div>
                        <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                        <div class="grid grid-cols-12 gap-x-4">
                            <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                <div class="flex items-center justify-between !mb-4">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt=""
                                        class="avatar avatar-md !rounded-full me-2 leading-none !mb-0">
                                    <div>
                                        <p class="mb-0 font-semibold">Bloom NFT</p>
                                        <p class="text-[0.75rem] text-textmuted mb-0">@bloom116</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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

                                <img src="{{asset('build/assets/images/nft-images/7.png')}}" class="!rounded-md" alt="...">
                                <div class="nft-like-section">
                                    <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-icon bg-white/10 !text-white !border !border-white/30 !rounded-full ti-btn-wave">
                                    <i class="ri-heart-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-white nft-auction-time">
                                    04hrs : 24m : 38s
                                </p>
                                <p class="text-[0.9375rem] font-semibold mb-2">Color Abstract - NFT</p>
                                <div class="flex flex-wrap itesm-center justify-between mb-4">
                                    <div class="font-semibold">
                                    Highest Bid -
                                    </div>
                                    <div class="flex flex-wrap items-center leading-none">
                                    <span class="avatar avatar-xs me-1">
                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                    </span>0.19ETH
                                    </div>
                                </div>
                                <div class="grid">
                                    <button type="button" class="ti-btn ti-btn-primary ti-btn-wave">Place Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                <div class="flex items-center justify-between !mb-4">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""
                                        class="avatar avatar-md !rounded-full me-2 leading-none !mb-0">
                                    <div>
                                        <p class="mb-0 font-semibold">Ergos NFT</p>
                                        <p class="text-[0.75rem] text-textmuted mb-0">@ergos900</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                <img src="{{asset('build/assets/images/nft-images/8.png')}}" class="!rounded-md" alt="...">
                                <div class="nft-like-section">
                                    <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-icon bg-white/10 !text-white !border !border-white/30 !rounded-full ti-btn-wave">
                                    <i class="ri-heart-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-white nft-auction-time">
                                    04hrs : 24m : 38s
                                </p>
                                <p class="text-[0.9375rem] font-semibold mb-2">Fluid Abstract - NFT</p>
                                <div class="flex flex-wrap itesm-center justify-between mb-4">
                                    <div class="font-semibold">
                                    Highest Bid -
                                    </div>
                                    <div class="flex flex-wrap items-center leading-none">
                                    <span class="avatar avatar-xs me-1">
                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                    </span>0.35ETH
                                    </div>
                                </div>
                                <div class="grid">
                                    <button type="button" class="ti-btn ti-btn-primary  ti-btn-wave">Place Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                <div class="flex items-center justify-between !mb-4">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt=""
                                        class="avatar avatar-md !rounded-full me-2 leading-none !mb-0">
                                    <div>
                                        <p class="mb-0 font-semibold">Caros NFT</p>
                                        <p class="text-[0.75rem] text-textmuted mb-0">@caros002</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                <img src="{{asset('build/assets/images/nft-images/9.png')}}" class="!rounded-md" alt="...">
                                <div class="nft-like-section">
                                    <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-icon bg-white/10 !text-white !border !border-white/30 !rounded-full ti-btn-wave">
                                    <i class="ri-heart-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-white nft-auction-time ">
                                    04hrs : 24m : 38s
                                </p>
                                <p class="text-[0.9375rem] font-semibold mb-2">Space Fluid - NFT</p>
                                <div class="flex flex-wrap itesm-center justify-between mb-4">
                                    <div class="font-semibold">
                                    Highest Bid -
                                    </div>
                                    <div class="flex flex-wrap items-center leading-none">
                                    <span class="avatar avatar-xs me-1">
                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                    </span>0.13ETH
                                    </div>
                                </div>
                                <div class="grid">
                                    <button type="button" class="ti-btn ti-btn-primary ti-btn-wave">Place Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                <div class="flex items-center justify-between !mb-4">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/images/faces/17.jpg')}}" alt=""
                                        class="avatar avatar-md !rounded-full me-2 leading-none !mb-0">
                                    <div>
                                        <p class="mb-0 font-semibold">Daron NFT</p>
                                        <p class="text-[0.75rem] text-textmuted mb-0">@daron789</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                <img src="{{asset('build/assets/images/nft-images/10.png')}}" class="!rounded-md" alt="...">
                                <div class="nft-like-section">
                                    <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-icon bg-white/10 !text-white !border !border-white/30 !rounded-full ti-btn-wave">
                                    <i class="ri-heart-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-white nft-auction-time">
                                    04hrs : 24m : 38s
                                </p>
                                <p class="text-[0.9375rem] font-semibold mb-2">Fluid Abstract - NFT</p>
                                <div class="flex flex-wrap itesm-center justify-between mb-3">
                                    <div class="font-semibold">
                                    Highest Bid -
                                    </div>
                                    <div class="flex flex-wrap items-center leading-none">
                                    <span class="avatar avatar-xs me-1">
                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                    </span>0.75ETH
                                    </div>
                                </div>
                                <div class="grid">
                                    <button type="button" class="ti-btn ti-btn-primary ti-btn-wave">Place Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="hidden" id="segment-2" role="tabpanel" aria-labelledby="segment-item-2">
                        <div class="grid grid-cols-12 gap-x-4">
                            <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                <div class="flex items-center justify-between !mb-4">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt=""
                                        class="avatar avatar-md !rounded-full me-2 leading-none !mb-0">
                                    <div>
                                        <p class="mb-0 font-semibold">Nairoh NFT</p>
                                        <p class="text-[0.75rem] text-textmuted mb-0">@nairoh116</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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

                                <img src="{{asset('build/assets/images/nft-images/4.png')}}" class="!rounded-md" alt="...">
                                <div class="nft-like-section">
                                    <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-icon bg-white/10 !text-white !border !border-white/30 !rounded-full ti-btn-wave">
                                    <i class="ri-heart-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-white nft-auction-time">
                                    04hrs : 24m : 38s
                                </p>
                                <p class="text-[0.9375rem] font-semibold mb-2">Color Abstract - NFT</p>
                                <div class="flex flex-wrap itesm-center justify-between mb-4">
                                    <div class="font-semibold">
                                    Highest Bid -
                                    </div>
                                    <div class="flex flex-wrap items-center leading-none">
                                    <span class="avatar avatar-xs me-1">
                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                    </span>0.19ETH
                                    </div>
                                </div>
                                <div class="grid">
                                    <button type="button" class="ti-btn ti-btn-primary ti-btn-wave">Place Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                <div class="flex items-center justify-between !mb-4">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt=""
                                        class="avatar avatar-md !rounded-full me-2 leading-none !mb-0">
                                    <div>
                                        <p class="mb-0 font-semibold">Manhai NFT</p>
                                        <p class="text-[0.75rem] text-textmuted mb-0">@manhai700</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                <img src="{{asset('build/assets/images/nft-images/6.png')}}" class="!rounded-md" alt="...">
                                <div class="nft-like-section">
                                    <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-icon bg-white/10 !text-white !border !border-white/30 !rounded-full ti-btn-wave">
                                    <i class="ri-heart-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-white nft-auction-time">
                                    04hrs : 24m : 38s
                                </p>
                                <p class="text-[0.9375rem] font-semibold mb-2">Fluid Abstract - NFT</p>
                                <div class="flex flex-wrap itesm-center justify-between mb-4">
                                    <div class="font-semibold">
                                    Highest Bid -
                                    </div>
                                    <div class="flex flex-wrap items-center leading-none">
                                    <span class="avatar avatar-xs me-1">
                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                    </span>0.35ETH
                                    </div>
                                </div>
                                <div class="grid">
                                    <button type="button" class="ti-btn ti-btn-primary  ti-btn-wave">Place Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                <div class="flex items-center justify-between !mb-4">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt=""
                                        class="avatar avatar-md !rounded-full me-2 leading-none !mb-0">
                                    <div>
                                        <p class="mb-0 font-semibold">Caros NFT</p>
                                        <p class="text-[0.75rem] text-textmuted mb-0">@caros002</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                <img src="{{asset('build/assets/images/nft-images/2.png')}}" class="!rounded-md" alt="...">
                                <div class="nft-like-section">
                                    <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-icon bg-white/10 !text-white !border !border-white/30 !rounded-full ti-btn-wave">
                                    <i class="ri-heart-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-white nft-auction-time ">
                                    04hrs : 24m : 38s
                                </p>
                                <p class="text-[0.9375rem] font-semibold mb-2">Space Fluid - NFT</p>
                                <div class="flex flex-wrap itesm-center justify-between mb-4">
                                    <div class="font-semibold">
                                    Highest Bid -
                                    </div>
                                    <div class="flex flex-wrap items-center leading-none">
                                    <span class="avatar avatar-xs me-1">
                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                    </span>0.13ETH
                                    </div>
                                </div>
                                <div class="grid">
                                    <button type="button" class="ti-btn ti-btn-primary ti-btn-wave">Place Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="hidden" id="segment-3" role="tabpanel" aria-labelledby="segment-item-3">
                        <div class="grid grid-cols-12 gap-x-4">
                            <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                <div class="flex items-center justify-between !mb-4">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt=""
                                        class="avatar avatar-md !rounded-full me-2 leading-none !mb-0">
                                    <div>
                                        <p class="mb-0 font-semibold">Nairoh NFT</p>
                                        <p class="text-[0.75rem] text-textmuted mb-0">@nairoh116</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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

                                <img src="{{asset('build/assets/images/nft-images/5.png')}}" class="!rounded-md" alt="...">
                                <div class="nft-like-section">
                                    <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-icon bg-white/10 !text-white !border !border-white/30 !rounded-full ti-btn-wave">
                                    <i class="ri-heart-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-white nft-auction-time">
                                    04hrs : 24m : 38s
                                </p>
                                <p class="text-[0.9375rem] font-semibold mb-2">Color Abstract - NFT</p>
                                <div class="flex flex-wrap itesm-center justify-between mb-4">
                                    <div class="font-semibold">
                                    Highest Bid -
                                    </div>
                                    <div class="flex flex-wrap items-center leading-none">
                                    <span class="avatar avatar-xs me-1">
                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                    </span>0.19ETH
                                    </div>
                                </div>
                                <div class="grid">
                                    <button type="button" class="ti-btn ti-btn-primary ti-btn-wave">Place Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                <div class="flex items-center justify-between !mb-4">
                                    <div class="flex items-center">
                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""
                                        class="avatar avatar-md !rounded-full me-2 leading-none !mb-0">
                                    <div>
                                        <p class="mb-0 font-semibold">Manhai NFT</p>
                                        <p class="text-[0.75rem] text-textmuted mb-0">@manhai700</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                <img src="{{asset('build/assets/images/nft-images/6.png')}}" class="!rounded-md" alt="...">
                                <div class="nft-like-section">
                                    <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-icon bg-white/10 !text-white !border !border-white/30 !rounded-full ti-btn-wave">
                                    <i class="ri-heart-fill"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-white nft-auction-time">
                                    04hrs : 24m : 38s
                                </p>
                                <p class="text-[0.9375rem] font-semibold mb-2">Fluid Abstract - NFT</p>
                                <div class="flex flex-wrap itesm-center justify-between mb-4">
                                    <div class="font-semibold">
                                    Highest Bid -
                                    </div>
                                    <div class="flex flex-wrap items-center leading-none">
                                    <span class="avatar avatar-xs me-1">
                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                    </span>0.35ETH
                                    </div>
                                </div>
                                <div class="grid">
                                    <button type="button" class="ti-btn ti-btn-primary  ti-btn-wave">Place Bid</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                        <div class="box overflow-hidden">
                        <div class="box-header !pb-3 flex justify-between">
                            <div>
                            <h4 class="box-title mb-2">Top NFT's</h4>
                            <div>
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Top NFT Rankings, Identifying the Digital
                                Collectibles</p>
                            </div>
                            </div>
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
                        <div class="box-body !p-0">
                            <ul class="ti-list-group list-group-flush !rounded-none !border-s-0 !border-e-0 !border-b-0 mb-0">
                            <li class="ti-list-group-item"> <a href="javascript:void(0);">
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="flex items-center">
                                    <div class="me-2 lh-1"> <span class="avatar avatar-md"> <img
                                            src="{{asset('build/assets/images/nft-images/10.png')}}" alt=""> </span> </div>
                                    <div>
                                        <p class="font-medium mb-0 text-[0.875rem]">Kakasha Si</p><span
                                        class="text-[0.75rem] text-textmuted">@sensei011</span>
                                    </div>
                                    </div>
                                    <div class="text-danger font-medium text-[0.813rem]">-1.2%</div>
                                    <div>
                                    <p class="mb-0 font-medium flex items-center  text-[0.875rem]">0.234<span
                                        class="text-textmuted text-[0.75rem] ms-1">BTC</span></p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="ti-list-group-item"> <a href="javascript:void(0);">
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="flex items-center">
                                    <div class="me-2 lh-1"> <span class="avatar avatar-md"> <img
                                            src="{{asset('build/assets/images/nft-images/2.png')}}" alt=""> </span> </div>
                                    <div>
                                        <p class="font-medium mb-0 text-[0.875rem]">Oorichimaru lo</p><span
                                        class="text-[0.75rem] text-textmuted">@ooro001</span>
                                    </div>
                                    </div>
                                    <div class="text-success font-medium text-[0.813rem]">+11.2%</div>
                                    <div>
                                    <p class="mb-0 font-medium flex items-center  text-[0.875rem]">0.334<span
                                        class="text-textmuted text-[0.75rem] ms-1">BTC</span></p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="ti-list-group-item"> <a href="javascript:void(0);">
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="flex items-center">
                                    <div class="me-2 lh-1"> <span class="avatar avatar-md"> <img
                                            src="{{asset('build/assets/images/nft-images/5.png')}}" alt=""> </span> </div>
                                    <div>
                                        <p class="font-medium mb-0 text-[0.875rem]">SakuraYMON</p><span
                                        class="text-[0.75rem] text-textmuted">@sakura903</span>
                                    </div>
                                    </div>
                                    <div class="text-danger font-medium text-[0.813rem]">-10.2%</div>
                                    <div>
                                    <p class="mb-0 font-medium flex items-center  text-[0.875rem]">0.2534<span
                                        class="text-textmuted text-[0.75rem] ms-1">BTC</span></p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="ti-list-group-item"> <a href="javascript:void(0);">
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="flex items-center">
                                    <div class="me-2 lh-1"> <span class="avatar avatar-md"> <img
                                            src="{{asset('build/assets/images/nft-images/6.png')}}" alt=""> </span> </div>
                                    <div>
                                        <p class="font-medium mb-0 text-[0.875rem]">Sasuke Uchiha</p><span
                                        class="text-[0.75rem] text-textmuted">@sasuke777</span>
                                    </div>
                                    </div>
                                    <div class="text-success font-medium text-[0.813rem]">+7.2%</div>
                                    <div>
                                    <p class="mb-0 font-medium flex items-center  text-[0.875rem]">0.3504<span
                                        class="text-textmuted text-[0.75rem] ms-1">BTC</span></p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="ti-list-group-item"> <a href="javascript:void(0);">
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="flex items-center">
                                    <div class="me-2 lh-1"> <span class="avatar avatar-md"> <img
                                            src="{{asset('build/assets/images/nft-images/7.png')}}" alt=""> </span> </div>
                                    <div>
                                        <p class="font-medium mb-0 text-[0.875rem]">Naruto Uzumaki</p><span
                                        class="text-[0.75rem] text-textmuted">@naruto111</span>
                                    </div>
                                    </div>
                                    <div class="text-danger font-medium text-[0.813rem]">-17.2%</div>
                                    <div>
                                    <p class="mb-0 font-medium flex items-center  text-[0.875rem]">0.2504<span
                                        class="text-textmuted text-[0.75rem] ms-1">BTC</span></p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="ti-list-group-item"> <a href="javascript:void(0);">
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="flex items-center">
                                    <div class="me-2 lh-1"> <span class="avatar avatar-md"> <img
                                            src="{{asset('build/assets/images/nft-images/8.png')}}" alt=""> </span> </div>
                                    <div>
                                        <p class="font-medium mb-0 text-[0.875rem]">Uchiha Uzumaki</p><span
                                        class="text-[0.75rem] text-textmuted">@uzumaki111</span>
                                    </div>
                                    </div>
                                    <div class="text-success font-medium text-[0.813rem]">+16.2%</div>
                                    <div>
                                    <p class="mb-0 font-medium flex items-center  text-[0.875rem]">0.2504<span
                                        class="text-textmuted text-[0.75rem] ms-1">BTC</span></p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="ti-list-group-item"> <a href="javascript:void(0);">
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="flex items-center">
                                    <div class="me-2 lh-1"> <span class="avatar avatar-md"> <img
                                            src="{{asset('build/assets/images/nft-images/9.png')}}" alt=""> </span> </div>
                                    <div>
                                        <p class="font-medium mb-0 text-[0.875rem]">Nagiro Ohinavo</p><span
                                        class="text-[0.75rem] text-textmuted">@nagiro096</span>
                                    </div>
                                    </div>
                                    <div class="text-success font-medium text-[0.813rem]">+23.2%</div>
                                    <div>
                                    <p class="mb-0 font-medium flex items-center  text-[0.875rem]">0.3564<span
                                        class="text-textmuted text-[0.75rem] ms-1">BTC</span></p>
                                    </div>
                                </div>
                                </a> </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 xl:col-span-12 lg:col-span-12 col-span-12">
                        <div class="box overflow-hidden">
                        <div class="box-header !pb-3 !border-b flex justify-between">
                            <div class="box-title">
                            Top Creators
                            </div>
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
                        <div class="box-body nft-table !p-0">
                            <div class="table-responsive">
                            <table class="table whitespace-nowrap min-w-full">
                                <thead>
                                <tr>
                                    <th scope="row" class="text-start">Creator Name</th>
                                    <th scope="row" class="text-start">Total Value</th>
                                    <th scope="row" class="text-start">Rak Up</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border !border-x-0 border-defaultborder dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <div class="leading-none">
                                        <span class="avatar avatar-md avatar-rounded me-2">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                        </span>
                                        </div>
                                        <div class="items-center">
                                        <p class="mb-0 font-medium text-[0.875rem]">Amanda Nanes
                                        </p>
                                        <span class="text-[0.75rem] text-textmuted">amandananes@</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="items-center">
                                        <span class="text-[0.75rem] text-textmuted">Sale Value</span>
                                        <p class="mb-0 font-medium text-[0.875rem]">$1,982</p>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="badge bg-success/10 !text-success font-medium">1<i
                                        class="ri-arrow-up-s-fill text-[1rem] align-middle text-success"></i></span>
                                    </td>
                                </tr>
                                <tr class="border !border-x-0 border-defaultborder dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <div class="leading-none">
                                        <span class="avatar avatar-md avatar-rounded me-2">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                        </span>
                                        </div>
                                        <div class="items-center">
                                        <p class="mb-0 font-medium text-[0.875rem]">Charles Achilles
                                        </p>
                                        <span class="text-[0.75rem] text-textmuted">@charlesachilles</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="items-center">
                                        <span class="text-[0.75rem] text-textmuted">Sale Value</span>
                                        <p class="mb-0 font-medium text-[0.875rem]">$16,982</p>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="badge bg-success/10 !text-success font-medium">5<i
                                        class="ri-arrow-up-s-fill text-[1rem] align-middle text-success"></i></span>
                                    </td>
                                </tr>
                                <tr class="border !border-x-0 border-defaultborder dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <div class="leading-none">
                                        <span class="avatar avatar-md avatar-rounded me-2">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                        </span>
                                        </div>
                                        <div class="items-center">
                                        <p class="mb-0 font-medium text-[0.875rem]">Julia Camo
                                        </p>
                                        <span class="text-[0.75rem] text-textmuted">@juliacamo</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="items-center">
                                        <span class="text-[0.75rem] text-textmuted">Sale Value</span>
                                        <p class="mb-0 font-medium text-[0.875rem]">$3,432</p>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="badge bg-danger/10 !text-danger font-medium">2<i
                                        class="ri-arrow-down-s-fill text-[1rem] align-middle text-danger"></i></span>
                                    </td>
                                </tr>
                                <tr class="border !border-x-0 border-defaultborder dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <div class="leading-none">
                                        <span class="avatar avatar-md avatar-rounded me-2">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                        </span>
                                        </div>
                                        <div class="items-center">
                                        <p class="mb-0 font-medium text-[0.875rem]">Json Taylor
                                        </p>
                                        <span class="text-[0.75rem] text-textmuted">@jsontaylor</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="items-center">
                                        <span class="text-[0.75rem] text-textmuted">Sale Value</span>
                                        <p class="mb-0 font-medium text-[0.875rem]">$9,236</p>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="badge bg-success/10 !text-success font-medium">3<i
                                        class="ri-arrow-up-s-fill text-[1rem] align-middle text-success"></i></span>
                                    </td>
                                </tr>
                                <tr class="border !border-x-0 border-defaultborder dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <div class="leading-none">
                                        <span class="avatar avatar-md avatar-rounded me-2">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                        </span>
                                        </div>
                                        <div class="items-center">
                                        <p class="mb-0 font-medium text-[0.875rem]">Elisha Sean
                                        </p>
                                        <span class="text-[0.75rem] text-textmuted">elishasean</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="items-center">
                                        <span class="text-[0.75rem] text-textmuted">Sale Value</span>
                                        <p class="mb-0 font-medium text-[0.875rem]">$7,783</p>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="badge bg-danger/10 !text-danger font-medium">4<i
                                        class="ri-arrow-down-s-fill text-[1rem] align-middle text-danger"></i></span>
                                    </td>
                                </tr>
                                <tr class="!border-b-0 !border-x-0 border-defaultborder dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <div class="leading-none">
                                        <span class="avatar avatar-md avatar-rounded me-2">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                        </span>
                                        </div>
                                        <div class="items-center">
                                        <p class="mb-0 font-medium text-[0.875rem]">Joseph Smith
                                        </p>
                                        <span class="text-[0.75rem] text-textmuted">@josephsmith</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="items-center">
                                        <span class="text-[0.75rem] text-textmuted">Sale Value</span>
                                        <p class="mb-0 font-medium text-[0.875rem]">$13,562</p>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="badge bg-success/10 !text-success font-medium">1<i
                                        class="ri-arrow-up-s-fill text-[1rem] align-middle text-success"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>

                    </div>
                    <div class="xxl:col-span-6 xl:col-span-8 lg:col-span-7 md:col-span-12 sm:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header !pb-3 ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">NFTs Analytics</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">NFT Market Analysis, Understanding Demand
                                and Value Trends, Providing Actionable Insights.</p>
                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <div class="flex flex-wrap p-3 border-b border-dashed dark:border-defaultborder/10">
                            <div class="me-3">
                                <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt="">
                                </span>
                            </div>
                            <div class="sm:flex flex-wrap justify-evenly flex-grow">
                                <div class="sm:m-0 m-2">
                                <span>Symbol</span>
                                <p class="font-semibold mb-0">DASH</p>
                                </div>
                                <div class="sm:m-0 m-2">
                                <span>Price Benchmark</span>
                                <p class="font-semibold mb-0">-0.39%</p>
                                </div>
                                <div class="sm:m-0 m-2">
                                <span>Price (USD)</span>
                                <p class="text-success font-semibold mb-0">$1,212.67</p>
                                </div>
                                <div class="sm:m-0 m-2">
                                <span>Change (24H)</span>
                                <p class="text-danger font-semibold mb-0">-0.14%</p>
                                </div>
                                <div class="sm:m-0 m-2">
                                <span>Market Cap</span>
                                <p class="font-semibold mb-0">$148.20B</p>
                                </div>
                            </div>
                            </div>
                            <div id="nft-statistics" class="p-3"></div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-4 lg:col-span-5 md:col-span-12 sm:col-span-12 col-span-12">
                        <div class="mb-4 flex items-center justify-between">
                        <h6 class="font-semibold mb-0 text-[1rem] text-defaulttextcolor dark:text-defaulttextcolor/70">Featured
                            Collections :</h6>
                        <div>
                            <button type="button"
                            class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] ti-btn-wave waves-effect waves-light">View
                            All</button>
                        </div>
                        </div>
                        <div class="swiper pagination-dynamic text-start !h-auto" id="nft-collections-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            <div class="box !shadow-none">
                                <div class="box-body">
                                <div class="grid grid-cols-12 gap-2">
                                    <div class="col-span-6">
                                    <img src="{{asset('build/assets/images/nft-images/4.png')}}" alt=""
                                        class="nft-featuredcollect-image !rounded-md">
                                    </div>
                                    <div class="col-span-6">
                                    <img src="{{asset('build/assets/images/nft-images/5.png')}}" alt=""
                                        class="nft-featuredcollect-image !rounded-md">
                                    </div>
                                    <div class="col-span-6">
                                    <img src="{{asset('build/assets/images/nft-images/7.png')}}" alt=""
                                        class="nft-featuredcollect-image !rounded-md">
                                    </div>
                                    <div class="col-span-6">
                                    <img src="{{asset('build/assets/images/nft-images/6.png')}}" alt=""
                                        class="nft-featuredcollect-image !rounded-md">
                                    </div>
                                </div>
                                </div>
                                <div class="box-footer">
                                <div class="flex items-center">
                                    <div class="flex items-center flex-grow">
                                    <div class="me-2 leading-none">
                                        <span class="avatar avatar-md avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="badge !rounded-full !text-white bg-primary avatar-badge"><i
                                            class="ri-check-line align-middle"></i></a>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);">Melissa
                                            Smith</a></p>
                                        <p class="text-textmuted text-[0.75rem] mb-0">@melissa</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                </div>
                            </div>
                            </div>
                            <div class="swiper-slide">
                            <div class="box !shadow-none">
                                <div class="box-body">
                                <div class="grid grid-cols-12 gap-2">
                                    <div class="col-span-6">
                                    <img src="{{asset('build/assets/images/nft-images/8.png')}}" alt=""
                                        class="nft-featuredcollect-image !rounded-md">
                                    </div>
                                    <div class="col-span-6">
                                    <img src="{{asset('build/assets/images/nft-images/9.png')}}" alt=""
                                        class="nft-featuredcollect-image !rounded-md">
                                    </div>
                                    <div class="col-span-6">
                                    <img src="{{asset('build/assets/images/nft-images/10.png')}}" alt=""
                                        class="nft-featuredcollect-image !rounded-md">
                                    </div>
                                    <div class="col-span-6">
                                    <img src="{{asset('build/assets/images/nft-images/4.png')}}" alt=""
                                        class="nft-featuredcollect-image !rounded-md">
                                    </div>
                                </div>
                                </div>
                                <div class="box-footer">
                                <div class="flex items-center">
                                    <div class="flex items-center flex-grow">
                                    <div class="me-2 leading-none">
                                        <span class="avatar avatar-md avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="badge !rounded-full !text-white bg-primary avatar-badge"><i
                                            class="ri-check-line align-middle"></i></a>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);">Json
                                            Talor</a></p>
                                        <p class="text-textmuted text-[0.75rem] mb-0">@taylor</p>
                                    </div>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Trending NFTs</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Trending NFT Showcase, Highlighting the Most
                                In-Demand Collectibles</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table
                                class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                <thead class="bg-light dark:bg-black/20">
                                <tr>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">
                                    Collection</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Rank</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Owners
                                    </th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Volume
                                    </th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">24h %
                                    </th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">7d %</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Floor
                                    Price</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Items
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:hover:bg-light dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center !w-[11rem]">
                                        <img src="{{asset('build/assets/images/nft-images/8.png')}}" alt=""
                                        class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">Starter Sense
                                            NFT</a></p>
                                        <a href="javascript:void(0);" class="text-[0.75rem] text-textmuted font-normal"
                                            title="creator_name">@irukasensei229</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="font-semibold">#1</span></td>
                                    <td><span class="font-semibold">5.555k</span></td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">2.56ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="text-success"><i
                                        class="ti ti-trending-up me-1 align-middle inline-block"></i>15.2%</span>
                                    </td>
                                    <td><span class="text-success"><i
                                        class="ti ti-trending-up me-1 align-middle inline-block"></i>3.1%</span></td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">2.31ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>12.4K</td>
                                </tr>
                                <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:hover:bg-light dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/nft-images/3.png')}}" alt=""
                                        class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">Lorem
                                            Kekkei</a></p>
                                        <a href="javascript:void(0);" class="text-[0.75rem] text-textmuted font-normal"
                                            title="creator_name">@clansound209</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="font-semibold">#2</span></td>
                                    <td><span class="font-semibold">12.7k</span></td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">1.25ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="text-success"><i
                                        class="ti ti-trending-up me-1 align-middle inline-block"></i>3.7%</span>
                                    </td>
                                    <td><span class="text-danger"><i
                                        class="ti ti-trending-down me-1 align-middle inline-block"></i>0.5%</span></td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">0.25ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>10.1K</td>
                                </tr>
                                <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:hover:bg-light dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/nft-images/5.png')}}" alt=""
                                        class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">NFT
                                            Uchiha</a></p>
                                        <a href="javascript:void(0);" class="text-[0.75rem] text-textmuted font-normal"
                                            title="creator_name">@sasukeuhi990</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="font-semibold">#3</span></td>
                                    <td><span class="font-semibold">10.9k</span></td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">2,092ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="text-danger"><i
                                        class="ti ti-trending-down me-1 align-middle inline-block"></i>23.1%</span></td>
                                    <td>
                                    <span class="text-success"><i
                                        class="ti ti-trending-up me-1 align-middle inline-block"></i>9.12%</span>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name"> 2,000ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>52.7K</td>
                                </tr>
                                <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:hover:bg-light dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/nft-images/5.png')}}" alt=""
                                        class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">
                                            Lorem Ipsum Uch</a></p>
                                        <a href="javascript:void(0);" class="text-[0.75rem] text-textmuted font-normal"
                                            title="creator_name">@kakashi092</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="font-semibold">#4</span></td>
                                    <td><span class="font-semibold">11.56k</span></td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name"> 36.25ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="text-danger"><i
                                        class="ti ti-trending-down me-1 align-middle inline-block"></i>5.2%</span></td>
                                    <td>
                                    <span class="text-danger"><i
                                        class="ti ti-trending-down me-1 align-middle inline-block"></i>4.1%</span>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">30.12ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>31.4K</td>
                                </tr>
                                <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:hover:bg-light dark:border-defaultborder/10">
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/nft-images/7.png')}}" alt=""
                                        class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">
                                            Ivan Shomer Har</a></p>
                                        <a href="javascript:void(0);" class="text-[0.75rem] text-textmuted font-normal"
                                            title="creator_name">@narutouze025</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="font-semibold">#5</span></td>
                                    <td><span class="font-semibold">17.45k</span></td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">12.52ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="text-success"><i
                                        class="ti ti-trending-up me-1 align-middle inline-block"></i>7.0%</span></td>
                                    <td>
                                    <span class="text-success"><i
                                        class="ti ti-trending-up me-1 align-middle inline-block"></i>12.5%</span>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt=""
                                        class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                        <div>
                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">12.50ETH</a>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>121.5K</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="sm:flex items-center">
                            <div class="text-defaulttextcolor dark:text-defaulttextcolor/70">
                                Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
                            </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                <ul class="ti-pagination mb-0">
                                    <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0);">
                                        Prev
                                    </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item">
                                    <a class="page-link !text-primary" href="javascript:void(0);">
                                        next
                                    </a>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                            </div>
                        </div>
                        </div>

                    </div>
                    </div>

@endsection

@section('scripts')
	
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- CRM-Dashboard -->
        @vite('resources/assets/js/nftdashboard.js')

@endsection
