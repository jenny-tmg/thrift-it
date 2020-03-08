<?php
while($row = $result->fetch_assoc()) {
	$id = $row["id"];
	$image = $row["image"];
	$category = $row["category"];
	$ad_title = $row["ad_title"];

	if ($ad_title == "") {
		$ad_title = "**not specified**";
	}
	if ($category == "") {
		$category = "**not specified**";
	}


    echo
    '<div class="col col-sm-12 col-md-6 col-lg-3">
    	<div class="item" data-id='.$id.'>
    		<div class="item-image">
    			<img src='.$image.' alt='.$ad_title.' />
    		</div>
    		<div class="item-desc">
    			<h3>'.$ad_title .'</h3>
    			<p class="category_name">'.$category.'</p>
    		</div>
    	</div>
    </div>';
}


?>