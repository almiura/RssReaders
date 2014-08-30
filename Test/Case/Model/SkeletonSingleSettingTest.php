<?php
/**
 * RssReadersSetting Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Test.Model.Case
 */

App::uses('RssReadersSetting', 'RssReaders.Model');

/**
 * RssReadersSetting Test Case
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Model
 */
class RssReadersSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $fixtures = array(
		'plugin.rss_readers.rss_readers_block',
		'plugin.rss_readers.rss_reader_setting',
		'plugin.rss_readers.block',
		'plugin.rss_readers.language',
		'plugin.rss_readers.blocks_language'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RssReaderSetting = ClassRegistry::init('RssReaders.RssReaderSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RssReaderSetting);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->RssReaderSetting->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
