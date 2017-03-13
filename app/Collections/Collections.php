<?php

/**
 * Created by PhpStorm.
 * User: Mario Fernandez
 * Date: 13/03/2017
 * Time: 11:49 AM
 */

namespace App\Collections;

class Collections
{
    public function cantvFormat($data)
    {
        $position = strpos($data, 'Saldo actual Bs.') + 118;
        $response['current_balance'] = trim(substr($data, ($position), (strpos($data, '</font>', ($position)) - ($position))));

        $position = strpos($data, 'Fecha de &uacute;ltima facturaci&oacute;n:') + 132;
        $response['last_billing'] = trim(substr($data, ($position), (strpos($data, '</font>', ($position)) - ($position))));

        // Obtener Fecha de Corte
        $position = strpos($data, 'Fecha corte:') + 102;
        $response['cutoff_date'] = trim(substr($data, ($position), (strpos($data, '</font>', ($position)) - ($position))));

        // Obtener Fecha de vencimiento
        $position = strpos($data, 'Fecha de vencimiento:') + 111;
        $response['due_date'] = trim(substr($data, ($position), (strpos($data, '</font>', ($position)) - ($position))));

        // Obtener Saldo vencido
        $position = strpos($data, 'Saldo vencido:') + 116;
        $response['due_balance'] = trim(substr($data, ($position), (strpos($data, '</font>', ($position)) - ($position))));

        // Obtener Monto del último pago realizado:
        $position = strpos($data, 'Monto del &uacute;ltimo pago realizado:') + 130;
        $response['last_payment'] = trim(substr($data, ($position), (strpos($data, '</font>', ($position)) - ($position))));

        return $response;
    }
}