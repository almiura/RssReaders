<?php
/**
 * RssReaders routes file
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Config
 */

Router::connect('/rss_readers/:action', array(
	'plugin' => 'rss_readers', 'controller' => 'rss_readers'
));
