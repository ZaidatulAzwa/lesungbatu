<html>
    <body>
    <center>
        <h1> Update Fav </h1>
        <form action="<?php echo base_url('updated/').$singleRow->fav_id; ?>" method="post">
            <?php Html::csrf(); ?>
            Fav Details: <input type="text" name="details" value="<?php echo $singleRow->fav_details;?>">
            <input type="submit">
        </form>
    </center>
    </body>

</html>
