@extends('layouts.app')

@section('content')
    @if(session()->has('message'))
        <div class="alert">
            {{session()->get('message')}}
        </div>
    @endif
    <div class="card-container h-100 overflow-auto">
        @foreach($products as $index => $product)
            <a href="{{ route('products.show', ['product' => $product->id])}}">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $product->title}}</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach($product->toArray() as $key => $value)
                                @if(!in_array($key, ['title', 'id', 'created_at', 'updated_at']))
                                    <li>{{ $key }}: {{ $value }}</li> 
                                @endif   
                            @endforeach
                        </ul>
                    </div>
                    <a href="{{ route('products.edit', ['product' => $product-> id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', ['product' => $product-> id]) }}", method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button btn btn-danger" data-item-title="{{$product->title}}">Delete</button>
                    </form>
                </div>
            </a>
        @endforeach
    </div>
    @include('Partials.popupdelete');
    
@endsection
