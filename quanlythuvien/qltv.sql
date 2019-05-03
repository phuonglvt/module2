CREATE TABLE IF NOT EXISTS `tb_sach` (
  `sach_id` int(11) NOT NULL AUTO_INCREMENT,
  `sach_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sach_author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sach_dayBorrow` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`sach_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_sach`
--

INSERT INTO `tb_sach` (`sach_id`, `sach_name`, `sach_author`, `sach_dayBorrow`)
(1, 'Tiếng anh lớp 1', 'Hoàng Văn Vân', '20-03-2019'),
(2, 'Kỹ Năng đi trước đam mê', 'Cal Newport', '10-12-2018'),
(3, 'Sức mạnh tiềm thức', 'Joseph Murphy, Ph.D., D.D', '30-01-2019'),
(4, 'Nghệ thuật hạnh phúc trong thế giới phiền não', 'Đạt Lai Lạt Ma', '20-04-2019')