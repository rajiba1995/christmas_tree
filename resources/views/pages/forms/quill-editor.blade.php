
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Quill Editor</h5>
                            <nav>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                    href="javascript:void(0);"> Form Editors <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                                </a> </li>
                                <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                    href="javascript:void(0);">Quill Editor 
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

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gp-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Quill Snow Editor
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="editor">
                                        <h4><b class="ql-size-large">Quill Snow</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                        <p><br></p>
                                        <ol>
                                            <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                            <li class="">This is quill snow editor.</li>
                                            <li class="">Easy to customize and flexible.</li>
                                        </ol>
                                        <p><br></p>
                                        <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gp-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Quill Bubble Editor
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="editor1">
                                        <h4><b class="ql-size-large">Quill Bubble</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                        <p><br></p>
                                        <ol>
                                            <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                            <li class="">This is quill bubble editor.</li>
                                            <li class="">Easy to customize and flexible.</li>
                                        </ol>
                                        <p><br></p>
                                        <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

@endsection

@section('scripts')
	
        <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Internal Quill JS -->
        @vite('resources/assets/js/quill-editor.js')

@endsection
