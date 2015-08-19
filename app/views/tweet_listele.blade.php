
@extends('layout.master')

@section('content')
@foreach( $arama_sonuc as $liste )
@foreach ($liste as $veri)

{{ print_r($veri)}}

{{"<hr/>"}}

@endforeach

@endforeach
@stop