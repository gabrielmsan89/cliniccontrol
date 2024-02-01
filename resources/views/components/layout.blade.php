<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
<link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!--https://materializecss.com/icons.html -->

<style>
    html,
    body {
        padding: 0;
        margin: 0;
    }

    .wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        height: 100%;
    }

    .menu {
        background-color: #23b8c1;
        padding: 5px;
        grid-column: 1;
    }

    .menu a {
        padding: 5px;
        display: block;
        //background-color: red;
        text-decoration: none;
        font-weight: bold;
        color: #fff;
    }

    .content-slot {
       // background-color: red;
        grid-column: span 11;
        padding: 5px;
    }

    .allboxes {
        display: flex;
        flex-wrap: wrap;
    }

    .box {
        display: block;
        padding: 5px;
        border: 1px solid black;
        width: 200px;
        margin: 5px;
        height: 400px;
    }
</style>

<html>

<body>
    <div class="wrapper">
        <section class="menu">
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
        <section class="content-slot">
            {{ $slot }}
        </section>
    </div>
</body>

</html>