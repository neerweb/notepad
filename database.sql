-- Create Database
CREATE DATABASE NotepadApp;

-- Use Database
USE NotepadApp;

-- Create Table
CREATE TABLE Notes (
    NoteID INT IDENTITY(1,1) PRIMARY KEY,
    NoteText NVARCHAR(MAX),
    CreatedAt DATETIME DEFAULT GETDATE()
);
