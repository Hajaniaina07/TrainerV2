/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  08/05/2019 02:58:29                      */
/*==============================================================*/


drop table if exists ACCES;

drop table if exists A_PROPOS;

drop table if exists CATEGORIE;

drop table if exists CATEGORIEPROGRAM;

drop table if exists CONTACT_INFO;

drop table if exists EXERCICE;

drop table if exists GALLERY;

drop table if exists IMAGE;

drop table if exists MENU;

drop table if exists MESSAGE;

drop table if exists OUVERTURE;

drop table if exists PROGRAMME;

drop table if exists USER;

/*==============================================================*/
/* Table : ACCES                                                */
/*==============================================================*/
create table ACCES
(
   ID              int not null auto_increment,
   NOM                  varchar(50) not null,
   NIVEAU               int not null,
   primary key (ID)
);

/*==============================================================*/
/* Table : A_PROPOS                                             */
/*==============================================================*/
create table A_PROPOS
(
   ID            int not null auto_increment,
   NOM                  varchar(50) not null,
   DESCRIPTION          text not null,
   primary key (ID)
);

/*==============================================================*/
/* Table : CATEGORIE                                            */
/*==============================================================*/
create table CATEGORIE
(
   ID          int not null auto_increment,
   NOM                  varchar(50) not null,
   AGEMIN               int,
   AGEMAX               int,
   DESCRIPTION          text,
   STATUT               bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : CATEGORIEPROGRAM                                     */
/*==============================================================*/
create table CATEGORIEPROGRAM
(
   IDCATEGORIE          int not null,
   IDEXERCICE            int not null,
   REPETITION           int not null,
   MIN                  int not null,
   MAX                  int not null,
   PAUSE                int not null,
   STATUT               bool,
   primary key (IDCATEGORIE, IDEXERCICE)
);

/*==============================================================*/
/* Table : CONTACT_INFO                                         */
/*==============================================================*/
create table CONTACT_INFO
(
   ID               int not null auto_increment,
   NOM                  varchar(50),
   TEXTE                varchar(50) not null,
   CLASS                varchar(50) not null,
   STATUT               bool not null,
   primary key (ID)
);

/*==============================================================*/
/* Table : EXERCICE                                             */
/*==============================================================*/
create table EXERCICE
(
   ID            int not null auto_increment,
   IDIMAGE              int,
   NOM                  varchar(50) not null,
   DESCRIPTION          text not null,
   STATUT               bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : GALLERY                                              */
/*==============================================================*/
create table GALLERY
(
   ID            int not null auto_increment,
   IDIMAGE              int,
   DESCRIPTION          text,
   primary key (ID)
);

/*==============================================================*/
/* Table : IMAGE                                                */
/*==============================================================*/
create table IMAGE
(
   ID              int not null auto_increment,
   DOSSIER              varchar(50) not null,
   NOM                  varchar(50) not null,
   ALT                  varchar(50) not null,
   STATUT               bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : MENU                                                 */
/*==============================================================*/
create table MENU
(
   ID               int not null auto_increment,
   NOM                  varchar(50) not null,
   LIENS                varchar(75) not null,
   CLASS                varchar(50),
   STATUT               bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : MESSAGE                                              */
/*==============================================================*/
create table MESSAGE
(
   ID            char(10) not null,
   NOM                  varchar(50),
   PRENOM               varchar(50),
   EMAIL                varchar(50),
   SUJET                varchar(20),
   CONTENUE             text not null,
   LUE                  bool,
   STATUT               bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : OUVERTURE                                            */
/*==============================================================*/
create table OUVERTURE
(
   ID                int not null auto_increment,
   JOUR                 varchar(50) not null,
   HEURE                varchar(50) not null,
   STATUT               bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : PROGRAMME                                            */
/*==============================================================*/
create table PROGRAMME
(
   ID                char(10) not null,
   IDCATEGORIE          int,
   IDEXERCICE            int,
   MOMENT               datetime not null,
   STATUT               bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : USER                                                 */
/*==============================================================*/
create table USER
(
   ID               int not null auto_increment,
   IDACCES              int,
   USERNAME             varchar(50) not null,
   PASSWORD             longtext not null,
   NAISSANCE            date,
   CONTACT              varchar(50),
   STATUT               bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : TITREPAGE                                                 */
/*==============================================================*/
create table TITREPAGE
(
   ID               int not null auto_increment,
   PAGE             varchar(50) not null,
   TITRE              varchar(50),
   primary key (ID)
);

alter table CATEGORIEPROGRAM add constraint FK_CATEGORIEPROGRAM foreign key (IDCATEGORIE)
      references CATEGORIE (ID) on delete restrict on update restrict;

alter table CATEGORIEPROGRAM add constraint FK_CATEGORIEPROGRAM2 foreign key (IDEXERCICE)
      references EXERCICE (ID) on delete restrict on update restrict;

alter table EXERCICE add constraint FK_RELATION_7 foreign key (IDIMAGE)
      references IMAGE (ID) on delete restrict on update restrict;

alter table GALLERY add constraint FK_RELATION_3 foreign key (IDIMAGE)
      references IMAGE (ID) on delete restrict on update restrict;

alter table PROGRAMME add constraint FK_RELATION_5 foreign key (IDEXERCICE)
      references EXERCICE (ID) on delete restrict on update restrict;

alter table PROGRAMME add constraint FK_RELATION_6 foreign key (IDCATEGORIE)
      references CATEGORIE (ID) on delete restrict on update restrict;

alter table USER add constraint FK_RELATION_2 foreign key (IDACCES)
      references ACCES (ID) on delete restrict on update restrict;

INSERT INTO `menu` (`NOM`, `LIENS`, `CLASS`) VALUES
('ACCEUIL', 'TheTrainer', 'active'),
('PROGRAMS', 'Programs', NULL),
('GALLERY', 'Gallery', NULL),
('CONTACT', 'Contact', NULL);

INSERT INTO TITREPAGE (PAGE, TITRE) VALUES
('PROGRAMS','PROGRAMS'),
('GALLERY','GALLERY'),
('CONTACT','CONTACT');

INSERT INTO CONTACT_INFO (NOM, TEXTE, CLASS) VALUES
('adresse','Ampasanimalo LOT II W 28, Antananarivo 101','icon-location2'),
('mail','trainerbase07@cuvox.de','icon-mail'),
('telephone','+261 34 07 211 10','icon-phone2');

INSERT INTO OUVERTURE (JOUR, HEURE) VALUES
('LUNDI - VENDREDI','08:00 – 20:00'),
('SAMEDI','08:00 - 17:30'),
('DIMANCHE','FERMEE');

INSERT INTO A_PROPOS (NOM, DESCRIPTION) VALUE
('A PROPOS','Trainer est une salle de sport qui propose des cours de fitness, de danse et une salle de musculation.

Réunissant plusieurs coachs sportifs, et des professionnels de la danse.');

INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('gallery','img_1.jpg','img_1');
INSERT INTO GALLERY(IDIMAGE, DESCRIPTION) value (1,'img_1');
INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('gallery','img_2.jpg','img_2');
INSERT INTO GALLERY(IDIMAGE, DESCRIPTION) value (2,'img_2');
INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('gallery','img_3.jpg','img_3');
INSERT INTO GALLERY(IDIMAGE, DESCRIPTION) value (3,'img_3');
INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('gallery','img_5.jpg','img_4');
INSERT INTO GALLERY(IDIMAGE, DESCRIPTION) value (4,'img_4');
INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('gallery','img_5.jpg','img_5');
INSERT INTO GALLERY(IDIMAGE, DESCRIPTION) value (5,'img_5');
INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('gallery','img_6.jpg','img_6');
INSERT INTO GALLERY(IDIMAGE, DESCRIPTION) value (6,'img_1');
INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('gallery','img_7.jpg','img_7');
INSERT INTO GALLERY(IDIMAGE, DESCRIPTION) value (7,'img_7');

CREATE VIEW DETAILGALLERY AS SELECT gallery.ID,i.DOSSIER,i.NOM,i.ALT
FROM gallery g JOIN image i on g.IDIMAGE = i.ID;

CREATE VIEW IMGEXOCAT AS SELECT i.DOSSIER,i.NOM as NOMIMAGE,i.ALT,
                                c.NOM as NOMCATEGORIE,c.AGEMIN,c.AGEMAX,
                                cp.REPETITION,cp.MIN,cp.MAX,cp.PAUSE,
                                e.NOM as NOMEXERCICE
FROM CATEGORIEPROGRAM cp join CATEGORIE c on c.ID = cp.IDCATEGORIE
JOIN EXERCICE e on e.ID = cp.IDEXERCICE
JOIN IMAGE i on e.IDIMAGE = i.ID;

INSERT INTO CATEGORIE (nom, agemin, agemax) VALUES
('Debutant',12,50),
('Intermediaire',15,50),
('Avancé',17,45);

INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('exercice','img_1.jpg','img_1');
INSERT INTO EXERCICE (IDIMAGE, NOM, DESCRIPTION) VALUE(8,'Dumbbell Squat','Pousser sur vos jambes afin de revenir à la position initiale, sans toutefois verrouiller les genoux (garder les jambes légèrement fléchies).');

INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('exercice','img_2.jpg','img_2');
INSERT INTO EXERCICE (IDIMAGE, NOM, DESCRIPTION) VALUE(9,'Push Up','Elever les pieds en plaçant les orteils sur une surface stable et surélevée telle qu''un banc, une chaise ou une marche.');

INSERT INTO IMAGE (DOSSIER, NOM, ALT) VALUE ('exercice','img_3.jpg','img_3');
INSERT INTO EXERCICE (IDIMAGE, NOM, DESCRIPTION) VALUE(10,'Reverse Lunge','Le mouvement d''une jambe augmentera la stabilité, corrigera les déséquilibres musculaires, réduira les douleurs aux genoux et aux hanches, et vous aidera même à mieux marcher en talons.');

INSERT INTO USER (USERNAME, PASSWORD) VALUE ('admin','admin');