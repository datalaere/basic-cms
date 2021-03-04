<?php include APP_VIEWS . '/frontend/templates/header.php'; ?>

<h2>Create <?php e($request['type']); ?></h2>

<form action="<?php e(APP_URL); ?>/admin/index.php?action=create&type=<?php e($request['type']); ?>" method="post" autocomplete="off">
    <label for="title">
        Title
        <input type="text" name="title" id="title">
    </label>

    <label for="slug">
        Slug
        <input type="text" name="slug" id="slug">
    </label>

    <label for="body">
        Body
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
    </label>

    <input type="submit" value="Create">
</form>

<p><a href="<?php e(APP_URL); ?>/admin/index.php?action=read&type=<?php e($request['type']); ?>">Back</a></p>

<?php include APP_VIEWS . '/frontend/templates/footer.php'; ?>