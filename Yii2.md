**Исправление Getting unknown property после добавления полей в модель**

Если в приложении используется кэш, то возможно получение такое ошибки. Нужно сбросить кэш.

    Yii::$app->cache->flush();

