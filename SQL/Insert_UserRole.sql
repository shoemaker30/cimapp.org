/* Insert the possible user roles into the database */
USE CIMAdb;
INSERT INTO UserRole (RoleName)
VALUES
('administrator'), /* 1. has all priviledges, given to web developers */ 
('supervisor'), /* 2. has priviledges to use app and view report management software, given to government workers*/
('reporter'); /* 3. has proviledges to app and to view own reports, given to general public */