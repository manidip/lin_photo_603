<!doctype html>

<html lang="en">
<head>
    <title>lin Photo Admin Panel</title>
    <style>
        body {
          background-color: #2B3338;
        }
        .menu li{
            display: inline;
            margin-left: 2px;
             
        }
        . menu ul{
            
            width: 1015px;
            height: 30px;
            margin-left: 0px;
        }
        .menu li a {
            float: left;
            width: 5em;
            height:1.6em;
            text-decoration: none;
            color: white;
            background:-moz-linear-gradient(top, #00b7ea 0%, #009ec3 100%);
            padding: 0.2em 0.6em;
            border-right: 1px solid white;
            border-radius: 5px;
            margin-top: 67px;
          }
          
          a{
            color: White;
            text-decoration:none;
           }
        
          #mcatlist a:hover,#mpostlist a:hover{
            cursor: pointer;
            color: #009ec3;
          }
        
          .selection ul li{
            list-style-type: none;
            padding-top: 10px;
          }
          #sel{
            background:-moz-linear-gradient(top, #00b7ea 0%, #009ec3 100%);
            width: 2000px;
            height: 20px;
            border-radius: 5px;
          }

    </style>
</head>
<body >
    
    <div id="upper" style="height:100px; width:100%;background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);">
        <div style="float: left; font-size:50px; margin-left: 400px;">
            Admin Panel
        </div>
  <div  class="menu" style="height: 10px; float: right;">
        <li><a href="logout.php"><center>Logout</center></a></li>
   </div>
    </div>
    <div  class="selection" style="height:575px; margin-top: 8px; float: left; width:230px;background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);">
      <center><span id="sel">Selection Menu</span></center>
      <ul>
        <li><span id=catsign>+ Manage Category</span>
        <div id=mcatlist><ul>
              <li><a href="viewcat.php">View Categories</a></li>
              <li> <a href="insertcat.php">Insert Category</a></li>
        
            </ul></div>
        </li>
        <li><span id=postsign>+ Manage Post</span>
        <div id=mpostlist><ul>
              <li><a href="viewpost.php">View Post</a></li>
              <li><a href="createpost.php">Create Post</a></li>
        
            </ul>
        </div>
        
        </li>
    </ul>  
    </div>
    <div style="height:575px; margin-top: 8px;margin-left: 205px; width:850px;background: -moz-linear-gradient(top, #00b7ea 0%, #009ec3 100%);">
    <br>
    <span style="margin-left: 10px;">Welcome Manidip,Have A Nice Day.....</span>
    
    
    </div>
    <div id="lower" style="height:50px; width:100%;background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);"></div>
</body>

</html>