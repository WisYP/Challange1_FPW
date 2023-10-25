@extends('utama')

@section('nama_title',$nama)

@section('nama_heading',$nama)

@section('bio',$bio)

@section('hobi')
@forelse ($hobi as $item)
    <li>{{$item}}</li>
@empty
    
@endforelse
@endsection