<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\RetiroStockResources;
use App\Http\Models\RetiroStock;

class RetiroStockController extends Controller
{
    public function index()
    {
        $retiroStock = RetiroStock::orderBy('id') -> get();
        return RetiroStockResources::collection($retiroStock);
    }

    public function show(RetiroStock $retiroStock)
    {
        return new RetiroStockResources($retiroStock);
    }

    public function validateRequest()
    {
        return request() -> validate([

        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $retiroStock = RetiroStock::create($data);
        return new RetiroStockResources($retiroStock);
    }

    public function update(RetiroStock $retiroStock)
    {
        $data = $this->validateRequest();
        $retiroStock -> update($data);
        return new RetiroStockResources($retiroStock);
    }

    public function destroy(RetiroStock $retiroStock)
    {
        $retiroStock -> delete();
        return response() -> noContent();
    }
}
