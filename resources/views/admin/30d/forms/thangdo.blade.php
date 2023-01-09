@extends('admin.admin_master')
{{-- Nội dung page --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            {{-- Forms --}}
            <div class="card" id="form">
                <div id="surveyElement"></div>
                <div id="surveyResult"></div>
            </div>
            {{-- Thông báo --}}

        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endsection
{{-- JS --}}
@section('script')
<script>
Survey.StylesManager.applyTheme("modern");
var idForm = {
    thangdo: 1
}
var json =
{
    "locale": "vi",
    "title": "Thang đo năng suất",
    "description": "Giúp bạn đánh giá năng lực cá nhân đầu khoá & cuối khoá",
    "logo": {
        "vi": location.origin + "/backend/assets/images/favicon/logo-icon.png"
    },
    "logoWidth": "100px",
    "logoHeight": "100px",
    "logoPosition": "top",

    "pages":
    [
        {
        "name":"page1",
        "elements":
        [
            {
            "type": "html",
            "html": `<div>
                        <h4>Cách làm thang đo năng suất</h4>
                        <h6>Bước 1: Chấm Điểm Từng Câu</h6>
                        <div>- Chọn đáp án gần nhất với năng lực của bạn.
                            <br>- Lưu ý 1: bài tập này không quan trọng điểm CAO hay THẤP. (quan trọng nhất là bạn nắm được mình đang ở đâu)
                            <br>- Hãy đọc kỹ - suy ngẫm thật kỹ - trung thực và chọn đáp án.
                            <br>- Lưu ý 2: Toàn bộ đáp án bạn chọn sẽ chính xác nếu phải lặp đi lặp lại trong quá khứ đủ nhiều + được đồng đội ghi nhận. Hãy biết nghi ngờ sự TỰ TI hoặc ẢO TƯỞNG của chính mình.
                            <br>
                        </div>
                        <h6>Bước 2: Nhận kết quả sau khi điền xong </h6>
                        <div>Điểm tối đa là <b>100</b> điểm:
                            <br>- Nếu bạn từ 0đ-30đ : NĂNG LỰC LÀM VIỆC YẾU, CÒN PHẢI NỖ LỰC RẤT NHIỀU
                            <br>- Nếu điểm của bạn từ 30đ-50đ: NĂNG LỰC LÀM VIỆC TRUNG BÌNH KHÁ, CẦN RÈN LUYỆN NHIỀU
                            <br>- Nếu điểm của bạn từ 50đ-80đ : NĂNG LỰC LÀM VIỆC TỐT, CẦN PHÁT HUY MẠNH HƠN
                            <br>- Nếu điểm của bạn bạn từ 80đ-100đ: NĂNG LỰC CỦA CHUYÊN GIA <br>
                        </div>
                    </div>`
            }
        ]
        }, {
        "name":"page2",
        "elements":
        [
            {
                "type": "radiogroup",
                "name": "td-cau1",
                "title": "Năng lực của sự chính trực - trung thực.",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Sống trong môi trường nhiều cạnh tranh nên hay đề phòng - thu mình - có thói quen tạo vỏ bọc.",
                        },
                        {
                        value: 3,
                        text: "Cảm thấy bản thân còn nói dối - hành động thiếu trung thực nhiều. Biết rằng không tốt - nhưng chưa sửa được.",
                        },
                        {
                        value: 5,
                        text: "Luôn cố gắng và hướng đến sự Trung Thực - Chân Thành - Chính Trực. Nhưng đôi khi còn nói dối do NHÁT SỢ, THIẾU AN TOÀN hoặc KHÔNG TÌM RA CÁCH NÓI KHÉO LÉO.",
                        },
                        {
                        value: 8,
                        text: "Lời nói và suy nghĩ đồng nhất. Không còn nói dối. Dám thể hiện điểm yếu kém của mình trước khách hàng/cấp dưới/cấp trên. Được mọi người đánh giá là TRUNG THỰC - CHÂN THÀNH.",
                        },
                        {
                        value: 10,
                        text:  "Lời nói và suy nghĩ đồng nhất. Không còn nói dối. Dám thể hiện điểm yếu kém của mình trước khách hàng/cấp dưới/cấp trên. Được mọi người đánh giá là TRUNG THỰC - CHÂN THÀNH. Có năng lực nhìn sâu vào bên trong để nhận ra những suy nghĩ bất thiện rất nhỏ của mình."
                        }
                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau2",
                "title": "Năng lực nhìn nhận - chấp nhận và sửa lỗi chính mình.",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Dễ giận giữ, khó chịu với ngoại cảnh. Cảm thấy bản thân là nạn nhân của mọi thứ.",
                        },
                        {
                        value: 3,
                        text: "Còn đổ tại hoàn cảnh, tuy nhiên nhận ra mình còn yếu kém. Biết nhận trách nhiệm những gì mình làm.",
                        },
                        {
                        value: 5,
                        text: "Thường xuyên kaizen, soi lỗi chính mình. Duy trì trong nhiều tháng. Tiến bộ tốt và đều đặn.",
                        },
                        {
                        value: 8,
                        text: "Luôn khiêm hạ, nhìn nhận lỗi từ chính mình. Hầu như không phán xét người khác. Soi lỗi bản thân, kaizen đều đặn hàng ngày và duy trì trong nhiều năm. Cảm thấy bản thân tiến bộ rất nhanh.",
                        },
                        {
                        value: 10,
                        text: "Luôn khiêm hạ, nhìn nhận lỗi từ chính mình. Hầu như không phán xét người khác. Soi lỗi bản thân, kaizen đều đặn hàng ngày và duy trì trong nhiều năm. Cảm thấy bản thân tiến bộ rất nhanh. Có năng lực hướng dẫn đội ngũ KAIZEN."
                        }

                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau3",
                "title": "Năng lực vượt khó - vượt ngưỡng - nâng chuẩn.",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Tính cách nhút nhát. Sợ chịu rủi ro. Không thích thay đổi. Thường nhìn vào mặt tiêu cực vấn đề.",
                        },
                        {
                        value: 3,
                        text: "Xu hướng ổn định. Ít chủ động tìm tòi, học tập cái mới, thử sai.",
                        },
                        {
                        value: 5,
                        text: "Có thói quen học tập - cập nhật cái mới - cải tiến nên biết nhiều thứ mới lạ.",
                        },
                        {
                        value: 8,
                        text: "Đầu tư nhiều cho học tập, nghiên cứu nghiêm túc. Sẵn sàng chịu rủi ro và thử nghiệm để phát triển bản thân và đội ngũ.",
                        },
                        {
                        value: 10,
                        text:  "Đầu tư nhiều cho học tập, nghiên cứu nghiêm túc. Sẵn sàng chịu rủi ro và thử nghiệm để phát triển bản thân và đội ngũ + Có ước mơ đẹp và ý nghĩa mặc dù còn nhiều khó khăn và thu hút được những người đồng đội cùng xây dựng ước mơ đó."
                        }
                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau4",
                "title": "Năng lực Lập Kế Hoạch",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Hầu như làm việc không có kế hoạch. Làm ngẫu hứng.",
                        },
                        {
                        value: 3,
                        text: "Có LKH nhưng còn nhiều sai sót và lúng túng.",
                        },
                        {
                        value: 5,
                        text: "Nắm chắc lý thuyết, LKH hàng ngày, biết sắp xếp mức độ ưu tiên công việc.",
                        },
                        {
                        value: 8,
                        text: "Thành thạo việc Quan Sát - Phân Tích - Đúc Kết ra Tiêu Điểm Quan Trọng Nhất. Có thói quen Lập Kế Hoạch hàng ngày.",
                        },
                        {
                        value: 10,
                        text:  "Thành thạo việc Quan Sát - Phân Tích - Đúc Kết ra Tiêu Điểm Quan Trọng Nhất. Có thói quen Lập Kế Hoạch hàng ngày + Có năng lực định hướng chiến lược cho đội ngũ và dẫn dắt đội ngũ đồng lòng theo định hướng đó."
                        }

                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau5",
                "title": "Lựa Chọn Công Việc Đúng Với Nhân Duyên",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Đang lạc lối vì công việc bấp bênh - không rõ ràng.",
                        },
                        {
                        value: 3,
                        text: "Đang làm việc nhưng không có quá nhiều cảm hứng. Không thấy ý nghĩa ẩn sau giờ đi làm.",
                        },
                        {
                        value: 5,
                        text: "Đang làm công việc đúng SỞ TRƯỜNG + ĐAM MÊ nhưng môi trường chưa phát huy được hết.",
                        },
                        {
                        value: 8,
                        text: "Đang làm công việc SỞ TRƯỜNG + ĐAM MÊ. Môi trường làm việc giúp bản thân phát huy và phát triển không ngừng.",
                        },
                        {
                        value: 10,
                        text:   "Đang làm công việc SỞ TRƯỜNG + ĐAM MÊ. Môi trường làm việc giúp bản thân phát huy và phát triển không ngừng + Có năng lực hướng dẫn, sắp xếp đội ngũ đạt 8 điểm.",
                        }

                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau6",
                "title": "Lựa Chọn Môi Trường Sống Ba Báu Vật",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Sống trong môi trường 3 độc (Những lời dạy tiêu cực - Nhóm bạn ăn chơi hưởng thụ lôi kéo - Follow những kênh thông tin giết thời gian).",
                        },
                        {
                        value: 3,
                        text:  "Chỉ có một mình và ít kết nối với môi trường (Không follow vị thầy nào - Ít bạn bè - Đọc sách theo sở thích).",
                        },
                        {
                        value: 5,
                        text: "Đã chọn cho mình một môi trường tốt - giúp bản thân phát triển (Có những Mentor giỏi - Nhóm bạn cùng nhau phấn đấu - Những quyển sách hay).",
                        },
                        {
                        value: 8,
                        text: "Môi trường 3 báu vật (Gần gũi bậc thầy Tâm Thức - Có Mentor sát sao chỉ dẫn - Có nhóm bạn tốt cùng chí hướng, cùng rèn luyện - Cùng nhau đọc và thực hành những quyển sách tinh hoa).",
                        },
                        {
                        value: 10,
                        text:  "Môi trường 3 báu vật (Gần gũi bậc thầy Tâm Thức - Có Mentor sát sao chỉ dẫn - Có nhóm bạn tốt cùng chí hướng, cùng rèn luyện - Cùng nhau đọc và thực hành những quyển sách tinh hoa) + Là thủ lĩnh xây dựng môi trường tốt cho gia đình - tổ chức - xã hội."
                        }


                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau7",
                "title": "Năng lực Tập Trung Làm Việc",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Không thể tập trung nổi, ngồi làm việc tâm bị nhảy lung tung, luôn bị sao nhãng.",
                        },
                        {
                        value: 3,
                        text: "Thỉnh thoảng có những giây phút tập trung tốt, nhưng chưa nhiều. Vẫn bị ngoại cảnh và cảm xúc lôi đi nhiều.",
                        },
                        {
                        value: 5,
                        text: "Năng lực tập trung tốt, chỉ bị ảnh hưởng bởi ngoại cảnh mạnh và cảm xúc mạnh.",
                        },
                        {
                        value: 8,
                        text: "Có thể tập trung trong thời gian dài, ít bị ngoại cảnh và cảm xúc chi phối.",
                        },
                        {
                        value: 10,
                        text:  "Vừa tập trung cao độ trong thời gian dài vừa có sự quan sát, thư giãn, thả lỏng. Không còn bị ngoại cảnh và cảm xúc chi phối."
                        }

                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau8",
                "title": "Kỷ luật với công việc",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Không thể tập trung nổi, ngồi làm việc tâm bị nhảy lung tung, luôn bị sao nhãng.",
                        },
                        {
                        value: 3,
                        text: "Kỷ luật còn yếu, có cố gắng nhưng chưa rèn luyện được thói quen đến nơi đến chốn.",
                        },
                        {
                        value: 5,
                        text: "Kỷ luật khá tốt, đang hình thành những thói quen tốt, sẵn sàng áp suất khi cần (12h-16h/ngày, liên tục 7 ngày).",
                        },
                        {
                        value: 8,
                        text: "Tinh thần kỷ luật mạnh mẽ, có những thói quen tốt duy trì nhiều tháng, sẵn sàng áp suất khi cần (12h - 16h/ngày, liên tục 15 ngày).",
                        },
                        {
                        value: 10,
                        text:   "Tinh thần kỷ luật mạnh mẽ, có những thói quen tốt duy trì nhiều tháng, sẵn sàng áp suất khi cần (12h - 16h/ngày, liên tục 15 ngày) + Có năng lực đào tạo và setup kỷ luật cho đội ngũ."
                        }

                    ],
                "isRequired": true
            }
        ]
        }, {
        "name": "page3",
        "elements":
        [
            {
                "type": "radiogroup",
                "name": "td-cau9",
                "title": "Chất lượng công việc",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Làm việc thiếu chính xác, sai sót thường xuyên, thiếu cẩn thận. Làm việc A hay phát sinh việc B.",
                        },
                        {
                        value: 3,
                        text: "Hiệu quả không đều, cần sự kiểm tra thường xuyên. Thỉnh thoảng làm việc A phát sinh việc B.",
                        },
                        {
                        value: 5,
                        text: "Làm việc khá chính xác, khá cẩn thận, ít sai sót.",
                        },
                        {
                        value: 8,
                        text:  "Đã làm tốt: chính xác, cẩn thận, kỹ lưỡng. Khiến đồng đội hoàn toàn yên tâm.",
                        },
                        {
                        value: 10,
                        text:  "Công việc chính xác, hiệu quả cao. Luôn tự kiểm tra lại kết quả công việc. Thường xuyên kiểm tra, hướng dẫn lại đội ngũ. Có xu hướng tạo ra các tác phẩm khiến khách hàng, đồng đội thán phục."
                        }

                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau10",
                "title": "Thời gian làm việc",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Thời gian làm ít, và không hiệu quả.",
                        },
                        {
                        value: 3,
                        text: "Thời gian làm nhiều, không hiệu quả.",
                        },
                        {
                        value: 5,
                        text: "Thời gian làm nhiều, hiệu quả tốt.",
                        },
                        {
                        value: 8,
                        text: "Thời gian làm ít, nhưng hiệu quả vẫn tốt.",
                        },
                        {
                        value: 10,
                        text:   "Công việc - Cuộc sống hòa quyện làm một không tách rời. 24h/ngày đều ý nghĩa và cống hiến."
                        }


                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau11",
                "title": "Kỹ năng chuyên môn",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Không có kiến thức và kỹ năng chuyên môn ở công việc đang làm.",
                        },
                        {
                        value: 3,
                        text: "Đã tự học được một thời gian, có kiến thức và kỹ năng chuyên môn cơ bản.",
                        },
                        {
                        value: 5,
                        text: "Được đào tạo bài bản hoặc đã tự học ở mức khá, tự tin trong chuyên môn của mình.",
                        },
                        {
                        value: 8,
                        text: "Được đào tạo bài bản hoặc đã tự học ở mức giỏi, rất tự tin trong chuyên môn của mình, có thể đào tạo lại đội ngũ.",
                        },
                        {
                        value: 10,
                        text: "Được đánh giá là chuyên gia top đầu trong lĩnh vực. Có tầm ảnh hưởng vượt ra khỏi tổ chức - vươn đến cộng đồng bên ngoài."
                        }

                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau12",
                "title": "Năng Lực Làm Việc Nhóm - Xây Dựng Đội Ngũ",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Khi làm việc nhóm ở top giữa đổ xuống.",
                        },
                        {
                        value: 3,
                        text:  "Giỏi chuyên môn nhưng còn lúng túng về việc phối hợp nhóm. Làm việc cá nhân tốt hơn là phối hợp. Khi làm nhóm chủ yếu sẽ cân nhiều việc.",
                        },
                        {
                        value: 5,
                        text: "Có năng lực điều phối nhóm nhỏ (5-10 người) cùng làm việc và hoàn thành mục tiêu.",
                        },
                        {
                        value: 8,
                        text:  "Là thủ lĩnh tinh thần nhiều kinh nghiệm chinh chiến. Đã và đang dẫn dắt đội ngũ phối hợp tạo ra những kết quả đáng tự hào.",
                        },
                        {
                        value: 10,
                        text:  "Là thủ lĩnh tinh thần nhiều kinh nghiệm chinh chiến. Đã và đang dẫn dắt đội ngũ phối hợp tạo ra những kết quả đáng tự hào + Có năng lực đào tạo ra các THỦ LĨNH - LEADER kế thừa mình."
                        }

                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau13",
                "title": "Các Leader/Chuyên Gia/Số Đông đánh giá gì về bạn?",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Các Leader/Chuyên Gia/Số Đông thường xuyên nhắc nhở, đánh giá thấp, nhưng chưa cải thiện được nhiều.",
                        },
                        {
                        value: 3,
                        text: "Các Leader/Chuyên Gia/Số Đông còn phải nhắc nhở, đánh giá trung bình nhưng đang dần cải thiện tốt lên.",
                        },
                        {
                        value: 5,
                        text: "Được các Leader/Chuyên Gia/Số Đông đánh giá có tiềm năng phát triển, đôi khi tạo ra những kết quả tốt nhưng chưa thường xuyên và đang tiếp tục nỗ lực không ngừng.",
                        },
                        {
                        value: 8,
                        text: "Được các Leader/Chuyên Gia/Số Đông đánh giá rất cao và được đề xuất nắm giữ những vai trò quan trọng.",
                        },
                        {
                        value: 10,
                        text: "Được các Leader/Chuyên Gia/Số Đông đánh giá rất cao và được đề xuất nắm giữ những vai trò quan trọng + Có năng lực thu hút, nhìn nhận và phát triển người khác lên 8 điểm."
                        }

                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau14",
                "title": "Sức khỏe của thân",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Sức khỏe rất tệ và mắc nhiều bệnh.",
                        },
                        {
                        value: 3,
                        text: "Sức khỏe yếu, cảm thấy bản thân ì ạch, trì trệ.",
                        },
                        {
                        value: 5,
                        text: "Sức khỏe mức khá, đôi khi luyện tập thể thao nhưng làm việc thỉnh thoảng bị mệt.",
                        },
                        {
                        value: 8,
                        text: "Sức khỏe bền bỉ, thường xuyên luyện tập thể thao, ăn uống và sinh hoạt lành mạnh. Hầu như tràn đầy năng lượng.",
                        },
                        {
                        value: 10,
                        text:  "Sức khỏe bền bỉ, là dân thể thao, chịu được khắc nghiệt của thời tiết, áp lực công việc tuyệt đối."
                        }

                    ],
                "isRequired": true
            },
            {
                "type": "radiogroup",
                "name": "td-cau15",
                "title": "Sức khỏe tinh thần",
                "choices":
                    [
                        {
                        value: 0,
                        text: "Gặp vấn đề về tinh thần, nỗi đau trong cảm xúc và sợ hãi trước ngoại cảnh.",
                        },
                        {
                        value: 3,
                        text: "Tinh thần lúc hăng máu, lúc tụt cảm xúc. Hay bị ngoại cảnh tác động. Không làm chủ được bản thân.",
                        },
                        {
                        value: 5,
                        text: "Tinh thần tốt và tích cực. Làm chủ được Hành Động của bản thân. Nhưng thỉnh thoảng vẫn bị ngoại cảnh làm nao núng.",
                        },
                        {
                        value: 8,
                        text: "Tinh thần chiến binh mạnh mẽ. Luôn làm chủ được Ý Nghĩ - Lời Nói - Hành Động của bản thân. Không còn bị thất bại/lời nói/ngoại cảnh tác động. Là chỗ dựa tinh thần cho những người xung quanh.",
                        },
                        {
                        value: 10,
                        text:  "Tinh thần chiến binh mạnh mẽ. Luôn làm chủ được Ý Nghĩ - Lời Nói - Hành Động của bản thân. Không còn bị thất bại/lời nói/ngoại cảnh tác động. Là chỗ dựa tinh thần cho những người xung quanh + hiểu sâu sắc nguyên lý cốt lõi và cách rèn luyện tinh thần để chia sẻ, đào tạo cho đội ngũ."
                        }

                    ],
                "isRequired": true
            },
        ]
        }
    ],
    "questionErrorLocation": "bottom",
    // "goNextPageAutomatic": false,
    "startSurveyText": "Bắt Đầu",
    "pagePrevText": "Trước",
    "pageNextText": "Tiếp",
    "completeText": "Gửi",
    "previewText": "Xem Trước",
    "editText": "Sửa",
    "firstPageIsStarted": true,
    "calculatedValues":
    [
        {
        "name": "td-ketqua",
        "expression": "lamTron(sum({td-cau15} + {td-cau14} + {td-cau13} + {td-cau12} + {td-cau11} + {td-cau10} + {td-cau9} + {td-cau8} + {td-cau7} + {td-cau6} + {td-cau5} + {td-cau4} + {td-cau3} + {td-cau2} + {td-cau1})/15*10)",
        "includeIntoResult": true

        }
    ],

    "completedHtml":
    `<div>
        <h4>Kết quả thang đo năng suất của bạn là </h4>
        <h1><b>{td-ketqua} điểm</b></h1>
        <div class="text-success" id="completedHtml"></div>
    </div>`
};

window.survey = new Survey.Model(json);
survey.onComplete.add(function (sender) {
    var responseJson =  sender.data;
    submitFromToUsersCourseProductivity(idForm.thangdo, responseJson); //hàm trong asset->main.js
});

$("#surveyElement").Survey({model: survey});


// Lưu dữ liệu tạm thời vào biến storageName có tên là survey_patient_history
saveResultToLocalStorage(idForm.thangdo);

function submitFromToUsersCourseProductivity(id, responseJson){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
        type: 'POST',
        url: "/thangdosubmit",
        data: {idForm: id, response: responseJson},
        // dataType: "json",
        success: function (response) {
            console.log(response);
            $('#completedHtml').html('OK');
        }
    });
}
function saveResultToLocalStorage(storageName){
    function saveSurveyData(survey) {
      var data = survey.data;
      data.pageNo = survey.currentPageNo;
      window.localStorage.setItem(storageName, JSON.stringify(data));
    }
    survey.onPartialSend.add(function (sender) {
      saveSurveyData(sender);
    });
    survey.onComplete.add(function (sender, options) {
      saveSurveyData(sender);
    });
    survey.sendResultOnPageNext = true;
    var prevData = window.localStorage.getItem(storageName) || null;
    if (prevData) {
      var data = JSON.parse(prevData);
      survey.data = data;
      if (data.pageNo) {
        survey.currentPageNo = data.pageNo;
      }
    }
}
</script>
@endsection
