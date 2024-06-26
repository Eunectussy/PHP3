<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    function viewSinhVien()
    {
        $sinhVien = [
            'id' => '1',
            'name' => 'Đỗ Hữu Trọng',
            'birth' => '30/06/2004',
            'address' => 'Hà Nội',
            'email' => 'dohuutrongk4@gmail.com'
        ];
        return view('lab1', compact('sinhVien'));

    }
}
