@extends('admin.share.master')
@section('page-title')
<div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Thêm Mới Sản Phẩm</h3>
      </div>
      <div class="col-6">
      </div>
    </div>
</div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="form theme-form">
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <label>Tên</label>
                    <input class="form-control" id="name" type="text" data-bs-original-title="" title="">
                  </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                      <label>Slug</label>
                      <input class="form-control" id="slug" type="text" data-bs-original-title="" title="">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="mb-3">
                      <label>Giá</label>
                      <input class="form-control" id="price" type="number" data-bs-original-title="" title="">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="mb-3">
                      <label>Mô tả</label>
                      <input class="form-control" id="describe" type="text" data-bs-original-title="" title="">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="mb-3">
                      <label>Số lượng</label>
                      <input class="form-control" id="quantity" type="number" data-bs-original-title="" title="">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="mb-3">
                      <label>Ẩn/Hiện</label>
                      <input class="form-control" id="is_view" type="text" data-bs-original-title="" title="">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="mb-3">
                      <label class="form-label">Ẩn/Hiện</label>
                      <select class="form-select digits" id="is_view">
                        <option>Chọn...</option>
                        <option>Ẩn</option>
                        <option>Hiện</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="mb-3">
                      <label>Thiết bị</label>
                      <input class="form-control" id="thietbi_id" type="text" data-bs-original-title="" title="">
                    </div>
                  </div>
                <div class="col-6">
                    <label>Hình Ảnh Minh Họa</label>
                    <div class="input-group">
                        <input id="image"  class="form-control">
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
                  <button class="btn btn-success" id="createProduct" data-bs-original-title="" title="">Tạo Mới Thiết Bị</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
   <script>
    $(document).ready(function(){
            $("#name").blur(function(){
                $("#slug").val(toSlug($("#name").val()));
            });
            function toSlug(str) {
                str = str.toLowerCase();
                str = str
                    .normalize('NFD') // chuyển chuỗi sang unicode tổ hợp
                    .replace(/[\u0300-\u036f]/g, ''); // xóa các ký tự dấu sau khi tách tổ hợp
                str = str.replace(/[đĐ]/g, 'd');
                str = str.replace(/([^0-9a-z-\s])/g, '');
                str = str.replace(/(\s+)/g, '-');
                str = str.replace(/-+/g, '-');
                str = str.replace(/^-+|-+$/g, '');
                return str;
             }
            $("#create").click(function(){

                var payload = {
                    'name'              :   $("#name").val(),
                    'slug'              :   $("#slug").val(),
                    'name'              :   $("#name").val(),
                    'slug'              :   $("#slug").val(),
                    'name'              :   $("#name").val(),
                    'slug'              :   $("#slug").val(),
                    'name'              :   $("#name").val(),
                    'slug'              :   $("#slug").val(),


                };
               $.ajax({
                    url : '/admin/taomoithietbi',
                    type: 'post',
                    data: payload,
                    success: function($xxx){
                        if($xxx.status == true){
                            toastr.success("Created category successfully!");
                        }
                        location.reload();
                    },
                    error: function($errors){
                        var listErrors = $errors.responseJSON.errors;
                        $.each(listErrors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    }
                });
            });
     });

</script>
@endsection
