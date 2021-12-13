/* Gets some general info about the user for his/her homepage */ 

DELIMITER $$

CREATE PROCEDURE CIMAdb_SelectUserInfo(IN InUsername VARCHAR(45))
BEGIN
    SELECT r.RoleName, m.MunicipalityName, m.County, m.State, u.MunicipalityId, u.Username, u.Email, u.FirstName, u.LastName
    FROM User u
    JOIN UserRole r ON u.UserRole = r.Id
    JOIN Municipality m ON u.MunicipalityId = m.Id
    WHERE Username = InUsername;
END$$