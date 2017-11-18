@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>All Selections</h1>
    <table class="table">
      <tr>
        <th>User</th>
        <th>Fixture Date</th>
        <th>League</th>
        <th>Team</th>
        <th>Selection Made Date</th>
      </tr>

      @foreach ($selections as $selection)
        <tr>
          <td>{{ $selection->user_id }}</td>
          <td>{{ $selection->formatted_fixture_date }}</td>
          <td>{{ $selection->league_id }}</td>
          <td>{{ $selection->team->name }}</td>
          <td>{{ $selection->formatted_selection_made_date }}</td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection
