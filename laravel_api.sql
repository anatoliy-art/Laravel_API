-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 10 2026 г., 18:44
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel_api`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` bigint UNSIGNED NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `year` year NOT NULL,
  `engine` int NOT NULL DEFAULT '0',
  `mileage` int NOT NULL DEFAULT '0',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` json DEFAULT NULL,
  `price` int NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `brand_id`, `user_id`, `title`, `slug`, `description`, `year`, `engine`, `mileage`, `photo`, `gallery`, `price`, `phone`, `visible`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Mersedes Ken Prohaska', 'ken-prohaska', 'Dolor natus blanditiis officia minima id sint porro. Doloribus provident id iure vero repellat est. Reprehenderit et inventore magnam consequatur reiciendis velit.\n\nEa non laborum omnis illo recusandae non quo. Sed sint aut quidem ipsa facere aperiam officiis. Dolores non corporis porro sed.\n\nAssumenda dolorum aut maxime repellat quae perferendis. Eveniet incidunt eius iure animi eius quos porro. Et nobis assumenda rerum recusandae.', 2002, 50, 89575, NULL, NULL, 740843, '+1.986.974.9948', '1', '2011-12-06 05:11:33', '2026-02-06 02:29:58'),
(2, 2, 4, 'BMW Anastacio Satterfield', 'anastacio-satterfield', 'Qui deserunt nemo quisquam quidem ea voluptate. Fugit nobis est aliquid dolor non asperiores.\n\nSunt perspiciatis omnis sit blanditiis illum. Velit aut quasi aut voluptatem cupiditate aliquid ipsum. Facere occaecati ex laboriosam sit ducimus iure laborum. Natus ad ullam sunt est accusantium. Hic accusamus iusto quia ipsam maiores dolorum quis velit.\n\nSit ducimus est culpa quibusdam ab expedita ut. Laboriosam placeat a dolorem earum adipisci voluptas excepturi totam. Enim officiis quia quo tempora temporibus molestiae accusamus. Aut vero velit ea sequi.', 2001, 117, 325026, NULL, NULL, 968660, '+1 (254) 403-4046', '1', '2021-11-19 18:01:16', '1997-12-05 18:17:17'),
(3, 2, 5, 'BMW Rashad Hoppe', 'rashad-hoppe', 'Ea ab consequatur dicta nihil. Aut libero repellat non dolore voluptate nobis. Fugit amet culpa expedita aut enim reprehenderit voluptatum.\r\n\r\nIllo aut culpa autem aperiam hic quia est quia. Placeat itaque non ut aut. Facilis debitis commodi atque labore ut sequi iste.\r\n\r\nQuo labore numquam in exercitationem neque quaerat qui. Veritatis aliquam velit doloremque consequatur reprehenderit et sint. Quaerat perferendis est necessitatibus voluptatem laudantium sed. Et animi sint facere dolores totam qui hic voluptas.', 2024, 266, 38137, 'image/2026-02-10/vP7FzswFd0jfk3g3Ejx0PDcU6TZv4R6xklh0pOvt.jpg', '[\"image/2026-02-10/jtMgioPH4JZbBorDe7zt2K5eZUOWLfKjr0rotWrZ.jpg\", \"image/2026-02-10/hdOTVoIN5VKEwxDOWOZCUTCQIl0t4zImgpNUkWdT.jpg\"]', 482232, '283.705.7837', '1', '2012-04-04 03:20:36', '2026-02-10 00:15:24'),
(4, 1, 5, 'Mersedes Mr. Alan Upton IV', 'mr-alan-upton-iv', 'Consequatur reiciendis qui possimus aliquam modi et qui. Animi culpa ad alias molestiae rerum. Dolor adipisci perferendis consequatur ea voluptate amet sunt. Consequatur laborum quis fuga cumque praesentium officiis exercitationem.\n\nEt quo et consequuntur voluptate. Totam earum voluptas officia molestiae consectetur. Eligendi autem omnis ex voluptas error minus.\n\nVoluptatum nemo id culpa officiis rem. Enim non ipsum id beatae est ad iste eaque. Et similique neque quia nulla eaque error.', 2011, 40, 657053, NULL, NULL, 848162, '(719) 641-9489', '1', '2012-08-01 21:32:43', '1980-03-14 22:49:06'),
(5, 2, 1, 'BMW Dr. Chanel Beatty', 'dr-chanel-beatty', 'Accusantium itaque molestiae dolorem atque facilis sed. Autem aut consequuntur ut explicabo unde dolor deleniti. Laborum vitae itaque quo dignissimos id placeat et.\n\nVoluptatem pariatur quaerat sed quasi dolores dolor deleniti. Deserunt sint quisquam maxime velit.\n\nVitae quasi soluta earum omnis. Perferendis laudantium est molestias ut blanditiis porro architecto voluptas. Ut et reprehenderit dolores illo quia blanditiis rem. Et similique dolore nemo laborum.', 1998, 139, 711160, NULL, NULL, 803473, '(234) 797-2815', '1', '1978-11-28 08:05:13', '1989-11-08 20:21:08'),
(6, 4, 5, 'Mazda Cristal Kub', 'cristal-kub', 'Nihil fuga ut sapiente et vero impedit similique enim. Incidunt aliquid saepe quia odit voluptatibus.\n\nMolestiae est nostrum voluptas et hic beatae non. Exercitationem omnis non enim ipsa sapiente. Totam expedita ut quo provident explicabo officia. Est dolorem voluptatem esse perferendis quos autem facere.\n\nHic et enim in rerum expedita voluptatum. Quibusdam error quam eligendi magni nostrum.', 2003, 140, 281351, NULL, NULL, 400241, '+1-364-202-4418', '1', '2013-03-14 07:54:58', '1973-10-20 06:01:43'),
(7, 3, 4, 'Lada Kaylin Douglas', 'kaylin-douglas', 'Ipsam porro fugiat eos. Et exercitationem perspiciatis et alias nisi iste. Et cumque est sed aut at iure. Facere sunt earum ad labore exercitationem nisi harum.\n\nIncidunt omnis natus cupiditate iure sapiente illum sequi. Ab molestias ea ut quis reprehenderit ipsam maxime. Impedit sit ut rerum quaerat.\n\nTenetur dolores aut ut. Quo asperiores voluptas non et ullam ad. Et sint dolor corporis.', 2006, 80, 998904, NULL, NULL, 880161, '240.276.2668', '1', '1977-02-25 02:08:59', '1990-12-07 17:58:57'),
(8, 1, 1, 'Mersedes Hunter Halvorson', 'hunter-halvorson', 'Voluptas corrupti velit quaerat non eligendi praesentium et. Aut molestias sit est nihil culpa. Eaque et fugit sint eaque ullam.\n\nMolestiae ut vitae expedita in molestiae. Expedita quia quia cumque quidem veritatis corrupti quis. Dolores iure tenetur omnis quo et. Asperiores quasi tenetur laudantium adipisci consequatur.\n\nOmnis unde eum tempore unde. Facere amet vitae eos ducimus. Sed eum velit occaecati inventore. Nihil possimus velit ipsum quia qui. Ipsum vel sed impedit architecto ut iusto sapiente.', 2019, 193, 64304, NULL, NULL, 437363, '+1.551.545.8428', '1', '1988-01-02 12:14:09', '2023-12-12 04:36:21'),
(9, 2, 5, 'BMW Kylie Goodwin', 'kylie-goodwin', 'Facere provident earum nostrum maiores est voluptas quos explicabo. Nihil illo dolores similique voluptate ex temporibus. Iure corporis deserunt deserunt et. Iure numquam natus sunt fugiat voluptas incidunt quo.\n\nFuga voluptates totam sunt quos quia quia. Ea facilis et quas alias reiciendis. Quis est nihil et quo laudantium quis aut.\n\nEt ipsum laboriosam sit non suscipit sunt repellendus ut. Veniam est aut ut libero. Aliquid aut repellendus ad similique vel.', 2006, 154, 526318, NULL, NULL, 164860, '(279) 407-4643', '1', '1992-10-29 17:03:56', '2003-01-08 16:23:31'),
(10, 5, 4, 'Toyota Dr. Verdie Sporer PhD', 'dr-verdie-sporer-phd', 'Quia voluptatum omnis minus qui officia quibusdam repellendus voluptatum. Doloremque et quidem sint ullam quia eveniet. Eum fuga voluptas eveniet ut eos a.\n\nAb non a impedit eaque. Eum debitis repudiandae at atque sapiente quidem. Ut omnis libero voluptatibus a.\n\nVoluptas nesciunt sit dolore cumque. Laudantium temporibus aut ipsa sed.', 2010, 241, 344296, NULL, NULL, 175861, '(406) 864-6031', '1', '2016-04-11 02:22:41', '1995-03-19 12:29:45'),
(11, 1, 5, 'Mersedes Miss Vena Rice', 'miss-vena-rice', 'Et minima qui quisquam aut. Asperiores alias eaque quia. Et debitis illo quod fuga in iste alias. Sint quidem ullam repellendus.\n\nMaiores vel ea aut. Maiores numquam eveniet corporis sequi hic sit vel.\n\nDoloribus nemo aliquam aperiam rerum expedita aliquam. Reprehenderit deleniti deleniti consequuntur atque suscipit eos sed. Qui incidunt labore neque fuga.', 2005, 350, 799499, NULL, NULL, 183734, '+1-810-682-9586', '1', '1985-01-19 16:12:54', '2005-05-09 23:49:41'),
(12, 5, 4, 'Toyota Karine Weber', 'karine-weber', 'Fugit veritatis omnis iure qui minima voluptatem qui. Est dolorum enim magni omnis in dolores. Odio consequatur molestiae amet modi qui delectus quae et. At nihil non laudantium laborum laborum architecto.\n\nIpsam quibusdam dicta odit corporis beatae hic totam. Soluta perspiciatis omnis dolores nisi. Aut earum praesentium dolorem voluptas et voluptatem nostrum.\n\nMolestias laboriosam vel et eveniet voluptas repellat. Ut consequatur dolorem sunt qui.', 2006, 112, 78706, NULL, NULL, 453613, '+18479639800', '1', '1987-09-10 01:06:42', '1972-04-21 22:50:08'),
(13, 3, 5, 'Lada Ms. Albertha Schoen', 'ms-albertha-schoen', 'Tempora mollitia tempore nobis tempore. Fugiat voluptatem harum totam animi delectus. Optio dolor delectus dolore omnis et quis distinctio.\n\nMagni officia eum porro non sunt. Aut molestiae a beatae et excepturi et voluptas.\n\nAd enim amet architecto debitis. Est quasi suscipit omnis consequatur. Omnis dolorem nisi magni.', 2016, 120, 151668, NULL, NULL, 751611, '(201) 944-8705', '1', '1997-06-01 06:24:40', '2020-04-29 21:52:40'),
(14, 1, 1, 'Mersedes Yazmin Jacobson', 'yazmin-jacobson', 'Excepturi eos occaecati natus tempore. Aut aliquam dolor laborum non aut architecto recusandae. Sit officia rerum similique ipsam minus. Ipsa neque delectus iure.\n\nEveniet esse sunt possimus iure est ut asperiores repudiandae. Cumque fugiat eveniet nihil consequuntur dolorem. Sit nesciunt corporis et omnis. Eos rerum quia ut dignissimos non distinctio dolor.\n\nReiciendis dolorum est magni est perspiciatis voluptate provident temporibus. Nihil magni quis unde rerum illo voluptatum soluta. Id dolores earum nobis.', 2019, 145, 205228, NULL, NULL, 160921, '+15394743264', '1', '2002-02-22 11:56:48', '1977-02-08 12:14:02'),
(15, 2, 1, 'BMW Loyal Corkery', 'loyal-corkery', 'Quo ut debitis voluptas maiores eligendi inventore quibusdam. Dolorem culpa distinctio consequatur illo dolor maiores voluptates quibusdam. Atque corporis accusamus ut magnam.\n\nQuisquam voluptatem dolore quia et ex. Enim odio exercitationem nesciunt iste.\n\nMaxime earum ut ducimus et quaerat sunt sapiente. Incidunt nobis accusantium voluptatem occaecati. Distinctio enim illo et perferendis aliquam.', 2007, 233, 673798, NULL, NULL, 411702, '+1-225-649-4630', '1', '1974-09-01 07:19:25', '2005-11-25 12:06:26'),
(16, 6, 5, 'Ferrary Dr. Katrine Ledner', 'dr-katrine-ledner', 'Vero hic rerum ratione. Quibusdam porro asperiores beatae optio at et. Sit et sed animi accusamus sunt. Est voluptatibus dolore maxime ut aspernatur ipsam.\n\nEt aspernatur distinctio dolor aperiam molestiae. Est harum occaecati et qui quas adipisci. Quia dolores quisquam alias ea odit voluptatum. Incidunt odit consequatur quia blanditiis blanditiis rerum dolore.\n\nMaiores dignissimos voluptate temporibus est aut facere unde. Tempora rem est voluptatibus sed quia sit corrupti quo. Minus magni sit et est reprehenderit vel hic aut.', 2026, 90, 102794, NULL, NULL, 977070, '+1-445-880-3992', '1', '1989-03-02 16:56:53', '1975-05-17 19:31:32'),
(17, 1, 5, 'Mersedes Moses Predovic', 'moses-predovic', 'Dolorem fugiat libero voluptatem beatae quam hic itaque. Eveniet vitae nemo commodi aut aut officia. Et quia libero quia omnis sit.\n\nVelit magni tempora est temporibus voluptatem. Non rerum nulla ratione voluptas cumque. Minus qui similique possimus.\n\nOfficia eveniet amet magni cupiditate quis nisi. Nulla itaque cum ut minus ut. Ut sed autem mollitia repudiandae natus aut esse. Quae eveniet et cupiditate odio repudiandae ducimus placeat.', 1997, 107, 269199, NULL, NULL, 445365, '+1-920-936-7310', '1', '1985-01-27 09:47:50', '2001-04-15 01:54:48'),
(18, 4, 4, 'Mazda Gregory Lindgren', 'gregory-lindgren', 'Officia in provident doloremque molestias praesentium. Et deserunt quam possimus vel et. Tempore aut eveniet voluptas illo odio recusandae.\n\nQuidem corrupti exercitationem vel vel tempora sint. Qui sed magni amet. Sed reprehenderit pariatur dolorem vero expedita enim. Perspiciatis accusantium corporis ex dolore omnis aut.\n\nDolorum dolor nesciunt minima repudiandae autem aut. Quas laboriosam qui atque in autem est. Ut earum omnis laboriosam omnis dolor aliquam. Id est architecto voluptas non iste qui quia ratione.', 2012, 288, 308029, NULL, NULL, 912715, '+1 (551) 718-9018', '1', '2016-09-08 18:13:44', '2006-08-26 01:23:38'),
(19, 7, 1, 'Lexsus Sport Vladimir Gulgowski', 'vladimir-gulgowski', 'Repellendus omnis eum ad cumque consequatur sunt. Id velit eligendi tempore. Rerum eum qui consequatur est. Dolores fuga sed ut est asperiores nihil alias.\n\nNon harum sequi nam omnis commodi non. Explicabo voluptatum doloremque voluptatem et. Et qui est culpa impedit iusto excepturi modi.\n\nAut nobis id veritatis laborum facere atque nulla. Doloribus cupiditate voluptates aperiam amet quos itaque. Dolore fugit aliquam veritatis voluptatem. Nihil aut ea quos illo. Sapiente numquam cum quas quia et non aut.', 2007, 191, 642552, NULL, NULL, 569468, '+1-432-279-1333', '1', '2023-04-23 12:45:29', '1985-04-27 08:41:09'),
(20, 1, 4, 'Mersedes Aron Corkery', 'aron-corkery', 'Quae exercitationem sint qui officia sint quos dolores. Atque architecto corrupti animi recusandae quia. Temporibus dolor non non atque perspiciatis corrupti. Ut voluptas in optio quisquam dolor velit est.\n\nConsectetur odit repellendus sapiente repudiandae ea est. Hic illo dolor quo vero perferendis quis quo. Qui accusantium quidem ea autem ea magni. Sed ducimus ut iure facilis maiores et iure.\n\nExercitationem sequi voluptatem modi officia enim quia omnis. Consequuntur inventore suscipit ratione harum. A laboriosam nisi et ipsum officiis repellendus praesentium.', 2016, 310, 596274, NULL, NULL, 294243, '+1-949-326-9623', '1', '2014-12-11 08:29:43', '2022-02-14 18:47:48'),
(23, 1, 4, 'dd', 'dd', 'dd', 2024, 200, 0, NULL, NULL, 100000, '+1230456', '1', '2026-02-06 03:45:11', '2026-02-06 03:45:11'),
(24, 1, 4, 'dd', 'dd-1', 'dd', 2025, 200, 0, NULL, NULL, 100000, '+1230456', '1', '2026-02-06 03:46:29', '2026-02-06 03:46:29'),
(25, 1, 4, 'xx', 'xx', 'xx', 2027, 200, 100000, NULL, NULL, 100000, '+1230456', '1', '2026-02-06 03:47:16', '2026-02-06 03:47:16'),
(26, 1, 4, 'чч', 'cc', 'чч', 2020, 200, 100000, NULL, NULL, 100000, '+1230456', '1', '2026-02-06 03:51:44', '2026-02-06 03:51:44'),
(27, 2, 5, 'BMW Rashad Hoppe', 'bmw-rashad-hoppe', 'Ea ab consequatur dicta nihil. Aut libero repellat non dolore voluptate nobis. Fugit amet culpa expedita aut enim reprehenderit voluptatum.\r\n\r\nIllo aut culpa autem aperiam hic quia est quia. Placeat itaque non ut aut. Facilis debitis commodi atque labore ut sequi iste.\r\n\r\nQuo labore numquam in exercitationem neque quaerat qui. Veritatis aliquam velit doloremque consequatur reprehenderit et sint. Quaerat perferendis est necessitatibus voluptatem laudantium sed. Et animi sint facere dolores totam qui hic voluptas.', 1996, 266, 38137, 'image/2026-02-10/1yVkohHsYRx5gLb22YjELUvR8n87wJJ3B5GaChnL.jpg', '[\"image/2026-02-10/DwGW1UFfecPElE6Au2W4995WajTy1M2Mcz6dEdZV.jpg\", \"image/2026-02-10/vTmRUjrxDOttZJZpbcD4LOxAxcWXjD75NaE8m7rZ.jpg\", \"image/2026-02-10/DNcmp0ZOFfM9bMUlQfZB5UZN6WyZ88ikb0JWbc7m.jpg\"]', 482232, '283.705.7837', '1', '2026-02-10 00:00:54', '2026-02-10 00:00:54');

-- --------------------------------------------------------

--
-- Структура таблицы `car_brands`
--

CREATE TABLE `car_brands` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `car_brands`
--

INSERT INTO `car_brands` (`id`, `title`, `slug`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Mersedes', 'mersedes', 'Mersedes', 'image/2026-02-06/fy94OEW3RldMlEXKF8cDATJW4ekfvyMoIyNCCHQw.jpg', '2026-02-06 00:51:02', '2026-02-06 01:52:35'),
(2, 'BMW', 'bmw', 'Desc BMW', 'image/2026-02-06/rplmeIgrkcHMRpecX3X5DruQK5ajMR11pYXMU7yZ.jpg', '2026-02-06 01:19:07', '2026-02-06 01:19:07'),
(3, 'Lada', 'lada', 'Desc Lada', 'image/2026-02-06/ue3251KEUQshih7yKPAUgOFD4XRCBsWogqanUNsh.jpg', '2026-02-06 01:19:41', '2026-02-06 01:19:41'),
(4, 'Mazda', 'mazda', NULL, 'image/2026-02-06/wj2WhjHflmR40cCIMZ8UuvL2eRGH84d5ujdHkBuD.jpg', '2026-02-06 01:19:58', '2026-02-06 01:19:58'),
(5, 'Toyota', 'toyota', NULL, 'image/2026-02-06/bk8QNG33MO6bVEPyPkUM48c3JsyxZS801lK1XorG.jpg', '2026-02-06 01:20:16', '2026-02-06 01:20:16'),
(6, 'Ferrary', 'ferrary', 'Desc Ferrary', 'image/2026-02-06/OdVrHnMvVlQwDJNjdXeE2j2nx5ObLgFbwY4TvHZz.jpg', '2026-02-06 01:20:52', '2026-02-06 01:20:52'),
(7, 'Lexsus Sport', 'lexsus', 'Lexsus', 'image/2026-02-06/7Gte9hwzhHgy60HqBDgwBj0rqWiy8PrBTqnZTQl2.jpg', '2026-02-06 01:21:28', '2026-02-06 01:52:17');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Дом', 'house', 'Desc house', '2026-01-28 09:28:33', '2026-01-28 09:28:33'),
(2, 'Квартира', 'flat', 'Desc Квартира', '2026-01-28 09:28:33', '2026-01-28 09:28:33'),
(3, 'Комната', 'room', 'Desc Комната', '2026-01-28 09:28:33', '2026-01-28 09:28:33');

-- --------------------------------------------------------

--
-- Структура таблицы `estates`
--

CREATE TABLE `estates` (
  `id` bigint UNSIGNED NOT NULL,
  `floor_id` bigint UNSIGNED NOT NULL,
  `room_id` bigint UNSIGNED NOT NULL,
  `material_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` json DEFAULT NULL,
  `price` int UNSIGNED NOT NULL DEFAULT '0',
  `visible` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `estates`
--

INSERT INTO `estates` (`id`, `floor_id`, `room_id`, `material_id`, `category_id`, `user_id`, `title`, `slug`, `description`, `photo`, `gallery`, `price`, `visible`, `phone`, `created_at`, `updated_at`) VALUES
(1, 2, 7, 2, 2, 5, 'Квартира 1 Quis quas qui illo sed vel omnis.!!!', 'spzk', 'Et ut aut et aut sed sed aut. Consectetur corporis omnis error ut minima illum est. Consequatur accusamus quia dolor expedita doloribus commodi repellat in.\r\n\r\nEt quam quae sit. Laboriosam ad delectus architecto minima sed ut quo. Sit id voluptas officia. Perferendis unde voluptates in.\r\n\r\nVel praesentium ut eligendi non labore molestias. Velit non in laboriosam sequi consequatur omnis iusto. Rem commodi eveniet reprehenderit occaecati quas quia id.', 'image/2026-02-04/GgdgN70D2ndD0LfVo5t3925Hy6dJ2DFgFa6j6tmA.jpg', NULL, 2105000, '1', '+01 1234567899', '2022-09-18 04:20:34', '2026-02-04 21:27:21'),
(2, 5, 4, 1, 2, 1, 'Квартира 1 Mollitia vero eos numquam unde eius necessitatibus odio.', 'ydtb', 'Et ut aut et aut sed sed aut. Consectetur corporis omnis error ut minima illum est. Consequatur accusamus quia dolor expedita doloribus commodi repellat in.\r\n\r\nEt quam quae sit. Laboriosam ad delectus architecto minima sed ut quo. Sit id voluptas officia. Perferendis unde voluptates in.\r\n\r\nVel praesentium ut eligendi non labore molestias. Velit non in laboriosam sequi consequatur omnis iusto. Rem commodi eveniet reprehenderit occaecati quas quia id.', '', NULL, 3100000, '1', '+01 1234567891', '2025-01-31 10:32:25', '2026-02-04 20:14:41'),
(3, 2, 6, 1, 3, 1, 'Квартира 1 Ab distinctio quos modi rerum consequatur voluptate.', 'qwyg', 'Et ut aut et aut sed sed aut. Consectetur corporis omnis error ut minima illum est. Consequatur accusamus quia dolor expedita doloribus commodi repellat in.\r\n\r\nEt quam quae sit. Laboriosam ad delectus architecto minima sed ut quo. Sit id voluptas officia. Perferendis unde voluptates in.\r\n\r\nVel praesentium ut eligendi non labore molestias. Velit non in laboriosam sequi consequatur omnis iusto. Rem commodi eveniet reprehenderit occaecati quas quia id.', '', NULL, 1100000, '1', '+01 1234567892', '2013-10-05 09:52:53', '2012-09-15 20:57:13'),
(8, 2, 2, 3, 1, 4, 'Квартира 1 Ut vel consectetur et facilis delectus.', 'zpcm', 'Et ut aut et aut sed sed aut. Consectetur corporis omnis error ut minima illum est. Consequatur accusamus quia dolor expedita doloribus commodi repellat in.\r\n\r\nEt quam quae sit. Laboriosam ad delectus architecto minima sed ut quo. Sit id voluptas officia. Perferendis unde voluptates in.\r\n\r\nVel praesentium ut eligendi non labore molestias. Velit non in laboriosam sequi consequatur omnis iusto. Rem commodi eveniet reprehenderit occaecati quas quia id.', 'image/2026-02-04/XOXqbFvJJDPr23XU1dZ2fQdxfdaifn4L67fMePKp.jpg', '[\"image/2026-02-04/E0Z2LnkAD56pGYtbE8V8AtJUysUi81XcNgA4N1B8.jpg\", \"image/2026-02-04/cn2xHpupbXXeCHhx9eEzng1dPpTzRaE9Kn4e5iY6.jpg\", \"image/2026-02-04/cMUvugnhnN7lt6RzSx9xYhGcKwdjKKT5nvdk7oLy.jpg\", \"image/2026-02-04/HpPSfmOjA2J6mzupe5CZt3epkor9cONF4JlvGbUb.jpg\"]', 4100000, '1', '+01 1234567893', '1976-01-13 16:39:54', '2026-02-04 04:03:29'),
(9, 5, 2, 1, 3, 1, 'Omnis velit et voluptates est dolores consequatur.', 'zjez', 'Perspiciatis magnam unde iusto. Animi cumque quisquam officia eligendi et est. Illum dolorem rerum sit dignissimos quis. Iusto temporibus ut inventore eaque sunt iste eos.\n\nAutem voluptatum sint atque ut. Dolor quidem saepe et eos illum accusamus. Exercitationem ut ad id aspernatur facilis et. A ad quia aliquam et incidunt.\n\nEos tempore quaerat officia repellendus necessitatibus natus. Consequatur omnis id non beatae quae excepturi. Itaque ut quia nulla reprehenderit sunt.', '', NULL, 800000, '1', '+01 1234567894', '1977-06-17 08:35:20', '1982-05-11 09:05:44'),
(10, 3, 3, 1, 2, 1, 'Eos nesciunt facilis aut cumque iste aliquid culpa.', 'vorv', 'Qui tenetur doloremque quisquam qui eveniet deserunt. Non eveniet dolorum inventore praesentium doloremque. Aperiam vel consequatur qui. Dolorem nostrum qui veniam iusto modi nihil facilis.\n\nQuaerat a eos aut odio omnis dolorum quibusdam sit. Ipsam libero et aut. Ab officiis quae eius pariatur magni iure.\n\nVelit molestias quia harum asperiores id sit necessitatibus. Deserunt cupiditate laborum nobis in sunt. Molestiae aut magnam inventore nesciunt.', '', NULL, 700000, '1', '+01 1234567895', '2008-03-03 21:24:55', '2017-12-19 18:02:55'),
(11, 3, 6, 2, 1, 1, 'Adipisci quos aut facilis exercitationem hic.', 'qffz', 'Autem aut nihil possimus aut ad illum est autem. Odio iusto nesciunt quis maxime. Enim et cum quos odio exercitationem.\n\nDolores sint dignissimos porro iure eius et provident. Labore inventore laboriosam veniam omnis commodi. Ipsa numquam facilis quos quisquam. Est accusamus accusantium libero.\n\nAspernatur explicabo consequatur ut labore molestias nam. Quaerat id deserunt vitae non. Eius accusamus et quibusdam nam et non quaerat. Et eum delectus quisquam non.', '', NULL, 5100000, '1', '+01 1234567896', '1978-06-19 22:31:00', '1973-07-17 21:38:11'),
(12, 4, 1, 2, 2, 1, 'Reiciendis placeat saepe qui.', 'gypq', 'Doloremque magnam quos cumque pariatur. Enim odio modi est dolor fugit quo amet. Voluptates ullam amet blanditiis ut assumenda voluptates. Aut maxime vero ut eius impedit.\n\nVoluptas a saepe eum fuga fugiat sunt iste. Reprehenderit sint consequatur ipsa id. Est nam perspiciatis aut autem.\n\nReiciendis nesciunt excepturi quia voluptas inventore voluptatem dolor. Est dicta non qui eius eveniet ut qui dignissimos. Sit et saepe quis pariatur dolorum libero et veniam.', '', NULL, 1100000, '1', '+01 1234567897', '1983-07-25 01:56:17', '1996-02-25 14:08:49'),
(13, 2, 3, 2, 2, 4, 'Quasi qui dolor officiis voluptatem ipsum ratione molestiae.', 'yrwk', 'Est dolor nemo illum necessitatibus et et. Et nulla qui quibusdam rerum fugiat ut. Sed ut quo quia similique. Sed nulla aut recusandae sunt quis eum omnis dicta. Fuga nulla tenetur et officia quis.\n\nVoluptas quo omnis sint vel. Ipsum quia quis corporis ut est iste laudantium. Similique excepturi tempora error nisi doloribus error.\n\nSimilique harum animi ipsa. Veritatis qui aut voluptas aspernatur ad autem ducimus. Molestias tempora et ut voluptas est.', '', NULL, 6100000, '1', '+01 1234567898', '2017-03-15 03:09:58', '2002-01-17 05:45:05'),
(14, 2, 7, 3, 1, 1, 'Molestiae tenetur animi illum illo optio nemo animi.', 'ucdy', 'Autem error dolor ut cumque error ipsa. Excepturi qui earum quos dolores ratione. Exercitationem saepe enim libero consequatur provident et.\n\nAccusamus porro qui reprehenderit provident laudantium labore quia velit. Illo et deserunt qui corrupti. Odit nemo enim sed perspiciatis aut possimus veritatis. Enim labore corrupti sint ut fuga dolore expedita.\n\nProvident quas ratione voluptatum ratione. Aliquam inventore vel beatae voluptas reprehenderit at velit minus. Ipsa labore voluptas sint rerum. Sit dolores neque ut est distinctio omnis.', '', NULL, 2100000, '1', '+0 2100000', '2022-02-01 23:17:23', '2018-02-27 21:11:25'),
(15, 3, 4, 1, 3, 1, 'Quis vitae doloremque sed accusamus praesentium ex.', 'asea', 'Aliquid adipisci quia officia totam dicta quis dolorem dolores. Et eligendi tenetur qui provident non quos assumenda laborum. Veniam nobis et facilis est.\n\nEst voluptate enim nemo. Ut exercitationem sint cum. In quas officiis vel quaerat excepturi et facere non. Dolore facere reiciendis dolor ex sequi placeat.\n\nDucimus aliquid qui aliquid sit natus eius omnis. Vel neque in voluptatem quo omnis voluptatem.', '', NULL, 3100000, '1', '+1 2100000', '1972-06-16 17:45:13', '2011-08-14 18:30:16'),
(16, 4, 1, 2, 2, 1, 'Consequatur asperiores voluptatum voluptatem.', 'vqbb', '', '', NULL, 4100000, '1', '+2100001', '2020-06-05 01:31:39', '2001-05-01 03:16:12'),
(17, 1, 7, 2, 3, 1, 'Dolorum in cumque dolor doloremque provident dolorem voluptas.', 'kjgt', 'Magnam ab et veniam qui non minus et. Excepturi eos et quia.\n\nUt est totam aliquid molestias minus hic sint. Aut quae sed veritatis voluptatem animi. Natus repellat labore eveniet quis et.\n\nRatione veritatis fugit repudiandae non id. Ipsam autem commodi iusto sapiente dolor vel.', '', NULL, 5100000, '1', '+2100003', '2012-07-27 17:59:55', '1995-06-11 21:45:22'),
(18, 2, 2, 1, 2, 5, 'Dolorem eius incidunt impedit molestiae rerum velit.!!!', 'spzx', 'Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit sint veniam et a quisquam non.\r\n\r\nVoluptatibus assumenda aperiam veritatis voluptatibus eius cum. Quas quos a ut eum non impedit. Itaque et odio asperiores. Veritatis dignissimos explicabo non ex reiciendis quam. Numquam ea modi qui modi nesciunt.\r\n\r\nSed itaque quidem sunt cupiditate repellat natus sequi. Vel esse pariatur assumenda est est assumenda. Consequatur est blanditiis architecto illum reprehenderit dolores. Veniam fuga natus praesentium incidunt consectetur et nulla.', '', '[\"image/2026-02-04/UdBFG68JpclT14XUo6pVJEGVMxC2nHUELwudzNaf.jpg\", \"image/2026-02-04/5rtS7Aj0IE6EW15g4Yiihb069v79jmMEl9JXMuaR.jpg\"]', 6100000, '1', '+2100004', '1996-06-27 15:19:21', '2026-02-04 01:48:49'),
(19, 3, 3, 3, 1, 1, 'Suscipit velit sint ullam.', 'ztmk', 'Et voluptas a et unde et id blanditiis nihil. Tempora molestias architecto fuga. Expedita vel tempore doloremque deleniti et itaque corporis.\n\nQuo ratione delectus non modi accusantium. Accusamus aut sunt eligendi iste. Et cupiditate consequatur autem ut omnis eligendi numquam maiores. Doloremque nulla cumque vel ea placeat laboriosam est.\n\nNostrum earum aut consequatur quis qui voluptates expedita. Enim ipsa ut corrupti illo. Iure neque quidem alias eum est. Et est accusamus ratione repudiandae dolores.', '', NULL, 5100000, '1', '+21000001', '2025-11-16 11:10:23', '2023-04-30 21:48:34'),
(20, 5, 2, 3, 2, 1, 'Odio commodi corrupti voluptates dignissimos consequatur deleniti sunt.', 'oymx', 'Numquam quaerat enim temporibus qui sed ex mollitia. Sint recusandae enim asperiores. Magni voluptatum vel et minima.\n\nExplicabo sit rerum soluta voluptates. Impedit praesentium corporis repellat molestiae nesciunt eius omnis. Similique nulla consectetur iure neque qui hic sed. Debitis enim quidem quam consequuntur.\n\nSit rem sequi sit labore fugit in assumenda. Vero nihil mollitia sed placeat qui. Et corporis ipsam sed eius magni accusantium dignissimos.', '', NULL, 6100000, '1', '+21000002', '1987-02-09 20:13:14', '2022-12-24 08:22:37'),
(21, 4, 3, 2, 1, 1, 'Ut qui autem voluptatem ipsum voluptatem.', 'zvgw', 'Consequatur quibusdam a quo ea natus repellat aspernatur. Quam repellendus tenetur fugiat ut. Reprehenderit aliquam consequuntur deserunt debitis nemo cumque. Inventore dolor ducimus et qui occaecati.\n\nQuod voluptate placeat quaerat doloribus. Sint eveniet et atque voluptatem aperiam aut non dolor. Recusandae autem sapiente quis eius est.\n\nEt eveniet quasi voluptatem est et incidunt occaecati amet. Tempora id ea voluptatum deleniti sapiente fugit similique. Temporibus at culpa distinctio. Ut esse fugit aut rerum.', '', NULL, 7100000, '1', '+21000004', '1981-11-20 21:16:32', '2016-12-13 08:08:25'),
(22, 5, 2, 2, 1, 1, 'Aperiam asperiores nam tempora consectetur alias quas.', 'uuwb', 'Voluptas optio nisi non magni. Voluptatibus illum quibusdam quod corporis aperiam facere dicta distinctio. Quis rerum vero in ut sint inventore quae.\n\nQuia perferendis ut molestias et quam error quia. Blanditiis aliquid omnis numquam repellendus id nesciunt. Natus qui veritatis nostrum sit in quod est. Debitis nihil sequi veritatis ad enim sint animi quod.\n\nVoluptatibus autem nesciunt officiis voluptas. Quibusdam consequatur autem libero voluptatem et eligendi. Repellat voluptas molestias et sed. Quo aliquid autem molestiae. Voluptas et ut velit repellat non cupiditate.', '', NULL, 2100000, '1', '+21000004', '1982-09-04 08:21:50', '1978-08-20 22:58:20'),
(23, 4, 4, 2, 2, 1, 'Fugit modi eos excepturi repudiandae eum reprehenderit veritatis.', 'pskr', 'Cupiditate repellendus voluptatem dolorem vel non placeat. Distinctio est quasi sit esse laudantium incidunt ea possimus. Incidunt blanditiis sequi praesentium cum. Vitae quaerat labore temporibus blanditiis libero.\n\nLabore nemo beatae aut necessitatibus tempora et. Nam repudiandae autem in dolor nostrum. Consequatur facere id quia ullam. Provident eaque animi quia non.\n\nNumquam error omnis aut ea et. Omnis non maiores ut odio praesentium magnam. Voluptas molestiae fuga minus. Quis placeat inventore maxime in nisi veritatis a corporis.', '', NULL, 2100000, '1', '+21000007', '1972-03-12 01:29:42', '2021-07-08 11:29:46'),
(24, 2, 1, 1, 3, 5, 'Rerum blanditiis incidunt totam ut sed.', 'qftq', 'Alias fugiat deleniti reiciendis et quia perferendis. Ipsum quia earum quam maxime. Et modi repellat quia dicta quas. Id vitae dolorem nulla ipsam. Voluptas architecto consequatur quae ab placeat in nobis sapiente.\n\nAsperiores sint nihil suscipit et. Ducimus expedita itaque a doloribus fugiat. Blanditiis occaecati eum et necessitatibus tempora autem neque corrupti. Perspiciatis autem dolores culpa voluptatem vero.\n\nDelectus et dolorem quas qui autem atque. Qui maxime occaecati dolore natus deleniti veniam perspiciatis. Suscipit perferendis eius cum perferendis illo nisi quam.', '', NULL, 800000, '1', '+21000002', '1993-07-31 11:01:12', '2001-04-06 17:31:55'),
(25, 4, 3, 2, 3, 1, 'Modi ducimus ea id qui.', 'rpds', 'Ex hic magni quia laboriosam aut ea sapiente. Et et repellat corporis laudantium. A culpa quia et dolor beatae inventore omnis.\r\n\r\nVoluptatum quam itaque ut ut laboriosam. Eum rerum earum atque aut. Incidunt officiis asperiores totam est atque voluptatem quisquam facere.\r\n\r\nAmet nesciunt et cupiditate hic cum ab illo. Aut quidem beatae sed eum voluptatem voluptas sit. Voluptatem repellendus accusamus praesentium nihil. Optio velit aut consequatur aliquid qui quo fugiat.\r\n\r\nEx hic magni quia laboriosam aut ea sapiente. Et et repellat corporis laudantium. A culpa quia et dolor beatae inventore omnis.\r\n\r\nVoluptatum quam itaque ut ut laboriosam. Eum rerum earum atque aut. Incidunt officiis asperiores totam est atque voluptatem quisquam facere.\r\n\r\nAmet nesciunt et cupiditate hic cum ab illo. Aut quidem beatae sed eum voluptatem voluptas sit. Voluptatem repellendus accusamus praesentium nihil. Optio velit aut consequatur aliquid qui quo fugiat.', NULL, NULL, 900000, '1', '+21000004', '1975-03-27 05:05:18', '2025-01-05 08:37:45'),
(26, 1, 3, 2, 2, 1, 'Iusto tempore similique voluptatem autem expedita natus.', 'lpil', 'Dolor temporibus dolorum ea eaque voluptatem. Id eius voluptates consequatur praesentium minus numquam. Officia repellat commodi ea adipisci quis doloribus vero qui.\n\nIllum qui fuga in. Reprehenderit nostrum cumque similique vel consectetur laudantium. Iusto eos eos eum voluptatem dolores et repellat.\n\nQuod aliquam sit et dolor. Officia tempora nostrum ipsam eligendi at sed. Adipisci qui ut aut. Voluptatibus id sit necessitatibus dicta placeat quibusdam consequatur ad. Eos ea voluptatum itaque minus dolor similique.', NULL, NULL, 2100000, '1', '210000022', '1974-03-27 17:33:07', '1977-02-23 06:34:21'),
(35, 4, 6, 2, 2, 5, 'Et consequatur porro dolorum', 'et-consequatur-porro-dolorum', 'Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...Et consequatur porro dolorum rem minus placeat et earum. Mollitia autem commodi quia minus. Impedit...', 'image/2026-02-04/dqvR3x6AujHRPh9yAnCALVWBiiFAQxOMP7coleDB.jpg', NULL, 2100000, '0', '+210000024', '2026-02-03 23:48:59', '2026-02-03 23:48:59');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `floors`
--

CREATE TABLE `floors` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `floors`
--

INSERT INTO `floors` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, '1 этаж', '1-atage', 'Desc 1 этаж', '2026-01-28 08:48:34', '2026-01-28 08:48:34'),
(2, '2 этаж', '2-atage', 'Desc 2 этаж', '2026-01-28 08:48:34', '2026-01-28 08:48:34'),
(3, '3 этаж', '3-atage', 'Desc 3 этаж', '2026-01-28 08:48:34', '2026-01-28 08:48:34'),
(4, '4 этаж', '4-atage', 'Desc 4 этаж', '2026-01-28 08:48:34', '2026-01-28 08:48:34'),
(5, '5 этаж', '5-atage', 'Desc 5 этаж', '2026-01-28 08:48:34', '2026-01-28 08:48:34');

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE `materials` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'кирпичный', 'kirpithniy', 'Desc кирпичный', '2026-01-28 08:51:06', '2026-01-28 08:51:06'),
(2, 'панельный', 'panelniy', 'Desc панельный', '2026-01-28 08:51:06', '2026-01-28 08:51:06'),
(3, 'деревянный', 'wooden', 'Desc деревянный', '2026-01-28 08:51:06', '2026-01-28 08:51:06');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2026_01_26_025337_create_tasks_table', 2),
(7, '2026_01_27_052417_add_role_to_users_table', 3),
(11, '2026_01_28_041746_create_floors_table', 4),
(12, '2026_01_28_041759_create_rooms_table', 4),
(13, '2026_01_28_041904_create_materials_table', 4),
(14, '2026_01_28_052701_create_categories_table', 5),
(15, '2026_01_28_053225_create_estates_table', 6),
(18, '2026_02_05_004151_create_cars_table', 7),
(19, '2026_02_06_023743_create_car_brands_table', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, '1 комнатная ', '1-komnatnaya', 'Desc 1 комнатная ', '2026-01-28 08:43:05', '2026-01-28 08:43:05'),
(2, '2 комнатная ', '2-komnatnaya', 'Desc 2 комнатная ', '2026-01-28 08:43:05', '2026-01-28 08:43:05'),
(3, '3 комнатная ', '3-komnatnaya', 'Desc 3 комнатная ', '2026-01-28 08:43:05', '2026-01-28 08:43:05'),
(4, '4 комнатная ', '4-komnatnaya', 'Desc 4 комнатная ', '2026-01-28 08:43:05', '2026-01-28 08:43:05'),
(6, '5 комнатная ', '5-komnatnaya', 'Desc 5 комнатная ', '2026-01-28 08:43:05', '2026-01-28 08:43:05'),
(7, 'более 5', 'bolee-5', 'Desc более 5 ', '2026-01-28 08:43:05', '2026-01-28 08:43:05');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Task 1', 'Desc task 1...', '0', '2026-01-26 09:04:40', '2026-01-26 09:04:40'),
(2, 'Task 2', 'Desc task 2...', '1', '2026-01-26 09:04:40', '2026-01-26 09:04:40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'Bill', 'bill@mail.ru', NULL, '$2y$12$WMXZYXs7yZ6jKIP4BZ2QveAbmfbhBspSDXE.//rrHYRpb4UpMWEuu', 'Uvf9XKpfspQ2TOEdUw5q6W8ygw74wcMZrFEu67WHLofZvoQIb6aaOyE7HZ9J', 0, '2026-01-27 01:27:18', '2026-01-27 01:27:18'),
(4, 'Admin', 'admin@mail.ru', NULL, '$2y$12$JpbNio2lE0XeiWWp3UiwreiqBthnP2eCtGiMtbYpC/EVosPG6gPJ2', NULL, 1, '2026-01-27 02:28:38', '2026-01-27 02:28:38'),
(5, 'Stig', 'stig@mail.ru', NULL, '$2y$12$jK6Ab9ReoJX1S57q1TSR3Of0zyIyLBCzbUtkf1WFW96XF.Rajlkwi', NULL, 0, '2026-02-01 15:44:58', '2026-02-01 15:44:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cars_slug_unique` (`slug`),
  ADD KEY `cars_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `car_brands`
--
ALTER TABLE `car_brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_brands_slug_unique` (`slug`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Индексы таблицы `estates`
--
ALTER TABLE `estates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estates_slug_unique` (`slug`),
  ADD KEY `estates_floor_id_foreign` (`floor_id`),
  ADD KEY `estates_room_id_foreign` (`room_id`),
  ADD KEY `estates_material_id_foreign` (`material_id`),
  ADD KEY `estates_category_id_foreign` (`category_id`),
  ADD KEY `estates_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `floors_slug_unique` (`slug`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `materials_slug_unique` (`slug`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_slug_unique` (`slug`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `car_brands`
--
ALTER TABLE `car_brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `estates`
--
ALTER TABLE `estates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `estates`
--
ALTER TABLE `estates`
  ADD CONSTRAINT `estates_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `estates_floor_id_foreign` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `estates_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `estates_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `estates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
