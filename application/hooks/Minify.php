<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Minify
{
	public function minify_markup() {
		ob_start(function ($code) {
			$search = array(
				// Remove whitespaces after tags
				'/\>[^\S ]+/s',
				// Remove whitespaces before tags
				'/[^\S ]+\</s',
				// Remove multiple whitespace sequences
				'/(\s)+/s',
				// Removes comments
				'/<!--(.|\s)*?-->/',
			);
			
			$replace = array('>', '<', '\\1');
			
			$code = preg_replace($search, $replace, $code);
			
			return $code;
		});
	}
}