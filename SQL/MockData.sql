USE CIMAdb;

INSERT INTO UserRole (RoleName)
VALUES
('administrator'),	/* 1. has all priviledges, given to web developers */ 
('supervisor'),		/* 2. has priviledges to use app and view report management software, given to government workers*/
('reporter');		/* 3. has proviledges to app and to view own reports, given to general public */

INSERT INTO Municipality (MunicipalityName, County, State)
VALUES
('Huntington', 011, 54),
('Culloden', 011, 54);

INSERT INTO InfrastructureType (Type)
VALUES
('Sign/Signal'),
('Sidewalk'),
('Parking Lot'),
('Building'),
('Parking Garage'),
('Pedestrian Bridge'),
('Roadway');

USE CIMAdb;
INSERT INTO User (MunicipalityId, UserRole, Username, Password, Email, FirstName, LastName)
VALUES
(1,1,'shoemaker30','tvcsCD_03','shoemaker30@marshall.edu','Eric','Shoemaker');

INSERT INTO InfrastructureObject 
(MuncipalityId, InfrastructureTypeId, Latitude, Longitude)
VALUES 
(1, 3, 38.42512573, -82.43045241);
