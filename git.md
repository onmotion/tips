**�������� � ��������� remote branch**

    git fetch some-remote   # "origin" if you want to use your own branch
    git reset --hard some-remote/master

**������� ����� ����� �� �������� ��������� � ����� ������� ��**

    git checkout -b new_branch

**������� ��������������� �����**

���� ��� ������� ���������� git pull �� ��������� ����� ������� �� 

>  The following untracked working tree files would be overwritten by merge:  
...  
Please move or remove them before you can merge  
Aborting

������� ��������������� �����:
    
    git clean -f -n #������� ��� ����� �������
    git clean -f #���� ��� �� �� ���������