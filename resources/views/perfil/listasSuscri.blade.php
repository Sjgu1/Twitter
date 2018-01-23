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
				<img alt="" src="{{$user->fondo}}" style="transform: none;">
			</div>
		</div>
		<div class="AppContainer">
			<div class="ProfileCanopy-avatar">
				<div class="ProfileAvatar">	<a class="ProfileAvatar-placeholder u-block js-nav js-tooltip profile-picture u-hidden" href="/{{$user->username}}?edit=true" title="Añadir una foto de perfil" data-placement="right" data-scribe-element="profile_avatar">
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
						<div class="ProfileCardMini">	<a class="ProfileCardMini-avatar profile-picture js-tooltip" href="https://pbs.twimg.com/profile_images/524532262428106753/iwggeorR.jpeg" title="{{$user->name}}" data-resolved-url-large="https://pbs.twimg.com/profile_images/524532262428106753/iwggeorR.jpeg" data-url="https://pbs.twimg.com/profile_images/524532262428106753/iwggeorR.jpeg" target="_blank" rel="noopener" tabindex="-1">
											<img class="ProfileCardMini-avatarImage" alt="{{$user->name}}" src="https://pbs.twimg.com/profile_images/524532262428106753/iwggeorR_normal.jpeg">
											</a>
							<div class="ProfileCardMini-details">
								<div class="ProfileNameTruncated account-group">
									<div class="u-textTruncate u-inlineBlock">	<a class="fullname ProfileNameTruncated-link u-textInheritColor js-nav" href="/{{$user->username}}" data-aria-label-part="" tabindex="-1">{{$user->name}}</a>
									</div>	<span class="UserBadges"></span>
								</div>
								<div class="ProfileCardMini-screenname">
									<a href="/{{$user->username}}" class="ProfileCardMini-screennameLink u-linkComplex js-nav u-dir" dir="ltr" tabindex="-1">	<span class="username u-dir" dir="ltr">@
															
															
															<b class="u-linkComplex-target">{{$user->username}}</b>
														</span>
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
								<li class="ProfileNav-item ProfileNav-item--tweets">
									<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav" title="4 Tweets" data-nav="tweets" tabindex="0">	<span class="ProfileNav-label" aria-hidden="true">Tweets</span>
										<span class="u-hiddenVisually">Tweets, página actual.</span>
										<span class="ProfileNav-value" data-count="4" data-is-compact="false">{{$user->tweets->count()}}</span>
									</a>
								</li>
								<li class="ProfileNav-item ProfileNav-item--following">
									<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" title="279 Siguiendo" data-nav="following" href="/{{$user->username}}/following">	<span class="ProfileNav-label" aria-hidden="true">Siguiendo</span>
										<span class="u-hiddenVisually">Siguiendo</span>
										<span class="ProfileNav-value" data-count="279" data-is-compact="false">{{$user->seguidos->count()}}</span>
									</a>
								</li>
								<li class="ProfileNav-item ProfileNav-item--followers">
									<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" title="35 Seguidores" data-nav="followers" href="/{{$user->username}}/followers">	<span class="ProfileNav-label" aria-hidden="true">Seguidores</span>
										<span class="u-hiddenVisually">Seguidores</span>
										<span class="ProfileNav-value" data-count="35" data-is-compact="false">{{$user->seguidores->count()}}</span>
									</a>
								</li>
								<li class="ProfileNav-item ProfileNav-item--favorites" data-more-item=".ProfileNav-dropdownItem--favorites">
									<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" title="{{$user->likes()->count()}} Me gusta" data-nav="favorites" href="/{{$user->username}}/likes">	<span class="ProfileNav-label" aria-hidden="true">Me gusta</span>
										<span class="u-hiddenVisually">Me gusta</span>
										<span class="ProfileNav-value" data-count="{{$user->likes->count()}}" data-is-compact="false">{{$user->likes()->count()}}</span>
									</a>
								</li>
								<li class="ProfileNav-item ProfileNav-item--lists  is-active" data-more-item=".ProfileNav-dropdownItem--lists">
									<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip  js-nav u-textUserColor" title="{{$user->listas->count()}} Lista" data-nav="all_lists" href="/{{$user->username}}/listas">	<span class="ProfileNav-label" aria-hidden="true">Listas</span>
										<span class="u-hiddenVisually">Listas</span>
										<span class="ProfileNav-value" data-is-compact="false">{{$listas->count()}}</span>
									</a>
								</li>
								<li class="ProfileNav-item ProfileNav-item--more dropdown is-hidden" style="">
									<a class="ProfileNav-stat ProfileNav-stat--link ProfileNav-stat--moreLink js-dropdown-toggle" role="button" href="#more">	<span class="ProfileNav-label">&nbsp;</span>
										<span class="ProfileNav-value">Más 
															
															
															<span class="ProfileNav-dropdownCaret Icon Icon--medium Icon--caretDown"></span>
										</span>
									</a>
									<div class="dropdown-menu">
										<div class="dropdown-caret">	<span class="caret-outer"></span>
											<span class="caret-inner"></span>
										</div>
										<ul>
											<li>	<a href="/{{$user->username}}/likes" class="ProfileNav-dropdownItem ProfileNav-dropdownItem--favorites is-hidden u-bgUserColorHover u-bgUserColorFocus u-linkClean js-nav" style="">Me gusta</a>
											</li>
											<li>	<a href="/{{$user->username}}/lists" class="ProfileNav-dropdownItem ProfileNav-dropdownItem--lists is-hidden u-bgUserColorHover u-bgUserColorFocus u-linkClean js-nav" style="">Listas</a>
											</li>
											<li>	<a href="/{{$user->username}}/moments" class="ProfileNav-dropdownItem ProfileNav-dropdownItem--userMoments is-hidden u-bgUserColorHover u-bgUserColorFocus u-linkClean js-nav" style="">Momentos</a>
											</li>
										</ul>
									</div>
								</li>@if(Auth::id() == $user->id)
								<li class="ProfileNav-item ProfileNav-item--userActions u-floatRight u-textRight with-rightCaret ">
									<div class="UserActions   u-textLeft">
										<button type="button" class="UserActions-editButton edit-button EdgeButton EdgeButton--tertiary" data-toggle="" data-target="" data-scribe-element="profile_edit_button">	<span class="button-text">Editar perfil</span>
										</button>
										<div class="ProfilePage-editingButtons">
											<button class="ProfilePage-cancelButton EdgeButton EdgeButton--tertiary" data-scribe-element="cancel_button" tabindex="4">Cancelar</button>
											<button class="ProfilePage-saveButton EdgeButton EdgeButton--secondary" tabindex="3">Guardar cambios</button>
										</div>
									</div>
								</li>@else
								<li class="ProfileNav-item ProfileNav-item--userActions u-floatRight u-textRight with-rightCaret ">
									<div class="UserActions   u-textLeft">@if($usuarioConectadoFollowing == true)
										<div class="user-actions btn-group following" data-user-id="2163424327" data-screen-name="jstpwalsh" data-name="Justin Walsh" data-protected="false">@else
											<div class="user-actions btn-group not-following not-muting " data-user-id="2163424327" data-screen-name="jstpwalsh" data-name="Justin Walsh" data-protected="false">@endif	<span class="user-actions-follow-button js-follow-btn follow-button">
																	<a type="button" class="EdgeButton EdgeButton--secondary EdgeButton--medium  button-text follow-text" href="{{ action('HomeController@seguir', ['seguido'=>$user->id]) }}">
																		<span aria-hidden="true">Seguir</span>
												<span class="u-hiddenVisually">Seguir a 
																			<span class="username u-dir u-textTruncate" dir="ltr">@
																				<b>{{$user->username}}</b>
																			</span>
												</span>
												</a>
												<button type="button" class=" EdgeButton EdgeButton--primary EdgeButton--medium  button-text following-text">	<span aria-hidden="true">Siguiendo</span>
													<span class="u-hiddenVisually">Siguiendo a 
																			<span class="username u-dir u-textTruncate" dir="ltr">@
																				<b>{{$user->username}}</b>
																			</span>
													</span>
												</button>
												<a type="button" class=" EdgeButton EdgeButton--danger EdgeButton--medium  button-text unfollow-text" href="{{ action('HomeController@dejarDeSeguir', ['seguido'=>$user->id]) }}">	<span aria-hidden="true">Dejar de seguir</span>
													<span class="u-hiddenVisually">Dejar de seguir a 
																			<span class="username u-dir u-textTruncate" dir="ltr">@
																				<b>{{$user->username}}</b>
																			</span>
													</span>
												</a>
												</span>
											</div>
										</div>
								</li>@endif</ul>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
    <!--espacio principal-->
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
										<span class="username u-dir" dir="ltr">@
															
															
																
											<b class="u-linkComplex-target">{{$user->username}}</b>
										</span>
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
                    <!-- espacio central-->
                    <div class="Grid-cell
                    u-lg-size2of3" data-test-selector="ProfileTimeline">
                        <div class="ProfileHeading">
                            <div class="ProfileHeading-spacer"></div>
                            <div class="ProfileHeading-content">
                                <h2 id="content-main-heading" class="ProfileHeading-title u-hiddenVisually ">Listas</h2>
                                <ul class="ProfileHeading-toggle">
                                    <li class="ProfileHeading-toggleItem  is-active" data-element-term="subscribed_to_toggle">
                                        <span aria-hidden="true">Suscrito a</span>
                                        <span class="u-hiddenVisually">Suscrito a, página actual.</span>
                                    </li>
                                    <li class="ProfileHeading-toggleItem  u-textUserColor" data-element-term="member_of_toggle">
                                        <a class="ProfileHeading-toggleLink js-nav" href="/{{$user->username}}/memberships" data-nav="member_of_toggle">
                                    Miembro de
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ProfileListsTimeline">
                            <div class="GridTimeline">
                                <div class="stream-item js-new-items-bar-container"></div>
								@if($listas->count()!=0)
                                <div class="GridTimeline-items has-items" role="list" data-max-position="" data-min-position="">
                                    @foreach($listas as $lista)
                                    <div class="Grid" role="presentation">
                                        <div class="Grid-cell js-stream-item" data-test-selector="ProfileTimelineList" role="listitem" data-item-id="934768293654745088" id="stream-item-list-934768293654745088" data-item-type="list">
                                            <div class="ProfileListItem u-cf js-list " data-user-id="301028364" data-list-id="934768293654745088">
                                                <a class="ProfileListItem-name js-list-link js-nav u-dir" dir="ltr" href="/{{$lista->usuario->username}}/listas/{{$lista->nombre}}">{{$lista->nombre}}</a>
                                                <a class="ProfileListItem-avatarLink u-textUserColor u-floatRight" href="/{{$lista->usuario->username}}" tabindex="-1" aria-hidden="true">
                                                    <img class="ProfileListItem-avatar" src="{{$lista->usuario->avatar}}" alt="">
                                                    </a>
                                                    @if($lista->usuario->id !=$user->id )
                                                    <span class="ProfileListItem-byLine">por <a class="ProfileListItem-ownerName" href="/{{$lista->usuario->username}}">{{$lista->usuario->name}}</a></span>
                                                    @endif
                                                    <p class="ProfileListItem-bio u-dir" dir="ltr"></p>
                                                    <div class="ProfileListItem-footer">
                                                        <p class="ProfileListItem-memberCount">{{$lista->miembros->count()}} miembros
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                    <div class="GridTimeline-end has-items">
                                        <div class="GridTimeline-footer">
                                            <span class="spinner"></span>
                                        </div>
                                    </div>
									@else
									<div class="GridTimeline-items" role="list" data-max-position="" data-min-position="">
  									</div>
									<div class="GridTimeline-end">
										<div class="GridTimeline-emptyText" id="content-main-heading">
											Suscríbete a una lista. Una vez que lo hagas, todas se mostrarán aquí.
										</div>
										<div class="GridTimeline-footer">
											<span class="spinner"></span>
										</div>
									</div>
									@endif
                                </div><!--container-->
                            </div>
	                </div>
                    <!-- fin espacio central-->
					<div class="Grid-cell u-size1of3">
							<div class="Grid Grid--withGutter">
								<div class="Grid-cell">
									<div class="ProfileSidebar ProfileSidebar--withRightAlignment">
                                        <div class="MoveableModule">
                                            <!--cuadro crear listas-->
                                            <div class="ListCreationModule module">
                                                <h3 class="ListCreationModule-title">Crear una lista</h3>
                                                <p class="ListCreationModule-description">Una lista es un grupo administrado de usuarios de Twitter y una forma genial de organizar tus intereses. 
                                                    <a class="ListCreationModule-moreInfoLink" href="https://support.twitter.com/articles/76460" target="_blank" rel="noopener">Más información</a>
                                                </p>
                                                <div class="ListCreationModule-action">
                                                    <button type="button" class="EdgeButton EdgeButton--secondary EdgeButton--small " data-element-term="create_list_button" data-modal="list-new">
                                                    Crear nueva lista
                                                </button>
                                                </div>
                                            </div>
                                            <!-- fin crear listas-->
                                            <!-- Cuadro derecha, recomendaciones  -->
                                            <div class="dashboard dashboard-right">
                                                <div class="module wtf-module js-wtf-module roaming-module has-content">
                                                    <div class="flex-module">
                                                        <div class="flex-module-header">
                                                            <h3>A quién seguir</h3>
                                                            <!--<small>· </small>
                                                                <button type="button" class="btn-link js-refresh-suggestions"><small>Actualizar</small></button>
                                                                <small class="view-all">· <a class="js-view-all-link js-nav" href="/who_to_follow/suggestions" data-element-term="view_all_link">Ver todos</a></small>-->
                                                        </div>@foreach ($users as $user)
                                                        <div class="js-recommended-followers dashboard-user-recommendations flex-module-inner" data-section-id="wtf" style="opacity: 1;">
                                                            <div class="UserSmallListItem js-account-summary account-summary js-actionable-user" data-user-id="{{ $user->id }}" data-feedback-token="500" data-impression-id="">
                                                                <div class="UserSmallListItem-context"></div>
                                                                <div class="dismiss js-action-dismiss"><span class="Icon Icon--close"></span>
                                                                </div>
                                                                <div class="content"> <a class="account-group js-recommend-link js-user-profile-link user-thumb" href="/{{$user->username}}">
                                                                
                                                                            <img class="avatar js-action-profile-avatar " src="{{ $user->avatar }}"alt="">
                                                                            <span class="account-group-inner" data-user-id="274529577">
                                                                                <strong class="fullname">{{ $user->name }} </strong><span class="UserBadges"></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir u-textTruncate" dir="ltr">@<b>{{ $user->username }}</b></span>
                                                                            </span>
                                                                        </a>
                                                                    <div class="user-actions not-following not-muting" data-screen-name="{{ $user->name }}" data-user-id="{{ $user->id }}"> <span class="user-actions-follow-button js-follow-btn follow-button">
                                                                            <a  href="{{ action('HomeController@seguir', ['seguido'=>$user->id]) }}" type="button" class="EdgeButton EdgeButton--secondary EdgeButton--small  button-text follow-text">
                                                                                <span aria-hidden="true">Seguir</span>
                                                                        <span class="u-hiddenVisually">Seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                                                        </a>
                                                                        <button type="button" class=" EdgeButton EdgeButton--primary EdgeButton--small  button-text following-text"> <span aria-hidden="true">Siguiendo</span>
                                                                            <span class="u-hiddenVisually">Siguiendo a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                                                        </button>
                                                                        <button type="button" class="EdgeButton EdgeButton--danger EdgeButton--small  button-text unfollow-text"> <span aria-hidden="true">Dejar de seguir</span>
                                                                            <span class="u-hiddenVisually">Dejar de seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>username</b></span></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!--content-->
                                                            </div>
                                                        </div>@endforeach</div>
                                                    <!--flex-module-->
                                                    <div class="flex-module import-prompt">
                                                        <div class="flex-module-footer u-table">
                                                            <a href="" class="js-tooltip u-tableCell u-alignMiddle" data-original-title="Encuentra a personas que conoces"> <span class="Icon Icon--people Icon--small"></span><span class="u-hiddenVisually">Encuentra a personas que conoces</span>
                                                            </a> <a class="u-tableCell u-alignMiddle remove-discover-pymk" href="">Encuentra a personas que conoces</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Fin derecho, usuarios  -->
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