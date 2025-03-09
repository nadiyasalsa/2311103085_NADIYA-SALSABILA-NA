
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `daftartugas` (
  `id_tugas` int(15) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `deadline` date NOT NULL,
  `jenis` enum('Tugas Harian','Quiz','Ujian','Proyek') NOT NULL,
  `status` enum('Selesai','Belum Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `daftartugas`(`id_tugas`, `mata_kuliah`, `deskripsi`, `deadline`, `jenis`, `status`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
ALTER TABLE `daftartugas`
  ADD PRIMARY KEY (`id_tugas`);

ALTER TABLE `daftartugas`
  MODIFY `id_tugas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
