-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 12:09 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kcar-rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_new`
--

CREATE TABLE `add_new` (
  `id` int(10) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `image_type` varchar(100) NOT NULL,
  `mark_name` varchar(100) NOT NULL,
  `passengers` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `plate` varchar(10) NOT NULL,
  `pripday` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_new`
--

INSERT INTO `add_new` (`id`, `image_name`, `image_path`, `image_type`, `mark_name`, `passengers`, `category`, `plate`, `pripday`) VALUES
(31, 'toyota-land-cruiser-lexus-gx.png', 'image/toyota-land-cruiser-lexus-gx.png', 'image/png', 'Landcruser TXL', 7, 'Family', 'RAE45U', '80000'),
(32, 'toyota-hilux-tata.png', 'image/toyota-hilux-tata.png', 'image/png', 'Toyota Hilux', 5, 'Travel', 'RAD27Y', '50000'),
(33, 'toyota-land-cruiser-prado-vx.png', 'image/toyota-land-cruiser-prado-vx.png', 'image/png', 'Landcruser TXL-2018', 7, 'Family', 'RAE565Y', '90000'),
(25, 'Car-PNG-Photo.png', 'image/Car-PNG-Photo.png', 'image/png', 'Lambogin', 5, 'Family', 'RAE234U', '40000'),
(26, '4-2-car-png-hd.png', 'image/4-2-car-png-hd.png', 'image/png', 'Benzi Land', 6, 'Travel', 'RAE567Y', '70000'),
(34, 'toyota-land-cruiser-prado.png', 'image/toyota-land-cruiser-prado.png', 'image/png', 'Landcruser V8', 7, 'Family', 'RAD578I', '70000');

-- --------------------------------------------------------

--
-- Table structure for table `attempt_book_tb`
--

CREATE TABLE `attempt_book_tb` (
  `Record_id` int(20) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `image_type` varchar(100) NOT NULL,
  `mark_name` text NOT NULL,
  `F_name` text NOT NULL,
  `L_name` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_number` int(100) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Plate_number` text NOT NULL,
  `Location` text NOT NULL,
  `Pdate` date NOT NULL,
  `Rdate` date NOT NULL,
  `Passengers` int(20) NOT NULL,
  `Approved_Not_yet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attempt_book_tb`
--

INSERT INTO `attempt_book_tb` (`Record_id`, `image_name`, `image_path`, `image_type`, `mark_name`, `F_name`, `L_name`, `Email`, `Phone_number`, `Price`, `Plate_number`, `Location`, `Pdate`, `Rdate`, `Passengers`, `Approved_Not_yet`) VALUES
(79, 'Volkswagen-Transparent-Background.png', 'image/Volkswagen-Transparent-Background.png', 'image/png', 'volkswagen ', 'MUHIRE', 'Velate', 'gilly@alu.com', 67678889, '70', 'RAB5538r', 'Kigali-Down town', '2020-05-05', '2020-05-05', 5, 'Approved'),
(80, 'Car-PNG-Photo.png', 'image/Car-PNG-Photo.png', 'image/png', 'Lambogin ', 'Gilbert', ' mnmn', 'nmnmn@kkjjk', 878787989, '40000', 'RAE234U', 'Kigali-Down town', '2020-05-16', '2020-05-16', 5, 'Approved'),
(82, 'audi-png-auto-car-0.png', 'image/audi-png-auto-car-0.png', 'image/png', 'Audi ', 'Patrick', ' Moko', 'mokonmnm@nmn.com', 6767898, '50000', 'RAD567j', 'Kigali-Down town', '2020-05-16', '2020-05-16', 5, 'Approved'),
(83, 'land-rover-range-rover-car-png-25.png', 'image/land-rover-range-rover-car-png-25.png', 'image/png', 'Landrover ', 'Gilbert', 'nnmnm', 'nmn@nm', 8989899, '67000', 'RAD456E', 'Kigali-Down town', '2020-05-15', '2020-05-15', 6, 'Not yet approved');

-- --------------------------------------------------------

--
-- Table structure for table `booktb`
--

CREATE TABLE `booktb` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `pudt` varchar(100) NOT NULL,
  `dodt` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `plate` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktb`
--

INSERT INTO `booktb` (`id`, `names`, `email`, `phone_number`, `pudt`, `dodt`, `location`, `plate`, `driver`) VALUES
(9, 'sibomana gilbert', 'gilly@gmail.com', '88888888', '07-04-2018', '07-05-2018', 'Kigali downtown', 'RAB466j', 'Umuhoza Angel'),
(6, 'Grace', 'grace@gmail', '9358935', '09-03-2018', '02-03-2018', 'Rwamagana', 'RAD090j', 'Muhire breaise'),
(7, 'Kiruhura', 'kiruhura@gmail.com', '+2507', '07-04-2018', '07-05-2017', 'Kigali downtown', 'RAD1245T', 'Rudasingwa Eric'),
(8, 'Kiruhura', 'kiru@gmail.com', '97865454687', '06-01-2018', '06-02-2018', 'Rubavu Kamembe Airport', 'RAD6780S', 'Umuhuza Aime'),
(12, 'Umuhoza liliane', 'liliane@gmail.com', '0988667666', '09-01-2018', '09-02-2018', 'Kigali Nyabugogo', 'RAD5678y', 'Ntirushya Marten'),
(19, 'KIRUHURA', 'tyu@gmail.com', '0789089090', '03/26/2018', '03/27/2018', 'Kigali kimironko', 'RAD8900g', 'Ntirushya Marten'),
(17, 'NM', 'grace@gmail', '489890', '03/14/2018', '03/21/2018', 'Kigali downtown', 'RAD6789a', 'Ntirushya Marten'),
(18, 'yuuiui', 'gilbert@gmail.com', '7878475788', '03/15/2018', '03/22/2018', 'Rubavu Kamembe Airport', 'RAC5667Q', 'Ntirushya Marten'),
(21, 'Sibomana', 'sibom@gmail.com', '0786788997', '03/30/2018', '03/31/2018', 'Musanze Near Stadium', 'RAD7899p', 'Ntirushya Marten'),
(22, 'Umuhoza christine', 'um_chrs@gmail.com', '0723345677', '04/09/2018', '04/11/2018', 'Kigali downtown', 'RAD7566Y', 'Kiruhura Magnifique'),
(23, 'Gishoma Eric', 'gisheric@gmail.com', '0734456778', '04/12/2018', '04/13/2018', 'Kigali downtown', 'RAD9077c', 'Umuhuza aime'),
(24, 'INTWARI Pazzo', 'nmnm@gmail.com', '0788877665', '06/28/2018', '06/30/2018', 'Kigali kimironko', 'RAD034u', 'Kiruhura Magnifique');

-- --------------------------------------------------------

--
-- Table structure for table `book_tb_approve`
--

CREATE TABLE `book_tb_approve` (
  `Record_id` int(20) NOT NULL,
  `book_id` varchar(100) NOT NULL,
  `mark_name` text NOT NULL,
  `F_name` text NOT NULL,
  `L_name` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_number` int(100) NOT NULL,
  `Plate_number` text NOT NULL,
  `Pdate` date NOT NULL,
  `Rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `Approved_Not_yet` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `message`, `Approved_Not_yet`) VALUES
(1, 'Gilbert', 'Gilly', 'gilly@gmail.com', 'mwatangiza android app ishobora gufasha abakiriya gukora book kur telphone murakoze', 'Not yet responded'),
(3, 'Gilbert', 'Gilly', 'gilly@alu.com', 'kjhljhklkllhl', 'Responded'),
(4, 'Gilbert', 'Musa', 'gilbert121998@gmail.com', 'Hey I want your surpport', 'Responded');

-- --------------------------------------------------------

--
-- Table structure for table `contact_approve`
--

CREATE TABLE `contact_approve` (
  `id` int(5) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_approve`
--

INSERT INTO `contact_approve` (`id`, `fname`, `lname`, `email`, `message`) VALUES
(1, 'Gilbert', 'Gilly', 'gilly@gmail.com', 'mwatangiza android app ishobora gufasha abakiriya gukora book kur telphone murakoze'),
(3, 'Gilbert', 'Gilly', 'gilly@alu.com', 'kjhljhklkllhl');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(10) NOT NULL,
  `Names` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phone_number` int(100) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `Names`, `Gender`, `Email`, `phone_number`, `categories`) VALUES
(1, 'Ntirushya Marten', 'Male', 'ntiru@gmail.com', 987867543, 'A,B'),
(5, 'Nikuze Anna', 'Female', 'anna@gmail.com', 8294937, 'A,B'),
(4, 'Umuhuza aime', 'Male', 'aime@gmail.com', 90900909, 'A,B,C'),
(6, 'Kiruhura Magnifique', 'Male', 'kiruhura@gmail.com', 90909998, 'A,B'),
(7, 'Ishimwe John', 'Male', 'johish@gmail.com', 90909998, 'A,B,C'),
(8, 'MUHIRWA Gaston', 'Male', 'nnm@gmail.com', 726653971, 'A,B,C');

-- --------------------------------------------------------

--
-- Table structure for table `driver2`
--

CREATE TABLE `driver2` (
  `id` int(100) NOT NULL,
  `Driver` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver2`
--

INSERT INTO `driver2` (`id`, `Driver`) VALUES
(10, 'MUHIRWA Gaston'),
(9, 'Nikuze Anna'),
(7, 'Ishimwe John'),
(11, 'Umuhuza aime'),
(12, 'Umuhuza aime'),
(13, 'Umuhuza aime'),
(14, 'Umuhuza aime'),
(15, 'Umuhuza aime'),
(16, 'Umuhuza aime'),
(17, 'Umuhuza aime'),
(18, 'Umuhuza aime'),
(19, 'Umuhuza aime'),
(20, 'RAD456E'),
(21, 'RAD456E'),
(22, 'RAD456E');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(5) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`) VALUES
(1, 'Kigali downtown'),
(2, 'Kigali Remera'),
(3, 'Kigali kimironko'),
(4, 'Kigali Airport'),
(5, 'Kigali Nyabugogo'),
(6, 'Musanze Near Stadium'),
(7, 'Gisenyi Serena Hotel'),
(8, 'Rubavu Kamembe Airport'),
(9, 'Muhanga downtown'),
(10, 'Rwamagana Near Province Headquater'),
(11, 'Nyagatare Near UR');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`id`, `username`, `password`) VALUES
(1, 'Gilly-G', 'gilly12');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(20) NOT NULL,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `passwords` text NOT NULL,
  `cpassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `username`, `email`, `passwords`, `cpassword`) VALUES
(1, 'Gilbert Gily', 'gilly', 'gilly@alu.com', '123456', '123456'),
(2, 'Anitha Umurungi', 'anitha', 'anitha@gmail.com', 'anitha123', 'anitha123'),
(3, 'Patrick Moko', 'Moko1', 'mokonmnm@nmn.com', 'moko123', 'moko123'),
(4, 'ABAKAR ISSA', 'ABCDEFGH', 'm.abakar@alustudent.com', '123456', '123456'),
(14, 'Gilbert musa', 'Gilbert', 'nmn@nm', '1234567', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_new`
--
ALTER TABLE `add_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attempt_book_tb`
--
ALTER TABLE `attempt_book_tb`
  ADD PRIMARY KEY (`Record_id`);

--
-- Indexes for table `booktb`
--
ALTER TABLE `booktb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_tb_approve`
--
ALTER TABLE `book_tb_approve`
  ADD PRIMARY KEY (`Record_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_approve`
--
ALTER TABLE `contact_approve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver2`
--
ALTER TABLE `driver2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintb`
--
ALTER TABLE `logintb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_new`
--
ALTER TABLE `add_new`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `attempt_book_tb`
--
ALTER TABLE `attempt_book_tb`
  MODIFY `Record_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `booktb`
--
ALTER TABLE `booktb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `book_tb_approve`
--
ALTER TABLE `book_tb_approve`
  MODIFY `Record_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_approve`
--
ALTER TABLE `contact_approve`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `driver2`
--
ALTER TABLE `driver2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logintb`
--
ALTER TABLE `logintb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
