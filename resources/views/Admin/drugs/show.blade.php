@extends('Layouts.layout')
@section('content')
<div class="row">
  <div class="col-md-12 m-t-5">

<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addmeasure" data-whatever="@addmeasure">Add Measurement</a>
</div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card-box">
            <h4 class="card-title">Drug Details</h4>
            <form action="{{route('admin.drugs.update',$drugs->id)}}" method="POST">
              @csrf 
               @method('PATCH')
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">ID : {{$drugs->id}}</label>
                    <div class="col-md-9">
                        {{-- <input type="hidden" class="form-control" value="{{$drugs->id}}"> --}}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Drug Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{{$drugs->name}}" name="name" >
                    </div>
                </div>
                
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card-box">
            <div class="card-block">
                <h4 class="card-title">Measurments</h4>
                @if (sizeof($measurments) === 0)
                 {{'No data measurments'}}   
                @else
                    
               
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>..</th>
                                <th>..</th>

                            </tr>
                        </thead>
                        <tbody>
                          <?php $i=1;?>
                          @foreach ($measurments as $measurment)
                          
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$measurment->name}}</td>
                                <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#m{{$measurment->id}}" data-whatever="@m{{$measurment->id}}">Edit</a></td>
                                <td><a href="#" class="btn btn-danger">Delete</a></td>

                            </tr>
                        </tbody>
                        <?php $i++?>


                        {{-- Measurments modals --}}
<div class="modal fade" id="m{{$measurment->id}}" tabindex="-1" role="dialog" aria-labelledby="m{{$measurment->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{route('admin.measurments.update',$measurment->id)}}" method="POST">
      @csrf        
      @method('PATCH')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m{{$measurment->id}}">Edit Measurement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Measurement Name: {{$measurment->name}}</label>
            {{-- <input type="hidden" class="form-control" value="{{$measurment->id}}" name="measure_name"> --}}
             
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Measurment:</label>
            <input type="text" class="form-control"  name="measurment" />
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add New</button>
      </div>
    </form>
    </div>
  </div>
</div>
                        @endforeach
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


{{-- Drugs modals --}}
<div class="modal fade" id="addmeasure" tabindex="-1" role="dialog" aria-labelledby="addmeasureLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="{{route('admin.measurments.store')}}" method="POST">
        @csrf        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addmeasureLabel">New Measurement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Drug Name: {{$drugs->name}}</label>
              <input type="hidden" class="form-control" value="{{$drugs->id}}" name="drug_name">
               
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Measurment:</label>
              <input type="text" class="form-control"  name="measurment" />
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add New</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endsection
