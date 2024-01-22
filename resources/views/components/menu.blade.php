<style>
    html,
    body {
        padding: 0;
        margin: 0;
    }

    .home-section {
        background-color: #23b8c1;
        float: left;
        padding: 5px;
        height: 100%;
    }

    .home-section a {
        padding: 5px;
        display: block;
        //background-color: red;
        text-decoration: none;
        font-weight: bold;
        color: #fff;
    }
</style>


<section class="home-section">
    <div>
        <a href="{{ url('/') }}">Home</a> <br>
        <a href="{{ url('/pacientes') }}">Pacientes</a> <br>
        <a href="{{ url('/usuarios') }}">Usuários</a> <br>
        <a href="{{ url('/agenda') }}">Agenda</a> <br>
        <a href="{{ url('/consultas') }}">Consultas</a> <br>
        <a href="{{ url('/configuracoes') }}">Configurações</a> <br>
        <a href="{{ url('/logout') }}">Logout</a> <br>
    </div>
</section>