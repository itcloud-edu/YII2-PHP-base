<?php

/** @var yii\web\View $this */

use yii\web\UrlManager;

$this->title = 'My Yii Application';
?>
<div class="site-index">
        <div class="container my-4">
                <div class="row mb-4">
                        <div class="col-12">
                                <h1 class="display-4 text-center text-primary">Наши проекты</h1>
                                <p class="lead text-center text-muted">Посмотрите на наши последние разработки и достижения</p>
                        </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <?php foreach ($projects as $project): ?>
                                <div class="col">
                                        <div class="card h-100 shadow-sm border-0 hover-shadow transition-all">
                                                <!-- Изображение проекта -->
                                                <?php if ($project->imageUrl): ?>
                                                        <img src="<?= htmlspecialchars($project->imageUrl) ?>"
                                                                class="card-img-top"
                                                                alt="<?= htmlspecialchars($project->title) ?>"
                                                                style="height: 200px; object-fit: cover;">
                                                <?php endif; ?>

                                                <div class="card-body d-flex flex-column">
                                                        <!-- Заголовок и ссылка -->
                                                        <h5 class="card-title mb-3">
                                                                <?php if ($project->url): ?>
                                                                        <a href="<?= Yii::$app->urlManager->createUrl(['project/view', 'id' => $project->id]) ?>"
                                                                                class="text-decoration-none text-dark">
                                                                                <?= htmlspecialchars($project->title) ?>
                                                                                <i class="bi bi-arrow-up-right-circle ms-1"></i>
                                                                        </a>
                                                                <?php else: ?>
                                                                        <?= htmlspecialchars($project->title) ?>
                                                                <?php endif; ?>
                                                        </h5>

                                                        <!-- Описание -->
                                                        <p class="card-text text-muted flex-grow-1">
                                                                <?= htmlspecialchars($project->description) ?>
                                                        </p>

                                                        <!-- Технологии в виде бейджей -->
                                                        <div class="mt-3">
                                                                <h6 class="small text-secondary mb-2">Используемые технологии:</h6>
                                                                <div class="d-flex flex-wrap gap-2">
                                                                        <?php foreach ($project->tech as $technology): ?>
                                                                                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                                                                        <?= htmlspecialchars($technology) ?>
                                                                                </span>
                                                                        <?php endforeach; ?>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Футер карточки с дополнительной информацией -->
                                                <div class="card-footer bg-white border-top-0">
                                                        <small class="text-muted">
                                                                Проект №<?= $project->id ?>
                                                        </small>
                                                </div>
                                        </div>
                                </div>
                        <?php endforeach ?>
                </div>
        </div>
</div>