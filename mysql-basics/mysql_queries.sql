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