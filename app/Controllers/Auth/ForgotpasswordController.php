<?php

namespace App\Controllers\Auth;

use App\Models\User;
use App\Controllers\Controller;
use App\SessionGuard as Guard;

class ForgotpasswordController extends Controller
{
	public function __construct()
	{
		if (Guard::isUserLoggedIn()) {
			redirect('/home');
		}

		parent::__construct();
	}

	public function showForgotpasswordForm()
	{
		$data = [
			'old' => $this->getSavedFormValues(),
			'errors' => session_get_once('errors')
		];

		$this->sendPage('auth/forgot password', $data);
	}

	public function forgotpassword()
	{
		$this->saveFormValues($_POST, ['email']);

		$data = $this->filterUserData($_POST);
		$model_errors = User::validate($data);
		if (empty($model_errors)) {
			// Dữ liệu hợp lệ...
			$this->createUser($data);

			$messages = ['success' => 'User has been created successfully.'];
			redirect('/login', ['messages' => $messages]);
		}

		// Dữ liệu không hợp lệ...
		redirect('/forgot password', ['errors' => $model_errors]);
	}

	protected function filterUserData(array $data)
	{
		return [
			'email' => filter_var($data['email'], FILTER_VALIDATE_EMAIL),
		];
	}

	protected function createUser($data)
	{
		return User::create([
		    'email' => $data['email'],
		]);
	}
}