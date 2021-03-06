<?php
namespace App\Controller;

// Make AppController available
use App\Controller\AppController;

class PostsController extends AppController {
	
	// Constructor
	public function initialize() {
		//die('Initializing...');
	}
	
	public function index() {
		die('This is the posts/index');
	}
	
	public function create($id) {
		die('Creating post ' . $id);
	}
	
	public function view($id) {
		die('This is post ' . $id);
	}
	
	public function edit($id) {
		die('Editing post ' . $id);
	}
	
	// Get the name from the url name="John"
	public function hello() {
		//die("hello " . $this->request['url']['name']);
		//print_r($this->request->query);
		/*
		if ($this->request->is('post')){
			die('This is POST');
		} elseif ($this->request->is('get')){
			die('This is Get');
		}
		die();
		*/
		die($this->request->header('User-Agent'));
	}
}