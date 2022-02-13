<?php
namespace App\classes;
class Product
{
    protected $file;
    protected $products;
    protected $directory;
    protected $product;
    protected $name;
    protected $imageName;
    protected $tempPath;
    protected $price;
    protected $description;

    public function __construct($post=null, $file = null)
    {
        $this->file = $file;
        $this->imageName = $file['image']['name'];
        $this->tempPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/product-image/'. $this->imageName;


    }

    public function index(){
        header('Location:action.php?pages=add-product');
    }
    public function newProduct(){

        move_uploaded_file($this->tempPath, $this->directory);

    }

}