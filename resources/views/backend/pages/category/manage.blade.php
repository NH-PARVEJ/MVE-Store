@extends('backend.layout.template')
@section('body-content')
<main class="page-content">
   <!--end breadcrumb-->
   <div class="card">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <h5 class="mb-0">Manage All Category</h5>
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
               <tbody>
                  @php $i = 1; @endphp
                  @foreach($categories as $category)
                  <tr>
                     <td>{{$i}}</td>
                     <td>
                        <div class="d-flex align-items-center gap-3 cursor-pointer">
                           @if(!is_null($category->image))
                           <img src="{{asset('backend/assets/images/categories/' . $category->image)}}" class="rounded-circle" width="44" height="44" alt="">
                           @else
                           <img src="{{asset('backend/assets/images/avatars/avator.png')}}" class="rounded-circle" width="44" height="44" alt="">
                           @endif
                        </div>
                     </td>
                     <td class="bg-light-success">{{$category->name}}</td>
                     <td></td>
                     <td>{{$category->slug}}</td>
                     @if($category->status == 0)
                     <td class="bg-light-danger">
                        <span class="text-danger">Inactive</span>
                     </td>
                     @elseif($category->status == 1)
                     <td class="bg-light-success">
                        <span class="text-success">Active</span>
                     </td>
                     @endif
                     <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                           <a href="javascript:;" class="text-dark" data-bs-toggle="modal" data-bs-target="#ViewCategory{{$category->id}}"title="Views"><i class="bi bi-eye-fill"></i></a>
                           
                           <a href="{{route('category.edit', $category->id)}}" class="text-dark" data-bs-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i>
                           </a>
                           <a href="" class="text-dark" title="Delete" data-bs-toggle="modal" data-bs-target="#DeleteCategory{{$category->id}}">
                           <i class="bi bi-trash-fill"></i></a>
                        </div>
                     </td>
                     <!--##################### View Modal Start #####################-->

                     <div class="modal fade" id="ViewCategory{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">View Description</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                    {{$category->description}}
                                  </div>
                                 </div>
                               </div>
                              </div>
                     <!-- ##################### View Modal End ##################### -->

                     <!-- ##################### Delete Modal Start ##################### -->
                     <div class="col">
                        <div class="modal fade" id="DeleteCategory{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    Are you sure you want to delete this category? 
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('category.destroy', $category->id)}}" method="POST">
                                       @csrf
                                       <input type="submit" name="category" value="Delete" class="btn btn-danger">
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </tr>
            <!-- ##################### Delete Modal End ##################### -->

            <!-- ##################### child Category print Start ##################### -->
                  @foreach(App\Models\Category::orderBy('name', 'asc')->where('is_parent', $category->id)->get() as $childCat)
                  @php $i++; @endphp
                  <tr>
                     <td>{{$i}}</td>
                     <td>
                        <div class="d-flex align-items-center gap-3 cursor-pointer">
                           @if(!is_null($childCat->image))
                           <img src="{{asset('backend/assets/images/categories/' . $childCat->image)}}" class="rounded-circle" width="44" height="44" alt="">
                           @else
                           <img src="{{asset('backend/assets/images/avatars/avator.png')}}" class="rounded-circle" width="44" height="44" alt="">
                           @endif
                        </div>
                     </td>
                     <td class="bg-light-warning"><i class="lni lni-arrow-right"></i> {{$childCat->name}}</td>
                     <td class="bg-light-success">{{$childCat->category->name}}</td>
                     <td>{{$childCat->slug}}</td>
                     @if($childCat->status == 0)
                     <td class="bg-light-danger">
                        <span class="text-danger">Inactive</span>
                     </td>
                     @elseif($childCat->status == 1)
                     <td class="bg-light-success">
                        <span class="text-success">Active</span>
                     </td>
                     @endif
                     <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                           <a href="javascript:;" class="text-dark" data-bs-placement="bottom" data-bs-toggle="modal" data-bs-target="#ViewCategory{{$childCat->id}}"title="Views"><i class="bi bi-eye-fill"></i></a>
                           <a href="{{route('category.edit', $childCat->id)}}" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i>
                           </a>
                           <a href="" class="text-dark"  data-bs-placement="bottom" title="Delete" data-bs-toggle="modal" data-bs-target="#DeleteCategory{{$childCat->id}}">
                           <i class="bi bi-trash-fill"></i></a>
                        </div>
                     </td>
                     <!-- ##################### View Modal Start ##################### -->

                     <div class="col">
                        <div class="modal fade" id="ViewCategory{{$childCat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">View Description</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    {{$childCat->description}}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- ##################### View Modal End ##################### -->

                     <!-- ##################### Delete Modal Start ##################### -->
                     <div class="col">
                        <div class="modal fade" id="DeleteCategory{{$childCat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    Are you sure you want to delete this category? 
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('category.destroy', $category->id)}}" method="POST">
                                       @csrf
                                       <input type="submit" name="category" value="Delete" class="btn btn-danger">
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               <!-- ##################### Delete Modal End ##################### -->
                  </tr>
                  @endforeach
               <!-- ##################### child Category print End ##################### -->
                  @php $i++; @endphp
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</main>
@endsection