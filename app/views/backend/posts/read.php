<?php include APP_VIEWS . '/frontend/templates/header.php'; ?>

<p><a href="<?php e(APP_URL) ?>/admin/index.php?action=create&type=<?php e($request['type']); ?>">New post</a></p>

<?php if(!empty($posts)): ?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?php e($post->ID); ?></td>
                <td><?php e($post->title); ?></td>
                <td><a href="<?php e(APP_URL) ?>/index.php?id=<?php e($post->ID); ?>"><?php e($post->slug); ?></a></td>
                <td><a href="<?php e(APP_URL) ?>/admin/index.php?action=update&id=<?php e($post->ID); ?>&type=<?php e($request['type']); ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure?')" href="<?php e(APP_URL) ?>/admin/index.php?action=delete&id=<?php e($post->ID); ?>&type=<?php e($request['type']); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>Sorry, no posts.</p>
<?php endif; ?>

<p><a href="<?php e(APP_URL); ?>/admin/">Back</a></p>

<?php include APP_VIEWS . '/frontend/templates/footer.php'; ?>
