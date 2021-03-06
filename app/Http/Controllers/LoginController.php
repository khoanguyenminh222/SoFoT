<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nguoidung;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; //thư viện lấy thời gian
use DB;


class LoginController extends Controller
{
    public function index()
    {
        $error = "";
        return view('login', ['error' => $error]);
    }

    public function login(Request $req){
        $email = $req->email;
        $matkhau = md5($req->matkhau);
        if($email == "" || $matkhau == ""){
            $thongtinsai = "Vui lòng nhập thông tin đăng nhập!";
            return view('login', ['thongtinsai' => $thongtinsai]);
        }
        
        $nguoidung = DB::table('nguoidung')->where('email', $email)->get()->toArray();
        
        foreach($nguoidung as $t){}
        if(!empty($t)){
            if($t->matkhau == $matkhau){
                return redirect()->route('trangchu');
            }else{
                $thongtinsai = "Thông tin đăng nhập không đúng!";
                return view('login', ['thongtinsai' => $thongtinsai]);
            }
        }else{
            $thongtinsai = "Thông tin đăng nhập không đúng!";
            return view('login', ['thongtinsai' => $thongtinsai]);
        }
    }

    public function register(Request $req){
        $nguoidung = new Nguoidung();

        $thoigian =Carbon::now('Asia/Ho_Chi_Minh');
        $id = "100".(string)mt_rand(100,999).(string)$thoigian->format('YmdHis');
        if($req->ho == "" || $req->ten =="" || $req->email =="" || $req->matkhau =="" || $req->gioitinh ==""){
            $error = "Đăng kí tài khoản thất bại! Vui lòng nhập đầy đủ thông tin";
            return view('login', ['error' => $error]);
        }

        if(strlen($req->matkhau) < 6){
            $error = "Mật khẩu phải có ít nhất 6 kí tự!";
            return view('login', ['error' => $error]);
        }

        $nguoidung->manguoidung = $id;
        $nguoidung->ho = $req->ho;
        $nguoidung->ten = $req->ten;
        $nguoidung->email = $req->email;
        //$nguoidung->matkhau = bcrypt($req->matkhau);
        $nguoidung->matkhau = md5($req->matkhau);
        $nguoidung->gioitinh = $req->gioitinh;
        $nguoidung->namsinh = $req->namsinh;

        $nguoidung->save();
        $dangkithanhcong = "Đăng kí tài khoảng thành công!";
        return view('login', ['dangkithanhcong' => $dangkithanhcong]);
    }
}

