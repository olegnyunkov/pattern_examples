<?php
interface RingProduct {
    public function getType();
    public function getSize();
}

interface EarringsProduct {
    public function getType();
    public function getModel();
}

interface ProductFactory {
    public function createRing($type, $size);
    public function createEarrings($type, $model);
}

class Ring implements RingProduct {
    private $type;
    private $size;
    public function __construct($type, $size) {
        $this->type = $type;
        $this->size = $size;
    }
    public function getType() {
        return $this->type;
    }
    public function getSize() {
        return $this->size;
    }
}

class Earring implements EarringsProduct {
    private $type;
    private $model;
    public function __construct($type, $model) {
        $this->type = $type;
        $this->model = $model;
    }
    public function getType() {
        return $this->type;
    }
    public function getModel() {
        return $this->model;
    }
}

class Product implements ProductFactory {
    public function createRing($type, $size) {
        return new Ring($type, $size);
    }
    public function createEarrings($type, $model) {
        return new Earring($type, $model);
    }
}

$product = new Product();
$silverRing = $product->createRing('silver', 20);
$silverEarring = $product->createEarrings('silver', 'model_1');
$goldRing = $product->createRing('gold', 20);
$goldEarring = $product->createEarrings('gold', 'model_2');
