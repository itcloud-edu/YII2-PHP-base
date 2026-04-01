<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="project-detail">
        <div class="container my-5">

                <!-- Изображение проекта (крупное) -->
                <?php if ($project->imageUrl): ?>
                        <div class="position-relative">
                                <img src="<?= htmlspecialchars($project->imageUrl) ?>"
                                        class="card-img-top rounded-top-4"
                                        alt="<?= htmlspecialchars($project->title) ?>"
                                        style="height: 350px; object-fit: cover; width: 100%;">
                                <!-- Накладка с номером проекта -->
                                <div class="position-absolute top-0 start-0 m-3">
                                        <span class="badge bg-primary fs-6">
                                                Проект №<?= $project->id ?>
                                        </span>
                                </div>
                        </div>
                <?php endif; ?>

                <div class="card-body p-4 p-md-5">
                        <!-- Заголовок и ссылка -->
                        <div class="d-flex justify-content-between align-items-start mb-4">
                                <h1 class="display-5 text-primary mb-0">
                                        <?= htmlspecialchars($project->title) ?>
                                </h1>
                                <?php if ($project->url): ?>
                                        <a href="<?= htmlspecialchars($project->url) ?>"
                                                class="btn btn-primary btn-lg"
                                                target="_blank">
                                                Посетить сайт
                                                <i class="bi bi-arrow-up-right-circle ms-2"></i>
                                        </a>
                                <?php endif; ?>
                        </div>

                        <!-- Описание проекта -->
                        <div class="mb-5">
                                <h2 class="h4 text-secondary mb-3">О проекте</h2>
                                <p class="lead text-muted">
                                        <?= htmlspecialchars($project->description) ?>
                                </p>
                        </div>

                        <!-- Технологии -->
                        <div>
                                <h3 class="h5 mb-3">Используемые технологии</h3>
                                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-2">
                                        <?php foreach ($project->tech as $technology): ?>
                                                <div class="col">
                                                        <div class="p-3 bg-light border border-primary border-opacity-25 rounded-3 text-center">
                                                                <span class="fw-medium text-primary">
                                                                        <?= htmlspecialchars($technology) ?>
                                                                </span>
                                                        </div>
                                                </div>
                                        <?php endforeach; ?>
                                </div>
                        </div>

                        <!-- Дополнительная информация -->
                        <div class="mt-5 pt-4 border-top border-gray-200">
                                <small class="text-muted">
                                        Добавлен в портфолио: <strong>2024 г.</strong>
                                        <!-- Эту информацию можно дополнить из БД при необходимости -->
                                </small>
                        </div>
                </div>
        </div>
</div>