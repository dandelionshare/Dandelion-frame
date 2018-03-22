<?php
/**
 * Created by PhpStorm.
 * User: DandelionShare
 * Date: 2018/3/22
 * Time: 14:20
 */
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dreams</title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<style>
		html {
			box-sizing: border-box;
		}

		* {
			-webkit-tap-highlight-color: rgba(255, 255, 255, 0);
			-webkit-tap-highlight-color: transparent;
			box-sizing: inherit;
		}

		*:before, *:after {
			box-sizing: inherit;
		}

		table {
			width: 100%;
		}

		iframe {
			border: 0;
			height: 100%;
			width: 100%;
		}

		button {
			background: transparent;
			border: 0;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
		}

		small {
			display: block;
		}

		fieldset {
			margin: 0;
		}

		input,
		fieldset {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			border: 0;
			padding: 0;
			margin: 0;
			min-width: 0;
			font-size: 1.0rem;
			font-family: inherit;
		}

		input[type='number'] {
			-moz-appearance: textfield;
		}

		input[type='number']::-webkit-inner-spin-button,
		input[type='number']::-webkit-outer-spin-button {
			-webkit-appearance: none;
			appearance: none;
		}

		img {
			display: block;
			height: auto;
			max-height: 100%;
			-o-object-fit: cover;
			object-fit: cover;
			width: 100%;
		}

		svg {
			display: block;
			pointer-events: none;
		}

		a {
			color: inherit;
			display: block;
			text-decoration: none;
		}

		p > a {
			display: inline;
			font-family: inherit;
			font-size: inherit;
			font-style: inherit;
		}

		ul, ol {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		/* type.scss */
		html {
			font-size: 62.5%;
			line-height: 1.5;
		}

		body, h1, h2, h3, h4, h5, h6, label, button, input, select, textarea, li, a, strong, i, span, th, td {
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			font-size: 1.6rem;
			font-weight: 300;
			text-rendering: optimizeSpeed;
		}

		h1 {
			font-weight: 900;
		}

		h1, h2, h3, h4, h5, h6 {
			line-height: 1.125;
			margin-top: 0;
			text-rendering: optimizeLegibility;
		}

		p + p {
			margin-top: 1.5em;
		}

		/* mixins.scss */
		/* z_index.scss */
		/* utility.scss */
		.u-m0 {
			margin: 0;
		}

		.u-mt0 {
			margin-top: 0;
		}

		.u-mr0 {
			margin-right: 0;
		}

		.u-mb0 {
			margin-bottom: 0;
		}

		.u-ml0 {
			margin-left: 0;
		}

		.u-m05 {
			margin: 5px;
		}

		.u-m1 {
			margin: 10px;
		}

		.u-mt1 {
			margin-top: 10px;
		}

		.u-mr1 {
			margin-right: 10px;
		}

		.u-mb1 {
			margin-bottom: 10px;
		}

		.u-ml1 {
			margin-left: 10px;
		}

		.u-m2 {
			margin: 20px;
		}

		.u-mt2 {
			margin-top: 20px;
		}

		.u-mr2 {
			margin-right: 20px;
		}

		.u-mb2 {
			margin-bottom: 20px;
		}

		.u-ml2 {
			margin-left: 20px;
		}

		.u-p0 {
			padding: 0;
		}

		.u-pt0 {
			padding-top: 0;
		}

		.u-pr0 {
			padding-right: 0;
		}

		.u-pb0 {
			padding-bottom: 0;
		}

		.u-pl0 {
			padding-left: 0;
		}

		.u-p1 {
			padding: 10px;
		}

		.u-pt1 {
			padding-top: 12px;
		}

		.u-pr1 {
			padding-right: 12px;
		}

		.u-pb1 {
			padding-bottom: 12px;
		}

		.u-pl1 {
			padding-left: 12px;
		}

		.u-p2 {
			padding: 20px;
		}

		.u-pt2 {
			padding-top: 20px;
		}

		.u-pr2 {
			padding-right: 20px;
		}

		.u-pb2 {
			padding-bottom: 20px;
		}

		.u-pl2 {
			padding-left: 20px;
		}

		.u-db {
			display: block;
		}

		.u-show {
			display: block !important;
		}

		.u-show-dib {
			display: inline-block !important;
		}

		.u-dn {
			display: none;
		}

		.u-hide {
			display: none !important;
		}

		.u-hide-off-canvas {
			position: absolute;
			top: 0;
			-webkit-transform: translateX(3000px);
			transform: translateX(3000px);
		}

		.u-dib {
			display: inline-block;
		}

		.u-fl {
			float: left;
		}

		.u-full-height {
			min-height: 100vh;
		}

		.u-full-width-break-container {
			margin-left: calc(-50vw + 50%);
			width: 100vw;
		}

		.u-relative {
			position: relative;
		}

		.u-absolute {
			position: absolute;
		}

		.u-fixed {
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden;
			position: fixed;
		}

		.u-pos-t0 {
			top: 0;
		}

		.u-pos-r0 {
			right: 0;
		}

		.u-pos-b0 {
			bottom: 0;
		}

		.u-pos-l0 {
			left: 0;
		}

		.u-pos-tr0 {
			top: 0;
			right: 0;
			bottom: auto;
			left: auto;
		}

		.u-pos-tl0 {
			top: 0;
			right: auto;
			bottom: auto;
			left: 0;
		}

		.u-pos-br0 {
			top: auto;
			right: 0;
			bottom: 0;
			left: auto;
		}

		.u-pos-bl0 {
			top: auto;
			right: auto;
			bottom: 0;
			left: 0;
		}

		.u-pos-tr10 {
			top: 10px;
			right: 10px;
		}

		.u-pos-tl10 {
			top: 10px;
			left: 10px;
		}

		.u-pos-br10 {
			bottom: 10px;
			right: 10px;
		}

		.u-pos-bl10 {
			bottom: 10px;
			left: 10px;
		}

		.u-pos-c {
			left: 0;
			margin: 0 auto;
			position: absolute;
			right: 0;
		}

		.u-b-radius {
			border-radius: 3px;
		}

		.u-b-radius-round {
			border-radius: 50%;
		}

		.u-b-radius-big {
			border-radius: 40px;
		}

		.u-b-radius-top {
			border-radius: 3px 3px 0 0;
		}

		.u-b-radius-bottom {
			border-radius: 0 0 3px 3px;
		}

		.u-b-radius-right {
			border-radius: 0 3px 3px 0;
		}

		.u-b-radius-left {
			border-radius: 3px 0 0 3px;
		}

		.u-oh {
			overflow: hidden;
		}

		.u-truncate {
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
		}

		.u-div-c {
			margin: 0 auto;
		}

		.u-text-c {
			text-align: center;
		}

		.u-text-r {
			text-align: right;
		}

		.u-cursor-hand {
			cursor: pointer;
		}

		.u-text-small {
			font-size: 1.2rem;
		}

		.u-text-disclaimer {
			font-size: 1.2rem;
			font-style: italic;
		}

		.u-btn-wrapper {
			padding: 15px 12px;
			-webkit-transition: -webkit-transform 0.5s;
			transition: -webkit-transform 0.5s;
			transition: transform 0.5s;
			transition: transform 0.5s, -webkit-transform 0.5s;
			z-index: 2;
		}

		/* grid.scss */
		.grid-u,
		[class*="grid-u-"] {
			display: inline-block;
			letter-spacing: normal;
			vertical-align: top;
			word-spacing: normal;
			zoom: 1;
		}

		.grid-r {
			word-spacing: -0.34em;
		}

		.opera-only :-o-prefocus,
		.grid-r {
			/* Opera 12 on Windows needs word-spacing. The ".opera-only" selector is used to prevent actual prefocus styling and is not required in markup. */
			word-spacing: -0.43em;
		}

		@media (min-width: 25em) {
			.grid-u-sm-1-5 {
				width: 20%;
			}

			.grid-u-sm-1-4,
			.grid-u-sm-3-12 {
				width: 25%;
			}

			.grid-u-sm-1-3,
			.grid-u-sm-4-12 {
				width: 33.3333%;
			}

			.grid-u-sm-2-5 {
				width: 40%;
			}

			.grid-u-sm-1-2,
			.grid-u-sm-6-12 {
				width: 50%;
			}

			.grid-u-sm-3-5 {
				width: 60%;
			}

			.grid-u-sm-2-3,
			.grid-u-sm-4-6,
			.grid-u-sm-8-12 {
				width: 66.6667%;
			}

			.grid-u-sm-3-4,
			.grid-u-sm-9-12 {
				width: 75%;
			}

			.grid-u-sm-1 {
				width: 100%;
			}
		}
		@media (min-width: 34.375em) {
			.grid-u-md-1-5 {
				width: 20%;
			}

			.grid-u-md-1-4,
			.grid-u-md-3-12 {
				width: 25%;
			}

			.grid-u-md-1-3,
			.grid-u-md-4-12 {
				width: 33.3333%;
			}

			.grid-u-md-2-5 {
				width: 40%;
			}

			.grid-u-md-1-2,
			.grid-u-md-6-12 {
				width: 50%;
			}

			.grid-u-md-3-5 {
				width: 60%;
			}

			.grid-u-md-2-3,
			.grid-u-md-4-6,
			.grid-u-md-8-12 {
				width: 66.6667%;
			}

			.grid-u-md-3-4,
			.grid-u-md-9-12 {
				width: 75%;
			}

			.grid-u-md-1 {
				width: 100%;
			}
		}
		@media (min-width: 46.875em) {
			.grid-u-lg-1-5 {
				width: 20%;
			}

			.grid-u-lg-1-4,
			.grid-u-lg-3-12 {
				width: 25%;
			}

			.grid-u-lg-1-3,
			.grid-u-lg-4-12 {
				width: 33.3333%;
			}

			.grid-u-lg-2-5 {
				width: 40%;
			}

			.grid-u-lg-1-2,
			.grid-u-lg-6-12 {
				width: 50%;
			}

			.grid-u-lg-3-5 {
				width: 60%;
			}

			.grid-u-lg-2-3,
			.grid-u-lg-4-6,
			.grid-u-lg-8-12 {
				width: 66.6667%;
			}

			.grid-u-lg-3-4,
			.grid-u-lg-9-12 {
				width: 75%;
			}

			.grid-u-lg-1 {
				width: 100%;
			}
		}
		@media (min-width: 62.5em) {
			.grid-u-xl-1-5 {
				width: 20%;
			}

			.grid-u-xl-1-4,
			.grid-u-xl-3-12 {
				width: 25%;
			}

			.grid-u-xl-1-3,
			.grid-u-xl-4-12 {
				width: 33.3333%;
			}

			.grid-u-xl-2-5 {
				width: 40%;
			}

			.grid-u-xl-1-2,
			.grid-u-xl-6-12 {
				width: 50%;
			}

			.grid-u-xl-3-5 {
				width: 60%;
			}

			.grid-u-xl-2-3,
			.grid-u-xl-4-6,
			.grid-u-xl-8-12 {
				width: 66.6667%;
			}

			.grid-u-xl-3-4,
			.grid-u-xl-9-12 {
				width: 75%;
			}

			.grid-u-xl-1 {
				width: 100%;
			}
		}
		/* icons.scss */
		@font-face {
			font-family: 'comeon-iconset';
			src: url("https://dl.dropboxusercontent.com/u/26351585/Comeon/comeon-iconfamily.woff2") format("woff2");
			src: url("https://dl.dropboxusercontent.com/u/26351585/Comeon/comeon-iconfamily.woff") format("woff");
			font-weight: normal;
			font-style: normal;
		}
		.btn--error {
			/* overrides for Error State */
		}

		.btn--in-progress {
			/* overrides for In Progress State */
		}

		.no-touchevents .btn.btn--main-cta:hover {
			-webkit-transform: scale(1.03);
			transform: scale(1.03);
		}
		.no-touchevents .btn.btn--secondary:hover {
			-webkit-transform: none;
			transform: none;
		}

		body {
			background-color: #1abc9c;
		}

		.flex-c-c {
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
			height: 30rem;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
		}

		.ui-field,
		.ui-button {
			border-radius: .7rem;
			height: 4rem;
			-webkit-transition: all 300ms ease;
			transition: all 300ms ease;
			width: 25rem;
		}
		.ui-field--hidden,
		.ui-button--hidden {
			height: 0;
			margin: 0;
		}

		.select__list {
			display: -webkit-inline-box;
			display: -ms-inline-flexbox;
			display: inline-flex;
			-webkit-box-pack: justify;
			-ms-flex-pack: justify;
			justify-content: space-between;
			margin-bottom: 1rem;
		}

		.select__label {
			color: #fff;
			cursor: pointer;
			font-weight: 500;
			opacity: 0.6;
			padding: 0 2rem;
			text-transform: capitalize;
		}
		.select__label--active {
			opacity: 1;
		}

		input {
			background-color: #fff;
			margin: .5rem 0;
			text-transform: capitalize;
			text-align: center;
		}

		textarea:focus,
		input:focus {
			outline-color: #fff;
		}

		.pointer {
			border-left: 1rem solid transparent;
			border-right: 1rem solid transparent;
			border-bottom: 1rem solid #fff;
			height: 0;
			position: relative;
			top: .6rem;
			-webkit-transition: all 30s ease;
			transition: all 30s ease;
			width: 0;
		}
		.pointer.--usr-rtn {
			right: 9rem;
		}
		.pointer.--usr-rst {
			left: 9.5rem;
		}

		button {
			background: #16a085;
			color: #fff;
			cursor: pointer;
			font-weight: 500;
			margin: .5rem 0;
			text-transform: capitalize;
			-webkit-transition: background 300ms;
			transition: background 300ms;
		}
		button:hover {
			background: #138a72;
		}
		button.--usr-rtn::before {
			content: '登录';
		}
		button.--usr-new::before {
			content: "注册";
		}
		button.--usr-rst::before {
			content: "重置密码";
		}
	</style>

</head>
<body>

<div class="wrap flex-c-c" style="margin-top: 100px">
	<form action="" method="post" class="flex-c-c">
		<ul class="select__list">
			<li id="js-usr-rtn" class="select__label">登录</li>
			<li id="js-usr-new" class="select__label select__label--active">注册</li>
			<li id="js-usr-rst" class="select__label">忘记密码</li>
		</ul>
		<span class="pointer"></span>
		<input type="email" name="email" placeholder="邮箱" class="ui-field" id="js-field__email" />
		<input type="password" name="passwordone" placeholder="密码" class="ui-field" id="js-field__pass" />
		<input type="password" name="passwordtwo" placeholder="确认密码" class="ui-field" id="js-field__r-pass" />
		<button id="js-btn" class="ui-button --usr-new"></button>
	</form>
</div>

<script>
    //to-do. dry-up & remove jq
    $('.select__label').click(function() {
        $('.select__label').removeClass('select__label--active');
        $(this).addClass('select__label--active');
    });

    $('#js-usr-rtn').click(function() {
        $('#js-btn, .pointer, #js-field__pass').removeClass('--usr-new --usr-rst ui-field--hidden');
        $('#js-btn, .pointer').addClass('--usr-rtn');
        $('#js-field__r-pass').addClass('ui-field--hidden');
    });
    $('#js-usr-new').click(function() {
        $('#js-btn, .pointer, #js-field__r-pass, #js-field__pass').removeClass('--usr-rtn --usr-rst ui-field--hidden');
        $('#js-btn').addClass('--usr-new');
    });
    $('#js-usr-rst').click(function() {
        $('#js-btn, .pointer').removeClass('--usr-rtn --usr-new');
        $('#js-btn, .pointer').addClass('--usr-rst');
        $('#js-field__r-pass, #js-field__pass').addClass('ui-field--hidden');
    });
</script>
</body>
</html>
