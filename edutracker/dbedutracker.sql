SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `daftartugas` (
  `id_tugas` int(15) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `deadline` date NOT NULL,
  `jenis` enum('Tugas Harian','Quis','Ujian','Proyek') NOT NULL,
  `status` enum('Selesai','Belum Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `daftartugas` (`id_tugas`, `mata_kuliah`, `deskripsi`, `deadline`, `jenis`, `status`) VALUES
(1, 'Pengembagan web', 'Membuat CRUD', '2025-03-11', 'Proyek', 'Belum Selesai'),
(4, 'Rekayasa Bisnis', 'Membuat BPMN', '2025-03-12', 'Proyek', 'Belum Selesai'),
(5, 'Stastistika Industri', 'Distribusi Sampel', '2025-03-14', 'Quiz', 'Belum Selesai'),
(6, 'Manajemen SDM', 'Assigment 1', '2025-03-05', 'Tugas Harian', 'Selesai'),
(7, 'Pengujian Sistem', 'Blackbox Testing', '2025-03-06', 'Tugas Harian', 'Selesai');

ALTER TABLE `daftartugas`
  ADD PRIMARY KEY (`id_tugas`);

ALTER TABLE `daftartugas`
  MODIFY `id_tugas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;