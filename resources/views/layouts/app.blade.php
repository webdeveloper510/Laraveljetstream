<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

		  <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">

         <script src="{{ asset('public/js/app.js') }}" defer></script>

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
		-->
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo URL::to('/'); ?>/public/assets/images/favicon.ico">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

        <!-- Plugins CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/font-awesome/css/all.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/tiny-slider/dist/tiny-slider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/plyr/plyr.css" />

        <link rel="stylesheet" type="css/text" href="<?php echo URL::to('/'); ?>/public/css/style_custom.css" />
        <!-- Theme CSS -->
        <link id="style-switch" rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/public/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/public/css/owl.theme.default.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="<?php echo URL::to('/'); ?>/public/js/script.js"></script>
        <script src="<?php echo URL::to('/'); ?>/public/js/owl.carousel.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow opacity-0 z-0">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
 {{-- --------------------------Translator----------------------}}
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
    $(window).load(function() {
        $(".goog-logo-link").empty();
        $('.goog-te-gadget').html($('.goog-te-gadget').children());
    })
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
</html>
