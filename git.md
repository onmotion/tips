**Сбросить к состоянию remote branch**

    git fetch some-remote   # "origin" if you want to use your own branch
    git reset --hard some-remote/master

**Создать новую ветку из текущего состояния и сразу выбрать ее**

    git checkout -b new_branch

**Удалить неотслеживаемые файлы**

Если при попытке выполнения git pull вы получаете нечто похожее на 

>  The following untracked working tree files would be overwritten by merge:  
...  
Please move or remove them before you can merge  
Aborting

Удаляем неотслеживаемые файлы:
    
    git clean -f -n #покажет что будет сделано
    git clean -f #если все ок то запускаем