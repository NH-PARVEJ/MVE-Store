@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <!--end breadcrumb-->
   <div class="card">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <h5 class="mb-0">Manage All Products</h5>
         </div>
         <div class="table-responsive mt-3">
            <table id="example" class="responsive table-hover table align-middle">
               <thead class="table-secondary">
                  <tr>
                     <th>ID</th>
                     <th>Image</th>
                     <th>Category Name</th>
                     <th>Parent Category</th>
                     <th>Slug [ URL ]</th>
                     <th>Status</th>
                     <th>Actions</th>
                  </tr>
               </thead>
              
            </table>
         </div>
      </div>
   </div>
</main>
@endsection