
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Personal</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Dashboard <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Personal 
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
                    <div class="col-span-12 xxl:col-span-9">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                            <div class="box">
                            <div class="box-body space-y-4">
                                <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                                <div>
                                    <p class="text-textmuted text-[0.925rem] mb-2">Total Candidates</p>
                                    <div class="flex items-center">
                                    <h5 class=" text-2xl font-medium">125</h5> <span
                                        class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                                        class="ti ti-arrow-up-right"></i>+12.86%</span>
                                    </div>
                                </div>
                                <div> <span class="avatar rounded-sm bg-primary p-3 text-white"> <i
                                        class="ti ti-users text-xl leading-none"></i> </span> </div>
                                </div>
                                <div class="flex items-center !mt-1">
                                <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                                    <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar"
                                    style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">50%</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                            <div class="box">
                            <div class="box-body space-y-4">
                                <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                                <div>
                                    <p class="text-textmuted text-[0.925rem] mb-2">Recruiters</p>
                                    <div class="flex items-center">
                                    <h5 class=" text-2xl font-medium">968</h5> <span
                                        class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                                        class="ti ti-arrow-up-right"></i>+5.46%</span>
                                    </div>
                                </div>
                                <div> <span class="avatar rounded-sm bg-danger p-3 text-white"> <i
                                        class="ti ti-user-circle  text-xl leading-none"></i> </span> </div>
                                </div>
                                <div class="flex items-center !mt-1">
                                <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                                    <div class="ti-main-progress-bar !bg-danger text-xs text-white text-center" role="progressbar"
                                    style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">80%</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                            <div class="box">
                            <div class="box-body space-y-4">
                                <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                                <div>
                                    <p class="text-textmuted text-[0.925rem] mb-2">Total Subscriptions</p>
                                    <div class="flex items-center">
                                    <h5 class=" text-2xl font-medium">28</h5> <span
                                        class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                                        class="ti ti-arrow-up-right"></i>+3.20%</span>
                                    </div>
                                </div>
                                <div> <span class="avatar rounded-sm bg-success p-3 text-white"> <i
                                        class="ti ti-browser-check text-xl leading-none"></i> </span> </div>
                                </div>
                                <div class="flex items-center !mt-1">
                                <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                                    <div class="ti-main-progress-bar !bg-success text-xs text-white text-center" role="progressbar"
                                    style="width:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">65%</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                            <div class="box">
                            <div class="box-body space-y-4">
                                <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                                <div>
                                    <p class="text-textmuted text-[0.925rem] mb-2">Page Views</p>
                                    <div class="flex items-center">
                                    <h5 class=" text-2xl font-medium">645</h5> <span
                                        class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                                        class="ti ti-arrow-up-right"></i>+1.20%</span>
                                    </div>
                                </div>
                                <div> <span class="avatar rounded-sm bg-info p-3 text-white"> <i
                                        class="ti ti-view-360 text-xl leading-none"></i> </span> </div>
                                </div>
                                <div class="flex items-center !mt-1">
                                <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                                    <div class="ti-main-progress-bar !bg-info text-xs text-white text-center" role="progressbar"
                                    style="width:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">65%</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-4 col-span-12">
                            <div class="box">
                            <div class="box-header ">
                                <div class="flex  justify-between">
                                <h4 class="box-title mb-2">Recent Contacts</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Keeping Track of Recent Communications.
                                </p>
                                </div>
                            </div>
                            <div class="box-body !pt-2">
                                <div class="flex -space-x-2 rtl:space-x-reverse">
                                <img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description">
                                <img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Image Description">
                                <img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description">
                                <img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description">
                                <img class="avatar avatar-sm avatar-rounded" src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description">
                                <a aria-label="anchor" class="avatar avatar-sm avatar-rounded bg-primary/10 !text-primary" href="javascript:void(0);"> <i class="ri-arrow-right-s-line text-[1.125rem]"></i> </a>
                            </div>
                                <div class="flex justify-between mb-3"> <span class="text-textmuted">Messages</span> <a
                                    href="javascript:void(0);" class="tx-inverse text-textmuted "><i
                                    class="bi bi-check2-all !text-primary me-1"></i>Mark as read</a> </div>
                                <ul class="flex flex-col">
                                <li class="px-0 pt-0 ti-list-group !mb-5 !border-0  w-full flex justify-between">
                                    <div class=""> <a href="{{url('profile')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <img class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}"
                                        alt="Image Description">
                                        <div class="flex">
                                        <div class="block my-auto">
                                            <p class="block text-[0.875rem] font-medium my-auto ">
                                            Socrates Itumay</p>
                                            <span class="text-[0.75rem] text-textmuted block text-truncate message">Hello there! How
                                            are you doing?</span>
                                        </div>
                                        </div>
                                    </a> </div>
                                    <spn class="text-textmuted text-[0.75rem]"><i
                                        class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:45 PM</spn>
                                </li>
                                <li class="px-0 ti-list-group !mb-5 !border-0  w-full flex justify-between">
                                    <div class=""> <a href="{{url('profile')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <img class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/faces/16.jpg')}}"
                                        alt="Image Description">
                                        <div class="flex">
                                        <div class="block my-auto">
                                            <p class="block text-[0.875rem] font-medium my-auto ">
                                            Ryan Gercia</p>
                                            <span class="text-[0.75rem] text-textmuted block text-truncate message">Hey are you
                                            completing...</span>
                                        </div>
                                        </div>
                                    </a> </div>
                                    <spn class="text-textmuted text-[0.75rem]"><i
                                        class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>6:30 PM</spn>
                                </li>
                                <li class="px-0 ti-list-group !mb-5 !border-0  w-full flex justify-between">
                                    <div class=""> <a href="{{url('profile')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <img class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/faces/6.jpg')}}"
                                        alt="Image Description">
                                        <div class="flex">
                                        <div class="block my-auto">
                                            <p class="block text-[0.875rem] font-medium my-auto ">
                                            Prax Bhav</p>
                                            <span class="text-[0.75rem] text-textmuted block text-truncate message">I would like to
                                            discuss about...</span>
                                        </div>
                                        </div>
                                    </a> </div>
                                    <spn class="text-textmuted text-[0.75rem]"><i
                                        class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>11:15 AM</spn>
                                </li>
                                <li class="px-0 ti-list-group !mb-5 !border-0  w-full flex justify-between">
                                    <div class=""> <a href="{{url('profile')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <img class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/faces/6.jpg')}}"
                                        alt="Image Description">
                                        <div class="flex">
                                        <div class="block my-auto">
                                            <p class="block text-[0.875rem] font-medium my-auto ">
                                            Jackie Chen</p>
                                            <span class="text-[0.75rem] text-textmuted block text-truncate message">Shall we meet
                                            tomorrow?</span>
                                        </div>
                                        </div>
                                    </a> </div>
                                    <spn class="text-textmuted text-[0.75rem]"><i
                                        class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:01 PM</spn>
                                </li>
                                <li class="px-0 ti-list-group !border-0  w-full flex justify-between">
                                    <div class=""> <a href="{{url('profile')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <img class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/faces/8.jpg')}}"
                                        alt="Image Description">
                                        <div class="flex">
                                        <div class="block my-auto">
                                            <p class="block text-[0.875rem] font-medium my-auto ">
                                            Samantha Sam</p>
                                            <span class="text-[0.75rem] text-textmuted block text-truncate message">Shall we go to
                                            the cafe at downtown...</span>
                                        </div>
                                        </div>
                                    </a> </div>
                                    <spn class="text-textmuted text-[0.75rem]"><i
                                        class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:45 PM</spn>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-8 xl:col-span-8 col-span-12">
                            <div class="box">
                            <div class="box-header ">
                                <div class="flex justify-between">
                                <h4 class="box-title mb-2">Statistics</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Statistics of your income with respect
                                    to the time.</p>
                                </div>
                            </div>
                            <div class="box-body !py-0">
                                <div id="statistics"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-3">
                        <div class="box text-white overflow-hidden">
                        <div class="block absolute w-full h-full before:bg-primary before:absolute before:w-full before:h-full">
                        </div>
                        <div class="box-body relative">
                            <div class="flex justify-between mb-2">
                            <div class="ltr:mr-1 rtl:ml-1">
                                <h6 class="text-base font-medium !text-white">Recent Registrations</h6> <a
                                href="javascript:void(0);" class="text-xs text-white/70">Number of applications received
                                recently.</a>
                            </div>
                            <div class="min-w-fit">
                                <div class="avatar bg-white/20 text-white rounded-sm p-3 ring-0"> <i
                                    class="ti ti-browser-check text-2xl leading-none"></i> </div>
                            </div>
                            </div>
                            <h4 class="text-white mb-2 font-medium">12,456</h4>
                            <div class="flex justify-between text-white/70">
                            <div class="min-w-fit-content">
                                <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                    class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/13.jpg')}}"
                                    alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                    src="{{asset('build/assets/images/faces/17.jpg')}}" alt="Image Description"> <img
                                    class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/9.jpg')}}"
                                    alt="Image Description"><img class="inline-block avatar avatar-sm !rounded-full"
                                    src="{{asset('build/assets/images/faces/21.jpg')}}" alt="Image Description"> </div>
                            </div> <span class="underline">View All</span>
                            </div>
                        </div>
                        </div>
                        <div class="box">
                        <div class="box-header flex  justify-between">
                            <div>
                            <h4 class="box-title mb-2">Subscriptions Analysis</h4>
                            <div>
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Evaluating Subscription Trends and
                                Patterns.</p>
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
                        <div class="box-body">
                            <ul class="list-unstyled mb-0">
                            <li class="ti-list-item mb-5">
                                <div class="flex items-start relative"> <a aria-label="anchor" href="javascript:void(0);"
                                    class="masked-link z-1"></a>
                                <div class="me-2"> <span class="avatar bg-primary/10 !text-primary"><i
                                        class="ri-fire-line !text-[1.2rem]"></i></span> </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2"> <span
                                        class="flex-1 font-medium">starter</span> <span
                                        class="min-w-fit-content ms-1 text-primary">80%</span> </div>
                                    <div class="progress progress-xs progress-custom progress-animate" role="progressbar"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 80%"> </div>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-item mb-5">
                                <div class="flex items-start relative"> <a aria-label="anchor" href="javascript:void(0);"
                                    class="masked-link z-1"></a>
                                <div class="me-2"> <span class="avatar bg-danger/10 !text-danger"><i
                                        class="ri-global-line text-[1.2rem]"></i></span> </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2"> <span
                                        class="flex-1  font-medium">Pro</span> <span
                                        class="min-w-fit-content ms-1 text-danger">70%</span> </div>
                                    <div class="progress progress-xs progress-custom progress-animate" role="progressbar"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar !bg-danger after:!border-danger" style="width: 70%"> </div>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-item mb-5">
                                <div class="flex items-start relative"> <a aria-label="anchor" href="javascript:void(0);"
                                    class="masked-link z-1"></a>
                                <div class="me-2"> <span class="avatar bg-info/10 !text-info"><i
                                        class="ri-flashlight-line text-[1.2rem]"></i></span> </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2"> <span
                                        class="flex-1 font-medium">Premium</span> <span
                                        class="min-w-fit-content ms-1 text-info">40%</span> </div>
                                    <div class="progress progress-xs progress-custom progress-animate" role="progressbar"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar !bg-info after:!border-info" style="width: 40%"> </div>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-item mb-5">
                                <div class="flex items-start relative"> <a aria-label="anchor" href="javascript:void(0);"
                                    class="masked-link z-1"></a>
                                <div class="me-2"> <span class="avatar bg-success/10 !text-success"><i
                                        class="ri-shake-hands-line text-[1.2rem]"></i></span> </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2"> <span
                                        class="flex-1 font-medium">Hybrid</span> <span
                                        class="min-w-fit-content ms-1 text-success">60%</span> </div>
                                    <div class="progress progress-xs progress-custom progress-animate" role="progressbar"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar !bg-success after:!border-success" style="width: 60%"> </div>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-item">
                                <div class="flex items-start relative"> <a aria-label="anchor" href="javascript:void(0);"
                                    class="masked-link z-1"></a>
                                <div class="me-2"> <span class="avatar bg-warning/10 !text-warning"><i
                                        class="ri-store-line text-[1.2rem]"></i></span> </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2"> <span
                                        class="flex-1 font-medium">Tiered</span> <span
                                        class="min-w-fit-content ms-1 text-warning">55%</span> </div>
                                    <div class="progress progress-xs progress-custom progress-animate" role="progressbar"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar !bg-warning after:!border-warning" style="width: 55%"> </div>
                                    </div>
                                </div>
                                </div>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                        <div class="box overflow-hidden">
                        <div class="box-header !pb-3 !border-b border-defaultborder dark:border-defaultborder/10">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Posts Overview</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">A Comprehensive Look at Recent
                                Posts,Reviewing Recent Activity and Engagemen.</p>
                            </div>
                        </div>
                        <div class="box-body !p-3">
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="sm:col-span-4 col-span-12">
                                <div class="flex items-center mb-3 sm:mb-0">
                                <div class="me-2"> <span
                                    class="avatar avatar-md !rounded-full !text-[1.2rem] bg-primary/10 !text-primary"><i
                                        class="ti ti-clock"></i></span> </div>
                                <div class="flex-grow-1">
                                    <h6 class="font-medium mb-0">252</h6>
                                    <p class="mb-0 text-[0.875rem] text-textmuted">Total</p>
                                </div>
                                </div>
                            </div>
                            <div class="sm:col-span-4 col-span-12">
                                <div class="flex items-center mb-3 sm:mb-0">
                                <div class="me-2"> <span
                                    class="avatar avatar-md !rounded-full !text-[1.2rem] bg-danger/10 !text-danger"><i
                                        class="ti ti-eye"></i></span> </div>
                                <div class="flex-grow-1">
                                    <h6 class="font-medium mb-0">1,116</h6>
                                    <p class="mb-0 text-[0.875rem] text-textmuted">View</p>
                                </div>
                                </div>
                            </div>
                            <div class="sm:col-span-4 col-span-12">
                                <div class="flex items-center mb-3 sm:mb-0">
                                <div class="me-2"> <span
                                    class="avatar avatar-md !rounded-full !text-[1.2rem] bg-success/10 !text-success"><i
                                        class="ti ti-activity"></i></span> </div>
                                <div class="flex-grow-1">
                                    <h6 class="font-medium mb-0">620</h6>
                                    <p class="mb-0 text-[0.875rem] text-textmuted">View Count</p>
                                </div>
                                </div>
                            </div>
                            </div> <!-- End::Row-3.1 -->
                        </div>
                        <div class="box-footer !p-0">
                            <div class="px-4 py-3 flex items-center justify-between">
                            <h6 class="box-title mb-0">Recent Posts</h6> <a href="javascript:void(0);"
                                class="underline text-primary !text-[0.875rem]">View All</a>
                            </div> <!-- Start::list-group -->
                            <ul class="list-unstyled list-group list-group-flush">
                            <li
                                class="ti-list-group-item list-group-item-action !border-t border-defaultborder dark:border-defaultborder/10 px-4 py-4">
                                <div class="flex items-start justify-between">
                                <div class="flex flex-wrap">
                                    <div class="me-2"><span><img src="{{asset('build/assets/images/faces/12.jpg')}}"
                                        class="avatar avatar-md !rounded-full" alt="img"></span> </div>
                                    <div class="flex-grow-1"> <a href="javascript:void(0);" class="text-[0.875rem] font-medium"
                                        title="post1_link">Amet sanctus
                                        dolore amet, sed dolor et duo gubergren eos..</a>
                                    <p class="mb-0 mt-1 text-textmuted text-[0.75rem]"><i class="ti ti-clock me-1"></i>3 minutes
                                    </p>
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
                            </li>
                            <li
                                class="ti-list-group-item list-group-item-action !border-t border-defaultborder dark:border-defaultborder/10 px-4 py-4">
                                <div class="flex items-start justify-between">
                                <div class="flex flex-wrap">
                                    <div class="me-2"><img src="{{asset('build/assets/images/faces/13.jpg')}}"
                                        class="avatar avatar-md !rounded-full" alt="img"> </div>
                                    <div class="flex-grow-1"> <a href="javascript:void(0);" class="text-[0.875rem] font-medium"
                                        title="post2_link">Elitr ipsum magna
                                        takimata sit eirmod sea est dolor..</a>
                                    <p class="mb-0 mt-1 text-textmuted text-[0.75rem]"><i class="ti ti-clock me-1"></i>2.5 hours
                                    </p>
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
                            </li>
                            <li
                                class="ti-list-group-item list-group-item-action !border-t border-defaultborder dark:border-defaultborder/10 px-4 py-4">
                                <div class="flex items-start justify-between">
                                <div class="flex flex-wrap">
                                    <div class="me-2"> <img src="{{asset('build/assets/images/faces/2.jpg')}}"
                                        class="avatar avatar-md !rounded-full" alt="img"> </div>
                                    <div class="flex-grow-1"> <a href="javascript:void(0);" class="text-[0.875rem] font-medium"
                                        title="post3_link">Amet vero sit no at
                                        sit, lorem labore sed takimata diam vero.</a>
                                    <p class="mb-0 mt-1 text-textmuted text-[0.75rem]"><i class="ti ti-clock me-1"></i>13-10-22
                                    </p>
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
                            </li>
                            <li
                            class="ti-list-group-item list-group-item-action !border-t border-defaultborder dark:border-defaultborder/10 px-4 py-4">
                            <div class="flex items-start justify-between">
                                <div class="flex flex-wrap">
                                <div class="me-2"><img src="{{asset('build/assets/images/faces/17.jpg')}}"
                                    class="avatar avatar-md !rounded-full" alt="img"> </div>
                                <div class="flex-grow-1"> <a href="javascript:void(0);" class="text-[0.875rem] font-medium"
                                    title="post2_link">Elitr ipsum magna
                                    takimata sit eirmod sea est dolor..</a>
                                    <p class="mb-0 mt-1 text-textmuted text-[0.75rem]"><i class="ti ti-clock me-1"></i>5 hours
                                    </p>
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
                            </li>
                            </ul> <!-- End::list-group -->
                        </div>
                        </div> <!-- End::card -->
                    </div>
                    <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Recent Trasaction history</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Tracking Your Recent Financial
                                Activity,Reviewing Recent Financial Transactions.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive overflow-auto">
                            <table
                                class="table ti-custom-table-head whitespace-nowrap w-full table-bordered">
                                <thead class="bg-light dark:bg-black/20">
                                <tr>
                                    <th scope="col" class="text-center">S.No</th>
                                    <th scope="col">Recipient</th>
                                    <th scope="col">Transaction Id</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td class="text-center"> 01 </td>
                                    <td>
                                    <div class="flex items-center"> 
                                        <div class="flex-1 flex justify-between">
                                        <div class="flex-1 pos-relative"> <a aria-label="anchor" href="{{url('contacts')}}"
                                            class="masked-link"></a>
                                            <p class="mb-0 font-medium text-[0.925rem]">Arzil Merob</p><span
                                            class="text-[0.75rem] text-textmuted">Merob0198@.com</span>
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="text-primary">#abc0012311</span> </td>
                                    <td>
                                    <div class=""> $12,098 </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center"> Debited </div>
                                    </td>
                                    <td> <span class="badge bg-success/10 !text-success">Success</span> </td>
                                    <td>
                                    <div class="g-2"> <a aria-label="anchor" class="ti-btn  ti-btn-primary !border !border-primary/20 ti-btn-sm"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"> <span
                                            class="ri-pencil-line fs-14"></span> </a> <a aria-label="anchor"
                                        class="ti-btn  ti-btn-danger !border !border-danger/20 ti-btn-sm ms-2" data-bs-toggle="tooltip"
                                        data-bs-original-title="Delete"> <span class="ri-delete-bin-7-line fs-14"></span> </a>
                                    </div>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td class="text-center"> 02 </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="flex-1 flex justify-between">
                                        <div class="flex-1 pos-relative"> <a aria-label="anchor" href="{{url('contacts')}}"
                                            class="masked-link"></a>
                                            <p class="mb-0 font-medium text-[0.925rem]">Vrsiore Merob</p><span
                                            class="text-[0.75rem] text-textmuted">Vrsiore987@.com</span>
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="text-primary">#abc0012312</span> </td>
                                    <td>
                                    <div class=""> $62,098 </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center"> Debited </div>
                                    </td>
                                    <td> <span class="badge bg-success/10 !text-success">Success</span> </td>
                                    <td>
                                    <div class="g-2"> <a aria-label="anchor" class="ti-btn  ti-btn-primary !border !border-primary/20 ti-btn-sm"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"> <span
                                            class="ri-pencil-line fs-14"></span> </a> <a aria-label="anchor"
                                        class="ti-btn  ti-btn-danger !border !border-danger/20 ti-btn-sm ms-2" data-bs-toggle="tooltip"
                                        data-bs-original-title="Delete"> <span class="ri-delete-bin-7-line fs-14"></span> </a>
                                    </div>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td class="text-center"> 03 </td>
                                    <td>
                                    <div class="flex items-center"> 
                                        <div class="flex-1 flex justify-between">
                                        <div class="flex-1 pos-relative"> <a aria-label="anchor" href="{{url('contacts')}}"
                                            class="masked-link"></a>
                                            <p class="mb-0 font-medium text-[0.925rem]">Johber Akber</p><span
                                            class="text-[0.75rem] text-textmuted">Johber1123@.com</span>
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="text-primary">#abc0012313</span> </td>
                                    <td>
                                    <div class=""> $122,098 </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center"> Credited </div>
                                    </td>
                                    <td> <span class="badge bg-info/10 !text-info">Pending</span> </td>
                                    <td>
                                    <div class="g-2"> <a aria-label="anchor" class="ti-btn  ti-btn-primary !border !border-primary/20 ti-btn-sm"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"> <span
                                            class="ri-pencil-line fs-14"></span> </a> <a aria-label="anchor"
                                        class="ti-btn  ti-btn-danger !border !border-danger/20 ti-btn-sm ms-2" data-bs-toggle="tooltip"
                                        data-bs-original-title="Delete"> <span class="ri-delete-bin-7-line fs-14"></span> </a>
                                    </div>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td class="text-center"> 04 </td>
                                    <td>
                                    <div class="flex items-center"> 
                                        <div class="flex-1 flex justify-between">
                                        <div class="flex-1 pos-relative"> <a aria-label="anchor" href="{{url('contacts')}}"
                                            class="masked-link"></a>
                                            <p class="mb-0 font-medium text-[0.925rem]">Bobber John</p><span
                                            class="text-[0.75rem] text-textmuted">Bobber123@.com</span>
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="text-primary">#abc0012314</span> </td>
                                    <td>
                                    <div class=""> $502,098 </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center"> Credited </div>
                                    </td>
                                    <td> <span class="badge bg-danger/10 !text-danger">cancel</span> </td>
                                    <td>
                                    <div class="g-2"> <a aria-label="anchor" class="ti-btn  ti-btn-primary !border !border-primary/20 ti-btn-sm"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"> <span
                                            class="ri-pencil-line fs-14"></span> </a> <a aria-label="anchor"
                                        class="ti-btn  ti-btn-danger !border !border-danger/20 ti-btn-sm ms-2" data-bs-toggle="tooltip"
                                        data-bs-original-title="Delete"> <span class="ri-delete-bin-7-line fs-14"></span> </a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"> 05 </td>
                                    <td>
                                    <div class="flex items-center"> 
                                        <div class="flex-1 flex justify-between">
                                        <div class="flex-1 pos-relative"> <a aria-label="anchor" href="{{url('contacts')}}"
                                            class="masked-link"></a>
                                            <p class="mb-0 font-medium text-[0.925rem]">Allian Aksa</p><span
                                            class="text-[0.75rem] text-textmuted">Allian123@.com</span>
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td> <span class="text-primary">#abc0012315</span> </td>
                                    <td>
                                    <div class=""> $95,098 </div>
                                    </td>
                                    <td>
                                    <div class="flex items-center"> Debited </div>
                                    </td>
                                    <td> <span class="badge bg-success/10 !text-success">success</span> </td>
                                    <td>
                                    <div class="g-2"> <a aria-label="anchor" class="ti-btn  ti-btn-primary !border !border-primary/20 ti-btn-sm"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"> <span
                                            class="ri-pencil-line fs-14"></span> </a> <a aria-label="anchor"
                                        class="ti-btn  ti-btn-danger !border !border-danger/20 ti-btn-sm ms-2" data-bs-toggle="tooltip"
                                        data-bs-original-title="Delete"> <span class="ri-delete-bin-7-line fs-14"></span> </a>
                                    </div>
                                    </td>
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

@endsection
