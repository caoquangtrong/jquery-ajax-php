SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE if NOT exists `member`(
    `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(30) DEFAULT NULL ,
    `email` VARCHAR(255) DEFAULT NULL ,
    PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT  CHARSET=latin1 AUTO_INCREMENT=6;

INSERT INTO `member`(`id`, `username`, `email`) values
(1, 'thehalfheart', 'thehalfheart@gmail.com'),
(2, 'freetuts', 'freetuts.net@gmail.com'),
(3, 'kingston', 'kingston@gmail.com'),
(4, 'cafeviet', 'cafeviet@gmail.com'),
(5, 'emailer', 'emailer@gmail.com');
