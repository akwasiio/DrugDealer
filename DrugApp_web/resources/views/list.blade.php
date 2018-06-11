@extends('layouts.app')


@section('content')

    @php
        use App\drugs;
        $drugs = drugs::all();
    @endphp

    <div class="container">
            <h2>Drugs List</h2>
            <a href="/register" class="btn btn-primary">Add new Drug</a>


        <div id="drugsDataModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>data goes here</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


            <table class="table">

                <thead><tr>
                    <th colspan="2">Drugs</th>
                </tr>
                </thead>
                <tbody>@foreach($drugs = App\drugs::all() as $drug)
                    <tr>
                        <td>
                            <!-- Trigger the modal with a button -->
                           <button type="button"
                                   class="btn btn-link"
                                   data-toggle="modal"
                                   data-target="#drugsDataModal"
                                   data-title="{{$drug->name}}"
                                   data-drugqrname="{{$drug->QR_name}}">{{$drug->name}}</button>
                        </td>
                        <td>
                            <a type="button" class="btn btn-primary" href="/details/{{$drug->id}}">
                                details
                            </a>
                        </td>


                    </tr>


                @endforeach
                </tbody>
            </table>
    </div>



@endsection

@section('scripts')

    <script>

        $(document).ready(function () {
            $('#drugsDataModal').on('show.bs.modal', function (event) { // id of the modal with event
                var button = $(event.relatedTarget); // Button that triggered the modal
                var drug_name = button.data('title');
                var QR_name = button.data('drugqrname');

                var title = drug_name;
                var content ='<div class="row">\n    <div class="col-md-6">\n        <img src="{{asset('QrCodes/')}}/' + QR_name + '"><br>\n        <p> Congratulations! This is your products QR code!</p>\n    </div>\n</div>';
                //{{asset('QrCodes/')}}/' + QR_name + '

                // Update the modal's content.
                var modal = $(this);
                modal.find('.modal-title').text(title);
                modal.find('.modal-body').html(content);

            })
        })

    </script>
@endsection