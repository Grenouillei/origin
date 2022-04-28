<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface FabricateInterface{

    public function store($model,Request $request);
    public function delete($model);

}
