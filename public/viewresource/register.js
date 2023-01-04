'use strict';
// crea una funció que cargue al renderizar la página sin jQuery
window.onload = function () {
    const dni = document.getElementById('idDni');
    const nameClient = document.getElementById('idNameClient');
    //crea una validación para el campo dni, que admita solo números
    dni.addEventListener('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    //crea una función que haga peticiones a la ruta '/search', cada vez que se escriba en un input con id 'idSearchProduct
    // const token = document.getElementById('idTokenCsrf').value;
    // const search = document.getElementById('idSearchProduct');
    // const selectProduto = document.getElementById('idSearchProducto');
    // search.addEventListener('input', function() {
    //         fetch('/search', {
    //             method: 'POST',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //                 'X-CSRF-TOKEN': token,
    //               },
    //             body: JSON.stringify({
    //                 search: search.value
    //             })
    //         })
    //         .then(response => response.json())
    //         .then(data => {
    //             selectProduto.innerHTML = 'xd';//para limpiar el select
    //             data.forEach(element => {
    //                 const option = document.createElement('option');
    //                 option.value = element.nameProduct;//para el value del option
    //                 option.innerHTML = element.nameProduct;//
    //                 selectProduto.appendChild(option);
    //             });
    //         });  
    // });

    const selectDivSearch = document.querySelector('.selected');
    const table = document.getElementById('idTable');
    // const nameCelda = table.querySelector("tr:first-child td:nth-child(1)");
    const cantidadCelda = table.querySelector("tr:first-child td:nth-child(2)");
    selectDivSearch.addEventListener('DOMSubtreeModified', function () {
        if (selectDivSearch.innerHTML !== '') {
            //si no existe el producto en la tabla, lo crea
            if (!document.getElementById(selectDivSearch.innerHTML.split(' ').join(''))) {
                const tr = document.createElement('tr');
                const tdNameProducto = document.createElement('td');
                const tdCantidadProducto = document.createElement('td');
                const tdPrecioProducto = document.createElement('td');
                const tdSubtotalProducto = document.createElement('td');
                const tdIgv = document.createElement('td');
                const tdTotal = document.createElement('td');

                const tr2 = document.createElement('tr');
                const tdSubtotalProductoTotal = document.createElement('td');
                const tdIgvTotal = document.createElement('td');
                
                tdNameProducto.id = selectDivSearch.innerHTML.split(' ').join('');
                tdNameProducto.innerHTML = selectDivSearch.innerHTML;
                tdCantidadProducto.id = selectDivSearch.innerHTML.split(' ').join('') + 'Cantidad';
                tdCantidadProducto.innerHTML = 1;
                tdPrecioProducto.id = selectDivSearch.innerHTML.split(' ').join('') + 'Precio';
                tdSubtotalProducto.id = selectDivSearch.innerHTML.split(' ').join('') + 'Subtotal';
                tdIgv.id = selectDivSearch.innerHTML.split(' ').join('') + 'Igv';
                tdTotal.id = selectDivSearch.innerHTML.split(' ').join('') + 'Total';

                if (selectDivSearch.innerHTML.split(' ').join('') == 'cevichemixto') {
                    tdPrecioProducto.innerHTML = 20;
                    tdSubtotalProducto.innerHTML = parseFloat(tdPrecioProducto.innerHTML) - (parseFloat(tdPrecioProducto.innerHTML) * 18 / 100);
                    tdIgv.innerHTML = parseFloat(tdPrecioProducto.innerHTML) * 18 / 100;
                    tdTotal.innerHTML = tdPrecioProducto.innerHTML;
                }
                if (selectDivSearch.innerHTML.split(' ').join('') == 'cevichesimple') {
                    tdPrecioProducto.innerHTML = 15;
                    tdSubtotalProducto.innerHTML = parseFloat(tdPrecioProducto.innerHTML) - (parseFloat(tdPrecioProducto.innerHTML) * 18 / 100);
                    tdIgv.innerHTML = parseFloat(tdPrecioProducto.innerHTML) * 18 / 100;
                    tdTotal.innerHTML = tdPrecioProducto.innerHTML;
                }
                if (selectDivSearch.innerHTML.split(' ').join('') == 'arrozconmariscos') {
                    tdPrecioProducto.innerHTML = 23;
                    tdSubtotalProducto.innerHTML = parseFloat(tdPrecioProducto.innerHTML) - (parseFloat(tdPrecioProducto.innerHTML) * 18 / 100);
                    tdIgv.innerHTML = parseFloat(tdPrecioProducto.innerHTML) * 18 / 100;
                    tdTotal.innerHTML = tdPrecioProducto.innerHTML;
                }
                if (selectDivSearch.innerHTML.split(' ').join('') == 'Chicharróndepescado') {
                    tdPrecioProducto.innerHTML = 28;
                    tdSubtotalProducto.innerHTML = parseFloat(tdPrecioProducto.innerHTML) - (parseFloat(tdPrecioProducto.innerHTML) * 18 / 100);
                    tdIgv.innerHTML = parseFloat(tdPrecioProducto.innerHTML) * 18 / 100;
                    tdTotal.innerHTML = tdPrecioProducto.innerHTML;
                }
                tr.appendChild(tdNameProducto);
                tr.appendChild(tdPrecioProducto);
                tr.appendChild(tdCantidadProducto);
                tr.appendChild(tdSubtotalProducto);
                tr.appendChild(tdIgv);
                tr.appendChild(tdTotal);

                tr2
                table.appendChild(tr);


            }
            else {


                //si existe el producto en la tabla, aumenta la cantidad
                const tdCantidadProducto = document.getElementById(selectDivSearch.innerHTML.split(' ').join('') + 'Cantidad');
                const tdNameProducto = document.getElementById(selectDivSearch.innerHTML.split(' ').join(''));
                const tdPrecioProducto = document.getElementById(selectDivSearch.innerHTML.split(' ').join('') + 'Precio');
                const tdSubtotalProducto = document.getElementById(selectDivSearch.innerHTML.split(' ').join('') + 'Subtotal');
                const tdIgv = document.getElementById(selectDivSearch.innerHTML.split(' ').join('') + 'Igv');
                const tdTotal = document.getElementById(selectDivSearch.innerHTML.split(' ').join('') + 'Total');
                // const nameCeldamixto = document.querySelector('#cevichemixto').innerHTML.replace(/\s/g, '');
                // const nameCeldasimple = document.querySelector('#cevichesimple').innerHTML.replace(/\s/g, '');
                // const nameCeldaarroz = document.querySelector('#arrozconmariscos').innerHTML.replace(/\s/g, '');
                // const nameCeldachicharron = document.querySelector('#Chicharróndepescado').innerHTML.replace(/\s/g, '');
                const selectDivSearch2 = selectDivSearch.innerHTML.replace(/\s/g, '');
                tdCantidadProducto.innerHTML = parseInt(tdCantidadProducto.innerHTML) + 1;
                if (selectDivSearch2 == 'cevichemixto') {
                    tdPrecioProducto.innerHTML = 20;
                    tdSubtotalProducto.innerHTML = (parseFloat(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)) - (parseInt(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)* 18 / 100);
                    tdIgv.innerHTML = (parseFloat(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)) * 18 / 100;
                    tdTotal.innerHTML = parseInt(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML);
                }
                if(selectDivSearch2 == 'cevichesimple'){
                    tdPrecioProducto.innerHTML = 15;
                    tdSubtotalProducto.innerHTML = (parseFloat(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)) - (parseInt(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)* 18 / 100);
                    tdIgv.innerHTML = (parseFloat(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)) * 18 / 100;
                    tdTotal.innerHTML = parseInt(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML);
                }
                if(selectDivSearch2 == 'arrozconmariscos'){
                    tdPrecioProducto.innerHTML = 23;
                    tdSubtotalProducto.innerHTML = (parseFloat(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)) - (parseInt(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)* 18 / 100);
                    tdIgv.innerHTML = (parseFloat(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)) * 18 / 100;
                    tdTotal.innerHTML = parseInt(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML);
                }
                if(selectDivSearch2 == 'Chicharróndepescado'){
                    tdPrecioProducto.innerHTML = 28;
                    tdSubtotalProducto.innerHTML = (parseFloat(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)) - (parseInt(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)* 18 / 100);
                    tdIgv.innerHTML = (parseFloat(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML)) * 18 / 100;
                    tdTotal.innerHTML = parseInt(tdPrecioProducto.innerHTML) * parseInt(tdCantidadProducto.innerHTML);
                }
            }
        }
    });
    //crea un evento del selectProducto que añada el producto a la tabla en el td con id 'tdNameProducto'
    selectProduto.addEventListener('change', function () {
        console.log(selectProduto.value)
        const tr = document.createElement('tr');
        const tdNameProducto = document.createElement('td');
        tdNameProducto.id = selectProduto.value;
        tdNameProducto.innerHTML = selectProduto.value;
        tr.appendChild(tdNameProducto);
        table.appendChild(tr);
    });
    selectProduto.addEventListener('change', function () {
        //coloca el valor del select en el input
    });

}
const selectComprobante = document.getElementById('selectComprobante');

const idContentRazonSocial = document.getElementById('idContentRazonSocial');
const idContentTypeClient = document.getElementById('idContentTypeClient');
const idContentRuc = document.getElementById('idContentRuc');
const idContentDni = document.getElementById('idContentDni');
const idContentNameClient = document.getElementById('idContentNameClient');
const idLastName = document.getElementById('idLastName');

selectComprobante.addEventListener('change', function () {
    if (this.value === 'Factura') {
        idContentRazonSocial.style.display = 'block';
        idContentRuc.style.display = 'block';
        idContentTypeClient.style.display = 'none';
        idContentDni.style.display = 'none';
        idContentNameClient.style.display = 'none';
        idLastName.style.display = 'none';
    } else {
        idContentRazonSocial.style.display = 'none';
        idContentRuc.style.display = 'none';
        idContentTypeClient.style.display = 'block';
        idContentDni.style.display = 'block';
        idContentNameClient.style.display = 'block';
        idLastName.style.display = 'block';

    }
});
const selectTypeClient = document.getElementById('selectTypeClient');
selectTypeClient.addEventListener('change', function () {
    if (this.value === 'Juridica') {
        idContentRazonSocial.style.display = 'block';
        idContentRuc.style.display = 'block';
        idContentDni.style.display = 'none';
        idContentNameClient.style.display = 'none';
        idLastName.style.display = 'none';
    } else {
        idContentRazonSocial.style.display = 'none';
        idContentRuc.style.display = 'none';
        idContentDni.style.display = 'block';
        idContentNameClient.style.display = 'block';
        idLastName.style.display = 'block';
    }
});
