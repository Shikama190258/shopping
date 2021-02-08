<!-- このページは index.blade.php -->

@php
$title = '商品一覧';
@endphp

@extends('layouts.admin')



<section>
    <p>
        <a href="{{ route('admin.item.create') }}" class="btn btn-outline-primary">{{ __('New')}}
        
        </a>
    </p>
    <div>
        @if (isset($items))
        @foreach($items as $item)
        <a href="{{ route('admin.item.edit', ['id' => $item->id]) }}" class=>

        </a>

        <p>
            
        </p>
    
    </div>


        <!-- 商品一覧ページです。 -->
</section>
 