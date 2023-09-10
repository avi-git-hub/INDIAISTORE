<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class CustomReaderXlsx extends Xlsx
{
  public function __construct()
  {
    parent::__construct();
  }
}
