<?php

namespace app\models;

class Project {
    public int $id;
    public string $title;
    public string $description;
    public array $tech;
    public string $url;
    public string $imageUrl;

    public function __construct(
        int $id,
        string $title,
        string $description,
        array $tech=[],
        string $url='',
        string $imageUrl=''
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->tech = $tech;
        $this->url = $url;
        $this->imageUrl = $imageUrl;
    }

    public static function findAll(): array {
        return [
            new self(
                id: 1,
                title: 'Интернет‑магазин электроники',
                description: 'Полнофункциональный интернет‑магазин с каталогом товаров, корзиной и системой оплаты. Реализована фильтрация по категориям и ценам, поиск товаров, личный кабинет покупателя.',
                tech:['PHP', 'Yii2', 'MySQL', 'JavaScript', 'Bootstrap'],
                url:'https://example-shop.com',
                imageUrl:'/images/projects/shop.jpg'
            ),
            new self(
                2,
                'Блог о путешествиях',
                'Платформа для публикации статей о путешествиях с возможностью комментирования, подписок на авторов и сохранения интересных маршрутов. Есть интеграция с картами.',
                ['Laravel', 'PostgreSQL', 'Vue.js', 'Tailwind CSS', 'Google Maps API'],
                'https://travel-blog.com',
                '/images/projects/blog.jpg'
            ),
            new self(
                3,
                'Система учёта задач',
                'Веб‑приложение для командной работы с задачами: создание проектов, назначение исполнителей, установка сроков, отслеживание прогресса. Реализована система уведомлений.',
                ['React', 'Node.js', 'MongoDB', 'Socket.IO', 'Material UI'],
                'https://task-manager.app',
                '/images/projects/tasks.jpg'
            )
        ];
    }
    public static function findOne(int $id): ?self {
        foreach(static::findAll() as $project){
            if ($project->id === $id) {
                return $project;
            }
        }

        return null;
    }
}