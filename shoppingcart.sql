-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 12:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL,
  `order_number` int(11) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `address`, `order_number`, `message`) VALUES
('Menna Elgayar', 'menna.elg11@yahoo.com', 2018887341, '3 palm hills', 345, NULL),
('sammy joe', 'none@none.com', 2018887341, '2 main ave', 7492, NULL),
('sammy joe', 'none@none.com', 2018887341, '2 main ave', 7492, 'hello where is my order???'),
('sammy joe', 'none@none.com', 2018887341, '2 main ave', 7492, 'hello where is my order???'),
('ashley', 'none@none.com', 24835935, '5602 Evening Shore Drive, Houston, TX, USA', 2435, 'hi, test'),
('menna', 'menna@gmail.com', 2018887341, '257 7th st', 3564, 'test #2'),
('test', 'menna.elg11@yahoo.com', -350350385, 'test', 99759, 'hello'),
('Menna', 'menna@gmail.com', 2147483647, '257 7th st', 47972, 'TEST'),
('Menna Elgayar', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 35345, 'hello where is my order???'),
('rona elgayar', 'meowmeowmeow@gmail.com', 2018887341, '257 7th st', 676676686, 'where is my meow?'),
('', '', 0, '', 0, ''),
('Murat', 'murat@ulusoy.co', 2147483647, 'masda kave adsad ', 8232832, 'Hi where is my order.'),
('', '', 0, '', 0, ''),
('Menna Elgayar', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 243553, 'Hello'),
('Menna Elgayar', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 24535, 'hello'),
('Menna Elgayar', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 35254335, 'hello'),
('Menna Elgayar', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 8686887, 'hello where is my order???'),
('TEST', 'NONE@NONE.COM', 2147483647, 'TEST 1 LANE 1', 914971402, 'Hi just submitted a request! cant wait to hear back'),
('Test', 'none@none.com', 2018887341, '5602 Evening Shore Drive, Houston, TX, USA', 1224254545, 'hello where is my order???');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_number` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `street` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `card_type` varbinary(50) NOT NULL,
  `card_number` int(11) NOT NULL,
  `exp_date` int(10) NOT NULL,
  `cvv` int(5) NOT NULL,
  `item_id` int(11) NOT NULL,
  `tracking_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_number`, `name`, `email`, `phone`, `street`, `city`, `zip_code`, `country`, `card_type`, `card_number`, `exp_date`, `cvv`, `item_id`, `tracking_number`) VALUES
(384099267, '0', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 'Clifton', '07011', 'United States', 0x76697361, 2147483647, 35, 2352, 1, 2147483647),
(389658334, '0', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 'Clifton', '07011', 'United States', 0x76697361, 2147483647, 4, 2342, 1, 24534646),
(452031310, '0', 'none@none.com', 123456789, 'test 123 ', 'Test', '08429', 'USA', 0x76697361, 2147483647, 5, 4324, 2, 122342424),
(466098525, '0', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 'Clifton', '07011', 'United States', 0x76697361, 2147483647, 12, 7968, 8, 0),
(483030249, '0', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 'Clifton', '07011', 'United States', 0x76697361, 2147483647, 244, 2445, 1, 0),
(530777842, '0', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 'Clifton', '07011', 'United States', 0x76697361, 2147483647, 244, 2445, 1, 0),
(627741130, '0', 'none@none.com', 123456789, 'test 123 ', 'Test', '08429', 'USA', 0x76697361, 2147483647, 5, 4324, 2, 0),
(763431441, '0', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 'Clifton', '07011', 'United States', 0x616d6578, 2147483647, 12, 3453, 3, 0),
(837786842, '0', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 'Clifton', '07011', 'United States', 0x76697361, 2147483647, 12, 234, 1, 0),
(914971402, 'JAMIE', 'NONE@NONE.COM', 2147483647, 'TEST 1 LANE 1', 'TEST`', '99999', 'SPAIN', 0x616d6578, 2147483647, 12, 2345, 1, 12345),
(927197633, '0', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 'Clifton', '07011', 'United States', 0x76697361, 2147483647, 4, 2423, 1, 0),
(949637873, '0', 'none@none.com', 123456789, 'test 123 ', 'Test', '08429', 'USA', 0x76697361, 2147483647, 5, 4324, 2, 0),
(959967208, 'Jason', 'none@none.com', 1231231234, '123 main st', 'Paterson', '01001', 'USA', 0x6d617374657263617264, 2147483647, 12, 2424, 3, 2147483647),
(961238174, '0', 'none@none.com', 123456789, 'test 123 ', 'Test', '08429', 'USA', 0x76697361, 2147483647, 5, 4324, 2, 0),
(984809767, '0', 'menna.elg11@yahoo.com', 2018887341, '257 7th st', 'Clifton', '07011', 'United States', 0x76697361, 2147483647, 34395, 3523, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pieces`
--

CREATE TABLE `pieces` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `img` text NOT NULL,
  `artist` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pieces`
--

INSERT INTO `pieces` (`id`, `name`, `description`, `price`, `img`, `artist`) VALUES
(1, 'Whispers of Sand', 'Soft brushstrokes evoke tranquil desert landscapes, inviting reflection and serenity.', 6049.99, 'https://d3rf6j5nx5r04a.cloudfront.net/GnuCdNxtBNGWIvI6nPmdwNPH3YI=/560x0/product/0/7/41dd41377bf347129e7986fb0b0eded4.jpg', 'Isla Monroe'),
(2, 'Ethereal Embrace', 'Delicate layers of muted tones dance in harmony, capturing a fleeting moment of connection', 31352.00, 'https://i.etsystatic.com/14198088/r/il/6f78dd/3509741023/il_570xN.3509741023_q44y.jpg', 'Elias Ashford'),
(3, 'Sands of Time', 'A blend of earthy hues tells the story of ancient wisdom and the passage of time', 31198.99, 'https://nohoartgallery.com/cdn/shop/files/snapedwqeqdfsddsfsdfsfdsdfgfgfgfwitrrfddfdfdgr_16dgfdf850sfd48083015.jpg?v=1701186496&width=533', 'Amara Rivers'),
(4, 'Gossamer Glow', 'A gentle shimmer illuminates the canvas, evoking a sense of ethereal beauty', 53219.99, 'https://images.kirklands.com/is/image/Kirklands/291943?$tProduct$', 'Lucian Grey'),
(5, 'Tranquil Tributary', 'Serene waters flow through a peaceful landscape, whispers of tales of quiet contemplation', 31239.40, 'https://i.etsystatic.com/12308708/r/il/c0728f/3956656780/il_1080xN.3956656780_i27h.jpg', 'Nova West'),
(6, 'Silent Serenade', 'Soft melodies of color intertwine, inviting viewers to embrace moments of introspection', 21090.99, 'https://theprintemporium.com.au/cdn/shop/products/Shop-Golden-Canvas-Print-a-painted-abstract-themed-framed-canvas-wall-art-print-from-The-Print-Emporium-artwork-collection-Buy-Australian-made-fine-art-painting-style-stretched-canvas_800x.jpg?v=1668286309', 'Milo Lane'),
(7, 'Dreams in Dust', 'Dusty tones converge, revealing fragments of dreams lost and found in the sands', 5949.99, 'https://www.singulart.com/images/artworks/v2/cropped/3439/alts/zoom/alt_914955_299bb1c362611cb0fdc948852c05ca01.jpeg', 'Isla Harper'),
(8, 'Sublime Solitude', 'Layers of solitude painted in subdued tones, capturing the beauty of introspective moments', 41289.99, 'https://cdn3.minted.com/files/mintedProductsImages/MIN/MAK/P5R/MIN-P5R-MAK-007B_A_PZ.jpg', 'Rowan Reed'),
(9, 'Nostalgic Nectar', 'A sweet melancholy envelops the canvas, reminiscing on the warmth of bygone days', 24219.99, 'https://papermoonartdesign.com/cdn/shop/products/WA224-watercolor-abstract-landscape-desert-brown-beige-aesthetic-printable-wall-art-04.jpg?v=1622487675&width=1445', 'Elara Stone'),
(10, 'Whispered Wonders', 'Soft hues reveal hidden wonders, echoing the gentle secrets of the natural world', 12999.99, 'https://roundtopranchantiques.com/userfiles/2076/products/24808_001.jpg', 'Finnley Shea'),
(11, 'Mystic Mirage', 'Mirage-like forms emerge from the depths, blurring the line between reality and illusion', 6979.99, 'https://i.etsystatic.com/24126726/r/il/273bf8/3673287746/il_fullxfull.3673287746_j3y2.jpg', 'Sage Donovan'),
(12, 'Serenity\'s Sigh', 'A tranquil sigh captured in muted tones, offering solace in the chaos of existance', 11386.99, 'https://i.etsystatic.com/8943238/r/il/c68ddf/2938478393/il_fullxfull.2938478393_bmha.jpg', 'Lumi Greyson'),
(13, 'Echoes of Eternity', 'Timeless whispers reverberate through gentle hues, echoing the eternal dance of existence', 12299.99, 'https://i.etsystatic.com/34966629/r/il/835314/3872471250/il_fullxfull.3872471250_9436.jpg', 'Orion Frost'),
(14, 'Hushed Horizons', 'Horizon lines blur softly, inviting viewers to lose themselves in the tranquil expanse', 13398.99, 'https://target.scene7.com/is/image/Target/GUEST_2b241569-7e45-4d06-96f7-2058fec961c1?wid=488&hei=488&fmt=pjpeg', 'Aria Winters'),
(15, 'Fading Echoes', 'Ethereal forms dissolve into whispers, capturing the ephemeral nature of memory  and time', 40029.99, 'https://theprintemporium.com.au/cdn/shop/products/Shop-Colorado-Canvas-Print-a-painted-abstract-themed-framed-canvas-wall-art-print-from-The-Print-Emporium-artwork-collection-Buy-Australian-made-fine-art-painting-style-stretched-canv_e2683a9f-bb30-4a37-939b-51782010be55_800x.jpg?v=1668278570', 'Aspen Rivers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
