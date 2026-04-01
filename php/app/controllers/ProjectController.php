<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Project;
use yii\web\NotFoundHttpException;

class ProjectController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ]
        ];
    }
    public function actionIndex()
    {
        $projects = Project::findAll();

        return $this->render('index', [
            'projects' => $projects
        ]);
    }

    public function actionView($id)
    {
        $project = Project::findOne($id);

        if($project === null) {
            throw new NotFoundHttpException("Проект не найден");
        }

        return $this->render('view', [
            'project' => $project
        ]);
    }

}
