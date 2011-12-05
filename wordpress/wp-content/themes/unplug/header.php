<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php
		if ( is_single() ) { single_post_title(); }
		elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); }
		elseif ( is_page() ) { single_post_title(''); }
		elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s);  }
		elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
		else { bloginfo('name'); wp_title('|'); }
	?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="logo">
				<a href="http://thelawofnature.ph/"><img src="<?php echo bloginfo('url') .'/wp-content/themes/lnf/resources/LNF.gif'; ?>" width="170px" height="150px" border="none"></a>
			</div>
			<div id="menu">
				<ul>
					<li><a style="margin-left:230px;" href="#"><h3>about</h3></a>
						<ul>
							<li><a style="margin-left:230px;" href="http://thelawofnature.ph/?page_id=2">Vision&nbsp;-&nbsp;Mission</a></li>
							<li><a style="margin-left:230px;" href="http://thelawofnature.ph/?page_id=7">Board&nbsp;of&nbsp;Trustees</a></li>
							<li><a style="margin-left:230px;" href="http://thelawofnature.ph/?page_id=9">History</a></li>
							<li><a style="margin-left:230px;" href="http://thelawofnature.ph/?page_id=11">Our&nbsp;Partners</a></li>
						</ul>

					</li>
				</ul>
				<ul>
					<li><a href="#"><h3>law of nature</h3></a>
						<ul>
							<li><a href="#">Engineering&nbsp;and&nbsp;Enforcement</a>
								<ul>
									<li><a href="http://thelawofnature.ph/?page_id=13">Legal&nbsp;Cases</a></li>
									<li><a href="http://thelawofnature.ph/?page_id=31">Visayan&nbsp;Sea&nbsp;Squadron</a></li>
									<li><a href="http://thelawofnature.ph/?page_id=35">Transportation&nbsp;Revolution</a></li>
									<li><a href="http://thelawofnature.ph/?page_id=37">RA&nbsp;No.&nbsp;6716	</a></li>
								</ul>
							</li>
						</ul>					
					</li>
				</ul>
				<ul>
					<li><a href="#"><h3>publications</h3></a>
						<ul>
							<li><a href="http://thelawofnature.ph/?page_id=39">Speeches&nbsp;&&nbsp;Lectures</a></li>
							<li><a href="http://thelawofnature.ph/?page_id=51">Books</a></li>
							<li><a href="http://thelawofnature.ph/aos-blog-second/">Papers</a></li>
						</ul>
					</li>
				</ul>
				<ul>
					<li><a href="#"><h3>media</h3></a>
						<ul>
							<li><a  style="padding-right:30px;"href="http://thelawofnature.ph/articles/">Articles</a></li>
							<li><a href="http://thelawofnature.ph/gallery/">Gallery</a></li>
							<li><a href="http://thelawofnature.ph/videos/">Videos</a></li>
						</ul>
					</li>
				</ul>
				<ul>
					<li><a href="http://thelawofnature.ph/?page_id=166"><h3>contact us</h3></a></li>
				</ul>
				<ul>
					<li><a style="padding:5px 0px;"class="donate" href="http://thelawofnature.ph/?page_id=180"><h3 class="donate">donate</h3></a></li>
				</ul>
			</div>
		</div>
