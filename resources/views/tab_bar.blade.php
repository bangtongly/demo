<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/tab_bar.css')}}">
</head>
<body>
  <div class="row">
    <menu class="menu">
    
    <button class="menu__item active" style="--bgColorItem: #ff8c00;" >
      <svg class="icon" viewBox="0 0 24 24">
        <path d="M3.8,6.6h16.4"/>
        <path d="M20.2,12.1H3.8"/>
        <path d="M3.8,17.5h16.4"/>
      </svg>
    </button>

    <button class="menu__item" style="--bgColorItem: #f54888;">
      <svg class="icon" viewBox="0 0 24 24">
        <path  d="M6.7,4.8h10.7c0.3,0,0.6,0.2,0.7,0.5l2.8,7.3c0,0.1,0,0.2,0,0.3v5.6c0,0.4-0.4,0.8-0.8,0.8H3.8
        C3.4,19.3,3,19,3,18.5v-5.6c0-0.1,0-0.2,0.1-0.3L6,5.3C6.1,5,6.4,4.8,6.7,4.8z"/>
        <path  d="M3.4,12.9H8l1.6,2.8h4.9l1.5-2.8h4.6"/>
      </svg>
    </button>

    <button class="menu__item" style="--bgColorItem: #4343f5;" >
      <svg class="icon" viewBox="0 0 24 24">
      <path  d="M3.4,11.9l8.8,4.4l8.4-4.4"/>
      <path  d="M3.4,16.2l8.8,4.5l8.4-4.5"/>
      <path  d="M3.7,7.8l8.6-4.5l8,4.5l-8,4.3L3.7,7.8z"/>
    </button>

    <button class="menu__item" style="--bgColorItem: #e0b115;" > 
      <svg class="icon" viewBox="0 0 24 24" >
        <path  d="M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1
          C3.9,4.4,4.4,3.9,5.1,3.9z"/>
        <path  d="M4.2,9.3h15.6"/>
        <path  d="M9.1,9.5v10.3"/>
    </button>

    <button class="menu__item" style="--bgColorItem:#65ddb7;">
      <svg class="icon" viewBox="0 0 24 24" >
        <path  d="M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1
          C3.9,4.4,4.4,3.9,5.1,3.9z"/>
        <path  d="M5.5,20l9.9-9.9l4.7,4.7"/>
        <path  d="M10.4,8.8c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6C7.3,8,8,7.3,8.9,7.3C9.7,7.3,10.4,8,10.4,8.8z"/>
      </svg>
    </button>

    <div class="menu__border"></div>
  </menu>
  </div>

  <div class="svg-container">
    <svg viewBox="0 0 202.9 45.5" >
      <clipPath id="menu" clipPathUnits="objectBoundingBox" transform="scale(0.0049285362247413 0.021978021978022)">
        <path  d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
          c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
          c9.2,3.6,17.6,4.2,23.3,4H6.7z"/>
      </clipPath>
    </svg>
  </div>
  <div class="row">
    <h1>abc</h1>
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
  </div>
</body>
<script src="{{ asset('js/tab_bar.js') }}"></script>
</html>
