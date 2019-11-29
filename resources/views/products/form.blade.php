@extends('layouts.app')


@section('content')

    <section class="container">
    <div class="row col-md-12">
        <h1>Cadastro de Produtos</h1>
    </div>
        <form action="/produtos/cadastrar" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nameProduct">Nome do Produto</label>
                <input class="form-control" type="text" name="nameProduct" id="nameProduct">
            </div>
            <div class="form-group">
                <label for="descriptionProduct">Descrição do Produto</label>
                <input class="form-control" type="text" name="descriptionProduct" id="descriptionProduct">
            </div>
            <div class="form-group">
                <label for="quantityProduct">Quantidade do Produto</label>
                <input class="form-control" type="number" name="quantityProduct" id="quantityProduct">
            </div>
            <div class="form-group">
                <label for="priceProduct">Preço do Produto</label>
                <input class="form-control" type="number" name="priceProduct" id="priceProduct">
            </div>
            <div class="form-group">
                <label for="imgProduct">Imagem do Produto</label>
                <input type="file" class="form-control" name="imgProduct" id="imgProduct">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
            
            
        </form>
    </section>
@endsection 