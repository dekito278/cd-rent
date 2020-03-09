<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    
    protected $cd;

    public function __construct(Cd $cd)
    {
        $this->cd = $cd;
    }

    //return all CD's collecion.
    public function index() {
        $products_cd = $this->cd->all();

        return $products_cd;
    }

    //return a spesific CD
    public function show($CdId) {
        $cd = $this->cd->find($CdId);

        if (empty($cd)) {
            return "No such CD found.";
        }

        return $cd;
    }


   //update info for a spesific CD.
   public function update(Request $request, $CdId) {

    //Validate if the input is correct for each field given.
    $this->validate($request, [
        'quantity' => 'required|integer',
    ]);

    //find the CD that you seek for an update.
    $cd = $this->cd->find($CdId);
    
    //return error if no result.
    if (empty($CdId)) {
        return "No such CD found";
    }

    //update the CD.
    $cd = $this->cd-->update([
        'quantity' => $request->input('quantity'),
    ]);

    return $cd;
    }

}
