<?php
//* Fonction pour WordPress

//Enlever la barre Admin en front
// show_admin_bar( false );

// Ajouter script Text Rotator en bas de la page
add_action( 'wp_footer', 'ap_script_rotator', 999 );
function ap_script_rotator() {
	if ( ! is_home() ) {
		return;
	}0 
?>
	<script type="text/javascript">
		jQuery(".rotate").textrotator({
		  animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
		  separator: "*", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
		  speed: 2000 // How many milliseconds until the next word show.
		});			
	</script>


<?php }