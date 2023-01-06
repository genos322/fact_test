@extends('template.layaout')

@section('user')
    <h1>LISTA DE VENTAS</h1>
    <div class="contentList">
        <div class="row" style="margin-top: 6rem;margin-left: 2rem">
            <div class="col-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Comprobante</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tventa as $venta)
                            <tr>
                                <td>{{ $venta->nameComprobante }}</td>
                                <td>{{ $venta->fechaEmision }}</td>
                                <td>{{ $venta->nameClient }}</td>
                                <td>{{ $venta->priceTotal }}</td>
                                <td>
                                    <a href="{{ url('pdf/ticket/' . $venta->id) }}" class="btn btn-success"><i class="ion-printer"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection