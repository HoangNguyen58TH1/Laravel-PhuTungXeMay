<?php

use Illuminate\Database\Seeder;

class DataSanpham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chitietsanpham_nhot='Sử dụng công nghệ Esterlube với độ ổn định bôi trơn cực cao, giúp tăng công suất, bảo vệ động cơ và bảo vệ truyền động, giảm tiêu thụ dầu và cải thiện việc sử dụng nhiên liệu ngay cả trong điều kiện đua.';
        DB::table('sanpham')->insert([
            //nhớt
            ['id_danhmucsanpham'=>'1','ten'=>'Nhớt Moto Scooter MB 4T 10W40','gia'=>'145000','giamgia'=>'130000','hinh'=>'nhot2.jpg','moi'=>rand(0,1) ,'chitiet'=>$chitietsanpham_nhot],
            ['id_danhmucsanpham'=>'1','ten'=>'Nhớt Matic Sintetico 4T 10W30','gia'=>'215000','giamgia'=>'200000','hinh'=>'nhot3.jpg','moi'=>rand(0,1) ,'chitiet'=>'Tính năng bôi trơn tốt giúp giảm thiểu ma sát và hiện tượng mài mòn trong động cơ và bộ phận truyền động. Tính năng tẩy rửa cực tốt giúp động cơ luôn được giữ sạch.'],
            ['id_danhmucsanpham'=>'1','ten'=>'Nhớt Racing 10W40 1L','gia'=>'270000','giamgia'=>'250000','hinh'=>'nhot1.jpg','moi'=>rand(0,1) ,'chitiet'=>'Độ nhớt thấp giúp dể dàng bơm nhớt lên động cơ khi trời lạnh. Loại bỏ cặn bùn và cặn cứng có trong dầu bôi trơn động cơ, giúp động cơ xe luôn ổn định khi hoạt động.'],
            ['id_danhmucsanpham'=>'1','ten'=>'Motul 300V Factory 10W40 1L','gia'=>'425000','giamgia'=>'0','hinh'=>'nhot4.jpg','moi'=>rand(0,1) ,'chitiet'=>'Ngăn ngừa được hiện tượng trượt ly hợp ở thời điểm khởi động xe và khi sang số (đối với xe số và xe tay côn 4 thì).'],
            ['id_danhmucsanpham'=>'1','ten'=>'Nhớt Voltronic Granturismo','gia'=>'440000','giamgia'=>'0','hinh'=>'nhot5.jpg','moi'=>rand(0,1) ,'chitiet'=>'Khả năng kiểm soát ma sát giúp tối ưu hiệu suất ly hợp cũng như khả năng chuyển số nhẹ nhàng. Tính năng chống oxy hóa tuyệt hảo ngăn ngừa hiện tượng dầu bị đặc và sự suy thoái dầu ở mọi điều kiện vận hành. Tính ổn định trượt tuyệt vời giúp chống lại sự suy giảm độ nhớt trong động cơ giúp kéo dài thời gian sử dụng dầu lên tới 7.000km.'],
            ['id_danhmucsanpham'=>'1','ten'=>'Nhớt liqui Moligen 5W40 - xe Ga','gia'=>'285000','giamgia'=>'0','hinh'=>'nhot6.jpg','moi'=>rand(0,1) ,'chitiet'=>'Liqui Moly Molygen 5W40 có tính năng chống ma sát vượt trội của nhớt Liqui Moly 5W40 Molygen giúp động cơ dù vận hành với tần suất cao vẫn ổn định và êm ái nhất. Đặc biệt cung cấp khả năng chống mài mòn vượt trội cho động cơ xe tay ga. Nhớt luôn ổn định giúp giảm tiêu thụ dầu và nhiên liệu. Nhớt Liqui Moly 5W40 Molygen có thể kéo dài thời gian thay nhớt lên rất lâu, có thể đến 2500 - 3000 km.'],
            ['id_danhmucsanpham'=>'1','ten'=>'Bộ Nhớt Caltex Havoline 20W50','gia'=>'170000','giamgia'=>'152000','hinh'=>'nhot7.jpg','moi'=>rand(0,1) ,'chitiet'=>'Duy trì sự vận hành êm ái của côn. Bảo vệ hộp số dưới áp lực cao. Dễ dàng khởi động và điều khiển.'],
            ['id_danhmucsanpham'=>'1','ten'=>'Combo Dầu Nhớt Xe Ga Cao Cấp','gia'=>'169000','giamgia'=>'137000','hinh'=>'nhot8.jpg','moi'=>rand(0,1) ,'chitiet'=>'Mua Dầu Nhớt Xe Tay Ga Cao Cấp BCP 10W40 SL 0.8L Nhập Khẩu Thái Lan Tặng Phụ Gia Làm Sạch Động Cơ Xe Máy BCP Engine Flush 100ml Thái Lan. Nhớt Xe Tay Ga BCP Super 1 SAE 10W40, JASO MB (0.8 Lít) được sản xuất đặc biệt giúp bảo vệ các bộ phận của động cơ, giúp máy vận hành cực êm, giảm cặn bùn và giúp động cơ sạch vượt trội.'],
            ['id_danhmucsanpham'=>'1','ten'=>'Nhớt Liqui Moly Scooter Race','gia'=>'295000','giamgia'=>'0','hinh'=>'nhot9.jpg','moi'=>rand(0,1) ,'chitiet'=>'Liqui Moly Scooter Race 10W40  là sản phẩm mang những đặc tính cao cấp nhất dành cho xe tay ga 4 thì hiện đại. Tính năng năng chống ma sát vượt trội của nhớt Liqui Moly 10W40 Scooter Race sẽ giúp động cơ ổn định trong suốt thời gian vận hành.'],
            ['id_danhmucsanpham'=>'1','ten'=>'Dầu Nhớt Xe Máy Tổng Hợp Wolver','gia'=>'140000','giamgia'=>'0','hinh'=>'nhot10.jpg','moi'=>rand(0,1) ,'chitiet'=>'Ngăn ngừa được hiện tượng trượt ly hợp ở thời điểm khởi động xe và khi sang số (đối với xe số và xe tay côn 4 thì). Bảo vệ, chống mài mòn, giúp kéo dài tuổi thọ động cơ một cách hoàn hảo dù động cơ luôn hoạt động tối đa công suất. Giảm nhiệt độ ma sát khi động cơ vận hành.'],
            //gương
            ['id_danhmucsanpham'=>'2','ten'=>'Gương gù chiếu hậu','gia'=>'129000','giamgia'=>'0','hinh'=>'guong1.jpg','moi'=>rand(0,1) ,'chitiet'=>'GƯƠNG GÙ THỜI TRANG là sản phẩm phụ kiện x máy siêu HOT hện nay. Kiểu dáng bắt mắt phù hợp với mọi loại xe hiện nay tạo phong cách cá tính cho chủ nhân.'],
            ['id_danhmucsanpham'=>'2','ten'=>'Gương chiếu hậu 5 cạnh','gia'=>'45000','giamgia'=>'39000','hinh'=>'guong2.jpg','moi'=>rand(0,1) ,'chitiet'=>'Đây là loại gương được thiết kế để cho phép người lái xe có thể quan sát phía sau, đảm bảo an toàn khi điều khiển.'],
            ['id_danhmucsanpham'=>'2','ten'=>'Kính Rizoma 5 cạnh - bạc','gia'=>'20000','giamgia'=>'150000','hinh'=>'guong3.jpg','moi'=>rand(0,1) ,'chitiet'=>'Sản phẩm là hàng chính hãngThương hiệu Rizoma là 1 thương hiệu rất nổi tiếng chuyên sản xuất phụ tùng xe đua và xe phân khối lớn.Sản phẩm bằng nhôm nguyên khối được gia công CNC rất sắc sảo.Sơn tĩnh điện giúp nước sơn bền màu và tránh tróc sơn khi va chạm.Thân kính rất chắc chắn, có thể xoay tùy ý thích người dùng.Mặt gươnglàm bằng kính lồi giúp quan sát tốt về đêm cũng như khi di chuyển trời mưa.'],
            ['id_danhmucsanpham'=>'2','ten'=>'Kính Elisse Rizoma','gia'=>'220000','giamgia'=>'0','hinh'=>'guong4.jpg','moi'=>rand(0,1) ,'chitiet'=>'Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hóa đơn VAT không được cấp trong trường hợp này.'],
            ['id_danhmucsanpham'=>'2','ten'=>'Kính Yaz loại tốt','gia'=>'70000','giamgia'=>'0','hinh'=>'guong5.jpg','moi'=>rand(0,1) ,'chitiet'=>'Bền đẹp, chắc chắn, nhìn rõ nét'],
            ['id_danhmucsanpham'=>'2','ten'=>'Cặp gương gù cán xoay CRG (Đen)','gia'=>'160000','giamgia'=>'127000','hinh'=>'guong6.jpg','moi'=>rand(0,1) ,'chitiet'=>'Gương chiếu hậu gù tròn gắn nhiều loại xe máy siêu đẹp, thiết kế đẹp mắt, sang trọng gắn được nhiều loại xe. Là phụ kiện không thể thiếu cho xe máy, moto của bạn, tháo lắp dễ dàng.'],
            ['id_danhmucsanpham'=>'2','ten'=>'Cặp gương gù cán xoay CRG (Xanh)','gia'=>'170000','giamgia'=>'0','hinh'=>'guong7.jpg','moi'=>rand(0,1) ,'chitiet'=>'Được làm từ nhôm cnc cao cấp, bề mặt gương phản chiếu tốt, trong sáng dễ quan sát. Đảm bảo an toàn cho bạn khi cần quan sát qua đường hoặc vượt tuyến.'],
            ['id_danhmucsanpham'=>'2','ten'=>'Cặp gương gù cán xoay CRG (Vàng)','gia'=>'180000','giamgia'=>'133000','hinh'=>'guong8.jpg','moi'=>rand(0,1) ,'chitiet'=>'Chất liệu: Nhôm CNC cao cấp, cứng cáp chịu lực tốt. Được sơn tỉnh điện nên màu đẹp bền không tróc.'],
            ['id_danhmucsanpham'=>'2','ten'=>'Cặp gương gù cán xoay CRG (Đỏ)','gia'=>'190000','giamgia'=>'0','hinh'=>'guong9.jpg','moi'=>rand(0,1) ,'chitiet'=>'Mặt kính dạng phẳng, kiểu hội tụ, phản chiếu hình ảnh nét, giúp nhìn rõ phía sau. Vị trí lắp đặt: ở đầu xe máy.'],
            ['id_danhmucsanpham'=>'2','ten'=>'Bộ Gương Xe Máy Xoay 360 Độ','gia'=>'135000','giamgia'=>'120000','hinh'=>'guong10.jpg','moi'=>rand(0,1) ,'chitiet'=>'Khung được làm bằng nhựa ABS và tay cầm được làm bằng hợp kim nhôm. Áp dụng gương siêu rõ, cung cấp rõ ràng hơn. Gương có thể xoay khoảng 180 ° và thanh gương có thể xoay 360 ° tự do. Hình dạng ngọn lửa độc đáo, vỏ sơn hoàn thiện.'],
            //nhông sên dĩa
            ['id_danhmucsanpham'=>'3','ten'=>'NSD Winner Sonic MC Racing','gia'=>'350000','giamgia'=>'0','hinh'=>'nsd1.jpg','moi'=>rand(0,1) ,'chitiet'=>'Được gia công sắc nét đến từng chi tiết , dĩa đen nhám bao đẹpSên tải 9ly tán đúc bao cứngTặng kèm 1 xịt dưỡng sên'],
            ['id_danhmucsanpham'=>'3','ten'=>'NSD Vàng DID cho Sirius','gia'=>'389000','giamgia'=>'220000','hinh'=>'nsd2.jpg','moi'=>rand(0,1) ,'chitiet'=>'Nhông sên dĩa Vàng DID cho Sirius xăng cơ độ bền cực cao, chắc chắn, khắc phục tình trạng hay bị giãn sên'],
            ['id_danhmucsanpham'=>'3','ten'=>'NSD REDLEO dành cho EXCITER','gia'=>'405000','giamgia'=>'325000','hinh'=>'nsd3.jpg','moi'=>rand(0,1) ,'chitiet'=>'Hàng chánh hiệu redleo sên vàng đĩa đen nổi bật, bền được khắng định bởi thương hiệu, tiêu chí ngon bổ rẻ nhưng phải đẹp, thời trang.'],
            ['id_danhmucsanpham'=>'3','ten'=>'NSD SIRIUS - Sên đen 10ly','gia'=>'340000','giamgia'=>'290000','hinh'=>'nsd4.jpg','moi'=>rand(0,1) ,'chitiet'=>'D.I.D H-DS (viết tắt của Hyper Durability Spec): xích siêu tải trọng có lá xích dày 2 mm và nhiệt luyện đặc biệt có khả năng chịu tải liên tục, bền bỉ, có tuổi thọ cao hơn 130% so với loại xích D.I.D 428H trước đây. '],
            ['id_danhmucsanpham'=>'3','ten'=>'NSD exciter 150 hàng Thái','gia'=>'410000','giamgia'=>'0','hinh'=>'nsd5.jpg','moi'=>rand(0,1) ,'chitiet'=>'Nhông sên dĩa EXCITER150-GH Thông số kĩ thuật Dĩa 42T Nhông 14T Sên 126L Sên nhông dĩa GHTHÁI LAN nổi tiếng là siêu bền.'],
            ['id_danhmucsanpham'=>'3','ten'=>'Bộ NSD SSS chính hãng cho Sirius','gia'=>'540000','giamgia'=>'0','hinh'=>'nsd6.jpg','moi'=>rand(0,1) ,'chitiet'=>'Bộ NSD SSS hàng chính hãng dành cho Sirius, Jupiter không Fi, được Malaysia sản xuất theo công nghệ của Nhật. Thương hiệu SSS này từ lâu đã được khách hàng tin dùng. Bộ nhông sên dĩa SSS cho Sirius, Jupiter không Fi làm bằng hợp kim thép vô cùng bền và dùng sên 9ly.'],
            ['id_danhmucsanpham'=>'3','ten'=>'NSD Thái cao cấp Winner 150','gia'=>'1226000','giamgia'=>'999000','hinh'=>'nsd7.jpg','moi'=>rand(0,1) ,'chitiet'=>'100% hàng nhập khẩu THÁI LAN chính ngạch. Sản phẩm có độ bền cao, vận hành êm ái. Sên ống đúc theo tiêu chuẩn thép Nhật Bản, chạy lâu tăng sên.'],
            ['id_danhmucsanpham'=>'3','ten'=>'Nhông Akei 14T cho Raider','gia'=>'50000','giamgia'=>'0','hinh'=>'nsd8.jpg','moi'=>rand(0,1) ,'chitiet'=>'Nhông Akei 14T chính hãng mới dành cho các dòng xe Raider, giá thành khá hợp lí và chất lượng được nhiều khách hàng đánh giá khá tốt. Nhông Akei 14T chính hãng sản xuất tại Thái Lan.'],
            ['id_danhmucsanpham'=>'3','ten'=>'Dĩa tải Akei 43T cho Sonic','gia'=>'150000','giamgia'=>'132000','hinh'=>'nsd9.jpg','moi'=>rand(0,1) ,'chitiet'=>'Dĩa tải Akei 43T dành cho Sonic, Winner 150, Winner X mẫu mới được nhiều anh em Biker ưa chuộng. Chất liệu cực bền, cứng cáp, thích hợp đi sên to. Dĩa Akei 43T chính hãng sản xuất tại Thái Lan.'],
            ['id_danhmucsanpham'=>'3','ten'=>'Nhông Recto 14 cho Exciter','gia'=>'67000','giamgia'=>'0','hinh'=>'nsd10.jpg','moi'=>rand(0,1) ,'chitiet'=>'Nhông Recto 14, 15T dành cho Exciter, Winner 150, Winner X. Nhông Recto chính hãng đang rất được ưa chuộng với chất lượng vô cùng đảm bảo, độ bền khá cao, phù hợp với các loại xe phổ thông công suất lớn. Nhông Recto hàng chính hãng Thái Lan.'],
            //vỏ
            ['id_danhmucsanpham'=>'4','ten'=>'Vỏ Xe Exciter, Winner Hãng DPLUS','gia'=>'550000','giamgia'=>'470000','hinh'=>'vo1.jpg','moi'=>rand(0,1) ,'chitiet'=>'Là Công ty đầu tiên sản xuất Lốp xe Máy trên dây chuyền sản xuất Lốp Ô Tô tiên tiến của DRC đạt các tiêu chuẩn Việt Nam và thế giới'],
            ['id_danhmucsanpham'=>'4','ten'=>'Lốp (vỏ) nhỏ size 60/90-17','gia'=>'285000','giamgia'=>'225000','hinh'=>'vo2.jpg','moi'=>rand(0,1) ,'chitiet'=>'Gai thể thao, phù hợp với các loại xe muốn sử dụng lốp (vỏ) nhỏ để giảm trọng lượng của xe, giúp tăng tốc độ của xe.- Đạt tiêu chuẩn Nhật: Jis K6366- Dòng lốp truyền thống được thiết kế theo kiểu gai khối tăng độ bám đường,sử dụng sử dụng nhiều cung đường trường, đường đất...'],
            ['id_danhmucsanpham'=>'4','ten'=>'Vỏ 60/90-17, 70-90-17','gia'=>'380000','giamgia'=>'0','hinh'=>'vo3.jpg','moi'=>rand(0,1) ,'chitiet'=>'vỏ dành cho các loại xe có ruột bánh 17 in.'],
            ['id_danhmucsanpham'=>'4','ten'=>'Combo 2 lốp trước sau xe 110cc','gia'=>'575000','giamgia'=>'525000','hinh'=>'vo4.jpg','moi'=>rand(0,1) ,'chitiet'=>'Phù hợp với các dòng xe như Future, Wave RS, RSX, 110, Jupiter, Sirius.- Đạt tiêu chuẩn Nhật: Jis K6366'],
            ['id_danhmucsanpham'=>'4','ten'=>'Combo lốp xe Pirelli 70/90-17','gia'=>'1200000','giamgia'=>'0','hinh'=>'vo5.jpg','moi'=>rand(0,1) ,'chitiet'=>'Vỏ xe Pirelli 70/90-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao.'],
            ['id_danhmucsanpham'=>'4','ten'=>'  ','gia'=>'980000','giamgia'=>'0','hinh'=>'vo6.jpg','moi'=>rand(0,1) ,'chitiet'=>'Metzeler 100/80-17, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. Giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. METZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy.'],
            ['id_danhmucsanpham'=>'4','ten'=>'Vỏ xe Aspira Sportivo 110/80-14','gia'=>'720000','giamgia'=>'630000','hinh'=>'vo7.jpg','moi'=>rand(0,1) ,'chitiet'=>'Vỏ xe Aspira Sportivo 110/80-14 gắn được cho xe NVX các loại hoặc bánh sau Vario, PCX mới, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.'],
            ['id_danhmucsanpham'=>'4','ten'=>'Vỏ Metzeler 70/90-14','gia'=>'450000','giamgia'=>'0','hinh'=>'vo8.jpg','moi'=>rand(0,1) ,'chitiet'=>'Vỏ xe Metzeler 70/90-14, với thiết kế hoàn toàn mới, kiểu dáng rất thể thao và là dòng cao cấp hơn nhiều so với các loại thông thường. METZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy, chất lượng đã được rất nhiều khách hàng tin dùng bởi thiết kế rất đẹp và độ bám đường cực chuẩn.'],
            ['id_danhmucsanpham'=>'4','ten'=>'Vỏ Maxxis 80/90-14 3D','gia'=>'365000','giamgia'=>'330000','hinh'=>'vo9.jpg','moi'=>rand(0,1) ,'chitiet'=>'Vỏ Maxxis 80/90-14 với gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. Vỏ Maxxis 80/90-14 gắn vừa cho Honda Click, AB, Vision, Mio, Luvias...'],
            ['id_danhmucsanpham'=>'4','ten'=>'Vỏ xe Aspira Terreno 130/70-17','gia'=>'895000','giamgia'=>'800000','hinh'=>'vo10.jpg','moi'=>rand(0,1) ,'chitiet'=>'Vỏ xe Aspira Terreno 130/70-17 gắn được cho xe côn tay như Exciter, Winner, CBR150, R15...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller.'],
            //pô
            ['id_danhmucsanpham'=>'5','ten'=>'Lon pô Leovince - Vindecal','gia'=>'750000','giamgia'=>'742000','hinh'=>'po1.jpg','moi'=>rand(0,1) ,'chitiet'=>'Chất liệu inox cực đẹp sắc sảo. Hàng nhập , hoàn hảo từ mối hàn tới ống tiêu. Âm thanh rất ấm nha. Giá trên bao gồm ống tiêu , tem , pat, lò xo, quan trọng nhất là cái lon pô nữa nhé AE.'],
            ['id_danhmucsanpham'=>'5','ten'=>'Pô xe máy dream - Vindecal','gia'=>'177000','giamgia'=>'166000','hinh'=>'po2.jpg','moi'=>rand(0,1) ,'chitiet'=>'An toàn khi sử dụng, cam xăng đi rất nhẹ xe thoáng máy. Lên sẵn cổ, Pô Dream móc cam xăng dành cho xe máy dream.'],
            ['id_danhmucsanpham'=>'5','ten'=>'PÔ PARK MÓC GẮN SIRIUS - Vindecal','gia'=>'289000','giamgia'=>'287000','hinh'=>'po3.jpg','moi'=>rand(0,1) ,'chitiet'=>'Pô Móc Sẳn cho dòng xe sirius thường tiếng pô cực đã. Cổ pô này làm băng chất liều inox có ưu điểm không pi ri sét những có nhược điểm tiếng thanh hơn..Đây Là Dòng Pô Móc Cho sirius thường Cho Ai Muốn Xe sirius thường Kêu Giọng 4 Road, Thoáng Máy Thì Nên Xài Loại Này. Để Cho Chạy Thoáng Xe Và Chạy Nhanh Hơn Nữa.'],
            ['id_danhmucsanpham'=>'5','ten'=>'Pô SONIC REDLEO','gia'=>'850000','giamgia'=>'570000','hinh'=>'po4.jpg','moi'=>rand(0,1) ,'chitiet'=>'là sản phẩm bán chạy nhất hiện nay bởi âm thanh kiểu dang va dộ bền cổ va vĩ pô xhat liêu inox bền bỉ'],
            ['id_danhmucsanpham'=>'5','ten'=>'Pô R9 Nhập Khẩu','gia'=>'850000','giamgia'=>'680000','hinh'=>'po5.jpg','moi'=>rand(0,1) ,'chitiet'=>'Cho Âm Thanh Ấm và đầy Uy Lực ở vòng tua cao. Chất Liệu INox 304 Nhập '],
            ['id_danhmucsanpham'=>'5','ten'=>'Cổ pô Winner-Exciter 150 Titan','gia'=>'220000','giamgia'=>'0','hinh'=>'po6.jpg','moi'=>rand(0,1) ,'chitiet'=>'Cổ ppo titan dành cho Exciter 150 và Winner 150. Bao rỉ sét. Càng chạy càng nóng càng đẹp.'],
            ['id_danhmucsanpham'=>'5','ten'=>'Pô UMA Racing-Ex150/Winner150','gia'=>'1770000','giamgia'=>'1530000','hinh'=>'po7.jpg','moi'=>rand(0,1) ,'chitiet'=>'Pô Uma cho âm thanh nổ hay hơn , pô nặng hơn so với pô zin. Pô được sơn đen, đặc biệt là logo làm 3D đẹp hơn bản cũ.'],
            ['id_danhmucsanpham'=>'5','ten'=>'Pô CBR Redleo gắn mọi loại xe','gia'=>'720000','giamgia'=>'650000','hinh'=>'po8.jpg','moi'=>rand(0,1) ,'chitiet'=>'Chuẩn - đẹp - âm thanh hay không khác gì hàng real nhé anh em.'],
            ['id_danhmucsanpham'=>'5','ten'=>'LON PÔ MẪU AK R1 CHO XE MÁY','gia'=>'1899000','giamgia'=>'1650000','hinh'=>'po9.jpg','moi'=>rand(0,1) ,'chitiet'=>'Lon pô mẫu AK R1 cho xe máy. An toàn, chất lượng. Sản phẩm dành cho bạn.'],
            ['id_danhmucsanpham'=>'5','ten'=>'Chụp đích Pô Carbon - Winner','gia'=>'98000','giamgia'=>'0','hinh'=>'po10.jpg','moi'=>rand(0,1) ,'chitiet'=>'Được làm từ nhựa ABS cao cấp, bền màu với thời gian, chịu được nhiệt và va đập tốt. Có cấu tạo với đường nét tinh tế, khít với pô nguyên bản. An toàn và có tính thẩm mỹ hơn các loại ốp pô bằng inox có thể gây chấn thương và bỏng cho người sử dụng vì độ sắc bén và hút nhiệt của kim loại.'],
            //phuộc
            ['id_danhmucsanpham'=>'6','ten'=>'Phuộc MC Racing V3','gia'=>'1200000','giamgia'=>'0','hinh'=>'phuoc1.jpg','moi'=>rand(0,1) ,'chitiet'=>'Phuộc v3 không bình dầu dành cho exciter 135 và 150Phuộc gia công đẹp chính xác lắp như zinDáng phuộc to ty phuộc 16mm bao cứng cápCó Rebound tăng chỉnh chân phuộc'],
            ['id_danhmucsanpham'=>'6','ten'=>'Phuộc Ohlins cho xe Winner','gia'=>'1185000','giamgia'=>'1175000','hinh'=>'phuoc2.jpg','moi'=>rand(0,1) ,'chitiet'=>'Phuộc Ohlins gắn cho winner và exciter các đời, với chất liệu được làm bằng hợp kim, lo xo lớn giảm dộ sàng lắc khi anh em lưu thông với tốc độ cao. '],
            ['id_danhmucsanpham'=>'6','ten'=>'Cặp phuộc Ohlins có bình dầu','gia'=>'1150000','giamgia'=>'0','hinh'=>'phuoc3.jpg','moi'=>rand(0,1) ,'chitiet'=>'Gắn vào như phuộc zin, không chế gì cả.'],
            ['id_danhmucsanpham'=>'6','ten'=>'Cặp phuộc sau Sum Racing','gia'=>'600000','giamgia'=>'365000','hinh'=>'phuoc4.jpg','moi'=>rand(0,1) ,'chitiet'=>'Hàng chất lượng, êm ái, mượt mà cho anh em phượt thỏa thích, màu sắc đa dạng sẽ tạo điểm nhấn cho xế yêu của bạn.'],
            ['id_danhmucsanpham'=>'6','ten'=>'Phuộc RCB cho Dream, Wave,...','gia'=>'650000','giamgia'=>'450000','hinh'=>'phuoc5.jpg','moi'=>rand(0,1) ,'chitiet'=>'Hàng chất lượng, êm ái, mượt mà cho anh em phượt thỏa thích.'],
            ['id_danhmucsanpham'=>'6','ten'=>'Móc Khóa Phuộc Xe (4 màu)','gia'=>'39000','giamgia'=>'32000','hinh'=>'phuoc6.jpg','moi'=>rand(0,1) ,'chitiet'=>'Móc khóa cao cấp, gọn nhẹ, tiện lợi, dễ sử dụng. Sành điệu và đầy cá tính nhưng không thiếu phần sang trọng. Hợp kim chống gỉ giúp bạn hoàn toàn yên tâm khi sử dụng trong suốt thời gian dài.'],
            ['id_danhmucsanpham'=>'6','ten'=>'Phuộc sau Vario bình dầu dưới','gia'=>'689000','giamgia'=>'0','hinh'=>'phuoc7.jpg','moi'=>rand(0,1) ,'chitiet'=>'Phuộc sau dành cho xe Vario135 và Vario150 - bình dầu dưới. An toàn, chất lượng, sản phẩm dành cho bạn.'],
            ['id_danhmucsanpham'=>'6','ten'=>'Phuộc Giảm Xóc Zd Racing','gia'=>'348000','giamgia'=>'322000','hinh'=>'phuoc8.jpg','moi'=>rand(0,1) ,'chitiet'=>'Thiết kế hấp dẫn: Nó có thể cung cấp cho bạn một trải nghiệm tuyệt vời. Nhẹ, tay nghề tinh tế và hiệu suất cao. Nó được làm bằng hợp kim nhôm, có thể hỗ trợ tuổi thọ dài. Bộ giảm xóc sẽ làm giảm đáng kể độ rung và cải thiện độ ổn định.'],
            ['id_danhmucsanpham'=>'6','ten'=>'Bộ Phuộc lò xo 2 tầng cao cấp','gia'=>'370000','giamgia'=>'334000','hinh'=>'phuoc9.jpg','moi'=>rand(0,1) ,'chitiet'=>'Có thiết kế chắc chán, lắp ráp dễ dàng tương thích với các chi tiết của xe. Kiểu dáng hiện đại cùng màu sắc tươi mới sẽ là điểm nhấn cho xe. Chịu lực tốt khi xe chạy trên các cung đường xấu. Sản phẩm được sơn tỉnh điện nên rất đẹp và bền màu, khó tróc. Dùng công nghệ CNC cắt nên cho độ chính xác và chi tiết trên sản phẩm rất sắc sảo và đẹp mắt.'],
            ['id_danhmucsanpham'=>'6','ten'=>'Phuộc trước xe WINNER 150','gia'=>'999000','giamgia'=>'0','hinh'=>'phuoc10.jpg','moi'=>rand(0,1) ,'chitiet'=>'Cặp phuộc trước dành cho xe Winner 150. An toàn, chất lượng, sản phẩm dành cho bạn.'],
            //đèn
            ['id_danhmucsanpham'=>'7','ten'=>'Đèn Led 2 tầng chính hãng ZHIPAT','gia'=>'1430000','giamgia'=>'0','hinh'=>'den1.jpg','moi'=>rand(0,1) ,'chitiet'=>'Đèn pha LED 2 tầng #ZHI.PAT tương tự như đèn pha zin của Exciter 150. Nó chỉ khác nhau ở phần bên trong, thay vì sử dụng bóng halogen thì ZhiPat sử dụng đèn LED được thiết kế tinh xảo, bo viền các góc cạnh cực đẹp.'],
            ['id_danhmucsanpham'=>'7','ten'=>'[12V-85V-SIÊU SÁNG] Đèn trợ sáng','gia'=>'200000','giamgia'=>'137000','hinh'=>'den2.jpg','moi'=>rand(0,1) ,'chitiet'=>'3 chế độ sáng, sáng mờ, sáng mạnh, pasing (chỉ cần bật tắt công tắc đèn sẽ tự chuyển chế độ)'],
            ['id_danhmucsanpham'=>'7','ten'=>'BỘ ĐÈN PHA LED CHO XE DREAM','gia'=>'169000','giamgia'=>'0','hinh'=>'den3.jpg','moi'=>rand(0,1) ,'chitiet'=>'Dòng sản phẩm này rất hữu ích cho xe đream nhé , tuy không thuộc phân khúc cao cấp nhưng dòng sản phẩm này shop bán rất chạy trên nhiều trang bán hàng và nhận về hơn 90% đánh giá tích cực .'],
            ['id_danhmucsanpham'=>'7','ten'=>'Đèn Led 2 Tầng Exciter 150','gia'=>'1550000','giamgia'=>'1445000','hinh'=>'den4.jpg','moi'=>rand(0,1) ,'chitiet'=>'Được thiết kế chóa đèn, bóng led hướng xuống, ánh sáng được gom và tập trung hơn so với cũ. Và đặc biệt, anh sáng leb pha thêm ánh sáng vàng tăng thêm “ĐỘ BÁM ĐƯỜNG MẠNH” để phù hợp đi trên những cung đường tối, mưa, sương mù,…'],
            ['id_danhmucsanpham'=>'7','ten'=>'Mắt cú WINNER 150','gia'=>'539000','giamgia'=>'0','hinh'=>'den5.jpg','moi'=>rand(0,1) ,'chitiet'=>'Đèn mắt cú tăng tính "TRẺ TRÂU" cho bạn :))))'],
            ['id_danhmucsanpham'=>'7','ten'=>'Cặp Đèn Xinhan Led L14','gia'=>'77000','giamgia'=>'62000','hinh'=>'den6.jpg','moi'=>rand(0,1) ,'chitiet'=>'Cặp Đèn Xinhan Led L14 Gắn Vario và mọi loại xe máy. Ánh sáng vàng và ánh sáng mũi tên đỏ hoặc xanh. Sản phẩm trang trí dành cho mọi loại xe. An toàn khi sử dụng.'],
            ['id_danhmucsanpham'=>'7','ten'=>'Bộ Đèn Led XiNhan 2 tầng - Ex150','gia'=>'120000','giamgia'=>'111000','hinh'=>'den7.jpg','moi'=>rand(0,1) ,'chitiet'=>'Thiết kế khá gọn gàng. Đảm bảo an toàn khi lưu thông vì ánh sáng rõ phát ra từ 2 phía dưới và bên hông. Gắn được nhiều loại xe.'],
            ['id_danhmucsanpham'=>'7','ten'=>' Đèn LED trợ sáng C6','gia'=>'130000','giamgia'=>'0','hinh'=>'den8.jpg','moi'=>rand(0,1) ,'chitiet'=>'Gắn được mọi loại xe PKL như Z1000, Z800, CB1000, R1, R6, Ducati, KTM, FZ150i, MSX125, Ex150, CBR150, AB, Nouvo. Kiểu dáng nhỏ gọn, dễ lắp đặt , tất cả mọi nơi chủ yếu là kính chiếu hậu, phuộc trước, chắn bùn trước. Sản phẩm bao gồm: đèn led trợ sáng C6, pass, ốc.'],
            ['id_danhmucsanpham'=>'7','ten'=>'Đèn Pha Led L6X 40W trợ sáng','gia'=>'265000','giamgia'=>'0','hinh'=>'den9.jpg','moi'=>rand(0,1) ,'chitiet'=>'Tên sản phẩm: đèn Led L6X. Công suất: 40W. Nhiệt màu: 6.000 Kevin - Ánh sáng trắng, độ sáng: 4.000 lumens. Kiểu dáng hầm hố với 6 led siêu sáng. Kính bằng thủy tinh trong suốt.'],
            ['id_danhmucsanpham'=>'7','ten'=>'Đèn Pha LED Siêu Sáng','gia'=>'122000','giamgia'=>'102000','hinh'=>'den10.jpg','moi'=>rand(0,1) ,'chitiet'=>'Thông số kỹ thuật:  Màu sáng: trắng. Chất liệu sản phẩm: hợp kim nhôm. Số hạt đèn LED: 12. Chùm sáng thấp: sáng một bên, chùm sáng cao: hai mặt sáng
            Thông số kỹ thuật của đèn: BA20D H6. Điện áp làm việc: DC9-85V. Công suất: 36W.'],
        ]);
    }
}