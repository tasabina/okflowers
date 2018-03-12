<?php
	require_once 'connection.php';
	$link = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD, DATABASE_NAME)
		or die ("<p> Error connection to Data base:". mysql_error()."</p>");
			mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysql_error()."</p>");
			echo "<p> You are connected!</p>";
	$date = new DateTime();

	mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysql_error()."</p>");
			echo "<p>You are connected to MySQL:".DATABASE_NAME."</p>";

	$query ="SELECT `text` FROM `article`";
	$result = mysqli_query($link, $query);

	if ($result) {

	    /* определение числа рядов в выборке */
	    $rows = mysqli_num_rows($result); /*4*/

	    	for ($i = 0; $i < $rows; ++$i)

	    	{
	    		$row = mysqli_fetch_row($result);

	    		foreach ($row as $key => $value) {

					echo "Значение: $value<br />\n";


	    			# code...
	    		}

	    	}

	    /* закрытие выборки */
	    mysqli_free_result($result);
	}
	
	echo getcwd() . "\n";
	
	/* закрытие соединения */
	mysqli_close($link);

	


	 
/*

    echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
	     
	    // очищаем результат
	    mysqli_free_result($result);
	}
 
mysqli_close($link);

*/
?>