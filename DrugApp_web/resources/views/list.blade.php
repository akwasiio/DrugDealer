@extends('layouts.app')


@section('content')

    @php
        use App\drugs;
        $drugs = App\drugs::all();
    @endphp

    <div class="container">
            <h2>Drugs List</h2>
            <a href="/register" class="btn btn-primary">Add new Drug</a>
            <table class="table">

                <thead><tr>
                    <th colspan="2">Drugs</th>
                </tr>
                </thead>
                <tbody>@foreach($drugs as $drug)
                    <tr>
                        <td>
                            {{$drug->name}}
                        </td>
                        <td>
                            {{$drug->dosage}}
                        </td>
                        <td>
                            {{$task->effects}}
                        </td>
                        <td>
                            {{$task->phone}}
                        </td>
                    </tr>


                @endforeach</tbody>
            </table>
    </div>

@endsection