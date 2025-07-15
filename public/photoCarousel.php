<!-- Add this to your index.php or create a separate carousel.php -->
<div class="carousel-container">
    <div class="carousel-wrapper">
        <div class="carousel-slides" id="carousel-slides">
            <?php
            $images = include 'getImages.php';
            foreach ($images as $index => $image):
                $imageUrl = "https://drive.google.com/uc?id=" . $image->getId();
            ?>
                <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo $imageUrl; ?>" alt="<?php echo htmlspecialchars($image->getName()); ?>">
                    <div class="slide-caption">
                        <?php echo pathinfo($image->getName(), PATHINFO_FILENAME); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Navigation buttons -->
        <button class="carousel-btn prev" onclick="changeSlide(-1)">❮</button>
        <button class="carousel-btn next" onclick="changeSlide(1)">❯</button>

        <!-- Dots indicator -->
        <div class="carousel-dots">
            <?php for ($i = 0; $i < count($images); $i++): ?>
                <span class="dot <?php echo $i === 0 ? 'active' : ''; ?>" onclick="currentSlide(<?php echo $i + 1; ?>)"></span>
            <?php endfor; ?>
        </div>
    </div>
</div>