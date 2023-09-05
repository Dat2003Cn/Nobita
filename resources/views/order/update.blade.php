@extends('layout.admin')
@section('admin')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Forms</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route('update_order',['id'=>$orders->id])}}" method="POST" >
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">user_id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="user_id" value="{{$orders->user_id}}" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">orderdate</label>
                    <input type="date" class="form-control" value="{{$orders->orderdate}}" name="orderdate" >
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">totalamount</label>
                      <input type="number" class="form-control" value="{{$orders->totalamount}}" name="totalamount" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">status</label>
                      <input type="text" class="form-control" value="{{$orders->status}}" name="status" id="">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">category_id</label>
                        <input type="text" class="form-control" value="{{$products->category_id}}" name="category_id" id="">
                      </div> --}}
                 
                {{-- <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection