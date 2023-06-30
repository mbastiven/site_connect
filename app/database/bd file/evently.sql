-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 27 juin 2023 à 18:18
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `evently`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `price` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(16, 'Science And Tech', '<p>Biology, Chemistry, Mathematics, Software Eng. ,Cloud or Cyber security …etc&nbsp;</p>'),
(17, 'Culture', ''),
(18, 'Health', ''),
(19, 'Sports', ''),
(20, 'Education', ''),
(21, 'Religion', '<p>God Allah ..</p>'),
(24, 'Programming ', '<p>css , c++ php</p>'),
(26, 'Party', '<p>&lt;cdqs</p>'),
(31, 'Finance', '<p>fintech finance money etc.</p><p>&nbsp;</p>'),
(32, 'Enviroment', '<p>Nature, Geography etc.</p>'),
(33, 'Real-Estate', '<p>Private Public or Commercial&nbsp;</p>'),
(34, 'Society', '<p>Reflections, Questionings And Orientations&nbsp;</p>'),
(35, 'Entrepreneurship ', '<p>Motivational speeches, mind set, coaching …etc. &nbsp;</p>'),
(36, 'Hobbies ', ''),
(37, 'Gaming', '');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(25) NOT NULL,
  `event_day` datetime DEFAULT current_timestamp(),
  `type` varchar(50) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `price` varchar(55) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `user_id`, `category_id`, `title`, `image`, `description`, `location`, `event_day`, `type`, `published`, `created_at`, `price`, `amount`) VALUES
(43, 119, 31, 'The new era of fin-tech over time in our business and how to use it ', '1680527681_christopher-gower-m_HRfLhgABo-unsplash.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Bertoua', '2023-06-15 09:16:00', 'Online', 1, '2023-03-07 08:48:22', 'Free', 0),
(44, 76, 18, 'Covid-19 Funding and Recovery Strategies', '1678141424_16.png', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Kribi', '2023-03-08 23:25:00', 'Onsite', 1, '2023-03-06 23:23:44', 'Free', 0),
(45, 119, 33, 'Real Assets in a World of Real Inflation', '1680527441_walling-XLqiL-rz4V8-unsplash.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Belguim', '2023-11-22 06:09:00', 'Onsite', 1, '2023-03-06 23:24:40', 'Paid', 0),
(46, 72, 21, 'what is religion its origin and why do may people believe in it?', '1680582052_55.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Douala', '2023-04-18 12:20:00', 'Onsite', 1, '2023-03-06 23:27:02', 'Paid', 0),
(47, 79, 16, 'Cybersecurity threat\'s and how to counter tem over time', '1678141913_1a.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Buea', '2023-02-07 23:33:00', 'Onsite', 1, '2023-03-06 23:28:30', 'Free', 0),
(48, 76, 35, 'Compassionate Leadership: How to Do Hard Things in a Human Way', '1678142757_1f.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Dschang', '2023-06-06 23:44:00', 'Onsite', 1, '2023-03-06 23:42:01', 'Free', 0),
(49, 72, 33, 'Human Skills are Not Just “One More Thing”: Reviving Your School Culture', '1678142524_25.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Mbpuda', '2023-02-08 15:39:00', 'Onsite', 1, '2023-03-06 23:42:04', 'Paid', 0),
(50, 98, 18, 'Chat-bots, Covid-19, and Clarity: How Tech Enabled Access to Trusted Information in Local Languages', '1678142528_16.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Bamenda', '2023-12-13 23:43:00', 'Online', 1, '2023-03-06 23:42:08', 'Paid', 0),
(51, 79, 31, 'How to earn 500$ everyday from home', '1678174902_1678142521_19.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Bafoussam', '2023-09-28 08:43:00', 'Onsite', 1, '2023-03-07 08:41:42', 'Free', 0),
(52, 72, 31, 'Evolution of fin-tech over time in our business', '1678175065_6.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Garoua', '2023-11-14 08:45:00', 'Online', 1, '2023-03-07 08:44:25', 'Paid', 0),
(53, 79, 31, 'The new era of fin-tech over time in our business', '1678175140_6.png', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Maroua', '2023-07-03 08:48:00', 'Onsite', 1, '2023-03-07 08:45:40', 'Free', 0),
(54, 79, 20, 'How to boots your study capacity in a world of IT', '1678175193_8.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Ngaoundere', '2023-03-21 11:46:00', 'Online', 1, '2023-03-07 08:46:33', 'Free', 0),
(55, 72, 20, 'How Classroom Conversations Engage, Enrich, and Empower Students', '1678175354_4.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Bastos', '2023-03-16 08:54:00', 'Online', 1, '2023-03-07 08:49:14', 'Paid', 0),
(56, 79, 16, 'How to achieve cyber security readiness: Lessons from Silicon Valley and the Pentagon', '1681423746_5.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Maroua', '2023-08-27 15:08:00', 'Onsite', 1, '2023-03-07 08:50:40', 'Free', 0),
(57, 72, 17, 'Art Exhibition show at the Douala art festival', '1680735292_14.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Douala', '2023-10-05 06:57:00', 'Online', 1, '2023-02-20 08:55:03', 'Free', 0),
(58, 72, 19, 'Buea International Mountain Race Of Hope ', '1680582432_54.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Buea', '2023-04-13 21:28:00', 'Onsite', 1, '2023-03-07 08:56:58', 'Free', 0),
(59, 79, 35, 'What if you where the problem and not others ', '1678176276_9.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Bonapriso', '2023-03-17 09:08:00', 'Onsite', 1, '2023-03-07 09:02:43', 'Free', 0),
(60, 72, 32, 'Longrich Marketing seminar for medical products at Yaoundé ', '1678176185_28.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Yaounde', '2023-06-29 20:02:00', 'Online', 1, '2023-03-07 09:03:05', 'Free', 0),
(61, 76, 20, 'Web 3.0 Zoom Meting on it advantages and area of uses', '1678541979_24.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Maroua', '2023-11-11 14:40:00', 'Onsite', 1, '2023-03-07 09:09:32', 'Paid', 0),
(62, 79, 35, 'What is wealth and why is it different from money', '1678176648_15.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'France', '2023-09-21 02:16:00', 'Online', 1, '2023-03-07 09:10:48', 'Free', 0),
(63, 79, 35, 'Why do poor people remain poor and may never step out from their situation', '1680582074_1.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Garoua', '2023-04-14 00:23:00', 'Onsite', 1, '2023-03-07 09:12:37', 'Free', 0),
(65, 98, 36, 'Wednesday Addams projection at canal Olympia Yaoundé', '1678176922_MV5BNWFlMGU2NjctMjFmNi00ODY2LWI1YTYtNGMwMzMwOTIxNmYwXkEyXkFqcGdeQXVyMzQ3Nzk5MTU@.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Yaounde', '2023-08-07 09:14:00', 'Onsite', 1, '2023-03-07 09:15:22', 'Paid', 0),
(68, 98, 36, 'Squid Game projection at canal Olympia Yaoundé', '1678528082_b10.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Yaounde', '2023-06-11 10:47:00', 'Onsite', 1, '2023-03-07 08:54:40', 'Paid', 0),
(69, 72, 36, 'Talended Afro Danse Workshop On Metaverse', '1679823472_IMG-20220806-WA0007.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Yaounde', '2023-08-31 18:39:00', 'Online', 1, '2023-04-03 22:28:47', 'Paid', 0),
(70, 72, 36, 'Love Is A Metaverse  By Talended Afro Danse Workshop ', '1679823633_IMG-20220818-WA0012.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Yaounde', '2023-02-01 02:45:00', 'Onsite', 1, '2023-03-07 08:56:33', 'Paid', 0),
(71, 79, 36, 'Talented Afro Danse Workshop On Metaverse In Yaounde', '1679824486_IMG-20220809-WA0009.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Yaounde', '2023-03-03 16:56:00', 'Onsite', 1, '2023-03-07 08:56:46', 'Paid', 0),
(72, 72, 24, 'Freelancer seminar on the platform Fiver.com and Frelancer.com', '1679837143_14.png', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Yaounde', '2023-03-18 10:25:00', 'Online', 1, '2023-03-07 08:55:43', 'Paid', 0),
(73, 76, 35, 'How to create an enterprise in Cameroon with ZERO funs but with a strong contact network', '1679837278_3.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;', 'Buea', '2023-03-23 11:31:00', 'Onsite', 1, '2023-03-07 08:55:45', 'Paid', 0),
(74, 76, 21, 'Stop going to church but go to work. Praying without working is useless. Work existed before GOD  ', '1680740495_13.png', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Buea', '2023-12-28 23:29:00', 'Onsite', 1, '2023-03-07 08:55:33', 'Paid', 0),
(75, 119, 24, 'Good Coding Practices For Junior Developers ', '1680527816_jefferson-santos-9SoCnyQmkzI-unsplash (1).jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'UK', '2023-06-29 06:20:00', 'Onsite', 1, '2023-03-07 08:54:26', 'Free', 0),
(76, 119, 26, 'La nuit de la tentation (pool party tweaking off drinks etc..)a 11h', '1680585533_30.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;', 'JYS Garden ', '2023-06-05 01:17:00', 'Onsite', 1, '2023-04-03 22:18:53', 'Paid', 0),
(77, 72, 26, 'What About : Are you Single Or Maried Let\'s Verify That Together at Our Festive Youth Event', '1680900900_57.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Yaounde', '2023-12-27 13:54:00', 'Onsite', 1, '2023-04-07 13:55:00', 'Paid', 0),
(78, 72, 26, 'What About You \" MOLA \": Are you Single Or Maried Let\'s Verify That Together at Our Festive Youth Event', '1680900944_56.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'Yaounde', '2023-11-28 13:55:00', 'Onsite', 1, '2023-04-07 13:55:44', 'Paid', 0),
(79, 72, 36, 'What are the benefits of group studies and programing specifically?.with whom, where and when? ', '1681266027_img-8.jpg', '&lt;p&gt;Cybersecurity is the practice of protecting critical systems and sensitive information from digital attacks. Also known as information technology (IT) security, cybersecurity measures are designed to combat threats against networked systems and applications, whether those threats originate from inside or outside of an organization.&lt;/p&gt;', 'sqdsq', '2023-01-26 22:19:00', 'Online', 1, '2023-04-11 16:42:33', 'Paid', 0);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Super Admin', 'Overall  crud access on Role - Permission - Events - Users - Category and Bookings '),
(2, 'Event Ceator', ' Overall  crud access on Events -Category and Bookings '),
(3, 'Guest User', 'Create Account And Book Events');

-- --------------------------------------------------------

--
-- Structure de la table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `limits` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `name`, `description`, `limits`) VALUES
(1, 'Enterprise ', 'Unlimited Events\r\n Unlimited Categories & Tags\r\n % Bookings Charges\r\n Speakers & Panelist\r\n Event Schedule\r\nDirect Booking Payment\r\nCommunicators[spreaders]\r\nFeatured Listings', '10000'),
(2, 'Pro', ' 12 Events\r\n 25 % Bookings Charges\r\n 3 Categories & Tags', '12'),
(3, 'Free', '2 Events\r\n 35 % Bookings Charges', '2');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `subscription_id` int(11) DEFAULT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `profile` varchar(250) NOT NULL,
  `phone` int(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `country` varchar(55) NOT NULL,
  `full_address` varchar(55) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `admin`, `role_id`, `subscription_id`, `username`, `email`, `profile`, `phone`, `password`, `created_at`, `country`, `full_address`, `status`) VALUES
(72, 1, 1, 1, 'Noncio', 'noncio@gmail.com', '1680412853_b.jpeg', 625454855, '$2y$10$Xo8pA.D/L6C50i/zKaOV/ubUgYzBjH2pqyy6Z0n3G/pI55u2r3ZJC', '2023-03-03 08:12:49', 'Cameroon', 'Mendong Yaounde', 0),
(74, 0, 3, 3, 'Mba Stiven', 'mba@gmail.com', '1681433099_user.jpg', 678562061, '$2y$10$FhV62ejqZouGdhjX6YDoOeD8ep5.MWFkAaBlLljNCk1mkuoNYz6yO', '2023-03-03 08:24:56', 'Nigeria', 'Simbock', 0),
(76, 1, 1, 1, 'Brandon Njie', 'brandon@gmail.com', '1679660989_2.jpg', 658794061, '$2y$10$aybsdUARjaTe16FrzRPoi.bjZoldLuVFd56oxKmne5MRaGMg6XRea', '2023-03-03 08:28:10', 'Togo', 'TKC', 0),
(79, 1, 2, 1, 'Adrian Wafo', 'adrian@gmail.com', '1679661005_4.jpg', 670382061, '$2y$10$ZwhN0ekHGqNtT7TmxD8MbeLgQHizsXl659yYcz8aK6quBpWSzrFAi', '2023-03-04 19:08:08', 'Senegal', 'RPC', 0),
(98, 1, 2, 3, 'Canal-Olympia ', 'canalolympia@gmail.com', '1679661032_6.jpg', 678985656, '$2y$10$Gaph0TdMOwc0lh7Kim/dBOYxeftAMEfCUIHkUUez.VfroYn9K5a0K', '2023-03-07 08:19:02', 'Cameroon', 'Mendong Yaounde', 0),
(119, 1, 1, 1, 'Evently', 'evently@gmail.com', '1680412814_logo.png', 2147483647, '$2y$10$IWgnyOp.p/EjHcEbPyR3QuClqHxBjEC6A3/70cUIkvxCNTE3PbLs2', '2023-04-02 05:19:11', 'Cameroon', 'Dovv Mendong', 0),
(124, 0, 2, 2, 'Toni', 'toni@gmail.com', '1680497046_daniel-lincoln-RYwGqWum0Og-unsplash.jpg', 670382061, '$2y$10$eP9ZR41ZvPAj4UyT8UEbwetAUPU//RSBxBJFnXdHAOn2Z7GzNLoj.', '2023-04-03 03:17:05', 'Cameroon', 'Dovv Mendong', 0),
(149, 0, 2, 1, 'ffoncio@gmail.com', 'tddoni@gmail.com', '1681433499_3.jpg', 2212, '$2y$10$Uipq8m.u5zdxBtzk.W9K3Og711T6fEWlVBk4l52G1oA./4RikcAoC', '2023-04-14 00:48:35', 'ddd', 'ddd', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `users_ibfk_1` (`subscription_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
