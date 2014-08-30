<?php
/**
 * RssReaderPartSettingTest Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Test.Model.Case
 */

App::uses('RssReaderPartSetting', 'RssReaders.Model');

/**
 * RssReadersPart Test Case
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Model
 */
class RssReaderPartSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $fixtures = array(
		'plugin.rss_readers.rss_reader_part_setting',
		'plugin.rss_readers.block',
		'plugin.rss_readers.language',
		'plugin.rss_readers.blocks_language',
		'plugin.rss_readers.part',
		'plugin.rss_readers.languages_part'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RssReaderPartSetting = ClassRegistry::init('RssReaders.RssReaderPartSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RssReaderPartSetting);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->RssReaderPartSetting->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
