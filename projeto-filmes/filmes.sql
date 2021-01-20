-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de gera��o: 05-Dez-2020 �s 17:27
-- Vers�o do servidor: 10.4.11-MariaDB
-- vers�o do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `filmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id_filme` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `sinopse` text DEFAULT NULL,
  `quantidade` smallint(6) DEFAULT 0,
  `idioma` varchar(30) DEFAULT NULL,
  `data_lancamento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `titulo`, `sinopse`, `quantidade`, `idioma`, `data_lancamento`) VALUES
(1, 'Men in Black', 'Depois que uma ag�ncia do governo faz o primeiro contato com alien�genas em 1961, refugiados estrangeiros habitam em segredo na Terra, em sua maioria disfar�ados de humanos na Regi�o Metropolitana de Nova Iorque. A MIB - Homens de Preto � uma ag�ncia ultra-secreta que monitora esses alien�genas, protege a Terra contra amea�as intergal�cticas e usa neuralyzers (dispositivos) que apagam a mem�ria para manter a atividade alien�gena em segredo. Homens e agentes negros t�m suas identidades anteriores apagadas e agentes aposentados s�o neuralizados, recebendo novas identidades. Ap�s uma opera��o para prender um criminoso alien�gena perto da fronteira mexicana pelos agentes K e D, D decide que ele j� est� muito velho para o seu trabalho. K (um dos fundadores da MIB) o neuraliza e come�a a procurar por um novo parceiro.', 1, 'ingles', NULL),
(2, 'Karate Kid', 'Dre Parker (Jaden Smith) � um garoto de 12 anos que poderia ser o mais popular da cidade de Detroit, Estados Unidos, mas a carreira de sua m�e acaba os levando para a cidade de Pequim, na China.\r\n\r\nNo novo pa�s, Dre se apaixona pela sua colega de classe Mei Ying, que torna-se sua amiga, mas as diferen�as culturais tornam essa amizade imposs�vel. Pior ainda, os sentimentos de Dre fazem com que o aluno mais brig�o da sala e prod�gio do Kung Fu, Cheng, torne-se seu inimigo, fazendo com que Dre sofra bullying nas m�os dos amigos de Cheng, sem poder reagir. Sem amigos na nova cidade, Dre n�o tem a quem recorrer exceto ao zelador do seu pr�dio Mr. Han (Jackie Chan), que � secretamente um mestre do Kung Fu.\r\n\r\n� medida em que Han ensina a Dre que o Kung Fu � muito mais que socos e habilidade, mas sim maturidade e calma, Dre percebe que encarar os brig�es da turma ser� a aventura de uma vida. E os ensinamentos de seu mestre explicam o que � o verdadeiro Kung-Fu.', 1, 'ingels', NULL),
(3, 'Pirates of the Caribbean:\r\nThe Curse of the Black Pearl', 'Enquanto o Governador Weatherby Swann e sua filha de 12 anos, Elizabeth Swann, est�o velejando para Port Royal, Jamaica, o navio deles encontra um naufr�gio com um �nico sobrevivente, um jovem chamado Will Turner. Elizabeth esconde um medalh�o de ouro que o inconsciente Will estava usando, com medo de que isso o identificasse como um pirata. Ela tem um vislumbre de um navio pirata misterioso, o P�rola Negra.\r\n\r\nOito anos depois, James Norrington da Marinha Real Brit�nica � promovido a Comodoro. Ele pede a m�o de Elizabeth em casamento. Antes dela responder, seu espartilho super apertado a faz desmaiar e cair na ba�a, onde ela afunda. Quando o medalh�o que ele est� usando chega ao fundo, ele emite um pulso.\r\n\r\nO pirata, Capit�o Jack Sparrow, chega a Port Royal para comandar um navio. Ele resgata Elizabeth, por�m Norrington reconhece Jack como um pirata e o prende. Jack, por um breve per�odo, toma Elizabeth como ref�m para poder escapar, se escondendo em uma oficina de ferreiro, encontrando Will, agora um aprendiz de ferreiro. Jack fica inconsciente ap�s uma luta e � preso, sentenciado a forca no dia seguinte. Naquela noite, Port Royal � sitiada pelo P�rola Negra, respondendo ao pulso do medalh�o. Elizabeth � capturada e invoca seu direito de falar com o capit�o. Ela mente para o Capit�o Hector Barbossa, dizendo que seu sobrenome era Turner. Ela negocia o cessar fogo a Port Royal em troca do medalh�o.', 1, 'ingles', NULL);

--
-- �ndices para tabelas despejadas
--

--
-- �ndices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id_filme`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `utilizadores` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT Primary Key,
  `nome` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;