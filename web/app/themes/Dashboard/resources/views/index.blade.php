@extends('layouts.app')

@section('content')
  <x-header/>


  <x-specification />

  {{-- Href to produit page --}}

  {!! get_the_posts_navigation() !!}
@endsection

