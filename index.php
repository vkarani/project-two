<!DOCTYPE html>
<html>
  <head>
  <meta charset='utf-8'>
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
         <input maxlength=1 type='text' name='number_of_words' id='number_of_words' value= <?=$iterations?> >  (Maximum 9)
         <br>	
         
         <input type='checkbox' name='add_number' id='add_number' <?=$display_number?> > 
			<label for='add_number'>Use Numbers</label>
			<br>	
			
			<input type='checkbox' name='add_symbol' id='add_symbol' <?=$display_symbol?>  > 
			<label for='add_symbol'>Use Symbols</label>
			<br>        
         
         <input type='submit' class='btn btn-default' value='Create Another Password'>  
       </form>
       <br>
       <br>
       <img class='image' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
   </div>   
  </body>
</html>