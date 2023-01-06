<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

use App\Models\TProducto;
use App\Models\TVenta;
class RegisterController extends Controller
{
    public function actionInsert(Request $request)
    {
        if($_POST)
        {
            try{
                DB::BeginTransaction();
                $tventa = new TVenta();
                $countComprobanteB = 0;
                $countComprobanteF = 0;
                $nameComprobante = '';
                if($request->comprobante == 'Boleta')
                {
                    if(TVenta::max('numberComprobanteBoleta')==(''||0))
                    {
                        $countComprobanteB = 1;
                        $nameComprobante = "B001-" . "1";
                    }
                    else
                    {
                        $countComprobanteB = TVenta::max('numberComprobanteBoleta') + 1;
                        $nameComprobante = "B001-" . $countComprobanteB;
                    }
                }
                if($request->comprobante == 'Factura')
                {
                    if(TVenta::max('numberComprobanteFactura')==(''||0))
                    {
                        $countComprobanteF = 1;
                        $nameComprobante = "F001-" . "1";
                    }
                    else
                    {
                        $countComprobanteF = TVenta::max('numberComprobanteFactura') + 1;
                        $nameComprobante = "F001-" . $countComprobanteF;
                    }
                }

                $arr = ['cevichemixtoCantidad','cevichesimpleCantidad','arrozconmariscosCantidad','ChicharróndepescadoCantidad'];
                $arrProductos = array();
                foreach($arr as $item)
                {
                    if(isset($request->$item))
                    {
                        //se concatena un nuevo atributo al objeto
                        $concat = $item.$request->$item;
                        array_push($arrProductos, $concat);
                    }
                }
                if($request->idNameClient == null)
                {
                    $nameClient = 'Anónimo';
                }
                else
                {
                    $nameClient = $request->idNameClient;
                }
                date_default_timezone_set('America/Lima');

                // $tventa->idVenta = uniqid();
                $tventa->idProducto = uniqid();
                $tventa->comprobante = $request->comprobanteBoleta;
                $tventa->numberComprobanteBoleta = $countComprobanteB;
                $tventa->numberComprobanteFactura = $countComprobanteF;
                $tventa->nameComprobante = $nameComprobante;
                $tventa->typeClient = $request->typeClient;
                $tventa->razonSocial = $request->idRazonSocial;
                $tventa->dni = $request->idDni;
                $tventa->nameClient = $nameClient;
                $tventa->lastName = $request->idLastName;
                $tventa->addressClient = $request->idAddress;
                $tventa->fechaEmision = date('y-m-d h:i:s');
                $tventa->igv = $request->idTotalCobrar * 18/100;
                $tventa->subTotal = $request->idTotalCobrar - $tventa->igv;
                $tventa->priceTotal = $request->idTotalCobrar;
                $tventa->productoCantidad = json_encode($arrProductos, JSON_UNESCAPED_UNICODE);//el json_unescaped.. para que permita caracters unicode(tidles,etc)
                $tventa->save();
                

                DB::commit();
                
                return redirect()->route('user.listarVentas')->with('success', 'Venta registrada correctamente');
            }
            catch(\Exception $e)
            {
                DB::rollback();
                return dd($e);
                return redirect()->route('user.listarVentas')->with('error', $e->getMessage());
            }
        }
        $venta = TVenta::find('2');
        $json = json_decode($venta->productoCantidad);
        $venta->productoCantidad = json_encode($json);
        return view('user.registrarVenta', compact('venta'));
    }
    public function actionList()
    {
        $tventa = TVenta::all();   
        return view('user.listarVentas', compact('tventa'));
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
