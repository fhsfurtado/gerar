<?php

    function getMonthName($month){
        switch ($month) {
            case "1":    $mes = 'Janeiro';     break;
            case "2":    $mes = 'Fevereiro';   break;
            case "3":    $mes = 'Março';       break;
            case "4":    $mes = 'Abril';       break;
            case "5":    $mes = 'Maio';        break;
            case "6":    $mes = 'Junho';       break;
            case "7":    $mes = 'Julho';       break;
            case "8":    $mes = 'Agosto';      break;
            case "9":    $mes = 'Setembro';    break;
            case "10":    $mes = 'Outubro';     break;
            case "11":    $mes = 'Novembro';    break;
            case "12":    $mes = 'Dezembro';    break; 
        }
        return $mes;
    }
    if(isset($_POST)){
        if(@$_POST['mes']!=''){
            $mes = $_POST['mes'];
        } else{
            $mes = date('m');
        }
        if(@$_POST['ano']!=''){
            $ano = $_POST['ano'];
        } else{
            $ano = date('Y');
        }
        if(isset($_POST['act'])){ // necessário carregar mês e ano e efetuar a evolução / retrocesso do mês/ano
            if($_POST['act']=='+'){

            }
            if($_POST['act']=='-'){
                
            }
        }
    }
    $days_qt = cal_days_in_month (CAL_GREGORIAN, $mes, $ano);
    $first=0;
    $card='';
    for($i=1;$i<=$days_qt;$i++){
        $weekday = date('w',strtotime($ano.'-'.$mes.'-'.$i));
        if($weekday!=0 && $first==0){
            $first++;
            $tipo = 'orange';
            for($j=0;$j<$weekday;$j++){
                $card.= '<div class="day '.$tipo.'">
                    <div class="day-head">
                        <center>
                        </center>
                    </div>
                    <div class="day-body">
                    </div>
                </div>';
                $tipo = 'disabled-color';
            }
        }
        if($weekday==0 || $weekday==6){
            $tipo = 'orange';
        } else{
            $tipo = 'blue';
        }
        if($i<10){
            $dia = '0'.$i;
        } else{
            $dia = $i;
        }
        $card.= '<div id="day'.$i.'" call="'.$ano.'-'.$mes.'-'.$dia.'" class=" btn waves-effect waves-light day '.$tipo.'">
                    <div class="day-head">
                        <center>
                            '.$i.'
                        </center>
                    </div>
                    <div class="day-body">
                    </div>
                </div>';
    }
    echo json_encode(["month" => getMonthName($mes) , "card" => $card]);
?>