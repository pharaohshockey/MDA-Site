<?php
	/*
		Register Google fonts
	*/
	if (!function_exists('pgg_fonts_url')) {
		function pgg_fonts_url () {
			$fonts_url = '';
			$fonts     = array();
			$subsets   = 'latin,latin-ext';

			/*
				Translators: If there are characters in your language that are not 
				supported by Cabin, translate this to 'off'. Do not translate 
				into your own language.
			*/

			if ('off' !== _x('on', 'Cabin font: on or off', 'pgg')) {
				$fonts[] = 'Cabin:400,400italic,700,700italic';
			}

			/*
				Translators: To add an additional character subset specific to your
				language, translate this to 'greek', 'cyrillic', 'devanagari', or 
				'vietnamese'. Do not tranlsate into your own language.
			*/

			$subset = _x('no-subset', 'Add new subset (greekm cyrillic, devanagari, vietnamese)', 'pgg');

			if ('cyrillic' == $subset) {
				$subsets .= ',cyrillic, cyrillic-ext';
			} elseif ('greek' == $subset) {
				$subsets .= ',greek, greek-ext';
			} elseif ('devanagari' == $subset) {
				$subsets .= ',devanagari';
			} elseif ('vietnamese' == $subset) {
				$subsets .= ',vietnamese';
			}

			if ($fonts) {
				$fonts_url = add_query_arg(array(
					'family' => urlencode(implode('|', $fonts)),
					'subset' => urlencode($subsets),
				), '//fonts.googleapis.com/css');
			}

			return $fonts_url;
		}
	}
?>
