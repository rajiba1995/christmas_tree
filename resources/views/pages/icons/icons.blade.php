
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Icons</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Icons <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Icons 
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Bootstrap Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                            href="https://icons.getbootstrap.com/" target="_blank"
                                            class="text-primary">click here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="bi bi-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-none">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-arrow-left-circle"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-arrow-left-circle
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-arrows-move"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-arrows-move
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-bag"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-bag
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-bar-chart-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-bar-chart-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-basket"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-basket
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-bell"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-bell
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-book"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-book
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-box"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-box
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-briefcase"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-briefcase
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-brightness-high"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-brightness-high
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-calendar"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-calendar
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle  bi bi-paint-bucket"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bi bi-paint-bucket
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Remix Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                            href="https://remixicon.com/" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="ri-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-none">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-home-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-home-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-mail-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-mail-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-briefcase-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-briefcase-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-window-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-window-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-chat-2-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-chat-2-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-chat-settings-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-chat-settings-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-edit-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-edit-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-layout-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-layout-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-code-s-slash-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-code-s-slash-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-airplay-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-airplay-line
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ri ri-file-line"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ri ri-file-line
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Feather Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                            href="https://feathericons.com/" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="fe fe-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-none">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-activity"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-activity
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-airplay"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-airplay
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-alert-circle"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-alert-circle
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-alert-triangle"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-alert-triangle
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-bar-chart-2"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-bar-chart-2
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-bell"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-bell
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-camera"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-camera
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-copy"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-copy
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-eye"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-eye
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-file"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-file
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle fe fe-layout"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                fe fe-layout
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Tabler Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                            href="https://tabler-icons.io/" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="ti ti-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-none">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-brand-tabler"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-brand-tabler
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-activity-heartbeat"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-activity-heartbeat
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-alert-octagon"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-alert-octagon
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-album"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-album
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-align-right"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-align-right
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-antenna-bars-5"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-antenna-bars-5
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-armchair"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-armchair
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-arrow-big-right"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-arrow-big-right
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-arrows-shuffle-2"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-arrows-shuffle-2
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-backspace"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-backspace
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-bell"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-bell
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle ti ti-color-picker"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                ti ti-color-picker
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Line Awesome Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                            href="https://icons8.com/line-awesome" target="_blank"
                                            class="text-primary">click here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="las la-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-none">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-bell"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-bell
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-exclamation-circle"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-exclamation-circle
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-exclamation-triangle"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-exclamation-triangle
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-arrow-alt-circle-down"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-arrow-alt-circle-down
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-arrow-alt-circle-up"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-arrow-alt-circle-up
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-arrow-alt-circle-left"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-arrow-alt-circle-left
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-arrow-alt-circle-right"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-arrow-alt-circle-right
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-history"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-history
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-headphones"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-headphones
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-tv"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-tv
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-car-side"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-car-side
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-envelope"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-envelope
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-edit"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-edit
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle las la-map"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                las la-map
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Boxicons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                            href="https://boxicons.com/" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="bx bx-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-none">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-home"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-home
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-home-alt"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-home-alt
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-box"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-box
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-medal"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-medal
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-file"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-file
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-palette"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-palette
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-receipt"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-receipt
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-table"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-table
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-bar-chart-alt"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-bar-chart-alt
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-layer"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-layer
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-map-alt"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-map-alt
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-gift"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-gift
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-file-blank"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-file-blank
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-lock-alt"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-lock-alt
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-error"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-error
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip">
                                            <i class="hs-tooltip-toggle bx bx-error-circle"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                role="tooltip">
                                                bx bx-error-circle
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Fontawesome Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                        href="http://fontawesome.io" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="fa fa-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-unstyled">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fab fa-500px">
                                            <i class="hs-tooltip-toggle fab fa-500px"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fab fa-500px
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fa fa-address-book">
                                            <i class="hs-tooltip-toggle fa fa-address-book"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-address-book
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="far fa-address-book">
                                            <i class="hs-tooltip-toggle far fa-address-book"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                far fa-address-book
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fa fa-address-card">
                                            <i class="hs-tooltip-toggle fa fa-address-card"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-address-card
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="far fa-address-card">
                                            <i class="hs-tooltip-toggle far fa-address-card"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                far fa-address-card
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fa fa-adjust">
                                            <i class="hs-tooltip-toggle fa fa-adjust"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-adjust
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fab fa-adn">
                                            <i class="hs-tooltip-toggle fab fa-adn"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fab fa-adn
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fa fa-align-center">
                                            <i class="hs-tooltip-toggle fa fa-align-center"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-align-center
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fa fa-align-justify">
                                            <i class="hs-tooltip-toggle fa fa-align-justify"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-align-justify
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fa fa-align-left">
                                            <i class="hs-tooltip-toggle fa fa-align-left"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-align-left
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fa fa-align-right">
                                            <i class="hs-tooltip-toggle fa fa-align-right"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-align-right
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fab fa-amazon">
                                            <i class="hs-tooltip-toggle fab fa-amazon"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fab fa-amazon
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fa fa-ambulance">
                                            <i class="hs-tooltip-toggle fa fa-ambulance"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-ambulance
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="fa fa-american-sign-language-interpreting">
                                            <i class="hs-tooltip-toggle fa fa-american-sign-language-interpreting"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-american-sign-language-interpreting
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fa fa-anchor">
                                            <i class="hs-tooltip-toggle fa fa-anchor"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fa fa-anchor
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="fab fa-android">
                                            <i class="hs-tooltip-toggle fab fa-android"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                fab fa-android
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Materialdesign Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                        href="https://materialdesignicons.com" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="mdi mdi-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-unstyled">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-access-point">
                                            <i class="hs-tooltip-toggle mdi mdi-access-point"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-access-point
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-access-point-network">
                                            <i class="hs-tooltip-toggle mdi mdi-access-point-network"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-access-point-network
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account">
                                            <i class="hs-tooltip-toggle mdi mdi-account"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-alert">
                                            <i class="hs-tooltip-toggle mdi mdi-account-alert"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-alert
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-box">
                                            <i class="hs-tooltip-toggle mdi mdi-account-box"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-box
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-box-outline">
                                            <i class="hs-tooltip-toggle mdi mdi-account-box-outline"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-box-outline
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-card-details">
                                            <i class="hs-tooltip-toggle mdi mdi-account-card-details"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-card-details
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-check">
                                            <i class="hs-tooltip-toggle mdi mdi-account-check"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-check
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-circle">
                                            <i class="hs-tooltip-toggle mdi mdi-account-circle"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-circle
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-convert">
                                            <i class="hs-tooltip-toggle mdi mdi-account-convert"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-convert
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-edit">
                                            <i class="hs-tooltip-toggle mdi mdi-account-edit"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-edit
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-key">
                                            <i class="hs-tooltip-toggle mdi mdi-account-key"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-key
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-location">
                                            <i class="hs-tooltip-toggle mdi mdi-account-location"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-location
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-minus">
                                            <i class="hs-tooltip-toggle mdi mdi-account-minus"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-minus
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-multiple">
                                            <i class="hs-tooltip-toggle mdi mdi-account-multiple"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-multiple
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="mdi mdi-account-multiple-minus">
                                            <i class="hs-tooltip-toggle mdi mdi-account-multiple-minus"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                mdi mdi-account-multiple-minus
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Simpleline Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                        href="https://simplelineicons.com" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="si si-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-unstyled">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-user">
                                            <i class="hs-tooltip-toggle si si-user"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-user
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-people">
                                            <i class="hs-tooltip-toggle si si-people"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-people
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-user-female">
                                            <i class="hs-tooltip-toggle si si-user-female"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-user-female
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-user-follow">
                                            <i class="hs-tooltip-toggle si si-user-follow"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-user-follow
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-user-following">
                                            <i class="hs-tooltip-toggle si si-user-following"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-user-following
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-user-unfollow">
                                            <i class="hs-tooltip-toggle si si-user-unfollow"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-user-unfollow
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-login">
                                            <i class="hs-tooltip-toggle si si-login"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-login
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-logout">
                                            <i class="hs-tooltip-toggle si si-logout"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-logout
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-emotsmile">
                                            <i class="hs-tooltip-toggle si si-emotsmile"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-emotsmile
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-phone">
                                            <i class="hs-tooltip-toggle si si-phone"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-phone
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-call-end">
                                            <i class="hs-tooltip-toggle si si-call-end"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-call-end
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-call-in">
                                            <i class="hs-tooltip-toggle si si-call-in"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-call-in
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-call-out">
                                            <i class="hs-tooltip-toggle si si-call-out"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-call-out
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-map">
                                            <i class="hs-tooltip-toggle si si-map"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-map
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-location-pin">
                                            <i class="hs-tooltip-toggle si si-location-pin"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-location-pin
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="si si-direction">
                                            <i class="hs-tooltip-toggle si si-direction"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                si si-direction
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Ionic Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                        href="https://ionicons.com" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="ion ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-unstyled">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-alarm"
                                            aria-describedby="tooltip77942">
                                            <i class="hs-tooltip-toggle icon ion-md-alarm"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-alarm
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-chatboxes">
                                            <i class="hs-tooltip-toggle icon ion-md-chatboxes"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-chatboxes
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-copy">
                                            <i class="hs-tooltip-toggle icon ion-md-copy"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-copy
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-cube">
                                            <i class="hs-tooltip-toggle icon ion-md-cube"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-cube
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-filing">
                                            <i class="hs-tooltip-toggle icon ion-md-filing"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-filing
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-eye">
                                            <i class="hs-tooltip-toggle icon ion-md-eye"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-eye
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-globe">
                                            <i class="hs-tooltip-toggle icon ion-md-globe"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-globe
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-images">
                                            <i class="hs-tooltip-toggle icon ion-md-images"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-images
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-laptop">
                                            <i class="hs-tooltip-toggle icon ion-md-laptop"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-laptop
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-paper">
                                            <i class="hs-tooltip-toggle icon ion-md-paper"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-paper
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-paper-plane">
                                            <i class="hs-tooltip-toggle icon ion-md-paper-plane"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-paper-plane
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-md-pricetags">
                                            <i class="hs-tooltip-toggle icon ion-md-pricetags"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-md-pricetags
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-ios-settings">
                                            <i class="hs-tooltip-toggle icon ion-ios-settings"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-ios-settings
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-ios-stats">
                                            <i class="hs-tooltip-toggle icon ion-ios-stats"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-ios-stats
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-ios-share-alt">
                                            <i class="hs-tooltip-toggle icon ion-ios-share-alt"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-ios-share-alt
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="icon ion-ios-rocket">
                                            <i class="hs-tooltip-toggle icon ion-ios-rocket"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                icon ion-ios-rocket
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Pe7 Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                        href="https://themes-pixeden.com/font-demos/7-stroke/" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="pe-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-unstyled">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-arc">
                                            <i class="hs-tooltip-toggle pe-7s-arc"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-arc
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-back-2">
                                            <i class="hs-tooltip-toggle pe-7s-back-2"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-back-2
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-bandaid">
                                            <i class="hs-tooltip-toggle pe-7s-bandaid"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-bandaid
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-car">
                                            <i class="hs-tooltip-toggle pe-7s-car"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-car
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-diamond">
                                            <i class="hs-tooltip-toggle pe-7s-diamond"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-diamond
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-door-lock">
                                            <i class="hs-tooltip-toggle pe-7s-door-lock"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-door-lock
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-eyedropper">
                                            <i class="hs-tooltip-toggle pe-7s-eyedropper"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-eyedropper
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-female">
                                            <i class="hs-tooltip-toggle pe-7s-female"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-female
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-gym">
                                            <i class="hs-tooltip-toggle pe-7s-gym"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-gym
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-hammer">
                                            <i class="hs-tooltip-toggle pe-7s-hammer"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-hammer
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-headphones">
                                            <i class="hs-tooltip-toggle pe-7s-headphones"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-headphones
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-helm">
                                            <i class="hs-tooltip-toggle pe-7s-helm"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-helm
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-hourglass">
                                            <i class="hs-tooltip-toggle pe-7s-hourglass"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-hourglass
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-leaf">
                                            <i class="hs-tooltip-toggle pe-7s-leaf"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-leaf
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-magic-wand">
                                            <i class="hs-tooltip-toggle pe-7s-magic-wand"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-magic-wand
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="pe-7s-male">
                                            <i class="hs-tooltip-toggle pe-7s-male"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                pe-7s-male
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Typicons Icons</div>
                                </div>
                                <div class="box-body !pt-2">
                                    <p class="mb-1">Simply beautiful open source icons. For more info <a
                                        href="https://www.s-ings.com/typicons/" target="_blank" class="text-primary">click
                                            here</a>.</p>
                                    <p class="mb-4"><code>&lt;i class="typcn typcn-ICON_NAME"&gt;&lt;/i&gt;</code></p>
                                    <ul class="icons-list list-unstyled">
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-chart-pie-outline">
                                            <i class="hs-tooltip-toggle typcn typcn-chart-pie-outline"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-chart-pie-outline
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-chart-pie">
                                            <i class="hs-tooltip-toggle typcn typcn-chart-pie"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-chart-pie
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-chevron-left-outline">
                                            <i class="hs-tooltip-toggle typcn typcn-chevron-left-outline"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-chevron-left-outline
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-chevron-left">
                                            <i class="hs-tooltip-toggle typcn typcn-chevron-left"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-chevron-left
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-chevron-right-outline">
                                            <i class="hs-tooltip-toggle typcn typcn-chevron-right-outline"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-chevron-right-outline
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-chevron-right">
                                            <i class="hs-tooltip-toggle typcn typcn-chevron-right"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-chevron-right
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-clipboard">
                                            <i class="hs-tooltip-toggle typcn typcn-clipboard"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-clipboard
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-cloud-storage">
                                            <i class="hs-tooltip-toggle typcn typcn-cloud-storage"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-cloud-storage
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-cloud-storage-outline">
                                            <i class="hs-tooltip-toggle typcn typcn-cloud-storage-outline"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-cloud-storage-outline
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-code-outline">
                                            <i class="hs-tooltip-toggle typcn typcn-code-outline"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-code-outline
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-code">
                                            <i class="hs-tooltip-toggle typcn typcn-code"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-code
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-coffee">
                                            <i class="hs-tooltip-toggle typcn typcn-coffee"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-coffee
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-cog-outline">
                                            <i class="hs-tooltip-toggle typcn typcn-cog-outline"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-cog-outline
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-cog">
                                            <i class="hs-tooltip-toggle typcn typcn-cog"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-cog
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-compass">
                                            <i class="hs-tooltip-toggle typcn typcn-compass"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-compass
                                            </span>
                                        </li>
                                        <li class="icons-list-item hs-tooltip ti-main-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="typcn typcn-contacts">
                                            <i class="hs-tooltip-toggle typcn typcn-contacts"></i>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                typcn typcn-contacts
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	


@endsection
