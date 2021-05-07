<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model("Commonmodel", "cm");
	}

	public function index()
	{
		$data['users'] = $this->getAllUsers();
		$this->load->view('home',$data);
	}

	public function getAllUsers()
	{
		$users = $this->cm->getDatas(array("from_table" => "users", "select" => "*"));
		return $users;
	}

	public function insertUser()
	{
		$userDetails = array("name" => "User" . rand(1, 1000), "phone" => rand(1111111111, 9999999999));
		$userInserted = $this->cm->putData("users", $userDetails);
		$data["message"] = "inserted Id:- " . $userInserted['insert_id'];
		$data['users'] = $this->getAllUsers();
		$this->load->view("home", $data);
	}



	public function updateUser()
	{
		$idOfUserToBeUpdated = 1;
		$newData = array("name" => "updated Name" . rand(1, 1000), "phone" => rand(1111111111, 9999999999));
		$userUpdated = $this->cm->setData("users", array("id" => $idOfUserToBeUpdated), $newData);
		$message = "";
		if (empty($userUpdated)) {
			$message = "user updation failed.";
		} else {
			$message = "user updation successfull.";
		}
		$data["message"] = $message;
		$data['users'] = $this->getAllUsers();
		$this->load->view("home", $data);
	}

	public function deleteUser()
	{
		$idOfUserToBeDeleted = 1;
		$userDeleted = $this->cm->deleteData("users", array("id" => $idOfUserToBeDeleted));
		$message = "";
		if (empty($userDeleted)) {
			$message = "user deletion failed.";
		} else {
			$message = "user deletion successfull.";
		}
		$data["message"] = $message;
		$data['users'] = $this->getAllUsers();
		$this->load->view("home", $data);
	}
}
