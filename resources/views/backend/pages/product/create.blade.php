@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <div class="container">
   <div class="row">
                 <div class="col-lg-12 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                      <div class="d-sm-flex align-items-center">
                        <h5 class="mb-2 mb-sm-0">Add New Product</h5>
                        <div class="ms-auto">
                          <button type="button" class="btn btn-secondary">Save to Draft</button>
                          <button type="button" class="btn btn-primary">Publish Now</button>
                        </div>
                      </div>
                     </div>
                    <div class="card-body">
                       <div class="row g-3">
                         <div class="col-12 col-lg-8">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                <form class="row g-3">
                                  <div class="col-12">
                                    <label class="form-label">Product title</label>
                                    <input type="text" required="required" name="title" class="form-control" placeholder="Product title">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">SKU</label>
                                    <input type="text" name="sku" class="form-control" placeholder="SKU">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Color</label>
                                    <input type="text" name="color" class="form-control" placeholder="Color">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Size</label>
                                    <input type="text" name="size" class="form-control" placeholder="Size">
                                  </div>
                                  <div class="col-4">
                                    <label class="form-label">Brand</label>
                                    <select class="form-select" name="brand_id" required="required">
                                      <option value="">Select Brand</option>
                                      @foreach ($brands as $brand)
                                      <option value="{{$brand->name}}">{{$brand->name}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="col-4">
                                    <label class="form-label">Category</label>
                                    <select required="required" class="form-select" name="category_id">
                                      <option value="">Select Category</option>
                                      @foreach ($categories as $category)
                                      <option value="{{$category->name}}">{{$category->name}}</option>
                                      @endforeach
                                    </select>
                                  </div>   
                                  <div class="col-4">
                                    <label class="form-label">Parent</label>
                                    <select required="required" class="form-select" name="category_id">
                                      <option value="">Select Parent</option>
                                      @foreach ($categories as $category)
                                      <option value="{{$category->is_parent}}">{{$category->is_parent}}</option>
                                      @endforeach
                                    </select>
                                  </div>                                  
                                  <div class="col-12">
                                    <label class="form-label">Images</label>
                                    <input required="required" class="form-control" name="image" type="file">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Short description</label>
                                    <textarea   name="short_description" class="form-control" placeholder="Full description" rows="4" cols="4"></textarea>
                                  </div>

                                  <div class="col-12">
                                    <label class="form-label">Full description</label>
                                    <textarea id="editor" name="long_description" class="form-control" placeholder="Full description" rows="4" cols="4"></textarea>
                                  </div>
                                </form>
                              </div>
                            </div>
                         </div>

                         <div class="col-12 col-lg-4">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                  <div class="row g-3">
                                    <div class="col-12">
                                      <label class="form-label">Ragular Price</label>
                                      <input type="text" name="regular_price" required="required" class="form-control" placeholder="Ragular Price">
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Sell Price</label>
                                      <input type="text" name="sell_price" required="required" class="form-control" placeholder="Sell Price">
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Status</label>
                                      <select name="status" class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                      </select>
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label"> Meta Tags</label>
                                      <input name="meta_tags" type="text" class="form-control" placeholder="Tags">
                                    </div>
                                    <div class="col-12">
                                      <div class="d-flex align-items-center gap-2">
                                        <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Woman <i class="bi bi-x"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Fashion <i class="bi bi-x"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Furniture <i class="bi bi-x"></i></a>
                                      </div>
                                    </div>
                                    <div class="col-12">
                                      <h5>Categories</h5>
                                      <div class="category-list">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="Jeans">
                                          <label class="form-check-label" for="Jeans">
                                            Jeans
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="FormalShirts">
                                          <label class="form-check-label" for="FormalShirts">
                                            Formal Shirts
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="WomenShirts">
                                          <label class="form-check-label" for="WomenShirts">
                                            Women Shirts
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="Electronics">
                                          <label class="form-check-label" for="Electronics">
                                            Electronics
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="SportsShoes">
                                          <label class="form-check-label" for="SportsShoes">
                                            Sports Shoes
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="Mobiles">
                                          <label class="form-check-label" for="Mobiles">
                                            Mobiles
                                          </label>
                                        </div>
                                      </div>
                                     
                                    </div>

                                  </div><!--end row-->
                              </div>
                            </div>  
                        </div>

                       </div><!--end row-->
                     </div>
                    </div>
                 </div>
              </div>
   </div>
</main>
@endsection