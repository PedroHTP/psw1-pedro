<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="./img/sherlock.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div id="logo">
            <img src="./img/sherlock-pp.png" alt="Logo da HeavyStreet, mostra a silhueta de um Sherlock Holmes com a bengala">
        </div>
        <div id="titulo">
            <h1>Heavy Street</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">INÍCIO</a></li>
                <li><a href="cadastro.php">CADASTRO</a></li>
                <li id="ativo"><a href="listaaluno.php">LISTA DE ALUNOS</a></li>
            </ul>
        </nav>
        <div id="search">
            <img src="img/lupa-pp.png" alt="">
        </div>
        <div id="perfil">
            <div id="usuario">
                <p>NOME ALUNO</p>
            </div>
            <div id="foto">
                <img src="./img/perfil-pp.png" alt="">
            </div>
        </div>
    </header>
    <main>
        <section id="lista">
            <h1>LISTA DE ALUNOS CADASTRADOS</h1>
            <div id="tabela">
                <table>
                    <tr id="topo">
                        <th>Nome:</th>
                        <th>Endereço:</th>
                        <th>Bairro:</th>
                        <th>Cidade:</th>
                        <th>UF:</th>
                        <th>CPF:</th>
                        <th>Telefone:</th>
                        <th>Nascimento:</th>
                        <th>Disciplinas:</th>
                        <th>Disciplina favorita:</th>
                    </tr>
                    <tr>
                        <td>Pedro Henrique Teixeira Pião</td>
                        <td>Rua i, casa 100</td>
                        <td>Monte Azul</td>
                        <td>Guanambi</td>
                        <td>BA</td>
                        <td>424.712.600-52</td>
                        <td>(77) 99903-4680</td>
                        <td>20/05/2007</td>
                        <td>
                            <ul>
                                <li>Matemática </li>
                                <li>Português </li>
                                <li>Inglês</li>
                                <li>Biologia</li>
                                <li>Química</li>
                                <li>Física</li>
                                <li>História</li>
                            </ul>
                        </td>
                        <td>Matemática</td>
                    </tr>
                    <tr>
                        <td>Helen Vieira</td>
                        <td>Praça Santo Antônio, casa 164</td>
                        <td>Vomita-mel</td>
                        <td>Mutans</td>
                        <td>BA</td>
                        <td>637.725.549-21</td>
                        <td>(77) 99934-2123</td>
                        <td>21/03/2006</td>
                        <td>
                            <ul>
                                <li>Matemática </li>
                                <li>Português </li>
                                <li>Inglês</li>
                                <li>Biologia</li>
                                <li>Química</li>
                                <li>Física</li>
                                <li>História</li>
                            </ul>
                        </td>
                        <td>História</td>
                    </tr>
                    <tr>
                        <td>Cassandra Castro Teixeira</td>
                        <td>Rua Fortuna, casa 195</td>
                        <td>Princesa Isabel</td>
                        <td>Vitória da Conquista</td>
                        <td>BA</td>
                        <td>573.106.128-42</td>
                        <td>(77) 99953-5084</td>
                        <td>14/05/2000</td>
                        <td>
                            <ul>
                                <li>Matemática </li>
                                <li>Português </li>
                                <li>Inglês</li>
                                <li>Biologia</li>
                                <li>Química</li>
                                <li>Física</li>
                                <li>História</li>
                            </ul>
                        </td>
                        <td>Inglês</td>
                    </tr>
                </table>
            </div>
        </section>
    </main>
    <footer>
        <div id="termo-logo">
            <div class="logo">

            </div>
            <div id="termo">
                <p><a href="#">POLITÍCA DE PRIVACIDE</a> | <a href="#">TERMOS DE USO</a></p>
                <p>&copy; 2024 - TODOS OS DIREITOS RESERVADOS A PEDRO HENRIQUE TEIXEIRA PIÃO</p>
            </div>
            <div class="logo">
                <img src="./img/PSW.png" alt="Logo de PSW">
            </div>
        </div>
    </footer>
</body>
</html>