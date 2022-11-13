<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'tbl_post';
    protected $useTimestamps = true;
    // function tampilPost(){
    //     return $this->db->query("call tampilPost()");
    // }

    // function tambahPost($title,$body,$picture){
    //     return $this->db->query("call tambahPost('$title','$body','$picture')");
    // }
}
