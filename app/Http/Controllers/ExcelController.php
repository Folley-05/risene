<?php

namespace App\Http\Controllers;

use App\Models\Arrondissements;
use Illuminate\Http\Request;

use Rap2hpoutre\FastExcel\FastExcel;

// use App\Http\Controllers\Classes\PHPExcel\PHPExcel_IOFactory;
// $objReader=PHPExcel_IOFactory::create('Excel 2007'); // cette ligne precise la version d'excel
// $objPHPExcel=$objReader->load("./chemin_ressource"); // ici on passe le fichier excel
// $sheet=$objPHPExcel->getActiveSheet(); // on precise la feuille sur laquelle on veut travailler


class ExcelController extends Controller {

    public function test(Request $request) {
        $collection = (new FastExcel)->import("regionstest.xlsx");
        return $collection;
    }

}
