

@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">About Us</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Pages <i
                              class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                          </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">About Us 
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
                <div class="about-container mb-6">
                    <div class="aboutus-banner">
                        <div class="aboutus-banner-content container">
                            <div class="grid grid-cols-12 sm:gap-x-6">
                                <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="p-4 text-start mb-6">
                                        <h6 class="font-semibold text-white pb-6">
                                            <span class="about-heading-white text-[1rem]">About Us</span>
                                        </h6>
                                        <h3 class="font-semibold mb-2 uppercase text-[1.75rem]">
                                            We Help to  <span class="text-primary">Build</span>
                                            Your Dream Project.
                                        </h3>
                                        <p class="mb-6 font-normal opacity-[0.7] text-[1rem]">
                                            You fight like a younger man, there’s nothing held back. It’s
                                            admirable, but mistaken. When their enemies were at the gates
                                            the Romans would suspend democracy and appoint one man to
                                            protect the city...
                                        </p>
                                        <button type="button" class="ti-btn bg-primary text-white">Get Started</button>
                                    </div>
                                </div>
                                <div
                                    class="xxl:col-span-6 xl:col-span-6 col-span-12 aboutus-img aboutus-banner-img !w-70">
                                    <img src="{{asset('build/assets/images/authentication/7.png')}}"
                                        class="img-fluid !h-[17.5rem] !z-[1]" alt="">
                                </div>
                                <div
                                    class="xl:col-span-12 col-span-12 about-company-stats container !mx-auto !justify-center !items-center !max-w-[41rem]">
                                    <div class="box !shadow-none text-default border dark:border-defaulttextcolor/10">
                                        <div class="box-body !p-0">
                                            <div class="sm:grid grid-cols-12">
                                                <div
                                                    class="xl:col-span-4 xxl:col-span-4 lg:col-span-4 sm:col-span-4 col-span-12 about-company-stats-border">
                                                    <div
                                                        class="text-center p-6 w-full h-full flex items-center justify-center">
                                                        <div>
                                                            <span class="font-semibold">Projects</span>
                                                            <p class="text-dark text-[2rem] mb-0"><span class="count-up"
                                                                    data-count="136">137</span>+</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="xl:col-span-4 xxl:col-span-4 lg:col-span-4 sm:col-span-4 col-span-12 about-company-stats-border">
                                                    <div
                                                        class="text-center p-6 w-full h-full flex items-center justify-center">
                                                        <div>
                                                            <span class="font-semibold">Happy Customers</span>
                                                            <p class="text-dark text-[2rem] mb-0"><span class="count-up"
                                                                    data-count="2499">2500</span>+</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="xl:col-span-4 xxl:col-span-4 lg:col-span-4 sm:col-span-4 col-span-12">
                                                    <div
                                                        class="text-center p-6 w-full h-full flex items-center justify-center">
                                                        <div>
                                                            <span class="font-semibold">Clients</span>
                                                            <p class="text-dark text-[2rem] mb-0"><span class="count-up"
                                                                    data-count="21">22</span></p>
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
                    <div class="!max-w-[40rem] !justify-center !mx-auto !items-center mb-[3rem]">
                        <div class="text-start">
                            <div class="text-defaulttextcolor !text-[1.625rem] font-semibold mb-6"><span
                                    class="about-heading">Our Mission</span></div>
                            <p class="text-[.875rem] mb-6 text-textmuted">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit.
                                Quibusdam similique provident Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Natus, aliquam voluptas repellat eum beatae veniam, cumque eligendi earum
                                praesentium, in corrupti reprehenderit cum architecto quisquam? Quibusdam
                                quaerat veritatis perferendis iusto. !</p>
                            <div>
                                <div class="flex mb-6">
                                    <div> <svg class="motto-icon" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path fill="rgb(1 ,98 ,232)"
                                                d="M20,4H4.30273c-0.55228,0-1-0.44772-1-1s0.44772-1,1-1H20c0.55228,0,1,0.44772,1,1S20.55228,4,20,4z M15,19v3H9v-3c0-1.65685,1.34315-3,3-3l0,0C13.65685,16,15,17.34315,15,19z M4,12L4,12c-1.10457,0-2-0.89543-2-2V7c0-0.55228,0.44772-1,1-1h3v4C6,11.10457,5.10457,12,4,12z">
                                            </path>
                                            <path fill="rgba(1 ,98 ,232,0.7)"
                                                d="M8,12L8,12c-1.10457,0-2-0.89543-2-2V6h4v4C10,11.10457,9.10457,12,8,12z">
                                            </path>
                                            <path fill="rgb(1 ,98 ,232)"
                                                d="M12,12L12,12c-1.10457,0-2-0.89543-2-2V6h4v4C14,11.10457,13.10457,12,12,12z">
                                            </path>
                                            <path fill="rgba(1 ,98 ,232,0.7)"
                                                d="M16,12L16,12c-1.10457,0-2-0.89543-2-2V6h4v4C18,11.10457,17.10457,12,16,12z">
                                            </path>
                                            <path fill="rgb(1 ,98 ,232)"
                                                d="M20,12L20,12c-1.10457,0-2-0.89543-2-2V6h3c0.55228,0,1,0.44772,1,1v3C22,11.10457,21.10457,12,20,12z">
                                            </path>
                                            <path fill="rgba(1 ,98 ,232,0.3)"
                                                d="M18,10c0,1.10455-0.89545,2-2,2s-2-0.89545-2-2c0,1.10455-0.89545,2-2,2s-2-0.89545-2-2c0,1.10455-0.89545,2-2,2s-2-0.89545-2-2c0,1.10455-0.89545,2-2,2v9c0,0.55231,0.44769,1,1,1h4v-3c0-1.65686,1.34314-3,3-3s3,1.34314,3,3v3h4c0.55231,0,1-0.44769,1-1v-9C18.89545,12,18,11.10455,18,10z">
                                            </path>
                                        </svg> </div>
                                    <div class="ms-6">
                                        <h5
                                            class="text-[1.25rem] text-defaulttextcolor dark:text-defaulttextcolor/70 font-medium">
                                            High Standards in design !</h5>
                                        <p class="text-textmuted text-[.875rem]">Lorem ipsum dolor
                                            sit amet consectetur adipisicing elit. Adipisci
                                            quos sint, officia vel ab perferendis, dolores placeat dolor aliquam
                                            debitis eius, illum ullam ratione blanditiis fugiat omnis beatae
                                            odio vitae!</p>
                                    </div>
                                </div>
                                <div class="flex mb-6">
                                    <div> <svg class="motto-icon" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path fill="rgba(1 ,98 ,232,0.3)"
                                                d="M18,20V3c-0.00005-0.55215-0.44769-0.99971-0.99984-0.99966c-0.17446,0.00002-0.34588,0.04569-0.49723,0.13247L13.5,3.85352l-3.00293-1.72071c-0.3079-0.17643-0.68624-0.17643-0.99414,0L6.5,3.85352L3.49707,2.13281c-0.47899-0.27466-1.08994-0.10903-1.3646,0.36996C2.04569,2.65411,2.00002,2.82554,2,3v17c0,1.10457,0.89543,2,2,2h16C18.89543,22,18,21.10457,18,20z">
                                            </path>
                                            <path fill="rgb(1 ,98 ,232)"
                                                d="M21.999,14v6c0,1.10457-0.89543,2-2,2l0,0c-1.10457,0-2-0.89543-2-2v-8h2C21.10357,12,21.999,12.89543,21.999,14z M12,10H8c-0.55228,0-1-0.44771-1-1s0.44772-1,1-1h4c0.55229,0,1,0.44771,1,1S12.55229,10,12,10z M9,14H7c-0.55228,0-1-0.44771-1-1s0.44772-1,1-1h2c0.55229,0,1,0.44771,1,1S9.55229,14,9,14z M9,18H7c-0.55228,0-1-0.44772-1-1s0.44772-1,1-1h2c0.55229,0,1,0.44772,1,1S9.55229,18,9,18z M13,14c-0.54662,0.00567-0.99433-0.43286-1-0.97947c-0.00143-0.13758,0.02585-0.27396,0.08008-0.40041c0.19341-0.50537,0.75987-0.75826,1.26524-0.56486c0.13406,0.0513,0.25521,0.13144,0.35488,0.23474c0.09659,0.09256,0.17161,0.20525,0.21972,0.33008C13.97119,12.74027,13.9984,12.86934,14,13C13.99622,13.55071,13.55071,13.99622,13,14z M13,18c-0.13064-0.00161-0.25971-0.02881-0.37988-0.08008c-0.12124-0.05058-0.23289-0.12162-0.33008-0.21c-0.09109-0.09725-0.16564-0.20875-0.2207-0.33008C12.02149,17.25901,11.99793,17.12994,12,17c0.00346-0.26481,0.10708-0.51849,0.29-0.71c0.23601-0.23439,0.57326-0.33583,0.89941-0.27051c0.06633,0.00976,0.13064,0.03021,0.19043,0.06055c0.06372,0.02159,0.12418,0.05182,0.17969,0.08984c0.0525,0.03702,0.10274,0.07713,0.15047,0.12012c0.18254,0.19176,0.28609,0.44528,0.29,0.71c0.00226,0.26594-0.1022,0.52169-0.29,0.71c-0.09735,0.08817-0.20896,0.15918-0.33008,0.21C13.25973,17.97124,13.13065,17.99842,13,18z">
                                            </path>
                                        </svg> </div>
                                    <div class="ms-6">
                                        <h5
                                            class="text-[1.25rem] text-defaulttextcolor dark:text-defaulttextcolor/70 font-medium">
                                            Most anticipated techniques .</h5>
                                        <p class="text-textmuted text-[.875rem]">Lorem ipsum dolor
                                            sit amet consectetur adipisicing elit. Adipisci
                                            quos sint, officia vel ab perferendis illum ullam ratione blanditiis
                                            fugiat omnis beatae odio vitae!</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div> <svg class="motto-icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                            viewBox="0 0 24 24">
                                            <path fill="rgb(1 ,98 ,232)"
                                                d="M12,18a3.5,3.5,0,1,1,3.5-3.5A3.50424,3.50424,0,0,1,12,18Z">
                                            </path>
                                            <path fill="rgba(1 ,98 ,232,0.7)"
                                                d="M14.64026,16.77179a3.452,3.452,0,0,1-5.28052,0A4.98821,4.98821,0,0,0,7,21a.99974.99974,0,0,0,1,1h8a.99974.99974,0,0,0,1-1A4.98821,4.98821,0,0,0,14.64026,16.77179Z">
                                            </path>
                                            <path fill="rgb(1 ,98 ,232)"
                                                d="M21,12a.99554.99554,0,0,1-.66406-.25244L12,4.33789,3.66406,11.74756a.99991.99991,0,0,1-1.32812-1.49512l9-8a.99893.99893,0,0,1,1.32812,0l9,8A1,1,0,0,1,21,12Z">
                                            </path>
                                            <path fill="rgba(1 ,98 ,232,0.3)"
                                                d="M12,4.33789,4,11.449V21a.99974.99974,0,0,0,1,1H8a.99974.99974,0,0,1-1-1,4.98821,4.98821,0,0,1,2.35974-4.22821l.00006.00006A3.46882,3.46882,0,0,1,8.5,14.5a3.5,3.5,0,0,1,7,0,3.46882,3.46882,0,0,1-.8598,2.27185l.00006-.00006A4.98821,4.98821,0,0,1,17,21a.99974.99974,0,0,1-1,1h3a.99974.99974,0,0,0,1-1V11.449Z">
                                            </path>
                                        </svg> </div>
                                    <div class="ms-6">
                                        <h5
                                            class="text-[1.25rem] text-defaulttextcolor dark:text-defaulttextcolor/70 font-medium">
                                            Even rated customers ?</h5>
                                        <p class="text-textmuted text-[.875rem]">Lorem ipsum dolor
                                            sit amet consectetur adipisicing elit. Adipisci
                                            quos sint, officia vel ab perferendis, dolores placeat dolor aliquam
                                            debitis eius, illum ullam ratione blanditiis fugiat omnis beatae
                                            odio vitae!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-[3rem] px-4 bg-light">
                        <div class="sm:grid grid-cols-12 !mx-auto">
                            <div class="xxl:col-span-2 xl:col-span-1 col-span-1"></div>
                            <div class="xxl:col-span-8 xl:col-span-10 col-span-10">
                                <div class="text-defaulttextcolor !text-[1.625rem] font-semibold mb-6">
                                    <span class="about-heading">Our Team</span>
                                </div>
                                <div class="grid grid-cols-12 sm:gap-x-6">
                                    <div  class="xxxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box text-center">
                                            <div class="box-body">
                                                <span class="avatar avatar-xl avatar-rounded mb-4">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                </span>
                                                <p class="font-semibold text-[0.9375rem] mb-0">Rosen Berg </p>
                                                <span
                                                    class="text-textmuted text-[0.75rem]">RosenBerglor2@gmail.
                                                    com</span>
                                            </div>
                                            <div class="box-footer !border-t-0 !pt-0">
                                                <div class="flex justify-center">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-primary !me-[0.375rem]">
                                                        <i class="ri-facebook-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-success !me-[0.375rem]">
                                                        <i class="ri-twitter-x-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-warning">
                                                        <i class="ri-instagram-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="xxxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box text-center">
                                            <div class="box-body">
                                                <span class="avatar avatar-xl avatar-rounded mb-5">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                                <p class="font-semibold text-[0.9375rem] mb-0">Mclaren mcannen</p>
                                                <span
                                                    class="text-textmuted text-[0.75rem]">Mclarenmcannen29@gmail.com</span>
                                            </div>
                                            <div class="box-footer !border-t-0 !pt-0">
                                                <div class="flex justify-center">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-primary !me-[0.375rem]">
                                                        <i class="ri-facebook-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-success !me-[0.375rem]">
                                                        <i class="ri-twitter-x-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-warning">
                                                        <i class="ri-instagram-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="xxxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box text-center">
                                            <div class="box-body">
                                                <span class="avatar avatar-xl avatar-rounded mb-3">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                                <p class="font-semibold text-[0.9375rem] mb-0">Shimpa Craig</p>
                                                <span
                                                    class="text-textmuted text-xs">ShimpaCraig98@gmail.com</span>
                                            </div>
                                            <div class="box-footer !border-t-0 !pt-0">
                                                <div class="flex justify-center">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-primary !me-[0.375rem]">
                                                        <i class="ri-facebook-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-success !me-[0.375rem]">
                                                        <i class="ri-twitter-x-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-warning">
                                                        <i class="ri-instagram-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="xxxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box text-center">
                                            <div class="box-body">
                                                <span class="avatar avatar-xl avatar-rounded mb-3">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                </span>
                                                <p class="font-semibold text-[0.9375rem] mb-0">Limo Peter</p>
                                                <span
                                                    class="text-textmuted text-xs">LimoPeter@gmail.com</span>
                                            </div>
                                            <div class="box-footer !border-t-0 !pt-0">
                                                <div class="flex justify-center">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-primary !me-[0.375rem]">
                                                        <i class="ri-facebook-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-success !me-[0.375rem]">
                                                        <i class="ri-twitter-x-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-warning">
                                                        <i class="ri-instagram-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="xxxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box text-center">
                                            <div class="box-body">
                                                <span class="avatar avatar-xl avatar-rounded mb-3">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                </span>
                                                <p class="font-semibold text-[0.9375rem] mb-0">Stuart Benny</p>
                                                <span
                                                    class="text-textmuted text-xs">stuartbenny@gmail.com</span>
                                            </div>
                                            <div class="box-footer !border-t-0 !pt-0">
                                                <div class="flex justify-center">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-primary !me-[0.375rem]">
                                                        <i class="ri-facebook-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-success !me-[0.375rem]">
                                                        <i class="ri-twitter-x-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-warning">
                                                        <i class="ri-instagram-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="xxxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box text-center">
                                            <div class="box-body">
                                                <span class="avatar avatar-xl avatar-rounded mb-3">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                </span>
                                                <p class="font-semibold text-[0.9375rem] mb-0">Sasha Banks</p>
                                                <span
                                                    class="text-textmuted text-xs">sashabanks89@gmail.com</span>
                                            </div>
                                            <div class="box-footer !border-t-0 !pt-0">
                                                <div class="flex justify-center">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-primary !me-[0.375rem]">
                                                        <i class="ri-facebook-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-success !me-[0.375rem]">
                                                        <i class="ri-twitter-x-line"></i>
                                                    </button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-warning">
                                                        <i class="ri-instagram-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-1"></div>
                        </div>
                    </div>
                    <div class="rounded-sm">
                        <div class="sm:grid grid-cols-12 !mx-auto">
                            <div class="xxl:col-span-2 xl:col-span-1 col-span-1"></div>
                            <div class="xxl:col-span-8 xl:col-span-10 col-span-10 bg-white dark:bg-bodybg pt-[2.5rem]">
                                <div class="text-center">
                                    <h2 class="font-semibold text-3xl text-gray-800 dark:text-white mb-3 leading-none">
                                        Contact Us</h2>
                                    <p class="text-gray-500 dark:text-white/70">Have any questions ? We would love to
                                        hear from you.</p>
                                </div>
                                <div>
                                    <div class="space-y-6 p-4 text-start">
                                        <div class="grid md:grid-cols-3 gap-6">
                                            <div class="space-y-3"> <label for="fullname"
                                                    class="my-auto text-defaulttextcolor dark:text-defaulttextcolor/70 ti-form-label">Full Name</label> <input type="text"
                                                    class="ti-form-input" id="fullname" placeholder="Enter Full Name">
                                            </div>
                                            <div class="space-y-3"> <label for="Email-id"
                                                    class="my-auto text-defaulttextcolor dark:text-defaulttextcolor/70 ti-form-label">Email ID</label> <input type="email"
                                                    class="ti-form-input" id="Email-id" placeholder="Enter Email Id">
                                            </div>
                                            <div class="space-y-3"> <label for="phoneno"
                                                    class="my-auto text-defaulttextcolor dark:text-defaulttextcolor/70 ti-form-label">Phone No :</label> <input
                                                    type="number" class="ti-form-input" id="phoneno"
                                                    placeholder="Enter Phone No"> </div>
                                        </div>
                                        <div class="space-y-3"> <label for="messagearea"
                                                class="my-auto text-defaulttextcolor dark:text-defaulttextcolor/70 ti-form-label">Message</label> <textarea
                                                class="ti-form-input" rows="6" id="messagearea"
                                                placeholder="Enter Your Messaage"></textarea> </div>
                                        <a class="text-center ti-btn ti-btn-primary" href="javascript:void(0);">Send
                                                    Message</a>
                                    </div> 
                                </div>
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-1 col-span-1"></div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Simplebar JS -->
        <script src="{{asset('build/assets/libs/simplebar/simplebar.min.js')}}"></script>

        <!-- Preline JS -->
        <script src="{{asset('build/assets/libs/preline/preline.js')}}"></script>

@endsection

