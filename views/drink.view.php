<?php
$V = new Votacion();
?>
<div id ="product-drinks-bg" class="product-body">
    <div class="mw-gen-product product-grid">
        <div class="product-view">
            <h1><?php echo $drink['nombre'] ?></h1>
            <span id="desc_pr"><?php echo $drink['desc_corta']; ?></span>
            <img src="<?php echo URL ?>bebidas/<?php echo $drink['img']; ?>" alt="<?php echo $drink['nombre'] ?>" title="<?php echo $drink['nombre'] ?>">
        </div>
        <div class="product-desc">
            <h2>¿Qué es?</h2>
            <p><?php echo $drink['descripcion'] ?></p>
            <a href="<?php echo URL ?>drinks"><button class="drinks-btn">Volver a Drinks</button></a>
        </div>
    </div>
</div>