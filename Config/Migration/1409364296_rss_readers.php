<?php
/**
 * Migration file
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Config.Migration
 */

/**
 * RssReaders CakeMigration
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Config.Migration
 */
class RssReaders extends CakeMigration {

/**
 * Migration description
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var string
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'rss_readers' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'rss_readers_block_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => '2'),
					'is_auto_translation' => array('type' => 'boolean', 'null' => false, 'default' => false, 'length' => 1),
					'translation_engine' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'content' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'rss_readers_blocks' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'rss_reader_settings' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'rss_readers_block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'rss_reader_part_settings' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'rss_readers_block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
					'part_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'readable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
					'editable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
					'creatable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
					'publishable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			)
		),
		'down' => array(
			'drop_table' => array(
				'rss_readers',
				'rss_readers_blocks',
				'rss_reader_settings',
				'rss_reader_part_settings',
			)
		)
	);

/**
 * recodes
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array $records
 */
	public $records = array();

/**
 * Before migration callback
 *
 * @param string $direction up or down direction of migration process
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return boolean Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction up or down direction of migration process
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return boolean Should process continue
 */
	public function after($direction) {
		if ($direction === 'down') {
			return true;
		}

		foreach ($this->records as $model => $records) {
			if (!$this->updateRecords($model, $records)) {
				return false;
			}
		}

		return true;
	}

/**
 * Update model records
 *
 * @param string $model model name to update
 * @param string $records records to be stored
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @return boolean Should process continue
 */
	public function updateRecords($model, $records) {
		$Model = $this->generateModel($model);
		foreach ($records as $record) {
			$Model->create();
			if (!$Model->save($record, false)) {
				return false;
			}
		}

		return true;
	}

}
