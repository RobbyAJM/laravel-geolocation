@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ Auth::user()->name }} - Your detailed IP Information</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>IP</th>
                        <th>Area</th>
                        <th>Country</th>
                        <th>Capital City</th>
                        <th>City</th>
                        <th>Zipcode</th>
                        <th>ISP</th>
                    </tr>
                </thead>
                <tbody>
                    @php $geo = Auth::user()->geolocation @endphp
                    <td>{{ $geo->ip }}</td>
                    <td>{{ $geo->continent_name }}</td>
                    <td>{{ $geo->country_code2 }}</td>
                    <td>{{ $geo->country_capital }}</td>
                    <td>{{ $geo->city }}</td>
                    <td>{{ $geo->zipcode }}</td>
                    <td>{{ $geo->isp }}</td>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
