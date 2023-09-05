@extends('layout.admin')
@section('admin')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Forms</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route('update_feedback',['id'=>$feedbacks->id])}}" method="POST" >
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" name="name" value="{{$feedbacks->name}}" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">email</label>
                    <input type="email" class="form-control" value="{{$feedbacks->email}}" name="email" >
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">subject</label>
                      <input type="text" class="form-control" value="{{$feedbacks->subject}}" name="subject" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">message</label>
                      <input type="text" class="form-control" value="{{$feedbacks->message}}" name="message" id="">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">submissiondate</label>
                      <input type="text" class="form-control" value="{{$feedbacks->submissiondate}}" name="submissiondate" id="">
                    </div>
                 
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