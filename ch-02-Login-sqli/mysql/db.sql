SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users`
    (`id`, `username`, `password`)
VALUES 
    (0, 'admin', '99bee1c5411a242220ceaa5159586117');

COMMIT;
-- Username: admin
-- Password: secyour34dmin