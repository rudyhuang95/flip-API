# flip-API

mySql insert query 

CREATE TABLE `tbl_api` (
  `id` varchar(50) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `bank_code` varchar(10) DEFAULT NULL,
  `account_number` int(11) DEFAULT NULL,
  `beneficiary_name` varchar(10) DEFAULT NULL,
  `remark` varchar(45) NOT NULL,
  `receipt` varchar(200) DEFAULT NULL,
  `time_served` datetime DEFAULT NULL,
  `fee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

start main.php
