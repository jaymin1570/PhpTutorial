<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($_REQUEST as $key => $value){
          if(is_array($value)){ 
            foreach($value as $data){
              echo $key . "=" .$data ."<br>";
            }
          } else {
            echo $key ."=". $value."<br>";
           }
        }

      //  echo "Name :" .$_REQUEST["name"]."<br>";
      //  echo "roll NO : ".$_REQUEST["roll"]."<br>";
      
      //  if(isset($_REQUEST["location"])){
      //     foreach($_REQUEST["location"] as $value){
      //       echo "course=".$value."<br>";
      //   }
      //  }else{
      //    echo "please select course..";
      //  }
       
    ?>
</body>
</html>