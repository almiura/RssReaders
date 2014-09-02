<?php
/**
 * index template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.View.RssReaders
 */

if (isset($content['RssReader']['xml']['rss']['channel'])) {
	$rss = $content['RssReader']['xml']['rss']['channel'];
}
$title = '';
if (isset($rss['title'])) {
	$title = $rss['title'];
}

?>
<h3><?php echo h($title); ?></h3>

<?php
//var_dump($rss);
if (isset($rss['item']) && $rss['item']) {
	foreach($rss['item'] as $key => $item) {
	}
}

?>
