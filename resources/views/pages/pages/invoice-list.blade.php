
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Invoice List</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Invoice <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Invoice List 
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
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Manage Invoices
                                    </div>
                                    <div class="flex">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-sm hs-dropdown-toggle m-0" id="invoice-create" data-hs-overlay="#invoice-modal"><i class="ri ri-add-line"></i>Create Invoice</a>
                                        
                                        <div class="hs-dropdown ti-dropdown ms-2">
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-secondary !mb-0 ti-btn-sm" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">All Invoices</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Paid Invoices</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Pending Invoices</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Overdue Invoices</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table whitespace-nowrap table-bordered min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-start">Client</th>
                                                    <th scope="col" class="text-start">Invoice ID</th>
                                                    <th scope="col" class="text-start">Issued Date</th>
                                                    <th scope="col" class="text-start">Amount</th>
                                                    <th scope="col" class="text-start">Status</th>
                                                    <th scope="col" class="text-start">Due Date</th>
                                                    <th scope="col" class="text-start">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">Json Taylor</p>
                                                                <p class="mb-0 text-[.6875rem] text-textmuted">jsontaylor2416@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-semibold text-primary">
                                                            #SPK12032901
                                                        </a>
                                                    </td>
                                                    <td>
                                                        25,Nov 2022
                                                    </td>
                                                    <td>
                                                        $212.45
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        25,Dec 2022
                                                    </td>
                                                    <td>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">Suzika Stallone</p>
                                                                <p class="mb-0 text-[.6875rem] text-textmuted">suzikastallone3214@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-semibold text-primary">
                                                            #SPK12032912
                                                        </a>
                                                    </td>
                                                    <td>
                                                        13,Nov 2022
                                                    </td>
                                                    <td>
                                                        $512.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        13,Dec 2022
                                                    </td>
                                                    <td>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">Roman Killon</p>
                                                                <p class="mb-0 text-[.6875rem] text-textmuted">romankillon143@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-semibold text-primary">
                                                            #SPK12032945
                                                        </a>
                                                    </td>
                                                    <td>
                                                        30,Nov 2022
                                                    </td>
                                                    <td>
                                                        $2199.49
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">Overdue</span>
                                                    </td>
                                                    <td>
                                                        30,Dec 2022
                                                    </td>
                                                    <td>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">Charlie Davieson</p>
                                                                <p class="mb-0 text-[.6875rem] text-textmuted">charliedavieson@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-semibold text-primary">
                                                            #SPK12032922
                                                        </a>
                                                    </td>
                                                    <td>
                                                        18,Nov 2022
                                                    </td>
                                                    <td>
                                                        $1569.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        18,Dec 2022
                                                    </td>
                                                    <td>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">Selena Deoyl</p>
                                                                <p class="mb-0 text-[.6875rem] text-textmuted">selenadeoyl114@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-semibold text-primary">
                                                            #SPK12032932
                                                        </a>
                                                    </td>
                                                    <td>
                                                        18,Nov 2022
                                                    </td>
                                                    <td>
                                                        $4,873.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">Due By 1 Day</span>
                                                    </td>
                                                    <td>
                                                        18,Dec 2022
                                                    </td>
                                                    <td>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">Kiara Advensh</p>
                                                                <p class="mb-0 text-[.6875rem] text-textmuted">kiaraadvensh87@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-semibold text-primary">
                                                            #SPK12032978
                                                        </a>
                                                    </td>
                                                    <td>
                                                        02,Nov 2022
                                                    </td>
                                                    <td>
                                                        $1923.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        18,Dec 2022
                                                    </td>
                                                    <td>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">Joseph Samurai</p>
                                                                <p class="mb-0 text-[.6875rem] text-textmuted">josephsamurai@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-semibold text-primary">
                                                            #SPK12032919
                                                        </a>
                                                    </td>
                                                    <td>
                                                        15,Nov 2022
                                                    </td>
                                                    <td>
                                                        $1,623.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        15,Dec 2022
                                                    </td>
                                                    <td>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">Kevin Powell</p>
                                                                <p class="mb-0 text-[.6875rem] text-textmuted">kevinpowell@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-semibold text-primary">
                                                            #SPK12032931
                                                        </a>
                                                    </td>
                                                    <td>
                                                        21,Nov 2022
                                                    </td>
                                                    <td>
                                                        $3,423.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        21,Dec 2022
                                                    </td>
                                                    <td>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">Darla Jung</p>
                                                                <p class="mb-0 text-[.6875rem] text-textmuted">darlajung555@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="font-semibold text-primary">
                                                            #SPK12032958
                                                        </a>
                                                    </td>
                                                    <td>
                                                        15,Oct 2022
                                                    </td>
                                                    <td>
                                                        $2,982.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        15,Nov 2022
                                                    </td>
                                                    <td>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <nav aria-label="Page navigation">
                                        <ul class="ti-pagination ltr:float-right rtl:float-left mb-0">
                                            <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                            <li class="page-item"><a class="page-link active px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                            <li class="page-item hidden sm:block"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Internal Invoice List JS -->
        @vite('resources/assets/js/invoice-list.js')

@endsection
