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
                                    <th>Details</th>

                            
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($drugs as $drug)
                                    
                               
                                <tr>
                                    <td>{{$drug->name}}</td>
                                    <td><a class="btn btn-primary">Add </a></td>
                                    <td><a class="btn btn-success">Details </a></td>

                                    
                                    
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
