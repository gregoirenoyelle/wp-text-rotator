<?php
//* Intégration du script dans mon modèle


// Ajouter script Text Rotator en bas de la page
add_action( 'wp_footer', 'text_rotator_script', 999 );
function text_rotator_script() {
    // Condition pour voir si je suis sur la home
    // Dans le cas contraire, je stoppe l'action avec return
	if ( ! is_home() ) {
		return;
	}
?>
    <!-- Script pour initialiser text rotator -->
	<script type="text/javascript">
		jQuery(".rotate").textrotator({
		  animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
		  separator: "*", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
		  speed: 2000 // How many milliseconds until the next word show.
		});
	</script>


<?php }