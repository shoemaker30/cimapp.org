/* Returns the role of the user to be used to check login credentials */
/* Will return null if the username/password combo is incorrect */
DELIMITER $$
CREATE PROCEDURE CIMAdb_LogIn(IN InUsername VARCHAR(50), IN InEmail VARCHAR(100), IN InPassword VARCHAR(50))
BEGIN
    SELECT r.RoleName, u.Username
    FROM User u 
    JOIN UserRole r ON u.UserRole = r.Id
    WHERE (Username = InUsername AND Password = InPassword)
    OR (Email = InEmail AND Password = InPassword);
END$$

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