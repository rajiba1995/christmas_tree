
@extends('layouts.master')

@section('styles')

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- Flat Picker css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Todo List</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Pages <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Todo List 
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
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-body !p-0">
                                    <div class="p-4 grid border-b border-dashed dark:border-defaultborder/10">
                                        <button type="button" class="py-2  px-3 ti-btn bg-primary text-white !font-medium w-full !mb-0" data-hs-overlay="#hs-focus-management-modal">
                                            <i class="ri-add-circle-line !text-[1rem]"></i>Create New Task
                                          </button>
                                          
                                          <div id="hs-focus-management-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                              <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Create Task</h6>
                                                  <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-focus-management-modal">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                  </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <div class="grid grid-cols-12 gap-2">
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <label for="task-name" class="ti-form-label">Task Name</label>
                                                            <input type="text" class="form-control w-full" id="task-name" placeholder="Task Name" autofocus>
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <label class="ti-form-label">Assigned To</label>
                                                            <select class="ti-form-select  !rounded-s-none" name="choices-multiple-remove-button"
                                                              id="choices-multiple-remove-button" multiple>
                                                              <option value="Choice 1" selected>Angelina May</option>
                                                              <option value="Choice 2">Kiara advain</option>
                                                              <option value="Choice 3">Hercules Jhon</option>
                                                              <option value="Choice 4">Mayor Kim</option>
                                                            </select>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label class="ti-form-label">Assigned Date</label>
                                                            <div class="inline-flex w-full">
                                                                <div class="input-group-text text-textmuted !rounded-e-none border border-defaultborder"> <i class="ri-calendar-line"></i> </div>
                                                                <input type="text" class="form-control w-full !rounded-s-none" id="addignedDate" placeholder="Choose date and time">
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label class="ti-form-label">Target Date</label>
                                                            <div class="inline-flex w-full">
                                                                <div class="input-group-text text-textmuted !rounded-e-none border border-defaultborder"> <i class="ri-calendar-line"></i> </div>
                                                                <input type="text" class="form-control w-full !rounded-s-none" id="targetDate" placeholder="Choose date and time">
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <label class="ti-form-label">Priority</label>
                                                            <select class="ti-form-select todo-choice" data-trigger name="choices-single-default">
                                                              <option value="">Select</option>
                                                              <option value="Critical">Critical</option>
                                                              <option value="High">High</option>
                                                              <option value="Medium">Medium</option>
                                                              <option value="Low">Low</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                                  <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#hs-focus-management-modal">
                                                    Close
                                                  </button>
                                                  <button type="button" class="ti-btn bg-primary text-white !font-medium">Create</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                        <div class="input-group">
                                            <input type="text" class="form-control w-full !rounded-md !bg-light border-0 !rounded-e-none" placeholder="Search Task Here" aria-describedby="button-addon2">
                                            <button type="button" aria-label="button" class="ti-btn ti-btn-light !rounded-s-none !mb-0" id="button-addon2"><i class="ri-search-line text-textmuted"></i></button>
                                        </div>
                                    </div>
                                    <div class="p-4 task-navigation border-b border-dashed dark:border-defaultborder/10">
                                        <ul class="list-none task-main-nav mb-0">
                                            <li class="!px-0 !pt-0">
                                                <span class="text-[.6875rem] text-textmuted opacity-[0.7] font-semibold">TASKS</span>
                                            </li>
                                            <li class="active">
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-center">
                                                        <span class="me-2 leading-none">
                                                            <i class="ri-task-line align-middle text-[.875rem]"></i>
                                                        </span>
                                                        <span class="flex-grow whitespace-nowrap">
                                                            All Tasks
                                                        </span>
                                                        <span class="badge bg-success/10 text-success rounded-full">167</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-center">
                                                        <span class="me-2 leading-none">
                                                            <i class="ri-star-line align-middle text-[.875rem]"></i>
                                                        </span>
                                                        <span class="flex-grow whitespace-nowrap">
                                                            Starred
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-center">
                                                        <span class="me-2 leading-none">
                                                            <i class="ri-delete-bin-5-line align-middle text-[.875rem]"></i>
                                                        </span>
                                                        <span class="flex-grow whitespace-nowrap">
                                                            Trash
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="!px-0 !pt-2">
                                                <span class="text-[.6875rem] text-textmuted op-7 font-semibold">CATEGORIES</span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-center">
                                                        <span class="me-2 leading-none">
                                                            <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-primary"></i>
                                                        </span>
                                                        <span class="flex-grow whitespace-nowrap">
                                                            Personal
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-center">
                                                        <span class="me-2 leading-none">
                                                            <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-secondary"></i>
                                                        </span>
                                                        <span class="flex-grow whitespace-nowrap">
                                                            Work
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-center">
                                                        <span class="me-2 leading-none">
                                                            <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-warning"></i>
                                                        </span>
                                                        <span class="flex-grow whitespace-nowrap">
                                                            Health &amp; Fitness
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-center">
                                                        <span class="me-2 leading-none">
                                                            <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-success"></i>
                                                        </span>
                                                        <span class="flex-grow whitespace-nowrap">
                                                            Daily Goals
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-center">
                                                        <span class="me-2 leading-none">
                                                            <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-danger"></i>
                                                        </span>
                                                        <span class="flex-grow whitespace-nowrap">
                                                            Financial Management
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-9 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body !p-0">
                                            <div class="md:flex px-4 py-6 items-center justify-between">
                                                <div>
                                                    <h6 class="font-semibold mb-0 text-[1rem]">Tasks</h6>
                                                </div>
                                                <div class="mt-2 md:mt-0">
                                                    <nav class="-mb-0.5 sm:flex sm:space-x-6 rtl:space-x-reverse flex-wrap" aria-label="Tabs" role="tablist">
                                                        <a class="w-full flex sm:w-auto active hs-tab-active:font-semibold  hs-tab-active:text-primary hs-tab-active:bg-primary/10 rounded-md py-2 px-3 text-sm" href="javascript:void(0);" id="alltasks-item" data-hs-tab="#all-tasks" aria-controls="all-tasks" role="tab">
                                                            All Tasks
                                                        </a>
                                                        <a class="w-full flex sm:w-auto hs-tab-active:font-semibold  hs-tab-active:text-primary hs-tab-active:bg-primary/10 rounded-md  py-2 px-3  text-sm" href="javascript:void(0);"  id="pending-item" data-hs-tab="#pending" aria-controls="pending" role="tab">
                                                            Pending
                                                        </a>
                                                        <a class="w-full flex sm:w-auto hs-tab-active:font-semibold  hs-tab-active:text-primary hs-tab-active:bg-primary/10 rounded-md  py-2 px-3  text-sm" href="javascript:void(0);" id="in-progress-item" data-hs-tab="#in-progress" aria-controls="in-progress" role="tab">
                                                            In Progress
                                                        </a>
                                                        <a class="w-full flex sm:w-auto hs-tab-active:font-semibold  hs-tab-active:text-primary hs-tab-active:bg-primary/10 rounded-md  py-2 px-3 text-sm" href="javascript:void(0);" id="completed-item" data-hs-tab="#completed" aria-controls="completed" role="tab">
                                                            Completed
                                                        </a>
                                                      </nav>
                                                </div>
                                                <div class="mt-2 md:mt-0">
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !mb-0" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Select All</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Share All</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Delete All</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                <div class="tab-content task-tabs-container">
                                    <div class="tab-pane show active !p-0" id="all-tasks" aria-labelledby="alltasks-item"
                                        role="tabpanel">
                                        <div class="grid grid-cols-12 gap-x-6" id="tasks-container">
                                            <div class="xl:col-span-4 col-span-12 task-card">
                                                <div class="box task-pending-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Ui Design</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box task-inprogress-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">New Design</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box task-completed-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Task Manage</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-4 col-span-12 task-card">
                                                <div class="box task-inprogress-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Graphic Design</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box task-completed-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Ui Design</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box task-completed-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Wire Frame</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-4 col-span-12 task-card">
                                                <div class="box task-pending-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Documentation</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box task-completed-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Page Review</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box task-inprogress-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Testing</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden" id="pending" aria-labelledby="pending-item"
                                        role="tabpanel">
                                        <div class="grid grid-cols-12 gap-6">
                                            <div class="xl:col-span-4 col-span-12">
                                                <div class="box task-pending-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">New Premier</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-4 col-span-12">
                                                <div class="box task-pending-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Update Ui</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden" id="in-progress" aria-labelledby="inprocess-item"
                                        role="tabpanel">
                                        <div class="grid grid-cols-12 gap-x-6">
                                            <div class="xl:col-span-4 col-span-12">
                                                <div class="box task-inprogress-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Ad New Page</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-4 col-span-12">
                                                <div class="box task-inprogress-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Pages Design</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-4 col-span-12">
                                                <div class="box task-inprogress-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Task Craete</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden" id="completed" aria-labelledby="completed-item"
                                        role="tabpanel">
                                        <div class="grid grid-cols-12 gap-x-6">
                                            <div class="xl:col-span-4 col-span-12">
                                                <div class="box task-completed-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">New Plugin</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-4 col-span-12">
                                                <div class="box task-completed-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Documentation</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-4 col-span-12">
                                                <div class="box task-completed-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">App Design</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-4 col-span-12">
                                                <div class="box task-completed-card">
                                                    <div class="box-body">
                                                        <div class="flex justify-between flex-wrap gap-2">
                                                            <div>
                                                                <p class="font-semibold text-[0.77rem] mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-textmuted"></i></a><span class="badge bg-primary/10 text-primary fs-12">Update Plugin</span></p>
                                                                <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-textmuted">13,Nov 2022</span></p>
                                                                <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-textmuted">20,Nov 2022</span></p>
                                                               <span>
                                                                  <span class="text-textmuted me-2"><i class="ri-chat-3-line me-1"></i>25</span>
                                                                  <span class="text-textmuted"><i class="ri-link me-1"></i>5</span>
                                                               </span>  
                                                                <span class="avatar-list-stacked flex -space-x-2 ms-1 float-right">
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
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="btn-list">
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
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
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="ti-pagination ltr:float-right rtl:float-left mb-4">
                                    <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Flat Picker JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- Internal To-Do-List JS -->
        @vite('resources/assets/js/todolist.js')

@endsection
