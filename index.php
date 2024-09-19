<?php 
require_once __DIR__.'/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pet Shop</title>
</head>

<body>
    <header class="bg-primary text-center text-light p-3 position-fixed z-2 w-100 m-0">
        <h4 class="m-0">
            Pet Shop
        </h4>
    </header>
    <main>
        <div class="container pb-5" style="padding-top:100px;">
            <div class="row">
                <?php foreach($products as $product) { ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $product->getImage(); ?>" class="card-img-top"
                            alt="<?php echo $product->getTitle(); ?>">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize"><?php echo $product->getTitle(); ?></h5>
                            <p class="card-text">Prezzo: €<?php echo $product->getPrice(); ?></p>
                            <p class="card-text text-uppercase fs-6 text-secondary">
                                <i class="<?php echo $product->getCategory()->getIcon(); ?>"></i>
                                <?php echo $product->getCategory()->getName(); ?>
                            </p>

                            <!-- Aggiungi dettagli specifici del prodotto -->
                            <?php echo $product->getProductDetails(); ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.14.0/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO0IRp3m6y+r9soDxA0D9RohDo2zQJ7BKP8Hb4E4+KBZ6wvE8b+8w" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-2NEb3yKHrO7SClEZlAEOBQlxRCEh9t7vwpaFh8g/5Xn5ykb7t8w6uVtS3ybRH4IR" crossorigin="anonymous">
    </script>
</body>

</html>