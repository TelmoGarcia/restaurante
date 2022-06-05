
<h1>{{$modo}} plato</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        
        <ul>
            @foreach($errors->all() as $error)
        
                <li>{{ $error }}</li>   
        
            @endforeach
        </ul>
    
    </div>



@endif



<div class="form-group" style="color:#FEAD55">
    <label for="nombre" >Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ isset($plato->nombre) ?$plato->nombre:old('nombre') }}" id="nombre">
       <br>
</div>

<div class="form-group">
    <label for="categoria" style="color:#FEAD55">Categoria</label>
        <input type="text" class="form-control" name="categoria" value="{{ isset($plato->categoria) ?$plato->categoria:old('categoria') }}"id="categoria">
        <br>
</div>

<div class="form-group">
    <label for="precio" style="color:#FEAD55">Precio</label>
        <input type="text" class="form-control" name="precio" value="{{ isset($plato->precio) ?$plato->precio:old('precio') }}" id="precio">
        <br>
</div>

<div class="form-group" style="color:#FEAD55">
    <label for="foto">Foto</label>
    @if(isset($plato->foto))
    
    <img class="img-thumbnail img-fluid" src="{{ asset('storage'.'/'.$plato->foto) }}" width="100" alt="">
    @endif
    <input type="file" class="form-control" name="foto" value="" id="foto">
    <br>
</div>


<input class="btn btn-success" type="submit" value="{{$modo}} plato">

<a class="btn btn-primary" href="{{ url('platos/') }}">VOLVER</a>
<br>