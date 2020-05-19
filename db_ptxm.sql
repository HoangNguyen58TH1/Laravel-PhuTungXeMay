-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2020 lúc 02:08 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_ptxm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banquantri`
--

CREATE TABLE `banquantri` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentaikhoan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banquantri`
--

INSERT INTO `banquantri` (`id`, `ten`, `tentaikhoan`, `matkhau`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Hoàng', 'admin', '$2y$10$1vc1AjzmMdbWWk1T0CT4De4TVr69xo7FFE9aGXyXd3HfMg8if8VvW', '2020-01-03 16:09:19', '2020-01-03 16:09:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `id_donhang` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` decimal(15,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `ten`, `created_at`, `updated_at`) VALUES
(1, 'Nhớt', '2020-01-03 16:09:19', '2020-01-06 04:19:00'),
(2, 'Gương', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(3, 'Nhông Sên Dĩa', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(4, 'Vỏ', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(5, 'Pô', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(6, 'Phuộc', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(7, 'Đèn', '2020-01-03 16:09:19', '2020-01-03 16:09:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_khachhang` int(10) UNSIGNED NOT NULL,
  `ngay_order` date NOT NULL,
  `tongtien` decimal(15,4) NOT NULL,
  `hinhthucthanhtoan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2019_12_31_092130_create_danhmucsanpham_table', 1),
(27, '2019_12_31_092149_create_sanpham_table', 1),
(28, '2019_12_31_092207_create_khachhang_table', 1),
(29, '2019_12_31_092233_create_banquantri_table', 1),
(30, '2019_12_31_092319_create_donhang_table', 1),
(31, '2019_12_31_092335_create_chitietdonhang_table', 1),
(32, '2020_01_02_125449_create_slide_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_danhmucsanpham` int(10) UNSIGNED NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` decimal(15,4) NOT NULL,
  `giamgia` decimal(15,4) NOT NULL,
  `hinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moi` tinyint(4) NOT NULL,
  `chitiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `id_danhmucsanpham`, `ten`, `gia`, `giamgia`, `hinh`, `moi`, `chitiet`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nhớt Moto Scooter MB 4T 10W40', '145000.0000', '130000.0000', 'nhot2.jpg', 1, 'Sử dụng công nghệ Esterlube với độ ổn định bôi trơn cực cao, giúp tăng công suất, bảo vệ động cơ và bảo vệ truyền động, giảm tiêu thụ dầu và cải thiện việc sử dụng nhiên liệu ngay cả trong điều kiện đua.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(2, 1, 'Nhớt Matic Sintetico 4T 10W30', '215000.0000', '200000.0000', 'nhot3.jpg', 1, 'Tính năng bôi trơn tốt giúp giảm thiểu ma sát và hiện tượng mài mòn trong động cơ và bộ phận truyền động. Tính năng tẩy rửa cực tốt giúp động cơ luôn được giữ sạch.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(3, 1, 'Nhớt Racing 10W40 1L', '270000.0000', '250000.0000', 'nhot1.jpg', 0, 'Độ nhớt thấp giúp dể dàng bơm nhớt lên động cơ khi trời lạnh. Loại bỏ cặn bùn và cặn cứng có trong dầu bôi trơn động cơ, giúp động cơ xe luôn ổn định khi hoạt động.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(4, 1, 'Motul 300V Factory 10W40 1L', '425000.0000', '0.0000', 'nhot4.jpg', 1, 'Ngăn ngừa được hiện tượng trượt ly hợp ở thời điểm khởi động xe và khi sang số (đối với xe số và xe tay côn 4 thì).', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(5, 1, 'Nhớt Voltronic Granturismo', '440000.0000', '0.0000', 'nhot5.jpg', 0, 'Khả năng kiểm soát ma sát giúp tối ưu hiệu suất ly hợp cũng như khả năng chuyển số nhẹ nhàng. Tính năng chống oxy hóa tuyệt hảo ngăn ngừa hiện tượng dầu bị đặc và sự suy thoái dầu ở mọi điều kiện vận hành. Tính ổn định trượt tuyệt vời giúp chống lại sự suy giảm độ nhớt trong động cơ giúp kéo dài thời gian sử dụng dầu lên tới 7.000km.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(6, 1, 'Nhớt liqui Moligen 5W40 - xe Ga', '285000.0000', '0.0000', 'nhot6.jpg', 1, 'Liqui Moly Molygen 5W40 có tính năng chống ma sát vượt trội của nhớt Liqui Moly 5W40 Molygen giúp động cơ dù vận hành với tần suất cao vẫn ổn định và êm ái nhất. Đặc biệt cung cấp khả năng chống mài mòn vượt trội cho động cơ xe tay ga. Nhớt luôn ổn định giúp giảm tiêu thụ dầu và nhiên liệu. Nhớt Liqui Moly 5W40 Molygen có thể kéo dài thời gian thay nhớt lên rất lâu, có thể đến 2500 - 3000 km.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(7, 1, 'Bộ Nhớt Caltex Havoline 20W50', '170000.0000', '152000.0000', 'nhot7.jpg', 0, 'Duy trì sự vận hành êm ái của côn. Bảo vệ hộp số dưới áp lực cao. Dễ dàng khởi động và điều khiển.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(8, 1, 'Combo Dầu Nhớt Xe Ga Cao Cấp', '169000.0000', '137000.0000', 'nhot8.jpg', 1, 'Mua Dầu Nhớt Xe Tay Ga Cao Cấp BCP 10W40 SL 0.8L Nhập Khẩu Thái Lan Tặng Phụ Gia Làm Sạch Động Cơ Xe Máy BCP Engine Flush 100ml Thái Lan. Nhớt Xe Tay Ga BCP Super 1 SAE 10W40, JASO MB (0.8 Lít) được sản xuất đặc biệt giúp bảo vệ các bộ phận của động cơ, giúp máy vận hành cực êm, giảm cặn bùn và giúp động cơ sạch vượt trội.', '2020-01-03 16:09:19', '2020-01-06 09:04:01'),
(9, 1, 'Nhớt Liqui Moly Scooter Race 10W40', '295000.0000', '0.0000', 'nhot9.jpg', 1, 'Liqui Moly Scooter Race 10W40  là sản phẩm mang những đặc tính cao cấp nhất dành cho xe tay ga 4 thì hiện đại. Tính năng năng chống ma sát vượt trội của nhớt Liqui Moly 10W40 Scooter Race sẽ giúp động cơ ổn định trong suốt thời gian vận hành.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(10, 1, 'Dầu Nhớt Xe Máy Tổng Hợp Wolver', '140000.0000', '0.0000', 'nhot10.jpg', 0, 'Ngăn ngừa được hiện tượng trượt ly hợp ở thời điểm khởi động xe và khi sang số (đối với xe số và xe tay côn 4 thì). Bảo vệ, chống mài mòn, giúp kéo dài tuổi thọ động cơ một cách hoàn hảo dù động cơ luôn hoạt động tối đa công suất. Giảm nhiệt độ ma sát khi động cơ vận hành.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(11, 2, 'Gương gù chiếu hậu', '129000.0000', '0.0000', 'guong1.jpg', 0, 'GƯƠNG GÙ THỜI TRANG là sản phẩm phụ kiện x máy siêu HOT hện nay. Kiểu dáng bắt mắt phù hợp với mọi loại xe hiện nay tạo phong cách cá tính cho chủ nhân.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(12, 2, 'Gương chiếu hậu 5 cạnh', '45000.0000', '39000.0000', 'guong2.jpg', 0, 'Đây là loại gương được thiết kế để cho phép người lái xe có thể quan sát phía sau, đảm bảo an toàn khi điều khiển.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(13, 2, 'Kính Rizoma 5 cạnh - bạc', '20000.0000', '150000.0000', 'guong3.jpg', 0, 'Sản phẩm là hàng chính hãngThương hiệu Rizoma là 1 thương hiệu rất nổi tiếng chuyên sản xuất phụ tùng xe đua và xe phân khối lớn.Sản phẩm bằng nhôm nguyên khối được gia công CNC rất sắc sảo.Sơn tĩnh điện giúp nước sơn bền màu và tránh tróc sơn khi va chạm.Thân kính rất chắc chắn, có thể xoay tùy ý thích người dùng.Mặt gươnglàm bằng kính lồi giúp quan sát tốt về đêm cũng như khi di chuyển trời mưa.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(14, 2, 'Kính Elisse Rizoma', '220000.0000', '0.0000', 'guong4.jpg', 0, 'Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hóa đơn VAT không được cấp trong trường hợp này.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(15, 2, 'Kính Yaz loại tốt', '70000.0000', '0.0000', 'guong5.jpg', 1, 'Bền đẹp, chắc chắn, nhìn rõ nét', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(16, 2, 'Cặp gương gù cán xoay CRG (Đen)', '160000.0000', '127000.0000', 'guong6.jpg', 1, 'Gương chiếu hậu gù tròn gắn nhiều loại xe máy siêu đẹp, thiết kế đẹp mắt, sang trọng gắn được nhiều loại xe. Là phụ kiện không thể thiếu cho xe máy, moto của bạn, tháo lắp dễ dàng.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(17, 2, 'Cặp gương gù cán xoay CRG (Xanh)', '170000.0000', '0.0000', 'guong7.jpg', 0, 'Được làm từ nhôm cnc cao cấp, bề mặt gương phản chiếu tốt, trong sáng dễ quan sát. Đảm bảo an toàn cho bạn khi cần quan sát qua đường hoặc vượt tuyến.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(18, 2, 'Cặp gương gù cán xoay CRG (Vàng)', '180000.0000', '133000.0000', 'guong8.jpg', 1, 'Chất liệu: Nhôm CNC cao cấp, cứng cáp chịu lực tốt. Được sơn tỉnh điện nên màu đẹp bền không tróc.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(19, 2, 'Cặp gương gù cán xoay CRG (Đỏ)', '190000.0000', '0.0000', 'guong9.jpg', 1, 'Mặt kính dạng phẳng, kiểu hội tụ, phản chiếu hình ảnh nét, giúp nhìn rõ phía sau. Vị trí lắp đặt: ở đầu xe máy.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(20, 2, 'Bộ Gương Xe Máy Xoay 360 Độ', '135000.0000', '120000.0000', 'guong10.jpg', 0, 'Khung được làm bằng nhựa ABS và tay cầm được làm bằng hợp kim nhôm. Áp dụng gương siêu rõ, cung cấp rõ ràng hơn. Gương có thể xoay khoảng 180 ° và thanh gương có thể xoay 360 ° tự do. Hình dạng ngọn lửa độc đáo, vỏ sơn hoàn thiện.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(21, 3, 'NSD Winner Sonic MC Racing', '350000.0000', '0.0000', 'nsd1.jpg', 0, 'Được gia công sắc nét đến từng chi tiết , dĩa đen nhám bao đẹpSên tải 9ly tán đúc bao cứngTặng kèm 1 xịt dưỡng sên', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(22, 3, 'NSD Vàng DID cho Sirius', '389000.0000', '220000.0000', 'nsd2.jpg', 0, 'Nhông sên dĩa Vàng DID cho Sirius xăng cơ độ bền cực cao, chắc chắn, khắc phục tình trạng hay bị giãn sên', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(23, 3, 'NSD REDLEO dành cho EXCITER', '405000.0000', '325000.0000', 'nsd3.jpg', 0, 'Hàng chánh hiệu redleo sên vàng đĩa đen nổi bật, bền được khắng định bởi thương hiệu, tiêu chí ngon bổ rẻ nhưng phải đẹp, thời trang.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(24, 3, 'NSD SIRIUS - Sên đen 10ly', '340000.0000', '290000.0000', 'nsd4.jpg', 0, 'D.I.D H-DS (viết tắt của Hyper Durability Spec): xích siêu tải trọng có lá xích dày 2 mm và nhiệt luyện đặc biệt có khả năng chịu tải liên tục, bền bỉ, có tuổi thọ cao hơn 130% so với loại xích D.I.D 428H trước đây. ', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(25, 3, 'NSD exciter 150 hàng Thái', '410000.0000', '0.0000', 'nsd5.jpg', 0, 'Nhông sên dĩa EXCITER150-GH Thông số kĩ thuật Dĩa 42T Nhông 14T Sên 126L Sên nhông dĩa GHTHÁI LAN nổi tiếng là siêu bền.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(26, 3, 'Bộ NSD SSS chính hãng cho Sirius', '540000.0000', '0.0000', 'nsd6.jpg', 0, 'Bộ NSD SSS hàng chính hãng dành cho Sirius, Jupiter không Fi, được Malaysia sản xuất theo công nghệ của Nhật. Thương hiệu SSS này từ lâu đã được khách hàng tin dùng. Bộ nhông sên dĩa SSS cho Sirius, Jupiter không Fi làm bằng hợp kim thép vô cùng bền và dùng sên 9ly.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(27, 3, 'NSD Thái cao cấp Winner 150', '1226000.0000', '999000.0000', 'nsd7.jpg', 1, '100% hàng nhập khẩu THÁI LAN chính ngạch. Sản phẩm có độ bền cao, vận hành êm ái. Sên ống đúc theo tiêu chuẩn thép Nhật Bản, chạy lâu tăng sên.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(28, 3, 'Nhông Akei 14T cho Raider', '50000.0000', '0.0000', 'nsd8.jpg', 1, 'Nhông Akei 14T chính hãng mới dành cho các dòng xe Raider, giá thành khá hợp lí và chất lượng được nhiều khách hàng đánh giá khá tốt. Nhông Akei 14T chính hãng sản xuất tại Thái Lan.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(29, 3, 'Dĩa tải Akei 43T cho Sonic', '150000.0000', '132000.0000', 'nsd9.jpg', 1, 'Dĩa tải Akei 43T dành cho Sonic, Winner 150, Winner X mẫu mới được nhiều anh em Biker ưa chuộng. Chất liệu cực bền, cứng cáp, thích hợp đi sên to. Dĩa Akei 43T chính hãng sản xuất tại Thái Lan.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(30, 3, 'Nhông Recto 14 cho Exciter', '67000.0000', '0.0000', 'nsd10.jpg', 1, 'Nhông Recto 14, 15T dành cho Exciter, Winner 150, Winner X. Nhông Recto chính hãng đang rất được ưa chuộng với chất lượng vô cùng đảm bảo, độ bền khá cao, phù hợp với các loại xe phổ thông công suất lớn. Nhông Recto hàng chính hãng Thái Lan.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(31, 4, 'Vỏ Xe Exciter, Winner Hãng DPLUS', '550000.0000', '470000.0000', 'vo1.jpg', 0, 'Là Công ty đầu tiên sản xuất Lốp xe Máy trên dây chuyền sản xuất Lốp Ô Tô tiên tiến của DRC đạt các tiêu chuẩn Việt Nam và thế giới', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(32, 4, 'Lốp (vỏ) nhỏ size 60/90-17', '285000.0000', '225000.0000', 'vo2.jpg', 1, 'Gai thể thao, phù hợp với các loại xe muốn sử dụng lốp (vỏ) nhỏ để giảm trọng lượng của xe, giúp tăng tốc độ của xe.- Đạt tiêu chuẩn Nhật: Jis K6366- Dòng lốp truyền thống được thiết kế theo kiểu gai khối tăng độ bám đường,sử dụng sử dụng nhiều cung đường trường, đường đất...', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(33, 4, 'Vỏ 60/90-17, 70-90-17', '380000.0000', '0.0000', 'vo3.jpg', 0, 'vỏ dành cho các loại xe có ruột bánh 17 in.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(34, 4, 'Combo 2 lốp trước sau xe 110cc', '575000.0000', '525000.0000', 'vo4.jpg', 0, 'Phù hợp với các dòng xe như Future, Wave RS, RSX, 110, Jupiter, Sirius.- Đạt tiêu chuẩn Nhật: Jis K6366', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(35, 4, 'Combo lốp xe Pirelli 70/90-17', '1200000.0000', '0.0000', 'vo5.jpg', 1, 'Vỏ xe Pirelli 70/90-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(36, 4, 'Vỏ Metzeler 100/80-17', '980000.0000', '0.0000', 'vo6.jpg', 1, 'Metzeler 100/80-17, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. Giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. METZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(37, 4, 'Vỏ xe Aspira Sportivo 110/80-14', '720000.0000', '630000.0000', 'vo7.jpg', 1, 'Vỏ xe Aspira Sportivo 110/80-14 gắn được cho xe NVX các loại hoặc bánh sau Vario, PCX mới, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(38, 4, 'Vỏ Metzeler 70/90-14', '450000.0000', '0.0000', 'vo8.jpg', 0, 'Vỏ xe Metzeler 70/90-14, với thiết kế hoàn toàn mới, kiểu dáng rất thể thao và là dòng cao cấp hơn nhiều so với các loại thông thường. METZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy, chất lượng đã được rất nhiều khách hàng tin dùng bởi thiết kế rất đẹp và độ bám đường cực chuẩn.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(39, 4, 'Vỏ Maxxis 80/90-14 3D', '365000.0000', '330000.0000', 'vo9.jpg', 1, 'Vỏ Maxxis 80/90-14 với gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. Vỏ Maxxis 80/90-14 gắn vừa cho Honda Click, AB, Vision, Mio, Luvias...', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(40, 4, 'Vỏ xe Aspira Terreno 130/70-17', '895000.0000', '800000.0000', 'vo10.jpg', 1, 'Vỏ xe Aspira Terreno 130/70-17 gắn được cho xe côn tay như Exciter, Winner, CBR150, R15...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(41, 5, 'Lon pô Leovince - Vindecal', '750000.0000', '742000.0000', 'po1.jpg', 1, 'Chất liệu inox cực đẹp sắc sảo. Hàng nhập , hoàn hảo từ mối hàn tới ống tiêu. Âm thanh rất ấm nha. Giá trên bao gồm ống tiêu , tem , pat, lò xo, quan trọng nhất là cái lon pô nữa nhé AE.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(42, 5, 'Pô xe máy dream - Vindecal', '177000.0000', '166000.0000', 'po2.jpg', 0, 'An toàn khi sử dụng, cam xăng đi rất nhẹ xe thoáng máy. Lên sẵn cổ, Pô Dream móc cam xăng dành cho xe máy dream.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(43, 5, 'PÔ PARK MÓC GẮN SIRIUS - Vindecal', '289000.0000', '287000.0000', 'po3.jpg', 1, 'Pô Móc Sẳn cho dòng xe sirius thường tiếng pô cực đã. Cổ pô này làm băng chất liều inox có ưu điểm không pi ri sét những có nhược điểm tiếng thanh hơn..Đây Là Dòng Pô Móc Cho sirius thường Cho Ai Muốn Xe sirius thường Kêu Giọng 4 Road, Thoáng Máy Thì Nên Xài Loại Này. Để Cho Chạy Thoáng Xe Và Chạy Nhanh Hơn Nữa.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(44, 5, 'Pô SONIC REDLEO', '850000.0000', '570000.0000', 'po4.jpg', 0, 'là sản phẩm bán chạy nhất hiện nay bởi âm thanh kiểu dang va dộ bền cổ va vĩ pô xhat liêu inox bền bỉ', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(45, 5, 'Pô R9 Nhập Khẩu', '850000.0000', '680000.0000', 'po5.jpg', 0, 'Cho Âm Thanh Ấm và đầy Uy Lực ở vòng tua cao. Chất Liệu INox 304 Nhập ', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(46, 5, 'Cổ pô Winner-Exciter 150 Titan', '220000.0000', '0.0000', 'po6.jpg', 1, 'Cổ ppo titan dành cho Exciter 150 và Winner 150. Bao rỉ sét. Càng chạy càng nóng càng đẹp.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(47, 5, 'Pô UMA Racing-Ex150/Winner150', '1770000.0000', '1530000.0000', 'po7.jpg', 1, 'Pô Uma cho âm thanh nổ hay hơn , pô nặng hơn so với pô zin. Pô được sơn đen, đặc biệt là logo làm 3D đẹp hơn bản cũ.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(48, 5, 'Pô CBR Redleo gắn mọi loại xe', '720000.0000', '650000.0000', 'po8.jpg', 1, 'Chuẩn - đẹp - âm thanh hay không khác gì hàng real nhé anh em.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(49, 5, 'LON PÔ MẪU AK R1 CHO XE MÁY', '1899000.0000', '1650000.0000', 'po9.jpg', 1, 'Lon pô mẫu AK R1 cho xe máy. An toàn, chất lượng. Sản phẩm dành cho bạn.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(50, 5, 'Chụp đích Pô Carbon - Winner', '98000.0000', '0.0000', 'po10.jpg', 1, 'Được làm từ nhựa ABS cao cấp, bền màu với thời gian, chịu được nhiệt và va đập tốt. Có cấu tạo với đường nét tinh tế, khít với pô nguyên bản. An toàn và có tính thẩm mỹ hơn các loại ốp pô bằng inox có thể gây chấn thương và bỏng cho người sử dụng vì độ sắc bén và hút nhiệt của kim loại.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(51, 6, 'Phuộc MC Racing V3', '1200000.0000', '0.0000', 'phuoc1.jpg', 0, 'Phuộc v3 không bình dầu dành cho exciter 135 và 150Phuộc gia công đẹp chính xác lắp như zinDáng phuộc to ty phuộc 16mm bao cứng cápCó Rebound tăng chỉnh chân phuộc', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(52, 6, 'Phuộc Ohlins cho xe Winner', '1185000.0000', '1175000.0000', 'phuoc2.jpg', 0, 'Phuộc Ohlins gắn cho winner và exciter các đời, với chất liệu được làm bằng hợp kim, lo xo lớn giảm dộ sàng lắc khi anh em lưu thông với tốc độ cao. ', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(53, 6, 'Cặp phuộc Ohlins có bình dầu', '1150000.0000', '0.0000', 'phuoc3.jpg', 0, 'Gắn vào như phuộc zin, không chế gì cả.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(54, 6, 'Cặp phuộc sau Sum Racing', '600000.0000', '365000.0000', 'phuoc4.jpg', 0, 'Hàng chất lượng, êm ái, mượt mà cho anh em phượt thỏa thích, màu sắc đa dạng sẽ tạo điểm nhấn cho xế yêu của bạn.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(55, 6, 'Phuộc RCB cho Dream, Wave,...', '650000.0000', '450000.0000', 'phuoc5.jpg', 0, 'Hàng chất lượng, êm ái, mượt mà cho anh em phượt thỏa thích.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(56, 6, 'Móc Khóa Phuộc Xe (4 màu)', '39000.0000', '32000.0000', 'phuoc6.jpg', 0, 'Móc khóa cao cấp, gọn nhẹ, tiện lợi, dễ sử dụng. Sành điệu và đầy cá tính nhưng không thiếu phần sang trọng. Hợp kim chống gỉ giúp bạn hoàn toàn yên tâm khi sử dụng trong suốt thời gian dài.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(57, 6, 'Phuộc sau Vario bình dầu dưới', '689000.0000', '0.0000', 'phuoc7.jpg', 1, 'Phuộc sau dành cho xe Vario135 và Vario150 - bình dầu dưới. An toàn, chất lượng, sản phẩm dành cho bạn.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(58, 6, 'Phuộc Giảm Xóc Zd Racing', '348000.0000', '322000.0000', 'phuoc8.jpg', 0, 'Thiết kế hấp dẫn: Nó có thể cung cấp cho bạn một trải nghiệm tuyệt vời. Nhẹ, tay nghề tinh tế và hiệu suất cao. Nó được làm bằng hợp kim nhôm, có thể hỗ trợ tuổi thọ dài. Bộ giảm xóc sẽ làm giảm đáng kể độ rung và cải thiện độ ổn định.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(59, 6, 'Bộ Phuộc lò xo 2 tầng cao cấp', '370000.0000', '334000.0000', 'phuoc9.jpg', 1, 'Có thiết kế chắc chán, lắp ráp dễ dàng tương thích với các chi tiết của xe. Kiểu dáng hiện đại cùng màu sắc tươi mới sẽ là điểm nhấn cho xe. Chịu lực tốt khi xe chạy trên các cung đường xấu. Sản phẩm được sơn tỉnh điện nên rất đẹp và bền màu, khó tróc. Dùng công nghệ CNC cắt nên cho độ chính xác và chi tiết trên sản phẩm rất sắc sảo và đẹp mắt.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(60, 6, 'Phuộc trước xe WINNER 150', '999000.0000', '0.0000', 'phuoc10.jpg', 0, 'Cặp phuộc trước dành cho xe Winner 150. An toàn, chất lượng, sản phẩm dành cho bạn.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(61, 7, 'Đèn Led 2 tầng chính hãng ZHIPAT', '1430000.0000', '0.0000', 'den1.jpg', 0, 'Đèn pha LED 2 tầng #ZHI.PAT tương tự như đèn pha zin của Exciter 150. Nó chỉ khác nhau ở phần bên trong, thay vì sử dụng bóng halogen thì ZhiPat sử dụng đèn LED được thiết kế tinh xảo, bo viền các góc cạnh cực đẹp.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(62, 7, '[12V-85V-SIÊU SÁNG] Đèn trợ sáng', '200000.0000', '137000.0000', 'den2.jpg', 1, '3 chế độ sáng, sáng mờ, sáng mạnh, pasing (chỉ cần bật tắt công tắc đèn sẽ tự chuyển chế độ)', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(63, 7, 'BỘ ĐÈN PHA LED CHO XE DREAM', '169000.0000', '0.0000', 'den3.jpg', 1, 'Dòng sản phẩm này rất hữu ích cho xe đream nhé , tuy không thuộc phân khúc cao cấp nhưng dòng sản phẩm này shop bán rất chạy trên nhiều trang bán hàng và nhận về hơn 90% đánh giá tích cực .', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(64, 7, 'Đèn Led 2 Tầng Exciter 150', '1550000.0000', '1445000.0000', 'den4.jpg', 0, 'Được thiết kế chóa đèn, bóng led hướng xuống, ánh sáng được gom và tập trung hơn so với cũ. Và đặc biệt, anh sáng leb pha thêm ánh sáng vàng tăng thêm “ĐỘ BÁM ĐƯỜNG MẠNH” để phù hợp đi trên những cung đường tối, mưa, sương mù,…', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(65, 7, 'Mắt cú WINNER 150', '539000.0000', '0.0000', 'den5.jpg', 1, 'Đèn mắt cú tăng tính \"TRẺ TRÂU\" cho bạn :))))', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(66, 7, 'Cặp Đèn Xinhan Led L14', '77000.0000', '62000.0000', 'den6.jpg', 1, 'Cặp Đèn Xinhan Led L14 Gắn Vario và mọi loại xe máy. Ánh sáng vàng và ánh sáng mũi tên đỏ hoặc xanh. Sản phẩm trang trí dành cho mọi loại xe. An toàn khi sử dụng.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(67, 7, 'Bộ Đèn Led XiNhan 2 tầng - Ex150', '120000.0000', '111000.0000', 'den7.jpg', 1, 'Thiết kế khá gọn gàng. Đảm bảo an toàn khi lưu thông vì ánh sáng rõ phát ra từ 2 phía dưới và bên hông. Gắn được nhiều loại xe.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(68, 7, ' Đèn LED trợ sáng C6', '130000.0000', '0.0000', 'den8.jpg', 0, 'Gắn được mọi loại xe PKL như Z1000, Z800, CB1000, R1, R6, Ducati, KTM, FZ150i, MSX125, Ex150, CBR150, AB, Nouvo. Kiểu dáng nhỏ gọn, dễ lắp đặt , tất cả mọi nơi chủ yếu là kính chiếu hậu, phuộc trước, chắn bùn trước. Sản phẩm bao gồm: đèn led trợ sáng C6, pass, ốc.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(69, 7, 'Đèn Pha Led L6X 40W trợ sáng', '265000.0000', '0.0000', 'den9.jpg', 1, 'Tên sản phẩm: đèn Led L6X. Công suất: 40W. Nhiệt màu: 6.000 Kevin - Ánh sáng trắng, độ sáng: 4.000 lumens. Kiểu dáng hầm hố với 6 led siêu sáng. Kính bằng thủy tinh trong suốt.', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(70, 7, 'Đèn Pha LED Siêu Sáng', '122000.0000', '102000.0000', 'den10.jpg', 1, 'Thông số kỹ thuật:  Màu sáng: trắng. Chất liệu sản phẩm: hợp kim nhôm. Số hạt đèn LED: 12. Chùm sáng thấp: sáng một bên, chùm sáng cao: hai mặt sáng\n            Thông số kỹ thuật của đèn: BA20D H6. Điện áp làm việc: DC9-85V. Công suất: 36W.', '2020-01-03 16:09:19', '2020-01-03 16:09:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `hinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `hinh`, `created_at`, `updated_at`) VALUES
(1, 'slide1.jpg', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(2, 'slide2.jpg', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(3, 'slide3.jpg', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(4, 'slide4.jpg', '2020-01-03 16:09:19', '2020-01-03 16:09:19'),
(5, 'slide5.jpg', '2020-01-03 16:09:19', '2020-01-03 16:09:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ten`, `gioitinh`, `email`, `matkhau`, `diachi`, `sodienthoai`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cao Viết Thắng', 'Nam', 'thang.cv.56cntt@gmail.com', '$2y$10$.yyTnauE3kO673voLGrABeGny5GPbsWMf79ekgAUXfzHsQ0gU2OgW', 'Ninh Hòa', '0911343404', NULL, '2020-01-03 16:09:20', '2020-01-03 16:09:20'),
(2, 'Đinh thị Kim Thoa', 'Nữ', 'thoaoccho@gmail.com', '$2y$10$LCeuPb8VgmasjTzXaN8QMODwyea6RrMvWAWesVSspflpJ.RjB1Vgy', 'Vạn Ninh', '113', NULL, '2020-01-03 16:09:20', '2020-01-03 16:09:20'),
(3, 'Trần Đặng Kim Khuê', 'Nam', 'khue.conbo@gmail.com', '$2y$10$IuIFh5cCM5DT2Aio/0hvD.D6OaMP1gbNeJsA2SKBtYSlQbdANZNPK', 'Diên Khánh', '999', NULL, '2020-01-03 16:09:20', '2020-01-03 16:09:20'),
(4, 'Nguyễn Văn Hoàng', 'Nữ', 'a@gmail.com', '$2y$10$ga3McsWT9LxVR.BW0dWxX.DuKD9LL.U6w8typ8bXvRirHmTVBYiUG', 'Đoàn Trần Nghiệp', '0352582951', 'Ni76enX3EOuaaTqvF2jPeb62uJO0pb2Krgtm2hP4vnOERIUbEkHRHCPmK3Vi', '2020-01-06 03:57:23', '2020-01-06 03:58:13');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banquantri`
--
ALTER TABLE `banquantri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietdonhang_id_sanpham_foreign` (`id_sanpham`),
  ADD KEY `chitietdonhang_id_donhang_foreign` (`id_donhang`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_id_khachhang_foreign` (`id_khachhang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_id_danhmucsanpham_foreign` (`id_danhmucsanpham`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banquantri`
--
ALTER TABLE `banquantri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_id_donhang_foreign` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietdonhang_id_sanpham_foreign` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_id_khachhang_foreign` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_id_danhmucsanpham_foreign` FOREIGN KEY (`id_danhmucsanpham`) REFERENCES `danhmucsanpham` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
