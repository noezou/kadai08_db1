-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2024-12-19 16:11:36
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `b_name` varchar(64) NOT NULL,
  `b_url` text NOT NULL,
  `b_comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `b_name`, `b_url`, `b_comment`, `date`) VALUES
(1, '13歳から知っておきたいLGBT+', 'https://www.diamond.co.jp/book/9784478102961.html', '本書は、社会のなかで「自分は何者なのか」という問いに向き合い続ける約40名のLGBT+の生の声を収録しています。情報の充実具合はもちろんのこと、全篇を通じて伝わってくる「人間は多様であり、どんなアイデンティティも等しく尊重されるべき」というあたたかいメッセージに、心揺さぶられる一冊です。\r\n自分の居場所を探す人、誰かの居場所をつくりたい人へ。', '2024-12-16 21:19:52'),
(2, 'こどもジェンダー', 'https://www.wani.co.jp/event.php?id=7004', 'いま、子供といっしょに考えたい！ LGBTQ＋、ルッキズム、ホモソーシャルのこと。\r\n助産師／性教育YouTuberとして活躍するシオリーヌが伝える、ジェンダー・セクシュアリティにまつわる36の質問。', '2024-12-19 22:47:45'),
(3, 'マンガでわかるＬＧＢＴＱ＋', 'https://bookclub.kodansha.co.jp/product?item=0000348563', '本書は、いまさら聞けない「LGBTQ+」の基本から、最新の情報、お互いにできることまで、19の体験談を含む22のマンガを読みながら楽しく学べる作品です。', '2024-12-19 23:02:19'),
(4, '3人で親になってみた ママとパパ、ときどきゴンちゃん', 'https://mainichibooks.com/books/novel-critic/3.html', 'ママ１人、パパ２人？　ややこしいけど愛おしい、かつてないファミリーエッセイ！\r\nトランスジェンダー・フミノと彼女、ゲイのゴンちゃん。そして、生まれた子どもたち。', '2024-12-19 23:10:35'),
(5, '作りたい女と食べたい女', 'https://www.kadokawa.co.jp/product/322010000636/', 'ひとり暮らしで少食だし、作ったところで食べきれない。でも、本当はもっと作りたい！　\r\n料理が大好きな野本さんは、そんな想いと職場のストレスから、うっかり一人で食べきれないほどご飯を作ってしまう。\r\nそんなとき、お隣のお隣に住む春日さんのことを思い出して勇気を出して夕食に誘ってみると…？', '2024-12-19 23:16:25'),
(6, 'ピンクとブルーに分けない育児　ジェンダー・クリエイティブな子育ての記録', 'https://www.akashi.co.jp/book/b614396.html', 'ジェンダーをなくすのではなく、ジェンダーに基づく差別をなくしたい。著者と夫は、子どもが自分で自分のジェンダーを見つけられるように、性別にとらわれない子育てを実践することにした。', '2024-12-19 23:24:56');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
