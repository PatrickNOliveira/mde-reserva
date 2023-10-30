<?php

namespace App\ViewModels;

use Illuminate\Support\Facades\Log;

use Spatie\ViewModels\ViewModel;

class ServicoViewModel extends ViewModel
{
    public function __construct()
    {
    }

    public static function alteraStatusSuite($id, $suite, $status, $data)
    {

        $conta = PedidoViewModel::getConta($id);
        $sql = "EXEC AlteraSituacaoApartamento '{$conta['codigo']}', '{$suite}', '{$status}', '{$data['obs']}', '{$data['dtInicio']}', '{$data['dtFim']}'";
        $rs = PedidoViewModel::callStoredProcedure($sql);
        return [];
    }

    public static function obterSituacaoUH($atual, $futura, $id)
    {
        $conta = PedidoViewModel::getConta($id);
        $sql = "EXEC SituacaoUH '{$atual}', '{$futura}', '{$conta['codigo']}'";
        $rs = PedidoViewModel::callStoredProcedure($sql);
        return $rs;
    }
}
