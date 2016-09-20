-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Septembre 2016 à 22:00
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_ticketit`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_07_22_115516_create_ticketit_tables', 1),
('2015_07_22_123254_alter_users_table', 2),
('2015_09_29_123456_add_completed_at_column_to_ticketit_table', 2),
('2015_10_08_123457_create_settings_table', 2),
('2016_01_15_002617_add_htmlcontent_to_ticketit_and_comments', 2),
('2016_01_15_040207_enlarge_settings_columns', 2),
('2016_01_15_120557_add_indexes', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ticketit`
--

CREATE TABLE `ticketit` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `html` longtext COLLATE utf8_unicode_ci,
  `status_id` int(10) UNSIGNED NOT NULL,
  `priority_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `agent_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ticketit_audits`
--

CREATE TABLE `ticketit_audits` (
  `id` int(10) UNSIGNED NOT NULL,
  `operation` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ticketit_categories`
--

CREATE TABLE `ticketit_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ticketit_categories`
--

INSERT INTO `ticketit_categories` (`id`, `name`, `color`) VALUES
(1, 'Problème Web', '#d22b22'),
(2, 'Problème Réseau', '#001b99');

-- --------------------------------------------------------

--
-- Structure de la table `ticketit_categories_users`
--

CREATE TABLE `ticketit_categories_users` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ticketit_categories_users`
--

INSERT INTO `ticketit_categories_users` (`category_id`, `user_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ticketit_comments`
--

CREATE TABLE `ticketit_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `html` longtext COLLATE utf8_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ticketit_priorities`
--

CREATE TABLE `ticketit_priorities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ticketit_priorities`
--

INSERT INTO `ticketit_priorities` (`id`, `name`, `color`) VALUES
(1, 'Basse', '#069900'),
(2, 'Normale', '#e1d200'),
(3, 'Haute', '#e10000'),
(4, 'Critique', '#000000');

-- --------------------------------------------------------

--
-- Structure de la table `ticketit_settings`
--

CREATE TABLE `ticketit_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `default` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ticketit_settings`
--

INSERT INTO `ticketit_settings` (`id`, `lang`, `slug`, `value`, `default`, `created_at`, `updated_at`) VALUES
(1, NULL, 'main_route', 'tickets', 'tickets', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(2, NULL, 'main_route_path', 'tickets', 'tickets', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(3, NULL, 'admin_route', 'tickets-admin', 'tickets-admin', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(4, NULL, 'admin_route_path', 'tickets-admin', 'tickets-admin', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(5, NULL, 'master_template', 'master', 'master', '2016-08-21 20:41:47', '2016-08-24 16:08:57'),
(6, NULL, 'email.template', 'ticketit::emails.templates.ticketit', 'ticketit::emails.templates.ticketit', '2016-08-21 20:41:47', '2016-09-05 17:23:30'),
(7, NULL, 'email.header', '', 'Ticket Update', '2016-08-21 20:41:47', '2016-09-05 16:55:11'),
(8, NULL, 'email.signoff', '', 'Thank you for your patience!', '2016-08-21 20:41:47', '2016-08-29 22:59:34'),
(9, NULL, 'email.signature', '', 'Your friends', '2016-08-21 20:41:47', '2016-09-05 16:55:19'),
(10, NULL, 'email.dashboard', '', 'My Dashboard', '2016-08-21 20:41:47', '2016-09-04 17:50:29'),
(11, NULL, 'email.google_plus_link', '', '#', '2016-08-21 20:41:47', '2016-09-04 17:50:23'),
(12, NULL, 'email.facebook_link', '', '#', '2016-08-21 20:41:47', '2016-09-04 17:50:12'),
(13, NULL, 'email.twitter_link', '', '#', '2016-08-21 20:41:47', '2016-09-04 17:50:17'),
(14, NULL, 'email.footer', '', 'Powered by Ticketit', '2016-08-21 20:41:47', '2016-08-29 23:01:17'),
(15, NULL, 'email.footer_link', '', 'https://github.com/thekordy/ticketit', '2016-08-21 20:41:47', '2016-08-29 23:01:45'),
(16, NULL, 'email.color_body_bg', '#FFFFFF', '#FFFFFF', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(17, NULL, 'email.color_header_bg', '#FFFFFF', '#44B7B7', '2016-08-21 20:41:47', '2016-09-04 17:47:43'),
(18, NULL, 'email.color_content_bg', '#FFFFFF', '#F46B45', '2016-08-21 20:41:47', '2016-09-04 17:47:56'),
(19, NULL, 'email.color_footer_bg', '#FFFFFF', '#414141', '2016-08-21 20:41:47', '2016-09-04 17:48:11'),
(20, NULL, 'email.color_button_bg', '#FFFFFF', '#AC4D2F', '2016-08-21 20:41:47', '2016-09-05 16:55:33'),
(21, NULL, 'default_status_id', '1', '1', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(22, NULL, 'default_close_status_id', '0', '0', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(23, NULL, 'default_reopen_status_id', '0', '0', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(24, NULL, 'paginate_items', '10', '10', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(25, NULL, 'length_menu', 'a:2:{i:0;a:3:{i:0;i:10;i:1;i:50;i:2;i:100;}i:1;a:3:{i:0;i:10;i:1;i:50;i:2;i:100;}}', 'a:2:{i:0;a:3:{i:0;i:10;i:1;i:50;i:2;i:100;}i:1;a:3:{i:0;i:10;i:1;i:50;i:2;i:100;}}', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(26, NULL, 'status_notification', '1', '1', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(27, NULL, 'comment_notification', '1', '1', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(28, NULL, 'queue_emails', '0', '0', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(29, NULL, 'assigned_notification', '1', '1', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(30, NULL, 'agent_restrict', '0', '0', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(31, NULL, 'close_ticket_perm', 'a:3:{s:5:"owner";b:1;s:5:"agent";b:1;s:5:"admin";b:1;}', 'a:3:{s:5:"owner";b:1;s:5:"agent";b:1;s:5:"admin";b:1;}', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(32, NULL, 'reopen_ticket_perm', 'a:3:{s:5:"owner";b:1;s:5:"agent";b:1;s:5:"admin";b:1;}', 'a:3:{s:5:"owner";b:1;s:5:"agent";b:1;s:5:"admin";b:1;}', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(33, NULL, 'delete_modal_type', 'builtin', 'builtin', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(34, NULL, 'editor_enabled', '1', '1', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(35, NULL, 'include_font_awesome', '1', '1', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(36, NULL, 'summernote_locale', 'en', 'en', '2016-08-21 20:41:47', '2016-08-24 16:43:17'),
(37, NULL, 'editor_html_highlighter', '1', '1', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(38, NULL, 'codemirror_theme', 'monokai', 'monokai', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(39, NULL, 'summernote_options_json_file', 'vendor/kordy/ticketit/src/JSON/summernote_init.json', 'vendor/kordy/ticketit/src/JSON/summernote_init.json', '2016-08-21 20:41:47', '2016-08-21 20:41:47'),
(40, NULL, 'purifier_config', 'a:3:{s:15:"HTML.SafeIframe";s:4:"true";s:20:"URI.SafeIframeRegexp";s:72:"%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%";s:18:"URI.AllowedSchemes";a:5:{s:4:"data";b:1;s:4:"http";b:1;s:5:"https";b:1;s:6:"mailto";b:1;s:3:"ftp";b:1;}}', 'a:3:{s:15:"HTML.SafeIframe";s:4:"true";s:20:"URI.SafeIframeRegexp";s:72:"%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%";s:18:"URI.AllowedSchemes";a:5:{s:4:"data";b:1;s:4:"http";b:1;s:5:"https";b:1;s:6:"mailto";b:1;s:3:"ftp";b:1;}}', '2016-08-21 20:41:47', '2016-08-21 20:41:47');

-- --------------------------------------------------------

--
-- Structure de la table `ticketit_statuses`
--

CREATE TABLE `ticketit_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ticketit_statuses`
--

INSERT INTO `ticketit_statuses` (`id`, `name`, `color`) VALUES
(1, 'Non pris en charge', '#f40700'),
(2, 'Pris en charge', '#e69900');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ticketit_admin` tinyint(1) NOT NULL DEFAULT '0',
  `ticketit_agent` tinyint(1) NOT NULL DEFAULT '0',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `password`, `email`, `name`, `ticketit_admin`, `ticketit_agent`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, '$2y$10$YHmCWRrkvoiC5TicU.EVbOc7sUf3M5jfGxj3mNr..f.TSm2UpV56W', 'test1@example.fr', 'WestFR', 1, 1, '2016-09-15 15:40:44', '2016-08-02 00:00:00', 'p7YjdNpZ4WFeOp8APEElh04R7n8fSeuULfks9BKFam8osSjjekvUYn1foTqo');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ticketit`
--
ALTER TABLE `ticketit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticketit_subject_index` (`subject`),
  ADD KEY `ticketit_status_id_index` (`status_id`),
  ADD KEY `ticketit_priority_id_index` (`priority_id`),
  ADD KEY `ticketit_user_id_index` (`user_id`),
  ADD KEY `ticketit_agent_id_index` (`agent_id`),
  ADD KEY `ticketit_category_id_index` (`category_id`),
  ADD KEY `ticketit_completed_at_index` (`completed_at`);

--
-- Index pour la table `ticketit_audits`
--
ALTER TABLE `ticketit_audits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticketit_categories`
--
ALTER TABLE `ticketit_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticketit_comments`
--
ALTER TABLE `ticketit_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticketit_comments_user_id_index` (`user_id`),
  ADD KEY `ticketit_comments_ticket_id_index` (`ticket_id`);

--
-- Index pour la table `ticketit_priorities`
--
ALTER TABLE `ticketit_priorities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticketit_settings`
--
ALTER TABLE `ticketit_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticketit_settings_slug_unique` (`slug`),
  ADD UNIQUE KEY `ticketit_settings_lang_unique` (`lang`),
  ADD KEY `ticketit_settings_lang_index` (`lang`),
  ADD KEY `ticketit_settings_slug_index` (`slug`);

--
-- Index pour la table `ticketit_statuses`
--
ALTER TABLE `ticketit_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ticketit`
--
ALTER TABLE `ticketit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ticketit_audits`
--
ALTER TABLE `ticketit_audits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ticketit_categories`
--
ALTER TABLE `ticketit_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `ticketit_comments`
--
ALTER TABLE `ticketit_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ticketit_priorities`
--
ALTER TABLE `ticketit_priorities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ticketit_settings`
--
ALTER TABLE `ticketit_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `ticketit_statuses`
--
ALTER TABLE `ticketit_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
