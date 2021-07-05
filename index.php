<?php
    $page_title = '';
    include('head.php');
?>
	<body class="home">
        <?php dbk_get_part('parts/essential/part-body-scripts'); ?>

        <div class="page-wrapper"><?php // prevents overflow issues ?>
            <?php dbk_get_part('parts/essential/section-masthead'); ?>

            <?php dbk_get_part('parts/common/section-hero'); ?>

            <?php dbk_get_part('parts/common/section-form'); ?>

            <?php dbk_get_part('parts/essential/section-footer'); ?>
        </div><!-- /.page-wrapper -->

	</body>
</html>