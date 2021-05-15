<?php

namespace App\Repositories;

use App\Product;

interface AjaxInterfaceRepository {

	public function add_to_cart(Product $product, $quantity);

	// Retirer un produit du panier
	public function remove(Product $product);

	// Vider le panier
	public function empty();

}

?>