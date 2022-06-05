@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/platos/'.$plato->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('platos.form',['modo'=>'Editar']) 

</form>
</div>
@endsection

