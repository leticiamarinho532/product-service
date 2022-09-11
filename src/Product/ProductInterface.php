<?php

namespace App\Product\ProductInterface;

interface ProductInterface
{
    public function create(array $productData);
    public function edit(int $productId, array $productData);
    public function show(int $productId);
    public function delete(int $productId);
}
