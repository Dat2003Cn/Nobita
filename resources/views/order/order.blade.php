@extends('layout.admin')
@section('admin')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      
     
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-2 d-flex align-items-stretch">
       
          
      </div>
      <div class="col-lg-10 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
            <a href="{{route('add_order')}}"><button type="button"  class="btn btn-success">Thêm mới</button></a>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">user_id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">orderdate</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">totalamount</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">status</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">chức năng</h6>
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($orders as $st)
                    <tr>
                        <td>{{ $st->id }}</td>
                        <td>{{ $st->user_id}}</td>
                        <td>{{ $st->orderdate}}</td>
                        <td>{{ $st->totalamount}}</td>

                        <td>{{ $st->status}}</td>
                       
                        <td><a href="{{route('update_order',['id'=>$st->id])}}"> <button type="button" class="btn btn-info"> Update</button></a>
                        <a href="{{route('delete',['id'=>$st->id])}}"> <button type="button" class="btn btn-danger"> Delete</button></a></td>
                        {{-- <td><img src="{{ $st->image?''.Storage::url($st->image):''}}" style="width: 100px" /></td>
                        <td><a href="{{route('delete',['id'=>$st->id])}}">xóa</a></td> --}}
                        {{-- <td>{{ $st->address }}</td> --}}
                        {{-- <td>{{ $st->date_of_birth }}</td> --}}
        
                        
                    </tr>
                    
                @endforeach
                                   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
    </div>
  </div>
</div>
</div>
@endsection