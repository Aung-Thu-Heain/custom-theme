@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Not found') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif
@endsection
