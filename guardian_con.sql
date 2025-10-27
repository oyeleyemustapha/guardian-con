-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2025 at 05:54 PM
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
-- Database: `guardian_con`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`) VALUES
(1, '2347012337923', 'adsales@guardian.ng');

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(300) NOT NULL,
  `oldname` varchar(300) NOT NULL,
  `newname` varchar(300) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `reasons` varchar(300) DEFAULT NULL,
  `type` enum('Change of Name','Confirmation of Name') NOT NULL,
  `note` text DEFAULT NULL,
  `proof` text NOT NULL,
  `status` enum('Published','Review','Cancelled') NOT NULL,
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp(),
  `processed_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answers`) VALUES
(1, 'What is the first step required before publication?', '<p>The initial step is to obtain the necessary legal document. For a Change of Name, you generally need an Affidavit for Change of Name from a court. If the change is due to marriage, a Marriage Certificate is required instead.</p>'),
(2, 'What documents do I need to submit to facilitate the publication?', '<p>You will typically submit the Old Name, New Name, and a copy of the supporting legal document, which is either your Sworn Affidavit or your Marriage Certificate.</p>'),
(3, 'What is a Confirmation of Name and what is required for it?', '<p>A Confirmation of Name is a public notice used to officially state that one person is the same individual bearing slightly different names across various documents. For this, you would generally need a Court Affidavit confirming that the name variants belong to the same person.</p>'),
(4, 'How long does the submission and verification process take?', '<p>The process (submitting details, verifying the draft, and making payment) can often be completed online or through an agent in a short amount of time. However, to meet the publication deadline, submission and payment usually need to be completed at least one day before the scheduled publication date.</p>'),
(5, 'What are the specific days the Guardian Newspaper publishes Change of Name announcements?', '<p>The Guardian Newspaper typically publishes Change of Name and Confirmation of Name announcements on Wednesdays and Saturdays.</p>'),
(6, 'How will I receive proof of my publication?', '<p>You should purchase a copy of the newspaper on the day your notice is scheduled to run. Most agents that facilitate the service will also send you a confirmation message with a digital proof of publication (a scanned copy of the page).</p>'),
(7, 'What happens if my name has an error in the publication?', '<p>If the error is due to a mistake by the newspaper or the agent, a free re-publication of the corrected notice should be processed for you. If the error was in the details you submitted, a fee may apply for a new publication.</p>'),
(8, 'What is the current estimated cost to publish a Change of Name in the Guardian Newspaper?', '<p>The price can vary slightly, but the estimated cost to publish a classified Change of Name notice in the Guardian Newspaper is typically in the range of NGN 6,800 to NGN 7,000. Please verify the exact current price when booking your advert.</p>'),
(9, 'Does the publication fee include the cost of the Affidavit?', '<p>No, the publication fee only covers the cost of printing your announcement in the newspaper. The cost of obtaining the legal documents (Affidavit or Marriage Certificate) is a separate expense to be covered by the applicant.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(300) NOT NULL,
  `amount_paid` float NOT NULL,
  `status` enum('Pending','Paid','Cancelled') NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `step` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `step`, `title`, `description`) VALUES
(1, 1, 'Fill Your information', '<p>Provide your current and new name, along with any required documentation.\r\n</p>'),
(2, 2, 'Confirm Your Information\r\n', '<p>Provide your current and new name, along with any required documentation.</p>\r\n\r\n'),
(3, 3, 'Review & Approve', '<p>Provide your current and new name, along with any required documentation.</p>'),
(4, 4, 'Publication', '<p>Provide your current and new name, along with any required documentation.</p>\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `type` enum('Administrator','Sales') NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
