<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Ajax Comtent</h1>
        <p id="box"></p>
        <button onclick="change()">Content Change</button>


</body>
<script>
    function change(){
        var m=new XMLHttpRequest();
        m.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
                document.getElementById("box").innerHTML=this.responseText;
            }
        };
        m.open("GET","lab.txt",true);
        m.send();
    }
    </script>

</html>

