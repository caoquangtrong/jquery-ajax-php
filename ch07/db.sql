CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
 
--
-- Contenu de la table `member`
--
 
INSERT INTO `member` (`id`, `username`, `email`, `fullname`, `phone`) VALUES
(1, 'thehalfheart', 'thehalfheart@gmail.com', 'Nguyen B', '1234567890'),
(2, 'freetuts', 'freetuts.net@gmail.com', 'Nguyen A', '5245234534'),
(3, 'kingston', 'kingston@gmail.com', 'Nguyen C', '4234234343'),
(4, 'cafeviet', 'cafeviet@gmail.com', 'Nguyen D', '4234324344'),
(5, 'emailer', 'emailer@gmail.com', 'Nguyen E', '4354354656'),
(6, 'domain', 'domain@gmail.com', 'Nguyen F', '4324234343'),
(7, 'root', 'root@gmail.com', 'Nguyen G', '4343253543'),
(8, 'admin', 'admin@gmail.com', 'Nguyen H', '5465465767'),
(9, 'supper', 'supper@gmail.com', 'Nguyen I', '3442342323');