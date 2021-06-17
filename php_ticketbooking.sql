-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 05:53 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_ticketbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `catagory_name` varchar(1000) NOT NULL,
  `time` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `catagory_name`, `time`, `image`) VALUES
(14, 'main tera hero', '02:00', 'Adidas-Black-Running-Shoes-SDL948102993-1-7dd92.jpg'),
(15, 'chemistry', '02:53', 'tshrt4.jpg'),
(16, 'dhoom', '16:01', '8b3a4a479a68a64e5ccc54ff07eafa24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'ihsan', '106'),
(2, 'ihsan', '106'),
(3, 'ihsan', '007'),
(4, 'shaan', '106');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordor`
--

CREATE TABLE `ordor` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `cash` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `cnic` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `method`, `card_number`, `pin`, `cnic`, `amount`) VALUES
(1, 'ihsan ahmad', 'Jazz Cash', '43543', '1234', '3318792468234', '2400');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `movie` varchar(50) NOT NULL,
  `cinema` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `seat` varchar(50) NOT NULL,
  `net_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `movie`, `cinema`, `name`, `phone`, `cnic`, `address`, `price`, `date`, `seat`, `net_amount`) VALUES
(5, 'main tera hero hn', 'xyz', 'Ihsan Ahmad', '03127414854', '3131345646541354', '106 G.B jaranwala Faisalabad post office khas.\r\ndf', '120', '2021-06-03', '2', '240'),
(6, 'chemistry', 'asdfa', 'Ihsan Ahmad', '03127414854', '1241', '106 G.B jaranwala Faisalabad post office khas.\r\ndf', '1200', '2021-06-17', '22', '26400'),
(7, 'chemistry', 'asdfa', 'Ihsan Ahmad', '667788667678', '435553443443345', '106 G.B jaranwala Faisalabad post office khas.\r\ndf', '1200', '2021-06-24', '5', '4546464'),
(8, 'chemistry', 'asdfa', 'ihsan ahmad', '2378462354', '3318792468234', '106 G.B jaranwala Faisalabad post office khas.', '1200', '2021-06-16', '2', '2400'),
(9, 'chemistry', 'asdfa', 'ihsan ahmad', '2378462354', '3318792468234', '106 G.B jaranwala Faisalabad post office khas.', '1200', '2021-06-16', '2', '2400');

-- --------------------------------------------------------

--
-- Table structure for table `sub_catagories`
--

CREATE TABLE `sub_catagories` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `cinema` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_catagories`
--

INSERT INTO `sub_catagories` (`id`, `movie_name`, `cinema`, `price`) VALUES
(17, 'main tera hero hn', 'xyz', '120'),
(18, 'chemistry', 'asdfa', '1200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordor`
--
ALTER TABLE `ordor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_catagories`
--
ALTER TABLE `sub_catagories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordor`
--
ALTER TABLE `ordor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_catagories`
--
ALTER TABLE `sub_catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
