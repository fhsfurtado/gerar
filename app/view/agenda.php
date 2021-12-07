<input type="hidden" name="mes_view" id="mes_view" value="<?=date('m')?>">
<input type="hidden" name="ano_view" id="ano_view" value="<?=date('Y')?>">
<div id="calendar">
    <table id="table_calendar">
        <tr>
            <td id="tr-prev">
                <a class="waves-effect waves-light main-color btn-small" onclick="voltaMes()"><i class="material-icons left">arrow_back_ios</i> Anterior</a>
            </td>
            <td>
                
            </td>
            <td id="month-name">
            </td>
            <td>
                
            </td>
            <td id="tr-next">
                <a class="waves-effect waves-light main-color btn-small" onclick="avancaMes()"><i class="material-icons right">arrow_forward_ios</i> Próximo</a>
            </td>
        </tr>
    </table>
    <table id="weekdays">
        <tr style="height:20px;">
            <td class="day-name"><center>Dom</center></td>
            <td class="day-name"><center>Seg</center></td>
            <td class="day-name"><center>Ter</center></td>
            <td class="day-name"><center>Qua</center></td>
            <td class="day-name"><center>Qui</center></td>
            <td class="day-name"><center>Sex</center></td>
            <td class="day-name"><center>Sáb</center></td>
        </tr>
    </table>
    <div id="calendario-draw">
        
    </div>
</div>