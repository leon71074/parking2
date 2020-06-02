<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Item;

class ShopController extends Controller
{
    public function addItem(Item $item)
    {
        $data = [
            'id' => $item->id,
            'name' => $item->title,
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => [], //額外屬性
            'associatedModel' => $item //商品模型物件
        ];
        Cart::session(2)->add($data);
    }
    public function updateItem(Item $item, $qty)
    {
        Cart::session(2)->update($item->id, [
            'quantity' => $qty
        ]);
    }
    public function removeItem(Item $item)
    {
        Cart::session(2)->remove($item->id);
    }
    public function getContent()
    {
        $cartContent = \Cart::session(2)->getContent();
        dd($cartContent);
    }
}
