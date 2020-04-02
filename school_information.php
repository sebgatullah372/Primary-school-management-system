<?php 
include './includes/header.php';
?>	
	 
	
      <section class="container">
      <div class="row">
   	<div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">About School</h2></div> 
        <?php  
		$sql="SELECT * FROM School_info";
		$result= $db->query($sql);
		if($result){
		while($data=$result->fetch_object())
		{
		
		//echo "<div class=\"well well-lg\" style=\"width: 450px\">".$data->School_Information."</div></div>";
		echo $data->School_Information;
		}
		}
		else{
		echo"No Data Found";
		}
	
		?>
		</div>
                
          
          <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Government Websites</h2></div> 
            <div class="list styled custom-list">
            <ul>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Ministry of Education</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Upazilla Website</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">Upazilla Education Office</a></li>
            <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">History (Ancient and Modern)</a></li>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Classical Archaeology and Ancient History</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Physics and Philosophy</a></li>
            </ul>
            </div>
         </div>
      </div>
      </section>
      
<?php 
include './includes/footer.php';
?>	
