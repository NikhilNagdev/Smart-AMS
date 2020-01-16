<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('assets/img/icon.ico')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
WebFont.load({
			google: {"families":["Poppins:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{asset('assets/css/fonts.css')}}']},
			active: function() {
    sessionStorage.fonts = true;
}
		});
	</script>

	<!-- CSS Files -->
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/azzara.min.css')}}">
	<style>
		.custom-circle-loader {
			margin-bottom: 1em;
			border: 1px solid rgba(0, 0, 0, 0.2);
			border-left-color: #5cb85c;
			animation: loader-spin 1.2s infinite linear;
			position: relative;
			display: inline-block;
			vertical-align: top;
			border-radius: 50%;
			width: 2em;
			height: 2em;
		}

		.load-complete {
			-webkit-animation: none;
			animation: none;
			border-color: #5cb85c;
			transition: border 500ms ease-out;
		}

		.custom-checkmark {
			display: none;
		}
		.custom-checkmark.custom-draw:after {
			animation-duration: 800ms;
			animation-timing-function: ease;
			animation-name: checkmark;
			transform: scaleX(-1) rotate(135deg);
		}
		.custom-checkmark:after {
			opacity: 1;
			height: 1em;
			width: 0.5em;
			transform-origin: left top;
			border-right: 3px solid #5cb85c;
			border-top: 3px solid #5cb85c;
			content: '';
			left: 0.5em;
			top: 1em;
			position: absolute;
		}

		@keyframes loader-spin {
			0% {
				transform: rotate(0deg);
			}
			100% {
				transform: rotate(360deg);
			}
		}
		@keyframes custom-checkmark {
			0% {
				height: 0;
				width: 0;
				opacity: 1;
			}
			20% {
				height: 0;
				width: 0.5em;
				opacity: 1;
			}
			40% {
				height: 1em;
				width: 0.5em;
				opacity: 1;
			}
			100% {
				height: 1em;
				width: 0.5em;
				opacity: 1;
			}
		}

	</style>
</head>
<body>
<div class="wrapper">
@include('layout.navigation')
@include('layout.sidebar')
@yield('main-panel')
</div>
@include('layout.core-scripts')
</body>
