<!doctype html>
<html lang="en">
   <?php
    include_once 'include/dbconnection.php'; 
    if(isset($_POST['insertpost']))
    {
        $posttitle=$_POST['posttitle'];
        $postcontant=$_POST['postcontant'];
        $date=date("y:m:d");
        
        $imagename=$_FILES["image"]["name"];
        $image_tmpname=$_FILES["image"]["tmp_name"];
        $temp = explode(".", $_FILES["image"]["name"]);
        $extension = end($temp);
        if (empty($imagename)) {
        header("location:createpost.php?action1=emptyfile");
        }else{
        if( $extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' )
        {
            if(!is_dir("../images"))
               {
                 mkdir("../images",0777,true);
               }
             $name=time()."-".$imagename;
     
             $link="images/".str_ireplace(" ","_","$name");
             $linkcopy="../images/".str_ireplace(" ","_","$name");
    
             move_uploaded_file($image_tmpname,$linkcopy);
        
             $sql="INSERT INTO `latest_blog_posts`(`post_id`, `post_headline`, `post_contant`, `post_photo_url`, `post_date`) VALUES ('','$posttitle','$postcontant','$link','$date')";
             $query=mysql_query($sql);
             if($query){
             header("location:createpost.php?action=cpost");
             }
            
            
        }
        else{
             header("location:createpost.php?action=cerrpost");
            }
    }}
    
    if(isset($_POST['updatepost']))
    {
        $posttitle=$_POST['posttitle'];
        $postcontant=$_POST['postcontant'];
        $postid=$_POST['postid'];
        $date=date("y:m:d");
        
        $imagename=$_FILES["image"]["name"];
        $image_tmpname=$_FILES["image"]["tmp_name"];
        $temp = explode(".", $_FILES["image"]["name"]);
        $extension = end($temp);
        
        
        
            if(!is_dir("../images"))
               {
                 mkdir("../images",0777,true);
               }
                 $name=time()."-".$imagename;
     
     
            $sql="SELECT * FROM `latest_blog_posts` WHERE `post_id`='$postid'";
            $query=mysql_query($sql);
            $row=mysql_fetch_array($query);
            if (!empty($imagename)) {
            if( $extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' )
              {
            unlink("../$row[post_photo_url]");
            $link="images/".str_ireplace(" ","_","$name");
            $linkcopy="../images/".str_ireplace(" ","_","$name");
            move_uploaded_file($image_tmpname,$linkcopy);
            
            }else{
             header("location:createpost.php?action=cerrpost");
            }}else{
                $link=$row['post_photo_url'];
                
            }
            
             $sql="UPDATE `latest_blog_posts` SET `post_headline`='$posttitle',`post_contant`='$postcontant',`post_photo_url`='$link',`post_date`='$date' WHERE `post_id`='$postid'";
             $query=mysql_query($sql);
             header("location:viewpost.php");
            
            
        }
        
    
    ?> 
<head>
    <title>lin Photo Admin Panel</title>
   <style type="text/css">
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
          .selection a:hover {
            color: #009ec3;
            }
            
            #mpostlist li:first-child a:hover{
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

.form-style-5{
    max-width:80%;
    padding: 10px 20px;
    background: #f4f7f8;
    margin-left: 50px;
    padding: 20px;
    background: -moz-linear-gradient(top, rgba(135,222,253,1) 34%, rgba(5,166,225,1) 75%);
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
   
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: -moz-linear-gradient(top, rgba(135,222,253,1) 34%, rgba(5,166,225,1) 75%);
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 50%;
    border: 1px solid rgba(5,166,225,1);
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
    border-radius:5px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: rgba(135,222,253,1);
    cursor: pointer;
}
    </style>
</head>
<body >
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

    
    <div id="upper" style="height:100px; width:100%;background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);">
        <div style="float: left; font-size:50px; margin-left: 400px;">
            Admin Panel
        </div>
  <div  class="menu" style="height: 10px; float: right;">
        <li><a href="logout.php"><center>Logout</center></a></li>
   </div>
    </div>
    <div  class="selection" style="height:1000px; margin-top: 8px; float: left; width:230px;background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);">
      
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
             <?php if(isset($_GET['action'])){
                echo "<li><a href=createpost.php>Create Post</a></li>";
             }else{
               echo "<li><a href=# style='color:aqua;'>Create Post</a></li>"; 
             }
             
             ?>
        
            </ul>
        </div>
    </div>
    <div style="height:1000px; margin-top: 8px;margin-left: 205px; width:835px;background: -moz-linear-gradient(top, #00b7ea 0%, #009ec3 100%);">
    <br>
    <div class="form-style-5">
<form action="createpost.php" method="post" enctype="multipart/form-data">
<fieldset>
    
    
<?php if(isset($_GET['action']) && $_GET['action']=='edit'){
    $sql="SELECT * FROM `latest_blog_posts` WHERE `post_id`='$_GET[pid]'";
    $query=mysql_query($sql);
    $row=mysql_fetch_array($query);
    echo "<input type=text value=$row[post_id] name=postid>";
    ?>
<label>Title</label><input type="text" name="posttitle"  value='<?php echo $row[post_headline];?>'>
<label>Contant</label><textarea  class="ckeditor" name="postcontant"><?php echo $row[post_contant];?></textarea>
<label>Image</label>
<img id="uploadPreview" src='../<?php echo $row[post_photo_url];?>' height=100px width=100px "/>
<input type="file" id="uploadImage" name="image" accept="image/*" onchange="PreviewImage();">
</fieldset>
<input type=submit name="updatepost" value="Update" /><br/>

<?php }else{?>

<label>Title</label><input type="text" name="posttitle" placeholder="Title *">
<label>Contant</label><textarea class="ckeditor" name="postcontant" placeholder="Type Contant *"></textarea>
<label>Image</label>
<img id="uploadPreview"  src='../images/smileyface.png' height=100px width=100px />
<input type="file" id="uploadImage" name="image" accept="image/*" onchange="PreviewImage();"> 
</fieldset>
<input type="submit" name="insertpost" value="Insert" />

<?php } ?>

<?php
if($_GET['action']=='cpost'){echo "<span>Insert Success</span>";}
elseif($_GET['action']=='cerrpost'){echo "<span>! Unsupported Image File !!Please Try Again</span>";}
elseif($_GET['action1']=='emptyfile'){echo "! ErrOr !!No file was selected for upload</span>";}
?>
</form>
</div>
    
    </div>
    <div id="lower" style="height:50px; width:100%;background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);"></div>
</body>
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
</html>