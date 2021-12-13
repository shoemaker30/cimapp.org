/* Returns the role of the user to be used to check login credentials */
/* Will return null if the username/password combo is incorrect */
DELIMITER $$
CREATE PROCEDURE CIMAdb_LogIn(IN InUsername VARCHAR(50), IN InEmail VARCHAR(100), IN InPassword VARCHAR(50))
BEGIN
    SELECT r.RoleName
    FROM User u 
    JOIN UserRole r ON u.UserRole = r.Id
    WHERE (Username = InUsername AND Password = InPassword)
    OR (Email = InEmail AND Password = InPassword);
END$$