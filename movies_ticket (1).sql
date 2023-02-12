-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 01:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(100) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_img` varchar(100) NOT NULL,
  `movie_certificate` varchar(100) NOT NULL,
  `movie_rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_img`, `movie_certificate`, `movie_rating`) VALUES
(1, 'Anbe Sivam', 'shivam.jpg', 'U', '8.7/10'),
(2, 'Soorarai Pottru', 'sorarai potru.jpg', 'U', '8.8/10'),
(3, 'Ghilli', 'ghilli.jpg', 'U/A', '8.1/10'),
(4, 'Thalapathi', 'thalapathy-movie.jpg', 'U/A', '8.5/10'),
(8, 'Mankatha', 'mankatha.jpg', 'U/A', '7.7/10');

-- --------------------------------------------------------

--
-- Table structure for table `selected_movie_list`
--

CREATE TABLE `selected_movie_list` (
  `select_movie_id` int(250) NOT NULL,
  `select_movie_date` varchar(200) NOT NULL,
  `select_movie_time` varchar(250) NOT NULL,
  `select_movie_actors` varchar(250) NOT NULL,
  `select_movie_director` varchar(250) NOT NULL,
  `select_movie_music_dir` varchar(250) NOT NULL,
  `click_movie_id` int(250) NOT NULL,
  `select_movie_video_link` varchar(200) NOT NULL,
  `select_movie_bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selected_movie_list`
--

INSERT INTO `selected_movie_list` (`select_movie_id`, `select_movie_date`, `select_movie_time`, `select_movie_actors`, `select_movie_director`, `select_movie_music_dir`, `click_movie_id`, `select_movie_video_link`, `select_movie_bio`) VALUES
(1, '22/2/2001', '2 hrs 40min', 'kamal hassan | Madhavan | \nKiran Rathod', 'Sundar C', 'Vidyasagar', 1, 'lPLN69KAukE', 'Two men, one young and arrogant, the other damaged - physically but not spiritually - by life, are thrown together by circumstances'),
(9, '22/2/2002', '2hrs 33min', 'Suriya | Aparna Balamurali', 'Sudha Kongara', 'G V Prakash', 2, 'fa_DIwRsa9o', ' soorarai potru is an motivational movias and also it won an national award'),
(10, '22/2/2000', '2hrs 40min', 'Vijay | Trisha | Prakash Raj', 'Dharani', 'Vidyasagar', 3, 'EtJXEmW_XNM', 'Velu, an aspiring kabaddi player, goes to Madurai to participate in a regional match, where he rescues Dhanalakshmi from Muthupandi, a powerful man keen on marrying the girl against her will.'),
(11, '5/11/1991', '2hrs 37min', 'Rajinikanth | Mammootty', 'Mani Ratnam', 'ilaiyaraja', 4, 'wA30CKor18A', ' An orphan named surya raised in a slum be friends a good crime boss named Devaraj and works for him.Their existence is threatened when a new honest district collector arrives.'),
(12, '31/8/2011', '2hrs 35min', 'Ajith | Arjun', 'Venkat Prabhu', 'Yuvan Shankar Raja', 8, 'vHESM8iR1JE', ' Vinayak,a suspended cop,helps a group of four men rob cricket betting money amounting to 500 crores INR.When it comes to splitting the amount, betrayal hits the team hard and a chasing');

-- --------------------------------------------------------

--
-- Table structure for table `sucess_theater_details`
--

CREATE TABLE `sucess_theater_details` (
  `sucess_theater_details_id` int(200) NOT NULL,
  `sucess_theater_details_day` varchar(100) NOT NULL,
  `sucess_theater_details_time` varchar(100) NOT NULL,
  `sucess_theater_details_name` varchar(100) NOT NULL,
  `sucess_theater_details_seat` varchar(100) NOT NULL,
  `sucess_theater_user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sucess_theater_details`
--

INSERT INTO `sucess_theater_details` (`sucess_theater_details_id`, `sucess_theater_details_day`, `sucess_theater_details_time`, `sucess_theater_details_name`, `sucess_theater_details_seat`, `sucess_theater_user_id`) VALUES
(1, '2022-12-25 19:17:12', '11.30AM', 'Sri Balaji cinemas', 'SECOND CLASS-K9', 1),
(6, '2022-11-20 20:32:41', '11.00AM', 'Ram Muthuram', 'FIRST CLASS-J9', 2),
(8, '2022-11-20 21:01:14', '6.00PM', 'Ram Muthuram', 'FIRST CLASS-J9', 3);

-- --------------------------------------------------------

--
-- Table structure for table `theater_details`
--

CREATE TABLE `theater_details` (
  `theater_details_id` int(200) NOT NULL,
  `theater_details_name` varchar(100) NOT NULL,
  `theater_details_address` varchar(100) NOT NULL,
  `theater_details_1st_show` varchar(100) NOT NULL,
  `theater_details_2nd_show` varchar(100) NOT NULL,
  `theater_details_3rd_show` varchar(100) NOT NULL,
  `theater_details_seat` varchar(100) NOT NULL,
  `movie_id_for_theater` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater_details`
--

INSERT INTO `theater_details` (`theater_details_id`, `theater_details_name`, `theater_details_address`, `theater_details_1st_show`, `theater_details_2nd_show`, `theater_details_3rd_show`, `theater_details_seat`, `movie_id_for_theater`) VALUES
(1, 'Ram Muthuram', 'Ram muthuram cinemas 9A/2 Madurai Road', '11.00AM', '2.30PM', '6.00PM', 'FIRST CLASS-J9', 0),
(2, 'Sri Balaji cinemas', 'Sri Balaji Cinemas ambai road 2/44', '11.30AM', '3.10PM', '7.00PM', 'SECOND CLASS-K9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_payment` varchar(100) NOT NULL,
  `user_choose_movie_id` int(200) NOT NULL,
  `user_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_payment`, `user_choose_movie_id`, `user_code`) VALUES
(1, 'vijay', 'vijay@gmail.com', 'vj', 'true', 4, 'gdyrwh'),
(2, 'guru', 'guru@gmail.com', 'g', 'true', 2, 'vteewr'),
(3, 'siva', 's@gmail.com', 'civa', 'true', 0, 'pqiqoa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `selected_movie_list`
--
ALTER TABLE `selected_movie_list`
  ADD PRIMARY KEY (`select_movie_id`);

--
-- Indexes for table `sucess_theater_details`
--
ALTER TABLE `sucess_theater_details`
  ADD PRIMARY KEY (`sucess_theater_details_id`);

--
-- Indexes for table `theater_details`
--
ALTER TABLE `theater_details`
  ADD PRIMARY KEY (`theater_details_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `selected_movie_list`
--
ALTER TABLE `selected_movie_list`
  MODIFY `select_movie_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sucess_theater_details`
--
ALTER TABLE `sucess_theater_details`
  MODIFY `sucess_theater_details_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `theater_details`
--
ALTER TABLE `theater_details`
  MODIFY `theater_details_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
