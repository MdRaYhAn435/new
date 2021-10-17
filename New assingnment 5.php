<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Matrix calculator</title>
    </head>
    <?PHP
         
            $result1= "";
            $result2 = "";
            $result3 = "";
            $result4 = "";
            $arr3 = array(
                array(),
                array()
        );
             
       
        if(isset($_POST['operator'])){
            $first_num = $_POST['first_num'];
            $second_num = $_POST['second_num'];
            $third_num = $_POST['third_num'];
            $fourth_num = $_POST['fourth_num'];
            $fifth_num = $_POST['fifth_num'];
            $sixth_num = $_POST['sixth_num'];
            $seventh_num = $_POST['seventh_num'];
            $eighth_num = $_POST['eighth_num'];
            $operator = $_POST['operator'];
           
    
            
            if(is_numeric($first_num)&& is_numeric($second_num) && is_numeric($third_num) && is_numeric($fourth_num) && is_numeric($fifth_num) && is_numeric($sixth_num) && is_numeric($seventh_num)&& is_numeric($eighth_num)){
                $arr1=array(
                    array($first_num,$second_num),
                    array($third_num,$fourth_num)
                );
                $arr2 =array(
                    array($fifth_num,$sixth_num),
                    array($seventh_num,$eighth_num)
                );
               
               
                
                for($row=0;$row<count($arr1);$row=$row+1){
                    $size_of_col= count($arr1[$row]);
                    for ($col=0; $col<$size_of_col;$col=$col+1){
                        
                        if($operator == "A+B"){
                            $arr3[$row][$col]= $arr1[$row][$col] + $arr2[$row][$col];
                        }
                        elseif($operator == "A-B"){
                            $arr3[$row][$col]= $arr1[$row][$col] - $arr2[$row][$col];
                        }
                        else{
                            $arr3[$row][$col]= $arr1[$row][$col] * $arr2[$row][$col];
                        }
                    }
                }
              }
          
          }
        
    ?>
    <body>
        <h1>My calculator</h1>
        <form method = "POST">
          <h2>A =</h2>
            <input type="number"  step="any" name= "first_num" value = "<?php echo $first_num?>">
            <input type="number"  step="any" name= "second_num" value = "<?php echo $second_num?>">
            <br> <br>
            <input type="number"  step="any" name= "third_num" value = "<?php echo $third_num?>">
            <input type="number"  step="any" name= "fourth_num" value = "<?php echo $fourth_num?>">
            <br> <br> <br>
            <h2>B =</h2>
            <input type="number"  step="any" name= "fifth_num" value = "<?php echo $fifth_num?>">
            <input type="number"  step="any" name= "sixth_num" value = "<?php echo $sixth_num?>">
            <br> <br>
            <input type="number"  step="any" name= "seventh_num" value = "<?php echo $seventh_num?>">
            <input type="number"  step="any" name= "eighth_num" value = "<?php echo $eighth_num?>">
            <br> <br>
            <h2>Click Here</h2>
            <input type="submit"value = "A+B" name = "operator">
            <input type="submit"value = "A-B" name = "operator">
            <input type="submit"value = "A*B" name = "operator">
        
            <h2>Result</h2>
            <input name = "result1" value ="<?php echo($arr3;[0][0])?>" >
            <input name = "result2" value ="<?php echo($arr3;[0][1])?>" >
            <br> <br>
            <input name = "result3" value ="<?php echo($arr3;[1][0])?>" >            
            <input name = "result4" value ="<?php echo($arr3;[1][1])?>"  >
            <br> <br> <br>
            
        </form>
        
    </body>
    </html>