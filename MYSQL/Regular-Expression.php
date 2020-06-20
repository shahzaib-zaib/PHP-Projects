^           '^ra'               Beginning of string
$           'an$'               End of string
[...]       '[rms]'             Any charactor listed between the square brackets
^[...]      '^[rms]'            Begins with Any character listed between the square brackets
[a-z]       '[a-h]e'            Match with in the range
p1|p2|p3    'tom|dick|harry'    matches any of the patterns p1, p2, or p3


select column1, column2, column3,.....;

FROM table_name

WHERE column_name REGEXP pattern;


