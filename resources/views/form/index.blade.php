@extends('layouts.app')

@section('content')
    <h1>Form</h1>
    <div class="form-container">
        @include('form.form')
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
    </div>

    <h1>Form Data</h1>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            @foreach($formData as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->message }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
