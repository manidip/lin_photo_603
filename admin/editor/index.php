<!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
</head>
<body>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="ckeditor/contents.css">




<form action="index.php" method="post" enctype="multipart/form-data">
<fieldset>
<label>Title</label><input type="text" name="posttitle"  value='<?php echo $row[post_headline];?>'>
<br><label>Contant</label><textarea  class="ckeditor" name="postcontant"><?php echo $row[post_contant];?></textarea>
<br><input type="submit" name="insertpost" value="Insert" />
</fieldset>
</form>
<?php
include_once("dbconnection.php");
if(isset($_POST['insertpost']))
{
    echo "<br>".$_POST['postcontant'];
    $sql="INSERT INTO `photos`(`post_id`, `post_description`) VALUES ('','$_POST[postcontant]')";
    $query=mysql_query($sql);
    $sql2="SELECT * FROM `photos`";
    $query2=mysql_query($sql2);
    $row=mysql_fetch_array($query2);
    echo "<br>".$row['post_description'];
    
    
}
?>
</body>
</html>
