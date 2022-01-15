-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 12:19 PM
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
-- Database: `db_napi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Berat'),
(3, 'ringan'),
(4, 'sedang');

-- --------------------------------------------------------

--
-- Table structure for table `napi`
--

CREATE TABLE `napi` (
  `id_napi` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nomer_hp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `napi`
--

INSERT INTO `napi` (`id_napi`, `nama`, `alamat`, `tanggal_lahir`, `nomer_hp`) VALUES
(1, 'Ray Rasor', '4717 North Hill', '2020-02-02', '+86 590 186 4530'),
(2, 'Xever Newburn', '056 Elmside Trail', '2020-02-19', '+7 344 962 4230'),
(3, 'Berny Jostan', '234 Brickson Park Hill', '2019-11-07', '+86 708 611 3087'),
(4, 'Avril Lamp', '64274 Hansons Avenue', '2021-09-11', '+62 873 767 6633'),
(5, 'Adelheid Eich', '11624 Melrose Pass', '2020-10-28', '+56 510 118 1105'),
(6, 'Jarad Bussy', '37 Center Avenue', '2020-10-22', '+62 167 625 8775'),
(7, 'Cornall Oliver', '698 Jana Park', '2020-11-10', '+994 236 335 5219'),
(8, 'Izzy Berzon', '2361 Bellgrove Point', '2020-10-01', '+86 304 459 6672'),
(9, 'Hieronymus Frodsham', '6 Washington Avenue', '2020-04-26', '+212 991 977 9074'),
(10, 'Rene Gaskell', '426 Eastwood Hill', '2020-04-23', '+62 369 764 2313'),
(11, 'Turner Bleakman', '08968 Heath Parkway', '2021-05-26', '+57 691 185 3389'),
(12, 'Leicester Fortnum', '39 Lakewood Gardens Junction', '2019-11-10', '+62 795 250 9069'),
(13, 'Aleta McKmurrie', '5455 Forster Point', '2021-05-22', '+86 356 434 4643'),
(14, 'Katie Curtis', '660 Stuart Junction', '2021-12-12', '+48 521 630 9949'),
(15, 'Alisander Berrygun', '58936 Quincy Crossing', '2020-12-25', '+86 976 303 1108'),
(16, 'Mahmud Goodday', '98 Corscot Circle', '2021-11-27', '+86 980 415 9678'),
(17, 'Tasia Lauxmann', '3 Weeping Birch Drive', '2020-06-13', '+995 758 855 6518'),
(18, 'Sissie Macknish', '50 Bluejay Drive', '2020-02-12', '+230 886 526 9529'),
(19, 'Gaby Grimestone', '6766 Loftsgordon Parkway', '2020-12-07', '+34 550 665 0827'),
(20, 'Hernando Kean', '1 Bartillon Road', '2021-06-23', '+255 171 579 3709'),
(21, 'Kristan Rottery', '9110 Nobel Trail', '2020-03-10', '+356 704 723 3761'),
(22, 'Lauri Skittle', '90 Lukken Alley', '2021-05-08', '+86 759 326 0924'),
(23, 'Rooney Lilbourne', '5646 Drewry Pass', '2021-08-04', '+86 642 281 0186'),
(24, 'Wendeline McLaine', '11554 Linden Trail', '2020-11-11', '+33 521 729 9560'),
(25, 'Maxie Nana', '4 Sherman Way', '2019-06-05', '+86 634 125 5182'),
(26, 'Jefferson O\'Bradden', '28624 Express Lane', '2021-10-26', '+86 700 242 8864'),
(27, 'Margaretha Garatty', '3 Moland Center', '2021-05-28', '+86 396 358 0320'),
(28, 'Madelle Melbourne', '2 Roxbury Court', '2020-07-01', '+95 270 760 3895'),
(29, 'Farly Swindley', '5058 Blue Bill Park Parkway', '2019-11-23', '+380 573 170 2838'),
(30, 'Ira Ortiga', '88 Chinook Junction', '2020-11-16', '+63 351 609 0594'),
(31, 'Fey Boston', '356 International Street', '2021-01-04', '+963 677 600 9243'),
(32, 'Rutherford Rivaland', '5 Tomscot Parkway', '2019-05-18', '+55 387 838 8633'),
(33, 'Dorie Halford', '62729 Merrick Trail', '2020-01-28', '+63 244 811 8297'),
(34, 'Waylin Morefield', '310 Buena Vista Center', '2021-07-04', '+55 339 290 8186'),
(35, 'Kacey Reinard', '466 Elmside Crossing', '2021-10-07', '+86 219 729 4470'),
(36, 'Klaus Demogeot', '11 Butternut Junction', '2019-12-27', '+261 637 360 6155'),
(37, 'Claudius Keam', '404 Pankratz Place', '2020-04-21', '+507 600 646 5101'),
(38, 'Lauralee Podd', '379 Scofield Alley', '2020-08-13', '+86 593 679 4679'),
(39, 'Mabel Lamke', '54264 Gateway Avenue', '2021-07-31', '+242 560 171 3469'),
(40, 'Legra Ayre', '96069 Gale Place', '2020-01-03', '+62 915 550 9964'),
(41, 'Gwyneth Lockless', '6 Blaine Park', '2021-01-02', '+62 601 939 7229'),
(42, 'Aura Fransson', '09 Delaware Pass', '2021-11-16', '+30 286 201 0505'),
(43, 'Whitby Rizon', '9 Schiller Road', '2020-02-20', '+66 599 520 6180'),
(44, 'Jose MacIver', '20387 Vermont Parkway', '2021-12-02', '+86 598 862 2261'),
(45, 'Lishe Rubinow', '17 Vermont Circle', '2020-04-09', '+62 329 654 2751'),
(46, 'Zaneta Currie', '8462 Barby Court', '2019-06-15', '+86 402 732 1946'),
(47, 'Elvira Banville', '070 Ludington Court', '2019-05-08', '+51 412 103 3022'),
(48, 'Juli Paolotto', '463 Moland Plaza', '2021-12-09', '+62 518 493 7390'),
(49, 'Timoteo Culley', '9328 Oriole Crossing', '2020-03-05', '+63 187 334 9377'),
(50, 'Claretta Caldwall', '509 Tomscot Crossing', '2021-12-08', '+48 503 600 9907'),
(51, 'Grace McNaughton', '01787 Laurel Court', '2022-01-03', '+84 815 386 3755'),
(52, 'Devi Alfonso', '20 Emmet Point', '2021-11-29', '+375 773 969 6782'),
(53, 'Herve Camin', '63 Ridgeview Circle', '2019-12-21', '+385 583 335 6701'),
(54, 'Yvonne Chatfield', '619 Meadow Valley Trail', '2021-07-10', '+55 283 439 5063'),
(55, 'Gilly Brunskill', '860 Del Mar Plaza', '2020-09-09', '+63 305 401 1436'),
(56, 'Cob Veelers', '23425 La Follette Parkway', '2021-10-31', '+86 836 635 6421'),
(57, 'Gherardo Belsey', '1 Schurz Crossing', '2019-07-16', '+967 382 838 8238'),
(58, 'Kali Stonebridge', '219 Fair Oaks Park', '2020-08-12', '+375 615 203 4552'),
(59, 'Normie Elmore', '891 Cambridge Way', '2020-01-03', '+7 232 394 1621'),
(60, 'Stefania Dyka', '1998 Glacier Hill Way', '2021-05-05', '+46 484 143 1051'),
(61, 'Konstanze Gilvear', '336 Towne Park', '2021-07-02', '+63 214 310 5582'),
(62, 'Carolina Tyrer', '08 Starling Point', '2019-08-23', '+30 560 731 7088'),
(63, 'Corliss Cocklin', '321 Grover Pass', '2020-02-10', '+850 951 791 6809'),
(64, 'Dylan Aldin', '314 Novick Parkway', '2020-12-24', '+351 724 307 0433'),
(65, 'Christiane Dignon', '394 Mcguire Place', '2020-07-03', '+234 415 739 5284'),
(66, 'Isidro Southwood', '290 Scoville Hill', '2019-10-24', '+46 440 814 1710'),
(67, 'Iris Lighterness', '4 West Street', '2019-05-23', '+86 367 344 7545'),
(68, 'Will Harby', '44004 Green Drive', '2021-12-10', '+55 479 853 5114'),
(69, 'Shepard Moorfield', '48 Merrick Crossing', '2020-02-17', '+66 100 244 0758'),
(70, 'Ashlan Harriott', '40 Tomscot Hill', '2021-08-04', '+86 270 133 3732'),
(71, 'Terese Bramble', '40 Carpenter Pass', '2020-05-12', '+62 932 268 0617'),
(72, 'Vere Murdy', '251 Fisk Avenue', '2020-12-17', '+62 880 318 7443'),
(73, 'Pat Durrance', '40 Orin Lane', '2021-03-12', '+51 726 148 5338'),
(74, 'Vina Kinton', '46856 Boyd Plaza', '2021-01-07', '+7 455 895 9033'),
(75, 'Codie Arnull', '45 Grim Terrace', '2020-11-16', '+81 425 411 9024'),
(76, 'Regine Mastrantone', '811 Nova Hill', '2021-08-10', '+380 877 833 5566'),
(77, 'Bordie Brumwell', '61 Dexter Street', '2019-08-09', '+86 272 992 1449'),
(78, 'Liesa Fairbourne', '185 Mcguire Hill', '2020-03-26', '+86 804 948 3734'),
(79, 'Ritchie Ziehms', '8322 La Follette Park', '2020-09-26', '+57 984 689 0991'),
(80, 'Justina Sevior', '457 Del Sol Road', '2020-03-27', '+49 276 371 7693'),
(81, 'Conn Brindley', '4 Oak Parkway', '2021-08-10', '+886 945 182 2541'),
(82, 'Hillel Seymour', '0 Sycamore Lane', '2021-07-01', '+62 862 470 3514'),
(83, 'Fields Sinclar', '70014 Riverside Court', '2020-10-08', '+48 623 784 0953'),
(84, 'Brandyn Sancias', '53180 Hermina Way', '2021-07-08', '+381 103 718 0385'),
(85, 'Georgette Piletic', '3733 Dottie Park', '2019-12-04', '+66 263 496 4910'),
(86, 'Lance Strasse', '787 Dapin Court', '2021-09-15', '+81 961 396 9414'),
(87, 'Mira Crease', '7949 Toban Lane', '2020-05-25', '+63 913 484 9256'),
(88, 'Aarika Velti', '2355 Fordem Lane', '2021-07-12', '+86 547 551 2643'),
(89, 'Lorenzo De L\'Isle', '51450 Bluejay Crossing', '2020-03-15', '+1 646 751 6046'),
(90, 'Cobb McRitchie', '51 Hagan Street', '2020-09-07', '+7 845 985 6192'),
(91, 'Libby Espinosa', '14607 American Drive', '2020-04-27', '+63 690 440 7816'),
(92, 'Foss Ambrogini', '07660 Dixon Plaza', '2019-10-01', '+52 710 444 1028'),
(93, 'Reynold Vogelein', '8140 Nobel Trail', '2019-07-02', '+7 396 637 4535'),
(94, 'Cleavland McCrohon', '27 Sundown Terrace', '2021-01-30', '+1 786 223 5345'),
(95, 'Rosalind Holhouse', '4205 Johnson Place', '2019-12-24', '+51 826 387 4928'),
(96, 'Jean Moralee', '21446 Laurel Place', '2019-06-23', '+355 797 392 3673'),
(97, 'Florette Klass', '4420 Di Loreto Way', '2021-07-06', '+420 177 101 1383'),
(98, 'Hyacintha Halkyard', '3 Banding Way', '2020-08-26', '+82 273 336 4514'),
(99, 'Jania Pyne', '7 Dakota Plaza', '2019-11-28', '+1 596 338 1709'),
(100, 'Ceciley Strathman', '8 Hudson Avenue', '2020-09-26', '+505 301 322 9446'),
(101, 'Dominick Arundale', '781 Lien Court', '2021-03-12', '+1 432 349 0048'),
(102, 'Oneida De Gogay', '952 Sheridan Center', '2020-11-11', '+48 725 672 5773'),
(103, 'Liesa Leonida', '37463 Rockefeller Parkway', '2021-06-13', '+56 717 601 1370'),
(104, 'Ricard Schumacher', '314 Moose Street', '2020-02-29', '+351 714 608 8490'),
(105, 'Arlinda Tolson', '9946 Gateway Circle', '2021-12-16', '+86 711 272 8956'),
(106, 'Baillie Harcarse', '3 Ridgeview Terrace', '2019-09-08', '+33 908 277 6089'),
(107, 'Corine Flukes', '80680 Mifflin Alley', '2019-10-30', '+46 587 376 4668'),
(108, 'Thedrick Edinborough', '457 Kennedy Point', '2019-08-12', '+86 957 510 8268'),
(109, 'Joli Sheircliffe', '7 Namekagon Point', '2020-02-04', '+420 335 489 3952'),
(110, 'Katey Janczewski', '91682 Prairieview Drive', '2019-09-14', '+62 510 777 9499'),
(111, 'Carlyle Beardall', '7 Claremont Avenue', '2019-09-25', '+82 592 842 7736'),
(112, 'Leslie Francesconi', '5968 Beilfuss Trail', '2020-12-25', '+86 618 433 6409'),
(113, 'Quintilla Duker', '2 Nova Crossing', '2021-10-19', '+33 837 123 2905'),
(114, 'Cloe Chelsom', '52222 Bay Court', '2020-06-10', '+386 800 172 7769'),
(115, 'Ernesto Nerne', '11326 Longview Center', '2020-09-14', '+1 426 837 3364'),
(116, 'Sibylla Ramalho', '94005 Heffernan Avenue', '2021-08-30', '+55 177 245 6376'),
(117, 'Analiese Hessentaler', '869 Hoffman Center', '2020-08-01', '+86 322 195 8871'),
(118, 'Kathleen Silburn', '060 Morrow Place', '2019-08-27', '+595 553 244 8998'),
(119, 'Gabe Dallicoat', '26 Gale Place', '2019-06-20', '+30 529 356 0839'),
(120, 'Sol Ferier', '2 Warrior Junction', '2021-10-14', '+381 954 275 8166'),
(121, 'Lianna Schukert', '2315 Waxwing Hill', '2019-05-10', '+1 404 449 3821'),
(122, 'Casie Mangeney', '725 Maple Wood Lane', '2020-06-21', '+62 894 631 9251'),
(123, 'Haleigh Georger', '9348 Coolidge Terrace', '2019-09-18', '+86 359 153 0568'),
(124, 'Alwyn Maving', '72100 Roth Junction', '2021-02-06', '+975 295 856 0437'),
(125, 'Fawnia Cronshaw', '8716 High Crossing Crossing', '2021-07-01', '+7 749 650 2976'),
(126, 'Joyann Pendered', '635 Northland Pass', '2021-01-17', '+63 340 619 0685'),
(127, 'Reta Mayger', '2315 Lotheville Pass', '2021-12-06', '+967 787 421 0012'),
(128, 'Baudoin Towhey', '17468 Autumn Leaf Avenue', '2019-11-22', '+48 106 996 3289'),
(129, 'Benedikt Franzonello', '075 Buell Way', '2020-10-24', '+55 578 524 3222'),
(130, 'Domingo Cleverley', '66032 Corry Trail', '2020-01-20', '+52 244 501 1624'),
(131, 'Alfi Shoulder', '65 Hanson Crossing', '2019-06-01', '+967 485 345 1326'),
(132, 'Ruddy Bareford', '6083 Goodland Point', '2019-10-08', '+7 217 519 3029'),
(133, 'Linnell Knill', '87631 Kim Court', '2020-08-09', '+387 726 788 1531'),
(134, 'Lorene McGauhy', '6175 Drewry Park', '2020-01-01', '+48 921 890 5570'),
(135, 'Gail Shera', '6 Farragut Crossing', '2021-10-19', '+1 949 421 6735'),
(136, 'Jennine Barense', '22 Luster Pass', '2020-11-07', '+420 648 407 9619'),
(137, 'Barrett Manuely', '18 Northview Center', '2019-05-13', '+81 146 394 6964'),
(138, 'Humberto Edmead', '013 Banding Drive', '2019-09-20', '+63 130 949 0877'),
(139, 'Gustav Rallings', '51 Mayer Circle', '2020-05-03', '+63 394 271 2363'),
(140, 'Emelyne Straun', '17730 Welch Center', '2021-01-21', '+420 604 938 4395'),
(141, 'Rosalinde Lamar', '36 Carey Point', '2019-08-19', '+380 548 944 6489'),
(142, 'Miltie Curneen', '3503 Darwin Center', '2021-02-20', '+51 509 307 6135'),
(143, 'Dev Cumo', '766 Delaware Lane', '2021-09-21', '+63 432 857 7781'),
(144, 'Modesty Pordal', '649 Loftsgordon Street', '2020-04-24', '+33 574 552 8053'),
(145, 'Aubrie Mullarkey', '7 Montana Park', '2020-05-05', '+86 907 958 9989'),
(146, 'Mariya Toopin', '7146 Swallow Terrace', '2019-08-09', '+63 815 674 6261'),
(147, 'Lyndy Peiser', '350 Fair Oaks Court', '2019-12-26', '+86 652 689 3597'),
(148, 'Elysia Browell', '0 Bunting Center', '2020-03-28', '+86 127 562 1922'),
(149, 'Miriam McCook', '2 Amoth Avenue', '2021-12-09', '+86 819 303 8406'),
(150, 'Packston Piatto', '596 Pepper Wood Place', '2020-09-16', '+86 175 378 5026'),
(151, 'Dani Aiton', '6 Kipling Road', '2021-10-09', '+62 767 506 8868'),
(152, 'Ruprecht Salisbury', '44 Mayfield Center', '2020-06-09', '+63 707 730 9559'),
(153, 'Finley Myall', '3 Clyde Gallagher Place', '2020-08-20', '+7 498 647 8881'),
(154, 'Gib Skitteral', '04 Chinook Circle', '2020-09-05', '+63 590 404 9074'),
(155, 'Barbabra Melmeth', '532 Fairfield Alley', '2021-04-08', '+380 834 387 4398'),
(156, 'Annette McLevie', '9 Gateway Hill', '2021-06-04', '+244 983 807 7241'),
(157, 'Harley MacHoste', '09545 Vahlen Way', '2020-02-13', '+507 176 459 5378'),
(158, 'Mattie Novelli', '62083 Hoepker Road', '2020-09-30', '+55 529 231 4746'),
(159, 'Aimil Cawsy', '29 Washington Road', '2021-09-17', '+254 815 170 5634'),
(160, 'Charyl Godthaab', '148 Logan Park', '2021-06-26', '+380 856 281 9327'),
(161, 'Lyndel Mourgue', '98 Northport Street', '2021-05-01', '+48 479 516 6194'),
(162, 'Wang Allred', '6082 Monterey Way', '2021-10-18', '+62 255 629 9634'),
(163, 'Wynne Mulvey', '641 Elka Center', '2020-12-05', '+962 140 592 8147'),
(164, 'Silvan Gemson', '87 Lakewood Gardens Road', '2019-07-10', '+62 967 833 6665'),
(165, 'Dame Frisdick', '693 Jana Way', '2021-06-14', '+46 199 844 0767'),
(166, 'Florian Ranking', '288 Ridge Oak Pass', '2021-02-27', '+57 743 334 7741'),
(167, 'Shelly Willwood', '58 Mitchell Parkway', '2021-10-16', '+45 570 444 4807'),
(168, 'Jeanine Knowling', '11086 Sutteridge Terrace', '2019-05-16', '+1 410 673 0827'),
(169, 'Launce Lynch', '7920 Ruskin Pass', '2021-01-25', '+48 966 177 3973'),
(170, 'Katha Ruhben', '914 Prentice Road', '2019-07-28', '+359 242 231 6423'),
(171, 'Virgina Andreichik', '8030 Spenser Circle', '2020-04-02', '+7 587 391 3931'),
(172, 'Kristian Pasby', '70081 Scofield Avenue', '2019-08-25', '+86 264 165 5232'),
(173, 'Janka Crissil', '7301 Lake View Pass', '2020-01-12', '+216 460 986 1724'),
(174, 'Hazlett Filippov', '08717 Chive Junction', '2020-05-19', '+81 893 208 1200'),
(175, 'Cristin Harberer', '7 Acker Trail', '2021-01-14', '+385 395 364 6191'),
(176, 'Kevyn Guerre', '58188 Northview Pass', '2020-07-21', '+63 290 728 5049'),
(177, 'Noland Ivashov', '35 Commercial Hill', '2021-01-22', '+7 426 812 1886'),
(178, 'Laure Yurkevich', '931 Johnson Street', '2019-10-15', '+7 354 177 6940'),
(179, 'Derk Jearum', '4816 Dakota Point', '2019-07-27', '+86 905 567 6085'),
(180, 'Waite Cutteridge', '535 Amoth Way', '2019-12-17', '+54 220 794 9728'),
(181, 'Zebedee Bridger', '76 Arapahoe Street', '2021-03-08', '+33 225 883 0228'),
(182, 'Radcliffe Hamberston', '8683 Cherokee Junction', '2019-05-14', '+63 243 674 1242'),
(183, 'Carmine Kettell', '71774 David Road', '2019-07-22', '+86 184 549 6081'),
(184, 'Angela Perren', '6 Eagan Trail', '2020-04-10', '+1 410 782 4444'),
(185, 'Brandtr Crop', '19 Stephen Crossing', '2019-08-29', '+1 764 168 2663'),
(186, 'Parrnell Gurry', '98269 Cherokee Point', '2020-04-14', '+1 602 160 0481'),
(187, 'Selena Veevers', '52 Paget Way', '2020-03-11', '+57 605 872 3563'),
(188, 'Sebastian Corsar', '00223 Onsgard Trail', '2020-09-05', '+66 472 786 8155'),
(189, 'Justino Hinstock', '34 Granby Way', '2020-01-30', '+63 915 305 1436'),
(190, 'Micki Guilleton', '80 Westerfield Road', '2021-01-21', '+55 883 152 6860'),
(191, 'Opalina Evamy', '63331 Londonderry Road', '2020-04-12', '+7 258 624 4934'),
(192, 'Izak Major', '766 Clarendon Hill', '2019-08-20', '+994 220 705 0838'),
(193, 'Giselle Woodcraft', '5819 Clyde Gallagher Crossing', '2020-12-16', '+53 707 844 6418'),
(194, 'Roanne Millam', '11 Warner Drive', '2020-11-19', '+62 591 201 0699'),
(195, 'Julio Flagg', '116 American Ash Crossing', '2021-08-13', '+63 778 843 7886'),
(196, 'Powell Curton', '9 Charing Cross Parkway', '2021-02-17', '+62 330 503 1653'),
(197, 'Florencia Siggens', '193 Vidon Place', '2021-02-07', '+7 424 979 6961'),
(198, 'Ximenez Wison', '68 Summerview Terrace', '2020-12-18', '+63 156 729 4232'),
(199, 'Grazia Challice', '5 Gerald Park', '2019-06-12', '+62 147 116 9170'),
(200, 'Anallese Vivers', '536 Trailsway Parkway', '2020-03-08', '+86 415 387 0064'),
(201, 'Freda Mussett', '49865 Del Mar Alley', '2019-06-18', '+27 657 949 3585'),
(202, 'Lorry Petyanin', '398 Westridge Way', '2020-09-25', '+86 188 893 6847'),
(203, 'Wendell Baike', '48220 Sycamore Junction', '2020-12-16', '+86 995 700 4026'),
(204, 'Jeth Siviour', '3 Pierstorff Junction', '2020-05-28', '+86 944 417 2603'),
(205, 'Bertrando Ricoald', '28 Ruskin Drive', '2021-05-15', '+502 662 817 7427'),
(206, 'Nananne Labin', '39 Ridge Oak Crossing', '2021-01-13', '+351 858 876 8356'),
(207, 'Wilfred Grenkov', '997 Anhalt Junction', '2019-07-11', '+48 952 806 6960'),
(208, 'Sharleen Tomik', '06 Laurel Park', '2019-08-11', '+57 269 649 2082'),
(209, 'Merwyn Winchcombe', '16 Valley Edge Drive', '2020-01-27', '+62 244 389 3745'),
(210, 'Glenda Risbrough', '62114 Manley Center', '2021-12-19', '+62 556 475 1034'),
(211, 'Angie Blabie', '8 Jenifer Park', '2021-02-25', '+51 381 547 3801'),
(212, 'Owen Farbrother', '21 Pearson Road', '2020-04-30', '+354 732 330 0376'),
(213, 'Emlyn Keavy', '105 Tennessee Place', '2021-05-24', '+381 768 125 0550'),
(214, 'Xenia Cosely', '47 Novick Drive', '2019-12-12', '+855 198 138 1395'),
(215, 'Wade Cops', '215 Sutherland Junction', '2020-01-17', '+7 763 162 4739'),
(216, 'Orson Gange', '234 Weeping Birch Lane', '2021-12-28', '+387 119 876 0087'),
(217, 'Gusti Adelsberg', '518 Gina Center', '2020-11-22', '+33 449 386 9133'),
(218, 'Reinhold Aseef', '0580 Dorton Pass', '2020-11-14', '+1 714 517 5545'),
(219, 'Chaim Spowart', '6889 Morningstar Way', '2020-11-05', '+351 407 649 3281'),
(220, 'Anjanette Dogerty', '315 Pierstorff Crossing', '2020-08-21', '+62 285 887 8250'),
(221, 'Brien Dudden', '24390 Porter Parkway', '2021-02-12', '+86 539 786 8888'),
(222, 'Karyl Stebbings', '13 Pepper Wood Junction', '2020-03-04', '+7 851 883 1631'),
(223, 'Kattie Dargan', '94 Ridgeview Alley', '2019-08-25', '+86 604 219 5503'),
(224, 'Carolyne Emanuelli', '13 Grasskamp Trail', '2020-06-17', '+84 784 852 7635'),
(225, 'Farlee Townley', '0 Fair Oaks Alley', '2021-04-13', '+33 931 499 9452'),
(226, 'Dareen Adderson', '7 Union Road', '2021-03-25', '+970 307 187 9340'),
(227, 'Sibeal Cheeld', '39 Chive Road', '2020-01-08', '+46 546 382 7538'),
(228, 'Bevon Craig', '99 Ilene Way', '2020-10-15', '+420 689 966 1579'),
(229, 'Clim Jancar', '12085 Division Parkway', '2021-04-07', '+66 818 987 0047'),
(230, 'Oriana Skelbeck', '104 Anniversary Circle', '2020-01-21', '+86 957 329 6078'),
(231, 'Siusan Eliasson', '15 Lakewood Hill', '2021-08-30', '+86 622 957 7279'),
(232, 'Ranique Fawthrop', '0218 Mariners Cove Lane', '2021-01-07', '+1 559 352 8606'),
(233, 'Lucian Plom', '7 Linden Trail', '2021-03-18', '+7 103 654 1238'),
(234, 'Minette Buckell', '32 Quincy Pass', '2020-10-28', '+30 398 253 5821'),
(235, 'Alain Jeremiah', '039 Aberg Plaza', '2019-10-09', '+963 761 905 3790'),
(236, 'Briana Petrasch', '7313 Morrow Center', '2020-10-18', '+62 608 734 3178'),
(237, 'Nathalia Jertz', '3 Barby Point', '2021-10-10', '+86 259 261 3293'),
(238, 'Timmie Ghidotti', '5417 Monument Circle', '2019-05-23', '+30 624 967 4188'),
(239, 'Yule Raistrick', '40776 Scott Street', '2019-09-18', '+351 567 122 6937'),
(240, 'Hetti Warlowe', '40 Service Pass', '2020-10-30', '+81 374 395 6710'),
(241, 'Rorie Richold', '4860 Northport Plaza', '2021-12-10', '+33 430 863 0565'),
(242, 'Lara Opy', '9 Sunfield Trail', '2021-03-19', '+55 993 540 2353'),
(243, 'Xymenes Caulcott', '1 Artisan Plaza', '2020-08-28', '+62 436 457 4253'),
(244, 'Jasmin Garstang', '95 Clemons Circle', '2020-10-11', '+380 969 929 1228'),
(245, 'Cecilio Pavinese', '0068 John Wall Avenue', '2020-12-11', '+55 515 519 2783'),
(246, 'Shaun Moxstead', '75308 Dorton Circle', '2019-10-28', '+386 718 559 6188'),
(247, 'Bram Treweela', '9238 Del Mar Street', '2019-12-27', '+62 432 240 5414'),
(248, 'Isiahi Casino', '70050 Jana Court', '2019-10-04', '+86 324 397 6539'),
(249, 'Beck Dumberell', '73620 Armistice Pass', '2020-05-04', '+33 892 265 4856'),
(250, 'Pennie Attewell', '7924 New Castle Lane', '2021-04-13', '+7 347 831 9959'),
(251, 'Marjie Showl', '5 Grasskamp Plaza', '2021-11-15', '+506 700 203 7793'),
(252, 'Nikolia Slogrove', '68993 Oak Valley Parkway', '2020-04-08', '+385 626 623 4303'),
(253, 'Berk Chsteney', '4 Melrose Avenue', '2021-01-03', '+92 312 800 6837'),
(254, 'Cassie Tolwood', '68 Randy Alley', '2020-09-24', '+84 229 922 3105'),
(255, 'Gerri Peasey', '0508 Clove Crossing', '2019-08-02', '+62 588 972 1640'),
(256, 'Even Yanshinov', '844 Dapin Street', '2019-07-12', '+994 465 528 7245'),
(257, 'Josie Cutteridge', '574 Hallows Point', '2019-07-27', '+33 226 289 8465'),
(258, 'Jackqueline Loudiane', '8 Atwood Drive', '2020-07-10', '+27 801 731 3875'),
(259, 'Berny Harburtson', '5 Blaine Drive', '2020-01-11', '+62 253 606 3390'),
(260, 'Jerrine Water', '86193 Mifflin Circle', '2019-06-02', '+7 661 843 5160'),
(261, 'Teresita Fulger', '98119 Norway Maple Parkway', '2020-05-01', '+240 957 318 5093'),
(262, 'Quentin Pettyfer', '42039 Westend Hill', '2020-11-20', '+380 110 111 9047'),
(263, 'Archaimbaud Espinazo', '51663 Swallow Drive', '2019-11-15', '+7 643 544 0094'),
(264, 'Salomo Stembridge', '12091 Golf Course Plaza', '2021-03-29', '+46 618 238 2416'),
(265, 'Lorilee Merritt', '2834 Spaight Drive', '2020-06-18', '+62 958 355 7801'),
(266, 'Georgette Goodlife', '0544 Washington Pass', '2020-08-02', '+7 152 707 1545'),
(267, 'Joline Goldbourn', '59393 Meadow Vale Lane', '2019-11-30', '+506 261 307 5388'),
(268, 'Heriberto Danilyak', '18428 Mosinee Place', '2020-03-13', '+351 680 630 8735'),
(269, 'Egan Maiklem', '2 International Trail', '2019-10-01', '+62 156 126 4916'),
(270, 'Arlene D\'Alessandro', '5368 Moulton Lane', '2021-10-07', '+506 791 758 4974'),
(271, 'Richardo Hansley', '71 Haas Court', '2019-11-30', '+98 727 531 6033'),
(272, 'Royal McGinly', '58970 4th Crossing', '2021-11-18', '+255 649 550 4534'),
(273, 'Emma Bruggeman', '70 Welch Center', '2019-05-28', '+381 784 507 7030'),
(274, 'Tish Sapseed', '12965 Jenna Drive', '2019-08-06', '+261 445 818 0233'),
(275, 'Marni Scobbie', '5985 Farwell Terrace', '2021-12-29', '+380 782 402 9250'),
(276, 'Chip MacCaughey', '68791 Lillian Hill', '2020-01-24', '+994 486 410 0970'),
(277, 'Shannan Hunston', '895 Corben Terrace', '2020-11-30', '+7 861 867 7748'),
(278, 'Nickie Puden', '5 Karstens Court', '2021-04-20', '+234 700 238 4741'),
(279, 'Christoffer Martynka', '3 Holy Cross Park', '2021-05-29', '+62 820 964 2994'),
(280, 'Anton Hadgkiss', '8660 Sugar Street', '2021-03-05', '+58 357 617 1964'),
(281, 'Gabriella Newbigging', '30719 Pond Center', '2019-11-05', '+33 221 463 5457'),
(282, 'Jacinthe Riedel', '7374 La Follette Park', '2020-11-22', '+358 620 186 3569'),
(283, 'Norrie Shatford', '89356 Fieldstone Terrace', '2021-04-09', '+234 151 861 7505'),
(284, 'Wash Chisholme', '9 Gerald Pass', '2021-08-01', '+62 656 241 3378'),
(285, 'Lacee Emmert', '77264 Sauthoff Drive', '2020-10-15', '+81 862 645 3298'),
(286, 'Regan Kolin', '23496 Parkside Pass', '2021-04-24', '+60 152 362 3329'),
(287, 'Adore Klemps', '8 Crescent Oaks Crossing', '2019-09-22', '+81 703 280 3885'),
(288, 'Jasmin Howler', '4 Sycamore Plaza', '2021-10-31', '+375 576 771 8466'),
(289, 'Dale Bradmore', '55682 2nd Circle', '2019-05-18', '+420 835 248 0107'),
(290, 'Kettie Hubbucks', '287 Talmadge Crossing', '2021-06-30', '+46 679 725 2266'),
(291, 'Meryl Cromleholme', '05 Marcy Parkway', '2019-07-21', '+380 864 227 9742'),
(292, 'Catherina Crates', '8 Crowley Circle', '2019-06-10', '+81 555 969 0228'),
(293, 'Hersh Sexti', '738 Barby Hill', '2021-11-21', '+86 787 833 7506'),
(294, 'Dante McDowall', '44602 Morningstar Plaza', '2019-05-19', '+62 779 462 5871'),
(295, 'Chrotoem Colgrave', '6 Bultman Street', '2019-09-28', '+55 731 500 7918'),
(296, 'Hunter Littlewood', '834 Riverside Pass', '2021-10-25', '+375 309 632 9527'),
(297, 'Bucky Aleswell', '86 Meadow Ridge Hill', '2019-10-22', '+52 470 659 0789'),
(298, 'Barri Darling', '16 Buhler Trail', '2021-06-01', '+7 800 822 4264'),
(299, 'Fallon Daville', '6 Sutherland Circle', '2020-02-03', '+54 705 858 3158'),
(300, 'Jewell Finnick', '84 Glacier Hill Terrace', '2021-06-04', '+86 727 677 4931'),
(301, 'Adamo Buckhurst', '5 Glacier Hill Circle', '2021-07-25', '+86 372 279 1335'),
(302, 'Beaufort Ozintsev', '5955 Express Crossing', '2020-06-06', '+7 379 944 9004'),
(303, 'Del Swindells', '2182 Buhler Street', '2021-04-15', '+373 223 176 2698'),
(304, 'Zara Hitzmann', '1 Northwestern Park', '2020-07-09', '+46 185 352 2650'),
(305, 'Roxana Cullinan', '900 Ridgeway Court', '2019-07-17', '+33 368 587 2014'),
(306, 'Richy MacKibbon', '8764 Kinsman Road', '2019-10-12', '+33 214 215 6350'),
(307, 'Lorne Iddins', '7861 Sherman Pass', '2021-04-04', '+1 360 307 1631'),
(308, 'Immanuel Ewington', '49305 David Drive', '2020-09-07', '+86 170 731 7748'),
(309, 'Sarita Perot', '368 Hoard Pass', '2019-08-03', '+351 746 626 1909'),
(310, 'Page Umbers', '98635 Mifflin Alley', '2020-06-02', '+51 195 354 4658'),
(311, 'Cosme Prichet', '66091 Wayridge Junction', '2019-12-14', '+235 280 902 8857'),
(312, 'Odetta Bauldrey', '20417 Mendota Alley', '2020-02-20', '+86 511 539 7430'),
(313, 'Grenville Bechley', '51376 Bartelt Crossing', '2019-10-08', '+62 911 129 2785'),
(314, 'Dalis Mohammed', '23247 Washington Point', '2020-07-01', '+51 103 534 0688'),
(315, 'Katrine Hardey', '50851 Troy Terrace', '2021-06-28', '+994 218 472 9182'),
(316, 'Sybil Hatch', '7722 Northfield Junction', '2021-07-02', '+1 588 988 8934'),
(317, 'Sayer Humphrey', '4 Nancy Avenue', '2021-10-03', '+84 143 942 8807'),
(318, 'Thia Ascroft', '6307 Shelley Way', '2019-10-22', '+358 942 489 5915'),
(319, 'Elizabeth Heningham', '75934 Forest Terrace', '2020-05-25', '+48 562 491 6011'),
(320, 'Nert Leguay', '6 Londonderry Plaza', '2021-05-23', '+7 200 851 8736'),
(321, 'Tanner Rablin', '6954 Huxley Crossing', '2021-04-05', '+53 420 304 9757'),
(322, 'Lawry Ierland', '01607 Waywood Center', '2019-07-21', '+216 757 241 9133'),
(323, 'Paule Deeman', '33880 Comanche Park', '2021-05-22', '+1 478 853 3561'),
(324, 'Cassondra Doxey', '89249 Blaine Park', '2021-09-22', '+7 826 869 8114'),
(325, 'Calvin Hugonnet', '11 Myrtle Terrace', '2021-10-30', '+7 499 728 8290'),
(326, 'Koren Etchell', '45833 Glendale Way', '2020-01-27', '+7 979 500 6641'),
(327, 'Isidoro MacKettrick', '9015 Eastwood Lane', '2021-04-18', '+963 480 680 9531'),
(328, 'Min Stannion', '90463 Doe Crossing Point', '2021-04-22', '+98 324 153 3007'),
(329, 'Clemente Grangier', '050 Rieder Parkway', '2020-03-12', '+62 347 309 3675'),
(330, 'Madella Zavattari', '5905 Truax Park', '2019-07-09', '+995 131 814 6445'),
(331, 'Elysha Quittonden', '0449 7th Crossing', '2020-10-10', '+33 470 918 7431'),
(332, 'Elvyn Jirick', '199 Dottie Junction', '2021-09-23', '+62 477 532 0964'),
(333, 'Tonnie Sedgemore', '3104 West Circle', '2019-08-14', '+86 693 848 8362'),
(334, 'Camey Dagnall', '24095 Larry Junction', '2019-05-15', '+86 505 262 1060'),
(335, 'Lester Brahan', '44619 Mcbride Terrace', '2020-10-19', '+970 598 914 8820'),
(336, 'Kaia Dyott', '166 Ruskin Pass', '2021-08-28', '+967 948 562 2527'),
(337, 'Friedrich Thayre', '9 Vernon Place', '2021-03-25', '+380 609 770 5522'),
(338, 'Ignacio Hooke', '5938 Hollow Ridge Drive', '2021-09-26', '+55 937 803 3752'),
(339, 'Melanie Biggin', '7 Packers Hill', '2021-07-05', '+55 271 587 4779'),
(340, 'Linette Caccavale', '33084 Anniversary Circle', '2021-08-29', '+963 280 876 8430'),
(341, 'Faith Deverose', '65 Redwing Court', '2021-02-01', '+1 835 373 8146'),
(342, 'Gwenneth Goncalo', '16227 Swallow Court', '2019-12-06', '+31 499 481 0770'),
(343, 'Joseph Bussen', '9 Roxbury Street', '2020-03-15', '+1 304 559 2854'),
(344, 'Tracey Nettleship', '7001 Messerschmidt Avenue', '2022-01-01', '+33 294 586 6337'),
(345, 'Dodi Vynehall', '28678 Drewry Hill', '2021-12-05', '+1 607 909 8379'),
(346, 'Selig O\'Beirne', '9355 Stoughton Hill', '2021-02-14', '+86 500 963 0304'),
(347, 'Booth Semple', '13 Elmside Park', '2021-04-05', '+63 651 697 7636'),
(348, 'Selia Hinchshaw', '5 La Follette Parkway', '2021-12-04', '+351 379 135 0227'),
(349, 'Arlen Carsberg', '6 Johnson Point', '2019-06-23', '+1 602 370 7914'),
(350, 'Eduard Bertholin', '09 Buhler Avenue', '2019-05-17', '+63 803 403 7386'),
(351, 'Janice Yegorov', '6596 Knutson Hill', '2019-10-06', '+235 882 871 8011'),
(352, 'Reyna Fillis', '15012 Muir Drive', '2020-06-26', '+351 939 679 6498'),
(353, 'Mellisent Fareweather', '17 Golf Course Parkway', '2021-05-13', '+86 468 491 3806'),
(354, 'Quinton Guirau', '5494 Portage Drive', '2020-04-02', '+57 189 549 8494'),
(355, 'Zonnya Staniford', '93 Dwight Trail', '2021-06-13', '+63 193 506 8508'),
(356, 'Allyson Neil', '8 Continental Hill', '2019-12-09', '+62 319 464 7311'),
(357, 'Marla O\'Fihillie', '4203 Loftsgordon Lane', '2020-05-29', '+86 669 867 4168'),
(358, 'Rollo Bollom', '83 Rieder Point', '2019-06-21', '+389 615 355 5877'),
(359, 'Kesley Morecombe', '5415 Lighthouse Bay Center', '2021-01-03', '+58 577 675 7505'),
(360, 'Ginny Stubbington', '9 Leroy Junction', '2020-07-05', '+30 974 428 5630'),
(361, 'Windham Gerner', '8 Forest Dale Hill', '2020-02-22', '+7 161 848 9997'),
(362, 'Rik Canada', '476 Colorado Terrace', '2019-07-21', '+86 290 465 2724'),
(363, 'Madlin de Clerq', '546 Grayhawk Hill', '2020-03-16', '+86 957 145 5332'),
(364, 'Andy Wincer', '0813 Glacier Hill Road', '2021-03-17', '+54 720 803 4717'),
(365, 'Leontine Bulmer', '546 Sunbrook Plaza', '2019-08-07', '+86 441 537 0856'),
(366, 'Holli Godding', '71 Lyons Way', '2021-10-29', '+351 665 174 5056'),
(367, 'Mitzi Vail', '6 Debra Hill', '2019-07-05', '+86 204 898 2461'),
(368, 'Cullin Cerro', '48387 Tennessee Trail', '2020-04-06', '+30 714 533 6931'),
(369, 'Maggie Jolliffe', '4 Hayes Trail', '2021-09-21', '+46 439 117 4819'),
(370, 'Nikki Mudd', '3720 Bay Drive', '2020-02-20', '+355 929 247 2824'),
(371, 'Melba Flecknell', '09 Ridgeview Park', '2020-04-09', '+63 895 362 2739'),
(372, 'Bettine Cullip', '46489 Sycamore Parkway', '2020-07-29', '+963 312 799 6601'),
(373, 'Toddy Peltzer', '0 Dennis Park', '2021-05-07', '+62 207 415 6063'),
(374, 'Gaby Balding', '499 Green Ridge Street', '2021-06-29', '+1 308 946 5010'),
(375, 'Bondon De Santos', '0 Forest Pass', '2019-05-17', '+62 631 638 7358'),
(376, 'Freddie Noblet', '0 Mifflin Center', '2021-03-04', '+679 241 956 0010'),
(377, 'Lucius Duigenan', '7681 Havey Court', '2021-10-05', '+51 157 756 9517'),
(378, 'Lindsey Marciek', '97213 Golf Course Place', '2019-09-07', '+1 571 173 0984'),
(379, 'Dorey McClinton', '77 Claremont Circle', '2021-11-17', '+351 297 409 4440'),
(380, 'Britni Storcke', '45 Westridge Point', '2021-07-19', '+502 535 589 5640'),
(381, 'Faye Tallman', '1426 Tomscot Place', '2021-04-04', '+86 327 247 8729'),
(382, 'Kleon Seefus', '27661 Bluejay Drive', '2020-05-21', '+55 170 505 8346'),
(383, 'Dotty Alentyev', '684 Waxwing Street', '2020-02-16', '+1 267 387 1667'),
(384, 'Noelyn Sidon', '20564 Eagle Crest Crossing', '2020-05-04', '+62 657 520 6779'),
(385, 'Ely Gosnold', '80 Coolidge Trail', '2020-04-11', '+86 827 189 4295'),
(386, 'Darci Dellatorre', '907 Northview Crossing', '2020-06-18', '+31 592 455 5014'),
(387, 'Wanda Bertomieu', '4997 Becker Crossing', '2020-04-11', '+62 577 348 5551'),
(388, 'Conroy Grodden', '509 Elka Plaza', '2020-05-22', '+358 719 354 5012'),
(389, 'Goran Danit', '982 Norway Maple Court', '2020-06-10', '+86 719 416 7542'),
(390, 'Carolin Duff', '4 Fulton Plaza', '2020-01-28', '+62 653 961 7395'),
(391, 'Hanna Burnhams', '83 Melvin Terrace', '2019-09-25', '+86 834 619 9263'),
(392, 'Shamus Grugerr', '39056 Luster Road', '2020-06-07', '+46 768 742 4089'),
(393, 'Crystie Rusbridge', '1 Northridge Trail', '2020-06-04', '+62 964 177 7877'),
(394, 'Winonah Hartington', '9921 Fairfield Point', '2021-10-10', '+593 529 808 1958'),
(395, 'Edyth Abthorpe', '231 Thierer Center', '2021-05-08', '+86 370 223 8202'),
(396, 'Dun Tomasutti', '83601 Brown Way', '2020-05-26', '+62 770 134 9243'),
(397, 'Cleve Carlet', '73 Northwestern Alley', '2020-11-25', '+224 301 461 2338'),
(398, 'Paulette Vice', '5 Birchwood Junction', '2019-07-07', '+591 186 104 2437'),
(399, 'Tamar Bimrose', '2137 Arizona Parkway', '2019-10-29', '+86 334 139 9845'),
(400, 'Roxana Euston', '13 Muir Junction', '2021-07-25', '+62 415 971 8078'),
(401, 'Jourdain Trott', '3226 Monica Junction', '2020-06-25', '+591 225 223 9863'),
(402, 'Adolphe Pawelczyk', '8119 Merchant Way', '2021-09-19', '+62 276 269 3567'),
(403, 'Brok Steanson', '676 Summer Ridge Pass', '2021-11-18', '+375 402 903 5089'),
(404, 'Hildegarde Dowman', '95 Eggendart Junction', '2020-12-17', '+33 846 503 4756'),
(405, 'Nataline MacQuarrie', '39323 Ridge Oak Lane', '2019-06-11', '+57 248 618 9969'),
(406, 'Boothe Cullingworth', '4009 Gerald Alley', '2019-06-05', '+386 434 357 0664'),
(407, 'Cory Eveque', '869 Laurel Crossing', '2022-01-03', '+57 740 265 5335'),
(408, 'Cheri Stodit', '52 Glacier Hill Plaza', '2020-12-30', '+7 131 781 3234'),
(409, 'Carlos Belford', '50 Commercial Junction', '2021-07-03', '+261 106 133 1982'),
(410, 'Teddi Bruggeman', '01 Service Way', '2021-04-29', '+86 569 955 7572'),
(411, 'Tammi Hart', '13 Dennis Alley', '2019-05-16', '+53 559 731 4988'),
(412, 'Shawna Genders', '75 Trailsway Road', '2019-05-09', '+81 598 641 7777'),
(413, 'Augusta Greenway', '666 Dexter Pass', '2021-07-31', '+62 630 964 4402'),
(414, 'Lizbeth Tradewell', '1 Sundown Way', '2020-10-24', '+57 400 436 0490'),
(415, 'Nalani Million', '587 Nobel Point', '2020-02-25', '+370 248 748 8489'),
(416, 'Dex Coast', '253 Lakeland Avenue', '2020-02-28', '+63 230 750 8255'),
(417, 'Edan Simondson', '04221 Browning Lane', '2020-03-29', '+33 232 730 9785'),
(418, 'Ericha Depper', '21 Forest Run Alley', '2020-12-04', '+86 234 485 5230'),
(419, 'Jerald Kingdon', '95 Rowland Park', '2019-09-06', '+1 797 463 3687'),
(420, 'Mariel Pellett', '53251 Brentwood Point', '2020-12-28', '+261 185 314 7118'),
(421, 'Edeline Bladder', '213 Rigney Point', '2021-03-17', '+86 384 877 7144'),
(422, 'Livia Dome', '08 Hallows Pass', '2020-09-17', '+66 536 275 9199'),
(423, 'Carmen Paver', '48072 Monument Street', '2019-08-20', '+963 592 606 4358'),
(424, 'Dee dee Reisenberg', '6 Utah Park', '2019-07-24', '+7 971 735 6438'),
(425, 'Leontine Oliphant', '5 Shopko Trail', '2021-12-12', '+47 627 136 2766'),
(426, 'Merrile Camblin', '8985 Rusk Road', '2019-09-12', '+86 229 293 1663'),
(427, 'Licha Wodham', '0486 Prairie Rose Alley', '2019-08-18', '+62 910 566 7087'),
(428, 'Perkin Balazot', '333 Mayfield Road', '2021-11-12', '+63 112 245 0283'),
(429, 'Malina Ingraham', '856 Melby Street', '2021-03-15', '+63 802 928 6018'),
(430, 'Gardy Haydock', '7824 Lakewood Park', '2019-07-16', '+351 861 164 2580'),
(431, 'Basia Camelia', '505 Little Fleur Hill', '2020-08-09', '+31 375 537 0872'),
(432, 'Dominique Lindner', '0290 Hovde Crossing', '2020-11-01', '+52 175 751 0030'),
(433, 'Karmen Filan', '26 Dorton Alley', '2021-05-14', '+86 168 818 5159'),
(434, 'Allyn Smee', '652 David Park', '2019-08-02', '+240 157 124 8157'),
(435, 'Morry Attwool', '4221 Scoville Way', '2020-12-06', '+58 799 106 5418'),
(436, 'Walt Chislett', '53 Mayer Park', '2019-07-30', '+81 279 269 9496'),
(437, 'Renaud VanBrugh', '920 Pleasure Trail', '2020-05-30', '+33 230 653 1542'),
(438, 'Vittorio Braim', '261 Crownhardt Circle', '2019-11-25', '+46 739 413 1195'),
(439, 'Merline Colbrun', '34720 Dahle Trail', '2021-03-19', '+52 717 384 6354'),
(440, 'Alfy Pardy', '3 Steensland Court', '2020-06-19', '+46 389 998 7865'),
(441, 'Graeme Bezants', '3604 Gateway Drive', '2021-05-25', '+381 387 935 8531'),
(442, 'Dorey Yanez', '625 Eliot Crossing', '2019-10-22', '+351 785 648 7028'),
(443, 'Fanchette Emmerson', '96 Dwight Junction', '2020-10-02', '+55 674 515 5155'),
(444, 'Noreen De Mitri', '43 Basil Plaza', '2020-05-02', '+51 487 633 8623'),
(445, 'Mandi Segar', '08 Arrowood Pass', '2019-11-09', '+591 142 495 2743'),
(446, 'Harli Rigeby', '35 Jana Street', '2019-12-10', '+86 542 684 3696'),
(447, 'Darla Aberdeen', '6 Mitchell Place', '2020-04-26', '+63 174 134 3718'),
(448, 'Arlena Bernardino', '71278 Bayside Terrace', '2019-12-19', '+46 379 580 8998'),
(449, 'Ami Lidgey', '9366 Lakeland Court', '2020-10-25', '+86 337 774 8302'),
(450, 'Ana Kalkofer', '00133 Merchant Court', '2020-03-19', '+62 983 767 3217'),
(451, 'Gabrila Kahler', '0245 Hallows Park', '2019-11-28', '+81 501 468 2190'),
(452, 'Rae Devany', '59559 2nd Point', '2020-04-14', '+1 202 177 9328'),
(453, 'Elsi Ebbers', '4 Sachtjen Pass', '2021-03-01', '+351 356 721 0928'),
(454, 'Woody Witherspoon', '410 Trailsway Park', '2021-03-24', '+234 939 792 0336'),
(455, 'Rufus Garfirth', '057 Westerfield Alley', '2021-02-27', '+86 805 659 6509'),
(456, 'Gianni Penwarden', '83 Caliangt Pass', '2020-09-01', '+86 289 290 3339'),
(457, 'Myrtia Whates', '63328 Fairfield Drive', '2019-06-03', '+507 934 421 6130'),
(458, 'Maurine Hethron', '5 Crowley Pass', '2020-06-15', '+62 625 917 8885'),
(459, 'Oswell O\' Mullane', '09669 Stuart Street', '2021-09-09', '+51 835 641 2390'),
(460, 'Gery Bullard', '19515 Washington Circle', '2021-08-15', '+86 907 550 1464'),
(461, 'Cristiano Tillett', '9 Banding Center', '2021-05-31', '+86 867 155 4162'),
(462, 'Natty Lalley', '861 Thierer Way', '2021-08-23', '+7 144 738 6748'),
(463, 'Marlyn Sobieski', '660 Grasskamp Lane', '2021-02-08', '+46 643 589 1225'),
(464, 'Hynda Eadington', '8 Thackeray Court', '2020-06-30', '+503 364 762 4317'),
(465, 'Monro Beadle', '116 Independence Hill', '2021-03-30', '+375 397 111 2536'),
(466, 'Nickie Mc Faul', '3 David Pass', '2021-04-16', '+355 227 188 2730'),
(467, 'Opaline Silby', '474 Schiller Junction', '2021-07-12', '+86 217 485 6862'),
(468, 'Eva Plante', '6 Kensington Point', '2020-08-12', '+62 749 205 5748'),
(469, 'Travus Savidge', '45702 3rd Way', '2020-04-12', '+81 191 237 6348'),
(470, 'Dar Pieters', '729 Ridge Oak Road', '2020-02-21', '+261 724 739 7882'),
(471, 'Randy Reynault', '267 Center Parkway', '2020-03-29', '+351 540 470 7808'),
(472, 'Garrott Baish', '22 Badeau Parkway', '2020-04-11', '+55 944 327 6811'),
(473, 'Viviana Wettern', '885 Independence Circle', '2019-10-12', '+86 103 572 6524'),
(474, 'Francklyn Ranstead', '9256 Ilene Court', '2019-06-03', '+84 917 771 2507'),
(475, 'Ivar Fiddiman', '5676 Basil Lane', '2020-02-18', '+51 802 851 2775'),
(476, 'Temple Cranmore', '66012 Algoma Pass', '2020-06-08', '+970 145 743 0498'),
(477, 'Marilyn Fynan', '64 Washington Drive', '2021-02-12', '+880 943 131 7610'),
(478, 'Kirby Mangenot', '695 Hansons Avenue', '2019-06-06', '+55 632 653 8120'),
(479, 'Maddie Costy', '7503 Di Loreto Circle', '2020-07-04', '+359 425 908 3873'),
(480, 'Con Greenhow', '735 Cardinal Trail', '2021-06-08', '+62 670 862 3626'),
(481, 'Tabb Cridlon', '43404 Northland Alley', '2021-11-09', '+63 732 804 0271'),
(482, 'Conan Andric', '960 Bluestem Alley', '2020-07-18', '+48 436 814 1403'),
(483, 'Brandtr Brimming', '15 Steensland Circle', '2020-07-16', '+227 821 319 5570'),
(484, 'Terese Ralls', '54746 Dapin Parkway', '2020-12-17', '+7 175 984 6788'),
(485, 'Kym Oxbe', '4774 Bultman Center', '2020-12-11', '+359 880 741 0168'),
(486, 'Celka Pattlel', '35 Dorton Alley', '2020-02-08', '+54 288 389 3106'),
(487, 'Bud Gianninotti', '40 Buell Drive', '2021-05-23', '+62 272 785 4946'),
(488, 'Ulysses Boise', '35231 Northfield Way', '2021-05-28', '+996 715 475 8244'),
(489, 'James Vobes', '107 Bunker Hill Court', '2021-08-15', '+86 150 974 3238'),
(490, 'Electra Quye', '44 Everett Alley', '2022-01-03', '+30 104 466 1627'),
(491, 'Brew Hounson', '042 Elka Pass', '2020-01-26', '+386 865 665 2352'),
(492, 'Spenser Coolbear', '5312 Kenwood Center', '2020-07-24', '+49 265 826 0739'),
(493, 'Vi Blaxton', '0885 Everett Avenue', '2020-01-23', '+51 614 252 4279'),
(494, 'Jeniffer Dupoy', '2 Barby Place', '2021-11-10', '+62 878 765 6710'),
(495, 'Jens Gommery', '70 Thierer Lane', '2021-04-04', '+351 311 118 8411'),
(496, 'Cinnamon Duckerin', '3476 Manitowish Center', '2021-12-14', '+86 563 771 2679'),
(497, 'Marcille Reekie', '1 Mosinee Place', '2021-09-11', '+46 654 887 7847'),
(498, 'Alison Mabone', '31460 Arkansas Trail', '2019-10-14', '+58 855 550 0899'),
(499, 'Cybill Camosso', '81795 Green Ridge Crossing', '2021-11-25', '+46 604 442 7367'),
(500, 'Dael Jiroutka', '81869 Ohio Point', '2021-08-06', '+81 303 335 4292');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id_owner` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `nomer_hp` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id_owner`, `nama_admin`, `nomer_hp`, `email_admin`, `password`) VALUES
(1, 'Yoga', '082230270135', 'yoga@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama_pelanggaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `id_jenis`, `nama_pelanggaran`) VALUES
(1, 1, 'maling'),
(2, 1, 'Merampok Bank'),
(3, 3, 'Mencuri Buah');

-- --------------------------------------------------------

--
-- Table structure for table `semuadata`
--

CREATE TABLE `semuadata` (
  `id_data` int(11) NOT NULL,
  `id_napi` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `lama_hukuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `napi`
--
ALTER TABLE `napi`
  ADD PRIMARY KEY (`id_napi`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `semuadata`
--
ALTER TABLE `semuadata`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_pelanggaran` (`id_pelanggaran`),
  ADD KEY `id_napi` (`id_napi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `napi`
--
ALTER TABLE `napi`
  MODIFY `id_napi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semuadata`
--
ALTER TABLE `semuadata`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`);

--
-- Constraints for table `semuadata`
--
ALTER TABLE `semuadata`
  ADD CONSTRAINT `semuadata_ibfk_2` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id_pelanggaran`),
  ADD CONSTRAINT `semuadata_ibfk_3` FOREIGN KEY (`id_napi`) REFERENCES `napi` (`id_napi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
