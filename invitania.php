<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Invitania.com</title>
		<meta name="description" content="MMeraih kemenangan bersama, jadikan moment ini istimewa bersama invitania" />
		<meta name="keywords" content="undangan pernikahan, undangan online, pernikahan, undangan resepsi, walimatul 'ursy, undangan pernikahan online" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/content.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<style type="text/css">
	.image{

    		margin-top: 10px;

    		text-align: center;

    	}

        img {

            max-width: 100%;

            height: auto;

        }

        .rc-anchor-logo-portrait{
        	margin-left: 0px !important;
        }

        iframe[name="undefined"]{
        	width: 275px;
        }
        </style>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			
			<header class="codrops-header">
				<h1>We are currently working on <br>something awesome. Stay tuned ! </h1>
				
			</header>
			<section>
				<div class="image">

					<img src="img/invitania.gif">

				</div>
				<div class="mockup-content">
					<h3>Be Patient. Love You! </h3>
					<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
						<button type="button">Email Us</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-1">
									<span class="icon icon-close">Close the dialog</span>
									<h2>Email Us</h2>
									<form action="" method="post">
										<p><label>Name</label><input type="text" name='name' placeholder="Full name" /></p>
										<p><label>Email</label><input type="email" name='email' placeholder="yourname@email.com" /></p>
										<p><label>Message</label><textarea name="message"></textarea></p>
										<p><div class="g-recaptcha" data-sitekey="6LdUYBwTAAAAAIjx5WN1MeyqfS9cBPoBow-IYC9E"></div></p>
										<!-- <p><button type="submit" value="Send">Send</button></p> -->
										<p><input type="submit" name="send" value="Send"></input></p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					
					
				</div><!-- /form-mockup -->
			</section>
		</div><!-- /container -->
		
		<script src="js/classie.js"></script>
		<script src="js/uiMorphingButton_fixed.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>
			(function() {
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();

				[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
					new UIMorphingButton( bttn, {
						closeEl : '.icon-close',
						onBeforeOpen : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterOpen : function() {
							// can scroll again
							canScroll();
						},
						onBeforeClose : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterClose : function() {
							// can scroll again
							canScroll();
						}
					} );
				} );

				// for demo purposes only
				[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
					bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
				} );
			})();
		</script>
	</body>
</html>


<?php 

if (isset($_POST['send'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['message'];
}

 ?>