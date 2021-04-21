-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2020 at 03:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lfc`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `squad_number` int(2) NOT NULL,
  `height` int(11) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `birth` date NOT NULL,
  `nation` char(50) DEFAULT NULL,
  `position` char(30) DEFAULT NULL,
  `salary` int(6) DEFAULT NULL,
  `signed` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `squad_number`, `height`, `name`, `birth`, `nation`, `position`, `salary`, `signed`, `image`) VALUES
(1, 1, 191, 'Alisson Becker', '1992-10-02', 'Brazil', 'Goalkeeper', 90000, '2018-07-21', 'public/images/alisson-becker.png'),
(2, 3, 188, 'Fabinho', '1993-10-23', 'Brazil', 'Midfielder', 100000, '2018-05-28', 'public/images/fabinho.png'),
(3, 4, 193, 'Virgil Van Dijk', '1991-07-08', 'Netherlands', 'Defender', 180000, '2019-09-08', 'public/images/van-dijk.png'),
(4, 5, 175, 'Georginio Wijnaldum', '1990-11-11', 'Netherlands', 'Midfielder', 75000, '2019-04-02', 'public/images/georginio-wijnaldum.png'),
(5, 7, 175, 'James Milner', '1986-01-04', 'England', 'Midfielder', 140000, '2018-10-24', 'public/images/james-milner.png'),
(6, 8, 172, 'Naby Keita', '1995-02-10', 'Guinea', 'Midfielder', 120000, '2018-06-21', 'public/images/naby-keita.png'),
(7, 9, 181, 'Roberto Firmino', '1991-10-02', 'Brazil', 'Forward', 180000, '2018-04-29', 'public/images/roberto-firmino.png'),
(8, 10, 175, 'Sadio Mane', '1992-04-10', 'Senegal', 'Forward', 100000, '2018-11-22', 'public/images/sadio-mane.png'),
(9, 11, 175, 'Mohamed Salah', '1992-06-15', 'Egypt', 'Forward', 200000, '2018-07-02', 'public/images/mohamed-salah.png'),
(10, 12, 188, 'Joe Gomez', '1997-05-23', 'England', 'Defender', 28000, '2018-12-10', 'public/images/joseph-gomez.png'),
(11, 13, 190, 'Adrian', '1987-01-03', 'Spain', 'Goalkeeper', 50000, '2019-08-10', 'public/images/adrian.png'),
(12, 14, 182, 'Jordan Henderson', '1990-06-17', 'England', 'Midfielder', 140000, '2018-09-04', 'public/images/jordan-henderson.png'),
(13, 15, 180, 'Alex Oxlade-Chamberlain', '1993-08-15', 'England', 'Midfielder', 120000, '2019-08-22', 'public/images/alex-oxlade-chamberlain.png'),
(14, 26, 178, 'Andrew Robertson', '1994-03-11', 'England', 'Defender', 100000, '2019-01-17', 'public/images/andrew-robertson.png'),
(15, 32, 195, 'Joel Matip', '1991-08-08', 'Cameroon', 'Defender', 100000, '2019-10-17', 'public/images/joel-matip.png'),
(16, 66, 175, 'Tren Alexander-Arnold', '1998-10-07', 'England', 'Defender', 120000, '2019-01-19', 'public/images/trent-alexander-arnold.png'),
(17, 72, 189, 'Sepp Van den Berg', '2001-12-20', 'Netherlands', 'Defender', 52000, '2019-06-27', 'public/images/sepp-van-den-berg.png'),
(18, 62, 178, 'Caoimhin Kelleher', '1998-11-23', 'Ireland', 'Goalkeeper', 90000, '2018-08-26', 'public/images/caoimhin-kelleher.png'),
(19, 17, 185, 'Curtis Jones', '2001-01-30', 'England', 'Midfielder', 50000, '2018-01-02', 'public/images/curtis-jones.png'),
(20, 20, 178, 'Diogo Jota', '1996-04-12', 'Portugal', 'Forward', 150000, '2020-07-15', 'public/images/diogo-jota.png'),
(21, 46, 195, 'Rhys Williams', '2001-03-02', 'England', 'Defender', 70000, '2018-12-25', 'public/images/rhys-williams.png'),
(22, 18, 174, 'Takumi Minamino', '1995-01-16', 'Japan', 'Forward', 99000, '2019-12-08', 'public/images/takumi-minamino.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'baocuong', 'phuongkyidthailan@gmail.com', '1', '2020-12-29 11:14:50'),
(4, 'asd', 'phuongkyidthailan@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2020-12-29 11:14:50'),
(5, 'ky', 'ky@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2020-12-29 11:15:03'),
(6, 'phuongkyyy', '', 'd54bc8da56299d778c6f16ba652741a2', '2020-12-29 12:17:59'),
(7, 'lebaocuong', 'cuong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-29 12:19:34'),
(8, 'admin', 'admin@gmai.com', 'c4ca4238a0b923820dcc509a6f75849b', '2020-12-29 12:20:36'),
(9, 'adminddd', 'asd', 'c4ca4238a0b923820dcc509a6f75849b', '2020-12-29 12:40:19'),
(10, 'tanhieu', 'tanhieu@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '2020-12-30 13:11:30'),
(11, 'admin1', 'admin1@admin.com', 'c4ca4238a0b923820dcc509a6f75849b', '2020-12-30 13:21:17'),
(12, 'aasdasd', 'asdas@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2020-12-30 13:26:20'),
(13, 'aa', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2020-12-30 13:38:15'),
(14, 'aaaaaa', 'aaaaa@cb.cxv', 'c4ca4238a0b923820dcc509a6f75849b', '2020-12-30 14:19:15'),
(15, 'demo', 'demo@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2020-12-30 14:19:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
