@extends('template.layaout')

@section('user')
    <h1>Registro de ventas</h1>
    <div class="contentRegister" onload="validation()">
        <form id="frmInsertVenta" action="{{ url('user/registrarVenta')}}" method="post">
            @csrf
            <div class="firstCol">
                <div class="form-group">
                    <label for="txtComprobante" class="txtTitle" style="">Comprobante</label>
                    <br>
                    <select name="comprobante" id="selectComprobante">
                        <option value="Boleta">Boleta</option>
                        <option value="Factura">Factura</option>
                    </select>
                </div>
                <div class="form-group" id="idContentTypeClient">
                    <label for="txtTypeClient" class="txtTitle">Tipo de Cliente</label>
                    <br>
                    <select name="tiypeClient" id="selectTypeClient">
                        <option value="Natural">Natural</option>
                        <option value="Juridica">Jurídico</option>
                    </select>
                </div>
                <div class="form-group" id="idContentRuc" style="display:none;">
                    <label for="txtRuc" class="txtTitle">RUC</label>
                    <br>
                    <input type="text" id="idRuc">
                </div>
                <div class="form-group" id="idContentRazonSocial" style="display: none;">
                    <label for="txtRazonSocial" class="txtTitle">Razón social</label>
                    <input type="text" id="idRazonSocial">
                </div>
                <div class="form-group" id="idContentDni">
                    <label for="txtDni" class="txtTitle" style="margin-right: 2rem">DNI</label>
                    <br>
                    <input type="text" id="idDni">
                </div>
                <div class="form-group" id="idContentNameClient">
                    <label for="txtNameClient" class="txtTitle">Nombre cliente</label>
                    <br>
                    <input type="text" id="idNameClient">
                </div>
                <div class="form-group" id="idLastName">
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
    <script src="{{ asset('viewresource/register.js')}}"></script>
@endsection
