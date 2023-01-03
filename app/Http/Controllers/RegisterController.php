<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use DB;

use App\Models\TProducto;
class RegisterController extends Controller
{
    public function actionInsert(Request $request)
    {
        if($_POST)
        {
            return $request;
        }
        return view('user.registrarVenta');
    }
    public function actionList()
    {
        return view('user.listarVentas');
    }
    public function actionSearch(Request $request)
    {
       try {
           $tproducto = TProducto::where('nameProduct', 'like', $request->search.'%')->get();
           return json_encode($tproducto);
       } catch (\Throwable $th) {
           return $th;
       }

    }
}
?>
