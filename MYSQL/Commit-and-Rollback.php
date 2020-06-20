First goto Edit cammand and click Perferences then goto SQL Execution
and uncheck New connections use auto commit mode. the restart SQL



COMMIT;

UPDATE personal
SET phone = "0333-3333331"
WHERE id = 1;


ROLLBACK;