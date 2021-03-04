<?php include APP_VIEWS . '/frontend/templates/header.php'; ?>

    <?php if(!empty($posts)): ?>

        <ul>
            <?php foreach($posts as $post): ?>
                <li><a href="<?php echo APP_URL ?>/index.php?id=<?php echo $post->ID; ?>"><?php echo $post->title ?></a></li>
            <?php endforeach; ?>
        </ul>

    <?php else: ?>
        <p>Sorry, no posts.</p>
    <?php endif; ?>

<?php include APP_VIEWS . '/frontend/templates/footer.php'; ?>

        
