<?php
/*
 * Plugin Name:  Episcopal News
 * Plugin URI:   https://github.com/shelleyvadams/episcopal_wordpress-plugins
 * Description:  Headlines from Episcopal News Service and featured videos from The Episcopal Church, Office of Communication.
 * Version:      0.0.1
 * Author:       Shelley V. Adams
 * Author URI:   http://shelleyvadams.github.io/
 * License:      GPLv2+
*/

// Define URLs as constants for easy updating.

define('EPISCOPAL_NEWS_FEED',  'http://episcopaldigitalnetwork.com/ens/feed/');
define('EPISCOPAL_NEWS_VIDEO', '//fast.wistia.net/embed/playlists/5nzsiujrhe?media_0_0%5BautoPlay%5D=false&media_0_0%5BcontrolsVisibleOnLoad%5D=false&theme=bento&version=v1&videoOptions%5BautoPlay%5D=true&videoOptions%5BsmallPlayButton%5D=false&videoOptions%5BvideoHeight%5D=225&videoOptions%5BvideoWidth%5D=400&videoOptions%5BvolumeControl%5D=true');



/**
 * Fetch and display headlines from Episcopal News Service
 *
 * @todo Add parameter for the number of items displayed
 * @todo Add boolean parameter for displaying blurbs with headlines
 */

function en_news_display( $atts, $content = null ) {

	include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
	$feed = fetch_rss(EPISCOPAL_NEWS_FEED); // specify feed url
	$items = array_slice($feed->items, 0, 2); // specify first and last item

	$newsoutput = '';

 if (!empty($items)) {
		ob_start(); // for shortcodes, use output buffer instead of echo
	?>
		<ul class="episcopal-news feed episcopal-news-feed">
			<?php foreach ($items as $item) : ?>
				<li class="episcopal-news feed-item episcopal-news-feed-item">
					<a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?></a>
					<p><?php echo $item['description']; ?></p>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php
		$newsoutput .= ob_get_contents();
		ob_end_clean();
	} //if

	return $newsoutput;
}


/**
 * Embed featured videos from The Episcopal Church, Office of Communication
 */

function en_video_display( $atts, $content = null ) {
	$vidoutput = '<div class="episcopal-news video episcopal-news-video"><iframe class="wistia_playlist" src="';
	$vidoutput .= EPISCOPAL_NEWS_VIDEO;
	$vidoutput .= '" allowfullscreen="true" width="665" height="225"></iframe></div>';
	return $vidoutput;
}

/**
 * Register the short codes.
 */

function en_register_shortcodes() {
	add_shortcode( 'episcopalnews', 'en_news_display' );
	add_shortcode( 'episcopalvideo', 'en_video_display' );
}

// Finally, add stuff to WordPress.

add_action( 'init', 'en_register_shortcodes' );
