<?php
$word = "";
$number = "";



 $numbererror=false;
 $worderror=false;

 if(isset($_POST['submit'])){
 if(!is_numeric($number)){
 $numbererror = true;
 }
 if($word=="" or strlen($word) < $number)
 $worderror = true;
 }
 
?>
<html>
<head><title>Chunkify Sticky</title></head>
<body>
 <div>

 <form action="" method="post">
 <div><label for="word">Enter a word:</label>
 <input type="text" name="word" id="word" value="<?php echo $word; ?>" /></div>
 <div><label for="chunk">How long should the chunks be?</label>
 <input type="text" name="number" id="chunk" value="<?php echo $number; ?>" /></div>
 <div><input type="submit" name ="submit" value="Chunkify!" /></div>
 </form>
 <div>
 <?php if(isset($_POST['submit'])){
 $word = $_POST['word'];
 $number = $_POST['number'];
 $chunks = ceil(strlen($word)/$number);
 echo "The $number-letter chunks of '$word' are:\n";
 echo "<ol>";
 for ($i=0; $i < $chunks; $i++) {
 $chunk = substr($word, $i*$number, $number);
 echo "<li>",$chunk,"</li>\n";
 }
 echo "</ol>";
 }
 ?>
 </div>
 </div>
</body>
</html>

