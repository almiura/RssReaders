<?php
/**
 * RssReader Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Test.Model.Case
 */

App::uses('RssReader', 'RssReaders.Model');

/**
 * RssReader Test Case
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Model
 */
class RssReaderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $fixtures = array(
		'plugin.rss_readers.rss_reader',
		'plugin.rss_readers.blocks_rss_reader',
		'plugin.rss_readers.language'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RssReader = ClassRegistry::init('RssReaders.RssReader');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RssReader);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->RssReader->findById($id);
		$this->assertTrue(is_array($rtn));
	}

/**
 * testGetContent
 *
 * @return void
 */
	public function testGetContent() {
		$blockId = 1;
		$rssData = $this->RssReader->getContent($blockId);

		$this->assertEqual($rssData['BlocksRssReader']['block_id'], $blockId);
	}

}
