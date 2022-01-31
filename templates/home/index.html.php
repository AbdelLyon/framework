<?php foreach ($cocktails as $cocktail) : ?>
    <a class='card list' href='/?type=cocktail&action=show&id=<?= $cocktail->getId() ?>'>
        <div class='d-flex flex-column align-items-center'>
            <h5 class='fw-bold fs-6'> <?= $cocktail->getName() ?> </h5>
            <img height="200" src='<?= $cocktail->getImage() ?>' />
        </div>
    </a>
<?php endforeach ?>