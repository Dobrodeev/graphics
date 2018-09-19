-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица graphics.Question
CREATE TABLE IF NOT EXISTS `Question` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы graphics.Question: ~49 rows (приблизительно)
/*!40000 ALTER TABLE `Question` DISABLE KEYS */;
INSERT IGNORE INTO `Question` (`id`, `question`, `image`) VALUES
	(1, 'Where is arccos?', 'arccos.jpg'),
	(2, 'Where is arcctg?', 'arcctg.jpg'),
	(3, 'Where is arcsin?', 'arcsin.jpg'),
	(4, 'Where is arctg?', 'arctg.jpg'),
	(5, 'Where is astroida?', 'astroida.jpg'),
	(6, 'Where is bessel_f?', 'bessel_f.png'),
	(7, 'Where is cardioida?', 'cardioida.jpg'),
	(8, 'Where is Cassini-Kurven?', 'Cassini-Kurven.png'),
	(9, 'Where is cep_line?', 'cep_line.jpg'),
	(10, 'Where is ch(x)?', 'ch(x).jpg'),
	(11, 'Where is cicloida?', 'cicloida.jpg'),
	(12, 'Where is clotoida?', 'clotoida.gif'),
	(13, 'Where is Conchoid_of_deSluze?', 'Conchoid_of_deSluze.png'),
	(14, 'Where is conhoida_nicomeda?', 'conhoida_nicomeda.jpg'),
	(15, 'Where is cosec?', 'cosec.png'),
	(16, 'Where is ctg?', 'ctg.jpg'),
	(17, 'Where is cth(x)?', 'cth(x).jpg'),
	(18, 'Where is cub_parabola?', 'cub_parabola.jpg'),
	(19, 'Where is decart_list?', 'decart_list.jpg'),
	(20, 'Where is delta_f?', 'delta_f.jpg'),
	(21, 'Where is epicicloida?', 'epicicloida.jpg'),
	(22, 'Where is exp(x)?', 'exp(x).jpg'),
	(23, 'Where is gamma_f?', 'gamma_f.jpg'),
	(24, 'Where is giperbol_spiral?', 'giperbol_spiral.jpg'),
	(25, 'Where is giperbola?', 'giperbola.jpg'),
	(26, 'Where is gipocicloida?', 'gipocicloida.jpg'),
	(27, 'Where is grin_f?', 'grin_f.jpg'),
	(28, 'Where is hevisaid_f?', 'hevisaid_f.jpg'),
	(29, 'Where is Lemniscate_of_Bernoulli?', 'Lemniscate_of_Bernoulli.png'),
	(30, 'Where is log_spiral?', 'log_spiral.jpg'),
	(31, 'Where is parabola?', 'parabola.jpg'),
	(32, 'Where is polucub_parabola?', 'polucub_parabola.jpg'),
	(33, 'Where is sec?', 'sec.png'),
	(34, 'Where is sh(x)?', 'sh(x).jpg'),
	(35, 'Where is sin?', 'sin.png'),
	(36, 'Where is spiral_arhimeda?', 'spiral_arhimeda.jpg'),
	(37, 'Where is strofoida?', 'strofoida.jpg'),
	(38, 'Where is tg?', 'tg.jpg'),
	(39, 'Where is th(x)?', 'th(x).png'),
	(40, 'Where is Tractrix?', 'Tractrix.png'),
	(41, 'Where is ulitca_pascal?', 'ulitca_pascal.jpg'),
	(42, 'Where is Witch_of_Agnesi?', 'Witch_of_Agnesi.png'),
	(43, 'Where is white_noize?', 'white_noize.png'),
	(44, 'Where is sedlo?', 'sedlo.svg.png'),
	(45, 'Where is uzel?', 'uzel.jpg'),
	(46, 'Where is focus?', 'focus.jpg'),
	(47, 'Where is centr?', 'centr.jpg'),
	(48, 'Where is Zeta_function?', 'Zeta_function_graph.png'),
	(49, 'Where is Sinc_function?', 'Sinc_function.svg.png');
/*!40000 ALTER TABLE `Question` ENABLE KEYS */;

-- Дамп структуры для таблица graphics.Test_result
CREATE TABLE IF NOT EXISTS `Test_result` (
  `test_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `result` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы graphics.Test_result: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `Test_result` DISABLE KEYS */;
/*!40000 ALTER TABLE `Test_result` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
