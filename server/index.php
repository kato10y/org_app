<?php
require_once __DIR__ . '/common/functions.php';
require_once __DIR__ . '/common/config.php';

// データの取得
$plans = get_plans();
?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/common/_head.html' ?>

<body>
    <header class="home_header">
        <h1>
            <a href="index.php" class="logo_link">
                <i class="fa-solid fa-suitcase"></i>
                <span>タビスケ</span>
            </a>
        </h1>
    </header>
    <div class="second_header">
        <h2>
            計画一覧
        </h2>
        <ul class="icons_wrap">
            <li>
                <a href="plan.php" class="icon_wrap">
                    <i class="fa-solid fa-square-plus"></i>
                    <p>追加</p>
                </a>
            </li>
        </ul>
    </div>
    <div class="main_content">
        <div class="plans">
            <?php foreach ($plans as $plans) : ?>
                <article class="plan_wrap">
                    <a href="schedule.php" class="plan_list">
                        <p class="plan_day"><?= h($plans['start_date']) . '〜' ?><?= h($plans['end_date']) ?></p>
                        <p><?= h($plans['plan_name']) ?></p>
                    </a>
                    <div class="action_icons">
                        <a href="plan_edit.php?id=<?= h($plans['id']) ?>" class="plan_icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="footer_flex"><i class="fa-solid fa-suitcase"></i>タビスケ Made by Yukari</div>
</footer>

</html>
