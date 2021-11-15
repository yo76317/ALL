-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-11-15 17:39:54
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `member`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `id` int(11) UNSIGNED NOT NULL,
  `account` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`id`, `account`, `password`, `mail`) VALUES
(1, 'yo76317', '1234', 'yo76317@gmail.com'),
(2, 'yo763171', '1234', 'yo76317@gmail.com'),
(3, 'yo763172', '1234', 'yo76317@gmail.com'),
(4, 'yo763173', '1234', 'yo76317@gmail.com'),
(5, 'yo763175', '1234', 'yo76317@gmail.com'),
(6, 'yo763176', '1234', 'yo76317@gmail.com'),
(7, 'yo763177', '1234', 'yo76317@gmail.com'),
(8, 'yo763178', '1234', 'yo76317@gmail.com'),
(9, 'yo763179', '1234', ''),
(10, 'yo7631710', '1234', 'yo76317@gmail.com'),
(11, 'yo7631711', '1234', 'yo76317@gmail.com'),
(12, 'yo7631713', '1234', 'yo76317@gmail.com'),
(13, 'yo7631714', '1234', 'yo76317@gmail.com'),
(14, 'yo7631715', '1234', 'yo76317@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '流水號',
  `name` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '姓名',
  `birthdat` date NOT NULL COMMENT '生日',
  `address` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL COMMENT '地址',
  `mobile` varchar(14) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL COMMENT '電話',
  `lebel` tinyint(2) UNSIGNED NOT NULL DEFAULT 0 COMMENT '等級',
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '加入時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
