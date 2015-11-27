<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Transportadora;

class TransportadoraController extends Controller
{
    public function index()
    {
      return Transportadora::all();
    }

    public function store(Request $request)
    {
      return Transportadora::create($request->all());
    }

    public function show($id)
    {
      return Transportadora::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
      Transportadora::find($id)->update($request->all());

      return Transportadora::find($id);
    }

    public function destroy($id)
    {
      return Transportadora::destroy($id);
    }
}
