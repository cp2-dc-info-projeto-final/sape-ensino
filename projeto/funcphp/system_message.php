<!-- Serve para alertar mensagens de erro e de sucesso tanto do cadastro e login, quanto dentro do site-->
<?php
		 	if(isset($_SESSION['system_message'])){
				echo '<div class="alert mt-2  col-9 mx-auto alert-'.$_SESSION['alert_type'].'" role="alert">'
					.$_SESSION['system_message'].'
					  </div>';
				unset($_SESSION['system_message']);
				unset($_SESSION['alert_type']);
			 }
?>