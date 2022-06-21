@extends('admin.template')

@section('css')

    <style>
        .tabs {
            display: flex;
            position: relative;
        }
        .tabs .line {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 6px;
            border-radius: 15px;
            background-color: #1959ad;
            transition: all 0.2s ease;
        }
        .tab-item {
            /* min-width: 80px; */
            padding: 16px 20px 11px 20px;
            font-size: 18px;
            text-align: center;
            color: #c23564;
            background-color: #fff;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom: 5px solid transparent;
            opacity: 0.6;
            cursor: pointer;
            transition: all 0.5s ease;
        }
        .tab-icon {
            font-size: 24px;
            width: 32px;
            position: relative;
            top: 2px;
        }
        .tab-item:hover {
            opacity: 1;
            background-color: rgba(194, 53, 100, 0.05);
            border-color: rgba(194, 53, 100, 0.1);
            text-decoration: none;
            color: #be2424;
        }
        .tab-item.active {
            opacity: 1; 
        }
        .tab-content {
            padding: 28px 0;
            width: 100%;
        }
        .tab-pane {
            color: #333;
            display: none;
        }
        .tab-pane.active {
            display: block;
        }
        .tab-pane h2 {
            font-size: 24px;
            margin-bottom: 8px;
        }
    </style>
@endsection

@section('content')
<div class="right_col" role="main" style="min-height: 1000px">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mtb-20 w-100">THÔNG TIN CÁ NHÂN</h1><br>
        </div>
    </div>
    <div class="row" style="font-size: 16px">
        <div class="col-6">
            <div class="form-group">
                <label for="maHoChieu">Mã hộ chiếu</label>
                <input type="text" class="form-control" name="maHoChieu" id="maHoChieu" value="{{$nguoiNuocNgoai->maHoChieu}}" disabled>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="hoTen">Họ tên</label>
                <input type="text" class="form-control" name="hoTen" id="hoTen" value="{{$nguoiNuocNgoai->hoTen}}" disabled>
            </div>
        </div>
    </div>
    <div class="row" style="font-size: 16px">
        <div class="col-6">
            <div class="form-group">
                <label for="quocTich">Quốc tịch</label>
                <input type="text" class="form-control" name="quocTich" id="quocTich" disabled>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="maQuocTich">Mã quốc tịch</label>
                <input type="text" class="form-control" name="maQuocTich" id="maQuocTich" value="{{$nguoiNuocNgoai->maQuocTich}}" disabled>
            </div>
        </div>
    </div>
    <div class="row" style="font-size: 16px">
        <div class="col-6">
            <div class="form-group">
                <label for="gioiTinh">Giới tính</label>
                @if ($nguoiNuocNgoai->gioiTinh == 1)
                    <input type="text" class="form-control" name="gioiTinh" id="gioiTinh" value="Nam" disabled>
                @else
                    <input type="text" class="form-control" name="gioiTinh" id="gioiTinh" value="Nữ" disabled>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="ngaySinh">Ngày sinh</label>
                <input type="text" class="form-control" name="ngaySinh" id="ngaySinh" value="{{$nguoiNuocNgoai->ngaySinh}}" disabled>
            </div>
        </div>
    </div>
    <div class="row" style="font-size: 16px">
        <div class="col-6">
            <div class="form-group">
                <label for="sdt">Số điện thoại</label>
                <input type="number" class="form-control" name="sdt" id="sdt" value="{{$nguoiNuocNgoai->soDienThoai}}" disabled>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{$nguoiNuocNgoai->email}}" disabled>
            </div>
        </div>
    </div>
    
    <div class="row" style="font-size: 16px">
        <div class="col-6">
            <div class="form-group">
                <label for="diaChi">Địa chỉ</label>
                <input type="text" class="form-control" name="diaChi" id="diaChi" value="{{$nguoiNuocNgoai->diaChi}} " disabled>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="tenTaiKhoan">Tên tài khoản</label>
                <input type="text" class="form-control" name="tenTaiKhoan" id="tenTaiKhoan" value="{{$nguoiNuocNgoai->tenTaiKhoan}} " disabled>
            </div>
        </div>
    </div>
    <div class="row" style="font-size: 16px">
        <div class="col-6">
            <div class="form-group">
                <label for="matKhau">Mật khẩu</label>
                <input type="password" class="form-control" name="matKhau" id="matKhau" value="{{$nguoiNuocNgoai->matKhau}} " disabled>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="trangThai">Trạng thái</label>
                @if ($nguoiNuocNgoai->trangThaiTaiKhoan == 1)
                    <input type="text" class="form-control" name="gioiTinh" id="gioiTinh" value="Đang hoạt động" disabled>
                @else
                    <input type="text" class="form-control" name="gioiTinh" id="gioiTinh" value="Ngưng hoạt động" disabled>
                @endif
            </div>
        </div>
    </div>
    <div class="row" style="font-size: 16px">
        <div class="form-group">
            <button type="submit" class="btn btn-warning">Chỉnh sửa</button>
        </div>
    </div>
</div>

@endsection

@section('js')
{{-- jQuery --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

<script>
    // const $ = document.querySelector.bind(document);
    // const $$ = document.querySelectorAll.bind(document);

    const tabs = document.querySelectorAll('.tab-item');
    const panes = document.querySelectorAll('.tab-pane');

    const tabActive = document.querySelector('.tab-item.active');
    const line = document.querySelector('.tabs .line');

    line.style.left = tabActive.offsetLeft + 'px';
    line.style.width = tabActive.offsetWidth + 'px';

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function() {
            document.querySelector('.tab-item.active').classList.remove('active');
            document.querySelector('.tab-pane.active').classList.remove('active');

            line.style.left = this.offsetLeft + 'px';
            line.style.width = this.offsetWidth + 'px';

            this.classList.add('active');
            pane.classList.add('active');
        }
    });

</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">

    // $(document).ready(function () {
    //     // fetch_customer_data();
    //     // function fetch_customer_data(query = ''){
            
    //     // }
    //     $('#btn-search').on('click', function(event){
    //         $('#pagination-1').hide();
    //         event.preventDefault();
            
    //         // alert("alo");
    //         var query = $('input[name=search]').val();
    //         var _token = $('input[name=_token]').val();
    //         // fetch_customer_data(query);
    //         $.ajax({
    //             url:"{{route('search')}}",
    //             method:"POST",
    //             data:{
    //                 query:query,
    //                 _token: _token
    //             },
    //             dataType:"JSON",
    //             success:function(data){
    //                 $('#table-1 tbody').html(data.table_data);
    //             }
    //         });
    //     })
    // });
    
</script>
@endsection

    
