<?php

namespace Genesis\Repositories;

abstract class BaseRepo{

	protected $model;

	public function __construct(){
		$this->model = $this->getModel();
	}

	abstract public function getModel();

	public function find($id){
		//return $this->model->with(['employees'])->get();
		return $this->model->find($id);
	}

}