@extends('layouts.app')


@section('content')

    @php
        use App\drugs;
        $drugs = drugs::all();
    @endphp

    <div class="container">
            <h2>Drugs List</h2>
            <a href="/register" class="btn btn-primary">Add new Drug</a>
            <table class="table">

                <thead><tr>
                    <th colspan="2">Drugs</th>
                </tr>
                </thead>
                <tbody>@foreach($drugs = App\drugs::all() as $drug)
                    <tr>
                        <td>
                            {{$drug->name}}
                        </td>
                        <td>
                            {{$drug->company_name}}
                        </td>
                        <td>
                            {{$drug->email}}
                        </td>
                        <td>
                            {{$drug->phone}}
                        </td>
                        <td>
                            {{$drug->dosage}}
                        </td>
                        <td>
                            {{$drug->description}}
                        </td>
                        <td>
                            {{$drug->side_effects}}
                        </td>

                    </tr>


                @endforeach</tbody>
            </table>
    </div>

@endsection