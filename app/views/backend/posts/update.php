<?php include APP_VIEWS . '/frontend/templates/header.php'; ?>

<h2>Update <?php e($request['type']); ?></h2>

<form action="<?php e(APP_URL); ?>/admin/index.php?action=update&id=<?php e($post->ID); ?>&type=<?php e($request['type']); ?>" method="post" autocomplete="off">
    <label for="title">
        Title
        <input type="text" name="title" id="title" value="<?php e($post->title); ?>">
    </label>

    <label for="slug">
        Slug
        <input type="text" name="slug" id="slug" value="<?php e($post->slug); ?>">
    </label>

    <label for="body">
        Body
        <textarea name="body" id="body" cols="30" rows="10"><?php e($post->body); ?></textarea>
    </label>
    <input type="hidden" name="id" value="<?php e($post->ID); ?>">
    <input type="submit" value="Update">
</form>

<p><a href="<?php e(APP_URL); ?>/admin/index.php?action=read&type=<?php e($request['type']); ?>">Back</a></p>

<?php include APP_VIEWS . '/frontend/templates/footer.php'; ?>