START TRANSACTION;

CREATE DATABASE IF NOT EXISTS `erporate`;

USE `erporate`;

CREATE TABLE `Jabatan` (
  `kd_jabatan` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `jabatan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nama` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `kd_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Kehadiran` (
  `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_karyawan` int(11) NOT NULL,
  `hari` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_datang` time NOT NULL,
  `jam_pulang` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `Karyawan`
  ADD CONSTRAINT `FK_KaryawanJabatan` FOREIGN KEY (`kd_jabatan`) REFERENCES `Jabatan`(`kd_jabatan`) 
  ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `Kehadiran`
  ADD CONSTRAINT `FK_KehadiranKaryawan` FOREIGN KEY (`id_karyawan`) REFERENCES `Karyawan`(`id_karyawan`) 
  ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `Jabatan` (`kd_jabatan`, `jabatan`) VALUES
(1, 'Programer'),
(2, 'Analisis'),
(3, 'Analisis Dev'),
(4, 'Bisnis Dev');

INSERT INTO `Karyawan` (`id_karyawan`, `nama`, `gender`, `alamat`, `no_hp`, `kd_jabatan`) VALUES
(1, 'Ahmad', 'L', 'Jalan 1', '085xxx', 1),
(2, 'Lutfi', 'L', 'Jalan 2', '0878xxx', 2),
(3, 'Sidiq', 'L', 'Jalan 3', '0823xxx', 3),
(4, 'Nadia', 'P', 'Jalan 4', '0857xxx', 4);



INSERT INTO `Kehadiran` (`id_kehadiran`, `id_karyawan`, `hari`, `tanggal`, `jam_datang`, `jam_pulang`) VALUES
(1, 1, 0, '2018-02-19', '07:30:00', '16:00:00'),
(2, 1, 1, '2018-02-20', '08:00:00', '16:30:00'),
(3, 4, 0, '2018-02-19', '07:50:00', '17:00:00'),
(4, 2, 0, '2018-02-19', '08:10:00', '17:30:00');

COMMIT;