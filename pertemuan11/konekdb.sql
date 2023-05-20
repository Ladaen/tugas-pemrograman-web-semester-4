Create table if not exists `user` (
    `id` int(11) not null auto_increment,
    `nama` varchar(50) not null,
    `alamat` text not null,
    `pekerjaan` varchar(50) not null,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 auto_increment=64;

insert into `user` (`id`,`nama`,`alamat`,`pekerjaan`) values
(1,'Andi','Surabaya','Web Programmer'),
(2,'Santoso','Jakarta','Web Designer'),
(3,'Samsul','Sumedang','Pegawai');
