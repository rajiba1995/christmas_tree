
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Contacts</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Apps <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Contacts 
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
                    
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="contact-header">
                                        <div class="sm:flex block items-center justify-between">
                                            <div class="h5 font-semibold mb-0">Contacts</div>
                                            <div class="flex sm:mt-0 mt-2 items-center">
                                                <div class="input-group">
                                                    <input type="text" class="form-control !rounded-s-sm w-full !bg-light !border-0" placeholder="Search Contact" aria-describedby="search-contact-member">
                                                    <button  aria-label="button" type="button" class="ti-btn ti-btn-light  !rounded-s-none !mb-0" id="search-contact-member"><i class="ri-search-line text-textmuted"></i></button>
                                                </div>
                                                <div class="hs-dropdown ti-dropdown ms-2">
                                                    <button  aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-primary w-[2.313rem] h-[2.313rem]" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Delete All</a></li>
                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Copy All</a></li>
                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                    </ul>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-secondary !ms-2 w-[2.313rem] h-[2.313rem]"><i class="ri-add-line"></i>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Add Contacts
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start ">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class=" mb-1 font-semibold text-[1rem]">
                                                    Melissa Jane
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">melissajane@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 354 2345
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start ">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class=" text-[1rem] mb-1 font-semibold">
                                                    Simon Cowall
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">simoncowal@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 873 8923
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class=" text-[1rem] mb-1 font-semibold">
                                                    Susana Sane
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">susanasane@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 347 0923
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Sahne Watson
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">shanewat@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 674 7824
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/media/media-39.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Dwayne Happy
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">dwayneh@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 985 2893
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Meisha Tite
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">meishatite@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 675 4680
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Andrew Gerfield
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">andrewger@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 765 8937
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Samantha Melon
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">samanthame@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 890 5687
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Elisha Smith
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">elishasmith@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 972 9883
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Devon Convoy
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">devoncon@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 693 7836
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3 bg-primary text-white font-medium">
                                                SJ
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Shensovic Jeremy
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">shensovi@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 238 2342
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Jason Mama
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">jasonmama@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 875 6789
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Monika Karen
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">monikakaren@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 568 9234
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/media/media-13.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Tom Holland
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">tomholland@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 892 4334
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body contact-action">
                                    <div class="contact-overlay"></div>
                                    <div class="flex items-start">
                                        <div class="flex flex-grow flex-wrap gap-2">
                                            <div class="avatar avatar-xl avatar-rounded me-3">
                                                <img src="{{asset('build/assets/images/media/media-36.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-[1rem] mb-1 font-semibold">
                                                    Anelica Julie
                                                </h6>
                                                <p class="mb-1 text-textmuted contact-mail text-truncate">angelicaj@gmail.com</p>
                                                <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                    +1(555) 882 3445
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-end">
                                            <div class="flex items-center mb-4">
                                                <button aria-label="button" class="ti-btn !py-[0.14rem] me-2 !px-2 ti-btn-light" type="button">
                                                    <i class="ri-heart-3-fill text-danger"></i>
                                                </button>
                                                <div class="hs-dropdown ti-dropdwon">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                        <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                    View Contact
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation" class="mb-4">
                        <ul class="ti-pagination !justify-end py-[0.375rem] px-3 text-[1rem] flex flex-row">
                            <li class="page-item disabled"><a class="page-link py-[0.375rem] px-3" href="javascript:void(0);">Previous</a></li>
                            <li class="page-item"><a class="page-link py-[0.375rem] px-3" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link py-[0.375rem] px-3" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link py-[0.375rem] px-3" href="javascript:void(0);">Next</a></li>
                        </ul>
                    </nav>
                    <!-- End::row-1 -->

@endsection

@section('scripts')
	


@endsection
