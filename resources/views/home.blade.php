@extends('layouts.app')
@section('content')
<!--  Espacio Principal-->
            <div id="page-outer">
                <div id="page-container" class="AppContent wrapper wrapper-home">
                    <!-- Cuadro lateral izquierdo -->
                    <div class="dashboard dashboard-left">
                        <div class="DashboardProfileCard  module">
                            <a class="DashboardProfileCard-bg u-bgUserColor u-block" href="/{{Auth::user()->username}}" tabindex="-1" aria-hidden="true" rel="noopener">
                            </a>
                            <div class="DashboardProfileCard-content">
                                <a class="DashboardProfileCard-avatarLink u-inlineBlock" href="/{{Auth::user()->username}}" title="Name" tabindex="-1" aria-hidden="true" rel="noopener">
                                    <img class="DashboardProfileCard-avatarImage js-action-profile-avatar" src="{{ Auth::user()->avatar }}" alt="">
                                </a>
                            <div class="DashboardProfileCard-userFields account-group">
                                <div class="DashboardProfileCard-name u-textTruncate">
                                <a class="u-textInheritColor js-nav" href="/{{ Auth::user()->username }}" rel="noopener">{{ Auth::user()->name }}</a><span class="UserBadges"></span>
                                </div>
                                <span class="DashboardProfileCard-screenname u-inlineBlock u-dir" dir="ltr">
                                <a class="DashboardProfileCard-screennameLink u-linkComplex u-linkClean js-nav" href="{{ Auth::user()->username }}" rel="noopener"><span class="username u-dir" dir="ltr">@<b class="u-linkComplex-target">{{ Auth::user()->username }}</b></span></a>
                                </span>
                            </div>
                                <div class="ProfileCardStats">
                            <ul class="ProfileCardStats-statList Arrange Arrange--bottom Arrange--equal"><li class="ProfileCardStats-stat Arrange-sizeFit">
                                <a class="ProfileCardStats-statLink u-textUserColor u-linkClean u-block js-nav js-tooltip" href="/{{Auth::user()->username}}" data-element-term="tweet_stats" data-original-title="4 Tweets">
                                <span class="ProfileCardStats-statLabel u-block">Tweets</span>
                                <span class="ProfileCardStats-statValue" data-count="4" data-is-compact="false">{{$tweetsEscritos}}</span>
                                </a>
                            </li><li class="ProfileCardStats-stat Arrange-sizeFit">
                                <a class="ProfileCardStats-statLink u-textUserColor u-linkClean u-block js-nav js-tooltip" href="/{{Auth::user()->username}}/following" data-element-term="following_stats" data-original-title="{{count($seguidos)}} Siguiendo">
                                    <span class="ProfileCardStats-statLabel u-block">Siguiendo</span>
                                    <span class="ProfileCardStats-statValue" data-count="{{count($seguidos)}}" data-is-compact="false">{{count($seguidos)}}</span>
                                </a>
                                </li><li class="ProfileCardStats-stat Arrange-sizeFit">
                                <a class="ProfileCardStats-statLink u-textUserColor u-linkClean u-block js-nav js-tooltip" href="/{{Auth::user()->username}}/followers" data-element-term="follower_stats" data-original-title="{{count($seguidores)}} Seguidores">
                                    <span class="ProfileCardStats-statLabel u-block">Seguidores</span>
                                    <span class="ProfileCardStats-statValue" data-count="{{count($seguidores)}}" data-is-compact="false">{{count($seguidores)}}</span>
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
                    
                    <div aria-labelledby="content-main-heading" class="content-main top-timeline-tweetbox" id="timeline" role="main" tabindex="-1">
                        <div id="above-timeline-prompt"></div>
                        <div class="timeline-tweet-box">
                            <div class="home-tweet-box tweet-box component tweet-user">
                                <img alt="Name" class="top-timeline-tweet-box-user-image avatar size32" src="{{ Auth::user()->avatar }}">
                                <form action="//upload.twitter.com/i/tweet/create_with_media.iframe" class="t1-form tweet-form condensed" data-condensed-text="¿Qué está pasando?" data-poll-composer-rows="3" enctype="multipart/form-data" id="swift_tweetbox_1515235399021" method="post" name="swift_tweetbox_1515235399021" target="tweet-post-iframe">
                                    <div class="reply-users"></div>
                                    <div class="tweet-content">
                                        <img alt="Name" class="inline-reply-user-image avatar size32" src="{{ Auth::user()->avatar }}">
                                        <div class="TweetBox-photoIntent">
                                            <div class="photo-selector">
                                                <button aria-hidden="true" class="btn icon-btn js-tooltip" data-original-title="Añadir fotos o video" tabindex="-1" type="button"><span class="tweet-camera Icon Icon--media"></span> <span class="text add-photo-label u-hiddenVisually">Añadir fotos o video</span></button>
                                                <div class="image-selector">
                                                    <input class="file-data" name="media_data_empty" type="hidden">
                                                    <div class="multi-photo-data-container hidden"></div><label class="t1-label"><span class="visuallyhidden">Añadir fotos o video</span> <input accept="image/gif,image/jpeg,image/jpg,image/png,video/mp4,video/x-m4v" class="file-input js-tooltip" data-delay="150" data-original-title="Añadir fotos o video" multiple name="media_empty" type="file"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ComposerDragHelp">
                                            <span class="ComposerDragHelp-text"></span>
                                        </div><span class="visuallyhidden" id="tweet-box-home-timeline-label">Texto del Tweet</span>
                                        <div class="RichEditor RichEditor--emojiPicker">
                                            <div class="RichEditor-mozillaCursorWorkaround">
                                                &nbsp;
                                            </div>
                                            <div class="RichEditor-container u-borderRadiusInherit">
                                                <div class="dropdown-menu typeahead" id="typeahead-dropdown-3" role="listbox">
                                                    <div aria-hidden="true" class="dropdown-caret">
                                                        <div class="caret-outer"></div>
                                                        <div class="caret-inner"></div>
                                                    </div>
                                                    <div class="dropdown-inner js-typeahead-results" role="presentation">
                                                        <ul class="typeahead-items typeahead-accounts social-context js-typeahead-accounts block0" role="presentation" style="display: none;">
                                                            <li class="js-selectable typeahead-accounts-shortcut js-shortcut" role="presentation">
                                                                <a class="js-nav" data-ds="account_search" data-query-source="typeahead_click" data-search-query="" data-shortcut="true" href="" id="typeahead-item-0" role="option"></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="typeahead-items typeahead-topics block1" role="presentation" style="display: none;"></ul>
                                                    </div>
                                                </div>
                                                <div class="RichEditor-scrollContainer u-borderRadiusInherit">
                                                    <div aria-autocomplete="list" aria-expanded="false" aria-labelledby="tweet-box-home-timeline-label" aria-multiline="true" aria-owns="typeahead-dropdown-3" class="tweet-box rich-editor" contenteditable="true" data-placeholder-default="¿Qué está pasando?" data-placeholder-poll-composer-on="Haz una pregunta..." data-placeholder-reply="Twittea tu respuesta" dir="ltr" id="tweet-box-home-timeline" name="tweet" role="textbox" spellcheck="true">
                                                        <div >
                                                            ¿Qué está pasando?
                                                        </div>
                                                    </div>
                                                    <div aria-hidden="true" class="RichEditor-pictographs"></div>
                                                </div>
                                                <div class="RichEditor-rightItems RichEditor-bottomItems">
                                                    <div class="js-character-counter">
                                                        <div class="js-countdown-counter tweet-counter CountdownCounter"></div><svg class="RadialCounter js-radial-counter" height="20" width="20">
                                                        <style>
                                                        /* Global svg style overrides the overflow. Added svg for specificity */ svg.RadialCounter { margin-bottom: -4px; overflow: visible; transform: rotate(-90deg); } .RadialCounter--safe { stroke: #1da1f2; } .RadialCounter--warn { stroke: #ffad1f; } .RadialCounter--danger { stroke: #e0245e; } .RadialCounter-progressUnderlay { stroke: #ccd6dd; } @keyframes RadialCounterPulse { 0% { stroke-width:2 } 50% { stroke-width: 4; } 100% { stroke-width: 2; } } .RadialCounter--danger.RadialCounter--pulse, .RadialCounter--warn.RadialCounter--pulse { animation: RadialCounterPulse 0.3s ease-in-out; animation-iteration-count: 1; } 
                                                        </style>
                                                        <circle class="RadialCounter-progressUnderlay" cx="50%" cy="50%" fill="none" r="8" stroke-width="1"></circle>
                                                        <circle class="js-progress-circle RadialCounter--safe" cx="50%" cy="50%" fill="none" r="8" stroke-width="2" style="stroke-dashoffset: 46.7469; stroke-dasharray: 50.2655;"></circle></svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="RichEditor-mozillaCursorWorkaround">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <textarea aria-hidden="true" class="tweet-box-shadow hidden" name="status"></textarea>
                                        <div class="TweetBoxAttachments">
                                            <div class="thumbnail-container">
                                                <div class="thumbnail-wrapper">
                                                    <div class="ComposerThumbnails"></div>
                                                </div>
                                            <div class="tweet-box-overlay"></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="TweetBoxToolbar">
                                        <div class="TweetBoxExtras tweet-box-extras">
                                            <span class="TweetBoxExtras-item TweetBox-mediaPicker"></span>
                                        </div>
                                        <div class="TweetBoxToolbar-tweetButton tweet-button">
                                            <span class="add-tweet-button"><button aria-label="Agregar otro Tweet" class="js-add-tweet EdgeButton EdgeButton--secondary EdgeButton--icon EdgeButton--medium js-tooltip disabled" data-delay="150" data-original-title="Agregar otro Tweet" data-placement="top" disabled><span class="add-tweet-button"><span class="add-tweet-button"><span class="Icon Icon--add Icon--medium"></span></span></span></button></span> <button class="tweet-action EdgeButton EdgeButton--primary js-tweet-btn disabled" onclick="nuevoTweet()" disabled type="button"><span class="button-text tweeting-text">Twittear</span> <span class="button-text replying-text">Responder</span></button>
                                        </div>
                                    </div>
                                    <div style="position: absolute; visibility: hidden;"></div>
                                    <div style="position: absolute; visibility: hidden;">
                                        <div>
                                            ¿Qué está pasando?
                                        </div>
                                    </div>
                                    <div style="position: absolute; visibility: hidden;">
                                        <div>
                                            ¿Qué está pasando?
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="stream-container conversations-enabled ">
                            <div class="stream">
                                <ol id="listaTweets"class="stream-items js-navigable-stream">
                                @foreach ($tweets as $tweet)
                                <li class="js-stream-item stream-item stream-item">
                                    <div class="tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable dismissible-content original-tweet js-original-tweet has-cards cards-forward">
                                        <div class="content">
                                            <div class="stream-item-header">
                                                <a class="account-group js-account-group js-action-profile js-user-profile-link js-nav" href="/{{$tweet->user->username}}">
                                                    <img class="avatar js-action-profile-avatar" src="{{$tweet->user->avatar }}" alt="">
                                                    <span class="FullNameGroup">
                                                    <strong class="fullname show-popup-with-id u-textTruncate " data-aria-label-part="">{{$tweet->user->name}}</strong><span>‏</span><span class="UserBadges"></span><span class="UserNameBreak">&nbsp;</span></span>
                                                    <span class="username u-dir u-textTruncate" dir="ltr" data-aria-label-part="">@<b>{{$tweet->user->name}}</b></span>
                                                </a>
                                                <small class="time">
                                                <a href="" class="tweet-timestamp js-permalink js-nav js-tooltip" data-original-title="{{$tweet->fecha}}"><span data-long-form="true" aria-hidden="true">{{  \Carbon\Carbon::parse($tweet->fecha)->diffForHumans(null, true)  }}</span></a>
                                                </small>
                                                @if (Auth::user()->id != $tweet->user->id)
                                                
                                                <div class="ProfileTweet-action ProfileTweet-action--more js-more-ProfileTweet-actions" style="visibility: hidden;">
                                                    <div class="dropdown">
                                                        <button class="ProfileTweet-actionButton u-textUserColorHover dropdown-toggle js-dropdown-toggle" type="button" aria-haspopup="true">
                                                            <div class="IconContainer js-tooltip" title="Más">
                                                                <span class="Icon Icon--caretDownLight Icon--small"></span>
                                                                <span class="u-hiddenVisually">Más</span>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-menu is-autoCentered"><div class="js-first-tabstop" tabindex="0"></div>
                                                        <div class="dropdown-caret">
                                                            <div class="caret-outer"></div>
                                                            <div class="caret-inner"></div>
                                                        </div>
                                                        <ul tabindex="-1" role="menu" aria-labelledby="menu-1" aria-hidden="false">
                                                            <li class="js-actionDelete" role="presentation">
                                                                <button type="button" class="dropdown-link" style="min-width:-webkit-fill-available;"role="menuitem">Eliminar Tweet</button>
                                                            </li>                                                         
                                                        </ul>
                                                    <div class="js-last-tabstop" tabindex="0"></div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="ProfileTweet-action ProfileTweet-action--more js-more-ProfileTweet-actions">
                                                    <div class="dropdown">
                                                        <button class="ProfileTweet-actionButton u-textUserColorHover dropdown-toggle js-dropdown-toggle" type="button" aria-haspopup="true">
                                                            <div class="IconContainer js-tooltip" title="Más">
                                                                <span class="Icon Icon--caretDownLight Icon--small"></span>
                                                                <span class="u-hiddenVisually">Más</span>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-menu is-autoCentered"><div class="js-first-tabstop" tabindex="0"></div>
                                                        <div class="dropdown-caret">
                                                            <div class="caret-outer"></div>
                                                            <div class="caret-inner"></div>
                                                        </div>
                                                        <ul tabindex="-1" role="menu" aria-labelledby="menu-1" aria-hidden="false">
                                                            <li class="js-actionDelete" role="presentation">
                                                                <button type="button" class="dropdown-link" style="min-width:-webkit-fill-available;"role="menuitem">Eliminar Tweet</button>
                                                            </li>                                                         
                                                        </ul>
                                                    <div class="js-last-tabstop" tabindex="0"></div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>                               
                                        </div>
                                        <div class="js-tweet-text-container">
                                                <p class="TweetTextSize  js-tweet-text tweet-text" lang="es" data-aria-label-part="0">{{$tweet->mensaje}}</p>
                                        </div>
                                        <div class="stream-item-footer">

                                            <div class="ProfileTweet-actionList js-actions" role="group" aria-label="Acciones del Tweet">
                                                <div class="ProfileTweet-action ProfileTweet-action--reply">
                                            <button class="ProfileTweet-actionButton js-actionButton js-actionReply" data-modal="ProfileTweet-reply" type="button" aria-describedby="profile-tweet-action-reply-count-aria-951439183674998785">
                                                <div class="IconContainer js-tooltip" title="Responder">
                                                <span class="Icon Icon--medium Icon--reply"></span>
                                                <span class="u-hiddenVisually">Responder</span>
                                                </div>
                                                <span class="ProfileTweet-actionCount">
                                                    <span class="ProfileTweet-actionCountForPresentation" aria-hidden="true">
                                                        <!-- Poner aqui el numero de respuestas -->1

                                                    </span>
                                                </span>
                                            </button>
                                            </div>

                                                <div class="ProfileTweet-action " >
                                            @foreach($conectado->retweets()->get() as $reTweetUsuario)
                                            <?php $haRetwiteado=false ?>
                                                @if($tweet->id == $reTweetUsuario->id)
                                                <?php $haRetwiteado=true ?>
                                                @break
                                                @endif


                                            @endforeach
                                            @if($haRetwiteado == false)
                                                <a href="{{ action('HomeController@addRT', ['tweet'=>$tweet->id]) }}" class="ProfileTweet-actionButton" data-modal="ProfileTweet-retweet" type="button" aria-describedby="profile-tweet-action-retweet-count-aria-951439183674998785">
                                                    <div class="IconContainer js-tooltip" data-original-title="Retwittear">
                                                    <span class="Icon Icon--medium Icon--retweet"></span>
                                                    <span class="u-hiddenVisually">Retwittear</span>
                                                    </div>
                                                    <span class="ProfileTweet-actionCount">
                                                    <span class="ProfileTweet-actionCountForPresentation" aria-hidden="tue" >{{$tweet->retweetsUsers()->count()}}
                                                    </span>
                                                </span>

                                                </a>
                                                @else
                                                <a href="{{ action('HomeController@removeRT', ['tweet'=>$tweet->id]) }}" class="ProfileTweet-actionButton js-actionButton js-actionRetweet"  style="color:#17bf63;"data-modal="ProfileTweet-retweet" type="button" aria-describedby="profile-tweet-action-retweet-count-aria-951439183674998785">
                                                    <div class="IconContainer js-tooltip" data-original-title="Deshacer Retweet">
                                                    <span class="Icon Icon--medium Icon--retweet"></span>
                                                    <span class="u-hiddenVisually">Deshacer Retweet</span>
                                                    </div>
                                                    <span class="ProfileTweet-actionCount">
                                                    <span class="ProfileTweet-actionCountForPresentation" aria-hidden="tue" style="color:#17bf63;" >{{$tweet->retweetsUsers()->count()}}
                                                    </span>
                                                </span>

                                                </a>
                                                @endif
                                            </div>
                                                <div class="ProfileTweet-action ProfileTweet-action--favorite js-toggleState">
                                            <button class="ProfileTweet-actionButton js-actionButton js-actionFavorite" type="button" aria-describedby="profile-tweet-action-favorite-count-aria-951439183674998785">
                                                <div class="IconContainer js-tooltip" data-original-title="Me gusta">
                                                <span role="presentation" class="Icon Icon--heart Icon--medium"></span>
                                                <div class="HeartAnimation"></div>
                                                <span class="u-hiddenVisually">Me gusta</span>
                                                </div>
                                                <span class="ProfileTweet-actionCount ProfileTweet-actionCount--isZero">
                                                <span class="ProfileTweet-actionCountForPresentation" aria-hidden="true">
                                                 <!-- Poner aqui el numero de megustas -->2

                                                </span>
                                            </span>

                                            </button>
                                            </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!--Final Cuadro central, tweets  -->
                    <!-- Cuadro derecha, recomendaciones  -->
                    <div class="dashboard dashboard-right">
                    <div class="module wtf-module js-wtf-module roaming-module has-content">
                        <div class="flex-module">
                            <div class="flex-module-header">
                                <h3>A quién seguir</h3>
                                <!--<small>· </small>
                                <button type="button" class="btn-link js-refresh-suggestions"><small>Actualizar</small></button>
                                <small class="view-all">· <a class="js-view-all-link js-nav" href="/who_to_follow/suggestions" data-element-term="view_all_link">Ver todos</a></small>-->
                            </div>
                            @foreach ($users as $user)
                            <div class="js-recommended-followers dashboard-user-recommendations flex-module-inner" data-section-id="wtf" style="opacity: 1;">
                                <div class="UserSmallListItem js-account-summary account-summary js-actionable-user" data-user-id="{{ $user->id }}" data-feedback-token="500" data-impression-id="">
                                    <div class="UserSmallListItem-context"></div>
                            
                                    <div class="dismiss js-action-dismiss"><span class="Icon Icon--close"></span></div>
    
                                    <div class="content">
                                        <a class="account-group js-recommend-link js-user-profile-link user-thumb" href="/{{$user->username}}" >
                                
                                            <img class="avatar js-action-profile-avatar " src="{{ $user->avatar }}"alt="">
                                            <span class="account-group-inner" data-user-id="274529577">
                                                <strong class="fullname">{{ $user->name }} </strong><span class="UserBadges"></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir u-textTruncate" dir="ltr">@<b>{{ $user->username }}</b></span>
                                            </span>
                                        </a>
    
                                    
                                        <div class="user-actions not-following not-muting" data-screen-name="{{ $user->name }}" data-user-id="{{ $user->id }}">
                                        <span class="user-actions-follow-button js-follow-btn follow-button">
                                            <a  href="{{ action('HomeController@seguir', ['seguido'=>$user->id]) }}" type="button" class="EdgeButton EdgeButton--secondary EdgeButton--small  button-text follow-text">
                                                <span aria-hidden="true">Seguir</span>
                                                <span class="u-hiddenVisually">Seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </a>
                                            <button type="button" class=" EdgeButton EdgeButton--primary EdgeButton--small  button-text following-text">
                                                <span aria-hidden="true">Siguiendo</span>
                                                <span class="u-hiddenVisually">Siguiendo a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </button>
                                            <button type="button" class="EdgeButton EdgeButton--danger EdgeButton--small  button-text unfollow-text">
                                                <span aria-hidden="true">Dejar de seguir</span>
                                                <span class="u-hiddenVisually">Dejar de seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </button>
                                
                                        </span>
                                        </div>
                                    </div><!--content-->  
                                </div>
                        
                            </div>
                            @endforeach
                        </div><!--flex-module-->
    
                    <div class="flex-module import-prompt">
                        <div class="flex-module-footer u-table">
                            <a href="" class="js-tooltip u-tableCell u-alignMiddle" data-original-title="Encuentra a personas que conoces">
                            <span class="Icon Icon--people Icon--small"></span><span class="u-hiddenVisually">Encuentra a personas que conoces</span>
                            </a>
                            <a class="u-tableCell u-alignMiddle remove-discover-pymk" href="">Encuentra a personas que conoces</a>
                        </div>
                    </div>
                    </div>
    
                    </div>
                    <!--Fin derecho, usuarios  -->

                    <script type="text/javascript">

$(document).ready(function() { localStorage.removeItem('__draft_tweets__:home');});
function nuevoTweet() {         
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $.post("/tweet", {
        mensaje: document.getElementById('tweet-box-home-timeline').textContent
    });         

    window.location.reload(true);
         
 }
</script>


@endsection