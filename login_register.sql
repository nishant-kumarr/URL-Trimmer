SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `urls` (
  `id` int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `long_url` varchar(500) NOT NULL,
  `short_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `urls` (`id`, `long_url`, `short_code`) VALUES
(NULL, 'http://tempuser1.com', '2$r34v');

COMMIT;
