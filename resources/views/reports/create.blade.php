@extends('layouts.app')

@section('content')

    <div class="card">
        <h3 class="card-header">
            Add an report
        </h3>
        <div class="card-body">
            <form action="{{ route('reports.store') }}" method="post">
                @csrf

                @include('reports.partials.form')
            </form>
        </div>
    </div>

@endsection

