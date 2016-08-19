<?php
	class Greet extends CI_Controller{

		function _remap($meth)
		{
   			if($meth=='testtoo')
     			$this->maintain();
   			else
     			$this->index();
		}

			public function index(){
				echo "<h1>test greeting</h1>";

			}
			public function testtoo(){
				echo "<h1>test no2</h1>";

			}

			public function maintain(){
				echo "Maintain";
			}

	}
?>