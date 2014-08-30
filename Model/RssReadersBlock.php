<?php
/**
 * RssReadersBlock Model
 *
 * @property Block $Block
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.RssReaders.Model
 */

App::uses('RssReadersAppModel', 'RssReaders.Model');

/**
 * RssReadersBlock Model
 *
 * @property Block $Block
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @package app.Plugin.RssReaders.Model
 */
class RssReadersBlock extends RssReadersAppModel {

/**
 * Use database config
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var string
 */
	public $useDbConfig = 'master';

/**
 * Validation rules
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $validate = array(
		'block_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
	);

/**
 * belongsTo associations
 *
 * @author Kosuke Miura <k_miura@zenk.co.jp>
 * @var array
 */
	public $belongsTo = array(
		'Block' => array(
			'className' => 'Block',
			'foreignKey' => 'block_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'RssReader' => array(
			'className' => 'RssReader',
			'foreignKey' => 'rss_readers_block_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'RssReaderPartSetting' => array(
			'className' => 'RssReaderPartSetting',
			'foreignKey' => 'rss_readers_block_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'RssReaderSetting' => array(
			'className' => 'RssReaderSetting',
			'foreignKey' => 'rss_readers_block_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
