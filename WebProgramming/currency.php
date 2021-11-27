<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>currency</title>
</head>
<body>
<?php

function convertCurrency($amount,$currencyFrom,$currencyTo)
{

$toImage;
$fromImage;
$toSymbol;
$fromSymbol;
$finalAmount=0;
$result;


if($currencyFrom=="CAD" AND $currencyTo=="CNY"){
    $toImage="ChineseYuan";
    $fromImage="Canadian";
    $toSymbol="&#20803;";
    $fromSymbol="&dollar;";
    $finalAmount = $amount* 5.172  ;
} 
if($currencyFrom=="CAD" AND $currencyTo=="GBP"){
    $toImage="BritishPound";
    $fromImage="Canadian";
    $toSymbol="&pound;";
    $fromSymbol="&dollar;";
    $finalAmount = $amount* 0.576 ;
}
if($currencyFrom=="CAD" AND $currencyTo=="EUR"){ 
    $toImage="Euro";
    $fromImage="Canadian";
    $toSymbol="&euro;";
    $fromSymbol="&dollar;";
    $finalAmount = $amount* 0.671 ;
}
if($currencyFrom=="CAD" AND $currencyTo=="USD"){
    $toImage="USDollar";
    $fromImage="Canadian";
    $toSymbol="&dollar;";
    $fromSymbol="&dollar;";
    $finalAmount = $amount* 0.802 ;
}
if ($currencyFrom=="CAD" AND $currencyTo=="CNY"){
    $toImage="ChineseYuan";
    $fromImage="Canadian";
    $toSymbol="&#20803;";
    $fromSymbol="&dollar;";
    $finalAmount = $amount* 5.219 ;
}
if($currencyFrom=="GBP" AND $currencyTo=="CNY"){
    $toImage="ChineseYuan";
    $fromImage="BritishPound";
    $toSymbol="&#20803;";
    $fromSymbol="&pound;";
    $finalAmount = $amount*9.07 ;
}
if($currencyFrom=="GBP" AND $currencyTo=="EUR"){
    $toImage="Euro";
    $fromImage="BritishPound";
    $toSymbol="&euro;";
    $fromSymbol="&pound;"; 
    $finalAmount = $amount*1.168 ;
} 
if($currencyFrom=="GBP" AND $currencyTo=="USD"){
    $toImage="USDollar";
    $fromImage="BritishPound";
    $toSymbol="&dollar;";
    $fromSymbol="&pound;";
    $finalAmount = $amount*1.397;
}
if($currencyFrom=="GBP" AND $currencyTo=="CAD"){
    $toImage="Canadian";
    $fromImage="BritishPound";
    $toSymbol="&dollar;";
    $fromSymbol="&pound;"; 
    $finalAmount = $amount*1.753;
}
if($currencyFrom=="USD" AND $currencyTo=="CNY"){
    $toImage="ChineseYuan";
    $fromImage="USDollar";
    $toSymbol="&#20803;";
    $fromSymbol="&dollar;";
    $finalAmount = $amount* 6.489 ;
}
if($currencyFrom=="USD" AND $currencyTo=="GBP"){
    $toImage="BritishPound";
    $fromImage="USDollar";
    $toSymbol="&pound;";
    $fromSymbol="&dollar;"; 
    $finalAmount = $amount*0.715 ;
}
if($currencyFrom=="USD" AND $currencyTo=="EUR"){
    $toImage="Euro";
    $fromImage="USDollar";
    $toSymbol="&euro;";
    $fromSymbol="&dollar;"; 
    $finalAmount = $amount*0.836 ;
}
if($currencyFrom=="USD" AND $currencyTo=="CAD"){
    $toImage="Canadian";
    $fromImage="USDollar";
    $toSymbol="&dollar;";
    $fromSymbol="&dollar;";
    $finalAmount = $amount*1.254 ;
} 
if($currencyFrom=="CNY" AND $currencyTo=="CAD"){
    $toImage="Canadian";
    $fromImage="ChineseYuan";
    $toSymbol="&dollar;";
    $fromSymbol="&#20803;"; 
    $finalAmount = $amount*0.19;
}
if($currencyFrom=="CNY" AND $currencyTo=="EUR"){
    $toImage="Euro";
    $fromImage="ChineseYuan";
    $toSymbol="&euro;";
    $fromSymbol="&#20803;"; 
    $finalAmount = $amount*0.128;
}
if($currencyFrom=="CNY" AND $currencyTo=="GBP"){
    $toImage="BritishPound";
    $fromImage="ChineseYuan";
    $toSymbol="&pound;";
    $fromSymbol="&#20803;";  
    $finalAmount = $amount*0.110;
}
if($currencyFrom=="CNY" AND $currencyTo=="USD"){
    $toImage="USDollar";
    $fromImage="ChineseYuan";
    $toSymbol="&dollar;";
    $fromSymbol="&#20803;"; 
    $finalAmount = $amount*0.154;
} 
if($currencyFrom=="EUR" AND $currencyTo=="CNY"){
    $toImage="ChineseYuan";
    $fromImage="Euro";
    $toSymbol="&#20803;";
    $fromSymbol="&euro;";  
    $finalAmount = $amount*7.760;
} 
if($currencyFrom=="EUR" AND $currencyTo=="GBP"){
    $toImage="BritishPound";
    $fromImage="Euro";
    $toSymbol="&pound;";
    $fromSymbol="&euro;";
    $finalAmount  = $amount*0.855;
} 
if($currencyFrom=="EUR" AND $currencyTo=="USD"){
    $toImage="USDollar";
    $fromImage="Euro";
    $toSymbol="&dollar;";
    $fromSymbol="&euro;";
    $finalAmount = $amount*1.196;
}
if($currencyFrom=="EUR" AND $currencyTo=="CAD"){
    $toImage="Canadian";
    $fromImage="Euro";
    $toSymbol="&dollar;";
    $fromSymbol="&euro;";   
    $finalAmount = $amount*1.501;
}
if($currencyFrom=="CAD" AND $currencyTo=="CAD"){
    $toImage="Canadian";
    $fromImage="Canadian";
    $fromSymbol="&dollar;";
    $toSymbol="&dollar;";
    $finalAmount = $amount ;
}
if($currencyFrom=="USD" AND $currencyTo=="USD"){
    $toImage="USDollar";
    $fromImage="USDollar";
    $fromSymbol="&dollar;";
    $toSymbol="&dollar;";
    $finalAmount = $amount* 1 ;
}
if($currencyFrom=="GBP" AND $currencyTo=="GBP"){
    $toImage="BritishPound";
    $fromImage="BritishPound";
    $fromSymbol="&pound;";
    $toSymbol="&pound;";
    $finalAmount = $amount ;
}
if($currencyFrom=="CNY" AND $currencyTo=="CNY"){
    $toImage="ChineseYuan";
    $fromImage="ChineseYuan";
    $fromSymbol="&#20803;";
    $toSymbol="&#20803;";
    $finalAmount = $amount ;
}
if($currencyFrom=="EUR" AND $currencyTo=="EUR"){
    $toImage="Euro";
    $fromImage="Euro";
    $fromSymbol="&euro;";
    $toSymbol="&euro;";
    $finalAmount = $amount ;
}
$result="<img src='".$fromImage.".jpg' width='25' height='25'/> ".$fromSymbol.$amount." = <img src='".$toImage.".jpg' width='25' height='25'/> ".$toSymbol.$finalAmount;

/*$result="<img src='images/".$fromImage.".jpg' width='25' height='25'/> ".$fromSymbol.$amount." = <img src='images/".$toImage.".jpg' width='25' height='25'/> ".$toSymbol.$finalAmount ;*/

return $result;  

}
?>
    
        <header>
        <h1>Currency Converter</h1>          
        </header>
   
        <form method="post" action="currency.php">
            <fieldset>               
                Please Enter Amount:<input type="text" name="amount" required="required"><br>

                <p>Currency Converting From</p>
                

                <input type="radio" name="currencyFrom" value="EUR" required="required">
                <label for="Euro"><img src="Euro.jpg" alt="Europe flag" width="15" height="15" /> EUR-Euro</label><br><br> 

                <input type="radio" name="currencyFrom" value="GBP" required="required">
                <label for="British Pound"><img src="BritishPound.jpg" alt="British flag" width="15" height="15" /> GBP-British Pound</label><br><br> 

                <input type="radio" name="currencyFrom" value="CNY" required="required">
                <label for="Chinese Yuan"><img src="ChineseYuan.jpg" alt="China flag" width="15" height="15" /> CNY-Chinese Yuan</label><br><br> 

                <input type="radio" name="currencyFrom" value="CAD" required="required">
                <label for="Canadian Dollar"><img src="Canadian.jpg" alt="I'm happy" width="15" height="15" /> CAD-Canadian Dollar</label><br><br> 

                <input type="radio" name="currencyFrom" value="USD" required="required">
                <label for="US Dollar"><img src="USDollar.jpg" alt="USA flag" width="15" height="15" /> USD-American Dollar</label><br><br> 

                <p>Currency Converting To</p>
                

                <input type="radio" name="currencyTo" value="EUR" required="required">
                <label for="Euro"><img src="Euro.jpg" alt="Europe Flag" width="15" height="15" /> EUR-Euro</label><br><br> 

                <input type="radio" name="currencyTo" value="GBP" required="required">
                <label for="British Pound"><img src="BritishPound.jpg" alt="Britain Flag" width="15" height="15" /> GBP-British Pound</label><br><br>                 

                <input type="radio" name="currencyTo" value="CNY" required="required">
                <label for="Chinese Yuan"><img src="ChineseYuan.jpg" alt="China Flag" width="15" height="15" /> CNY-Chinese Yuan</label><br><br> 

                <input type="radio" name="currencyTo" value="CAD" required="required">
                <label for="Canadian Dollar"><img src="Canadian.jpg" alt="Canada Flag" width="15" height="15" /> CAD-Canadian Dollar</label><br><br> 

                <input type="radio" name="currencyTo" value="USD" required="required">
                <label for="US Dollar"><img src="USDollar.jpg" alt="USA Flag" width="15" height="15" /> USD-American Dollar</label><br><br> 
                
             <input type='submit' name='submit' value="CovertNow">
                
            </fieldset>           
        </form>
<?php 

if(isset($_POST['submit']))
{
    if (!is_numeric($_POST['amount'])) 
  {
    $message = 'You have entered an invalid amount, Please Enter a valid number for Amount';  
    echo "<h1><center><b>".$message ."<b></center></h1>";
  }
  
  else
  {
    $amount = $_POST['amount'];
    $currencyFrom = $_POST['currencyFrom'];
    $currencyTo = $_POST['currencyTo'];
    
    echo "<h1><center><b>Your Converted Amount is:</b><br></center><h1>"; 
    $message= convertCurrency($amount,$currencyFrom,$currencyTo);
    echo "<h1><center><b>".$message."</b></center></h1>";
  }
}
?>
</body>
</html>