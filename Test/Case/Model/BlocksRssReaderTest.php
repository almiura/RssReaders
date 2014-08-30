<?php
/**
 * BlocksRssReader Test Case
 *
 * @author   Kosuke Miura <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('BlocksRssReader', 'RssReaders.Model');

/**
 * Summary for BlocksRssReader Test Case
 */
class BlocksRssReaderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.rss_readers.blocks_rss_reader',
		'plugin.rss_readers.rss_reader',
		'plugin.rss_readers.language',
		'plugin.rss_readers.block',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BlocksRssReader = ClassRegistry::init('RssReaders.BlocksRssReader');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BlocksRssReader);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->BlocksRssReader->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
