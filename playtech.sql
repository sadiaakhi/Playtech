-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 10:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `code` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `restock` date NOT NULL,
  `price` int(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `catagory` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `total` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`code`, `name`, `model`, `description`, `restock`, `price`, `status`, `quantity`, `catagory`, `image`, `total`) VALUES
(54, 'DeepCool AG620 ARGB Dual-Tower 120mm CPU Air Cooler', 'AG620 ARGB', '', '2023-03-22', 5100, 'Available', 10, 'Cooler', '641a1155ce147.png', 51000),
(38, 'INTEL CORE I3 12100F PROCESSOR', '12th Generation Intel® Core™ i3 Processors', '12th Generation Intel® Core™ i3 Processors', '2022-11-01', 23900, 'Available', 1, 'Processor', '6387634b51297.jpg', 23900),
(43, 'G.SKILL TRIDENT Z5 32GB RGB', 'TRIDENT Z5 32GB (2X 16GB) 6000MHZ CL36 DDR5 DESKTOP MEMORY', 'G.SKILL TRIDENT Z5 32GB (2X 16GB) DDR5 6000MHZ DESKTOP MEMORY ● Memory Type - DDR5 ● Capacity - 32GB (16GBx2) ● Tested Latency (XMP) - 36-36-36-76 ● Tested Voltage (XMP) - 1.30V', '2022-11-02', 59900, 'Available', 1, 'Processor', '638766ec01365.jpg', 59900);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Number` int(100) NOT NULL,
  `feedback` text NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `order_number` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int(100) NOT NULL,
  `shipping_address` varchar(100) NOT NULL,
  `billing_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Number`, `feedback`, `user_name`, `order_number`, `email`, `contact`, `shipping_address`, `billing_address`) VALUES
(1, 'gdgdgdfgfd', 'vixen ', 11, 'hipij66996@hempyl.com', 62659855, 'Dhaka, Uttora, sector-7, H-5', 'Dhaka, Uttora, sector-7, H-5'),
(2, 'gdgdgdfgfd', 'vixen ', 11, 'hipij66996@hempyl.com', 62659855, 'Dhaka, Uttora, sector-7, H-5', 'Dhaka, Uttora, sector-7, H-5'),
(3, 'gdgdgdfgfd', 'vixen ', 11, 'hipij66996@hempyl.com', 62659855, 'Dhaka, Uttora, sector-7, H-5', 'Dhaka, Uttora, sector-7, H-5');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `number` int(11) NOT NULL,
  `order_date` date DEFAULT NULL,
  `user_Name` varchar(200) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contact` int(250) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `total_Amount` int(200) NOT NULL,
  `payment_method` varchar(200) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`number`, `order_date`, `user_Name`, `email`, `contact`, `address`, `product`, `total_Amount`, `payment_method`, `payment_status`, `status`) VALUES
(5, '2022-11-18', 'vixce', 'hipij66996@hempyl.com', 1313, 'Barishal BD', 'AMD Processor-AMD Ryzen 5 5600X 25000BDT X10 ', 250000, 'COD', 'Paid', 'Confirm'),
(6, '2022-11-19', 'vixce', 'hipij66996@hempyl.com', 12313, 'Barishal BD', 'Intel Core i5-CORE I5 12600KF PROCESSOR 3000BDT X1 ', 3000, 'COD', 'Pending', 'Pending'),
(7, '2022-11-19', 'mimi', 'mimi@ojoda.com', 78778, 'jjdoaj', 'AMD Processor-AMD Ryzen 5 5600X 25000BDT X10 , Intel Core i5-CORE I5 12600KF PROCESSOR 3000BDT X20 , Intel Core i5-CORE I5 12600KF PROCESSOR 30000BDT X20 ', 910000, 'COD', 'Paid', 'Delivered'),
(8, '2022-11-21', 'vixce', 'hipij66996@hempyl.com', 123456, 'Barishal BD', 'Intel Core i5-CORE I5 12600KF PROCESSOR 3000BDT X1 , Intel Core i5-CORE I5 12600KF PROCESSOR 30000BDT X1 ', 33000, 'COD', 'Paid', 'Delayed'),
(9, '2022-11-21', 'Enin', 'enin.mimix13@gmail.com', 2147483647, 'Mirpur-10, Block-A, Road-5, House-12', 'Intel Core i5-5TH GEN 20000BDT X1 , Intel Core i5-CORE I5 12600KF PROCESSOR 30000BDT X20 ', 620000, 'Bkash', 'Paid', 'On the way'),
(10, '2022-11-30', 'vixce', 'hipij66996@hempyl.com', 123, 'Barishal BD', 'Intel Core i5-CORE I5 12600KF PROCESSOR 3000BDT X20 , AMD Processor-AMD Ryzen 5 5600X 25000BDT X10 ', 310000, 'COD', 'Paid', 'On the way'),
(11, '2022-11-30', 'vixce', 'hipij66996@hempyl.com', 12365966, 'Barishal BD', 'INTEL CORE I3 12100F PROCESSOR-12th Generation Intel® Core™ i3 Processors 23900BDT X1 , AMD RYZEN 5 5600X PROCESSOR-AMD Ryzen 5 5600X 6-Core AM4 3.70 GHz Unlocked CPU Processor + Wraith Stealth Cooler', 59800, 'cod', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `code` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `description` varchar(250) NOT NULL,
  `restock` date NOT NULL,
  `price` int(250) NOT NULL,
  `status` varchar(200) NOT NULL,
  `quantity` int(250) NOT NULL,
  `catagory` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`code`, `name`, `model`, `description`, `restock`, `price`, `status`, `quantity`, `catagory`, `image`) VALUES
(36, 'INTEL CORE I5 12600KF PROCESSOR', 'Intel Core i5-12600KF 10 Core LGA 1700 Unlocked CPU Processor', 'Number of Cores: 10 Number of Threads: 16 Base Clock: 3.70 GHz Max Boost Clock: Up to 4.90 GHz', '2022-11-01', 58900, 'Available', 1, 'Processor', '638769de14ee6.jpg'),
(37, 'INTEL CORE I5 12400F PROCESSOR', '12th Generation Intel® Core™ i5 Processors', 'Products formerly Alder Lake Vertical Segment Desktop Processor Number i5-12400F', '2022-11-01', 39900, 'Available', 1, 'Processor', '638762fc48167.jpg'),
(38, 'INTEL CORE I3 12100F PROCESSOR', '12th Generation Intel® Core™ i3 Processors', '12th Generation Intel® Core™ i3 Processors', '2022-11-01', 23900, 'Available', 1, 'Processor', '6387634b51297.jpg'),
(39, 'AMD RYZEN 5 5600X PROCESSOR', 'AMD Ryzen 5 5600X 6-Core AM4 3.70 GHz Unlocked CPU Processor + Wraith Stealth Cooler', 'Number of Cores: 6 Number of Threads: 12 Base Clock: 3.70 GHz Max Boost Clock: Up to 4.60 GHz Total L2 Cache: 3MB', '2022-11-01', 35900, 'Shipment Pending', 1, 'Processor', '638763c9e12cd.jpg'),
(40, 'AMD RYZEN 7 5800X PROCESSOR', 'AMD Ryzen 7 5800X 8-Core AM4 3.80 GHz Unlocked CPU Processor', 'AMD Ryzen 7 5800X 8-Core AM4 3.80 GHz Unlocked CPU Processor', '2022-11-01', 59900, 'Available', 1, 'Processor', '638763fdc05ca.jpg'),
(41, 'G.SKILL RIPJAWS V 16GB (2X 8GB) ', 'RIPJAWS V 16GB (2X 8GB) 3200MHZ DDR4 DESKTOP MEMORY', 'G.SKILL RIPJAWS V 16GB (2X 8GB) 3200MHZ DDR4 DESKTOP MEMORY ● Memory Type - DDR4 ● Capacity - 16GB (8GBx2) ● Tested Latency (XMP) - 16-18-18-38', '2022-11-03', 12900, 'Available', 1, 'RAM/ROM', '638764ae57374.jpg'),
(42, 'G.SKILL TRIDENT Z RGB 16GB ', 'TRIDENT Z RGB 16GB (2X 8GB) 4000MHZ DDR4 DESKTOP MEMORY', 'G.SKILL TRIDENT Z RGB 16GB (2X 8GB) CL18 DDR4 4000MHZ MEMORY', '2022-11-02', 24900, 'Available', 1, 'RAM/ROM', '638764dfadba1.jpg'),
(43, 'G.SKILL TRIDENT Z5 32GB RGB', 'TRIDENT Z5 32GB (2X 16GB) 6000MHZ CL36 DDR5 DESKTOP MEMORY', 'G.SKILL TRIDENT Z5 32GB (2X 16GB) DDR5 6000MHZ DESKTOP MEMORY ● Memory Type - DDR5 ● Capacity - 32GB (16GBx2) ● Tested Latency (XMP) - 36-36-36-76 ● Tested Voltage (XMP) - 1.30V', '2022-11-02', 59900, 'Available', 1, 'Processor', '638766ec01365.jpg'),
(44, 'GIGABYTE B560M DS3H AC DDR4 MOTHERBOARD', 'Gigabyte B560M DS3H AC LGA 1200 Micro-ATX Motherboard', 'Intel® B560 Ultra Durable Motherboard with Direct 6+2 Phases Digital VRM, Full PCIe 4.0* Design, PCIe 4.0 M.2, Dual Band 802.11ac WIFI, GIGABYTE 8118 Gaming LAN, 8-ch HD Audio with Audio Caps, USB TYPE-C®, RGB FUSION 2.0, Q-Flash Plus', '2022-11-11', 23900, 'Available', 1, 'Storage', '6387661c16f6b.jpg'),
(45, 'ASUS PRIME B660M-A WIFI D4 DDR4 MOTHERBOARD', 'ASUS PRIME B660M-A WIFI D4 LGA 1700 MICRO-ATX MOTHERBOARD', 'Intel® LGA 1700 socket: Ready for 12th Gen Intel® processors', '2022-11-11', 27900, 'Available', 1, 'Motherboard', '6387664536ed8.jpg'),
(46, 'MSI MPG B550 GAMING WIFI DDR4 MOTHERBOARD', 'MSI MPG B550 GAMING EDGE WIFI AM4 ATX MOTHERBOARD', 'The MPG series brings out the best in gamers by allowing full expression in color with advanced RGB', '2022-11-10', 40900, 'Available', 1, 'Processor', '638766c33aab0.jpg'),
(47, 'ASUS TUF Z690-PLUS WIFI D4 DDR4 MOTHERBOARD', 'ASUS TUF GAMING Z690-PLUS WIFI D4 LGA 1700 ATX Motherboard', '● Chipset: Z690 ● Socket: LGA 1700 ● Memory: 4x DIMM ● Expansion Slots: PCIe 5.0 x16, PCIe 3.0 x16, PCIe 3.0 x4, 2x PCIe 3.0 x1', '2022-11-16', 43900, 'Available', 1, 'Processor', '638767976e32b.jpg'),
(48, 'GIGABYTE GA-J1800M-D3P Motherboard', 'GIGABYTE GA-J1800M-D3P Motherboard with Built In 2.41Ghz DDR3 Celeron Processor: 7,000 bdt', '', '2023-03-22', 7000, 'Available', 10, 'Motherboard', '641a0ec8b9b78.png'),
(49, 'Asus Prime H510M-E Intel 10th and 11th Gen Micro ATX Motherboard', 'Asus Prime H510M-E Intel 10th and 11th Gen Micro ATX Motherboard', '', '2023-03-22', 97000, 'Available', 10, 'Motherboard', '641a0f082868a.png'),
(50, 'MSI MAG B660M MORTAR DDR5 12th Gen Micro-ATX Motherboard', 'MSI MAG B660M MORTAR DDR5 12th Gen Micro-ATX Motherboard', '', '2023-03-22', 22000, 'Available', 10, 'Motherboard', '641a0f7497139.png'),
(51, 'Crucial 8GB Single DDR4 2666MHz Desktop RAM', 'Crucial 8GB Single DDR4 2666MHz Desktop RAM', '', '2023-03-22', 2600, 'Available', 10, 'RAM/ROM', '641a101b53deb.png'),
(52, 'TEAM VULCAN Black 8GB DDR5 5200MHz Gaming Desktop RAM', 'TEAM VULCAN Black 8GB DDR5 5200MHz Gaming Desktop RAM', '', '2023-03-22', 6200, 'Available', 10, 'RAM/ROM', '641a105ad6f05.png'),
(53, 'Deepcool UD551 ARGB CPU Air Cooler', 'UD551', '', '2023-03-22', 1500, 'Available', 10, 'Cooler', '641a111dc97f6.png'),
(54, 'DeepCool AG620 ARGB Dual-Tower 120mm CPU Air Cooler', 'AG620 ARGB', '', '2023-03-22', 5100, 'Available', 10, 'Cooler', '641a1155ce147.png'),
(55, 'DeepCool LT520 240mm RGB High-Performance Liquid CPU Cooler', 'LT520', '', '2023-03-22', 7600, 'Available', 10, 'Cooler', '641a119ec0097.png'),
(56, 'NZXT Kraken X73 RGB 360mm All-in-One Liquid CPU Cooler', 'Kraken X73 RGB', '', '2023-03-22', 21500, 'Available', 10, 'Cooler', '641a11d482781.png'),
(57, 'Asus Geforce Gt 730 2GB GDDR5 Graphics Card', 'Asus Geforce Gt 730', '', '2023-03-22', 8700, 'Available', 10, 'Graphics card', '641a129ac014d.png'),
(58, 'GALAX GeForce GTX 1660 (1-Click OC) 6GB GDDR5 192-bit Graphics Card', 'GALAX GTX 1660 6GB DDR5 Graphics Card', '', '2023-03-22', 23500, 'Available', 10, 'Graphics card', '641a1275aa468.png'),
(59, 'ASUS Dual GeForce RTX 2060 EVO OC Edition 6GB GDDR6 Graphics Card', 'Dual GeForce RTX 2060 EVO OC Edition', '', '2023-03-22', 49400, 'Available', 10, 'Graphics card', '641a12e84cfc2.png'),
(60, 'Targus M610 Wireless Mouse and Keyboard Combo', 'M610', '', '2023-03-22', 2100, 'Available', 10, 'Keyboard', '641a136b9ab13.png'),
(61, 'DeepCool KG722 65% RGB Mechanical Gaming Keyboard', 'KG722', '', '2023-03-22', 4500, 'Available', 10, 'Keyboard', '641a13b9b8929.png'),
(62, '  Fantech MAXFIT67 MK858 Space Edition Mechanical Hotswap Keyboard', 'MAXFIT67 MK858 Space Edition', '', '2023-03-22', 10000, 'Available', 10, 'Keyboard', '641a1417e67ff.png'),
(63, 'Razer Orochi V2 Mobile Wireless Gaming Mouse', 'Orochi V2 Mobile Wireless', '', '2023-03-22', 5500, 'Available', 10, 'Mouse', '641a144ab8b41.png'),
(64, 'Xtrfy MZ1 RGB Wireless Ultra-Light Gaming Mouse White', 'MZ1 RGB Wireless', '', '2023-03-22', 9000, 'Available', 10, 'Mouse', '641a1477076dd.png'),
(65, 'Razer Viper V2 Pro Ultra-lightweight Wireless Esports Gaming Mouse White', 'Viper V2 Pro', '', '2023-03-22', 16700, 'Available', 10, 'Mouse', '641a14aa4d790.png'),
(66, 'PROLiNK PMC1007 USB Optical Mouse', 'PMC1007', '', '2023-03-22', 400, 'Available', 10, 'Mouse', '641a14dfe0adf.png'),
(67, 'Fantech VX7 Crypto Sakura Edition 6 Button USB Gaming Mouse', 'VX7 Crypto Sakura Edition', '', '2023-03-22', 1050, 'Available', 10, 'Mouse', '641a150fc6ffa.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `shipping_address` varchar(200) NOT NULL,
  `billing_address` varchar(200) NOT NULL,
  `regi_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contact`, `email`, `password`, `shipping_address`, `billing_address`, `regi_date`) VALUES
(1, 'Enin', '032659852', 'enin@yahoo.com', 'enin123', 'Dhaka, Bangladesh', 'Dhaka, Bangladesh', '2022-11-02'),
(2, 'vixen', '062659855', 'hipij66996@hempyl.com', '123', 'Dhaka, Uttora, sector-7, H-5', 'Dhaka, Uttora, sector-7, H-5', '2022-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
