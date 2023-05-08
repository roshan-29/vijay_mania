 use movieflix;
 
 CREATE TABLE `signup` (
  `id` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar,
  `Age` int  NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `password` varchar(15) NOT NULL
) ;


INSERT INTO `signup` (`id`, `username`, `email`, `Age`, `phonenumber`, `password`) VALUES ('1', 'roshan', 'r@gmail', '3', '234', 'qwe');
COMMIT;