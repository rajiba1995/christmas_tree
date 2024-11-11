
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
        
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                        <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Chat</h5>
                        <nav>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Mail <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                                </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Chat 
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

                    <div class="main-chart-wrapper p-2 gap-2 lg:flex">
                        <div class="chat-info border dark:border-defaultborder/10">
                            <a aria-label="anchor" href="javascript:void(0)" class="ti-btn bg-secondary text-white !font-medium ti-btn-icon !rounded-full chat-add-icon">
                                <i class="ri-add-line"></i>
                            </a>
                            <div class="flex items-center justify-between w-full p-4 border-b dark:border-defaultborder/10">
                                <div>
                                    <h5 class="font-semibold mb-0 text-[1.25rem] !text-defaulttextcolor dark:text-defaulttextcolor/70">Messages</h5>
                                </div>
                                <div class="hs-dropdown ti-dropdown">
                                    <button aria-label="button" class="ti-btn ti-btn-icon ti-btn-secondary text-secondary"
                                        type="button" aria-expanded="false">
                                        <i class="ri-settings-3-line"></i>
                                    </button>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                            href="javascript:void(0);">Action</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                            href="javascript:void(0);">Another action</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                            href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-search p-4 border-b dark:border-defaultborder/10">
                                <div class="input-group">
                                    <input type="text" class="form-control !bg-light border-0 !rounded-s-md" placeholder="Search Chat"
                                        aria-describedby="button-addon2">
                                    <button aria-label="button" class="ti-btn ti-btn-light !rounded-s-none !mb-0" type="button" id="button-addon2"><i
                                            class="ri-search-line text-textmuted"></i></button>
                                </div>
                            </div>
                            <nav class="flex border-b border-defaultborder dark:border-defaultborder/10" aria-label="Tabs"  role="tablist">
                                <a class="hs-tab-active:border-b-2 hs-tab-active:border-b-primary hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer border-e dark:border-defaultborder/10 text-defaulttextcolor py-2 px-4 flex-grow  text-sm font-medium text-center rounded-none active" id="users-item" data-hs-tab="#users-tab-pane" aria-controls="users-tab-pane">
                                Recent
                                </a>
                                <a class="hs-tab-active:border-b-2 hs-tab-active:border-b-primary hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer border-e dark:border-defaultborder/10 text-defaulttextcolor py-2 px-4 text-sm flex-grow font-medium text-center  rounded-none " id="groups-item" data-hs-tab="#groups-tab-pane" aria-controls="groups-tab-pane">
                                Groups
                                </a>
                                <a class="hs-tab-active:border-b-2 hs-tab-active:border-b-primary hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-4 text-sm flex-grow font-medium text-center  rounded-none " id="calls-item" data-hs-tab="#calls-tab-pane" aria-controls="calls-tab-pane">
                                Calls
                                </a>
                            </nav>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active !border-0 chat-users-tab" id="users-tab-pane" aria-labelledby="users-item" role="tabpanel" tabindex="0">
                                    <ul class="list-none mb-0 mt-2 chat-users-tab" id="chat-msg-scroll">
                                        <li class="!pb-0 !pt-0">
                                            <p class="text-textmuted text-[0.6875rem] font-semibold mb-2 opacity-[0.7]">ACTIVE CHATS</p>
                                        </li>
                                        <li class="checkforactive">
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Sujika','5','online')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md online me-2 avatar-rounded">
                                                            <img  src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Sujika <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">1:32PM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate">Need to go for lunch?</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="checkforactive">
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Emiley Jackson','2','online')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md online me-2 avatar-rounded">
                                                            <img  src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Emiley Jackson <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">12:24PM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0 chat-msg-typing ">
                                                            <span class="chat-msg text-truncate">Typing...</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                            <span
                                                                class="badge bg-success/10 !rounded-full text-success ltr:float-right rtl:float-left">2</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-msg-unread border-s-2 border-s-primary checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'McGreggor','10','online')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md online me-2 avatar-rounded">
                                                            <img  src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            McGreggor <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">1:16PM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate font-semibold text-textmuted">Nice to meet you 😊</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="checkforactive">
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Alissa','8','online')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md online me-2 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Alissa <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">12:45PM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate">Chat with you
                                                                later,bye</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="!pb-0 !pt-0">
                                            <p class="text-textmuted text-[0.6875rem] font-semibold mb-2 opacity-[0.7]">ALL CHATS</p>
                                        </li>
                                        <li class="chat-inactive checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Andreas','11','offline')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md offline me-2 avatar-rounded" >
                                                            <img  src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Andreas <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">11:54AM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate">Congratulations on your new
                                                                project</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-inactive checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Melissa Sean','3','offline')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                            <img  src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Melissa Sean <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">9:45AM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate">Nice work,Congrats
                                                                👏</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-inactive checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Samantha Paul','6','offline')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                            <img  src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Samantha Paul <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">8:31AM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate">Great work keep it up
                                                                :-)</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-inactive checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Megan Fox','4','offline')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Megan Fox <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">7:23AM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate">You are need to be
                                                                appreaciated for what you have done,congs</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-inactive checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Nicholas Sams','13','offline')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Nicholas Sams <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">10:22AM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate">Great Project</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-inactive checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Pope Johnson','15','offline')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Pope Johnson <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">9:10AM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate">Hike management
                                                                fixed</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade !border-0 chat-groups-tab hidden" id="groups-tab-pane" aria-labelledby="groups-item" role="tabpanel" tabindex="0">
                                    <ul class="list-none mb-0 mt-2">
                                        <li class="!pb-0">
                                            <p class="text-textmuted text-[0.6875rem] font-semibold mb-1 opacity-[0.7]">MY CHAT GROUPS</p>
                                        </li>
                                        <li>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="mb-0">1) Family Together</p>
                                                    <p class="mb-0"><span class="badge bg-success/10 text-success">4
                                                            Online</span></p>
                                                </div>
                                                <div class="avatar-list-stacked flex -space-x-2 my-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                                        href="javascript:void(0);">
                                                        +19
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="mb-0">2) Work Buddies </p>
                                                    <p class="mb-0"><span class="badge bg-secondary/10 text-secondary">32
                                                            Online</span></p>
                                                </div>
                                                <div class="avatar-list-stacked flex -space-x-2 my-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                                        href="javascript:void(0);">
                                                        +123
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="mb-0">3) Friends Forever</p>
                                                    <p class="mb-0"><span class="badge bg-warning/10 text-warning">3
                                                            Online</span></p>
                                                </div>
                                                <div class="avatar-list-stacked flex -space-x-2 my-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                                        href="javascript:void(0);">
                                                        +15
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="mb-0">4) Social Media Deals</p>
                                                    <p class="mb-0"><span class="badge bg-danger/10 text-danger">5
                                                            Online</span></p>
                                                </div>
                                                <div class="avatar-list-stacked flex -space-x-2 my-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                                        href="javascript:void(0);">
                                                        +28
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="mb-0">4) Apartment Group</p>
                                                    <p class="mb-0"><span class="badge bg-light text-dark">0 Online</span>
                                                    </p>
                                                </div>
                                                <div class="avatar-list-stacked flex -space-x-2 my-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                                        href="javascript:void(0);">
                                                        +53
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-none !mb-0 mt-2 ">
                                        <li class="!pb-0">
                                            <p class="text-textmuted text-[0.6875rem] font-semibold mb-1 opacity-[0.7]">GROUP CHATS</p>
                                        </li>
                                        <li class="checkforactive">
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Family Together 😍','17','online')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md online me-2 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/17.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold" >
                                                            Family Together 😍 <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">12:24PM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0 chat-msg-typing ">
                                                            <span class="chat-msg text-truncate">Hira Typing...</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                            <span
                                                                class="badge bg-success/10 !rounded-full !text-success ltr:float-right rtl:float-left">2</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-msg-unread checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Work Buddies','18','online')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md online me-2 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/18.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold" >
                                                            Work Buddies <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">1:16PM</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span class="chat-msg text-truncate"><span
                                                                    class="group-indivudial">Rams:</span>Happy to be part of
                                                                this group</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-inactive checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Friends Forever 😎','19','offline')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/19.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Friends Forever 😎 <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">3 days
                                                                ago</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span
                                                                class="chat-msg text-truncate">Simon,Melissa,Amanda,Patrick,Siddique</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-inactive checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Social Media Deals','20','offline')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                            <img  src="{{asset('build/assets/images/faces/20.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Social Media Deals <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">5 days
                                                                ago</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span
                                                                class="chat-msg text-truncate">Kamalan,Subha,Ambrose,Kiara,Jackson</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="chat-inactive checkforactive" >
                                            <a href="javascript:void(0);" onclick="changeTheInfo(this,'Apartment Group','21','offline')">
                                                <div class="flex items-start">
                                                    <div class="me-1 leading-none">
                                                        <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">
                                                            Apartment Group <span
                                                                class="ltr:float-right rtl:float-left text-textmuted font-normal text-[0.6875rem]">12 days
                                                                ago</span>
                                                        </p>
                                                        <p class="text-[0.75rem] mb-0">
                                                            <span
                                                                class="chat-msg text-truncate">Subman,Rajen,Kairo,Dibasha,Alexa</span>
                                                            <span class="chat-read-icon ltr:float-right rtl:float-left align-middle"><i
                                                                    class="ri-check-double-fill"></i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade !border-0 chat-calls-tab hidden" id="calls-tab-pane" role="tabpanel" aria-labelledby="calls-item"  tabindex="0">
                                    <ul class="list-none !mb-0 mt-2 chat-calls-tab">
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md online me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Sujika
                                                        <span class="ms-1 incoming-call-success"><i
                                                                class="ti ti-arrow-down-left"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] !mb-0">
                                                        <span class="text-textmuted text-truncate">Today,12:47PM</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-phone"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li >
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md online me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Melissa
                                                        <span class="ms-1 outgoing-call-failed"><i
                                                                class="ti ti-arrow-up-right"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">Today,10:27AM</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-phone"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Sharukh Sam
                                                        <span class="ms-1 outgoing-call-success"><i
                                                                class="ti ti-arrow-up-right"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">Yesterday,12:45PM</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-video"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Kiram Kumal
                                                        <span class="ms-1 incoming-call-success"><i
                                                                class="ti ti-arrow-down-left"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">3 Days ago</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-phone"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Amanda Sams
                                                        <span class="ms-1 incoming-call-success"><i
                                                                class="ti ti-arrow-down-left"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">22, Oct 2022</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-video"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Azimo Peter
                                                        <span class="ms-1 incoming-call-failed"><i
                                                                class="ti ti-arrow-up-right"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">24, Oct 2022</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-phone"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Sierra Adams
                                                        <span class="ms-1 incoming-call-success"><i
                                                                class="ti ti-arrow-down-left"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">22, Oct 2022</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-phone"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md online me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Dimple Kanns
                                                        <span class="ms-1 incoming-call-success"><i
                                                                class="ti ti-arrow-down-left"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">13, Oct 2022</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-video"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md online me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Adrea Jaremiah
                                                        <span class="ms-1 outgoing-call-failed"><i
                                                                class="ti ti-arrow-up-right"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">13, Sep 2022</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-phone"></i>
                                                    </button>
                                                </div>
                                                </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Anjaneliyu
                                                        <span class="ms-1 outgoing-call-success"><i
                                                                class="ti ti-arrow-up-right"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">10, July 2022</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-phone"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-1 leading-none">
                                                    <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-grow my-auto">
                                                    <p class="mb-0 font-semibold">
                                                        Jason Steph
                                                        <span class="ms-1 incoming-call-success"><i
                                                                class="ti ti-arrow-down-left"></i></span>
                                                    </p>
                                                    <p class="text-[0.75rem] mb-0">
                                                        <span class="text-textmuted text-truncate">1, Apr 2022</span>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary">
                                                        <i class="ti ti-phone"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-chat-area border dark:border-defaultborder/10">
                            <div class="sm:flex items-center p-2 border-b dark:border-defaultborder/10">
                                <div class="flex items-center leading-none">
                                    <span class="avatar avatar-lg online me-4 avatar-rounded chatstatusperson">
                                        <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    </span>
                                    <div class="flex-grow">
                                        <p class="mb-1 font-semibold text-[.875rem]">
                                            <a href="javascript:void(0);" class="chatnameperson responsive-userinfo-open !text-defaulttextcolor dark:text-defaulttextcolor/70">Emiley Jackson</a>
                                        </p>
                                        <p class="text-textmuted mb-0 chatpersonstatus !text-defaultsize">online</p>
                                    </div>
                                </div>
                                <div class="flex ms-auto">
                                    <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-outline-light dark:!bg-bodybg  hover:!text-defaulttextcolor dark:!border-defaultborder/10 !text-[0.95rem] !ms-2 font-semibold">
                                        <i class="ti ti-phone dark:text-defaulttextcolor/70 dark:bg-bodybg !text-defaulttextcolor"></i>
                                    </button>
                                    <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-outline-light dark:!bg-bodybg  hover:!text-defaulttextcolor dark:!border-defaultborder/10 !text-[0.95rem] !ms-2 font-semibold">
                                        <i class="ti ti-video dark:text-defaulttextcolor/70 dark:bg-bodybg !text-defaulttextcolor"></i>
                                    </button>
                                    <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-outline-light dark:!bg-bodybg  hover:!text-defaulttextcolor dark:!border-defaultborder/10 !text-[0.95rem] !ms-2 font-semibold"  data-hs-overlay="#user-details">
                                        <i class="ti ti-user-circle dark:text-defaulttextcolor/70 dark:bg-bodybg !text-defaulttextcolor"></i>
                                    </button>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-icon ti-btn-outline-light dark:!bg-bodybg  hover:!text-defaulttextcolor dark:!border-defaultborder/10 !text-[0.95rem] !ms-2 font-semibold"
                                        aria-expanded="false">
                                        <i class="fe fe-more-vertical text-[0.8rem] dark:text-defaulttextcolor/70 !text-defaulttextcolor"></i>
                                        </a>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                            href="javascript:void(0);">Profile</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                            href="javascript:void(0);">Clear Chat</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                            href="javascript:void(0);">Delete User</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                href="javascript:void(0);">Block User</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                    href="javascript:void(0);">Report</a></li>
                                        </ul>
                                    </div>
                                    <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-outline-light dark:bg-bodybg  !text-[0.95rem] !ms-2 font-semibold responsive-chat-close">
                                        <i class="ri-close-fill dark:text-defaulttextcolor/70 text-!black"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chat-content" id="main-chat-content">
                                <ul class="list-none">
                                    <li class="chat-day-label">
                                        <span>Today</span>
                                    </li>
                                    <li class="chat-item-start">
                                        <div class="chat-list-inner">
                                            <div class="chat-user-profile">
                                                <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                                    <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                            <div class="ms-4">
                                                <span class="chatting-user-info">
                                                    <span class="chatnameperson">Emiley Jackson</span> <span class="msg-sent-time">11:48PM</span>
                                                </span>
                                                <div class="main-chat-msg">
                                                    <div>
                                                        <p class="mb-0">Nice to meet you 😀</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-item-end">
                                        <div class="chat-list-inner">
                                            <div class="me-3">
                                                <span class="chatting-user-info">
                                                    <span class="msg-sent-time"><span class="chat-read-mark align-middle inline-flex"><i
                                                                class="ri-check-double-line"></i></span>11:50PM</span> You
                                                </span>
                                                <div class="main-chat-msg">
                                                    <div>
                                                        <p class="mb-0">It is a long established fact that a reader will be
                                                            distracted by the readable content of a page when looking at its
                                                            layout</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-user-profile">
                                                <span class="avatar avatar-md online avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-item-start">
                                        <div class="chat-list-inner">
                                            <div class="chat-user-profile">
                                                <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                                    <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                            <div class="ms-3">
                                                <span class="chatting-user-info">
                                                    <span class="chatnameperson">Emiley Jackson</span> <span class="msg-sent-time">11:51PM</span>
                                                </span>
                                                <div class="main-chat-msg">
                                                    <div>
                                                        <p class="mb-0">Who are you ?</p>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">I don't know anyone named jeremiah.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-item-end">
                                        <div class="chat-list-inner">
                                            <div class="me-3">
                                                <span class="chatting-user-info">
                                                    <span class="msg-sent-time"><span class="chat-read-mark align-middle inline-flex"><i
                                                                class="ri-check-double-line"></i></span>11:52PM</span> You
                                                </span>
                                                <div class="main-chat-msg">
                                                    <div>
                                                        <p class="mb-0">Some of the recent images taken are nice 👌</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-user-profile">
                                                <span class="avatar avatar-md online avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-item-start">
                                        <div class="chat-list-inner">
                                            <div class="chat-user-profile">
                                                <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                                    <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                            <div class="ms-3">
                                                <span class="chatting-user-info">
                                                    <span class="chatnameperson">Emiley Jackson</span> <span class="msg-sent-time">11:55PM</span>
                                                </span>
                                                <div class="main-chat-msg">
                                                    <div>
                                                        <p class="mb-0">Here are some of them have a look</p>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 sm:flex block">
                                                            <a aria-label="anchor" href="{{url('gallery')}}" class="avatar avatar-xl m-1 "><img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt="" class="rounded-md"></a>
                                                            <a aria-label="anchor" href="{{url('gallery')}}" class="avatar avatar-xl m-1 "><img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="" class="rounded-md"></a>
                                                            <a aria-label="anchor" href="{{url('gallery')}}" class="avatar avatar-xl m-1 "><img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt="" class="rounded-md"></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-item-end">
                                        <div class="chat-list-inner">
                                            <div class="me-4">
                                                <span class="chatting-user-info">
                                                    <span class="msg-sent-time"><span class="chat-read-mark align-middle inline-flex"><i
                                                                class="ri-check-double-line"></i></span>11:52PM</span> You
                                                </span>
                                                <div class="main-chat-msg">
                                                    <div class="flex">
                                                        <a aria-label="anchor" href="javascript:void(0)" class="text-white"><i
                                                                class="ri-play-circle-line align-middle"></i></a>
                                                        <span class="mx-1 flex flex-wrap">
                                                            <svg width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                            <svg class="chat_audio" width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                            <svg class="chat_audio" width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                            <svg class="chat_audio" width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                            <svg class="chat_audio" width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                            <svg class="chat_audio" width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                            <svg class="chat_audio" width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                            <svg class="chat_audio" width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                            <svg class="chat_audio" width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                            <svg class="chat_audio" width="20" height="20">
                                                                <defs></defs>
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                        height="20">
                                                                        <path
                                                                            d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                            fill="rgba(255, 255, 255, 0.5)"
                                                                            ></path>
                                                                    </svg></g>
                                                            </svg>
                                                        </span>
                                                        <a aria-label="anchor" href="javascript:void(0)" class="text-white"><i
                                                                class="ri-download-2-line align-middle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-user-profile">
                                                <span class="avatar avatar-md online avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-item-start">
                                        <div class="chat-list-inner">
                                            <div class="chat-user-profile">
                                                <span class="avatar avatar-md online avatar-rounded">
                                                    <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                            <div class="ms-3 mb-3 sm:mb-0">
                                                <span class="chatting-user-info chatnameperson">
                                                    Emiley Jackson <span class="msg-sent-time">11:45PM</span>
                                                </span>
                                                <div class="main-chat-msg">
                                                    <div>
                                                        <p class="mb-0">Happy to talk with you,chat you later 👋</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-footer">
                                <input class="form-control w-full !rounded-md" placeholder="Type your message here..." type="text">
                                <a aria-label="anchor" class="ti-btn ti-btn-icon !mx-2 ti-btn-success" href="javascript:void(0)">
                                    <i class="ri-emotion-line"></i>
                                </a>
                                <a aria-label="anchor" class="ti-btn bg-primary text-white  ti-btn-icon ti-btn-send" href="javascript:void(0)">
                                    <i class="ri-send-plane-2-line"></i>
                                </a>
                            </div>
                        </div>
                    
                        <div id="user-details"
                        class="hs-overlay hidden ti-offcanvas ti-offcanvas-right !z-[105] !max-w-[22.975rem]" tabindex="-1">
                        <div class="ti-offcanvas-header">
                            <h6 class="ti-offcanvas-title">
                            User Details
                            </h6>
                            <button type="button"
                                class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-textmuted dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                data-hs-overlay="#user-details">
                                <span class="sr-only">Close modal</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="ti-offcanvas-body !h-[90%] !p-0">
                            <div class="chat-user-details !border-0 dark:border-defaultborder/10" id="chat-user-details">
                                <div class="text-center mb-[3rem]">
                                    <span class="avatar avatar-rounded online avatar-xxl me-2 mb-4 chatstatusperson">
                                        <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                    </span>
                                    <p class="mb-1 text-[0.9375rem] font-semibold text-defaulttextcolor dark:text-defaulttextcolor/70 leading-none chatnameperson ">Emiley Jackson</p>
                                    <p class="text-[0.75rem] text-textmuted !mb-4"><span class="chatnameperson">emaileyjackson2134</span>@gmail.com</p>
                                    <p class="text-center mb-0">
                                        <button type="button" aria-label="button" class="ti-btn ti-btn-icon !rounded-full ti-btn-primary"><i
                                                class="ri-phone-line"></i></button>
                                        <button type="button" aria-label="button" class="ti-btn ti-btn-icon !rounded-full ti-btn-primary !ms-2"><i
                                                class="ri-video-add-line"></i></button>
                                        <button type="button" aria-label="button" class="ti-btn ti-btn-icon !rounded-full ti-btn-primary !ms-2"><i
                                                class="ri-chat-1-line"></i></button>
                                    </p>
                                </div>
                                <div class="mb-[3rem]">
                                    <div class="font-semibold mb-6 dark:text-defaulttextcolor/70  text-defaultsize">Shared Files
                                        <span class="badge bg-primary/10 !rounded-full text-primary ms-1">4</span>
                                        <span class="ltr:float-right rtl:float-left text-[0.6875rem]"><a href="javascript:void(0);" class="text-primary underline"><u>View All</u></a></span>
                                    </div>
                                    <ul class="shared-files list-none">
                                        <li class="!mb-4">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="shared-file-icon">
                                                        <i class="ti ti-file-text"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <p class="text-[0.75rem] font-semibold mb-0 dark:text-defaulttextcolor/70 ">Project Details.pdf</p>
                                                    <p class="mb-0 text-textmuted text-[0.6875rem]">24,Oct 2022 - 14:24PM</p>
                                                </div>
                                                <div class="!text-[1.125rem]">
                                                    <a aria-label="anchor" href="javascript:void(0)"><i class="ri-download-2-line text-textmuted"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="!mb-4">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="shared-file-icon">
                                                        <i class="ri-image-line"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <p class="text-[0.75rem] font-semibold mb-0 dark:text-defaulttextcolor/70">Img_02.Jpg</p>
                                                    <p class="mb-0 text-textmuted text-[0.6875rem]">22,Oct 2022 - 10:19AM</p>
                                                </div>
                                                <div class="!text-[1.125rem]">
                                                    <a aria-label="anchor" href="javascript:void(0)"><i class="ri-download-2-line text-textmuted"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="!mb-4">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="shared-file-icon">
                                                        <i class="ri-image-line"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <p class="text-[0.75rem] font-semibold mb-0 dark:text-defaulttextcolor/70">Img_15.Jpg</p>
                                                    <p class="mb-0 text-textmuted text-[0.6875rem]">22,Oct 2022 - 10:18AM</p>
                                                </div>
                                                <div class="!text-[1.125rem]">
                                                    <a aria-label="anchor" href="javascript:void(0)"><i class="ri-download-2-line text-textmuted"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <span class="shared-file-icon">
                                                        <i class="ri-video-line"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <p class="text-[0.75rem] font-semibold mb-0 dark:text-defaulttextcolor/70">Video_15_02_2022.MP4</p>
                                                    <p class="mb-0 text-textmuted text-[0.6875rem]">22,Oct 2022 - 10:18AM</p>
                                                </div>
                                                <div class="">
                                                    <a aria-label="anchor" href="javascript:void(0)"><i class="ri-download-2-line text-textmuted !text-[1.125rem]"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-0">
                                    <div class="font-semibold mb-4 text-defaultsize dark:text-defaulttextcolor/70">Photos &amp; Media
                                        <span class="badge bg-primary/10 !rounded-full text-primary ms-1">22</span>
                                        <span class="ltr:float-right rtl:float-left text-[0.6875rem]"><a href="javascript:void(0);" class="text-primary underline"><u>View All</u></a></span>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-[1rem]">
                                        <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-4">
                                            <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                <img src="{{asset('build/assets/images/media/media-56.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-4">
                                            <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                <img src="{{asset('build/assets/images/media/media-52.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-4">
                                            <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                <img src="{{asset('build/assets/images/media/media-53.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-4">
                                            <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                <img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-4">
                                            <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-4">
                                            <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                <img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-4">
                                            <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                <img src="{{asset('build/assets/images/media/media-13.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-4">
                                            <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                <img src="{{asset('build/assets/images/media/media-19.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-4">
                                            <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                <img src="{{asset('build/assets/images/media/media-20.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

@endsection

@section('scripts')
	
        <!-- Chat JS -->
        <script src="{{asset('build/assets/chat.js')}}"></script>

@endsection
