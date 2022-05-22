<?php
// Code By github.com/mohalhilal



  // Meminta Nilai Desimal 
	echo "Masukan Nilai Desimal :";
	$des = trim(fgets(STDIN));
	
	// validasi dan proses pengelompokan sisa bagi untuk di bagi lagi
	if (is_numeric($des)) {
	$bagi = [$des];
	for ($i=0; $i <=$des; $i++){
	  if($bagi[$i] == 0){
	     break;
	     exit;
	   }
	  elseif($bagi[$i] !==0 && $bagi[$i] % 2 == 0){
	    $bagi[] = $bagi[$i]/2;
	  }elseif($bagi[$i] !==0 && $bagi[$i] % 2 == 1){
	    $kurangi = $bagi[$i]-1;
	    $bagi[] = $kurangi/2;
	    
	   }
	} 
	
	// Membuat Output Cara pengerjaan dan pembagian
	echo "Cara Pengerjaan : \n";
	
	$nilai_binner = "";

	foreach($bagi as $b){
	  if($b !== 0){
	    if($b % 2 == 0){
	    echo $b."/2 = ". $b/2 ." Sisa bagi 0 \n";
	    $nilai_binner .=0;
	  }elseif($b %2 == 1){
	    echo $b."/2 = ". ($b-1)/2 . " Sisa bagi 1 \n";
	    $nilai_binner .=1;
	  }
	  }else{
	    
	  }
	  	  
	}
	
	 // Result
	 echo "Binner dari ".$des." Adalah : ".strrev($nilai_binner);
	
	
	}else{
	  echo "Gagal, Tolong masukan angka!";
	}

?>