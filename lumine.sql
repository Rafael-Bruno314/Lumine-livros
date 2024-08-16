-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 12-Fev-2020 às 08:20
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lumine`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

DROP TABLE IF EXISTS `artigos`;
CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `autor` varchar(500) NOT NULL,
  `palavra_chave` varchar(100) NOT NULL,
  `ano_publicacao` year(4) NOT NULL,
  `mes_lido` varchar(15) NOT NULL,
  `ano_lido` year(4) NOT NULL,
  `notas` mediumtext NOT NULL,
  `citacao` longtext NOT NULL,
  `pasta` varchar(100) NOT NULL,
  `resumo` longtext NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `categoria`, `autor`, `palavra_chave`, `ano_publicacao`, `mes_lido`, `ano_lido`, `notas`, `citacao`, `pasta`, `resumo`, `link`) VALUES
(14, 'Realidade física e a experiência de ser e existir', 'Artigo de Reflexão', 'Ricardo Pires de Souza;;', 'Física.vida.consiência.inconsciente.individuação.self.realidade....', 2016, 'Agosto', 2017, 'Esse artigo é simplesmente incrível pois retrata de forma simples e breve as grandes reflexões que nos permeiam. Além disso ele explica conceitos sobre a psique, a origem da vida, do universo, a interação individual com a realidade, o conceito da imagem de Deus como uma manifestação ao medo da morte e do desconhecido, além de nos dar uma justificativa à vida e à existência.', 'Enquanto buscamos contenção para o medo do desconhecido, da morte e da não-existência, e significado para essa experiência que somos, inevitavelmente, produzimos imagens de Deus em toda a sua diversidade de expressões, expressões exclusivamente humanas, que resultam invariavelmente em narrativas da realidade.;;;', 'Arigos de Lazer', 'A realidade física nos é inacessível e não sabemos o que somos ou o que é a realidade. A psique - a experiência psicológica individual subjetiva, parte consciente e parte profundamente inconsciente - é a única experiência de ser e existir e a única realidade a que temos acesso. A origem da imagem de Deus está na busca de contenção para a perplexidade e para o medo diante da ideia da morte, do desconhecido e da não-existência, e na busca de significado para a experiência psíquica percebida como realidade única. A diversidade de expressões das imagens de Deus - sejam declaradamente religiosas, sejam em suas formulações racionais e matemáticas - é função da cultura e assume forma narrativa psicologicamente verdadeira. Descrever a realidade experimentada é o que nos é possível.', '#'),
(16, 'Caracterização de telas de LCD: Extração de índio', 'Artigo Científico', 'Adjanara Preis Gabriel;Hugo Marcelo Veit;Ruth Marlene Campomanes Santana;;', 'Reciclagem.Telas de LCD.Lixiviação.Índio..', 2014, 'Abril', 2018, 'Foi extraído de telas de LCD de monitores de computador usando água régia.  Foi possível obter 170mg/kg de índio.', 'Não definido;', 'Iniciação Científica', 'Não definido', '#'),
(17, 'Extração de índio presente em telas de LCD', 'Artigo Científico', 'Gabriel A. P.;Dias P. R.;Veit H. M.;', 'Telas De LCD.Índio.Lixiviação.', 1970, 'Abril', 2018, 'Foi realizado com telas de LCD de monitores. Nesse trabalho ao cominuir a tela não foi necessário retirar com acetona o filme polimérico. Houve uma média de 155 mg/kg de índio com uso de água régia, mas 423,6 mg/kg com uso de ácido nítrico com 6M.', 'Não definido', 'Iniciação Científica', 'Não definido', '#'),
(18, 'Extração de índio a partir de telas de LCD de telefones celulares através de lixiviação com CO² supercrítico', 'Artigo Científico', 'G.P. Mello;C. M. Reis;A. B. Argenta;E. H. Tanabe;D. A. Bertuol;', '..', 2015, 'Outubro', 2017, 'Utiliza-se extração por fluido supercrítico (EFS), ácido cítrico e água oxigenada em uma pressão de 150 bar. A melhor porcentagem de eficiência foi de 85,3%. ', 'Não definido', 'Iniciação Científica', 'Não definido', '#'),
(19, 'Supercritical CO² extraction of indium present in liquid crystal displays from discarded cell phones using organic acids', 'Artigo Científico', 'A. B. Argenta;C. M. Reis;G.P. Mello;G. L. Dotto;E. H. Tanabe;D. A. Bertuol;;', 'Recycling.LCD screens.Organic acids.Supercritical CO².Indium.', 2016, 'Outubro', 2017, 'Utiliza-se CO² supercrítico , ácido cítrico, 90°C com 1M, volume de peróxido de 5% e S:L de 1:20 em 30 min com o uso do CO² extraindo 94,6% do índio.', 'Não definido', 'Iniciação Científica', 'Não definido', '#'),
(20, 'Recovery of indium from LCD screens of discarded cell phones', 'Artigo Científico', 'A.V. M. Silveira ;M. S. Fuchs;D. K. Pinheiro;E. H. Tanabe;D. A. Bertuol ;;;', 'Recycling.Mechanical processing.Leaching.Precipitation.Indium.', 2015, 'Outubro', 2017, 'A Fuchs também participou da criação desse artigo. É um dos melhores artigos sobre o  assunto de lixiviação. Eles utilizaram ácido sulfúrico com 1M na taxa S:L de 1:50 a 90°C por 1h e precipitação com NH4OH em pH 7.4.', 'Não definido', 'Iniciação Científica', 'Esse trabalho propoe a extração de índio através da hidrometalurgia com lixiviação de ácido sulfúrico e precipitação com NH4OH. O artigo destaca a importância de programas de reciclagem com incentivo financeiro aos participantes, especificamente de celulares já que contém cerca de 1400mg/Kg de índio em seus displays de LCD sem os polímeros, em contraste aos 10 - 20 mg/Kg encontrados na mineração como sub-produto do minério de zinco (Takahashi et al, 2009).\n\nSegundo os autores (apud Virolainen et al, 2011), ainda não existe um substituto para o ITO e as reservas de índio estão se esgotando. Portanto, esse artigo avalia as melhores condições possíveis das etapas de pré tratamento e tratamento das telas de LCD de displays de celulares para otimizar a porcentagem de índio recuperada.\n\nOs autores utilizaram cerca de 200 telas de LCD no estudo. Primeiramente os celulares foram desmantelados manualmente separando o painel de LCD com o filme polarizável do resto (48,89 da tela de LCD). Em seguida foi testado o melhor solvente para remover o filme polimérico em um Becker com uma ?peneira magnética (300 rpm)? por 20 hrs a 25°C, sendo a acetona o solvente ideal pela eficiência, baixo custo e baixa toxidade. Além disso, foram testados a proporção e a temperatura adequadas para otimizar a remoção do filme polimérico sendo a taxa S:L 1:10 a 25°C o ideal já que não havia desperdício de solvente e nem muita perda pela evaporação, embora os autores considerem que testes futuros para otimizar o tempo do banho em acetona sejam necessários.\n\nApós a extração do filme polimérico foi testado o melhor moinho para a cominuição dos painéis de LCD, pois quanto menor as partículas, melhor a eficiência da extração de índio. Além disso, a presença do filme polimérico atrapalhava na cominuição como demonstrado pelos autores. 20 telas de LCD foram utilizadas em cada teste e o moinho de bolas foi o que apresentou a maior quantidade de partículas com tamanho adequado à extração e menor perda material. Para a cominuição dos testes o material particulado foi peneirado para obter apenas os com diâmetro menor que 212 micrometros e avaliados para determinar a distribuição do tamanho das partículas, a composição química e a quantidade de índio presente dentro dele para servir de parâmetros no momento da extração de índio.\n\nApós as etapas de pré-tratamento, foi avaliada a melhor condição do H2SO4 para otimizar a lixiviação. As condições mais adequadas foram 1M, taxa S:L 1:50, temperatura de 90°C e tempo de 1hr, visando o custo-benefício do processo em escala industrial.\n\nA precipitação é um caminho eficiente para recuperar metais de soluções lixiviadas ácidas (Bertuol et al, 2009) portanto foram testadas diferentes concentrações para avaliar os efeitos do pH na precipitação do metal e avaliada a taxa de precipitação. Os testes dizem que o mais adequado foi o pH de 7.4 precipitando 99,8% do índio.\n\nSendo assim, a rota hidro metalúrgica de extração por H2SO4 e precipitação por NH4OH é uma rota economicamente viável que permite a extração de 96,2% do índio presente nos displays de LCD, além de sub-produtos separados que podem ser também reciclados por outras rotas, como os polímeros que podem ser reutilizados em novos materiais ou o pó de vidro de LCD que pode participar da manufatura de cerâmicos e concreto.\n', '#'),
(21, 'Recovering Indium from the Liquid Crystal Display  of Discarded Cellular Phones by Means of Chloride-Induced Vaporization at Relatively Low Temperature', 'Artigo Científico', 'Hunihiko Takahashi;Atsushi Sasaki;Gjergj Dodbiba;Jun Sadaki;Nobuaki Sato;Toyohisa Fujita;', 'Não definida', 2009, 'Outubro', 2017, 'É sem dúvida o artigo mais citado pelos outros que eu já li. Ele trata da rota pirometalúrgica com uso de HCl e atmosfera de nitrogênio.  ', 'The LCD contains approximately 1400g/t indium (In);Indium is extracted from natural resources primarily as a by-product of zinc ores;The indium content in zinc ores varies from 10 to 20 g/t, which is much smaller tham its content in LCD of discarded cellular phones;', 'Iniciação Científica', 'Não definido', '#'),
(22, 'Recycling indium from waste LCD: A review', 'Artigo Científico', 'Kaihua Zhang;Yufeng Wu;Wei Wang;Bin Li;Yinan Zhang;Tieyong Zuo;', 'Não definida', 2018, 'Outubro', 2017, 'É uma revisão das diversas formas de recuperar o índio dos restos de LCD. A introdução é bem completa e interessante.', 'Não definido', 'Iniciação Científica', 'Não definido', '#'),
(23, 'Revisão bibliográfica da dissertação: Estudo da extração de índio a partir de telas de cristal líquido (LCD)', 'Dissertação de mestrado', 'Hugo Hashimoto;', 'LCD.Índio.Lixiviação.Reciclagem.REEE.', 2015, 'Abril', 2018, 'É um bom complemento a parte de revisão bibliográfica. Realmente ele menciona detalhes que eu desconhecia.', 'Não definido', 'Sem pasta', 'Não definido', '#');

-- --------------------------------------------------------

--
-- Estrutura da tabela `capitulos`
--

DROP TABLE IF EXISTS `capitulos`;
CREATE TABLE IF NOT EXISTS `capitulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capitulo` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `mes_lido` varchar(50) NOT NULL,
  `ano_lido` year(4) NOT NULL,
  `notas` mediumtext NOT NULL,
  `citacao` longtext NOT NULL,
  `obra_origem` varchar(500) NOT NULL,
  `resumo` longtext NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `capitulos`
--

INSERT INTO `capitulos` (`id`, `capitulo`, `titulo`, `mes_lido`, `ano_lido`, `notas`, `citacao`, `obra_origem`, `resumo`, `link`) VALUES
(16, 2, 'Bem-vindo ao Sistema Solar', 'Não definido', 1970, 'É realmente interessante esse capítulo sobre o Sistema Solar apresentado de forma completa: desde o Sol até a hipotética Nuvem de Ooth. Foca-se em Plutão como um planeta (na época) e como é estranho. O autor explica, também, como é difícil vasculhar nosso próprio Sistema Solar. Além de exemplificar como ele vai muito, mas muito além de Netuno e como é, ao mesmo tempo, absurdamente repleto de corpos espaciais, mas completamente vazio em relação ao seu diâmetro.', 'A quantidade de energia recebida dos filetes de radiação pelos radiotelescópios de fora do Sistema Solar é inferior à energia de um só floco de neve atingindo o solo desde o começo da coleta [1951] - (Carl Sagan).;;', 'Breve história de quase tudo', 'Nesse capítulo o destaque é o Sistema Solar e suas dimensões literalmente astronômicas. Explica-se bastante sobre Plutão: como foi descoberto e como ele é um planetinha estranho já que possui uma órbita irregular, grande inclinação e uma lua que tem uma massa considerável em relação ao próprio planeta que pode ser um fator importante para desconsiderá-lo como planeta (e foi). Explica também sobre a Nuvem de Ooth onde habitam os cometas de longo período e sobre um hipotético planeta X que influencia as órbitas dos planetas. O capítulo finaliza ressaltando que, mesmo o nosso Sistema Solar sendo gigantesco do qual os planetas, em escala humana, estão em distâncias absurdas, existem infinitos outros Sistemas pelas galáxias e que a Equação de Drake nos mostra isso, mesmo eles estando a distancias infinitas para a capacidade humana alcançar.', '#'),
(10, 1, 'Como construir um universo', 'Fevereiro', 2018, 'Trata-se da criação do universo pela Teoria do Big-Bang além de exaltar o quão absurdo, inimaginável e preciso foi esse processo, além de salientar o quão caótico é o nosso universo. O autor explica muito bem os diversos conceitos abstratos como matéria/energia escura, quarks, léptons, bóson etc com diversos exemplos e analogias. Além disso, o capítulo fala sobre as teorias diversas teorias para a criação do universo, a dispersão das galáxias, Radiação Cósmica de Fundo e ressalta as provas do Big Bang e descreve os processos de sua criação( desde o t=10^-43 até o começo do Sistema Solar).', 'O universo não é apenas mais estranho do que supomos; ele é mais estranho do que conseguimos supor.;;;;', 'Breve história de quase tudo', 'Não definido', '#'),
(17, 3, 'O universo do reverendo Evans', 'Fevereiro', 2018, 'É incrível as habilidades desse reverendo e que atividade admirável: caçar supernovas!', 'Somente cerca de 6 mil estrelas podem ser vistas a olho nu, e somente cerca de 2 mil podem ser vistas de um só lugar.;Numa galáxia típica [...] uma supernova ocorrerá em média uma vez a cada 200 ou 300 anos.;', 'Breve história de quase tudo', 'É apresentado o reverendo Evans: caçador de supernovas que, com seu talento incomum, consegue identificar em milhares de galáxias quando um misero pontinho consegue brilhar a mais e assim revelando-se uma supernova. Mostra também como elas foram teorizadas e descobertas, além de reflexões e respostas sobre o que aconteceria caso uma delas atingisse a Terra (não vai acontecer). Finaliza o capítulo dizendo que existem métodos mais modernos para encontrar supernovas e que elas foram fundamentais para a criação de elementos pesados.', '#'),
(24, 4, 'A medida das coisas', 'Fevereiro', 2018, 'Foi interessante falar sobre a metodologia dos experimentos e sobre as histórias marcantes dos iluministas. As formas como descobriram essas coisas foi realmente interessantes, estimulantes, às vezes triste e empolgante. Saliento minhas condolências à Le Gentil, que cara azarado na vida. \nInteressante citar que a expedição de James Cook foi um sucesso e de quebra colonizou a Austrália e como Sapiens mostra: a importância da ciência na construção dos impérios. Também é admirável, porém decepcionante o fato de que Cavendish poderia ser um nome tão conhecido quanto Newton, mas não foi pela extrema sociofobia do indivíduo.', 'Tendemos a imaginá-la [gravidade] como uma força poderosa, mas na verdade não é. Cada vez que você pega um livro na mesa[...] supera, sem esforço, a força gravitacional de um planeta inteiro.;', 'Breve história de quase tudo', 'Esse capítulo é dedicado a explicar como os iluministas calcularam a massa do planeta e sua distância até o Sol, lua etc. Ele fala sobre algumas expedições realizada pelos cientistas como a fracassada expedição de Bourguer e La Condamine pelo Peru. Mencionou o astrônomo Halley. O gênio excêntrico e emputecido sir Isaac Newton e seu Princípia. Norwood como o primeiro a deduzir o tamanho da Terra pelo comprimento de um grau de arco (supondo que ela fosse uma esfera perfeita). A grande campanha feita pelos cientistas do mundo todo para estudar a passagem de Vênus pelo Sol (um evento irregular e bem raro). O gigantesco azar de Le Gentil. O sucesso da análise de James Cook. A análise da montanha ideal por Maskelyne e Hutton (e equipe) para descobrir, através dos cálculos de Newton, a constante gravitacional da Terra e consequentemente o seu peso (pois os cálculos diziam que um pêndulo sofreria deflexão da massa da montanha e a da Terra, portanto se soubesse essa deflexão e a massa da montanha saberia tudo sobre a Terra) e de quebra como se inventou as curvas de nível. A máquina do pároco John Michell para descobrir a massa do planeta e como Cavendish é um gênio além do seu tempo porém amaldiçoado pela timidez e sociofobia (e por ficar escondendo suas descobertas até a morte) que com essa máquina calculou a massa do planeta com extrema precisão (6x10^24 kg. Atualmente: 5,9725 × 10^24 kg).', '#'),
(25, 5, 'Os quebradores de pedra', 'Fevereiro', 2018, 'Capítulo dedicado ao nascimento da geologia e da \"Geological Society of London\" e as histórias de vida, feitos e conquistas de seus protagonistas iluministas em busca de desvendar, principalmente qual a idade do planeta e descrever como eram as eras geológicas passadas.', 'Não definido', 'Breve história de quase tudo', 'O capítulo cita bastante sobre as descobertas e atribuições das muitas diversas eras geológicas do planeta, das disputas entre diferentes ideias e teorias que iam desde indiretas à violência física e psicológica. A criação da \"Geological Society of London\" com a finalidade de reunir os maiores gênios da geologia para compartilharem experiências. Charles Lyell como o pai da geologia moderna e autor do  \"Principles of Geology \" um dos livros de geologia mais importantes do século XIX além de defender que as mudanças geológicas do planeta são uniformes e constantes (uniformitarianismo) [nisso ele acertou, mas errou em várias outras coisas]. Curiosidade: James Parkinson vai muito além de descobrir uma doença, era: cirurgião inglês, farmacêutico, geólogo, paleontólogo e ativista político. E Lorde Kelvin era um gênio Vitoriano. No fim, mesmo com as diversas descobertas dessa nova ciência não foi possível calcular a idade do planeta já que, nos cálculos, era muito mais recente que a idade dos fósseis que começavam a ser encontrados.', '#'),
(26, 6, 'Ciência vermelha nos dentes e garras', 'Fevereiro', 2018, 'Esse capítulo é dedicado ao nascimento da paleontologia e como os dinossauros foram tão essenciais para descrever e teorizar sobre o passado do planeta. A vida de Mantell foi difícil e ingrata e em parte graças ao Owen que pra mim é um psicopata.', 'Não definido', 'Breve história de quase tudo', 'Esse capítulo trata do nascimento da paleontologia e a ideia de grandes extinções passadas e a descoberta dos seres conhecidos como dinossauros. Mary Anning uma grande caçadora de fósseis, porém ignorada pela história e pelos contemporâneos e Gideon Mantell (um grande infeliz na vida) que descobriu um dente pertencente a um iguanodonte e consequentemente o primeiro dinossauro já registrado (mas Buckland ficou com esse mérito por publicar pouco antes um ser que chamou de megalossauro). Richard Owen sendo um gênio da paleontologia e da anatomia que cunhou o termo \"dinosauria\" e no fim da vida foi propulsor na ideia de museus serem públicos à toda  população, mesmo sendo um \"psicopata doentio\" e cuzão. Na América houve a grande rivalidade (e baixaria) de Edward Cope e Othniel Marsh, mas que nessa guerra proporcionou-se um gigantesco avanço para a paleontologia com a descoberta de dezenas de novas espécies de dinossauros (no fim o legado de Cope foi maior, mas Mars terminou a vida de forma mais confortável). Porém a paleontologia apenas aumentou a incerteza quanto à idade do planeta.', '#');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formatos`
--

DROP TABLE IF EXISTS `formatos`;
CREATE TABLE IF NOT EXISTS `formatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formato` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formatos`
--

INSERT INTO `formatos` (`id`, `formato`) VALUES
(1, 'Texto'),
(2, 'Palestra do TED'),
(3, 'Vídeos do Youtube');

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

DROP TABLE IF EXISTS `generos`;
CREATE TABLE IF NOT EXISTS `generos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`id`, `genero`) VALUES
(46, 'Divulgação Científica'),
(48, 'Produção de textos acadêmicos'),
(49, 'Dissertação de mestrado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `autor` varchar(500) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `ano_publicacao` year(4) NOT NULL,
  `mes_lido` varchar(15) NOT NULL,
  `ano_lido` int(11) NOT NULL,
  `notas` mediumtext NOT NULL,
  `citacao` longtext NOT NULL,
  `status` varchar(30) NOT NULL,
  `pasta` varchar(100) NOT NULL,
  `resumo` longtext NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `genero`, `editora`, `ano_publicacao`, `mes_lido`, `ano_lido`, `notas`, `citacao`, `status`, `pasta`, `resumo`, `link`) VALUES
(55, 'Breve história de quase tudo', 'Bill Bryson;;', 'Divulgação Científica', 'Companhia das Letras', 2003, 'Fevereiro', 2018, 'Esse livro parece ser fantástico e promete trazer aquilo que o título indica', 'Temos um vasto terreno por percorrer e bem menos que 650 mil horas para fazê-lo. Comecemos, pois!;;', 'Em andamento', 'Vida, espaço e existência', 'Não definido', 'https://roedordelivros.wordpress.com/2011/07/29/breve-historia-de-quase-tudo/'),
(61, 'Ler e Tomar Notas - Primeiros passos da pesquisa bibliográfica', 'Jonny José Mafra;', 'Produção de textos acadêmicos', 'Pucminas', 2011, 'Agosto', 2017, 'É um livro interessante para dar um geral sobre os diversos tipos de textos acadêmicos e auxiliar na hora de produzi-los.', 'Não definido', 'Finalizado', 'Produção de textos acadêmicos', 'Não definido', '#'),
(62, 'Processos de Separação e caracterização de materiais valiosos de telas LCD de telefones celulares', 'Míria Fuchs;', 'Dissertação de mestrado', 'Não definido', 2013, 'Março', 2018, 'É a melhor obra em português para a iniciação científica e a base de tudo o que irá acontecer no futuro.', 'Não definido', 'Finalizado', 'Iniciação Científica', 'Não definido', '#'),
(63, 'TestÃ©', 'RafaÃ©l BrunÃ³;', 'TestÃ©', 'LevianÃ¡', 2018, 'Maio', 2018, 'TestÃ©', 'TestÃ©;', 'Finalizado', 'TestÃ©', 'TestÃ©', '#');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pastas`
--

DROP TABLE IF EXISTS `pastas`;
CREATE TABLE IF NOT EXISTS `pastas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pasta` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pastas`
--

INSERT INTO `pastas` (`id`, `pasta`) VALUES
(96, 'Sem pasta'),
(98, 'Inovação tecnológica'),
(99, 'Física de partículas'),
(94, 'Vida, espaço e existência'),
(101, 'Produção de textos acadêmicos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `textos`
--

DROP TABLE IF EXISTS `textos`;
CREATE TABLE IF NOT EXISTS `textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `autor` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `pasta` varchar(100) NOT NULL,
  `ano_publicacao` year(4) NOT NULL,
  `mes_lido` varchar(15) NOT NULL,
  `ano_lido` year(4) NOT NULL,
  `formato` varchar(50) NOT NULL,
  `notas` mediumtext NOT NULL,
  `citacao` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `textos`
--

INSERT INTO `textos` (`id`, `titulo`, `autor`, `link`, `pasta`, `ano_publicacao`, `mes_lido`, `ano_lido`, `formato`, `notas`, `citacao`) VALUES
(10, 'Especial Antimatéria: Desaceleradores e quedas para cima', 'Não definido;', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=especial-antimateria-desaceleradores-quedas-cima&id=010130150708', 'Inovação tecnológica', 2015, 'Março', 2018, 'Texto', 'Especial de antimatéria!', 'Não definido;'),
(6, 'O Preço do Sucesso', 'Ana Faria;;;', 'https://enquantosomosjovensblog.wordpress.com/2017/09/28/o-preco-do-sucesso/', 'Testes', 2017, 'Fevereiro', 2018, 'Texto', 'A Ana Faria tem uma incrível visão de mundo e uma escrita extremamente leve.', 'São sonhos difíceis de se realizar? Sim, e muito. Principalmente dado o contexto histórico, social e cultural que vivemos no Brasil e no mundo.;Todavia, são sonhos possíveis que exigem o que quase toda profissão requer para se obter o sucesso: trabalho árduo, dedicação e disciplina.;'),
(11, 'Especial Antimatéria: Medicina e autoaniquilamento', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=especial-antimateria-medicina-autoaniquilamento&id=010130150709#.Wp69-ejwbIU', 'Inovação tecnológica', 2015, 'Março', 2018, 'Texto', 'Especial de antimatéria!', 'Não definido'),
(12, 'Especial Antimatéria: Tanques e armadilhas de antimatéria', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=especial-antimateria-tanques-armadilhas-antimateria&id=010130150707#.Wp69_OjwbIU', 'Inovação tecnológica', 2015, 'Março', 2018, 'Texto', 'Especial de antimatéria!', 'Não definido'),
(13, 'Físicos querem transportar antimatéria em uma caminhonete', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=transportar-antimateria-caminhonete&id=010160180306#.Wp6_zOjwbIU', 'Inovação tecnológica', 2018, 'Março', 2018, 'Texto', 'Isso é incrível!', 'Não definido'),
(14, 'Metro cúbico mais frio do Universo tentará desvendar antimatéria', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=metro-cubico-mais-frio-universo-antimateria&id=010130141105#.Wp7AKOjwbIU', 'Inovação tecnológica', 2014, 'Março', 2018, 'Texto', 'Não definido', 'Não definido'),
(15, 'Matéria mais fria do Universo dentro da Estação Espacial', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=temperatura-mais-fria-universo&id=010130141024#.Wp7ALejwbIU', 'Inovação tecnológica', 2014, 'Março', 2018, 'Texto', 'Não definido', 'Não definido'),
(16, 'Encontradas estrelas mais frias do Universo', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=estrelas-mais-frias-universo&id=010130110823#.Wp7AMujwbIU', 'Inovação tecnológica', 2011, 'Março', 2018, 'Texto', 'Não definido', 'Não definido'),
(17, 'Átomo híbrido de antimatéria produzirá laser de raios gama', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=atomo-hibrido-antimateria-produz-laser-raios-gama&id=010115111228#.Wp7APejwbIU', 'Inovação tecnológica', 2011, 'Março', 2018, 'Texto', 'A ideia é formar um condensado de Bose-Einstein para emitir, de forma controlada, feixes de raios gama para sondarem núcleos atômicos e muito mais.', 'Metade matéria, metade antimatéria, os átomos de positrônio estão sempre no limiar da própria aniquilação [...] ele é formado por um elétron e um anti-elétron (um pósitron) orbitando um ao redor do outro.;Mas esse sistema binário é muito instável: um átomo de positrônio dura menos de um milionésimo de segundo, antes que o elétron e o pósitron se aniquilem, emitindo um pulso de raios gama.;Assim, quando um deles se aniquilar, todo o restante seguirá o líder, emitindo um pulso de radiação laser feita de raios gama.;'),
(18, 'Especial Antimatéria: Antimatéria no espaço e nas naves espaciais', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=especial-antimateria-antimateria-espaco-naves-espaciais&id=010130150710#.Wp7CbujwbIU', 'Inovação tecnológica', 2014, 'Março', 2018, 'Texto', 'Especial de antimatéria!', 'Não definido'),
(19, 'Especial Antimatéria: A destruição do Universo e as bananas', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=especial-antimateria-destruicao-universo-bananas&id=010130150706#.Wp61HujwbIU', 'Inovação tecnológica', 2015, 'Março', 2018, 'Texto', 'Especial de antimatéria!', 'Como ambas se aniquilam quando se encontram, não deixando nada para trás, exceto energia, se as teorias atuais estivessem completas, nada deveria existir.Mas nós existimos. E, tanto quanto os físicos podem dizer, é só porque, após a Grande Explosão, teria sido gerada uma partícula de matéria extra para cada bilhão de pares de matéria-antimatéria.;as bananas produzem antimatéria, liberando um pósitron - o equivalente de antimatéria do elétron - aproximadamente a cada 75 minutos. Isto ocorre porque as bananas contêm uma pequena quantidade de potássio-40, um isótopo natural do potássio. Conforme o potássio-40 decai, ele cospe um pósitron no processo.;Nossos corpos também contêm potássio-40, o que significa você próprio pode estar emitindo pósitrons.;'),
(20, 'Universo era líquido logo depois do Big Bang', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=universo-primordial-era-liquido&id=010830101124#.Wp7C8ejwbIU', 'Inovação tecnológica', 2010, 'Março', 2018, 'Texto', 'Era líquido... por essa eu não esperava. Além disso... 18.000 partículas é muita coisa mesmo. Nosso universo é fantástico!', 'O experimento ALICE, um dos quatro grandes detectores do LHC, desenvolvido especialmente para estudar os mini Big Bangs, detectou cerca de 18.000 partículas depois de cada colisão entre os íons de chumbo.;Os cálculos indicam que os choques estão gerando temperaturas de até 10 milhões de graus.;Embora a referência seja sempre feita ao LHC, que é o acelerador como um todo, suas peças principais são os sensores que detectam os resultados dos impactos das partículas que colidem.São quatro aparelhos: ALICE (A Large Ion Collider Experiment), LHCb (LHC Beauty), ATLAS (A Toroidal LHC Apparatus) e CMS (Compact Muon Solenoid). [curioso].;'),
(21, 'Física de Partículas', 'Silvana Da Dalt;', 'http://www.if.ufrgs.br/tex/fis01043/20031/Silvana/fispart.html', 'Física de partículas', 1970, 'Março', 2018, 'Texto', 'Um texto simples explicando sobre os grupos de partículas como os hádrons, léptons, férmions etc, sobre o comprimento de Planck e partículas dos campos.', 'Pesquisas recentes em física nuclear e de alta energia levam a escalas de comprimento milhares de vezes menores, comparadas ao do quark, por exemplo.Contudo, essa série de escala apresenta um limite, que é conhecido como comprimento de Planck, e essa medida pode chegar a um milímetro dividido por cem mil bilhões de bilhões de bilhões, aproximadamente 10-35mm. Partículas nessa ordem de tamanho, exigiriam partículas de tão alta energia que elas estariam dentro de buracos negros. Sondar partículas tão pequenas na ordem do comprimento de Planck, exigiria um acelerador de partículas com diâmetro maior que o do sistema solar. Segundo Stephen Hawking, \"dificilmente um acelerador de tal tamanho seria aprovado no atual clima de contenção financeira!!!\";'),
(22, 'Em busca da \"Partícula de Deus\"', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=010805070402&id=010805070402', 'Inovação tecnológica', 2007, 'Março', 2018, 'Texto', 'Esse texto foi escrito 5 anos de realmente comprovarem o bóson de Higgs, porém é interessante ver como era alta a aposta na existência desse bóson e como o Modelo Padrão sendo um dos maiores trunfos da atual humanidade, ainda é falho e não explica nem 5% do universo.', 'O maior interesse dos cientistas é descobrir o Bóson de Higgs, a única peça que falta para montar o quebra-cabeças que explicaria a \"materialidade\" do nosso universo.;Entre quarks e léptons, férmions e bósons, são 16 partículas fundamentais: 12 partículas de matéria e 4 partículas portadoras de força.;Quando consideradas individualmente, nenhuma dessas partículas tem massa. Ou seja, depois de todos os avanços científicos, ainda não sabemos o que dá \"materialidade\" ao nosso mundo. O Modelo Padrão, a teoria básica da Física que explica a interação de todas as partículas subatômicas, coloca todas as fichas no Bóson de Higgs, a partícula fundamental que explicaria como a massa se expressa nesse mar de energias. É por isso que os cientistas a chamam de \"Partícula de Deus\".; fica claro que o Modelo Padrão consegue dar boas respostas sobre como \"a coisa funciona\", mas ainda se cala quando a pergunta é \"o que é a coisa\". O Modelo Padrão também não explica a gravidade. E não pretende dar conta dos restantes 95% do nosso universo, presumivelmente preenchidos por outras duas \"coisas\" que não sabemos o que são: a energia escura e a matéria escura.;'),
(23, 'Cientistas descobrem assimetria entre matéria e antimatéria', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=assimetria-entre-materia-antimateria&id=020130100519#.Wp7DRujwbIU', 'Inovação tecnológica', 2010, 'Março', 2018, 'Texto', 'Não se sabe o motivo, mas houve uma discrepância natural de antimatéria quando produzida matéria e antimatéria através da produção de pares de múons e pares de antimúons no decaimento dos mésons B. Isso pode ser o início de uma nova era na física das partículas.', '\"O que aconteceu com a antimatéria?\" é uma das questões centrais da física do século 21.;Agora, os novos resultados indicam uma diferença de 1% entre a produção de pares de múons e pares de antimúons no decaimento dos mésons B, confirmando a deficiência explicativa do Modelo Padrão.As colisões produziram pares de partículas de matéria ligeiramente mais frequentemente do que geraram partículas de antimatéria.;Se os resultados se confirmarem, os físicos poderão começar a trabalhar em uma nova física do século 21, que poderá falar de fenômenos físicos desconhecidos pela física do século 20.;;'),
(24, 'Descoberta partícula de antimatéria mais estranha já vista', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=particula-antimateria&id=010130100305#.Wp7MqujwbIU', 'Inovação tecnológica', 2010, 'Março', 2018, 'Texto', 'Descobriu-se uma antipartícula formada por um núcleo de anti-hidrogênio, contendo um antipróton e um antinêutron, mais um hiperon antilambda. Ah! para né! Assim eu desisto de materiais... se bem que... quem sabe um material feito dessa coisa... rsrsrs', 'Mas existem várias outras partículas, entre elas um parente pesado do antinêutron, chamada hiperon antilambda. Hiperons são partículas de massa maior do que a do próton e podem vir em vários sabores - o antilambda é um deles.;Traduzindo, isto significa que foi encontrado uma antipartícula formada por um núcleo de anti-hidrogênio, contendo um antipróton e um antinêutron, mais um hiperon antilambda.;'),
(25, 'Existirão vidas em outros universos?', 'Anne Trafton - MIT;', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=existirao-vidas-em-outros-universos&id=010130100319#.Wp7RJejwbIU', 'Inovação tecnológica', 2010, 'Março', 2018, 'Texto', 'Estamos tão longe...', 'O homem sempre explicou o mundo a partir de si mesmo. Por milênios, consideramo-nos o centro do Universo. Ainda hoje, mesmo alguns cientistas sentem-se desconfortáveis em falar sobre formas de vida diferentes da nossa, apoiando-se na conjectura estritamente conservadora de que elas nunca foram observadas.;Segundo os teóricos do multiverso, contudo, essa suposição de que condições ligeiramente diferentes das presentes em nosso Universo impediriam de todo a existência de qualquer tipo de vida nada mais é do que um resquício dessa mania histórica de colocar o homem no centro de tudo.;'),
(26, 'Estrela é o objeto mais redondo já observado na natureza', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=estrela-objeto-mais-redondo-ja-observado-natureza&id=020130161118#.Wp7ZYOjwbIU', 'Inovação tecnológica', 2016, 'Março', 2018, 'Texto', 'Legal!', 'A diferença entre os raios equatorial e polar da estrela é de apenas 3 quilômetros - um número surpreendentemente pequeno em relação ao raio médio da estrela, de 1,5 milhão de quilômetros. Ou seja, a estrela é surpreendentemente redonda.;Nosso Sol, por exemplo, gira com um período de 27 dias e tem um raio equatorial 10 km maior do que seu raio polar; para a Terra, essa diferença é de 21 km.;'),
(27, 'Próxima b: 7 questões sobre o exoplaneta mais próximo de nós', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=exoplaneta-proxima-b&id=010130160909#.Wp7ZZOjwbIU', 'Inovação tecnológica', 2016, 'Março', 2018, 'Texto', 'Ahhhhh que fofo! É potencial à vida. Embora eu ouvi falar de uma explosão solar que aconteceu por lá então, se tinha vida... já era.', 'Circundando a estrela mais próxima do nosso Sistema Solar e com potencial para abrigar vida, Próxima b é o exoplaneta mais festejado até agora, e com muita razão.;'),
(28, 'Anti-hélio-4: descoberta mais pesada partícula de antimatéria', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=anti-helio-4-antiparticula-antimateria-pesada&id=010130110425#.Wp7B_OjwbIU', 'Inovação tecnológica', 2011, 'Março', 2018, 'Texto', 'Descobriu-se partículas anti-alfa, núcleos de hélio-4, a mais pesada já descoberta. E teve participação brasileira!', 'Não definido'),
(29, 'Fenômeno magnético anuncia com antecedência força de erupção solar', 'Não definido', 'http://www.inovacaotecnologica.com.br/noticias/noticia.php?artigo=fenomeno-magnetico-anuncia-antecedencia-forca-erupcao-solar&id=010130180306#.Wp60HejwbIU', 'Inovação tecnológica', 2018, 'Março', 2018, 'Texto', 'Bem... uma esperança contra esse inimigo mortal e traiçoeiro (que proporcionou a vida também, mas isso é detalhe) que temos: o Sol.', 'Hoje, estima-se que uma rajada de partículas solares de alta intensidade possa ter efeitos catastróficos, interrompendo não apenas todas as redes de computadores, incluindo a internet, como também as comunicações via satélite e as redes de distribuição de energia elétrica. E, em 2012, uma tempestade solar devastadora passou raspando pela Terra.;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

DROP TABLE IF EXISTS `tipos`;
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id`, `tipo`) VALUES
(1, 'Tese'),
(2, 'Monografia'),
(5, 'Artigo Científico'),
(8, 'Artigo de Reflexão'),
(10, 'Dissertação de mestrado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `email`, `senha`) VALUES
(1, 'lumine@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
