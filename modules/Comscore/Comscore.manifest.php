<?php 
/**
 * The comscore plugin manifest
 */

return array(
	'comscore' => array(
		'description' => "Supports sending player analytics events to comScore.",
		'label' => "comScore",
		'attributes'=> array(
			'cTagsMap'=>array(
				'doc' => "URL to a comScore XML tag mapping file.",
				'label' => 'Comscore XML tag mapping file path',
				'type' => 'url',
			),
			'trackEventMonitor'=> array(
				'doc' => 'Function called on parent page for every event.',
				'label' => 'Event function name',
				'type' => 'string',
			),
			'c2' => array(
				'doc' => "Party who delivered the content.",
				'label' => 'Content party',
				'type' => 'url',
			),
			
			'c3' => array(
				'doc' => "Owner of the content(Content producer).",
				'label' => 'Content owner',
				'type' => 'url',
			),
			'c3attributeKey' => array(
				'doc' => "Mapping file attribute key for content owner.",
				'label' => 'Content owner attribute key',
				'type' => 'string',
			),
			'c3Value' => array(
				'doc' => "value key for content owner.",
				'label' => 'Content owner value key.',
				'type' => 'string',
			),
			'c4' => array(
				'doc' => "Location/site where content was viewed.",
				'label' => 'Content view site.',
				'type' => 'url',
			),
			'c4attributeKey' => array(
				'doc' => "Mapping file attribute key for site/location.",
				'label' => 'Site mapping attribute key',
				'type' => 'string',
			),
			'c4Value' => array(
				'doc' => "value key for site/location.",
				'label' => 'Site value key',
				'type' => 'string',
			),
			'c5' => array(
				'doc' => "Genre and type of content.",
				'label' => 'Content type',
				'type' => 'url',
			),
			'c5attributeKey' => array(
				'doc' => "Mapping file attribute key for genre and type.",
				'label' => 'Type attribute key',
				'type' => 'string',
			),
			'c5Value' => array(
				'doc' => "value key for site/location",
				'label' => 'Site value key',
				'type' => 'string',
			),
			'c6' => array(
				'doc' => "Show level reporting; campaign reporting; episode reporting",
				'label' => 'Level reporting',
				'type' => 'url',
			),

		)
	)
);
