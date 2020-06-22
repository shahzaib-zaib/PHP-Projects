SELECT columns

FROM table1

INNER JOIN table2

ON table1.cloumn_name = table2.column_name
           foreign key         Primary key


SELECT * FROM personal p INNER JOIN city c ON p.city = c.cid;


SELECT p.id,p.name,p.percentage,p.age,p.gender,c.cityname FROM personal p INNER JOIN city c ON p.city = c.cid;