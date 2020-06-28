@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="/exportar">exportar</a>
        <div class="col-12 table-responsive">
            <table class="table table-striped table-sm table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>expediente</th>
                        <th>producto</th>
                        <th>titular</th>
                        <th>registro sanitario</th>
                        <th>fecha expedicion</th>
                        <th>fecha vencimiento</th>
                        <th>estado registro</th>
                        <th>expediente cum</th>
                        <th>consecutivo cum</th>
                        <th>cantidad cum</th>
                        <th>descripcion comercial</th>
                        <th>estado cum</th>
                        <th>fecha activo</th>
                        <th>fecha inactivo</th>
                        <th>muestra medica</th>
                        <th>unidad</th>
                        <th>atc</th>
                        <th>descripcion atc</th>
                        <th>via administracion</th>
                        <th>concentracion</th>
                        <th>principio activo</th>
                        <th>unidad medida</th>
                        <th>cantidad</th>
                        <th>unidadre ferencia</th>
                        <th>forma farmaceutica</th>
                        <th>nombre rol</th>
                        <th>tipo rol</th>
                        <th>modalidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicamentos as $me)
                    <tr>
                        <td>{{ $me->id }}</td>
                        <td>{{ $me->expediente }}</td>
                        <td>{{ $me->producto }}</td>
                        <td>{{ $me->registrosanitario }}</td>
                        <td>{{ $me->fechaexpedicion }}</td>
                        <td>{{ $me->fechavencimiento }}</td>
                        <td>{{ $me->estadoregistro }}</td>
                        <td>{{ $me->expedientecum }}</td>
                        <td>{{ $me->consecutivocum }}</td>
                        <td>{{ $me->cantidadcum }}</td>
                        <td>{{ $me->descripcioncomercial }}</td>
                        <td>{{ $me->estadocum }}</td>
                        <td>{{ $me->fechaactivo }}</td>
                        <td>{{ $me->fechainactivo }}</td>
                        <td>{{ $me->muestramedica }}</td>
                        <td>{{ $me->unidad }}</td>
                        <td>{{ $me->atc }}</td>
                        <td>{{ $me->descripcionatc }}</td>
                        <td>{{ $me->viaadministracion }}</td>
                        <td>{{ $me->concentracion }}</td>
                        <td>{{ $me->principioactivo }}</td>
                        <td>{{ $me->unidadmedida }}</td>
                        <td>{{ $me->cantidad }}</td>
                        <td>{{ $me->unidadreferencia }}</td>
                        <td>{{ $me->formafarmaceutica }}</td>
                        <td>{{ $me->nombrerol }}</td>
                        <td>{{ $me->tiporol }}</td>
                        <td>{{ $me->modalidad }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $medicamentos->links() }}
        </div>
    </div>
</div>
@endsection