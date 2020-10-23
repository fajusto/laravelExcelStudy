<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UsersController extends Controller
{
    protected $user;

    public function __construct(

        User $user

    ) {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->all();
        return view('welcome', compact('users'));
    }

    public function import()
    {
        Excel::import(new UsersImport,request()->file('file'));

        $users = $this->user->all();
        
        return view('welcome', compact('users'));
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'corretores.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
}
