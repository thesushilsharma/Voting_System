CREATE TABLE IF NOT EXISTS `candidate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(20) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `degree` varchar(255),
  `position` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `candidate` ( `cid`, `cname`,`name`, `Degree`, `position`) VALUES
('SRC','Sushil Sharma','Sushil', 'Bcompsc', 'GM'),
('SRC','Nizam Ansari','Nizam','Bit','GM'),
('SRC','Hilal Khan','Hilu', 'Bcom', 'GM'),
('SRC','Shuja Rizvi','Shuja','Engineering','GM'),
('SRC','Slate1','slate01','', 'slate'),
('SRC','Slate2','slate02','', 'slate'),
('SRC','Slate3','slate03', '','slate'),
('SRC','Gautam','Gautam Gambhir','', 'Sports'),
('SRC','Kane','Kane W', '',  'Sports'),
('SRC','Rohit','Rohit Sharma','', 'Sports');

CREATE TABLE IF NOT EXISTS `voter` (
  `vid` int NOT NULL AUTO_INCREMENT,
  `vname` varchar(255) NOT NULL,
  `studentid` int NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `voter` ( `vname`, `studentid`, `username`) VALUES
('sushil Sharma','6275151','ss362'),
('shuja rizvi','1234567','sr123'),
('nizam ansari','9876543','na123'),
('hilal khan','1231234','hk123');

CREATE TABLE IF NOT EXISTS `results` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sid` int NOT NULL,
  `slateid` int NOT NULL,
  `gmid` varchar(255) NOT NULL,
  `sportsid` int NOT NULL,
  `vid` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `results` (`id`, `sid`, `slateid`,`gmid`,`sportsid`, `vid`, `date`) VALUES
(431605, 1, 1, '2020-03-09'),
(431605, 1, 2, '2020-03-09'),
(431605, 1, 3, '2020-03-09');


CREATE TABLE IF NOT EXISTS `voting` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `voting` ( `date`, `stime`, `etime`) VALUES
('2020-03-13', '16:00:00', '23:00:00');

CREATE TABLE IF NOT EXISTS `sushil` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gm1` int NOT NULL,
  `gm2` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

SELECT COUNT(gmid) as ct,(SELECT cname FROM candidate WHERE id= r.gmid) as cname FROM results r WHERE sid='431605' GROUP BY gmid;

SELECT id, SUBSTRING_INDEX(gmid,',',1) AS GM1, SUBSTRING_INDEX(SUBSTRING_INDEX(gmid,',',2),',',-1) AS GM2 FROM results;