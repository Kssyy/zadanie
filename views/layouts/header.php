<?php 
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        
        <link href="/template/css/style.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        
        <script type="text/javascript" src="template/js/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
               $("a.reaply").click(function (){
                   var id = $(this).attr("id");
                   $("#parent_id").attr("value",id);
               }); 
                    
            });
            </script>
        <script type="text/javascript">
        function forma()
        {
            form_hid.style.display="block";
        }
        </script>
        <script type="text/javascript" src="template/js/scroll.js"></script>
    </head><!--/head-->
    <body>
        
   
