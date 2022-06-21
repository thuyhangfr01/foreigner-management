<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DeclarationStatistic;
use App\Models\PersonStatistic;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request) {
        $tenTaiKhoan = $request->input('username');
        $matKhau = $request->input('password');
        $nguoiNuocNgoai = DB::table('nguoinuocngoai')->where('tenTaiKhoan', '=', $tenTaiKhoan)
                                    ->where('matKhau', '=', $matKhau)
                                    ->first();
        session(['nguoiNuocNgoai' => $nguoiNuocNgoai]);
        // return json_encode($nguoiNuocNgoai);
        return Redirect::to('/dashboard')->with('nguoiNuocNgoai', $nguoiNuocNgoai);
    }

    public function show_declaration(){
        $nguoiNuocNgoai = session('nguoiNuocNgoai');
        return json_encode($nguoiNuocNgoai);
        $maHoChieu = 2988079;
        $khaiBaoNhapCanhs = DB::table('khaiBaoNhapCanh')->where('maHoChieu','=', $maHoChieu)->get();
        $i = 0;
        return view('admin.declaration')->with('khaiBaoNhapCanhs', $khaiBaoNhapCanhs)
                                        ->with('i', $i);
    }

    public function show_dashboard()
    {
        $nguoiNuocNgoai = session('nguoiNuocNgoai');
        return json_encode($nguoiNuocNgoai);
        return view('admin.dashboard')->with('nguoiNuocNgoai', $nguoiNuocNgoai);
    }

}
