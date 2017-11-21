<?php
$config = parse_ini_file("config.ini");
class food {
    public function BMI($weight, $height){
        // get weight in kg and height in cm to process BMI
        $height = $height/100;
        return $weight/($height*$height);
    }
    public function BMR($sex, $age, $weight, $height){
        // Calculate BMR
        $base = [66, 665];
        $fweight = [13.7, 9.6];
        $fheight = [5, 1.8];
        $fage = [6.8, 4.7];
        $bmr = $base[$sex]+($fweight[$sex]*$weight)+($fheight[$sex]*$height)-($fage[$sex]*$age);

        return $bmr;
    }
    public function TDEE($bmr, $level){
        // BMR and Activity Level Return TDEE
        switch($level){
            case 0:
                return ($bmr*1.2);
                break;
            case 1:
                return ($bmr*1.375);
                break;
            case 2:
                return ($bmr*1.55);
                break;
            case 3:
                return ($bmr*1.7);
                break;
            case 4:
                return ($bmr*1.9);
                break;
        }
    }
    public function calorie($brakefast, $lunch, $dinner){
        global $config;
        $conn = mysqli_connect($config['database_host'],$config['database_user'],$config['database_pswd'],$config['database_DB']);
        $morning = $conn->query("SELECT * FROM `realfood` WHERE `FOOD` LIKE '%".$brakefast."%'")->fetch_assoc();
        $noon = $conn->query("SELECT * FROM `realfood` WHERE `FOOD` LIKE '%".$lunch."%'")->fetch_assoc();
        $evening = $conn->query("SELECT * FROM `realfood` WHERE `FOOD` LIKE '%".$dinner."%'")->fetch_assoc();
        $calorie = $morning['CALORIES'] + $noon['CALORIES'] + $evening['CALORIES'];
        return $calorie;
    }
    public function inputfood($brakefast, $lunch, $dinner){
        global $config;
        $conn = mysqli_connect($config['database_host'],$config['database_user'],$config['database_pswd'],$config['database_DB']);
        $morning = $conn->query("SELECT * FROM `realfood` WHERE `FOOD` LIKE '%".$brakefast."%'")->fetch_assoc();
        $noon = $conn->query("SELECT * FROM `realfood` WHERE `FOOD` LIKE '%".$lunch."%'")->fetch_assoc();
        $evening = $conn->query("SELECT * FROM `realfood` WHERE `FOOD` LIKE '%".$dinner."%'")->fetch_assoc();
        return $morning['FOOD'].'  '.$morning['CALORIES'].'<br>'.$noon['FOOD'].'  '.$noon['CALORIES'].'<br>'.$evening['FOOD'].'  '.$evening['CALORIES'];
    }
    public function recommend($cal){
        global $config;
        $conn = mysqli_connect($config['database_host'],$config['database_user'],$config['database_pswd'],$config['database_DB']);
        $sql = "SELECT * FROM `realfood` WHERE `CALORIES` <= ".$cal." ORDER BY `CALORIES` DESC";
        $food = $conn->query($sql)->fetch_assoc();
        return $food;
    }
    public function result(){
        if(!($_POST['breakfast']=='' && $_POST['lunch']=='' && $_POST['dinner']=='')){
            $Need = food::TDEE(food::BMR($_POST['sex'], $_POST['age'], $_POST['weight'], $_POST['height']), $_POST['level']);
            $Usage = food::calorie($_POST['breakfast'], $_POST['lunch'], $_POST['dinner']);
            if($Need - $Usage < 0){
                echo "คุณได้รับสารอาหารเกินจำเป็นจำนวน<br>";
                echo abs($Need - $Usage).' แคลโลรี่';
            }else{
                echo "คุณได้รับสารอาหารน้อยเกินไป คุณต้องการอีก<br>";
                echo abs($Need - $Usage).' แคลโลรี่';
                echo "<br>คุณควรรับประทานอาหารเพิ่ม <br>เราขอแนะนำ ".food::recommend(abs($Need - $Usage))['FOOD'];
            }
        }else{
            echo 'คุณควรรับประทานอาหารไม่เกิน '.food::TDEE(food::BMR($_POST['sex'], $_POST['age'], $_POST['weight'], $_POST['height']), $_POST['level']).' แคลโลรี่ต่อวัน';
        }
    }
    public function counter_add($weight, $height){
        global $config;
        $conn = mysqli_connect($config['database_host'],$config['database_user'],$config['database_pswd'],$config['database_DB']);
        $counter = $conn -> query("SELECT * FROM `counter`") -> fetch_assoc();
        $conn->query("UPDATE `counter` SET `counter` = '".($counter['counter']+1)."', `BMI` = '".(intval(food::BMI($weight, $height))+$counter['BMI'])."' WHERE `counter`.`counter` = ".$counter['counter'].";");
    }
    public function counter_show(){
        global $config;
        $conn = mysqli_connect($config['database_host'],$config['database_user'],$config['database_pswd'],$config['database_DB']);
        $counter = $conn -> query("SELECT * FROM `counter`") -> fetch_assoc();
        return $counter['BMI'] / $counter['counter'];
    }
}

?>