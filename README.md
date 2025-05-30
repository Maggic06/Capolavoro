/*Qui trovi tutti i file php da caricare nellla cartella htdocs di xampp!!*/
/*Questo è il codice che devi copiare ed incollare per creare e popolare il db utilizzando un pannello di interazione mysql:*/
drop database if exists Musica;
create database Musica;
use Musica;
create table CasaProduttrice(IdCa int unsigned auto_increment primary key, indirizzo varchar(40), Nome varchar(40))engine innodb;
create table Album(Idal int unsigned auto_increment primary key, copertina longblob, nome varchar(40), Data Date, Idca int unsigned, foreign key(idca)references casaproduttrice(idca))engine innodb;
create table Artista(IdAr integer unsigned auto_increment primary key, nomedarte varchar(40), Nome varchar(40), Cognome varchar(40), bio varchar(400), nazionalita varchar(40))engine innodb;
create table Canzone(IdC int unsigned auto_increment primary key, nome varchar(40), durata double, esplicita boolean, visualizzazioni int, lingua varchar(40), idal int unsigned, foreign key(idal)references Album(idal))engine innodb;
create table Playlist(Idp int unsigned auto_increment primary key, nome varchar(40), copertina longblob)engine innodb;
create table Utente(Idu int unsigned auto_increment primary key, username varchar(40), password varchar(40), nome varchar(40), cognome varchar(40))engine innodb;
create table Creata(idp int unsigned, idu int unsigned, foreign key(idp)references playlist(idp), foreign key(idu)references utente(idu))engine innodb;
create table Aggiunta(Idp int unsigned,idc int unsigned, foreign key(idp)references playlist(idp), foreign key(idc)references canzone(idc))engine innodb;
create table Registrata(idc int unsigned, idar int unsigned, foreign key(idc)references canzone(idc),foreign key(idar) references artista(idar))engine innodb;
create table Creato(idal int unsigned, idar int unsigned, foreign key(idal)references album(idal), foreign key(idar)references artista(idar))engine innodb;

insert into ()values();
insert into casaproduttrice(indirizzo,nome)values(“Via Valtellina 23”,”Universal Music”);
insert into casaproduttrice(indirizzo,nome)values(“Via Como 51”,”Sony Music”);
insert into casaproduttrice(indirizzo,nome)values(“Via Milano 17”,”Warner Music”);
insert into Album(copertina,nome,data,idca)values(“immagini/sirio.webp”,”Sirio”,”2022-04-07”,1);
insert into Artista(Nomedarte,nome,cognome,bio,nazionalita) values(“Lazza”,”Jacopo”,”Lazzarini”,””,”Italiana”);
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values(“Nessuno”,2.28,1,1900000,1,”Italiana”);
insert into creato(idal,idar)values(1,1);



insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Ouv3rture",2.45,1,15000000,1,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Molotov",2.52,1,20000000,1,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Panico",3.15,1,18000000,1,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Uscito di Galera",3.05,1,12000000,1,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Alibi",3.20,1,25000000,1,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Piove",3.10,1,16000000,1,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Cinema",2.58,1,30000000,1,"Italiana");
insert into Album(copertina,nome,data,idca) values("immagini/noipersone.webp","Noi, loro, gli altri","2021-11-19",1);
insert into Artista(Nomedarte,nome,cognome,bio,nazionalita) values("Marracash","Fabio","Bartolo Rizzo","Uno dei più influenti rapper italiani","Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Crazy Love",3.15,1,15000000,2,"Italiana");
insert into creato(idal,idar) values(2,2);
insert into Album(copertina,nome,data,idca) values("immagini/famoso.webp","Famoso","2020-11-20",1);
insert into Artista(Nomedarte,nome,cognome,bio,nazionalita) values("Sfera Ebbasta","Gionata","Boschetti","Trap king italiano","Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Hollywood",2.45,1,20000000,3,"Italiana");
insert into creato(idal,idar) values(3,3);
insert into Album(copertina,nome,data,idca) values("immagini/madreperla.webp","Madreperla","2023-01-13",1);
insert into Artista(Nomedarte,nome,cognome,bio,nazionalita) values("Guè","Cosimo","Fini","Veterano del rap italiano","Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Mollami Pt.2",3.00,1,8000000,4,"Italiana");
insert into creato(idal,idar) values(4,4);
insert into Album(copertina,nome,data,idca) values("immagini/flop.webp","FLOP","2021-10-01",1);
insert into Artista(Nomedarte,nome,cognome,bio,nazionalita) values("Salmo","Maurizio","Pisciottu","Rapper e produttore sardo","Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Kumite",2.55,1,12000000,5,"Italiana");
insert into creato(idal,idar) values(5,5);
insert into Album(copertina,nome,data,idca) values("immagini/eclissi.webp","Eclissi","2022-05-13",1);
insert into Artista(Nomedarte,nome,cognome,bio,nazionalita) values("Gemitaiz","Davide","De Luca","Rapper romano","Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Eclissi",3.20,1,5000000,6,"Italiana");
insert into creato(idal,idar) values(6,6);

insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Loro",3.22,1,12000000,2,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Pagina Nuova",3.45,1,8000000,2,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Noi",3.30,1,10000000,2,"Italiana");


insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Baby",2.55,1,25000000,3,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Macarena",2.48,1,18000000,3,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Abracadabra",3.02,1,15000000,3,"Italiana");


insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Cookies N' Cream",3.15,1,7000000,4,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Lunettes",2.58,1,6000000,4,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Prefisso",3.10,1,5500000,4,"Italiana");


insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Antipatico",3.05,1,10000000,5,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Mi Sento Bene",2.50,1,8500000,5,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("A Dio",3.20,1,7500000,5,"Italiana");


insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Qua",2.45,1,4000000,6,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Quando Sono Solo",3.12,1,3500000,6,"Italiana");
insert into Canzone(Nome,durata,esplicita,visualizzazioni,idal,lingua) values("Flashback",3.00,1,3000000,6,"Italiana");
