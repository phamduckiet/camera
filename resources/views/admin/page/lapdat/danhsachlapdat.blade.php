@extends('admin.share.master')
@section('page-title')
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3 style="font-family: Arial">Danh Sách Sản Phẩm</h3>
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
            <table class="display dataTable no-footer table table-bordered border-dark" id="datatable" role="grid" aria-describedby="basic-2_info">
              <thead>
                <tr role="row" class="table table-border-vertical">
                  <th class="text-center align-middle text-nowrap" style="font-family: Arial" scope="col">Stt</th>
                  <th class="text-center align-middle text-nowrap" style="font-family: Arial" scope="col">Tên khách hàng</th>
                  <th class="text-center align-middle text-nowrap" style="font-family: Arial" scope="col">Số điện thoại</th>
                  <th class="text-center align-middle text-nowrap" style="font-family: Arial" scope="col">Thể loại</th>
                  <th class="text-center align-middle text-nowrap" style="font-family: Arial" scope="col">Ghi chú</th>
                  <th class="text-center align-middle text-nowrap" style="font-family: Arial" scope="col">Hành Động</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $theloai = ['Lắp đặt', 'Sửa chữa', 'Tư vấn']
                @endphp
                @foreach ($lapdat as $key => $value)
                <tr class="table ">
                    <th class="text-center align-middle" scope="row">{{ $key + 1 }}</th>
                    <td class="text-center align-middle">{{ $value->ten }}</td>
                    <td class="text-center align-middle">{{ $value->std }}</td>

                    <td class="text-center align-middle" value="{{ $value->theloai }}">{{$theloai [$value->theloai] }}</td>
                    <td class="text-center align-middle">{{ $value->ghichu }}</td>
                    <td class="text-center align-middle text-nowrap">
                        <button data-delete={{$value->id}} type="button" class="btn btn-danger round waves-effect callDelete fa fa-trash-o" type="button" data-bs-toggle="modal" data-bs-target="#addNewCard"></button>
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Thông Báo</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="hidden" id="lapdat_id">
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

                $(".callDelete").click(function(){
                var id = $(this).data('delete');
                console.log(id);
                row = $(this);
                $("#lapdat_id").val(id);
                });
                $("#delete_product").click(function(){
                    var id = $("#lapdat_id").val();
                    $.ajax({
                        url: '/admin/lapdat/delete/' + id,
                        type: 'get',
                        success: function($data) {
                            toastr.success('Sản Phẩm xóa thành công! !');
                            $(row).closest('tr').remove();
                            $('#addNewCard').modal('hide');
                        }
                    });
                });





        });
    </script>
@endsection
