<style>
    nav.bg-white.border-b.border-gray-100.w-full {
        position: fixed !important;
        z-index: 99 !important;
        top: 0px;
    }
    iframe#\:1\.container {
    display: none;
}
    .moovie_currentime span {
        color: white !important;
    }

    .goog-logo-link {
        display: none !important;
    }

    a.VIpgJd-ZVi9od-l4eHX-hSRGPd {
    display: none !important;
    }

    .goog-te-gadget {
        color: transparent !important;
    }
    .page-content {
    margin-top: 81px;
}
div#\:0\.targetLanguage {
    color: black;
}
div#google_translate_element {
    height: 41px;
}
    .show .offcanvas-start {
        transform: translateX(0%) !important;
    }

    .show .offcanvas {
        visibility: visible !important;
    }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/resources/css/custom.css">

<link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/tiny-slider/dist/tiny-slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/plyr/plyr.css" />


<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a class="" href="http://localhost/jetstream/dashboard">
                        <img class="light-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
                        <img class="dark-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
			       </a>
                    <!-- <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a> -->
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link>
                        <div id="google_translate_element"></div>
                    </x-jet-nav-link>
                </div>
            </div>
            <div class="">
                <form method="GET" action="{{ url('/search') }}" class="d-flex">
                    <div class="mt-3 bg-white mx-4">
                        <label for="search" class="hidden">Search</label>
                        <input id="search" ref="search" v-model="search" class="transition h-10 w-full bg-gray-100 border border-gray-500 focus:border-purple-400 outline-none cursor-pointer text-gray-700 px-4 pb-0 pt-px" :class="{ 'transition-border': search }" autocomplete="off" name="search" placeholder="Search" type="search" required />
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-3 px-4">Search</button>
                </form>
            </div>



              <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
              <!-- <li class="nav-item nav_icon ms-2">
					<a class="nav-link icon-md btn btn-light p-0" href="http://localhost/jetstream/messaging.html">
						<i class="bi bi-chat-left-text-fill fs-6"> </i>
					</a>
				</li> -->
                    <li class="nav-item nav_icon ms-2 mt-1">
                                <a class="nav-link icon-md btn btn-light p-0" href="http://localhost/jetstream/user/profile">
                                    <i class="bi bi-gear-fill fs-6"></i>
                                </a>
                            </li>
                    <li class="nav-item nav_icon dropdown ms-2 mt-1">
                            <a class="nav-link icon-md btn btn-light p-0" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <span class="badge-notif animation-blink"></span>
                                <i class="bi bi-bell-fill fs-6"> </i>
                            </a>
                <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0" aria-labelledby="notifDropdown">
                    <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                        <a class="small" href="#">Clear all</a>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush list-unstyled p-2">
                        <!-- Notif item -->
                        <li>
                            <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                            <div class="avatar text-center d-none d-sm-inline-block">
                                <img class="avatar-img rounded-circle" src="resources/images/avatar/01.jpg" alt="">
                            </div>
                            <div class="ms-sm-3">
                                <div class=" d-flex">
                                <p class="small mb-2"><b>Judy Nguyen</b> sent you a friend request.</p>
                                <p class="small ms-3 text-nowrap">Just now</p>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-sm py-1 btn-primary me-2">Accept </button>
                                <button class="btn btn-sm py-1 btn-danger-soft">Delete </button>
                            </div>
                            </div>
                        </div>
                        </li>
                        <!-- Notif item -->
                        <li>
                            <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
                            <div class="avatar text-center d-none d-sm-inline-block">
                                <img class="avatar-img rounded-circle" src="resources/images/avatar/02.jpg" alt="">
                            </div>
                            <div class="ms-sm-3 d-flex">
                                <div>
                                <p class="small mb-2">Wish <b>Amanda Reed</b> a happy birthday (Nov 12)</p>
                                <button class="btn btn-sm btn-outline-light py-1 me-2">Say happy birthday 🎂</button>
                                </div>
                                <p class="small ms-3">2min</p>
                            </div>
                            </div>
                        </li>
                        <!-- Notif item -->
                        <li>
                            <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                            <div class="avatar text-center d-none d-sm-inline-block">
                                <div class="avatar-img rounded-circle bg-success"><span class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span></div>
                            </div>
                            <div class="ms-sm-3">
                                <div class="d-flex">
                                <p class="small mb-2">Webestica has 15 like and 1 new activity</p>
                                <p class="small ms-3">1hr</p>
                                </div>
                            </div>
                            </a>
                        </li>
                        <!-- Notif item -->
                        <li>
                            <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 p-3 mb-1">
                            <div class="avatar text-center d-none d-sm-inline-block">
                                <img class="avatar-img rounded-circle" src="resources/images/logo/12.svg" alt="">
                            </div>
                            <div class="ms-sm-3 d-flex">
                                <p class="small mb-2"><b>Bootstrap in the news:</b> The search giant’s parent company, Alphabet, just joined an exclusive club of tech stocks.</p>
                                <p class="small ms-3">4hr</p>
                            </div>
                            </a>
                        </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-sm btn-primary-soft">See all incoming activity</a>
                    </div>
                    </div>
                </div>
                </li>
                <!-- Notification dropdown END -->

              <!-- <li class="nav-item ms-2 dropdown">
					<a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-2" src="assets/images/avatar/07.jpg" alt="">
					</a> -->
          <!-- <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3" aria-labelledby="profileDropdown"> -->
            <!-- Profile info -->
            <!-- <li class="px-3"> -->
              <!-- <div class="d-flex align-items-center position-relative"> -->
                <!-- Avatar -->
                <!-- <div class="avatar me-3">
                  <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
                </div>
                <div>
                  <a class="h6 stretched-link" href="#">Lori Ferguson</a>
                  <p class="small m-0">Web Developer</p>
                </div> -->
              <!-- </div> -->
              <!-- <a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center" href="my-profile.html">View profile</a>
            </li> -->
            <!-- Links -->
            <!-- <li><a class="dropdown-item" href="settings.html"><i class="bi bi-gear fa-fw me-2"></i>Settings & Privacy</a></li>
            <li>
              <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                <i class="fa-fw bi bi-life-preserver me-2"></i>Support
              </a>
            </li> -->

            <!-- <li class="dropdown-divider"></li>
            <li><a class="dropdown-item bg-danger-soft-hover" href="sign-in-advance.html"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
            <li> <hr class="dropdown-divider"></li> -->
            <!-- Dark mode switch START -->
            <!-- <li>
              <div class="modeswitch-wrap" id="darkModeSwitch">
                <div class="modeswitch-item">
                  <div class="modeswitch-icon"></div>
                </div>
                <span>Dark mode</span>
              </div>
            </li>  -->
            <!-- Dark mode switch END -->
          <!-- </ul> -->
				<!-- </li> -->

              </ul>


            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">

                                    {{ Auth::user() ? Auth::user()->currentTeam->name : ''}}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Team Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user() ? Auth::user()->currentTeam->id : '')}}">
                                    {{ __('Team Settings') }}
                                </x-jet-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                                @endcan

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                                @endforeach
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user() ? Auth::user()->profile_photo_url : '' }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                    {{ Auth::user() ? Auth::user()->name:'' }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user() ? Auth::user()->profile_photo_url : '' }}" alt="{{ Auth::user()->name }}" />
                </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user() ? Auth::user()->name : '' }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user() ? Auth::user()->email : '' }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                    {{ __('API Tokens') }}
                </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="border-t border-gray-200"></div>

                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user() ?  Auth::user()->currentTeam->id : '')}}" :active="request()->routeIs('teams.show')">
                    {{ __('Team Settings') }}
                </x-jet-responsive-nav-link>

                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                    {{ __('Create New Team') }}
                </x-jet-responsive-nav-link>
                @endcan

                <div class="border-t border-gray-200"></div>

                <!-- Team Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Switch Teams') }}
                </div>

                @foreach (Auth::user()->allTeams() as $team)
                <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>


