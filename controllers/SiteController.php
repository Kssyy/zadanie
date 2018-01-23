<?php

include_once '/models/weather.php';

class SiteController {
	
    public function ActionIndex()
    {
        if (isset($_POST['submit']))
		{
			$data = $_POST["date"];
			$city = $_POST['q'];
			$infoData = Site::SelectWeather($city, $data);
			foreach($infoData as $info){
			$dataBd = $info[data];
			}
			if($data != $dataBd){
			
			$city = $_POST["q"]; 
			$mode = "json"; 
			$units = "metric"; 
			$lang = "ru";
			$appid = '0c6277e7182570cc23dc6775e8f93a59';
			$url = "http://api.openweathermap.org/data/2.5/forecast?q=$city&APPID=$appid&mode=$mode&units=$units&cnt=$countDay&lang=$lang";
			$data = @file_get_contents($url);
			$dataJson = json_decode($data);
			$arrayDays = $dataJson->list;
			
			foreach($arrayDays as $oneDay){
				$city = $dataJson->city->name;
				$dt_txt = $oneDay->dt_txt;
				$weather = $oneDay->weather[0]->description; 
				$speed = $oneDay->wind->speed; 
				$clouds = $oneDay->clouds->all;
				$temp = $oneDay->main->temp;
				$humidity = $oneDay->main->humidity;
				$result = Site::addWeather($city, $dt_txt, $weather, $speed, $clouds, $temp, $humidity);
			}
			}else{
				
				echo 'Вывод данных из бд!';
			}
			
			
		}
		
		
		require_once (ROOT. '/views/site/index.php');
		return true;
    }
}
