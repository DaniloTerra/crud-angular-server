<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
      return Funcionario::all();
    }

    public function store(Request $request)
    {
      return Funcionario::create($request->all());
    }

    public function show($id)
    {
      return Funcionario::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
      Funcionario::find($id)->update($request->all());

      return Funcionario::find($id);
    }

    public function destroy($id)
    {
      return Funcionario::destroy($id);
    }
}
