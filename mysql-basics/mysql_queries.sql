Place your queries below
--Prototype 1
SELECT * FROM users_test WHERE username = 'alopez'
Showing rows 0 - 0 (1 total, Query took 0.0005 seconds.)

UPDATE users_test set email = 'andrewlopez88@gmail.com' WHERE username = 'alopez'
1 row affected. (Query took 0.0022 seconds.)

INSERT INTO users_test SET username = 'Mandy', email = 'greatemail@email.com', password = sha1('thisisagreatpassword')
1 row inserted.Inserted row id: 15 (Query took 0.0021 seconds.)

DELETE FROM users_test WHERE username = 'Mandy'
1 row deleted. (Query took 0.0021 seconds.)

--
--Prototype 2
--

--
-- Table structure for table `todo_items2`
--

CREATE TABLE `todo_items2` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `details` varchar(500) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo_items2`
--

INSERT INTO `todo_items2` (`id`, `title`, `details`, `timestamp`, `user_id`) VALUES
(1, 'Wake up', 'Alarm helps', 10, 12),
(2, 'Take a Shower', 'Don''t forget to rinse', 10, 12),
(3, 'Brush teeth', 'Minty fresh', 10, 12),
(4, 'Get dressed', 'what to wear', 10, 12),
(5, 'Feed dog', 'she loves her new food', 10, 12),
(7, 'Lock the front door', 'deter thieves', 10, 12),
(8, 'Start the car', 'check mirrors, set music, settle in for the drive', 10, 12),
(9, 'Drive to class', 'please let there be no traffic', 10, 12),
(10, 'Get ready for another day', 'learning-fuze woo woo', 10, 12),
(11, 'Learn MySQL', 'Its fun', 10, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo_items2`
--
ALTER TABLE `todo_items2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo_items2`
--
ALTER TABLE `todo_items2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--

SELECT * FROM todo_items2 WHERE user_id = 12
Showing rows 0 - 9 (10 total, Query took 0.0003 seconds.)

INSERT INTO todo_items2 SET title = 'Learn MySQL', details = 'Its fun', timestamp = 10:46, user_id = 12
1 row inserted. Inserted row id: 11 (Query took 0.0024 seconds.)

DELETE FROM todo_items2 WHERE user_id = 12 AND id = 6
1 row deleted. (Query took 0.0023 seconds.)

UPDATE todo_items2 set details = 'she loves her new food' WHERE title = 'Feed dog'
1 row affected. (Query took 0.0022 seconds.)

SELECT * FROM users_test WHERE id = 12
Showing rows 0 - 0 (1 total, Query took 0.0002 seconds.)