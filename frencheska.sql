-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 06:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frencheska`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idProducts` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ingredients` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `flags` int(11) DEFAULT '0',
  `imgkey` varchar(20) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `recomnded` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idProducts`, `name`, `ingredients`, `flags`, `imgkey`, `recomnded`) VALUES
(1, 'התערבות אלוהית', 'זיתי קלמנטה, זיתים ירוקים,עגבנית מיבשות, שום,', 0, 'product15.jpg', 1),
(2, 'זיתים מרושעים', 'זיתים ירוקים, שום, צ\'ילי,עשבי תיבול', 1, 'product11.jpg', 1),
(3, 'צ\'ימצ\'ורי', 'פטרוזליה, אורגנו, פלפלים מתוקים ,לימון,חומץ,ש', 0, 'product16.jpg', 0),
(4, 'לימונצ\'ילי', 'לימון כבוש,שום, פלפל שחור,צ\'ילי', 1, 'product14.jpg', 0),
(5, 'אריסה', 'פלפלים חריפים,שום,כמון,צ\'ילי', 1, 'product17.jpg', 1),
(6, 'רומסקו', 'פלפלים קלויים,בצי צלוי,שקדים,עגבניות מיובשות,', 0, 'product13.jpg', 0),
(7, 'עגבניות שמחות', 'עגבניות מיובשות,עגבניות טריות,שום ,עשבי תיבול', 0, 'product12.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProducts`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
