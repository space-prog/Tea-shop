<?php
        if($_POST) {
            $water = $_POST["water"];
            $sugar = $_POST["sugar"];
            $cup = 250;
            $time = $_POST["time"];
            $honey = $_POST["honey"];
            $tea = $_POST["tea"];
            $prise = 0;

            if($tea==2) {
                $prise+=2;
            } else if($tea==3) {
                $prise+=3;
            } else if($tea==4) {
                $prise+=4;
            } else {
                $prise+=6;
            }

            if(isset($_POST["dodatky"])) {
                $dodatky = $_POST["dodatky"];
                if($dodatky==4) {
                    $prise+=4;
                } else if($dodatky==3) {
                    $prise+=3;
                } else if($dodatky==6) {
                    $prise+=6;
                } else if($dodatky==2) {
                    $prise+=2;
                } else {
                    $prise+=1;
                }
            }

            if(isset($_POST["tort"])) {
                $prise+=70;
            }
            
            if(isset($_POST["sweet"])) {
                $prise+=38;
            }
             
            if(isset($_POST["croisant"])) {
                $prise+=40;
            }

            for($water; $water>0; $water-=$cup) {
                echo "$water<br>";
                $leftSugar=round((($cup*$sugar)/$water),1);
                $leftTime=round((($cup*$time)/$water),1);
                if($honey!="0") {
                    $leftHoney=round((($cup*$honey)/$water),1);
                }
                for($i = 50; $i<=250 && $i<=$water; $i+=50) {
                    echo "Налито: $i ml Води<br>";
                }
                if($water >= $cup) {
                    $sugar -= $leftSugar;
                    $time -= $leftTime;
                    // $time -= $leftTime;
                    echo "$leftSugar цукру";
                    if($honey!="0") {
                        $honey -= $leftHoney;
                        echo "<p>$leftHoney honey</p>";
                    }
                    echo "<p>Опускаємо чайний пакетик на $leftTime секунд</p>";
                    
                } else {
                    echo "$sugar"; //закинули весь цукор 
                    echo "<p>Опускаємо чайний пакетик на $time секунд</p>";
                    if($honey!="0") {
                        echo "$honey honey<br>";
                    }
                    
                }
            }
            echo "$prise грн<br>";
        }
    ?>