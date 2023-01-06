<div style="display:flex; text-align: center">
    <img src="{{public_path('img/mariB.png')}}"  style="width: 80%;height: auto; border-radius:35%;filter: grayscale(100%);">

<h1 style="font-family: monospace;font-size: 14px">*** RECIBO - {{ $venta->nameComprobante }} ***</h1>
<p style="font-family: monospace;font-size:9px">
    Nuestro centro recreacional es el lugar perfecto para disfrutar de un día de diversión en familia o con amigos.
     Ofrecemos una amplia variedad de actividades al aire libre, como piscinas, juegos acuáticos y entre otros.

Además, en nuestro centro recreacional también ofrecemos servicios de comidas marinas de alta calidad.
 Nuestro equipo de chefs utiliza ingredientes frescos y de primera calidad para preparar una amplia variedad de platos marinos, 
 desde mariscos frescos hasta deliciosos platos de pescado a la parrilla.<br>
 <b>Av. El mariño S/N</b><br> 
 <b>Abancay - Apurímac</b>
</p>
<hr>
</div>
    <div style="position: absolute">
        <div style="width:130px;position: relative;" >
            <p style="font-family: monospace;font-size: 12px">
                <br><b>Señor(es)</b><br><br>
                <b>D.N.I</b><br><br>
                <b>Fecha de emisión</b>
            </p>
            <p></p>
            <hr>
        </div>
        <div style="width: 120px;position: relative; bottom:8rem;left: 8rem;">
            <p style="font-family: monospace;font-size: 12px">
                {{$venta->nameClient}}
                {{$venta->lastName}}
            </p>
            <p style="font-family: monospace;font-size: 12px">
                {{$venta->dni}} <br><br>
                {{ $venta->fechaEmision }}
            </p>
            <div>
                <hr>
            </div>
        </div>
    </div>
    <br>

{{-- <div >
    
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
</div> --}}
