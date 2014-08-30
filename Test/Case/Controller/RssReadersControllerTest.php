<?php
/**
 * RssReadersController Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Test.Controller.Case
 */

App::uses('RssReadersController', 'RssReaders.Controller');

/**
 * RssReadersController Test Case
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Test.Controller.Case
 */
class RssReadersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $fixtures = array(
		'app.Session',
		'app.SiteSetting',
		'app.SiteSettingValue',
		'plugin.rss_readers.rss_reader',
		'plugin.rss_readers.blocks_rss_reader',
		'plugin.rss_readers.language',
		'plugin.rss_readers.page',
		'plugin.rss_readers.block',
		'plugin.rss_readers.part',
		'plugin.rss_readers.room_part',
		'plugin.rss_readers.languages_part',
		'plugin.rss_readers.language',
		'plugin.rss_readers.frame',
		'plugin.rss_readers.parts_rooms_user',
		'plugin.rss_readers.box',
		'plugin.rss_readers.plugin',
		'plugin.rss_readers.room',
		'plugin.rss_readers.user',
		'plugin.rss_readers.frames_language'
	);

/**
 * setUp
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * tearDown method
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return void
 */
	public function tearDown() {
		parent::tearDown();
	}

/**
 * test index
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return void
 */
	public function testIndex() {
		$frameId = 1;
		$this->testAction('/rss_readers/rss_readers/index/' . $frameId . '/', array('method' => 'get'));
		$this->assertTextNotContains('ERROR', $this->view);
	}

/**
 * test view
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return void
 */
	public function testView() {
		$frameId = 1;
		$this->testAction('/rss_readers/rss_readers/view/' . $frameId . '/', array('method' => 'get'));
		$this->assertTextNotContains('ERROR', $this->view);
	}

}
