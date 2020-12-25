@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Edit an reports
  </h3>
  <div class="card-body">
    <form action="{{ route('reports.update', $reports->id) }}" method="post">
      @csrf
      @method('put')

      @include('reports.partials.form')
    </form>
  </div>
</div>

@endsection
