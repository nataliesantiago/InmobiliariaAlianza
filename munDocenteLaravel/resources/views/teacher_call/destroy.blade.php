@extends('layouts.routes.downtwice')

@section('menus')

    @include('menus.empty')

@stop

@section('principal')
<div id="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="12u 12u(mobile)">
    </div>
            <div class="2u 12u(mobile)"></div>

            <div class="8u 12u(mobile)">
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <h4><button type="btnClose" class="btnClose" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  ¡Completo!</h4>&nbsp;&nbsp;&nbsp;La convocatoria fue eliminada correctamente. 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
