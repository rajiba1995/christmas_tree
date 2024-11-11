
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <div class="file-manager-container p-2 gap-2 sm:!flex !block text-defaulttextcolor text-defaultsize !mt-3">
                        <div class="file-manager-navigation">
                            <div class="flex items-center justify-between w-full p-4 border-b dark:border-defaultborder/10">
                                <div>
                                    <h6 class="font-semibold mb-0 text-[1rem] text-defaulttextcolor">File Manager</h6>
                                </div>
                                <div class="hs-dropdown ti-dropdown">
                                    <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary " type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-settings-3-line"></i>
                                    </button>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                href="#">Hidden Files</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                href="#">Another action</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-4 border-b dark:border-defaultborder/10">
                                <div class="input-group">
                                    <input type="text" class="form-control !bg-light border-0 !rounded-tl-sm !rounded-bl-sm"
                                        placeholder="Search Files" aria-describedby="button-addon2">
                                    <button class="ti-btn ti-btn-light !rounded-tl-none !rounded-bl-none !mb-0"
                                        type="button" id="button-addon2"><i
                                            class="ri-search-line text-[#8c9097]"></i></button>
                                </div>
                            </div>
                            <div>
                                <ul class="list-none files-main-nav" id="files-main-nav">
                                    <li class="active files-type">
                                        <a href="javascript:void(0)">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <i class="ri-folder-2-line text-[1rem]"></i>
                                                </div>
                                                <span class="flex-grow text-nowrap">
                                                    My Files
                                                </span>
                                                <span class="badge bg-primary text-white">322</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="files-type">
                                        <a href="javascript:void(0)">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <i class="ri-star-s-line text-[1rem]"></i>
                                                </div>
                                                <span class="flex-grow text-nowrap">
                                                    Favourite
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="files-type">
                                        <a href="javascript:void(0)">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <i class="ri-share-forward-line text-[1rem]"></i>
                                                </div>
                                                <span class="flex-grow text-nowrap">
                                                    Shared Files
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="files-type">
                                        <a href="javascript:void(0)">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <i class="ri-delete-bin-line text-[1rem]"></i>
                                                </div>
                                                <span class="flex-grow text-nowrap">
                                                    Recycle Bin
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="files-type">
                                        <a href="javascript:void(0)">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <i class="ri-history-fill text-[1rem]"></i>
                                                </div>
                                                <span class="flex-grow text-nowrap">
                                                    Recent Files
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <i class="ri-settings-3-line text-[1rem]"></i>
                                                </div>
                                                <span class="flex-grow text-nowrap">
                                                    Settings
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <i class="ri-questionnaire-line text-[1rem]"></i>
                                                </div>
                                                <span class="flex-grow text-nowrap">
                                                    Help Center
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <i class="ri-folder-line text-[1rem]"></i>
                                                </div>
                                                <span class="flex-grow text-nowrap">
                                                    Version
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-8">
                                        <a href="javascript:void(0)">
                                            <div class="flex items-center">
                                                <div class="me-2">
                                                    <i class="ri-logout-box-line text-[1rem]"></i>
                                                </div>
                                                <span class="flex-grow text-nowrap">
                                                    Log out
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-8">
                                        <div class="text-[#8c9097] mb-2">
                                            <p class="mb-1"><span class="font-bold text-[.875rem]">69.42GB</span> Used</p>
                                            <p class="text-[.75rem] mb-0">58% Used - 51.04Gb free</p>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar !bg-info" role="progressbar" style="width: 58%"
                                                aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex items-center justify-center">
                                        <div class="filemanager-upgrade-storage">
                                            <span>
                                                <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt=""
                                                    class="inline-flex">
                                            </span>
                                            <div class="text-defaulttextcolor">
                                                <span class="text-[.9375rem] font-semibold">Want to <span
                                                        class="font-bold text-success"><u>Buy</u></span> Storage?</span>
                                            </div>
                                            <div class="mt-4 grid">
                                                <button class="ti-btn ti-btn-primary-gradient">Upgrade</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="file-manager-folders">
                            <div
                                class="flex p-4 flex-wrap gap-2 items-center justify-between border-b dark:border-defaultborder/10">
                                <div>
                                    <h6 class="font-semibold mb-0 text-[1rem]">Folders</h6>
                                </div>
                                <div class="flex gap-2">
                                    <button id="folders-close-btn" class="sm:hidden block btn btn-icon btn-sm btn-danger">
                                        <i class="ri-close-fill"></i>
                                    </button>
                                    <div>
                                        <a href="javascript:void(0);"
                                            class="hs-dropdown-toggle ti-btn !gap-0 !py-1 !px-2 !text-[0.75rem] !font-[500] bg-primary text-white flex items-center justify-center"
                                            data-hs-overlay="#todo-compose">
                                            <i class="ri-add-circle-line align-middle !me-1"></i>Create Folder
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);"
                                            class="hs-dropdown-toggle ti-btn !gap-0 !py-1 !px-2 !text-[0.75rem] !font-[500] bg-secondary text-white flex items-center justify-center"
                                            data-hs-overlay="#todo-compose">
                                            <i class="ri-add-circle-line align-middle !me-1"></i>Create File
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 file-folders-container" id="file-folders-container">
                                <div class="flex mb-4 items-center justify-between">
                                    <p class="mb-0 font-semibold text-[.875rem]">My Files</p>
                                    <button class="ti-btn !py-1 !px-2 ti-btn-primary">View All</button>
                                </div>
                                <div class="grid grid-cols-12 gap-x-6 mb-4">
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box !shadow-none !bg-light">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);" data-hs-overlay="#hs-file-details">
                                                    <div class="flex justify-between flex-wrap">
                                                        <div class="file-format-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary"
                                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                                <path opacity="0.3"
                                                                    d="M19 2H5a3.009 3.009 0 0 0-3 3v8.86l3.88-3.88a3.075 3.075 0 0 1 4.24 0l2.871 2.887.888-.888a3.008 3.008 0 0 1 4.242 0L22 15.86V5a3.009 3.009 0 0 0-3-3z" />
                                                                <path opacity="1"
                                                                    d="M10.12 9.98a3.075 3.075 0 0 0-4.24 0L2 13.86V19a3.009 3.009 0 0 0 3 3h14c.815 0 1.595-.333 2.16-.92L10.12 9.98z" />
                                                                <path opacity="0.1"
                                                                    d="m22 15.858-3.879-3.879a3.008 3.008 0 0 0-4.242 0l-.888.888 8.165 8.209c.542-.555.845-1.3.844-2.076v-3.142z" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold mb-1">
                                                                Images
                                                            </span>
                                                            <span class="text-[.625rem] block text-[#8c9097] text-end">
                                                                214.32MB
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box !shadow-none !bg-light">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);" data-hs-overlay="#hs-file-details">
                                                    <div class="flex justify-between flex-wrap">
                                                        <div class="file-format-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-secondary"
                                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                                <path opacity="0.3"
                                                                    d="M14 18H5a3.003 3.003 0 0 1-3-3V9a3.003 3.003 0 0 1 3-3h9a3.003 3.003 0 0 1 3 3v6a3.003 3.003 0 0 1-3 3z" />
                                                                <path opacity="1"
                                                                    d="M21.895 7.554a1 1 0 0 0-1.342-.449l-3.564 1.783c.001.038.01.073.011.112v6c0 .039-.01.074-.011.112l3.564 1.783A1 1 0 0 0 22 16V8a1 1 0 0 0-.105-.446z" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold mb-1">
                                                                Videos
                                                            </span>
                                                            <span class="text-[.625rem] block text-[#8c9097] text-end">
                                                                1.45GB
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box !shadow-none !bg-light">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);" data-hs-overlay="#hs-file-details">
                                                    <div class="flex justify-between flex-wrap">
                                                        <div class="file-format-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-warning"
                                                                viewBox="0 0 24 24">
                                                                <path opacity="0.3"
                                                                    d="m20 9-7-7H7a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3Z" />
                                                                <path opacity="1"
                                                                    d="M20 9h-5a2 2 0 0 1-2-2V2zm-5 9H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zm0-4H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zm-5-4H9a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2z" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold mb-1">
                                                                Docs
                                                            </span>
                                                            <span class="text-[.625rem] block text-[#8c9097] text-end">
                                                                432.29KB
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box !shadow-none !bg-light">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);" data-hs-overlay="#hs-file-details">
                                                    <div class="flex justify-between flex-wrap">
                                                        <div class="file-format-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-info"
                                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                                <path opacity="0.3"
                                                                    d="M6 21H3a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h3a3.003 3.003 0 0 1 3 3v2a3.003 3.003 0 0 1-3 3zm15 0h-3a3.003 3.003 0 0 1-3-3v-2a3.003 3.003 0 0 1 3-3h3a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1z" />
                                                                <path opacity="1"
                                                                    d="M12 3C6.477 3 2 7.477 2 13v1a1 1 0 0 1 1-1h1a8 8 0 0 1 16 0h1a1 1 0 0 1 1 1v-1c0-5.523-4.477-10-10-10z" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold mb-1">
                                                                Music
                                                            </span>
                                                            <span class="text-[.625rem] block text-[#8c9097] text-end">
                                                                289MB
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box !shadow-none !bg-light">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);" data-hs-overlay="#hs-file-details">
                                                    <div class="flex justify-between flex-wrap">
                                                        <div class="file-format-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-success"
                                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                                <circle cx="12" cy="4" r="2" opacity="0.3" />
                                                                <path fill="#b7d7fd"
                                                                    d="M12 6a1.98 1.98 0 0 1-1-.277V8a1 1 0 0 0 2 0V5.723A1.98 1.98 0 0 1 12 6z" />
                                                                <path opacity="0.3"
                                                                    d="M17 22H7a3.003 3.003 0 0 1-3-3v-9a3.003 3.003 0 0 1 3-3h10a3.003 3.003 0 0 1 3 3v9a3.003 3.003 0 0 1-3 3z" />
                                                                <path opacity="1"
                                                                    d="M14.97 12.243 16.28 7H7.72l1.31 5.243A1 1 0 0 0 10 13h4a1 1 0 0 0 .97-.757z" />
                                                                <path fill="#b7d7fd"
                                                                    d="M2 18a1 1 0 0 1-1-1v-2a1 1 0 1 1 2 0v2a1 1 0 0 1-1 1zm20 0a1 1 0 0 1-1-1v-2a1 1 0 1 1 2 0v2a1 1 0 0 1-1 1z" />
                                                                <circle cx="9" cy="16" r="1" opacity="1" />
                                                                <circle cx="15" cy="16" r="1" opacity="1" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold mb-1">
                                                                Apps
                                                            </span>
                                                            <span class="text-[.625rem] block text-[#8c9097] text-end">
                                                                12.56GB
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box !shadow-none !bg-light">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);" data-hs-overlay="#hs-file-details">
                                                    <div class="flex justify-between flex-wrap">
                                                        <div class="file-format-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-danger"
                                                                viewBox="0 0 24 24">
                                                                <path opacity="1"
                                                                    d="M15.707 13.293a1 1 0 0 0-1.414 0L13 14.586V3a1 1 0 0 0-2 0v11.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l3 3a1 1 0 0 0 1.414 0l3-3a1 1 0 0 0 0-1.414Z" />
                                                                <path opacity="0.3"
                                                                    d="M18 9h-5v5.586l1.293-1.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L11 14.586V9H6a3.003 3.003 0 0 0-3 3v7a3.003 3.003 0 0 0 3 3h12a3.003 3.003 0 0 0 3-3v-7a3.003 3.003 0 0 0-3-3Z" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold mb-1">
                                                                Downloads
                                                            </span>
                                                            <span class="text-[.625rem] block text-[#8c9097] text-end">
                                                                3.12GB
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box !shadow-none !bg-light">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);" data-hs-overlay="#hs-file-details">
                                                    <div class="flex justify-between flex-wrap">
                                                        <div class="file-format-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="!fill-purplemain"
                                                                viewBox="0 0 24 24">
                                                                <path opacity="0.3"
                                                                    d="M17 21H7a3.003 3.003 0 0 1-3-3V8a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v10a3.003 3.003 0 0 1-3 3Z" />
                                                                <path opacity="1"
                                                                    d="M19 9H5a3 3 0 0 1 0-6h14a3 3 0 0 1 0 6zm-5 4h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold mb-1">
                                                                Archives
                                                            </span>
                                                            <span class="text-[.625rem] block text-[#8c9097] text-end">
                                                                28.5MB
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box !shadow-none !bg-light">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);" data-hs-overlay="#hs-file-details">
                                                    <div class="flex justify-between flex-wrap">
                                                        <div class="file-format-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="!fill-pinkmain"
                                                                viewBox="0 0 24 24">
                                                                <rect width="9" height="9" x="2" y="2" opacity="1" rx="1" />
                                                                <rect width="9" height="9" x="2" y="13" opacity="0.3"
                                                                    rx="1" />
                                                                <rect width="9" height="9" x="13" y="2" opacity="0.3"
                                                                    rx="1" />
                                                                <rect width="9" height="9" x="13" y="13" opacity="0.3"
                                                                    rx="1" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold mb-1">
                                                                More
                                                            </span>
                                                            <span class="text-[.625rem] block text-[#8c9097] text-end">
                                                                32GB
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex mb-4 items-center justify-between">
                                    <p class="mb-0 font-semibold text-[.875rem]">Folders</p>
                                    <button class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-[500]  ti-btn-primary">View
                                        All</button>
                                </div>
                                <div class="grid grid-cols-12 gap-x-6 mb-4">
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box border dark:border-defaultborder/10  !shadow-none">
                                            <div class="box-body bg-primary/10">
                                                <div
                                                    class="mb-4 folder-svg-container flex flex-wrap justify-between align-items-top">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-primary"
                                                            data-name="Layer 1" viewBox="0 0 24 24">
                                                            <path opacity="1"
                                                                d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z" />
                                                            <path opacity="0.3"
                                                                d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </button>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Delete</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Rename</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Hide Folder</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-[.875rem] font-semibold mb-1 leading-none">
                                                    <a href="javascript:void(0);">Images</a>
                                                </p>
                                                <div class="flex items-center justify-between flex-wrap">
                                                    <div>
                                                        <span class="text-[#8c9097] text-[.75rem]">
                                                            246 Files
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="text-default font-semibold">
                                                            214.32MB
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box border dark:border-defaultborder/10  !shadow-none">
                                            <div class="box-body">
                                                <div
                                                    class="mb-4 folder-svg-container flex flex-wrap justify-between align-items-top">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-primary"
                                                            data-name="Layer 1" viewBox="0 0 24 24">
                                                            <path opacity="1"
                                                                d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z" />
                                                            <path opacity="0.3"
                                                                d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </button>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Delete</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Rename</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Hide Folder</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-[.875rem] font-semibold mb-1 leading-none">
                                                    <a href="javascript:void(0);">Docs</a>
                                                </p>
                                                <div class="flex items-center justify-between flex-wrap">
                                                    <div>
                                                        <span class="text-[#8c9097] text-[.75rem]">
                                                            17 Files
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="text-default font-semibold">
                                                            432.39KB
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box border dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body">
                                                <div
                                                    class="mb-4 folder-svg-container flex flex-wrap justify-between align-items-top">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-primary"
                                                            data-name="Layer 1" viewBox="0 0 24 24">
                                                            <path opacity="1"
                                                                d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z" />
                                                            <path opacity="0.3"
                                                                d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </button>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Delete</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Rename</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Hide Folder</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-[.875rem] font-semibold mb-1 leading-none">
                                                    <a href="javascript:void(0);">Downloads</a>
                                                </p>
                                                <div class="flex items-center justify-between flex-wrap">
                                                    <div>
                                                        <span class="text-[#8c9097] text-[.75rem]">
                                                            437 Files
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="text-default font-semibold">
                                                            3.12GB
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box border dark:border-defaultborder/10 !shadow-none">
                                            <div class="box-body">
                                                <div
                                                    class="mb-4 folder-svg-container flex flex-wrap justify-between align-items-top">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-primary"
                                                            data-name="Layer 1" viewBox="0 0 24 24">
                                                            <path opacity="1"
                                                                d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z" />
                                                            <path opacity="0.3"
                                                                d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </button>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Delete</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Rename</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                                                        href="#">Hide Folder</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-[.875rem] font-semibold mb-1 leading-none">
                                                    <a href="javascript:void(0);">Apps</a>
                                                </p>
                                                <div class="flex items-center justify-between flex-wrap">
                                                    <div>
                                                        <span class="text-[#8c9097] text-[.75rem]">
                                                            165 Files
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="text-default font-semibold">
                                                            12.56GB
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex mb-4 items-center justify-between">
                                    <p class="mb-0 font-semibold text-[.875rem]">Recents</p>
                                    <button class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-[500] ti-btn-primary">View
                                        All</button>
                                </div>
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="table-responsive border border-bottom-0 dark:border-defaultborder/10">
                                            <table class="table text-nowrap table-hover min-w-full">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-left">File Name</th>
                                                        <th scope="col" class="text-left">Category</th>
                                                        <th scope="col" class="text-left">Size</th>
                                                        <th scope="col" class="text-left">Date Modified</th>
                                                        <th scope="col" class="text-left">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="files-list">
                                                    <tr
                                                        class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                                        <th scope="row">
                                                            <div class="flex items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}"
                                                                            alt="">
                                                                    </span>
                                                                </div>
                                                                <a href="#" data-hs-overlay="#hs-file-details">
                                                                    VID-00292312-SPK823.mp4
                                                                </a>
                                                            </div>
                                                        </th>
                                                        <td>Videos</td>
                                                        <td>87MB</td>
                                                        <td>22,Nov 2022</td>
                                                        <td>
                                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-info/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                                        class="ri-eye-line"></i></a>
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-danger/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                                        class="ri-delete-bin-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                                        <th scope="row">
                                                            <div class="flex items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}"
                                                                            alt="">
                                                                    </span>
                                                                </div>
                                                                <a href="#" data-hs-overlay="#hs-file-details">
                                                                    IMG-09123878-SPK734.jpeg
                                                                </a>
                                                            </div>
                                                        </th>
                                                        <td>Images</td>
                                                        <td>1.35MB</td>
                                                        <td>25,Nov 2022</td>
                                                        <td>
                                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-info/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                                        class="ri-eye-line"></i></a>
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-danger/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                                        class="ri-delete-bin-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="bg-gray-100 dark:bg-light dark:border-defaultborder/10 dark:hover:bg-light">
                                                        <th scope="row">
                                                            <div class="flex items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}"
                                                                            alt="">
                                                                    </span>
                                                                </div>
                                                                <a href="#" data-hs-overlay="#hs-file-details">
                                                                    AMB-2012.zip
                                                                </a>
                                                            </div>
                                                        </th>
                                                        <td>Archives</td>
                                                        <td>422KB</td>
                                                        <td>23,Nov 2022</td>
                                                        <td>
                                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-info/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                                        class="ri-eye-line"></i></a>
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-danger/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                                        class="ri-delete-bin-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                                        <th scope="row">
                                                            <div class="flex items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}"
                                                                            alt="">
                                                                    </span>
                                                                </div>
                                                                <a href="#" data-hs-overlay="#hs-file-details">
                                                                    AUD-1002-2012.mp3
                                                                </a>
                                                            </div>
                                                        </th>
                                                        <td>Archives</td>
                                                        <td>422KB</td>
                                                        <td>23,Nov 2022</td>
                                                        <td>
                                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-info/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                                        class="ri-eye-line"></i></a>
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-danger/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                                        class="ri-delete-bin-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                                        <th scope="row">
                                                            <div class="flex items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}"
                                                                            alt="">
                                                                    </span>
                                                                </div>
                                                                <a href="#" data-hs-overlay="#hs-file-details">
                                                                    Document-02.pdf
                                                                </a>
                                                            </div>
                                                        </th>
                                                        <td>Documents</td>
                                                        <td>1.69MB</td>
                                                        <td>2,Dec 2022</td>
                                                        <td>
                                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-info/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                                        class="ri-eye-line"></i></a>
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="ti-btn ti-btn-icon ti-btn-wave !rounded-full !border-danger/10 !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                                        class="ri-delete-bin-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr
                                                        class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                                        <td colspan="5">
                                                            <nav aria-label="Page navigation">
                                                                <ul class="ti-pagination  mb-0">
                                                                    <li class="page-item disabled"><a
                                                                            class="page-link px-3 py-[0.375rem]"
                                                                            href="javascript:void(0);">Previous</a></li>
                                                                    <li class="page-item"><a
                                                                            class="page-link px-3 py-[0.375rem]"
                                                                            href="javascript:void(0);">1</a></li>
                                                                    <li class="page-item"><a
                                                                            class="page-link px-3 py-[0.375rem]"
                                                                            href="javascript:void(0);">2</a></li>
                                                                    <li class="page-item"><a
                                                                            class="page-link px-3 py-[0.375rem]"
                                                                            href="javascript:void(0);">Next</a></li>
                                                                </ul>
                                                            </nav>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hs-file-details" class="hs-overlay hidden !max-w-[350px]  ti-offcanvas ti-offcanvas-right !z-[105]" tabindex="-1">
                        <div class="ti-offcanvas-header">
                            <div>
                                <h6 class="font-semibold mb-0 text-[1rem]">File Details</h6>
                            </div>
                            <button type="button"
                                class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-textmuted dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                data-hs-overlay="#hs-file-details">
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
                            <div>
                                <div class="selected-file-details">
                                    <div class="filemanager-file-details" id="filemanager-file-details">
                                        <div class="p-4 text-center border-b border-dashed dark:border-defaultborder/10 ">
                                            <div class="file-details mb-4 !inline-flex justify-center">
                                                <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="" class="w-[150px] h-[150px]">
                                            </div>
                                            <div>
                                                <p class="mb-0 font-semibold text-[1rem]">AMB-2012.zip</p>
                                                <p class="mb-0 text-[#8c9097] text-[.625rem]">422KB | 23,Nov 2022</p>
                                            </div>
                                        </div>
                                        <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div>
                                                        <span class="font-semibold">File Format : </span><span
                                                            class="text-[.75rem] text-[#8c9097]">zip</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div>
                                                        <p class="font-semibold mb-0">File Description : </p>
                                                        <span class="text-[.75rem] text-[#8c9097]">This file contains 3 folder
                                                            valex.main & valex.premium & valex.featured and 42 images and layout
                                                            styles are added in this update.</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="font-semibold mb-0">File Location : </p>
                                                    <span
                                                        class="text-[.75rem] text-[#8c9097]">Device/Storage/Archives/AMB-2012.zip</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                            <p class="mb-1 font-semibold text-[.875rem]">Downloaded from :</p>
                                            <a class="text-primary font-semibold text-break"
                                                href="https://themeforest.net/user/spruko/portfolio" target="_blank">
                                                <u>https://themeforest.net/user/spruko/portfolio</u>
                                            </a>
                                        </div>
                                        <div class="p-4">
                                            <p class="mb-2 font-semibold text-[.875rem]">Shared With :</p>
                                            <div class="flex items-center p-2 mb-1">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-md">
                                                </span>
                                                <span class="font-semibold flex-grow dark:text-defaulttextcolor/70">Akira
                                                    Susan</span>
                                                <span class="badge bg-success/10 text-success font-normal">28,Nov 2022</span>
                                            </div>
                                            <div class="flex items-center p-2 mb-1">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="" class="!rounded-md">
                                                </span>
                                                <span class="font-semibold flex-grow dark:text-defaulttextcolor/70">Khalid
                                                    Ahmad</span>
                                                <span class="badge bg-success/10 text-success font-normal">16,Oct 2022</span>
                                            </div>
                                            <div class="flex items-center p-2 mb-1">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="" class="!rounded-md">
                                                </span>
                                                <span class="font-semibold flex-grow dark:text-defaulttextcolor/70">Jeremiah
                                                    Jackson</span>
                                                <span class="badge bg-success/10 text-success font-normal">05,Dec 2022</span>
                                            </div>
                                            <div class="flex items-center p-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="" class="!rounded-md">
                                                </span>
                                                <span class="font-semibold flex-grow dark:text-defaulttextcolor/70">Brigo
                                                    Jhonson</span>
                                                <span class="badge bg-success/10 text-success font-normal">13,Nov 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="todo-compose" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 md:mx-auto">
                            <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                    <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Create File</h6>
                                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#todo-compose">
                                    <span class="sr-only">Close</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                </button>
                                </div>
                                <div class="p-4 overflow-y-auto">
                                    <label for="create-folder1" class="form-label">Folder Name</label>
                                    <input type="text" class="form-control" id="create-folder1"
                                        placeholder="Folder Name">
                                </div>
                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#todo-compose">
                                    Close
                                </button>
                                <button type="button" class="ti-btn bg-primary text-white !font-medium">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="todo-compose" class="hs-overlay hidden ti-modal">
                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                            <div class="ti-modal-content">
                                <div class="ti-modal-header">
                                    <h6 class="modal-title text-[1rem] font-semibold"
                                        id="mail-ComposeLabel">Create File</h6>
                                    <button type="button"
                                        class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor"
                                        data-hs-overlay="#todo-compose">
                                        <span class="sr-only">Close</span>
                                        <i class="ri-close-fill"></i>
                                    </button>
                                </div>
                                <div class="ti-modal-body px-4">
                                    <label for="create-folder1" class="form-label">Folder Name</label>
                                    <input type="text" class="form-control" id="create-folder1"
                                        placeholder="Folder Name">
                                </div>
                                <div class="ti-modal-footer">
                                    <button type="button"
                                        class="hs-dropdown-toggle ti-btn  ti-btn-light align-middle"
                                        data-hs-overlay="#todo-compose">
                                        close
                                    </button>
                                    <button type="button"
                                        class="ti-btn ti-btn-success-full text-white !font-[500]">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('scripts')
	
        @vite('resources/assets/js/file-manager.js')

@endsection
