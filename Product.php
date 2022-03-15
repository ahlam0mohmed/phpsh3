<?php

class Product
{

    public $productArray = array(
        "3DcAM01" => array(
            'id' => '1',
            'name' => '3D Camera',
            'code' => '3DcAM01',
            'image' => 'product-image/camera.jpg',
            'price' => '1500.00'
        ),
        "USB02" => array(
            'id' => '2',
            'name' => 'External Hard Drive',
            'code' => 'USB02',
            'image' => 'product-image/external-hard-drive.jpg',
            'price' => '800.00'
        ),
        "wristWear03" => array(
            'id' => '3',
            'name' => 'Wrist Watch',
            'code' => 'wristWear03',
            'image' => 'product-image/watch.jpg',
            'price' => '400.00'
        ),
        "laptopci5" => array(
            'id' => '4',
            'name' => 'laptop Dell',
            'code' => 'laptopci5',
            'image' => 'product-image/laptop.jpg',
            'price' => '1400.00'
        )
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}
