<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use DB;

use App\Models\TProducto;
use App\Models\TVenta;
class RegisterController extends Controller
{
    public function actionInsert(Request $request)
    {
        if($_POST)
        {    return $request;   
            try{
                date_default_timezone_set('America/Lima');
                DB::BeginTransaction();
                $tventa = new TVenta();
                $tventa->idVenta = uniqid();
                $tventa->idProducto = uniqid();
                $tventa->comprobante = $request->comprobanteBoleta;
                $tventa->typeClient = $request->typeClient;
                $tventa->razonSocial = $request->idRazonSocial;
                $tventa->dni = $request->idDni;
                $tventa->nameClient = $request->idNameClient;
                $tventa->lastName = $request->idLastName;
                $tventa->addressClient = $request->idAddress;
                $tventa->fechaEmision = date('y-m-d h:i:s');
                $tventa->igv = $request->idTotalCobrar * 18/100;
                $tventa->subTotal = $request->idTotalCobrar - $tventa->igv;
                $tventa->priceTotal = $request->idTotalCobrar;
                $tventa->save();
                

                DB::commit();
            }
            catch(\Exception $e)
            {
                DB::rollback();
                return dd($e);
                return redirect()->route('user.registrarVenta')->with('error', $e->getMessage());
            }
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
