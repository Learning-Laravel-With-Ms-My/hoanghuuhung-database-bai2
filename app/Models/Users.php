<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllUsers(){
        $users = DB::select('SELECT * FROM users WHERE id');
        return $users;
    }
    public function addUser($data){
        DB::insert('INSERT INTO users (fullname, email, create_at) values (?, ?,?)',$data);

    }
}
