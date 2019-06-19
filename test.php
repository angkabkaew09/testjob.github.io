<!DOCTYPE html>
<html>
<head>
  <title> Test </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
<?php
function factorial($number){
 $result = 1;
 
  for($i = 1; $i <= $number; $i++){
   $result = $result*$i;
  }
 
 return $result;
}
$sum = 0;
$sum = $_POST["number"];
$number = factorial($sum);

function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

$new = '';
$new = $_POST["word"];
$strrev = mb_strrev($new);


function AlphabetSoup($str) { 
		$arr = str_split($str);
		sort($arr);
		$newStr = "";
		for ($i = 0; $i <= (count($arr) - 1); $i++) {
			$newStr = $newStr . $arr[$i];
		}
		$str = $newStr;
		unset($arr);
		unset($newStr);
		return $str;
	}
$txt = '';
$txt = $_POST["alpha"];
$apha = AlphabetSoup($txt);
?>

<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="post">

FirstFactorial (!) : <input = type="text" name="number" method="post">

<?php
echo $number; 
?>
  <br><br>

Strrev : <input = type="text" name="word" method="post">

<?php
echo $strrev; 
?>
  <br><br>

Alphabet Soup : <input = type="text" name="alpha" method="post">

<?php
echo $apha; 
?>
  <br><br>

  <input type="submit" value="Submit">

</form>

</body>
</html>