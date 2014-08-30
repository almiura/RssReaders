<?php
/**
 * RssReaders Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Controller
 */

App::uses('RssReadersAppController', 'RssReaders.Controller');

/**
 * RssReaders Controller
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Controller
 */
class RssReadersController extends RssReadersAppController {

/**
 * use model
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	//public $uses = array();

/**
 * beforeFilter
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @param int $frameId frames.id
 * @param string $lang language
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return CakeResponse
 */
	public function index($frameId = 0, $lang = '') {
		//フレーム初期化処理
		if (! $this->_initializeFrame($frameId, $lang)) {
			return $this->render(false);
		}

		return $this->render('RssReaders/index');
	}

/**
 * view
 *
 * @param int $frameId frames.id
 * @param string $lang language
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return CakeResponse
 */
	public function view($frameId = 0, $lang = '') {
		return $this->render('RssReaders/view');
	}

}
