@extends('template.layaout')

@section('user')
    <h1>Registro de ventas</h1>
    <div class="contentRegister">
        <form id="frmInsertVenta" action="">
            <div class="firstCol">
                <div class="form-group">
                    <label for="txtComprobante" class="txtTitle" style="">Comprobante</label>
                    <br>
                    <select name="comprobante" id="selectComprobante">
                        <option value="opBoleta">Boleta</option>
                        <option value="opFactura">Factura</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtTypeClient" class="txtTitle">Tipo de Cliente</label>
                    <br>
                    <select name="tiypeClient" id="selectTypeClien">
                        <option value="opNatural">Natural</option>
                        <option value="opJuridica">Jurídico</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtDni" class="txtTitle" style="margin-right: 2rem">DNI</label>
                    <br>
                    <input type="txt" id="idDni">
                </div>
                <div class="form-group">
                    <label for="txtNameClient" class="txtTitle">Nombre cliente</label>
                    <br>
                    <input type="txt" id="idNameClient">
                </div>
                <div class="form-group">
                    <label for="txtLastName" class="txtTitle">Apellido cliente</label>
                    <br>
                    <input type="text" id="idLastName">
                </div>
                <div class="form-group">
                    <label for="txtAddress" class="txtTitle">Dirección</label>
                    <br>
                    <input type="text" id="idAddress">
                </div>
            </div>
            <div class="secondCol">
                <div class="form-group searchBox">
                    <input type="text" placeholder="Busca prouducto..." id="idSearchProduct">
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre del producto</th>
                            <th>Precio v.u.</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                            <th>IGV</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Producto 1</td>
                            <td>1</td>
                            <td>100</td>
                            <td>100</td>
                            <td>18%</td>
                            <td>null</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="terCol">
                <div class="form-group">
                    <label for="montoPago" class="txtTitle">Monto pago</label>
                    <br>
                    <input type="text" id="idMontoPago">
                </div>  
                <div class="form-group">
                    <label for="totalCobrar" class="txtTitle">Total a cobrar</label>
                    <br>
                    <input type="text" id="idTotalCobrar" disabled>
                </div>
                <div class="form-group">
                    <label for="vuelto" class="txtTitle">Vuelto</label>
                    <br>
                    <input type="text" id="idVuelto" disabled>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
