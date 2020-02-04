<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido text-right">Nombre</label>         
    <div class="col-lg-8">
        <input type="text" name="nombre" id="nombre" class="form-control ml-3" value="{{old('nombre')}}">
    </div>
</div>

<div class="form-group row">
    <label for="url" class="col-lg-2 col-form-label requerido text-right">Url</label>
    <div class="col-lg-8">
        <input type="text" name="url" id="url" class="form-control ml-3" value="{{old('url')}}">          
    </div>  
</div>

<div class="form-group row">
    <label for="icono" class="col-lg-2 control-label text-right">Icono</label>
    <div class="col-lg-8">
        <input type="text" name="icono" id="icono" class="form-control ml-3" value="{{old('icono')}}"/>
    </div>  
</div>