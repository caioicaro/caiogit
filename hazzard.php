<?php
	public function index()
	{
		return redirect->route('home');
	}
	public function entrar($url)
	{
		if($url>0) return FALSE;
		return redirect->route('entrar');
	}
	return redirect->route('home');
?>