<?php
/**
 * RssReader Model
 *
 * @property BlocksRssReader $BlocksRssReader
 *
 * @author   Kosuke Miura <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('RssReadersAppModel', 'RssReaders.Model');

/**
 * Summary for RssReader Model
 */
class RssReader extends RssReadersAppModel {

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
		'BlocksRssReader' => array(
			'className' => 'BlocksRssReader',
			'foreignKey' => 'blocks_rss_reader_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * the latest content data
 *
 * @param int $blockId blocks.id
 * @return array $contentData
 */
	public function getContent($blockId) {
		$contentData = $this->find(
			'first',
			array(
				'conditions' => array(
					'block_id' => $blockId
				),
				'order' => array($this->name . '.id DESC')
			)
		);
		if (isset($contentData[$this->name]['url']) && $contentData[$this->name]['url']) {
			$xml = Xml::build($contentData[$this->name]['url']);
			$xml = Xml::toArray($xml);
			$contentData[$this->name]['xml'] = $xml;
		}
		return $contentData;
	}
}
