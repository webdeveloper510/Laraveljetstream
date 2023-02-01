<x-app-layout>
    <x-slot name="header">
    {{-- <header class="navbar-light fixed-top header-static bg-mode">

<!-- Logo Nav START -->
<nav class="navbar navbar-expand-lg">
  <div class="container">

    <a class="navbar-brand" href="index.html">
      <img class="light-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
      <img class="dark-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
    </a>


    <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-animation">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </button>


    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0 w-100">
        <div class="nav-item w-100">
          <form class="rounded position-relative">
            <input class="form-control ps-5 bg-light" type="search" placeholder="Search..." aria-label="Search">
            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y"
              type="submit"><i class="bi bi-search fs-5"> </i></button>
          </form>
        </div>
      </div>


      <ul class="navbar-nav navbar-nav-scroll ms-auto">
      </ul>
    </div>



    <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
      <li class="nav-item ms-2">
        <a class="nav-link icon-md btn btn-light p-0" href="messaging.html">
          <i class="bi bi-chat-left-text-fill fs-6"> </i>
        </a>
      </li>
      <li class="nav-item ms-2">
        <a class="nav-link icon-md btn btn-light p-0" href="settings.html">
          <i class="bi bi-gear-fill fs-6"> </i>
        </a>
      </li>
      <li class="nav-item dropdown ms-2">
        <a class="nav-link icon-md btn btn-light p-0" href="#" id="notifDropdown" role="button"
          data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
          <span class="badge-notif animation-blink"></span>
          <i class="bi bi-bell-fill fs-6"> </i>
        </a>
        <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0"
          aria-labelledby="notifDropdown">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4
                  new</span></h6>
              <a class="small" href="#">Clear all</a>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush list-unstyled p-2">

                <li>
                  <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                    <div class="avatar text-center d-none d-sm-inline-block">
                      <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
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

                <li>
                  <div
                    class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
                    <div class="avatar text-center d-none d-sm-inline-block">
                      <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
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

                <li>
                  <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                    <div class="avatar text-center d-none d-sm-inline-block">
                      <div class="avatar-img rounded-circle bg-success"><span
                          class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span>
                      </div>
                    </div>
                    <div class="ms-sm-3">
                      <div class="d-flex">
                        <p class="small mb-2">Webestica has 15 like and 1 new activity</p>
                        <p class="small ms-3">1hr</p>
                      </div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 p-3 mb-1">
                    <div class="avatar text-center d-none d-sm-inline-block">
                      <img class="avatar-img rounded-circle" src="assets/images/logo/12.svg" alt="">
                    </div>
                    <div class="ms-sm-3 d-flex">
                      <p class="small mb-2"><b>Bootstrap in the news:</b> The search giant’s parent company,
                        Alphabet, just joined an exclusive club of tech stocks.</p>
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


      <li class="nav-item ms-2 dropdown">
        <a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside"
          data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="avatar-img rounded-2" src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/07.jpg" alt="">
        </a>
        <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3"
          aria-labelledby="profileDropdown">

          <li class="px-3">
            <div class="d-flex align-items-center position-relative">

              <div class="avatar me-3">
                <img class="avatar-img rounded-circle" src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/07.jpg" alt="avatar">
              </div>
              <div>
                <a class="h6 stretched-link" href="#">Lori Ferguson</a>
                <p class="small m-0">Web Developer</p>
              </div>
            </div>
            <a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center" href="my-profile.html">View
              profile</a>
          </li>

          <li><a class="dropdown-item" href="settings.html"><i class="bi bi-gear fa-fw me-2"></i>Settings &
              Privacy</a></li>
          <li>
            <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
              <i class="fa-fw bi bi-life-preserver me-2"></i>Support
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="docs/index.html" target="_blank">
              <i class="fa-fw bi bi-card-text me-2"></i>Documentation
            </a>
          </li>
          <li class="dropdown-divider"></li>
          <li><a class="dropdown-item bg-danger-soft-hover" href="sign-in-advance.html"><i
                class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <div class="modeswitch-wrap" id="darkModeSwitch">
              <div class="modeswitch-item">
                <div class="modeswitch-icon"></div>
              </div>
              <span>Dark mode</span>
            </div>
          </li>

        </ul>
      </li>

    </ul>

  </div>
</nav>

</header> --}}
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2> -->
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>
                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
