@extends('layouts.master')

@section('styles')

<link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">

@endsection

@section('content')
<!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-6 col-span-12" id="draggable-left">
        <div class="box custom-box box-bg-primary">
            <a href="javascript:void(0);" class="box-anchor"></a>
            <div class="box-body">
                <blockquote class="blockquote mb-0 text-center">
                    <h6 class="font-medium text-white">The best and most beautiful things in the world cannot be seen or
                        even touched — they must be felt with the heart..</h6>
                    <div class="blockquote-footer mt-4 text-[.875rem] text-white opacity-[0.7]">Someone famous as <cite
                            title="Source Title">-Helen Keller</cite></div>
                </blockquote>
            </div>
        </div>
        <div class="box terms-box">
            <div class="box-header flex justify-between">
                <div class="box-title my-auto">
                    Card With Fullscreen Button
                </div>
                <a aria-label="anchor" href="javascript:void(0);" class="terms-fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </a>
            </div>
            <div class="box-body flex-grow">
                <h6 class="text-base font-semibold">FullScreen card</h6>
                <p class="text-[0.813rem] mb-0">There are many variations of passages of Lorem Ipsum available, but the
                    majority
                    have suffered alteration in some form, by injected humour, or randomised words</p>
            </div>
            <div class="box-footer">
                <button type="button" class="ti-btn ti-btn-primary">Read More</button>
            </div>
        </div>
        <div class="box overlay-box !text-white">
            <img src="{{asset('build/assets/images/media/media-35.jpg')}}" class="box-img" alt="...">
            <div class="box-img-overlay flex flex-col p-0">
                <div class="box-header header-bg">
                    <div class="box-title !text-white">
                        Image Overlays Are Awesome!
                    </div>
                </div>
                <div class="box-body !text-white ">
                    <div class="box-text mb-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomised words which
                        don't look even.</div>
                    <div class="box-text">Last updated 3 mins ago</div>
                </div>
            </div>
        </div>
        <!-- <div class="box overlay-box  text-white">
                                <img src="{{asset('build/assets/images/media/media-35.jpg')}}" class="box-img" alt="...">
                                <div class="box-img-overlay flex flex-col p-0 top-auto">
                                    <div class="box-header !text-white">
                                        <div class="box-title !text-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="box-body  !text-white">
                                        <div class="box-text mb-2 !text-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="box-text ">Last updated 3 mins ago</div>
                                    </div>
                                </div>
                            </div> -->
        <div class="box custom-box">
            <a href="javascript:void(0);" class="box-anchor"></a>
            <div class="box-body">
                <div class="flex items-center">
                    <div class="me-4">
                        <span class="avatar avatar-md">
                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                        </span>
                    </div>
                    <div>
                        <p class="box-text mb-0 text-[.875rem] font-semibold">Atharva Simon.</p>
                        <div class="box-title !text-[#8c9097] !text-[0.75rem] !font-normal mb-0">Correspondent Professor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box custom-box border !border-info">
            <a href="javascript:void(0);" class="box-anchor"></a>
            <div class="box-body">
                <div class="flex align-items-center">
                    <div class="me-3">
                        <span class="avatar avatar-xl">
                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                        </span>
                    </div>
                    <div>
                        <p class="box-text text-info mb-1 text-[.875rem] font-semibold">Alicia Keys.</p>
                        <div class="box-title !text-[0.75rem] mb-1 !font-normal">Department Of Commerce</div>
                        <div class="box-title !text-[#8c9097] !text-[.6875rem] !font-normal mb-0">24 Years, Female</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End::row-1 -->

@endsection

@section('scripts')

<!-- Dragula JS -->
<script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>
@vite('resources/assets/js/draggable.js')

<!-- Internal Dragula JS -->
@vite('resources/assets/js/cards.js')

@endsection
