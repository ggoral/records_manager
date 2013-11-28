drop database records;
create database records;

use records;

DROP TABLE IF EXISTS `keyword`;

CREATE TABLE `keyword` (
  `id_keyword` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) NOT NULL,
  PRIMARY KEY (`id_keyword`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

insert  into `keyword`(`id_keyword`,`keyword`) values (1,'key1'),(2,'key2'),(3,'key3'),(4,'key4');

DROP TABLE IF EXISTS `persona`;

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `persona` varchar(50) NOT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

insert  into `persona`(`id_persona`,`persona`) values (1,'persona1'),(2,'persona2'),(3,'persona3'),(4,'persona4');

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

insert  into `usuario`(`id_usuario`,`username`,`password`,`rol`) values (1,'admin','admin',1),(2,'ggoral','ggoral',1),(3,'jsivori','jsivori',2),(4,'aparmisano','aparmisano',2);

DROP TABLE IF EXISTS `expediente`;

CREATE TABLE `expediente` (
  `id_expediente` int(11) NOT NULL AUTO_INCREMENT, 
  `causante` varchar(50) NOT NULL,
  `extracto` varchar(50) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_keyword` int(11) NOT NULL,
  PRIMARY KEY (`id_expediente`),
  FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  FOREIGN KEY (`id_keyword`) REFERENCES `keyword` (`id_keyword`) ON DELETE NO ACTION ON UPDATE NO ACTION
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

insert  into `expediente`(`id_expediente`,`causante`,`extracto`,`id_persona`,`id_keyword`) values (1,'causante','extracto',1,1);