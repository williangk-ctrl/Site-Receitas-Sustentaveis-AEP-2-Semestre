
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
</head>
<body>
  <div class="header">  
      <div class="left">
      <div class="logo">
        <a href="index.html"><span><i class="fas fa-seedling"></i></span>
        <span class="nome">Receitas Sustentáveis</span></a>
      </div>      
      </div>
      <div class="right txt">
          <span><a href="http://www.agenda2030.com.br/ods/2/ " target="_blank">ODS2</a></span>
          <span><a href="receitas.php">Receitas</a></span>
          <span><a href="sobreNos.html">Sobre Nós</a></span>
      </div>  
    </div>  
    <div class="main">
      <div class="pag">
        <div class="esquerda">
          <p>Receitas</p>
          <input type="text" class="pesquisa" id="search"  onkeyup="pesquisar()" placeholder="Buscar...">
          <ul class="receitas" id="menuReceitas">
             
              <div id="nomesReceitas" onclick="mostrarReceita(1)">
                <li><p>Patê de Beterraba</p></li>
              </div>
              <div onclick="mostrarReceita(2)">
                <li><p>Pizza Fingida</p></li>
              </div>
              <div onclick="mostrarReceita(3)">
                <li><p>Suco de Casca de Manga</p></li>
              </div>
              <div onclick="mostrarReceita(4)">
                <li><p>Bolinho de Arroz Assado</p></li>
              </div>
              <div onclick="mostrarReceita(5)">
                <li><p>Panquecas Verdes</p></li>
              </div>
              <div onclick="mostrarReceita(6)">
                <li><p>Geleia de Casca de Mamão</p></li>
              </div>

          </ul>
        </div>
        <div class="direita">
          <div id="nomeReceita">
            <p><b>Busque ou escolha uma receita ao lado!</b></p>
          </div>
          <div id="vegana">
            <p>De acordo com dados da Empresa Brasileira de Pesquisa Agropecuária (Embrapa), cada família brasileira desperdiça nada menos que 128 quilos de comida por ano.</p>
          </div>
          <div id="ingredientes">
            <p>Uma forma de diminuir o desperdício é utilizar todas as partes do alimento, até aquelas que são jogadas fora por desconhecimento do potencial delas.</p>
          </div> 
          <div id="infoReceita">
            <p>Aqui temos idéias de receitas sustentáveis utilizando partes de alimentos que normalmente são jogadas fora e que podem render mais de uma refeição.</p>
          </div>
        </div>
      </div>  
    </div>
<script type="text/javascript">


  function mostrarReceita(idReceita){
    var nomeReceita =[
      "",
      "<p><b>Patê de Beterraba<b/></p>",
      "<p><b>Pizza Fingida<b/></p>",
      "<p><b>Suco de Casca de Manga<b/></p>",
      "<p><b>Bolinho de Arroz Assado<b/></p>",
      "<p><b>Panquecas Verdes<b/></p>",
      "<p><b>Geleia de Casca de Mamão<b/></p>"
    ];
    var vegana = [
      "",
      "Sim</p>",
      "Não</p>",
      "Sim</p>",
      "Sim</p>",
      "Não</p>",
      "Sim</p>"
    ];
    var ingredientes=[
      "",
      "Talos de beterraba a gosto<br>1 colher de sopa de óleo<br>½ cebola<br>1 dente de alho<br>1 porção de ricota</p>",
      "3 pães amanhecidos e fatiados<br>1 xícara de chá de molho de tomate<br>2 ovos<br>Cebola, salsinha e azeitonas picadas a gosto<br>Sal a gosto</p>",
      "Casca de 3 mangas maduras e grandes<br>1 litro de água </p>",
      "2 xícaras de chá do arroz que sobrou do jantar ou almoço<br>1 colher de sopa de cebola picada<br>1 dente de alho picado<br>2 colheres de sopa de salsinha picada<br>2 ovos<br>1 xícara de chá de farinha de trigo<br>Sal a gosto</p>",
      "1 xícara de talos de brócolis<br>1 xícara de chá de leite<br>¾ de xícara de chá de farinha de trigo<br>2 ovos<br>1 colher de sopa de margarina<br>Sal a gosto</p>",
      "1 mamão médio<br>Açúcar<br>Água</p>"
    ];

    var modoDePreparo = [ 
      "",
      "Pique os talos de beterraba e refogue-os em uma panela com o óleo, cebola e alho. Misture a ricota até chegar ao ponto de purê. Deixe esfriar e sirva com torradas.</p>",
      "Sem untar, forre uma forma com as fatias de pão. Espalhe o molho sobre elas, a cebola, salsinha e azeitona. Na batedeira, faça claras em neve e, depois bata as gemas junto. Cubra os pães com esse creme. Leve ao forno e deixe assar por cerca de 20 minutos.</p>",
      "Bata as cascas no liquidificador com apenas 500 ml de água até triturar bem – assim se obtém uma grande quantidade de nutrientes. Coe, ponha o restante da água na jarra, adoce a gosto e mexa com uma colher.</p>",
      "Coloque todos os ingredientes num pote e misture com as mãos até formar uma massa homogênea. Faça pequenos bolinhos e coloque-os num refratário untado com óleo. Asse em forno médio por 30 minutos.</p>",
      "Bata os talos com o leite no liquidificador. Passe a mistura numa peneira e leve novamente ao liquidificador com o restante dos ingredientes. Unte uma frigideira com óleo e coloque a massa com o auxílio de uma concha. Deixe-a assar até obter uma cor dourada, vire-a e coloque o recheio de sua preferência.</p>",
      "O mamão deve ser bem lavado e descascado. Coloque as cascas numa panela com água suficiente para cobri-las, e leve ao fogo deixando cozinhar bem. Retire do fogo quando as cascas estiverem desmanchando, e passe-as na peneira. Com a massa restante, meça-a e adicione metade da medida de açúcar, levando ao fogo novamente até se obter uma consistência gelatinosa.</p>"
    ];

    
    document.getElementById("infoReceita").innerHTML = "<p><b>Modo de Preparo: </b><brin>"+modoDePreparo[idReceita];
     document.getElementById("nomeReceita").innerHTML = nomeReceita[idReceita];
     document.getElementById("ingredientes").innerHTML = "<p><b>Ingredientes:</b><br>"+ingredientes[idReceita];
     document.getElementById("vegana").innerHTML = "<p><b>Vegana: </b>"+vegana[idReceita];
  }

  function pesquisar(){
    var input, filtro, ul, li, p;
    input = document.getElementById("search");
    filtro = input.value.toUpperCase();
    ul = document.getElementById("menuReceitas");
    li = ul.getElementsByTagName("li");
    for (var i = 0; i < li.length; i++) {
        p = li[i].getElementsByTagName("p")[0];
        if (p.innerHTML.toUpperCase().indexOf(filtro) > -1) {
            li[i].style.display = "";
          }else {
            li[i].style.display = "none";
          }
      }
  }
</script>
</body>

</html>