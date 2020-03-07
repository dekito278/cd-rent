<?php

namespace App\Http\Controllers;

use App\Models\ProductCd;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    protected $cd;

    public function __construct(Cd $cd)
    {
        $this->cd = $cd;
    }

    //return all CD's collecion.
    public function index() {
        $cds = $this->cd->all();

        return $cds;
    }

    //return a spesific CD
    public function show($CdId) {
        $cd = $this->cd->find($CdId);

        if (empty($cd)) {
            return "No such CD found.";
        }

        return $cd;
    }

    //create or Add a new CD
    public function store(Request $request) {
        
        //Validate if the input is correct for each field given.
        $this->validate($request, [
            'title' => 'required|string',
            'rate' => 'required|integer',
            'category' => 'required|string',
            'quantity' => 'required|integer'
        ]);

        //create a new CD.
        $cd = $this->cd->create([
            'title' => $request->input('title'),
            'rate' => $request->input('rate'),
            'category' => $request->input('category'),
            'quantity' => $request->input('quantity')
        ]);

        return $cd;
    }

    //update info for a spesific CD.
    public function update(Request $request, $CdId) {

        //Validate if the input is correct for each field given.
        $this->validate($request, [
            'title' => 'required|string',
            'rate' => 'required|integer',
            'category' => 'required|string',
            'quantity' => 'required|integer'
        ]);

        //find the CD that you seek for an update.
        $cd = $this->cd->find($CdId);
        
        //return error if no result.
        if (empty($CdId)) {
            return "No such CD found";
        }

        //update the CD.
        $cd = $this->cd-->update([
            'title' => $request->input('title'),
            'rate' => $request->input('rate'),
            'category' => $request->input('category'),
            'quantity' => $request->input('quantity')
        ]);

        return $cd;
    }

    //Removing a spesific CD
    public function destroy($CdId) {
        $cd = $this->cd->find($CdId);
        
        if (empty($cd)) {
            return "No such CD found.";
        }

        $cd->delete();

        return;
    }
}