<?php include __DIR__ . '/../header.php'; ?>
<?php foreach ($articles as $article): ?>
    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getText() ?></p>
<?php endforeach; ?>
<?php include __DIR__ . '/../footer.php'; ?>