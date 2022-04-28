<?php

namespace App\Services;

use App\Exports\ModelExport;
use Illuminate\Http\Request;
use Excel;

class ExcelService{

    protected function import($model){
        //
    }

    protected function export($model){
        return Excel::download(new ModelExport($model), strtolower(get_class($model)).'.xlsx');
    }
}
