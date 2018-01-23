<?php

class Site
{
    public static function addWeather($city, $data, $weather, $speed, $clouds, $temp, $humidity)
    {
        
        $db = Db::getConnection();
		
        $sql = 'INSERT INTO weather (city, data, data_time, weather, speed, clouds, temp, humidity) '
		. 'VALUES ( :city, :data, :data_time, :weather, :speed, :clouds, :temp, :humidity)';
        $result = $db->prepare($sql);
		$result->bindParam(':city', $city, PDO::PARAM_STR);
		$result->bindParam(':data', $data, PDO::PARAM_STR);
		$result->bindParam(':data_time', $data, PDO::PARAM_STR);
		$result->bindParam(':weather', $weather, PDO::PARAM_STR);
		$result->bindParam(':speed', $speed, PDO::PARAM_STR);
		$result->bindParam(':clouds', $clouds, PDO::PARAM_STR);
		$result->bindParam(':temp', $temp, PDO::PARAM_STR);
		$result->bindParam(':humidity', $humidity, PDO::PARAM_STR);
		
		return $result->execute();
    }
	
	public static function SelectWeather($city, $data)
	{
		$db = Db::getConnection();
		$infoWeather = array();
		$sql = 'SELECT * FROM weather WHERE city = :city AND data = :data';
		$result = $db->prepare($sql);
		$result->bindParam(':city', $city, PDO::PARAM_INT);
		$result->bindParam(':data', $data, PDO::PARAM_INT);
		$result->execute();
        $i = 0;
		while($row = $result->fetch()){
        $infoWeather[] = $row;
		$i++;
		}
		return $infoWeather;
	}
    
        
}
        