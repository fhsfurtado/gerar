<?php

    function getMonthName($month,$year){
        switch ($month) {
            case "01":    $mes = 'Janeiro';     break;
            case "02":    $mes = 'Fevereiro';   break;
            case "03":    $mes = 'Março';       break;
            case "04":    $mes = 'Abril';       break;
            case "05":    $mes = 'Maio';        break;
            case "06":    $mes = 'Junho';       break;
            case "07":    $mes = 'Julho';       break;
            case "08":    $mes = 'Agosto';      break;
            case "09":    $mes = 'Setembro';    break;
            case "10":    $mes = 'Outubro';     break;
            case "11":    $mes = 'Novembro';    break;
            case "12":    $mes = 'Dezembro';    break; 
        }
        return $mes.' / '.$year;
    }
    if(isset($_POST)){
        if(@$_POST['mes']!=''){
            $mes = $_POST['mes'];
            if($mes<10){
                $mes = '0'.$mes;
            }
        } else{
            $mes = date('m');
        }
        if(@$_POST['ano']!=''){
            $ano = $_POST['ano'];
        } else{
            $ano = date('Y');
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
            $first++;
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
    $card.='<br><script type="text/javascript" src="vendor/dragoncoder/js/calendar.js"></script>';
    echo json_encode(["month" => getMonthName($mes,$ano) , "card" => $card]);
?>