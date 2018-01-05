@extends('layouts.app')
@section('content')
<body class="three-col logged-in user-style-ferelcete western es enhanced-mini-profile no-nav-banners supports-drag-and-drop" data-fouc-class-names="swift-loading no-nav-banners" dir="ltr"><div id="kb-shortcuts-msg" >

    <div class="route-home ">
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
                                    <img class="Avatar Avatar--size32" src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" alt="Perfil y configuración " data-user-id="293967812">
                                </a>
                                <div class="DashUserDropdown dropdown-menu dropdown-content dropdown-menu--rightAlign is-forceRight is-autoCentered">
                                    <div class="dropdown-caret">
                                        <span class="caret-outer"></span>
                                        <span class="caret-inner"></span>
                                    </div>
                                    <ul tabindex="-1" role="menu" aria-labelledby="user-dropdown-toggle" aria-hidden="false"> 
                                        <li class="DashUserDropdown-userInfo" data-name="user-info" role="presentation">
                                            <a href="/username" class="DashUserDropdown-userInfoLink js-nav" data-nav="view_profile" role="menuitem">
                                            <b class="fullname">Nombre</b><span class="UserBadges"></span>
                                            <p class="name"><span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></p>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider" role="presentation"></li>
                                        <li class="current-user" data-name="profile" role="presentation">
                                            <a href="/username" class="js-nav" data-nav="view_profile" role="menuitem">
                                            <span class="DashUserDropdown-linkIcon Icon Icon--medium Icon--me"></span>Perfil
                                            </a>
                                        </li>
                                        <li data-name="lists" role="presentation">
                                            <a class="js-nav" href="/username/lists" data-nav="all_lists" role="menuitem">
                                            <span class="DashUserDropdown-linkIcon Icon Icon--medium Icon--list"></span>Listas
                                            </a>
                                        </li>
                                        <li class="dropdown-divider" role="presentation"></li>
                                        <!-- Cerrar sesion -->
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
        <!-- Fin Barra de navegacion -->

        <!--  Espacio Principal-->
        <div id="page-outer">
            <div  id="page-container" class= "AppContent wrapper wrapper-home">
                <!-- Cuadro lateral izquierdo -->
                <div class="dashboard dashboard-left">
                    <div class="DashboardProfileCard  module">
                        <a class="DashboardProfileCard-bg u-bgUserColor u-block" href="/username" tabindex="-1" aria-hidden="true" rel="noopener">
                        </a>
                        <div class="DashboardProfileCard-content">
                            <a class="DashboardProfileCard-avatarLink u-inlineBlock" href="/username" title="Name" tabindex="-1" aria-hidden="true" rel="noopener">
                                <img class="DashboardProfileCard-avatarImage js-action-profile-avatar" src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" alt="">
                            </a>
                        <div class="DashboardProfileCard-userFields account-group">
                            <div class="DashboardProfileCard-name u-textTruncate">
                            <a class="u-textInheritColor js-nav" href="/username" rel="noopener">Name</a><span class="UserBadges"></span>
                            </div>
                            <span class="DashboardProfileCard-screenname u-inlineBlock u-dir" dir="ltr">
                            <a class="DashboardProfileCard-screennameLink u-linkComplex u-linkClean js-nav" href="/username" rel="noopener"><span class="username u-dir" dir="ltr">@<b class="u-linkComplex-target">ferelcete</b></span></a>
                            </span>
                        </div>
                            <div class="ProfileCardStats">
                        <ul class="ProfileCardStats-statList Arrange Arrange--bottom Arrange--equal"><li class="ProfileCardStats-stat Arrange-sizeFit">
                            <a class="ProfileCardStats-statLink u-textUserColor u-linkClean u-block js-nav js-tooltip" title="4 Tweets" href="/username" data-element-term="tweet_stats">
                            <span class="ProfileCardStats-statLabel u-block">Tweets</span>
                            <span class="ProfileCardStats-statValue" data-count="4" data-is-compact="false">4</span>
                            </a>
                        </li><li class="ProfileCardStats-stat Arrange-sizeFit">
                            <a class="ProfileCardStats-statLink u-textUserColor u-linkClean u-block js-nav js-tooltip" href="/username/following" data-element-term="following_stats" data-original-title="278 Siguiendo">
                                <span class="ProfileCardStats-statLabel u-block">Siguiendo</span>
                                <span class="ProfileCardStats-statValue" data-count="278" data-is-compact="false">278</span>
                            </a>
                            </li><li class="ProfileCardStats-stat Arrange-sizeFit">
                            <a class="ProfileCardStats-statLink u-textUserColor u-linkClean u-block js-nav js-tooltip" title="35 Seguidores" href="/username/followers" data-element-term="follower_stats">
                                <span class="ProfileCardStats-statLabel u-block">Seguidores</span>
                                <span class="ProfileCardStats-statValue" data-count="35" data-is-compact="false">35</span>
                            </a>
                            </li>
                        </ul>
                    </div>
                            <div id="dashboard-profile-prompt"></div>
                        </div>
                    </div>
                </div>
                <!-- Fin Cuadro lateral izquierd-->
                <!-- Cuadro central, tweets  -->
                <div role="main" aria-labelledby="content-main-heading" class="content-main top-timeline-tweetbox" id="timeline" tabindex="-1">
                <div class="timeline-tweet-box">
            <div class="home-tweet-box tweet-box component tweet-user">
                <img class="top-timeline-tweet-box-user-image avatar size32" src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" alt="Ferel">
                <form class="t1-form tweet-form condensed" method="post" target="tweet-post-iframe" data-condensed-text="¿Qué está pasando?" action="//upload.twitter.com/i/tweet/create_with_media.iframe" enctype="multipart/form-data" data-poll-composer-rows="3">

        <div class="reply-users"></div>

        <div class="tweet-content">
            <img class="inline-reply-user-image avatar size32" src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" alt="Ferel">
            <div class="TweetBox-photoIntent"><div class="photo-selector">
        <button aria-hidden="true" class="btn icon-btn js-tooltip" type="button" tabindex="-1" data-original-title="Añadir fotos o video">
            <span class="tweet-camera Icon Icon--media"></span>
            <span class="text add-photo-label u-hiddenVisually">Añadir fotos o video</span>
        </button>
        <div class="image-selector">
            <input type="hidden" name="media_data_empty" class="file-data">
            <div class="multi-photo-data-container hidden">
            </div>
            <label class="t1-label">
            
            <span class="visuallyhidden">Añadir fotos o video</span>
            <input type="file" name="media[]" accept="image/gif,image/jpeg,image/jpg,image/png,video/mp4,video/x-m4v" multiple="" class="file-input js-tooltip" data-original-title="Añadir fotos o video" data-delay="150">
            </label>
        </div>
        </div></div>
            <div class="ComposerDragHelp">
        <span class="ComposerDragHelp-text"></span>
        </div>
            <span class="visuallyhidden" id="tweet-box-home-timeline-label">Texto del Tweet</span>

        <div class="RichEditor RichEditor--emojiPicker">
        
        <div class="RichEditor-mozillaCursorWorkaround">&nbsp;</div>
        <div class="RichEditor-container u-borderRadiusInherit">
                    


        <div role="listbox" class="dropdown-menu typeahead" id="typeahead-dropdown-4">
        <div aria-hidden="true" class="dropdown-caret">
            <div class="caret-outer"></div>
            <div class="caret-inner"></div>
        </div>
        <div role="presentation" class="dropdown-inner js-typeahead-results"><ul role="presentation" class="typeahead-items typeahead-accounts social-context js-typeahead-accounts block0" style="display: none;">
        
        <li role="presentation" data-user-id="" data-user-screenname="" data-remote="true" data-score="" class="typeahead-item typeahead-account-item js-selectable">
            
            <a role="option" class="js-nav" data-query-source="typeahead_click" data-search-query="" data-ds="account">
            <div class="js-selectable typeahead-in-conversation hidden">
                <span class="Icon Icon--follower Icon--small"></span>
                <span class="typeahead-in-conversation-text">En esta conversación</span>
            </div>
            <img class="avatar size32" alt="">
            <span class="typeahead-user-item-info account-group">
                <span class="fullname"></span><span class="UserBadges"><span class="Icon Icon--verified js-verified hidden"><span class="u-hiddenVisually">Cuenta verificada</span></span><span class="Icon Icon--protected js-protected hidden"><span class="u-hiddenVisually">Tweets Protegidos</span></span></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir" dir="ltr">@<b></b></span>
            </span>
            <span class="typeahead-social-context"></span>
            </a>
        </li>
        <li role="presentation" class="js-selectable typeahead-accounts-shortcut js-shortcut"><a role="option" class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-shortcut="true" data-ds="account_search"></a></li>
        </ul><ul role="presentation" class="typeahead-items typeahead-topics block1" style="display: none;">
        
        <li role="presentation" class="typeahead-item typeahead-topic-item">
            <a role="option" class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-ds="topics" tabindex="-1"></a>
        </li>
        </ul></div>
        </div>


            <div class="RichEditor-scrollContainer u-borderRadiusInherit">
                    <div aria-labelledby="tweet-box-home-timeline-label" name="tweet" id="tweet-box-home-timeline" class="tweet-box rich-editor" contenteditable="true" spellcheck="true" role="textbox" aria-multiline="true" data-placeholder-default="¿Qué está pasando?" data-placeholder-poll-composer-on="Haz una pregunta..." data-placeholder-reply="Twittea tu respuesta" dir="ltr" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-dropdown-4"><div>¿Qué está pasando?</div></div>

            <div class="RichEditor-pictographs" aria-hidden="true"></div>
            </div>
                    <div class="RichEditor-rightItems RichEditor-topItems">
                    <div class="EmojiPicker dropdown is-loading" style="">
        <button type="button" class="EmojiPicker-trigger js-dropdown-toggle js-tooltip u-textUserColorHover" title="Añadir emoji" data-delay="150" aria-haspopup="true">
            <span class="Icon Icon--smiley"></span>
            <span class="text u-hiddenVisually">
            Añadir emoji
            </span>
        </button>
        <div class="EmojiPicker-dropdownMenu dropdown-menu" tabindex="-1">
            <div class="EmojiPicker-content Caret Caret--stroked"></div>
        </div>
        </div>

                </div>

                    <div class="RichEditor-rightItems RichEditor-bottomItems">
                    <div class="js-character-counter">
        <div class="js-countdown-counter tweet-counter CountdownCounter"></div>
        <svg class="RadialCounter js-radial-counter" height="20" width="20">
        <style>
            /* Global svg style overrides the overflow. Added svg for specificity */
            svg.RadialCounter {
            margin-bottom: -4px;
            overflow: visible;
            transform: rotate(-90deg);
            }

            .RadialCounter--safe {
            stroke: #1da1f2;
            }

            .RadialCounter--warn {
            stroke: #ffad1f;
            }

            .RadialCounter--danger {
            stroke: #e0245e;
            }

            .RadialCounter-progressUnderlay {
            stroke: #ccd6dd;
            }

            @keyframes RadialCounterPulse {
            0% { stroke-width:2 }
            50% { stroke-width: 4; }
            100% { stroke-width: 2; }
            }

            .RadialCounter--danger.RadialCounter--pulse,
            .RadialCounter--warn.RadialCounter--pulse {
            animation: RadialCounterPulse 0.3s ease-in-out;
            animation-iteration-count: 1;
            }
        </style>
        <circle class="RadialCounter-progressUnderlay" cx="50%" cy="50%" r="8" fill="none" stroke-width="1"></circle>
        <circle class="js-progress-circle RadialCounter--safe" cx="50%" cy="50%" r="8" fill="none" stroke-width="2" style="stroke-dashoffset: 46.7469; stroke-dasharray: 50.2655;">
        </circle>
        </svg>

        </div>



                </div>

        </div>
        <div class="RichEditor-mozillaCursorWorkaround">&nbsp;</div>
        </div>

            
            <textarea aria-hidden="true" class="tweet-box-shadow hidden" name="status"></textarea>

            <div class="TweetBoxAttachments">
            
            <div class="thumbnail-container">
        <div class="thumbnail-wrapper">
            <div class="ComposerThumbnails"></div>
            <div class="preview-message">
            <button type="button" class="start-tagging js-open-user-select no-users u-borderUserColorLight u-textUserColor" disabled="">
                <span class="Icon Icon--me Icon--small"></span>
                <span class="tagged-users">
                ¿Quién aparece en estas fotos?
                </span>
            </button>
            </div>
            <div class="js-attribution attribution"></div>
            <div class="ComposerVideoInfo u-hidden"></div>
        </div>
        </div>
        <div class="photo-tagging-container user-select-container dropdown-menu hidden">
        <div class="tagging-dropdown">
            <div class="dropdown-caret center">
            <div class="caret-outer"></div>
            <div class="caret-inner"></div>
            </div>
            <div class="photo-tagging-controls user-select-controls">
            <label class="t1-label">
                <span class="Icon Icon--search nav-search" tabindex="-1"></span>
                <span class="u-hiddenVisually">Usuarios en esta foto</span>
                <input class="js-initial-focus" type="text" placeholder="Busca y etiqueta hasta a 10 personas" aria-autocomplete="list" aria-expanded="true" aria-owns="typeahead-dropdown-3">
            </label>
            </div>
            <div class="typeahead-container">
            


        <div role="listbox" class="dropdown-menu typeahead" id="typeahead-dropdown-3" aria-multiselectable="true" aria-hidden="false">
        <div aria-hidden="true" class="dropdown-caret">
            <div class="caret-outer"></div>
            <div class="caret-inner"></div>
        </div>
        <div role="presentation" class="dropdown-inner js-typeahead-results"><div role="presentation" class="typeahead-user-select block0">
        <div role="presentation" class="typeahead-empty-suggestions">
            Usuarios recomendados 
        </div>
        <ul role="presentation" class="typeahead-items typeahead-selected js-typeahead-selected">
            
            <li role="presentation" data-user-id="" data-user-screenname="" data-remote="true" data-score="" class="typeahead-item typeahead-selected-item js-selectable">
            
            <a role="option" class="js-nav" data-query-source="typeahead_click" data-search-query="" data-ds="account">
                <img class="avatar size32" alt="">
                <span class="typeahead-user-item-info account-group">
                <span class="select-status deselect-user js-deselect-user Icon Icon--check"></span>
                <span class="select-status select-disabled Icon Icon--unfollow"></span>
                <span class="fullname"></span><span class="UserBadges"><span class="Icon Icon--verified js-verified hidden"><span class="u-hiddenVisually">Cuenta verificada</span></span><span class="Icon Icon--protected js-protected hidden"><span class="u-hiddenVisually">Tweets Protegidos</span></span></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir" dir="ltr">@<b></b></span>
                </span>
            </a>
            </li>
            <li role="presentation" class="typeahead-selected-end"></li>
        </ul>

        <ul role="presentation" class="typeahead-items typeahead-accounts js-typeahead-accounts" style="display: none;">
            
            <li role="presentation" data-user-id="" data-user-screenname="" data-remote="true" data-score="" class="typeahead-item typeahead-account-item js-selectable">
            
            <a role="option" class="js-nav" data-query-source="typeahead_click" data-search-query="" data-ds="account">
                <img class="avatar size32" alt="">
                <span class="typeahead-user-item-info account-group">
                <span class="select-status deselect-user js-deselect-user Icon Icon--check"></span>
                <span class="select-status select-disabled Icon Icon--unfollow"></span>
                <span class="fullname"></span><span class="UserBadges"><span class="Icon Icon--verified js-verified hidden"><span class="u-hiddenVisually">Cuenta verificada</span></span><span class="Icon Icon--protected js-protected hidden"><span class="u-hiddenVisually">Tweets Protegidos</span></span></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir" dir="ltr">@<b></b></span>
                </span>
            </a>
            </li>
            <li role="presentation" class="typeahead-accounts-end"></li>
        </ul>
        </div></div>
        </div>

            </div>
        </div>
        </div>


            
            <div class="CardComposer">
                <div class="PollingCardComposer u-hidden" data-poll-min-duration="5" data-poll-max-duration="10080">
        <div class="PollingCardComposer-option PollingCardComposer-option1" data-option-index="0">
            <input type="radio" class="PollingCardComposer-optionRadio" disabled="">
            <div class="PollingCardComposer-optionInput is-singleLine is-plainText u-borderUserColorLightFocus is-showPlaceholder" contenteditable="true" spellcheck="true" role="textbox" data-placeholder="Opción 1"></div>
            <div style="clear: both"></div>
        </div>
        <div class="PollingCardComposer-option PollingCardComposer-option2" data-option-index="1">
            <input type="radio" class="PollingCardComposer-optionRadio" disabled="">
            <div class="PollingCardComposer-optionInput is-singleLine is-plainText u-borderUserColorLightFocus is-showPlaceholder" contenteditable="true" spellcheck="true" role="textbox" data-placeholder="Opción 2"></div>
            <div style="clear: both"></div>
        </div>
        <div class="PollingCardComposer-option PollingCardComposer-option3" data-option-index="2">
            <input type="radio" class="PollingCardComposer-optionRadio" disabled="">
            <div class="PollingCardComposer-optionInput is-singleLine is-plainText u-borderUserColorLightFocus is-showPlaceholder" contenteditable="true" spellcheck="true" role="textbox" data-placeholder="Opción 3 (opcional)"></div>
            <button type="button" class="PollingCardComposer-removeOption">
            <span class="Icon Icon--close Icon--medium"></span>
            </button>
            <div style="clear: both"></div>
        
        </div>
        <div class="PollingCardComposer-option PollingCardComposer-option4" data-option-index="3">
            <input type="radio" class="PollingCardComposer-optionRadio" disabled="">
            <div class="PollingCardComposer-optionInput is-singleLine is-plainText u-borderUserColorLightFocus is-showPlaceholder" contenteditable="true" spellcheck="true" role="textbox" data-placeholder="Opción 4 (opcional)"></div>
            <button type="button" class="PollingCardComposer-removeOption">
            <span class="Icon Icon--close Icon--medium"></span>
            </button>
            <div style="clear: both"></div>
        </div>
        <button type="button" class="PollingCardComposer-addOption u-textUserColor">
            <span>+</span>&nbsp;<span>Añadir una opción</span>
        </button>
        <div class="PollingCardComposer-pollDuration">
            <span class="PollingCardComposer-durationLabel">Duración de la encuesta:&nbsp;</span>
            <button type="button" class="PollingCardComposer-defaultDuration u-textUserColor">1 día</button>
            <div class="PollingCardComposer-customDuration">
            <span class="PollingCardComposer-customDuration--daysLabel">Días</span>
            <select class="PollingCardComposer-customDuration--days u-borderUserColorLight" data-duration-target="days">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
            <spann class="PollingCardComposer-customDuration--hoursLabel">Horas
            <select class="PollingCardComposer-customDuration--hours u-borderUserColorLight" data-duration-target="hours">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
            </select>
            <spann class="PollingCardComposer-customDuration--minutesLabel">Min
            <select class="PollingCardComposer-customDuration--minutes u-borderUserColorLight" data-duration-target="minutes">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
            </select>
            </spann></spann></div>
        </div>
        <button type="button" class="PollingCardComposer-remove u-textUserColor">
            <span>Eliminar encuesta</span>
        </button>
        </div>

            </div>

            
            <div class="tweet-box-overlay"></div>
            </div>
        </div>

        <div class="TweetBoxToolbar">
            <div class="TweetBoxExtras tweet-box-extras">
            <span class="TweetBoxExtras-item TweetBox-mediaPicker">
        </span>

            <span class="TweetBoxExtras-item"><div class="FoundMediaSearch found-media-search dropdown">
        <button class="btn js-found-media-search-trigger js-dropdown-toggle icon-btn js-tooltip" type="button" title="Añadir un archivo GIF" data-delay="150" aria-haspopup="true">
            <span class="Icon Icon--gif Icon--large"></span>
            <span class="text u-hiddenVisually">
            Añadir un archivo GIF
            </span>
        </button>
        <div class="FoundMediaSearch-dropdownMenu dropdown-menu" tabindex="-1">
            <div class="FoundMediaSearch-content Caret Caret--stroked">
            <div class="FoundMediaSearch-query">
                <input class="FoundMediaSearch-queryInput" type="text" autocomplete="off" placeholder="Buscar un archivo GIF">
                <span class="Icon Icon--search"></span>
            </div>
            <div class="FoundMediaSearch-results">
                <div class="FoundMediaSearch-items"></div>
                <div class="FoundMediaSearch-pagination"></div>
            </div>
            </div>
        </div>
        </div>
        </span>

            <span class="TweetBoxExtras-item"><div class="PollCreator">
        <button class="btn icon-btn PollCreator-btn js-tooltip" type="button" title="Añadir encuesta" data-delay="150">
            <span class="PollCreator-icon Icon Icon--pollBar"></span>
            <span class="text PollCreator-label u-hiddenVisually">Encuesta</span>
        </button>
        </div>
        </span>


            <span class="TweetBoxExtras-item"><div class="geo-picker dropdown">
        <button class="btn js-geo-search-trigger geo-picker-btn icon-btn js-tooltip" type="button" data-delay="150">
            <span class="Icon Icon--geo"></span>
            <span class="text geo-status u-hiddenVisually">Añadir ubicación</span>
        </button>
        <span class="dropdown-container dropdown-menu"></span>
        <input type="hidden" name="place_id">
        </div>
        </span>

            <div class="TweetBoxUploadProgress">
        <div class="TweetBoxUploadProgress-uploading">
            Subiendo
            <div class="TweetBoxUploadProgress-bar">
            <div class="TweetBoxUploadProgress-barPosition"></div>
            </div>
        </div>
        <div class="TweetBoxUploadProgress-processing">
            Procesando
            <div class="TweetBoxUploadProgress-spinner Spinner Spinner--size14"></div>
        </div>
        </div>
            </div>

            <div class="TweetBoxToolbar-tweetButton tweet-button">
                <span class="add-tweet-button ">
                <button class="js-add-tweet EdgeButton EdgeButton--secondary EdgeButton--icon EdgeButton--medium js-tooltip" title="Agregar otro Tweet" aria-label="Agregar otro Tweet" data-placement="top" data-delay="150">
        <span class="Icon Icon--add Icon--medium"></span>
        </button>

                </span>
            <button class="tweet-action disabled EdgeButton EdgeButton--primary js-tweet-btn" type="button" disabled="">
        <span class="button-text tweeting-text">
            Twittear
        </span>
        <span class="button-text replying-text">Responder</span>
        </button>

            </div>
        </div>
        <div style="position: absolute; visibility: hidden;"><div>¿Qué está pasando?</div></div></form>

            </div>
        </div>
                </div>
                <!--  Fin Cuadro central, tweets  -->
            </div>
        </div>

    <!-- Fin Espacio Principal-->
    </div>
</body>
@endsection
