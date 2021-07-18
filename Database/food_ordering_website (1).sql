-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 10:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_ordering_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_website`
--

CREATE TABLE `action_website` (
  `slno` int(11) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action_website`
--

INSERT INTO `action_website` (`slno`, `action`) VALUES
(1, 'OPEN');

-- --------------------------------------------------------

--
-- Table structure for table `address_of_user`
--

CREATE TABLE `address_of_user` (
  `address_slno` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `land_mark` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `alternative_address` varchar(255) NOT NULL,
  `alternative_mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_of_user`
--

INSERT INTO `address_of_user` (`address_slno`, `user_id`, `address`, `land_mark`, `house_no`, `alternative_address`, `alternative_mobile`) VALUES
(11, '3', 'Banarhat Dharamsala Road', 'Teachers Colony', '735202', 'Lions Club Road', '9735346714'),
(12, '1', 'Siliguri Dagapur', 'Teachers Colony', '734001', 'siliguri', '8578968547');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `cart_slno` int(255) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_quantity` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_discount` varchar(100) NOT NULL,
  `product_discount_price` varchar(100) NOT NULL,
  `product_total_price` varchar(100) NOT NULL,
  `action` int(100) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`cart_slno`, `user_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `total_price`, `product_discount`, `product_discount_price`, `product_total_price`, `action`, `added_on`) VALUES
(2, '8', '5', 'Mutton Biryani', 'mutton_bir1.png', '200', '1', '200', '15', '30', '170', 0, '2020-11-07 00:19:03'),
(7, '8', '7', 'Idli', 'idli1.png', '150', '1', '150', '10', '15', '135', 0, '2020-11-12 05:22:31'),
(8, '1', '4', 'Chicken Biryani', 'chicken.png', '200', '1', '200', '10', '20', '180', 0, '2021-02-22 13:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories_of_dish`
--

CREATE TABLE `categories_of_dish` (
  `categories_id` int(100) NOT NULL,
  `categories_name` varchar(100) NOT NULL,
  `date_of_adding` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories_of_dish`
--

INSERT INTO `categories_of_dish` (`categories_id`, `categories_name`, `date_of_adding`) VALUES
(1, 'Veg Foods', '2020-10-18 15:26:12'),
(3, 'Non-Veg Foods', '2020-10-19 17:58:02'),
(4, 'South Indian', '2020-10-27 12:30:23'),
(5, 'Italian', '2020-10-27 12:30:38'),
(6, 'Sweets', '2020-10-27 12:31:22'),
(7, 'Chaines', '2020-11-03 18:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_code`
--

CREATE TABLE `coupon_code` (
  `coupon_slno` int(100) NOT NULL,
  `coupon_name` varchar(100) NOT NULL,
  `coupon_type` varchar(100) NOT NULL,
  `coupon_price` varchar(100) NOT NULL,
  `coupon_expire_date` varchar(100) NOT NULL,
  `coupon_added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon_code`
--

INSERT INTO `coupon_code` (`coupon_slno`, `coupon_name`, `coupon_type`, `coupon_price`, `coupon_expire_date`, `coupon_added_date`) VALUES
(2, 'FIRST20', 'P', '20', '2020-10-31', '2020-10-27 12:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy`
--

CREATE TABLE `delivery_boy` (
  `delivry_boy_slno` int(255) NOT NULL,
  `delivry_boy_name` varchar(255) NOT NULL,
  `delivry_boy_age` varchar(255) NOT NULL,
  `delivry_boy_email` varchar(255) NOT NULL,
  `delivry_boy_phone` varchar(255) NOT NULL,
  `delivry_boy_desp` varchar(1500) NOT NULL,
  `delivry_boy_add_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delivry_boy_migratio_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_boy`
--

INSERT INTO `delivery_boy` (`delivry_boy_slno`, `delivry_boy_name`, `delivry_boy_age`, `delivry_boy_email`, `delivry_boy_phone`, `delivry_boy_desp`, `delivry_boy_add_time`, `delivry_boy_migratio_image`) VALUES
(2, 'Sourav De', '22', 'sourav@gmail.com', '9134195796', 'He is From bankura He Serve Foods House Since 2018 , his aim is to Buy a new Car.', '2020-11-02 23:14:24', 'IMG-20200118-WA0010.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `index_image`
--

CREATE TABLE `index_image` (
  `slno` int(100) NOT NULL,
  `product_image1` varchar(100) NOT NULL,
  `product_image2` varchar(100) NOT NULL,
  `product_image3` varchar(100) NOT NULL,
  `product_image4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_image`
--

INSERT INTO `index_image` (`slno`, `product_image1`, `product_image2`, `product_image3`, `product_image4`) VALUES
(2, 'login_back1.jpg', 'login_back2.jpg', 'login_back3.jpg', 'login_back4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_details_of_user`
--

CREATE TABLE `order_details_of_user` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_per_psc_price` varchar(255) NOT NULL,
  `product_quantity` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_discount` varchar(255) NOT NULL,
  `product_discount_price` varchar(255) NOT NULL,
  `total_product_price` varchar(255) NOT NULL,
  `product_payment` varchar(255) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `land_mark` varchar(250) NOT NULL,
  `alternative_address` varchar(250) NOT NULL,
  `alternative_mobile` varchar(100) NOT NULL,
  `delivery_pincode` varchar(255) NOT NULL,
  `delivery_boy` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `value` int(100) NOT NULL,
  `date_of_order` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details_of_user`
--

INSERT INTO `order_details_of_user` (`order_id`, `user_id`, `user_email`, `user_phone`, `product_id`, `product_name`, `product_per_psc_price`, `product_quantity`, `total_price`, `product_discount`, `product_discount_price`, `total_product_price`, `product_payment`, `delivery_address`, `land_mark`, `alternative_address`, `alternative_mobile`, `delivery_pincode`, `delivery_boy`, `status`, `value`, `date_of_order`) VALUES
(73, 3, 'rkjha3246@gmail.com', '9735346714', '5', 'Mutton Biryani', '200', '1', '200', '15', '30', '170', 'Cash On Delivery(COD)', 'Banarhat Dharamsala Road', 'Teachers Colony', 'Lions Club Road', '9735346714', '735202', '2', 'Delivered', 0, '2020-11-04 05:01:51'),
(74, 3, 'rkjha3246@gmail.com', '9735346714', '7', 'Idli', '150', '1', '150', '10', '15', '135', 'Cash On Delivery(COD)', 'Banarhat Dharamsala Road', 'Teachers Colony', 'Lions Club Road', '9735346714', '735202', '0', 'Cancel', 0, '2020-11-06 15:52:34'),
(75, 3, 'rkjha3246@gmail.com', '9735346714', '7', 'Idli', '150', '1', '150', '10', '15', '135', 'Cash On Delivery(COD)', 'Banarhat Dharamsala Road', 'Teachers Colony', 'Lions Club Road', '9735346714', '735202', '2', 'Delivered', 0, '2020-11-06 15:53:47'),
(76, 1, 'rahuljha3246@gmail.com', '6296002855', '4', 'Chicken Biryani', '200', '1', '200', '10', '20', '180', 'Cash On Delivery', 'Siliguri Dagapur', 'Teachers Colony', 'siliguri', '8578968547', '734001', '0', 'Cancel', 0, '2020-11-12 04:41:23'),
(79, 1, 'rahuljha3246@gmail.com', '6296002855', '4', 'Chicken Biryani', '200', '1', '200', '10', '20', '180', 'Wallet', 'Siliguri Dagapur', 'Teachers Colony', 'siliguri', '8578968547', '734001', '0', 'Pending', 1, '2020-11-12 05:13:41'),
(80, 1, 'rahuljha3246@gmail.com', '6296002855', '4', 'Chicken Biryani', '200', '1', '200', '10', '20', '180', 'Cash On Delivery', 'Siliguri Dagapur', 'Teachers Colony', 'siliguri', '8578968547', '734001', '0', 'Pending', 1, '2020-12-16 22:49:25'),
(81, 1, 'rahuljha3246@gmail.com', '6296002855', '6', 'Panner Butter Masala', '130', '1', '130', '15', '19.5', '110.5', 'Cash On Delivery', 'Siliguri Dagapur', 'Teachers Colony', 'siliguri', '8578968547', '734001', '0', 'Pending', 1, '2020-12-16 22:49:25'),
(82, 1, 'rahuljha3246@gmail.com', '6296002855', '4', 'Chicken Biryani', '200', '1', '200', '10', '20', '180', 'Cash On Delivery', 'Siliguri Dagapur', 'Teachers Colony', 'siliguri', '8578968547', '734001', '0', 'Pending', 1, '2021-02-22 13:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_desp` varchar(10000) NOT NULL,
  `product_categories` varchar(100) NOT NULL,
  `product_full_price` varchar(100) NOT NULL,
  `product_half_price` varchar(100) NOT NULL,
  `product_discount` varchar(100) DEFAULT NULL,
  `product_image1` varchar(100) NOT NULL,
  `product_image2` varchar(100) NOT NULL,
  `product_image3` varchar(100) NOT NULL,
  `product_image4` varchar(100) NOT NULL,
  `action` int(100) NOT NULL,
  `date_of_insert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`product_id`, `product_name`, `product_desp`, `product_categories`, `product_full_price`, `product_half_price`, `product_discount`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `action`, `date_of_insert`) VALUES
(4, 'Chicken Biryani', 'This is a delicious Pakistani/Indian rice dish which is often reserved for very special occasions such as weddings, parties, or holidays such as Ramadan. It has a lengthy preparation, but the work is definitely worth it. For biryani, always use long grain rice. Basmati rice with its thin, fine grains is the ideal variety to use. Ghee is butter that has been slowly melted so that the milk solids and golden liquid have been separated and can be used in place of vegetable oil to yield a more authentic taste.', '3', '200', '80', '10', 'chicken.png', 'biryani2.png', 'biryani3.png', 'biryani3.png', 0, '2020-10-20 13:44:50'),
(5, 'Mutton Biryani', 'This is a delicious Pakistani/Indian rice dish which is often reserved for very special occasions such as weddings, parties, or holidays such as Ramadan. It has a lengthy preparation, but the work is definitely worth it. For biryani, always use long grain rice. Basmati rice with its thin, fine grains is the ideal variety to use. Ghee is butter that has been slowly melted so that the milk solids and golden liquid have been separated and can be used in place of vegetable oil to yield a more authentic taste.', '3', '200', '150', '15', 'mutton_bir1.png', 'mutton_bir2.png', 'mutton_bir3.png', 'mutton_bir4.png', 0, '2020-10-25 00:07:49'),
(6, 'Panner Butter Masala', 'Its An Indian Veg Dish and My Favorite .', '1', '130', '10', '15', 'panner_b_m1.png', 'panner_b_m2.png', 'panner_b_m3.png', 'panner_b_m4.png', 0, '2020-10-25 00:21:29'),
(7, 'Idli', 'It is a popular South Indian food.', '4', '150', '', '10', 'idli1.png', 'idli2.png', 'idli3.png', 'idli4.png', 0, '2020-11-02 01:32:14'),
(8, 'Dosha', 'It is a South Indian Food.', '4', '200', '', '25', 'dosa1.png', 'dosa2.png', 'dosa4.png', 'dosa3.png', 0, '2020-11-02 01:33:22'),
(9, 'Chicken Momos', 'It is a chaines Dish , Which is famous in whole World.', '7', '50', '', '5', 'chicken_momo1.png', 'chicken_momo2.png', 'chicken_momo3.png', 'chicken_momo1.png', 0, '2020-11-03 23:57:37'),
(10, 'Chicken Chawmin', 'It is A chaines dish , which is famous in whole world.', '7', '60', '', '10', 'chawmin1.png', 'chawmin2.png', 'chawmin3.png', 'chawmin4.png', 0, '2020-11-03 23:59:09'),
(11, 'Veg Chawmin', 'It is Also a Chaines Dish . Which is also a famous in whole world.', '7', '40', '', '10', 'veg_chawmin.png', 'veg_chawmin1.png', 'veg_chawmin2.png', 'veg_chawmin3.png', 0, '2020-11-04 00:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `slno` int(100) NOT NULL,
  `pro_id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`slno`, `pro_id`, `order_id`, `user_id`, `rating`) VALUES
(3, 5, 73, 3, '4.5'),
(4, 5, 73, 3, '4.5');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `slno` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`slno`, `status`) VALUES
(1, 'Pending'),
(2, 'On A Way'),
(3, 'Delivered'),
(4, 'Cancel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `slno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `date_of_signup` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`slno`, `name`, `email`, `phone`, `password`, `cpassword`, `date_of_signup`, `user`) VALUES
(1, 'Rahul Jha', 'rahuljha3246@gmail.com', '6296002855', 'Rahul', 'Rahul', '2020-10-13 04:17:35', ''),
(3, 'admin', 'rkjha3246@gmail.com', '123456789', 'admin', 'admin', '2020-10-13 04:24:24', 'admin'),
(5, 'Sourav De', 'sourav@gmail.com', '9134195796', 'Sourav', 'Sourav', '2020-11-02 23:39:48', 'delivery'),
(6, 'Binod Tharu', 'binod@gmail.com', '58693385874', 'Binod', 'Binod', '2020-11-12 03:15:58', ''),
(7, 'Aashima Jha', 'aashima@gmail.com', '456987712369', 'Aashima', 'Aashima', '2020-11-12 03:18:35', ''),
(8, 'Vickey Singh', 'vickey@gmail.com', '789654123', 'Vickey', 'Vickey', '2020-11-12 03:24:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `slno` int(100) NOT NULL,
  `rs` varchar(100) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`slno`, `rs`, `added_on`) VALUES
(1, '13', '2020-11-12 03:05:09'),
(6, '30', '2020-11-12 03:22:53'),
(7, '30', '2020-11-12 03:21:43'),
(8, '30', '2020-11-12 03:31:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_website`
--
ALTER TABLE `action_website`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `address_of_user`
--
ALTER TABLE `address_of_user`
  ADD PRIMARY KEY (`address_slno`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`cart_slno`);

--
-- Indexes for table `categories_of_dish`
--
ALTER TABLE `categories_of_dish`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `coupon_code`
--
ALTER TABLE `coupon_code`
  ADD PRIMARY KEY (`coupon_slno`);

--
-- Indexes for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  ADD PRIMARY KEY (`delivry_boy_slno`);

--
-- Indexes for table `index_image`
--
ALTER TABLE `index_image`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `order_details_of_user`
--
ALTER TABLE `order_details_of_user`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_website`
--
ALTER TABLE `action_website`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `address_of_user`
--
ALTER TABLE `address_of_user`
  MODIFY `address_slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `cart_slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories_of_dish`
--
ALTER TABLE `categories_of_dish`
  MODIFY `categories_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `coupon_code`
--
ALTER TABLE `coupon_code`
  MODIFY `coupon_slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  MODIFY `delivry_boy_slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `index_image`
--
ALTER TABLE `index_image`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_details_of_user`
--
ALTER TABLE `order_details_of_user`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
