 
 public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['update'],
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                                $model = $this->findModel(Yii::$app->getRequest()->get('id'));
                                return Yii::$app->getUser()->can('updateOwnPost', ['model' => $model]);
                            }
                    ],
                ]
            ]
        ];
    }