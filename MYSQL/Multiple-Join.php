SELECT columns

FROM table1

INNER JOIN table2

ON table1.cloumn_name = table2.column_name
           foreign key         Primary key

INNER JOIN table3

ON table1.cloumn_name = table3.column_name
           foreign key         Primary key



SELECT * FROM personal p INNER JOIN city c ON p.city = c.cid INNER JOIN courses cr ON p.courses = cr.course_id;


SELECT p.id, p.name, p.percentage, p.age, p.gender, c.cityname, cr.course_name, FROM personal p INNER JOIN city c ON p.city = c.cid INNER JOIN courses cr ON p.courses = cr.course_id;