<?php/** * This class contains some static methods * about fuzzy comparison and other stuff */class Anta_Utils_Fuzzy{	public static function generateSignature( $string ){		return Anta_Core::translit($string);	}		/**	 * @param string filename	- filename to be "translated"	 * @return a human readable title for a given filename string	 */	public static function getTitle( $filename ){		$title = basename( $filename  );		// strip "."				return $title;	}}?>