@extends('layouts.app') @section('content')
<style>
    body.three-col .wrapper {
        width: unset;
    }
    
    .AppContent {
        padding: 30px 0px 15px;
    }

    .ProfileCanopy-avatar {
    left: auto;

}
</style>
<div class="ProfileCanopy ProfileCanopy--withNav ProfileCanopy--large js-variableHeightTopBar">
    <div class="ProfileCanopy-inner">
        <div class="ProfileCanopy-header u-bgUserColor" style="margin-top: 0px;">
            <div class="ProfileCanopy-headerBg">
                <img alt="" src="https://pbs.twimg.com/profile_banners/293967812/1408826129/1500x500" style="transform: none;">
            </div>
        </div>
        <div class="AppContainer">
            <div class="ProfileCanopy-avatar">
                <div class="ProfileAvatar">
                    <a class="ProfileAvatar-placeholder u-block js-nav js-tooltip profile-picture u-hidden" href="/{{$user->username}}?edit=true" title="Añadir una foto de perfil" data-placement="right" data-scribe-element="profile_avatar">
                        <img class="ProfileAvatar-placeholderImage u-bgUserColor" data-avatar-placeholder="true" src="https://abs.twimg.com/a/1515735725/img/t1/highline/empty_state/owner_empty_avatar.png" alt="{{$user->name}}">
                    </a>
                    <a class="ProfileAvatar-container u-block js-tooltip profile-picture" href="{{$user->avatar}}" data-resolved-url-large="{{$user->avatar}}" data-url="{{$user->avatar}}" target="_blank" rel="noopener">
      <img class="ProfileAvatar-image" src="{{$user->avatar}}" alt="{{$user->name}}">
    </a>
                </div>
            </div>
            <div class="ProfileCanopy-headerPromptAnchor"></div>
        </div>
    </div>
    <div class="ProfileCanopy-navBar u-boxShadow">
        <div class="ProfilePage-editingOverlay"></div>
        <div class="AppContainer">
            <div class="Grid Grid--withGutter">
                <div class="Grid-cell u-size1of3 u-lg-size1of4">
                    <div class="ProfileCanopy-card" role="presentation" aria-hidden="true">
                        <div class="ProfileCardMini">
                            <a class="ProfileCardMini-avatar profile-picture js-tooltip" href="https://pbs.twimg.com/profile_images/524532262428106753/iwggeorR.jpeg" title="{{$user->name}}" data-resolved-url-large="https://pbs.twimg.com/profile_images/524532262428106753/iwggeorR.jpeg" data-url="https://pbs.twimg.com/profile_images/524532262428106753/iwggeorR.jpeg" target="_blank" rel="noopener" tabindex="-1">
                                <img class="ProfileCardMini-avatarImage" alt="{{$user->name}}" src="https://pbs.twimg.com/profile_images/524532262428106753/iwggeorR_normal.jpeg">
                            </a>
                            <div class="ProfileCardMini-details">
                                <div class="ProfileNameTruncated account-group">
                                    <div class="u-textTruncate u-inlineBlock">
                                        <a class="fullname ProfileNameTruncated-link u-textInheritColor js-nav" href="/{{$user->username}}" data-aria-label-part="" tabindex="-1">
      {{$user->name}}</a></div><span class="UserBadges"></span>
                                </div>
                                <div class="ProfileCardMini-screenname">
                                    <a href="/{{$user->username}}" class="ProfileCardMini-screennameLink u-linkComplex js-nav u-dir" dir="ltr" tabindex="-1">
                                        <span class="username u-dir" dir="ltr">@<b class="u-linkComplex-target">{{$user->username}}</b></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Grid-cell u-size2of3 u-lg-size3of4">
                    <div class="ProfileCanopy-nav">
                        <div class="ProfileNav" role="navigation" data-user-id="293967812">
                            <ul class="ProfileNav-list">
                                <li class="ProfileNav-item ProfileNav-item--tweets is-active">
                                    <a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav" title="4 Tweets" data-nav="tweets" tabindex="0">
                                        <span class="ProfileNav-label" aria-hidden="true">Tweets</span>
                                        <span class="u-hiddenVisually">Tweets, página actual.</span>
                                        <span class="ProfileNav-value" data-count="4" data-is-compact="false">{{$user->tweets->count()}}
            </span>
                                    </a>
                                </li>
                                <li class="ProfileNav-item ProfileNav-item--following">
                                    <a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" title="279 Siguiendo" data-nav="following" href="/following">
                                        <span class="ProfileNav-label" aria-hidden="true">Siguiendo</span>
                                        <span class="u-hiddenVisually">Siguiendo</span>
                                        <span class="ProfileNav-value" data-count="279" data-is-compact="false">{{$user->seguidos->count()}}</span>
                                    </a>
                                </li>
                                <li class="ProfileNav-item ProfileNav-item--followers">
                                    <a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" title="35 Seguidores" data-nav="followers" href="/followers">
                                        <span class="ProfileNav-label" aria-hidden="true">Seguidores</span>
                                        <span class="u-hiddenVisually">Seguidores</span>
                                        <span class="ProfileNav-value" data-count="35" data-is-compact="false">{{$user->seguidores->count()}}</span>
                                    </a>
                                </li>
                                <li class="ProfileNav-item ProfileNav-item--favorites" data-more-item=".ProfileNav-dropdownItem--favorites">
                                    <a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" title="1 Me gusta" data-nav="favorites" href="/i/likes">
                                        <span class="ProfileNav-label" aria-hidden="true">Me gusta</span>
                                        <span class="u-hiddenVisually">Me gusta</span>
                                        <span class="ProfileNav-value" data-count="1" data-is-compact="false">1</span>
                                    </a>
                                </li>
                                <li class="ProfileNav-item ProfileNav-item--lists" data-more-item=".ProfileNav-dropdownItem--lists">
                                    <a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip  js-nav u-textUserColor" title="1 Lista" data-nav="all_lists" href="/{{$user->username}}/lists">
                                        <span class="ProfileNav-label" aria-hidden="true">Listas</span>
                                        <span class="u-hiddenVisually">Listas</span>
                                        <span class="ProfileNav-value" data-is-compact="false">1</span>
                                    </a>
                                </li>
                                <li class="ProfileNav-item ProfileNav-item--more dropdown is-hidden" style="">
                                    <a class="ProfileNav-stat ProfileNav-stat--link ProfileNav-stat--moreLink js-dropdown-toggle" role="button" href="#more">
                                        <span class="ProfileNav-label">&nbsp;</span>
                                        <span class="ProfileNav-value">Más <span class="ProfileNav-dropdownCaret Icon Icon--medium Icon--caretDown"></span></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="/i/likes" class="ProfileNav-dropdownItem ProfileNav-dropdownItem--favorites is-hidden u-bgUserColorHover u-bgUserColorFocus u-linkClean js-nav" style="">Me gusta</a></li>
                                            <li>
                                                <a href="/{{$user->username}}/lists" class="ProfileNav-dropdownItem ProfileNav-dropdownItem--lists is-hidden u-bgUserColorHover u-bgUserColorFocus u-linkClean js-nav" style="">Listas</a></li>
                                            <li>
                                                <a href="/{{$user->username}}/moments" class="ProfileNav-dropdownItem ProfileNav-dropdownItem--userMoments is-hidden u-bgUserColorHover u-bgUserColorFocus u-linkClean js-nav" style="">Momentos</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="ProfileNav-item ProfileNav-item--userActions u-floatRight u-textRight with-rightCaret ">
                                    <div class="UserActions   u-textLeft">
                                        <button type="button" class="UserActions-editButton edit-button EdgeButton EdgeButton--tertiary" data-scribe-element="profile_edit_button">
                                            <span class="button-text">Editar perfil</span>
                                        </button>
                                        <div class="ProfilePage-editingButtons">
                                            <button class="ProfilePage-cancelButton EdgeButton EdgeButton--tertiary" data-scribe-element="cancel_button" tabindex="4">Cancelar</button>
                                            <button class="ProfilePage-saveButton EdgeButton EdgeButton--secondary" tabindex="3">Guardar cambios</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Espacio Principal-->
<div id="page-outer">
    <div id="page-container" class=" wrapper wrapper-home" style="padding: 0px 100px 40px;">
        <div class="Grid Grid--withGutter">
            <div class="Grid-cell u-size1of3 u-lg-size1of4">
                <div class="Grid Grid--withGutter">
                    <div class="Grid-cell">
                        <div class="ProfileSidebar ProfileSidebar--withLeftAlignment">
                            <div class="ProfileHeaderCard">
                                <h1 class="ProfileHeaderCard-name">
                                    <a href="/{{$user->username}}" class="ProfileHeaderCard-nameLink u-textInheritColor js-nav">{{$user->name}}</a>
                                </h1>

                                                                <h2 class="ProfileHeaderCard-screenname u-inlineBlock u-dir" dir="ltr">
                                    <a class="ProfileHeaderCard-screennameLink u-linkComplex js-nav" href="/{{$user->username}}">
                                    <span class="username u-dir" dir="ltr">@<b class="u-linkComplex-target">{{$user->username}}</b></span>
                                    </a>
                                </h2>

                                <p class="ProfileHeaderCard-bio u-dir" dir="ltr"></p>

                                <div class="ProfileHeaderCard-joinDate">
                                    <span class="Icon Icon--calendar Icon--medium" aria-hidden="true" role="presentation"></span>
                                    <span class="ProfileHeaderCard-joinDateText js-tooltip u-dir" dir="ltr" data-original-title="{{$user->created_at}}">{{-- \Carbon\Carbon::setLocale('LC_TIME', 'German') --}}Se unió  {{  \Carbon\Carbon::parse($user->created_at)->formatLocalized('%A %d %B %Y') }}</span>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="Grid-cell u-size2of3 u-lg-size3of4">
                <div class="Grid Grid--withGutter">
                    <div class="Grid-cell">
                        <div class="js-profileClusterFollow"></div>
                    </div>

                    <div class="Grid-cell
                    u-lg-size2of3
              " data-test-selector="ProfileTimeline">

                        <div class="ProfileHeading">
                            <div class="ProfileHeading-spacer"></div>
                            <div class="ProfileHeading-content">
                                <h2 id="content-main-heading" class="ProfileHeading-title u-hiddenVisually ">Tweets</h2>
                                <ul class="ProfileHeading-toggle">
                                    <li class="ProfileHeading-toggleItem  is-active" data-element-term="tweets_toggle">
                                        <span aria-hidden="true">Tweets</span>
                                        <span class="u-hiddenVisually">Tweets, página actual.</span>
                                    </li>
                                    <li class="ProfileHeading-toggleItem  u-textUserColor" data-element-term="tweets_with_replies_toggle">
                                        <a class="ProfileHeading-toggleLink js-nav" href="/{{$user->username}}/with_replies" data-nav="tweets_with_replies_toggle">
                  Tweets y respuestas
                </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="scroll-bump-dialog" class="ScrollBumpDialog modal-container">
                            <div class="modal draggable">
                                <div class="modal-content clearfix">

                                    <button type="button" class="modal-btn modal-close js-close">
                                        <span class="Icon Icon--close Icon--medium">
                            <span class="visuallyhidden">Cerrar</span>
                                        </span>
                                    </button>

                                    <div class="modal-header">
                                        <h3 class="modal-title">
                                    Seguiste a

                                             </h3>
                                    </div>

                                    <div class="modal-body">
                                        <div class="loading">
                                            <span class="spinner-bigger"></span>
                                        </div>
                                        <ol class="ScrollBumpDialog-usersList clearfix js-users-list"></ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="Grid-cell u-size1of3">
                    <div class="Grid-cell u-size1of3">
                        <div class="Grid Grid--withGutter">
                            <div class="Grid-cell">
                                <div class="ProfileSidebar ProfileSidebar--withRightAlignment">

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
                                                        <div class="js-recommended-followers dashboard-user-recommendations flex-module-inner" data-section-id="wtf" style="opacity: 1;">
                                <div class="UserSmallListItem js-account-summary account-summary js-actionable-user" data-user-id="4" data-feedback-token="500" data-impression-id="">
                                    <div class="UserSmallListItem-context"></div>
                            
                                    <div class="dismiss js-action-dismiss"><span class="Icon Icon--close"></span></div>
    
                                    <div class="content">
                                        <a class="account-group js-recommend-link js-user-profile-link user-thumb" href="http://localhost:8000/home/4">
                                
                                            <img class="avatar js-action-profile-avatar " src="https://pbs.twimg.com/profile_images/2959799296/8adc8e7914393f0716a18e133e217dd9_400x400.jpeg" alt="">
                                            <span class="account-group-inner" data-user-id="274529577">
                                                <strong class="fullname">bea </strong><span class="UserBadges"></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir u-textTruncate" dir="ltr">@<b>bap17</b></span>
                                            </span>
                                        </a>
    
                                    
                                        <div class="user-actions not-following not-muting" data-screen-name="bea" data-user-id="4">
                                        <span class="user-actions-follow-button js-follow-btn follow-button">
                                            <a href="http://localhost:8000/home/4" type="button" class="
                                                EdgeButton
                                                EdgeButton--secondary
                                                EdgeButton--small 
                                                
                                                button-text
                                                follow-text">
                                                <span aria-hidden="true">Seguir</span>
                                                <span class="u-hiddenVisually">Seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </a>
                                            <button type="button" class="
                                                EdgeButton
                                                EdgeButton--primary
                                                EdgeButton--small 
                                                
                                                button-text
                                                following-text">
                                                <span aria-hidden="true">Siguiendo</span>
                                                <span class="u-hiddenVisually">Siguiendo a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </button>
                                            <button type="button" class="
                                                EdgeButton
                                                EdgeButton--danger
                                                EdgeButton--small 
                                                
                                                button-text
                                                unfollow-text">
                                                <span aria-hidden="true">Dejar de seguir</span>
                                                <span class="u-hiddenVisually">Dejar de seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </button>
                                
                                        </span>
                                        </div>
                                    </div><!--content-->  
                                </div>
                        
                            </div>
                                                        <div class="js-recommended-followers dashboard-user-recommendations flex-module-inner" data-section-id="wtf" style="opacity: 1;">
                                <div class="UserSmallListItem js-account-summary account-summary js-actionable-user" data-user-id="7" data-feedback-token="500" data-impression-id="">
                                    <div class="UserSmallListItem-context"></div>
                            
                                    <div class="dismiss js-action-dismiss"><span class="Icon Icon--close"></span></div>
    
                                    <div class="content">
                                        <a class="account-group js-recommend-link js-user-profile-link user-thumb" href="http://localhost:8000/home/7">
                                
                                            <img class="avatar js-action-profile-avatar " src="https://www.thesun.co.uk/wp-content/uploads/2017/06/nintchdbpict000333735414.jpg?strip=all&amp;w=727" alt="">
                                            <span class="account-group-inner" data-user-id="274529577">
                                                <strong class="fullname">tomas </strong><span class="UserBadges"></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir u-textTruncate" dir="ltr">@<b>tommy</b></span>
                                            </span>
                                        </a>
    
                                    
                                        <div class="user-actions not-following not-muting" data-screen-name="tomas" data-user-id="7">
                                        <span class="user-actions-follow-button js-follow-btn follow-button">
                                            <a href="http://localhost:8000/home/7" type="button" class="
                                                EdgeButton
                                                EdgeButton--secondary
                                                EdgeButton--small 
                                                
                                                button-text
                                                follow-text">
                                                <span aria-hidden="true">Seguir</span>
                                                <span class="u-hiddenVisually">Seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </a>
                                            <button type="button" class="
                                                EdgeButton
                                                EdgeButton--primary
                                                EdgeButton--small 
                                                
                                                button-text
                                                following-text">
                                                <span aria-hidden="true">Siguiendo</span>
                                                <span class="u-hiddenVisually">Siguiendo a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </button>
                                            <button type="button" class="
                                                EdgeButton
                                                EdgeButton--danger
                                                EdgeButton--small 
                                                
                                                button-text
                                                unfollow-text">
                                                <span aria-hidden="true">Dejar de seguir</span>
                                                <span class="u-hiddenVisually">Dejar de seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </button>
                                
                                        </span>
                                        </div>
                                    </div><!--content-->  
                                </div>
                        
                            </div>
                                                        <div class="js-recommended-followers dashboard-user-recommendations flex-module-inner" data-section-id="wtf" style="opacity: 1;">
                                <div class="UserSmallListItem js-account-summary account-summary js-actionable-user" data-user-id="11" data-feedback-token="500" data-impression-id="">
                                    <div class="UserSmallListItem-context"></div>
                            
                                    <div class="dismiss js-action-dismiss"><span class="Icon Icon--close"></span></div>
    
                                    <div class="content">
                                        <a class="account-group js-recommend-link js-user-profile-link user-thumb" href="http://localhost:8000/home/11">
                                
                                            <img class="avatar js-action-profile-avatar " src="http://stuki-druki.com/aforizms/Yoko_Ono02.jpg" alt="">
                                            <span class="account-group-inner" data-user-id="274529577">
                                                <strong class="fullname">john </strong><span class="UserBadges"></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir u-textTruncate" dir="ltr">@<b>johny</b></span>
                                            </span>
                                        </a>
    
                                    
                                        <div class="user-actions not-following not-muting" data-screen-name="john" data-user-id="11">
                                        <span class="user-actions-follow-button js-follow-btn follow-button">
                                            <a href="http://localhost:8000/home/11" type="button" class="
                                                EdgeButton
                                                EdgeButton--secondary
                                                EdgeButton--small 
                                                
                                                button-text
                                                follow-text">
                                                <span aria-hidden="true">Seguir</span>
                                                <span class="u-hiddenVisually">Seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </a>
                                            <button type="button" class="
                                                EdgeButton
                                                EdgeButton--primary
                                                EdgeButton--small 
                                                
                                                button-text
                                                following-text">
                                                <span aria-hidden="true">Siguiendo</span>
                                                <span class="u-hiddenVisually">Siguiendo a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </button>
                                            <button type="button" class="
                                                EdgeButton
                                                EdgeButton--danger
                                                EdgeButton--small 
                                                
                                                button-text
                                                unfollow-text">
                                                <span aria-hidden="true">Dejar de seguir</span>
                                                <span class="u-hiddenVisually">Dejar de seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                            </button>
                                
                                        </span>
                                        </div>
                                    </div><!--content-->  
                                </div>
                        
                            </div>
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
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection