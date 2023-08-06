<?php

namespace Mizz\Belajar\PHP\MVC\Controller;

class ProdukController {
    function category(string $produkId, string $categoryName)
    {
        echo "Id Produk: $produkId, Category: $categoryName";
    }
} 