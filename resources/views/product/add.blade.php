@extends('layout.admin')
@section('admin')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Forms</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{route('add_product')}}" method="POST" >
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">productname</label>
                  <input type="name" class="form-control" id="exampleInputEmail1" name="productname" aria-describedby="emailHelp">
                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">description</label>
                  <input type="text" class="form-control" name="description" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">price</label>
                    <input type="number" class="form-control" name="price" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">stockquantity</label>
                    <input type="text" class="form-control" name="stockquantity" id="">
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-sm-4 control-label">Ảnh </label>
                    <div class="col-md-9 col-sm-8">
                      {{-- <div class="col-md-9 col-s,-8"></div> --}}
                      <div class="row">
                          <div class="col-xs-6">
                              <img id="mat_truoc_preview" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image"
                                   style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                              <input type="file" name="image" accept="image/*"
                                     class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                             
                          </div>
                      </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">category_id</label>
                    <input type="text" class="form-control" name="category_id" id="">
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
@section('script')
<script>
  $(function(){
      function readURL(input, selector) {
          if (input.files && input.files[0]) {
              let reader = new FileReader();

              reader.onload = function (e) {
                  $(selector).attr('src', e.target.result);
              };

              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#cmt_truoc").change(function () {
          readURL(this, '#mat_truoc_preview');
      });

  });
</script>
@endsection