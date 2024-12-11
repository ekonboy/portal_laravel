<!DOCTYPE html>
<html lang="en" id="pageroot">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default Title' }}</title>
    <meta name="{{ $metaTitle ?? 'Default Title' }}" content="{{ $metaDescription ?? 'Default description' }}" />
    {{-- @vite(['resources/css/app.css'], 'resources/js/app.js') --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/css/portal.css')


    <link rel="shortcut icon" href="images/favicon.png" />

</head>

   
    <x-navigation />

    @session('status')
        <div class="status">
            {{ $value }}
        </div>
    @endsession


    <!-- @ include('partials.navigation') convertimos esto en un componente porque es mas limpio i profesional-->
    {{ $slot }}
    <!-- variable reservada imprime el contenido variable -->


    @isset($sidebar)
        <div id="sidebar2">
            <h3>Side bar en layout</h3>
            <div>{{ $sidebar }}</div>
        </div>
    @endisset




    <body class="bg-gray-50 dark:bg-gray-1000 font-body text-sm leading-relaxed text-slate-600 dark:text-slate-300 font-normal min-w-[320px]">
        <div class="nk-app-root overflow-hidden">
          <div class="nk-main">
            <div class="nk-sidebar group/sidebar peer dark fixed w-72 [&.is-compact:not(.has-hover)]:w-[74px] min-h-screen max-h-screen overflow-hidden h-full start-0 top-0 z-[1031] transition-[transform,width] duration-300 -translate-x-full rtl:translate-x-full xl:translate-x-0 xl:rtl:translate-x-0 [&.sidebar-visible]:translate-x-0">
              <div class="flex items-center min-w-full w-72 h-16 border-b border-e bg-white dark:bg-gray-950 border-gray-200 dark:border-gray-900 px-6 py-3 overflow-hidden">
                <div class="-ms-1 me-4">
                  <div class="hidden xl:block">
                    <a href="#" class="sidebar-compact-toggle [&>*]:pointer-events-none inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                      <em class="text-2xl text-slate-600 dark:text-slate-300 ni ni-menu"></em>
                    </a>
                  </div>
                  <div class="xl:hidden">
                    <a href="#" class="sidebar-toggle [&>*]:pointer-events-none inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                      <em class="text-2xl text-slate-600 dark:text-slate-300 rtl:-scale-x-100 ni ni-arrow-left"></em>
                    </a>
                  </div>
                </div>
                <div class="relative flex flex-shrink-0">
                  <a href="./index.html" class="relative inline-block transition-opacity duration-300 h-9 group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0">
                    <img class="h-full opacity-0 dark:opacity-100" src="images/logo.png" srcset="images/logo2x.png 2x" alt="logo" />
                    <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="images/logo-dark.png" srcset="images/logo-dark2x.png 2x" alt="logo" />
                  </a>
                </div>
              </div>
              <div class="nk-sidebar-body max-h-full relative overflow-hidden w-full bg-white dark:bg-gray-950 border-e border-gray-200 dark:border-gray-900">
                <div class="flex flex-col w-full h-[calc(100vh-theme(spacing.16))]">
                  <div class="h-full pt-4 pb-10" data-simplebar>
                    <ul class="nk-menu">
                      <li class="relative first:pt-1 pt-10 pb-2 px-6 before:absolute before:h-px before:w-full before:start-0 before:top-1/2 before:bg-gray-200 dark:before:bg-gray-900 first:before:hidden before:opacity-0 group-[&.is-compact:not(.has-hover)]/sidebar:before:opacity-100">
                        <h6 class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Dashboards</h6>
                      </li>
                      <li class="nk-menu-item py-0.5 group/item">
                        <a href="{{  route('home'); }}" class="{{ request()->routeIs('home') ? 'text-green-400':'text-gray-600' }}nk-menu-link nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                              <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-setting-alt"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">{{ __('Home') }}</span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                          </a>
                      </li>
    
                      <li class="nk-menu-item py-0.5 has-sub group/item">
                        <a href="{{  route('posts.index'); }}" class="{{ request()->routeIs('about') ? 'text-green-400':'text-gray-600' }}nk-menu-link nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                          <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                            <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-setting-alt"></em>
                          </span>
                          <span class="{{ request()->routeIs('posts.*') ? 'text-green-400':'text-gray-600' }} group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Blog</span>
                          <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden">
                          <li class="nk-menu-item py-px group/sub1">
                            <a href="./components/forms/generate_credentials.html" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Generate credentials</span>
                            </a>
                          </li>
    
                          <li class="nk-menu-item py-px group/sub1">
                            <a href="./components/forms/company_information.html" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">API documentation</span>
                            </a>
                          </li>
                          <li class="nk-menu-item py-px group/sub1">
                            <a href="./project-list.html" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Login to Sandbox </span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nk-menu-item py-0.5 has-sub group/item">
                        <a href=".#" class="nk-menu-link nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                          <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                            <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-users"></em>
                          </span>
                          <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">{{ __('Us') }}</span>
                          <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden">
                          <li class="nk-menu-item py-px group/sub1">
                            <a href="./components/forms/company_information.html" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Company information</span>
                            </a>
                          </li>
                          <li class="nk-menu-item py-px group/sub1">
                            <a href="./components/forms/business_address.html" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Business address</span>
                            </a>
                          </li>
                          <li class="nk-menu-item py-px group/sub1">
                            <a href="./components/forms/bank_information.html" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Bank information</span>
                            </a>
                          </li>
                          <li class="nk-menu-item py-px group/sub1">
                            <a href="./components/forms/contacts_escalations.html" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Contacts & escalations</span>
                            </a>
                          </li>
                          <li class="nk-menu-item py-px group/sub1">
                            <a href="./components/forms/supporting_documentation.html" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Supporting documentation</span>
                            </a>
                          </li>
                        </ul>
                      </li>
    
                      <li class="nk-menu-item py-0.5 has-sub group/item">
                        <a href="{{ route('contact'); }}" class="nk-menu-link nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                          <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                            <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-signin"></em>
                          </span>
                          <span class="{{ request()->routeIs('contact') ? 'text-green-400':'text-gray-600' }} ">{{ __('Contact') }}</span>
                          <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
    
                        <!-- new -->
                        <ul class="nk-menu-sub hidden ms-[calc(theme(spacing.6)+theme(spacing.9))] border-gray-300 dark:border-gray-900 my-2">
                          <li class="nk-menu-item py-px group/sub2">
                            <a href="./pages/auths/auth-login-v2.html" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Login / Signin</span>
                            </a>
                          </li>
                          <li class="nk-menu-item py-px group/sub2">
                            <a href="./pages/auths/auth-register-v2.html" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Register / Signup</span>
                            </a>
                          </li>
                          <li class="nk-menu-item py-px group/sub2">
                            <a href="./pages/auths/auth-reset-v2.html" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Forgot Password</span>
                            </a>
                          </li>
                          <li class="nk-menu-item py-px group/sub2">
                            <a href="./pages/auths/auth-success-v2.html" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 font-normal leading-5 text-sm tracking-normal normal-case">
                              <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">Success / Confirm</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- components -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- sidebar -->
            <div class="sidebar-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[1030] opacity-0 invisible peer-[.sidebar-visible]:opacity-100 peer-[.sidebar-visible]:visible xl:!opacity-0 xl:!invisible"></div>
            <div class="nk-wrap xl:ps-72 [&>.nk-header]:xl:start-72 [&>.nk-header]:xl:w-[calc(100%-theme(spacing.72))] peer-[&.is-compact:not(.has-hover)]:xl:ps-[74px] peer-[&.is-compact:not(.has-hover)]:[&>.nk-header]:xl:start-[74px] peer-[&.is-compact:not(.has-hover)]:[&>.nk-header]:xl:w-[calc(100%-74px)] flex flex-col min-h-screen transition-all duration-300">
              <div class="nk-header fixed start-0 w-full h-16 top-0 z-[1021] transition-all duration-300 min-w-[320px]">
                <div class="h-16 border-b bg-white dark:bg-gray-950 border-gray-200 dark:border-gray-900 px-1.5 sm:px-5">
                  <div class="container max-w-none">
                    <div class="relative flex items-center -mx-1">
                      <div class="px-1 me-4 -ms-1.5 xl:hidden">
                        <a href="#" class="sidebar-toggle [&>*]:pointer-events-none inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                          <em class="text-2xl text-slate-600 dark:text-slate-300 ni ni-menu"></em>
                        </a>
                      </div>
                      <div class="px-1 py-3.5 flex xl:hidden">
                        <a href="./index.html" class="relative inline-block transition-opacity duration-300 h-9">
                          <img class="h-full opacity-0 dark:opacity-100" src="images/logo.png" srcset="images/logo2x.png 2x" alt="logo" />
                          <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="images/logo-dark.png" srcset="images/logo-dark2x.png 2x" alt="logo" />
                        </a>
                      </div>
                      <div class="px-1 py-2 hidden xl:block">
                        <a class="flex items-center transition-all duration-300" href="#">
                          <div class="w-8 inline-flex flex-shrink-0">
                            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide text-primary-600"></em>
                          </div>
                          <div class="flex items-center max-w-[calc(100%-theme(spacing.8))]">
                            <p class="text-sm text-slate-600 dark:text-slate-300 font-medium text-ellipsis overflow-hidden whitespace-nowrap w-[calc(100%-theme(spacing.8))]"></p>
                            <button id="go-back">Back</button>
                          </div>
                        </a>
                      </div>
                      <div class="px-1 py-3.5 ms-auto">
                        <ul class="flex item-center -mx-1.5 sm:-mx-2.5">
                          <li class="dropdown px-1.5 sm:px-2.5 relative hidden sm:inline-flex">
                            <a href="#" tabindex="0" class="dropdown-toggle [&>*]:pointer-events-none peer inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900" data-offset="0,10" data-placement="bottom-end" data-rtl-placement="bottom-start">
                              <div class="inline-flex rounded-full h-6 w-6 overflow-hidden">
                                <img src="images/flags/english-sq.png" alt="" />
                              </div>
                            </a>
                            <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-t-3 border-gray-200 dark:border-gray-800 border-t-primary-600 dark:border-t-primary-600 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                       
                            </div>
                          </li>
                          <li class="dropdown px-1.5 sm:px-2.5 relative inline-flex">
                            <a tabindex="0" href="#" class="dropdown-toggle [&>*]:pointer-events-none peer inline-flex items-center group" data-offset="0,10" data-placement="bottom-end" data-rtl-placement="bottom-start">
                              <div class="flex items-center">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-500 h-8 w-8 rounded-full font-medium">
                                  <em class="ni ni-user-alt"></em>
                                </div>
                                <div class="hidden md:block ms-4">
                                  <div class="text-xs font-medium leading-none pt-0.5 pb-1.5 text-primary-500 group-hover:text-primary-600">Administrator</div>
                                  <div class="text-slate-600 dark:text-slate-400 text-xs font-bold flex items-center">Gabriel Rese <em class="text-sm leading-none ms-1 ni ni-chevron-down"></em></div>
                                </div>
                              </div>
                            </a>
                            <div tabindex="0" class="dropdown-menu clickable absolute max-xs:min-w-[240px] max-xs:max-w-[240px] min-w-[280px] max-w-[280px] border border-t-3 border-gray-200 dark:border-gray-800 border-t-primary-600 dark:border-t-primary-600 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                              <div class="hidden sm:block px-7 py-5 bg-slate-50 dark:bg-slate-900 border-b border-gray-200 dark:border-gray-800">
                                <div class="flex items-center">
                                  <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-500 h-10 w-10 rounded-full font-medium">
                                    <span>AB</span>
                                  </div>
                                  <div class="ms-4 flex flex-col">
                                    <span class="text-sm font-bold text-slate-700 dark:text-white">Gabriel Rese</span>
                                    <span class="text-xs text-slate-400 mt-1">info@paypaga.com</span>
                                  </div>
                                </div>
                              </div>
                              <ul class="py-3">
                                <li>
                                  <a class="relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" href="./user-profile-regular.html">
                                    <em class="text-lg leading-none w-7 ni ni-user-alt"></em>
                                    <span>View Profile</span>
                                  </a>
                                </li>
                                <li>
                                  <a class="relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" href="./user-profile-setting.html">
                                    <em class="text-lg leading-none w-7 ni ni-setting-alt"></em>
                                    <span>Account Setting</span>
                                  </a>
                                </li>
                               
                                <li>
                                  <a class="theme-toggle [&>*]:pointer-events-none relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" href="javascript:void(0)">
                                    <div class="flex dark:hidden items-center">
                                      <em class="text-lg leading-none w-7 ni ni-moon"></em>
                                      <span>Dark Mode</span>
                                    </div>
                                    <div class="hidden dark:flex items-center">
                                      <em class="text-lg leading-none w-7 ni ni-sun"></em>
                                      <span>Light Mode</span>
                                    </div>
                                    <div class="ms-auto relative h-6 w-12 rounded-full border-2 border-gray-200 dark:border-primary-600 bg-white dark:bg-primary-600">
                                      <div class="absolute start-0.5 dark:start-6.5 top-0.5 h-4 w-4 rounded-full bg-gray-200 dark:bg-white transition-all duration-300"></div>
                                    </div>
                                  </a>
                                </li>
                                <li class="block border-t border-gray-200 dark:border-gray-800 my-3"></li>
                                <li>
                                  <a class="relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" href="./pages/auths/auth-login.html">
                                    <em class="text-lg leading-none w-7 ni ni-signout"></em>
                                    <span>Sign out</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="dropdown px-1.5 sm:px-2.5 relative inline-flex">
                            <a tabindex="0" href="#" class="dropdown-toggle [&>*]:pointer-events-none peer inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 -me-1.5" data-offset="0,10" data-placement="bottom-end" data-rtl-placement="bottom-start">
                              <div class="relative inline-flex after:content-[''] after:absolute after:rounded-full after:end-0 after:top-px after:h-2.5 after:w-2.5 after:border-2 after:border-white after:bg-sky-400">
                                <em class="text-2xl leading-none text-slate-600 dark:text-slate-300 ni ni-bell"></em>
                              </div>
                            </a>
                            <div tabindex="0" class="dropdown-menu absolute max-xs:min-w-[240px] max-xs:max-w-[240px] min-w-[360px] max-w-[360px] border border-t-3 border-gray-200 dark:border-gray-800 border-t-primary-600 dark:border-t-primary-600 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                              <div class="flex items-center justify-between px-5 py-3 border-b border-gray-200 dark:border-gray-800">
                                <span class="text-sm font-normal">Notifications</span>
                                <a class="text-sm font-normal text-primary-600 hover:text-primary-700" href="#">Mark All as Read</a>
                              </div>
                              <div class="flex flex-col">
                                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                  <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-yellow-100 dark:bg-yellow-950 text-yellow-600">
                                    <em class="text-lg leading-none ni ni-curve-down-right"></em>
                                  </div>
                                  <div>
                                    <div class="text-sm text-slate-600 dark:text-slate-300">You have requested to <span>Widthdrawl</span></div>
                                    <div class="text-xs text-slate-400">2 hrs ago</div>
                                  </div>
                                </div>
                                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                  <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-green-100 dark:bg-green-950 text-green-600">
                                    <em class="text-lg leading-none ni ni-curve-down-left"></em>
                                  </div>
                                  <div>
                                    <div class="text-sm text-slate-600 dark:text-slate-300">Your Deposit Order is placed</div>
                                    <div class="text-xs text-slate-400">2 hrs ago</div>
                                  </div>
                                </div>
                                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                  <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-yellow-100 dark:bg-yellow-950 text-yellow-600">
                                    <em class="text-lg leading-none ni ni-curve-down-right"></em>
                                  </div>
                                  <div>
                                    <div class="text-sm text-slate-600 dark:text-slate-300">You have requested to <span>Widthdrawl</span></div>
                                    <div class="text-xs text-slate-400">2 hrs ago</div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex items-center justify-center px-5 py-3 border-t border-gray-200 dark:border-gray-800">
                                <a class="text-sm font-normal text-primary-600 hover:text-primary-700" href="#">View All</a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- container -->
                </div>
              </div>
              <!-- header -->
              <div id="pagecontent" class="nk-content mt-16 px-1.5 sm:px-5 py-6 sm:py-8">
                <div class="container max-w-none">
                  <div class="flex justify-between items-center pb-5 md:pb-7 relative">
                    <div>
                      <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">{{ __('Account Overview') }}</h3>
                      <p class="text-slate-400">{{ __('Welcome to PayPaga Dashboard') }}.</p>
                    </div>
                    <div>
                      <button data-target="#pageOptions" class="class-toggle sm:hidden [&>*]:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-v"></em>
                      </button>
                    </div>
                  </div>
                  <!-- block head -->
    
                 
                  <!-- grid -->
                </div>
              </div>
              <!-- content -->
              <div class="w-full min-w-[320px] mt-auto border-t bg-white dark:bg-gray-950 border-gray-200 dark:border-gray-900 px-1.5 sm:px-5 py-5">
                <div class="container max-w-none">
                  <div class="flex items-center justify-between flex-wrap">
                    <div class="text-sm text-slate-500 pb-1 sm:pb-0">
                      &copy; 2024 PayPaga
                    </div>
                    <ul class="flex flex-wrap -mx-3.5 -my-2">
                      <li class="inline-flex relative dropdown">
                        <button tabindex="0" data-placement="top-end" data-rtl-placement="top-start" class="dropdown-toggle peer [&>*]:pointer-events-none relative inline-flex items-center transition-all duration-300 px-4 py-2 text-slate-700 dark:text-white text-sm"><span>English</span> <em class="text-sm ms-1 ni ni-chevron-up"></em></button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                          <ul>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                              <a href="locale/en" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>{{ __('English') }}</span></a>
                            </li>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                              <a href="locale/es" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span class="language-name">{{ __('Spanish') }}</span></a>

                            


                            </li>
                        
                          </ul>
                        </div>
                      </li>
                    
                    </ul>
                  </div>
                </div>
                <!-- container -->
              </div>
              <!-- footer -->
            </div>
          </div>
        </div>
        <!-- root -->
      
        <!-- JavaScript -->
       
        @vite('resources/js/portal.js')
    
    
        <script>
          document.getElementById("go-back").addEventListener("click", () => {
            history.back();
          });
        </script>
      </body>
    </html>