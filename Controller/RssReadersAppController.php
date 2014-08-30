<?php
/**
 * RssReadersApp Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Controller
 */

App::uses('AppController', 'Controller');
App::uses('NetCommonsFrameAppController', 'NetCommons.Controller');

/**
 * RssReadersApp Controller
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Controller
 */
class RssReadersAppController extends NetCommonsFrameAppController {

/**
 * use component
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $components = array(
		'Security'
	);
}
