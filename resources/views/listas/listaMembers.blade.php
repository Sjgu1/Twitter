@extends('layouts.app') @section('content')
<div id="page-outer">
	<div id="page-container" class="AppContent wrapper wrapper-list">
		<!--<style id="user-style-AndreVega95">






  a,
  a:hover,
  a:focus,
  a:active {
    color: #1DA1F2;
  }

  .u-textUserColor,
  .u-textUserColorHover:hover,
  .u-textUserColorHover:hover .ProfileTweet-actionCount,
  .u-textUserColorHover:focus {
    color: #1DA1F2 !important;
  }

  .u-borderUserColor,
  .u-borderUserColorHover:hover,
  .u-borderUserColorHover:focus {
    border-color: #1DA1F2 !important;
  }

  .u-bgUserColor,
  .u-bgUserColorHover:hover,
  .u-bgUserColorHover:focus {
    background-color: #1DA1F2 !important;
  }

  .u-dropdownUserColor > li:hover,
  .u-dropdownUserColor > li:focus,
  .u-dropdownUserColor > li > button:hover,
  .u-dropdownUserColor > li > button:focus,
  .u-dropdownUserColor > li > a:focus,
  .u-dropdownUserColor > li > a:hover {
    color: #fff !important;
    background-color: #1DA1F2 !important;
  }

  .u-boxShadowInsetUserColorHover:hover,
  .u-boxShadowInsetUserColorHover:focus {
    box-shadow: inset 0 0 0 5px #1DA1F2 !important;
  }

  .u-dropdownOpenUserColor.dropdown.open .dropdown-toggle {
    color: #1DA1F2;
  }


  .u-textUserColorLight {
    color: #A4D9F9 !important;
  }

  .u-borderUserColorLight,
  .u-borderUserColorLightFocus:focus,
  .u-borderUserColorLightHover:hover,
  .u-borderUserColorLightHover:focus {
    border-color: #A4D9F9 !important;
  }

  .u-bgUserColorLight {
    background-color: #A4D9F9 !important;
  }


  .u-boxShadowUserColorLighterFocus:focus {
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.05), inset 0 1px 2px rgba(29,161,242,0.25) !important;
  }


  .u-textUserColorLightest {
    color: #E8F5FD !important;
  }

  .u-borderUserColorLightest {
    border-color: #E8F5FD !important;
  }

  .u-bgUserColorLightest {
    background-color: #E8F5FD !important;
  }


  .u-textUserColorLighter {
    color: #C6E7FB !important;
  }

  .u-borderUserColorLighter {
    border-color: #C6E7FB !important;
  }

  .u-bgUserColorLighter {
    background-color: #C6E7FB !important;
  }


  .u-bgUserColorDarkHover:hover {
    background-color: #1C88CC !important;
  }

  .u-borderUserColorDark {
    border-color: #1C88CC !important;
  }


  .u-bgUserColorDarkerActive:active {
    background-color: #1C70A6 !important;
  }













a,
.btn-link,
.btn-link:focus,
.icon-btn,



.pretty-link b,
.pretty-link:hover s,
.pretty-link:hover b,
.pretty-link:focus s,
.pretty-link:focus b,

.metadata a:hover,
.metadata a:focus,

a.account-group:hover .fullname,
a.account-group:focus .fullname,
.account-summary:focus .fullname,

.message .message-text a,
.message .message-text button,
.stats a strong,
.plain-btn:hover,
.plain-btn:focus,
.dropdown.open .user-dropdown.plain-btn,
.open > .plain-btn,
#global-actions .new:before,
.module .list-link:hover,
.module .list-link:focus,

.stats a:hover,
.stats a:hover strong,
.stats a:focus,
.stats a:focus strong,

.find-friends-sources li:hover .source,





.stream-item a:hover .fullname,
.stream-item a:focus .fullname,

.stream-item .view-all-supplements:hover,
.stream-item .view-all-supplements:focus,

.tweet .time a:hover,
.tweet .time a:focus,
.tweet .details.with-icn b,
.tweet .details.with-icn .Icon,

.stream-item:hover .original-tweet .details b,
.stream-item .original-tweet.focus .details b,
.stream-item.open .original-tweet .details b,

.client-and-actions a:hover,
.client-and-actions a:focus,

.dismiss-btn:hover b,

.tweet .context .pretty-link:hover s,
.tweet .context .pretty-link:hover b,
.tweet .context .pretty-link:focus s,
.tweet .context .pretty-link:focus b,

.list .username a:hover,
.list .username a:focus,
.list-membership-container .create-a-list,
.list-membership-container .create-a-list:hover,
.new-tweets-bar,



.card .list-details a:hover,
.card .list-details a:focus,
.card .card-body:hover .attribution,
.card .card-body .attribution:focus {
  color: #1DA1F2;
}



    #global-actions > li > a {
      border-bottom-color: #1DA1F2;
    }

    #global-actions > li:hover > a,
    #global-actions > li > a:focus,
    #global-actions > li.active .text,
    .DashUserDropdown.dropdown-menu .nightmode-toggle .Icon,
    .nav.right-actions > li > a:hover,
    .nav.right-actions > li > a:focus {
      color: #1DA1F2;
    }


  
  .FoundMediaSearch--keyboard .FoundMediaSearch-focusable.is-focused {
    border-color: #1DA1F2;
  }

  
  .photo-selector:hover .btn,
  .icon-btn:hover,
  .icon-btn:active,
  .icon-btn.active,
  .icon-btn.enabled {
    border-color: #1DA1F2;
    border-color: rgba(29,161,242,0.4);
    color: #1DA1F2;
  }

  
  .photo-selector:hover .btn,
  .icon-btn:hover {
    background-image: linear-gradient(rgba(255,255,255,0), rgba(29,161,242,0.1));
  }

  .icon-btn.disabled,
  .icon-btn.disabled:hover,
  .icon-btn[disabled],
  .icon-btn[aria-disabled=true] {
    color: #1DA1F2;
  }

  
  

  .EdgeButton--primary,
  .EdgeButton--primary:focus {
    background-color: #4AB3F4;
    border-color: transparent;
  }

  .EdgeButton--primary:hover,
  .EdgeButton--primary:active {
    background-color: #1DA1F2;
    border-color: #1DA1F2;
  }

  .EdgeButton--primary:focus {
    box-shadow:
      0 0 0 2px #FFFFFF,
      0 0 0 4px #A4D9F9;
  }

  .EdgeButton--primary:active {
    box-shadow:
      0 0 0 2px #FFFFFF,
      0 0 0 4px #4AB3F4;
  }

  
  

  .EdgeButton--secondary,
  .EdgeButton--secondary:hover,
  .EdgeButton--secondary:focus,
  .EdgeButton--secondary:active {
    border-color: #1DA1F2;
    color: #1DA1F2;
  }

  .EdgeButton--secondary:hover,
  .EdgeButton--secondary:active {
    background-color: #E8F5FD;
  }

  .EdgeButton--secondary:focus {
    box-shadow:
      0 0 0 2px #FFFFFF,
      0 0 0 4px rgba(29,161,242,0.4);
  }

  .EdgeButton--secondary:active {
    box-shadow:
      0 0 0 2px #FFFFFF,
      0 0 0 4px #1DA1F2;
  }

  
  

  .EdgeButton--invertedPrimary {
    color: #1DA1F2 !important;
  }

  .EdgeButton--invertedPrimary:focus {
    box-shadow:
      0 0 0 2px #1DA1F2,
      0 0 0 4px #A4D9F9;
  }

  .EdgeButton--invertedPrimary:active {
    box-shadow:
      0 0 0 2px #1DA1F2,
      0 0 0 4px #FFFFFF;
  }

  
  

  .EdgeButton--invertedSecondary {
    background-color: #1DA1F2;
  }

  .EdgeButton--invertedSecondary:hover {
    background-color: #4AB3F4;
  }

  .EdgeButton--invertedSecondary:focus {
    box-shadow:
      0 0 0 2px #1DA1F2,
      0 0 0 4px #A4D9F9;
  }

  .EdgeButton--invertedSecondary:active {
    box-shadow:
      0 0 0 2px #1DA1F2,
      0 0 0 4px #FFFFFF;
  }

  

  .btn:focus,
  .btn.focus,
  .Button:focus,
  .EmojiPicker-item.is-focused,
  .EmojiPicker .EmojiCategoryIcon:focus,
  .EmojiPicker-skinTone:focus + .EmojiPicker-skinToneSwatch,
  a:focus > img:first-child:last-child,
  button:focus {
    box-shadow:
      0 0 0 2px #FFFFFF,
      0 0 2px 4px rgba(29,161,242,0.4);
  }

  .selected-stream-item:focus {
    box-shadow: 0 0 0 3px rgba(29,161,242,0.4);
  }

  
  .js-navigable-stream.stream-table-view .selected-stream-item[tabindex="-1"]:focus {
    outline: 3px solid rgba(29,161,242,0.4) !important;
  }

  
  .js-navigable-stream.stream-table-view .selected-stream-item:focus {
    box-shadow: none;
  }

  

  .global-dm-nav.new.with-count .dm-new .count-inner {
    background: #1DA1F2;
  }

  .global-nav .people .count .count-inner {
    background: #1DA1F2;
  }

  .dropdown-menu li > a:hover,
  .dropdown-menu li > a:focus,
  .dropdown-menu .dropdown-link:hover,
  .dropdown-menu .dropdown-link:focus,
  .dropdown-menu .dropdown-link.is-focused,
  .dropdown-menu li:hover .dropdown-link,
  .dropdown-menu li:focus .dropdown-link,
  .dropdown-menu .selected a,
  .dropdown-menu .dropdown-link.selected {
    background-color: #1DA1F2 !important;
  }

  /* for items in typeahead dropdown menu on logged in pages */
  .dropdown-menu .typeahead-items li > a:focus,
  .dropdown-menu .typeahead-items li > a:hover,
  .dropdown-menu .typeahead-items .selected,
  .dropdown-menu .typeahead-items .selected a {
    background-color: #E8F5FD !important;
    color: #1DA1F2 !important;
  }

  .typeahead a:hover,
  .typeahead a:hover strong,
  .typeahead a:hover .fullname,
  .typeahead .selected a,
  .typeahead .selected strong,
  .typeahead .selected .fullname,
  .typeahead .selected .Icon--close {
    color: #1DA1F2 !important;
  }


.home-tweet-box,
.LiveVideo-tweetBox,
.RetweetDialog-commentBox {
  background-color: #E8F5FD;
}

.top-timeline-tweetbox .timeline-tweet-box .tweet-form.condensed .tweet-box {
  color: #1DA1F2;
}

.RichEditor,
.TweetBoxAttachments {
  border-color: #C6E7FB;
}

input:focus,
textarea:focus,
div[contenteditable="true"]:focus,
div[contenteditable="true"].fake-focus,
div[contenteditable="plaintext-only"]:focus,
div[contenteditable="plaintext-only"].fake-focus {
  border-color: #A4D9F9;
  box-shadow: inset 0 0 0 1px rgba(29,161,242,0.7);
}

.tweet-box textarea:focus,
.tweet-box input[type=text],
.currently-dragging .tweet-form.is-droppable .tweet-drag-help,
.tweet-box[contenteditable="true"]:focus,
.RichEditor.is-fakeFocus,
.RichEditor.is-fakeFocus ~ .TweetBoxAttachments {
  border-color: #A4D9F9;
  box-shadow: 0 0 0 1px #A4D9F9;
}

.MomentCapsuleItem.selected-stream-item:focus {
  box-shadow: 0 0 0 3px rgba(29,161,242,0.4);
}




s,
.pretty-link:hover s,
.pretty-link:focus s,
.stream-item-activity-notification .latest-tweet .tweet-row a:hover s,
.stream-item-activity-notification .latest-tweet .tweet-row a:focus s {
    color: #1DA1F2;
}



.vellip,
.vellip:before,
.vellip:after,
.conversation-module > li:after,
.conversation-module > li:before,
.ThreadedConversation--loneTweet:after,
.ThreadedConversation-tweet:not(.is-hiddenAncestor) ~ .ThreadedConversation-tweet:before,
.ThreadedConversation-tweet:after,
.ThreadedConversation-moreReplies:before,
.ThreadedConversation-viewOther:before,
.ThreadedConversation-unavailableTweet:before,
.ThreadedConversation-unavailableTweet:after,
.ThreadedConversation--permalinkTweetWithAncestors:before,
.mini-avatar-with-thread:before,
.permalink.self-thread-permalink-with-descendant .permalink-tweet-container:after,
.permalink.self-thread-permalink-with-descendant .inline-reply-tweetbox-container:after {
    border-color: #A4D9F9;
}




.tweet .sm-reply,
.tweet .sm-rt,
.tweet .sm-fav,
.tweet .sm-image,
.tweet .sm-video,
.tweet .sm-audio,
.tweet .sm-geo,
.tweet .sm-in,
.tweet .sm-trash,
.tweet .sm-more,
.tweet .sm-page,
.tweet .sm-embed,
.tweet .sm-summary,
.tweet .sm-chat,

.timelines-navigation .active .profile-nav-icon,
.timelines-navigation .profile-nav-icon:hover,
.timelines-navigation .profile-nav-link:focus .profile-nav-icon,

.sm-top-tweet {
    background-color: #1DA1F2;
}


  #global-tweet-dialog .modal-header,
  #Tweetstorm-dialog .modal-header {
    border-bottom: solid 1px rgba(29,161,242,0.25);
  }

  #global-tweet-dialog .modal-tweet-form-container,
  #Tweetstorm-dialog .modal-body {
    background-color: #1DA1F2;
    background: rgba(29,161,242,0.1);
  }

  .TweetstormDialog-reply-context .tweet-box-avatar:after,
  .TweetstormDialog-reply-context .tweet-box-avatar:before,
  .TweetstormDialog-tweet-box .tweet-box-avatar:after,
  .TweetstormDialog-tweet-box .tweet-box-avatar:before {
    border-color: #A4D9F9;
  }

  .global-nav .search-input:focus,
  .global-nav .search-input.focus {
    border: 2px solid #1DA1F2;
  }
}

  .inline-reply-tweetbox {
    background-color: #E8F5FD;
  }

</style>
		<style id="user-style-AndreVega95-header-img" class="js-user-style-header-img"></style>-->
		<div class="dashboard dashboard-left">
			<div class="module follow-card list-follow-card js-list-details component is-subscribed" data-component-context="list_follow_card" data-list-id="955887967251451904">
				<div class="flex-module">
					<div class="flex-module-header">
						<h1 class="js-list-name u-dir" dir="ltr" data-raw-text="lista">{{$lista->nombre}}</h1>
						<p class="ListFollowCard-metadata">Una lista de 
							<a href="/{{$lista->usuario->username}}" class="js-nav">{{$lista->usuario->name}}</a>
						</p>
						<a class="list-author js-nav js-tooltip" href="/{{$lista->usuario->username}}" data-original-title="{{$lista->usuario->name}}">
							<img class="avatar size32" src="{{$lista->usuario->avatar}}" alt="{{$lista->usuario->name}}">
							</a>
						</div>
						<div class="flex-module-inner description">
							<p class="bio js-list-desc u-dir" dir="ltr" data-raw-text=""></p>
						</div>
						<ul class="stats">
							<li>
								<a href="/{{$lista->usuario->username}}/listas/{{$lista->nombre}}/members" class="js-nav">Miembros
									<strong>{{$lista->miembros->count()}}</strong>&nbsp;
								</a>
							</li>
							<li>
								<a href="/{{$lista->usuario->username}}/listas/{{$lista->nombre}}/subscribers" class="js-nav">Suscriptores
									<strong>{{$lista->suscritos->count()}}</strong>
								</a>
							</li>
						</ul>
					</div>
					<div class="follow-card-footer">
						<div class="follow-bar js-list-actions">
            @if($user->id==Auth::id())
            <button class="EdgeButton EdgeButton--secondary EdgeButton--medium js-edit-list-action js-tooltip" data-screen-name="{{$lista->usuario->username}}" data-list-id="955887967251451904" data-toggle="collapse" data-target="#editar" title="Editar">
            Editar
          </button>
            <a class="EdgeButton EdgeButton--secondary EdgeButton--medium js-delete-list-action js-tooltip" data-screen-name="{{$lista->usuario->username}}" data-list-id="955887967251451904"  data-original-title="Eliminar" href="{{ action('ListasController@deleteLista', ['username'=>$user->username, 'nombre'=>$lista->nombre]) }}">
            Eliminar
          </a>
          @else
          <?php $comprobacion=false ?>
            @foreach($lista->suscritos as $suscrito)
              @if(Auth::id()==$suscrito->id)
              <?php $comprobacion=true ?>
              @break
              @endif
              @endforeach
            @if($comprobacion== false)
            <a class="EdgeButton EdgeButton--secondary EdgeButton--medium subscribe-btn js-subscribe-list-action
              js-follow-list-action is-unsubscribed
              " data-screen-name="{{$user->username}}" href="{{ action('ListasController@addSuscriptor', ['username'=>$user->username, 'nombre'=>$lista->nombre]) }}" data-list-id="955888516982099968">
            @else
            <a class="EdgeButton EdgeButton--secondary EdgeButton--medium subscribe-btn js-subscribe-list-action
            js-unfollow-list-action is-subscribed" data-screen-name="{{$user->username}}" href="{{ action('ListasController@removeSuscriptor', ['username'=>$user->username, 'nombre'=>$lista->nombre]) }}" data-list-id="955888516982099968">
            @endif
 
            <div class="subscribe-text">
              <span class="icon subscribe-text"></span>
              Suscríbete
            </div>
            <div class="remove-text">
              Eliminar subscripción
            </div>
          </a>
          @endif
						</div>
					</div>
				</div>
				<div class="component" data-component-context="list_nav">
					<div role="navigation" class="module list-nav">
						<ul class="js-nav-links">
							<li class="">
								<a class="list-link js-nav" href="/{{$lista->usuario->username}}/listas/{{$lista->nombre}}" data-nav="list">Tweets
									<span class="Icon Icon--caretRight"></span>
								</a>
							</li>
							<li class="active">
								<a class="list-link js-nav" href="/{{$lista->usuario->username}}/listas/{{$lista->nombre}}/members" data-nav="members">Miembros de la lista
									<span class="Icon Icon--caretRight"></span>
								</a>
							</li>
							<li class="">
								<a class="list-link js-nav" href="/{{$lista->usuario->username}}/listas/{{$lista->nombre}}/subscribers" data-nav="subscribers">Lista de suscriptores
									<span class="Icon Icon--caretRight"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="component" data-component-context="more_lists">
					<div class="module">
						<div class="flex-module">
							<div class="flex-module-header">
								<h3>Más listas de 
									<a href="/{{$lista->usuario->username}}" data-nav="more_lists">
										<span class="username u-dir u-textTruncate" dir="ltr">@
											<b>{{$lista->usuario->username}}</b>
										</span>
									</a>
								</h3>
								<small class="view-all">· 
									<a href="/{{$lista->usuario->username}}/listas" data-nav="more_lists" class="js-nav">Ver todos</a>
								</small>
							</div>
							<div class="flex-module-inner">
								<ul class="list-of-lists">
                                @foreach($lista->usuario->listas as $li)
									<li>
										<a href="/{{$lista->usuario->username}}/listas/{{$li->nombre}}" data-nav="more_lists" class="js-nav">{{$li->nombre}}</a>
									</li>
                                @endforeach
								</ul>
							</div>
                            @if($user->id==Auth::id())
							<button type="button" data-toggle="collapse" data-target="#nueva" class="btn-link js-create-list-button" data-modal="list-new" data-element-term="create_list_button">Crear nueva lista</button>
                            @endif
                        </div>
					</div>
				</div>
			</div>
			<div role="main" aria-labelledby="content-main-heading" class="content-main list" id="timeline">
				<div class="content-header">
					<div class="header-inner">
						<h2 id="content-main-heading" class="js-timeline-title">Lista de miembros</h2>
					</div>
				</div>

        <div class="stream-container  js-request-more-stream-items" data-max-position="" data-min-position="0">
              <div class="stream-item js-new-items-bar-container"></div>
              <div class="stream">

                <ol class="stream-items js-navigable-stream" id="stream-items-id">
                @foreach($lista->miembros as $miembro)
                  <li class=" stream-item stream-item" data-item-id="2654164081" id="stream-item-user-2654164081" data-item-type="user">
                    <div class="account  js-actionable-user js-profile-popup-actionable " data-screen-name="{{$miembro->username}}" data-user-id="2654164081" data-name="{{$miembro->name}}" data-emojified-name="" data-feedback-token="" data-impression-id="">
                    <?php $loSigo=false ?>
                    @foreach(Auth::user()->seguidos as $siguiendo)
                    @if($siguiendo->id == $miembro->id )
                    <?php $loSigo=true ?>
                    @break
                    @endif
                    @endforeach
                    @if($loSigo==true)
                      <div class="user-actions btn-group following not-muting including  " data-user-id="2654164081" data-screen-name="{{$miembro->username}}" data-name="{{$miembro->name}}" data-protected="false">
                    @else
                    <div class="user-actions btn-group not-following not-muting including  " data-user-id="2654164081" data-screen-name="{{$miembro->username}}" data-name="{{$miembro->name}}" data-protected="false"> 
                    @endif    
                        <span class="user-actions-follow-button js-follow-btn follow-button">
                        <a type="button" class="EdgeButton EdgeButton--secondary EdgeButton--small button-text follow-text" href="{{ action('HomeController@seguir', ['seguido'=>$miembro->id]) }}" >
                        <span aria-hidden="true">Seguir</span>
                        <span class="u-hiddenVisually">Seguir a 

                          <span class="username u-dir u-textTruncate" dir="ltr">@

                            <b>{{$miembro->username}}</b>
                          </span>
                        </span>
                      </a>
                      <button type="button" class=" EdgeButton EdgeButton--primary EdgeButton--small button-text following-text">
                        <span aria-hidden="true">Siguiendo</span>
                        <span class="u-hiddenVisually">Siguiendo a 

                          <span class="username u-dir u-textTruncate" dir="ltr">@

                            <b>{{$miembro->username}}</b>
                          </span>
                        </span>
                      </button>
                      <a type="button" style="background-color: #e0245e;    border: 1px solid #e0245e; color: #fff" class=" EdgeButton EdgeButton--danger EdgeButton--small  button-text unfollow-text" href="{{ action('HomeController@dejarDeSeguir', ['seguido'=>$miembro->id]) }}">
                        <span aria-hidden="true">Dejar de seguir</span>
                        <span class="u-hiddenVisually">Dejar de seguir a 

                          <span class="username u-dir u-textTruncate" dir="ltr">@

                            <b>{{$miembro->username}}</b>
                          </span>
                        </span>
                      </a>
                        </span>
                        <div class="dropdown ">
                          <button type="button" class="user-dropdown dropdown-toggle js-dropdown-toggle js-link js-tooltip btn plain-btn" title="Más acciones de usuario" aria-haspopup="true">
                            <span class="user-dropdown-icon Icon Icon--dotsVertical Icon--medium">
                              <span class="visuallyhidden">Acciones de usuario</span>
                            </span>
                          </button>
                          <div class="dropdown-menu dropdown-menu--rightAlign is-autoCentered is-forceRight">
                            <div class="dropdown-caret">
                              <span class="caret-outer"></span>
                              <span class="caret-inner"></span>
                            </div>
                            <ul>
                            <li class="list-text not-blocked">
                            <a href="{{action('ListasController@addMiembro', ['username' => $miembro->username, 'nombre' => $lista->nombre])}}"type="button" class="dropdown-link">Añadir a la lista</a>
                          </li>
                          <li class="list-text not-blocked">
                            <a  href="{{action('ListasController@removeMiembro', ['username' => $miembro->username, 'nombre' => $lista->nombre])}}" type="button" class="dropdown-link">Quitar de la lista</a>
                          </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="activity-user-profile-content">
                        <div class=" content">
                          <div class="stream-item-header">
                            <a class="account-group js-user-profile-link" href="/{{$miembro->username}}" rel="noopener">
                              <img class="avatar js-action-profile-avatar  " src="{{$miembro->avatar}}" alt="" data-user-id="293967812">
                                <strong class="fullname">{{$miembro->name}}</strong>
                                <span class="UserBadges"></span>
                                <span class="UserNameBreak">&nbsp;</span>
                                <span class="username u-dir u-textTruncate" dir="ltr">@
                                  <b>{{$miembro->username}}</b>
                                </span>
                              </a>
                            </div>
                            <p class="bio u-dir" dir="ltr"></p>
                          </div>
                        </div>
                    </div>
                  </li>
                  @endforeach
                </ol>

                
          @if($user->id!=Auth::id())
            <div   class="stream-end-inner">
            </div>
          @else
          <div style="margin-top:50px;" class="stream-container">
					<div class="stream" data-component-context="stream">
						<div class="component" data-component-context="add_people">
							<div class="stream-placeholder">
								<div class="stream-end-inner">
									<h2>Encuentra gente para añadir a tu lista</h2>
									<form action="/search" class="t1-form inline-form js-search-for-list-people" method="GET">
                  <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for names.." title="Type in a name">
                  <input type="hidden" name="mode" value="users">
											</form>
											<p>Busca un usuario, nombre o apellido
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
          
        <div class="stream-container  js-request-more-stream-items" data-max-position="898988998898" data-min-position="68577657657657657">
              <div class="stream-item js-new-items-bar-container"></div>
              <div class="stream">
                <ul class="stream-items js-navigable-stream" id="myUL2">
                @foreach($users as $usuario)                         
                  <li class=" liPrueba stream-item stream-item" data-item-id="2654164081" id="stream-item-user-2654164081" data-item-type="user">
                    <div class="account  js-actionable-user js-profile-popup-actionable " data-screen-name="{{$usuario->username}}" data-user-id="2654164081" data-name="{{$usuario->name}}" data-emojified-name="" data-feedback-token="" data-impression-id="">
                    <?php $loSigo2=false ?>
                    @foreach(Auth::user()->seguidos as $siguiendo2)
                    @if($siguiendo2->id == $usuario->id )
                    <?php $loSigo2=true ?>
                    @break
                    @endif
                    @endforeach
                    @if($loSigo2==true)
                      <div class="user-actions btn-group following not-muting including  " data-user-id="2654164081" data-screen-name="{{$usuario->username}}" data-name="{{$usuario->name}}" data-protected="false">
                    @else
                    <div class="user-actions btn-group not-following not-muting including  " data-user-id="2654164081" data-screen-name="{{$usuario->username}}" data-name="{{$usuario->name}}" data-protected="false"> 
                    @endif                           
                    <span class="user-actions-follow-button js-follow-btn follow-button">
                    <a type="button" class="EdgeButton EdgeButton--secondary EdgeButton--small button-text follow-text" href="{{ action('HomeController@seguir', ['seguido'=>$usuario->id]) }}" >
                    <span aria-hidden="true">Seguir</span>
                    <span class="u-hiddenVisually">Seguir a 

                      <span class="username u-dir u-textTruncate" dir="ltr">@

                        <b>{{$usuario->username}}</b>
                      </span>
                    </span>
                  </a>
                  <button type="button" class=" EdgeButton EdgeButton--primary EdgeButton--small button-text following-text">
                    <span aria-hidden="true">Siguiendo</span>
                    <span class="u-hiddenVisually">Siguiendo a 

                      <span class="username u-dir u-textTruncate" dir="ltr">@

                        <b>{{$usuario->username}}</b>
                      </span>
                    </span>
                  </button>
                  <a type="button" style="background-color: #e0245e;    border: 1px solid #e0245e; color: #fff" class=" EdgeButton EdgeButton--danger EdgeButton--small  button-text unfollow-text" href="{{ action('HomeController@dejarDeSeguir', ['seguido'=>$usuario->id]) }}">
                    <span aria-hidden="true">Dejar de seguir</span>
                    <span class="u-hiddenVisually">Dejar de seguir a 

                      <span class="username u-dir u-textTruncate" dir="ltr">@

                        <b>{{$usuario->username}}</b>
                      </span>
                    </span>
                  </a>
                        </span>
                        <div class="dropdown ">
                          <button type="button" class="user-dropdown dropdown-toggle js-dropdown-toggle js-link js-tooltip btn plain-btn" title="Más acciones de usuario" aria-haspopup="true">
                            <span class="user-dropdown-icon Icon Icon--dotsVertical Icon--medium">
                              <span class="visuallyhidden">Acciones de usuario</span>
                            </span>
                          </button>
                          <div class="dropdown-menu dropdown-menu--rightAlign is-autoCentered is-forceRight">
                            <div class="dropdown-caret">
                              <span class="caret-outer"></span>
                              <span class="caret-inner"></span>
                            </div>
                            <ul>
                              <li class="list-text not-blocked">
                                <a href="{{action('ListasController@addMiembro', ['username' => $usuario->username, 'nombre' => $lista->nombre])}}"type="button" class="dropdown-link">Añadir a la lista</a>
                              </li>
                              <li class="list-text not-blocked">
                                <a  href="{{action('ListasController@removeMiembro', ['username' => $usuario->username, 'nombre' => $lista->nombre])}}" type="button" class="dropdown-link">Quitar de la lista</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="activity-user-profile-content">
                        <div class=" content">
                          <div class="stream-item-header">
                            <a class="account-group js-user-profile-link aPrueba" name=""href="/{{$usuario->username}}" rel="noopener">
                              <img class="avatar js-action-profile-avatar  " src="{{$usuario->avatar}}" alt="" data-user-id="293967812">
                                <strong class="fullname">{{$usuario->name}}</strong>
                                <span class="UserBadges"></span>
                                <span class="UserNameBreak">&nbsp;</span>
                                <span class="username u-dir u-textTruncate" dir="ltr">@
                                  <b>{{$usuario->username}}</b>
                                </span>
                              </a>
                            </div>
                            <p class="bio u-dir" dir="ltr"></p>
                          </div>
                        </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
                
                
                </div>
              </div>
                @endif
            
                <div class="stream-footer">
                  <div class="timeline-end has-items">
                    <div class="stream-end">
                      <div class="stream-end-inner">
                        <span class="Icon Icon--large Icon--logo"></span>
                        <p class="empty-text">

                              Esta lista no sigue a nadie todavía. Pero probablemente pronto lo hará.
                          </p>
                        <p>
                          <button type="button" class="btn-link back-to-top hidden">Volver arriba ↑</button>
                        </p>
                      </div>
                    </div>
                    <div class="stream-loading">
                      <div class="stream-end-inner">
                        <span class="spinner" title="Cargando..."></span>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
					</div>
					<div class="dashboard dashboard-right">
						<div class="component newest-members-module roaming-module" data-component-context="newest_list_members">
							<div class="module">
								<div class="flex-module">
									<div class="flex-module-header">
										<h3>Miembros añadidos recientemente</h3>
										<small class="view-all">· 
											<a href="/{{$lista->usuario->username}}/listas/{{$lista->nombre}}/members" data-nav="newest_list_members" class="js-nav">Ver todos</a>
										</small>
									</div>
                  <div class="flex-module-inner js-recent-members">
                  @foreach($recientes as $reciente)
                  <div class="UserSmallListItem js-account-summary account-summary js-actionable-user" data-user-id="2654164081" data-feedback-token="" data-impression-id="">
                    <div class="UserSmallListItem-context">
                    </div>


                    <div class="content">
                      <a class="account-group js-recommend-link js-user-profile-link user-thumb" href="/{{$reciente->username}}" data-user-id="2654164081" rel="noopener">
                        
                        <img class="avatar js-action-profile-avatar " src="{{$reciente->avatar}}" alt="">
                        <span class="account-group-inner" data-user-id="2654164081">
                          <strong class="fullname">{{$reciente->name}}</strong><span class="UserBadges"></span><span class="UserNameBreak"> </span><span class="username u-dir u-textTruncate" dir="ltr">@<b>{{$reciente->username}}</b></span>
                        </span>
                      </a>

                          
                      <?php $esUsuarioConectado=false ?>
                      <?php $loSigo=false ?>
                    @foreach(Auth::user()->seguidos as $siguiendo)
                    @if($reciente->id == Auth::id() )
                      <?php $esUsuarioConectado=true ?>
                      @break
                      @endif
                    @if($siguiendo->id == $reciente->id )
                    <?php $loSigo=true ?>
                    @break
                    @endif
                    @endforeach
                    @if($loSigo==true)
                      <div class="user-actions btn-group following not-muting including  " data-user-id="2654164081" data-screen-name="{{$reciente->username}}" data-name="{{$reciente->name}}" data-protected="false">
                    @elseif( $esUsuarioConectado==true)
                    <div class="user-actions btn-group following not-muting including " data-user-id="66816631" data-screen-name="{{$reciente->username}}" data-name="{{$reciente->name}}" data-protected="false" style="visibility: hidden;">
                    @else
                    <div class="user-actions btn-group not-following not-muting including  " data-user-id="2654164081" data-screen-name="{{$reciente->username}}" data-name="{{$reciente->name}}" data-protected="false"> 
                    @endif    

                    <span class="user-actions-follow-button js-follow-btn follow-button">
                    <a type="button" class="EdgeButton EdgeButton--secondary EdgeButton--small button-text follow-text" href="{{ action('HomeController@seguir', ['seguido'=>$reciente->id]) }}" >
                    <span aria-hidden="true">Seguir</span>
                    <span class="u-hiddenVisually">Seguir a 

                      <span class="username u-dir u-textTruncate" dir="ltr">@

                        <b>{{$reciente->username}}</b>
                      </span>
                    </span>
                  </a>
                  <button type="button" class=" EdgeButton EdgeButton--primary EdgeButton--small button-text following-text">
                    <span aria-hidden="true">Siguiendo</span>
                    <span class="u-hiddenVisually">Siguiendo a 

                      <span class="username u-dir u-textTruncate" dir="ltr">@

                        <b>{{$reciente->username}}</b>
                      </span>
                    </span>
                  </button>
                  <a type="button" style="background-color: #e0245e;    border: 1px solid #e0245e; color: #fff" class=" EdgeButton EdgeButton--danger EdgeButton--small  button-text unfollow-text" href="{{ action('HomeController@dejarDeSeguir', ['seguido'=>$reciente->id]) }}">
                    <span aria-hidden="true">Dejar de seguir</span>
                    <span class="u-hiddenVisually">Dejar de seguir a 

                      <span class="username u-dir u-textTruncate" dir="ltr">@

                        <b>{{$reciente->username}}</b>
                      </span>
                    </span>
                  </a>
                  </span>


                  </div>

                    </div>
                  </div>
                  @endforeach
                  </div><!--recent members--><!--recent members-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
           <!--modal editar-->
      
	<div class="collapse " id="editar" role="dialog" aria-labelledby="list-operations-dialog-header" style="top: 90px; left: 415px;position: absolute;z-index:9000">
		<div class="js-first-tabstop" tabindex="0"></div>
		<div class="modal-content" role="document">
			<div class="modal-header">
				<h3 class="modal-title" id="list-operations-dialog-header">Editar lista</h3>
			</div>
			<div class="modal-body">
				<div class="list-editor">
					<div class="field">
						<label class="t1-label" for="list-name">Nombre de la lista</label>
            <form class="t1-form" action="/listas/{{$lista->id}}/update" method="POST">
            {!! csrf_field() !!}
						<input id="editar-nombre" type="text" class="text" name="nombre" value="{{$lista->nombre}}">
						</div>
						<hr>
							<div class="field">
								<label class="t1-label" for="list-description">Descripción</label>
								<textarea id="editar-descripcion" name="descripcion">{{$lista->descripcion}}</textarea>
								<span class="help-text">Menos de 100 caracteres, opcional</span>
							</div>
							<hr>
								<fieldset class="field">
									
										</fieldset>
										<hr>
											<div class="list-editor-save">
												<button  type="submit" class="EdgeButton EdgeButton--secondary update-list-button" data-list-id="955887967251451904" data-operation="update">Guardar lista</button>
											</form>
                      </div>
										</div>
									</div>
								</div>
								<button data-toggle="collapse" data-target="#editar" type="button" class="modal-btn modal-close js-close" aria-controls="list-operations-dialog-dialog">
									<span class="Icon Icon--close Icon--medium">
										<span class="visuallyhidden">Cerrar</span>
									</span>
								</button>
								<div class="js-last-tabstop" tabindex="0"></div>
							</div>
						
      <!-- fin-->

<script>
function myFunction2() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput2");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL2");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>
     <!--modal crear-->
      
     <div class="collapse " id="nueva" role="dialog" aria-labelledby="list-operations-dialog-header" style="top: 90px; left: 415px;position: absolute;z-index:9000">
		<div class="js-first-tabstop" tabindex="0"></div>
		<div class="modal-content" role="document">
			<div class="modal-header">
				<h3 class="modal-title" id="list-operations-dialog-header">Crear una nueva lista</h3>
			</div>
			<div class="modal-body">
				<div class="list-editor">
					<div class="field" >
						<label class="t1-label" for="list-name">Nombre de la lista</label>
						<input  id="nuevo-nombre" type="text" class="text" name="name" value="">
						</div>
						<hr>
							<div class="field" >
								<label class="t1-label" for="list-description">Descripción</label>
								<textarea  id="nueva-descripcion" name="description"></textarea>
								<span class="help-text">Menos de 100 caracteres, opcional</span>
							</div>
							<hr>
								<fieldset class="field">
									
										</fieldset>
										<hr>
											<div class="list-editor-save">
												<button onClick="nuevaLista()" type="button" class="EdgeButton EdgeButton--secondary update-list-button" data-list-id="955887967251451904" data-operation="update">Guardar lista</button>
											</div>
										</div>
									</div>
								</div>
								<button data-toggle="collapse" data-target="#nueva" type="button" class="modal-btn modal-close js-close" aria-controls="list-operations-dialog-dialog">
									<span class="Icon Icon--close Icon--medium">
										<span class="visuallyhidden">Cerrar</span>
									</span>
								</button>
								<div class="js-last-tabstop" tabindex="0"></div>
							</div>
						
      <!-- fin-->
      <script type="text/javascript">
				function nuevaLista() {         	
				    $.ajaxSetup({
				        headers: {
				            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        }
				    });
				    
				    $.post("/listas/add", {
				        nombre: document.getElementById('nuevo-nombre').value,
						    descripcion: document.getElementById('nueva-descripcion').value

				    });         
				
				    window.location.reload(true);
				         
				 }
         function updateLista(nombre) {         	
				    $.ajaxSetup({
				        headers: {
				            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        }
				    });
				    
				    $.post("/listas/"+ nombre + "/update", {
				        nombre: document.getElementById('editar-nombre').value,
						    descripcion: document.getElementById('editar-descripcion').value

				    });         
				
            //window.location.reload(true);
				         
				 }
			</script>

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {     
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>



@endsection