<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function index()
    {
        if(request()->ajax()){

            $datatable = Datatables::of(User::All())->setRowId('id');

            // Custom column to display role name
            $datatable->addColumn('role', function ($user) {
                return $user->role->name;
            });

            // Custom column to display active yes or no
            $datatable->addColumn('active', function ($user) {
                return $user->active ? 'Yes' : 'No';
            });


            return $datatable->escapeColumns([])->make(true);
        }


        return view('user-list')->with([
                'page_title' => 'Users',
                
        ]);

    }
}
