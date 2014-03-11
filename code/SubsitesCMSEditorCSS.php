<?php
class SubsitesCMSEditorCSS extends LeftAndMainDecorator {
	 function init() {
		if(($subsite = Subsite::currentSubsite()) && $theme = $subsite->Theme) {
			HtmlEditorConfig::get('cms')->setOption('content_css', 'themes/'.$subsite->Theme.'/css/editor.css');
		}
	 }
}