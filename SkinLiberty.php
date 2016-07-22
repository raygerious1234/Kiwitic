<?php
class SkinLiberty extends SkinTemplate {

	public $skinname = 'kiwitic';
	public $stylename = 'Kiwitic';
	public $template = 'KiwiticTemplate';

    public function initPage( OutputPage $out ) {
		parent::initPage( $out );
		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1, maximum-scale=1' );
		$out->addMeta( 'description', 'KiwiWiki' );
		$out->addMeta( 'keywords', 'wiki,KiwiWiki,키위위키,' . $this->getSkin()->getTitle() );
		$out->addMeta('theme-color', '#AA7949');
		$out->addMeta('twitter:card', 'summary');
		$out->addMeta('twitter:site', '@kiwkius');
		$out->addMeta('twitter:title', $this->getSkin()->getTitle() );
		$out->addMeta('twitter:description', 'KiwiWiki');
		$out->addMeta('twitter:creator', '@wikicocoa');
		$out->addMeta('twitter:image', 'https://kiwki.us/kiwiki.png');
		$out->addModuleScripts( array(
		    'skins.liberty.bootstrap'
		) );
		$out->addModuleScripts( array(
		    'skins.liberty.layoutjs'
		) );
    }

	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
 			$out->addHeadItem( 'font-awesome', '<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />' );
			$out->addHeadItem( 'google-ads', '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>' );
		$out->addModuleStyles( array(
			'skins.liberty.styles'
		) );
	}
	function addToBodyAttributes( $out, &$bodyAttrs ) {
		$bodyAttrs['class'] .= " Liberty width-size";
    }
}
