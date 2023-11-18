drop database electroNacer;
create database electroNacer;
use electroNacer;



create table utilisateur(
    utlisateur_id int primary key,
    utilisateur_password varchar(20)
);
describe utilisateur;
insert into utilisateur(utlisateur_id , utilisateur_password ) 
values(14 ,'idr' ),
    (12, 'tilila'),
    (13, 'arinas'), 
    (15, 'agrzam');
select * from utilisateur;


create table produit(
     id int primary key,
     libelle varchar(50),
     prix_unitaire float,
     quantite_min int,
     quantite_stock int,
     categorie varchar(30)
);
describe produit;
insert into produit ( id, libelle, prix_unitaire, quantite_min, quantite_stock,categorie)
 values(1 , 'machine_electrique' , 123.45, 3, 34, 'electronique'),
    (2 , 'robo' , 299.00, 1, 56, 'robotique'),
    (3,  'micanique', 87.76, 7, 78, 'mécanique');
  select * from produit;



  create table catégorie(
    catégorie_id int primary key,
    categorie_password varchar(20)
);
describe categorie;
insert into categorie(categorie_id , categorie_password ) 
values(1) ,'idr' ),
    (12, 'tilila'),
    (13, 'arinas'), 
    (15, 'agrzam');
select * from categorie;
