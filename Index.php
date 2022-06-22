<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "projeto_integrado";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = [];

	if(isset($_POST['pesquisar']))  { 
    	$pesquisar = $_POST['pesquisar'];
	}else{
		$pesquisar = 0;
	}
	
	$result_cursos = "SELECT ponto_nome, ponto_rua, ponto_numero, ponto_bairro, contato_email, contato_telefone 
		FROM ponto
		INNER JOIN ponto_contato ON ponto_contato.ponto_contato_ponto_fk = ponto.ponto_id
		LEFT JOIN contato ON contato.contato_id = ponto_contato.ponto_contato_contato_fk 
		WHERE ponto_bairro LIKE '%$pesquisar%' LIMIT 5;";
	$resultado_cursos = mysqli_query($conn, $result_cursos);

		
?>
 
<!DOCTYPE html> 	<!-- Definindo a nova versão do hyper text -->
<html lang="pt-BR"> <!-- Definindo a linguagem para facilitar a leitura no leitor de tela -->
    <head>
	<!-- Metados -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Descartei</title>
    <!-- Link dos arquivos externos de estilização -->
		<link href="_estilos/Layout.css" rel="stylesheet"/>
		<link href="_estilos/Eventos.css" rel="stylesheet"/>
        <link href="_estilos/Tipografia.css" rel="stylesheet"/>
		<link rel="stylesheet" href="_estilos/Carrossel.css" />

    <!-- Link dos scripts e serviços externos --> 
     
	    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
	    
      <!-- Link das fontes externas -->
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <header>
		 <!-- Menu Desktop --> 
            <nav>
                <div id="logo" title="Logo do site (Um homem com uma prancha surfando)."></div>
                <ul id="esquerda">
                    <li><a href="#chamada" class = "scroll"> Home</a></li>
                    <li><a href="#institucional-centro" class = "scroll" >Sobre</a></li>
                    <li><a href="#testemunha" class = "scroll" >Busca</a></li>
					<!--<li><a href="cadastro.php">Cadastro</a></li>-->
                  
                </ul>

                
            </nav>

            <div id="chamada" title="Uma foto da vista aérea de uma praia.">
                <p class="chamada">Projeto Descartei</p>
                <p class="news">Descarte consciente de pilhas e baterias - São Sebastião..</p>
            
            </div>
        </header>

        <section id="institucional">
            <div id="institucional-esquerda">
                
				
            </div>

            <div id="institucional-centro">
                <p class= "chamada_01">Sobre o projeto</p>
                <p class="destaque_p"> Descartei é um projeto desenvolvido durante a disciplina de  </br> 'Projeto Integrado' ofertada pela Univesp cujo objetivo é facilitar a busca por centro de descarte de pilhas na cidade de 'São Sebastião - SP'.. </br>
                  
                </p>
                <div id="pontos-chaves-mestre">
                    <div class="pontos-chaves" title="Imagem de uma lâmpada.">
                       <ion-icon name="bulb-outline"></ion-icon>
                        <p class ="chamada_02">Consciêntização</h4>
                    </div>
                    <div class="pontos-chaves" title="Imagem de um cesto de lixo.">
                       <ion-icon name="trash-bin-outline"></ion-icon>
                        <p class ="chamada_02">Reciclagem</p>
                    </div>
                    <div class="pontos-chaves" title="Imagem de um símbolo de retorno.">
                     <ion-icon name="reload-outline"></ion-icon>
                        <p class ="chamada_02">Sustentabilidade</p>
                       
                    </div>                                        

                </div>
            </div>

            <div id="institucional-direita">
                
            </div>
                     
        </section>
        
      
		 <p class ="chamada_01">
                Encontre seu local de descarte
            </p>
			
			<form method="POST" action="index.php">
        <section id="testemunha"  >
			 
				   	<input  type="text" id="input-search-mobile" name="pesquisar" class="barra_pesquisa" placeholder=" ">

                    <input  name ="Enviar" type="submit"  class="btn" value="Pesquisar" />
            
			<br>
			<p class ="chamada_01">
               RESULTADOS
            </p>
			
			 <?php
				
					
					while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
					
					
						echo "<b> <h4> LOCAL DE DESCARTE: </h4> </b>  ".$rows_cursos['ponto_rua'].' '.' - '.$rows_cursos['ponto_bairro'].' '.' - '.$rows_cursos['ponto_numero'].' '.' - '.$rows_cursos['contato_email'].' '.' - '.$rows_cursos['contato_telefone'];
						
						
						
						
					}
				?>
        </section>
		</form>
		
		<section id="plano-principal">
		  <p class ="chamada_01">
               
            </p>
		</section>
		<section id="testemunha" title="Mapa para localizar os endereços dos postos de coleta.">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.404949260915!2d-45.407188685349745!3d-23.804195076489012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d29a5af5434743%3A0xc030791939f871b7!2zU8OjbyBTZWJhc3Rpw6NvIC0gU1A!5e0!3m2!1spt-BR!2sbr!4v1652750770665!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</section>
		<footer>     
			 <p class = "final">© Todos os direitos reservados</p>
		</footer>
		               
         <script>
            $(".slider").owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000, //2000ms = 2s;
                autoplayHoverPause: true,
            });
			
			
			
			jQuery(document).ready(function($) { 
			$(".scroll").click(function(event){        
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
		   });
		});
		
				
        </script>
		
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/sticky.min.js" integrity="sha512-O5YCLUxCY2OBc4rfpnKUIgE4LGuCiW8CrJ7ty4hvkBAAKUOnlbomEFWd3a6ruRnFvO3LG2wiaGiJ1heOvdppvA==" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="_scripts/Eventos.js"></script>
	</body>
</html>