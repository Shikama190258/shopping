@php
$title = '商品追加';
@endphp

@extends('layouts.admin')

@section('content')

<section>
    <form action="{{ route('admin.item.add') }}" method="post">
        @csrf
        <div>
            <p>
                {{ __('Item Name') }}
                <input type="text" name="name" value="{{ old('name', @item->name) }}" required>
        
        
            </p>
            <p>
                {{ __('Item Code') }}
                <input type="text" name="code" value="{{ old('code', @item->code) }}" required>
       
            </p>

            <p>
                {{ __('Price') }}
                <input type="text" name="price" value="{{ old('price', @item->price) }}" required>
       
            </p>
        
    
    
    
    
        </div>

        <button class="btn btn primary">{{__('Add') }}
    
        </button>

        <a href="{{ route('admin.item.index') }}">{{ __('Back') }}
    
        </a>











    </form>

</section>
@endsection