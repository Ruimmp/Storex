CREATE USER 'StorexAutoAdmin'@'localhost' IDENTIFIED BY 'Storex2022Password';
GRANT SELECT, INSERT, UPDATE ON snows.* TO 'StorexAutoAdmin'@'localhost';
