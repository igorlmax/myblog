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
	
	public function Edit($id) {
		die('Editing post ' . $id);
	}
}