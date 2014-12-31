<style>
	#wp-admin-bar-wpmsq-ab-link {
		position: static !important;
		width: 100%;
		max-width: 190px;
	}
	#wp-admin-bar-wpmsq-ab-link .ab-item.ab-empty-item {
		color: rgb(116, 116, 116);
	}
	#wp-admin-bar-wpmsq-ab-link:hover #wpmsq-user{
		opacity: 1;
		transform: translateY(0px);
	}
	#wpmsq-user {
		opacity: 0;
		transform: translateY(-35px);
		transition: all 100ms ease-in;
		background: rgb(51, 51, 51);
		padding: 8px;
		border-radius: 0 0 2px 2px;
		border-width: 0 1px 1px 1px;
		border-style: solid;
		border-color: #222;
	}

	/* Loader - http://tobiasahlin.com/spinkit/ */
	#wpadminbar .three-bounce {
		width: 100%;
		display: inline-block;
		position: relative;
		-webkit-transition: all 0.3s ease-in-out 0s;
		transition: all 0.3s ease-in-out 0s;
		font-size: 26px;
		text-align: center;
	}

	#wpadminbar .three-bounce > div {
		display: inline-block;
		width: 18px;
		height: 18px;
		border-radius: 100%;
		background-color: #5C5C5C;

		-webkit-animation: bouncedelay 1.4s infinite ease-in-out;
		animation: bouncedelay 1.4s infinite ease-in-out;
		/* Prevent first frame from flickering when animation starts */
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both;
	}

	#wpadminbar .three-bounce .one {
		-webkit-animation-delay: -0.32s;
		animation-delay: -0.32s;
	}

	#wpadminbar .three-bounce .two {
		-webkit-animation-delay: -0.16s;
		animation-delay: -0.16s;
	}

	@-webkit-keyframes bouncedelay {
		0%, 80%, 100% { -webkit-transform: scale(0.0) }
		40% { -webkit-transform: scale(1.0) }
	}

	@keyframes bouncedelay {
		0%, 80%, 100% {
			transform: scale(0.0);
			-webkit-transform: scale(0.0);
		} 40% {
			  transform: scale(1.0);
			  -webkit-transform: scale(1.0);
		  }
	}
</style>

<form id="wpmsq-user">
	<div class="three-bounce">
		<div class="one"></div>
		<div class="two"></div>
		<div class="three"></div>
	</div>
	<select name="wpmsq-user" id="wpmsq-user-input" style="display:none;"></select>
</form>