@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
        <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                       <h5 class="mb-0">Add New Brand</h5>
                      </div>
                    <div class="card-body">
                      <div class="border p-3 rounded">
                      <form class="row g-3">
                        <div class="col-12">
                          <label class="form-label">Brand Name</label>
                          <input type="text" class="form-control" placeholder="Product title">
                        </div>
                        <div class="col-12">
                          <label class="form-label">Full description</label>
                          <textarea class="form-control" placeholder="Full description" rows="4" cols="4"></textarea>
                        </div>
                       
                      <div class="col-12">
                         <select class="form-control"  name="" id="">
                          <option value="0">Active</option>
                          <option value="1">Inactive</option>
                         </select>
                        </div>

                        <div class="col-12">
                        <input type="file" class="form-control" placeholder="Product title">
                        </div>

                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Publish on website
                            </label>
                          </div>
                        </div>

                        <div class="col-12">
                          <button class="btn btn-primary px-4">Add Brand</button>
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