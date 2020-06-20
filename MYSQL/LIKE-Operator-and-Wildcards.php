LIKE 'a%'       Start with "a"
LIKE '%a'       End with "a"
LIKE '%am%'     Have "am" in any position
LIKE 'a%m'      Start with "a" and End with "m"
LIKE '_a%'      "a" in the second position
LIKE '__a%'     "a" in the third position
LIKE '_oy'      "o" in the second and "y" in the third position




select column1, column2, column3,.....;

FROM table_name

WHERE column_name LIKE pattern;




select column1, column2, column3,.....;

FROM table_name

WHERE column_name NOT LIKE pattern;  // BINARY use before table_name for case sensitive