<?php
	public function index()
	{
		return redirect->route('home');
	}
	public function entrar($url)
	{
		$ed = $url + 5;
		return redirect->route('entrar');
	}
	return redirect->route('entrar');
?>