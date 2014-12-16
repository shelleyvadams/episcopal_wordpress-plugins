<?php /* Template name: Home */ ?>

<section>
	<h4>Around The Episcopal Church</h4>
	<article class="video-post">
		<iframe src="//fast.wistia.net/embed/playlists/5nzsiujrhe?media_0_0%5BautoPlay%5D=false&media_0_0%5BcontrolsVisibleOnLoad%5D=false&theme=bento&version=v1&videoOptions%5BautoPlay%5D=true&videoOptions%5BsmallPlayButton%5D=false&videoOptions%5BvideoHeight%5D=225&videoOptions%5BvideoWidth%5D=400&videoOptions%5BvolumeControl%5D=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_playlist" name="wistia_playlist" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="325"></iframe>
	</article>

	<?php
	include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
	$feed = fetch_rss('http://episcopaldigitalnetwork.com/ens/feed/'); // specify feed url
	$items = array_slice($feed->items, 0, 2); // specify first and last item
	?>

	<?php if (!empty($items)) : ?>
	<?php foreach ($items as $item) : ?>
		<article class="rss-post">
			<h2><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?> </a></h2>
			<p><?php echo $item['description']; ?></p>
		</article>
	<?php endforeach; ?>
	<?php endif; ?>
</section>
