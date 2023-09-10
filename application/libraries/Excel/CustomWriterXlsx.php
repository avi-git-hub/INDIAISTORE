<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class CustomWriterXlsx extends Xlsx
{
  public function __construct($objSpreadsheet)
  {
    parent::__construct($objSpreadsheet);
  }
}
