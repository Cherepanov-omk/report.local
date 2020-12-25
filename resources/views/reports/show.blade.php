@extends('layouts.app')

@section('content')

    <div class="card">
        <h3 class="card-header">
            Details of the warehouse
        </h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Number:</strong> {{ $warehouses->number }}</li>
            <li class="list-group-item"><strong>Code:</strong> {{ $warehouses->code }} m<sup>2</sup></li>
            <li class="list-group-item"><strong>Long:</strong>
                @if($warehouses->long == 1)
                    yes
                @else
                    no
                @endif
            </li>
        </ul>
        <div class="card-body">
            <a class="btn btn-secondary" href="{{ route('warehouses.edit', $warehouses->id) }}">
                Edit
            </a>
            <a class="btn btn-danger" href="{{ route('warehouses.index') }}">
                Cancel
            </a>
        </div>
    </div>

@endsection
