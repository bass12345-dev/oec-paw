<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_image {

        public function __construct($params)
        {

        	$new_name = '';

                        
                	if ($params) {

                		$extension = explode('.', $params['name']);

        					$new_name = rand().'.' . $extension[1];
        					$destination = './uploads/'. $new_name;
       					 	move_uploaded_file($params['tmp_name'], $destination);
        					


                	}

                	return $new_name;
        }
}



?>