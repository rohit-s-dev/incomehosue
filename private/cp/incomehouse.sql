-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 09:20 PM
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
-- Database: `incomehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `itr_reg`
--

CREATE TABLE `itr_reg` (
  `itr_reg_id` int(11) NOT NULL,
  `itr_retailer_name` varchar(255) NOT NULL,
  `itr_pan_number` varchar(255) NOT NULL,
  `itr_dob` varchar(255) NOT NULL,
  `itr_first_name` varchar(255) NOT NULL,
  `itr_middle_name` varchar(255) NOT NULL,
  `itr_last_name` varchar(255) NOT NULL,
  `itr_pan_number_fill` varchar(255) NOT NULL,
  `itr_vill_building` varchar(255) NOT NULL,
  `itr_area_locality` varchar(255) NOT NULL,
  `itr_city_district` varchar(255) NOT NULL,
  `itr_state` varchar(255) NOT NULL,
  `itr_country` varchar(255) NOT NULL,
  `itr_email` varchar(255) NOT NULL,
  `itr_mobile_number` varchar(255) NOT NULL,
  `itr_aadhar` varchar(255) NOT NULL,
  `itr_deduction` varchar(255) NOT NULL,
  `itr_acc_number` varchar(255) NOT NULL,
  `itr_branch` varchar(255) NOT NULL,
  `itr_ifsc` varchar(255) NOT NULL,
  `itr_bank_name` varchar(255) NOT NULL,
  `itr_category` varchar(255) NOT NULL,
  `itr_filling_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itr_reg`
--

INSERT INTO `itr_reg` (`itr_reg_id`, `itr_retailer_name`, `itr_pan_number`, `itr_dob`, `itr_first_name`, `itr_middle_name`, `itr_last_name`, `itr_pan_number_fill`, `itr_vill_building`, `itr_area_locality`, `itr_city_district`, `itr_state`, `itr_country`, `itr_email`, `itr_mobile_number`, `itr_aadhar`, `itr_deduction`, `itr_acc_number`, `itr_branch`, `itr_ifsc`, `itr_bank_name`, `itr_category`, `itr_filling_date`) VALUES
(1, 'sunny', 'test', '2019-01-15', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'cheeko.256@gmail.com', '7779834191', 'test', 'loan', 'test', 'test', 'test', 'test', 'business_holder', '2019-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `msme_reg`
--

CREATE TABLE `msme_reg` (
  `msme_id` int(11) NOT NULL,
  `msme_ret_name` varchar(255) NOT NULL,
  `msme_firmname` varchar(255) NOT NULL,
  `msme_applicant_name` varchar(255) NOT NULL,
  `msme_mob_numb` varchar(255) NOT NULL,
  `msme_aadhar_numb` varchar(255) NOT NULL,
  `msme_pan_card` varchar(255) NOT NULL,
  `msme__email_id` varchar(255) NOT NULL,
  `msme_address` varchar(255) NOT NULL,
  `msme_aadhar_jpeg` text NOT NULL,
  `msme_pan_jpeg` text NOT NULL,
  `msme_date_fill` date NOT NULL,
  `msme_capital` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msme_reg`
--

INSERT INTO `msme_reg` (`msme_id`, `msme_ret_name`, `msme_firmname`, `msme_applicant_name`, `msme_mob_numb`, `msme_aadhar_numb`, `msme_pan_card`, `msme__email_id`, `msme_address`, `msme_aadhar_jpeg`, `msme_pan_jpeg`, `msme_date_fill`, `msme_capital`) VALUES
(1, 'sunny', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'test', 'khabaraia(ENG).jpg', 'exc-01.png', '2019-01-09', 'test'),
(2, 'sunny', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'test', 'khabaraia(ENG)-01.jpg', 'khabaraia(y)-01.png', '2019-01-09', 'test'),
(3, 'sunny', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'test', '200(ENG)RED.png', 'khabaraia(ENG)-01.jpg', '2019-01-09', 'test'),
(4, 'sunny', 'test', 'test', '7779834191', 'test', 'test', 'cheeko.256@gmail.com', 'Nagwan, janipur, phulwarisharif\r\nNear punjab national bank', 'khabaraia-01.jpg', 'khabaraia(red).jpg', '2019-01-09', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `proprietorship_form`
--

CREATE TABLE `proprietorship_form` (
  `prop_id` int(11) NOT NULL,
  `prop_reatiler_name` varchar(255) NOT NULL,
  `prop_firm_name` varchar(255) NOT NULL,
  `prop_proprietorship_name` varchar(255) NOT NULL,
  `prop_aadhar_number` varchar(255) NOT NULL,
  `prop_pan_number` varchar(255) NOT NULL,
  `prop_ward_no` varchar(255) NOT NULL,
  `prop_circle_no` varchar(255) NOT NULL,
  `prop_holiding_no` varchar(255) NOT NULL,
  `prop_mobile_no` varchar(255) NOT NULL,
  `prop_email_id` varchar(255) NOT NULL,
  `prop_aadhar_file` varchar(255) NOT NULL,
  `prop_pan_card_file` varchar(255) NOT NULL,
  `prop_rent_agreement` varchar(255) NOT NULL,
  `prop_shop_banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proprietorship_form`
--

INSERT INTO `proprietorship_form` (`prop_id`, `prop_reatiler_name`, `prop_firm_name`, `prop_proprietorship_name`, `prop_aadhar_number`, `prop_pan_number`, `prop_ward_no`, `prop_circle_no`, `prop_holiding_no`, `prop_mobile_no`, `prop_email_id`, `prop_aadhar_file`, `prop_pan_card_file`, `prop_rent_agreement`, `prop_shop_banner`) VALUES
(1, '', 'xcbxb', 'xbxcb', 'xcbxcb', 'cxbxcb', 'xcbcxb', 'xcbcb', 'cxbxcb', 'cbxcxcb', 'cbxcb@gmail.com', '', '', '', ''),
(2, '', 'sgdvxcb', 'xcbxcb', 'xcbxcbxc', 'cxbxcb', 'xcbxcb', 'xcbxcb', 'xcbxcb', 'xcbxc', 'cxbxcbxcb@gmalil.com', 'byp-fav.png', '', '', ''),
(3, '', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test@gmail.com', '', '', '', ''),
(4, '', 'fhdf', 'dfhdf', 'hdfhdf', 'fdhdf', 'dfhdfh', 'hdfh', 'dfhfdh', '07677521527', 'rohiysagar.256@gmail.com', '', '', '', ''),
(5, '', 'vncv', 'vcnvx', 'xvnx', 'xvnxv', 'vn', 'nxvnxv', 'xvnxvn', 'xvnxvn', 'prarambhclassesindia@gmail.com', '', '', '', ''),
(6, 'sunny', 'trst', 'trst', 'trst', 'trst', 'trst', 'trst', 'trst', '07779 834191', 'rohiysagar.256@gmail.com', '', '', '', ''),
(7, 'sunny', 'fgsdg', 'sdgsd', 'sdg', 'sg', 'sdg', 'sgsg', 'sdgsdg', '+917654610275', 'prarambhclassesindia@gmail.com', '', '', '', ''),
(8, 'sunny', 'sxdg', 'sdg', 'sdg', 'sdgsdg', 'sdgs', 'sdg', 'dgsd', 'dsgsgdg', 'gsgsg@gmail.com', '', '', '', ''),
(9, 'sunny', 'sxdg', 'sdg', 'sdg', 'sdgsdg', 'sdgs', 'sdg', 'dgsd', 'dsgsgdg', 'gsgsg@gmail.com', '', '', '', ''),
(10, 'sunny', 'xcv', 'xb', 'xcbx', 'xb', 'xb', 'xb', 'x', '07779 834191', 'rohiysagar.256@gmail.com', '', '', '', ''),
(11, 'sunny', 'xbx', 'bx', 'xb', 'cxb', 'xb', 'xcb', 'xb', '+917654610275', 'prarambhclassesindia@gmail.com', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_form`
--

CREATE TABLE `sign_up_form` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_filling` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trademark_comp_reg`
--

CREATE TABLE `trademark_comp_reg` (
  `id` int(11) NOT NULL,
  `ret_name` varchar(255) NOT NULL,
  `company_cert` text NOT NULL,
  `company_pan` int(11) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `logo_file` int(11) NOT NULL,
  `fill_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trademark_indi_reg`
--

CREATE TABLE `trademark_indi_reg` (
  `id` int(11) NOT NULL,
  `ret_name` varchar(255) NOT NULL,
  `aadhar_number` varchar(255) NOT NULL,
  `pan_number` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `logo_file_ind` text NOT NULL,
  `fill_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_number` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_img` text NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystring22',
  `user_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_firstname`, `user_lastname`, `user_pwd`, `user_number`, `user_email`, `user_role`, `user_img`, `randSalt`, `user_date`) VALUES
(15, 'rohit', 'Rohit', 'Sagar', '*0', '7779834191', 'rohitsagar.256@gmail.com', 'admin', '', '$2y$10$iusesomecrazystring22', '2018-12-07'),
(30, 'sunny', 'sagar', 'sa', '$2y$10$oe/4VbV1.Ik6I9biSKPfduBPGCwyYmKDwZt0k3sckveaJQ86vCLFW', '1234567891', 'sunny@gmail.com', 'admin', '', '$2y$10$iusesomecrazystring22', '2018-12-07'),
(31, 'anikesh_kumar', 'Anikesh', 'Kumar', '$2y$10$9sL8Wjk5R4TsPW.51hRh7OX.6Kap6mMWf1ewwd6K/2EdLViWRmnxe', '7779834191', 'anikesh@gmail.com', 'admin', '', '$2y$10$iusesomecrazystring22', '2018-12-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itr_reg`
--
ALTER TABLE `itr_reg`
  ADD PRIMARY KEY (`itr_reg_id`);

--
-- Indexes for table `msme_reg`
--
ALTER TABLE `msme_reg`
  ADD PRIMARY KEY (`msme_id`);

--
-- Indexes for table `proprietorship_form`
--
ALTER TABLE `proprietorship_form`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `sign_up_form`
--
ALTER TABLE `sign_up_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trademark_indi_reg`
--
ALTER TABLE `trademark_indi_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itr_reg`
--
ALTER TABLE `itr_reg`
  MODIFY `itr_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `msme_reg`
--
ALTER TABLE `msme_reg`
  MODIFY `msme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proprietorship_form`
--
ALTER TABLE `proprietorship_form`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sign_up_form`
--
ALTER TABLE `sign_up_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trademark_indi_reg`
--
ALTER TABLE `trademark_indi_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
