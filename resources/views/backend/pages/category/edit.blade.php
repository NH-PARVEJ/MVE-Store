@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <div class="card">
               <div class="card-header py-3 bg-transparent">
                  <h5 class="mb-0">Edit Category / Sub Category</h5>
               </div>
               <div class="card-body">
                  <div class="border p-3 rounded">
                     <form action="{{route('category.update', $category->id )}}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-6">
                           <label class="form-label">Category Name</label>
                           <input type="text" required="required" name="name" class="form-control" placeholder="Product title" value="{{$category->name}}">
                        </div>

                        <div class="col-6">
                        <label class="form-label">Please Select The Parent Category</label>
                           <select name="is_parent" id="" class="form-select" value="">
                              <option value="0">Parent</option>
                              @foreach($parent_categories as $parent_category)
                              <option value="{{$parent_category->id}}"  @if($parent_category->id == $category->is_parent) selected @endif >{{$parent_category->name}}</option>
                              @endforeach
                           </select>
                        </div>

                        <div class="col-6">
                           <label class="form-label">Image</label>
                           <input type="file" value="{{$category->image}}" name="image" class="form-control">
                        </div>

                        <div class="col-6">
                           <label class="form-label">Status</label>
                           <select name="status" class="form-control"  name="" id="">
      <option value="1" @if( $category->status == 1) selected @endif >Active</option>
      <option value="0" @if( $category->status == 0) selected @endif >Inactive</option>
                           </select>
                        </div>
                        
                      
                        <div class="col-12">
                           <label class="form-label">Full description</label>
                           <textarea id="editor" name="description" class="form-control" placeholder="Full description" rows="4" cols="4">{{$category->description}}"></textarea>
                        </div>
                        <div class="col-12">
                           <button type="submit" class="btn btn-primary px-4">Update Category</button>
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