<?php

$conn = mysql_connect('localhost', 'root', '') or die("Não conectado" . mysql_error());
mysql_select_db('bdsistemarequerimento') or die("Não conectado" . mysql_error());
