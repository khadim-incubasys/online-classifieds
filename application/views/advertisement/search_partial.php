<h2><?= $title; ?></h2>
<div class="holder ads">
    <?php
    if ($ads && !empty($ads)) {
        foreach ($ads as $ad) {
            ?>
            <div class="block">
                <div class="image">
                    <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . $ad['image_url']; ?>" alt="" class="img-responsive">
                </div>
                <div class="text-wrap">
                    <a href="<?= base_url() ?>advertisement/view/<?= $ad['id']; ?>">
                        <span class="title"><?= character_limiter($ad['title'], 17); ?></span>
                    </a>
                    <span class="price">Rs. <?= $ad['price']; ?></span>
                    <span class="location"><?= $ad['location']; ?></span>
                </div>
                <a class="buy" href="<?= base_url() ?>advertisement/contact_to_buy/<?= $ad['id']; ?>">Buy</a>
            </div>
            <?php
        }
    } else {
        ?>
        <h2 id="no-results">No Advertisements Exist </h2>
        <?php
    }
    ?>
</div>