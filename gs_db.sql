-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2023 年 7 朁E26 日 14:15
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `content`, `date`) VALUES
(1, 'SHINMIYA RYOTA', 'kerio@hi-telecom', 'aaaaaa', '2023-06-30 02:59:54'),
(2, 'Saori Ito', 'sao@example.com', 'ABC', '2023-06-30 03:21:21'),
(3, 'Justin', 'zie@geek.com', 'I vke dkwzo.', '2023-06-30 03:23:54'),
(4, 'Jgasd', 'cds.com', 'kjfe', '2023-06-30 03:27:29'),
(5, 'ryota999', '333333', '55555555', '2023-06-30 04:55:55'),
(6, 'ryota666', '888', '090-4921-4313', '2023-06-30 05:02:32'),
(7, 'ryota01', 'cds', '66', '2023-06-30 05:03:02'),
(8, 'as', 'jt', 'gv', '2023-06-30 06:06:28'),
(9, 'eg', 'hf', 'ff', '2023-06-30 06:07:15'),
(10, '', '', '', '2023-06-30 06:07:17'),
(11, 'd', 'd', 'dfas', '2023-06-30 06:15:26'),
(13, 'ds', '656', '', '2023-06-30 06:17:20'),
(14, 'ABC', 'aaaa', 'bbbb', '2023-06-30 08:01:32'),
(15, 'RYOTA999', 'ryota1965@hotmail.com', 'hellooooooooooooooooooooooo!', '2023-07-01 09:54:06'),
(16, 'DDDD', 'EEEE', 'FFFF', '2023-07-01 10:41:52'),
(17, 'JJJ', 'UUU', 'NNN', '2023-07-01 11:43:51'),
(18, '1AAAAAA', '2KKKKKKKKK', '3VVVVVVVVVVVVVVVVVVVV', '2023-07-01 11:50:09'),
(19, 'as', 'a', 'asd', '2023-07-01 12:31:32'),
(20, '', '', '', '2023-07-01 12:31:32'),
(21, 'da', 'ad', 'sad', '2023-07-02 02:55:12'),
(22, 'd', 'ad', 'as', '2023-07-02 03:36:05'),
(23, 'おお', 'おお', 'hhh', '2023-07-02 04:49:40'),
(24, 's', 'd', 's', '2023-07-02 08:01:27'),
(25, 'ds', 'oooooooooooooo', '8888888888888888888', '2023-07-02 08:08:47');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sleep_time` decimal(2,1) NOT NULL,
  `today_condition` int(12) NOT NULL,
  `music_title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `artist` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `music_mood` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `date`, `name`, `sleep_time`, `today_condition`, `music_title`, `artist`, `music_mood`, `content`) VALUES
(4, '2023-07-01', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '6.0', 4, 'Ed Sheeran', 'Eyes closed', '洋楽（ポップ）', '寝る時間がほしい！          '),
(5, '2023-07-02', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '6.0', 4, 'Think out loud', 'Ed Sheeran', '洋楽（ポップ）', ' 寝る時間がほしい！        '),
(6, '2023-07-03', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '3.5', 2, 'Let it be', 'The Beatles', '洋楽（クラッシックロック）', '  寝る時間がほしい!!!        '),
(17, '2023-07-04', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '6.5', 3, 'fly me to the moon', '？', 'Jazz', 'なんとかなるけどがんばりましょう                     '),
(36, '2023-07-05', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '0.0', 8, 'I can''t stop the feeling', 'Justin Timberlake', '洋楽（ポップ）', '  今日、課題PHP02完成しました。今日も徹夜。しかい全然しんどくない、、のはなぜ？また今日課題PHP03出さなきゃ、おやすみなさい                '),
(37, '2023-07-06', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '7.5', 8, 'アメリカン・フィーリング', 'サーカス', '邦楽（唱歌）', '   寝てないのがあまり気になりません。プログラミングハイとか.5うのかな。。                        '),
(38, '2023-07-07', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '4.5', 5, '日本の祭り', '不明', '邦楽（その他）', '早く帰って、少し眠って、またG''sにやってきまーす！！！                                '),
(39, '2023-07-08', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '1.0', 9, 'ヨーロッパの山村での民謡', '地元の人たち', '邦楽（唱歌）', ' せっせらせっせら進みます  '),
(53, '2023-07-22', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '5.0', 3, 'back in black', 'AC/DC', '洋楽（メタル）', '文句の言いようのないサウンド。         '),
(61, '2023-07-23', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '5.0', 3, 'ハッピーウェディング', 'ヤバい洗濯屋さん', '邦楽（ロック）', '気合入れるときに時々聞きます     '),
(63, '2023-07-24', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '7.0', 6, 'きゅんです', 'ひらめ', '邦楽（ポップ）', ' GEEKは睡眠が一番大事        '),
(82, '2023-07-25', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '7.0', 6, 'トニーベネット', 'トニーベネット', '洋楽（その他)', '心休まる最高の声。ありがとうしかありません'),
(83, '2023-07-26', '<br />\r\n<b>Notice</b>:  Undefined variable: name_txt in <b>C:\\xa', '6.5', 5, 'ブライアン・イーノ', 'ブライアン・イーノ', '洋楽（その他)', 'コード書くときはこれがいいように思う');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_login_table`
--

CREATE TABLE IF NOT EXISTS `gs_login_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_login_table`
--

INSERT INTO `gs_login_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'チロ', 'test1', 'test1', 1, 0),
(2, 'ぎりぎりりょうた', 'test2', 'test2', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_login_table`
--
ALTER TABLE `gs_login_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `gs_login_table`
--
ALTER TABLE `gs_login_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
