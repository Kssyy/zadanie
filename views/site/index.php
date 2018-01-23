<?php 
require_once "/views/layouts/header.php";       
$usr = $_SESSION['user'];
?>
<form action = "#" method = "post">
<label>Город:</label><input type = "text" placeholder = "Запорожье, Украина" name = "q">
<label>Дата:</label><input type = "text" placeholder = "2017-06-20" name = "date">
<a href = ""><input type = "submit" name = "submit" value = "Узнать погоду"></a>
</form> 

<?php if(isset($arrayDays)){ ?>
<?php foreach($arrayDays as $oneDay){ ?>
		<p>Город: <?php echo $dataJson->city->name; ?></p>
		<p>Дата: <?php  echo $oneDay->dt_txt; ?> </p> 
		<p>Погода: <?php echo $oneDay->weather[0]->description; ?> </p>
        <p>Скорость ветра: <?php echo $oneDay->wind->speed; ?> </p>
		<p>Облачность: <?php echo $oneDay->clouds->all; ?>%</p>
        <p>Температура: <?php echo $oneDay->main->temp; ?>°</p>
        <p>Влажность: <?php echo $oneDay->main->humidity; ?> </p>
        <hr/>
<?php } ?>
<?php }?>

<?php if(isset($infoData)){ ?>
	<?php foreach($infoData as $info){ ?>
		<p>Город: <?php echo $info['city']; ?></p>
		<p>Дата: <?php  echo $info['data_time']; ?> </p> 
		<p>Погода: <?php echo $info['weather']; ?> </p>
        <p>Скорость ветра: <?php echo $info['speed']; ?> м/c</p>
		<p>Облачность: <?php echo $info['clouds']; ?>%</p>
        <p>Температура: <?php echo $info['temp']; ?>°</p>
        <p>Влажность: <?php echo $info['humidity']; ?> </p>
        <hr/>
	
	<?php } ?>
<?php } ?>


    
