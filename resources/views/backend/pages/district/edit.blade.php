@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <div class="card">
               <div class="card-header py-3 bg-transparent">
                  <h5 class="mb-0">Edit District</h5>
               </div>
               <div class="card-body">
                  <div class="border p-3 rounded">
                     <form action="{{route('district.update',$district->id)}}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-6">
                           <label for="tags" class="form-label">District Name</label>
                           <input type="text" id="tags" required="required" name="name" class="form-control" placeholder="Product title" value="{{$district->name}}">
                        </div>

                        <div class="col-6">
                           <label class="form-label">Division Name</label>
                            <select class="form-control" name="division_id">
                              
@foreach($divisions as $division)
<option value="{{$division->id}}" @if($division->id == $district->division->id) selected @endif >{{$division->name}}</option>
@endforeach
                           </select>
                        </div>

                        <div class="col-6">
                           <label class="form-label">Status</label>
                           <select name="status" class="form-control" id="">
                              <option @if($district->status == 1) selected @endif value="1">Active</option>
                              <option @if($district->status == 0) selected @endif value="0">Inactive</option>
                           </select>
                        </div>
                        <div class="col-12">
                           <button type="submit" class="btn btn-primary px-4">Publish</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection

