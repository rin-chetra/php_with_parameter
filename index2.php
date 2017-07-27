<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
  <?php
         function calPow ($val11 , $val12 , $op){
          if ($op== "pow") {

          $result = pow ($val11 , $val12);
          echo "{$val11} ^ {$val12} = {$result} <br/>";

          }elseif ($op == "mul") {
            $result = $val11 * $val12;
            echo "{$val11} * {$val12} = $result <br/>";
          }
           
       }

         calPow (3,4, "pow");
         calPow (3,4,
         ;  "mul");

  ?>
	</body>
</html>
