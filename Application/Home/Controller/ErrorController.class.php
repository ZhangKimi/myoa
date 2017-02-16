<?php
	namespace Home\Controller;
	use Think\Controller;
	class ErrorController extends Controller {
		public function loginError() {
			$this -> display('loginError');
		}
	}