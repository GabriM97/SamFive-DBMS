-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Ott 05, 2018 alle 00:30
-- Versione del server: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `samfive`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pswd` varchar(30) NOT NULL,
  `privilegi` int(1) NOT NULL COMMENT '1=SELECT; 2=1+INSERT; 3=2+UPDATE; 4=3+DELETE; 5=DBA root;',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id_user`, `nome`, `cognome`, `email`, `username`, `pswd`, `privilegi`) VALUES
(1, 'Admin', 'Admin', 'admin@samfive.it', 'admin', 'adminroot', 5),
(2, 'Luca', 'Laudani', 'luca-laudani@gmail.com', 'luca', '159stv', 3),
(3, 'Ilenia', 'Santi', 'ilenia04@gmail.com', 'ile04', 'ilenia04', 2),
(4, 'Giovanna', 'Spampinato', 'giovanna.s@gmail.com', 'giov09', 'spamp09', 2),
(5, 'Giovanni', 'Magri', 'giovanni-magri@gmail.com', 'giovmagri', 'ari-gianlu', 4),
(6, '', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
