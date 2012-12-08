<?php 
return array(
	'playlistOnPage' => array( 
		'description' => 'Adds a playlist to the page, per player defined playlist id',
		'attributes' => array(
			'plugin' => array(
				'hideEdit' => true,
			),
			'path' => array(
				'hideEdit' => true
			),
			'clipListTargetId' => array(
				'doc' => 'Target div for ul list of clips, appended after player if null',
				'type' => 'string'
			),
			'layoutMode' => array(
				'doc' => "Layout mode of playlist ( vertical or horizontal ) ",
				'type' => 'enum',
				'enum' => array( 'vertical', 'horizontal' )
			),
			'thumbWidth' => array(
				'doc' => "The width of the clip thumbnails in pixels ( default 110 )",
				'type' => 'number',
			),
			'onPageJs1' => array(
				'hideEdit' => true,
			),
			'onPageJs2' => array(
				'hideEdit' => true,
			),
			'onPageJs3' => array(
				'hideEdit' => true,
			),
			'onPageCss1' => array(
				'hideEdit' => true,
			)
		)
	),

	'descriptionBox' => array(
	 	'description' => 'Appends or updates a target; with the asset\'s title and description',
		'attributes' => array(
			'plugin' => array(
				'hideEdit' => true,
			),
			'boxHeight' => array(
				'doc' => 'Height of the description box, <i>null</i> to fill per height of content',
				'type' => 'number'
			),
			'boxWidth' => array(
				'doc' => "Box width ( can be 100% of parent ), <i>null</i> to fill 100% width",
				'type' => 'string'
			),
			'boxTargetId' => array(
				'doc' => 'The target on page div id, for the title / description box',
				'type' => 'string'
			),
			'boxLocation' => array(
				'doc' => 'The relative location of title / description box ( only used if boxTargetId is null ) by default its after the player ',
				'type' => 'enum',
				'enum' => array( 'before', 'after', 'left', 'right' )
			),
			'descriptionLabel' => array(
				'doc' => 'Description label, entry title if null.',
				'type' => 'string'
			),
			'onPageJs1' => array(
				'hideEdit' => true,
			),
			'onPageCss1' => array(
				'hideEdit' => true,
			)
		)
	),
	'chaptersEdit' => array(
		'description' => 'Provides a simple interface for editing chapter annotation data',
		'attributes' => array(
			'ks' => array(
				'doc' => "The authentication ks, required until we have iframe auth system in place",
				'type' => 'string',
				'hideEdit' => true
			),
			'editTargetId' => array(
				'doc' => "The target id for chapter editing interface",
				'type' => 'string'
			),
			'customDataFields' => array(
				'doc' => "List of custom data properties to be listed in editor",
				'type' => 'list',
				'list' => array(
					'desc'=> 'Chapter Description',
					'thumbUrl'=> 'Thumbnail url overide'
				),
			),
			'tags' => array(
				'doc' => 'Default: "chaptering" – Providing a tag name will grab only annotations which have that tag. 
									This allows multiple types of cuePoints to be stored on the same entry (e.g. chapters in diffrent languages)',
				'type' => 'string'
			),
			'editPropId' => array(
				'doc' => "The target id to edit chapter cuePoint properties",
				'type' => 'string'
			),
			'editTimelineId' => array(
				'doc' => "The timeline id to for clickable timeline widget for cuePoints",
				'type' => 'string'
			),
			'onPageJs1' => array(
				'hideEdit' => true,
			),
			'onPageCss1' => array(
				'hideEdit' => true,
			),
			'onPageJs2' => array(
				'hideEdit' => true,
			),
			'path' => array(
				'hideEdit' => true,
			),
			'position' => array(
				'hideEdit' => true,
			),
			// custom data always enabled stores to partnerData: 
			// thumbnailUrl
		)
	),
	'chaptersView' => array(
	 	'description' => 'Display video chapter information.',
		'attributes' => array(
			'plugin' => array(
				'hideEdit' => true
			),
			'containerId' => array(
				'doc'=> "Default: null, The chapater container id, will overide some layout settings and allow you to place the chapters in a target div.",
				'type' => 'string'
			),
			'tags' => array(
				'doc' => 'Default: "chaptering" – Providing a tag name will grab only annotations which have that tag. 
									This allows multiple types of cuePoints to be stored on the same entry (e.g. chapters in diffrent languages)',
				'type' => 'string'
			),
			'layout' => array(
				'doc' => 'Will affect the layout of the chapters. This will only add css classes, the actual visual layout is performed via CSS',
				'type'=> 'enum',
				'enum' => array( 'vertical', 'horizontal' )
			),
			'containerPosition' => array(
				'doc' =>  'Will affect the position of the chaptering UI in relation to the video. This will only affect the structure of UI HTML elements, and will leave actual layouting to be performed via CSS)',
				'type' => 'enum',
				'enum' => array( 'before', 'after', 'left', 'right' )
			),
			'overflow' => array(
				'doc' => 'Defines what should happen in case list of chapters require more space than video’s dimensions. Combined with the “layout” and “position” parameters, this parameter will cause a prev/next UI to appear if overflow is set to false.',
				'type' => 'boolean',
			),
			'includeThumbnail' => array(
				'doc' => 'If set to true, a thumbnail HTML element will be generated containing the video frame from the startTime of the chapter',
				'type' => 'boolean',
			),
			/*'thumbWidth' => array(
				'doc' => "The width of the clip thumbnails in pixels ( default 110 )",
				'type' => 'number',
			),*/
			'thumbnailRotator' => array(
				'doc' => 'If set to true (and assuming that includeThumbnail=true), will enable a thumbnail-rotator experience, allowing the user to rollover i. a chapter thumbnail and experience a few (4,5) additional frames of the chapter (length of the chapter will be computed by delta between startTime of this chapter and the next, then divide it by X frames and generate the additional thumbnails for the rotator using the thumbnail URL API)',
				'type' => 'boolean'
			),
			'includeChapterStartTime' => array(
				'doc' => 'If the chapter start time should be included left of the title',
				'type' => 'boolean'
			),
			'includeChapterDuration' => array(
				'doc' => 'If the chapter duration should be included right of the title',
				'type' => 'boolean'
			),
			'pauseAfterChapter' => array(
				'doc' => "If set to true, video playback will pause on chapater complete",
				'type' => 'boolean'
			),
			'chapterRenderer' => array(
				'doc' => "If provided, the plugin will delegate rendering of the plugin to this method, <br><br>
							<i>chapterRenderer : function(  cuePoint, \$chapterBox ) </i> <br>
							<b>cuePoint</b> The cuePoint object, includes <i>customData</i> object as a property<br>
							<b>\$chapterBox</b> A jQuery object refrence to current chapter box",
				'type'=> 'function'
			),
			'chaptersRenderDone' => array(
				'doc' => "Optional callback for once chapter rendering is done<br><br>
						<i>chaptersRenderDone: function( \$chapterContainer )</i><br>
						<b>\$chapterContainer</b> jQuery container of chapters.",
				'type' => 'function'
			),
			
			'path' => array(
				'hideEdit' => true,
			),
			'position' => array(
				'hideEdit' => true,
			),
			'onPageJs1' => array(
				'hideEdit' => true,
			),
			'onPageJs2' => array(
				'hideEdit' => true,
			),
			'onPageJs3' => array(
				'hideEdit' => true,
			),
			'onPageCss1' => array(
				'hideEdit' => true,
			),
		)
	),
);