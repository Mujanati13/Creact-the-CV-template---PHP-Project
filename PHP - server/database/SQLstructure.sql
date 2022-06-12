-- insert into user(fullName , age, address, phone_number, email, password, state_date) values(---);
create database projet_cv;
use projet_cv;
create table user(
    CIN varchar(20) primary key,
    titre_prof varchar(30),
    -- about the photo i don't know how to put it in the database
    fullname varchar(40),
    age int,
    email varchar(40),
    tel varchar(30),
    adress varchar(60)
    ville varchar(30),
    profil varchar(200),
    nationalite varchar(20),
    etat_civil varchar(20),
    permit varchar(10),
    genre varchar (10),
    pswd varchar(50) not null,
	state_date date not null default current_date,
	NTHtemplateCV int
);
create table diplomes(
    form_id int primary key  AUTO_INCREMENT,
    formation varchar(50),
    etablissement varchar(40)
    ville varchar(20),
    date_debut date,
    date_fin date,
    descriptions varchar(100),
    CIN varchar(20),
    foreign key (CIN) references user (CIN)
);
create table experiences(
    exp_id int primary key  AUTO_INCREMENT,
    poste varchar(50),
    employeur varchar(40)
    ville varchar(20),
    date_debut date,
    date_fin date,
    descriptions varchar(100) ,
    CIN varchar(20),
    foreign key (CIN) references user (CIN)
);
create table competences(
    comp_id int primary key  AUTO_INCREMENT,
    competence varchar(30),
    niveau varchar(20),
    CIN varchar(20),
    foreign key (CIN) references user (CIN)
);
create table loisirs(
    loisir_id int primary key  AUTO_INCREMENT,
    interet varchar(30),
    CIN varchar(20),
    foreign key (CIN) references user (CIN)
);
create table langues(
    lang_id int primary key  AUTO_INCREMENT,
    langue varchar(30),
    niveau varchar(20),
    CIN varchar(20),
    foreign key (CIN) references user (CIN)
);
create table qualites(
    qual_id int primary key  AUTO_INCREMENT,
    qualite varchar(30),
    CIN varchar(20),
    foreign key (CIN) references user (CIN)
);
create table projets(
    proj_id int primary key  AUTO_INCREMENT,
    projet varchar(30),
    descriptions varchar(100),
    CIN varchar(20),
    foreign key (CIN) references user (CIN)
); 