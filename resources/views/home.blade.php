@extends('layouts.app')
@section('content')
         
 <!-- Barra de navegacion -->

<div class="global-nav" data-section-term="top_nav">
    <div class="global-nav-inner">
        <div class="container"> 
          <!-- Parte izquierda, barra de navegacion -->
            <div role="navigation" style="display: inline-block;">
                <ul class="nav js-global-actions" id="global-actions">
                    <!-- Icono Home -->
                    <li id="global-nav-home" class="home active " data-global-action="home">
                        <a class="js-nav js-tooltip js-dynamic-tooltip" data-placement="bottom" href="/" data-component-context="home_nav" data-nav="home" data-original-title="">
                        <span class="Icon Icon--home Icon--large"></span>
                        <span class="Icon Icon--homeFilled Icon--large u-textUserColor"></span>
                        <span class="text" aria-hidden="true">Inicio</span>
                        </a>
                    </li>
                     <!-- Icono Notificaciones, poner new si hya notificaciones a la class li-->
                    <li class="people notifications" data-global-action="connect">
                        <a class="js-nav js-tooltip js-dynamic-tooltip" data-placement="bottom" href="/i/notifications" data-component-context="connect_nav" data-nav="connect" data-original-title="">
                            <span class="Icon Icon--notifications Icon--large"></span>
                            <span class="Icon Icon--notificationsFilled Icon--large u-textUserColor"></span>
                            <span class="text" aria-hidden="true">Notificaciones</span>
                        </a>
                    </li>
                    <!-- Icono Mensajes, poner new si hya notificaciones a la class li-->
                    <li class="dm-nav">
                        <a role="button" href="#" class="js-tooltip js-dynamic-tooltip global-dm-nav" data-placement="bottom" data-original-title="">
                            <span class="Icon Icon--dm Icon--large"></span>
                            <span class="text">Mensajes</span>
                            <span class="dm-new">
                                <span class="count-inner"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Parte derecha barra de navegacion-->
            <div class="pull-right nav-extras">
                <!-- Input de buscar-->
                <div role="search">
                    <form class="t1-form form-search js-search-form" action="/search" id="global-nav-search">
                        <input class="search-input" type="text" id="search-query" placeholder="Buscar en Twitter" name="q" autocomplete="off" spellcheck="false" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-dropdown-33" dir="ltr" style="direction: ltr; text-align: left;">
                        <span class="search-icon js-search-action">
                            <button type="submit" class="Icon Icon--medium Icon--search nav-search" tabindex="-1">
                            </button>
                        </span>
                    </form>
                </div>
                

                <!-- Desplegable opciones usuario-->
                <ul class="nav right-actions">
                    <li class="me dropdown session js-session" data-global-action="t1me" id="user-dropdown">
                        <a href="/settings/account" class="btn js-tooltip settings dropdown-toggle js-dropdown-toggle" id="user-dropdown-toggle" data-placement="bottom" rel="noopener" role="button" aria-haspopup="true" data-original-title="Perfil y configuración ">
                            <img class="Avatar Avatar--size32" src="https://pbs.twimg.com/profile_images/524532262428106753/iwggeorR_normal.jpeg" alt="Perfil y configuración " data-user-id="293967812">
                        </a>
                        <div class="DashUserDropdown dropdown-menu dropdown-content dropdown-menu--rightAlign is-forceRight is-autoCentered">
                            <div class="dropdown-caret">
                                <span class="caret-outer"></span>
                                <span class="caret-inner"></span>
                            </div>
                            <ul tabindex="-1" role="menu" aria-labelledby="user-dropdown-toggle" aria-hidden="false"> 
                                <li class="DashUserDropdown-userInfo" data-name="user-info" role="presentation">
                                    <a href="/ferelcete" class="DashUserDropdown-userInfoLink js-nav" data-nav="view_profile" role="menuitem">
                                    <b class="fullname">Nombre</b><span class="UserBadges"></span>
                                    <p class="name"><span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></p>
                                    </a>
                                </li>

                                <li class="dropdown-divider" role="presentation"></li>

                                <li class="current-user" data-name="profile" role="presentation">
                                    <a href="/ferelcete" class="js-nav" data-nav="view_profile" role="menuitem">
                                    <span class="DashUserDropdown-linkIcon Icon Icon--medium Icon--me"></span>Perfil
                                    </a>
                                </li>
        
                                <li data-name="lists" role="presentation">
                                    <a class="js-nav" href="/ferelcete/lists" data-nav="all_lists" role="menuitem">
                                    <span class="DashUserDropdown-linkIcon Icon Icon--medium Icon--list"></span>Listas
                                    </a>
                                </li>

                                <li class="dropdown-divider" role="presentation"></li>

                                <li class="js-signout-button" id="signout-button" data-nav="logout" role="presentation">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li role="complementary" aria-labelledby="global-new-tweet-button" class="topbar-tweet-btn">
                        <button id="global-new-tweet-button" class="js-global-new-tweet js-tooltip EdgeButton EdgeButton--primary js-dynamic-tooltip" data-placement="bottom" data-component-context="new_tweet_button" data-original-title="">   
                        <span class="text">Twittear</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

