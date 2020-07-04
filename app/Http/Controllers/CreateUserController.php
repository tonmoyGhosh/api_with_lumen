<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserController extends Controller
{
   
    public function save()
    {

        DB::table('users')->insert(
            [
                'name' => 'Sam',
                'email' => 'sam@mail.com',
                'password' => Hash::make("12345"),
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'Tonmoy',
                'email' => 'tonmoy@mail.com',
                'password' => Hash::make("12345"),
            ]
        );

        return 'User Created Successfully';
    }

}
