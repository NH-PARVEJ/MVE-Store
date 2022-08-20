@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <div class="card">
               <div class="card-header py-3 bg-transparent">
                  <h5 class="mb-0">Edit Currency</h5>
               </div>
               <div class="card-body">
                  <div class="border p-3 rounded">
                     <form action="{{route('currency.update', $currency->id)}}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-6">
                           <label for="tags" class="form-label">Currency Name</label>
                           <input type="text" required="required" name="currency_name" class="form-control" id="tags" placeholder="Currency Name" value="{{$currency->currency_name}}">
                        </div>

                        <div class="col-6">
                           <label class="form-label">Currency Sign</label>
                              <select name="currency_sign" class="form-control">
                                 <option value="৳">Select Currency</option>
                                 <option @if($currency->currency_sign == '$') selected @endif value="$">$</option>
                                 <option @if($currency->currency_sign == '৳') selected @endif value="৳">৳</option>
                              </select>
                        </div>

                        <div class="col-6">
                           <label class="form-label">Status</label>
                           <select name="status" class="form-control" id="">
                              <option @if($currency->suatus == 1) selected @endif value="1">Active</option>
                              <option @if($currency->suatus == 0) selected @endif value="0">Inactive</option>
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

