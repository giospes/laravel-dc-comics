@extends('layouts.app')

@section('content')
    
    <div class="card-container h-100 overflow-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $product->title}}</h4>
                    </div>
                    <div class="card-body">
                    <ul>
                            @foreach($product->toArray() as $key => $value)
                                @if(!in_array($key, [ 'created_at', 'updated_at']))
                                    <li>{{ $key }}: {{ $value }}</li> 
                                @endif  
                            @endforeach
                        </ul>
                    </div>
                </div>
            
        
    </div>
@endsection