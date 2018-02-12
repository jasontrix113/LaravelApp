

<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
   <head>
       <link rel="icon" href="../../public/media/logo.jpg">
       <link href="{{ asset('css/MyCss.css') }}" rel="stylesheet">
      <meta charset="UTF-8" />
      <title>Maria Gracia | Record Monitoring System</title>
      <script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/0e574bed/cloudflare-static/rocket.min.js"></script>
      <script type="text/rocketscript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title>Front Page - Illdy Theme Demo</title>
      <!-- This site is optimized with the Yoast SEO plugin v5.8 - https://yoast.com/wordpress/plugins/seo/ -->
      <link rel="canonical" href="https://colorlib.com/illdy/" />
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Front Page - Illdy Theme Demo" />
      <meta property="og:url" content="https://colorlib.com/illdy/" />
      <meta property="og:site_name" content="Illdy Theme Demo" />
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:title" content="Front Page - Illdy Theme Demo" />
      <meta name="twitter:creator" content="@ASilkalns" />
      <script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/colorlib.com\/illdy\/","name":"Illdy Theme Demo","potentialAction":{"@type":"SearchAction","target":"https:\/\/colorlib.com\/illdy\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
      <!-- / Yoast SEO plugin. -->
      <link rel='dns-prefetch' href='//fonts.googleapis.com' />
      <link rel='dns-prefetch' href='//s.w.org' />
      <link rel="alternate" type="application/rss+xml" title="Illdy Theme Demo &raquo; Feed" href="https://colorlib.com/illdy/feed/" />
      <link rel="alternate" type="application/rss+xml" title="Illdy Theme Demo &raquo; Comments Feed" href="https://colorlib.com/illdy/comments/feed/" />
      <!-- This site uses the Google Analytics by MonsterInsights plugin v6.2.4 - Using Analytics tracking - https://www.monsterinsights.com/ -->
      <script type="text/javascript" data-cfasync="false">
         var disableStr = 'ga-disable-UA-23581568-13';
         
         /* Function to detect opted out users */
         function __gaTrackerIsOptedOut() {
         return document.cookie.indexOf(disableStr + '=true') > -1;
         }
         
         /* Disable tracking if the opt-out cookie exists. */
         if ( __gaTrackerIsOptedOut() ) {
         window[disableStr] = true;
         }
         
         /* Opt-out function */
         function __gaTrackerOptout() {
          document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
          window[disableStr] = true;
         }
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');
         
         __gaTracker('create', 'UA-23581568-13', 'auto');
         __gaTracker('set', 'forceSSL', true);
         __gaTracker('send','pageview');
      </script>
      <!-- / Google Analytics by MonsterInsights -->
      <script type="text/rocketscript">
         window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/colorlib.com\/illdy\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9"}};
         !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56794,8205,9794,65039],[55358,56794,8203,9794,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
      </script>
      <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
      </style>
      <link rel='stylesheet' id='contact-form-7-css'  href='https://cdn.colorlib.com/illdy/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.9.1' type='text/css' media='all' />
      <link rel='stylesheet' id='icomoon-css'  href='https://cdn.colorlib.com/illdy/wp-content/plugins/kiwi-social-share/assets/vendors/icomoon/style.css?ver=2.0.5' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-layout-css'  href='https://cdn.colorlib.com/illdy/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.2.5' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://cdn.colorlib.com/illdy/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.2.5' type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='woocommerce-general-css'  href='https://cdn.colorlib.com/illdy/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.2.5' type='text/css' media='all' />
      <link rel='stylesheet' id='illdy-pace-css'  href='https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/css/pace.min.css?ver=4.9' type='text/css' media='all' />
      <link rel='stylesheet' id='illdy-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,700,300,300italic|Lato:300,400,700,900|Poppins:300,400,500,600,700' type='text/css' media='all' />
      <link rel='stylesheet' id='bootstrap-css'  href='https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/css/bootstrap.min.css?ver=3.3.6' type='text/css' media='all' />
      <link rel='stylesheet' id='bootstrap-theme-css'  href='https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/css/bootstrap-theme.min.css?ver=3.3.6' type='text/css' media='all' />
      <link rel='stylesheet' id='font-awesome-css'  href='https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/css/font-awesome.min.css?ver=4.5.0' type='text/css' media='all' />
      <link rel='stylesheet' id='owl-carousel-css'  href='https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/css/owl-carousel.min.css?ver=2.0.0' type='text/css' media='all' />
      <link rel='stylesheet' id='illdy-main-css'  href='https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/css/main.min.css?ver=4.9' type='text/css' media='all' />
      <link rel='stylesheet' id='illdy-custom-css'  href='https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/css/custom.min.css?ver=4.9' type='text/css' media='all' />
      <link rel='stylesheet' id='illdy-style-css'  href='https://cdn.colorlib.com/illdy/wp-content/themes/illdy/style.css?ver=1.0.16' type='text/css' media='all' />
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
      <script type="text/rocketscript">
         /* <![CDATA[ */
         var paceOptions = {"restartOnRequestAfter":"0","restartOnPushState":"0"};
         /* ]]> */
      </script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/js/pace/pace.min.js?ver=4.9"></script>
      <link rel='https://api.w.org/' href='https://colorlib.com/illdy/wp-json/' />
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://colorlib.com/illdy/xmlrpc.php?rsd" />
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://cdn.colorlib.com/illdy/wp-includes/wlwmanifest.xml" />
      <meta name="generator" content="WordPress 4.9" />
      <meta name="generator" content="WooCommerce 3.2.5" />
      <link rel='shortlink' href='https://colorlib.com/illdy/' />
      <link rel="alternate" type="application/json+oembed" href="https://colorlib.com/illdy/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcolorlib.com%2Filldy%2F" />
      <link rel="alternate" type="text/xml+oembed" href="https://colorlib.com/illdy/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcolorlib.com%2Filldy%2F&#038;format=xml" />
       <style type="text/css">
            .pace .pace-progress {
                background-color: #b43434;
                color: #ffffff;
            }
            .pace .pace-activity {
                box-shadow: inset 0 0 0 2px #3fa7ce, inset 0 0 0 6px rgb(32, 134, 221);
            }
            #header .top-header{
              padding: 15px;
            }
       </style>
      <noscript>
         <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
      </noscript>
      <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
      <meta name="onesignal" content="wordpress-plugin"/>
      <link rel="manifest"
         href="https://colorlib.com/illdy/wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/manifest.json.php?gcm_sender_id="/>
      <script data-rocketsrc="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async type="text/rocketscript"></script>    <script type="text/rocketscript">
         window.OneSignal = window.OneSignal || [];
         
         OneSignal.push( function() {
           OneSignal.SERVICE_WORKER_UPDATER_PATH = "OneSignalSDKUpdaterWorker.js.php";
           OneSignal.SERVICE_WORKER_PATH = "OneSignalSDKWorker.js.php";
           OneSignal.SERVICE_WORKER_PARAM = { scope: '/' };
         
           OneSignal.setDefaultNotificationUrl("https://colorlib.com/illdy");
           var oneSignal_options = {};
           window._oneSignalInitOptions = oneSignal_options;
         
           oneSignal_options['wordpress'] = true;
         oneSignal_options['appId'] = '';
         oneSignal_options['autoRegister'] = false;
         oneSignal_options['httpPermissionRequest'] = { };
         oneSignal_options['httpPermissionRequest']['enable'] = true;
         oneSignal_options['welcomeNotification'] = { };
         oneSignal_options['welcomeNotification']['title'] = "";
         oneSignal_options['welcomeNotification']['message'] = "";
         oneSignal_options['path'] = "https://cdn.colorlib.com/illdy/wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/";
         oneSignal_options['promptOptions'] = { };
         oneSignal_options['notifyButton'] = { };
         oneSignal_options['notifyButton']['enable'] = true;
         oneSignal_options['notifyButton']['position'] = 'bottom-right';
         oneSignal_options['notifyButton']['theme'] = 'default';
         oneSignal_options['notifyButton']['size'] = 'medium';
         oneSignal_options['notifyButton']['prenotify'] = true;
         oneSignal_options['notifyButton']['showCredit'] = true;
         oneSignal_options['notifyButton']['text'] = {};
                 OneSignal.init(window._oneSignalInitOptions);
                       });
         
         function documentInitOneSignal() {
           var oneSignal_elements = document.getElementsByClassName("OneSignal-prompt");
         
           var oneSignalLinkClickHandler = function(event) { OneSignal.push(['registerForPushNotifications']); event.preventDefault(); };        for(var i = 0; i < oneSignal_elements.length; i++)
             oneSignal_elements[i].addEventListener('click', oneSignalLinkClickHandler, false);
         }
         
         if (document.readyState === 'complete') {
              documentInitOneSignal();
         }
         else {
              window.addEventListener("load", function(event){
                  documentInitOneSignal();
             });
         }
      </script>
        <style type="text/css" id="illdy-about-section-css">
            @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
            @charset "UTF-8";
            #about{
                max-height: 300px;
            }
            #header.header-front-page .bottom-header .header-button-one 
            {
             background-color: rgba( 0, 0, 0, .2);
            }
            #header.header-front-page .bottom-header .header-button-one:hover 
            {
             background-color: #3483ad;
            }
            #header.header-front-page .bottom-header h1 
            {
             color: #ffffff;
            }
            #header.header-front-page .bottom-header .section-description 
            {
             color: #ffffff;
            }
            #header.header-front-page .bottom-header .section-description-about 
            {
             color: #2c2c2c;
            }
            #header.header-front-page .bottom-header .header-button-two
            {
              background-color: purple;
            }
            #header.header-front-page .bottom-header .header-button-two:hover
            {
              background-color: violet;
            }
            #wpcf7{
              color: #8c9597;
            }
        </style>
      <style type="text/css" id="illdy-latestnews-section-css"></style>
      <style type="text/css" id="illdy-fullwidth-section-css"></style>
      <style type="text/css" id="illdy-about-section-css"></style>
      <style type="text/css" id="illdy-projects-section-css">#projects:before {background-image: url(https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/images/front-page/pattern.png) !important;}#projects:before {background-size: auto !important;}#projects:before {background-repeat: repeat !important;}</style>
      <style type="text/css" id="illdy-services-section-css"></style>
      <style type="text/css" id="illdy-team-section-css">#team:before {background-image: url(https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/images/front-page/pattern.png) !important;}#team:before {background-size: auto !important;}#team:before {background-repeat: repeat !important;}</style>
      <style type="text/css" id="illdy-testimonials-section-css">#testimonials:before {background-image: url(https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/images/testiomnials-background.jpg) !important;}</style>
   
       <style>
            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
           #front-brand a
           {
               color: white;
               font-size: 20px;
           }
       </style>
   </head>
   <body class="home page-template-default page page-id-126 wp-custom-logo">
      <div class="pace-overlay"></div>
      <header id="header" class="header-front-page" style="background-attachment: fixed;">
         <div class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-4 col-xs-8">
                     <div class="navbar-brand" id="front-brand"><a href="#">MGRMS</a></div>			
                  </div>
                  <!--/.col-sm-2-->
                  <div class="col-sm-8 col-xs-4">
                     <nav class="header-navigation">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                @endauth
                            </div>
                        @endif
                     </nav>
                     <button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
                  </div>
                  <!--/.col-sm-10-->
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
         <!--/.top-header-->
         <nav class="responsive-menu">
         </nav>
         <!--/.responsive-menu-->
         <div class="bottom-header front-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1 id="front-title" style="font-weight: 300; font-size: 60px; font-family: 'Raleway', sans-serif;">Maria Gracia Record Monitoring System</h1>
                  </div>
                  <!--/.col-sm-12-->
                  <div class="col-sm-8 col-sm-offset-2">
                     <div class="section-description">MG Record Monitoring System is a Web Platform that gives clients and customers an informative reports and summaries of pledges and redemptions.</div>
                     <a href=" {{ route('register') }} " title="Signup" class="header-button-one">Signup for Free</a>
                     <a href="#" title="learnmore" class="header-button-two">Learn more</a>
                  </div>
                  <!--/.col-sm-8.col-sm-offset-2-->
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
         <!--/.bottom-header.front-page-->
      </header>
      <!--/#header-->
      <section id="about" class="front-page-section" style="background-color:#ffffff; color: #676767;">
         <div class="section-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h3>About Us</h3>
                  </div>
                  <!--/.col-sm-12-->
                  <div class="col-sm-10 col-sm-offset-1">
                     <div class="section-description-about">"To be the best, be the most respected pawnshop in the Philippines. We will continue to help and serve you with your needs. To have happy employees and customers!"</div>
                  </div>
                  <!--/.col-sm-10.col-sm-offset-1-->
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
       </section> 
      <!--/#about.front-page-section-->
      <!--/#testimonials.front-page-section-->
      <section id="services" class="front-page-section" style="background-color:#493350; color: white;">
         <div class="section-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h3 style="color:white;">Other Services</h3>
                  </div>
                  <!--/.col-sm-12-->
                  <div class="col-sm-10 col-sm-offset-1">
                     <div class="section-description" style="color:white;">Maria Gracia Pawnshop established franchise around the Philippines. Other services other than Pawning are the following: </div>
                  </div>
                  <!--/.col-sm-10.col-sm-offset-1-->
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
         <!--/.section-header-->
         <div class="section-content">
            <div class="container">
               <div class="row inline-columns">
                  <div id="illdy_service-2" class="col-sm-6 widget_illdy_service">
                     <div class="service" style="color:white;">
                        <div class="service-icon"><i class="fa fa-diamond"></i></div>
                        <!--/.service-icon-->
                        <div class="service-title">
                           <h5>Jewelry Sales</h5>
                        </div>
                        <!--/.service-title-->
                        <div class="service-entry">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</div>
                        <!--/.service-entry-->
                     </div>
                     <!--/.service-->
                  </div>
                  <div id="illdy_service-3" class="col-sm-6 widget_illdy_service">
                     <div class="service" style="color:white;">
                        <div class="service-icon"><i class="fa fa-share"></i></div>
                        <!--/.service-icon-->
                        <div class="service-title">
                           <h5>Loading Services</h5>
                        </div>
                        <!--/.service-title-->
                        <div class="service-entry">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</div>
                        <!--/.service-entry-->
                     </div>
                     <!--/.service-->
                  </div>
                  <div id="illdy_service-4" class="col-sm-6 widget_illdy_service">
                     <div class="service" style="color:white;">
                        <div class="service-icon"><i class="fa fa-home"></i></div>
                        <!--/.service-icon-->
                        <div class="service-title">
                           <h5>Real Estate Mortrage</h5>
                        </div>
                        <!--/.service-title-->
                        <div class="service-entry">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</div>
                        <!--/.service-entry-->
                     </div>
                     <!--/.service-->
                  </div>
                   <div id="illdy_service-3" class="col-sm-6 widget_illdy_service">
                     <div class="service" style="color:white;">
                        <div class="service-icon"><i class="fa fa-dollar"></i></div>
                        <!--/.service-icon-->
                        <div class="service-title">
                           <h5>Money Remittance</h5>
                        </div>
                        <!--/.service-title-->
                        <div class="service-entry">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</div>
                        <!--/.service-entry-->
                     </div>
                     <!--/.service-->
                  </div>
            </div>
            <!--/.container-->
         </div> 
      </div><!--/.section-content-->
      </section>
      <!--/#services.front-page-section-->
      <section id="latest-news" class="front-page-section">
         <div class="section-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h3>API's used in Development</h3>
                  </div>
                  <!--/.col-sm-12-->
                  <div class="col-sm-10 col-sm-offset-1">
                     <div class="section-description">If you are interested in the development of this system, take a sneak peak of api technology we used in development. You have nothing to loose!</div>
                  </div>
                  <!--/.col-sm-10.col-sm-offset-1-->
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
         <!--/.section-header-->
         <a href="#" title="See blog" class="latest-news-button" style="background-color:#3483ad;"><i class="fa fa-chevron-circle-right"></i>Learn More			</a>
         <div class="section-content">
            <div class="container">
               <div class="row blog-carousel">
                  <div class="illdy-blog-post col-md-4 col-sm-6 col-xs-12">
                     <div class="post" style="">
                        <div class="post-image"></div>
                        <h5><a href="#" title="We Have Made Illdy Theme SEO Friendly" class="post-title">Bootstrap 3</a></h5>
                        <div class="post-entry">
                           Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum									
                        </div>
                        <!--/.post-entry-->
                        <a href="www.getbootstrap.com" title="Read more" class="post-button"style="color: #404040;"><i class="fa fa-chevron-circle-right"></i>Read more									</a>
                     </div>
                     <!--/.post-->
                  </div>
                  <!--/.col-sm-4-->
                  <div class="illdy-blog-post col-md-4 col-sm-6 col-xs-12">
                     <div class="post" style="">
                        <div class="post-image"></div>
                        <h5><a href="https://colorlib.com/illdy/stunning-one-page-wordpress-theme-masses/" title="Stunning One Page WordPress Theme For Masses" class="post-title">Laravel 5.4</a></h5>
                        <div class="post-entry">
                           Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum							
                        </div>
                        <!--/.post-entry-->
                        <a href="www.laravel.com" title="Read more" class="post-button"style="color: #404040;"><i class="fa fa-chevron-circle-right"></i>Read more									</a>
                     </div>
                     <!--/.post-->
                  </div>
                  <!--/.col-sm-4-->
                  <div class="illdy-blog-post col-md-4 col-sm-6 col-xs-12">
                     <div class="post" style="">
                        <div class="post-image"></div>
                        <h5><a href="https://colorlib.com/illdy/hello-world/" title="Hello world!" class="post-title">JQuery</a></h5>
                        <div class="post-entry">
                           Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum  									
                        </div>
                        <!--/.post-entry-->
                        <a href="www.Jquery.com" title="Read more" class="post-button" style="color: #404040;"><i class="fa fa-chevron-circle-right"></i>Read more</a>
                     </div>
                     <!--/.post-->
                  </div>
                  <!--/.col-sm-4-->
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
         <!--/.section-content-->
      </section>
      <!--/#latest-news.front-page-section-->
      <section id="counter" class="front-page-section" style="background-color:purple;">
         <div class="counter-overlay"></div>
         <div class="container">
            <div class="row inline-columns">
               <div id="illdy_counter-4" class="col-sm-3 col-xs-12 widget_illdy_counter"><span class="counter-number" data-from="1" data-to="0" data-speed="2000" data-refresh-interval="100"></span><span class="counter-description">Reports</span></div>
               <div id="illdy_counter-3" class="col-sm-3 col-xs-12 widget_illdy_counter"><span class="counter-number" data-from="1" data-to="0" data-speed="2000" data-refresh-interval="100"></span><span class="counter-description">Clients</span></div>
               <div id="illdy_counter-2" class="col-sm-3 col-xs-12 widget_illdy_counter"><span class="counter-number" data-from="1" data-to="20" data-speed="2000" data-refresh-interval="100"></span><span class="counter-description">Coffees</span></div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </section>
      <!--/#counter.front-page-section-->
      <!--/#team.front-page-section-->
      <section id="contact-us" class="front-page-section">
         <div class="section-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h3>Contact us</h3>
                  </div>
                  <!--/.col-sm-12-->
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
         <!--/.section-header-->
         <div class="section-content">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="row" style="margin-bottom: 45px;">
                        <div class="col-sm-4">
                           <div class="contact-us-box">
                              <div class="box-left" data-customizer="box-left-address-title" style="color: #8c9597">
                                 <strong>Address</strong>										
                              </div>
                              <!--/.box-left-->
                              <div class="box-right">
                                 <span class="box-right-row" data-customizer="contact-us-address-1">MABINI STREET, BARANGAY 40</span>
                                 <span class="box-right-row" data-customizer="contact-us-address-2">BACOLOD CITY, NEGROS OCCIDENTAL</span>
                              </div>
                              <!--/.box-right-->
                           </div>
                           <!--/.contact-us-box-->
                        </div>
                        <!--/.col-sm-4-->
                        <div class="col-sm-5">
                           <div class="contact-us-box">
                              <div class="box-left" data-customizer="box-left-customer-support-title" style="color: #8c9597">
                                 <strong>Customer Support</strong>									
                              </div>
                              <!--/.box-left-->
                              <div class="box-right">
                                 <span class="box-right-row">E-mail:												<a href="/cdn-cgi/l/email-protection#31525e5f4550524571425845541f525e5c" title="contact@site.com"><span class="__cf_email__" data-cfemail="e3808c8d97828097a3908a9786cd808c8e">[email&#160;protected]</span></a></span>
                                 <span class="box-right-row" data-customizer="contact-us-phone">Phone: +63 (34)707 0227</span>
                              </div>
                              <!--/.box-right-->
                           </div>
                           <!--/.contact-us-box-->
                        </div>
                        <!--/.col-sm-5-->
                        <div class="col-sm-3">
                           <div class="contact-us-social">
                              <a href="https://twitter.com/colorlib" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                              <a href="https://www.facebook.com/colorlib" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                              <a href="#" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
                           </div>
                           <!--/.contact-us-social-->
                        </div>
                        <!--/.col-sm-3-->
                     </div>
                     <!--/.row-->
                  </div>
                  <!--/.col-sm-12-->
               </div>
               <!--/.row-->
               <div class="row">
                  <div class="col-sm-12">
                     <div role="form" class="wpcf7" id="wpcf7-f128-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/illdy/#wpcf7-f128-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                           <div style="display: none;">
                              <input type="hidden" name="_wpcf7" value="128" />
                              <input type="hidden" name="_wpcf7_version" value="4.9.1" />
                              <input type="hidden" name="_wpcf7_locale" value="en_US" />
                              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f128-o1" />
                              <input type="hidden" name="_wpcf7_container_post" value="0" />
                           </div>
                           <p><label id="wpcf7"> Your Name (required)<br />
                              <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label>
                           </p>
                           <p><label id="wpcf7"> Your Email (required)<br />
                              <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label>
                           </p>
                           <p><label id="wpcf7"> Subject<br />
                              <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label>
                           </p>
                           <p><label id="wpcf7"> Your Message<br />
                              <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label>
                           </p>
                           <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" style="background-color: purple;"></p>
                           <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                     </div>
                  </div>
                  <!--/.col-sm-12-->
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
         <!--/.section-content-->
      </section>
      <!--/#contact-us.front-page-section-->
      <footer id="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div id="text-5" class="widget widget_text">
                     <div class="widget-title">
                        <h5>Features</h5>
                     </div>
                     <div class="textwidget">
                        <ul>
                           <li><a href="#" title="link">Link Here</a></li>
                           <li><a href="#" title="link">Link Here</a></li>
                           <li><a href="#" title="link">Link Here</a></li>
                           <li><a href="#" title="link">Link Here</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--/.col-sm-3-->
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div id="text-6" class="widget widget_text">
                     <div class="widget-title">
                        <h5>Resources</h5>
                     </div>
                     <div class="textwidget">
                        <ul>
                           <li><a href="#" title="link">Link Here</a></li>
                           <li><a href="#" title="link">Link Here</a></li>
                           <li><a href="#" title="link">Link Here</a></li>
                           <li><a href="#" title="link">Link Here</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--/.col-sm-3-->
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div id="text-7" class="widget widget_text">
                     <div class="widget-title">
                        <h5>Contact Us</h5>
                     </div>
                     <div class="textwidget">
                        <ul>
                           <li><a href="#" title="link">Link Here</a></li>
                           <li><a href="#" title="link">Link Here</a></li>
                           <li><a href="#" title="link">Link Here</a></li>
                           <li><a href="#" title="link">Link Here</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
         <div class="bottom-footer">
            <div class="container">
               <p class="copyright">
                  <span class="bottom-copyright" data-customizer="copyright-credit">© Copyright 2017. All Rights Reserved.</span>
               </p>
            </div>
         </div>
      </footer>
   </body>
    <!--/#footer-->
      <script src="/cdn-cgi/scripts/0e574bed/cloudflare-static/email-decode.min.js"></script><script type="text/rocketscript">
         /* <![CDATA[ */
         var wpcf7 = {"apiSettings":{"root":"https:\/\/colorlib.com\/illdy\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
         /* ]]> */
      </script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.9.1"></script>
      <script type="text/rocketscript">
         /* <![CDATA[ */
         var wc_add_to_cart_params = {"ajax_url":"\/illdy\/wp-admin\/admin-ajax.php","wc_ajax_url":"https:\/\/colorlib.com\/illdy\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/colorlib.com\/illdy\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
         /* ]]> */
      </script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.2.5"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4"></script>
      <script type="text/rocketscript">
         /* <![CDATA[ */
         var woocommerce_params = {"ajax_url":"\/illdy\/wp-admin\/admin-ajax.php","wc_ajax_url":"https:\/\/colorlib.com\/illdy\/?wc-ajax=%%endpoint%%"};
         /* ]]> */
      </script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.2.5"></script>
      <script type="text/rocketscript">
         /* <![CDATA[ */
         var wc_cart_fragments_params = {"ajax_url":"\/illdy\/wp-admin\/admin-ajax.php","wc_ajax_url":"https:\/\/colorlib.com\/illdy\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_ded49c5cfee6ab240eab717f9ef4759b"};
         /* ]]> */
      </script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.2.5"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-includes/js/jquery/ui/progressbar.min.js?ver=1.11.4"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/js/bootstrap/bootstrap.min.js?ver=3.3.6"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/js/owl-carousel/owl-carousel.min.js?ver=2.0.0"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/js/count-to/count-to.min.js?ver=4.9"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/js/visible/visible.min.js?ver=4.9"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/js/parallax/parallax.min.js?ver=1.0.16"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/js/plugins.min.js?ver=1.0.16"></script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-content/themes/illdy/layout/js/scripts.min.js?ver=1.0.16"></script>
      <script type="text/rocketscript">
         if( jQuery('.blog-carousel > .illdy-blog-post').length > 3 ){jQuery('.blog-carousel').owlCarousel({'items': 3,'loop': true,'dots': false,'nav' : true, 'navText':['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'], responsive : { 0 : { items : 1 }, 480 : { items : 2 }, 900 : { items : 3 } }});}
      </script>
      <script type="text/rocketscript" data-rocketsrc="https://cdn.colorlib.com/illdy/wp-includes/js/wp-embed.min.js?ver=4.9"></script>
      <script type="text/rocketscript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"155b0a1326","applicationID":"62323057","transactionName":"YABaYkFQXkBZW0JYWVlKeVVHWF9dF15EXlhDSEhXVFQ=","queueTime":0,"applicationTime":210,"atts":"TEdZFAlKTU4=","errorBeacon":"bam.nr-data.net","agent":""}</script>
</html>

