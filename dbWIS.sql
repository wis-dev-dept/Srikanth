CREATE DATABASE dbbarber;
--
--
CREATE TABLE 'tbcustomer' (
    'FirstName' varchar(30) NOT NULL,
    'LastName' varchar(30) NOT NULL,
    'Phone' varchar(30) NOT NULL,
    'Email' varchar(50) NOT NULL,
    'Password' varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;