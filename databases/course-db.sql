-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2024 pada 17.31
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-course-db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$0VeUqSdwnpkvx0ult19W1OxYeWNvDDKmWQV6W4J1KJg1JqalCrQnC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `durasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `judul`, `deskripsi`, `durasi`) VALUES
(1, 'Sequences and Looping', 'Primary School grade 1 & 2', 2),
(2, 'Introduction to Web Development', 'Junior High School', 1),
(4, 'Code Block Game Design', 'Primary School Grade 3 & 4', 1),
(6, 'Introduction to Python', 'Senior High School', 2),
(7, 'Computer & Coding Intro for Kinder', 'Kindergarten', 1),
(8, 'Coding Exploration', 'Primary School Grade 5 & 6', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link_embed` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `material`
--

INSERT INTO `material` (`id`, `course_id`, `judul`, `deskripsi`, `link_embed`) VALUES
(1, 1, 'Code Monkey Jr. Sequence (stage 1 - 15)  ', 'In CodeMonkey Jr.\'s Sequence and Loops course, the students began their first coding course, where they are introduced to their first programming concept, called Sequencing. Here, the students learn about the concept of sequencing as they program the monkey to reach the treasure in this course.', 'https://app.codemonkey.com/junior/chapters/sequencing'),
(2, 1, 'Code Monkey Jr. Loops (stage 1 - 15)  ', 'In CodeMonkey Jr.\'s Sequence and Loops course, the students began their first coding course, where they are introduced to their first programming concept, called Looping. Here, the students learn about the concept of looping as they program the monkey to reach the treasure in this course.', 'https://app.codemonkey.com/junior/chapters/loops'),
(3, 2, 'Code.org - Web Development, Chapter 1: Creating Webpages', 'Code.org - Web Developement: students learn how to create websites including giving structure using HTML and styling the page using CSS.', 'https://studio.code.org/s/csd2-2024'),
(4, 2, 'Code.org - Web Development, Chapter 1: Creating Webpagesage.', 'In lesson 2, students are introduced to Code.org Web Lab and use HTML to write their first web page.', 'https://studio.code.org/s/csd2-2024'),
(5, 2, 'Code.org - Web Development, Chapter 1: Creating Webpages', 'In lesson 3, students learn about HTML headings and how to use them to create page and section titles for web pages.', 'https://studio.code.org/s/csd2-2024'),
(6, 2, 'Code.org - Web Development, Chapter 1: Creating Webpages', 'In lesson 4, students create a simple personal web page on a topic of their choice.', 'https://studio.code.org/s/csd2-2024'),
(7, 2, 'Code.org - Web Development, Chapter 1: Creating Webpages', 'In lesson 6, students learn how to use CSS to style text in HTML.', 'https://studio.code.org/s/csd2-2024'),
(8, 6, 'CodeHS - Introduction to Python Programming', 'In unit 1, Students learn about what the course is about and reflect what they hope to learn.', 'http://codehs.com/'),
(9, 6, 'CodeHS - Introduction to Python Programming', 'In unit 2, Students learn the basics of programming by giving Karel the Dog commands in a grid world.', 'http://codehs.com/'),
(10, 6, 'CodeHS - Introduction to Python Programming', 'In unit 3, Students learn the basics of programming by writing programs that interact with users through the keyboard.', 'http://codehs.com/'),
(11, 6, 'CodeHS - Introduction to Python Programming', 'In unit 4, Students write a program that allows users to create their own Mad Lib stories using variables and user input.', 'http://codehs.com/'),
(12, 6, 'CodeHS - Introduction to Python Programming', 'In unit 5, Students teach their programs to make decisions based on the information it receives.', 'http://codehs.com/'),
(13, 6, 'CodeHS - Introduction to Python Programming', 'In unit 6, Students write a program to provide feedback on whether the entered password is correct or incorrect.\r\n', 'http://codehs.com/'),
(14, 4, 'Make a Flappy game', 'Code.org Make a Flappy Game introduces the concept of events to students while making flappy bird game. At the end of the lesson, students customize the game by changing the visuals or rules.', 'https://hourofcode.com/flap'),
(15, 4, 'Blocks Jumper - Game Creation', 'In this mini course, student will create a game where the player taps or clicks the screen to make a monkey jump over gaps until it reaches a star.', 'https://hourofcode.com/codemonkeyjump'),
(16, 4, 'Makecode Arcade - Chase the Pizza', 'Students will plan, code, test, and create a simple game in makecode where one sprite tries to catch another and earn as many points as possible before the time runs out.', 'https://arcade.makecode.com/'),
(17, 4, 'Makecode Arcade - Happy Flower', 'Student will create an animation project where flower that sends happy little bees back to the hive.', 'https://arcade.makecode.com/'),
(18, 4, 'Makecode Arcade - Lemon Leak', 'Student will make a game where wild strawberries are out to attack our lemon player. The goal is to keep the lemon from losing its juice by avoiding the oncoming strawberries. ', 'https://arcade.makecode.com/'),
(19, 7, 'Tynker - All About Computers 1, Lesson 1: What is a Computer?', 'In lesson one, called What is a Computer? students learns about what computers are for, and that they can help use to complete tasks easier and efficiently and they also learn that computers are all around us in different forms, that there exists different parts of a computer, such as inputs and outputs, learn about what software and hardware are, and how to comminicate with a computer.', 'https://www.tynker.com/dashboard/student/#/course/639914f6218b2c05091ec058'),
(20, 7, 'Tynker - All About Computers 1, Lesson 2: What do we use Computers for?', 'In lesson two, called What do we use Computers for? students learn about the various things we can do with a computers, such as drawing, communicating (calling/texting) with people, they also learned that computers comes in different shapes, depending on their functions, and learned about computer networks.', 'https://www.tynker.com/dashboard/student/#/course/639914f6218b2c05091ec058'),
(21, 7, 'BBC Learning - What is an Algorithm? CodeSpark - 1.2 Explore Slides Codespark - Donut Detective (1-8)', 'In this meeting, the students began by learning about what algorithm is from a video from BBC Learning on Vimeo.\r\n\r\nThen, the students began exploring a new platform, called Codespark. Here, the students began by being introduced to the characters in the game, called the Foos, they are also introduced to the characters featured in the courses they will be doing later, learned about the cycle of learn and test, and the interface of the puzzles in the course. Afterwards, they practice their sequencing skill as they began with the Donut Detective course. Here, the students helps Gracie get her donuts.', 'https://vimeo.com/104926723'),
(22, 8, 'Tynker - Programming 100.  Introduction to Tynker', 'In Programming 100\'s first lesson, called Welcome to Tynker the students are introduced to a new platform, called Tynker. Here, the students are introduced to the different kinds of lessons that exists in Tynker, such as project and puzzle-based lessons.\r\n\r\nIn the next lesson, called Candy Quest the students started doing their first Tynker lesson, a puzzle-based lesson where the students are tasked to help the Candy Monster they created to collect candies in the levels. Here, the students learned the concept of sequencing, loops, conditional loops, and conditional statements.\r\n\r\nIn Programming 100\'s Create a Comic lesson, the student learn how to create their own comic in Tynker. Here, the students learn how to properly setup the project with the sprites and backdrops for their comic and trigger the scenes in the comic project using the concept of events.\r\n\r\nIn the next lesson, called Pattern Maker the students learn how to create artistic pattern with the help of programming as they learn about the pen extension on Tynker. Here, using the concept of sequences and loopings the students will be able to create various unique patterns.', 'https://www.tynker.com/ide/v3?type=course&slug=course:programming-100&chapter=0&lesson=0'),
(23, 8, 'Tynker - Dragon Blast', 'Tynker Dragon Blast is a coding puzzle where students have to code a dragon to embark on a quest for treasure. Throughout this lesson, students learn how to break down a complex problem into smaller parts using functions and develop their understanding of sequencing, looping, and conditionals.', 'https://www.tynker.com/hour-of-code/dragon-blast');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
