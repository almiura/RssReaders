<?php
/**
 * BlocksRssReader Model
 *
 * @property Block $Block
 * @property RssReader $RssReader
 *
 * @author   Kosuke Miura <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('RssReadersAppModel', 'RssReaders.Model');

/**
 * Summary for BlocksRssReader Model
 */
class BlocksRssReader extends RssReadersAppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'master';

/**
 * belongsTo associations
 *
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
			'foreignKey' => 'blocks_rss_reader_id',
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
