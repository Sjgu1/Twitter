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
		
				<!--  Espacio Principal-->
				<div id="page-outer">
					<div id="page-container" class=" wrapper wrapper-home" style="padding: 0px 100px 40px;">
					<div class="SearchNavigation">
  <div class="SearchNavigation-canopy u-bgUserColor">
    <div class="SearchNavigation-textContainer">
      <h1 class="SearchNavigation-titleText" dir="ltr">
        Usuarios: {{$busqueda}}
      </h1>

      
    </div>
  </div>

  

</div>
						<div class="Grid Grid--withGutter" style="padding-top: 70px;">
								
								<div class="Grid-cell u-size3of3 u-lg-size4of4">
									<div class="Grid Grid--withGutter">
										<div class="Grid-cell">
											<div class="js-profileClusterFollow"></div>
										</div>
										<div class="Grid-cell" data-test-selector="ProfileTimeline">
											<div class="ProfileHeading">
												<div class="ProfileHeading-spacer"></div>
												<div class="ProfileHeading-content ProfileHeading-content--noFill">
												</div>
												<div class="GridTimeline">
													<div class="GridTimeline-items has-items">
													
														<div class="Grid Grid--withGutter">
                                                        @foreach ($users as $followingUser)   
															<div class="Grid-cell u-size1of4 u-lg-size1of4 u-mb10" data-test-selector="ProfileTimelineUser" role="presentation">
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

                                                                                        
                                                                                        @if(Auth::id() == $followingUser->id)
																							<div class="user-actions btn-group following not-muting including " data-user-id="66816631" data-screen-name="{{$followingUser->username}}" data-name="{{$followingUser->name}}" data-protected="false" style="visibility: hidden;">
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
																									<a type="button" class="EdgeButton EdgeButton--secondary EdgeButton--small button-text follow-text" href="{{ action('HomeController@seguir', ['seguido'=>$followingUser->id]) }}" >
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
																									<a type="button" style="background-color: #e0245e;    border: 1px solid #e0245e; color: #fff" class=" EdgeButton EdgeButton--danger EdgeButton--small  button-text unfollow-text" href="{{ action('HomeController@dejarDeSeguir', ['seguido'=>$followingUser->id]) }}">
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
																											<li class="mute-user-item">
																												<button type="button" class="dropdown-link">Silenciar a 
														
																													<span class="username u-dir u-textTruncate" dir="ltr">@
															
																														<b>{{$followingUser->username}}</b>
																													</span>
																												</button>
																											</li>
																											<li class="unmute-user-item">
																												<button type="button" class="dropdown-link">Dejar de silenciar a 
														
																													<span class="username u-dir u-textTruncate" dir="ltr">@
															
																														<b>{{$followingUser->username}}</b>
																													</span>
																												</button>
																											</li>
																											<li class="block-text not-blocked">
																												<button type="button" class="dropdown-link">Bloquear a 
														
																													<span class="username u-dir u-textTruncate" dir="ltr">@
															
																														<b>{{$followingUser->username}}</b>
																													</span>
																												</button>
																											</li>
																											<li class="unblock-text">
																												<button type="button" class="dropdown-link">Desbloquear a 
														
																													<span class="username u-dir u-textTruncate" dir="ltr">@
															
																														<b>{{$followingUser->username}}</b>
																													</span>
																												</button>
																											</li>
																											<li class="report-text">
																												<button type="button" class="dropdown-link">Reportar a 
														
																													<span class="username u-dir u-textTruncate" dir="ltr">@
															
																														<b>{{$followingUser->username}}</b>
																													</span>
																												</button>
																											</li>
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