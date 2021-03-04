<?php include APP_VIEWS . '/frontend/templates/header.php'; ?>

    <?php if(!empty($post)): ?>

        <h2><?php e($post->title); ?></h2>
        <p><?php e($post->body);?></p>

        <p class="faded">
        Created on: <?php e($post->created->format('d/m/y'));?>
        <?php if($post->updated): ?>
        Last updated: <?php e($post->updated->format('d/m/y'));?> 
        <?php endif; ?>
        </p>

    <?php else: ?>
        <p>Sorry, no page found.</p>
    <?php endif; ?>

    <p><a href="<?php e(APP_URL); ?>/">Back</a></p>

<?php include APP_VIEWS . '/frontend/templates/footer.php'; ?>

        
