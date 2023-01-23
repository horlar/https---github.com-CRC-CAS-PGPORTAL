<?php namespace App\Models;

use CodeIgniter\Model;

class Users extends Model{
    protected $table = 'users';
    protected $allowfields = ['matricnumber','username','password'];

    protected $useSoftDelete = true;
    protected $createdField = 'timecreated';
    protected $updatedField = 'timeupdated';
    protected $deletedField = 'timedeleted';
}