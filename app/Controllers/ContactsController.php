<?php

namespace App\Controllers;

use App\SessionGuard as Guard;
use App\Models\Cart;
use App\Models\Cart1;
use App\Models\Product;

class ContactsController extends Controller
{
	
	//search
	public function search()
	{
		if(isset($_POST['search']) && $_POST['search'] != ''){
			$this->sendPage('layouts/search',['result'=>Product::where('Tensp','like', '%'. $_POST['search'] . '%')->get()]);
		}else {
			redirect('/home1');
		}
	}

	public function index()
	{
		$this->sendPage('contacts/trangchu', [
			'carts' => Cart::all()
		]);
		
	}
	public function trangchu()
	{
		$this->sendPage('contacts/trangchu', [
			'carts' => Cart::all()
		]);
		
	}

	public function sp()
	{
		$this->sendPage('contacts/sp', [
			'products' => Product::all()
		]);
		
	}

	public function hinh()
	{
		$this->sendPage('contacts/sp', [
			'products' => Product::all()
		]);
		
	}

	public function admin()
	{
		$this->sendPage('contacts/admin', [
			'carts' => Cart::all()
		]);
		
	}

	// public function giohang()
	// {
	// 	$this->sendPage('contacts/home', [
	// 		'carts' => Cart::all()
	// 	]);
		
	// }
	public function addgiohang()
	{
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}
		$sp=Product::where('Masanpham',$_POST['masp'])->first();

		Cart1::create([
			'Masanpham'=>$sp->Masanpham,
			'NameProduct'=>$sp->Tensp,
			'Price'=>$sp->Gia,
			'Quantity'=>$_POST["soluong"],
			'Notes'=>""
		]);
		redirect("/gh");
	}
	public function deletegiohang()
	{
		

		Cart1::where("Masanpham",$_GET['masp'])->delete();
		redirect("/gh");
	}

	public function gh()
	{
		$this->sendPage('contacts/home', [
			'carts' => Cart1::all()
		]);
		
	}
	public function pay()
	{	
		$cart=Cart1::all();
		foreach($cart as $sp){
			Cart1::where("Masanpham",$sp->Masanpham)->delete();
		}
		$this->sendPage('contacts/home', [
			'carts' => Cart1::all(),"delete"=>true
		]);
		
	}

	public function delete()
	{
		$contact = Cart1::find($_GET['masp']);
		if (! $contact) {
			$this->sendNotFound();
		}
		$contact->delete();
		redirect('/gh');
	}
	public function deleteadmin()
	{
		$contact = Cart::find($_GET['masp']);
		if (! $contact) {
			$this->sendNotFound();
		}
		$contact->delete();
		redirect('/admin');
	}


	public function showAddPage()
	{
		$this->sendPage('contacts/add', [
			'errors' => session_get_once('errors'),
			'old' => $this->getSavedFormValues()
		]);
	}
	public function create()
	{
		Cart::create([
			'Masanpham'=>$_POST['id'],
			'NameProduct'=>$_POST['name'],
			'Hinhanh'=>$_POST['filename'],
			'Price'=>$_POST['price'],
			'Quantity'=>1,
			'Notes'=>$_POST['notes']
		]);
		redirect('/admin');
	}
// Lưu các giá trị của form vào $_SESSION['form']
//		$this->saveFormValues($_POST);
 // Lưu các thông báo lỗi vào $_SESSION['errors']
//		redirect('/contacts/add', ['errors' => $model_errors]);
//	}
	protected function filterContactData(array $data)
	{
		return [
			'name' => $data['name'] ?? null,
			'phone' => preg_replace('/\D+/', '', $data['phone']),
			'notes' => $data['notes'] ?? null
		];

	}
}
