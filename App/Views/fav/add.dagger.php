<html>
    <body>
    <center>
        <h1> Add Fav </h1>
        <form action="<?php echo base_url('created'); ?>" method="post">
            <?php Html::csrf(); ?>
            Fav Details: <input type="text" name="details">
            <input type="submit">
        </form>
    </center>
    </body>
</html>
