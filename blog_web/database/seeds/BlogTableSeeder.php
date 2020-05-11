<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Blog();
        $post->title = "Sau 24 giờ, hơn 4 nghìn người trên thế giới chết do COVID-19, Việt Nam không có ca mắc mới";
        $post->subtitle = "Bộ Y tế cho biết, đến 6h ngày 11/5, thế giới đã ghi nhận 4.174.538 ca mắc COVID-19 còn tại Việt Nam số ca mắc vẫn là 288.";
        $post->user_id = "1";
        $post->content = "Theo Bộ Y tế, tính từ 6h ngày 16/4 đến 6h ngày 11/5, đã 25 ngày Việt Nam không có ca lây nhiễm trong cộng đồng.

Tính đến 6h ngày 11/5, Việt Nam có tổng cộng 148 ca nhiễm nhập cảnh được cách ly ngay.

Sau 24 giờ, hơn 4 nghìn người trên thế giới chết do COVID-19, Việt Nam không có ca mắc mới - 1

Về số người cách ly, tổng số người tiếp xúc gần và nhập cảnh từ vùng dịch đang được theo dõi sức khỏe (cách ly): 25.361, trong đó:

- Cách ly tập trung tại bệnh viện: 373

- Cách ly tập trung tại cơ sở khác: 11.181

- Cách ly tại nhà, nơi lưu trú: 13.807

Sau 24 giờ, hơn 4 nghìn người trên thế giới chết do COVID-19, Việt Nam không có ca mắc mới - 2

Về tình hình điều trị, theo báo cáo của Tiểu ban Điều trị Ban chỉ đạo Quốc gia phòng, chống dịch COVID-19:

- Số ca âm tính lần 1 với SARS-CoV-2: 6 ca.

- Số ca âm tính lần 2 trở lên với SARS-CoV-2: 14 ca.

- Số ca dương tính với SARS-CoV-2: 27 ca.

- Số ca khỏi bệnh: 241 ca.

Về tình hình COVID-19 trên thế giới, Bộ Y tế cho biết, đến 6h ngày 11/5, thế giới ghi nhận 4.174.538 ca mắc trong đó có 283.596 ca tử vong.

Trước đó, lúc 6h ngày 10/5, thế giới ghi nhận 4.087.387 ca mắc trong đó có 279.545 ca tử vong.

Như vậy, sau một ngày số ca tử vong trên thế giới tăng 4.051 ca.

Bộ Y tế khuyến cáo về việc cách ly, theo dõi sức khỏe trong phòng chống COVID-19:

- Đối với những người tiếp xúc gần với bệnh nhân dương tính với COVID-19: Phải cách ly ngay tại cơ sở y tế trong vòng 14 ngày, đồng thời lấy mẫu bệnh phẩm để xét nghiệm.

- Đối với người tiếp xúc với người tiếp xúc gần với bệnh nhân dương tính với COVID-19: Cách ly, theo dõi sức khỏe tại nhà, nơi lưu trú, cư trú trong vòng 14 ngày và thông báo với chính quyền cơ sở (phường, xã, thị trấn) và phải theo dõi chặt chẽ tình hình sức khỏe. Nếu thấy có biểu hiện sốt, ho, hắt hơi, sổ mũi, mệt mỏi, ớn lạnh hoặc khó thở thì lập tức cho cách ly ngay tại cơ sở y tế và lấy mẫu bệnh phẩm để xét nghiệm.

- Thường xuyên đeo khẩu trang, che miệng khi ho, hắt hơi.

- Rửa tay bằng xà phòng liên tục để tránh nguy cơ lây truyền bệnh cho những người khác.

- Chia sẻ lịch trình di chuyển của bản thân với nhân viên y tế.

- Gọi ngay đến đường dây nóng thông báo thông tin: 19003228 và 19009095.";
        $post->save();
    }
}
