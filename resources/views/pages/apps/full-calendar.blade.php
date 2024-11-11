
@extends('layouts.master')

@section('styles')

        <!-- Full Calendar CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/fullcalendar/main.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Full Calendar</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Apps <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Full Calendar 
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
                      <div class="xl:col-span-3 col-span-12">
                        <div class="box custom-box">
                          <div class="py-4 px-[1.25rem] border-b dark:border-defaultborder/10  !grid">
                            <button class="ti-btn ti-btn-soft-primary"><i
                                class="ri-add-line align-middle me-1 font-semibold inline-block"></i>Create New Event
                            </button>
                          </div>
                          <div class="box-body !p-0">
                            <div id="external-events" class="border-b dark:border-defaultborder/10 p-4">
                              <div
                                class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-primary border !border-primary">
                                <div class="fc-event-main">Calendar Events</div>
                              </div>
                              <div
                                class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-secondary border !border-secondary"
                                data-class="bg-secondary">
                                <div class="fc-event-main">Birthday EVents</div>
                              </div>
                              <div
                                class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-success border !border-success"
                                data-class="bg-success">
                                <div class="fc-event-main">Holiday Calendar</div>
                              </div>
                              <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-info border !border-info"
                                data-class="bg-info">
                                <div class="fc-event-main">Office Events</div>
                              </div>
                              <div
                                class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-warning border !border-warning"
                                data-class="bg-warning">
                                <div class="fc-event-main">Other Events</div>
                              </div>
                              <div
                                class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-danger border !border-danger"
                                data-class="bg-danger">
                                <div class="fc-event-main">Festival Events</div>
                              </div>
                              <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-teal border !border-teal"
                                data-class="bg-danger">
                                <div class="fc-event-main">Timeline Events</div>
                              </div>
                            </div>
                            <div class="dark:border-defaultborder/10 ">
                              <div class="flex items-center mb-4 p-4 !pb-0 justify-between">
                                <h6 class="font-semibold">
                                  Activity :
                                </h6>
                                <button class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary btn-wave">View All</button>
                              </div>
                              <ul class="list-none mb-0 !p-4 !pt-0 fullcalendar-events-activity" id="full-calendar-activity">
                                <li>
                                  <div class="flex items-center justify-between flex-wrap">
                                    <p class="mb-1 font-semibold">
                                      Monday, Jan 1,2024
                                    </p>
                                    <span class="badge bg-light text-default mb-1">12:00PM - 1:00PM</span>
                                  </div>
                                  <p class="mb-0 text-mutedtext-[0.75rem]">
                                    Meeting with a client about new project requirement.
                                  </p>
                                </li>
                                <li>
                                  <div class="flex items-center justify-between flex-wrap">
                                    <p class="mb-1 font-semibold">
                                      Thursday, Dec 29,2022
                                    </p>
                                    <span class="badge bg-success text-white mb-1">Completed</span>
                                  </div>
                                  <p class="mb-0 text-muted text-[0.75rem]">
                                    Birthday party of niha suka
                                  </p>
                                </li>
                                <li>
                                  <div class="flex items-center justify-between flex-wrap">
                                    <p class="mb-1 font-semibold">
                                      Wednesday, Jan 3,2024
                                    </p>
                                    <span class="badge bg-warning/10 text-warning mb-1">Reminder</span>
                                  </div>
                                  <p class="mb-0 text-mutedtext-[0.75rem]">
                                    Work taget for new project is completing
                                  </p>
                                </li>
                                <li>
                                  <div class="flex items-center justify-between flex-wrap">
                                    <p class="mb-1 font-semibold">
                                      Friday, Jan 20,2024
                                    </p>
                                    <span class="badge bg-light text-default mb-1">06:00PM - 09:00PM</span>
                                  </div>
                                  <p class="mb-0 text-mutedtext-[0.75rem]">
                                    Watch new movie with family
                                  </p>
                                </li>
                                <li>
                                  <div class="flex items-center justify-between flex-wrap">
                                    <p class="mb-1 font-semibold">
                                      Saturday, Jan 07,2024
                                    </p>
                                    <span class="badge bg-danger/10 text-danger mb-1">Due Date</span>
                                  </div>
                                  <p class="mb-0 text-muted text-[0.75rem]">
                                    Last day to pay the electricity bill and water bill.need to check the bank details.
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
            
                        </div>
                      </div>
                      <div class="xl:col-span-9 col-span-12">
                        <div class="box custom-box">
                          <div class="box-header">
                            <div class="box-title">Full Calendar</div>
                          </div>
                          <div class="box-body">
                            <div id='calendar2'></div>
                          </div>
                        </div>
                      </div>
                    </div>

@endsection

@section('scripts')
	
        <!-- Moment JS -->
        <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

        <!-- Fullcalendar JS -->
        <script src="{{asset('build/assets/libs/fullcalendar/main.min.js')}}"></script>
        @vite('resources/assets/js/fullcalendar.js')

@endsection
