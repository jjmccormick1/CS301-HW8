CREATE TABLE ROOM
(
  Type VARCHAR(255) NOT NULL,
  Discharge_Date DATE NOT NULL,
  RoomID INT NOT NULL,
  PRIMARY KEY (RoomID)
);

CREATE TABLE PATIENT
(
  PatientID INT NOT NULL,
  Address VARCHAR(255) NOT NULL,
  Sex CHAR(1) NOT NULL,
  Name VARCHAR(255) NOT NULL,
  Phone NUMERIC(10) NOT NULL,
  RoomID INT NOT NULL,
  PRIMARY KEY (PatientID),
  FOREIGN KEY (RoomID) REFERENCES ROOM(RoomID)
);
INSERT INTO ROOM (Type, Discharge_Date, RoomID) VALUES
('Cardiology', '2019-01-07', 25);
INSERT INTO ROOM (Type, Discharge_Date, RoomID) VALUES
('Cardiology', '2019-02-12', 26);
INSERT INTO ROOM (Type, Discharge_Date, RoomID) VALUES
('ICU', '2019-01-18', 1);
INSERT INTO ROOM (Type, Discharge_Date, RoomID) VALUES
('ICU', '2019-01-22', 2);
INSERT INTO ROOM (Type, Discharge_Date, RoomID) VALUES
('Surgery', '2019-02-05', 30);
INSERT INTO ROOM (Type, Discharge_Date, RoomID) VALUES
('Surgery', '2019-02-01', 31);

INSERT INTO PATIENT (PatientID, Address, Sex, Name, Phone, RoomID) VALUES
(1001, '100 Main St, Tuscaloosa AL, 35404', 'M', 'John Smith', 2055551234, 25);
INSERT INTO PATIENT (PatientID, Address, Sex, Name, Phone, RoomID) VALUES
(1067, '345 15th St, Tuscaloosa AL, 35404', 'F', 'Jenny Colton', 2052344567, 26);
INSERT INTO PATIENT (PatientID, Address, Sex, Name, Phone, RoomID) VALUES
(1234, '856 Queens Ave, Tuscaloosa AL, 35405', 'F', 'Amanda Ericson', 2561234567, 1);
INSERT INTO PATIENT (PatientID, Address, Sex, Name, Phone, RoomID) VALUES
(1456, '567 13th St, Northport AL, 35406', 'M', 'Jeremy McCormick', 2050987654, 2);
INSERT INTO PATIENT (PatientID, Address, Sex, Name, Phone, RoomID) VALUES
(1678, '678 Hackberry Ln, Tuscaloosa AL, 35405', 'F', 'Bonnie Withers', 2055678901, 30);

USE jjmccormick;
SELECT * FROM ROOM;