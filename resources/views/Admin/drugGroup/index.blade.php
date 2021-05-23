@extends('Layouts.layout', ['activePage' => 'drugGroup', 'titlePage' => "Drug Groups"])



@section('content')

            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                       <h4 class="page-title">Drugs Groups</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcat">Add Drug Group</button>
                    </div>
                </div>
<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table  mb-0">
								<thead>
									<tr>
										<th>Code</th>
										<th>Group</th>
                                        <th>SubCategory</th>

                                        <th>#</th>
										<th>#</th>
									</tr>
								</thead>
								<tbody>
                                @if(count($categorys) > 0)
                                 @foreach($categorys as $category)
                                 <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->group_name}}</td>
                                        <td>  <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#a{{$category->id}}"

                                         onclick="a('{{$category->id}}', '{{$category->category_name}}')"

                                        >Edit</button></td>
                                            <td>
                                            <form method="POST" action="drugGroup/{{ $category->id  }}">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger btn-icon">
                Delete
              </button>
            </form>
                                        </td>
                                        </tr>

                                        <div class="modal fade" tabindex="-1" id="a{{$category->id}}"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Drug Group Form </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form method="POST" action="drugGroup/{{$category->id}}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Drug  SubCategory</label>
                                            <div class="col-md-9"><select class="select" name="e_subcat_id">
                                                <option>Select</option>
                                                @if(count($subCategorys) > 0)
                                 @foreach($subCategorys as $cat)
                                                <option value="{{$cat->id}}" @if( $cat->id == $category->subcat_code ) selected @endif>{{$cat->sub_category_name	 }}</option>
                                                @endforeach
                                
                                @endif
                                            </select></div>
                                        </div>
                                                    <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Code</label>
                                    <div class="col-md-9">
                                        <input type="text" required name ="e_code" value ="{{$category->id}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" required name ="e_group_name" value="{{$category->group_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                            </div>
            </div> </div>
            </div>
            </div>
            </div>
                                 @endforeach
                                </tbody>
                                @endif
							
							</table>
						</div>
					</div>
                </div>
                <div class="modal fade" tabindex="-1" id="addcat" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Drug Category Form </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form method="post" action="drugGroup" id="editForm">
                            @csrf
                            <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Drug Category</label>
                                            <div class="col-md-9"><select class="select" name="subcat_id">
                                                <option>Select</option>
                                                @if(count($subCategorys) > 0)
                                 @foreach($subCategorys as $category)
                                                <option value="{{$category->id}}">{{$category->sub_category_name	}}</option>
                                                @endforeach
                                
                                @endif
                                            </select></div>
                                        </div>
                            <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Code</label>
                                    <div class="col-md-9">
                                        <input type="text" name ="code"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name ="group_name" class="form-control">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                            </div>
            </div> </div>
            </div>
            </div>
            </div>




           
@endsection
