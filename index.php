<!DOCTYPE html>
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
         <?php  for($i = 0; $i < 5; $i++): ?>  <!-- REPLACE 5 with Number of iterations from the form -->
          <?=$word_list[$i]?> 
          <?php  if($i<4): ?>
           -
          <?php endif; ?>        
         <?php endfor; ?>    
       </p>
       <form method="GET" action="index.php">
         <label for='number_of_words'># of Words</label>  <!-- Make this more original?-->
         <input maxlength=1 type='text' name='number_of_words' id='number_of_words' value='5'>  (Max 9)
         <br>	
         <input type='submit' class='btn btn-default' value='Create Another Password'>
       </form>
   </div>
    
    
   <!--
   <div class = container>
    <img class="displayed" src='Victor.png' alt='Victor Karani'>
    <p class="myprojects">
     <h3>Project 2</h3>
     View:<a href="http://p2.digitalwebapplications.com/">Project 2 Website</a>
     Github: <a href="https://github.com/vkarani/project-two">Project 2 Github</a>
     <h3>Project 3</h3>
     View:<a href="http://p3.digitalwebapplications.com/">Project 3 Website</a>
     Github: <a href="https://github.com/vkarani/project-three">Project 3 Github</a>
     <h3>Project 4</h3>
     View:<a href="http://p4.digitalwebapplications.com/">Project 4 Website</a>
     Github: <a href="https://github.com/vkarani/project-four">Project 4 Github</a>
    </p>
   </div>
   <div class = mybio>
    <h2>In 2+ sentences describe who you are and what you do.</h2>
    <p>I am a QC professional working in Waltham on a priviledged Document Access product. I have been around alot of backend unix/linux/sysadmin/networking.</p>

    <h2>Why are you taking this course?</h2>
    <p>The product I am working on is web based and I want a greater understanding of how web technology works.</p>
		
    <h2>What previous experience do you have with programming?</h2>
    <p>Plenty of scripting (perl, bash) from a sysadmin point of view. Also C and Java.</p>
		
    <h2>Are you working on a Mac, PC, or some other platform?</h2>
    <p>I can tolerate a MAC but I much prefer Ubuntu/Debian</p>
		
    <h2>Anything else we should know?</h2>
    <p>Not really... Unless you want to talk sportbikes.</p>

   </div>
   -->
  </body>
</html>
