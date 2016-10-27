<?php
$connect=mysqli_connect('localhost', 'root', '', 'users');
$username = mysqli_real_escape_string($connect,$_POST['username']);

$zapros = "SELECT `id` FROM `user` WHERE `login`='{$username}' LIMIT 1";
$sql = mysqli_query($connect,$zapros) or die(mysqli_error());
$row_cnt = $sql->num_rows;
$row_count=mysqli_num_rows($sql);
if (mysqli_num_rows($sql)==1)
{
	$simv = array ("92", "83", "7", "66", "45", "4", "36", "22", "1", "0", "k", "l", "m", "n", "o", "p", "q", "1r", "3s", "a", "b", "c", "d", "5e", "f", "g", "h", "i", "j6", "t", "u", "v9", "w", "x5", "6y", "z5");
	for ($k = 0; $k < 8; $k++)
	{
		shuffle ($simv);
		$string = $string.$simv[1];

	}
	$zapros = "UPDATE `user`SET  `pass`='{$string}' WHERE `login`='{$username}' ";

	mysqli_query($connect,$zapros) or die(mysqli_error());  
}
echo "parol izmenen <br>";
?>