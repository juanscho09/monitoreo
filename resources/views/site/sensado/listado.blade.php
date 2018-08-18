@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Listado
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Home</h3>
                    </div>
                    <div class="box-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nro.</th>
                                        <th>Temperatura</th>
                                        <th>Humedad</th>
                                        <th>Ruido</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if( isset($parametros) )
                                        @foreach( $parametros as $param )
                                            <tr>
                                                <td>{{ $param->id }}</td>
                                                <td>{{ $param->temperatura }}</td>
                                                <td>{{ $param->humedad }}</td>
                                                <td>{{ $param->ruido }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            No se encontraron datos.
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            {{ $parametros->render() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection
