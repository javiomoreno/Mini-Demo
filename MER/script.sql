CREATE TABLE mid_sexos (
  sexoiden INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  sexonomb VARCHAR(50)  NULL  ,
  sexodesc VARCHAR(200)  NULL    ,
PRIMARY KEY(sexoiden));



CREATE TABLE mid_tiposUsuarios (
  tiusiden INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  tiusnomb VARCHAR(50)  NULL  ,
  tiusdesc VARCHAR(200)  NULL    ,
PRIMARY KEY(tiusiden));



CREATE TABLE mid_usuarios (
  usuaiden INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  mid_sexos_sexoiden INTEGER UNSIGNED  NOT NULL  ,
  mid_tiposUsuarios_tiusiden INTEGER UNSIGNED  NOT NULL  ,
  usuanomb VARCHAR(50)  NULL  ,
  usuaapel VARCHAR(50)  NULL  ,
  usuacedu VARCHAR(50)  NULL  ,
  usuatele VARCHAR(50)  NULL  ,
  usuadire VARCHAR(200)  NULL  ,
  usuauser VARCHAR(50)  NULL  ,
  useapass VARCHAR(250)  NULL    ,
PRIMARY KEY(usuaiden)  ,
INDEX mid_usuarios_FKIndex1(mid_tiposUsuarios_tiusiden)  ,
INDEX mid_usuarios_FKIndex2(mid_sexos_sexoiden),
  FOREIGN KEY(mid_tiposUsuarios_tiusiden)
    REFERENCES mid_tiposUsuarios(tiusiden)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(mid_sexos_sexoiden)
    REFERENCES mid_sexos(sexoiden)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE mid_categorias (
  cateiden INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  mid_usuarios_usuaiden INTEGER UNSIGNED  NOT NULL  ,
  catenomb VARCHAR(50)  NULL  ,
  catedesc VARCHAR(200)  NULL    ,
PRIMARY KEY(cateiden)  ,
INDEX mid_categorias_FKIndex1(mid_usuarios_usuaiden),
  FOREIGN KEY(mid_usuarios_usuaiden)
    REFERENCES mid_usuarios(usuaiden)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE mid_subCategorias (
  sucaiden INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  mid_categorias_cateiden INTEGER UNSIGNED  NOT NULL  ,
  sucanomb VARCHAR(50)  NULL  ,
  sucadesc VARCHAR(200)  NULL    ,
PRIMARY KEY(sucaiden)  ,
INDEX mid_subCategorias_FKIndex1(mid_categorias_cateiden),
  FOREIGN KEY(mid_categorias_cateiden)
    REFERENCES mid_categorias(cateiden)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);




