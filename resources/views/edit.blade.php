@extends('layouts.app')

@section('content')
    <h2>Inserisci nuovo prodotto</h2>
    @if($errors-> any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.update', $product->id) }}" method="POST">

        @csrf 
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text " class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$product->title}}" aria-describedby="TextHelp">
            <div id="TextHelp" class="form-text">Title</div>
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="descrition" class="form-label">descrition</label>
            <input type="text " class="form-control @error('descrition') is-invalid @enderror" id="descrition" name="descrition" value="{{$product->descrition}}" aria-describedby="descritionHelp">
            <div id="descritionhelp" class="form-text">descrition</div>
            @error('descrition')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text " class="form-control  @error('price') is-invalid @enderror" id="price" name="price" value="{{$product->price}}" aria-describedby="priceHelp">
            <div id="pricehelp" class="form-text">price</div>
            @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text " class="form-control  @error('quantity') is-invalid @enderror" id="quantity"  name="quantity" value="{{$product->quantity}}" aria-describedby="quantityHelp">
            <div id="quantityhelp" class="form-text">Quantity</div>
            @error('quantity')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection