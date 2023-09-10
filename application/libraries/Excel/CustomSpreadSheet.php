<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;

class CustomSpreadSheet extends Spreadsheet
{
	public function __construct()
	{
		parent::__construct();
	}
}
