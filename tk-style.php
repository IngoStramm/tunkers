<?php

add_action( 'wp_head', 'tk_style' );

function tk_style() {
	?>
	<style>
		.tk-pesquisa-produto {
			display: block;
			position: relative;
			margin: auto;
			padding: 20px 0;
		}

			.tk-pesquisa-produto ul {
				display: block;
				width: 100%;
				margin: auto;
				padding: 0;
			}

				.tk-pesquisa-produto ul li {
					display: block;
					width: 100%;
					margin: 0 auto 10px;
					padding: 0;
				}

			.tk-pesquisa-produto select,
			.tk-pesquisa-produto input {
				display: block;
				margin: auto;
				-webkit-border-radius: 0px;
				-moz-border-radius: 0px;
				border-radius: 0px;
			}

			.tk-pesquisa-produto input[type="submit"] {
				text-transform: uppercase;
				width: 100%;
				background-color: #fc0;
				border-color: #fc0;
				color: #000;
			}

			.tk-pesquisa-produto input[type="submit"]:active,
			.tk-pesquisa-produto input[type="submit"]:focus,
			.tk-pesquisa-produto input[type="submit"]:hover,
			.tk-pesquisa-produto input[type="submit"]:focus:hover {
				background-color: #000;
				color: #fc0;
			}

		@media ( min-width: 768px ) {
		
			.tk-pesquisa-produto ul {
				display: -webkit-flex;
				display: -moz-flex;
				display: -ms-flex;
				display: -o-flex;
				display: flex;
				justify-content: space-between;
				align-items: stretch;
				align-content: stretch;
			}
				.tk-pesquisa-produto ul li {
					flex-grow: 1;
					margin: 0 10px 0 0;
				}

				.tk-pesquisa-produto ul li:last-child {
					margin-right: 0;
				}

			.tk-pesquisa-produto input[type="submit"] {
			}
		
		}
	</style>
	<?php
}

add_action( 'wp_head', 'tks_archive_catalogo_style' );

function tks_archive_catalogo_style() {
	?>
	<style>
		/**handles:elementor-post-7211**/
		.catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-container {
		    max-width: 695px;
		    min-height: 0vh;
		}

		.catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-container:after {
		    content: "";
		    min-height: inherit;
		}

		.catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
		    align-content: center;
		    align-items: center;
		}

		.catalogo-virtual .elementor-element.catalogo-vitual-section {
		    overflow: hidden;
		    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
		    padding: 60px 0px 60px 0px;
		}

		.catalogo-virtual .elementor-element.catalogo-vitual-section:not(.elementor-motion-effects-element-type-background),
		.catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-motion-effects-container>.elementor-motion-effects-layer {
		    background-color: transparent;
		    background-image: linear-gradient(330deg, rgba(28, 28, 28, 0.59) 50%, rgba(255, 255, 255, 0) 0%);
		}

		.catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-background-overlay {
		    background-color: #ffcc00;
		    background-image: url("<?php echo TKS_URL; ?>images/catalogo-virtual-header.jpg");
		    background-position: center center;
		    background-repeat: no-repeat;
		    background-size: cover;
		    opacity: 1;
		    mix-blend-mode: screen;
		    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.catalogo-virtual .elementor-element.catalogo-vitual-section .elementor-background-overlay {
		    filter: brightness(39%) contrast(100%) saturate(100%) blur(0px) hue-rotate(0deg);
		}

		.catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-shape-bottom .elementor-shape-fill {
		    fill: rgba(28, 28, 28, 0.67);
		}

		.catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-shape-bottom svg {
		    height: 172px;
		}

		.catalogo-virtual .elementor-element.elementor-element-22230ea>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
		    margin-bottom: 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-22230ea>.elementor-element-populated {
		    margin: 0px 0px 0px 0px;
		    padding: 30px 30px 30px 30px;
		}

		.elementor-bc-flex-widget .catalogo-virtual .elementor-element.elementor-element-6acf107.elementor-column .elementor-column-wrap {
		    align-items: center;
		}

		.catalogo-virtual .elementor-element.elementor-element-6acf107.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
		    align-content: center;
		    align-items: center;
		}

		.catalogo-virtual .elementor-element.elementor-element-6acf107>.elementor-element-populated {
		    padding: 0px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-59aef1ca {
		    text-align: center;
		}

		.catalogo-virtual .elementor-element.elementor-element-59aef1ca.elementor-widget-heading .elementor-heading-title {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-59aef1ca .elementor-heading-title {
		    font-family: "Oswald", Sans-serif;
		    font-size: 82px;
		    font-weight: 300;
		    text-transform: uppercase;
		    line-height: 1.2em;
		    letter-spacing: 2.4px;
		}

		.catalogo-virtual .elementor-element.elementor-element-59aef1ca>.elementor-widget-container {
		    margin: 0px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-14f54f32 {
		    text-align: center;
		}

		.catalogo-virtual .elementor-element.elementor-element-14f54f32.elementor-widget-heading .elementor-heading-title {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-14f54f32 .elementor-heading-title {
		    font-family: "Oswald", Sans-serif;
		    font-size: 16px;
		    font-weight: 300;
		    text-transform: uppercase;
		    letter-spacing: 2.4px;
		}

		.catalogo-virtual .elementor-element.elementor-element-14f54f32>.elementor-widget-container {
		    margin: 40px 0px 13px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-2ba9583c {
		    --divider-border-style: solid;
		    --divider-border-color: rgba(99, 115, 129, 0.34);
		    --divider-border-width: 3px;
		}

		.catalogo-virtual .elementor-element.elementor-element-2ba9583c .elementor-divider-separator {
		    width: 85%;
		    margin: 0 auto;
		    margin-center: 0;
		}

		.catalogo-virtual .elementor-element.elementor-element-2ba9583c .elementor-divider {
		    text-align: center;
		    padding-top: 4px;
		    padding-bottom: 4px;
		}

		.catalogo-virtual .elementor-element.elementor-element-2ba9583c>.elementor-widget-container {
		    margin: 0px 0px 20px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-2ac18ac>.elementor-container {
		    min-height: 558px;
		}

		.catalogo-virtual .elementor-element.elementor-element-2ac18ac>.elementor-container:after {
		    content: "";
		    min-height: inherit;
		}

		.catalogo-virtual .elementor-element.elementor-element-2ac18ac:not(.elementor-motion-effects-element-type-background),
		.catalogo-virtual .elementor-element.elementor-element-2ac18ac>.elementor-motion-effects-container>.elementor-motion-effects-layer {
		    background-color: #ffcc00;
		}

		.catalogo-virtual .elementor-element.elementor-element-2ac18ac {
		    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
		    padding: 100px 0px 100px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-2ac18ac>.elementor-background-overlay {
		    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.catalogo-virtual .elementor-element.elementor-element-a265140.elementor-widget-heading .elementor-heading-title {
		    color: #000000;
		}

		.catalogo-virtual .elementor-element.elementor-element-a265140 .elementor-heading-title {
		    font-family: "Oswald", Sans-serif;
		    font-weight: 400;
		    text-transform: uppercase;
		    letter-spacing: 3.3px;
		}

		.catalogo-virtual .elementor-element.elementor-element-a265140>.elementor-widget-container {
		    padding: 13px 13px 13px 13px;
		}

		.catalogo-virtual .elementor-element.elementor-element-5da5f9ae {
		    margin-top: 0px;
		    margin-bottom: 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-37d58a4a:not(.elementor-motion-effects-element-type-background)>.elementor-element-populated,
		.catalogo-virtual .elementor-element.elementor-element-37d58a4a>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
		    background-color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-37d58a4a>.elementor-element-populated>.elementor-background-overlay {
		    background-color: transparent;
		    background-image: linear-gradient(210deg, rgba(12, 12, 12, 0.81) 0%, #000000 100%);
		    opacity: 0.86;
		    filter: brightness(100%) contrast(105%) saturate(80%) blur(0px) hue-rotate(0deg);
		}

		.catalogo-virtual .elementor-element.elementor-element-37d58a4a:hover>.elementor-element-populated>.elementor-background-overlay {
		    background-color: rgba(0, 0, 0, 0.7);
		    opacity: 0.6;
		    filter: brightness(100%) contrast(100%) saturate(100%) blur(0px) hue-rotate(0deg);
		}

		.catalogo-virtual .elementor-element.elementor-element-37d58a4a>.elementor-element-populated {
		    transition: background 0.3s, border 0s, border-radius 0s, box-shadow 0s;
		    margin: 14px 14px 14px 14px;
		}

		.catalogo-virtual .elementor-element.elementor-element-37d58a4a>.elementor-element-populated>.elementor-background-overlay {
		    transition: background 0.5s, border-radius 0s, opacity 0.5s;
		}

		.catalogo-virtual .elementor-element.elementor-element-6684bc8d>.elementor-widget-container {
		    padding: 69px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-5fab10ec {
		    text-align: center;
		}

		.catalogo-virtual .elementor-element.elementor-element-5fab10ec.elementor-widget-heading .elementor-heading-title {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-5fab10ec .elementor-heading-title {
		    font-family: "Oswald", Sans-serif;
		    font-size: 23px;
		    font-weight: 300;
		    text-transform: uppercase;
		    line-height: 1.4em;
		    letter-spacing: 2px;
		}

		.catalogo-virtual .elementor-element.elementor-element-5fab10ec>.elementor-widget-container {
		    margin: 0px 10px 0px 10px;
		    border-style: solid;
		    border-width: 0px 0px 0px 4px;
		    border-color: #ffcc00;
		    border-radius: 0px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-23554487 a.elementor-button,
		.catalogo-virtual .elementor-element.elementor-element-23554487 .elementor-button {
		    font-family: "Oswald", Sans-serif;
		    font-size: 12px;
		    font-weight: 300;
		    text-transform: uppercase;
		    letter-spacing: 5.5px;
		    fill: #ffed00;
		    color: #ffed00;
		    background-color: rgba(0, 0, 0, 0);
		}

		.catalogo-virtual .elementor-element.elementor-element-23554487 a.elementor-button:hover,
		.catalogo-virtual .elementor-element.elementor-element-23554487 .elementor-button:hover,
		.catalogo-virtual .elementor-element.elementor-element-23554487 a.elementor-button:focus,
		.catalogo-virtual .elementor-element.elementor-element-23554487 .elementor-button:focus {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-23554487 a.elementor-button:hover svg,
		.catalogo-virtual .elementor-element.elementor-element-23554487 .elementor-button:hover svg,
		.catalogo-virtual .elementor-element.elementor-element-23554487 a.elementor-button:focus svg,
		.catalogo-virtual .elementor-element.elementor-element-23554487 .elementor-button:focus svg {
		    fill: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-4202276f:not(.elementor-motion-effects-element-type-background)>.elementor-element-populated,
		.catalogo-virtual .elementor-element.elementor-element-4202276f>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
		    background-color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-4202276f>.elementor-element-populated>.elementor-background-overlay {
		    background-color: transparent;
		    background-image: linear-gradient(210deg, rgba(12, 12, 12, 0.81) 0%, #000000 100%);
		    opacity: 0.86;
		    filter: brightness(100%) contrast(105%) saturate(80%) blur(0px) hue-rotate(0deg);
		}

		.catalogo-virtual .elementor-element.elementor-element-4202276f:hover>.elementor-element-populated>.elementor-background-overlay {
		    background-color: rgba(0, 0, 0, 0.7);
		    opacity: 0.6;
		    filter: brightness(100%) contrast(100%) saturate(100%) blur(0px) hue-rotate(0deg);
		}

		.catalogo-virtual .elementor-element.elementor-element-4202276f>.elementor-element-populated {
		    transition: background 0.3s, border 0s, border-radius 0s, box-shadow 0s;
		    margin: 14px 14px 14px 14px;
		}

		.catalogo-virtual .elementor-element.elementor-element-4202276f>.elementor-element-populated>.elementor-background-overlay {
		    transition: background 0.5s, border-radius 0s, opacity 0.5s;
		}

		.catalogo-virtual .elementor-element.elementor-element-3038043a>.elementor-widget-container {
		    padding: 69px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-faf5a8e {
		    text-align: center;
		}

		.catalogo-virtual .elementor-element.elementor-element-faf5a8e.elementor-widget-heading .elementor-heading-title {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-faf5a8e .elementor-heading-title {
		    font-family: "Oswald", Sans-serif;
		    font-size: 23px;
		    font-weight: 300;
		    text-transform: uppercase;
		    line-height: 1.4em;
		    letter-spacing: 2px;
		}

		.catalogo-virtual .elementor-element.elementor-element-faf5a8e>.elementor-widget-container {
		    margin: 0px 10px 0px 10px;
		    border-style: solid;
		    border-width: 0px 0px 0px 4px;
		    border-color: #ffcc00;
		    border-radius: 0px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-3478e43e a.elementor-button,
		.catalogo-virtual .elementor-element.elementor-element-3478e43e .elementor-button {
		    font-family: "Oswald", Sans-serif;
		    font-size: 12px;
		    font-weight: 300;
		    text-transform: uppercase;
		    letter-spacing: 5.5px;
		    fill: #ffed00;
		    color: #ffed00;
		    background-color: rgba(0, 0, 0, 0);
		}

		.catalogo-virtual .elementor-element.elementor-element-3478e43e a.elementor-button:hover,
		.catalogo-virtual .elementor-element.elementor-element-3478e43e .elementor-button:hover,
		.catalogo-virtual .elementor-element.elementor-element-3478e43e a.elementor-button:focus,
		.catalogo-virtual .elementor-element.elementor-element-3478e43e .elementor-button:focus {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-3478e43e a.elementor-button:hover svg,
		.catalogo-virtual .elementor-element.elementor-element-3478e43e .elementor-button:hover svg,
		.catalogo-virtual .elementor-element.elementor-element-3478e43e a.elementor-button:focus svg,
		.catalogo-virtual .elementor-element.elementor-element-3478e43e .elementor-button:focus svg {
		    fill: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-1fc0fa7d:not(.elementor-motion-effects-element-type-background)>.elementor-element-populated,
		.catalogo-virtual .elementor-element.elementor-element-1fc0fa7d>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
		    background-color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-1fc0fa7d>.elementor-element-populated>.elementor-background-overlay {
		    background-color: transparent;
		    background-image: linear-gradient(210deg, rgba(12, 12, 12, 0.81) 0%, #000000 100%);
		    opacity: 0.86;
		    filter: brightness(100%) contrast(105%) saturate(80%) blur(0px) hue-rotate(0deg);
		}

		.catalogo-virtual .elementor-element.elementor-element-1fc0fa7d:hover>.elementor-element-populated>.elementor-background-overlay {
		    background-color: rgba(0, 0, 0, 0.7);
		    opacity: 0.6;
		    filter: brightness(100%) contrast(100%) saturate(100%) blur(0px) hue-rotate(0deg);
		}

		.catalogo-virtual .elementor-element.elementor-element-1fc0fa7d>.elementor-element-populated {
		    transition: background 0.3s, border 0s, border-radius 0s, box-shadow 0s;
		    margin: 14px 14px 14px 14px;
		}

		.catalogo-virtual .elementor-element.elementor-element-1fc0fa7d>.elementor-element-populated>.elementor-background-overlay {
		    transition: background 0.5s, border-radius 0s, opacity 0.5s;
		}

		.catalogo-virtual .elementor-element.elementor-element-5e2f82a6>.elementor-widget-container {
		    padding: 69px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-743bc84b {
		    text-align: center;
		}

		.catalogo-virtual .elementor-element.elementor-element-743bc84b.elementor-widget-heading .elementor-heading-title {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-743bc84b .elementor-heading-title {
		    font-family: "Oswald", Sans-serif;
		    font-size: 23px;
		    font-weight: 300;
		    text-transform: uppercase;
		    line-height: 1.4em;
		    letter-spacing: 2px;
		}

		.catalogo-virtual .elementor-element.elementor-element-743bc84b>.elementor-widget-container {
		    margin: 0px 10px 0px 10px;
		    border-style: solid;
		    border-width: 0px 0px 0px 4px;
		    border-color: #ffcc00;
		    border-radius: 0px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-8d552ad a.elementor-button,
		.catalogo-virtual .elementor-element.elementor-element-8d552ad .elementor-button {
		    font-family: "Oswald", Sans-serif;
		    font-size: 12px;
		    font-weight: 300;
		    text-transform: uppercase;
		    letter-spacing: 5.5px;
		    fill: #ffed00;
		    color: #ffed00;
		    background-color: rgba(0, 0, 0, 0);
		}

		.catalogo-virtual .elementor-element.elementor-element-8d552ad a.elementor-button:hover,
		.catalogo-virtual .elementor-element.elementor-element-8d552ad .elementor-button:hover,
		.catalogo-virtual .elementor-element.elementor-element-8d552ad a.elementor-button:focus,
		.catalogo-virtual .elementor-element.elementor-element-8d552ad .elementor-button:focus {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-8d552ad a.elementor-button:hover svg,
		.catalogo-virtual .elementor-element.elementor-element-8d552ad .elementor-button:hover svg,
		.catalogo-virtual .elementor-element.elementor-element-8d552ad a.elementor-button:focus svg,
		.catalogo-virtual .elementor-element.elementor-element-8d552ad .elementor-button:focus svg {
		    fill: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-7a4a203d:not(.elementor-motion-effects-element-type-background)>.elementor-element-populated,
		.catalogo-virtual .elementor-element.elementor-element-7a4a203d>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
		    background-color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-7a4a203d>.elementor-element-populated>.elementor-background-overlay {
		    background-color: transparent;
		    background-image: linear-gradient(210deg, rgba(12, 12, 12, 0.81) 0%, #000000 100%);
		    opacity: 0.86;
		    filter: brightness(100%) contrast(105%) saturate(80%) blur(0px) hue-rotate(0deg);
		}

		.catalogo-virtual .elementor-element.elementor-element-7a4a203d:hover>.elementor-element-populated>.elementor-background-overlay {
		    background-color: rgba(0, 0, 0, 0.7);
		    opacity: 0.6;
		    filter: brightness(100%) contrast(100%) saturate(100%) blur(0px) hue-rotate(0deg);
		}

		.catalogo-virtual .elementor-element.elementor-element-7a4a203d>.elementor-element-populated {
		    transition: background 0.3s, border 0s, border-radius 0s, box-shadow 0s;
		    margin: 14px 14px 14px 14px;
		}

		.catalogo-virtual .elementor-element.elementor-element-7a4a203d>.elementor-element-populated>.elementor-background-overlay {
		    transition: background 0.5s, border-radius 0s, opacity 0.5s;
		}

		.catalogo-virtual .elementor-element.elementor-element-e5c5e1e>.elementor-widget-container {
		    padding: 69px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-3600f913 {
		    text-align: center;
		}

		.catalogo-virtual .elementor-element.elementor-element-3600f913.elementor-widget-heading .elementor-heading-title {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-3600f913 .elementor-heading-title {
		    font-family: "Oswald", Sans-serif;
		    font-size: 23px;
		    font-weight: 300;
		    text-transform: uppercase;
		    line-height: 1.4em;
		    letter-spacing: 2px;
		}

		.catalogo-virtual .elementor-element.elementor-element-3600f913>.elementor-widget-container {
		    margin: 0px 10px 0px 10px;
		    border-style: solid;
		    border-width: 0px 0px 0px 4px;
		    border-color: #ffcc00;
		    border-radius: 0px 0px 0px 0px;
		}

		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 a.elementor-button,
		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 .elementor-button {
		    font-family: "Oswald", Sans-serif;
		    font-size: 12px;
		    font-weight: 300;
		    text-transform: uppercase;
		    letter-spacing: 5.5px;
		    fill: #ffed00;
		    color: #ffed00;
		    background-color: rgba(0, 0, 0, 0);
		}

		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 a.elementor-button:hover,
		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 .elementor-button:hover,
		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 a.elementor-button:focus,
		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 .elementor-button:focus {
		    color: #ffffff;
		}

		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 a.elementor-button:hover svg,
		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 .elementor-button:hover svg,
		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 a.elementor-button:focus svg,
		.catalogo-virtual .elementor-element.elementor-element-4e0d15b6 .elementor-button:focus svg {
		    fill: #ffffff;
		}

		body.elementor-page-7211 {
		    padding: 0px 0px 0px 0px;
		}

		@media(max-width:1024px) and (min-width:768px) {
		    .catalogo-virtual .elementor-element.elementor-element-22230ea {
		        width: 100%;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-37d58a4a {
		        width: 50%;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-4202276f {
		        width: 50%;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-1fc0fa7d {
		        width: 50%;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-7a4a203d {
		        width: 50%;
		    }
		}

		@media(min-width:1025px) {
		    .catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-background-overlay {
		        background-attachment: fixed;
		    }
		}

		@media(max-width:1024px) {
		    .catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-container {
		        min-height: 12vh;
		    }

		    .catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-container:after {
		        content: "";
		        min-height: inherit;
		    }

		    .catalogo-virtual .elementor-element.catalogo-vitual-section>.elementor-background-overlay {
		        background-position: top left;
		        background-size: cover;
		    }

		    .catalogo-virtual .elementor-element.catalogo-vitual-section {
		        padding: 80px 0px 22px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-22230ea>.elementor-element-populated {
		        padding: 20px 20px 20px 20px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-2be47a6b {
		        margin-top: 0px;
		        margin-bottom: 0px;
		        padding: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-59aef1ca .elementor-heading-title {
		        font-size: 66px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-14f54f32 .elementor-heading-title {
		        font-size: 13px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-2ba9583c .elementor-divider-separator {
		        width: 50%;
		        margin: 0 auto;
		        margin-center: 0;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-2ba9583c .elementor-divider {
		        text-align: center;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-2ac18ac {
		        padding: 10px 4px 10px 10px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-5da5f9ae {
		        margin-top: 0px;
		        margin-bottom: 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-37d58a4a>.elementor-element-populated {
		        margin: 10px 10px 10px 10px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-6684bc8d>.elementor-widget-container {
		        padding: 34px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-5fab10ec .elementor-heading-title {
		        font-size: 19px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-5fab10ec>.elementor-widget-container {
		        padding: 7px 7px 7px 7px;
		        border-width: 0px 0px 0px 4px;
		        border-radius: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-23554487 a.elementor-button,
		    .catalogo-virtual .elementor-element.elementor-element-23554487 .elementor-button {
		        font-size: 11px;
		        letter-spacing: 4.1px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-4202276f>.elementor-element-populated {
		        margin: 10px 10px 10px 10px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-3038043a>.elementor-widget-container {
		        padding: 34px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-faf5a8e .elementor-heading-title {
		        font-size: 19px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-faf5a8e>.elementor-widget-container {
		        padding: 7px 7px 7px 7px;
		        border-width: 0px 0px 0px 4px;
		        border-radius: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-3478e43e a.elementor-button,
		    .catalogo-virtual .elementor-element.elementor-element-3478e43e .elementor-button {
		        font-size: 11px;
		        letter-spacing: 4.1px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-1fc0fa7d>.elementor-element-populated {
		        margin: 10px 10px 10px 10px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-5e2f82a6>.elementor-widget-container {
		        padding: 34px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-743bc84b .elementor-heading-title {
		        font-size: 19px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-743bc84b>.elementor-widget-container {
		        padding: 7px 7px 7px 7px;
		        border-width: 0px 0px 0px 4px;
		        border-radius: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-8d552ad a.elementor-button,
		    .catalogo-virtual .elementor-element.elementor-element-8d552ad .elementor-button {
		        font-size: 11px;
		        letter-spacing: 4.1px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-7a4a203d>.elementor-element-populated {
		        margin: 10px 10px 10px 10px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-e5c5e1e>.elementor-widget-container {
		        padding: 34px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-3600f913 .elementor-heading-title {
		        font-size: 19px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-3600f913>.elementor-widget-container {
		        padding: 7px 7px 7px 7px;
		        border-width: 0px 0px 0px 4px;
		        border-radius: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-4e0d15b6 a.elementor-button,
		    .catalogo-virtual .elementor-element.elementor-element-4e0d15b6 .elementor-button {
		        font-size: 11px;
		        letter-spacing: 4.1px;
		    }
		}

		@media(max-width:767px) {
		    .catalogo-virtual .elementor-element.catalogo-vitual-section {
		        padding: 56px 0px 26px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-59aef1ca .elementor-heading-title {
		        font-size: 49px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-14f54f32 {
		        text-align: center;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-14f54f32 .elementor-heading-title {
		        font-size: 12px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-14f54f32>.elementor-widget-container {
		        margin: 0px 0px 0px 0px;
		        padding: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-2ba9583c .elementor-divider {
		        text-align: center;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-2ba9583c .elementor-divider-separator {
		        margin: 0 auto;
		        margin-center: 0;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-2ba9583c>.elementor-widget-container {
		        margin: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-2ac18ac {
		        margin-top: 0px;
		        margin-bottom: 0px;
		        padding: 6px 6px 6px 6px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-7fda433>.elementor-element-populated {
		        padding: 20px 20px 20px 20px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-a265140 .elementor-heading-title {
		        font-size: 22px;
		        line-height: 1.4em;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-a265140>.elementor-widget-container {
		        padding: 5px 5px 5px 5px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-5fab10ec .elementor-heading-title {
		        font-size: 26px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-5fab10ec>.elementor-widget-container {
		        margin: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-faf5a8e .elementor-heading-title {
		        font-size: 26px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-faf5a8e>.elementor-widget-container {
		        margin: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-743bc84b .elementor-heading-title {
		        font-size: 26px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-743bc84b>.elementor-widget-container {
		        margin: 0px 0px 0px 0px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-3600f913 .elementor-heading-title {
		        font-size: 26px;
		    }

		    .catalogo-virtual .elementor-element.elementor-element-3600f913>.elementor-widget-container {
		        margin: 0px 0px 0px 0px;
		    }
		}
	</style>
	<?php
}