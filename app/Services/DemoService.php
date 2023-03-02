<?php

namespace App\Services;

use App\Constants\UserConst;

class DemoService
{

	/**
	 * The function show() returns the view Main.php with the data
	 *
	 * @return A view called Main with the data array.
	 */

	public function index()
	{
		return view('index');
	}
	public function signin()
	{
		return view('Admin.signin');
	}
	public function signup()
	{
		return view('Admin.signup');
	}
	public function passReset()
	{
		return view('Admin.pass-reset');
	}
	public function listProduct()
	{
		return view('Product.list-product');
	}
	public function cart()
    {
        return view('Product.cart');
    }
    public function productDetail()
    {
        return view('Product.product-detail');
    }
    public function shopCheckout()
    {
        return view('Ecommerce.shop-checkout');
    }
    public function order()
    {
        return view('Ecommerce.order');
    }
    public function orderDetail()
    {
        return view('Ecommerce.order-detail');
    }
}
