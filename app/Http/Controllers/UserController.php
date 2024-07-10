<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request; //import //buoi2
use Illuminate\Support\Facades\DB; //import database //buoi3

class UserController extends Controller
{
    // function showUser()
    // {
    //     // $users = [
    //     //     [
    //     //         'id' => '1',
    //     //         'name' => 'joe'
    //     //     ],
    //     //     [
    //     //         'id' => '2',
    //     //         'name' => 'mama'
    //     //     ]
    //     // ];
    //     // return view('list-user')->with([
    //     //     'ligma'     => $users
    //     // ]);
    //     // return view('list-user', compact('users'))

    //     // 1. Lấy danh sách toàn bộ user (select * from user)
    //     // $listUser = DB::table('users')->get();
    //     // dd($listUser);

    //     // 2. Lấy thông tin user có id = 4 (select * from user where)
    //     // $result = DB::table('users')->where('id', '=', '4')->first();
    //     // $result2 = DB::table('users')->find('4');//tìm id only
    //     // dd($result2);

    //     // 3. Lấy thuộc tính 'name' của user có id = 16
    //     // $name = DB::table('users')->where('id', '=', '16')->value('name');
    //     // dd($name);

    //     // 4. Lấy danh sách iduser của phòng ban 'Ban giám hiệu'
    //     // $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', '%Ban giám hiệu%')->value('id');
    //     // $result     = DB::table('users')   ->where('phongban_id', '=', $idPhongBan)       ->pluck('id');
    //     // dd($result);

    //     // 5. Tìm user có độ tuổi lớn nhất trong công ty 
    //     // $result = DB::table('users')->where('tuoi', DB::table('users')->max('tuoi'))->get();
    //     // dd($result);

    //     // 6. Tìm user có độ tuổi nhỏ nhất trong công ty
    //     // $result = DB::table('users')->where('tuoi', DB::table('users')->min('tuoi'))->get();
    //     // dd($result);

    //     // 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
    //     // $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', '%Ban giám hiệu%')->value('id');
    //     // $result     = DB::table('users')   ->where('phongban_id', '=', $idPhongBan)       ->count();
    //     // dd($result);

    //     // 8. Lấy danh sách tuổi các user
    //     // $result = DB::table('users')->distinct()->orderBy('tuoi')->pluck('tuoi');
    //     // dd($result);

    //     // 9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
    //     // $result = DB::table('users')->where('name', 'like', '%Khải')->orWhere('name', 'like', '%Thanh')->get();
    //     // dd($result);

    //     // 10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
    //     // $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', '%Ban đào tạo%')->value('id');
    //     // $result     = DB::table('users')   ->where('phongban_id', '=', $idPhongBan)->select('id', 'name', 'email')       ->get();
    //     // dd($result);

    //     // 11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
    //     // $result = DB::table('users')->where('tuoi', '>=', '30')->select('id', 'name', 'email', 'tuoi') ->orderBy('tuoi', 'asc')->get();
    //     // dd($result);

    //     // 12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
    //     // $result = DB::table('users')->select('id', 'name', 'email', 'tuoi')->orderBy('tuoi','desc')->skip(5)->take(10)->get(); //alt
    //     // $result = DB::table('users')->select('id', 'name', 'email', 'tuoi')->orderBy('tuoi','desc')->offset(5)->limit(10)->get();
    //     // dd($result);

    //     // 13. Thêm một user mới vào công ty 
    //     // $data = [
    //     //     'name' => 'Đỗ Hữu Trọng',
    //     //     'email' => 'trongdhph41673@fpt.edu.vn',
    //     //     'phongban_id' => '1',
    //     //     'songaynghi' => '0',
    //     //     'tuoi' => '20',
    //     //     'created_at' => Carbon::now(),
    //     //     'updated_at' => Carbon::now(),
    //     // ];
    //     // DB::table('users')->insert($data);

    //     // 14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
    //     // $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', '%Ban đào tạo%')->value('id');
    //     // $result = DB::table('users')->where('phongban_id', $idPhongBan)->get();
    //     // foreach($result as $value){
    //     //     DB::table('users')->where('id', $value->id)->update([
    //     //         'name' => $value->name . ' PĐT'
    //     //     ]);
    //     // }

    //     // 15. Xóa user nghỉ quá 15 ngày
    //     // DB::table('users')->where('songaynghi', '>', '15')->delete();
        

    // }
    // function getUser($id, $name = '')
    // {
    //     echo $id;
    //     echo $name;
    // }
    // function updateUser(Request $request)
    // {
    //     echo $request->id;
    //     echo $request->name;
    // }
    public function listUsers(){
        $listUsers = DB::table('users')
        ->join('phongban', 'phongban.id', '=', 'users.phongban_id')
        ->select('users.id', 'users.name', 'users.email', 'users.phongban_id', 'phongban.ten_donvi')
        ->get();
        return view('users/listUsers')->with([
            'abc' => $listUsers
        ]);
    }
    public function addUsers(){
        $phongBan = DB::table('phongban')->select('id', 'ten_donvi')->get();
        return view('users/addUsers')->with([
            'phongBan' => $phongBan
        ]);
    }
    public function addPostUsers(Request $req){
        $data = [
            'name'          => $req->nameUser,
            'email'         => $req->emailUser,
            'phongban_id'   => $req->phongbanUser,
            'tuoi'          => $req->tuoiUser,
            'created_at'    => Carbon::now(),
            'updated_at'     => Carbon::now()
        ];
        DB::table('users')->insert($data);
        return redirect()->route('users.listusers');
    }
    public function deleteUser($idUser){
        DB::table('users')->where('id', $idUser)->delete();
        return redirect()->route('users.listusers');

    }
    public function getUser($idUser){
        $user = DB::table('users')->where('id', '=', $idUser)->get();
        $phongBan = DB::table('phongban')->select('id', 'ten_donvi')->get();
        return view('users/updateUsers')->with([
            'abc' => $user,
            'phongBan' => $phongBan
        ]);
    }
    public function updatePostUser(Request $req){
        DB::table('users')->where('id', $req->iduser)->update([
            'name'          => $req->nameUser,
            'email'         => $req->emailUser,
            'phongban_id'   => $req->phongbanUser,
            'tuoi'          => $req->tuoiUser,
            'updated_at'    => Carbon::now()
        ]);
        return redirect()->route('users.listusers');
    }

}
