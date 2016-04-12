<?php
	class yhq{
		public $name,
			   $yhq_id,
			   $total,
			   $remain,
			   $deadline,
			   $yhq_state,
			   $store_id,
			   $detail,
			   $yhq_img,
			   $read,
			   $collected;

		public function __construct($name,$yhq_id, $total,$remain,$deadline,$yhq_state,$store_id, $detail, $yhq_img,$read,$collected){ 
			$this->name 	=	$name;
			$this->yhq_id	=	$yhq_id;
			$this->total 	=	$total;
			$this->remain 	=	$remain;
			$this->deadline =	$deadline;
			$this->yhq_state=	$yhq_state;
			$this->store_id	=	$store_id;
			$this->detail 	=	$detail;
			$this->yhq_img	=	$yhq_img;
			$this->read 	=	$read;
			$this->$collected=	$collected;
	}
?>