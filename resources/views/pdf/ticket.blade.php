<h1>RECIBO - {{ $venta->nameComprobante }}</h1>

<p>Fecha: {{ $venta->fechaEmision }}</p>
<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

<p>Total: {{ $venta->priceTotal }}</p>