-------------- tip calculator in php with the db behind it
--------------- incase of an error contact me
----------------- bonanekabene67@gmail.com 
    
    
-- creating database 
create DATABASE tip_calc;

-- using the phpsamples database 
use tip_calc;

-- creating table to keep our records
CREATE table `save`(
`id` int(10) NOT NULL AUTO_INCREMENT,
`bill` CHAR(255) NOT NULL,
`percentage` char(255) NOT NULL,
`tip` CHAR(255) NOT NULL,
`date` CHAR(255) NOT NULL,
PRIMARY KEY(`id`)
)
;

-- inserting data in the database
INSERT INTO `save` (`bill`, `percentage`, `tip`, `date`) VALUES(1000, 10, 100, '01/1/2020 12:10')
