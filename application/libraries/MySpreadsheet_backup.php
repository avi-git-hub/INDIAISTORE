<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\//IOFactory,
    Reader\Csv as ReaderCsv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as Writer;

class MySpreadsheet extends Spreadsheet
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Function to import the data from .csv or .xlsx file
     *
     * @return void
     */
    public function sheetImport($filesData)
    {
        $fileMimes = [
            'text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ];

        if ((isset($filesData['file_name'])) && (in_array($filesData['file_type'], $fileMimes))) {
            if ($filesData['file_ext'] === '.csv') {
                $reader = new ReaderCsv();
            } else {
                $reader = new ReaderXlsx;
            }

            // Way 1
            /* $spreadSheet = IOFactory::load($filesData['full_path']);

            $sheetData = $spreadSheet
                ->getActiveSheet()
                ->toArray(); */

            // Way 2
            $sheetData = $reader
                ->setReadDataOnly(true)
                ->load($filesData['full_path'])
                ->getActiveSheet()
                ->toArray();

            return $sheetData;
        }
    }

    /**
     * Function to export the data into .xlsx file
     *
     * @param array $sheetsData
     * @return void
     */
    public function sheetExport($sheetsData)
    {
        // load the library
        $spreadSheet = new Spreadsheet();

        $sheetIndex = 0;

        foreach ($sheetsData['sheets'] as $sheet) {
            // activate worksheet number 1
            $spreadSheet->createSheet();

            // set the active sheet
            $spreadSheet->setActiveSheetIndex($sheetIndex);

            // name the worksheet
            $spreadSheet
                ->getActiveSheet()
                ->setTitle($sheet['title']);

            $row = 1;
            $col = 1;

            // writing the name of the columns in the first row
            foreach ($sheet['columns'] as $columnName) {
                $spreadSheet
                    ->getActiveSheet()
                    ->setCellValueByColumnAndRow($col, $row, $columnName);

                // next column
                $col++;
            }

            // second row
            $row = 2;

            foreach ($sheet['data'] as $data) {
                // first column
                $col = 1;

                foreach ($data as $value) {
                    $spreadSheet
                        ->getActiveSheet()
                        ->setCellValueByColumnAndRow($col, $row, $value);

                    $col++;
                }

                // next row
                $row++;
            }

            // next sheet
            $sheetIndex++;
        }

        $lastSheetIndex = sizeof($sheetsData['sheets']);

        // removing auto generated blank worksheet in the end
        $spreadSheet->removeSheetByIndex($lastSheetIndex);

        $filename = $sheetsData['fileName'] . '.xlsx';

        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment;filename=' . $filename);
        // header('Cache-Control: max-age=0');

        // $objWriter = PHPExcel_IOFactory::createWriter($spreadSheet, 'Excel2007');

        $writer = new Writer($spreadSheet);

        //$writer->save('php://output');
        $writer->save(FCPATH . 'files/exports/' . $filename);
    }
}
