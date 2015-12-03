<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
      return Cliente::all();
    }

    public function store(Request $request)
    {
      return Cliente::create($request->all());
    }

    public function show($id)
    {
      return Cliente::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
      Cliente::find($id)->update($request->all());

      return Cliente::find($id);
    }

    public function destroy($id)
    {
      return Cliente::destroy($id);
    }
}
