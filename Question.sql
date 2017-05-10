

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`id` smallint(5) unsigned NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c0` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `a0` tinyint(1) NOT NULL DEFAULT '1',
  `a1` tinyint(1) NOT NULL DEFAULT '0',
  `a2` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `c0`, `c1`, `c2`, `a0`, `a1`, `a2`) VALUES
(0, 'CAU 0', 'DAP AN1', 'DAP AN 2', 'DAP AN 3', 0, 1, 0),
(1, 'CAU 1', 'DAP AN1', 'DAP AN 2', 'DAP AN 3', 1, 0, 0),
(2, '2', '1', '2', '', 1, 0, 0),
(3, '3', '1', '2', '', 1, 0, 0),
(4, '4', '1', '2', '', 1, 0, 0),
(5, '5', '1', '2', '', 1, 0, 0),
(6, '6', '1', '2', '', 1, 0, 0),
(7, '7', '1', '2', '', 1, 0, 0),
(8, '8', '1', '2', '', 1, 0, 0),
(9, '9', '1', '2', '', 1, 0, 0),
(10, '10', '1', '2', '', 1, 0, 0),
(11, '11', '1', '2', '', 1, 0, 0),
(12, '12', '1', '2', '3', 1, 1, 0),
(13, '13', '1', '2', '', 1, 0, 0),
(14, '14', '1', '2', '', 1, 0, 0),
(15, '15', '1', '2', '', 1, 0, 0),
(16, '16', 'DAP AN1', 'DAP AN 2', 'DAP AN 3', 1, 0, 0),
(17, 'CAU 17', 'DAP AN1', 'DAP AN 2', 'DAP AN 3', 0, 1, 1),
(18, 'CAU 18', 'DAP AN1', 'DAP AN 2', 'DAP AN 3', 1, 1, 0),
(19, 'CAU 19', 'DAP AN1', 'DAP AN 2', 'DAP AN 3', 1, 0, 1),
(20, '20', '1', '2', '', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
