@extends('layout')

@section('content')
    <h1>Adicionar / Editar Venda</h1>
    <div class='card'>
        <div class='card-body'>
            <form method="post" action="createSales">
            @csrf
            {{ method_field('POST') }}
                <h5>Informações do cliente</h5>
                <div class="form-group">
                    <label for="name">Nome do cliente</label>
                    <input type="text" class="form-control " id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" placeholder="99999999999">
                </div>
                <h5 class='mt-5'>Informações da venda</h5>
                <div class="form-group">
                    <label for="product">Produto</label>
                    <select id="product" class="form-control">
                        <option selected>Escolha...</option>
                        @foreach($products as $product)
                        <option name="product_id" value="{{$product->id}}">{{$product->product}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Data</label>
                    <input type="text" class="form-control single_date_picker" name="date" id="date">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantidade</label>
                    <input type="text" class="form-control" name="quantity" id="quantity" placeholder="1 a 10">
                </div>
                <div class="form-group">
                    <label for="discount">Desconto</label>
                    <input type="text" class="form-control" name="discount" id="discount" placeholder="100,00 ou menor">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" class="form-control">
                        <option selected>Escolha...</option>
                        <option name='status'>Aprovado</option>
                        <option name='status'>Cancelado</option>
                        <option name='status'>Devolvido</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@endsection
