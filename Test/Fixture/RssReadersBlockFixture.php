<?php
/**
 * RssReadersBlockFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Test.Model.Fixture
 */

/**
 * RssReadersBlockFixture
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Model
 */
class RssReadersBlockFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'block_id' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'block_id' => 1,
		),
	);

}
