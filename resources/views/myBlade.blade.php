@extends('layouts.app')
@section('content')
<div>
    @foreach($categories as $category)
    <br>
    <a href="{{$category->route}}">{{$category->route}}</a>
    {{$category->title}}

       @if(count($category->children) > 0 )

               @foreach($category->children as $child)

                      ->{{$child->title}}

               @endforeach

       @endif

@endforeach
</div>

@endsection
