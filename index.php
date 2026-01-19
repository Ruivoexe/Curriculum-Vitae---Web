<?php 
session_start();

if (!isset($_SESSION['tema'])) {
    $_SESSION['tema'] = 'light';
}

if (isset($_POST['trocar_tema'])) {
    $_SESSION['tema'] = ($_SESSION['tema'] === 'light') ? 'dark' : 'light';
}

$css = ($_SESSION['tema'] === 'dark') ? 'dark.css' : 'light.css';
?>


<HTML>

	<HEAD>
	
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo $css; ?>">
		<title>Curriculum Vitae</title>
		
	</HEAD>
	
	<BODY>
		<header class="perfil">
			<img src="img/foto.jpeg" alt="Foto de Vinicius Ferreira" class="foto-perfil"></img>
			<h1>Vinicius Dorneles Souza Ferreira</h1>
		</header>
		
		<p>Alegrete-RS</p>
		<p>Email:<a href="mailto:41nicius.aleg@gmail.com"> 41nicius.aleg@gmail.com</a></p>
		<p>WhatsApp: (55) 981181071</p>
		<p><a href="https://www.linkedin.com/in/vncs-drnls-frrr-069020367/" target="_blank">Linkedin</a></p>
		<p><a href="https://github.com/Ruivoexe" target="_blank">GitHub</a></p>
		
		<h2>Objetivos</h2>
		
		<p>
		Atuar na área de Tecnologia da Informação, contribuindo para a manutenção, suporte
		e segurança de sistemas e infraestrutura tecnológica, buscando constante
		aprimoramento técnico e crescimento profissional.
		</p>
		
		<h2>Formação Acadêmica</h2>
		<ul>
			<li>
				<strong>Análise e Desenvolvimento de Sistemas</strong>
				<p>Instituto Federal Farroupilha - Campus Alegrete</p>
				<p>2023 - 2026 (cursando)</p>
				<ul>
					<li>Trabalho de Conclusão de Curso (TCC I e TCC II) – Em andamento</li>
						<p>
						Continuidade e aprofundamento do projeto de pesquisa “Comedouro
						Automatizado para Bezerros”, envolvendo automação, sistemas embarcados,
						comunicação sem fio e análise de dados.
						</p>
				</ul>
			</li>
			<li>
				<strong>Licenciatura em Química</strong>
				<p>Instituto Federal Farroupilha - Campus Alegrete</p>
				<p>2019 (incompleto)</p>
			</li>
		</ul>
		
		<h2>Projeto de pesquisa e desenvolvimento</h2>
		<ul>
			
			<li>
				
				<strong>Comedouro Automatizado para Bezerros</strong>
				<p>Instituto Federal Farroupilha - Campus Alegrete</p>
				<p>2025 - Progresso</p>
				<strong>Bolsista de Projeto de Pesquisa e Desenvolvimento</strong>
				<ul>
					<li>Desenvolvimento de sistema de monitoramento automático de comedouros
					utilizando sensores de peso, RFID e comunicação LoRa.
					</li>
					<li>Apoio à coleta e análise de dados, realização de testes em campo e
					manutenção dos dispositivos.
					</li>
					<li>
					Atuação em equipe interdisciplinar envolvendo tecnologia e bovinocultura.
					</li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<strong>Competências desenvolvidas no projeto</strong>
				<li>Montagem de circuitos e integração com plataformas Arduino e ESP32</li>
				<li>Programação embarcada e comunicação sem fio.</li>
				<li>Análise de dados e resolução de problemas técnicos em sistemas IoT.</li>
				<li>Trabalho em equipe e desenvolvimento de soluções aplicadas ao setor
					agropecuário.</li>
			</li>
		</ul>
		
		<h2>Experiência Profissional</h2>
		<ul>
			<li>
				<strong>Monitor de Banco de Dados (Estágio)</strong>
				<p>Instituto Federal Farroupilha - Campus Alegrete</p>
				<p>Julho/2025 - Dezembro/2025</p>
				<ul>
					<li>Apoio em aulas teóricas e práticas para o 2º ano do curso técnico em
					Informática integrado ao ensino médio.</li>
					<li>Auxílio aos estudantes em modelagem conceitual e lógica de dados e uso da
					linguagem SQL.</li>
					</li>
				</ul>
		</ul>
		
		<ul>
			<li>
				<strong>Supermercados Peruzzo (Jovem Aprendiz)</strong>
				<p>Alegrete-RS</p>
				<p>Dezembro/2018 - Janeiro/2020</p>
				<ul>
					<li>Curso de técnico em vendas e atendimento ao público.</li>
					<li>Atendimento ao cliente e apoio nas rotinas operacionais.</li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<strong>Estofaria Rodrigues Filho</strong>
				<p>Alegrete-RS</p>
				<p>Março/2020 - Março/2023</p>
				<ul>
					<li>Execução de serviços de marcenaria e estofaria, reparo e montagem de móveis.</li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<strong>Igloo Sorvete(Freelancer)</strong>
				<p>Alegrete-RS</p>
				<ul>
					<li>Produção de sorvetes artesanais, atendimento ao cliente e apoio em eventos.</li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<strong>Baita Caipa(Freelancer)</strong>
				<p>Alegrete-RS</p>
				<ul>
					<li>Produção de bebidas naturais e coquetéis alcoólicos, apoio em eventos.</li>
				</ul>
			</li>
		</ul>
		
		<h2>Habilidades Técnicas</h2>
		<ul>
			<li><strong>Desenvolvimento de Software:</strong></li>
			<li>Programação: C, C#, Java, Python, PHP</li>
			<li>Web: HTML, CSS</li>
			<li>Mobile: Android Studio com Java</li>
			<li>Banco de Dados:SQL, modelagem relacional, PostgreSQL e MySQL.</li>
			<li>IoT e Eletrônica: Arduino, ESP32, sensores e integração de sistemas físicos e digitais.</li>
			<li>Desenvolvimento de Jogos: Noções de Unity Engine (2D) com C#.</li>
			<li>Redes de Computadores: Arquitetura, protocolos, configuração e diagnóstico de redes locais e sem fio.</li>
			<li>Cibersegurança: Fundamentos de segurança ofensiva e testes de vulnerabilidade em redes, sistemas e aplicações web.</li>
		</ul>
	
		<h2>Resumo Profissional</h2>
		<ul>
			<li><p>Estudante de Análise e Desenvolvimento de Sistemas, com experiência em suporte
				acadêmico, banco de dados, IoT e redes. Atuação prática em projetos de pesquisa e
				facilidade de aprendizado, com interesse em ambientes de TI que exigem
				responsabilidade e solução de problemas</p>
			</li>
			<li>Facilidade de aprendizado e adaptação</li>
			<li>Organização e atenção aos detalhes</li>
			<li>Boa comunicação e trabalho em equipe</li>
			<li>Interesse contínuo por tecnologia e inovação</li>
		</ul>
		<footer>Por Vinícius Ferreira - 2026</footer>
		<form method="post" class="tema-btn">
			<button type="submit" name="trocar_tema" value="1">
				🌙 / ☀️
			</button>
		</form>
		
	</BODY>
	
	

</HTML>