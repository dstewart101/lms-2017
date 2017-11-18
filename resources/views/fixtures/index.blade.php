@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>All Fixtures</h1>
    <table class="table">
      <tr>
        <th>Date</th>
        <th>Home</th>
        <th></th>
        <th>v</th>
        <th></th>
        <th>Away</th>
        <th>Result</th>
      </tr>

      @foreach ($fixtures as $fixture)
        <tr>
          <td>{{ $fixture->formatted_fixture_date }}<td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection
