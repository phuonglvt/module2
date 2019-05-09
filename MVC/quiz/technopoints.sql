SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `quiz` (
  `id` int(255) NOT NULL,
  `que` text  NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `quiz` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'Nhà Thanh có ao bèo 1.000m2, ngày hôm sau số lượng bèo sẽ nở gấp đôi ngày hôm trước, đến ngày thứ 18 thì bèo đã nở được nửa ao. Vậy đến ngày thứ bao nhiêu thì bèo sẽ nở đầy ao?', 'ngày thứ 11', ' Ngày thứ 19', ' Ngày thứ 36', ' Ngày thứ 15', ' Ngày thứ 11', ' Ngày thứ 19'),
(2, '9 – 6 - 1; 27 – 1 - 2; 6 - 3 - ?', '2', '3', '4', '5', '2', '2'),
(3, 'Số tiếp theo của dãy 19, 28, 37, 46, ... là số nào?', '55', '66', '77', '76', '55', '55'),
(4, 'Hãy tính dãy số sau đây: 1 + 2 + 3 + ..... + 99 = ...........', '4900', '4950', '5000', '5050', '4950', '4900'),
(5, 'Minh 4 tuổi, tuổi anh Minh gấp 3 lần tuổi Minh. Khi anh Minh bao nhiêu tuổi thì tuổi anh Minh chỉ còn gấp đôi tuổi Minh? ', '20', '18', '14', '16', '16', '18'),
(6, '1+3=?', '5','7','4','6','5','4');

ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option 1` (`option 1`);
COMMIT;
