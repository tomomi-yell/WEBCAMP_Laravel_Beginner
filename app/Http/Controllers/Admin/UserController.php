<?php
declare(strict_types=1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User as UserModel;

class UserController extends Controller
{
    /**
     * ユーザの一覧 を表示する
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        //return view('admin.user.list');
    }

}