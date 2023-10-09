SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `site1`
--

-- Création de la base de données site1
CREATE DATABASE IF NOT EXISTS site1;

-- Utilisation de la base de données site1
USE site1;

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `utilisateurs` (`id`, `username`, `email`, `password`) VALUES
(1, 'ethanfrq', 'franquevilleethan@gmail.com', '$2y$10$K.ZglzSKjejkdVfL3A9KyufqiHXM/.7mX0TYdCX4nYAQ9WNcjOExS'),
(5, 'cobra', 'cobra@mail', '$2y$10$elnw18lBMlfpblalwpvdiutrixtrHFxBbdF6Q4sSp8fCe/C9LVfoC');

ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

