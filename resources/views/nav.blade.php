<?php $Conver; ?>
<!-- Barra de navegacion -->
<div class="fijar global-nav" data-section-term="top_nav">
                <div class="global-nav-inner">
                    <div class="container"> 
                    <h1 class="Icon Icon--bird bird-topbar-etched">
                        <span class="visuallyhidden">Twitter</span>
                    </h1>
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
                                    <a class="js-nav js-tooltip js-dynamic-tooltip" data-placement="bottom" href="/" data-component-context="connect_nav" data-nav="connect" data-original-title="">
                                        <span class="Icon Icon--notifications Icon--large"></span>
                                        <span class="Icon Icon--notificationsFilled Icon--large u-textUserColor"></span>
                                        <span class="text" aria-hidden="true">Notificaciones</span>
                                    </a>
                                </li>
                                <!-- Icono Mensajes-->
                                <li class="dm-nav">
                                    <a role="button" class="js-tooltip js-dynamic-tooltip global-dm-nav" data-placement="bottom"  data-original-title="" data-toggle="modal" data-target="#mensajesModal">
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
                                    <input class="search-input" type="text" id="search-query" placeholder="Buscar en Twitter" name="q" autocomplete="off" spellcheck="false" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-dropdown-1" dir="ltr" style="direction: ltr; text-align: left;">
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
                                        <img class="Avatar Avatar--size32" src="{{Auth::user()->avatar}}" alt="Perfil y configuración " data-user-id="293967812">
                                    </a>
                                    <div class="DashUserDropdown dropdown-menu dropdown-content dropdown-menu--rightAlign is-forceRight is-autoCentered">
                                        <div class="dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </div>
                                        <ul tabindex="-1" role="menu" aria-labelledby="user-dropdown-toggle" aria-hidden="true"> 
                                            <li class="DashUserDropdown-userInfo" data-name="user-info" role="presentation">
                                                <a href="/{{Auth::user()->username}}" class="DashUserDropdown-userInfoLink js-nav" data-nav="view_profile" role="menuitem">
                                                <b class="fullname">{{Auth::user()->name}}</b><span class="UserBadges"></span>
                                                <p class="name"><span class="username u-dir u-textTruncate" dir="ltr">@<b>{{Auth::user()->username}}</b></span></p>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider" role="presentation"></li>
                                            <li class="current-user" data-name="profile" role="presentation">
                                                <a href="/{{Auth::user()->username}}" class="js-nav" data-nav="view_profile" role="menuitem">
                                                <span class="DashUserDropdown-linkIcon Icon Icon--medium Icon--me"></span>Perfil
                                                </a>
                                            </li>
                                            <li data-name="lists" role="presentation">
                                                <a class="js-nav" href="/{{Auth::user()->avatar}}/lists" data-nav="all_lists" role="menuitem">
                                                <span class="DashUserDropdown-linkIcon Icon Icon--medium Icon--list"></span>Listas
                                                </a>
                                            </li>
                                            <li class="dropdown-divider" role="presentation"></li>
                                            <!-- Cerrar sesion -->
                                            <li class="js-signout-button" id="signout-button" data-nav="logout" role="presentation">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Cerrar sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li role="complementary" aria-labelledby="global-new-tweet-button" class="topbar-tweet-btn">
                                    <button id="global-new-tweet-button" class="js-global-new-tweet js-tooltip EdgeButton EdgeButton--primary js-dynamic-tooltip" data-placement="bottom" data-component-context="new_tweet_button" data-original-title="" data-toggle="modal" data-target="#twitearModal" >   
                                    <span class="text">Twittear</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Barra de navegacion -->
    <!-- Modal Mensajes-->
    <div class="modal fade modal is-autoPosition" id="mensajesModal" role="dialog" style="top: 5%; left: 415px; position: absolute;width: 45vw; height: fit-content;" aria-labelledby="dm_dialog-header">
	<div class="js-first-tabstop" tabindex="0"></div>
	<div class="DMActivity DMInbox js-ariaDocument u-chromeOverflowFix DMActivity--open" role="document">
		<div class="DMActivity-header">
			<h2 class="DMActivity-title js-ariaTitle" id="dm_dialog-header">Mensajes directos
            </h2>
			<div class="DMActivity-toolbar">
				<button type="button" class="DMInbox-toolbar EdgeButton EdgeButton--small EdgeButton--secondary EdgeButton--icon mark-all-read js-tooltip" title="Marcar todo como leído">
					<span class="Icon Icon--markAllRead"></span>
					<span class="u-hiddenVisually">Marcar todo como leído</span>
				</button>
				<button type="button" class="DMInbox-toolbar DMComposeButton EdgeButton EdgeButton--small EdgeButton--primary dm-new-button js-initial-focus">
					<span>Mensaje nuevo</span>
				</button>
				<button type="button" class="DMActivity-close js-close u-textUserColorHover" data-dismiss="modal">
					<span class="Icon Icon--close Icon--medium"></span>
					<span class="u-hiddenVisually">Cerrar</span>
				</button>
			</div>
		</div>
		<div class="DMActivity-container">
			<div class="DMActivity-notice">
				<div class="DMNotice DMNotice--error DMErrorBar" style="display: none;">
					<div class="DMNotice-message">
						<div class="DMErrorBar-text"></div>
					</div>
					<div class="DMNotice-actions u-emptyHide"></div>
					<button type="button" class="DMNotice-dismiss">
						<span class="Icon Icon--close"></span>
						<span class="u-hiddenVisually">Descartar</span>
					</button>
				</div>
				<div class="DMNotice DMNotice--toast " style="display: none;">
					<div class="DMNotice-message"></div>
					<div class="DMNotice-actions u-emptyHide"></div>
					<button type="button" class="DMNotice-dismiss">
						<span class="Icon Icon--close"></span>
						<span class="u-hiddenVisually">Descartar</span>
					</button>
				</div>
				<div class="DMNotice DMNotice--explicitDismiss DMNotificationsPermissionRequest" style="display: none;">
					<div class="DMNotice-message">¿Te gustaría recibir notificaciones web de tus interacciones?
                    </div>
					<div class="DMNotice-actions u-emptyHide">
						<button type="button" class="DMNotificationsPermissionRequest-later EdgeButton EdgeButton--tertiary js-prompt-later">Tal vez más tarde</button>
						<button type="button" class="DMNotificationsPermissionRequest-accept EdgeButton EdgeButton--secondary js-prompt-accept">Habilitar notificaciones</button>
					</div>
				</div>
			</div>
			<nav class="DMInbox-tab u-hidden" aria-label="Bandejas de entrada de Mensajes Directos">
				<ul class="DMInbox-tabToggle">
					<li class="DMInbox-tabToggleItem DMInbox-inboxTab is-active">
						<a role="button" href="#" class="DMInbox-tabCopy">Bandeja de entrada</a>
					</li>
					<li class="DMInbox-tabToggleItem DMInbox-requestTab">
						<a role="button" href="#" class="DMInbox-tabCopy">Solicitudes</a>
					</li>
				</ul>
			</nav>
			<div class="DMActivity-body js-ariaBody ">
				<div class="DMInbox-content u-scrollY">
					<div class="DMInbox-primary">
						<ul class="DMInbox-conversations"> 
                        @foreach($convers as $conver)
			                @if(Auth::id() == $conver->usuario2->id)
                            <li class="DMInbox-conversationItem">
                            <div class="DMInboxItem" data-thread-id="301028364-390203992" data-sort-event-id="630408429719408643" data-last-message-id="630408429719408643" data-is-oto="true" data-is-muted="false">
                                <div class="DMInboxItem-avatar">
                                    <a href="/victorha_" class="js-action-profile js-user-profile-link" data-user-id="390203992">
                                        <div class="DMAvatar DMAvatar--1 u-chromeOverflowFix">
                                            <span class="DMAvatar-container">
                                                <img class="DMAvatar-image" src="{{$conver->usuario1->avatar}}" alt="{{$conver->usuario1->name}}" title="{{$conver->usuario1->name}}">
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="DMInboxItem-title account-group">
                                        <b class="fullname">{{$conver->usuario1->name}}</b>
                                        <span class="UserBadges"></span>
                                        <span class="UserNameBreak">&nbsp;</span>
                                        <span class="username u-dir u-textTruncate" dir="ltr">@
                                            <b>{{$conver->usuario1->username}}</b>
                                        </span>
                                    </div>
                                    <div class="DMInboxItem-header">
                                        <div class="DMInboxItem-timestamp">
                                            <span class="_timestamp" data-aria-label-part="last" data-time="1439136056" data-long-form="true" data-include-sec="true"></span>
                                        </div>
                                    </div>
                                    <div class="u-posRelative">
                                        <p class="DMInboxItem-snippet "></p>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="DMInbox-conversationItem">
                                <div class="DMInboxItem" data-thread-id="301028364-390203992" data-sort-event-id="630408429719408643" data-last-message-id="630408429719408643" data-is-oto="true" data-is-muted="false">
                                    <div class="DMInboxItem-avatar">
                                        <a href="/victorha_" class="js-action-profile js-user-profile-link" data-user-id="390203992">
                                            <div class="DMAvatar DMAvatar--1 u-chromeOverflowFix">
                                                <span class="DMAvatar-container">
                                                    <img class="DMAvatar-image" src="{{$conver->usuario2->avatar}}" alt="{{$conver->usuario2->name}}" title="{{$conver->usuario2->name}}">
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="DMInboxItem-title account-group">
                                            <b class="fullname">{{$conver->usuario2->name}}</b>
                                            <span class="UserBadges"></span>
                                            <span class="UserNameBreak">&nbsp;</span>
                                            <span class="username u-dir u-textTruncate" dir="ltr">@
                                                <b>{{$conver->usuario2->username}}</b>
                                            </span>
                                        </div>
                                        <div class="DMInboxItem-header">
                                            <div class="DMInboxItem-timestamp">
                                                <span class="_timestamp" data-aria-label-part="last" data-time="1439136056" data-long-form="true" data-include-sec="true"></span>
                                            </div>
                                        </div>
                                        <div class="u-posRelative">
                                            <p class="DMInboxItem-snippet "></p>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @endforeach
							</ul>
                            <div class="DMInbox-empty">
                                <div class="DMEmptyState">
                                    <h2 class="DMEmptyState-header">
                                        Envía un mensaje, recibe un mensaje
                                    </h2>

                                    <div class="DMEmptyState-details">
                                        <p>Los Mensajes Directos son conversaciones privadas entre tú y otras personas en Twitter. Puedes compartir Tweets, contenido multimedia y mucho más.</p>
                                    </div>

                                    <div class="DMEmptyState-cta">
                                        <button type="button" class="EdgeButton EdgeButton--primary dm-new-button">
                                        Inicia una conversación
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="DMInbox-spinner u-hidden">
                                <div class="DMSpinner"></div>
                            </div>
						</div><!--primary--> 
					
					</div><!--content--> 
				</div><!--body-->
				<div class="DMActivity-footer u-emptyHide"></div>
                
			</div><!--container-->

            
			
		</div>
        
		<div class="js-last-tabstop" tabindex="0"></div>
	</div>
	<!-- Fin Modal mensajes --> 
    <!-- modal conversacion -->
    <div class="modal fade modal is-autoPosition" id="{{$conver->id}}" role="dialog" style="top: 5%; left: 415px; position: absolute;width: 45vw; height: fit-content; z-index: 7000;" aria-labelledby="dm_dialog-header">
        <div class="js-first-tabstop" tabindex="0"></div>
        <div class="DMActivity DMInbox js-ariaDocument u-chromeOverflowFix DMActivity--open" role="document">
                
                <div class="DMDock-conversations">   
                    
                    <div class="modal-content">
                        <div class="DMActivity-header">
                            <div class="DMActivity-navigation">
                                <button type="button" class="DMActivity-back u-textUserColorHover" to-inbox="" data-dismiss="modal">
                                    <span class="Icon Icon--caretLeft u-linkComplex-target Icon--medium"></span>
                                    <span class="u-hiddenVisually">Volver a la bandeja de entrada</span>
                                </button>
                            </div>
                            <h2 class="DMActivity-title js-ariaTitle" id="dm_dialog-header">
                                <div class="DMUpdateAvatar has-defaultAvatar" aria-haspopup="true" data-has-custom-avatar="false">
                                    <div class="DMPopover DMPopover--center">
                                        <button class="DMPopover-button" aria-haspopup="true" disabled="">
                                            <div class="DMUpdateAvatar-avatar">
                                                <a href="/{{ $conver->usuario2->username }}" class="js-action-profile js-user-profile-link" data-user-id="">
                                                    <div class="DMAvatar DMAvatar--1 u-chromeOverflowFix">
                                                        <span class="DMAvatar-container">
                                                            <img class="DMAvatar-image" src="{{$conver->usuario2->avatar}}" alt="{{$conver->usuario2->name}}}" title="{{$conver->usuario2->name}}}">
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </button>
                                            
                                    </div>
                                </div>
                                <div class="DMUpdateName u-textTruncate is-richHeader">
                                    <div class="DMUpdateName-header account-group">
                                        <span class="DMUpdateName-name u-textTruncate">{{$conver->usuario2->name}}</span>
                                    </div>
                                    <div class="DMUpdateName-screenName u-textTruncate">@<b class="u-linkComplex-target">{{$conver->usuario2->username}}</div>
                                </div>
                            </h2>
                            <div class="DMActivity-toolbar">
                                <button class="DMConversation-convoSettings dm-to-convoSettings u-textUserColorHover">
                                    <span class="Icon Icon--info Icon--medium"></span>
                                    <span class="u-hiddenVisually">Ajustes de la conversación</span>
                                </button>
                                <button type="button" class="DMActivity-close js-close u-textUserColorHover" data-dismiss="modal">
                                    <span class="Icon Icon--close Icon--medium"></span>
                                    <span class="u-hiddenVisually">Cerrar</span>
                                </button>
                            </div>
                        </div>
                        <div class="DMActivity-container">
                            <div class="DMActivity-notice">
                                <div class="DMNotice  DMDeleteMessage" style="display: none;">
                                    <div class="DMNotice-message">¿Estás seguro de que quieres eliminar este mensaje?
                                    </div>
                                    <div class="DMNotice-actions u-emptyHide">
                                        <button type="button" class="DMDeleteMessage-cancel EdgeButton EdgeButton--tertiary">Cancelar</button>
                                        <button type="button" class="DMDeleteMessage-confirm EdgeButton EdgeButton--danger js-initial-focus">Eliminar</button>
                                    </div>
                                </div>
                            </div>        
                            <div class="DMActivity-body js-ariaBody DMConversation-container">
                                <div class="DMConversation-newMessagesPillContainer u-table">
                                    <div class="DMConversation-newMessagesPill is-hidden">
                                        <span class="Icon Icon--arrowDown"></span> Mensajes nuevos
                                
                                    </div>
                                </div>
                                <div class="DMConversation-scrollContainer js-modal-scrollable" aria-atomic="false" role="log" aria-live="polite">
                                    <span class="DMConversation-spinner DMSpinner u-hidden"></span>
                                    <ol class="DMConversation-content dm-convo js-dm-conversation" data-thread-id="293967812-301028364">
                                    @foreach($conver->mensajes as $mensaje)
                                        <li class="DirectMessage
                                        DirectMessage--sent
                                        clearfix dm js-dm-item" data-quick-reply-json="null" data-message-id="" data-item-id="" data-is-oto="true" data-sender-id="" data-card-component="dm_existing_conversation_dialog" data-component-context="dm_existing_conversation_dialog">
                                            <div class="DirectMessage-container">
                                                <div class="DirectMessage-avatar">
                                                    <a href="" class="js-action-profile js-user-profile-link" data-user-id="">
                                                        <div class="DMAvatar DMAvatar--1 u-chromeOverflowFix">
                                                            <span class="DMAvatar-container">
                                                                <img class="DMAvatar-image" src="{{$conver->usuario2->avatar}}" alt="{{$conver->usuario2->name}}" title="{{$conver->usuario2->name}}">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="DirectMessage-message
                                                    with-text
                                                    dm-message u-chromeOverflowFix">
                                                        <div class="DirectMessage-contentContainer">
                                                            <div class="DirectMessage-text">
                                                                <div class="js-tweet-text-container">
                                                                    <p class="TweetTextSize  js-tweet-text tweet-text" lang="" data-aria-label-part="0">{{$mensaje->mensaje}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="DirectMessage-actions">
                                                        <span class="DirectMessage-action">
                                                            <button type="button" class="DMDeleteMessageAction js-tooltip" data-message-id="953670443759673348" aria-hidden="true" data-original-title="Eliminar este mensaje">
                                                                <span class="Icon Icon--delete"></span>
                                                            </button>
                                                            <button type="button" class="DMDeleteMessageAction u-hiddenVisually" data-message-id="953670443759673348">
                                                                Eliminar este mensaje enviado  por {{$conver->usuario2->name}}
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="DirectMessage-footer">
                                                    <div class="DirectMessage-footerItem">
                                                        <div class="DMReadReceipt">
                                                            <div class="DMReadReceipt-statusMessage">
                                                                <span class="DMReadReceipt-defaultView">
                                                                    <span class="_timestamp" data-aria-label-part="last" data-time="1516207726" data-long-form="true" data-include-sec="true">
                                                                    17 ene.
                                                                    </span>
                                                                </span>
                                                                <span class="DMReadReceipt-statusView">Enviado</span>
                                                            </div>
                                                            <span class="DMReadReceipt-check is-seen is-seenAnimated">
                                                                <span class="Icon Icon--checkLight"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="DirectMessage-footer">
                                                    <div class="DMReadReceiptUserList DirectMessage-footerItem u-hidden">
                                                        <div class="DMReadReceiptUserList-truncated"></div>
                                                        <div class="DMReadReceiptUserList-expanded"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ol>
                                        <div class="DMConversation-typingIndicator u-hidden">
                                            <div class="DMTypingIndicator">
                                                <div class="DMTypingIndicator-avatarsContainer"></div>
                                                <div class="DMTypingIndicator-messageBubble">
                                                    <div class="TypingIndicatorMessageBubble is-hidden Caret Caret--left">
                                                        <div class="TypingIndicatorMessageBubble-dotContainer">
                                                            <div class="TypingIndicatorMessageBubble-dot"></div>
                                                            <div class="TypingIndicatorMessageBubble-dot"></div>
                                                            <div class="TypingIndicatorMessageBubble-dot"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="DMActivity-footer u-emptyHide">
                                <div class="DMConversation-sendingStateIndicator u-bgUserColorLightest u-textUserColorLight" style="display: none">
                                    <div class="DMSendingStateIndicator">
                                        <span>Enviando mensaje 0 de 0</span>
                                        <span>...</span>
                                    </div>
                                </div>
                                <div class="DMConversation-trustRequest u-hidden"></div>
                                <div class="DMConversation-composer u-bgUserColorLightest">
                                    <form class="DMComposer tweet-form" target="dm-post-iframe" action="//upload.twitter.com/i/media/upload.iframe" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="authenticity_token" class="auth-token">
                                            <div class="DMComposer-container u-borderUserColorLighter">
                                                <div class="RichEditor RichEditor--emojiPicker is-fakeFocus">
                                                    <div class="RichEditor-mozillaCursorWorkaround">&nbsp;</div>
                                                    <div class="RichEditor-container u-borderRadiusInherit">
                                                        <div class="RichEditor-scrollContainer u-borderRadiusInherit">
                                                            <div class="DMComposer-editor tweet-box rich-editor js-initial-focus is-showPlaceholder" data-default-placeholder="Escribe un mensaje" data-attachment-placeholder="Añadir un comentario..." data-from-message-me-card-placeholder="Envía un mensaje privado" id="tweet-box-dm-conversation" contenteditable="true" spellcheck="true" role="textbox" aria-multiline="false" dir="ltr" aria-label="Enviar mensaje a Ferel">
                                                                <div>
                                                                    <br>
                                                                    </div>
                                                                </div>
                                                                <div class="RichEditor-pictographs" aria-hidden="true"></div>
                                                            </div>
                                                        </div>
                                                        <div class="RichEditor-mozillaCursorWorkaround">&nbsp;</div>
                                                    </div>
                                                </div>
                                                <div class="TweetBoxExtras"></div>
                                                <div class="DMComposer-send">
                                                    <button class="EdgeButton EdgeButton--primary tweet-action" aria-disabled="false" type="button">
                                                        <span class="button-text messaging-text">Enviar</span>
                                                    </button>
                                                </div>
                                                <div style="position: absolute; visibility: hidden;">
                                                    <div>
                                                        <br>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="DMConversation-quickReply"></div>
                                            </div>
                                </div>
                        </div><!-- container-->
                        
                    </div><!--modal content-->
                        
                </div><!--conversations-->
                
        </div>
    </div>
		
<!--fin -->