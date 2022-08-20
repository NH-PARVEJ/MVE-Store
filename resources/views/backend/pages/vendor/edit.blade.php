@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 mx-auto">
            <div class="card">
               <div class="card-header py-3 bg-transparent">
                  <h5 class="mb-0">Upnate Vendor</h5>
               </div>
               <div class="card-body">
                  <div class="border p-3 rounded">
                     <form action="{{route('vendor.update', $vendor->id)}}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-4">
                           <label class="form-label">Proprietor Name</label>
                           <input type="text" name="name" class="form-control" value="{{$vendor->name}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Store Name</label>
                           <input type="text" name="store_name" class="form-control" value="{{$vendor->store_name}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Store Phone No.</label>
                           <input type="text"  name="phone" class="form-control" value="{{$vendor->phone}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Email Address</label>
                           <input type="email" name="email" class="form-control" value="{{$vendor->email}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Primary Contact Address</label>
                           <input type="text" name="primary_address" class="form-control" value="{{$vendor->primary_address}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Store Address</label>
                           <input type="text" name="address" class="form-control" value="{{$vendor->address}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">New Password</label>
                           <input type="password" value="{{$vendor->password}}" id="password-field" name="password" class="form-control">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Re-Type Password</label>
                           <input type="password" value="{{$vendor->password}}"  id="password-field" name="re_password" class="form-control">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Zip code</label>
                           <input type="text" name="zip_code" class="form-control" value="{{$vendor->zip_code}}">
                        </div>
                        <div class="col-4">
                           <label class="form-label">e-Tin No.</label>
                           <input type="text" name="e_tin" class="form-control" value="{{$vendor->e_tin}}">
                        </div>
                        <div class="col-4">
                           <label  for="divisions" class="form-label">Division</label>
                           <select  class="form-select" name="division">
                              <option >Select Division</option>
                              @foreach($divisions as $division)
                              <option @if(!is_null($division->name)) selected @endif  value="{{$division->id}}">{{$division->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="col-4">
                           <label for="distr" class="form-label">District</label>
                           <select  class="form-select" name="district">
                           <option >Select Division</option>
                           @foreach($districts as $district)
                              <option @if(!is_null($district->name)) selected @endif value="{{$district->id}}">{{$district->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="col-4">
                           <label class="form-label">Store Loge</label>
                           <input type="file"  name="store_logo" class="form-control">
                        </div>
                        <div class="col-4">
                           <label class="form-label">NID COPY</label>
                           <input type="file" name="nid_copy" class="form-control">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Trade License Copy</label>
                           <input type="file" name="trade_license_copy" class="form-control">
                        </div>
                        <div class="col-4">
                           <label class="form-label">Full description</label>
                           <textarea id="editor" name="description" class="form-control" rows="4" cols="4">{{$vendor->description}}</textarea>
                        </div>
                        <div class="col-4">
                           <label class="form-label">Status</label>
                           <select name="status" class="form-select" id="" value="{{$vendor->status}}">
                              <option @if($vendor->status == 1) selected @endif value="1">Active</option>
                              <option @if($vendor->status == 0) selected @endif value="0">Inactive</option>
                           </select>
                        </div>
                        <div class="col-4">
                           <label class="form-label">User Role</label>
                           <select class="form-select" value="{{$vendor->role}}" name="role">
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