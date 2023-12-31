@extends('layout.admin')
@section('admin')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Forms</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{route('add_feedback')}}" method="POST" >
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="name" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">email</label>
                  <input type="email" class="form-control" name="email" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">subject</label>
                    <input type="text" class="form-control" name="subject" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">message</label>
                    <input type="text" class="form-control" name="message" id="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">submissiondate</label>
                    <input type="text" class="form-control" name="submissiondate" id="">
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