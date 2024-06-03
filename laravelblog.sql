-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2024 pada 01.48
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelblog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_26_204740_create_posts_table', 2),
(5, '2024_05_27_023413_create_projects_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `thumbnail`, `body`, `created_at`, `updated_at`) VALUES
(4, 1, 'adsdad', 'adad', 'dsadasd', '# Markdown syntax guide\r\n\r\n## Headers\r\n\r\n# This is a Heading h1\r\n## This is a Heading h2\r\n###### This is a Heading h6\r\n\r\n## Emphasis\r\n\r\n*This text will be italic*  \r\n_This will also be italic_\r\n\r\n### Unordered\r\n\r\n* Item 1\r\n* Item 2\r\n* Item 2a\r\n* Item 2b\r\n\r\n## Images\r\n\r\n![This is an alt text.](https://markdownlivepreview.com/image/sample.webp \"This is a sample image.\")\r\n\r\n## Links\r\n\r\nYou may be using [Markdown Live Preview](https://markdownlivepreview.com/).', '2024-05-26 17:23:12', '2024-05-26 17:23:12'),
(5, 1, 'Tailwind CSS is so intuitive that if you know CSS, you know Tailwind', 'taiwldjdkld', 'https://miro.medium.com/v2/resize:fit:1400/1*__f27S-qQF2CAASt5bOwqg.png', 'Styling CSS is fun and all but the job quickly becomes very tedious and annoying to maintain once the project grows bigger and bigger. At least that\'s what I experience building some websites using vanilla css. The problem with the traditional approach of CSS is sometimes the HTML and the CSS are too separated that it feels like a jenga game whenever we move, edit, or delete some line of CSS because how it might break your style somewhere else. In short, it\'s a mess.\r\n\r\nThe reason above is what makes me interested in dipping my toes into the world of Tailwind CSS, my intention at first is just to try thing out but once I finished my first mini project with it, I can\'t see myself using vanilla CSS again, especially on a component based project like React JS or laravel blade templating. The most surprising thing that I learned when trying out Tailwind is how well thought out everything is, everything is so intuitive that it', '2024-05-26 22:14:03', '2024-05-26 22:14:03'),
(6, 1, 'sad', 'sadsad', 'sd', 'dsads', '2024-05-27 06:42:57', '2024-05-27 06:42:57'),
(7, 1, 'ad', 'sdd', 'sdsad', 'dsaddsd', '2024-05-27 06:45:59', '2024-05-27 06:45:59'),
(8, 1, 'The Art of Minimalist Living', 'sadsada', 'https://www.danarandco.my.id/img/bed-1.jpg', '# The Art of Minimalist Living\r\n\r\n*May 27, 2024*  \r\n*Author: Jane Doe*\r\n\r\n---\r\n\r\n## Introduction\r\n\r\nIn today\'s fast-paced world, many of us are seeking ways to simplify our lives. The concept of minimalist living has gained popularity as a solution to the overwhelming clutter and constant busyness. But what exactly is minimalist living, and how can it benefit you? Let\'s explore the art of minimalist living and how to incorporate it into your daily routine.\r\n\r\n## What is Minimalist Living?\r\n\r\nMinimalist living is a lifestyle that emphasizes the importance of simplicity and the intentional reduction of material possessions. The goal is to focus on what truly matters by eliminating the excess and decluttering both your physical and mental space.\r\n\r\n## Benefits of Minimalist Living\r\n\r\n1. **Reduced Stress**: Clutter can cause significant stress and anxiety. By decluttering your space, you create a more peaceful and serene environment.\r\n2. **More Time and Freedom**: Owning fewer items means less time spent on cleaning and maintenance, giving you more time to pursue your passions.\r\n3. **Financial Savings**: Buying less means spending less. Minimalism encourages mindful spending and helps you save money.\r\n4. **Environmental Impact**: Fewer possessions lead to less waste and a lower carbon footprint, contributing to a healthier planet.\r\n\r\n## Steps to Embrace Minimalist Living\r\n\r\n### 1. Declutter Your Space\r\n\r\nStart with one area of your home, such as your closet or kitchen. Sort through your items and ask yourself if each one adds value to your life. Donate, recycle, or sell anything that no longer serves a purpose.\r\n\r\n### 2. Simplify Your Wardrobe\r\n\r\nAdopt a capsule wardrobe, consisting of a limited number of versatile and high-quality pieces that you love and wear often. This not only saves time deciding what to wear but also reduces the need for constant shopping.\r\n\r\n### 3. Practice Mindful Consumption\r\n\r\nBefore making a purchase, consider if the item is necessary and if it will genuinely enhance your life. This helps prevent impulse buying and encourages more thoughtful consumption.\r\n\r\n### 4. Focus on Experiences, Not Things\r\n\r\nInvest in experiences rather than material goods. Memories from travel, hobbies, and spending time with loved ones are far more valuable and fulfilling than accumulating possessions.\r\n\r\n### 5. Limit Digital Clutter\r\n\r\nOrganize your digital life by decluttering your email inbox, unsubscribing from unnecessary newsletters, and deleting unused apps. Create a simple and efficient digital workspace.\r\n\r\n## Conclusion\r\n\r\nMinimalist living is not about deprivation; it\'s about making room for what truly matters. By embracing minimalism, you can create a more meaningful, intentional, and fulfilling life. Start small, take it one step at a time, and discover the joy of living with less.\r\n\r\n---\r\n\r\n*What are your thoughts on minimalist living? Share your experiences and tips in the comments below!*', '2024-05-27 06:48:47', '2024-05-27 06:48:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail1` varchar(255) NOT NULL,
  `thumbnail2` varchar(255) NOT NULL,
  `thumbnail3` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `slug`, `thumbnail1`, `thumbnail2`, `thumbnail3`, `body`, `created_at`, `updated_at`) VALUES
(2, 'dsadad', 'sadsadsad', 'https://1.bp.blogspot.com/-Ao--J8BZI70/ZlAm-b6CONI/AAAAAAABcnI/RDAJ_GFrbaQn1G7xF257IMO4TTbymIzDACNcBGAsYHQ/s460/crown-wars-the-black-prince-pc-cover.jpg', 'https://1.bp.blogspot.com/-Ao--J8BZI70/ZlAm-b6CONI/AAAAAAABcnI/RDAJ_GFrbaQn1G7xF257IMO4TTbymIzDACNcBGAsYHQ/s460/crown-wars-the-black-prince-pc-cover.jpg', 'https://1.bp.blogspot.com/-Ao--J8BZI70/ZlAm-b6CONI/AAAAAAABcnI/RDAJ_GFrbaQn1G7xF257IMO4TTbymIzDACNcBGAsYHQ/s460/crown-wars-the-black-prince-pc-cover.jpg', 'dsaddsadsa', '2024-05-26 21:03:35', '2024-05-26 21:03:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jJEC3FCnr09qBDeZ1bEoOwY6qlbUn1JJI59TyhdU', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRWFVUUpSWGxrOXJWVThaMVZkM2RtTVMyUDNIbms0ZGRGcERZZ3F3bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1716825971);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Danar Septiyanto', 'septiyandanar@gmail.com', NULL, '$2y$12$anGUtBkzxF6hPcJA7ShMuu0rVmLKPswtDpjjOZSCxwwIpqCrlH8vu', NULL, '2024-05-26 13:05:35', '2024-05-26 13:05:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
