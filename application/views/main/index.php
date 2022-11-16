
<?php foreach ($news as $post) : ?>
    <div>
        <h1><?php echo $post["name"] ?></h1>
        <p><?php echo $post["text"] ?></p>
    </div>
<?php endforeach; ?>