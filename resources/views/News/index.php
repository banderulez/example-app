<h1>Новостной лист</h1>
<?php foreach ($news as $n): ?>
<div>
    <em><?=$n['id']?></em>
    <strong><?=$n['title']?></strong>
    <p><?=$n['description']?></p>
</div>
<?php endforeach; ?>
