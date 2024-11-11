
@extends('layouts.master')

@section('styles')

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Mail Settings</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Mail <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Mail Settings 
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
                    <div class="md:grid grid-cols-12 md:gap-6">
                    <div class="col-span-12 lg:col-span-12">
                        <div class="box">
                        <div class="box-header bg-transparent">
                            <nav class="-mb-0.5 md:flex md:space-x-6 rtl:space-x-reverse md:space-y-0 space-y-4 " aria-label="Tabs" role="tablist">
                            <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white hs-tab-active:border-primary  dark:hs-tab-active:bg-bgdark dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mb-px py-2 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-transparent dark:text-white/70 active" id="mail-item-1" data-hs-tab="#mail-1" aria-controls="mail-1" role="tab">
                                <i class="ri ri-global-line"></i>General &amp; personal
                            </button>
                            <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white hs-tab-active:border-primary  dark:hs-tab-active:bg-bgdark dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mb-px py-2 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-transparent dark:text-white/70 dark:hover:text-gray-300" id="mail-item-2" data-hs-tab="#mail-2" aria-controls="mail-2" role="tab">
                                <i class="ri ri-lock-password-line"></i> Notifications
                            </button>
                            <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white hs-tab-active:border-primary  dark:hs-tab-active:bg-bgdark dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mb-px py-2 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-transparent dark:text-white/70 dark:hover:text-gray-300" id="mail-item-3" data-hs-tab="#mail-3" aria-controls="mail-3" role="tab">
                                <i class="ri ri-lock-password-line"></i> Security
                            </button>
                            <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white hs-tab-active:border-primary  dark:hs-tab-active:bg-bgdark dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mb-px py-2 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-transparent dark:text-white/70 dark:hover:text-gray-300" id="mail-item-4" data-hs-tab="#mail-4" aria-controls="mail-4" role="tab">
                                <i class="ri ri-mail-open-line"></i> Mail-View
                            </button>
                            </nav>
                        </div>
                        <div class="box-body">
                            <div id="mail-1" role="tabpanel" aria-labelledby="mail-item-1">
                            <h5 class="font-medium text-lg mb-2">General and Basic Info Settings</h5>
                            <p class=" dark:text-white/70 mb-6 text-[0.75rem]">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="space-y-6">
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-12 md:col-span-2 my-auto">
                                    <label for="profile-change" class="ti-form-label">Change Profile</label>
                                </div>
                                <div class="col-span-12 md:col-span-10 flex items-center gap-x-5">
                                    <span class="avatar avatar-xxl avatar-rounded">
                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="" id="profile-img">
                                    <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-primary avatar-badge">
                                        <input type="file" name="photo" class="absolute w-full  h-full opacity-0" id="profile-image">
                                        <i class="fe fe-camera !text-[0.65rem]"></i>
                                    </a>
                                </span>
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-12 md:col-span-2 my-auto">
                                    <label for="input-label1" class="ti-form-label">User Name</label>
                                </div>
                                <div class="col-span-12 md:col-span-10">
                                    <input type="text" id="input-label1" class="ti-form-input" placeholder="name" value="Jason Taylor">
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-12 md:col-span-2 my-auto">
                                    <label for="input-label2" class="ti-form-label">User Email Id</label>
                                </div>
                                <div class="col-span-12 md:col-span-10">
                                    <input type="email" id="input-label2" class="ti-form-input" placeholder="youremail@gmail.com" value="jasontaylor152@gmail.com">
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-12 md:col-span-2 my-auto">
                                    <label class="ti-form-label">Language</label>
                                </div>
                                <div class="col-span-12 md:col-span-10">
                                    <select class="ti-form-select" data-trigger>
                                    <option value="1" selected>US English</option>
                                    <option value="2">Arabic</option>
                                    <option value="3">Korean</option>
                                    <option value="4">Russia</option>
                                    </select>
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-12 md:col-span-2 my-auto">
                                    <label class="ti-form-label">Time Zone</label>
                                </div>
                                <div class="col-span-12 md:col-span-10">
                                    <select class="ti-form-select" data-trigger>
                                    <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                    <option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
                                    <option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
                                    <option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
                                    <option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
                                    <option value="America/Anchorage">(GMT-09:00) Alaska</option>
                                    <option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
                                    <option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
                                    <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                    <option value="America/Denver">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                    <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                    <option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
                                    <option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
                                    <option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                    <option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
                                    <option value="America/Chicago">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                    <option value="America/New_York">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                    <option value="America/Havana">(GMT-05:00) Cuba</option>
                                    <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                    <option value="America/Caracas">(GMT-04:30) Caracas</option>
                                    <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                    <option value="America/La_Paz">(GMT-04:00) La Paz</option>
                                    <option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
                                    <option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
                                    <option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
                                    <option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
                                    <option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
                                    <option value="America/Araguaina">(GMT-03:00) UTC-3</option>
                                    <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                    <option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
                                    <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                    <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
                                    <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                    <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                    <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                    <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                    <option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
                                    <option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
                                    <option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
                                    <option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
                                    <option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
                                    <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                    <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                    <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                    <option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
                                    <option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
                                    <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                    <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                    <option value="Asia/Gaza">(GMT+02:00) Gaza</option>
                                    <option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
                                    <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                    <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                    <option value="Asia/Damascus">(GMT+02:00) Syria</option>
                                    <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                    <option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
                                    <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                    <option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
                                    <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                    <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                    <option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                    <option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
                                    <option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                    <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                    <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                    <option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
                                    <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                    <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                    <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                    <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                    <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                    <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                    <option value="Australia/Eucla">(GMT+08:45) Eucla</option>
                                    <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                    <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                    <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                    <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                    <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                    <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                    <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                    <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                    <option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
                                    <option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
                                    <option value="Asia/Magadan">(GMT+11:00) Magadan</option>
                                    <option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
                                    <option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
                                    <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                                    <option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                    <option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
                                    <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                                    <option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
                                    </select>
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-12 md:col-span-2 my-auto">
                                    <label class="ti-form-label">Time Format</label>
                                </div>
                                <div class="col-span-12 md:col-span-10">
                                    <select class="ti-form-select" data-trigger>
                                    <option value="1">12 Hrs</option>
                                    <option value="2">24 Hrs</option>
                                    <option value="3">None</option>
                                    </select>
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-12 md:col-span-2 my-auto">
                                    <label class="ti-form-label">Date Format</label>
                                </div>
                                <div class="col-span-12 md:col-span-10">
                                    <select class="ti-form-select" data-trigger>
                                    <option value="1">Y-M-D</option>
                                    <option value="2">M-D-Y</option>
                                    <option value="3">D-M-Y</option>
                                    <option value="4">Y/M/D</option>
                                    <option value="5">M/D/Y</option>
                                    <option value="6">D/M/Y</option>
                                    </select>
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-12 md:col-span-2 my-auto">
                                    <label class="ti-form-label">Verfication</label>
                                </div>
                                <div class="col-span-12 md:col-span-10">
                                    <nav class="flex space-x-2 rtl:space-x-reverse mb-4" aria-label="Tabs" role="tablist">
                                    <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-2 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center  rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="adhar-tab" data-hs-tab="#adhar" aria-controls="adhar" role="tab">
                                        Adhar Number
                                    </button>
                                    <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-2 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center  rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="mobile-tab" data-hs-tab="#mobile" aria-controls="mobile" role="tab">
                                        mobile Number
                                    </button>
                                    </nav>
                                    <div>
                                    <div id="adhar" role="tabpanel" aria-labelledby="adhar-tab">
                                        <input type="text" class="ti-form-input" placeholder="name" value="5353 2525 2525">
                                    </div>
                                    <div id="mobile" class="hidden" role="tabpanel" aria-labelledby="mobile-tab">
                                        <input type="number" class="ti-form-input" placeholder="name" value="9699696996">
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div id="mail-2" class="hidden" role="tabpanel" aria-labelledby="mail-item-2">
                            <h5 class="font-semibold text-lg mb-2">Notification Settings</h5>
                            <p class=" dark:text-white/70 mb-5 text-sm">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="space-y-5">
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch" checked>
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Enable Personal Setting For Admin Panel</label>
                                </div>
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch">
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Personal Setting For Customer Panel</label>
                                </div>
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch">
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Default Login</label>
                                </div>
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch">
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Disable Register</label>
                                </div>
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch">
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Enable Contact Us</label>
                                </div>
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch" checked>
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Notifications From Unknown Mails</label>
                                </div>
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch" checked>
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Notifications From Spam Mails</label>
                                </div>
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch" checked>
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Notifications From Blocked Contacts</label>
                                </div>
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch">
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Allow All Mails</label>
                                </div>
                                <div class="flex items-center">
                                <label class="form-switch  mb-0">
                                    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch">
                                    <span class="form-switch-indicator custom-radius"></span>
                                </label>
                                <label class="text-sm  ltr:ml-3 rtl:mr-3 dark:text-white/70">Block Mails</label>
                                </div>
                            </div>
                            </div>
                            <div id="mail-3" class="hidden" role="tabpanel" aria-labelledby="mail-item-3">
                            <h5 class="font-semibold text-lg mb-2">Security Settings</h5>
                            <p class=" dark:text-white/70 mb-5 text-sm">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="space-y-6">
                                <div class="sm:grid grid-cols-12 sm:gap-6">
                                <div class="col-span-12 sm:col-span-2 my-auto">
                                    <label class="ti-form-label">Verfication Step - 2
                                    <a aria-label="anchor" class="ltr:ml-2 rtl:mr-2" href="javascript:void(0);">
                                        <i class="ri ri-question-line"></i>
                                    </a>
                                    </label>
                                </div>
                                <div class="col-span-12 sm:col-span-10">
                                    <div class="flex items-center">
                                    <label class="form-switch  mb-0">
                                        <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch" checked>
                                        <span class="form-switch-indicator custom-radius"></span>
                                    </label>
                                    </div>
                                </div>
                                </div>
                                <h5 class="font-semibold text-sm mb-2">Change Password</h5>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-2 my-auto">
                                    <label for="input-label4" class="ti-form-label">Old Password
                                    </label>
                                </div>
                                <div class="col-span-10">
                                    <input type="password" id="input-label4" class="ti-form-input" placeholder="Password">
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-2 my-auto">
                                    <label for="input-label5" class="ti-form-label">New Password
                                    </label>
                                </div>
                                <div class="col-span-10">
                                    <input type="password" id="input-label5" class="ti-form-input" placeholder="Password">
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-2 my-auto">
                                    <label for="input-label6" class="ti-form-label">Confirm Password
                                    </label>
                                </div>
                                <div class="col-span-10">
                                    <input type="password" id="input-label6" class="ti-form-input" placeholder="Password">
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-2 my-auto">
                                    <label class="ti-form-label">Account
                                    </label>
                                </div>
                                <div class="col-span-10">
                                    <button type="button" class="py-2 px-3 ti-btn bg-danger text-white hover:bg-danger/80 focus:ring-danger dark:focus:ring-offset-white/10">De-Activate Account</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div id="mail-4" class="hidden" role="tabpanel" aria-labelledby="mail-item-4">
                            <h5 class="font-semibold text-lg mb-2">Mail Settings</h5>
                            <p class=" dark:text-white/70 mb-6 text-sm">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="space-y-6">
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-2 my-auto">
                                    <label class="ti-form-label">Rows per page</label>
                                </div>
                                <div class="col-span-10">
                                    <select class="ti-form-select" data-trigger>
                                        <option value="0">10</option>
                                        <option value="1">30</option>
                                        <option value="2">50</option>
                                        <option value="3">80</option>
                                        <option value="4">100</option>
                                    </select>
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-2 my-auto">
                                    <label class="ti-form-label">Inbox Type</label>
                                </div>
                                <div class="col-span-10">
                                    <select class="ti-form-select" data-trigger>
                                        <option value="0">10</option>
                                        <option value="1">30</option>
                                        <option value="2">50</option>
                                        <option value="3">80</option>
                                        <option value="4">100</option>
                                    </select>
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-2 my-auto">
                                    <label class="ti-form-label">Mark As Read</label>
                                </div>
                                <div class="col-span-10">
                                    <select class="ti-form-select" data-trigger>
                                    <option value="en">Never</option>
                                    <option value="en">Immediately</option>
                                    <option value="dn">After 1 mintue</option>
                                    <option value="es">After 5 mintue</option>
                                    <option value="et" selected>After 10 mintue</option>
                                    </select>
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-2 my-auto">
                                    <label class="ti-form-label">Request For Return Receipt</label>
                                </div>
                                <div class="col-span-10">
                                    <select class="ti-form-select" data-trigger>
                                    <option value="0">Ask me</option>
                                        <option value="1">Send Recepit</option>
                                        <option value="2">Send Receipt To My Contacts</option>
                                        <option value="3">Send Receipt To Trusted Senders</option>
                                    </select>
                                </div>
                                </div>
                                <div class="md:grid grid-cols-12 md:gap-6">
                                <div class="col-span-2 my-auto">
                                    <label class="ti-form-label">Refresh</label>
                                </div>
                                <div class="col-span-10">
                                    <select class="ti-form-select" data-trigger>
                                        <option value="0">every 1 minute</option>
                                        <option value="1">every 3 minute</option>
                                        <option value="2">every 5 minute</option>
                                        <option value="3">every 10 minute</option>
                                        <option value="4">every 15 minute</option>
                                        <option value="5">every 30 minute</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="box-footer bg-transparent">
                            <button type="submit" class="py-2 px-3 ti-btn ti-btn-primary-full ltr:float-right rtl:float-left">Restore Default</button>
                            <button type="button" class="py-2 px-3 ti-btn ti-btn-danger-full ltr:float-right me-2 rtl:float-left">Save Changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        @vite('resources/assets/js/mail-settings.js')

@endsection
