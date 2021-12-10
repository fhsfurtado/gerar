<nav class="main-color" style="position:fixed;top:0px;">
    <div class="nav-wrapper">
        <label class="brand-logo" onclick="goHome()">Logo</label>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li class="nav-clickable" onclick="goTo('agenda')">Agenda</li>
            <li class="nav-clickable" onclick="goTo('pacientes')">Pacientes</li>
            <li class="nav-clickable" onclick="goTo('medicamentos')">Medicamentos</li>
            <li class="nav-clickable" onclick="goTo('dicas')">Dicas</li>
            <li><a id="btn-exit_lg" class="waves-effect waves-light alt-color btn">Sair <i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
    </div>
</nav>
<ul class="sidenav" id="mobile-demo" style="position:fixed;top:0px;">
    <li><a href="?page=agenda">Agenda</a></li>
    <li><a href="?page=pacientes">Pacientes</a></li>
    <li><a href="?page=medicamentos">Medicamentos</a></li>
    <li><a href="?page=dicas">Dicas</a></li>
    <li><a class="waves-effect waves-light alt-color btn">Sair do Sistema <i class="material-icons right">cloud</i></a></li>
</ul>