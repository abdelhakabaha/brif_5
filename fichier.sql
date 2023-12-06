drop database Electro_naccer;
create database Electro_naccer;
use Electro_naccer;


create table User (
    UserId int PRIMARY KEY ,
   
    Passwords varchar(20) not null
   
);
describe User;
 INSERT INTO User(UserId, Passwords)
 VALUES (1,"abc");

 CREATE TABLE Category (
    Category_Id INT PRIMARY key,
    Category_nam varchar(20)
 );
 insert into Category 
 values  (1,"pc"),
         (2,"phones"),
         (3,"watches");
 
 create table products (
    Product_Id int PRIMARY key,
    Product_name varchar(20),
    Product_img varchar(50),
    prix_unitair float,
    mini_de_stok int, 
    max_de_stok int,
    categoryy_ID int,
    foreign key(categoryy_ID) references Category(Category_Id)
 );

 insert into products (Product_Id,Product_name,Product_img,prix_unitair,mini_de_stok,max_de_stok,categoryy_ID)
   values(1, 'PC Gaimer',        'IMG/img_pc1.png', 2050, 18, 12,  1),
         (2, 'pc HP',            'IMG/img_pc2.png', 2380, 30, 130, 1),
         (3, 'PC HP',            'IMG/img_pc3.png', 2740, 10, 210, 1),
         (4, 'lenovo mix320',    'IMG/img_pc4.png', 1875, 10, 80,  1),
         (5, 'lenovo mix9_001',  'IMG/img_pc5.png', 1580, 0,  9,   1),
         (6, 'portatil lenovo',  'IMG/img_pc6.png', 3025, 12, 20,  1),
         (7, 'iphon_pc',         'IMG/img_pc7.png', 1790, 7,  10,  1),
         (8, 'tochiba',          'IMG/img_pc8.png', 2130, 0,  10,  1),


         (9,  'iphone14 pro MAX',         'IMG/img_phone1.png', 1945, 20, 70,  2),
         (10, 'iphone13 pro MAX',         'IMG/img_phone2.png', 2875, 77, 180, 2),
         (11, 'iphone12 PRO',             'IMG/img_phone3.png', 2490, 20, 100, 2),
         (12, 'iphone11 noveau',          'IMG/img_phone4.png', 2050, 34, 120, 2),
         (13, 'Smartphone Cases Covers',  'IMG/img_phone5.png', 1675, 2,  17,  2),
         (14, 'Xiaomi Mi 11',             'IMG/img_phone6.png', 2500, 49, 150, 2),
         (15, 'Screen Protectors',        'IMG/img_phone7.png', 2360, 9,  150, 2),
         (16, 'Vivo X 60 Pro',            'IMG/img_phone8.png', 2460, 2,  160, 2),


         (17, 'buy LUXURY',            'IMG/watch1.jpg', 2510, 6,   11,  3),
         (18, 'fashion watch MEN ',    'IMG/watch2.jpg', 2080, 7,   12,  3),
         (20, 'MUNITI MEN Creative',   'IMG/watch3.jpg', 1890, 5,   90,  3),
         (21, 'Raedeel mens watches',  'IMG/watch4.jpg', 2575, 60,  16,  3),
         (22, 'New Arrival Top Brand', 'IMG/watch5.jpg', 1650, 80,  100, 3),
         (19, 'Brand XINEW Mens',      'IMG/watch6.jpg', 2240, 6,   110, 3),
         (23, 'Gold-Plated Benrus',    'IMG/watch7.jpg', 3110, 100, 21,  3),
         (24, 'Mens Watches Digital',  'IMG/watch8.png', 1860, 21,  110, 3);