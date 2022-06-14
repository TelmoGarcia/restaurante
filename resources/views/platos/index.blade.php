@extends('layouts.app')
@section('content')


<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  
    <strong>
        
            {{ Session::get('mensaje') }}
        
    </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
    
</div>
@endif






<br><br>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Foto</th>

            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($plato as $platos)
        <tr>
            
            <td>{{ $platos->nombre }}</td>
            <td>{{ $platos->categoria }}</td>
            <td>{{ $platos->precio }}</td>
            <td>

                <img src="{{ asset('storage'.'/'.$platos->foto) }}" width="100" alt="">

            
            </td>
            <td> 
                
                <a href="{{ url('/platos/'.$platos->id.'/edit') }}" class="btn btn-warning">
                Editar
                </a>
                
                | 
            
                <form action="{{url('/platos/'.$platos->id)}}" class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro quieres borrar?')" value="borrar">

                </form>
                
            </td>

        </tr><br>
        @endforeach

    </tbody>


</table>

</div>

<br>
<a  href="{{ url('platos/create') }}" class="btn btn-success">Registrar nuevo plato</a>
@endsection