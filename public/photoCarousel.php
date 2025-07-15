<?php $images = include 'getImages.php'; ?>

<div class="carousel-slides">
    <?php foreach ($images as $index => $image): ?>
        <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
            <img src="image-proxy.php?id=<?php echo $image->getId(); ?>" alt="<?php echo $image->getName(); ?>">
            <div class="slide-caption"><?php echo pathinfo($image->getName(), PATHINFO_FILENAME); ?></div>
        </div>
    <?php endforeach; ?>
</div>

<button onclick="changeSlide(-1)">❮</button>
<button onclick="changeSlide(1)">❯</button>

<div class="carousel-dots">
    <?php for ($i = 0; $i < count($images); $i++): ?>
        <span class="dot <?php echo $i === 0 ? 'active' : ''; ?>" onclick="currentSlide(<?php echo $i + 1; ?>)"></span>
    <?php endfor; ?>
</div>