@extends('admin.share.master')
@section('page-title')
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Danh Sách Sản Phẩm</h3>
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <div id="basic-2_wrapper" class="dataTables_wrapper no-footer">
            <table class="display dataTable no-footer" id="datatable" role="grid" aria-describedby="basic-2_info">
              <thead>
                <tr role="row" class="table table-border-vertical">
                  <th class="text-center" scope="col">Stt</th>
                  <th class="text-center" scope="col">Tên</th>
                  <th class="text-center" scope="col">Slug</th>
                  <th class="text-center" scope="col">Thiết Bị</th>
                  <th class="text-center" scope="col">Giá</th>
                  <th class="text-center" scope="col">Số lượng</th>
                  <th class="text-center" scope="col">Mô tả</th>
                  <th class="text-center" scope="col">Ẩn/Hiện</th>
                  <th class="text-center" scope="col">Hình Ảnh</th>
                  <th class="text-center" scope="col">Hành Động</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sanpham as $key => $value)
                <tr class="table table-border-vertical">
                    <th class="text-center align-middle" scope="row">{{ $key + 1 }}</th>
                    <td class="text-center align-middle">{{ $value->name }}</td>
                    <td class="text-center align-middle">{{ $value->slug }}</td>
                    <td class="text-center align-middle">{{ $value->nameThietBi }}</td>
                    <td class="text-center align-middle">{{ $value->price }}</td>
                    <td class="text-center align-middle">{{ $value->quantity }}</td>
                    <td class="text-center align-middle">{{ $value->describe }}</td>
                    <td class="text-center align-middle">
                        <span class="btn view {{$value->is_view == 1 ? 'btn-success' : 'btn-danger'}}" data-id="{{$value->id}}">{{ $value->is_view == 1 ? 'Hiện' : 'Ẩn' }} </span>
                    </td>
                    <td class="text-center align-middle"><img style="width:100px; height:100px" src="{{$value->image}}"></td>

                    <td class="text-center align-middle text-nowrap">
                        <button data-delete={{$value->id}} type="button" class="btn btn-danger round waves-effect callDelete fa fa-trash-o" type="button" data-bs-toggle="modal" data-bs-target="#addNewCard"></button>
                        <button type="button" data-edit="{{ $value->id }}"
                            class="btn btn-success editProduct fa fa-gear callEdit" data-bs-toggle="modal"
                            data-bs-target="#edit-sanpham">

                        </button>
                    </td>
                </tr>
            @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
    <div class="modal fade" id="addNewCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Thông Báo</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="hidden" id="product_id">
                            <label class="col-form-label" for="recipient-name">Bạn có chắc chắn xóa sản phẩm này này ?</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Không</button>
                    <button class="btn btn-warning" id="delete_product" type="button">Có</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-sanpham">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user" data-select2-id="84">
            <div class="modal-content" data-select2-id="83">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50" data-select2-id="82">
                    <div class="text-center mb-2">
                        <input type="hidden" id="product_id">
                        <h1 class="mb-1">Chỉnh Sửa Sản Phẩm</h1>
                    </div>
                    <form id="editForm" class="row gy-1 pt-75" onsubmit="return false" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form theme-form">

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
                                                                                <label class="form-label">Ẩn/Hiện</label>
                                                                                <select class="form-select digits" id="is_view">
                                                                                  <option value="">Chọn...</option>
                                                                                  <option value=0>Ẩn</option>
                                                                                  <option value=1>Hiện</option>
                                                                                </select>
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                              <div class="mb-4">
                                                                                <label class="form-label">Thiết bị</label>
                                                                                <select class="form-select digits" id="thietbi_id">
                                                                                  @foreach ($thietbi as $value )
                                                                                      <option value={{$value->id}}>{{$value->tenthietbi}}</option>
                                                                                  @endforeach
                                                                                </select>
                                                                              </div>
                                                                            </div>
                                                                          <div class="col-8">
                                                                              <label>Hình Ảnh Minh Họa</label>
                                                                              <div class="input-group">
                                                                                  <input name="image" id="image"  class="form-control">
                                                                                  <a data-input="image" data-preview="holdericon" class="lfm btn btn-light">
                                                                                      Choose
                                                                                  </a>
                                                                              </div>
                                                                              <img id="holdericon" class="img-thumbnail mt-3" style="width:450px; height:450px">
                                                                          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                                                          <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
                                                                          <script>
                                                                              $('.lfm').filemanager('image');
                                                                          </script>
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
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-2 pt-50">
                                                <button type="submit" id="updatecProduct"
                                                    class="btn btn-primary me-1 waves-effect waves-float waves-light">Cập Nhập</button>
                                                <button type="reset" class="btn btn-outline-secondary waves-effect"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    Hủy bỏ
                                                </button>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
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
        $(document).ready(function() {
            $(".editProduct").click(function(e) {
                var id = $(this).data('edit');
                console.log(id);
                $("#product_id").val(id);
                e.preventDefault();

                $.ajax({
                    url: '/admin/sanpham/edit/' + id,
                    type: 'get',
                    success: function(response) {
                        $('#name').val(response.data.name);
                        $('#slug').val(response.data.slug);
                        $('#price').val(response.data.price);
                        $('#describe').val(response.data.describe);
                        $('#quantity').val(response.data.quantity);
                        $('#is_view').val(response.data.is_view);
                        $('#image').val(response.data.image);
                        $('#thietbi_id').attr('src',response.data.thietbi_id);
                    }

                });
            $("#updatecProduct").click(function(){
                        var payload1 = {
                            'name'              :   $("#name").val(),
                            'slug'              :   $("#slug").val(),
                            'price'             :   $("#price").val(),
                            'describe'          :   $("#describe").val(),
                            'quantity'          :   $("#quantity").val(),
                            'is_view'           :   $("#is_view").val(),
                            'image'             :   $("#image").val(),
                            'thietbi_id'        :   $("#thietbi_id").val(),
                    };
                        $.ajax({
                            url : '/admin/sanpham/update/' + id,
                            type: 'post',
                            data: payload1,
                            success: function($xxx){
                                if($xxx.status == true){
                                    toastr.success("Bạn đã cập nhập sản phẩm thành công!", "Thông Báo");
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
                $(".callDelete").click(function(){
                var id = $(this).data('delete');
                console.log(id);
                row = $(this);
                $("#product_id").val(id);
                });
                $("#delete_product").click(function(){
                    var id = $("#product_id").val();
                    $.ajax({
                        url: '/admin/sanpham/delete/' + id,
                        type: 'get',
                        success: function($data) {
                            toastr.success('Sản Phẩm xóa thành công! !');
                            $(row).closest('tr').remove();
                            $('#addNewCard').modal('hide');
                        }
                    });
                });



                $(".view").click(function(){
            var text = $(this);
            var idX = $(this).data('id');
            var dongGoi = {
                'id'    : idX,
            };
            $.ajax({
                url : '{{ Route('change.View') }}',
                type: 'post',
                data: dongGoi,
                success:function($data){
                    if($data.status == false){
                        toastr.error('Không can thiệp vào hệ thống!!');
                    } else {
                        toastr.success('Thay đổi thành công!');
                        if($data.is_view == 1){
                            text.removeClass("btn-danger");
                            text.addClass("btn-success");
                            text.html('Hiện');
                        } else {
                            text.removeClass("btn-success");
                            text.addClass("btn-danger");
                            text.html('Ẩn');
                        }
                    }
                },
            });
        });

        });
    </script>




<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript"></script>
<script>
    $(document).ready(function() {
    var table = $('#datatable').DataTable();
    table.on('click', '.callEdit', function() {
        $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
    }
    var data = table.row($tr).data();
    // console.log(data);
    var src = $('#image').attr('src');
    $('#holdericon').attr('src', $tr.find('img').attr('src'));

    });
    });
</script>
@endsection
