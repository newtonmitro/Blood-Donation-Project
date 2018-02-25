-- Create Database Blood Donation --------------------------
CREATE DATABASE Blood_Donation;

-- Create Table Status ---------------------------------------
CREATE TABLE Status (
id TINYINT (1) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
status VARCHAR (50)
);

-- Create Table Blood Group -------------------------------------
CREATE TABLE Blood_Groups (
id TINYINT (1) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
blood_group VARCHAR (15) NOT NULL
);

-- Create User Group Table--------------------------------------------------
CREATE TABLE Rolls (
id TINYINT (1) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
roll VARCHAR (50) NOT NULL
);

-- Create Medical Reason Table ---------------------------------------------
CREATE TABLE Medical_Reasons (
id TINYINT (1) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
reason VARCHAR (100) NOT NULL
);

-- Create Request Type Table --------------------------------------------------
CREATE TABLE Request_Type (
id TINYINT (1) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
request_type VARCHAR (50) NOT NULL
);

-- Blood Components Table ------------------------------------------------------
CREATE TABLE Blood_Components (
id TINYINT (1) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
blood_component VARCHAR (30) NOT NULL
);

-- User Rating Table ------------------------------------------------------
CREATE TABLE Ratings (
id TINYINT (2) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
rating INT NOT NULL
);

-- Sex Table --------------------------------------------------------------
CREATE TABLE Sex (
id TINYINT (1) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
sex VARCHAR (10)  NOT NULL
);

-- District or City Table -------------------------------------------------
CREATE TABLE Districts (
id TINYINT (2) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
district VARCHAR (100) NOT NULL
);

-- Create Table User -------------------------------------
CREATE TABLE Users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
fname VARCHAR (100) NOT NULL ,
lname VARCHAR (100) NOT NULL ,
reg_date DATETIME DEFAULT CURRENT_TIMESTAMP ,
activation_Key VARCHAR (100) ,
sex TINYINT ,
blood_group TINYINT ,
dbo DATE ,
district TINYINT ,
contact_no VARCHAR (15) ,
alt_contact VARCHAR (15) ,
roll TINYINT NOT NULL ,
status TINYINT ,
rating TINYINT ,
email VARCHAR (100) NOT NULL ,
password VARCHAR (255) NOT NULL ,
display_name VARCHAR (100) ,
url VARCHAR (255) ,
photo VARCHAR (255) ,
FOREIGN KEY (sex) REFERENCES Sex(id),
FOREIGN KEY (blood_group) REFERENCES Blood_Groups(id),
FOREIGN KEY (district) REFERENCES Districts(id),
FOREIGN KEY (roll) REFERENCES Rolls(id),
FOREIGN KEY (status) REFERENCES Status(id),
FOREIGN KEY (rating) REFERENCES Ratings(id)
 );

-- Create Table Blood Transfusion --------------------------------------------
CREATE TABLE Transfusions (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
user_id INT NOT NULL ,
last_transfusion_date DATE ,
given_quantity INT ,
FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Request Table ---------------------------------------------------
CREATE TABLE  Requests (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
sender INT NOT NULL ,
request_type TINYINT ,
request_date DATETIME DEFAULT CURRENT_TIMESTAMP ,
-- Blood Information
transfusiion_date DATE ,
blood_group TINYINT NOT NULL ,
blood_component TINYINT ,
required_quantity INT ,
managed_quantity INT ,
-- Patient Information
patient_name VARCHAR (50) ,
patient_sex TINYINT ,
patient_age INT ,
medical_reason TINYINT ,
contact_no VARCHAR (15) NOT NULL ,
relation VARCHAR (30) ,
-- Patient Location Information
district TINYINT ,
location VARCHAR (255) NOT NULL ,
other_messages TEXT ,
FOREIGN KEY (sender) REFERENCES Users(id) ,
FOREIGN KEY (patient_sex) REFERENCES Sex(id),
FOREIGN KEY (blood_group) REFERENCES Blood_Groups(id),
FOREIGN KEY (district) REFERENCES Districts(id),
FOREIGN KEY (blood_component) REFERENCES Blood_Components(id),
FOREIGN KEY (medical_reason) REFERENCES Medical_Reasons(id)
);

-- Request Send and Receive -------------------------------------------
CREATE TABLE Receivers(
ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
request_id INT NOT NULL ,
receiver INT ,
FOREIGN KEY (request_id) REFERENCES Requests(id) ,
FOREIGN KEY (receiver) REFERENCES Users(id)
);

-- ---------------------------------------------------------------------
-- Post Status Table (Published, Draft, Trashed) -----------------------
CREATE TABLE Post_Status (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
post_status VARCHAR (20) NOT NULL
);

-- Post_Type (Thank you message, Request to user or Board) --------------
CREATE TABLE Post_Types (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
post_type VARCHAR (20) NOT NULL
);



-- Create Table Post --------------------------
CREATE TABLE Posts (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
user_id INT NOT NULL ,
-- Post information
post_date DATETIME DEFAULT CURRENT_TIMESTAMP ,
post_title VARCHAR (255) NOT NULL ,
post_content VARCHAR (255) ,
post_status INT ,
post_type INT ,
post_password VARCHAR (255) ,
post_modified DATETIME DEFAULT CURRENT_TIMESTAMP ,
FOREIGN KEY (user_id) REFERENCES Users(id) ,
FOREIGN KEY (post_type) REFERENCES Post_Types(id)
);

-- Post Parent Table---------------------------------------------
CREATE TABLE Post_Parent (
post_id INT ,
parent_id INT ,
FOREIGN KEY (post_id) REFERENCES Posts(id) ,
FOREIGN KEY (parent_id) REFERENCES Users(id)
);





-- Insert Look up table data -------------------------------------
INSERT INTO Blood_Groups(`Blood_Group`) VALUES ('A+');
INSERT INTO Blood_Groups(`Blood_Group`) VALUES ('A-');
INSERT INTO Blood_Groups(`Blood_Group`) VALUES ('AB+');
INSERT INTO Blood_Groups(`Blood_Group`) VALUES ('AB-');
INSERT INTO Blood_Groups(`Blood_Group`) VALUES ('B+');
INSERT INTO Blood_Groups(`Blood_Group`) VALUES ('B-');
INSERT INTO Blood_Groups(`Blood_Group`) VALUES ('O+');
INSERT INTO Blood_Groups(`Blood_Group`) VALUES ('O-');



INSERT INTO `districts`(`district`)
VALUES ('Bagerhat'),('Bandarban'),('Barguna'),('Barisal'),('Bhola'),
('Bogra'),('Brahmanbaria'),('Chandpur'),('Chittagong'),('Chuadanga'),
('Comilla'),("Cox's Bazar"),('Dhaka'),('Dinajpur'),('Faridpur'),('Feni'),
('Gaibandha'),('Gazipur'),('Gopalganj'),('Habiganj'),('Jamalpur'),('Jessore'),
('Jhalokati'),('Jhenaidah'),('Joypurhat'),('Khagrachhari'),('Khulna'),
('Kishoreganj'),('Kurigram'),('Kushtia'),('Lakshmipur'),('Lalmonirhat'),
('Madaripur'),('Magura'),('Manikganj'),('Meherpur'),('Moulvibazar'),
('Munshiganj'),('Mymensingh'),('Naogaon'),('Narail'),('Narayanganj'),
('Narsingdi'),('Natore'),('Nawabganj'),('Netrokona'),('Nilphamari'),
('Noakhali'),('Pabna'),('Panchagarh'),('Patuakhali'),('Pirojpur'),('Rajbari'),
('Rajshahi'),('Rangamati'),('Rangpur'),('Satkhira'),('Shariatpur'),('Sherpur'),
('Sirajganj'),('Sunamganj'),('Sylhet'),('Tangail'),('Thakurgaon');


INSERT INTO `sex`(`sex`) VALUES ('Male');
INSERT INTO `sex`(`sex`) VALUES ('Female');
INSERT INTO `sex`(`sex`) VALUES ('Others');



INSERT INTO `ratings`(`Rating`) VALUES (1);
INSERT INTO `ratings`(`Rating`) VALUES (2);
INSERT INTO `ratings`(`Rating`) VALUES (3);
INSERT INTO `ratings`(`Rating`) VALUES (4);
INSERT INTO `ratings`(`Rating`) VALUES (5);


INSERT INTO `rolls`(`Roll`) VALUES ('Administrator');
INSERT INTO `rolls`(`Roll`) VALUES ('Donor');
INSERT INTO `rolls`(`Roll`) VALUES ('Visitor');

INSERT INTO `request_type`(`Request_Type`) VALUES ('Request to donor');
INSERT INTO `request_type`(`Request_Type`) VALUES ('Request to request board');

INSERT INTO `medical_reasons`(`Reason`) VALUES ('Surgery');
INSERT INTO `medical_reasons`(`Reason`) VALUES ('Pregnancy');
INSERT INTO `medical_reasons`(`Reason`) VALUES ('Accident');
INSERT INTO `medical_reasons`(`Reason`) VALUES ('Leukemia');


INSERT INTO `blood_components`(`Blood_Component`) VALUES ('Red cells');
INSERT INTO `blood_components`(`Blood_Component`) VALUES ('Platelets');
INSERT INTO `blood_components`(`Blood_Component`) VALUES ('Plasma');
INSERT INTO `blood_components`(`Blood_Component`) VALUES ('Cryoprecipitated AHF');






