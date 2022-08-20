@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <div class="currency text-center">
      <!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER START -->
      <iframe src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?&s=1&mc=BDT&mbg=FFFFFF&bs=no&bc=FFFFFF&f=verdana&fs=14px&fc=000&lc=4D9AD2&lhc=FE9A00&vc=FE9A00&vcu=008000&vcd=FF0000&" width="100%" height="35" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
      <!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER END -->
   </div>
   <!--end breadcrumb-->
   <div class="card">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <h5 class="mb-3">Manage All Currency</h5>
         </div>
         <div class="row">
            <div class="col-lg-3">
               <div id="currency-converter-160838"><script type="text/javascript" src="https://www.cashbackforex.com/Content/remote/remote-widgets.js"></script><script type="text/javascript"> RemoteCalc({"Url":"https://www.cashbackforex.com", "TopPaneStyle":"IA==","ButtonStyle":"YmFja2dyb3VuZDogIzM0MzU0MDsgY29sb3I6IHdoaXRlOyBib3JkZXItcmFkaXVzOiAyMHB4Ow==","TitleStyle":"dGV4dC1hbGlnbjogbGVmdDsgZm9udC1zaXplOiA0MHB4OyBmb250LXdlaWdodDogMzAwOw==","TextboxStyle":"YmFja2dyb3VuZC1jb2xvcjogd2hpdGU7IGNvbG9yOiAjNzc3OyBib3JkZXI6IHNvbGlkIDJweCAjNzc3","ContainerWidth":"500","HighlightColor":"#ffff00","IsDisplayTitle":false,"IsShowEmbedButton":false,"CompactType":"large","DefaultCurrencyFrom":"BDT","DefaultCurrencyTo":"USD","Calculator":"currency-converter","ContainerId":"currency-converter-160838"});</script></div>
            </div>
            <div class="col-lg-9">
               <div class="table-responsive mt-3">
                  <table id="example" class="responsive table-hover table align-middle">
                     <thead class="table-secondary">
                        <tr>
                           <th>ID</th>
                           <th>Currency Name</th>
                           <th>Currency Sign</th>
                           <th>Status</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @php $i = 1; @endphp
                        @foreach($currencies as $currency)
                        <tr>
                           <td>{{$i}}</td>
                           <td>{{$currency->currency_name}}</td>
                           <td>{{$currency->currency_sign}}</td>
                           @if($currency->status == 0)
                           <td class="bg-light-danger">
                              <span class="text-danger">Inactive</span>
                           </td>
                           @elseif($currency->status == 1)
                           <td class="bg-light-success">
                              <span class="text-success">Active</span>
                           </td>
                           @endif
                           <td>
                              <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                 <a href="{{route('currency.edit', $currency->id)}}" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i>
                                 </a>
                                 <a href="" class="text-dark"  data-bs-placement="bottom" title="Delete" data-bs-toggle="modal" data-bs-target="#DeleteCurrency{{$currency->id}}">
                                 <i class="bi bi-trash-fill"></i></a>
                              </div>
                           </td>
                           <!--################### Delete Modal Start ###################-->
                           <div class="col">
                              <div class="modal fade" id="DeleteCurrency{{$currency->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">
                                          Are you sure you want to delete this currency ? 
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <form action="{{route('currency.destroy', $currency->id)}}" method="POST">
                                             @csrf
                                             <input type="submit" name="brand" value="Delete" class="btn btn-danger">
                                          </form>
                                       </div>
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
      </div>
   </div>
</main>
@endsection