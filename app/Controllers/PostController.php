<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class PostController extends BaseController
{
    protected $dataModel;
    function __construct()
    {
        $this->dataModel = new PostModel();
        // $this->load->model("PostModel");
        // $this->load->library("upload");
    }

    public function tampilPost()
    {
        // $data["post"]=$this->PostModel->tampilPost();
        // $this->load->view("post/tampil",$data);
        $datas = $this->dataModel->findAll();
        $data = [
            'tbl_post' => $datas,
        ];

        return view('/post/tampil.php', $data);
    }

    // public function tambahPost()
    // {
    //     $title = $this->input->post("title");
    //     $body = $this->input->post("body");
    //     $picture = $_FILES["picture"]["name"];
    //     $config = array(
    //         'upload_path' => "assets/picture/",
    //         'allowed_types' => "jpg|png",
    //         'max_size' => "500",
    //         'file_name' => $_FILES["picture"]["name"]
    //     );
    //     $this->upload->initialize($config);
    //     if ($this->upload->do_upload('picture')) {
    //         $this->PostModel->tambahPost($title, $body, $picture);
    //     }
    //     redirect("PostController/tampilPost");
    // }
}
