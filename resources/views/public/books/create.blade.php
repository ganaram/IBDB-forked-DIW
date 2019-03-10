@extends('layouts.app')

@section('title', 'New book')

@section('content')

<div class="alert alert-warning alert-dismissible fade show font-weight-light" role="alert">
  <strong>Al usar font weight light no nos tomara el strong</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<h1 class="title">Add New Book</h1>
<h2 class="subTitle">Feel Free to add Publishers</h2>
<form action="/books" method="post" enctype="multipart/form-data" novalidate>

    @csrf

    @include('public.books.partials.form')

    <button type="submit" class="btn btn-primary">Save Book</button>
</form>
@endsection

@push('estilos')
	<link href="{{ mix('css/books/form.css') }}" rel="stylesheet">
@endpush