**Исправление Getting unknown property после добавления полей в модель**

Если в приложении используется кэш, то возможно получение такое ошибки. Нужно сбросить кэш.

    git fetch some-remote   # "origin" if you want to use your own branch
    git reset --hard some-remote/master

