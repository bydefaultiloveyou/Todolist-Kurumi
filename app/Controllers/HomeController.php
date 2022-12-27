<?php

/* 
|--------------------------------------------------------------------------
| Controllers 
|--------------------------------------------------------------------------
| 
|
|
|
|
 */

namespace App\Controllers;

use App\Models\Task;

class HomeController
{
    public static function home()
    {
        view('pages.home', [
            "tasks" => Task::DB()->get()
        ]);
    }

    public static function create($request)
    {
        Task::DB()->create([
            'name' => $request[0]['task']
        ]);

        redirect('/');
    }

    public static function edit($request)
    {
        view('pages.edit', [
            "task" => Task::DB()->where('id', '=', $request[1])->fetch()
        ]);
    }

    public static function update($request)
    {
        Task::DB()->where('id', '=', $request[1])->update([
            "name" => $request[0]['task']
        ]);

        redirect('/');
    }

    public static function destroy($request)
    {
        Task::DB()->where('id', '=', $request[1])->delete();
        redirect('/');
    }
}
