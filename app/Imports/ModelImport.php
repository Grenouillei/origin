<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ModelImport implements ToCollection
{

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }


    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
}
