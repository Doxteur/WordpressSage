@extends('layouts.app')

@section('content')
    <x-header />


    <x-specification />
    @php

      $posts = get_posts(
        array(
          'post_type' => 'publication',
          'posts_per_page' => 10,
          'orderby' => 'date',
          'order' => 'DESC',
          "tax_query" => array(
            array(
              'taxonomy'=> 'langage',
              'field' => 'name',
              'terms' => 'javascript'
            )
          )
        ));
        
      dd($posts);
    @endphp



    {{-- Href to produit page --}}

    {!! get_the_posts_navigation() !!}
@endsection
