/* 
    icybb 0.1
    Copyright 2017 - IcyBB Project
    License: GPL3.0
*/
DROP TABLE IF EXISTS `icebb_members`;
CREATE TABLE `icebb_members` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `displayname` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_salt` varchar(255) NOT NULL,
  `gid` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
