<style>
    .dashboard {
        padding: 5px;
        //background-color: blue;
        float: left;
        width: 800px;
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


<x-layout>

    <div class="dashboard">
        <h1>Hello agenda</h1>
        <div class="allboxes">
            <div class="consultas box">
                <h2>Agenda Dr. Ferreira</h2>
                <ul>
                    <li>João | DR. Ferreira | 09:00 | Dermatologia</li>
                    <li>João | DR. Ferreira | 09:00 | Dermatologia</li>
                    <li>João | DR. Ferreira | 09:00 | Dermatologia</li>
                    <li>João | DR. Ferreira | 09:00 | Dermatologia</li>
                    <li>João | DR. Ferreira | 09:00 | Dermatologia</li>
                    (se medico, vejo minhas consultas e dos meus subordinados; se secretaria, vejo todas as consultas do dia)
                </ul>
            </div>
        </div>
    </div>
</x-layout>
