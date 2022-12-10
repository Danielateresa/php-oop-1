<main class="bg-black">
    <div class="container h-100">
        <div class="row g-3 h-100">
            <?php foreach ($Movies as $Movie) :?>
            <div class="col-4 my-5">
                <div class="card border-0 px-2 py-4">
                    <h3><?php echo $Movie->name ?></h3>
                    <p>Genre:
                        <span>
                            <?php foreach ($Movie->genres as $singleGenre) :?>
                            <?php echo $singleGenre->diffGenre ?>
                            <?php endforeach; ?>
                        </span>
                    </p>

                    <p>Description: <?php echo $Movie->description ?></p>
                    <p>Duration: <?php echo $Movie->duration ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</main>
<!-- /#main -->