<?php

/********video.php*******/
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['username'])){
?>
<form id="addCommentForm" method="post" action="">
    	<div>
           
           <input type="hidden" name="comment_num" id="comment_num" value="<?php echo $tut_num; ?>" />
           <input type="hidden" name="page_url" id="page_url" value="<?php echo $page_url; ?>" />
        	
        	<div>ط§ظ„ط§ط³ظ…:<input type="text" name="name" id="name" class="validate[required,maxSize[40]]" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?>" />
            
            
           ط§ظ„ط§ظٹظ…ظٹظ„:<input type="text" name="email" id="email" class="validate[required,custom[email]]" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?>" /></div>
            
            <div>ط±ط§ط¨ط· ظ…ظˆظ‚ط¹ظƒ(ط§ط®طھظٹط§ط±ظ‰):<input type="text" name="url" id="url" value="http://" /></div>
            
            <div><label for="body">ط§ظ„طھط¹ظ„ظٹظ‚</label>
            <textarea name="body" id="body" cols="10" rows="10" class="validate[required]"></textarea>
            </div>
            
            <input type="submit" id="submit" value="ط£ط¶ظپ ط§ظ„ط±ط¯" />
        </div>
    </form>
<?php
	
	}
	
	
      else {
		  
		 echo '<button  id="must_log" class="action redbtn"><span class="label">ظ„ط§ط¨ط¯ ظ…ظ† طھط³ط¬ظٹظ„ ط§ظ„ط¯ط®ظˆظ„ ظ„ظ…ط´ط§ظ‡ط¯ط© طھط¹ظ„ظٹظ‚ط§طھ ط§ظ„ظ…ط¨ط±ظ…ط¬ظٹظ† ط§ظˆ ظ„ط§ط¶ط§ظپط© طھط¹ظ„ظٹظ‚ ط¹ظ„ظ‰ ط§ظ„ظپظٹط¯ظٹظˆ</span></button> ';
		  
		  }

?>