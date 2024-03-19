

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:blue;">
   <h1>Local Content</h1>
   <form action="" method="post">
   <button type="submit" name="read">Click</button><br>
   <?php
include "file.php";
if(isset($_POST['read'])){
    readFileContent('web.txt');
}
?>
</form>

<div>
<h1>Ajax Content</h1>
<p id="cot"></p>
<button onclick="swap()">Ajax Content Change</button>
</div>

<script>
   function swap(){
    var abc=new XMLHttpRequest();
    abc.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
                document.getElementById("cot").innerHTML=this.responseText;
            }
    };
    abc.open("GET","vtube.txt",true);
    abc.send();
   }

   
   
   
    </script>


</body>
</html>




