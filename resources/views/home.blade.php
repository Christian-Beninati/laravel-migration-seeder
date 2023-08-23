{{-- Main.blade Layouts --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Home')

{{-- Main Content --}}
@section('main-content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Train code</th>
                <th scope="col">Company</th>
                <th scope="col">Departure station</th>
                <th scope="col">Arrival station</th>
                <th scope="col">Departure time</th>
                <th scope="col">Arrival time</th>
                <th scope="col">Carriages</th>
                <th scope="col">Status</th>
                <th scope="col">Deleted</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{ $train->train_code }}</th>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_carriage }}</td>
                    <td>
                        @if ($train->in_time == 0)
                            Is on time
                        @else
                            Is not on time
                        @endif
                    </td>
                    <td>
                        @if ($train->deleted == 0)
                            Is not cancelled
                        @else
                            Deleted
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
