<?php

class Logik
{

  public $cetak;

  public function perulangan($input)
  {
    $data = "";
	$masuk59=1;
    
      if($input%3==0 && $input%5!=0){
        $data =  $data."Marlin |<br>";
      }

      if($input%5==0 && $input%3!=0){
        $data = $data."Booking |<br>";
      }

      if($input%5==0 && $input%3==0){
		for ($i=1; $i<=$input ; $i++) {

          if ($masuk59<=5) {
            if($i<=2){
              $data = $data."Marlin Booking <br>";
			  $masuk59++;
            }elseif ($i%3==0) {
              $data =  $data."Marlin <br>";
            }elseif ($i%5==0) {
              $data =  $data."Booking <br>";
            }else{
				$data = $data."Marlin Booking <br>";
				$masuk59++;
			}
          }
      }
    }

    return $this->cetak = $data;

  }
}
 ?>
