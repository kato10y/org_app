<!-- エラーが発生した場合、エラーメッセージを出力 -->
<?php if (!empty($errors)): ?>
    <ul class="errors">
        <?php foreach ($errors as $error): ?>
            <li><?= h($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
