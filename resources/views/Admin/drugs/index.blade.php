@extends('Layouts.layout')
@section('content')

        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Data Tables</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="card-block">
                        <h6 class="card-title text-bold">Default Datatable</h6>
                        <p class="content-group">
                            This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
                        </p>
                        <div class="table-responsive">
                            <table class="datatable table table-stripped ">
                            <thead>
                                <tr>
                                    <th>Drugs</th>
                                    <th>Measurement</th>
                                    <th>...</th>


                            
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($drugs as $drug)
                                    
                               
                                <tr>
                                    <td>{{$drug->name}}</td>
                                    <td><a class="btn btn-success" href="/admin/drugs/{{$drug->id}}">Details </a></td>
                                    <td><a class="btn btn-danger" data-toggle="modal" data-target="#delete_drug_{{$drug->id}}">Delete </a></td>

{{-- Deleting Modals --}}

<div id="delete_drug_{{$drug->id}}" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="{{URL('assets/img/sent.png')}}" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Measurements?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <form action="{{route('admin.drugs.destroy', $drug->id)}}" method="POST" id="form-delete-{{$drug->id}}">
                     @csrf
                     @method('DELETE')
                    </form>
                    <button type="submit" onclick="event.preventDefault;document.getElementById('form-delete-{{$drug->id}}').submit()"  class="btn btn-danger">Delete</button>

                </div>
            </div>
        </div>
    </div>
</div>

                                    
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
@endsection
