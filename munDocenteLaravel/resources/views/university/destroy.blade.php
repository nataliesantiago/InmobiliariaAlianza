@extends('layouts.routes.downtwice')

@section('menus')

    @include('admin.main_menu')
    
@stop

@section('principal')
<div id="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="12u 12u(mobile)">
    </div>
            <div class="2u 12u(mobile)"></div>

            <div class="8u 12u(mobile)">
                @yield('alert')

                <section class="box">

                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <h4><button type="btnClose" class="btnClose" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      ¡Completo!</h4>&nbsp;&nbsp;&nbsp;La institución académica fue eliminada correctamente. 
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
