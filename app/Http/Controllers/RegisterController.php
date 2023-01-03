<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class RegisterController extends Controller
{
    public function actionInsert()
    {
        if($_POST)
        {
            return 'ass';
        }
        return view('user.registrarVenta');
    }
    public function actionList()
    {
        return view('user.listarVentas');
    }
}
?>
