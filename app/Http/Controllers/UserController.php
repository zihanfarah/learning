<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
// use Illuminate\Pagination\Paginator;
// use Illuminate\Pagination\LengthAwarePaginator;


class UserController extends Controller
{
    function index()
    {
        // $users = DB::table('users')->simplePaginate(15);
        $users = User::all()->map(function ($users) {
            return [
                'id'=> $users->id,
                'name' => $users->name,
                'birth' => optional($users->profil)->birth,
                'sex' => optional($users->profil)->sex
                // 'birth' => $users->profil ? $users -> profil -> birth : '',
                // 'sex' => $users->profil ? $users-> profil -> sex : ''
            ];

            
        });

        // $users = User::paginate(10);
        // $paginatedUsers = $this->paginate($users, 10);
        return view('page.user', [
            'users' => DB::table('users')->paginate(15)
        ]);
    }

//     private function paginate($items, $perPage)
// {
//     $currentPage = Paginator::resolveCurrentPage('page');
//     $currentItems = $items->slice(($currentPage - 1) * $perPage, $perPage);
//     $paginatedItems = new LengthAwarePaginator($currentItems, $items->count(), $perPage, $currentPage, [
//         'path' => Paginator::resolveCurrentPath(),
//         'pageName' => 'page',
//     ]);

//     return $paginatedItems;
// }
}
