<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?
		require_once('const.php');
		$sth = new PDO('mysql:host=localhost;dbname=' . DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);
		$query = 'SELECT * FROM question';
		$q = $sth->query($query);
		$arr = [];
        while ($row = $q->fetch())
        {
           // echo var_dump($row);
            $arr[] = $row;
        }
        $var = rand(0, 5);        
        // echo var_dump($arr[$var]);
        echo $arr[$var]['question'].' <img src="images/'.$arr[$var]['image'].'">';
        // echo $arr['question'].' <img src="images/'.$r['image'].'">';
        // echo $row['$var'].' <img src="images/'.$row['image'].'">';
        // foreach ($arr as $key => $row) {
        // 	echo $row['question'].' <img src="images/'.$row['image'].'">';
        // }
    // echo "Привет '$str'";
    // echo '<br>';
    // echo 'Привет "'.$str.'" !';

	?>

</body>
</html>