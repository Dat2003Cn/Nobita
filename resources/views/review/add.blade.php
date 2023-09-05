@extends('layout.admin')
@section('admin')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Forms</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{route('add_review')}}" method="POST" >
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">user_id</label>
                  <input type="name" class="form-control" id="exampleInputEmail1" name="user_id" aria-describedby="emailHelp">
                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">product_id</label>
                  <input type="text" class="form-control" name="product_id" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">rating</label>
                    <input type="number" class="form-control" name="rating" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">comment</label>
                    <input type="text" class="form-control" name="comment" id="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">reviewdate</label>
                    <input type="date" class="form-control" name="reviewdate" id="">
                  </div>
               
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