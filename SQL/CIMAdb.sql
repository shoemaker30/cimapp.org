/*CIMA Database v2.1*/
/*Author: Eric Shoemaker (github:shoemaker30)*/
/*Modified 11/13/2021*/
/*For use with MySQL on a LAMP stack*/

/** Create the database */
CREATE DATABASE CIMAdb;
USE CIMAdb;
CREATE TABLE Municipality(
	Id int auto_increment,
	MunicipalityName varchar(50),
    County int,
	State tinyint,
    PRIMARY KEY (Id)
);
CREATE TABLE UserRole(
	Id int auto_increment,
    RoleName varchar(30),
    PRIMARY KEY (Id)
);
CREATE TABLE User(
	Id int auto_increment,
	MunicipalityId int,
    UserRole int,
	Username varchar(50),
	Password varchar(50),
	Email varchar(100),
    FirstName varchar(50),
    LastName varchar(50),
    PRIMARY KEY (Id),
    FOREIGN KEY (MunicipalityId) REFERENCES Municipality(Id),
    FOREIGN KEY (UserRole) REFERENCES UserRole(Id)
);
CREATE TABLE InfrastructureObject(
	Id int auto_increment,
    MuncipalityId int,
	ObjectType varchar(20),
	CurrentStatus varchar(20),
	Latitude decimal(15,10),
	Longitude decimal(15,10),
    PRIMARY KEY (Id),
    FOREIGN KEY (MuncipalityId) REFERENCES Municipality(Id)
);
CREATE TABLE ActiveDamageReport(
	Id int auto_increment,
	ObjectId int,
	UserId int,
	ReportedAt timestamp,
	ReportStatus varchar(10),
	SafetyConcern bit,
	Latitude decimal(15,10),
	Longitude decimal(15,10),
	PrimaryIssue varchar(30),
	SpecificIssues varchar(300),
	IssueDescription varchar(300),
	Severity tinyint,
	PathToImage varchar(200),
    PRIMARY KEY (Id),
    FOREIGN KEY (ObjectId) REFERENCES InfrastructureObject(Id),
    FOREIGN KEY (UserId) REFERENCES User(Id)
);
CREATE TABLE PastDamageReport(
	Id int auto_increment,
	ObjectId int,
	UserId int,
	ReportedAt timestamp,
	ReportStatus varchar(10),
	SafetyConcern bit,
	Latitude decimal(15,10),
	Longitude decimal(15,10),
	PrimaryIssue varchar(30),
	SpecificIssues varchar(300),
	IssueDescription varchar(300),
	Severity tinyint,
	PathToImage varchar(200),
    PRIMARY KEY (Id),
    FOREIGN KEY (ObjectId) REFERENCES InfrastructureObject(Id),
    FOREIGN KEY (UserId) REFERENCES User(Id)
);
CREATE TABLE Software(
	Id int auto_increment,
	SoftwareType varchar(20),
    CurrentVersion varchar(15),
    PRIMARY KEY (Id)
);
CREATE TABLE ChangeLog(
	Id int auto_increment,
	SoftwareId int,
	AppVersion varchar(15),
	ChangedOn timestamp,
	Category varchar(10),
	Comments varchar(500),
    PRIMARY KEY (Id),
    FOREIGN KEY (SoftwareId) REFERENCES Software(Id)
);
CREATE TABLE FeedbackReport(
	Id int auto_increment,
    UserId int,
    SoftwareId int,
    ChangeId int,
    ReportedAt timestamp,
    Category varchar(10),
    OS varchar(50),
    Feedback varchar(500),
    PRIMARY KEY (Id),
    FOREIGN KEY (UserId) REFERENCES User(Id),
    FOREIGN KEY (SoftwareId) REFERENCES Software(Id),
    FOREIGN KEY (ChangeId) REFERENCES ChangeLog(Id)
);




