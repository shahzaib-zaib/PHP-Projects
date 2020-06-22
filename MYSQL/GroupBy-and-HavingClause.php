
=============================== Group By ===============================

SELECT columns FROM table_name WHERE condition GROUP BY column_name(s);


SELECT columns

FROM table1 INNER JOIN table2

ON table1.column_name = table2.column_name

WHERE condition

GROUP BY column_name(s);



SELECT c.cityname, COUNT(p.city) AS Total
FROM personal p INNER JOIN city c
ON p.city = c.cid
GROUP BY city
ORDER BY COUNT(p.city) DESC;




=============================== Having Clause ===============================

SELECT columns FROM table_name GROUP BY column_name(s) HAVING condition;


SELECT c.cityname, COUNT(p.city) AS Total
FROM personal p INNER JOIN city c
ON p.city = c.cid
GROUP BY city
HAVING COUNT(p.city) > 3
ORDER BY COUNT(p.city) DESC;
