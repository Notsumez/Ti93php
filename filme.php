<?php 
include 'conecta.php';
$consultaFilmSql = 'SELECT * FROM filme ORDER BY lancamento DESC';
$lista = $conn->query($consultaFilmSql);
$row = $lista->fetch();
$num_rows =$lista->rowCount();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme (<?php echo $num_rows?>)</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table class="tabelaFilm">
        <thead>
            <th>Cod filme</th>
            <th>Titulo</th>
            <th>Sinopse</th>
            <th>Lancamento</th>
            <th>Pais de origem</th>
            <th>Duração</th>
            <th>Preço</th>
        </thead>
        <tbody>
            <?php do {?>
                <tr>
                    <td><?php echo $row['cod_filme'];?></td>
                    <td><?php echo $row['titulo'];?></td>
                    <td><?php echo $row['sinopse'];?></td>
                    <td><?php echo $row['lancamento'];?></td>
                    <td><?php echo $row['pais_origem'];?></td>
                    <td><?php echo $row['duracao'];?></td>
                    <td><?php echo $row['preco'];?></td>
                </tr>
            <?php } while ($row = $lista->fetch())?>
        </tbody>
    </table>
    
</body>
    <form action="#" method="post">
        <div hidden>
            <label for="cod">Código
                <input type="text" name="cod" id="">
            </label>
        </div>
        <div>
            <label for="nome">Nome
                <input type="text" name="nome" id="">
            </label>
        </div>
        <div>
            <label for="titulo">Titulo
                <input type="number" name="titulo" id="">
            </label>
        </div>
        <div>
            <label for="sinopse">Sinopse
                <input type="text" name="sinopse" id="">
            </label>
        </div>
        <div>
            <label for="lancamento">Lançamento
                <input type="date" name="lancamento" id="">
            </label>
        </div>
        <div>
            <label for="pais_origem">País de origem
                <select name="pais_origem" id="">
                    <option value="afs">África do Sul</option>
                    <option value="ango">Angola</option>
                    <option value="arge">Argélia</option>
                    <option value="ben">Benin</option>
                    <option value="bots">Botsuana</option>
                    <option value="burki">Burkina Fasso</option>
                    <option value="burun">Burundi</option>
                    <option value="cv">Cabo Verde</option>
                    <option value="camar">Camarões</option>
                    <option value="chade">Chade</option>
                    <option value="comores">Comores</option>
                    <option value="congo">Congo</option>
                    <option value="cdm">Costa do Marfim</option>
                    <option value="djibu">Djibuti</option>
                    <option value="egito">Egito</option>
                    <option value="erit">Eritreia</option>
                    <option value="etio">Etiópia</option>
                    <option value="gabao">Gabão</option>
                    <option value="gambia">Gâmbia</option>
                    <option value="gana">Gana</option>
                    <option value="guine">Guiné</option>
                    <option value="guine_bissau">Guiné-Bissau</option>
                    <option value="guine_equatorial">Guiné-Equatorial</option>
                    <option value="lesoto">Lesoto</option>
                    <option value="liberia">Libéria</option>
                    <option value="libia">Líbia</option>
                    <option value="madagascar">Madagáscar</option>
                    <option value="malaui">Malauí</option>
                    <option value="mali">Mali</option>
                    <option value="marrocos">Marrocos</option>
                    <option value="maumau">Maurício</option>
                    <option value="maurita">Mauritânia</option>
                    <option value="mocambique">Moçambique</option>
                    <option value="namibia">Namíbia</option>
                    <option value="niger">Níger</option>
                    <option value="nigeria">Nigéria</option>
                    <option value="quenia">Quênia</option>
                    <option value="rca">República Centro-Africana</option>
                    <option value="rdc">República Democrática do Congo</option>
                    <option value="ruanda">Ruanda</option>
                    <option value="stp">São Tomé e Príncipe</option>
                    <option value="senegal">Senegal</option>
                    <option value="sl">Serra Leoa</option>
                    <option value="seicheles">Seicheles</option>
                    <option value="tunisia">Tunísia</option>
                    <option value="soma">Somália</option>
                    <option value="suazi">Suazilândia</option>
                    <option value="sudao">Sudão</option>
                    <option value="sudaos">Sudão do Sul</option>
                    <option value="uganda">Uganda</option>
                    <option value="tanzania">Tanzânia</option>
                    <option value="togo">Togo</option>
                    <option value="zambia">Zâmbia</option>
                    <option value="zimba">Zimbábue</option>
                    <option value="aeb">Antígua e Barbuda</option>
                    <option value="argent">Argentina</option>
                    <option value="bahamas">Bahamas</option>
                    <option value="barbados">Barbados</option>
                    <option value="belize">Belize</option>
                    <option value="bolivia">Bolívia</option>
                    <option value="brasil">Brasil</option>
                    <option value="canada">Canadá</option>
                    <option value="chile">Chile</option>
                    <option value="colombia">Colômbia</option>
                    <option value="cr">Costa Rica</option>
                    <option value="cuba">Cuba</option>
                    <option value="dominica">Dominica</option>
                    <option value="els">El Salvador</option>
                    <option value="equador">Equador</option>
                    <option value="eua">Estados Unidos</option>
                    <option value="granada">Granada</option>
                    <option value="guatemala">Guatemala</option>
                    <option value="guiana">Guiana</option>
                    <option value="haiti">Haiti</option>
                    <option value="honduras">Honduras</option>
                    <option value="jamaica">Jamaica</option>
                    <option value="mexico">México</option>
                    <option value="nicaragua">Nicarágua</option>
                    <option value="panama">Panamá</option>
                    <option value="paraguai">Paraguai</option>
                    <option value="peru">Peru</option>
                    <option value="rd">República Dominicana</option>
                    <option value="scn">São Cristóvão e Névis</option>
                    <option value="svg">São Vicente e Granadinas</option>
                    <option value="suri">Suriname</option>
                    <option value="tritoba">Trinidad e Tobago</option>
                    <option value="uruguai">Uruguai</option>
                    <option value="venez">Venezuela</option>
                    <option value="afega">Afeganistão</option>
                    <option value="arabia">Arábia Saudita</option>
                    <option value="bangla">Bangladesh</option>
                    <option value="barein">Barein</option>
                    <option value="brunei">Brunei</option>
                    <option value="butao">Butão</option>
                    <option value="camboja">Camboja</option>
                    <option value="catar">Catar</option>
                    <option value="cazaqui">Cazaquistão</option>
                    <option value="china">China</option>
                    <option value="cingapura">Cingapura</option>
                    <option value="cn">Coreia do Norte</option>
                    <option value="cs">Coreia do Sul</option>
                    <option value="eau">Emirados Árabes Unidos</option>
                    <option value="fili">Filipinas</option>
                    <option value="ie">Iêmen</option>
                    <option value="indo">Indonésia</option>
                    <option value="ira">Irã</option>
                    <option value="iraque">Iraque</option>
                    <option value="israel">Israel</option>
                    <option value="japao">Japão</option>
                    <option value="jorda">Jordânia</option>
                    <option value="kuwait">Kuwait</option>
                    <option value="laos">Laos</option>
                    <option value="libano">Líbano</option>
                    <option value="malasia">Malásia</option>
                    <option value="maldivas">Maldivas</option>
                    <option value="myanmar">Myanmar</option>
                    <option value="mongolia">Mongólia</option>
                    <option value="nepal">Nepal</option>
                    <option value="oma">Omã</option>
                    <option value="paquistao">Paquistão</option>
                    <option value="quirguistao">Quirguistão</option>
                    <option value="siria">Síria</option>
                    <option value="srilanka">Sri Lanka</option>
                    <option value="tadjiquistão">Tadjiquistão</option>
                    <option value="tailândia">Tailândia</option>
                    <option value="timorl">Timor-Leste</option>
                    <option value="turquia">Turquia</option>
                    <option value="turco">Turcomenistão</option>
                    <option value="uzbequi">Uzbequistão</option>
                    <option value="viet">Vietnã</option>
                    <option value="quirqui">Quirguistão</option>
                    <option value="albania">Albânia</option>
                    <option value="alema">Alemanha</option>
                    <option value="andorra">Andorra</option>
                    <option value="armenia">Armênia</option>
                    <option value="austria">Áustria</option>
                    <option value="azerbaijao">Azerbaijão</option>
                    <option value="belarus">Belarus</option>
                    <option value="belgica">Bélgica</option>
                    <option value="bosnia-herz">Bósnia-Herzegóvina</option>
                    <option value="bulgaria">Bulgária</option>
                    <option value="chipre">Chipre</option>
                    <option value="croacia">Croácia</option>
                    <option value="dinamarca">Dinamarca</option>
                    <option value="eslovaqui">Eslováquia</option>
                    <option value="eslovenia">Eslovênia</option>
                    <option value="espanha">Espanha</option>
                    <option value="estonia">Estônia</option>
                    <option value="finlan">Finlândia</option>
                    <option value="fran">França</option>
                    <option value="geor">Geórgia</option>
                    <option value="gre">Grécia</option>
                    <option value="hungria">Hungria</option>
                    <option value="irlanda">Irlanda</option>
                    <option value="islandia">Islândia</option>
                    <option value="italia">Itália</option>
                    <option value="letonia">Letônia</option>
                    <option value="liech">Liechtenstein</option>
                    <option value="litu">Lituânia</option>
                    <option value="luxem">Luxemburgo</option>
                    <option value="macedonia">Macedônia</option>
                    <option value="malta">Malta</option>
                    <option value="moldivia">Moldávia</option>
                    <option value="monaco">Mônaco</option>
                    <option value="montenegro">Montenegro</option>
                    <option value="noruega">Noruega</option>
                    <option value="paisesb">Países Baixos</option>
                    <option value="polo">Polônia</option>
                    <option value="pt">Portugal</option>
                    <option value="ru">Reino Unido</option>
                    <option value="rt">República Tcheca</option>
                    <option value="romenia">Romênia</option>
                    <option value="russia">Rússia</option>
                    <option value="smarino">San Marino</option>
                    <option value="servia">Sérvia</option>
                    <option value="suecia">Suécia</option>
                    <option value="suica">Suíça</option>
                    <option value="ucra">Ucrânia</option>
                    <option value="austra">Austrália</option>
                    <option value="fiji">Fiji</option>
                    <option value="im">Ilhas Marshall</option>
                    <option value="is">Ilhas Salomão</option>
                    <option value="kiribati">Kiribati</option>
                    <option value="microne">Micronésia</option>
                    <option value="naru">Nauru</option>
                    <option value="nz">Nova Zelândia</option>
                    <option value="palu">Palau</option>
                    <option value="png">Papua Nova Guiné</option>
                    <option value="samoa">Samoa</option>
                    <option value="tonga">Tonga</option>
                    <option value="tuvalu">Tuvalu</option>
                    <option value="vanuatu">Vanuatu</option>
                </select>
            </label>
        </div>
        <div>
            <label for="duracao">Duração
                <input type="number" name="duracao" id="">
            </label>
        </div>
        <div>
            <label for="preco">Preço
                <input type="number" name="preco" id="">
            </label>
        </div>
        <div>
            <button type="reset" name="bt-enviar">Enviar</button>
        </div>
    </form>
</html>