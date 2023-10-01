-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 01:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegescout`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `logo` blob NOT NULL,
  `cname` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `cmission` longtext NOT NULL,
  `cvision` longtext NOT NULL,
  `contact` varchar(50) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`logo`, `cname`, `location`, `pincode`, `cmission`, `cvision`, `contact`, `url`) VALUES
(0x696d672f436f6c6c65676553636f75742d6c6f676f735f626c61636b2e706e67, 'ABES Engineering College Ghaziabad', 'Ghaziabad', 201009, '\r\n$temp_name=$_FILES[\"file\"][\"tmp_name\"];\r\n$imagename=$_FILES[\"file\"][\"name\"];\r\n$target_path=\"img/\".$imagename;\r\nif(move_uploaded_file($temp_name,$target_path))\r\n{\r\n$temp_name=$_FILES[\"file\"][\"tmp_name\"];\r\n$imagename=$_FILES[\"file\"][\"name\"];\r\n$target_path=\"img/\".$imagename;\r\nif(move_uploaded_file($temp_name,$target_path))\r\n{\r\n$temp_name=$_FILES[\"file\"][\"tmp_name\"];\r\n$imagename=$_FILES[\"file\"][\"name\"];\r\n$target_path=\"img/\".$imagename;\r\nif(move_uploaded_file($temp_name,$target_path))\r\n{\r\n$temp_name=$_FILES[\"file\"][\"tmp_name\"];\r\n$imagename=$_FILES[\"file\"][\"name\"];\r\n$target_path=\"img/\".$imagename;\r\nif(move_uploaded_file($temp_name,$target_path))\r\n{\r\n', '$temp_name=$_FILES[\"file\"][\"tmp_name\"];\r\n$imagename=$_FILES[\"file\"][\"name\"];\r\n$target_path=\"img/\".$imagename;\r\nif(move_uploaded_file($temp_name,$target_path))\r\n{\r\n$temp_name=$_FILES[\"file\"][\"tmp_name\"];\r\n$imagename=$_FILES[\"file\"][\"name\"];\r\n$target_path=\"img/\".$imagename;\r\nif(move_uploaded_file($temp_name,$target_path))\r\n{\r\n$temp_name=$_FILES[\"file\"][\"tmp_name\"];\r\n$imagename=$_FILES[\"file\"][\"name\"];\r\n$target_path=\"img/\".$imagename;\r\nif(move_uploaded_file($temp_name,$target_path))\r\n{\r\n', '92782787829', 'http://localhost/syscom/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
