@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Listado
@endsection

@section('script_page')
    {{ Html::script('js/site/sensado/listado.js') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">



                <canvas data-type="radial-gauge"
                        data-width="300"
                        data-height="300"
                        data-units="Km/h"
                        data-min-value="0"
                        data-max-value="220"
                        data-major-ticks="0,20,40,60,80,100,120,140,160,180,200,220"
                        data-minor-ticks="2"
                        data-stroke-ticks="true"
                        data-highlights='[
        {"from": 160, "to": 220, "color": "rgba(200, 50, 50, .75)"}
    ]'
                        data-color-plate="#fff"
                        data-border-shadow-width="0"
                        data-borders="false"
                        data-needle-type="arrow"
                        data-needle-width="2"
                        data-needle-circle-size="7"
                        data-needle-circle-outer="true"
                        data-needle-circle-inner="false"
                        data-animation-duration="1500"
                        data-animation-rule="linear"
                ></canvas>



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
