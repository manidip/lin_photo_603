<!doctype html>

<html lang="en">
<head>
    <title>lin Photo Admin Panel</title>
    <style>
        body {
          background-color: black;
        }
        .btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 10px;
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  padding: 5px 10px 5px 10px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
  cursor: pointer;
}
 input:-webkit-input-placeholder {
    color: #b5b5b5;
}

input-moz-placeholder {
    color: #b5b5b5;
}

.input {
    width: 200px;
    height: 8px;
    padding: 15px 25px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: #9D9E9E;
    text-shadow: 1px 1px 0 rgba(256, 256, 256, 1.0);
    background: #FFF;
    border: 1px solid #FFF;
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
    -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
    -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
}

.input:focus {
    background: #DFE9EC;
    color: #414848;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    outline: 0;
}

.input:hover {
    background: #DFE9EC;
    color: #414848;
}


    </style>
</head>
<body>
    
    <div id="container" style="margin-left: 300px;margin-top: 200px;">
    
    <form  method="post" action="index.php?action=loginaction">
       <fieldset style="width:350px; border: 20px;border-radius: 5px;  background: -moz-linear-gradient(top, rgba(135,222,253,1) 34%, rgba(5,166,225,1) 75%);"><legend ></legend>
        <table>
            <tr ><td colspan=2"><center>Admin Login</center></td></tr>
            <tr><td><div class="input_label user"> 
            <label for="username"> 
                Username</label></div><td><input type="text" placeholder="username" class="input" required="required" name="email"></td></tr>
           <tr><td><div class="input_label user"> 
            <label for="name"> 
                Password</label></div> <td><input type="password" placeholder="Password" class="input" required="required" name="phone"></td></tr>
           <?php if($_GET['action']=='err'){ echo "<tr><td colspan=2>Invalid Details</td></tr>";}?>
            <tr align="center"><td colspan=2><input type="submit" class="btn" name="login" value="Login"></a></td></tr>
        </table>
        </fieldset>
    </form>
    
</div>

    
    
    
    
    
    
</body>
</html>