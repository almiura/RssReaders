<?php
/**
 * RssReaderPartSettingFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Test.Model.Fixture
 */

/**
 * RssReaderPartSettingFixture
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Model
 */
class RssReaderPartSettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'rss_readers_block_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'part_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'read_content' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'edit_content' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'create_content' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'publish_content' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'rss_readers_block_id' => 1,
			'part_id' => 1,
			'read_content' => 1,
			'edit_content' => 1,
			'create_content' => 1,
			'publish_content' => 1,
		),
	);

}
