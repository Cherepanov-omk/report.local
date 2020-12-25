@extends('layouts.app')

@section('content')
  <div class="card">
    <h3 class="card-header">
      List of report
      <a class="btn btn-sm btn-success float-right" href="{{ route('reports.create') }}">
        Add
      </a>
    </h3>
    <div class="card-body">
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col" >Учебная дисциплина</th>
            <th scope="col" class="text-center">Количество студентов в учебной группе на окончание семестра</th>
          </tr>
        </thead>
        <tbody>
        @forelse($reports as $report)
          <tr>
            <td>{{ $report->school }}</td>
            <td class="text-center">{{ $report->semestr }}</td>
            <td class="text-center">
              @if($report->long == 1)
                yes
              @else
                no
              @endif
            </td>
            <td class="text-right">
              <a class="btn btn-sm btn-primary" href="{{ route('reports.show', $reportw->id) }}">
                Show
              </a>
              <a class="btn btn-sm btn-secondary" href="{{ route('reports.edit', $report->id) }}">
                Edit
              </a>&nbsp;
              <form action="{{ route('reports.destroy', $report->id) }}" method="post" class="float-right">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger" type="submit">Delete</a>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="4">
              <h3 class="text-center">There are no report</h3>
            </td>s
          </tr>
        @endforelse
        </tbody>
      </table>
    </div>
  </div>

@endsection
