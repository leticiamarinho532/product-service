<?php

namespace App\Product\ProductService;

use App\Product\ProductInterface;

class ProductService implements ProductInterface
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function create(array $productData)
    {
        # Add input params validation

        try {
            $createProduct = $this->productRepository->create($productData);
        } catch (\Exception $e) {
            return 'Erro ao criar produto.';
        }
    }

    public function edit(int $productId, array $productData)
    {
        # Add input params validation

        try {
            $editProduct = $this->productRepository->edit($productId, $productData);
        } catch (\Exception $e) {
            return 'Erro ao editar produto.';
        }
    }

    public function show(int $productId)
    {
        # Add input params validation

        try {
            $showProduct = $this->productRepository->show($productId);
        } catch (\Exception $e) {
            return 'Erro ao exibir produto.';
        }
    }

    public function delete(int $productId)
    {
        # Add input params validation

        try {
            $deleteProduct = $this->productRepository->show($productId);
        } catch (\Exception $e) {
            return 'Erro ao deletar produto.';
        }
    }
}
