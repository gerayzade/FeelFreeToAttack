--
-- Creating table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `group` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `surname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `major` varchar(255) CHARACTER SET latin1 NOT NULL,
  `year` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pp` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group`, `username`, `password`, `name`, `surname`, `major`, `year`, `pp`) VALUES
(2, 'user', 'Gewa', 'windows', 'Heydar', 'Gerayzade', 'CS', '2018', 'https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/14732330_706585872832695_8552923975747287205_n.jpg?oh=c1ca640dcda98a6b35b3e180446beb89&oe=58872CCD'),
(3, 'user', 'Kanan', 'macos', 'Kenan', 'Babayev', 'IT', '2018', 'https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/1934755_1270714299609524_3096414367532997212_n.jpg?oh=a8a49137bc6512bde9ce64abf2a66f24&oe=58C65245'),
(4, 'user', 'Emil', 'linux', 'Emil', 'Imanov', 'IT', '2018', 'https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/10525810_712092252188417_2432270176989836975_n.jpg?oh=43dd49aa086fe874ded8741c2ddfe46d&oe=58CE267F'),
(1, 'root', 'root', 'ghost', '', '', '', '', ''),
(10, 'root', 'hacker', 'sqlinjection', '', '', '', '', '');
