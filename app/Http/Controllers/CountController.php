<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CountController extends Controller
{
    public function affCount2() {
        return redirect('/route-2');
    }

    public function affCount3() {
        return redirect('/named-3');
    }

    public function affCount4() {
        return DB::table('users')->count();
    }

    public function affCount5() {
        $users = DB::table('users')->get();
        echo '<table border=1>';
        foreach ($users as $key => $user) {
            echo '<tr><td>' . $user->name . '</td><td>' . $user->email . '</td></tr>';
        }
        echo '</table>';
    }
}