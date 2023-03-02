<?php

namespace App\Http\Controllers;

use App\Services\DemoService;

class DemoController extends Controller
{
	protected $demoService;

	function __construct(
		DemoService $demoService
	) {
		$this->demoService = $demoService;
	}


	/**
	 * It returns the result of calling the show() method on the demoService object
	 *
	 * @return The show method of the DemoService class.
	 */
	public function index()
	{
		return $this->demoService->index();
	}
	public function signin()
	{
		return $this->demoService->signin();
	}
	public function signup()
	{
		return $this->demoService->signup();
	}
	public function passReset()
	{
		return $this->demoService->passReset();
	}
	public function listProduct()
	{
		return $this->demoService->listProduct();
	}
	public function cart()
    {
        return $this->demoService->cart();
    }
    public function productDetail()
    {
        return $this->demoService->productDetail();
    }
    public function shopCheckout()
    {
        return $this->demoService->shopCheckout();
    }
    public function order()
    {
        return $this->demoService->order();
    }
    public function orderDetail()
    {
        return $this->demoService->orderDetail();
    }
}
