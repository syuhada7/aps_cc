-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 02:44 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cc`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_shti`
--

CREATE TABLE `file_shti` (
  `id_upload` int(11) NOT NULL,
  `no_idla` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `shti` varchar(225) CHARACTER SET utf8mb4 NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_shti`
--

INSERT INTO `file_shti` (`id_upload`, `no_idla`, `shti`, `date_create`) VALUES
(2, '6548765808', '8fc45f63a4a5ebef86d3fa020a0dd2a3.pdf', 1586527968),
(3, '4565434263', '7d62459af19cd66a351e77777a35402d.pdf', 1586528300);

-- --------------------------------------------------------

--
-- Table structure for table `file_vessel`
--

CREATE TABLE `file_vessel` (
  `id_upload` int(11) NOT NULL,
  `name_vessel` varchar(225) NOT NULL,
  `sipi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manning` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `siup` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pas_kapal` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ukur` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fish`
--

CREATE TABLE `fish` (
  `id_fish` int(11) NOT NULL,
  `no_idla` varchar(32) NOT NULL,
  `name_fish` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shti`
--

CREATE TABLE `shti` (
  `id_idla` int(11) NOT NULL,
  `no_idla` varchar(225) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `name_vessel` varchar(100) NOT NULL,
  `gt` int(11) NOT NULL,
  `catch` varchar(100) NOT NULL,
  `length` int(11) NOT NULL,
  `wpp` int(11) NOT NULL,
  `port` varchar(100) NOT NULL,
  `captain` varchar(225) NOT NULL,
  `trip` date NOT NULL,
  `until` date NOT NULL,
  `rfmo` varchar(100) NOT NULL,
  `no_rfmo` int(11) NOT NULL,
  `issf` varchar(10) NOT NULL,
  `no_issf` int(11) NOT NULL,
  `fip` varchar(5) NOT NULL,
  `area` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  `id_unik` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(1, 'Admin', 'admin@pbn.co.id', 'Jellyfish.jpg', '$2y$10$gDhYwaEjXqn/eX2CKquCdO9FwZKYGDUsIteYwbSc/GwCdpUcJGT16', 1, 1, 1584743444),
(2, 'Daniel', 'daniel@pbn.co.id', 'newuser.jpg', '$2y$10$ddsf1cOKgvu/OkIM0k5AmO1KzG83rLnn5NTuX.eiiyNNkm2z8Ym1e', 3, 1, 1584743522),
(10, 'Henny', 'henny@pbn.co.id', 'default.png', '$2y$10$y7eVeQagz5ymFlgy9fUffOXYpCytau2q0nBQVWyRY.q69OhKxJkC6', 2, 1, 1584860812),
(18, 'Hada', 'syuhada@pbn.co.id', 'default.png', '$2y$10$08vgNqZmUjKsHKJiu.jE6ud6W9oRm94k2znzJiKYp8ZNPb/cs/I2C', 1, 1, 1588064597);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(9, 1, 3),
(11, 2, 2),
(36, 2, 4),
(37, 2, 5),
(38, 2, 7),
(39, 3, 2),
(40, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Vessel'),
(5, 'SHTI'),
(7, 'Fish'),
(8, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Dasboard', 'user', 'fas fa-fw fa-tachometer-alt', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(11, 4, 'Data Vessel', 'vessel', 'fas fa-fw fa-ship', 1),
(13, 5, 'Data SHTI', 'shti', 'far fa-fw fa-clipboard', 1),
(15, 7, 'Data Fish', 'fish', 'fas fa-fw fa-fish', 1),
(16, 2, 'My Profile', 'user/profile', 'fas fa-fw fa-user', 1),
(17, 8, 'Record Vessel', 'member', 'fas fa-fw fa-ship', 1),
(18, 8, 'Record SHTI', 'member/r_shti', 'far fa-fw fa-clipboard', 1),
(19, 8, 'Record Fish', 'member/r_fish', 'fas fa-fw fa-fish', 1),
(20, 1, 'User', 'admin/user', 'fas fa-fw fa-user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `token` varchar(225) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(7, 'syuhada@pbn.co.id', 'xwrz/3QO3K9GdXGD1Av3grLJ+PMzlroFWOvGF2/L5/Q=', 1588064597);

-- --------------------------------------------------------

--
-- Table structure for table `vessel`
--

CREATE TABLE `vessel` (
  `id_vessel` int(11) NOT NULL,
  `name_vessel` varchar(225) NOT NULL,
  `gt` int(11) NOT NULL,
  `nt` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `catch` varchar(225) NOT NULL,
  `regis` varchar(225) NOT NULL,
  `port` varchar(225) NOT NULL,
  `place` varchar(225) NOT NULL,
  `year` date NOT NULL,
  `base` varchar(225) NOT NULL,
  `rfmo` varchar(100) NOT NULL,
  `no_rfmo` varchar(100) NOT NULL,
  `issf` varchar(10) NOT NULL,
  `no_issf` varchar(100) NOT NULL,
  `tvr` date NOT NULL,
  `skiper` date NOT NULL,
  `owner` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `no_siup` varchar(100) NOT NULL,
  `no_sipi` varchar(100) NOT NULL,
  `valid_sipi` date NOT NULL,
  `until_sipi` date NOT NULL,
  `status_sipi` varchar(50) NOT NULL,
  `id_unik` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vessel`
--

INSERT INTO `vessel` (`id_vessel`, `name_vessel`, `gt`, `nt`, `length`, `catch`, `regis`, `port`, `place`, `year`, `base`, `rfmo`, `no_rfmo`, `issf`, `no_issf`, `tvr`, `skiper`, `owner`, `address`, `no_siup`, `no_sipi`, `valid_sipi`, `until_sipi`, `status_sipi`, `id_unik`) VALUES
(4, 'KM. Bahari Nusantara', 50, 40, 100, 'Pole And Line', '984787297939898', '928738978320982', 'Muara karang', '2017-06-13', 'Jakarta', 'IOTC', '9389798820', 'UVI', '0808730979', '2020-04-06', '2020-04-06', 'H. Jaja', 'Kp. Muara Gembong', '23452346534', '34554635654', '2020-04-05', '2020-04-17', 'ALL', 'f8e6ffacf472be46c5e11ec6fd8d672c'),
(6, 'KM. Jaya Bersama', 70, 64, 150, 'Pole And Line', '8707678965675', '9875875465875', 'Angke', '2018-06-13', 'Jakarta', 'IOTC', '87589759875', 'UVI', '47696950770', '2020-04-01', '2020-04-03', 'Kirsono', 'Dadap', '2147483647334', '214744532453', '2020-04-12', '2020-04-18', 'ALL', '41beb01ce65f69e4d2c3f550747b7f65'),
(9, 'KM. Bersama Karunia', 30, 64, 150, 'Pole And Line', '23435265473545', '4235624562346', 'Cilacap', '2020-04-13', 'Cilacap', 'IOTC', '13242345345234', 'UVI', '2345623465234', '2020-04-13', '2020-04-13', 'Pangaben', 'Cilacap', '4534634252423', '3451342345234', '2020-04-19', '2020-04-25', 'ALL', 'bb1498d8db4cfabb00ff875f152d9dcf'),
(11, 'KM. Jaya karunia', 80, 80, 200, 'Pole And Line', '1235425234523452345', '321521351234513425', 'Cilacap', '2020-04-21', 'Cilacap', 'IOTC', '25343456345654', 'UVI', '3124523456234', '2020-04-10', '2020-04-10', 'Vion', 'Cilacap', '45634565423453', '345623456234523', '2020-04-23', '2020-04-22', 'ALL', '3b93fe8d5ddd2eafe678c145cf177095'),
(15, 'KM. Jaya Berlian', 20, 64, 100, 'Pole And Line', '23423452346436234', '5243452345234345', 'Cilacap', '2020-04-15', 'Jakarta', 'IOTC', '2534523452345', 'UVI', '345234523454', '2020-04-10', '2020-04-17', 'Mama', 'Jakarta', '454345345452224', '2342345234653', '2020-04-26', '2020-04-30', 'ALL', '11a8346a6f7bd0d08959ef779be84679'),
(16, 'KM. Bahari Nesama', 80, 80, 150, 'Pole And Line', '2342534523452342', '345234523452345', 'Batam', '2020-04-14', 'Batam', 'IOTC', '243234513425125', 'UVI', '23412341324125', '2020-04-18', '2020-04-18', 'Kirsono', 'Cilacap', '2455463456345', '4534563456345', '2020-04-16', '2020-04-18', 'ALL', 'ffbc8ba41fb5fb2f4c24e7bce649bbf0'),
(17, 'KM. Bahari Nana', 20, 20, 50, 'Pole And Line', '838429482983452', '870842908452534', 'Muara Dadap', '2020-04-14', 'Jakarta', 'IOTC', '234523452', 'UVI', '2342345234', '2020-04-19', '2020-04-19', 'Tarso', 'Jakarta', '82049534985290452', '09256093488223452', '2020-04-14', '2020-04-29', 'ALL', '42003cd7a870f3ecc455571b22452996');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_shti`
--
ALTER TABLE `file_shti`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indexes for table `file_vessel`
--
ALTER TABLE `file_vessel`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id_fish`);

--
-- Indexes for table `shti`
--
ALTER TABLE `shti`
  ADD PRIMARY KEY (`id_idla`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vessel`
--
ALTER TABLE `vessel`
  ADD PRIMARY KEY (`id_vessel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_shti`
--
ALTER TABLE `file_shti`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `file_vessel`
--
ALTER TABLE `file_vessel`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id_fish` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shti`
--
ALTER TABLE `shti`
  MODIFY `id_idla` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vessel`
--
ALTER TABLE `vessel`
  MODIFY `id_vessel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
