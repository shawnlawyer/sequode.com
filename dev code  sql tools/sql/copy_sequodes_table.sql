CREATE TABLE sequodes_php LIKE sequode_app.sequodes_dev';
INSERT sequodes_php SELECT * FROM sequode_app.sequodes_dev';