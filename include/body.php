<div id="templatemo_content_wrapper">
    	<div id="templatemo_content">
    
    	<div class="column_w210 fl">
        
        	<div class="header_01">
            	Latest Blog Posts
            </div> 
                <?php
                    $sql="SELECT * FROM `latest_blog_posts`  ORDER BY `latest_blog_posts`.`post_id` DESC LIMIT 0 , 3";
                    $query=mysql_query($sql);
                    while($row=mysql_fetch_array($query))
                    {
                        $con=$row[post_contant];
                        $length=strlen($row[post_contant]);
		    echo "<div class=latest_news>
	        	  <div class=header_03>[$row[post_date]]</div>
   		          <div class=header_02><a href=viewpost.php?viewkey=$row[post_id]>$row[post_headline]</a></div><p>";
                     for($i=0;$i<$length;$i++)
                     {
                        if($i<100)
                        {
                        echo "$con[$i]";
                        }
                     } 
                        
                    echo "<a href=viewpost.php?viewkey=$row[post_id]>Read more...</a></p></div>";
                    
                    }
                       
                ?> 
            <div class="margin_bottom_10"></div>
            
            <div class="rc_btn_01"><a href="viewpost.php">Read All</a></div>
            
        
        	<div class="cleaner"></div>
        </div> <!-- end of a column -->
        
        <div class="column_w430 fl vl_divider">
        	<?php
                    $sql="SELECT * FROM `latest_blog_posts`";
                    $query=mysql_query($sql);
                    $stack = array();
                    while($row=mysql_fetch_array($query)){
                        array_push($stack,"$row[post_id]");
                    }
                    shuffle($stack);
                    $end=end($stack);
                    $sql1="SELECT * FROM `latest_blog_posts` WHERE `post_id`='$end'";
                    $query1=mysql_query($sql1);
                    $row1=mysql_fetch_array($query1);
                    $con=$row1[post_contant];
                    echo "<img src=$row1[post_photo_url] alt=image height=200px width=420px />";
                    
           echo "<div class=header_01>Welcome to our photo site!</div>
           
            <p>This <a href=viewpost.php?viewkey=$row1[post_id] target=parent>$row1[post_headline]</a> is brought to you by <a href=index.php target=_parent>lin photo</a> website. You may use these picture in your websites. Credit goes to <a href=index.phptarget=_blank>lin photo</a> for photos.</p>
	
		  <p>$con.</p>";
        
        ?>
        	<div class="cleaner"></div>        
        </div> <!-- end of a column -->
        
       <div class="column_w210 fl vl_divider">
        
        	<div class="header_01">
            	Categories
            </div>
                <ul class="category_list">
            <?php
            $sql="SELECT * FROM `categories`";
            $query=mysql_query($sql);
            while($row=mysql_fetch_array($query))
                {
	        echo "<li><a href=#>$row[cat_name]</a></li><br />";
                }
            ?>
             </ul>
        	<div class="cleaner"></div>
        </div> <!-- end of a column -->
        
        <div class="margin_bottom_20 h_divider"></div>        
        <div class="margin_bottom_20"></div>
        
        <div class="column_w920">
            <?php
            $sql="SELECT * FROM `latest_blog_posts` ORDER BY `latest_blog_posts`.`post_id` DESC limit 0,4";
            $query=mysql_query($sql);
            $i=0;
            while($row=mysql_fetch_array($query))
            {
                $i++;
                if($i<4)
                {
            ?>
           <div class="column_w190 fl margin_right_40">
            	<a href="#"><img src="<?php echo $row[post_photo_url]; ?>" width="180px" height="115px" alt="image" /></a>
              <p><?php echo $row[post_contant]; ?>. <a href="#">Read more...</a></p>                
          </div>
            
           <?php }else{
           ?>
           <div class="column_w190 fl">
            	<a href="#"><img src="<?php echo $row[post_photo_url]; ?>" width="180px" height="115px" alt="image" /></a>
              <p><?php echo $row[post_contant]; ?>. <a href="#">Read more...</a></p>                
          </div>
        <?php }} ?>
            
       	  <div class="margin_bottom_15"></div>
        </div>
    
    	<div class="cleaner"></div>
	</div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->