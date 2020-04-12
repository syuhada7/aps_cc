-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 08:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `name_fish` varchar(225) NOT NULL,
  `photo` varchar(225) CHARACTER SET utf8 NOT NULL,
  `qty` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fish`
--

INSERT INTO `fish` (`id_fish`, `name_fish`, `photo`, `qty`, `date_create`) VALUES
(4, 'Big Eye', '6496da5f6889aa99318999448ec3a533.jpg', 340, 1586500416),
(5, 'Albacore', '5251b1fa5972d6b5141b1eebd4ca0ade.jpg', 100, 1586506349),
(6, 'Skip Jack', '4ac601e1b3a39eda9f1fa298914ca023.jpg', 0, 1586533732),
(7, 'Yellow Fin', '219fe5be8dba1c555dd6b7885e793410.jpg', 0, 1586535466);

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
  `species` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `fip` varchar(5) NOT NULL,
  `area` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  `id_unik` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shti`
--

INSERT INTO `shti` (`id_idla`, `no_idla`, `supplier`, `name_vessel`, `gt`, `catch`, `length`, `wpp`, `port`, `captain`, `trip`, `until`, `rfmo`, `no_rfmo`, `issf`, `no_issf`, `species`, `qty`, `fip`, `area`, `note`, `id_unik`) VALUES
(1, '4565434263', 'CV. Barakah', 'Kp. Bahari Nusantara', 50, 'Pole And Line', 100, 57, '928738978320982', 'H. Jaja', '2020-04-05', '2020-04-11', 'IOTC', 2147483647, 'IMO', 808730979, 'Big Eye', 120, 'YES', 'Muara Dadas', 'OK', '19d848a1c8919c6f45f82151812e903f'),
(2, '6548765808', 'CV. Lancar Jaya', 'Kp. Sejahtera Bersama', 20, 'Pole And Line', 100, 57, '879609879877676', 'Kirman', '2020-04-05', '2020-04-11', 'IOTC', 2147483647, 'UVI', 2147483647, 'Big Eye', 120, 'N/A', 'Pulau Merdeka', 'OK', '3db4f3fae1794de2a79bc9e5b0abc58e'),
(4, '5634919834985', 'CV. Bersama', 'Kp. Jaya Bersama', 70, 'Pole And Line', 150, 57, '243676586752457', 'Tarsono', '2020-04-12', '2020-04-18', 'IOTC', 2147483647, 'UVI', 2147483647, 'Big Eye', 100, 'N/A', 'Pulau Bintang', 'OK', '80822838ab6b483b124c79de54532070'),
(5, '12324236357', 'Baba', 'Kp. Mutiara Berkah', 30, 'Pole And Line', 150, 71, '243676586752457', 'Kardi', '2020-04-05', '2020-04-11', 'IOTC', 2147483647, 'UVI', 2147483647, 'Albacore', 100, 'YES', 'Pulau Merdeka', 'ok', 'd41d8cd98f00b204e9800998ecf8427e');

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
(1, 'Admin', 'admin.pbn@gmail.com', 'Jellyfish.jpg', '$2y$10$gDhYwaEjXqn/eX2CKquCdO9FwZKYGDUsIteYwbSc/GwCdpUcJGT16', 1, 1, 1584743444),
(2, 'Daniel', 'daniel.pbn@gmail.com', 'newuser.jpg', '$2y$10$ddsf1cOKgvu/OkIM0k5AmO1KzG83rLnn5NTuX.eiiyNNkm2z8Ym1e', 2, 1, 1584743522),
(9, 'Syuhada', 'syuhada.pbn@gmail.com', 'pas photo.jpg', '$2y$10$iSJY3J4vIX6FquqyO/Gsdu3pGxc3MAYRUQZyh9s6vR1dhzrkTnxva', 1, 1, 1584859798),
(10, 'Henny', 'Henny.pbn@gmail.com', 'default.png', '$2y$10$y7eVeQagz5ymFlgy9fUffOXYpCytau2q0nBQVWyRY.q69OhKxJkC6', 3, 1, 1584860812);

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
(10, 1, 2),
(11, 2, 2),
(12, 3, 4),
(14, 3, 5),
(16, 3, 2),
(18, 3, 7),
(32, 1, 5),
(34, 1, 7),
(35, 1, 4);

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
(7, 'Fish');

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
(2, 'Member'),
(3, 'CC');

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
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(11, 4, 'Data Vessel', 'vessel', 'fas fa-fw fa-ship', 1),
(13, 5, 'Data SHTI', 'shti', 'far fa-fw fa-clipboard', 1),
(15, 7, 'Data Fish', 'fish', 'fas fa-fw fa-fish', 1);

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

INSERT INTO `vessel` (`id_vessel`, `name_vessel`, `gt`, `nt`, `length`, `catch`, `regis`, `port`, `place`, `year`, `base`, `rfmo`, `no_rfmo`, `issf`, `no_issf`, `owner`, `address`, `no_siup`, `no_sipi`, `valid_sipi`, `until_sipi`, `status_sipi`, `id_unik`) VALUES
(4, 'Kp. Bahari Nusantara', 50, 40, 100, 'Pole And Line', '984787297939898', '928738978320982', 'Muara karang', '2017-06-13', 'Jakarta', 'IOTC', '9389798820', 'UVI', '0808730979', 'H. Jaja', 'Kp. Muara Gembong', '23452346534', '34554635654', '2020-04-05', '2020-04-17', 'ALL', '3a97aa7efb214a270852810fbe96e36c'),
(5, 'Kp. Sejahtera Bersama', 20, 40, 100, 'Pole And Line', '4643756765745', '5685673452457', 'Muara Dadap', '2018-06-19', 'Jakarta', 'IOTC', '67456734522', 'UVI', '42576345625', 'H.Pardi', 'Bekasi', '4343453466', '346546234632', '2020-01-01', '2020-05-13', 'ALL', '58df11ccf063abe4820f662edbb7ce39'),
(6, 'Kp. Jaya Bersama', 70, 64, 150, 'Pole And Line', '8707678965675', '9875875465875', 'Angke', '2018-06-13', 'Jakarta', 'IOTC', '87589759875', 'UVI', '47696950770', 'Kirsono', 'Dadap', '2147483647334', '214744532453', '2020-04-12', '2020-04-18', 'ALL', '9c92dfe1335078758896582724f0dd12'),
(7, 'Kp. Mutiara Berkah', 30, 30, 150, 'Pole And Line', '75545245734575472', '5427654734572457', 'Muara karang', '2018-10-31', 'Jakarta', 'IOTC', '2452345646', 'UVI', '2432456234', 'Suryana', 'Jakarta', '5324532456234', '6245245332443', '2020-04-12', '2020-04-18', 'ALL', 'c709494963a6cf5937515333ed1ccb8a'),
(8, 'Kp. Kami Berjaya', 80, 80, 200, 'Pole And Line', '4253476585686437', '', 'Batam', '2019-06-18', 'Batam', 'IOTC', '24523563574', 'UVI', '52346536236', 'Sirait', 'Batam', '452342345435', '5635452346342', '2020-04-12', '2020-04-23', 'ALL', 'f3be217ebaffca900004f56f788d49b6'),
(9, 'Kp. Bersama Karunia', 30, 64, 150, 'Pole And Line', '23435265473545', '4235624562346', 'Cilacap', '2020-04-13', 'Cilacap', 'IOTC', '13242345345234', 'UVI', '2345623465234', 'Pangaben', 'Cilacap', '4534634252423', '3451342345234', '2020-04-19', '2020-04-25', 'ALL', '7cdc2870b146ef07d92e01879a823579'),
(10, 'Kp. Bahari Nagari', 30, 30, 100, 'Pole And Line', '213425346523544', '23453462346234', 'Batam', '2020-04-07', 'Batam', 'IOTC', '2343452352342', 'UVI', '345234352355', 'Vivi', 'Batam', '32453452345234', '456456544345', '2020-04-19', '2020-04-30', 'ALL', '09297553403ec2cce4cb9e9a5b3e21e6'),
(11, 'Kp. Jaya karunia', 80, 80, 200, 'Pole And Line', '1235425234523452345', '321521351234513425', 'Cilacap', '2020-04-21', 'Cilacap', 'IOTC', '25343456345654', 'UVI', '3124523456234', 'Vion', 'Cilacap', '45634565423453', '345623456234523', '2020-04-23', '2020-04-22', 'ALL', 'c36aed91875284d2433dffdfc531b79d'),
(12, 'Kp. Sejahtera Berkah', 30, 40, 100, 'Pole And Line', '34524636547455435', '2546234623463464', 'Angke', '2020-04-15', 'Jakarta', 'IOTC', '234234654654', 'UVI', '32463462346', 'Cici', 'Jakarta', '435546345634543', '45634562346234', '2020-04-23', '2020-04-29', 'ALL', 'a2912ee672f0ea0ff74ee1842f2c36dc'),
(13, 'Kp. Kami Berkah', 80, 80, 200, 'Pole And Line', '6745673457658363', '4736756745673735', 'Muara Dadap', '2020-04-22', 'Jakarta', 'IOTC', '4534535424563', 'UVI', '345456254634', 'Andrea', 'Jakarta', '34523452345234', '24532453425235', '2020-04-17', '2020-04-24', 'ALL', '1d300623b06f633c86dd58d1ac539461'),
(14, 'Kp. Mutiara Berlian', 50, 64, 150, 'Pole And Line', '2345234623462346', '234623463462354', 'Angke', '2020-04-21', 'Cilacap', 'IOTC', '23423462346234', 'UVI', '2453513451431', 'Padang', 'cilacap', '21474836472342', '21234534523452', '2020-04-30', '2020-05-02', 'ALL', '84dbe86c5da5e6a99a4fded86a409777'),
(15, 'Kp. Jaya Berlian', 20, 64, 100, 'Pole And Line', '23423452346436234', '5243452345234345', 'Cilacap', '2020-04-15', 'Jakarta', 'IOTC', '2534523452345', 'UVI', '345234523454', 'Mama', 'Jakarta', '454345345452224', '2342345234653', '2020-04-26', '2020-04-30', 'ALL', '41421c6ff8d2c29af666abe841b3d499'),
(16, 'Kp. Bahari Nesama', 80, 80, 150, 'Pole And Line', '2342534523452342', '345234523452345', 'Batam', '2020-04-14', 'Batam', 'IOTC', '243234513425125', 'UVI', '23412341324125', 'Kirsono', 'Cilacap', '2455463456345', '4534563456345', '2020-04-16', '2020-04-18', 'ALL', '98fffa2b6d8c11aa667f15657eecbca1'),
(17, 'Kp. Bahari Nana', 20, 20, 50, 'Pole And Line', '838429482983452', '870842908452534', 'Muara Dadap', '2020-04-14', 'Jakarta', 'IOTC', '234523452', 'UVI', '2342345234', 'Tarso', 'Jakarta', '82049534985290452', '09256093488223452', '2020-04-14', '2020-04-29', 'ALL', '286671fec4c9ad311300f929dfe1569d');

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
  MODIFY `id_fish` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shti`
--
ALTER TABLE `shti`
  MODIFY `id_idla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vessel`
--
ALTER TABLE `vessel`
  MODIFY `id_vessel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
