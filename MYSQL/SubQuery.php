======================================= SubQuery =======================================

SELECT columns FROM table1 WHERE column = (SELECT columns FROM table2 WHERE condition);


SELECT name FROM personal
WHERE courses = (SELECT course_id FROM courses WHERE course_name = "MBA");


SELECT name FROM personal
WHERE courses IN (SELECT course_id FROM courses WHERE course_name IN ("MBA", "Btech"));






======================================= Exists =======================================

SELECT columns FROM table1 WHERE EXISTS(SELECT columns FROM table2 WHERE condition);




======================================= Not Exists =======================================

SELECT columns FROM table1 WHERE NOT EXISTS(SELECT columns FROM table2 WHERE condition);
