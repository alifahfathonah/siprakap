<?php
defined('BASEPATH') or exit('No direct script access allowed');

 class Pdf {
 	function __construct() {
 		require_once APPPATH.'/third_party/pdf/fpdf.php'
 	}
 } 

?>