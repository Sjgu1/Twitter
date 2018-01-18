@extends('layouts.app')
@section('content')




<div class="PermalinkOverlay-modal" id="permalink-overlay-dialog" role="alertdialog" aria-labelledby="permalink-overlay-header" aria-describedby="permalink-overlay-body">
	<div class="js-first-tabstop" tabindex="0"></div>
	<div class="PermalinkOverlay-spinnerContainer u-hidden">
		<div class="PermalinkOverlay-spinner"></div>
	</div>
	<div class="PermalinkOverlay-content" role="document">
		<div class="PermalinkOverlay-body" id="permalink-overlay-body">
			<div class="permalink-container permalink-container--withArrows">
				<div role="main" class="permalink light-inline-actions stream-uncapped original-permalink-page  ">
					<div class="permalink-inner permalink-tweet-container">
						<div class="tweet permalink-tweet js-actionable-user js-actionable-tweet js-original-tweet has-cards has-content logged-in no-replies js-initial-focus focus" data-associated-tweet-id="953959478604517376" data-tweet-id="953959478604517376" data-item-id="953959478604517376" data-permalink-path="/{{$tweet->user->username}}/status/953959478604517376" data-conversation-id="953959478604517376" data-tweet-nonce="953959478604517376-ce353a00-268c-426d-9ec3-6382866643da" data-tweet-stat-initialized="true" data-screen-name="{{$tweet->user->username}}" data-name="{{$tweet->user->username}}" data-user-id="1770311" data-you-follow="true" data-follows-you="false" data-you-block="false" data-reply-to-users-json="[{&quot;id_str&quot;:&quot;1770311&quot;,&quot;screen_name&quot;:&quot;{{$tweet->user->username}}&quot;,&quot;name&quot;:&quot;{{$tweet->user->username}}&quot;,&quot;emojified_name&quot;:{&quot;text&quot;:&quot;{{$tweet->user->username}}&quot;,&quot;emojified_text_as_html&quot;:&quot;{{$tweet->user->username}}&quot;}}]" data-disclosure-type="" data-has-cards="true" tabindex="0">
							<div class="content clearfix">
								<div class="permalink-header">
									<a class="account-group js-account-group js-action-profile js-user-profile-link js-nav" href="/{{$tweet->user->username}}" data-user-id="1770311">
										<img class="avatar js-action-profile-avatar" src="{{$tweet->user->avatar}}" alt="">
											<span class="FullNameGroup">
												<strong class="fullname show-popup-with-id u-textTruncate " data-aria-label-part="">{{$tweet->user->username}}</strong>
												<span>‏</span>
												<span class="UserNameBreak">&nbsp;</span>
											</span>
											<span class="username u-dir u-textTruncate" dir="ltr" data-aria-label-part="">@
												
												
												<b>{{$tweet->user->username}}</b>
											</span>
										</a>
                                        @if(Auth::id() == $user->id)
                                        
										
										<div class="ProfileTweet-action ProfileTweet-action--more js-more-ProfileTweet-actions">
											<div class="dropdown">
												<button data-toggle="dropdown" class="ProfileTweet-actionButton u-textUserColorHover dropdown-toggle js-dropdown-toggle" type="button" aria-haspopup="true">
													<div class="IconContainer js-tooltip" data-original-title="Más">
														<span class="Icon Icon--caretDownLight Icon--small"></span>
														<span class="u-hiddenVisually">Más</span>
													</div>
												</button>
												<div class="dropdown-menu is-autoCentered">
													<div class="js-first-tabstop" tabindex="0"></div>
													<div class="dropdown-caret">
														<div class="caret-outer"></div>
														<div class="caret-inner"></div>
													</div>
													<ul tabindex="-1" role="menu" aria-labelledby="menu-1" aria-hidden="false">
														<li class="js-actionDelete" role="presentation">
															<button type="button" class="dropdown-link" style="min-width:-webkit-fill-available;" role="menuitem">Eliminar Tweet</button>
														</li>
													</ul>
													<div class="js-last-tabstop" tabindex="0"></div>
												</div>
											</div>
										</div>
                                        @endif
										
										
										<div class="follow-bar">

                                        @if(Auth::id() != $user->id)
                                            @if($usuarioConectadoFollowing == true)
											
											
											<div class="user-actions btn-group following not-muting can-dm including  " data-user-id="1770311" data-screen-name="{{$tweet->user->username}}" data-name="{{$tweet->user->username}}" data-protected="false">
											@else
											
												
												<div class="user-actions btn-group not-following  can-dm including  " data-user-id="1770311" data-screen-name="{{$tweet->user->username}}" data-name="{{$tweet->user->username}}" data-protected="false">

                                            @endif
                                                
                                                
													
													<span class="user-actions-follow-button js-follow-btn follow-button">
														<a href="{{ action('HomeController@seguir', ['seguido'=>$tweet->user->id]) }}"type="button" class="EdgeButton EdgeButton--secondary EdgeButton--medium  button-text follow-text">
															<span aria-hidden="true">Seguir</span>
															<span class="u-hiddenVisually">Seguir a 
															
																
																<span class="username u-dir u-textTruncate" dir="ltr">@
																
																	
																	<b>{{$tweet->user->username}}</b>
																</span>
															</span>
														</a>
														<button type="button" class="EdgeButton EdgeButton--primary EdgeButton--medium button-text following-text">
															<span aria-hidden="true">Siguiendo</span>
															<span class="u-hiddenVisually">Siguiendo a 
															
																
																<span class="username u-dir u-textTruncate" dir="ltr">@
																
																	
																	<b>{{$tweet->user->username}}</b>
																</span>
															</span>
														</button>
														<a  href="{{ action('HomeController@dejarDeSeguir', ['seguido'=>$tweet->user->id]) }}" type="button" class="EdgeButton EdgeButton--danger EdgeButton--medium  button-text unfollow-text">
															<span aria-hidden="true">Dejar de seguir</span>
															<span class="u-hiddenVisually">Dejar de seguir a 
															
																
																<span class="username u-dir u-textTruncate" dir="ltr">@
																
																	
																	<b>{{$tweet->user->username}}</b>
																</span>
															</span>
														</a>
													</span>
												</div>
                                            @endif
										
											
											</div>
										</div>
									</div>
									<div class="js-tweet-text-container">
										<p class="TweetTextSize TweetTextSize--jumbo js-tweet-text tweet-text" lang="es" data-aria-label-part="0">{{$tweet->mensaje}}
									</p>
									</div>
									<div class="AdaptiveMediaOuterContainer">
										<div class="js-tweet-details-fixer tweet-details-fixer">
											<div class="client-and-actions">
												<span class="metadata">
													<span>{{$tweet->fecha}}</span>
												</span>
											</div>
											<div class="js-machine-translated-tweet-container"></div>
											<div class="js-tweet-stats-container tweet-stats-container"></div>
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
                                            @foreach(Auth::user()->retweets as $reTweetUsuario)
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
                                                <a href="{{ action('HomeController@removeRT', ['tweet'=>$tweet->id]) }}" class="ProfileTweet-actionButton"  style="color:#17bf63;"data-modal="ProfileTweet-retweet" type="button" aria-describedby="profile-tweet-action-retweet-count-aria-951439183674998785">
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
                                                <div class="ProfileTweet-action">
                                                <?php $haDadoLike=false ?>
                                                @foreach(Auth::user()->likes as $likesUsuario)
                                            <?php $haDadoLike=false ?>
                                                @if($tweet->id == $likesUsuario->id)
                                                <?php $haDadoLike=true ?>
                                                @break
                                                @endif


                                            @endforeach
                                            @if($haDadoLike == false)
                                            <a href="{{ action('HomeController@addLike', ['tweet'=>$tweet->id]) }}" class="ProfileTweet-actionButton " type="button" aria-describedby="profile-tweet-action-favorite-count-aria-951439183674998785">
                                                <div class="IconContainer js-tooltip" data-original-title="Me gusta">
                                                <span role="presentation" class="Icon Icon--heart Icon--medium"></span>
                                                <div class="HeartAnimation"></div>
                                                <span class="u-hiddenVisually">Me gusta</span>
                                                </div>
                                                <span class="ProfileTweet-actionCount ProfileTweet-actionCount--isZero">
                                                <span class="ProfileTweet-actionCountForPresentation" aria-hidden="true">{{$tweet->likesUsers()->count()}}

                                                </span>
                                            </span>

                                            </a>

                                            @else
                                            <a  style="color:#e0245e;" href="{{ action('HomeController@removeLike', ['tweet'=>$tweet->id]) }}" class="ProfileTweet-actionButton " type="button" aria-describedby="profile-tweet-action-favorite-count-aria-951439183674998785">
                                                <div  style="color:#e0245e;"class="IconContainer js-tooltip" data-original-title="Deshacer me gusta">
                                                <span  style="color:#e0245e;"role="presentation" class="Icon Icon--heart Icon--medium"></span>
                                                <div class="HeartAnimation" style=" background-position: right;"></div>
                                                <span class="u-hiddenVisually">Deshacer me gusta</span>
                                                </div>
                                                <span class="ProfileTweet-actionCount ProfileTweet-actionCount--isZero">
                                                <span  style="color:#e0245e;" class="ProfileTweet-actionCountForPresentation" aria-hidden="true">
                                                 <!-- Poner aqui el numero de megustas -->{{$tweet->likesUsers()->count()}}

                                                </span>
                                            </span>
                                            </a>
                                            @endif

                                            </div>
                                            </div>

                                        </div>
										</div>
										<div class="permalink-footer"></div>
									</div>
								</div>
								<div class="permalink-footer"></div>
							</div>
						</div>
					</div>
					<div class="js-last-tabstop" tabindex="0"></div>
				</div>
			</div>
		</div>
	</div>
</div>

  @endsection