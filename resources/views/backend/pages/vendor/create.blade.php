@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 mx-auto">
            <div class="card">
               <div class="card-header py-3 bg-transparent">
                  <h5 class="mb-0">Add New Vendor</h5>
               </div>
               <div class="card-body">
                  <div class="border p-3 rounded">
                     <form action="{{route('vendor.store')}}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-4">
                           <label class="form-label">Proprietor Name</label>
                           <input type="text" required="required" name="name" class="form-control" placeholder="Proprietor Name" value="{{old('name')}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Store Name</label>
                           <input type="text" required="required" name="store_name" class="form-control" placeholder="Store Name" value="{{old('store_name')}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Store Phone No.</label>
                           <input type="text" required="required" name="phone" class="form-control" placeholder="+880" value="{{old('phone')}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Email Address</label>
                           <input type="email" required="required" name="email" class="form-control" placeholder="Inter Your Email" value="{{old('email')}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Primary Contact Address</label>
                           <input type="text" required="required" name="primary_address" class="form-control" placeholder="Primery Contact Address" value="{{old('primary_address')}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Store Address</label>
                           <input type="text" required="required" name="address" class="form-control" placeholder="Store Address" value="{{old('address')}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">New Password</label>
                           <input type="password" placeholder="Account Password" required="required" id="password-field" name="password" class="form-control">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Re-Type Password</label>
                           <input type="password" placeholder="Re-Type Password" required="required" id="password-field" name="re_password" class="form-control">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Zip code</label>
                           <input type="text" required="required" name="zip_code" class="form-control" placeholder="Area / Zip Code" value="{{old('zip_code')}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">e-Tin No.</label>
                           <input type="text" required="required" name="e_tin" class="form-control" placeholder="Inter Your TIN Certificate Nbmber" value="{{old('e_tin')}}">
                        </div>
                        <div class="col-4">
                           <label  for="divisions" class="form-label">Division</label>
                           <select  class="form-select" name="division">
                              <option >Select Division</option>
                              @foreach($divisions as $division)
                              <option value="{{$division->name}}">{{$division->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="col-4">
                           <label for="distr" class="form-label">District</label>
                           <select  class="form-select" name="district">
                              <option >Select Division</option>
                              @foreach($districts as $district)
                              <option value="{{$district->name}}">{{$district->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="col-4">
                           <label class="form-label">Store Loge</label>
                           <input type="file" value="{{old('store_logo')}}" name="store_logo" class="form-control">
                        </div>
                        <div class="col-4">
                           <label class="form-label">NID COPY</label>
                           <input type="file" name="nid_copy" value="{{old('nid_copy')}}" class="form-control">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Trade License Copy</label>
                           <input type="file" name="trade_license_copy" class="form-control" value="{{old('trade_license_copy')}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Full description</label>
                           <textarea id="editor" name="description" class="form-control" placeholder=" Full description" rows="4" cols="4">{{old('description')}}</textarea>
                        </div>
                        <div class="col-4">
                           <label class="form-label">Status</label>
                           <select name="status" class="form-select" id="" value="{{old('status')}}">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                           </select>
                        </div>
                        <div class="col-4">
                           <label class="form-label">User Role</label>
                           <select class="form-select" value="{{old('role')}}" name="role">
                              <option  @if(2) selected  @endif value="2">Vendor</option>
                              <option value="1">Customer</option>
                           </select>
                        </div>
                        <div class="col-4 mt-5">
                           <button type="submit" class="btn btn-primary px-5">Publish</button>
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