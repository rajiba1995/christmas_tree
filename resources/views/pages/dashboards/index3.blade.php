
@extends('layouts.master')

@section('styles')

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Crypto</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Dashboard <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Crypto 
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
                    <div class="xxl:col-span-9 xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 lg:col-span-4 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex justify-between items-center">
                                <div>
                                    <span class="avatar avatar-md !mb-3 p-2 bg-light !rounded-full">
                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg')}}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <div id="btc-chart"></div>
                                </div>
                                </div>
                                <div class="flex justify-between items-center">
                                <div class="">
                                    <div class="text-[0.875rem] text-textmuted">Tether - USDT</div>
                                    <div>
                                    <div class="text-[1.25rem] font-medium">$12,450,345</div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span class="!my-2 badge bg-success/10 !text-success"><i
                                        class="bi bi-arrow-up me-1 text-success"></i>33.2%</span>
                                    <p class="!mb-0 text-textmuted"><span
                                        class="text-textmuted">Vol:</span>(+2.33%)</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-4 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex justify-between items-center">
                                <div>
                                    <span class="avatar avatar-md !mb-3 p-2 bg-light !rounded-full">
                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <div id="dash-chart"></div>
                                </div>
                                </div>
                                <div class="flex justify-between items-center">
                                <div class="">
                                    <div class="text-[0.875rem] text-textmuted">Bitcoin - BTC</div>
                                    <div>
                                    <div class="text-[1.25rem] font-medium">$15,470,565</div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span class="!my-2 badge bg-danger/10 !text-danger"><i
                                        class="bi bi-arrow-down me-1 text-danger"></i>15.2%</span>
                                    <p class="!mb-0 text-textmuted"><span
                                        class="text-textmuted">Vol:</span>(+12.3%)</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-4 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex justify-between items-center">
                                <div>
                                    <span class="avatar avatar-md !mb-3 p-2 bg-light !rounded-full">
                                    <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg')}}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <div id="eth-chart"></div>
                                </div>
                                </div>
                                <div class="flex justify-between items-center">
                                <div class="">
                                    <div class="text-[0.875rem] text-textmuted">Solana - SOL</div>
                                    <div>
                                    <div class="text-[1.25rem] font-medium">$76,850,357</div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span class="!my-2 badge bg-success/10 !text-success"><i
                                        class="bi bi-arrow-up me-1 text-success"></i>63.2%</span>
                                    <p class="!mb-0 text-textmuted"><span
                                        class="text-textmuted">Vol:</span>(+17.83%)</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xl:col-span-8 lg:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between">
                                <h4 class="box-title mb-2">Crypto Statistics</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Monitoring Market Crypto Statistics,Understanding Market Dynamics,Exploring Statistical Patterns</p>
                                </div>
                            </div>
                            <div class="box-body !p-0">
                                <div
                                class="flex flex-wrap p-4 border-b border-defaultborder dark:border-defaultborder/10 border-dashed">
                                <div class="flex flex-wrap items-center justify-between flex-grow">
                                    <div class="me-3"> <span class="avatar avatar-md avatar-rounded p-2 bg-light"> <img
                                        src="{{asset('build/assets/images/crypto-currencies/regular/Bitcoin.svg')}}" alt=""> </span> </div>
                                    <div class="m-sm-0 m-2"> <span>Symbol</span>
                                    <p class="font-medium mb-0">BTC</p>
                                    </div>
                                    <div class="m-sm-0 m-2"> <span>Price Benchmark</span>
                                    <p class="font-medium mb-0">128.00%</p>
                                    </div>
                                    <div class="m-sm-0 m-2"> <span>Price (USD)</span>
                                    <p class="text-success fe-semibold mb-0">$4,253.49</p>
                                    </div>
                                    <div class="m-sm-0 m-2"> <span>Change (24H)</span>
                                    <p class="text-danger font-medium mb-0">-0.24%</p>
                                    </div>
                                    <div class="m-sm-0 m-2"> <span>Market Cap</span>
                                    <p class="font-medium mb-0">$179.12B</p>
                                    </div>
                                </div>
                                </div>
                                <div id="crypto" class="p-3 !pt-0 "></div>
                            </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header flex !items-start justify-between flex-wrap">
                                <div class="box-title">Vallet Amount </div>
                                <div class="flex">
                                <span class="avatar avatar-md avatar-rounded bg-light p-2 me-2"> <img
                                    src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg')}}" alt=""> </span>
                                <span class="avatar avatar-md avatar-rounded bg-light p-2 !me-2"> <img
                                    src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}" alt=""> </span>
                                <span class="avatar avatar-md avatar-rounded bg-light p-2 me-0"> <img
                                    src="{{asset('build/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg')}}" alt=""> </span>
                                </div>
                            </div>
                            <div class="box-body !pt-0">
                                <h4 class="text-primary !mb-2 font-medium">6,76,347,566</h4>
                                <div class="mb-3 grid grid-cols-12">
                                <div class="xxl:col-span-6 col-span-12 me-0 lg:me-4">
                                    <button
                                    class="ti-btn w-full ti-btn-light flex items-center justify-center me-2"><i
                                        class='bx bx-wallet-alt me-2'></i>Deposit</button>
                                </div>
                                <div class="xxl:col-span-6 col-span-12">
                                    <button
                                    class="ti-btn w-full ti-btn-light flex items-center justify-center !me-0"><i
                                    class='bx bx-money-withdraw me-2'></i>Withdraw</button>
                                </div>
                                </div>
                                <p class="mb-3 font-medium">Recent Transactions :</p>
                                <div>
                                <div
                                    class="p-2 border border-defaultborder dark:border-defaultborder/10 !rounded-sm mb-3 flex items-center justify-between">
                                    <div class="flex gap-3 items-center">
                                    <span class="avatar avatar-md p-2 bg-light !rounded-full">
                                        <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}" alt="">
                                    </span>
                                    <div>
                                        <p class="mb-0 text-[0.875rem] font-medium">BitCoin</p>
                                        <span class="text-textmuted">BTC</span>
                                    </div>
                                    </div>
                                    <div>
                                    <p class="mb-0 text-[1rem] font-medium text-end">$12,355</p>
                                    <span class="text-textmuted text-[0.75rem] text-end">13:00 PM</span>
                                    </div>
                                </div>
                                <div
                                    class="p-2 border border-defaultborder dark:border-defaultborder/10 !rounded-sm mb-3 flex items-center justify-between">
                                    <div class="flex gap-3 items-center">
                                    <span class="avatar avatar-md p-2 bg-light !rounded-full">
                                        <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg')}}" alt="">
                                    </span>
                                    <div>
                                        <p class="mb-0 text-[0.875rem] font-medium">Tether</p>
                                        <span class="text-textmuted">USDT</span>
                                    </div>
                                    </div>
                                    <div>
                                    <p class="mb-0 text-[1rem] font-medium text-end">$10,365</p>
                                    <span class="text-textmuted text-[0.75rem] text-end">10:00 AM</span>
                                    </div>
                                </div>
                                <div
                                    class="p-2 border border-defaultborder dark:border-defaultborder/10 !rounded-sm mb-3 flex items-center justify-between">
                                    <div class="flex gap-3 items-center">
                                    <span class="avatar avatar-md p-2 bg-light !rounded-full">
                                        <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg')}}" alt="">
                                    </span>
                                    <div>
                                        <p class="mb-0 text-[0.875rem] font-medium">Solana</p>
                                        <span class="text-textmuted">SQL</span>
                                    </div>
                                    </div>
                                    <div>
                                    <p class="mb-0 text-[1rem] font-medium text-end">$52,574</p>
                                    <span class="text-textmuted text-[0.75rem] text-end">11:00 PM</span>
                                    </div>
                                </div>
                                <div
                                    class="p-2 border border-defaultborder dark:border-defaultborder/10 !rounded-sm mb-0 flex items-center justify-between">
                                    <div class="flex gap-3 items-center">
                                    <span class="avatar avatar-md p-2 bg-light !rounded-full">
                                        <img src="{{asset('build/assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg')}}" alt="">
                                    </span>
                                    <div>
                                        <p class="mb-0 text-[0.875rem] font-medium">Binance</p>
                                        <span class="text-textmuted">BNB</span>
                                    </div>
                                    </div>
                                    <div>
                                    <p class="mb-0 text-[1rem] font-medium text-end">$17,375</p>
                                    <span class="text-textmuted text-[0.75rem] text-end">10:00 AM</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 xl:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Transfer Assets
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
                            <div class="box-body">
                                <div class="grid grid-cols-12">
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="input-label" class="form-label">Amount</label>
                                    <div class="input-group currency-select mb-4 sm:flex block flex-nowrap">
                                    <input type="text" class="form-control form-control-sm !border-e-0 crypto-buy-sell-input"
                                        aria-label="crypto buy select" placeholder="Select Currency">
                                    <select class="form-control" data-trigger id="choices-single-default">
                                        <option value="">BTC</option>
                                        <option value="Choice 1">ETH</option>
                                        <option value="Choice 2">XRP</option>
                                        <option value="Choice 3">DASH</option>
                                        <option value="Choice 4">NEO</option>
                                        <option value="Choice 5">LTC</option>
                                        <option value="Choice 6">BSD</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="input-label" class="form-label">Destination Adress</label>
                                    <input type="text" class="form-control" id="input-label" value="bfghgj23245ghjj345">
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="mt-4 grid grid-cols-12">
                                    <div class="xxl:col-span-6 col-span-12 me-0 lg:me-4">
                                        <button
                                        class="ti-btn  ti-btn-light w-full flex items-center justify-center">Cancel</button>
                                    </div>
                                    <div class="xxl:col-span-6 col-span-12">
                                        <button
                                        class="ti-btn w-full ti-btn-primary-full flex items-center justify-center !me-0">Transfer</button>
                                    </div>
                                    </div>  
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Convert Assets
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
                            <div class="box-body !pt-2 text-center">
                                <div class="mb-3 text-start">
                                <p class="text-gray-500 dark:text-white/70 mb-0">Bal Available:<span
                                    class="text-primary font-medium text-sm ltr:ml-1 rtl:mr-1">$25,390.00</span></p>
                                <p class="text-gray-500 dark:text-white/70 mb-0">1 USD:<span
                                    class="text-primary font-medium text-sm ltr:ml-1 rtl:mr-1"> ~ 0.000158BTC</span></p>
                                </div>
                                <div>
                                <div class="input-group currency-select sm:flex block flex-nowrap">
                                    <input type="text" class="form-control form-control-sm !border-e-0  crypto-buy-sell-input"
                                    aria-label="crypto buy select" placeholder="Select Currency">
                                    <span class="input-group-text dropdown-menu !rounded-none rtl:!border-s-0 !border-e-0"><img
                                        src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}" alt=""
                                        class="!w-[23px] !h-[28px]"></span>
                                    <select class="form-control" data-trigger id="choices-single-default">
                                    <option value="">BTC</option>
                                    <option value="Choice 1">ETH</option>
                                    <option value="Choice 2">XRP</option>
                                    <option value="Choice 3">DASH</option>
                                    <option value="Choice 4">NEO</option>
                                    <option value="Choice 5">LTC</option>
                                    <option value="Choice 6">BSD</option>
                                    </select>
                                </div>
                                </div>
                                <div>
                                <a href="javascript:void(0);" aria-label="anchor"
                                    class="flex items-center justify-center ti-btn p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] !mt-3 bg-primary/10 text-primary !border !border-primary/20 focus:ring-0 focus:ring-primary dark:focus:ring-offset-white/10 !mx-auto my-2"><i
                                    class="ti ti-arrows-down-up"></i></a>
                                </div>
                                <div>
                                <div class="input-group currency-select mb-3 mt-2 d-sm-flex d-block flex-nowrap">
                                    <input type="text" class="form-control form-control-sm rtl:!border-s-0 !border-e-0 crypto-buy-sell-input"
                                    aria-label="crypto buy select" placeholder="Select Currency">
                                    <span class="input-group-text  dropdown-menu !rounded-none  !border-e-0"> <img
                                        src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg')}}" alt=""
                                        class="!w-[23px] !h-[28px]"></span>
                                    <select class="form-control" data-trigger id="choices-single-default">
                                    <option value="">ETH</option>
                                    <option value="Choice 1">BTC</option>
                                    <option value="Choice 2">XRP</option>
                                    <option value="Choice 3">DASH</option>
                                    <option value="Choice 4">NEO</option>
                                    <option value="Choice 5">LTC</option>
                                    <option value="Choice 6">BSD</option>
                                    </select>
                                </div>
                                </div>
                                <button class="ti-btn !mt-2 ti-btn-primary-full w-full">
                                Convert Now
                                </button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                        <div class="box overflow-hidden">
                        <div class="box-header">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Recent Trades</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Recent Trades Overview, Tracking Recent Market Activity.</p>
                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <div class="table-responsive">
                            <table class="table table-vcenter text-nowrap mb-0 min-w-full">
                                <tbody class="active-tab">
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="lh-1"> <span class="avatar avatar-sm avatar-rounded me-2"> <img
                                            src="{{asset('build/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg')}}" alt="">
                                        </span> </div>
                                        <div class="items-center">
                                        <div class="mb-0 flex flex-col"><span class="font-medium text-[0.875rem]">
                                            Bitcoin</span><span class="text-textmuted text-[0.813rem]">Success</span></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="avatar avatar-sm bg-success/10 !text-success"> <i
                                        class="ti ti-trending-up text-[1rem]"></i> </span> </td>
                                    <td>
                                    <div class="items-center text-end"> <span class="text-[0.875rem] mb-1">-$1,250</span>
                                        <p class="mb-0 text-success">+0.0012BTC</p>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="lh-1"> <span class="avatar avatar-sm avatar-rounded me-2"> <img
                                            src="{{asset('build/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg')}}" alt="">
                                        </span> </div>
                                        <div class="items-center">
                                        <div class="mb-0 flex flex-col"><span class="font-medium text-[0.875rem]">
                                            Etherium</span><span class="text-textmuted text-[0.813rem]">Success</span></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="avatar avatar-sm bg-danger/10 !text-danger"> <i
                                        class="ti ti-trending-down text-[1rem]"></i> </span> </td>
                                    <td>
                                    <div class="items-center text-end"> <span class="text-[0.875rem] mb-1">-$1,250</span>
                                        <p class="mb-0 text-danger">+0.0012ETH</p>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="lh-1"> <span class="avatar avatar-sm avatar-rounded me-2"> <img
                                            src="{{asset('build/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg')}}" alt="">
                                        </span> </div>
                                        <div class="items-center">
                                        <div class="mb-0 flex flex-col"><span class="font-medium text-[0.875rem]">
                                            Tether</span><span class="text-textmuted text-[0.813rem]">Failed</span></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="avatar avatar-sm bg-success/10 !text-success"> <i
                                        class="ti ti-trending-up text-[1rem]"></i> </span> </td>
                                    <td>
                                    <div class="items-center text-end"> <span class="text-[0.875rem] mb-1">-$1,670</span>
                                        <p class="mb-0 text-success">+0.0012TH</p>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="lh-1"> <span class="avatar avatar-sm avatar-rounded me-2"> <img
                                            src="{{asset('build/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg')}}" alt="">
                                        </span> </div>
                                        <div class="items-center">
                                        <div class="mb-0 flex flex-col"><span class="font-medium text-[0.875rem]">
                                            Solana</span><span class="text-textmuted text-[0.813rem]">Pending</span></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="avatar avatar-sm bg-danger/10 !text-danger"> <i
                                        class="ti ti-trending-down text-[1rem]"></i> </span> </td>
                                    <td>
                                    <div class="items-center text-end"> <span class="text-[0.875rem] mb-1">-$1,580</span>
                                        <p class="mb-0 text-info">+0.0012BTC</p>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="lh-1"> <span class="avatar avatar-sm avatar-rounded me-2"> <img
                                            src="{{asset('build/assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg')}}" alt="">
                                        </span> </div>
                                        <div class="items-center">
                                        <div class="mb-0 flex flex-col"><span class="font-medium text-[0.875rem]">
                                            Cardano</span><span class="text-textmuted text-[0.813rem]">Success</span></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="avatar avatar-sm bg-success/10 !text-success"> <i
                                        class="ti ti-trending-up text-[1rem]"></i> </span> </td>
                                    <td>
                                    <div class="items-center text-end"> <span class="text-[0.875rem] mb-1">-$1,650</span>
                                        <p class="mb-0 text-warning">+0.0012ETH</p>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-bottom-0">
                                    <div class="flex items-center">
                                        <div class="lh-1"> <span class="avatar avatar-sm avatar-rounded me-2"> <img
                                            src="{{asset('build/assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg')}}"
                                            alt=""> </span> </div>
                                        <div class="items-center">
                                        <div class="mb-0 flex flex-col"><span class="font-medium text-[0.875rem]">
                                            Binance</span><span class="text-textmuted text-[0.813rem]">Failed</span></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="border-bottom-0"> <span class="avatar avatar-sm bg-danger/10 !text-danger"> <i
                                        class="ti ti-trending-down text-[1rem]"></i> </span> </td>
                                    <td>
                                    <div class="items-center text-end"> <span class="text-[0.875rem] mb-1">-$1,170</span>
                                        <p class="mb-0 text-danger">+0.0012ETH</p>
                                    </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Recent Activity</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Recent Activity Trends, Monitoring Recent Patterns.</p>
                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <div class="table-responsive">
                            <table
                                class="table table-auto order-table ti-custom-table mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                <tbody class="active-tab">
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="fs-20 me-3 lh-1"> <span
                                            class="avatar avatar-sm bg-primary/10 !fill-primary crypto-investments"><svg
                                            class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M14.075,24v-3.188c3.779-0.207,6.305-1.167,6.642-4.756c0.264-2.88-1.084-4.165-3.223-4.682l0.001-0.002c1.289-0.665,2.109-1.846,1.919-3.811c-0.249-2.688-2.438-3.589-5.339-3.84V0h-2.256v3.619c-0.586,0-1.186,0.015-1.787,0.03V0.001H7.776v3.722c-0.829,0.025-1.795,0.013-4.526,0v2.422c1.781-0.032,2.715-0.147,2.929,1.004V17.34c-0.136,0.914-0.861,0.782-2.475,0.753L3.25,20.796c4.113,0,4.526,0.015,4.526,0.015v3.188h2.256v-3.143c0.615,0.015,1.216,0.015,1.787,0.015V24H14.075z M10.077,6.306c1.274,0,5.259-0.399,5.259,2.275c0,2.555-3.985,2.26-5.259,2.26V6.306z M10.077,18.106v-4.992c1.523,0,6.188-0.428,6.188,2.496C16.265,18.431,11.6,18.106,10.077,18.106z">
                                            </path>
                                            </svg></span> </div>
                                        <div class="mt-1">
                                        <h6 class="mb-0 text-[0.813rem]">BTC/USD</h6> <span class="text-success text-[0.7rem]"><i
                                            class="fa fa-caret-up me-1"></i>2.04%</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="items-center"> <span class="">Currency</span>
                                        <p class="mb-0 text-[0.75rem]">Bitcoin - <span class="text-textmuted">(0.0092312)</span>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center gap-1 mb-2"><span
                                        class="badge badge-sm bg-danger/10 text-danger">USD</span><span class="rtl-rotate"> <i
                                            class="bi bi-arrow-right-short text-muted fs-16"></i> </span> <span
                                        class="badge badge-sm bg-success/10 text-success">BTC</span></div> <small
                                        class="text-textmuted">1.00 = 0.0000121</small>
                                    </td>
                                    <td> <span class="badge bg-success/10 !text-success">Completed</span> </td>
                                    <td class="border-top-dashed pe-4"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-danger-full !py-1 !px-2 !text-[0.75rem]">Buy</a> <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">Sell</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="fs-20 me-3 lh-1"> <span
                                            class="avatar avatar-sm bg-danger/10 !fill-danger crypto-investments"><svg
                                            class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                            <path
                                                d="M65.7 96.4V128l39.2-55.1zM103.4 62.7L65.7 0v45.6zM65.7 49.2v38.9l37.4-21.9zM24.7 62.7L62.4 0v45.6zM62.4 49.2v38.9L24.9 66.2zM62.3 96.4V128L23.1 72.9z">
                                            </path>
                                            </svg></span> </div>
                                        <div class="mt-1">
                                        <h6 class="mb-0 text-[0.813rem]">ETH/USD</h6> <span class="text-success text-[0.7rem]"><i
                                            class="fa fa-caret-up me-1"></i>1.54%</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="items-center"> <span class="">Currency</span>
                                        <p class="mb-0 text-[0.75rem]">Etherium - <span class="text-textmuted">(0.9207702)</span>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center gap-1 mb-2"><span
                                        class="badge badge-sm bg-danger/10 text-danger">USD</span><span class="rtl-rotate"> <i
                                            class="bi bi-arrow-right-short text-muted fs-16"></i> </span> <span
                                        class="badge badge-sm bg-success/10 text-success">ETH</span></div> <small
                                        class="text-textmuted">1.00 = 0.0475</small>
                                    </td>
                                    <td> <span class="badge bg-success/10 !text-success">Completed</span> </td>
                                    <td class="border-top-dashed pe-4"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-danger-full !py-1 !px-2 !text-[0.75rem]">Buy</a> <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">Sell</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="fs-20 me-3 lh-1"> <span
                                            class="avatar avatar-sm bg-success/10 !fill-success crypto-investments"><svg
                                            class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32"
                                            viewBox="0 0 32 32">
                                            <path
                                                d="M21.022 3.305c.481 2.917 8.449 5.085 3.016 13.286-.086.129-.294.079-.314-.075-.435-3.378-1.004-5.469-3.349-6.963-.052-.033-.112-.048-.171-.033-.869.218-3.112 1.461-4.123 2.863-.052.072-.137.107-.224.09-1.878-.37-3.788-1.111-4.744-2.376-.068-.09-.186-.123-.284-.067-1.344.768-2.697 2.537-2.82 6.577-.005.169-.232.23-.314.082C4.249 10.48 6.491 6.091 11.736 4.097c.135-.051.281.034.312.175.456 2.061 2.844 3.936 3.67 4.532.132.095.303.015.332-.145.457-2.496 2.757-4.809 4.665-5.559C20.858 3.045 20.997 3.154 21.022 3.305zM16.5 21H15v-1h1.5c.275 0 .5.224.5.5S16.775 21 16.5 21zM18 23.5c0 .276-.225.5-.5.5.146 0-2.347 0-2.5 0v-1c-.103 0 2.321 0 2.5 0C17.775 23 18 23.224 18 23.5z">
                                            </path>
                                            <path
                                                d="M16,14c-4.418,0-8,3.582-8,8s3.582,8,8,8s8-3.582,8-8S20.418,14,16,14z M17.35,26H17v1.5h-1V26h-1v1.5h-1V26h-0.5
                                            c-0.276,0-0.5-0.224-0.5-0.5c0-0.154,0-7.246,0-7c0-0.276,0.224-0.5,0.5-0.5H14v-1.5h1V18h1v-1.5h1v1.551
                                            c1.45,0.296,2.406,1.837,1.829,3.34c0.767,0.485,1.258,1.37,1.159,2.364C19.857,25.058,18.66,26,17.35,26z">
                                            </path>
                                            </svg></span> </div>
                                        <div class="mt-1">
                                        <h6 class="mb-0 text-[0.813rem]">BSD/USD</h6> <span class="text-danger text-[0.7rem]"><i
                                            class="fa fa-caret-down me-1"></i>8.04%</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="items-center"> <span class="">Currency</span>
                                        <p class="mb-0 text-[0.75rem]">Bahamian - <span class="text-textmuted">(0.0212)</span>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center gap-1 mb-2"><span
                                        class="badge badge-sm bg-danger/10 text-danger">USD</span><span class="rtl-rotate"> <i
                                            class="bi bi-arrow-right-short text-muted fs-16"></i> </span> <span
                                        class="badge badge-sm bg-success/10 text-success">BSD</span></div> <small
                                        class="text-textmuted">1.00 = 0.00671</small>
                                    </td>
                                    <td> <span class="badge bg-info/10 !text-info">Pening</span> </td>
                                    <td class="border-top-dashed pe-4"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-danger-full !py-1 !px-2 !text-[0.75rem]">Buy</a> <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">Sell</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="fs-20 me-3 lh-1"> <span
                                            class="avatar avatar-sm bg-info/10 !fill-info crypto-investments"><svg class="w-4 h-4"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                            <path
                                                d="M3 99.8C5 94 6.8 88.6 8.8 83.1c.2-.5 1.2-1 1.8-1 3.3-.1 6.6 0 9.9 0h64.6c1.7 0 2.5-.5 3-2.2 3.6-10.6 7.3-21.2 11-31.8.2-.6.3-1.1.6-2H21.4c2-5.9 3.9-11.4 5.9-16.9.2-.4 1-.8 1.5-.8 2-.1 3.9 0 5.9 0 26.5 0 53 .2 79.6-.1 7.9-.1 16.3 6 12.9 17.6-2.5 8.7-5.8 17.1-8.7 25.6-1 2.9-2 5.9-3 8.7-3.7 10.2-11.2 16.3-21.5 19.2-.9.3-1.9.3-2.9.3H5.2c-.6.1-1.3.1-2.2.1z">
                                            </path>
                                            <path
                                                d="M52.6 55.6c-2 5.6-3.9 10.9-5.9 16-.1.4-.9.7-1.4.7H.8c-.2 0-.4-.1-.8-.3 1.9-5.2 3.7-10.3 5.7-15.4.2-.5 1-1 1.5-1h45.4z">
                                            </path>
                                            </svg></span> </div>
                                        <div class="mt-1">
                                        <h6 class="mb-0 text-[0.813rem]">DASH/USD</h6> <span class="text-success text-[0.7rem]"><i
                                            class="fa fa-caret-up me-1"></i>3.84%</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="items-center"> <span class="">Currency</span>
                                        <p class="mb-0 text-[0.75rem]">Dash - <span class="text-textmuted">(0.045312)</span>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center gap-1 mb-2"><span
                                        class="badge badge-sm bg-danger/10 text-danger">USD</span><span class="rtl-rotate"> <i
                                            class="bi bi-arrow-right-short text-muted fs-16"></i> </span> <span
                                        class="badge badge-sm bg-success/10 text-success">DASH</span></div> <small
                                        class="text-textmuted">1.00 = 0.005421</small>
                                    </td>
                                    <td> <span class="badge bg-danger/10 !text-danger">Rejected</span> </td>
                                    <td class="border-top-dashed pe-4"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-danger-full !py-1 !px-2 !text-[0.75rem]">Buy</a> <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">Sell</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="fs-20 me-3 lh-1"> <span
                                            class="avatar avatar-sm bg-warning/10 !fill-warning crypto-investments"><svg
                                            class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                            <path
                                                d="M123 26.8c0 12.5-9.3 24.6-22.9 26.2-2.4.3-4.9.3-7.3.8-7.8 1.6-11.2 11.1-6 17.1 2.1 2.5 5.1 3.4 8.3 3.7 3.3.4 6.8.5 9.9 1.6 10.1 3.4 15.9 10.7 17.6 21.2 2.3 14.2-7.3 27-20.6 30-14.5 3.3-29.5-6.5-32.1-21.1-1.2-6.4.1-12.3 3-17.9 1.2-2.4 2.2-4.7 2.1-7.5-.2-4.4-3-8-7.4-9.5-3.8-1.3-8.1-.1-10.8 3.2-1.7 2.1-3.1 4.5-4.8 6.6-6.9 8.3-15.9 11.2-26.3 8.9-10.5-2.5-17.3-9.3-19.9-19.7C2 55.6 11.4 40.6 26.4 37.8c11-2.1 20 1.5 26.8 10.5 1.4 1.9 2.7 4.1 4.4 5.7 5.5 5.5 15.4 2.8 17.3-4.7.7-2.9.1-5.7-1.3-8.4-2.5-4.8-4.3-9.9-4.1-15.4C69.9 12.8 80 1.9 92.6.2c14.2-1.8 27.3 7.5 30 21.7.2 1.6.3 3.3.4 4.9z">
                                            </path>
                                            </svg></span> </div>
                                        <div class="mt-1">
                                        <h6 class="mb-0 text-[0.813rem]">RIPPLE/USD</h6> <span
                                            class="text-danger text-[0.7rem]"><i class="fa fa-caret-down me-1"></i>7.04%</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="items-center"> <span class="">Currency</span>
                                        <p class="mb-0 text-[0.75rem]">Ripple - <span class="text-textmuted">(0.0092312)</span>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center gap-1 mb-2"><span
                                        class="badge badge-sm bg-danger/10 text-danger">USD</span><span class="rtl-rotate"> <i
                                            class="bi bi-arrow-right-short text-muted fs-16"></i> </span> <span
                                        class="badge badge-sm bg-success/10 text-success">RIPPLE</span></div> <small
                                        class="text-textmuted">1.00 = 0.0000121</small>
                                    </td>
                                    <td> <span class="badge bg-success/10 !text-success">Completed</span> </td>
                                    <td class="border-top-dashed pe-4"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-danger-full !py-1 !px-2 !text-[0.75rem]">Buy</a> <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">Sell</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="fs-20 me-3 lh-1"> <span
                                            class="avatar avatar-sm bg-purplemain/10 !fill-purplemain crypto-investments"><svg class="w-4 h-4"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                            <path
                                                d="M18.629 74.359c.934 3.61 4.17 6.009 7.707 6.009.654 0 1.318-.082 1.98-.254L36 78.124V120a8 8 0 0 0 8 8h53.652c4.418 0 8.831-3.484 9.856-7.782l2.289-8.436c1.024-4.298-1.727-7.782-6.145-7.782H65V70.054l12.374-3.204a8 8 0 0 0 5.74-9.75l-1.036-8.995c-.937-3.622-4.144-6.037-7.633-6.037-.63 0-1.27.08-1.908.244L65 44.264V8c0-4.418-4.582-8-9-8H44a8 8 0 0 0-8 8v44.334l-12.667 3.28a8 8 0 0 0-5.74 9.75l1.036 8.995zm5.707-14.873L40 55.431V8c0-2.206 1.794-4 4-4h12c2.43 0 5 2.056 5 4V49.431l12.54-3.246c.298-.078.603-.117.905-.117 1.677 0 3.166 1.147 3.697 2.816l1.1 9.218a4.005 4.005 0 0 1-2.87 4.876L61 66.958V108h42.652c.887 0 1.588.269 1.974.758.379.48.481 1.204.292 2.046l-2.27 8.367-.017.06-.014.06c-.598 2.508-3.386 4.709-5.965 4.709H44c-2.206 0-4-1.794-4-4V72.956l-12.687 3.286c-.32.083-.65.126-.977.126-1.723 0-3.241-1.136-3.77-2.79l-1.1-9.216a4.005 4.005 0 0 1 2.87-4.876z">
                                            </path>
                                            <circle cx="48" cy="46" r="2"></circle>
                                            <circle cx="74" cy="116.083" r="2"></circle>
                                            <path
                                                d="M48 118h17a2 2 0 000-4H50V84.5a2 2 0 00-4 0V116a2 2 0 002 2zM48 40a2 2 0 002-2V14h3a2 2 0 000-4h-5a2 2 0 00-2 2v26a2 2 0 002 2z">
                                            </path>
                                            </svg></span> </div>
                                        <div class="mt-1">
                                        <h6 class="mb-0 text-[0.813rem]">BTC/LTC</h6> <span class="text-success text-[0.7rem]"><i
                                            class="fa fa-caret-up me-1"></i>0.14%</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="items-center"> <span class="">Currency</span>
                                        <p class="mb-0 text-[0.75rem]">Litecoin - <span class="text-textmuted">(0.0952312)</span>
                                        </p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center gap-1 mb-2"><span
                                        class="badge badge-sm bg-danger/10 text-danger">USD</span><span class="rtl-rotate"> <i
                                            class="bi bi-arrow-right-short text-muted fs-16"></i> </span> <span
                                        class="badge badge-sm bg-success/10 text-success">LTC</span></div> <small
                                        class="text-textmuted">1.00 = 0.067421</small>
                                    </td>
                                    <td> <span class="badge bg-danger/10 !text-danger">Rejected</span> </td>
                                    <td class="border-top-dashed pe-4"> <a href="javascript:void(0);"
                                        class="ti-btn ti-btn-danger-full !py-1 !px-2 !text-[0.75rem]">Buy</a> <a
                                        href="javascript:void(0);"
                                        class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">Sell</a> </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Recent Transactions</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Recent Transactions Overview, Tracking Financial Moves.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <ul class="list-none mb-0">
                            <li class="mb-6">
                                <a href="javascript:void(0);">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-sm bg-primary/10 me-2 !text-primary"><i class="ri-arrow-up-line text-[1rem]"></i></span>
                                    <div>
                                        <p class="mb-0 font-medium text-[0.875rem]">Sold BTC</p>
                                        <p class="mb-0text-[0.75rem] text-primary font-semibold">
                                        21 mar,2022</p>
                                    </div>
                                    </div>
                                    <div class="text-end">
                                    <p class="mb-0 font-medium text-[0.875rem]">
                                        +$19,123.02
                                    </p>
                                    <p class="mb-0  text-textmuted text-[0.75rem]">
                                        BTC 0.0823.45
                                    </p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="mb-6">
                                <a href="javascript:void(0);">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-sm bg-primary/10 me-2 !text-primary"><i class="ri-arrow-up-line text-[1rem]"></i></span>
                                    <div>
                                        <p class="mb-0 font-medium text-[0.875rem]">Sold ETH</p>
                                        <p class="mb-0 text-[0.75rem] text-primary font-semibold">
                                        25 Aug,2021</p>
                                    </div>
                                    </div>
                                    <div class="text-end">
                                    <p class="mb-0 font-medium text-[0.875rem]">
                                        -$1,430.92
                                    </p>
                                    <p class="mb-0  text-textmuted text-[0.75rem]">
                                        ETH 10,783.23
                                    </p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="mb-6">
                                <a href="javascript:void(0);">
                                <div class="flex items-center justify-between">
                                    <div class="flex tems-center">
                                    <span class="avatar avatar-sm bg-danger/10 me-2 !text-danger"><i class="ri-arrow-down-line text-[1rem]"></i></span>
                                    <div>
                                        <p class="mb-0 font-medium text-[0.875rem]">Buy Dash</p>
                                        <p class="mb-0 text-[0.75rem] text-danger font-semibold">
                                        12 Sept ,2024</p>
                                    </div>
                                    </div>
                                    <div class="text-end">
                                    <p class="mb-0 font-medium text-[0.875rem]">
                                        +$5,236.53
                                    </p>
                                    <p class="mb-0  text-textmuted text-[0.75rem]">
                                        DASH 12,456.98
                                    </p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="mb-6">
                                <a href="javascript:void(0);">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-sm bg-primary/10 me-2 !text-primary"><i class="ri-arrow-up-line text-[1rem]"></i></span>
                                    <div>
                                        <p class="mb-0 font-medium text-[0.875rem]">Sold Bytecoin</p>
                                        <p class="mb-0 text-[0.75rem] text-primary font-semibold">
                                        15 Oct,2024</p>
                                    </div>
                                    </div>
                                    <div class="text-end">
                                    <p class="mb-0 font-medium text-[0.875rem]">
                                        -$1,810.93
                                    </p>
                                    <p class="mb-0  text-textmuted text-[0.75rem]">
                                        BYTE 8,154.00
                                    </p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="mb-6">
                                <a href="javascript:void(0);">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-sm bg-danger/10 me-2 !text-danger"><i class="ri-arrow-down-line text-[1rem]"></i></span>
                                    <div>
                                        <p class="mb-0 font-medium text-[0.875rem]">Buy Golem</p>
                                        <p class="mb-0 text-[0.75rem] text-danger font-semibold">
                                        19 Jan,2024</p>
                                    </div>
                                    </div>
                                    <div class="text-end">
                                    <p class="mb-0 font-medium text-[0.875rem]">
                                        +$5,046.34
                                    </p>
                                    <p class="mb-0  text-textmuted text-[0.75rem]">
                                        GOLEM 9,384.73
                                    </p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="mb-0">
                                <a href="javascript:void(0);">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                    <span class="avatar avatar-sm bg-primary/10 me-2 !text-primary"><i class="ri-arrow-down-line text-[1rem]"></i></span>
                                    <div>
                                        <p class="mb-0 font-medium text-[0.875rem]">Sold SiaCoin</p>
                                        <p class="mb-0 text-[0.75rem] text-primary font-semibold">
                                        20 Apr ,2021</p>
                                    </div>
                                    </div>
                                    <div class="text-end">
                                    <p class="mb-0 font-medium text-[0.875rem]">
                                        +$2,625.50
                                    </p>  
                                    <p class="mb-0  text-textmuted text-[0.75rem]">
                                        SIA 3,151.09
                                    </p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-col-12 col-span-12">
                        <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header">
                            <div class=" flex justify-between flex-wrap">
                                <h4 class="box-title mb-2"> Crypto currencies Market Value</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Cryptocurrency Market Value Overview Assessing Market Performance,Understanding Currency Trends.</p>
                            </div>
                            </div>
                            <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                <thead class="bg-light dark:bg-black/20">
                                    <tr>
                                    <th scope="col" class="text-start  !border-defaultborder dark:!border-defaultborder/10">S.No</th>
                                    <th scope="col" class="text-start !border-defaultborder dark:!border-defaultborder/10">Name</th>
                                    <th scope="col" class="text-start !border-defaultborder dark:!border-defaultborder/10">Symbol</th>
                                    <th scope="col" class="text-start !border-defaultborder dark:!border-defaultborder/10">Price</th>
                                    <th scope="col" class="text-start !border-defaultborder dark:!border-defaultborder/10">24 h%</th>
                                    <th scope="col" class="text-start !border-defaultborder dark:!border-defaultborder/10">Market Cap</th>
                                    <th scope="col" class="text-start !border-defaultborder dark:!border-defaultborder/10">Price Graph</th>
                                    <th scope="col" class="text-start !border-defaultborder dark:!border-defaultborder/10">Volume</th>
                                    <th scope="col" class="text-start !border-defaultborder dark:!border-defaultborder/10">Price Change</th>
                                    <th scope="col" class="text-start !border-defaultborder dark:!border-defaultborder/10">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                    <td>1</td>
                                    <td>Bitcoin</td>
                                    <td>
                                        <div class="leading-none flex items-center">
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Bitcoin.svg')}}" alt="">
                                        </span> - BTC
                                        </div>
                                    </td>
                                    <td>
                                        $16,839.10
                                    </td>
                                    <td class="text-success">
                                        33.56%
                                    </td>
                                    <td>
                                        324.01B
                                    </td>
                                    <td>
                                        <div id="bitcoin-price-graph"></div>
                                    </td>
                                    <td>
                                        14,674,311,168
                                    </td>
                                    <td>
                                        <span class="text-success">0.30% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                    </td>
                                    <td class="">
                                        <div class="btn-list"> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-primary !py-1 !px-2 me-1 !border !border-primary/20">Buy</a> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-danger !py-1 !px-2 !border-danger/20">Trade</a> </div>
                                    </td>
                                    </tr>
                                    <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                    <td>2</td>
                                    <td>Etherium</td>
                                    <td>
                                        <div class="leading-none flex items-center">
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                        </span> - ETH
                                        </div>
                                    </td>
                                    <td>
                                        1,217.96
                                    </td>
                                    <td class="text-success">
                                        13.56%
                                    </td>
                                    <td>
                                        $149,316,232,699
                                    </td>

                                    <td>
                                        <div id="etherium-price-graph"></div>
                                    </td>
                                    <td>
                                        $4,758,554,801
                                    </td>
                                    <td>
                                        <span class="text-success">0.30% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                    </td>
                                    <td class="">
                                        <div class="btn-list"> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-primary !py-1 !px-2 me-1 !border !border-primary/20">Buy</a> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-danger !py-1 !px-2 !border-danger/20">Trade</a> </div>
                                    </td>
                                    </tr>
                                    <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                    <td>3</td>
                                    <td>Dash</td>
                                    <td>
                                        <div class="leading-none flex items-center">
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt="">
                                        </span> - DASH
                                        </div>
                                    </td>
                                    <td>
                                        $43.49
                                    </td>
                                    <td class="text-success">
                                        45.76%
                                    </td>
                                    <td>
                                        $480,799,847
                                    </td>

                                    <td>
                                        <div id="dash-price-graph"></div>
                                    </td>
                                    <td>
                                        $52,626,563
                                    </td>
                                    <td>
                                        <span class="text-success">0.45% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                    </td>
                                    <td class="">
                                        <div class="btn-list"> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-primary !py-1 !px-2 me-1 !border !border-primary/20">Buy</a> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-danger !py-1 !px-2 !border-danger/20">Trade</a> </div>
                                    </td>
                                    </tr>
                                    <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                    <td>4</td>
                                    <td>Ripple</td>
                                    <td>
                                        <div class="leading-none flex items-center">
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ripple.svg')}}" alt="">
                                        </span> - XRP
                                        </div>
                                    </td>
                                    <td>
                                        $0.3531
                                    </td>
                                    <td class="text-success">
                                        64.26%
                                    </td>
                                    <td>
                                        $17,791,969,465
                                    </td>

                                    <td>
                                        <div id="ripple-price-graph"></div>
                                    </td>
                                    <td>
                                        $511,598,941
                                    </td>
                                    <td>
                                        <span class="text-success">0.97% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                    </td>
                                    <td class="">
                                        <div class="btn-list"> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-primary !py-1 !px-2 me-1 !border !border-primary/20">Buy</a> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-danger !py-1 !px-2 !border-danger/20">Trade</a> </div>
                                    </td>
                                    </tr>
                                    <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                    <td>5</td>
                                    <td>Iota</td>
                                    <td>
                                        <div class="leading-none flex items-center">
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/IOTA.svg')}}" alt="">
                                        </span> - IOTA
                                        </div>
                                    </td>
                                    <td>
                                        $0.169741
                                    </td>
                                    <td class="text-success">
                                        98.56%
                                    </td>
                                    <td>
                                        $471,800,600
                                    </td>
                                    <td>
                                        <div id="iota-price-graph"></div>
                                    </td>
                                    <td>
                                        $5,524,385
                                    </td>
                                    <td>
                                        <span class="text-success">0.93% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                    </td>
                                    <td class="">
                                        <div class="btn-list"> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-primary !py-1 !px-2 me-1 !border !border-primary/20">Buy</a> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-danger !py-1 !px-2 !border-danger/20">Trade</a> </div>
                                    </td>
                                    </tr>
                                    <tr
                                    class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                    <td>6</td>
                                    <td>Neo</td>
                                    <td>
                                        <div class="leading-none flex items-center">
                                        <span class="avatar avatar-xs avatar-rounded">
                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Neo.svg')}}" alt="">
                                        </span> - NEO
                                        </div>
                                    </td>
                                    <td>
                                        $6.43
                                    </td>
                                    <td class="text-success">
                                        23.56%
                                    </td>
                                    <td>
                                        $453,601,667
                                    </td>
                                    <td>
                                        <div id="neo-price-graph"></div>
                                    </td>
                                    <td>
                                        $12,904,320
                                    </td>
                                    <td>
                                        <span class="text-danger">0.49% <i class="ti ti-arrow-big-down-lines ms-1"></i></span>
                                    </td>
                                    <td class="">
                                        <div class="btn-list"> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-primary !py-1 !px-2 me-1 !border !border-primary/20">Buy</a> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-danger !py-1 !px-2 !border-danger/20">Trade</a> </div>
                                    </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                            <div class="box-footer">
                            <div class="sm:flex items-center">
                                <div class="dark:text-defaulttextcolor/70">
                                Showing 6 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
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
                    </div>

@endsection

@section('scripts')
	
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
        <!-- CRM-Dashboard -->
        @vite('resources/assets/js/cryptodashboard.js')

@endsection
