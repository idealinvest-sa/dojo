<?php

class Main {

	public function parse($number) {

	$numbers = array ("

   |
   |

" => 1
	);

	if (array_key_exists($number, $numbers)) {
	   return $numbers[$number];	
	}

			
		return 0;
	}

	public function sendNumber(){
		return array( 1 => '
  |
  |
	
');
	}
}
