-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 07:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oec-paw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `member_id`, `created`, `type`) VALUES
(1, 12, '2022-06-16 18:39:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `artist_name` varchar(150) NOT NULL,
  `artist_image` varchar(150) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `gig_id` int(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `event` text NOT NULL,
  `number_of_sets` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created` datetime NOT NULL,
  `income` float NOT NULL,
  `income_w` int(1) NOT NULL,
  `m_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `income_id` int(11) NOT NULL,
  `total_income` float NOT NULL,
  `w_table` text NOT NULL,
  `to_id` int(20) NOT NULL,
  `amount_` float NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `full_name`, `position`, `created`, `email`, `phone_number`, `username`, `password`, `profile_pic`, `type`) VALUES
(12, 'Rene Jan Jalapit', 'Singer', '2022-06-14 09:40:00', 'renejanjalapit@gmail.com', '12312321', 'renejan', '$2y$10$DhcNAMPz/SgUvih30ZK8qucS/1M7BKoQviNi12X97ngeftGcQVKFi', '604454596.jpg', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(20) NOT NULL,
  `post_type` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  `song` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `member_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prac_songs`
--

CREATE TABLE `prac_songs` (
  `prac_id` int(20) NOT NULL,
  `pos_id` int(20) NOT NULL,
  `mems_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `setlists`
--

CREATE TABLE `setlists` (
  `setlist_id` int(10) NOT NULL,
  `g_id` int(10) NOT NULL,
  `setlist` text NOT NULL,
  `son_id` int(10) NOT NULL,
  `set_number` int(10) NOT NULL,
  `singe_id` int(10) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `singers`
--

CREATE TABLE `singers` (
  `singer_id` int(11) NOT NULL,
  `singer_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `singer_songs`
--

CREATE TABLE `singer_songs` (
  `singer_song_id` int(20) NOT NULL,
  `so_id` int(20) NOT NULL,
  `si_id` int(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sipra`
--

CREATE TABLE `sipra` (
  `sipra_id` int(10) NOT NULL,
  `sipra_description` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sipra_songs`
--

CREATE TABLE `sipra_songs` (
  `sipra_song_id` int(11) NOT NULL,
  `sipr_id` int(11) NOT NULL,
  `sipra_song_title` varchar(50) NOT NULL,
  `sipra_artist_id` int(11) NOT NULL,
  `sipra_lyrics` int(11) NOT NULL,
  `sipra_song_type` varchar(50) NOT NULL,
  `sipra_key_c` varchar(20) NOT NULL,
  `sipr_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(11) NOT NULL,
  `song_title` varchar(150) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `lyrics` text NOT NULL,
  `song_type` varchar(50) NOT NULL,
  `key_c` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `todo_id` int(20) NOT NULL,
  `w_todo` text NOT NULL,
  `todo_amount` float NOT NULL,
  `if_done` int(1) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`gig_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `prac_songs`
--
ALTER TABLE `prac_songs`
  ADD PRIMARY KEY (`prac_id`);

--
-- Indexes for table `setlists`
--
ALTER TABLE `setlists`
  ADD PRIMARY KEY (`setlist_id`);

--
-- Indexes for table `singers`
--
ALTER TABLE `singers`
  ADD PRIMARY KEY (`singer_id`);

--
-- Indexes for table `singer_songs`
--
ALTER TABLE `singer_songs`
  ADD PRIMARY KEY (`singer_song_id`);

--
-- Indexes for table `sipra`
--
ALTER TABLE `sipra`
  ADD PRIMARY KEY (`sipra_id`);

--
-- Indexes for table `sipra_songs`
--
ALTER TABLE `sipra_songs`
  ADD PRIMARY KEY (`sipra_song_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`todo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `gig_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `income_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prac_songs`
--
ALTER TABLE `prac_songs`
  MODIFY `prac_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setlists`
--
ALTER TABLE `setlists`
  MODIFY `setlist_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `singers`
--
ALTER TABLE `singers`
  MODIFY `singer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `singer_songs`
--
ALTER TABLE `singer_songs`
  MODIFY `singer_song_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sipra`
--
ALTER TABLE `sipra`
  MODIFY `sipra_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sipra_songs`
--
ALTER TABLE `sipra_songs`
  MODIFY `sipra_song_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `todo_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
