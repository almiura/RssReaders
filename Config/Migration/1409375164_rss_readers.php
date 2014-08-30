<?php
class CreateRssReadersTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'blocks_rss_readers' => array(
					'id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'primary'),
					'block_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'blocksãƒ†ãƒ¼ãƒ–ãƒ«ã®fk'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'rss_readers' => array(
					'id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'primary'),
					'blocks_rss_reader_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'url' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'RSSå–å¾—URL', 'charset' => 'utf8'),
					'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'comment' => 'çŠ¶æ…‹'),
					'rss' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'RSSæœ¬æ–‡', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'æœªãƒ­ã‚°ã‚¤ãƒ³ã®äºº:0 ãƒ­ã‚°ã‚¤ãƒ³ã—ã¦ã‚‹äºº:users.id'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
				)
			),
		),
		'down' => array(
			'drop_table' => array(
				'rss_readers', 'blocks_rss_readers'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction up or down direction of migration process
 * @return boolean Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction up or down direction of migration process
 * @return boolean Should process continue
 */
	public function after($direction) {
		return true;
	}
}
