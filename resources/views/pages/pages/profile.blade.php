
@extends('layouts.master')

@section('styles')

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Profile</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Pages <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Profile 
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
                        <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0">
                                    <div class="sm:flex items-start !py-6 px-4 main-profile-cover">
                                        <div>
                                            <span class="avatar avatar-xxl avatar-rounded online me-4">
                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-grow main-profile-info">
                                            <div class="flex items-center !justify-between">
                                                <h6 class="font-semibold mb-1 text-white text-[1rem]">Sonya Taylor</h6>
                                                <button type="button" class="ti-btn ti-btn-light !font-medium !gap-0"><i
                                                        class="ri-add-line me-1 align-middle inline-block"></i>Follow</button>
                                            </div>
                                            <p class="mb-1 !text-white  opacity-[0.7]">Chief Executive Officer (C.E.O)</p>
                                            <p class="text-[0.75rem] text-white mb-6 opacity-[0.5]">
                                                <span class="me-4 inline-flex"><i
                                                        class="ri-building-line me-1 align-middle"></i>Georgia</span>
                                                <span class="inline-flex"><i
                                                        class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span>
                                            </p>
                                            <div class="flex mb-0">
                                                <div class="me-6">
                                                    <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">113</p>
                                                    <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Projects</p>
                                                </div>
                                                <div class="me-6">
                                                    <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">12.2k
                                                    </p>
                                                    <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Followers</p>
                                                </div>
                                                <div class="me-6">
                                                    <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">128</p>
                                                    <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Following</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                                        <div class="mb-6">
                                            <p class="text-[.9375rem] mb-2 font-semibold">Professional Bio :</p>
                                            <p class="text-[0.75rem] text-textmuted opacity-[0.7] mb-0">
                                                I am <b class="!text-defaulttextcolor font-medium">Sonya Taylor,</b> here by conclude
                                                that,i am the founder and managing director of the prestigeous company name
                                                laugh at all and acts as the cheif executieve officer of the company.
                                            </p>
                                        </div>
                                        <div class="mb-0">
                                            <p class="text-[.9375rem] mb-2 font-semibold">Links :</p>
                                            <div class="mb-0">
                                                <p class="mb-1">
                                                    <a href="javascript:void(0)"
                                                        class="text-primary"><u>https://www.spruko.com/</u></a>
                                                </p>
                                                <p class="mb-0">
                                                    <a href="javascript:void(0)"
                                                        class="text-primary"><u>https://themeforest.net/user/
                                                            spruko/portfolio</u></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                                        <p class="text-[.9375rem] mb-2 me-6 font-semibold">Contact Information :</p>
                                        <div class="text-textmuted">
                                            <p class="mb-2">
                                                <span
                                                    class="avatar avatar-sm avatar-rounded me-2 bg-light text-textmuted">
                                                    <i
                                                        class="ri-mail-line align-middle text-[.875rem] text-textmuted"></i>
                                                </span>
                                                sonyataylor2531@gmail.com
                                            </p>
                                            <p class="mb-2">
                                                <span
                                                    class="avatar avatar-sm avatar-rounded me-2 bg-light text-textmuted">
                                                    <i
                                                        class="ri-phone-line align-middle text-[.875rem] text-textmuted"></i>
                                                </span>
                                                +(555) 555-1234
                                            </p>
                                            <p class="mb-0">
                                                <span
                                                    class="avatar avatar-sm avatar-rounded me-2 bg-light text-textmuted">
                                                    <i
                                                        class="ri-map-pin-line align-middle text-[.875rem] text-textmuted"></i>
                                                </span>
                                                MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="p-6 border-b dark:border-defaultborder/10 border-dashed sm:flex items-center">
                                        <p class="text-[.9375rem] mb-2 me-6 font-semibold">Social Networks :</p>
                                        <div class="btn-list mb-0 flex justify-center items-center">
                                            <button aria-label="button" type="button"
                                                class="ti-btn ti-btn-sm ti-btn-primary text-primary me-[.375rem] mb-1">
                                                <i class="ri-facebook-line font-semibold"></i>
                                            </button>
                                            <button aria-label="button" type="button"
                                                class="ti-btn ti-btn-sm ti-btn-secondary me-[.375rem] mb-1">
                                                <i class="ri-twitter-x-line"></i>
                                            </button>
                                            <button aria-label="button" type="button"
                                                class="ti-btn ti-btn-sm ti-btn-warning me-[.375rem] mb-1">
                                                <i class="ri-instagram-line font-semibold"></i>
                                            </button>
                                            <button aria-label="button" type="button"
                                                class="ti-btn ti-btn-sm ti-btn-success me-[.375rem] mb-1">
                                                <i class="ri-github-line font-semibold"></i>
                                            </button>
                                            <button aria-label="button" type="button"
                                                class="ti-btn ti-btn-sm ti-btn-danger me-[.375rem] mb-1">
                                                <i class="ri-youtube-line font-semibold"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-6 border-b dark:border-defaultborder/10 border-dashed">
                                        <p class="text-[.9375rem] mb-2 me-6 font-semibold">Skills :</p>
                                        <div>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-textmuted m-1">Cloud
                                                    computing</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-textmuted m-1">Data
                                                    analysis</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span
                                                    class="badge bg-light text-textmuted m-1">DevOps</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-textmuted m-1">Machine
                                                    learning</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span
                                                    class="badge bg-light text-textmuted m-1">Programming</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span
                                                    class="badge bg-light text-textmuted m-1">Security</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span
                                                    class="badge bg-light text-textmuted m-1">Python</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span
                                                    class="badge bg-light text-textmuted m-1">JavaScript</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span
                                                    class="badge bg-light text-textmuted m-1">Ruby</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span
                                                    class="badge bg-light text-textmuted m-1">PowerShell</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span
                                                    class="badge bg-light text-textmuted m-1">Statistics</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span
                                                    class="badge bg-light text-textmuted m-1">SQL</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body !p-0">
                                            <div
                                                class="!p-4 border-b dark:border-defaultborder/10 border-dashed md:flex items-center justify-between">
                                                <nav class="-mb-0.5 flex-wrap sm:flex md:space-x-6 rtl:space-x-reverse"
                                                    aria-label="Tabs" role="tablist">
                                                    <a class="w-full sm:w-auto flex active hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-sm py-2 px-4 text-primary text-sm"
                                                        href="javascript:void(0);" id="activity-tab"
                                                        data-hs-tab="#activity-tab-pane" aria-controls="activity-tab-pane">
                                                        Activity
                                                    </a>
                                                    <a class="w-full sm:w-auto flex hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-sm  py-2 px-4 text-primary text-sm"
                                                        href="javascript:void(0);" id="posts-tab"
                                                        data-hs-tab="#posts-tab-pane" aria-controls="posts-tab-pane">
                                                    Posts
                                                    </a>
                                                    <a class="w-full sm:w-auto flex hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-sm  py-2 px-4 text-primary text-sm"
                                                        href="javascript:void(0);" id="followers-tab"
                                                        data-hs-tab="#followers-tab-pane"
                                                        aria-controls="followers-tab-pane">
                                                    Following
                                                    </a>
                                                    <a class="w-full sm:w-auto flex hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-sm  py-2 px-4 text-primary text-sm"
                                                        href="javascript:void(0);" id="followers-tab"
                                                        data-hs-tab="#following-tab-pane"
                                                        aria-controls="following-tab-pane">
                                                    Followers
                                                    </a>
                                                    <a class="w-full sm:w-auto flex hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-sm  py-2 px-4 text-primary text-sm"
                                                        href="javascript:void(0);" id="gallery-tab"
                                                        data-hs-tab="#gallery-tab-pane" aria-controls="gallery-tab-pane">
                                                    Gallery
                                                    </a>
                                                    <a class="w-full sm:w-auto flex hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-sm  py-2 px-4 text-primary text-sm"
                                                        href="javascript:void(0);" id="settings-tab"
                                                        data-hs-tab="#settings-tab-pane" aria-controls="settings-tab-pane">
                                                    Settings
                                                    </a>
                                                </nav>
                                            </div>
                                            <div class="!p-4">
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane show active fade !p-0 !border-0"
                                                        id="activity-tab-pane" role="tabpanel"
                                                        aria-labelledby="activity-tab" tabindex="0">
                                                        <ul class="list-none profile-timeline">
                                                            <li>
                                                                <div>
                                                                    <span
                                                                        class="avatar avatar-sm bg-primary/10  !text-primary avatar-rounded profile-timeline-avatar">
                                                                        E
                                                                    </span>
                                                                    <p class="mb-2">
                                                                        <b>You</b> Commented on <b>alexander taylor</b> post
                                                                        <a class="text-secondary"
                                                                            href="javascript:void(0);"><u>#beautiful
                                                                                day</u></a>.<span
                                                                            class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">24,Dec
                                                                            2022 - 14:34</span>
                                                                    </p>
                                                                    <p
                                                                        class="profile-activity-media mb-0 flex w-full mt-2 sm:mt-0">
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-17.jpg')}}"
                                                                                alt="">
                                                                        </a>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-18.jpg')}}"
                                                                                alt="">
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div>
                                                                    <span
                                                                        class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                    </span>
                                                                    <p class="text-textmuted mb-2">
                                                                        <span class="text-default"><b>Json Smith</b> reacted
                                                                            to the post 👍</span>.<span
                                                                            class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">18,Dec
                                                                            2022 - 12:16</span>
                                                                    </p>
                                                                    <p class="text-textmuted mb-0">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                                                        elit. Repudiandae, repellendus rem rerum excepturi
                                                                        aperiam ipsam temporibus inventore ullam tempora
                                                                        eligendi libero sequi dignissimos cumque, et a sint
                                                                        tenetur consequatur omnis!
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div>
                                                                    <span
                                                                        class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </span>
                                                                    <p class="text-textmuted mb-2">
                                                                        <span class="text-default"><b>Alicia Keys</b> shared
                                                                            a document with <b>you</b></span>.<span
                                                                            class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">21,Dec
                                                                            2022 - 15:32</span>
                                                                    </p>
                                                                    <p
                                                                        class="profile-activity-media mb-0 flex w-full mt-2 sm:mt-0 items-center">
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/file-manager/3.png')}}"
                                                                                alt="">
                                                                        </a>
                                                                        <span
                                                                            class="text-[.6875rem] text-textmuted">432.87KB</span>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div>
                                                                    <span
                                                                        class="avatar avatar-sm bg-success/10 !text-success avatar-rounded profile-timeline-avatar">
                                                                        P
                                                                    </span>
                                                                    <p class="text-textmuted mb-4">
                                                                        <span class="text-default"><b>You</b> shared a post
                                                                            with 4 people <b>Simon,Sasha,
                                                                                Anagha,Hishen</b></span>.<span
                                                                            class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">28,Dec
                                                                            2022 - 18:46</span>
                                                                    </p>
                                                                    <p class="profile-activity-media mb-4">
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-75.jpg')}}"
                                                                                alt="">
                                                                        </a>
                                                                    </p>
                                                                    <div>
                                                                        <div class="avatar-list-stacked flex -space-x-2">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}"
                                                                                    alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}"
                                                                                    alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}"
                                                                                    alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}"
                                                                                    alt="img">
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div>
                                                                    <span
                                                                        class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                    </span>
                                                                    <p class="text-textmuted mb-1">
                                                                        <span class="text-default"><b>Melissa Blue</b> liked
                                                                            your post <b>travel excites</b></span>.<span
                                                                            class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">11,Dec
                                                                            2022 - 11:18</span>
                                                                    </p>
                                                                    <p class="text-textmuted">you are
                                                                        already feeling the tense atmosphere of the video
                                                                        playing in the background</p>
                                                                    <p class="profile-activity-media sm:flex mb-0">
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-59.jpg')}}"
                                                                                class="m-1" alt="">
                                                                        </a>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-60.jpg')}}"
                                                                                class="m-1" alt="">
                                                                        </a>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-61.jpg')}}"
                                                                                class="m-1" alt="">
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div>
                                                                    <span
                                                                        class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                        <img src="{{asset('build/assets/images/media/media-39.jpg')}}"
                                                                            alt="">
                                                                    </span>
                                                                    <p class="mb-1">
                                                                        <b>You</b> Commented on <b>Peter Engola</b> post <a
                                                                            class="text-secondary"
                                                                            href="javascript:void(0);"><u>#Mother
                                                                                Nature</u></a>.<span
                                                                            class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">24,Dec
                                                                            2022 - 14:34</span>
                                                                    </p>
                                                                    <p class="text-textmuted">Technology
                                                                        id developing rapidly kepp uo your work 👌</p>
                                                                    <p
                                                                        class="profile-activity-media mb-0 flex w-full mt-2 sm:mt-0">
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-26.jpg')}}"
                                                                                alt="">
                                                                        </a>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-29.jpg')}}"
                                                                                alt="">
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade !p-0 !border-0 hidden !rounded-md"
                                                        id="posts-tab-pane" role="tabpanel" aria-labelledby="posts-tab"
                                                        tabindex="0">
                                                        <ul class="list-group !rounded-md">
                                                            <li class="list-group-item">
                                                                <div class="sm:flex items-center leading-none">
                                                                    <div class="me-4">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow">
                                                                        <div class="flex">
                                                                            <input type="text"
                                                                                class="form-control !rounded-e-none !w-full"
                                                                                placeholder="Recipient's username"
                                                                                aria-label="Recipient's username with two button addons">
                                                                            <button aria-label="button"
                                                                                class="ti-btn ti-btn-light !rounded-none !mb-0"
                                                                                type="button"><i
                                                                                    class="bi bi-emoji-smile"></i></button>
                                                                            <button aria-label="button"
                                                                                class="ti-btn ti-btn-light !rounded-none !mb-0"
                                                                                type="button"><i
                                                                                    class="bi bi-paperclip"></i></button>
                                                                            <button aria-label="button"
                                                                                class="ti-btn ti-btn-light !rounded-none !mb-0"
                                                                                type="button"><i
                                                                                    class="bi bi-camera"></i></button>
                                                                            <button
                                                                                class="ti-btn bg-primary !mb-0 !rounded-s-none text-white"
                                                                                type="button">Post</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item mt-4" id="profile-posts-scroll">
                                                                <div class="grid grid-cols-12 gap-4">
                                                                    <div
                                                                        class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                                                                        <div
                                                                            class="rounded border dark:border-defaultborder/10">
                                                                            <div class="p-4 flex items-start flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow">
                                                                                    <p
                                                                                        class="mb-1 font-semibold leading-none">
                                                                                        You</p>
                                                                                    <p
                                                                                        class="text-[.6875rem] mb-2 text-textmuted">
                                                                                        24, Dec - 04:32PM</p>
                                                                                    <p
                                                                                        class="text-[0.75rem] text-textmuted mb-0">
                                                                                        Lorem ipsum dolor sit amet
                                                                                        consectetur adipisicing elit.</p>
                                                                                    <p
                                                                                        class="text-[0.75rem] text-textmuted mb-4">
                                                                                        As opposed to using 'Content here 👌
                                                                                    </p>
                                                                                    <div
                                                                                        class="flex items-center justify-between md:mb-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button type="button"
                                                                                                    class="ti-btn ti-btn-primary !me-[.375rem] !py-1 !px-2 !text-[0.75rem] !font-medium btn-wave">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn !me-[.375rem] ti-btn-sm ti-btn-success">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn ti-btn-sm ti-btn-danger">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex items-start">
                                                                                    <div>
                                                                                        <span
                                                                                            class="badge bg-primary/10 text-primary me-2">Fashion</span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div
                                                                                            class="hs-dropdown ti-dropdown">
                                                                                            <button aria-label="button"
                                                                                                type="button"
                                                                                                class="ti-btn ti-btn-sm ti-btn-light"
                                                                                                aria-expanded="false">
                                                                                                <i
                                                                                                    class="ti ti-dots-vertical"></i>
                                                                                            </button>
                                                                                            <ul
                                                                                                class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                        href="javascript:void(0);">Delete</a>
                                                                                                </li>
                                                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                        href="javascript:void(0);">Hide</a>
                                                                                                </li>
                                                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                        href="javascript:void(0);">Edit</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                                                                        <div
                                                                            class="rounded border dark:border-defaultborder/10">
                                                                            <div class="p-4 flex items-start flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow">
                                                                                    <p
                                                                                        class="mb-1 font-semibold leading-none">
                                                                                        You</p>
                                                                                    <p
                                                                                        class="text-[.6875rem] mb-2 text-textmuted">
                                                                                        26, Dec - 12:45PM</p>
                                                                                    <p
                                                                                        class="text-[0.75rem] text-textmuted mb-1">
                                                                                        Shared pictures with 4 of friends
                                                                                        <span>Hiren,Sasha,Biden,Thara</span>.
                                                                                    </p>
                                                                                    <div
                                                                                        class="flex leading-none justify-between mb-4">
                                                                                        <div>
                                                                                            <a aria-label="anchor"
                                                                                                href="javascript:void(0);">
                                                                                                <span
                                                                                                    class="avatar avatar-md me-1">
                                                                                                    <img src="{{asset('build/assets/images/media/media-52.jpg')}}"
                                                                                                        alt="">
                                                                                                </span>
                                                                                            </a>
                                                                                            <a aria-label="anchor"
                                                                                                href="javascript:void(0);">
                                                                                                <span
                                                                                                    class="avatar avatar-md me-1">
                                                                                                    <img src="{{asset('build/assets/images/media/media-56.jpg')}}"
                                                                                                        alt="">
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex items-center justify-between md:mb-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button type="button"
                                                                                                    class="ti-btn ti-btn-primary !me-[.375rem] !py-1 !px-2 !text-[0.75rem] !font-medium btn-wave">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn !me-[.375rem] ti-btn-sm ti-btn-success">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn ti-btn-sm ti-btn-danger">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="flex items-start">
                                                                                        <div>
                                                                                            <span
                                                                                                class="badge bg-success/10 !text-success me-2">Nature</span>
                                                                                        </div>
                                                                                        <div>
                                                                                            <div
                                                                                                class="hs-dropdown ti-dropdown">
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn ti-btn-sm ti-btn-light"
                                                                                                    aria-expanded="false">
                                                                                                    <i
                                                                                                        class="ti ti-dots-vertical"></i>
                                                                                                </button>
                                                                                                <ul
                                                                                                    class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                            href="javascript:void(0);">Delete</a>
                                                                                                    </li>
                                                                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                            href="javascript:void(0);">Hide</a>
                                                                                                    </li>
                                                                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                            href="javascript:void(0);">Edit</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="avatar-list-stacked block mt-4 text-end">
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}"
                                                                                                alt="img">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                                                                        <div
                                                                            class="rounded border dark:border-defaultborder/10">
                                                                            <div class="p-4 flex items-start flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow">
                                                                                    <p
                                                                                        class="mb-1 font-semibold leading-none">
                                                                                        You</p>
                                                                                    <p
                                                                                        class="text-[.6875rem] mb-2 text-textmuted">
                                                                                        29, Dec - 09:53AM</p>
                                                                                    <p
                                                                                        class="text-[0.75rem] text-textmuted mb-1">
                                                                                        Sharing an article that excites me
                                                                                        about nature more than what i
                                                                                        thought.</p>
                                                                                    <p class="mb-4 profile-post-link">
                                                                                        <a href="javascript:void(0);"
                                                                                            class="text-[0.75rem] text-primary">
                                                                                            <u>https://www.discovery.com/
                                                                                                nature/caring-for-coral</u>
                                                                                        </a>
                                                                                    </p>
                                                                                    <div
                                                                                        class="flex items-center justify-between md:mb-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button type="button"
                                                                                                    class="ti-btn ti-btn-primary !me-[.375rem] !py-1 !px-2 !text-[0.75rem] !font-medium btn-wave">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn !me-[.375rem] ti-btn-sm ti-btn-success">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn ti-btn-sm ti-btn-danger">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex items-start">
                                                                                    <div>
                                                                                        <span
                                                                                            class="badge bg-secondary/10 text-secondary me-2">Travel</span>
                                                                                    </div>
                                                                                    <div class="hs-dropdown ti-dropdown">
                                                                                        <button aria-label="button"
                                                                                            type="button"
                                                                                            class="ti-btn ti-btn-sm ti-btn-light"
                                                                                            aria-expanded="false">
                                                                                            <i
                                                                                                class="ti ti-dots-vertical"></i>
                                                                                        </button>
                                                                                        <ul
                                                                                            class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                    href="javascript:void(0);">Delete</a>
                                                                                            </li>
                                                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                    href="javascript:void(0);">Hide</a>
                                                                                            </li>
                                                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                    href="javascript:void(0);">Edit</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                                                                        <div
                                                                            class="rounded border dark:border-defaultborder/10">
                                                                            <div class="p-4 flex items-start flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow">
                                                                                    <p
                                                                                        class="mb-1 font-semibold leading-none">
                                                                                        You</p>
                                                                                    <p
                                                                                        class="text-[.6875rem] mb-2 text-textmuted">
                                                                                        22, Dec - 11:22PM</p>
                                                                                    <p
                                                                                        class="text-[0.75rem] text-textmuted mb-1">
                                                                                        Shared pictures with 3 of your
                                                                                        friends
                                                                                        <span>Maya,Jacob,Amanda</span>.
                                                                                    </p>
                                                                                    <div
                                                                                        class="flex leading-none justify-between mb-4">
                                                                                        <div>
                                                                                            <a aria-label="anchor"
                                                                                                href="javascript:void(0);">
                                                                                                <span
                                                                                                    class="avatar avatar-md me-1">
                                                                                                    <img src="{{asset('build/assets/images/media/media-40.jpg')}}"
                                                                                                        alt=""
                                                                                                        class="rounded-md">
                                                                                                </span>
                                                                                            </a>
                                                                                            <a aria-label="anchor"
                                                                                                href="javascript:void(0);">
                                                                                                <span
                                                                                                    class="avatar avatar-md me-1">
                                                                                                    <img src="{{asset('build/assets/images/media/media-45.jpg')}}"
                                                                                                        alt=""
                                                                                                        class="rounded-md">
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex items-center justify-between md:mb-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button type="button"
                                                                                                    class="ti-btn ti-btn-primary !me-[.375rem] !py-1 !px-2 !text-[0.75rem] !font-medium btn-wave">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn !me-[.375rem] ti-btn-sm ti-btn-success">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn ti-btn-sm ti-btn-danger">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="flex items-start">
                                                                                        <div>
                                                                                            <span
                                                                                                class="badge bg-success/10 text-success me-2">Nature</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="hs-dropdown ti-dropdown">
                                                                                            <button aria-label="button"
                                                                                                type="button"
                                                                                                class="ti-btn ti-btn-sm ti-btn-light"
                                                                                                aria-expanded="false">
                                                                                                <i
                                                                                                    class="ti ti-dots-vertical"></i>
                                                                                            </button>
                                                                                            <ul
                                                                                                class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                        href="javascript:void(0);">Delete</a>
                                                                                                </li>
                                                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                        href="javascript:void(0);">Hide</a>
                                                                                                </li>
                                                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                        href="javascript:void(0);">Edit</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="avatar-list-stacked block mt-4 text-end">
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="{{asset('build/assets/images/faces/16.jpg')}}"
                                                                                                alt="img">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                                                                        <div
                                                                            class="rounded border dark:border-defaultborder/10">
                                                                            <div class="p-4 flex items-start flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow">
                                                                                    <p
                                                                                        class="mb-1 font-semibold leading-none">
                                                                                        You</p>
                                                                                    <p
                                                                                        class="text-[.6875rem] mb-2 text-textmuted">
                                                                                        18, Dec - 12:28PM</p>
                                                                                    <p
                                                                                        class="text-[0.75rem] text-textmuted mb-1">
                                                                                        Followed this author for top class
                                                                                        themes with best code you can get in
                                                                                        the market.</p>
                                                                                    <p class="mb-4 profile-post-link">
                                                                                        <a href="javascript:void(0);"
                                                                                            class="text-[0.75rem] text-primary">
                                                                                            <u>https://themeforest.net/user/
                                                                                                spruko/portfolio</u>
                                                                                        </a>
                                                                                    </p>
                                                                                    <div
                                                                                        class="flex items-center justify-between md:mb-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button type="button"
                                                                                                    class="ti-btn ti-btn-primary !me-[.375rem] !py-1 !px-2 !text-[0.75rem] !font-medium btn-wave">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn !me-[.375rem] ti-btn-sm ti-btn-success">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn ti-btn-sm ti-btn-danger">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex items-start">
                                                                                    <div>
                                                                                        <span
                                                                                            class="badge bg-secondary/10 text-secondary me-2">Travel</span>
                                                                                    </div>
                                                                                    <div class="hs-dropdown ti-dropdown">
                                                                                        <button aria-label="button"
                                                                                            type="button"
                                                                                            class="ti-btn ti-btn-sm ti-btn-light"
                                                                                            aria-expanded="false">
                                                                                            <i
                                                                                                class="ti ti-dots-vertical"></i>
                                                                                        </button>
                                                                                        <ul
                                                                                            class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                    href="javascript:void(0);">Delete</a>
                                                                                            </li>
                                                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                    href="javascript:void(0);">Hide</a>
                                                                                            </li>
                                                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                    href="javascript:void(0);">Edit</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                                                                        <div
                                                                            class="rounded border dark:border-defaultborder/10">
                                                                            <div class="p-4 flex items-start flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow">
                                                                                    <p
                                                                                        class="mb-1 font-semibold leading-none">
                                                                                        You</p>
                                                                                    <p
                                                                                        class="text-[.6875rem] mb-2 text-textmuted">
                                                                                        02, Dec - 06:32AM</p>
                                                                                    <p
                                                                                        class="text-[0.75rem] text-textmuted mb-0">
                                                                                        Lorem ipsum dolor sit amet
                                                                                        consectetur adipisicing elit.</p>
                                                                                    <p
                                                                                        class="text-[0.75rem] text-textmuted mb-4">
                                                                                        There are many variations of
                                                                                        passages 👏😍</p>
                                                                                    <div
                                                                                        class="flex items-center justify-between md:mb-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button type="button"
                                                                                                    class="ti-btn ti-btn-primary !me-[.375rem] !py-1 !px-2 !text-[0.75rem] !font-medium btn-wave">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn !me-[.375rem] ti-btn-sm ti-btn-success">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button aria-label="button"
                                                                                                    type="button"
                                                                                                    class="ti-btn ti-btn-sm ti-btn-danger">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex items-start">
                                                                                    <div>
                                                                                        <span
                                                                                            class="badge bg-primary/10 text-primary me-2">Fashion</span>
                                                                                    </div>
                                                                                    <div class="hs-dropdown ti-dropdown">
                                                                                        <button aria-label="button"
                                                                                            type="button"
                                                                                            class="ti-btn ti-btn-sm ti-btn-light"
                                                                                            aria-expanded="false">
                                                                                            <i
                                                                                                class="ti ti-dots-vertical"></i>
                                                                                        </button>
                                                                                        <ul
                                                                                            class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                    href="javascript:void(0);">Delete</a>
                                                                                            </li>
                                                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                    href="javascript:void(0);">Hide</a>
                                                                                            </li>
                                                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                                    href="javascript:void(0);">Edit</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="text-center pt-4">
                                                                    <button type="button"
                                                                        class="ti-btn ti-btn-primary !font-medium">Show
                                                                        All</button>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade !p-0 !border-0 hidden" id="followers-tab-pane"
                                                        role="tabpanel" aria-labelledby="followers-tab" tabindex="0">
                                                        <div class="grid grid-cols-12 sm:gap-x-6">
                                                            <div
                                                                class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                                <div
                                                                    class="box !shadow-none border dark:border-defaultborder/10">
                                                                    <div class="box-body p-6">
                                                                        <div class="hs-dropdown ti-dropdown float-right">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true" aria-expanded="true">
                                                                                <i class="fe fe-more-vertical"></i> </a>
                                                                            <div
                                                                                class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-message-square me-2"></i>
                                                                                    Message</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-edit-2 me-2"></i>
                                                                                    Edit</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-eye me-2"></i> View</a>
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-trash-2 me-2"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <span class="avatar avatar-xl avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                            <div class="mt-2">
                                                                                <p class="mb-0 font-semibold">Samantha May
                                                                                </p>
                                                                                <p
                                                                                    class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                    samanthamay2912@gmail.com</p>
                                                                                <span
                                                                                    class="badge bg-info/10 rounded-full text-info">Team
                                                                                    Member</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-footer text-center">
                                                                        <div class="btn-list">
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">Unfollow</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                                <div
                                                                    class="box !shadow-none border dark:border-defaultborder/10">
                                                                    <div class="box-body p-6">
                                                                        <div class="hs-dropdown ti-dropdown float-right">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true" aria-expanded="true">
                                                                                <i class="fe fe-more-vertical"></i> </a>
                                                                            <div
                                                                                class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-message-square me-2"></i>
                                                                                    Message</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-edit-2 me-2"></i>
                                                                                    Edit</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-eye me-2"></i> View</a>
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-trash-2 me-2"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <span class="avatar avatar-xl avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                            <div class="mt-2">
                                                                                <p class="mb-0 font-semibold">Andrew
                                                                                    Garfield</p>
                                                                                <p
                                                                                    class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                    andrewgarfield98@gmail.com</p>
                                                                                <span
                                                                                    class="badge bg-success/10 text-success rounded-full">Team
                                                                                    Lead</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-footer text-center">
                                                                        <div class="btn-list">
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">Unfollow</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                                <div
                                                                    class="box !shadow-none border dark:border-defaultborder/10">
                                                                    <div class="box-body p-6">
                                                                        <div class="hs-dropdown ti-dropdown float-right">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true" aria-expanded="true">
                                                                                <i class="fe fe-more-vertical"></i> </a>
                                                                            <div
                                                                                class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-message-square me-2"></i>
                                                                                    Message</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-edit-2 me-2"></i>
                                                                                    Edit</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-eye me-2"></i> View</a>
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-trash-2 me-2"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <span class="avatar avatar-xl avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                            <div class="mt-2">
                                                                                <p class="mb-0 font-semibold">Jessica Cashew
                                                                                </p>
                                                                                <p
                                                                                    class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                    jessicacashew143@gmail.com</p>
                                                                                <span
                                                                                    class="badge bg-info/10 rounded-full text-info">Team
                                                                                    Member</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-footer text-center">
                                                                        <div class="btn-list">
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">Unfollow</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                                <div
                                                                    class="box !shadow-none border dark:border-defaultborder/10">
                                                                    <div class="box-body !p-6">
                                                                        <div class="hs-dropdown ti-dropdown float-right">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true" aria-expanded="true">
                                                                                <i class="fe fe-more-vertical"></i> </a>
                                                                            <div
                                                                                class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-message-square me-2"></i>
                                                                                    Message</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-edit-2 me-2"></i>
                                                                                    Edit</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-eye me-2"></i> View</a>
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-trash-2 me-2"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <span class="avatar avatar-xl avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                            <div class="mt-2">
                                                                                <p class="mb-0 font-semibold">Simon Cowan
                                                                                </p>
                                                                                <p
                                                                                    class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                    jessicacashew143@gmail.com</p>
                                                                                <span
                                                                                    class="badge bg-warning/10 text-warning rounded-full">Team
                                                                                    Manager</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-footer text-center">
                                                                        <div class="btn-list">
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">Unfollow</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                                <div
                                                                    class="box !shadow-none border dark:border-defaultborder/10">
                                                                    <div class="box-body p-6">
                                                                        <div class="hs-dropdown ti-dropdown float-right">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true" aria-expanded="true">
                                                                                <i class="fe fe-more-vertical"></i> </a>
                                                                            <div
                                                                                class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-message-square me-2"></i>
                                                                                    Message</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-edit-2 me-2"></i>
                                                                                    Edit</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-eye me-2"></i> View</a>
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-trash-2 me-2"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <span class="avatar avatar-xl avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                            <div class="mt-2">
                                                                                <p class="mb-0 font-semibold">Amanda nunes
                                                                                </p>
                                                                                <p
                                                                                    class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                    amandanunes45@gmail.com</p>
                                                                                <span
                                                                                    class="badge bg-info/10 rounded-full text-info">Team
                                                                                    Member</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-footer text-center">
                                                                        <div class="btn-list">
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">Unfollow</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                                <div
                                                                    class="box !shadow-none border dark:border-defaultborder/10">
                                                                    <div class="box-body p-6">
                                                                        <div class="hs-dropdown ti-dropdown float-right">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true" aria-expanded="true">
                                                                                <i class="fe fe-more-vertical"></i> </a>
                                                                            <div
                                                                                class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-message-square me-2"></i>
                                                                                    Message</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-edit-2 me-2"></i>
                                                                                    Edit</a> <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-eye me-2"></i> View</a>
                                                                                <a class="ti-dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-trash-2 me-2"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <span class="avatar avatar-xl avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                            <div class="mt-2">
                                                                                <p class="mb-0 font-semibold">Mahira Hose
                                                                                </p>
                                                                                <p
                                                                                    class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                    mahirahose9456@gmail.com</p>
                                                                                <span
                                                                                    class="badge bg-info/10 rounded-full text-info">Team
                                                                                    Member</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-footer text-center">
                                                                        <div class="btn-list">
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                            <button type="button"
                                                                                class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">Unfollow</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-span-12">
                                                                <div class="text-center !mt-4">
                                                                    <button type="button"
                                                                        class="ti-btn ti-btn-primary !font-medium btn-wave">Show
                                                                        All</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade !p-0 !border-0 hidden" id="following-tab-pane"
                                                    role="tabpanel" aria-labelledby="following-tab" tabindex="0">
                                                    <div class="grid grid-cols-12 sm:gap-x-6">
                                                        <div
                                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                            <div
                                                                class="box !shadow-none border dark:border-defaultborder/10">
                                                                <div class="box-body p-6">
                                                                    <div class="hs-dropdown ti-dropdown float-right">
                                                                        <a href="javascript:void(0);"
                                                                            class="option-dots"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="true">
                                                                            <i class="fe fe-more-vertical"></i> </a>
                                                                        <div
                                                                            class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-message-square me-2"></i>
                                                                                Message</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-eye me-2"></i> View</a>
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-trash-2 me-2"></i>
                                                                                Delete</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <span class="avatar avatar-xl avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}"
                                                                                alt="">
                                                                        </span>
                                                                        <div class="mt-2">
                                                                            <p class="mb-0 font-semibold">Alicia Sierra
                                                                            </p>
                                                                            <p
                                                                                class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                aliciasierra389@gmail.com</p>
                                                                            <span
                                                                                class="badge bg-info/10 rounded-full text-info">Team
                                                                                Member</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center">
                                                                    <div class="btn-list">
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">follow</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                            <div
                                                                class="box !shadow-none border dark:border-defaultborder/10">
                                                                <div class="box-body p-6">
                                                                    <div class="hs-dropdown ti-dropdown float-right">
                                                                        <a href="javascript:void(0);"
                                                                            class="option-dots"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="true">
                                                                            <i class="fe fe-more-vertical"></i> </a>
                                                                        <div
                                                                            class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-message-square me-2"></i>
                                                                                Message</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-eye me-2"></i> View</a>
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-trash-2 me-2"></i>
                                                                                Delete</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <span class="avatar avatar-xl avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}"
                                                                                alt="">
                                                                        </span>
                                                                        <div class="mt-2">
                                                                            <p class="mb-0 font-semibold">Samantha Mery</p>
                                                                            <p
                                                                                class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                samanthamery@gmail.com</p>
                                                                            <span
                                                                                class="badge bg-success/10 text-success rounded-full">Team
                                                                                Lead</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center">
                                                                    <div class="btn-list">
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">follow</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                            <div
                                                                class="box !shadow-none border dark:border-defaultborder/10">
                                                                <div class="box-body p-6">
                                                                    <div class="hs-dropdown ti-dropdown float-right">
                                                                        <a href="javascript:void(0);"
                                                                            class="option-dots"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="true">
                                                                            <i class="fe fe-more-vertical"></i> </a>
                                                                        <div
                                                                            class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-message-square me-2"></i>
                                                                                Message</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-eye me-2"></i> View</a>
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-trash-2 me-2"></i>
                                                                                Delete</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <span class="avatar avatar-xl avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}"
                                                                                alt="">
                                                                        </span>
                                                                        <div class="mt-2">
                                                                            <p class="mb-0 font-semibold">Juliana Pena
                                                                            </p>
                                                                            <p
                                                                                class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                juliapena555@gmail.com</p>
                                                                            <span
                                                                                class="badge bg-info/10 rounded-full text-info">Team
                                                                                Member</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center">
                                                                    <div class="btn-list">
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">follow</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                            <div
                                                                class="box !shadow-none border dark:border-defaultborder/10">
                                                                <div class="box-body !p-6">
                                                                    <div class="hs-dropdown ti-dropdown float-right">
                                                                        <a href="javascript:void(0);"
                                                                            class="option-dots"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="true">
                                                                            <i class="fe fe-more-vertical"></i> </a>
                                                                        <div
                                                                            class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-message-square me-2"></i>
                                                                                Message</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-eye me-2"></i> View</a>
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-trash-2 me-2"></i>
                                                                                Delete</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <span class="avatar avatar-xl avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}"
                                                                                alt="">
                                                                        </span>
                                                                        <div class="mt-2">
                                                                            <p class="mb-0 font-semibold">Adam Smith
                                                                            </p>
                                                                            <p
                                                                                class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                adamsmith99@gmail.com</p>
                                                                            <span
                                                                                class="badge bg-warning/10 text-warning rounded-full">Team
                                                                                Manager</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center">
                                                                    <div class="btn-list">
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">follow</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                            <div
                                                                class="box !shadow-none border dark:border-defaultborder/10">
                                                                <div class="box-body p-6">
                                                                    <div class="hs-dropdown ti-dropdown float-right">
                                                                        <a href="javascript:void(0);"
                                                                            class="option-dots"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="true">
                                                                            <i class="fe fe-more-vertical"></i> </a>
                                                                        <div
                                                                            class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]">
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-message-square me-2"></i>
                                                                                Message</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-eye me-2"></i> View</a>
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-trash-2 me-2"></i>
                                                                                Delete</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <span class="avatar avatar-xl avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}"
                                                                                alt="">
                                                                        </span>
                                                                        <div class="mt-2">
                                                                            <p class="mb-0 font-semibold">Farhaan Amhed
                                                                            </p>
                                                                            <p
                                                                                class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                farhaanahmed989@gmail.com</p>
                                                                            <span
                                                                                class="badge bg-info/10 rounded-full text-info">Team
                                                                                Member</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center">
                                                                    <div class="btn-list">
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">follow</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                            <div
                                                                class="box !shadow-none border dark:border-defaultborder/10">
                                                                <div class="box-body p-6">
                                                                    <div class="hs-dropdown ti-dropdown float-right">
                                                                        <a href="javascript:void(0);"
                                                                            class="option-dots"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="true">
                                                                            <i class="fe fe-more-vertical"></i> </a>
                                                                        <div
                                                                            class="hs-dropdown-menu ti-dropdown-menu hidden !z-[1000]   ">
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-message-square me-2"></i>
                                                                                Message</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a> <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-eye me-2"></i> View</a>
                                                                            <a class="ti-dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-trash-2 me-2"></i>
                                                                                Delete</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <span class="avatar avatar-xl avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}"
                                                                                alt="">
                                                                        </span>
                                                                        <div class="mt-2">
                                                                            <p class="mb-0 font-semibold">Mahira Hose
                                                                            </p>
                                                                            <p
                                                                                class="text-[0.75rem] opacity-[0.7] mb-1 text-textmuted">
                                                                                mahirahose9456@gmail.com</p>
                                                                            <span
                                                                                class="badge bg-info/10 rounded-full text-info">Team
                                                                                Member</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer text-center">
                                                                    <div class="btn-list">
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] me-1 ti-btn-light">Block</button>
                                                                        <button type="button"
                                                                            class="ti-btn btn-sm !py-1 !px-2 !text-[0.75rem] text-white bg-primary">follow</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-12">
                                                            <div class="text-center !mt-4">
                                                                <button type="button"
                                                                    class="ti-btn ti-btn-primary !font-medium btn-wave">Show
                                                                    All</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="tab-pane fade !p-0 !border-0 hidden" id="gallery-tab-pane"
                                                        role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">
                                                        <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-40.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-40.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-41.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-41.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-42.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-42.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-43.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-43.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-44.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-44.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-45.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-45.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-46.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-46.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-60.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-60.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-26.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-26.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-32.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-32.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-30.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-30.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12">
                                                                <a href="{{asset('build/assets/images/media/media-31.jpg')}}"
                                                                    class="glightbox card" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/media-31.jpg')}}"
                                                                        alt="image" class="rounded-md w-full">
                                                                </a>
                                                            </div>
                                                            <div class="col-span-12">
                                                                <div class="text-center mt-6">
                                                                    <button type="button"
                                                                        class="ti-btn ti-btn-primary !font-medium">Show
                                                                        All</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade !p-0 !border-0 hidden" id="settings-tab-pane"
                                                        role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                                                        <div class="mb-4 main-content-label">Personal Information</div>
                                        <form class="form-horizontal">
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Language</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default1">
                                                            <option>Us English</option>
                                                            <option>Arabic</option>
                                                            <option>Korean</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 main-content-label">Name</div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">User Name</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="User Name" value="Petey Cruiser">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">First Name</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="First Name" value="Petey">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">last Name</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="Last Name" value="Pechon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Nick Name</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="Nick Name" value="Petey">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Designation</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="Designation" value="Web Designer">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 main-content-label">Contact Info</div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Email<i>(required)</i></label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="Email" value="info@Valex.in">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Website</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="Website" value="@spruko.w">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Phone</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="phone number" value="+245 354 654">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Address</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="Address">San Francisco, CA</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 main-content-label">Social Info</div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Twitter</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="twitter" value="twitter.com/spruko.me">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Facebook</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="facebook" value="https://www.facebook.com/Redash">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Google+</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="google" value="spruko.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Linked in</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control"  placeholder="linkedin" value="linkedin.com/in/spruko">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Github</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <input type="text" class="form-control" placeholder="github" value="github.com/sprukos">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 main-content-label">About Yourself</div>
                                            <div class="form-group mb-3">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Biographical Info</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <textarea class="form-control" name="example-textarea-input" rows="4" placeholder="">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure..</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 main-content-label">Email Preferences</div>
                                            <div class="form-group mb-0">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div class="md:col-span-3 col-span-12">
                                                        <label class="form-label">Verified User</label>
                                                    </div>
                                                    <div class="md:col-span-9 col-span-12">
                                                        <div class="custom-controls-stacked">
                                                            <label class="me-1"><input checked="" type="checkbox" class="form-check-input mb-2 me-1 mt-1"><span> Accept to receive post or page notification emails</span></label>
                                                            <label class=""><input checked="" type="checkbox" class="form-check-input mb-2 me-1 mt-1"><span> Accept to receive email sent to multiple recipients</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="ti-btn ti-btn-primary-full float-end !my-3 waves-effect waves-light">Update Profile</button>
                                        </form>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

        <!-- Internal Profile JS -->
        @vite('resources/assets/js/profile.js')

@endsection
