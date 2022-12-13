-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-12-13 18:08:16
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `content`, `date`) VALUES
(1, 'ジーズ', 'gs@test.test', '内容', '2022-12-10 14:54:34'),
(2, 'ジーズ２', 'test2@test.test', '内容２', '2022-12-10 15:01:07'),
(3, 'ジーズ３', 'test3@test.test', '内容３', '2022-12-10 15:01:07'),
(4, 'ジーズ４', 'test4@test.test', '内容４', '2022-12-10 15:01:07'),
(5, '0000', '0000@0000.00', '0000', '2022-12-10 16:05:55'),
(6, 'アンケート', 'gs_test@test.test', 'アンケート', '2022-12-10 16:39:19'),
(7, '<script>alert(\'test\')</script>', 'alert', 'alert', '2022-12-10 17:08:42'),
(8, 'test', 'test', 'test', '2022-12-12 17:40:14');

-- --------------------------------------------------------

--
-- テーブルの構造 `selfy_register`
--

CREATE TABLE `selfy_register` (
  `id` int(12) NOT NULL,
  `name01` varchar(20) NOT NULL,
  `name02` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `born_place` varchar(4) DEFAULT NULL,
  `prefecture` varchar(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `occupation` varchar(10) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL,
  `division` varchar(20) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `school` varchar(20) DEFAULT NULL,
  `grade` varchar(20) DEFAULT NULL,
  `email_ok` varchar(4) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `facebook_ok` varchar(4) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram_ok` varchar(4) NOT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `twitter_ok` varchar(4) NOT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `selfy_torisetsu`
--

CREATE TABLE `selfy_torisetsu` (
  `forMyColleague01` varchar(30) NOT NULL,
  `forMyColleague02` varchar(30) NOT NULL,
  `forMyColleague03` varchar(30) NOT NULL,
  `forMyColleague04` varchar(30) NOT NULL,
  `forMyColleague05` varchar(30) NOT NULL,
  `forMyColleague06` varchar(30) NOT NULL,
  `forMyColleague07` varchar(30) NOT NULL,
  `forMyColleague08` varchar(30) NOT NULL,
  `forMyColleague09` varchar(30) NOT NULL,
  `forMyColleague10` varchar(30) NOT NULL,
  `forMyBoss01` varchar(30) NOT NULL,
  `forMyBoss02` varchar(30) NOT NULL,
  `forMyBoss03` varchar(30) NOT NULL,
  `forMyBoss04` varchar(30) NOT NULL,
  `forMyBoss05` varchar(30) NOT NULL,
  `forMyBoss06` varchar(30) NOT NULL,
  `forMyBoss07` varchar(30) NOT NULL,
  `forMyBoss08` varchar(30) NOT NULL,
  `forMyBoss09` varchar(30) NOT NULL,
  `forMyBoss10` varchar(30) NOT NULL,
  `forMyTeam01` varchar(30) NOT NULL,
  `forMyTeam02` varchar(30) NOT NULL,
  `forMyTeam03` varchar(30) NOT NULL,
  `forMyTeam04` varchar(30) NOT NULL,
  `forMyTeam05` varchar(30) NOT NULL,
  `forMyTeam06` varchar(30) NOT NULL,
  `forMyTeam07` varchar(30) NOT NULL,
  `forMyTeam08` varchar(30) NOT NULL,
  `forMyTeam09` varchar(30) NOT NULL,
  `forMyTeam10` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `selfy_torisetsu`
--

INSERT INTO `selfy_torisetsu` (`forMyColleague01`, `forMyColleague02`, `forMyColleague03`, `forMyColleague04`, `forMyColleague05`, `forMyColleague06`, `forMyColleague07`, `forMyColleague08`, `forMyColleague09`, `forMyColleague10`, `forMyBoss01`, `forMyBoss02`, `forMyBoss03`, `forMyBoss04`, `forMyBoss05`, `forMyBoss06`, `forMyBoss07`, `forMyBoss08`, `forMyBoss09`, `forMyBoss10`, `forMyTeam01`, `forMyTeam02`, `forMyTeam03`, `forMyTeam04`, `forMyTeam05`, `forMyTeam06`, `forMyTeam07`, `forMyTeam08`, `forMyTeam09`, `forMyTeam10`, `date`) VALUES
('常に楽しみです！', 'いつでも話しかけてほしい！', 'いつでも話しかけたい！', '先回りしてアドバイスされたい！', 'あれこれ教えてあげたい！', 'なるべく助けてほしい！', 'なるべく助けたい！', 'ぜひ誘ってほしい！', 'ぜひ誘ってほしい！', 'なんでも聞いて！', 'あれこれ任されたい！', '常に全速力で走りたい！', '常によりよく変えていきたい！', '日常的に指示してほしい！', '作業手順まで細かく指示してほしい！', 'はっきり明確に指示されたい！', '日常的に行いたい！', 'なるべく助けてほしい！', 'はっきり指摘されたい！', '皆の前で称賛されたい！', 'どんどん任せたい！', 'どんどん先読みして進めてほしい！', '常に判断を確認してほしい', '日常的に報告してほしい！', '進捗状況を細かく報告してほしい！', 'ミーティングでまとめて', '細かく日常的に行いたい！', 'できる限り助けたい！', '積極的に伝えられたい！', '皆で一緒に共有したい！', '2022-12-13 00:00:00');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `selfy_register`
--
ALTER TABLE `selfy_register`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `selfy_register`
--
ALTER TABLE `selfy_register`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
