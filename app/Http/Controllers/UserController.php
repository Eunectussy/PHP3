<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //import

class UserController extends Controller
{
    function showUser()
    {
        $users = [
            [
                'id' => '1',
                'name' => 'joe'
            ],
            [
                'id' => '2',
                'name' => 'mama'
            ]
        ];
        return view('list-user')->with([
            'ligma'     => $users
        ]);
        // return view('list-user', compact('users'))
    }
    function getUser($id, $name = '')
    {
        echo $id;
        echo $name;
    }
    function updateUser(Request $request)
    {
        echo $request->id;
        echo $request->name;
    }
}
