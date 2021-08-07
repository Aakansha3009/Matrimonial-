<!-- <div class="profile_search1">
	   <form>
		  <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
		  <input type="submit" value="Go">
	   </form>
  </div> -->
  <section>
	 <h3><b> Happy Marriages...</b></h3>
	 <div class="flexslider">
		<ul class="slides">
		  <li>
			<img src="images/s1.jpg" alt=""/>
			<h4><br>"Hiral & Rohit"</br></h4>
			<p>Hi, Thank you so much for helping me find my soulemate.I would recommend this site to all my friends and family members who are looking for bride/groom.You guys are doing a great job.. God bless you.</p>
		  </li>
		  <li>
			<img src="images/s2.jpg" alt=""/>
			<h4><br>"Vishal & Sakshi"</br></h4>
			<p>I am very happy to announce that I found my life partner on PerfectPartner.com and we are getting married in March 2020. It all seems to be a dream. We got connected over here, spoke on phone, decided to meet and discuss all the points. Later our families met and we found everything good enough. Feeling blessed and lucky. Thank you so much PerfectPartner!</p>
		  </li>
		  <li>
			<img src="images/s3.jpg" alt=""/>
			<h4><br>"Rohit & Isha"</br></h4>
			<p>We met on PerfectPartner.com, found gud we are almost same in hobbies, living types etc, then we inform our family ,finally we got engaged. thanks PerfectPartner.com for helping me find my perfect match. Lots of thanks, keep doing the gud work. God bless people working there.... 😊</p>
		  </li>
	    </ul>
	  </div>
   </section>

   <div class="view_profile view_profile2">
        	<h3><b>View Recent Profiles:</b></h3>
    <?php
     $sql="SELECT * FROM customer ORDER BY profilecreationdate DESC";
      $result=mysqlexec1($sql);
      $count=1;
      while($row=mysqli_fetch_assoc($result)){
            $profid=$row['cust_id'];
          //getting photo
          $sql="SELECT * FROM photos WHERE cust_id=$profid";
          $result2=mysqlexec1($sql);
          $photo=mysqli_fetch_assoc($result2);
          $pic=$photo['pic1'];
          echo "<ul class=\"profile_item\">";
            echo"<a href=\"view_profile.php?id={$profid}\">";
              echo "<li class=\"profile_item-img\"><img src=\"$pic\"" . "class=\"img-responsive\" alt=\"\"/></li>";
               echo "<li class=\"profile_item-desc\">";
                  echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
                  echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
                  echo "<h5>" . "View Full Profile" . "</h5>";
               echo "</li>";
      echo "</a>";
      echo "</ul>";
      $count++;
      }
     ?>
           
</div>
