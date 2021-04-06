-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 05:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thegiftshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `header`, `body`, `image`, `status`, `created_date`, `updated_date`) VALUES
(1, 'The Gift Mart', 'The Gift Mart is an online gift giving platform.Users can buy their favourite items to present to their loved once.We will deliver the products to the receiver\r\n				in a presentable way as gifts.', 'images/gift7.jpg', 1, '2021-03-27 22:39:07', '2021-03-27 22:39:07'),
(2, 'Our Mission', 'Our mission is to make it easy to present gifts to our favorite one\'s. Sometimes we are unable to go to the market for buying gifts due to our busy schedule. The Gift Mart will play a significant role to reduce the hassle.', 'images/mission.png', 1, '2021-03-27 22:45:11', '2021-04-27 22:45:11'),
(3, 'Important Features', '1.Our Products: Gadgets, Books and miscellaneous products like Panjabi, Saree, Watch, Wallet, Chocolate etc.\r\n\r\n2.Personal account for every user.(LogIn and Registration)\r\n\r\n3.Scope for updating profile.(User Profile, Edit Option)\r\n\r\n4.Users can contact us through contact form.(Contact)\r\n\r\n5. Overview about our services and products.(Homepage)\r\n\r\n6.All services and Products Information at one place.(All Service/Product)\r\n\r\n7.Private products for our special customers.(Private Page)\r\n\r\n8.Individual Product and Service details.(Service/Product Details)\r\n\r\n9.Personal account for every user.(LogIn and Registration)\r\n\r\n10.About Us and Developers Information.(About Us and Team Page)', 'images/keyfeatures.png', 1, '2021-03-27 22:49:02', '2021-04-27 22:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Kamrozzaman Bhuiyan', '180104063@aust.edu', 'Hello', 2, '2021-04-05 19:14:17', '2021-04-05 19:14:17'),
(2, 'Abir', '180104064@aust.edu', 'Hey', 1, '2021-04-05 19:17:49', '2021-04-05 19:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `univ_id` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `name`, `image`, `univ_id`, `facebook`, `twitter`, `instagram`, `linkedin`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Md. Rakibul Islam', 'images/rakib.jpg', '18.01.04.072', 'https://www.facebook.com/rakib.aust41', NULL, 'https://www.instagram.com/raakeeeb/', 'https://www.linkedin.com/in/rakibul-islam-a17777122/?originalSubdomain=bd', 1, '2021-03-08 03:21:16', '2021-03-08 03:21:16'),
(2, 'MD. Kamrozzaman Bhuiyan', 'images/kamru.jpg', '18.01.04.063', 'https://www.facebook.com/kamrozzaman.bhuiyan.94', NULL, 'https://www.instagram.com/kamrozzaman__bh/', 'https://www.linkedin.com/in/kamrozzaman-bhuiyan-135678204/', 1, '2021-03-08 03:26:52', '2021-03-08 03:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `privateproducts`
--

CREATE TABLE `privateproducts` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` text NOT NULL,
  `product_uploadTimeAndDate` datetime NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privateproducts`
--

INSERT INTO `privateproducts` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_uploadTimeAndDate`, `product_price`, `product_quantity`, `product_rating`) VALUES
(1, 'Rolex Watch', 'Exclusive', 'This is the most famous Rolex brand watch.', 'images/rolexwatch.jpg', '2021-03-09 00:57:39', 12000, 5, 5),
(2, 'iPhoneX', 'Exclusive', 'iPhoneX is the most demanding mobile phone in the market of Apple brand.', 'images/iphoneX.jpeg', '2021-03-09 01:00:04', 65000, 3, 5),
(3, 'MacBookPro', 'Exclusive', 'MacBookPro is the first choice of the elite users.', 'images/macbookpro.jpg', '2021-03-09 01:02:15', 130000, 4, 5),
(4, 'Sony DSLR Camera', 'Exclusive', 'Sony DSLR cameras are now considered to be the king of camera world.', 'images/sonycamera.png', '2021-03-09 01:04:30', 85000, 6, 5),
(5, 'Sapiens Book', 'Exclusive', 'Sapiens is one of the best seller books in recent times.', 'images/sapiensbook.jpg', '2021-03-09 01:06:28', 550, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` text NOT NULL,
  `product_uploadTimeAndDate` datetime NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_uploadTimeAndDate`, `product_price`, `product_quantity`, `product_rating`) VALUES
(1, 'Charitraheen', 'Book', 'This book is written by the famous writer Sarat Chandra Chattopadhyay. This is a great novel.', 'images/charitraheen.jpg', '2021-03-08 01:19:06', 350, 15, 5),
(2, 'Korachi', 'Book', 'This book is written by Mohammad Nazim Uddin.', 'images/book3.jpg', '2021-03-08 01:30:23', 300, 7, 4.8),
(3, 'Badshah Naamdar', 'Book', 'This book is written by Humayun Ahmed.', 'images/book4.png', '2021-03-08 01:48:07', 275, 11, 4.6),
(4, 'Nirbashon', 'Book', 'This book is written by Sadat Hossain.', 'images/book5.jpg', '2021-03-08 01:50:44', 350, 8, 4.9),
(5, 'Meghdubi', 'Book', 'This book is written by Kingkor Ahsan.', 'images/book6.jpg', '2021-03-08 01:53:05', 275, 5, 4.4),
(6, 'The Da Vinci Code', 'Book', 'This book is written by Dan Brown.', 'images/book7.jpg', '2021-03-08 01:56:13', 450, 3, 4.9),
(7, 'Apple Airpod', 'Gadgets', 'This is Apples wireless Airpod.Best Quality.', 'images/airdot1.jpg', '2021-03-08 02:02:19', 4500, 7, 4.8),
(8, 'Overhead Headset', 'Gadgets', 'This is wired overhead headset.', 'images/headphone1.jpg', '2021-03-08 02:06:45', 1500, 4, 4.6),
(9, 'Bluetooth Earbud', 'Gadgets', 'This is bluetooth earbud best quality.', 'images/headphone2.jpg', '2021-03-08 02:08:43', 1200, 11, 4.6),
(10, 'Wireless Overhead Headset', 'Gadgets', 'This is Wireless Overhead Headset of best quality.', 'images/headphone3.jpg', '2021-03-08 02:11:08', 2200, 6, 4.8),
(11, 'Bluetooth Earpiece', 'Gadgets', 'This is bluetooth earpiece best for regula use.', 'images/headphone4.jpg', '2021-03-08 02:14:29', 700, 17, 4.5),
(12, 'Apple Smartwatch', 'Gadgets', 'This is Apples premium quality smartwatch.', 'images/watch3.jpg', '2021-03-08 02:17:10', 7500, 6, 4.7),
(13, 'Chocolates', 'Miscellaneous', 'Premium quality Chocolates.', 'images/chocolate1.jpg', '2021-03-08 02:26:26', 550, 6, 4.7),
(14, 'Wallets', 'Miscellaneous', 'Best quality leather wallet.', 'images/wallet1.jpg', '2021-03-08 02:28:38', 750, 15, 4.3),
(15, 'Panjabi', 'Miscellaneous', 'Mens Stylish Panjabi.', 'images/panjabi1.jpg', '2021-03-08 02:30:45', 1550, 20, 4.8),
(16, 'Saree', 'Miscellaneous', 'Womens stylish saree,best quality.', 'images/saree1.jpg', '2021-03-08 02:36:55', 3500, 20, 4.9),
(17, 'Oneplus 7 Pro SmartPhone', 'Miscellaneous', 'This is one of the most demanding smartphone nowadays.', 'images/phone1.jpg', '2021-03-08 02:41:20', 35000, 3, 5),
(18, 'MI Powerbank', 'Miscellaneous', 'One of the reliable powerbanks in the market.', 'images/powerbank1.jpg', '2021-03-08 02:44:08', 1500, 8, 4.7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_password` text NOT NULL,
  `activation_code` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_data` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`, `activation_code`, `status`, `created_data`, `updated_date`) VALUES
(1, 'Kamrozzaman', '180104063@aust.edu', '01799861488', 'e10adc3949ba59abbe56e057f20f883e', NULL, 2, '2021-04-05 19:13:52', '2021-04-05 20:18:57'),
(2, 'Rakibul Islam', '180104072@aust.edu', '01521335803', 'e10adc3949ba59abbe56e057f20f883e', NULL, 2, '2021-04-05 19:17:31', '2021-04-05 19:17:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privateproducts`
--
ALTER TABLE `privateproducts`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `privateproducts`
--
ALTER TABLE `privateproducts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
