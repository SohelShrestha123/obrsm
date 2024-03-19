
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
          .mistake{
            display:none;
          }
    </style>
</head>
<body>
    <h1>Register</h1>
    <form id="blank" action="register.php" method="POST" onsubmit="return validation()">
    <label>Full Name</label><br><div id="nError" class="mistake">Invalid Name</div>
    <input type="text" id="name" name="fname" >
    <br><br>
    <label>Email</label><br><div id="eError" class="mistake">Invalid Email</div>
    <input type="text" id="email" name="email" >
    <br><br>
    <label>Username</label><br><div id="uError" class="mistake">Invalid username</div>
    <input type="text" id="uname" name="uname" >
    <br><br>
    <label>Password</label><br><div id="pError" class="mistake">Invalid password type</div>
    <input type="password" id="pass" name="password" >
    <br><br>
    
    <input type="submit" name="submit" onclick="validation(event)" value="Submit">
</form>

<script>
            function validation(){
              let error=0;
              const nameRegex=/^[a-z A-Z 0-9]+$/;
              const userNameRegex=/^[a-z A-Z 0-9_]+$/;
              const passwordRegex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z].{8, })$/;
              const emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

              const name=document.getElementById('name').value;
              const username=document.getElementById('uname').value;
              const password=document.getElementById('pass').value;              
              const email=document.getElementById('email').value;

              if(!nameRegex.test(name)){
                document.getElementById('nameError').style='display: block';
                error++;
            }
            if(!passwordRegex.test(passwordRegex)){
                document.getElementById('passError').style='display: block';
                alert('Invalid password');
                error++;
                console.log("hello");
            }
            if(!userNameRegex.test(uname)){
                document.getElementById('unameError').style='display: block';
                error++;
            }
            
            if(!emailRegex.test(email)){
                document.getElementById('emailError').style='display: block';
                error++;
            }
            if(error != 0){
                return false;
            }
              
            }
        </script>

</body>
</html>