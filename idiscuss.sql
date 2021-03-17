-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 05:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(1, 'C', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions.', '2020-10-24 07:28:26'),
(2, 'CPP', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\".', '2020-10-24 07:28:55'),
(3, 'Java', 'Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', '2020-10-24 07:29:18'),
(4, 'Python', 'Python is an interpreted, high-level and general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace', '2020-10-24 07:29:41'),
(5, 'PHP', 'PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.', '2020-10-24 07:30:03'),
(6, 'Javascript', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-or', '2020-10-24 07:31:32'),
(7, 'HTML', 'Hypertext Markup Language is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.', '2020-10-24 07:32:00'),
(8, 'CSS', 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', '2020-10-24 07:32:22'),
(9, 'JQuery', 'jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax. It is free, open-source software using the permissive MIT License. As of May 2019, jQuery is used by 73% of t', '2020-10-24 07:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'gffcgfvgbhb', 3, 1, '2020-11-01 20:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `thread_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `thread_time`) VALUES
(3, 'rupali', 'f,wmf,mds', 1, 5, '2020-10-24 15:30:09'),
(4, 'rupali', 'f,wmf,mds', 1, 5, '2020-10-24 15:31:35'),
(5, 'rupao', 'nbfmbna\r\n', 3, 5, '2020-10-24 15:51:34'),
(6, 'mnbmbd', 'nbn b', 3, 5, '2020-10-24 15:51:46'),
(7, 'mnbmbd', 'nbn b', 3, 5, '2020-10-24 15:55:15'),
(8, 'mnbmbd', 'nbn b', 3, 5, '2020-10-24 15:55:22'),
(9, 'mnbmbd', 'nbn b', 3, 5, '2020-10-24 15:55:51'),
(10, 'mnbmbd', 'nbn b', 3, 5, '2020-10-24 15:56:52'),
(11, 'hjhjjhjb', 'jgjhjghfghfhfh', 2, 1, '2020-10-26 16:27:27'),
(12, 'hbh', 'ghbhbhb', 1, 1, '2020-11-01 20:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `srno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`srno`, `username`, `user_password`, `timestamp`) VALUES
(1, 'Rupali', '$2y$10$aMieqNCFfZKi5mZRudxFf.tRUgrexd.J6h9p..rmvsn.AEWyfHQ36', '2020-09-17 17:22:19'),
(2, 'Abhi', '$2y$10$WSYmYxuazQw2XCq9MLQ5IOVHcETpvxlFW8pag7FQ.bHGx07Vb0MbK', '2020-09-17 17:34:43'),
(3, 'ru', '$2y$10$9pnvvNjqOOBjvXnWlqBnDe7keTh2aC9Qpi5Fu8Q4EYdnzDzpl3fyW', '2020-09-24 11:42:29'),
(4, 'sti', '$2y$10$HOv4xbuF/O693ek6V1wWXO4RmgTIUTTjvgcvq9iV7AMUxhsiUhAyu', '2020-09-24 11:45:36'),
(5, 'abc', '$2y$10$ybkq1.aAwDBofI15n7BkNeAWJyFH9hlK14yk0KYI/pB8SZ0eeXWLy', '2020-09-24 12:11:33'),
(6, 'pqr', '$2y$10$9MASxypVnSV2sPjV6NhXy.jBulr9Dmn1xi2aW2M5tHdlxxII0SjB2', '2020-09-24 12:44:50'),
(7, 'r', '$2y$10$gx.uRQBGBuC9WuyjQy6TDeD8428ZcyeKKnlQQWDWD7XLR3Ziwhewm', '2020-10-24 15:09:32'),
(8, 'uyt', '$2y$10$VSery4hhw99THzdB07cMnuK.tweViFCVjkfZwbCRcwnXG8Cwol2Ly', '2020-11-01 20:41:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
