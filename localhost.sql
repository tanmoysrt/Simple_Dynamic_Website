
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `BHS` (
  `ID` int(11) NOT NULL,
  `_sfm_form_submision_time_` datetime DEFAULT NULL,
  `_sfm_visitor_ip_` varchar(50) DEFAULT NULL,
  `_sfm_unique_id_` varchar(35) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Phone1` varchar(13) DEFAULT NULL,
  `Phone2` varchar(100) DEFAULT NULL,
  `Phone3` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(13) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Adress` mediumtext DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `nickname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `BHS` (`ID`, `_sfm_form_submision_time_`, `_sfm_visitor_ip_`, `_sfm_unique_id_`, `Name`, `Phone1`, `Phone2`, `Phone3`, `whatsapp`, `Email`, `Adress`, `photo`, `nickname`) VALUES
(3, '2019-10-05 11:00:24', '2409:4061:51e:64b1:7c09:29d4:f9f5:da02', 'e96nvns', 'Tanmoy Sarkar', '1234567890', '1230456789', '', '1234567890', 'test@gmail.com', 'India', 'test.png', NULL),


ALTER TABLE `BHS`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `BHS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
