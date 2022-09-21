
@include('header')

 <div class="mains">
    <img src="https://images.pexels.com/photos/4534200/pexels-photo-4534200.jpeg?auto=compress&cs=tinysrgb&w=600"  width="100%" height="300px"/>

    <div class="container-fluid">
      <div class="text-banner">
        <div class="row">
            <div class="col-md-4 d-flex">
               <img src="https://images.pexels.com/photos/4534200/pexels-photo-4534200.jpeg?auto=compress&cs=tinysrgb&w=600" width="80px" height="80px" class="profile"/>
               <div class="username">
                <h4 class="m-0">Varicent</h4>
                <p class="m-0">190 Subscriber</p>
               </div>
            </div>
            <div class="col-md-8">
                <div class="text-sm-end p-4">
                  <button class="btn btn-outline-primary" type="button">Join</button>
                    <button class="btn btn-danger" type="button">SUBSCRIBE</button>
                </div>
            </div>
        </div>
    </div>
 </div>
 </div>


    <!------------------------------------------ Tabs list section ------------------------------------------------>


<div class="py-3 mb-4 pills-color">
  <div class="container-fluid">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">HOME</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">VIDEOS</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">PLAYLISTS</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-community-tab" data-bs-toggle="pill" data-bs-target="#pills-community" type="button" role="tab" aria-controls="pills-community" aria-selected="false">COMMUNITY</button>
    </li>
      <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-channel-tab" data-bs-toggle="pill" data-bs-target="#pills-channel" type="button" role="tab" aria-controls="pills-channel" aria-selected="false">CHANNELS</button>
      </li>
      <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ABOUT</button>
      </li>

    </ul>
  </div>
</div>

 <!------------------------------------------ Tabs Content section ------------------------------------------------>

   <div class="container-fluid">

      <div class="tab-content" id="pills-tabContent">
         <!-- ------------------------------Home section tab ----------------------->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="Video-setion">
            <div class="row">
               <div class="col-md-5">
               <div hidden="" id="sprite-plyr"><!--?xml version="1.0" encoding="UTF-8"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol id="plyr-airplay" viewBox="0 0 18 18"><path d="M16 1H2a1 1 0 00-1 1v10a1 1 0 001 1h3v-2H3V3h12v8h-2v2h3a1 1 0 001-1V2a1 1 0 00-1-1z"></path><path d="M4 17h10l-5-6z"></path></symbol><symbol id="plyr-captions-off" viewBox="0 0 18 18"><path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd" fill-opacity=".5"></path></symbol><symbol id="plyr-captions-on" viewBox="0 0 18 18"><path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd"></path></symbol><symbol id="plyr-download" viewBox="0 0 18 18"><path d="M9 13c.3 0 .5-.1.7-.3L15.4 7 14 5.6l-4 4V1H8v8.6l-4-4L2.6 7l5.7 5.7c.2.2.4.3.7.3zm-7 2h14v2H2z"></path></symbol><symbol id="plyr-enter-fullscreen" viewBox="0 0 18 18"><path d="M10 3h3.6l-4 4L11 8.4l4-4V8h2V1h-7zM7 9.6l-4 4V10H1v7h7v-2H4.4l4-4z"></path></symbol><symbol id="plyr-exit-fullscreen" viewBox="0 0 18 18"><path d="M1 12h3.6l-4 4L2 17.4l4-4V17h2v-7H1zM16 .6l-4 4V1h-2v7h7V6h-3.6l4-4z"></path></symbol><symbol id="plyr-fast-forward" viewBox="0 0 18 18"><path d="M7.875 7.171L0 1v16l7.875-6.171V17L18 9 7.875 1z"></path></symbol><symbol id="plyr-logo-vimeo" viewBox="0 0 18 18"><path d="M17 5.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C5 10.9 4.4 6 3 6c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z"></path></symbol><symbol id="plyr-logo-youtube" viewBox="0 0 18 18"><path d="M16.8 5.8c-.2-1.3-.8-2.2-2.2-2.4C12.4 3 9 3 9 3s-3.4 0-5.6.4C2 3.6 1.3 4.5 1.2 5.8 1 7.1 1 9 1 9s0 1.9.2 3.2c.2 1.3.8 2.2 2.2 2.4C5.6 15 9 15 9 15s3.4 0 5.6-.4c1.4-.3 2-1.1 2.2-2.4.2-1.3.2-3.2.2-3.2s0-1.9-.2-3.2zM7 12V6l5 3-5 3z"></path></symbol><symbol id="plyr-muted" viewBox="0 0 18 18"><path d="M12.4 12.5l2.1-2.1 2.1 2.1 1.4-1.4L15.9 9 18 6.9l-1.4-1.4-2.1 2.1-2.1-2.1L11 6.9 13.1 9 11 11.1zM3.786 6.008H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"></path></symbol><symbol id="plyr-pause" viewBox="0 0 18 18"><path d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zm6 0c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z"></path></symbol><symbol id="plyr-pip" viewBox="0 0 18 18"><path d="M13.293 3.293L7.022 9.564l1.414 1.414 6.271-6.271L17 7V1h-6z"></path><path d="M13 15H3V5h5V3H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1v-6h-2v5z"></path></symbol><symbol id="plyr-play" viewBox="0 0 18 18"><path d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z"></path></symbol><symbol id="plyr-restart" viewBox="0 0 18 18"><path d="M9.7 1.2l.7 6.4 2.1-2.1c1.9 1.9 1.9 5.1 0 7-.9 1-2.2 1.5-3.5 1.5-1.3 0-2.6-.5-3.5-1.5-1.9-1.9-1.9-5.1 0-7 .6-.6 1.4-1.1 2.3-1.3l-.6-1.9C6 2.6 4.9 3.2 4 4.1 1.3 6.8 1.3 11.2 4 14c1.3 1.3 3.1 2 4.9 2 1.9 0 3.6-.7 4.9-2 2.7-2.7 2.7-7.1 0-9.9L16 1.9l-6.3-.7z"></path></symbol><symbol id="plyr-rewind" viewBox="0 0 18 18"><path d="M10.125 1L0 9l10.125 8v-6.171L18 17V1l-7.875 6.171z"></path></symbol><symbol id="plyr-settings" viewBox="0 0 18 18"><path d="M16.135 7.784a2 2 0 01-1.23-2.969c.322-.536.225-.998-.094-1.316l-.31-.31c-.318-.318-.78-.415-1.316-.094a2 2 0 01-2.969-1.23C10.065 1.258 9.669 1 9.219 1h-.438c-.45 0-.845.258-.997.865a2 2 0 01-2.969 1.23c-.536-.322-.999-.225-1.317.093l-.31.31c-.318.318-.415.781-.093 1.317a2 2 0 01-1.23 2.969C1.26 7.935 1 8.33 1 8.781v.438c0 .45.258.845.865.997a2 2 0 011.23 2.969c-.322.536-.225.998.094 1.316l.31.31c.319.319.782.415 1.316.094a2 2 0 012.969 1.23c.151.607.547.865.997.865h.438c.45 0 .845-.258.997-.865a2 2 0 012.969-1.23c.535.321.997.225 1.316-.094l.31-.31c.318-.318.415-.781.094-1.316a2 2 0 011.23-2.969c.607-.151.865-.547.865-.997v-.438c0-.451-.26-.846-.865-.997zM9 12a3 3 0 110-6 3 3 0 010 6z"></path></symbol><symbol id="plyr-volume" viewBox="0 0 18 18"><path d="M15.6 3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4C15.4 5.9 16 7.4 16 9c0 1.6-.6 3.1-1.8 4.3-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3C17.1 13.2 18 11.2 18 9s-.9-4.2-2.4-5.7z"></path><path d="M11.282 5.282a.909.909 0 000 1.316c.735.735.995 1.458.995 2.402 0 .936-.425 1.917-.995 2.487a.909.909 0 000 1.316c.145.145.636.262 1.018.156a.725.725 0 00.298-.156C13.773 11.733 14.13 10.16 14.13 9c0-.17-.002-.34-.011-.51-.053-.992-.319-2.005-1.522-3.208a.909.909 0 00-1.316 0zm-7.496.726H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"></path></symbol></svg></div>
  <div class="container">
	<div tabindex="0" class="plyr plyr--full-ui plyr--video plyr--html5 plyr--fullscreen-enabled plyr--paused plyr--stopped plyr--pip-supported plyr--captions-active plyr--captions-enabled plyr__poster-enabled"><div class="plyr__controls"><button class="plyr__controls__item plyr__control" type="button" data-plyr="play" aria-label="Play"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-pause"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="label--pressed plyr__sr-only">Pause</span><span class="label--not-pressed plyr__sr-only">Play</span></button><div class="plyr__controls__item plyr__progress__container"><div class="plyr__progress"><input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="183.126" aria-valuenow="0" id="plyr-seek-4319" aria-valuetext="00:00 of 03:03" style="--value:0%;"><progress class="plyr__progress__buffer" min="0" max="100" value="0" role="progressbar" aria-hidden="true">% buffered</progress><span class="plyr__tooltip">00:00</span></div></div><div class="plyr__controls__item plyr__time--current plyr__time" aria-label="Current time">03:03</div><div class="plyr__controls__item plyr__volume"><button type="button" class="plyr__control" data-plyr="mute"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-muted"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-volume"></use></svg><span class="label--pressed plyr__sr-only">Unmute</span><span class="label--not-pressed plyr__sr-only">Mute</span></button><input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-4319" aria-valuetext="100.0%" style="--value:100%;"></div><button class="plyr__controls__item plyr__control plyr__control--pressed" type="button" data-plyr="captions"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-captions-on"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-captions-off"></use></svg><span class="label--pressed plyr__sr-only">Disable captions</span><span class="label--not-pressed plyr__sr-only">Enable captions</span></button><div class="plyr__controls__item plyr__menu"><button aria-haspopup="true" aria-controls="plyr-settings-4319" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings"><svg aria-hidden="true" focusable="false"><use xlink:href="#plyr-settings"></use></svg><span class="plyr__sr-only">Settings</span></button><div class="plyr__menu__container" id="plyr-settings-4319" hidden=""><div><div id="plyr-settings-4319-home"><div role="menu"><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Captions<span class="plyr__menu__value">English</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Quality<span class="plyr__menu__value">576p</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Speed<span class="plyr__menu__value">Normal</span></span></button></div></div><div id="plyr-settings-4319-captions" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Captions</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="-1"><span>Disabled</span></button><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="0"><span>English<span class="plyr__menu__value"><span class="plyr__badge">EN</span></span></span></button><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1"><span>Français<span class="plyr__menu__value"><span class="plyr__badge">FR</span></span></span></button></div></div><div id="plyr-settings-4319-quality" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Quality</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1080"><span>1080p<span class="plyr__menu__value"><span class="plyr__badge">HD</span></span></span></button><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="720"><span>720p<span class="plyr__menu__value"><span class="plyr__badge">HD</span></span></span></button><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="576"><span>576p<span class="plyr__menu__value"><span class="plyr__badge">SD</span></span></span></button></div></div><div id="plyr-settings-4319-speed" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.5"><span>0.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.75"><span>0.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="1"><span>Normal</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.25"><span>1.25×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.5"><span>1.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.75"><span>1.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="2"><span>2×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="4"><span>4×</span></button></div></div></div></div></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="pip"><svg aria-hidden="true" focusable="false"><use xlink:href="#plyr-pip"></use></svg><span class="plyr__sr-only">PIP</span></button><button class="plyr__controls__item plyr__control" type="button" data-plyr="fullscreen"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-exit-fullscreen"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-enter-fullscreen"></use></svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span class="label--not-pressed plyr__sr-only">Enter fullscreen</span></button></div><div class="plyr__video-wrapper">
    <video crossorigin="" playsinline="" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" data-poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
		 <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
			<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
			<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">

			<!-- Caption files -->
			<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default="">
			<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
			<!-- Fallback for browsers that don't support the <video> element -->
			<a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download="">Download</a>
	</video><div class="plyr__poster" style="background-image: url(&quot;https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg&quot;);"></div></div><div class="plyr__captions"></div><button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play"><svg aria-hidden="true" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="plyr__sr-only">Play</span></button></div>
</div>
               </div>
               <div class="col-md-5">
                <p class="m-0"><b>What is Lorem Ipsum?</b></p>
                <div class="views">
                  <p class="py-2 m-0">2,800,658 views
                    4 months ago</p>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
               </div>
            </div>
            <hr/>

            <div class="row">
              <div class="col-12">
                <h3 class="d-flex">Uploads <button class="btn btn-sm btn-outline-primery d-flex"><span class="material-symbols-outlined">
                  play_arrow
                  </span> <span class="btn-text">Play All</span></button></h3>

              </div>

              <div class="col-md-3">
              <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                <div class="card">
                  
                  <div class="card-body">
                 
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class="views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
              <hr/>

     <!--------------------------------------- Shorts section start ------------------------------------->

     <div class="row">
      <div class="col-12">
        <h3 class="d-flex">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 30px; height: 30px;"><g width="24" height="24" viewBox="0 0 24 24" class="style-scope yt-icon"><g class="style-scope yt-icon"><path d="M17.77,10.32l-1.2-.5L18,9.06a3.74,3.74,0,0,0-3.5-6.62L6,6.94a3.74,3.74,0,0,0,.23,6.74l1.2.49L6,14.93a3.75,3.75,0,0,0,3.5,6.63l8.5-4.5a3.74,3.74,0,0,0-.23-6.74Z" fill="red" class="style-scope yt-icon"></path><polygon points="10 14.65 15 12 10 9.35 10 14.65" fill="#fff" class="style-scope yt-icon"></polygon></g></g></svg>
          Shorts <button class="btn btn-sm btn-outline-primery d-flex"><span class="material-symbols-outlined">
          play_arrow
          </span> <span class="btn-text">Play All</span></button></h3>

      </div>



      <div class="col-md-3">
        <div class="card">
        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
          <div class="card-body">
            <p class="m-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class=" views">
                <ul>
                  <li>47k views</li>
                  <li>18 hours ago</li>
                </ul>
            </div>
            <a class="" href="#" role="button" id="dropdown1" >
              <span class="material-symbols-outlined">
                more_vert
                </span>
            </a>
            <div class="Queue">
              <div class="dropdown">
                <ul class="dropdown-menu1">
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_play
                    </span> Add to Queue</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    schedule
                    </span>  Save to Watch later</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_add
                    </span> Save to Playlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
          <div class="card-body">
            <p class="m-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class=" views">
                <ul>
                  <li>47k views</li>
                  <li>18 hours ago</li>
                </ul>
            </div>
            <a class="" href="#" role="button" id="dropdown1" >
              <span class="material-symbols-outlined">
                more_vert
                </span>
            </a>
            <div class="Queue">
              <div class="dropdown">
                <ul class="dropdown-menu1">
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_play
                    </span> Add to Queue</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    schedule
                    </span>  Save to Watch later</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_add
                    </span> Save to Playlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
          <div class="card-body">
            <p class="m-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class=" views">
                <ul>
                  <li>47k views</li>
                  <li>18 hours ago</li>
                </ul>
            </div>
            <a class="" href="#" role="button" id="dropdown1" >
              <span class="material-symbols-outlined">
                more_vert
                </span>
            </a>
            <div class="Queue">
              <div class="dropdown">
                <ul class="dropdown-menu1">
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_play
                    </span> Add to Queue</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    schedule
                    </span>  Save to Watch later</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_add
                    </span> Save to Playlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
          <div class="card-body">
            <p class="m-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class=" views">
                <ul>
                  <li>47k views</li>
                  <li>18 hours ago</li>
                </ul>
            </div>
            <a class="" href="#" role="button" id="dropdown1" >
              <span class="material-symbols-outlined">
                more_vert
                </span>
            </a>
            <div class="Queue">
              <div class="dropdown">
                <ul class="dropdown-menu1">
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_play
                    </span> Add to Queue</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    schedule
                    </span>  Save to Watch later</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_add
                    </span> Save to Playlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
 <!--------------------------------------- Funny section start ------------------------------------->
             <hr/>
 <div class="row">
      <div class="col-12">
        <h3 class="d-flex">
           Fun <button class="btn btn-sm btn-outline-primery d-flex"><span class="material-symbols-outlined">
          play_arrow
          </span> <span class="btn-text">Play All</span></button></h3>

      </div>



      <div class="col-md-3">
        <div class="card">
        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
          <div class="card-body">
            <p class="m-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class=" views">
                <ul>
                  <li>47k views</li>
                  <li>18 hours ago</li>
                </ul>
            </div>
            <a class="" href="#" role="button" id="dropdown1" >
              <span class="material-symbols-outlined">
                more_vert
                </span>
            </a>
            <div class="Queue">
              <div class="dropdown">
                <ul class="dropdown-menu1">
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_play
                    </span> Add to Queue</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    schedule
                    </span>  Save to Watch later</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_add
                    </span> Save to Playlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
          <div class="card-body">
            <p class="m-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class=" views">
                <ul>
                  <li>47k views</li>
                  <li>18 hours ago</li>
                </ul>
            </div>
            <a class="" href="#" role="button" id="dropdown1" >
              <span class="material-symbols-outlined">
                more_vert
                </span>
            </a>
            <div class="Queue">
              <div class="dropdown">
                <ul class="dropdown-menu1">
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_play
                    </span> Add to Queue</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    schedule
                    </span>  Save to Watch later</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_add
                    </span> Save to Playlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
          <div class="card-body">
            <p class="m-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class=" views">
                <ul>
                  <li>47k views</li>
                  <li>18 hours ago</li>
                </ul>
            </div>
            <a class="" href="#" role="button" id="dropdown1" >
              <span class="material-symbols-outlined">
                more_vert
                </span>
            </a>
            <div class="Queue">
              <div class="dropdown">
                <ul class="dropdown-menu1">
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_play
                    </span> Add to Queue</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    schedule
                    </span>  Save to Watch later</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_add
                    </span> Save to Playlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
          <div class="card-body">
            <p class="m-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class=" views">
                <ul>
                  <li>47k views</li>
                  <li>18 hours ago</li>
                </ul>
            </div>
            <a class="" href="#" role="button" id="dropdown1" >
              <span class="material-symbols-outlined">
                more_vert
                </span>
            </a>
            <div class="Queue">
              <div class="dropdown">
                <ul class="dropdown-menu1">
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_play
                    </span> Add to Queue</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    schedule
                    </span>  Save to Watch later</a></li>
                  <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                    playlist_add
                    </span> Save to Playlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
          </div>
        </div>
        <!-- ------------------------------Videos section tab ----------------------->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="row">
            <div class="col-md-3">
              <select class="form-select" aria-label="Default select example">
                <option selected> Upload</option>
                <option value="1">All videos</option>
                <option value="2">Upcoming live streams</option>
                <option value="3">Past live streams</option>
              </select>
            </div>
          </div>

          <div class="video-setion my-3">
             <div class="row">
<!-- ------------------------------ist row ----------------------->

              <div class="col-md-3 mb-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                   <!-- ------------------------------2nd row ----------------------->
              <div class="col-md-3 mb-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                  <div class="card-body">
                    <p class="m-0">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- ------------------------------3rd row ----------------------->


             </div>
          </div>
        </div>
         <!-- ------------------------------Playlist section tab ----------------------->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="playlist-data">
              <!-- ------------------------------Created playlists section  ----------------------->

            <div class="row">
              <div class="col-md-12">
                <h5>Created playlists</h5>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="imagess">
                  <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                    <div class="thumb-icons">
                        <p class="mb-0">7</p>
                        <p><span class="material-symbols-outlined">
                          playlist_play
                          </span></p>
                    </div>
                  </div>
                  <p class="pt-3">Title rounting</p>
                  <small>VIEW FULL PLAYLIST</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="imagess">
                  <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                    <div class="thumb-icons">
                        <p class="mb-0">7</p>
                        <p><span class="material-symbols-outlined">
                          playlist_play
                          </span></p>
                    </div>
                  </div>
               <p class="pt-3">Title rounting</p>
                  <small>VIEW FULL PLAYLIST</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="imagess">
                  <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                    <div class="thumb-icons">
                        <p class="mb-0">7</p>
                        <p><span class="material-symbols-outlined">
                          playlist_play
                          </span></p>
                    </div>
                  </div>
               <p class="pt-3">Title rounting</p>
                  <small>VIEW FULL PLAYLIST</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="imagess">
                  <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                    <div class="thumb-icons">
                        <p class="mb-0">7</p>
                        <p><span class="material-symbols-outlined">
                          playlist_play
                          </span></p>
                    </div>
                  </div>
               <p class="pt-3">Title rounting</p>
                  <small>VIEW FULL PLAYLIST</small>
                </div>
              </div>

            </div>
            <hr/>

         <!-- ------------------------------Multiple playlists section  ----------------------->

            <div class="row">
              <div class="col-md-12">
                <h5>Multiple playlists</h5>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="imagess">
                  <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                    <div class="thumb-icons">
                        <p class="mb-0">7</p>
                        <p><span class="material-symbols-outlined">
                          playlist_play
                          </span></p>
                    </div>
                  </div>
                  <p class="pt-3">Title rounting</p>
                  <small>VIEW FULL PLAYLIST</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="imagess">
                  <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                    <div class="thumb-icons">
                        <p class="mb-0">7</p>
                        <p><span class="material-symbols-outlined">
                          playlist_play
                          </span></p>
                    </div>
                  </div>
               <p class="pt-3">Title rounting</p>
                  <small>VIEW FULL PLAYLIST</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="imagess">
                  <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                    <div class="thumb-icons">
                        <p class="mb-0">7</p>
                        <p><span class="material-symbols-outlined">
                          playlist_play
                          </span></p>
                    </div>
                  </div>
               <p class="pt-3">Title rounting</p>
                  <small>VIEW FULL PLAYLIST</small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="imagess">
                  <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                    <div class="thumb-icons">
                        <p class="mb-0">7</p>
                        <p><span class="material-symbols-outlined">
                          playlist_play
                          </span></p>
                    </div>
                  </div>
               <p class="pt-3">Title rounting</p>
                  <small>VIEW FULL PLAYLIST</small>
                </div>
              </div>

            </div>
          </div>
        </div>
          <!-- ------------------------------community section tab ----------------------->
        <div class="tab-pane fade" id="pills-community" role="tabpanel" aria-labelledby="pills-community-tab">
          <div class="communitys">
            <div class="row">
              <div class="col-md-10">
                <div class="card">
                     <div class="row">
                      <div class="col-md-2 text-end">
                        <div class="communit-img">
                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" height="80px" width="80px" />
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6>Username    <small> 10 days ago</small></h6>
                          <p>Thank you V.  This is an honour for me ❤️❤️❤️
                          </p>
                          <img src="https://images.pexels.com/photos/4534200/pexels-photo-4534200.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid"/>

                          <div class=" react" >
                            <p> <span class="material-symbols-outlined">
                              thumb_up
                              </span> 12</p>
                              <p><span class="material-symbols-outlined">
                                thumb_down
                                </span> </p>
                                <p><span class="material-symbols-outlined">
                                  chat
                                  </span> 23</p>
                          </div>
                      </div>
                      <div class="col-md-2">
                        <div class="cont text-end">
                          <span class="material-symbols-outlined">
                            more_vert
                            </span>
                        </div>
                      </div>
                     </div>
                </div>
              </div>
              <div class="col-md-2">

              </div>
            </div>

          </div>
        </div>

        <!-- ------------------------------Channels section tab ----------------------->
        <div class="tab-pane fade" id="pills-channel" role="tabpanel" aria-labelledby="pills-channel-tab">
          <div class="subs">
            <h6>Subscriptions</h6>
            <div class="row">
              <div class="col-md-2 card text-center">
                 <div class="cover">
                 <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                 </div>
                 <h5>Channel Name</h5>
                 <p>1 Subscriber</p>
                 <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
              </div>
              <div class="col-md-2 card text-center">
                <div class="cover">
                <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
                 </div>
                <h5>Channel Name</h5>
                <p>1 Subscriber</p>
                <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
             </div>
             <div class="col-md-2 card text-center">
              <div class="cover">
                <img src="./hq720.webp" class="img-fluid"/>
               </div>
              <h5>Channel Name</h5>
              <p>1 Subscriber</p>
              <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
           </div>
           <div class="col-md-2 card text-center">
            <div class="cover">
              <img src="./hq720.webp" class="img-fluid"/>
             </div>
            <h5>Channel Name</h5>
            <p>1 Subscriber</p>
            <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
         </div>
         <div class="col-md-2 card text-center">
          <div class="cover">
                  <img src="./hq720.webp" class="img-fluid"/>
                 </div>
          <h5>Channel Name</h5>
          <p>1 Subscriber</p>
          <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
       </div>

       <div class="col-md-2 card text-center">
        <div class="cover">
                <img src="./hq720.webp" class="img-fluid"/>
               </div>
        <h5>Channel Name</h5>
        <p>1 Subscriber</p>
        <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
     </div>
     <div class="col-md-2 card text-center">
      <div class="cover">
              <img src="./hq720.webp" class="img-fluid"/>
             </div>
      <h5>Channel Name</h5>
      <p>1 Subscriber</p>
      <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
   </div>

   <div class="col-md-2 card text-center">
    <div class="cover">
            <img src="./hq720.webp" class="img-fluid"/>
           </div>
    <h5>Channel Name</h5>
    <p>1 Subscriber</p>
    <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
 </div>
 <div class="col-md-2 card text-center">
  <div class="cover">
          <img src="./hq720.webp" class="img-fluid"/>
         </div>
  <h5>Channel Name</h5>
  <p>1 Subscriber</p>
  <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
</div>

<div class="col-md-2 card text-center">
<div class="cover">
        <img src="./hq720.webp" class="img-fluid"/>
       </div>
<h5>Channel Name</h5>
<p>1 Subscriber</p>
<button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
</div>
<div class="col-md-2 card text-center">
  <div class="cover">
          <img src="./hq720.webp" class="img-fluid"/>
         </div>
  <h5>Channel Name</h5>
  <p>1 Subscriber</p>
  <button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
</div>

<div class="col-md-2 card text-center">
<div class="cover">
        <img src="./hq720.webp" class="img-fluid"/>
       </div>
<h5>Channel Name</h5>
<p>1 Subscriber</p>
<button class="btn btn-secondary btn-sm"> SUBSCRIBE</button>
</div>
            </div>
          </div>
        </div>
         <!-- ------------------------------About section tab ----------------------->
        <div class="tab-pane fade" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
          <div class="about-data">
            <div class="row">
              <div class="col-md-8">
                <p>Description            </p>
                <p>This channel is about learning code step by step and we provide videos for PHP, react js,
                  react native, JavaScript, sencha, angular, and ext js tutorial by anil Sidhu and bhasker verma
               <br/>we make videos on Hindi and English both language
              </p>
              <p>Instagram : code.steps          </p>
              <!----- Details css ------>
              <hr/>
              <div class="Details">

                 <p>Details</p>
                 <div class="d-flex align-items-sm-baseline">
                  <p class="left">For business inquiries: </p>
                  <button class="btn btn-primery" type="button">VIEW EMAIL ADDRESS</button>
                </div>
                <div class="d-flex align-items-sm-baseline">
                  <p class="left">Location:	 </p>
                  <p class="ps-3">United States
                  </p>
                </div>
              </div>
              <hr/>

              <!-- Links start -->
              <p>Links</p>
              <div class="d-flex align-items-sm-baseline"">
                <a href="" class="left">Instagram </a>
                <a href="" >github </a>
              </div>
             <a href="">Linkedin</a>
                <hr/>


              </div>
              <div class="col-md-4">
                <div class="stats">

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b> Status </b></li>
                    <li class="list-group-item">Joined Aug 29, 2015</li>
                    <li class="list-group-item">28,390,763 views</li>
                    <li class="list-group-item"><span class="material-symbols-outlined">
                      flag
                      </span></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
</div>

  </div>
</div>
</body>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
<script src="https://unpkg.com/plyr@3"></script>
  <!-- <script src="https://cdpn.io/cpe/boomboom/pen.js?key=pen.js-acd9aae4-bc97-a8ad-40ce-c9e5378cc58d" crossorigin=""></script> -->


</html>
