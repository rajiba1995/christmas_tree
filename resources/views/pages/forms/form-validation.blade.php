
@extends('layouts.master')

@section('styles')

        <!-- Flatpickr Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')
	
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Form Validation</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Forms <i
                              class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                          </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">Form Validation 
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
                    <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Default Validation</h5>
                            </div>
                            <div class="box-body">
                                <form class="ti-validation">
                                    <div class="grid lg:grid-cols-2 gap-6">
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">First Name</label>
                                            <input type="text" class="my-auto ti-form-input  rounded-sm " placeholder="Firstname" required>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Last Name</label>
                                            <input type="text" class="my-auto ti-form-input  rounded-sm " placeholder="Lastname" required>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Phone Number</label>
                                            <input type="number" class="my-auto ti-form-input  rounded-sm " placeholder="+91 123-456-789" required>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Email Address</label>
                                            <input type="email" class="my-auto ti-form-input  rounded-sm" placeholder="your@site.com" required>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Password</label>
                                            <input type="password" class="ti-form-input  rounded-sm" placeholder="password" required>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Confirm Password</label>
                                            <input type="password" class="ti-form-input  rounded-sm" placeholder="password" required>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Date Of Birth</label>
                                            <input type="date" class="ti-form-input  rounded-sm flatpickr-input" id="date" readonly required>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Gender</label>
                                            <ul class="flex flex-col sm:flex-row">
                                                <li class="ti-list-group w-full gap-x-2.5 flex py-2 px-4 sm:!border-b !border-b-0 !rounded-br-none !rounded-bl-none sm:!rounded-bl-sm sm:!rounded-br-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                          <input id="ti-radio-validation-11" name="ti-radio-validation" type="radio" class="ti-form-radio" checked required>
                                                        </div>
                                                        <label for="ti-radio-validation-11" class="ms-3 block w-full text-sm text-gray-600 dark:text-textmuted">
                                                         Female
                                                        </label>
                                                      </div>
                                                </li>
                                                <li class="ti-list-group w-full gap-x-2.5 flex py-2 px-4 sm:!border-b !border-b-0 !rounded-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:!rounded-none sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                          <input id="ti-radio-validation-12" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                        </div>
                                                        <label for="ti-radio-validation-12" class="ms-3 block w-full text-sm text-gray-600 dark:text-textmuted">
                                                          Male
                                                        </label>
                                                      </div>
                                                </li>
                                                <li class="ti-list-group w-full gap-x-2.5 flex py-2 !rounded-tr-none !rounded-tl-none px-4 sm:-ms-px sm:mt-0 sm:!rounded-tr-sm sm:first:rounded-se-none sm:!rounded-tl-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                          <input id="ti-radio-validation-13" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                        </div>
                                                        <label for="ti-radio-validation-13" class="ms-3 block w-full text-sm text-gray-600 dark:text-textmuted">
                                                        Others
                                                        </label>
                                                      </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="my-5">
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Address</label>
                                            <input type="text" class="my-auto ti-form-input  rounded-sm" placeholder="Address" required>
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-6">
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">City</label>
                                            <input type="text" class="my-auto ti-form-input  rounded-sm" placeholder="city" required>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">State</label>
                                            <input type="text" class="my-auto ti-form-input  rounded-sm" placeholder="state" required>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Pincode</label>
                                            <input type="number" class="my-auto ti-form-input  rounded-sm" placeholder="pincode" required>
                                        </div>
                                    </div>
                                    <div class="my-5">
                                        <input type="checkbox" class="ti-form-checkbox form-check-input mt-0.5" id="hs-checkbox-group-1" required>
                                        <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ms-3 dark:text-textmuted">I agree with the <a href="javascript:void(0);" class="text-primary hover:underline ms-1"> terms and conditions</a></label>
                                    </div>
                                    <button type="submit" class="ti-btn ti-btn-primary-full">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Custom Validation</h5>
                            </div>
                            <div class="box-body">
                                <form class="ti-custom-validation" novalidate>
                                    <div class="grid lg:grid-cols-2 gap-6">
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">First Name</label>
                                            <input type="text" class="firstName my-auto ti-form-input  rounded-sm" placeholder="Firstname" value="John mark"  required>
                                            <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Last Name</label>
                                            <input type="text" class="lastName my-auto ti-form-input  rounded-sm" placeholder="Lastname" required>
                                            <span class="lastNameError text-red-500 text-xs hidden">error</span>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Phone Number</label>
                                            <input type="number" class="phonenumber my-auto ti-form-input  rounded-sm" placeholder="+91 123-456-789" required>
                                            <span class="phoneError text-red-500 text-xs hidden">error</span>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Email Address</label>
                                            <input type="email" class="email-address my-auto ti-form-input  rounded-sm" placeholder="your@site.com" required>
                                            <span class="emailError text-red-500 text-xs hidden">error</span>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Password</label>
                                            <input type="password" class="password ti-form-input  rounded-sm" placeholder="password" required>
                                            <span class="passwordError text-red-500 text-xs hidden">error</span>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Confirm Password</label>
                                            <input type="password" class="confirmPassword ti-form-input  rounded-sm" placeholder="password" required>
                                            <span class="confirmPasswordError text-red-500 text-xs hidden">error</span>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Date Of Birth</label>
                                            <input type="date" class="birthdate ti-form-input  rounded-sm flatpickr-input" readonly required>
                                            <span class="dobError text-red-500 text-xs hidden">error</span>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Gender</label>
                                            <ul class="flex flex-col sm:flex-row">
                                                <li class="ti-list-group w-full gap-x-2.5 flex py-2 px-4 sm:!border-b !border-b-0 !rounded-br-none !rounded-bl-none sm:!rounded-bl-sm sm:!rounded-br-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                          <input id="ti-radio-validation-11" name="ti-radio-validation" type="radio" class="ti-form-radio" checked required>
                                                        </div>
                                                        <label for="ti-radio-validation-11" class="ms-3 block w-full text-sm text-gray-600 dark:text-textmuted">
                                                         Female
                                                        </label>
                                                      </div>
                                                </li>
                                                <li class="ti-list-group w-full gap-x-2.5 flex py-2 px-4 sm:!border-b !border-b-0 !rounded-none sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:!rounded-none sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                          <input id="ti-radio-validation-12" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                        </div>
                                                        <label for="ti-radio-validation-12" class="ms-3 block w-full text-sm text-gray-600 dark:text-textmuted">
                                                          Male
                                                        </label>
                                                      </div>
                                                </li>
                                                <li class="ti-list-group w-full gap-x-2.5 flex py-2 !rounded-tr-none !rounded-tl-none px-4 sm:-ms-px sm:mt-0 sm:!rounded-tr-sm sm:first:rounded-se-none sm:!rounded-tl-none  sm:first:rounded-es-sm sm:last:rounded-es-none  sm:last:rounded-se-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                          <input id="ti-radio-validation-13" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                        </div>
                                                        <label for="ti-radio-validation-13" class="ms-3 block w-full text-sm text-gray-600 dark:text-textmuted">
                                                        Others
                                                        </label>
                                                      </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="my-5">
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Address</label>
                                            <input type="text" class="postalAddress my-auto ti-form-input  rounded-sm" placeholder="Address" required>
                                            <span class="addressError text-red-500 text-xs hidden">error</span>
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-6">
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">City</label>
                                            <input type="text" class="cityName my-auto ti-form-input  rounded-sm" placeholder="city" required>
                                            <span class="cityError text-red-500 text-xs hidden">error</span>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">State</label>
                                            <input type="text" class="stateName my-auto ti-form-input  rounded-sm" placeholder="state" required>
                                            <span class="stateError text-red-500 text-xs hidden">error</span>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Pincode</label>
                                            <input type="number" class="pincode my-auto ti-form-input  rounded-sm" placeholder="pincode" required>
                                            <span class="pincodeError text-red-500 text-xs hidden">error</span>
                                        </div>
                                    </div>
                                    <div class="my-5">
                                        <input type="checkbox" class="validationCheckbox form-check-input ti-form-checkbox mt-0.5" id="hs-checkbox-group-12" required>
                                        <span class="checkboxError text-red-500 text-xs hidden">error</span>
                                        <label for="hs-checkbox-group-12" class="text-sm text-gray-500 sm:ms-3 dark:text-textmuted">I agree with the <a href="javascript:void(0);" class="text-primary ps-1 hover:underline"> terms and conditions</a></label>
                                    </div>
                                    <button value="Login Now" type="submit" class="ti-btn ti-btn-primary-full ti-custom-validate-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Flatpickr JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- Form-validation JS -->
        @vite('resources/assets/js/form-validation.js')

@endsection
