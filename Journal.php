<!DOCTYPE html>
<html lang="en">
<head>
<title>Personal Journal</title>
<meta charset="utf-8">
<link rel="icon" href="./x-icon/connecting 1x.png" type="image/x-icon">
<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
<script language = "javascript" type = "text/javascript" src = "./libraries/p5.js"></script>
<script language = "javascript" type = "text/javascript"src = "./libraries/jquery-3.4.1.js"></script>
<script language = "javascript" type = "text/javascript" src = "javaPage.js"></script>
<link rel = "stylesheet" type = "text/css" href = "myJournal.css">





</head> 

<body>
     

<!--    <div class = "versionNumber">/*   version 3 at long last!  */</div>
 <br>  -->
 
 


 <div class="titleBox">
  <h1>Personal <br>Journal</h1><nav><a href="home.php" alt="Home"><img class="navPhotos" src="./Navigation Buttons/Home.gif" alt="Home"></a></nav>
 </div>

<br>
<br>
<br>
<!--</div>-->
    <a name="top"></a>
<main>
    <ul class="toDoBox">
    <br>
    <h1>My Tasks</h1>
    <h4>-------------------------------------</h4>
       
        
        
            <form action="submit.php" method="POST">
            <textarea name="taskInput" rows="2" cols="37" placeholder="Enter a new task..."></textarea><br>
            <br>
            <input type="submit" value="Submit" id="saveButton">
           <!-- <button class="saveButtonForText" id="saveButton">Add Task</button>
            <button class="saveButtonForText" id="saveButton">Delete Task</button> -->
            </form>

        
        <div id="display-text">
            <!-- The text that was entered will be posted here-->
            <?php include('display.php'); ?>
        </div>

    </ul>
</main>

    


<br>



<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<div class="entryBox"> 
    <h2>Input a journal entry: </h2>
   <!--         <textarea name="taskInput" rows="2" cols="28" placeholder="Enter a new task..."></textarea><br>
            <br>
            <input type="submit" value="Submit" id="saveButton">
            <button class="saveButtonForText" id="saveButton">Add Task</button>
            <button class="saveButtonForText" id="saveButton">Delete Task</button> 
            </form>
-->

<form action="textSubmit.php" method="POST" enctype="multipart/form-data">
<input type="text" name="titleInput" placeholder="Title" required><br>
<textarea name=journalEntry type = "text" rows = "7" cols = "30" placeholder = "Journal entry here..."></textarea>
<br>
<input type="file" name="image" accept="image/*">
<input type="submit" value="Submit" id="saveButton">
<br>

</form>

<br>
<button class = "hideAndShowJournal" onclick = "HideShowButton()">Show/Hide Journal Entries</button>

<!-- display error message -->

<?php if (!empty($error_message)): ?>
    <div style="color: red;">
        <?php echo htmlspecialchars($error_message); ?>
    </div>
<?php endif; ?>


</div>


<br>
<br>
<br>
<br>
<br>
<br>



<div id = "HIDEJOURNALENTRIES">


    <div class="box"><h1>Journal Entries: </h1></div>

        
        <div id="display-text">
            
            <!-- The text that was entered will be posted here-->
             
            <?php include('textDisplay.php'); ?>
            
        </div>

            




   


<br>
</div>

</div>



<a href="#top"><b id = "ToTop">To Top^</b></a>

<br>
<br>
</main>

<footer class = "copyrightBox">
    Copyright &copy; 2025 Daniel Barton 
    <br>All Rights Reserved.

    <br> last updated 07/06/2025


</footer>

</body>
</html>