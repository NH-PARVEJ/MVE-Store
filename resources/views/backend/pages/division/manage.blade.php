@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <!--end breadcrumb-->
   <div class="card">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <h5 class="mb-0">Manage All Division</h5>
         </div>
         <div class="table-responsive mt-3">
            <table id="example" class="responsive table-hover table align-middle">
               <thead class="table-secondary">
                  <tr>
                     <th>ID</th>
                     <th>Division Name</th>
                     <th>Priority No</th>
                     <th>Status</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  @php $i = 1; @endphp
                  @foreach($divisions as $division)
                  <tr>
                     <td>{{$i}}</td>
                     <td>{{$division->name}}</td>
                     <td>{{$division->priority_no}}</td>
                     @if($division->status == 0)
                     <td class="bg-light-danger">
                        <span class="text-danger">Inactive</span>
                     </td>
                     @elseif($division->status == 1)
                     <td class="bg-light-success">
                        <span class="text-success">Active</span>
                     </td>
                     @endif
                     <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                           <a href="{{route('division.edit', $division->id)}}" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i>
                           </a>

                           <a href="" class="text-dark"  data-bs-placement="bottom" title="Delete" data-bs-toggle="modal" data-bs-target="#DeleteDivision{{$division->id}}">
                           <i class="bi bi-trash-fill"></i></a>
                        </div>
                     </td>
                     <!--################### Delete Modal Start ###################-->
                     <div class="col">
                        <div class="modal fade" id="DeleteDivision{{$division->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    Are you sure you want to delete this Division? 
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('division.destroy', $division->id)}}" method="POST">
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
</main>
@endsection