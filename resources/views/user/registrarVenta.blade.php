@extends('template.layaout')

@section('user')
    <h1>Registro de ventas</h1>
    <div class="contentRegister">
        <form id="frmInsertVenta" action="{{ url('user/registrarVenta') }}" method="post">
            <input type="text" id="idTokenCsrf" value="{{ csrf_token() }}" hidden>
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
                    <select name="typeClient" id="selectTypeClient">
                        <option value="Natural">Natural</option>
                        <option value="Juridica">Jurídico</option>
                    </select>
                </div>
                <div class="form-group" id="idContentRuc" style="display:none;">
                    <label for="txtRuc" class="txtTitle">RUC</label>
                    <br>
                    <input type="text" name="idRuc" id="idRuc">
                </div>
                <div class="form-group" id="idContentRazonSocial" style="display: none;">
                    <label for="txtRazonSocial" class="txtTitle">Razón social</label>
                    <br>
                    <input type="text" name="idRazonSocial" id="idRazonSocial">
                </div>@csrf
                <div class="form-group" id="idContentDni">
                    <label for="txtDni" class="txtTitle" style="margin-right: 2rem">DNI</label>
                    <br>
                    <input type="text" name="idDni" id="idDni">
                </div>
                <div class="form-group" id="idContentNameClient">
                    <label for="txtNameClient" class="txtTitle">Nombre cliente</label>
                    <br>
                    <input type="text" name="idNameClient" id="idNameClient">
                </div>
                <div class="form-group" id="idLastName">
                    <label for="txtLastName" class="txtTitle">Apellido cliente</label>
                    <br>
                    <input type="text" name="idLastName" id="idLastName">
                </div>
                <div class="form-group">
                    <label for="txtAddress" class="txtTitle">Dirección</label>
                    <br>
                    <input type="text" name="idAddress" id="idAddress">
                </div>
            </div>
            <div class="secondCol">
                <div class="form-group searchBox">
                    {{-- <input type="text" placeholder="Busca prouducto..." id="idSearchProduct" style="position: relative">
                    <select name="selectSearch" id="idSearchProducto" style="width:20px;">
                        <option value="..." id="idOptionProducto">...</option>
                    </select> --}}
                    <div class="select-box">
                        <div class="options-container">
                            <div class="option">
                                <input type="radio" class="radio" id="automobiles" name="category" />
                                <label for="cevicheSimple">ceviche simple</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="film" name="category" />
                                <label for="cevicheMixto">ceviche mixto</label>
                            </div>
                            <div class="option">
                                <input type="radio" class="radio" id="film" name="category" />
                                <label for="arrozMarisco">arroz con mariscos</label>
                            </div>
                            <div class="option">
                                <input type="radio" class="radio" id="film" name="category" />
                                <label for="chicharronPescado">Chicharrón de pescado</label>
                            </div>
                        </div>

                        <div class="selected">...</div>

                        <div class="search-box">
                            <input type="text" placeholder="Escriba aquí..." />
                        </div>
                    </div>
            </div>
                    <table class="table" id="idTable">
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
                            {{-- <tr>
                                <td class="tdNameProducto"></td>
                                <td class="tdPrecio">1</td>
                                <td class="tdCantidad">100</td>
                                <td class="tdSubtotal">100</td>
                                <td>18%</td>
                                <td class="tdTotal">null</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div class="terCol">
                    <div class="form-group">
                        <label for="montoPago" class="txtTitle">Monto pago</label>
                        <br>
                        <input type="text" name="idMontoPago" id="idMontoPago">
                    </div>
                    <div class="form-group">
                        <label for="totalCobrar" class="txtTitle">Total a cobrar</label>
                        <br>
                        <input type="text" name="idTotalCobrar" id="idTotalCobrar" >
                    </div>
                    <div class="form-group">
                        <label for="vuelto" class="txtTitle">Vuelto</label>
                        <br>
                        <input type="text" name="idVuelto" id="idVuelto" disabled>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"  id="miForm" onclick="sendForm(event)">Registrar</button>
                    </div>
        </form>
    </div>
    <script>
        const selectedAll = document.querySelectorAll(".selected");

        selectedAll.forEach((selected) => {
            const optionsContainer = selected.previousElementSibling;
            const searchBox = selected.nextElementSibling;

            const optionsList = optionsContainer.querySelectorAll(".option");

            selected.addEventListener("click", () => {
                if (optionsContainer.classList.contains("active")) {
                    optionsContainer.classList.remove("active");
                } else {
                    let currentActive = document.querySelector(".options-container.active");

                    if (currentActive) {
                        currentActive.classList.remove("active");
                    }

                    optionsContainer.classList.add("active");
                }

                searchBox.value = "";
                filterList("");

                if (optionsContainer.classList.contains("active")) {
                    searchBox.focus();
                }
            });

            optionsList.forEach((o) => {
                o.addEventListener("click", () => {
                    selected.innerHTML = o.querySelector("label").innerHTML;
                    optionsContainer.classList.remove("active");
                });
            });

            searchBox.addEventListener("keyup", function(e) {
                filterList(e.target.value);
            });

            const filterList = (searchTerm) => {
                searchTerm = searchTerm.toLowerCase();
                optionsList.forEach((option) => {
                    let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
                    if (label.indexOf(searchTerm) != -1) {
                        option.style.display = "block";
                    } else {
                        option.style.display = "none";
                    }
                });
            };
        });
    </script>
    <script src="{{ asset('viewresource/register.js') }}"></script>
@endsection
