<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ModelExport implements FromCollection
{

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->model;
    }
}
