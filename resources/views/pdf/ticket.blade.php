<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="display:flex; text-align: center">
        <img src="{{ public_path('img/mariB.png') }}"
            style="width: 80%;height: auto; border-radius:35%;filter: grayscale(100%);">

        <h1 style="font-family: monospace;font-size: 14px">*** RECIBO - {{ $venta->nameComprobante }} ***</h1>
        <p style="font-family: monospace;font-size:9px">
            Nuestro centro recreacional es el lugar perfecto para disfrutar de un día de diversión en familia o con
            amigos.
            Ofrecemos una amplia variedad de actividades al aire libre, como piscinas, juegos acuáticos y entre otros.

            Además, en nuestro centro recreacional también ofrecemos servicios de comidas marinas de alta calidad.
            Nuestro equipo de chefs utiliza ingredientes frescos y de primera calidad para preparar una amplia variedad
            de platos marinos,
            desde mariscos frescos hasta deliciosos platos de pescado a la parrilla.<br>
            <b>Av. El mariño S/N</b><br>
            <b>Abancay - Apurímac</b>
        </p>
        <hr>
    </div>
    <div >
        <div style="position: absolute">
                <div style="width: 120px;position: relative;left: 8rem;">
                    <div style="min-height: 26px;position:relative; top: 4px">
                        <p style="font-family: monospace;font-size: 12px">
                            {{ $venta->nameClient }}
                            {{ $venta->lastName }}
                        </p>
                    </div>
                    <div style="position:relative;bottom: 14px">
                        <p style="font-family: monospace;font-size: 12px">
                            {{ $venta->dni }}
                        </p>
                    </div>
                    <div style="position:relative;bottom: 24px">
                        <p style="font-family: monospace;font-size: 12px">
                            {{ $venta->fechaEmision }}
                        </p>
                    </div>
                </div>
        </div>
        <div style="width:130px;">
            <p style="font-family: monospace;font-size: 12px">
                <br><b>Señor(es)</b><br><br>
                <b>D.N.I</b><br><br>
                <b>Fecha de emisión</b>
            </p>
            <p></p>
        </div>
    </div>
    <hr>
    <div style="position: absolute;">
        <p style="font-family: monospace;font-size: 12px; margin-top: 0px">
            <b>Producto</b>
        </p>
        <p style="position: relative; left: 210px; bottom: 25px; font-family: monospace;font-size: 12px">
            <b>Total</b>
        </p>
        <p style=" position: relative; font-family: monospace;font-size: 12px;  left: 125px ; bottom: 50px">
            <b>Cantidad</b>
        </p>
            @foreach(explode(',',$venta->productoCantidad) as $prod)
            @php 
            $arr = explode('Cantidad',$prod);
            @endphp   
            <p style="position: relative;font-family: monospace;font-size: 11px;bottom: 50px">
                    {{ $arr[0] }}
            </p>            
            @endforeach
    </div>
    <div style="position: absolute">
            @foreach(explode(',',$venta->productoCantidad) as $prod)
            @php 
            $arr = explode('Cantidad',$prod);
            @endphp 
            <p style="position: relative;font-family: monospace;font-size: 11px;left: 160px;top: 10px">
                {{ $arr[1] }}
            </p>
            @endforeach
    </div>


</body>

</html>
