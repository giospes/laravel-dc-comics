@extends('layouts.app')

@section('content')
    <h2>Inserisci nuovo prodotto</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text " class="form-control" id="title" name="title" aria-describedby="TextHelp">
            <div id="TextHelp" class="form-text">Title</div>
        </div>
        <div class="mb-3">
            <label for="descrition" class="form-label">descrition</label>
            <input type="text " class="form-control" id="descrition" name="descrition" aria-describedby="descritionHelp">
            <div id="descritionhelp" class="form-text">descrition</div>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text " class="form-control" id="price" name="price" aria-describedby="priceHelp">
            <div id="pricehelp" class="form-text">price</div>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text " class="form-control" id="quantity"  name="quantity" aria-describedby="quantityHelp">
            <div id="quantityhelp" class="form-text">Quantity</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection