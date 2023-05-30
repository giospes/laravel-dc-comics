@extends('layouts.app')

@section('content')
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

                </div>
            </a>
        @endforeach
    </div>
@endsection
