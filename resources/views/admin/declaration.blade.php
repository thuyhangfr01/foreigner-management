@extends('admin.template')

@section('content')
<div class="right_col" role="main" style="min-height: 1000px">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mtb-20 w-100">THÔNG TIN NHẬP CẢNH</h1><br>
        </div>
    </div>
    <div class="row" style="font-size: 16px">
        <div class="btn-group shadow-0">
            <button type="button" class="btn btn-link dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
              Action
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
    </div>
    <table class="table table-secondary align-middle mb-0 bg-white" style="font-size: 16px">
        <thead class="bg-light">
          <tr>
            <th>STT</th>
            <th>Mã xác nhận</th>
            <th>Mã visa</th>
            <th>Ngày khai báo</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($khaiBaoNhapCanhs as $khaiBaoNhapCanh)
            <tr>
              {{-- stt --}}
              <td class="">{{ ++$i }}</td>
              {{-- mã xác nhận --}}
              <td class=""> {{ $khaiBaoNhapCanh->maXacNhan }}</td>
              {{-- mã hộ chiếu --}}
              <td class=""> {{ $khaiBaoNhapCanh->maVisa }}</td>
              {{-- ngày khai báo --}}
              <td class=""> {{ $khaiBaoNhapCanh->ngayDen }}</td>
              {{-- trạng thái --}}
              <td>
                  @if ($khaiBaoNhapCanh->trangThaiDuyet == "Đã duyệt")
                      <span class="badge badge-success rounded-pill d-inline">Đã duyệt</span>
                  @elseif ($khaiBaoNhapCanh->trangThaiDuyet == "Từ chối duyệt")
                      <span class="badge badge-danger rounded-pill d-inline">Từ chối duyệt</span>
                  @else
                      <span class="badge badge-warning  rounded-pill d-inline">Chờ duyệt</span>
                  @endif
              </td>
              {{-- thao tác --}}
              <td>
                <button type="button" class="btn btn-link btn-sm btn-rounded">
                  Xem chi tiết
                </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection