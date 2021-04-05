<?php 
namespace App\Table; 

class Produit{

    public function getURL(){
        return 'index.php?p=detail&pro_id=' . $this->pro_id; 
    }

    public function getIMG(){
        // $img = scandir('/pages/img'); 

        $img_path = 'pages/img/' . $this->pro_id . '.' . $this->pro_photo;
        return $img_path;
    }

}


?>