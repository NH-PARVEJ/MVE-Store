@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <div class="card">
               <div class="card-header py-3 bg-transparent">
                  <h5 class="mb-0">Edit Division</h5>
               </div>
               <div class="card-body">
                  <div class="border p-3 rounded">
                     <form action="{{route('division.update', $division->id )}}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-6">
                           <label for="tags" class="form-label">Division Name</label>
                           <input type="text" id="tags" required="required" name="name" class="form-control" placeholder="Product title" value="{{$division->name}}">
                        </div>

                        <div class="col-6">
                           <label class="form-label">Priority No</label>
                           <input type="number" name="priority_no" class="form-control" placeholder="Priority No" value="{{$division->priority_no}}">
                        </div>

                        <div class="col-6">
                           <label class="form-label">Status</label>
                           <select name="status" class="form-control" id="">
            <option @if($division->status == 1) selected  @endif value="1">Active</option>
            <option @if($division->status == 0) selected @endif value="0">Inactive</option>
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

