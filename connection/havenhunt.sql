-- phpMyAdmin SQL Dump
-- Database: `haventhunt`
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------

-- Table structure for `properties`
CREATE TABLE IF NOT EXISTS `properties` (
    `Property_ID` VARCHAR(12) NOT NULL,
    `Property_Name` VARCHAR(100) DEFAULT NULL,
    `Type_ID` VARCHAR(12) DEFAULT NULL,
    `Owner` VARCHAR(50) DEFAULT NULL,
    `Location` VARCHAR(255) DEFAULT NULL,
    `Price` DECIMAL(10, 2) NOT NULL,
    `Description` TEXT DEFAULT NULL,
    `Image_Name` VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (`Property_ID`),
    KEY `Type_ID` (`Type_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- Table structure for `property_types`
CREATE TABLE IF NOT EXISTS `property_types` (
    `Type_ID` VARCHAR(12) NOT NULL,
    `Type_Name` VARCHAR(50) DEFAULT NULL,
    PRIMARY KEY (`Type_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Insert data into `property_types`
INSERT INTO `property_types` (`Type_ID`, `Type_Name`) VALUES
('PT_001', 'Residential'),
('PT_002', 'Commercial'),
('PT_003', 'Land');

-- Insert data into `properties`
INSERT INTO `properties` (`Property_ID`, `Property_Name`, `Type_ID`, `Owner`, `Location`, `Price`, `Description`, `Image_Name`) VALUES
('P_001', 'Coral Homes', 'PT_001', 'John Doe', '123 Palm Street, FL', 500000, 'A beautiful family house in a suburban area.', 'Coral Homes.jpg'),
('P_002', 'Fortune', 'PT_002', 'Jane Smith', '456 Elm Road, NY', 1200000, 'A prime office space in the heart of the city.', 'Fortune.jpg'),
('P_003', 'Great Farm Lands', 'PT_003', 'David Brown', '789 Countryside Lane, TX', 300000, 'Vast and fertile land perfect for farming.', 'Great_Farm_Lands.jpg'),
('P_004', 'Lands', 'PT_003', 'Laura Wilson', '101 Valley View, CA', 250000, 'A quiet plot of land with stunning views.', 'Lands.jpg'),
('P_005', 'Midtown', 'PT_001', 'Michael Johnson', '555 Central Ave, IL', 750000, 'A modern residential building in the city center.', 'Midtown.jpg'),
('P_006', 'Suburban Family House', 'PT_001', 'Emma Davis', '321 Maple Drive, GA', 600000, 'A spacious house for a growing family.', 'Suburban Family House.jpg'),
('P_007', 'Triton Luxury Villa', 'PT_001', 'Chris Evans', '789 Ocean Breeze, FL', 2500000, 'A luxurious villa with beachfront access.', 'triton-luxury-villa.jpg'),
('P_008', 'Vacant Lands', 'PT_003', 'Sophia Taylor', '888 Greenfield Lane, KS', 150000, 'Ideal land for development or investment.', 'Vacant Lands.jpg'),
('P_009', 'View of Big Horn Mountains', 'PT_003', 'Liam White', '444 Mountain Road, WY', 400000, 'Scenic land near the Big Horn Mountains.', 'view-of-Big-Horn-Mountains.jpg');

-- --------------------------------------------------------

-- Table structure for `login`
CREATE TABLE IF NOT EXISTS `login` (
    `user_id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Insert data into `login`
INSERT INTO `login` (`username`, `email`, `password`) VALUES
('john_doe', 'john.doe@example.com', SHA2('password123', 256)), -- Hashed password
('jane_smith', 'jane.smith@example.com', SHA2('password456', 256)),
('admin_user', 'admin@example.com', SHA2('adminpassword', 256));
