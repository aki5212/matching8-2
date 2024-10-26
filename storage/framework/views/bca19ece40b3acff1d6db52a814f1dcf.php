<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Message Sample</title>
</head>
<body>
    <main>
        <h1>メッセージ</h1>
        <form action="/messages" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="body">
            <input type="submit" value="投稿">
        </form>
        <hr> 
        <ul>
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($message->body); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </main>
</body>
</html><?php /**PATH /var/www/html/resources/views/message/index.blade.php ENDPATH**/ ?>