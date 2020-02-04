@extends("theme.$theme.layout")
@section('titulo')
    Crear Menús
@endsection
    
@section('scripts')
  <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>    
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
      
      @include('includes.form-error')

      @include('includes.mensaje')

      <div class="card card-border-danger">
        <div class="card-header">
          <h3 class="card-title">Crear Menús</h3>
        </div>
        <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="post" autocomplete="off">
          @csrf
          <!-- /.card-header -->
          <div class="card-body">

              @include('admin.menu.form')

          </div>
          
          <div class="card-footer">
            <div class="col-lg-10 float-right">              

              @include('includes.boton-form-crear')

            </div>
          </div>

        </form>      
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

@endsection