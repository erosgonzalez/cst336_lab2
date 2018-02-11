<?php
    function  displaySymbol($randomValue, $pos){
        switch ($randomValue) {
            case 0:
                $symbol = "seven";
                break;
            case 1:
                $symbol = "cherry";
                break;
            case 2:
                $symbol = "orange";
                break;
            case 3:
                $symbol = "grapes";
                break;
            case 4:
                $symbol = "bar";
                break;
            case 5:
                $symbol = "guitar";
                break;
            default:
                $symbol = "lemon";
                break;
        }
        echo "<img id='reel$pos' src  = 'img/$symbol.png' alt = '$symbol' title = '" . ucfirst($symbol) . "'width = '70' />";
    }
    
    function displayPoints($randomValue1, $randomValue2, $randomValue3){
        echo "<div id = 'output'>";
        
        if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3){
            switch ($randomValue1) {
                case 0:
                    $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    echo "<audio controls autoplay>
                            <source src='Music/I_dubbbz_says_hell_yeah[Mp3Converter.net].mp3' type='audio/mpeg'>
                          </audio>";
                    break;
                case 1:
                    $totalPoints = 500;
                    break;
                case 2:
                    $totalPoints = 250;
                    break;
                case 3:
                    $totalPoints = 100;
                    break;
                case 4:
                    $totalPoints = 50;;
                    break;
                case 5:
                    $totalPoints = 900;
                    break;
          
            }
            echo "<h2> You won $totalPoints points! </h2>";
        } 
        else {
            echo "<h3> Try again! </h3>";
            echo "<audio controls autoplay>
                    <source src='Music/The_Price_is_Right_Losing_Horn_-_Gaming_Sound_Effect_HD[Mp3Converter.net].mp3' type='audio/mpeg'>
                  </audio>";
        }
        
        echo "<div/>";
        
    }
    function play(){
        for ($i = 1; $i < 4; $i++){
            ${"randomValue".$i} = rand(0, 6);
            displaySymbol(${"randomValue".$i}, $i);
        }
        
        displayPoints($randomValue1, $randomValue2, $randomValue3);
    }
?>