<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ViewModels\ServicoViewModel;

class ServicoController extends Controller
{
    public function __construct()
    {
    }

    public function alteraStatusSuite($id, $suite, $status, Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $rs = ServicoViewModel::alteraStatusSuite($id, $suite, $status, $data);
        return response()->json($rs);
    }

    public function obterSituacaoUH($id, $atual, $futura)
    {
        $rs = ServicoViewModel::obterSituacaoUH($atual, $futura, $id);
        return response()->json($rs);
    }

}
