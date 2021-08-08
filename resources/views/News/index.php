<h1>Новостной лист</h1>
<?php foreach ($news as $n): ?>
<div>


    <strong><a href="<?=route('news/show', ['id'=>$n['id']])?>"><?=$n['title']?></a></strong>
    <p><?=$n['description']?></p>
</div>
<?php endforeach; ?>
