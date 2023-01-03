'use strict';
// crea una funció que cargue al renderizar la página sin jQuery
window.onload = function() {
    const dni = document.getElementById('idDni');
    const nameClient = document.getElementById('idNameClient');
    //crea una validación para el campo dni, que admita solo números
    dni.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
}
const selectComprobante = document.getElementById('selectComprobante');

const idContentRazonSocial = document.getElementById('idContentRazonSocial');
const idContentTypeClient = document.getElementById('idContentTypeClient');
const idContentRuc = document.getElementById('idContentRuc');
const idContentDni = document.getElementById('idContentDni');
const idContentNameClient = document.getElementById('idContentNameClient');
const idLastName = document.getElementById('idLastName');

selectComprobante.addEventListener('change', function() {
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
selectTypeClient.addEventListener('change', function() {
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