<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>������ �� �������� � ������</title>
</head>
<body>

<h1>������ �� �������� � ������</h1>

<p><b>��� ������� ������ ����������� � ����� arrays_loops_tasks, � ��������� ������, ������� ������ ���������� �� ������ �������, ��������, "17.php".<br>
���� ������� ������� �������� ���������� ������ - �� ����� ����� ���������� ��������� � �����, �������� ������� ����� ������ �������.</b>
</p>

<p>
<b>������� ����� �������� �� <a href="http://ask.php-academy.kiev.ua/" target="_blank">http://ask.php-academy.kiev.ua/</a>.</b>
</p>

<hr>

<b>������ � foreach</b>
<p>1. ��� ������ � ���������� 'html', 'css', 'php', 'js', 'jq'. � ������� ����� foreach �������� ��� ����� � �������.</p>
<p>2. ��� ������ � ���������� 1, 20, 15, 17, 24, 35. � ������� ����� foreach ������� ����� ��������� ����� �������. �������� �� � ���������� $result.</p>
<p>3. ��� ������ � ���������� 26, 17, 136, 12, 79, 15. � ������� ����� foreach ������� ����� ��������� ��������� ����� �������. ��������� �������� ���������� $result.</p>

<b>������ � �������</b>

<p>4. ��� ������ $arr. � ������� ������� ����� foreach �������� �� ����� ������� ������, �
������� ������� � ������� ���������.</p>
$arr = array('green'=>'�������', 'red'=>'�������','blue'=>'�������')?
<p>5. ��� ������ $arr � ������� '����', '����', '����' � ���������� '200', '300', '400'. � �������
����� foreach �������� �� ����� ������� ����� ������ �������: '���� � �������� 200
��������.'.</p>
<p>6. ��� ������ $arr. � ������� ����� foreach �������� ���������� �������� � ������ $en, �
������� � � ������ $ru.
$arr = array('green'=>'�������', 'red'=>'�������','blue'=>'�������')?
$en = array('green', 'red','blue')?
$ru = array('�������', '�������', '�������')?</p>
<p>7. ��� ������ � ���������� 2, 5, 9, 15, 0, 4. � ������� ����� foreach � ��������� if
�������� �� ����� ������� ��� ��������� �������, ������� ������ 3��, �� ������ 10.</p>
<p>8. ��� ������ � ���������� 1, 2, 3, 4, 5, 6, 7, 8, 9. � ������� ����� foreach �������� ������
'�1�2�3�4�5�6�7�8�9�'.
����� while � for</p>
<p>9. �������� ������� ����� �� 1 �� 100.</p>
<p>10. �������� ������� ����� �� 11 �� 33.</p>
<p>11. �������� ������� ������ ����� � ���������� �� ���� �� 100.</p>
<p>12. ���� ����� $n = 1000. ������ ��� �� 2 ������� ���, ���� ��������� ������� �� ������
������ 50. ����� ����� ���������? ���������� ���������� ��������, ����������� ���
����� (�������� � ��� ���������� �������� �����), � �������� ��� � ���������� $num.</p>
<p>13. ������� ������� ���������</p>
<p>14. ��� ������ � ���������� 4, 2, 5, 19, 13, 0, 10. � ������� ����� foreach � ��������� if
��������� ���� �� � ������� ������� �� ��������� $e, ������ 2, 3 ��� 4. ���� ���� �
�������� �� ����� '����!', ����� �������� '���!'.</p>
<p>15. ��� ������ $arr. � ������� ����� foreach � ���������� $count ����������� ����������
��������� ����� �������. ��������� ������ ������� �� ������� ������� � ���������� 4, 2,
5, 19, 13, 0, 10.</p>
<p>16. ��� ������ � ���������� 1, 2, 3, 4, 5, 6, 7, 8, 9. � ������� ����� foreach � ��������� if
�������� �� ����� ������� ��������� �������, ��� �������� �� ��������.
1, 2, 3
4, 5, 6
7, 8, 9</p>
<p>17.���������� ������ �������. � ������� ����� foreach �������� ��� ������, � �������
����� �������� ������. ������� ����� ������ ��������� � ���������� $month.</p>
<p>18. ��������� ������ ���� ������. � ������� ����� foreach �������� ��� ��� ������,
�������� ��� ������� ������� ������.</p>
<p>19. ��������� ������ ���� ������. � ������� ����� foreach �������� ��� ��� ������, �
������� ���� �������� ��������. ������� ���� ������ ��������� � ���������� $day.</p>
<p>20.��������� ��������, ��� �������� �� �������, ������ � ����� �������� ������ ���� 20
�����, � �� 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</p>
<p>21. ��������� ��������, ��� �������� �� �������, ������ � ����� �������� ������ ���� 9
�����, � �� 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555</p>
<p>22. ��������� ��������, ��� �������� �� �������, ���������������� ������ for ��� while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>
<p>23. ��� ����� ����������� ���������, ������� ������� �� ����� ���� ����� ����������
�������������. ��������: ���� ����� 123, �� ��������� ������ ��������� ����� ���� 1,
2, 3, �. �. 6.</p>
�� ������� ������ ������� �������� �� ������������ �������� ������ �������������.
<p>24. ��� ����� ����������� ���������, ������� ������� �� ���������� ���������
����������� ��������� ���� ����� � ��������� ���� �����. ��������: ����� 5 � �����
442158755745 ����������� 4 ����.</p>
<p>25. ���� ������� ������� ������, ��������� ��� ���������� ���������� (������� rand),
����� ������������ � ����������� �������� � �������� �� �������.</p>
<p>26. ��� ����� ������� ������ � ��������� ��� ���������� ������� �� 1 �� 100 (��� rand).
�����, ��������� ������������ ��� ���������, ������� ������ ���� � � ������� ������
�������. ����� ������� �� ����� ��������, ������� ������ ���� � � ������� �� ������
������.</p>
<p>27. ������� ��������� ��������� ������. ���� ����������: $row - ���-�� ����� � �������, $cols - ���-�� �������� � �������. ���� ������ ������, � �������: $colors = array('red','yellow','blue','gray','maroon','brown','green'). ���������� ������� ������, ������� �� �������� �������� ������� ������� ������� $rows �� $cols, � ������� ��� ������ ����� ����� �����, ��������� ��������� ������� �� ������� $colors. � ������ ������ ������ ���������� ��������� �����. <br><br>

������ ����������:<br>

<table><tr><td style='background-color:blue'>2033</td><td style='background-color:brown'>11696</td><td style='background-color:green'>712</td><td style='background-color:yellow'>32583</td><td style='background-color:red'>157</td></tr><tr><td style='background-color:gray'>25694</td><td style='background-color:red'>19724</td><td style='background-color:brown'>18487</td><td style='background-color:brown'>8462</td><td style='background-color:red'>4412</td></tr><tr><td style='background-color:gray'>4673</td><td style='background-color:gray'>14450</td><td style='background-color:maroon'>16748</td><td style='background-color:gray'>3505</td><td style='background-color:maroon'>5299</td></tr><tr><td style='background-color:red'>16873</td><td style='background-color:gray'>21370</td><td style='background-color:green'>22482</td><td style='background-color:red'>28576</td><td style='background-color:blue'>26060</td></tr><tr><td style='background-color:yellow'>28955</td><td style='background-color:gray'>8804</td><td style='background-color:gray'>26825</td><td style='background-color:red'>31471</td><td style='background-color:blue'>22283</td></tr></table>

</p>

<p>28. ������� ������� ��������� � ������� ���� ������ for.</p>


<hr>

<p>
<b>&copy; 2014-2016 <a href="http://php-academy.kiev.ua/" target="_blank">PHP Academy</a></b>
</p>

</body>
</html>