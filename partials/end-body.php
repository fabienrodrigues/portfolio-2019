            <?php include('partials/footer.php'); ?>
            <!-- /FOOTER -->
        </div>
    
        <!-- JS
        ================================================== -->
        <script src="medias/components/scripts/min/main.js"></script>
        <?php
            if(isset($jsFiles))
            {
                foreach($jsFiles as $jsFile)
                    echo('<script src="' . $jsFile . '"></script>');
            }
        ?>
    </body>
</html>