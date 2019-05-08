/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  06/05/2019 05:43:23                      */
/*==============================================================*/


drop table if exists ACCES;

drop table if exists CATEGORIE;

drop table if exists IMAGE;

drop table if exists IMAGEPROGRAM;

drop table if exists IMAGEUSER;

drop table if exists MENU;

drop table if exists PROGRAM;

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
/* Table : CATEGORIE                                            */
/*==============================================================*/
create table CATEGORIE
(
   ID          int not null auto_increment,
   NOM                  varchar(50) not null,
   AGEMIN               int,
   AGEMAX               int,
   DESCRIPTION          text not null,
   STATUT               bool,
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
/* Table : IMAGEPROGRAM                                         */
/*==============================================================*/
create table IMAGEPROGRAM
(
   ID            int not null,
   IDIMAGE              int not null,
   AJOUT                date not null,
   DESCRIPTION          text,
   primary key (ID, IDIMAGE)
);

/*==============================================================*/
/* Table : IMAGEUSER                                            */
/*==============================================================*/
create table IMAGEUSER
(
   ID               int not null,
   IDIMAGE              int not null,
   AJOUT                date,
   DESCRIPTION          text,
   primary key (ID, IDIMAGE)
);

/*==============================================================*/
/* Table : MENU                                                 */
/*==============================================================*/
create table MENU
(
   ID               int not null auto_increment,
   NOM                  varchar(50) not null,
   LIENS                varchar(75) not null,
   MERE                 bool,
   CLASS                varchar(50),
   STATUT               bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : PROGRAM                                              */
/*==============================================================*/
create table PROGRAM
(
   ID            int not null auto_increment,
   NOM                  varchar(50) not null,
   DESCRIPTION          text not null,
   REPETITION           int not null,
   MIN                  int not null,
   MAX                  int not null,
   PAUSE                int not null,
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
   NAISSANCE            date not null,
   CONTACT              varchar(50),
   STATUT               bool,
   primary key (ID)
);

alter table IMAGEPROGRAM add constraint FK_IMAGEPROGRAM foreign key (ID)
      references PROGRAM (ID) on delete restrict on update restrict;

alter table IMAGEPROGRAM add constraint FK_IMAGEPROGRAM2 foreign key (IDIMAGE)
      references IMAGE (ID) on delete restrict on update restrict;

alter table IMAGEUSER add constraint FK_IMAGEUSER foreign key (ID)
      references USER (ID) on delete restrict on update restrict;

alter table IMAGEUSER add constraint FK_IMAGEUSER2 foreign key (IDIMAGE)
      references IMAGE (ID) on delete restrict on update restrict;


alter table USER add constraint FK_RELATION_2 foreign key (IDACCES)
      references ACCES (ID) on delete restrict on update restrict;

INSERT INTO `menu` (`ID`, `NOM`, `LIENS`, `CLASS`, `MERE`, `STATUT`) VALUES
(1, 'ACCEUIL', '', 'active', 0, 1),
(2, 'PROGRAMS', 'programs', NULL, 0, 1),
(3, 'GALLERY', 'gallery', NULL, 0, 1),
(5, 'CONTACT', 'contact', NULL, 0, 1);