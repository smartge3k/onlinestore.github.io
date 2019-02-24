-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2018 at 03:44 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaheeno_outdoors`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandId` int(11) NOT NULL,
  `BrandName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandId`, `BrandName`) VALUES
(1, 'Buck'),
(2, 'Victorionox'),
(3, 'Coleman'),
(4, 'Maglite'),
(5, 'Highlander'),
(6, 'Campingaz'),
(7, 'Colghans'),
(8, 'Thermos'),
(9, 'Limb Saver'),
(10, 'MTM'),
(12, 'Browning'),
(13, 'FirePower'),
(14, 'Mossy Oak'),
(15, 'Beretta');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` int(255) NOT NULL,
  `ProdId` int(255) NOT NULL,
  `Items` int(255) NOT NULL,
  `TotalBill` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `CatId` int(255) NOT NULL,
  `CatName` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`CatId`, `CatName`) VALUES
(1, 'Air Guns'),
(2, 'Thermoses'),
(3, 'Camping'),
(4, 'Footwear'),
(5, 'Hunting Accessories'),
(6, 'Knives'),
(7, 'Lights'),
(8, 'Packs & Bags'),
(9, 'Shooting Accessories'),
(10, 'Archery');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(1000) NOT NULL,
  `Message` varchar(5000) NOT NULL,
  `Contact` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paid`
--

CREATE TABLE `paid` (
  `FName` varchar(1000) NOT NULL,
  `Contact` varchar(1000) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Payment Mode` varchar(10000) NOT NULL,
  `Total Bill` varchar(10000) NOT NULL,
  `Id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid`
--

INSERT INTO `paid` (`FName`, `Contact`, `Address`, `Payment Mode`, `Total Bill`, `Id`) VALUES
('sfsdf', '03331548575', 'sdf', 'Bank Transfer', 'Rs. 2350sdfsdf', 14),
('Harami', '03341133750', 'Harami Behan Chowd Kutteya', 'Visa', 'Rs. 2239', 15),
('', '', '', '', '', 16),
('Harami Khan', '03348887666', 'harai', 'Jazz Cash', 'Rs. 5239', 17),
('usman', '03138865998', 'sfds eddks ei dkke iewl', 'Easy Pay', 'Rs. 2500', 18);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProdId` int(255) NOT NULL,
  `ProdName` varchar(1000) NOT NULL,
  `ProdCode` varchar(1000) NOT NULL,
  `ProdDesc` varchar(10000) NOT NULL,
  `ProdColor` varchar(1000) NOT NULL,
  `ProdColor1` varchar(1000) DEFAULT NULL,
  `ProdColor2` varchar(1000) DEFAULT NULL,
  `ProdColor3` varchar(1000) DEFAULT NULL,
  `ProdColor4` varchar(1000) DEFAULT NULL,
  `ProdPrice` varchar(1000) NOT NULL,
  `ProdAvailable` varchar(1000) NOT NULL,
  `ProdSale` varchar(1000) NOT NULL,
  `ProdBrand` varchar(1000) NOT NULL,
  `CustReview` varchar(20000) NOT NULL,
  `ProdDetails` varchar(1000) DEFAULT NULL,
  `img` varchar(1000) NOT NULL,
  `img1` varchar(1000) DEFAULT NULL,
  `img2` varchar(1000) DEFAULT NULL,
  `img3` varchar(1000) DEFAULT NULL,
  `img4` varchar(1000) DEFAULT NULL,
  `CatId` int(11) NOT NULL,
  `SubCatId` int(11) DEFAULT NULL,
  `BrandId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProdId`, `ProdName`, `ProdCode`, `ProdDesc`, `ProdColor`, `ProdColor1`, `ProdColor2`, `ProdColor3`, `ProdColor4`, `ProdPrice`, `ProdAvailable`, `ProdSale`, `ProdBrand`, `CustReview`, `ProdDetails`, `img`, `img1`, `img2`, `img3`, `img4`, `CatId`, `SubCatId`, `BrandId`) VALUES
(1, 'BROWNING CAP', '1', 'Browning caps are comfortable, good looking, and will last you a long time. There\'s no easier way to show your Buckmark. You\'ll wear it to the office, to the woods, to hang out with friends. We have a variety of styles, fits, and colors to suit your tastes.', 'BLACK', 'BROWN', NULL, NULL, NULL, '2239', 'Yes', 'No', 'BROWNING', '', 'NEW for 2018 — Snapback, meshback with raised embroidered Buckmark', 'BROWNING/Browning Cap', 'BROWNING/Browning Cap2', 'BROWNING/Browning Cap4', 'BROWNING/Browning Cap6', 'BROWNING/Browning Cap7', 9, 14, 12),
(2, 'TRIFOLD WALLET', '2', 'The tri-fold Wallet is a deluxe travel wallet for seasoned travelers. Open it up and you’ll find dedicated card slots and a large pocket for currency. Fold it up and keep your currency and credit cards safe and secure. Put it in your pocket and you’re ready for departure.', 'BLACK', NULL, NULL, NULL, NULL, '203', 'Yes', 'Yes', 'Victorianox', 'Nil', 'Secure currency and credit cards<br>\r\nMicro-mesh ID slot<br>\r\nElastic band keeps wallet closed<br>\r\nSize -> 3 x 9 x 10 cm <br>\r\nWeight -> 0.1 kg', 'Victorianox/TRIFOLD WALLET1', 'Victorianox/TRIFOLD WALLET', NULL, NULL, NULL, 8, NULL, 2),
(3, 'MM3 E MOTOR MOUNT', '3', 'Compact motor mount for all Sevylor® boats to be equipped with gasoline engines or electric motors. Telemart offers you the best Campingaz MM3 E Motor Mount price in Pakistan! What are you waiting for? Start Carting and shopping only at Telemart.pk!', 'BLACK', 'BROWN', NULL, NULL, NULL, '10399', 'Yes', 'No', 'Campingaz', 'Nil', NULL, 'CAMPINGAZ/MM3 E MOTOR MOUNT', NULL, NULL, NULL, NULL, 3, 3, 6),
(4, 'FOLDING HUNTER KNIFE', '4', 'The 110 Folding Hunter is a classic and traditional favorite! Buck\'s Folding Hunter was created in 1963 when Al Buck decided that a revolutionary lockblade knife was needed by outdoorsmen who wanted a sturdy knife but did not want to carry a long, fixed blade knife. He was right and the result proved to be the key to the company\'s future. The challenge was to combine the strengths of other folding knives with locking mechanisms into a good-looking, reliable product. It wasn\'t easy, but after a series of refinements, the Model 110 was unveiled. Within six months, this innovation was the hottest knife in the industry. \r\n\r\nThe Folding Hunter®, after over 50 years, is still one of America\'s best-selling knives. Made in the USA.\r\n', 'BLACK', NULL, NULL, NULL, NULL, '9184', 'Yes', 'NO', 'Buck', 'Nil', 'BLADE: Satin Finish, 420HC Stainless Steel<br>\r\nBLADE SHAPE: ClipBLADE<br> \r\nTHICKNESS:.120\"BLADE LENGTH:3 3/4\" (9.5 cm)<br>\r\nWEIGHT: 7.2 oz (205 g)<br>\r\nHANDLE: Macassar Ebony Dymondwood<br>\r\nCARRY SYSTEM: Genuine leather sheath, black<br>\r\n', 'BUCK/110 AUTO KNIFE', 'BUCK/110 FOLDING HUNTER KNIFE1', 'BUCK/112 RANGER KNIFE FINGER GROOVE1', 'BUCK/110 FOLDING HUNTER KNIFE FINGER GROOVED1', NULL, 6, 6, 1),
(5, 'UNIVERSAL PEELER ', '5', 'Cooking is an art where you draw with taste and dress with colors. As the master of your kitchen, you deserve the right tools to express your creativity. This is when the Victorinox Universal Peeler comes in handy. Its serrated edge is ready to face the firmest peels while its ergonomic handle makes cooking as fun as it is easy.\r\n', 'BLACK', 'GREEN', 'PINK', 'ORANGE', 'YELLOW', '3000', 'Yes', 'Yes', 'Victorianox', 'Nil', 'Ideal for fruits and vegetables with soft or hard shells<br>\r\nSwiss made peeler with serrated edge<br>\r\nWith an ultrasharp edge for firm peel and an ergonomic handle', 'Victorianox/UNIVERSAL PEELER - BLACK', 'Victorianox/UNIVERSAL PEELER - ORANGE', 'Victorianox/UNIVERSAL PEELER - YELLOW', 'Victorianox/UNIVERSAL PEELER - GREEN', 'Victorianox/UNIVERSAL PEELER - PINK', 6, 16, 2),
(6, 'LARGE FOLDABLE DUFFEL', '6', 'This spacious duffel bag is capable of holding everything you need for an extended trip and comes with a compact carrying case to make traveling easier. Large, U-shaped opening into main compartment provides easy access to contents. Front zippered pocket for personal electronics, keys or other small items. Removable, adjustable padded shoulder strap. Dual haul handles with unifying wrap for carrying ease. Lockable YKK Racquet Coil zippers. Includes compact carrying case with haul handle and secure buckle closure for easy transport.', 'BLACK', 'RED', NULL, NULL, NULL, '11648', 'Yes', 'Yes', 'Victorianox', 'Nil', 'Large, U-shaped opening into main compartment provides easy access to contents and front zippered pocket can store personal electronics, keys or other small items.<br>\r\nFront zippered pocket for personal electronics, keys or other small items\r\nRemovable, adjustable padded shoulder strap and lockable YKK Racquet Coil zippers', 'Victorianox/ACCESSORIES 4.0 EXTRA-LARGE FOLDABLE DUFFEL - RED', 'Victorianox/ACCESSORIES 4.0 LARGE TRAVEL FOLDABLE DUFFEL - RED', 'Victorianox/ACCESSORIES 4.0 LARGE TRAVEL FOLDABLE DUFFEL - RED1', NULL, NULL, 8, NULL, 2),
(7, 'COOLER WITH FAUCET & SPOUT', '7', 'Keep the group hydrated at campouts, picnics and tailgate parties with the Coleman® 2 Gallon Jug with faucet. The durable construction keeps the cooler cold and stands up to the wear and tear of the outdoors. You choose whether to fill your cup from the tabletop fast-flow faucet or pour from the spout on top. The hinged bail handle even makes carrying simple too. \r\n\r\n', 'WHITE', 'BLUE', 'RED', NULL, NULL, '3300', 'Yes', 'Yes', 'Coleman', 'Nil', 'ThermOZONE™ Insulation contains no CFCs, HFCs or HCFCs, which deplete the ozone\r\nKeep cool on hot days with ice-cold water\r\nWide-mouth top and twist-on cap for easy filling\r\nDrip-resistant faucet to fill a drink\r\nFlip-top spout for a quick drink\r\nDurable design resists dents, scratches and fading\r\nLarge bail handle makes carrying easier', 'COLEMAN/2 GALLON COOLER WITH FAUCET & SPOUT2', 'COLEMAN/2 GALLON PARTY STACKER COOLER3', 'COLEMAN/2 GALLON PARTY STACKER COOLER4', NULL, NULL, 0, NULL, 3),
(8, 'CHINESE CHEF CHOPPER', '8', 'It looks like a meat cleaver; but take a closer look and you\'ll find a delicate, sharp edge and a far lighter feel. And it\'s a master of versatility. It can chop, slice and mince as well as any Chef\'s Knife. But it can also smash, scrape and scoop. When it\'s time to up your culinary game, the Chinese Chef\'s Knife is ready.<br> Victorinox AG guarantees all knives and tools to be of first class stainless steel and also guarantees a life time against any defects in material and workmanship (save for electronic components 2 years). Damage caused by normal wear and tear, misuse or abuse are not covered by this guarantee.\r\n', 'BLACK', NULL, NULL, NULL, NULL, '3470', 'Yes', 'No', 'Victorionox', 'Nil', 'Well-balanced Chinese-style utility knife\r\nFibrox handle<br>\r\nElegant design<br>\r\nLength of blade	-> 18 cm<br>\r\nWeight -> 273 g', 'Victorianox/CHINESE CHEF CHOPPER 18 CM - BLACK', NULL, NULL, NULL, NULL, 6, 18, 2),
(9, 'UNIVERSAL CAN OPENER', '9', 'Whether for chefs or butchers: the knife is the most important tool of the trade in both professions. Victorinox professional knives stand out thanks to their high-quality, durable materials and ergonomic design as well as being carefully developed for their intended purpose. Thanks to the broad product range, every professional will find the right knife for his or her specific requirements. The right blade hardness and the laser-tested cutting angle guarantee high edge retention.', 'RED', 'BLACK', NULL, NULL, NULL, '860', 'Yes', 'Yes', 'Victorianox', 'Nil', 'Bottle opener or a can opener<br>\r\nMade of stainless steel and polypropylene<br>\r\nLifetime warranty<br>\r\nFunction:	Kitchen accessories<br>\r\nMaterial:	stainless steel', 'Victorianox/UNIVERSAL CAN OPENER - BLACK', 'Victorianox/UNIVERSAL CAN OPENER - RED', NULL, NULL, NULL, 6, 16, 2),
(10, 'CLASSIC STICKING KNIFE', '10', 'A favorite of professionals, the 7\" Fibrox? Pro Boning Knife features our popular non-slip Fibrox? Pro grip, which is exceedingly important when intricately separating meat, poultry and fish from the bone. The handle, as well as its razor sharp edge, are just some of the reason it continues to be Highly Recommended by a leading gourmet ratings and reviews publication year after year. Swiss Made.', 'BLUE', 'YELLOW', 'RED', NULL, NULL, '2999 ', 'Yes', 'Yes', 'Victorianox', 'Nil', 'Ultra-sharp edge<br>\r\nErgonomic handle<br>\r\nDishwasher safe<br>\r\nFIBROX Handle (HACCPP)<br>\r\nBoning & Sticking Knife<br>\r\nBlade Length: 7 inches<br>', 'Victorianox/SWISSCLASSIC BONING & STICKING KNIFE 18 CM - BLUE', 'Victorianox/SWISSCLASSIC BONING & STICKING KNIFE 18 CM - RED', 'Victorianox/SWISSCLASSIC BONING & STICKING KNIFE 18 CM - YELLOW', NULL, NULL, 6, 18, 2),
(11, 'SWISSCLASSIC PARING KNIFE', '11', 'A paring knife is every chef’s go-to tool for precision jobs in the kitchen, and our Swiss Classic Paring Knife 8 cm is a knife drawer standout not only for its fresh color palette but also for its sharp edge and pointed tip. Expertly remove pepper seeds, swiftly core an apple, slice a pile of vegetables into sticks or finely dice them into perfect little squares – whatever job you give it, the smooth, uniform cuts of this Paring Knife will result in dishes that are as beautiful as they are nutritious.\r\n', 'YELLOW', 'GREEN', 'ORANGE', 'PINK', NULL, '300', 'Yes', 'Yes', 'Victorianox', 'Nil', 'Weight -> 25 g<br>\r\nBlade Properties -> pointed tip<br> \r\nLength of blade -> 8 cm<br>\r\nHandle material -> polypropylene (PP) ', 'Victorianox/SWISSCLASSIC PARING KNIFE 8 CM - GREEN', 'Victorianox/SWISSCLASSIC PARING KNIFE 8 CM - ORANGE', 'Victorianox/SWISSCLASSIC PARING KNIFE 8 CM - PINK', 'Victorianox/SWISSCLASSIC PARING KNIFE 8 CM - YELLOW', NULL, 6, 18, 2),
(12, '12-IN-1 SCISSORS', '9575', 'A multi-purpose stainless steel tool with 12 useful functions: scissor, knife, screwdriver, magnet, can opener, wrench, fish scaler, nut cracker, jar wrench, wire cutter, wire stripper and bottle opener.', 'RED', 'SILVER', NULL, NULL, NULL, '672.13', 'Yes', 'No', 'Coghlan', 'Nil', 'Includes scissors, wire cutters and strippers, a knife, screwdriver, magnet, can opener, wrench, jar wrench, fish scaler, nut cracker and bottle opener. Perfect addition to the cabin, the RV or the tool box for a variety of applications. Crafted from durable stainless steel for long-lasting performance. Affordable, essential gear for camping, backpacking, backcountry treks, international travel, and more.', 'Coghlan/12-IN-1 SCISSORS', NULL, NULL, NULL, NULL, 3, 0, 7),
(13, 'FOUR FUNCTION WHISTLE', '669627', '-', 'BLACK', NULL, NULL, NULL, NULL, '520.58', 'Yes', 'No', 'Coghlan', 'Nil', 'Features a loud, pealess whistle, Fahrenheit/Celsius thermometer, magnifying lens and compass with glow-in-the-dark dial. Spring-loaded metal clip for attachment to a belt or lanyard', 'Coghlan/FOUR FUNCTION WHISTLE', NULL, NULL, NULL, NULL, 3, 0, 7),
(14, 'MATT WOULD GO', '0245MCSMWG-B', 'The 245 Matt Would Go (MWG) represents a partnership between Buck Knives and Tim Leathers, father of fallen Navy SEAL, Matt Leathers. Designed and created with Navy SEALS in mind, the MWG is a tough and durable tool with a well-balanced construction. As a highly decorated SEAL, Matt Leathers had a reputation for never turning down a mission. In fact, his fellow SEALS knew that when a call to duty arrived, “Matt would go.” ', 'CUSTOM MULTICOLOR MICRATA', NULL, NULL, NULL, NULL, '28363', 'Yes', 'Yes', 'Buck', 'Nil', '<ul>\r\n<li>BLADE SHAPE:Drop Point</li>\r\n<li>BLADE LENGTH:4\" (10.2 cm)</li>\r\n<li>WEIGHT:6.3 oz. (179.4 g)</li>\r\n<li>HANDLE:MICARTA</li>\r\n<li>ORIGIN:Made in the USA</li>\r\n</ul>', 'BUCK/MATT WOULD GO1', 'BUCK/MATT WOULD GO2', NULL, NULL, NULL, 6, 17, 1),
(15, 'NITRO FORCE GUN REST', '13', 'Precision shooting has never been easier thanks to the LimbSaver SmartRest NitroForce SR-01. Smooth, accurate movements with a wide range of motion are what makes this rest superior to anything else on the market. Adjustable tensioners provide just the right amount of tension and have handy shock-stops to aid in shot repeatability. Assembles in minutes, is smaller than most traditional rests, and weighs less than 5 pounds for convenient storage and effortless transporting. Can be used on a bench, vehicle hood or tailgate, and other flat, solid surfaces.', 'BLACK', NULL, NULL, NULL, NULL, '14560', 'Yes', 'Yes', 'LimbSaver', 'Nil', 'Works with most rifles; Assembles in minutes<br>\r\nMore compact than most rests; Weights less than 5lbs<br>\r\nCan be used on a bench, vehicle hood or tailgate, and other flat, solid surfaces<br>\r\nInnovative pneumatic design aids in shot precision and repeat-ability', 'Shooting Acessories/Shooting rest & Sticks/Limbsaver SmartRest Nitro Force Gun Rest1', 'Shooting Acessories/Shooting rest & Sticks/Limbsaver SmartRest Nitro Force Gun Rest2', NULL, NULL, NULL, 9, 11, 9),
(16, 'ISOTHERM EXTREME 1.5L', '2000026031', 'Keep drinks cold or hot for hours with an insulated flask Isotherm Extreme 1.5L. It\'s even more comfortable for carrying – ideal for hiking, work or picnics.', 'BLUE', NULL, NULL, NULL, NULL, '2200', 'Yes', 'No', 'CAMPINGAZ', 'Nil', '<ul>\r\n<li>Capacity: 1.5L</li>\r\n<li>Insulation: PU CFC/HCFC FREE</li>\r\n<li>Material: Interior/Exterior: Polypropylène</li>\r\n<li>Cap of the bottle doubles as a small cup – pour water in and drink on the go!</li>\r\n<li>Weight: 505g</li>\r\n<li>Dimensions (LxHxW): 17.6 x 10.7 x 29.4 cm</li>\r\n</ul>', 'CAMPINGAZ/ISOTHERM EXTREME 1', NULL, NULL, NULL, NULL, 3, 3, 6),
(17, 'WINDSHIELD SHADE ', 'BWS1006', 'This Browning windshield shade provides Browning quality protection for your car\'s interior, keeping your car comfortable and cool. One side features your favorite brand and camo, while the other side features a reflective silver foil with a single-ply bubble pad in between. Accordian style fold provides quick and easy installation and storage.', 'BLACK', NULL, NULL, NULL, NULL, '1679', 'Yes', 'Yes', 'BROWNING', 'Nil', 'Browning Windshield Shade<br>\r\nOpposite side features reflective silver foil<br>\r\nSingle-ply bubble pad between reflective foil<br>\r\nProtects interior from harmful UV rays and keeps surfaces cooler<br>\r\nAccordion fold for easy storage<br>', 'BROWNING/Windshield Shade', NULL, NULL, NULL, NULL, 3, 5, 12),
(18, 'FIELD MASTER KNIVES', '2563', 'EASY CLEAN SHEATH- Heavy-duty sheath has removable liners for easy cleaning and de-scenting. The built-in zipper pocket holds tags and other necessities. An adjustable belt strap makes carrying this pack easy and comfortable. Remove liners before washing\r\nMADE IN THE USA - FOREVER WARRANTY - Since 1902 Buck Knives has offered a lifetime warranty on our knives because we believe in the integrity of our products. This knife is proudly made in the USA.', 'BLACK', 'SILVER', NULL, NULL, NULL, '6158', 'Yes', 'No', 'Buck', 'Nil', 'PACK LITE, CUT EASY - Includes 3.5\" skinning blade, 2.5\" caping blade plus gut hook ring all in Stainless Steel. 420HC Steel delivers Excellent Strength, Edge Retention, and Corrosion Resistance, Total weight 12 oz.\r\nLIGHTWIEGHT, SURGICALLY PRECISE – Each knife is made with a minimalist design that is lightweight, precise and easy to clean. The skeletal frame has blade control cutouts for quick detailed movements in field dressing\r\nCONVENIENT AND COMPACT - All three knives fit compactly in one sheath. Overall Length PakLite 141 Skinner 8\", 135 Caper 6.75\", 499 Guthook, 4.0\" Hunters will appreciate the convenience of having three knives on them for the weight on one!', 'BUCK/PAKLITE FIELD MASTER KNIVES1', 'BUCK/PAKLITE FIELD MASTER KNIVES2', 'BUCK/PAKLITE FIELD MASTER KNIVES3', 'BUCK/PAKLITE FIELD MASTER KNIVES4', NULL, 6, 17, 1),
(19, 'ULTIMATE COOLER 35 L', '204645', 'Combining all the benefits of a soft and hard cooler, the Ultimate 35L is practical, convenient and perfect for a wide variety of uses thanks to its large capacity. 100% foldable, it features a clever Velcro system that enables the unit to be folded down completely and remain folded so that it is very easy to transport and store. A practical removable liner protects the inside of the cooler and can be taken out to clean and dry if necessary. The front storage pocket is handy for holding all of your personal essentials if you are only carrying the cooler to your final destination. The Ultimate coolers feature a sturdy, rigid base and strong moulded lid with 2 cup holders for convenience.', 'BLUE', NULL, NULL, NULL, NULL, '27552', 'Yes', 'No', 'Campingaz', 'Nil', 'Cooling performance: TBC<br>\r\nDimensions: L44 x H12.3 x W31 cm<br> \r\nCapacity: 30L<br>\r\nWeight: 1.6kg<br>\r\nFront velcro pocket is perfect for keys and wallets.<br>\r\nRemovable, adjustable shoulder strap in addition to 3 carry handles with velcro fastening.<br>\r\nEffective performance with 6mm EPE foam insulation.<br>\r\nNylon 70D fabric is resistant and can be wiped clean.', 'CAMPINGAZ/ULTIMATE COOLER 35 L', 'CAMPINGAZ/ULTIMATE COOLER 35L', NULL, NULL, NULL, 3, 3, 6),
(20, 'STAINLESS KING VACCUM', '2334', 'Thermos vacuum insulation technology for maximum cold temperature retention; keeps liquids cold for up to 22 hours. 360 Degree threaded lid is easy to drink from and stays securely in place. Drink spout made from Eastman Tritan material\r\nSweat-proof design won\'t leave water rings. Durable stainless steel interior and exterior; 22 ounce capacity', 'BLACK', 'RED', 'SILVER', NULL, NULL, '2400', 'Yes', 'No', 'Thermos', 'Nil', NULL, 'THERMOS/from thermos website/Stainless King Vacuum Insulated Stainless Steel Tumbler with 360 Degree Drink Lid 20oz 1', 'THERMOS/from thermos website/Stainless King Vacuum Insulated Stainless Steel Tumbler with 360 Degree Drink Lid 20oz 1', NULL, NULL, NULL, 2, 0, 8),
(21, 'CLASSIC ALOX 2016 ', '0.6221.L16', 'It\'s a new year, and that means there\'s a beautiful new color for the Alox Limited Edition. But there\'s more to these knives than just a gorgeous shade of orchid. The celebrated Alox scales have been upgraded with a process called Eloxal, which uses anodic oxidation to create an extra layer of protection against damage and corrosion. Available in three sizes, and only for 2016.', 'VIOLET', NULL, NULL, NULL, NULL, '4319', 'Yes', 'Yes', 'Victorianox', 'Nil', '<ul><li>5 functions</li><li>\r\nHigh-grade Alox scales in orchid</li><li>\r\n2016 limited edition with year engraved on back', 'Victorianox/CLASSIC ALOX LIMITED EDITION 2016 0.6221.L16', 'Victorianox/CLASSIC ALOX LIMITED EDITION 2016 0.6221.L16a', 'Victorianox/CLASSIC ALOX LIMITED EDITION 2016 0.6221.L16b', 'Victorianox/CLASSIC ALOX LIMITED EDITION 2016 0.6221.L16c', NULL, 6, 15, 2),
(22, 'SWISS ARMY CAMO CLASSIC', '', 'The Camo Classic SD Swiss Army Knife by Victorinox features a new design on a traditional Swiss Army Knife favorite.  Beyond its trendy design, the Classic SD is also an excellent and unique key holder. This miniature tool is small enough to fit in any pocket, glove compartment, handbag - anywhere. Make this iconic, Swiss-made multi-tool by the makers of the Original Swiss Army Knife your companion for life.', 'CAMO', NULL, NULL, NULL, NULL, '2240', 'Yes', 'No', 'Victorianox', 'Nil', ' Up to 6 characters can be engraved on the shield side of the Camo Classic SD Swiss Army knife, and up to 10 characters can be engraved on the back of this item.', 'Victorianox/CLASSIC CAMOUFLAGE', 'Victorianox/CLASSIC DESERT CAMOUFLAGE', 'Victorianox/CLASSIC DESERT CAMOUFLAGE1', NULL, NULL, 6, 17, 2),
(23, 'FEATHER CLASSIC', '6485', 'The Classic Limited Edition is back! We called for design submissions, and once again we were blown away. We narrowed down the pool of ideas from 1,022 to 40 and then let Victorinox fans around the world choose their favorite. And they chose well. The top ten selections were produced, and each one offers a lifetime of enjoyment because functionality and creativity never go out of style.', 'SILVER', NULL, NULL, NULL, NULL, '1400', 'Yes', 'No', 'Victorianox', 'Nil', 'Color: Multicolor<br>\r\n1. Blade 2. Nail File With 3. - Screwdriver 4. Scissors 5. Key Ring 6. Tweezers 7. Toothpick', 'Victorianox/FEATHER CLASSIC 0.6223.L1605', 'Victorianox/FEATHER CLASSIC 0.6223.L1605a', 'Victorianox/FEATHER CLASSIC 0.6223.L1605b', NULL, NULL, 6, 19, 2),
(24, 'MAGLITE MAGTAC 2-CELL LED', '', 'Designed with extensive input from military tactical consultants, and yet suitable also for civilian use, this crowned-bezel version of the MAG-TAC LED flashlight comes with a detachable pocket clip and features three modes: Momentary (in which the light stays on only while the switch button is being pressed); Full Power for a dazzling, 320-lumen beam that can light up an object two football fields away; and Strobe for a high-energy 12 Hz strobe that can disorient an opponent. All functions are selectable through Mag Instrument\'s tailcap-switch-activated \"Quick-Click\" mode selector.', 'RED', 'GREEN', 'GOLDEN', 'GREY', 'BLACK', '10640', 'Yes', 'No', 'MAGLITE', 'Nil', 'Water-Resistant Yes - IPX4<br>\r\nType: Tactical<br>\r\nTechnology: LED<br>\r\nLumens: 320 lm<br>\r\nBeam Distance: 193 Meters<br>\r\nBatteries: Included<br>\r\nBattery Type: CR123<br>\r\nBattery Quantity: 2<br>\r\nPower Management: No<br>\r\nRechargeable: No<br>', 'MAGLITE/MAGLITE MAGTAC 2-CELL CR123 CROWNED BEZEL LED - BLACK', 'MAGLITE/MAGLITE MAGTAC 2-CELL CR123 CROWNED BEZEL LED - GOLDEN', 'MAGLITE/MAGLITE MAGTAC 2-CELL CR123 CROWNED BEZEL LED - GREEN', 'MAGLITE/MAGLITE MAGTAC 2-CELL CR123 CROWNED BEZEL LED - RED', 'MAGLITE/MAGLITE MAGTAC 2-CELL CR123 CROWNED BEZEL LED - BLACK', 7, 0, 4),
(25, 'MAGLITE SOLITAIRE 1-CELL AAA LED', '25', 'Superior quality craftsmanship with weather-resistant seals and anodized inside and out for improved corrosion resistance. Adjustable and powerful light beam that makes a useful gift and fits perfectly into pockets, purses, attache cases, etc. Compact design includes a premium alkaline battery with keychain lanyard and a spare lamp safely inside the tailcap. A premium drop resistant and water resistant flashlight renowned for its quality, durability and reliability\r\nAdvanced lighting instrument made in America and built tough enough to last a lifetime making it suitable for camping, climbing, fishing, hunting, etc.', 'RED', NULL, NULL, NULL, NULL, '1120', 'Yes', 'Yes', 'MAGLITE', 'Nil', 'Item Weight: 0.48 ounces<br>\r\nProduct Dimensions: 5.9 x 4.6 x 1 inches<br>\r\nBatteries: 1 AAA batteries required. (included)<br>\r\nDisplay Style: LED<br>\r\nIncluded Components	flashlight;lights;home', 'MAGLITE/MAGLITE SOLITAIRE 1-CELL AAA LED - RED1', 'MAGLITE/MAGLITE SOLITAIRE 1-CELL AAA LED - RED2', NULL, NULL, NULL, 7, 0, 4),
(27, 'MAGLITE XL-200 3-CELL AAA LED ', '68722', 'THE NEWEST MEMBER of of COMPACT FLASHLIGHTS offers FIVE BASIC, EASY-TO-USE FUNCTIONS plus Advanced Features and the STUNNING BRIGHTNESS of a Next-Generation LED. By the simple \"QuickClick\" method introduced with our popular Maglite XL50 flashlight, the XL200 lets the user select the desired function. Motion-controlled variable power level and strobe rate. \r\n', 'BLACK', NULL, NULL, NULL, NULL, '5160', 'Yes', 'Yes', 'MAGLITE', 'Nil', 'Country of origin: USA<br>\r\nNote: As product improvements are made, performance may change without notice\r\nRugged machined aluminum construction, anodized inside and out for improved corrosion resistance. Sealed at both ends with high-grade rubber o-rings and lip seals<br>\r\nAdjustable beam', 'MAGLITE/MAGLITE XL-200 3-CELL AAA LED - BLACK', NULL, NULL, NULL, NULL, 7, 0, 4),
(28, 'MAGLITE LED FLASHLIGHT', '74494', 'Superior quality craftsmanship with weather-resistant seals and anodized inside and out for improved corrosion resistance.<br>\r\nA premium drop resistant and water resistant flashlight renowned for its quality, durability and reliability.<br>\r\nAdvanced lighting instrument made in America with a diamond knurled design and a powerful projecting beam making it suitable for camping, climbing, fishing, hunting, etc.\r\nDesigned for professionals and consumers alike, the Maglite LED flashlights build on the experience in craftsmanship, engineering, and advanced technology evident in all Mag flashlights', 'CAMO', NULL, NULL, NULL, NULL, '5600', 'Yes', 'No', 'MAGLITE', 'Nil', 'Capacity: 625 Lumens<br>\r\nVoltage: V<br>\r\nDimensions: L x W x H<br> \r\nBulb Type: LED<br>', 'MAGLITE/MAGLITE 3-CELL D LED FLASHLIGHT CAMO1', 'MAGLITE/MAGLITE 3-CELL D LED FLASHLIGHT CAMO2', 'MAGLITE/MAGLITE 3-CELL D LED FLASHLIGHT CAMO', NULL, NULL, 7, 0, 4),
(29, 'MAGLITE SOLITAIRE LED FLASHLIGHT', '74594', 'A Keychain-Size Flashlight with Big-Light Power That describes our all-new MAG-LITE SOLITAIRE LED Flashlight. It features the classic look of our original Solitaire flashlight introduced in 1988. And it works in the same simple way just twist the head to turn on, turn off and focus spot to flood. But thanks to a new, state-of-the-art LED light engine, you get something you just wouldn\'t expect to see coming out of a flashlight so small: A blast of power that can light up an object at the far end of the parking lot.', 'BLACK', NULL, NULL, NULL, NULL, '1960', 'Yes', 'No', 'MAGLITE', 'Nil', 'Drop Resistance: 2m<br>\r\nType: Compact<br>\r\nTechnology: LED<br>\r\nLength: 3-3/16 in. 81 mm<br>\r\nBeam Distance: 47 Meters<br>\r\nBatteries: Included<br>\r\nBattery Type: AAA Cell Alkaline<br>\r\nBattery Quantity: 1<br>', 'MAGLITE/MAGLITE SOLITAIRE LED FLASHLIGHT GRAY1', 'MAGLITE/MAGLITE SOLITAIRE LED FLASHLIGHT GRAY2', 'MAGLITE/MAGLITE SOLITAIRE LED FLASHLIGHT GRAY3', 'MAGLITE/MAGLITE SOLITAIRE LED FLASHLIGHT GRAY4', NULL, 7, 0, 4),
(31, 'MAG RECHARGER LED', '6843', 'With the familiar \"Quick-Click\" system users can, within the \"General\" function set, choose:<br><br>\r\n• Full Power (643 Lumens)<br>\r\n• Low Power (148 Lumens)<br>\r\n• Eco Mode - Featuring improved recharging efficiency and a super power saving mode that yields up to 66 lumens with greatly extended run-time.', 'BLACK', NULL, NULL, NULL, NULL, '14560', 'Yes', 'No', 'MAGLITE', 'Nil', 'Type: Full Size<br>\r\nTechnology: LED<br>\r\nLumens: 643 lm<br>\r\nLength: 12 13/16 in. 325.42 mm<br>\r\nBeam Distance: 407 Meters<br>\r\nBarrel Diameter: 1 1/2 in. 38.1 mm', 'MAGLITE/MAG RECHARGER LED1', 'MAGLITE/MAG RECHARGER LED2', 'MAGLITE/MAG RECHARGER LED', 'MAGLITE/MAG RECHARGER LED3', 'MAGLITE/MAG RECHARGER LED5', 7, 0, 4),
(32, 'MAGLITE SOLITAIRE 1-CELL AAA LED', '6483', 'A Keychain-Size Flashlight with Big-Light Power That describes our all-new MAG-LITE SOLITAIRE LED Flashlight. It features the classic look of our original Solitaire flashlight introduced in 1988. And it works in the same simple way just twist the head to turn on, turn off and focus spot to flood. But thanks to a new, state-of-the-art LED light engine, you get something you just wouldn\'t expect to see coming out of a flashlight so small: A blast of power that can light up an object at the far end of the parking lot.', 'BLACK', 'RED', NULL, NULL, NULL, '1960', 'Yes', 'No', 'MAGLITE', 'No', 'Type: Compact<br>\r\nTechnology: LED<br>\r\nLumens: 47 lm<br>\r\nLength: 3-3/16 in. 81 mm<br>\r\nBeam Distance: 47 Meters<br>\r\nBarrel Diameter: 1/2 in. 12.70 mm', 'MAGLITE/MAGLITE SOLITAIRE 1-CELL AAA LED - RED', 'MAGLITE/MAGLITE SOLITAIRE 1-CELL AAA LED - BLACK', 'MAGLITE/MAGLITE SOLITAIRE 1-CELL AAA LED - RED1', 'MAGLITE/MAGLITE SOLITAIRE 1-CELL AAA LED - RED2', NULL, 7, 0, 4),
(36, 'SPEED CAP A-TACS CAMO', '6373', 'Hell’s Canyon Speed is on point, using the very latest design technology and independent testing to ensure that the fabrics we’ve developed can endure the rigors hunters put their gear through. HeroFit tailoring trims away excess weight and bulk, while the abrasion resistant, stretchable fabrics maximize freedom of movement for unmatched durability, mobility, and comfort. Proprietary A-TACS Camo provides superior concealment. ', 'CAMO', NULL, NULL, NULL, NULL, '2240', 'Yes', 'No', 'BROWNING', 'Nil', 'Main Fabric Structure: Woven<br>\r\nMain Fabric Content: Cotton:Polyester<br>\r\n\r\nColor: Camo<br>\r\nGender: M', 'BROWNING/Browning A-Tac Camo Cap1', 'BROWNING/Browning A-Tac Camo Cap', NULL, NULL, NULL, 5, 0, 12),
(37, 'BENCH SEAT COVER', '9879678', 'Protect your vehicle\'s seat with this Bench Seat Cover from Browning. Coated for water resistance, the 600-denier poly fabric takes on your adventures with you. Machine-washable construction makes it easy to care for. Adjustable straps attach to headrests. Elastic corners and tuck bar ensure a secure and near-universal fit. Mesh front pockets provide ample storage. Hook-and-loop openings for access to seatbelts. Imported.', 'CAMO', NULL, NULL, NULL, NULL, '5712', 'Yes', 'No', 'BROWNING', 'Nil', '<ul><li>600-denier poly fabric is coated for water resistance</li><li>\r\nMachine-washable construction is easy to care for</li><li>\r\nAdjustable straps attach to headrests</li><li>\r\nElastic corners and tuck bar ensure a secure fit</li><li>\r\nMesh front pockets provide ample storage</li><li>\r\nHook-and-loop openings for access to seatbelts</ul>', 'BROWNING/Browning Bench Seat Cover', NULL, NULL, NULL, NULL, 5, 0, 12),
(38, 'ALFA RANGE BAG', '121501991', 'Make it from the car to the bench in one trip. A quick trip to the shooting range requires a surprising amount of gear, often more than one bag can hold. The Black Label Alfa Range Bag is the right size to get your ammo, hearing protection, gloves, etc. to the firing line. Built from rugged polyester for years of service, the Alfa Range Bag has padded sides that keep it upright and cushion the contents. A urethane interior coating helps seal out moisture. Composite bumpers on the bottom of the bag add durability. Heavy web handles and a padded sling with no slip coating allow you to transport guns and gear securely.\r\n\r\nThe main compartment features four side pockets to organize ammo or gear and includes a removable accessory bag. This accessory bag has dual, padded pistol pockets and easy holds range necessities. The front compartment is equipped with six elastic magazine retainers and an internal pocket in the flap. Side and rear pockets are great for gloves, documents, and notepads. Pocket flaps are designed to lay flat on the bench, allowing you to use the flap as a pistol mat.   ', 'BLACK', NULL, NULL, NULL, NULL, '10080', 'Yes', 'No', 'BROWNING', 'Nil', 'Material: Polyester<br>\r\nHeight: 9\"Length 15\"<br>\r\nWidth: 11\"<br>\r\nWeight: 3 lbs 0 oz', 'BROWNING/Browning Black Label Alfa Range Bag', NULL, NULL, NULL, NULL, 5, 0, 12),
(39, 'BLACK LABEL GLOVES', '307380990', 'The Black Label Full Finger Gloves are ideal for everyday tasks,  at the range or in the field.  Plus, they are smart phone ready. These are clearly on the robust side of features and technology when compared to any other shooting gloves. Their form-fitting Palm Bulk Reduction design incorporates special stretchable panels that offer a full range of movement without binding or bunching.\r\nThe polyester fabric is stretchable and breathable, and the cuff offers a hook and loop adjustment tab.\r\nThe neoprene knuckle pads protect from bumps and bruises.\r\nA special ON-TIP index finger pad allows you to control modern touch screen electronics like smart phones, GPS, and ballistic calculators.', 'BLACK', NULL, NULL, NULL, NULL, '3136', 'Yes', 'No', 'BROWNING', 'Nil', 'Product Dimensions: 1 x 1 x 1 inches ; 1.6 ounces<br>\r\nShipping Weight: 4.8 ounces', 'BROWNING/Browning Black Label Gloves', NULL, NULL, NULL, NULL, 5, 0, 12),
(40, 'BISTRO 300 STOVE', '2000009598', '\r\nCompact, user-friendly, ultramodern shaped cooker with one burner. Excellent cooking performance and ease of use, thanks to the ability to fine-tune the strength.', 'GREY', NULL, NULL, NULL, NULL, 'not given', 'Yes', 'No', 'Campingaz', 'Nil', 'Power: 2600 W<br>\r\nGas consumption: 190 g / h<br>\r\nWith Easy Clic® connection<br>\r\nAdjustable power<br>\r\nIgnition: Piezo system<br>\r\nCooking time: 3 minutes and 10 seconds<br>\r\nWeight: 1.5 kg<br>\r\nUsage period:\r\nCV300 Plus: 1 hour and 10 minutes', 'CAMPINGAZ/BISTRO 300 STOVE', NULL, NULL, NULL, NULL, 3, 2, 6),
(41, 'DROP LEG HOLSTER', '76484', 'This Firepower spring pistol is an excellent weapon of choice for serious airsoft enthusiasts. This pistol is part of Firepower\'s Metal Slide series and the added weight of this metal slide lends a realistic look and feel to this gun. The gun features a functional safety, a 12 rd magazine, and a shot velocity of 328 fps (using .12g BBs). The gun also features a BAX hop-up system for improved long distance shooting accuracy. This pistol is great for extended airsoft skirmish play as it has very few breakable components in addition to extremely reliable spring-powered firing. Must be manually cocked for each shot.', 'BLACK', NULL, NULL, NULL, NULL, '567.84', 'Yes', 'No', 'FirePower', 'Nil', 'Spring-powered<br>\r\nMetal slide<br>\r\nFunctional safety<br>\r\nBAX hop-up system', 'Shooting Acessories/Holster & Mag Puches/Drop Leg Holster Universal', 'Shooting Acessories/Holster & Mag Puches/Drop Leg Holster Universal1', 'Shooting Acessories/Holster & Mag Puches/Drop Leg Holster Universal2', NULL, NULL, 1, 0, 13),
(43, 'WOODSMAN OUTDOORS CHAIR', '', 'A lightweight chair that you can take anywhere thanks to its compact, foldable design. It features a wide back support for its size that provides increased comfort when sitting for longer periods and stronger posture support. It folds down completely for transport and storage, and is so compact, it is easy to carry to any activity. The lightweight aluminium construction is durable and strong, and the polyester fabric used on the seat is abrasion resistant for heavy-duty use. When you need a lightweight seat for your next outdoor adventure, grab a Coleman® Woodsman™ Chair. The powder-coated aluminum frame and tough polyester fabric supports up to 225 lbs. (102.1 kg), and the portable seat folds easily for just a few pounds of carry weight.', 'SKIN', NULL, NULL, NULL, NULL, '3300', 'Yes', 'Yes', 'Coleman', 'Nil', 'Lightweight—perfect for any outdoor adventure<br>\r\nPowder-coated aluminum frame and tough polyester fabric<br>\r\nChair supports 225 lbs. (102.1 kg)<br>\r\nUnfolded Dimensions: 15.5 in. x 17.5 in. 27.5 in. (39.4 cm x 44.5 cm x 69.9 cm)<br>\r\nFolded Dimensions: 22 in. x 17.5 in. x 3 in. (55.9 cm x 44.5 cm x 7.6 cm)<br>\r\nCarry Weight: 3 lbs. (1.36 kg)', 'COLEMAN/WOODSMAN CHAIR', NULL, NULL, NULL, NULL, 0, NULL, 3),
(44, 'SHOTGUN SHELL BELT', '1245', 'The Mossy Oak Shotgun Shell Carrying Belt can hold up to 25 shotgun shells. The Mossy Oak Shotgun Shell Belt features an adjustable waist up to 52\" and has a durable snap buckle.', 'GREEN', NULL, NULL, NULL, NULL, '2500', 'Yes', 'Nil', 'Mossy Oak', 'Nil', 'Durable snap buckle.<br>\r\nHolds 25 shotgun shotshells<br>\r\nDurable heavy duty snap buckle', 'Hunting Accessories/Cartride Belts/Mossy Oak Shotgun Shell Belt Green', NULL, NULL, NULL, NULL, 5, 24, 14),
(45, 'FOLDING EAR MUFFS', 'CF10000002', 'Beretta green/black/blue standard earmuff and neck strap.', 'BLUE', 'BLACK', 'GREY', NULL, NULL, '2350', 'Yes', 'No', 'Beretta', 'Nil', 'H - 32dB <br>\r\nM - 22dB <br>\r\nL - 13dB <br>\r\nSNR - 25dB', 'Shooting Acessories/Ear & Eye Protection/Beretta Folding Ear Muff', NULL, NULL, NULL, NULL, 9, 14, 15),
(46, 'SENTINAL BLACK', '0.8413', 'The Sentinel is the Swiss Army Knife for those of you who like to stick to the basics. You know that in so many cases, a single lock blade is the only tool you really need. And the Sentinel delivers a robust, incredibly sharp blade in a cleanly designed, ultra-lightweight package. ', 'BLACK', NULL, NULL, NULL, NULL, '3472.24', 'Yes', 'No', 'Victorianox', 'Nil', 'Scale material: Polyamide <br>\r\nSize: 111 mm<br>\r\nBlade lockable:	Yes<br>\r\nscale material	polyamide<br> \r\nSize	111 mm<br>\r\nBlade lockable	Yes<br> \r\nOne hand blade	Yes', 'Victorianox/SENTINEL BLACK', NULL, NULL, NULL, NULL, 6, 15, 2),
(47, 'THERMOS MUG WITH HANDLE', 'JCP-280C', 'Thermos vacuum insulation technology for maximum cold temperature retention; keeps liquids cold for up to 22 hours. 360 Degree threaded lid is easy to drink from and stays securely in place. Drink spout made from Eastman Tritan material\r\nSweat-proof design won\'t leave water rings. Durable stainless steel interior and exterior; 22 ounce capacity', 'BLACK', 'RED', 'SKIN', NULL, NULL, '2150', 'Yes', 'No', 'Thermos', 'Nil', '<ul>\r\n<li>Capacity : 0.28L</li>\r\n<li>Heat insulation (1 hour) : 71&deg;C or & above</li><li>\r\nCold insulation (1 hour) : 9&deg;C or below</li><li>\r\nDimensions Width x Depth x Height (approx. cm) : 11.5 X 8.5 X 12</li><li>\r\nWeight (approx) : 200g</li>\r\n', 'THERMOS/from hazari impex/MUG WITH HANDLE', 'THERMOS/from hazari impex/MUG WITH HANDLE1', 'THERMOS/from hazari impex/MUG WITH HANDLE2', NULL, NULL, 2, 0, 8),
(49, 'SUNDOME TWO PERSON TENT', '3672', 'Make camping easier with the Coleman 2-Person Sundome Tent. The dome design is easy to set up. It’s also designed for incredible ventilation with large windows and a ground vent that helps moves the air up and out. If it rains, the Weathertec System’s patented welded floors and inverted protected seams help ensure you stay dry, and the Insta-Clip Pole Attachments stand up to wind. The snag-free, continuous pole sleeves mean you only have to feed the poles once—shrinking setup time to just 10 minutes. The 7 ft. x 5 ft. floor fits two people and comes with a durable carry bag for easy transport.', 'GREEN', NULL, NULL, NULL, NULL, '8076.15', 'Yes', 'No', 'Coleman', 'Nil', 'Ground vent and large windows move air up and out <ul>\r\n<li>Dome design for quick setup, 10 minutes </li><li>Snag-free, continuous pole sleeves for easy setup</li><li>Rainfly awning for shade and rain protection</li><li>Storage pockets keep gear organized </li><li>WeatherTec System—patented welded floors and inverted seams keep water out</li><li>Insta-Clip Pole Attachments stand up to wind: 7 ft. x 5 ft., fits two people </li><li>4 ft. center height </li><li>Carry bag included for easy transport </li></ul>', 'COLEMAN/SUNDOME 2 PERSON TENT', NULL, NULL, NULL, NULL, 3, 1, 3),
(62, 'ONE-PUSH TUMBLER', 'JNL-752', 'Same sleek style, same handy one-push button feature – but now with a larger capacity. Keep your favourite beverage hot (72°C & above) or cold (10°C & below) for six hours and stay hydrated anytime and anywhere. Weighing at 270 grams, this stainless steel one-push tumbler comes in three stylish colours to complement your lifestyle. Available at major department stores.', 'SKY BLUE', 'BLACK', 'BLUE', 'SKIN', 'PINK', '2600', 'Yes', 'Yes', 'Thermos', 'Nil', 'Capacity : 0.75L<br>\r\nHeat Insulation (6 hours) : 72°C & above<br>\r\nCold Insulation (6 hours) : 10°C & below<br>\r\nDimensions Width × Depth × Height (approx. cm) : 7.5 X 7.5 X 25.5<br>\r\nWeight : 270g', 'THERMOS/from hazari impex/ULTRA-LIGHT ONE-PUSH TUMBLER1', NULL, NULL, NULL, NULL, 2, 0, 8),
(82, 'K-ZONE SHOOTING REST', 'KSR-30', 'There is nothing better than a cool sunny day, a box of ammo and your new or favorite rifle to sight in. We all know that every box of ammo should be checked for point of impact and re-sighted in.  The K-Zone Shooting Rest is the tool you need for better accuracy.  Designed for precision sighting in of rifles and for testing ammo and reloads. Rock solid performance from a  lightweight fully adjustable rest.<br>\r\nDesigned to be the new standard in plastic rifle rest, eliminating  the need for those old fashion heavy metal shooting rest.', 'RED', NULL, NULL, NULL, NULL, '14600', 'Yes', 'No', 'MTM', 'Nil', 'Non-marring molded rubber pads front, middle and rear<br>\r\nQuick and easy to adjust bench rest style handwheel elevation system<br>\r\nLightweight - just 4 pounds and has compartments to add weight if you choose<br>\r\nIdeal for hunting rifles, AR-15\'s, lever action rifles, slug guns, handguns, etc.<br>\r\nCan used as a front rifle rest or handgun rest by removing the rear pad section<br>\r\nOverall length of rest can be adjusted up to 7.5\" to fit your gun perfectly<br>\r\nHandgun rest pad storage box has 4 positions and can be easily removed<br>\r\nFour smooth rubber feet provide a wide slip-free stance on any shooting bench<br>\r\nMade in USA\r\n', 'Shooting Acessories/Shooting rest & Sticks/MTM K-Zone Shooting Rest', 'Shooting Acessories/Shooting rest & Sticks/MTM K-Zone Shooting Rest1', 'Shooting Acessories/Shooting rest & Sticks/MTM K-Zone Shooting Rest2', 'Shooting Acessories/Shooting rest & Sticks/MTM K-Zone Shooting Rest3', 'Shooting Acessories/Shooting rest & Sticks/MTM K-Zone Shooting Rest4', 9, 11, 10),
(83, 'STAINLESS TRAVEL TUMBLER', '123322', 'Performance comes standard with Stainless King products from Genuine Thermos® Brand and the 16-ounce Vacuum Insulated Travel Tumbler is no exception. Constructed with durable double wall stainless steel and Thermos™ vacuum insulation technology, this tumbler keeps beverages hot for up to 7 hours or cold for up to 18 hours. The DrinkLock™ sealing lid seals tight to keep beverages secure and operates with a simple touch: slide lid tab once to open and once more to close. Additionally, the lid comes equipped with a built-in tea hook that will hold tea bags or most loose leaf tea infusers for easy brewing on the go.', 'DARK BLUE', 'RED', 'SILVER', NULL, NULL, '4816', 'Yes', 'No', 'Thermos', 'Nil', '1x Stainless King Vacuum Insulated Stainless Steel Travel Tumbler 16oz Cranberry<br><br>\r\n\r\n1x Stainless King Vacuum Insulated Stainless Steel Travel Tumbler 16oz Midnight Blue or Black', 'THERMOS/from thermos website/Stainless King Vacuum Insulated Stainless Steel Travel Tumbler 16oz Pair1', 'THERMOS/from thermos website/Stainless King Vacuum Insulated Stainless Steel Travel Tumbler 16oz Pair', NULL, NULL, NULL, 2, 0, 8),
(86, 'STAINLESS KING 16oz TUMBLER', '4,977.38', 'Performance comes standard with Stainless King products from Genuine Thermos® Brand and the 16-ounce Vacuum Insulated Travel Tumbler is no exception. Constructed with durable double wall stainless steel and Thermos™ vacuum insulation technology, this tumbler keeps beverages hot for up to 7 hours or cold for up to 18 hours. The DrinkLock™ sealing lid seals tight to keep beverages secure and operates with a simple touch: slide lid tab once to open and once more to close. Additionally, the lid comes equipped with a built-in tea hook that will hold tea bags or most loose leaf tea infusers for easy brewing on the go.<br>\r\nPerformance comes standard with Stainless King products from Genuine Thermos® Brand and the 16-ounce Vacuum Insulated Food Jar is no exception. Constructed with double wall stainless steel, this food jar is durable and has a contoured shape that is easy to grip. Thermos™ vacuum insulation technology keeps contents hot for up to 9 hours or cold for up to 14 hours. The wide mouth opening is easy to fill, eat from and clean. The compact and insulated stainless steel lid doubles as a convenient built-in serving bowl. As a bonus feature, this food jar includes a full-size folding stainless steel spoon that fits right into the lid, eliminating the need to pack separate utensils.', 'RED', 'SILVER', NULL, NULL, NULL, '4816', 'Yes', 'No', 'Thermos', 'Nil', 'THERMOS/from thermos website/1x Stainless King Vacuum Insulated Stainless Steel Travel Tumbler 16oz Cranberry\r\n<br>\r\n1x Stainless King™ Vacuum Insulated Stainless Steel Food Jar with Spoon 16oz Cranberry', 'THERMOS/from thermos website/Stainless King 16oz Stainless Steel Travel Tumbler And Food Jar', 'THERMOS/from thermos website/Stainless King 16oz Stainless Steel Travel Mug And Food Jar', NULL, NULL, NULL, 2, 0, 8),
(92, 'SIPP VACCUM INSULATED MUG', '1234', 'The Sipp by THERMOS® line of products embodies sleek, stylish and functional design. The 16-ounce Vacuum Insulated Travel Tumbler is constructed with durable double wall stainless steel and Thermos® vacuum insulation technology to keep beverages hot for up to 9 hours or cold for up to 20 hours. Features include a push button lid that operates easily with one hand and a built-in tea hook that will hold tea bags or most loose leaf tea infusers for easy brewing on the go.', 'SILVER', 'SKIN', 'BLACK', NULL, NULL, '2799', 'Yes', 'No', 'Thermos', 'Nil', 'Thermos® vacuum insulation technology for maximum temperature retention keeps contents hot for up to 9 hours or cold for up to 20 hours. Durable stainless steel interior and exterior. Exterior stays cool to the touch with hot beverages and sweat-proof with cold\r\nOne-handed push button lid. Built-in tea hook holds tea bags or mose loose leaf infusers. Fits most automobile cup holders. Compatible with most single cup brewing systems<br>\r\nDishwasher safe<br>\r\n16-ounce capacity', 'THERMOS/from thermos website/Sipp Vacuum Insulated Stainless Steel Travel Mug 16oz', 'THERMOS/from thermos website/Sipp Vacuum Insulated Stainless Steel Travel Mug 16oz 1', NULL, NULL, NULL, 2, 0, 8),
(93, 'SIPP VACCUM INSULATED TUMBLER', '3456', 'The Sipp by THERMOS® line of products embodies sleek, stylish and functional design. The 16-ounce Vacuum Insulated Travel Tumbler is constructed with durable double wall stainless steel and Thermos® vacuum insulation technology to keep beverages hot for up to 9 hours or cold for up to 20 hours. Features include a push button lid that operates easily with one hand and a built-in tea hook that will hold tea bags or most loose leaf tea infusers for easy brewing on the go.', 'SKIN', 'BLACK', 'GOLDEN', NULL, NULL, '2799', 'Yes', 'No', 'Thermos', 'Nil', 'Built-in tea hook holds tea bags or mose loose leaf infusers<br>\r\nFits most automobile cup holders<br>\r\nCompatible with most single cup brewing systems<br>\r\nDishwasher safe<br>\r\n16-ounce capacity', 'THERMOS/from thermos website/Sipp Vacuum Insulated Stainless Steel Travel Tumbler 16oz2', 'THERMOS/from thermos website/Sipp Vacuum Insulated Stainless Steel Travel Tumbler 16oz1', 'THERMOS/from thermos website/Sipp Vacuum Insulated Stainless Steel Travel Tumbler 16oz', NULL, NULL, 2, 0, 8),
(94, 'STEEL TRAVEL MUG', '1234', 'Performance comes standard with Stainless King products from Genuine Thermos® Brand and the 16-ounce Vacuum Insulated Travel Mug is no exception. Constructed with double wall stainless steel, this travel mug is durable and has a sturdy integrated handle. Thermos™ vacuum insulation technology keeps beverages hot for up to 7 hours or cold for up to 18 hours. The DrinkLock™ sealing lid seals tight to keep beverages secure and operates with a simple touch: slide lid tab once to open and once more to close. Additionally, the lid comes equipped with a built-in tea hook that will hold tea bags or most loose leaf tea infusers for easy brewing on the go.', 'RED', 'BLACK', 'SILVER', NULL, NULL, '2799', 'Yes', 'No', 'Thermos', 'Nil', 'DrinkLock™ sealing lid keeps beverages secure when in the closed position. Built-in tea hook holds tea bags or mose loose leaf infusers. Fits most automobile cup holders. Compatible with most single cup brewing systems. 16-ounce capacity', 'THERMOS/from thermos website/Stainless King Vacuum Insulated Stainless Steel Travel Mug 16oz', 'THERMOS/from thermos website/Stainless King Vacuum Insulated Stainless Steel Travel Mug 16oz 1', 'THERMOS/from thermos website/Stainless King Vacuum Insulated Stainless Steel Travel Mug 16oz 2', NULL, NULL, 2, 0, 8),
(100, 'MAGTAC LED RECHARGEABLE FLASHLIGHT SYSTEM PLAIN BEZEL', '6823', 'An advanced lighting tool powered by a high capacity Lithium Iron Phosphate (LiFePO4) rechargeable battery engineered for long service life with a 2.5 hr. charge time. Along with superior build quality and performance, this plain-bezel version of the MAG-TAC LED rechargeable flashlight comes with a detachable pocket clip and a USB powered mountable charging base. The charging base can be powered by the included 12V adapter or 120V converter, or by any other charging source that complies with the USB 2.0 Standard. Also, 4 Functions selectable through Mag Instrument\'s tailcap-switch-activated \"Quick-Click\" mode selector. Momentary, Full Power - 533 Lumens @ 2h 30min. runtime, Power Save - 112 Lumens @ 4 hr. runtime, & Strobe.', 'BLACK', NULL, NULL, NULL, NULL, '13888', 'Yes', 'No', 'MAGLITE', 'Nil', 'Drop Resistance: 2 m<br>\r\nType: Tactical<br>\r\nTechnology: LED<br>\r\nLumens: 533 lm<br>\r\nLength: 5.81 in. 147.57 mm<br>', 'MAGLITE/MAGTAC LED RECHARGEABLE FLASHLIGHT SYSTEM PLAIN BEZEL', 'MAGLITE/MAGTAC LED RECHARGEABLE FLASHLIGHT SYSTEM PLAIN BEZEL1', 'MAGLITE/MAGTAC LED RECHARGEABLE FLASHLIGHT SYSTEM PLAIN BEZEL2', NULL, NULL, 7, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `RevId` int(255) NOT NULL,
  `Comment` varchar(20000) NOT NULL,
  `UserName` varchar(3000) NOT NULL,
  `Contact Number` varchar(3000) NOT NULL,
  `ProdId` varchar(3000) NOT NULL,
  `ProdName` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`RevId`, `Comment`, `UserName`, `Contact Number`, `ProdId`, `ProdName`) VALUES
(1, '', 'Sidrah Ramzan', '03475259212', '47', 'THERMOS MUG WITH HANDLE'),
(2, '', 'Sidrah Ramzan', '03475259212', '47', 'THERMOS MUG WITH HANDLE'),
(3, '', 'Sidrah Ramzan', '03475259212', '47', 'THERMOS MUG WITH HANDLE'),
(4, 'Limited Colours.', 'Sidrah Ramzan', '03475259212', '47', 'THERMOS MUG WITH HANDLE'),
(5, 'Limited Colours are being provided. Price is high quality was good. abjsnsks suaksnsj usksnshs akishssns .\r\nChecking length of possible comment ', 'Sidrah Ramzan', '03475259212', '47', 'THERMOS MUG WITH HANDLE'),
(6, 'Good stuff ', 'Sajid', '03341111759', '47', 'THERMOS MUG WITH HANDLE'),
(7, 'susis', 'sagsjsn', '11111111111', '47', 'THERMOS MUG WITH HANDLE');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `SubCatId` int(255) NOT NULL,
  `CatId` int(255) NOT NULL,
  `SubCatName` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`SubCatId`, `CatId`, `SubCatName`) VALUES
(1, 3, 'Tents & Shelters'),
(2, 3, 'Stove & Grills'),
(3, 3, 'Coolers & Water Juice'),
(4, 3, 'Lanterns & Lights'),
(5, 3, 'Furniture & Games'),
(6, 3, 'Sleeping Bags & Beds'),
(7, 9, 'Ammo & Storage Boxes'),
(8, 9, 'Gun Slings'),
(9, 9, 'Gun Care'),
(10, 9, 'Shell Holders'),
(11, 9, 'Shooting Rest & Sticks'),
(12, 9, 'Gun Cases'),
(13, 9, 'Holster & Mag Pouches'),
(14, 9, 'Ear & Eye Protection'),
(15, 6, 'Pocket Knives'),
(16, 6, 'Everyday Knives'),
(17, 6, 'Hunting Knives'),
(18, 6, 'Recreational Knives'),
(19, 6, 'Survival Knives'),
(20, 5, 'Shotgun Sights'),
(21, 5, 'Stools & Racks'),
(22, 5, 'Hunting Blinds & Tapes'),
(23, 5, 'Hunting Gun Cases'),
(24, 5, 'Cartridge Belts'),
(25, 10, 'Bows'),
(26, 10, 'Arrows'),
(27, 10, 'Archer Accessories'),
(28, 10, 'Targets');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(255) NOT NULL,
  `FName` varchar(6000) NOT NULL,
  `LName` varchar(1000) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Password` varchar(2000) NOT NULL,
  `Address` varchar(30000) NOT NULL,
  `ShipAddress` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FName`, `LName`, `Contact`, `Email`, `Password`, `Address`, `ShipAddress`) VALUES
(1, 'Sidrah', 'Ramzan', '03475259212', 'sidrahramzan736@gmail.com', 'abcd', 'Islamabad', 'Islooo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`CatId`);

--
-- Indexes for table `paid`
--
ALTER TABLE `paid`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProdId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`RevId`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`SubCatId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartId` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `CatId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `paid`
--
ALTER TABLE `paid`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProdId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `RevId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `SubCatId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
