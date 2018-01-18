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
														<a class="fullname ProfileNameTruncated-link u-textInheritColor js-nav" href="/{{$user->username}}" data-aria-label-part="" tabindex="-1">{{$user->name}}</a>
													</div>
													<span class="UserBadges"></span>
												</div>
												<div class="ProfileCardMini-screenname">
													<a href="/{{$user->username}}" class="ProfileCardMini-screennameLink u-linkComplex js-nav u-dir" dir="ltr" tabindex="-1">
														<span class="username u-dir" dir="ltr">@
															
															
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
												<li class="ProfileNav-item ProfileNav-item--tweets ">
													<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav" title="{{$user->tweets->count()}} Tweets" data-nav="tweets" tabindex="0"  href="/{{$user->username}}" >
														<span class="ProfileNav-label" aria-hidden="true">Tweets</span>
														<span class="u-hiddenVisually">Tweets, página actual.</span>
														<span class="ProfileNav-value" data-count="4" data-is-compact="false">{{$user->tweets->count()}}</span>
													</a>
												</li>
												<li class="ProfileNav-item ProfileNav-item--following">
													<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" title="{{$user->seguidos->count()}} Siguiendo" data-nav="following" href="/{{$user->username}}/following">
														<span class="ProfileNav-label" aria-hidden="true">Siguiendo</span>
														<span class="u-hiddenVisually">Siguiendo</span>
														<span class="ProfileNav-value" data-count="279" data-is-compact="false">{{$user->seguidos->count()}}</span>
													</a>
												</li>
												<li class="ProfileNav-item ProfileNav-item--followers  is-active">
													<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" title="{{$user->seguidores->count()}} Seguidores" data-nav="followers" href="/{{$user->username}}/followers">
														<span class="ProfileNav-label" aria-hidden="true">Seguidores</span>
														<span class="u-hiddenVisually">Seguidores</span>
														<span class="ProfileNav-value" data-count="35" data-is-compact="false">{{$user->seguidores->count()}}</span>
													</a>
												</li>
												<li class="ProfileNav-item ProfileNav-item--favorites" data-more-item=".ProfileNav-dropdownItem--favorites">
													<a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" title="{{$user->likes()->count()}} Me gusta" data-nav="favorites" href="/{{$user->username}}/likes">
														<span class="ProfileNav-label" aria-hidden="true">Me gusta</span>
														<span class="u-hiddenVisually">Me gusta</span>
														<span class="ProfileNav-value" data-count="{{$user->likes()->count()}}" data-is-compact="false">{{$user->likes()->count()}}</span>
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
														<span class="ProfileNav-value">Más 
															
															
															<span class="ProfileNav-dropdownCaret Icon Icon--medium Icon--caretDown"></span>
														</span>
													</a>
													<div class="dropdown-menu">
														<div class="dropdown-caret">
															<span class="caret-outer"></span>
															<span class="caret-inner"></span>
														</div>
														<ul>
															<li>
																<a href="/{{$user->username}}/lists" class="ProfileNav-dropdownItem ProfileNav-dropdownItem--favorites is-hidden u-bgUserColorHover u-bgUserColorFocus u-linkClean js-nav" style="">Me gusta</a>
															</li>
															<li>
																<a href="/{{$user->username}}/lists" class="ProfileNav-dropdownItem ProfileNav-dropdownItem--lists is-hidden u-bgUserColorHover u-bgUserColorFocus u-linkClean js-nav" style="">Listas</a>
															</li>
															<li>
																<a href="/{{$user->username}}/moments" class="ProfileNav-dropdownItem ProfileNav-dropdownItem--userMoments is-hidden u-bgUserColorHover u-bgUserColorFocus u-linkClean js-nav" style="">Momentos</a>
															</li>
														</ul>
													</div>
												</li>
												@if(Auth::id() == $user->id)
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
                                                @else
                                                <li class="ProfileNav-item ProfileNav-item--userActions u-floatRight u-textRight with-rightCaret ">
                                                    <div class="UserActions   u-textLeft">
                                                    @if($usuarioConectadoFollowing == true)
                                                        <div class="user-actions btn-group following" data-user-id="2163424327" data-screen-name="jstpwalsh" data-name="Justin Walsh" data-protected="false">
                                                    @else
                                                        <div class="user-actions btn-group not-following not-muting " data-user-id="2163424327" data-screen-name="jstpwalsh" data-name="Justin Walsh" data-protected="false">

                                                    @endif
                                                            <span class="user-actions-follow-button js-follow-btn follow-button">
                                                                <a type="button" class="EdgeButton EdgeButton--secondary EdgeButton--medium  button-text follow-text" href="{{ action('HomeController@seguir', ['seguido'=>$user->id]) }}">
                                                                    <span aria-hidden="true">Seguir</span>
                                                                    <span class="u-hiddenVisually">Seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>{{$user->username}}</b></span></span>
                                                                </a>
                                                                <button type="button" class=" EdgeButton EdgeButton--primary EdgeButton--medium  button-text following-text">
                                                                    <span aria-hidden="true">Siguiendo</span>
                                                                    <span class="u-hiddenVisually">Siguiendo a <span class="username u-dir u-textTruncate" dir="ltr">@<b>{{$user->username}}</b></span></span>
                                                                </button>
                                                                <a type="button" class=" EdgeButton EdgeButton--danger EdgeButton--medium  button-text unfollow-text" href="{{ action('HomeController@dejarDeSeguir', ['seguido'=>$user->id]) }}">
                                                                    <span aria-hidden="true">Dejar de seguir</span>
                                                                    <span class="u-hiddenVisually">Dejar de seguir a <span class="username u-dir u-textTruncate" dir="ltr">@<b>{{$user->username}}</b></span></span>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif
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
								<div class="Grid-cell u-size1of3">
									<div class="dashboard ">
										<div class="module wtf-module js-wtf-module roaming-module has-content">
											<div class="flex-module">
												<div class="flex-module-header">
													<h3>A quién seguir</h3>
													<!--<small>· </small><button type="button" class="btn-link js-refresh-suggestions"><small>Actualizar</small></button><small class="view-all">· <a class="js-view-all-link js-nav" href="/who_to_follow/suggestions" data-element-term="view_all_link">Ver todos</a></small>-->
												</div>
                                                                                @foreach ($users as $user)
                            
																				
																				
												
												<div class="UserSmallListItem js-recommended-followers dashboard-user-recommendations flex-module-inner" data-section-id="wtf" style="opacity: 1;">
													<div class="UserSmallListItem js-account-summary account-summary js-actionable-user" data-user-id="{{ $user->id }}" data-feedback-token="500" data-impression-id="">
														<div class="UserSmallListItem-context"></div>
														<div class="dismiss js-action-dismiss">
															<span class="Icon Icon--close"></span>
														</div>
														<div class="content">
															<a class="account-group js-recommend-link js-user-profile-link user-thumb" href="/{{$user->username}}" >
																<img class="avatar js-action-profile-avatar " src="{{ $user->avatar }}"alt="">
																	<span class="account-group-inner" data-user-id="274529577">
																		<strong class="fullname">{{ $user->name }} </strong>
																		<span class="UserBadges"></span>
																		<span class="UserNameBreak">&nbsp;</span>
																		<span class="username u-dir u-textTruncate" dir="ltr">@
																			<b>{{ $user->username }}</b>
																		</span>
																	</span>
																</a>
																<div class="user-actions not-following not-muting" data-screen-name="{{ $user->name }}" data-user-id="{{ $user->id }}">
																	<span class="user-actions-follow-button js-follow-btn follow-button">
																		<a  href="{{ action('HomeController@seguir', ['seguido'=>$user->id]) }}" type="button" class="EdgeButton EdgeButton--secondary EdgeButton--small  button-text follow-text">
																			<span aria-hidden="true">Seguir</span>
																			<span class="u-hiddenVisually">Seguir a 
																												
																												
																				
																				<span class="username u-dir u-textTruncate" dir="ltr">@
																													
																													
																					
																					<b>{{ $user->username }}</b>
																				</span>
																			</span>
																		</a>
																		<button type="button" class=" EdgeButton EdgeButton--primary EdgeButton--small  button-text following-text">
																			<span aria-hidden="true">Siguiendo</span>
																			<span class="u-hiddenVisually">Siguiendo a 
																												
																												
																				
																				<span class="username u-dir u-textTruncate" dir="ltr">@
																													
																													
																					
																					<b>{{ $user->username }}</b>
																				</span>
																			</span>
																		</button>
																		<button type="button" class="EdgeButton EdgeButton--danger EdgeButton--small  button-text unfollow-text">
																			<span aria-hidden="true">Dejar de seguir</span>
																			<span class="u-hiddenVisually">Dejar de seguir a 
																												
																												
																				
																				<span class="username u-dir u-textTruncate" dir="ltr">@
																													
																													
																					
																					<b>{{ $user->username }}</b>
																				</span>
																			</span>
																		</button>
																	</span>
																</div>
															</div>
															<!--content-->
														</div>
													</div>
                                                                                    @endforeach
																					
																					
													
													<!--flex-module-->
												</div>
												<div class="flex-module import-prompt">
													<div class="flex-module-footer u-table">
														<a href="" class="js-tooltip u-tableCell u-alignMiddle" data-original-title="Encuentra a personas que conoces">
															<span class="Icon Icon--people Icon--small"></span>
															<span class="u-hiddenVisually">Encuentra a personas que conoces</span>
														</a>
														<a class="u-tableCell u-alignMiddle remove-discover-pymk" href="">Encuentra a personas que conoces</a>
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
										<div class="Grid-cell" data-test-selector="ProfileTimeline">
											<div class="ProfileHeading">
												<div class="ProfileHeading-spacer"></div>
												<div class="ProfileHeading-content ProfileHeading-content--noFill">
													<h2 id="content-main-heading" class="ProfileHeading-title u-hiddenVisually ">Siguiendo</h2>
												</div>
												<div class="GridTimeline">
													<div class="GridTimeline-items has-items">
														<div class="Grid Grid--withGutter">
                                                        @foreach ($followers as $followingUser)   
															<div class="Grid-cell u-size1of2 u-lg-size1of3 u-mb10" data-test-selector="ProfileTimelineUser" role="presentation">
																<div class="js-stream-item" role="listitem" data-item-id="66816631" id="stream-item-user-66816631" data-item-type="user">
																	<div class="ProfileCard js-actionable-user" data-screen-name="{{$followingUser->username}}" data-user-id="66816631" data-feedback-token="" data-impression-id="">
																		<a class="ProfileCard-bg js-nav" href="/{{$followingUser->username}}" tabindex="-1" aria-hidden="true" style=" background-color: #333333; background-image: url({{$followingUser->fondo}});"></a>
																		<div class="ProfileCard-content">
																			<a class="ProfileCard-avatarLink js-nav js-tooltip" href="/{{$followingUser->username}}" tabindex="-1" aria-hidden="true" data-original-title="{{$followingUser->name}}">
																				<img class="ProfileCard-avatarImage js-action-profile-avatar" src="{{$followingUser->avatar}}" alt="">
																				</a>
																				<div class="ProfileCard-actions">
																					<div class="ProfileCard-userActions with-rightCaret js-userActions">
																						<div class="UserActions   UserActions--small u-textLeft">

                                                                                        
                                                                                        @if(Auth::id() == $user->id)
																							<div class="user-actions btn-group following not-muting including " data-user-id="66816631" data-screen-name="{{$followingUser->username}}" data-name="{{$followingUser->name}}" data-protected="false">
																							@else
                                                                                            <?php $comprobacion=false ?>
                                                                                            <?php $esUsuarioConectado=false ?>

                                                                                                @foreach(Auth::user()->seguidos as $siguiendo)
                                                                                                    @if($followingUser->id == Auth::id() )
                                                                                                    <?php $esUsuarioConectado=true ?>
                                                                                                    @break
                                                                                                    @elseif($siguiendo->id == $followingUser->id )
                                                                                                    <?php $comprobacion=true ?>
                                                                                                    @break                                                                                                    
                                                                                                    
                                                                                                    @endif

                                                                                                @endforeach
                                                                                                @if($esUsuarioConectado == true)
                                                                                                <div class="user-actions btn-group no-following not-muting including " data-user-id="66816631" data-screen-name="{{$followingUser->username}}" data-name="{{$followingUser->name}}" data-protected="false" style="visibility: hidden;">
                                                                                                @elseif($comprobacion == true && $esUsuarioConectado ==false)
                                                                                                <div class="user-actions btn-group following not-muting including " data-user-id="66816631" data-screen-name="{{$followingUser->username}}" data-name="{{$followingUser->name}}" data-protected="false">
                                                                                                @else ($comprobacion == false && $esUsuarioConectado ==false)
                                                                                                <div class="user-actions btn-group not-following not-muting including " data-user-id="66816631" data-screen-name="{{$followingUser->username}}" data-name="{{$followingUser->name}}" data-protected="false">

                                                                                                @endif
                                                                                            @endif 
                                                                                                <span class="UserActions-moreActions u-inlineBlock">

																								</span>
																								<span class="user-actions-follow-button js-follow-btn follow-button">
																									<a  href="{{ action('HomeController@seguir', ['seguido'=>$followingUser->id]) }}" type="button" class="EdgeButton EdgeButton--secondary EdgeButton--small button-text follow-text" >
																										<span aria-hidden="true">Seguir</span>
																										<span class="u-hiddenVisually">Seguir a 
												
																											<span class="username u-dir u-textTruncate" dir="ltr">@
													
																												<b>{{$followingUser->username}}</b>
																											</span>
																										</span>
																									</a>
																									<button type="button" class=" EdgeButton EdgeButton--primary EdgeButton--small button-text following-text">
																										<span aria-hidden="true">Siguiendo</span>
																										<span class="u-hiddenVisually">Siguiendo a 
												
																											<span class="username u-dir u-textTruncate" dir="ltr">@
													
																												<b>{{$followingUser->username}}</b>
																											</span>
																										</span>
																									</button>
																									<a type="button" style="background-color: #e0245e;border: 1px solid #e0245e; color: #fff" class=" EdgeButton EdgeButton--danger EdgeButton--small  button-text unfollow-text" href="{{ action('HomeController@dejarDeSeguir', ['seguido'=>$followingUser->id]) }}">
																										<span aria-hidden="true">Dejar de seguir</span>
																										<span class="u-hiddenVisually">Dejar de seguir a 
												
																											<span class="username u-dir u-textTruncate" dir="ltr">@
													
																												<b>{{$followingUser->username}}</b>
																											</span>
																										</span>
																									</a>
																								</span>
																								<div class="dropdown ">
																									<button type="button" class="user-dropdown dropdown-toggle js-dropdown-toggle js-link js-tooltip btn plain-btn small-user-dropdown" title="Más acciones de usuario">
																										<span class="user-dropdown-icon Icon Icon--dotsVertical Icon--small">
																											<span class="visuallyhidden">Acciones de usuario</span>
																										</span>
																									</button>
																									<div class="dropdown-menu dropdown-menu--rightAlign is-autoCentered is-forceRight">
																										<div class="dropdown-caret">
																											<span class="caret-outer"></span>
																											<span class="caret-inner"></span>
																										</div>
																										<ul>
																											<li class="mention-text not-blocked">
																												<button type="button" class="dropdown-link">Twittear a 
														
																													<span class="username u-dir u-textTruncate" dir="ltr">@
															
																														<b>{{$followingUser->username}}</b>
																													</span>
																												</button>
																											</li>
																											<li class="dm-text">
																												<button type="button" class="dropdown-link">Enviar un mensaje directo</button>
																											</li>
																											<li class="list-text not-blocked">
																												<button type="button" class="dropdown-link">Añadir a o quitar de una lista</button>
																											</li>
																											<li class="dropdown-divider not-blocked"></li>


																											<li class="dropdown-divider is-following"></li>
																											<li class="dropdown-divider is-embeddable"></li>
																											<li class="embed-profile">
																												<button type="button" class="dropdown-link">Insertar este perfil</button>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="ProfileCard-userFields">
																					<div class="ProfileNameTruncated account-group">
																						<div class="u-textTruncate u-inlineBlock">
																							<a class="fullname ProfileNameTruncated-link u-textInheritColor js-nav" href="/{{$followingUser->username}}" data-aria-label-part="">
                                                                                            {{$followingUser->name}}</a>
																						</div>
																						<span class="UserBadges"></span>
																					</div>
																					<span class="ProfileCard-screenname">
																						<a href="/{{$followingUser->username}}" class="ProfileCard-screennameLink u-linkComplex js-nav" data-aria-label-part="">
																							<span class="username u-dir" dir="ltr">@
									
																								<b class="u-linkComplex-target">{{$followingUser->username}}</b>
																							</span>
																						</a>
																						<span>‏</span>
																					</span>
																					<p class="ProfileCard-bio u-dir" dir="ltr" data-aria-label-part="">{{$followingUser->descripcion}}</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
                                                        @endforeach  
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
		</div>
@endsection