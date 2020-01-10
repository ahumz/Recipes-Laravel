-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2020 pada 17.50
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrecipes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_08_040040_create_recipes_table', 1),
(4, '2020_01_09_030346_create_templates_table', 1),
(5, '2020_01_09_033717_create_logos_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `image`, `time`, `category`, `rating`, `created_at`, `updated_at`) VALUES
(3, 'Beef Yakiniku', 'Bahan Bahan\r\n150 gr Daging sandung lamur, iris tipis\r\n¼ bks  Masako® Rasa Sapi 10 gr\r\n1 sdm  Gula pasir\r\n¼ sdt Merica\r\n50 ml  Air\r\n1 sdt  Minyak wijen\r\n2 sdm Minyak goreng \r\n\r\n1. Buat saus : siapkan wadah, masukkan gula pasir, merica, air, dan minyak wijen.\r\n2. Tambahkan Masako® Rasa Sapi, aduk rata.\r\n3. Celupkan irisan daging kedalam saus.\r\n4. Panaskan sedikit minyak di atas wajan anti lengket, panggang daging hingga matang. Angkat dan sajikan.', 'image_post/O7Q7zq9FUeGTNuUuQjNLLzxHt0WQHI7xVdAtfZxq.jpeg', '30 Menit', 'Appetizer', '4', '2020-01-08 04:20:18', '2020-01-08 07:27:55'),
(4, 'Zucchini Stuffed Chi', 'Bahan Bahan\r\n- 2 bh zucchini\r\n- 250 gr daging ayam cincang\r\n- 4 siung bawang putih (cincang halus)\r\n- 50 gr paprika merah (potong dadu)\r\n- 50 gr paprika hijau (potong dadu)\r\n- 100 gr keju cheddar (potong dadu)\r\n- 1 sdt oregano\r\n- 1 sdt Masako® Rasa Ayam 11 gr\r\n- 2 sdm minyak zaitun\r\n- Garam dan lada secukupnya \r\n\r\n\r\nLangkah :\r\n1. Panaskan oven 180o C\r\n2. Belah zucchini jadi 2 bagian, lalu korek bijinya. Sisihkan.\r\n3. Panaskan minyak zaitun, tumis bawang putih, lalu tambahkan daging ayam cincang, paprika merah dan hijau sampai agak layu.\r\n4. Bumbui dengan Masako® Rasa Ayam, oregano, garam dan lada secukupnya. Matikan api.\r\n5. Tambahkan keju yang dipotong dadu.\r\n6. Isikan campuran tersebut ke dalam zucchini\r\n7. Panggang selama 20 menit.\r\n8. Angkat dan sajikan', 'image_post/33yproI9CwEWALgZ7PQEe7TjuollppJkhp8JVOCc.jpeg', '30 Menit', 'Appetizer', '4', '2020-01-08 04:21:57', '2020-01-08 07:28:03'),
(5, 'Chicken Egg Roll', 'Bahan Bahan\r\n120 gr Daging ayam\r\n25 gr  Wortel parut\r\n50 gr Tahu \r\n2 sdm  Tapioka\r\n1 sdt  AJI-NO-MOTO®\r\n1 sdm  Gula pasir\r\n½ sdt  Garam\r\n2 btr  Telur dadar\r\n500 ml  Minyak goreng \r\n\r\nLangkah :\r\n1. Haluskan daging ayam, tahu, tepung tapioka, telur, AJI‑NO‑MOTO®, garam, dan gula hingga lembut. Masukkan ke dalam wadah, lalu campurkan dengan wortel parut, aduk rata.\r\n2. Siapkan telur dadar, tuang bahan isian di atas telur dadar, ratakan lalu gulung dan lipat kedua ujungnya.\r\n3. Kukus egg roll hingga matang. Angkat dan potong-potong.\r\n4. Panasakan minyak goreng,. Goreng egg roll hingga berwarna kuning keemasan. Angkat dan sajikan.', 'image_post/r2hdsobFZKUJL3W5fSBYtPNn9AQFldc24bRrFno7.jpeg', '60 Menit', 'Appetizer', '4', '2020-01-08 04:24:18', '2020-01-08 07:28:10'),
(9, 'Egg Manchurian', '2 onion\r\n1/2 cup corn flour\r\nrefined oil as required\r\n1/2 tablespoon garlic paste\r\n2 green chilli\r\n1/2 tablespoon ginger paste\r\n1/2 cup rice flour\r\nsalt as required\r\n4 boiled egg\r\n1 spring onions\r\n1/2 teaspoon soy sauce\r\n4 teaspoon red chilli powder\r\n3 coriander leaves\r\n\r\nStep :\r\n1. To prepare this tasty appetizer, first wash and slice onions neatly using a chopping board. Also, wash and finely chop the green chilles and spring onions.\r\n2. Then, take a medium sized bowl and add rice flour along with most of corn flour in it. Also, add salt and water as required to make a batter. Then, drop eggs in the bowl gently to coat them with the prepared batter.\r\n3. Next, take a medium sized deep bottomed pan and place it on medium flame. Then, pour some and oil in it. Once the oil has heated, pick 1 egg from the bowl and place it in the pan. Fry it until light brown. Similarly, do the same with remaining eggs. Transfer to an absorbent paper after frying and keep aside for a while.\r\n4. Now, in the remaining oil of the same pan, add garlic paste, ginger paste, red chilli powder and saute it on low flame for few minutes. Then, add little amount of soy sauce in it. Also, add salt as required. Then, add spring onions along with remaining corn flour and saute well. After that, add little amount of water and mix properly to form a rich gravy.\r\n5. Lastly, transfer the fried eggs(step 3) in the prepared gravy(step 4) and stir gently. Then, cover the pan with a lid and cook for a few minutes. Once cooked, transfer it to a serving dish and garnish with coriander leaves. Serve hot.', 'image_post/C1EgnnTGkadZnQgtQEJCWWcdMXcJd5SXYn9LSuOB.jpeg', '35 menit', 'Appetizer', '4', '2020-01-08 08:20:56', '2020-01-08 08:20:56'),
(10, 'Pure Vegetable Bowl', '1 head cauliflower, cut into bite size pieces\r\n1 head broccoli, cut into bite size pieces\r\n3 medium carrots, cut into coins\r\n1 cup brown rice, I nearly always use quick-cook brown rice\r\n2 cups cooked chickpeas, or 1 can, rinsed and drained\r\n2 tbsp sesame seeds\r\n2 tsp extra virgin olive oil\r\nsalt/pepper\r\n\r\nStep :\r\n1. Preheat oven to 400 degrees F.\r\n2. Cook the rice according to package directions. \r\n3. Spread cauliflower and broccoli on one baking sheet. Spread chickpeas and carrots on another baking sheet. Drizzle 1 tsp oil over each baking sheet and give veggies a toss. Sprinkle with salt and pepper.\r\n4. Roast for 20-30 minutes, turning the pans and giving them a shake every ten minutes. Cauliflower and broccoli takes about 30 minutes, carrots and chickpeas take about 20, so start the broccoli/cauliflower first and put the chickpeas/carrots in after the first 10 minutes. (Every oven is different, so keep an eye on everything to make sure you don\'t burn them.)\r\n5. Combine all dressing ingredients in a small bowl  or cup and whisk until smooth. Add more water, as needed, to thin. Set aside.\r\n6. When veggies and chickpeas are done, make your bowls! A little rice, broccoli, cauliflower, carrots, chickpeas, sesame seeds and dressing in each individual bowl.', 'image_post/7HALvvVp8wEwjP8HscBmrV3yWySZjA5vrB2jqkyK.jpeg', '45 minutes', 'Appetizer', '4', '2020-01-08 09:46:03', '2020-01-08 09:46:03'),
(11, 'Egg Masala Ramen', '1 carton (32 oz) Progresso™ unsalted chicken broth\r\n1 package (3 oz) chicken-flavor ramen noodle soup mix\r\n4 green onions, sliced on the bias (1/2 cup), greens and whites separated\r\n1 teaspoon soy sauce\r\n1 cup chopped deli rotisserie chicken\r\n2 eggs, beaten\r\nChili garlic sauce, if desired \r\n\r\nStep :\r\n\r\n1. In 4-quart saucepan, heat broth, ramen noodles and flavor packet, green onion whites and soy sauce to boiling over high heat. Boil 2 to 3 minutes or until noodles soften. Stir in chicken; slowly stir in eggs, and cook 30 to 60 seconds or until eggs are cooked through.\r\n2. Divide mixture between 2 bowls. Top with green onion greens and chili garlic sauce.', 'image_post/oG1u21UvFaOrgMDETVs5mC7AYvt1xIrdBXHbQvOD.jpeg', '20 minutes', 'Appetizer', '4', '2020-01-08 09:50:25', '2020-01-08 09:50:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `warnaheader` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarhover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlight` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
