<!DOCTYPE html>
<html lang="en">
<head>
  <title>post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100vh}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
      /* position: fixed; */
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left">
      <button class="btn" id="a">Add post</button>
      <h1>Welcome</h1>
        <p>1. Độc thân cũng tốt, yêu đương cũng được, điều này đều chẳng thành vấn đề. Có người ở bên, thì yêu thương chân thành; nếu chỉ có một mình vậy thì hãy chăm sóc bản thân mình thật tốt.</p><br>
        <p>2. Hai mươi mấy tuổi là lúc thoát nghèo, chứ không phải thoát "ế". Nếu quá chìm đắm vào một đoạn tình cảm, luôn có một kết cục chẳng mấy tươi sáng. Hãy dành nhiều công sức và tinh thần hơn cho học tập và công việc, khiến bản thân mình trở thành một con người tốt đẹp hơn.</p><br>
        3. Bớt yêu đi, kết bạn nhiều hơn. Sẽ có lúc bạn nhận ra rằng, tình bạn đáng tin hơn tình yêu. Thế giới này vốn quạnh quẽ, có một mình hay có người bên cạnh thực ra cũng thế cả thôi.<br>
        4. Học cách chính thức hóa tình cảm của mình, thích thì theo đuổi, không yêu thì đừng dây dưa không rõ ràng.
        5. Ngoại hình rất quan trọng. Không thể thay đổi được ngũ quan, thì ra tay với vóc dáng. Không phải ai béo khi giảm cân cũng đều thành trai xinh gái đẹp, thế nhưng gầy đi thực sự vẫn thuận mắt hơn nhiều. Đừng lấy nhìn ngoại hình rất nông cạn để làm cái cớ, có nhiều người cả nội tâm và ngoại hình đều tồi tệ như nhau.<br>
        6. Học cách tiết kiệm tiền, bảo đảm rằng ngay cả khi không có thu nhập trong ba tháng liền bạn vẫn có thể sống đâu vào đấy. Công việc không như ý, thì có thể từ chức thôi việc; cãi nhau với người yêu, thì có thể xách túi chuyển đi.<br>
        7. Học cách ở một mình, học cách hưởng thụ sự đơn độc. Khi ở chỗ đông người thì giữ mồm giữ miệng, khi có một mình thì giữ lấy trái tim. Buổi tối bớt chơi điện thoại đi, hãy đọc sách nhiều hơn. Không muốn đọc sách, thì hãy xem những bộ phim hay. Đừng để khi nhắn tin, chỉ có gửi biểu tượng cảm xúc và haha, mà không có gì để nói.<br>
        8. Kết bạn hãy cứ thuận theo tự nhiên. Tam quan bất đồng, không cần miễn cưỡng. Không cần thiết vừa mới quen nhau đã làm như sống chết không rời, quan hệ không mấy thân thiết mà quá nhiều lời, ngày sau nhất định sẽ hối hận.<br>
        9. Nếu không có năng lực giải quyết tốt cuộc sống hiện tại, tạm thời đừng nghĩ tới lý tưởng.<br>
        10. Đừng đặt quá nhiều niềm tin và đắm chìm vào cuộc sống an phận bình thường, hai mươi mấy tuổi cần có tinh thần của hai mươi mấy tuổi, an phận bình thường chỉ dành cho các ông các bà thôi. Hãy viết quyết tâm lên mặt bạn, hãy nhìn thẳng vào khát vọng của mình, khát vọng là động lực tốt nhất để ta duy trì trí tiến thủ.<br>
        11. Việc nhỏ thì học cách thích nghi, việc lớn thì hãy tôn trọng nguyên tắc. Có thể thỏa hiệp, nhưng không bao giờ được phá vỡ giới hạn của mình. Mong rằng cho dù bạn đã lăn lộn trong xã hội nửa đời người, bạn vẫn là người thiếu niên trong sạch thuở đầu.<br>
        12. Đừng mông lung, đừng sợ tương lai. Mỗi bước bạn đi đều có niềm vui đợi ở phía trước. Còn trẻ, tất cả đều còn kịp, hãy dũng cảm nếm trải, con người là thế, phải va chạm phải vấp ngã, mới biết bản thân thực sự thích gì.<br>
        13. Nếu không thể ở bên bố mẹ, hãy thường xuyên gọi điện về nhà. Bạn trưởng thành rồi, có thế giới của riêng mình rồi, bố mẹ già rồi, thế giới chỉ có bạn thôi. Còn cha mẹ, còn nơi để về. Cha mẹ không còn, chỉ còn nơi để đến.<br>
        14. Nuôi dưỡng sở thích và niềm đam mê của mình, đừng để bản thân chỉ biết có công việc, ngoài ra không có sở trường nào khác. Bạn có thể làm người vỗ tay bên đường, nhưng ít nhất một lần, hãy để người khác vỗ tay vì bạn.<br>
        15. Làm chính mình là được, đừng vì muốn lấy lòng người khác, mà khiến bản thân quá mệt mỏi.<br>
        16. Hãy yêu thương bản thân, hãy chăm sóc cho mình thật tốt. Hãy ăn cơm đúng giờ, hãy đi ngủ sớm một chút. Thích thứ gì thì mua, thích đi đâu thì tiết kiệm tiền để đến đó. Người có thể không có ai yêu, nhưng nhất định phải yêu lấy chính mình. Ai cũng chỉ có thể đi bên bạn một đoạn đường, đời này chỉ có thể tự bạn đi hết.<br>
    
    <h3>7 THAY ĐỔI NHỎ CHẮC CHẮN GIÚP BẠN KHỞI ĐẦU NĂM MỚI MAY MẮN, THÀNH CÔNG: CHỈ CẦN HỌC ĐƯỢC 3/7 ĐIỀU, CUỘC SỐNG CŨNG ĐÃ KHÁC ĐI</h3> 
        <i>Thay đổi để tốt hơn, tại sao không? Năm 2022 đã đến. Nếu muốn bạn thân trong năm này thành công, sống tốt hơn năm cũ, thì đừng bỏ qua bài viết này. Chỉ với 7 điều các bạn đã giúp cho cuộc sống của bản thân tốt đẹp hơn rất nhiều.
        Nếu bạn muốn thay đổi bản thân để đón chào một năm 2022 rực rỡ hơn, thì đừng bỏ qua 7 điều dưới đây:</i> <br>
        01. Tiết kiệm tiền<br>
        Dù ở độ tuổi nào, thời điểm nào, tiết kiệm tiền không bao giờ là muộn. Thu nhập không phải là tiêu chí duy nhất quyết định chất lượng cuộc sống, mà tiền tiết kiệm mới chính là nguồn sống của bạn. 
        Trong cuộc sống ngày nay,  rất nhiều thanh niên đều tiêu tiền theo kiểu làm tháng nào tiêu tiền tháng đấy, thậm chí còn tiêu tiền trước, kiếm một tiêu hai, thấu chi trước các loại tiền để tiêu xài và hưởng thụ. Nhưng bạn có biết rằng, khi có sự cố xảy ra mà bạn lại không có tiền, bạn sẽ biết cuộc sống này khó khăn đến nhường nào. Ngoài ra, tiết kiệm tiền còn giúp bạn học được cách chi tiêu hợp lý và an toàn.
        Vậy bắt đầu tiết kiệm như thế nào? Bạn hãy cố gắng kiềm chế ham muốn tiêu dùng của bản thân, kiểm tra các hạn mức tiêu dùng và không ngừng nâng cấp và cải thiện cách tiêu dùng cho đến khi bạn cảm thấy nó đã hợp lý.<br>
        02. Đừng mù quáng khởi nghiệp<br>
        Trong những năm gần đây, xu hướng khởi nghiệp đang không ngừng phổ biến. Đã có rất nhiều người đã thử khởi nghiệp, người thành công tuy nhiều nhưng người thất bại cũng không ít.
        Một trong những sai lầm của những người có ý định khởi nghiệp chính là, cứ khởi nghiệp thì chắc chắn sẽ thành công, kiếm được nhiều tiền. Tuy nhiên, thực tế lại không phải như vậy. Khi bắt đầu khởi nghiệp, bạn sẽ gặp vô vàn khó khăn, trắc trở và cả thất bại, bạn phải học cách thích nghi với chúng. Muốn khởi nghiệp  thành công, ngoài sự tài năng và sự chăm chỉ, thì vận may luôn chiếm một phần lớn.
        Trong tình hình đặc biệt hiện nay, chúng ta bạn phải hết sức thận trọng trong việc đầu tư và khởi nghiệp. Hãy xem xét kỹ hơn và suy nghĩ xem chúng ta có tài năng gì và chúng ta có phù hợp để khởi nghiệp hay không. Hãy làm từng bước một, đi chậm mà chắc còn hơn đi nhanh để vấp ngã.
        03. Tìm cho mình một nghề tay trái<br>
        Hãy tự tìm cho mình một nghề tay trái mà bạn thích. Nghề này có thể sẽ không mang lại quá nhiều tiền cho bạn, nhưng có thể giúp bạn củng cố và trau dồi thêm nhiều kỹ năng mới. Nghề tay trái giống như một chiếc lốp xe dự phòng, là chiếc lốp mà bạn sẽ phải dùng đến khi chiếc xe của bạn bị hư.Cuộc sống luôn luôn trắc trở và luôn có những điều bất ngờ xảy ra, và chỉ cần thêm một kỹ năng, thêm một thu nhập, thêm một bảo hiểm, bạn cuộc sống của bạn sẽ thuận lợi hơn nhiều.
        Đặc biệt trong thời đại Internet ngày nay, kiếm tiền không phải là chuyện quá khó khăn cả. Bạn có thể dễ dàng kiếm được vài trăm nghìn đến cả triệu đồng trong một ngày. Vì vậy, thay vì chỉ lướt điện thoại giết thời gian, bạn hãy tìm kiếm một công việc phụ nào đó để vừa kiếm tiền vừa trau dồi cho mình những kỹ năng mới.<br>
        04.  Đừng vội vàng mua nhà<br>
        Nếu tiền trên tay bạn có dư để mua nhà thì không tính, nhưng nếu số tiền bạn mua nhà là tiền tiết kiệm cả đời của bạn, tiền tiết kiệm của bố mẹ hoặc tiền của cả bố mẹ và bạn, thì bạn phải cân nhắc kỹ càng. Hãy nghĩ xem, bạn mua nhà để ở hay để đầu tư. Nếu mua nhà dùng để đầu tư thì càng phải thận trọng, không cẩn thận có thể bị sa vào vũng lầy, khó thoát ra được. 
        Cho dù có mua nhà rồi, cũng cần nghiêm túc tính toán đến khả năng trả nợ của mình, tức là tiền lương của bản có dư để trả hay không. Nếu không thì các bạn đừng mua nhà vội, hãy đợi thêm một khoảng thời gian nữa rồi tính tiếp.
        05. Đừng dễ dàng cho vay tiền<br>
        Bạn đừng bao giờ dễ dàng cho người khác vay tiền hay đi vay tiền người khác, cho dù đó là anh em bạn bè thân thiết của bạn. Vì sao lại vậy? Chắc hẳn bạn đã gặp nhiều trường hợp khi cho vay thì rất dễ dàng, nhưng khi trả nợ lại khất lên khất xuống, mãi không trả nợ. Cuối cùng tiền không những không về mà tình cảm anh em bạn bè cũng mất. Nhưng cuối cùng thì sao? Tiền không những không về mà còn là tình cảm anh em, bạn bè.
        06. Học cách kiểm soát cảm xúc của bản thân<br>
        Một số người nói rằng nỗi buồn lớn nhất của người trưởng thành là họ không thể kiểm soát cân nặng cũng như cảm xúc của mình. Thật ra những cảm xúc ấy chính là bị những ham muốn bản thân chi phối mà thôi. Vì vậy, ngay từ bây giờ, bạn hãy học cách làm chủ cảm xúc của bản thân chứ không phải nô lệ của nó.
        Những người làm chủ được cảm xúc của mình luôn là người trưởng thành, biết lo toan suy nghĩ cho cuộc sống của chính bản thân mình. Những người như vậy luôn là chỗ dựa vững chắc cho người thân và bạn bè.  
        Chúng ta sinh ra là người, hãy luôn giữ cho mình sự tỉnh táo và bình tĩnh, đừng bao giờ để cảm xúc điều khiển bộ não của chúng ta. Vì vậy, nếu 2021 bạn vẫn chưa làm chủ được cảm xúc của mình, thì sang 2022 này hãy học cách kiểm soát bản thân và làm chủ cuộc sống, bạn sẽ thấy cuộc sống của mình như được bước sang một trang khác đó.
        07. Xây dựng lối sống lành mạnh tích cực<br>
        Sang năm 2022, bạn hãy tập cho mình những thói quen sinh hoạt tốt, dậy sớm ngủ sớm, hạn chế xem điện thoại di động, đọc sách, tập thể dục thể thao,  học các kỹ năng mới, kết bạn nhiều hơn và có người bạn mang năng lượng tích cực. 
        Nếu bây giờ bạn không có những nguồn lực như vậy, thì ngay bây giờ, hãy thay quần áo sạch sẽ, đi ra ngoài, hít thở không khí trong lành và bình tâm lại. Hãy suy nghĩ xem chúng ta cần phải làm gì để có được những nguồn lực ấy. Khi bạn thay đổi, thế giới cũng sẽ thay đổi và hơn hết số phận của bạn cũng sẽ thay đổi.
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
      <p>
        177 TỶ PHÚ ĐỀU CÓ 13 THÓI QUEN GIỐNG NHAU!
        -----------------------------
        Sau 5 năm nghiên cứu những thói quen thường nhật của 177 triệu phú, tỷ phú tự lực cánh sinh, tay trắng dựng cơ đồ, tác gia người Mỹ Thomas C.Corley kết luận: “Một trong những nguyên nhân khiến họ từ những người bình thường chuyển biến thành những người thành công có tài sản triệu đô, tỷ đô chính là các ‘thói quen giàu có”… Thói quen quyết định giàu có, nghèo khó, hạnh phúc, đau buồn, áp lực, quan hệ tốt xấu, có sức khỏe hay không…”
        Quan trọng nhất, tất cả những thói quen đều có thể thay đổi và bồi dưỡng được. Dưới đây là 13 ‘thói quen giàu có’ của các triệu phú, tỷ phú mà bạn có thể bắt đầu bồi dưỡng ngay từ hôm nay.
        1. Kiên trì dậy sớm
        Trong nghiên cứu của Corley, trên nửa số triệu phú, tỷ phú tự lực cánh sinh, tay trắng dựng cơ đồ đều dậy sớm trước giờ làm việc ít nhất 3 giờ đồng hồ.
        Sáng dậy lúc 5 giờ, hoàn thành 3 việc quan trọng nhất của công việc trong ngày, việc này khiến bạn kiểm soát được cuộc sống, giúp bạn có nhiều thời gian chuẩn bị cho công việc, và có đủ thời gian đối phó với việc bất ngờ xảy ra.
        Khi có sự chuẩn bị tốt trước mọi sự việc thì sẽ không bị động, sẽ lựa chọn được phương án thích hợp, tối ưu. Kiên trì dậy sớm cũng thể hiện một ý chí kiên cường và một tâm thái cẩn thận, chuẩn bị cho kế hoạch trong ngày.
        2. Mỗi ngày giành 15 – 30 phút suy nghĩ
        “Suy nghĩ là mấu chốt của thành công của họ” – Corley phát hiện ra điểm này. Người giàu thường ngồi một mình lúc sáng sớm suy nghĩ ít nhất 15 phút.
        Buổi sáng hàng ngày họ thường suy nghĩ rất nhiều sự việc, bao gồm sự nghiệp, tài chính, sức khỏe và từ thiện.
        Họ thường xuyên tự hỏi bản thân 4 câu:
        – Mình làm thế nào mới có thể kiếm được nhiều tiền hơn?
        – Công việc của mình có khiến mình vui thích không?
        – Thời gian rèn luyện của mình có đủ không?
        – Mình còn có thể tham gia được các hoạt động từ thiện nào nữa?”
        Trong đó 2 câu hỏi quan trọng nhất khiến họ càng thành công hơn, đó là “Công việc có khiến mình vui thích không? – kiểm điểm lại các công việc mình đang làm có làm lợi ích cho xã hội, cho người khác không, có trái đạo đức không. Vì chỉ đem lại lợi ích cho người khác, cho xã hội, không trái đạo đức lương tâm thì mới là công việc đem lại cho mình niềm vui đích thực.
        Câu “Mình còn có thể tham gia được các hoạt động từ thiện nào nữa?”. chính là chìa khóa để giàu có không những bền lâu mà còn giàu có hơn, vì họ hiểu được cội nguồn của của cải đến từ Đức, nên vui lòng hành thiện tích đức, chứ không dùng của cải để thỏa mãn vui thú cá nhân.
        3. Thường xuyên đọc sách
        Người giàu càng thích đọc, học tập chứ không thích vui chơi giải trí. Corley viết: “88% người giàu hàng ngày đều đọc sách tối thiểu 30 phút, nội dung chủ yếu là sách tự học và tự tu dưỡng nâng cao bản thân. Đại đa số đều không phải đọc sách để giải trí. Người giàu đọc sách là để thu hoạch tri thức”.
        4. Nói năng cử chỉ lễ phép
        Những triệu phú, tỷ phú khởi nghiệp từ hai bàn tay đều nắm vững những nguyên tắc lễ nghi xã hội. Lễ nghi này bao gồm gửi thư cảm ơn, ghi nhớ những ngày quan trọng (như kỷ niệm ngày cưới, sinh nhật), nắm vững lễ nghi trên bàn ăn và cách ăn mặc chính xác ở các trường hợp khác nhau.
        Hiểu lễ nghi thì mới biết hành xử đúng người, đúng lúc, đúng chỗ, đúng trường hợp. Người không hiểu biết lễ nghi thì như kẻ hoang sơ, vô phép tắc. Nếu bạn muốn thành công thì cũng phải nắm vững những nguyên tắc này.
        5. Theo đuổi mục tiêu của riêng mình
        “Theo đuổi ước mơ và mục tiêu của riêng mình có thể khiến bạn có cảm giác hạnh phúc lâu dài, cuối cùng sẽ chuyển hóa thành của cải” – Corley nói.
        Có rất nhiều người phạm phải sai lầm là theo đuổi ước mơ của người khác (ví dụ như của cha mẹ, áp đặt của xã hội). Người giàu thì không ngừng hoàn thiện mục tiêu của riêng mình, kiên nhẫn và hăng say theo đuổi ước mơ và mục tiêu đó.
        Việc xác định được cho mình ước mơ, mục tiêu rõ ràng giúp chúng ta có sức mạnh đi theo một hướng, không bị phân tán tâm trí, sức lực ở vạn sự vạn vật xung quanh.
        6. Kiên trì rèn luyện sức khỏe
        76% người giàu kiên trì mỗi ngày vận động ngoài trời 30 phút trở lên. Vận động ngoài trời bao gồm chạy bộ, chạy ngắn, chạy nhanh, đạp xe…
        “Vận động ngoài trời không chỉ tốt cho sức khỏe mà còn giúp ích lớn cho não.Giúp tăng tế bào não. Rèn luyện thể dục còn có thể tăng hàm lượng glucose trong cơ thể, glucose là nhiên liệu cho đại não. Dưỡng chất mà đại não nhận được càng nhiều thì não phát triển càng tốt, và bạn cũng trở nên thông minh hơn”, Corley phân tích.
        7. Có nhiều nguồn thu nhập
        “Những triệu phú, tỷ phú tay không dựng cơ đồ thường không dựa vào một nguồn thu nhập, họ có nhiều phương thức thu nhập khác nhau. Trong nghiên cứu của tôi, 65% người trong số họ trước khi trở thành triệu phú thì đã có ít nhất 3 nguồn thu nhập”.
        Các thu nhập thêm bao gồm cho thuê nhà đất, đầu tư cổ phiếu, nghề phụ, bản quyền v.v.
        Thực tế, với người khởi nghiệp từ tay trắng thì chỉ một chút tài sản cũng là cả cơ nghiệp, mỗi chuyện làm ăn, đầu tư là cả một canh bạc dốc hết vốn.
        Dù tính toán giỏi cỡ nào thì vẫn còn yếu tố bất định “mưu sự tại nhân, thành sự tại Thiên”. Thế nên, họ sẽ nghĩ mọi cách để có thêm các nguồn thu nhập khác, ngộ nhỡ thua lỗ hết sạch gia tài thì vẫn có thể sống được, không đến mức tuyệt vọng nghĩ quẩn.
        Tuyệt đối, đừng bao giờ chỉ dựa vào một nguồn thu nhập duy nhất. Muốn thành công, phải nghĩ ra các phương thức kiếm tiền khác nhau để gia tăng quỹ tài sản.
        Kết giao với những người thành công khác
        Có câu: “Gần mực thì đen, gần đèn thì rạng”. Những người chính nhân quân tử, đàng hoàng tử tế toát ra một sức mạnh tinh thần, một năng lượng tích cực mạnh mẽ khiến những người xung quanh cũng tự sản sinh suy nghĩ tích cực, lạc quan, hăng hái tiến thủ.
        Kết giao với những người có mục tiêu rõ ràng, tâm thái tích cực, lạc quan nhiệt tình… chắc chắn sẽ giúp ích cho cuộc đời bạn. Và đó cũng chính là “khẩu vị” kết bạn yêu thích của người giàu.
        8. Có thầy riêng
        “Tìm được bậc đạo sư riêng cho mình có thể giúp bạn nhanh chóng tích tụ của cải” – Corley viết.
        Bậc đạo sư thành công không chỉ có ảnh hưởng tích cực đến cuộc sống của bạn. Bằng việc chỉ dẫn bạn nên làm gì, không nên làm gì, họ chia sẻ với bạn kinh nghiệm thành công có giá trị, những kinh nghiệm từ bài học thành công hay thất bại của chính họ hoặc các bậc thầy của họ. Có người thầy tốt, con đường đi tới thành công của bạn bớt nguy hiểm, vòng vèo hoặc sai lầm.
        9. Không phải người xuất chúng
        Người thành công không phải người xuất chúng, nhưng họ biết tạo ra vòng ảnh hưởng của họ và kéo những người khác vào.
        Có một so sánh thú vị thế này: Người quá xuất chúng, hiển lộ thì có lẽ khó thành công, giống như cái cây cao trong khu rừng thì bị gió bẻ gãy. Người thành công là người bình thường, nhưng tạo ra được bản sắc, sức cuốn hút riêng. Mà sức cuốn hút lớn nhất đối với mọi người chính là nhân cách, lòng bao dung, nhân ái, biết nghĩ cho người khác.
        10. Thái độ nhân sinh tích cực
        Có lẽ hầu hết mọi người đều biết suy nghĩ tích cực quyết định đến thành công, thay đổi cuộc đời nhưng không phải ai cũng thực hành nó một cách nhất quán, đúng đắn và trọn vẹn.
        Trong tướng mệnh học có nói: “Tướng do tâm sinh, cảnh tùy tâm chuyển”, nghĩa là “tướng mạo, thần thái, tinh thần con người đều do tâm thái sinh ra, tâm thiện, tích cực thì tướng mạo, thần thái tốt đẹp. Hoàn cảnh xung quanh cũng thay đổi theo tâm thái, tâm thái tốt đẹp, thiện lương, tích cực thì hoàn cảnh, môi trường xung quanh cũng theo đó mà biến đổi.
        Chỉ khi có thái độ tinh thần tích cực thì bạn mới có thể đạt được thành công lâu bền.
        11. Giúp người khác đạt được thành công
        “Giúp người khác theo đuổi mục tiêu và ước mơ, đồng thời đạt được thành công, đó cũng khiến bản thân bạn thu được ích lợi. Nếu không có những người thành công khác thì thành công cũng rất khó định nghĩa.
        Nếu muốn thành công thì cách tốt nhất là giúp người khác thành công”.
        Nhưng bạn không nên giúp đỡ tất cả mọi người mà chỉ nên giúp những người lạc quan, có mục tiêu rõ ràng, tích cực, theo đuổi ước mơ, tránh mất thời gian vô ích cho những người thiếu ý chí, thiếu nghị lực.
        12. Tìm cầu các ý kiến phản ánh
        Ý kiến phản ánh là danh từ hiện đại, thời xưa gọi là can gián. Hiếu Kinh có viết:
        “Xưa bậc thiên tử có 7 người bề tôi can gián, tuy thiên tử vô đạo, cũng không bị mất thiên hạ”.
        “Bậc chư hầu có 5 người bề tôi can gián, tuy chư hầu vô đạo, cũng không bị mất nước”.
        “Bậc đại phu có 3 người bề tôi can gián, tuy đại phu vô đạo cũng không bị mất gia tộc”.
        “Kẻ sỹ có bạn bè can gián, thì không bị mất thanh danh”.
        “Bậc làm cha có con can gián, thì không rơi vào bất nghĩa”.
        Là chủ doanh nghiệp thì trong doanh nghiệp họ là vua, cần có bề tôi (cấp dưới) can gián. Với đối tác, với khách hàng thì họ là kẻ sỹ, cần có bạn bè can gián. Trong gia đình thì họ là người cha, cần vợ con can gián.
        Vì sợ bị phê bình mà chúng ta rất hiếm khi mong người khác phản ánh ý kiến. Nhưng, ý kiến phản ánh là mấu chốt giúp bạn hiểu được mình làm có chính xác hay không. Phản ánh giúp bạn biết mình có ở trên con đường đúng đắn hay không.
        Nếu ý kiến phản ánh là phê bình thì bất kể là tốt hay xấu, cũng đều là những nhân tố để bạn học tập và trưởng thành. Ngoài ra, ý kiến phản ánh cung cấp thông tin cho bạn, giúp bạn có thể đạt được thành công trong bất kỳ doanh nghiệp nào”.
        Tỷ phú Bill Gates: “Thoát khỏi lo lắng về tài chính là một phước lành thực sự, nhưng bạn không cần phải có tỷ đô để đạt được điều đó”
      </p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Design by: TongLyBang</p>
</footer>

</body>
<script>
  $(document).ready(function(){
  $(".btn").click(function(){
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  });
});
</script>
</html>
