<html>
	<head>
        <?php include 'head.php' ?>
    </head>
    
	<body>
        
		<!-- Navbar primary -->
        <?php include 'nav.php' ?>

        <!-- Toggle buttons -->
        <div class="d-flex flex-column align-items-center">
            <div class="mb-3">
                <small class="text-uppercase font-weight-bold">Toggle buttons</small>
            </div>
            <label class="custom-toggle">
                <input type="checkbox" checked>
                <span class="custom-toggle-slider rounded-circle"></span>
            </label>
            <!--<span class="clearfix"></span>-->
            <label class="custom-toggle">
                <input type="checkbox">
                <span class="custom-toggle-slider rounded-circle"></span>
            </label>
            <label class="custom-toggle">
                <input type="checkbox">
                <span class="custom-toggle-slider rounded-circle"></span>
            </label>
            <label class="custom-toggle">
                <input type="checkbox">
                <span class="custom-toggle-slider rounded-circle"></span>
            </label>
            <label class="custom-toggle">
                <input type="checkbox">
                <span class="custom-toggle-slider rounded-circle"></span>
            </label>
        </div>
        
        <!-- Footer -->
	    <?php include "footer.php"; ?>

        <!-- Scripts -->
        <?php include 'scripts.php' ?> 

	</body>
</html>