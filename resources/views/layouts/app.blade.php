<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Originales de twitter -->
    <link rel="stylesheet" href="https://abs.twimg.com/a/1515027860/css/t1/twitter_core.bundle.css" class="coreCSSBundles">
    <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1515027860/css/t1/twitter_more_1.bundle.css">
    <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1515027860/css/t1/twitter_more_2.bundle.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <noscript>&lt;meta http-equiv="refresh" content="0; URL=https://mobile.twitter.com/i/nojs_router?path=%2F"&gt;</noscript>
    <script nonce="">
        !function(){window.initErrorstack||(window.initErrorstack=[]),window.onerror=function(r,i,n,o,t){r.indexOf("Script error.")>-1||window.initErrorstack.push({errorMsg:r,url:i,lineNumber:n,column:o,errorObj:t})}}();
      </script>
    <script id="bouncer_terminate_iframe" nonce="">
    if (window.top != window) {
  window.top.postMessage({'bouncer': true, 'event': 'complete'}, '*');
}
  </script>
  <!-- 
    <script id="resolve_inline_redirects" nonce="">
    !function(){function n(){var n=window.location.href.match(/#(.)(.*)$/);return n&&"!"==n[1]&&n[2].replace(/^\//,"")}function t(){var t=n();t&&window.location.replace("//"+window.location.host+"/"+t)}t(),window.addEventListener?window.addEventListener("hashchange",t,!1):window.attachEvent&&window.attachEvent("onhashchange",t)}();
  </script>
    <script id="ttft_boot_data" nonce="">
    window.ttftData={"transaction_id":"00cd9a1600d7aaa3.61bb772b27ee3390\u003c:0073d6a9004864c2","server_request_start_time":1515429186883,"user_id":293967812,"is_ssl":true,"rendered_on_server":true,"is_tfe":true,"client":"macaw-swift","tfe_version":"tsa_f\/1.0.1\/20180102.2153.d2726e5","ttft_browser":"chrome"};!function(){function t(t,n){window.ttftData&&!window.ttftData[t]&&(window.ttftData[t]=n)}function n(){return o?Math.round(w.now()+w.timing.navigationStart):(new Date).getTime()}var w=window.performance,o=w&&w.now;window.ttft||(window.ttft={}),window.ttft.recordMilestone||(window.ttft.recordMilestone=t),window.ttft.now||(window.ttft.now=n)}();
  </script>
    <script id="swift_action_queue" nonce="">
    !function(){function e(e){if(e||(e=window.event),!e)return!1;if(e.timestamp=(new Date).getTime(),!e.target&&e.srcElement&&(e.target=e.srcElement),document.documentElement.getAttribute("data-scribe-reduced-action-queue"))for(var t=e.target;t&&t!=document.body;){if("A"==t.tagName)return;t=t.parentNode}return i("all",o(e)),a(e)?(document.addEventListener||(e=o(e)),e.preventDefault=e.stopPropagation=e.stopImmediatePropagation=function(){},y?(v.push(e),i("captured",e)):i("ignored",e),!1):(i("direct",e),!0)}function t(e){n();for(var t,r=0;t=v[r];r++){var a=e(t.target),i=a.closest("a")[0];if("click"==t.type&&i){var o=e.data(i,"events"),u=o&&o.click,c=!i.hostname.match(g)||!i.href.match(/#$/);if(!u&&c){window.location=i.href;continue}}a.trigger(e.event.fix(t))}window.swiftActionQueue.wasFlushed=!0}function r(){for(var e in b)if("all"!=e)for(var t=b[e],r=0;r<t.length;r++)console.log("actionQueue",c(t[r]))}function n(){clearTimeout(w);for(var e,t=0;e=h[t];t++)document["on"+e]=null}function a(e){if(!e.target)return!1;var t=e.target,r=(t.tagName||"").toLowerCase();if(e.metaKey)return!1;if(e.shiftKey&&"a"==r)return!1;if(t.hostname&&!t.hostname.match(g))return!1;if(e.type.match(p)&&s(t))return!1;if("label"==r){var n=t.getAttribute("for");if(n){var a=document.getElementById(n);if(a&&f(a))return!1}else for(var i,o=0;i=t.childNodes[o];o++)if(f(i))return!1}return!0}function i(e,t){t.bucket=e,b[e].push(t)}function o(e){var t={};for(var r in e)t[r]=e[r];return t}function u(e){for(;e&&e!=document.body;){if("A"==e.tagName)return e;e=e.parentNode}}function c(e){var t=[];e.bucket&&t.push("["+e.bucket+"]"),t.push(e.type);var r,n,a=e.target,i=u(a),o="",c=e.timestamp&&e.timestamp-d;return"click"===e.type&&i?(r=i.className.trim().replace(/\s+/g,"."),n=i.id.trim(),o=/[^#]$/.test(i.href)?" ("+i.href+")":"",a='"'+i.innerText.replace(/\n+/g," ").trim()+'"'):(r=a.className.trim().replace(/\s+/g,"."),n=a.id.trim(),a=a.tagName.toLowerCase(),e.keyCode&&(a=String.fromCharCode(e.keyCode)+" : "+a)),t.push(a+o+(n&&"#"+n)+(!n&&r?"."+r:"")),c&&t.push(c),t.join(" ")}function f(e){var t=(e.tagName||"").toLowerCase();return"input"==t&&"checkbox"==e.getAttribute("type")}function s(e){var t=(e.tagName||"").toLowerCase();return"textarea"==t||"input"==t&&"text"==e.getAttribute("type")||"true"==e.getAttribute("contenteditable")}for(var m,d=(new Date).getTime(),l=1e4,g=/^([^\.]+\.)*twitter\.com$/,p=/^key/,h=["click","keydown","keypress","keyup"],v=[],w=null,y=!0,b={captured:[],ignored:[],direct:[],all:[]},k=0;m=h[k];k++)document["on"+m]=e;w=setTimeout(function(){y=!1},l),window.swiftActionQueue={buckets:b,flush:t,logActions:r,wasFlushed:!1}}();
  </script>
    <script id="composition_state" nonce="">
    !function(){function t(t){t.target.setAttribute("data-in-composition","true")}function n(t){t.target.removeAttribute("data-in-composition")}document.addEventListener&&(document.addEventListener("compositionstart",t,!1),document.addEventListener("compositionend",n,!1))}();
  </script> -->
    <link rel="stylesheet" href="https://abs.twimg.com/a/1515180670/css/t1/twitter_core.bundle.css" class="coreCSSBundles">
    <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1515180670/css/t1/twitter_more_1.bundle.css">
    <link rel="stylesheet" class="moreCSSBundles" href="https://abs.twimg.com/a/1515180670/css/t1/twitter_more_2.bundle.css">
    <link rel="dns-prefetch" href="https://pbs.twimg.com">
    <link rel="dns-prefetch" href="https://t.co">
    <link rel="preload" href="https://abs.twimg.com/k/es/init.es.4d631aae1b80265fef0a.js" as="script">
    <link rel="preload" href="https://abs.twimg.com/k/es/0.commons.es.6c47136f1671211900ad.js" as="script">
    
    <link rel="preload" href="https://abs.twimg.com/k/es/8.pages_home.es.e66d857d7f1798245652.js" as="script">
    <meta name="msapplication-TileImage" content="//abs.twimg.com/favicons/win8-tile-144.png">
    <link rel="mask-icon" sizes="any" href="https://abs.twimg.com/a/1515180670/icons/favicon.svg" color="#1da1f2">

    <link rel="shortcut icon" href="//abs.twimg.com/favicons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://abs.twimg.com/icons/apple-touch-icon-192x192.png" sizes="192x192">
    <link rel="manifest" href="/manifest.json">
    <meta name="swift-page-name" id="swift-page-name" content="home">
    <meta name="swift-page-section" id="swift-section-name" content="home">
    <link rel="canonical" href="https://twitter.com/">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Twitter">
    <link id="async-css-placeholder">
    <script type="text/javascript" charset="utf-8" async="" src="https://abs.twimg.com/k/es/0.commons.es.6c47136f1671211900ad.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="https://abs.twimg.com/k/es/8.pages_home.es.e66d857d7f1798245652.js"></script>
    <style type="text/css" id="hidden-dms"></style>
    <script type="text/javascript" charset="utf-8" async="" src="https://abs.twimg.com/k/es/14.video_player_a.es.65acfd2c79990eb83734.js"></script>
    <style id="scrollbar-width">
.compensate-for-scrollbar,
.modal-enabled,
.modal-enabled .global-nav-inner,
.profile-editing,
.profile-editing .global-nav-inner,
.overlay-enabled,
.overlay-enabled .global-nav-inner,
.grid-enabled,
.grid-enabled .global-nav-inner,
.gallery-enabled,
.gallery-enabled .global-nav-inner {
margin-right: 0px
}
</style>

</head>
<body>
@if (Auth::guest())

<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        @else
@endif     
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
