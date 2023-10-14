<?php
if(!isset($_SESSION)) {
  session_start();
}

include('../../../back/protecao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../paginas/css/index.css">
  <title>Index | SEPE</title>
</head>

<body>
  <div class="container">
    <div class="tabs">
      <input id="egipcia" type="radio" name="slider" checked></a>
      <input id="grega" type="radio" name="slider">
      <input id="hindu" type="radio" name="slider">
      <input id="irlandesa" type="radio" name="slider">
      <input id="japonesa" type="radio" name="slider">
      <input id="mesopotamica" type="radio" name="slider">
      <input id="nordica" type="radio" name="slider">
      <input id="romana" type="radio" name="slider">
      <input id="quiz" type="radio" name="slider">

      <div class="botoes">
        <label for="egipcia"></label>
        <label for="grega"></label>
        <label for="hindu"></label>
        <label for="irlandesa"></label>
        <label for="japonesa"></label>
        <label for="mesopotamica"></label>
        <label for="nordica"></label>
        <label for="romana"></label>
        <label for="quiz"></label>
      </div>
      <div class="conteudo">
        <div class="caixa egipcia">
          <div class="conteudocx">
            <ion-icon name="image-outline"></ion-icon>
            <h2>Mitologia egipcia</h2>
            <p>A mitologia egípcia é uma antiga tradição de crenças e histórias do Egito Antigo, envolvendo deuses, rituais e uma forte influência na cultura egípcia, com ênfase na vida após a morte.</p>
            <button class="alternar-aba" data-target="egipcia">Aprender Mais</button>
          </div>
          <div class="aba">
            <h1>Tópicos da pagina</h1>
            <hr>
            <ul>
              <li>Neterus Primordiais</li>
              <li>Neterus Geradores</li>
              <li>Neterus da Primeira Geração</li>
              <li>Neterus da Segunda Geração</li>
            </ul>
            <button>Ir para a pagina</button>
          </div>
        </div>
        <div class="caixa grega">
          <div class="conteudocx">
            <ion-icon name="image-outline"></ion-icon>
            <h2>Mitologia grega</h2>
            <p>A mitologia grega é um conjunto de lendas e histórias da Grécia Antiga sobre deuses, heróis e criaturas míticas que desempenharam papéis significativos na cultura e na compreensão do mundo naquela época.</p>
            <button class="alternar-aba" data-target="grega">Aprender Mais</button>
          </div>
          <div class ="aba">
            <h2>Tópicos da pagina</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequuntur repudiandae voluptate dolorum nesciunt dolore iure, dolores, quis tempora explicabo, tenetur id exercitationem. Eos reprehenderit dolores, totam est quasi dolorem.</p>
          </div>
        </div>
        <div class="caixa hindu">
          <div class="conteudocx">
            <ion-icon name="image-outline"></ion-icon>
            <h2>Mitologia hindu</h2>
            <p>A mitologia hindu é um conjunto de histórias e crenças da Índia, envolvendo diversos deuses e deusas, lendas e ensinamentos espirituais que têm sido fundamentais na cultura e na religião hindu ao longo da história.</p>
            <button class="alternar-aba" data-target="hindu">Aprender Mais</button>
          </div>
          <div class="aba">
            <h2>Tópicos da pagina</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequuntur repudiandae voluptate dolorum nesciunt dolore iure, dolores, quis tempora explicabo, tenetur id exercitationem. Eos reprehenderit dolores, totam est quasi dolorem.</p>
          </div>
        </div>
        <div class="caixa irlandesa">
          <div class="conteudocx">
            <ion-icon name="image-outline"></ion-icon>
            <h2>Mitologia irlandesa</h2>
            <p>A mitologia irlandesa é um rico conjunto de mitos e lendas que fazem parte do folclore da Irlanda. Ela apresenta deuses, heróis e criaturas mágicas, e desempenhou um papel importante na cultura irlandesa ao longo da história.</p>
            <button class="alternar-aba" data-target="irlandesa">Aprender Mais</button>
          </div>
          <div class="aba">
            <h2>Tópicos da pagina</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequuntur repudiandae voluptate dolorum nesciunt dolore iure, dolores, quis tempora explicabo, tenetur id exercitationem. Eos reprehenderit dolores, totam est quasi dolorem.</p>
          </div>
        </div>
        <div class="caixa japonesa">
          <div class="conteudocx">
            <ion-icon name="image-outline"></ion-icon>
            <h2>Mitologia japonesa</h2>
            <p>A mitologia japonesa é um conjunto de crenças e lendas do Japão, envolvendo deuses, espíritos e criaturas míticas que desempenham papéis significativos na cultura e espiritualidade japonesa.</p>
            <button class="alternar-aba" data-target="japonesa">Aprender Mais</button>
          </div>
          <div class="aba">
            <h2>Tópicos da pagina</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequuntur repudiandae voluptate dolorum nesciunt dolore iure, dolores, quis tempora explicabo, tenetur id exercitationem. Eos reprehenderit dolores, totam est quasi dolorem.</p>
          </div>
        </div>
        <div class="caixa mesopotamica">
          <div class="conteudocx">
            <ion-icon name="image-outline"></ion-icon>
            <h2>Mitologia mesopotamica</h2>
            <p>A mitologia mesopotâmica é um conjunto de crenças e lendas das antigas civilizações que habitaram a região da Mesopotâmia, entre os rios Tigre e Eufrates. Ela envolve uma variedade de deuses e figuras míticas que desempenharam papéis significativos na cultura dessas civilizações.</p>
            <button class="alternar-aba" data-target="mesopotamica">Aprender Mais</button>
          </div>
          <div class="aba">
            <h2>Tópicos da pagina</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequuntur repudiandae voluptate dolorum nesciunt dolore iure, dolores, quis tempora explicabo, tenetur id exercitationem. Eos reprehenderit dolores, totam est quasi dolorem.</p>
          </div>
        </div>
        <div class="caixa nordica">
          <div class="conteudocx">
            <ion-icon name="image-outline"></ion-icon>
            <h2>Mitologia nordica</h2>
            <p>A mitologia nórdica, ou escandinava, é um conjunto de lendas e crenças das culturas da Escandinávia, incluindo deuses, heróis e criaturas míticas que desempenham papéis importantes nas histórias e na cultura desses povos.</p>
            <button class="alternar-aba" data-target="nordica">Aprender Mais</button>
          </div>
          <div class="aba">
            <h2>Tópicos da pagina</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequuntur repudiandae voluptate dolorum nesciunt dolore iure, dolores, quis tempora explicabo, tenetur id exercitationem. Eos reprehenderit dolores, totam est quasi dolorem.</p>
          </div>
        </div>
        <div class="caixa romana">
          <div class="conteudocx">
            <ion-icon name="image-outline"></ion-icon>
            <h2>Mitologia romana</h2>
            <p>A mitologia romana é um conjunto de crenças e lendas da Roma Antiga, envolvendo deuses, heróis e histórias que desempenharam papéis significativos na cultura e religião romanas.</p>
            <button class="alternar-aba" data-target="romana">Aprender Mais</button>
          </div>
          <div class="aba">
            <h2>Tópicos da pagina</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequuntur repudiandae voluptate dolorum nesciunt dolore iure, dolores, quis tempora explicabo, tenetur id exercitationem. Eos reprehenderit dolores, totam est quasi dolorem.</p>
          </div>
        </div>
        <div class="caixa quiz">
          <div class="conteudocx">
            <ion-icon name="image-outline"></ion-icon>
            <h2>Quiz geral</h2>
            <p>quiz Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus porro veritatis corporis voluptatibus? Nemo, quod beatae accusantium pariatur minus odit, iusto deleniti incidunt nostrum nulla explicabo officia quibusdam natus doloribus!</p>
            <button class="alternar-aba" data-target="quiz">Aprender Mais</button>
          </div>
          <div class="aba">
            <h2>Tópicos da pagina</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequuntur repudiandae voluptate dolorum nesciunt dolore iure, dolores, quis tempora explicabo, tenetur id exercitationem. Eos reprehenderit dolores, totam est quasi dolorem.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
    const buttons = document.querySelectorAll('.alternar-aba');
    buttons.forEach(button => {
      button.addEventListener('click', function() {
        const targetId = this.getAttribute('data-target');
        const aba = document.querySelector(`.${targetId} .aba`);
        if (aba.style.display === 'none' || aba.style.display === '') {
          aba.style.display = 'block';
          this.textContent = 'Voltar';
        } else {
          aba.style.display = 'none';
          this.textContent = 'Aprender Mais';
        }
      });
    });
  </script>
</body>
</html>
