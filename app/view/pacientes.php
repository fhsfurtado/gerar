<link type="text/css" rel="stylesheet" href="vendor/dragoncoder/css/<?=$_GET['page']?>.css"/>
<div id="paciente_div">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Todos os Pacientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
    </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="col s12" style="margin-top:21px;margin-bottom:14px;float:right;">
                <div class="input-field s4" style="float:right;">
                    <label for="search"><i class="material-icons left">search</i> Pesquisar</label>
                    <input type="text" class="validate" id="search">
                </div>
            </div>
            <table id="lista_usuarios" class="highlight centered">
                <thead>
                    <tr>
                        <th>Nome Completo</th>
                        <th> asas</th>
                        <th>Item Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="line-table">
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                    </tr>
                    <tr class="line-table">
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                    </tr>
                    <tr class="line-table">
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            Teste 2
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            Teste 3
        </div>
    </div>
</div>