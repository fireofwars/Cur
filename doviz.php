<?php
$kur = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");
foreach ($kur -> Currency as $cur) 
{
	if ($cur["Kod"] == "USD") 
  {
		$usdAlis  = $cur -> ForexBuying;
		$usdSatis = $cur -> ForexSelling;
    $usdbankal= $cur -> BanknoteBuying;
    $usdbanksat= $cur -> BanknoteSelling;
	}

	if ($cur["Kod"] == "EUR") {
		$eurAlis  = $cur -> ForexBuying;
		$eursatis = $cur -> ForexSelling;
    $eurbankal= $cur -> BanknoteBuying;
    $eurbanksat= $cur -> BanknoteSelling;
	}
  if($cur["Kod"] == "GBP")
  {
    $sterlinal =  $cur -> ForexBuying;
    $sterlinsatis = $cur -> ForexSelling;
    $sterlinbankal =  $cur -> BanknoteBuying;
    $sterlinbanksat = $cur -> BanknoteSelling;
  }
}



?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">   
    </head>
    <body>
        
        
        <script src="js/bootstrap.bundle.min.js"></script>      
           
            
          <div class="container border bg-success p-5 my-5">
            <h1>USD alış fiyatı  :<?php echo $usdAlis; ?> | USD satış fiyatı  :<?php echo $usdSatis; ?><hr>Banknote alış fiyatı  :<?php echo $usdbankal; ?>|Banknote satış fiyatı  :<?php echo $usdbanksat; ?></h1>
    </div>

    <div class="container p-5 my-5 bg-dark text-white">
        <h1>Euro alış fiyatı  :<?php echo $eurAlis; ?> | Euro satış fiyatı  :<?php echo $eursatis; ?><hr>Banknote alış fiyatı  :<?php echo $eurbankal; ?>|Banknote satış fiyatı  :<?php echo $eurbanksat; ?></h1>
   
        
</div>
<div class="container p-5 my-5 bg-warning text-white">
        <h1>Sterlin alış fiyatı  :<?php echo $sterlinal; ?> | Sterlin satış fiyatı  :<?php echo $sterlinsatis; ?><b><hr></b>Banknote alış fiyatı  :<?php echo $sterlinbankal; ?>|Banknote satış fiyatı  :<?php echo $sterlinbanksat; ?></h1>
   
        
</div>




    </body>
</html>