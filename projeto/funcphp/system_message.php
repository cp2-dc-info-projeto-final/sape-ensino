<?php
		 	if(isset($_SESSION['system_message'])){
				echo '<div class="alert mt-2 alert-'.$_SESSION['alert_type'].'" role="alert">'
					.$_SESSION['system_message'].'
					  </div>';
				unset($_SESSION['system_message']);
				unset($_SESSION['alert_type']);
			 }
?>