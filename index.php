<!DOCTYPE html>
<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<html>
  <head>
  <meta charset="UTF-8">
  <title>Victor Karani P2 XKCD password generator</title>
  <?php require 'logic.php';?>
  <link rel="stylesheet" href="p2.css">
  </head>
  <body>
   <div class="container">
     <h1> Victor Karani P2 <br> XKCD Password generator</h1>
       <p class="password">
         
         <?php  for($i = 0; $i < $iterations; $i++): ?>
          <?php $current_word=array_rand($word_list);?> 
          <?=$word_list[$current_word]?>
          <?php  if($i < ($iterations -1)): ?>
           -
          <?php endif; ?>        
         <?php endfor; ?>    
       </p>
       <form method="GET" action="index.php">
         <label for='number_of_words'># of Words</label>  <!-- Make this more original?-->
         <input maxlength=1 type='text' name='number_of_words' id='number_of_words' value= <?=$iterations?> >  (Max 9)
         <br>	
         <input type='submit' class='btn btn-default' value='Create Another Password'>
       </form>
   </div>   
   <pre>
    <?php print_r($_GET); ?>
    <?php print_r($iterations); ?>
   </pre>
  </body>
</html>