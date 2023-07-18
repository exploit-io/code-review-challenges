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
    (0, 'root', 'Alt3ra_SEQY0UR_P4SSw0d');

INSERT INTO `users`
    (`id`, `username`, `password`)
VALUES 
    (1, 'exploitio', 'CTF{I_AM_B0SS_B4BY}');

INSERT INTO `users`
    (`id`, `username`, `password`)
VALUES 
    (2, 'user1', 'boss');

INSERT INTO `users`
    (`id`, `username`, `password`)
VALUES 
    (3, 'user2', 'bossbaby');

COMMIT;