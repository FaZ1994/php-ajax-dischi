<main>
    <div class="grid-container">

        <?php foreach ($data as $value) { ?>
            <div class="card my-5 text-center">
                <img src="<?php echo $value['poster'] ?>" alt="">
                <h2><?php echo $value['title']; ?></h2>
                <h3> <?php echo $value['author']; ?></h3>
                <p><?php echo $value['year']; ?></p>
            </div>
        <?php } ?>

    </div>


</main>