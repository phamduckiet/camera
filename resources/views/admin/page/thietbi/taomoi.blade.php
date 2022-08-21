@extends('admin.share.master')
@section('page-title')
<div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Thêm Mới Thiết Bị</h3>
      </div>
      <div class="col-6">
      </div>
    </div>
</div>
@endsection
@section('content')
<div class="container-fluid">
    <form method="post" action="{{Route('postthietbi')}}">
        @csrf
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="form theme-form">
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <label>Tên Thiết Bị</label>
                    <input class="form-control" name="tenthietbi" type="text" data-bs-original-title="" title="">
                  </div>
                </div>
                <div class="col-6">
                    <label>Hình Ảnh Minh Họa</label>
                    <div class="input-group">
                        <input id="image" name="hinhanh" class="form-control">
                        <a data-input="image" data-preview="holder-icon" class="lfm btn btn-light">
                            Choose
                        </a>
                    </div>
                    <img id="holder-icon" class="img-thumbnail" style="width:333px; height:300px">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
                <script>
                    $('.lfm').filemanager('image');
                </script>
                </div>
              </div>
            </div>
            <div class="row text-center">
                <div class="card-body">
                  <button class="btn btn-success" type="submit" data-bs-original-title="" title="">Tạo Mới Thiết Bị</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
  </div>
@endsection
