@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <!--end breadcrumb-->
   <div class="card">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <h5 class="mb-0">Manage All Vendor</h5>
         </div>
         <div class="table-responsive mt-3">
            <table id="example" class="responsive table-hover table align-middle">
               <thead class="table-secondary">
                  <tr>
                     <th>ID</th>
                     <th>Store Logo</th>
                     <th>Proprietor Name</th>
                     <th>Store Name</th>
                     <th>Phone No.</th>
                     <th>Email Address</th>
                     <th>Store Address</th>
                     <th>Primary Address</th>
                     <th>Division</th>
                     <th>District</th>
                     <th>Zip code</th>
                     <th>E-Tin</th>
                     <th>Store [ URL ]</th>
                     <th>Status</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  @php $i = 1; @endphp
                  @foreach($vendors as $vendor)
                  <tr>
                     <td>{{$i}}</td>
                     <td>
                        <div class="d-flex align-items-center gap-3 cursor-pointer">
                           @if(!is_null($vendor->store_logo))
                           <img src="{{asset('backend/assets/images/vendors/store-logo/' . $vendor->store_logo)}}" class="rounded-circle" width="44" height="44" alt="">
                           @else
                           <img src="{{asset('backend/assets/images/avatars/avator.png')}}" class="rounded-circle" width="44" height="44" alt="">
                           @endif
                        </div>
                     </td>
                     <td>{{$vendor->name}}</td>
                     <td>{{$vendor->store_name}}</td>
                     <td>{{$vendor->phone}}</td>
                     <td>{{$vendor->email}}</td>
                     <td>{{$vendor->address}}</td>
                     <td>{{$vendor->primary_address}}</td>
                     <td>{{$vendor->division}}</td>
                     <td>{{$vendor->district}}</td>
                     <td>{{$vendor->zip_code}}</td>
                     <td>{{$vendor->e_tin}}</td>
                     <td>{{$vendor->store_slug}}</td>
                     @if($vendor->status == 0)
                     <td class="bg-light-danger">
                        <span class="text-danger">Inactive</span>
                     </td>
                     @elseif($vendor->status == 1)
                     <td class="bg-light-success">
                        <span class="text-success">Active</span>
                     </td>
                     @endif
                     <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                           <a href="" class="text-dark" data-bs-placement="bottom" data-bs-toggle="modal" data-bs-target="#ViewsVendor{{$vendor->id}}"title="Views"><i class="bi bi-eye-fill"></i></a>
                           <a href="{{route('vendor.edit', $vendor->id)}}" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i>
                           </a>
                           <a href="" class="text-dark"  data-bs-placement="bottom" title="Delete" data-bs-toggle="exampleLargeModal" data-bs-target="#DeleteVendor{{$vendor->id}}">
                           <i class="bi bi-trash-fill"></i></a>
                        </div>
                     </td>
                     <!--################### NID COPY View Modal Start ###################-->
                     <div class="modal fade" id="ViewsVendor{{$vendor->id}}" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title">Vendor title</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>                    
                             
                              <div class="modal-body">
                                 <div class="row">
                                    <div class="col-6 text-center">
                                       <h3>NID</h3>
                                       <hr>
                                       @if(!is_null($vendor->nid_copy))
                                       <img src="{{asset('backend/assets/images/vendors/nid/' . $vendor->nid_copy)}}" width="300" class=""  alt="NID">
                                       @else
                                       <img src="{{asset('backend/assets/images/avatars/nid-avator.png')}}" width="350" class="" alt="NID">
                                       @endif
                                    </div> 

                                    <div class="col-6 text-center">
                                       <h3>TRADE LICENSE</h3>
                                       <hr>
                                       @if(!is_null($vendor->trade_license_copy))
                                       <img src="{{asset('backend/assets/images/vendors/trade-license/' . $vendor->trade_license_copy)}}" width="300" class=""  alt="trade-license">
                                       @else
                                       <img src="{{asset('backend/assets/images/avatars/trade-license.png')}}" width="260" class="" alt="NID">
                                       @endif
                                       {{-- <div class="col-12">
                                        <p class="description">{{$vendor->description}}</p>
                                       </div> --}}
                                    </div> 
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--################### NID COPY View Modal End ###################-->

                     <!--################### Delete Modal Start ###################-->
                     <div class="col">
                        <div class="modal fade" id="DeleteVendor{{$vendor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered">
                              < class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 Are you sure you want to delete this vendor? 
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 <form action="{{route('vendor.destroy', $vendor->id)}}" method="POST">
                                    @csrf
                                    <input type="submit" name="vendor" value="Delete" class="btn btn-danger">
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--################### Delete Modal End ###################-->
                  </tr>
                  @php $i++; @endphp
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</main>
@endsection