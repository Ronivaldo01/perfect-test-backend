@extends('layout')

@section('content')
    <h1>Adicionar / Editar Produto</h1>
    <div class='card'>
        <div class='card-body'>

            <form method="post" action="{{!isset($product->id) ? 'newRegister' : '/newUpdate/'}}{{$product->id ?? ''}}">
            @csrf
            {{ method_field('POST') }}
                <div class="form-group">
                    <label for="name">Nome do produto</label>
                    <input type="text" class="form-control " id="name" name="name"
                     value="{{$product->product ?? ''}}">
                </div>
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <textarea type="text" rows='5' class="form-control" id="description" name="description">{{$product->description ?? ''}}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Preço</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="100,00 ou maior" value="{{$product->price ?? ''}}">
                </div>
                
                <button type="submit" class="btn btn-primary">{{!empty($product->id) ? 'Editar' : 'Salvar'}}</button>
            </form>
        </div>
    </div>
@endsection
