<?php 
          
      //$url    = 'http://trial.intrumnet.com:81/sharedapi/worker/fields';  
      
      $post = array(  
        'apikey' =>"11e7e2bc70df4edb0178ff274b5ac07a");  
      $url='http://trial.intrumnet.com:81/sharedapi/worker/filter';  
  
      $params=array(  
                'id'=>$_GET["id"]);    
                //'name'=>'Ivan');    

      
      $post = array(  
        'apikey' =>"11e7e2bc70df4edb0178ff274b5ac07a",  
        'params'=>$params  
      );  
          
      $ch = curl_init();  
      curl_setopt($ch, CURLOPT_URL, $url);  
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
      curl_setopt($ch, CURLOPT_POST, 1);  
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));  
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
      $result = json_decode(curl_exec($ch), true); 
      //var_dump(json_encode(curl_exec($ch)=>data));
      curl_close ($ch);  
      var_dump($result["data"][6]["fields"][3250]["value"]);


?> 
