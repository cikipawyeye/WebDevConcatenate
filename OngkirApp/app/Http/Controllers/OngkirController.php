<?php

namespace App\Http\Controllers;

use App\Models\Ongkir;
use Illuminate\Http\Request;

class OngkirController extends Controller
{
    public function index()
    {
        $ongkirModel = new Ongkir();

        $cities = $ongkirModel->getCity();

        return view('index', ['cities' => $cities]);
    }

    public function checkOngkir(Request $request)
    {
        $validateData = $request->validate([
            'destination' => ['numeric', 'required'],
            'weight' => ['numeric', 'required'],
            'courier' => ['required', 'alpha_num']
        ]);

        // dd($validateData);
        $ongkirModel = new Ongkir();

        // return $ongkirModel->getCost($validateData['destination'], $validateData['weight'], $validateData['courier']);

        return view('detail', [
            'data' => $ongkirModel->getCost($validateData['destination'], $validateData['weight'], $validateData['courier'])
        ]);
    }
}
