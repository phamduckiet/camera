@extends('admin.share.master')
@section('page-title')
<div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3 style="font-family: Arial">Thêm Mới Sản Phẩm</h3>
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
                      <label>Số lượng</label>
                      <input class="form-control" id="quantity" type="number" data-bs-original-title="" title="">
                    </div>
                  </div>

                  <div class="col-3">
                    <div class="mb-3">
                      <label class="form-label">Ẩn/Hiện</label>
                      <select class="form-select digits" id="is_view">
                        <option value="">Chọn...</option>
                        <option value=1>Hiện</option>
                        <option value=0>Ẩn</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="mb-4">
                      <label class="form-label">Thiết bị</label>
                      <select class="form-select digits" id="thietbi_id">
                        <option value=0>Chọn...</option>
                        @foreach ($thietbi_id as $value )
                            <option value={{$value->id}}>{{$value->tenthietbi}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-7">
                    <ul >
                        <label class="form-label">Mô tả sản phẩm</label>
                        <li type="hidden"><a type="hidden"  href="#info_product" ><i type="hidden"></i></a>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show file-text" id="info_product" role="tabpanel">
                            <textarea id="ckeditorInfoproduct" cols="30" class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
                <script>
                    CKEDITOR.replace('ckeditorInfoproduct', options);
                </script>

                <div class="col-5">
                    <label>Hình Ảnh Minh Họa</label>
                    <div class="input-group">
                        <input id="image"  class="form-control">
                        <a data-input="image" data-preview="holder-icon" class="lfm btn btn-light">
                            Choose
                        </a>
                    </div>
                    <img id="holder-icon" class="img-thumbnail mt-3" style="width:450px; height:450px">
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
            $("#createProduct").click(function(){

                var payload = {
                    'name'              :   $("#name").val(),
                    'slug'              :   $("#slug").val(),
                    'price'             :   $("#price").val(),
                    'quantity'          :   $("#quantity").val(),
                    'is_view'           :   $("#is_view").val(),
                    'image'             :   $("#image").val(),
                    'thietbi_id'        :   $("#thietbi_id").val(),
                    'describe'  :   CKEDITOR.instances["ckeditorInfoproduct"].getData(),


                };
               $.ajax({
                    url : '/admin/taomoisanpham',
                    type: 'post',
                    data: payload,
                    success: function($xxx){
                        if($xxx.status == true){
                            toastr.success("Tạo mới sản phẩm thành công!");
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
