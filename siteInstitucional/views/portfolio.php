<h1>Meu Portfolio</h1>
<?php foreach ($portfolio as $item): ?>
    <div class="portfolio_item">
        <img src="assets/portfolio/<?= $item['imagem']; ?>" bordder="0" width="200" height="150" />
    </div>
<?php endforeach; ?>
<div style="clear: both"></div>