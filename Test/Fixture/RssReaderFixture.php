<?php
/**
 * RssReaderFixture
 *
 * @author   Kosuke Miura <k_miura@zenk.co.jp>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for RssReaderFixture
 */
class RssReaderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'blocks_rss_reader_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'url' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'RSSå–å¾—URL', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'comment' => 'çŠ¶æ…‹'),
		'rss' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'RSSæœ¬æ–‡', 'charset' => 'utf8'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'æœªãƒ­ã‚°ã‚¤ãƒ³ã®äºº:0 ãƒ­ã‚°ã‚¤ãƒ³ã—ã¦ã‚‹äºº:users.id'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'blocks_rss_reader_id' => 1,
			'url' => '/var/www/app/app/Plugin/RssReaders/Test/Fixture/rss.xml',
			'status' => 1,
			'rss' => '',
			'created_user' => 1,
			'created' => '2014-08-30 06:19:18',
			'modified_user' => 1,
			'modified' => '2014-08-30 06:19:18'
		),
	);

}
