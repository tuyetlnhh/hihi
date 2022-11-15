<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./mvc/view/shipping-information/shipping-information.css?v=<?php echo time(); ?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div id = "shipping-information" class="container">
    <div class="form">
    <form action="" id="orderForm">
      <div class ="form_title">THÔNG TIN GIAO HÀNG</div>
      <input type="text" class = "info" placeholder="HỌ TÊN">
       <input type="text" class = "info" placeholder="Số điện thoại">
       <input type="text" class = "info" placeholder="Email">
       <input type="text" class = "info" placeholder="Địa chỉ">
       <select name="customerCity" id="customerCity">
         <option value="0">Tỉnh/ Thành phố</option>
          <option value="1">Hà Nội</option>
          <option value="2">Đà Nẵng</option>
          <option value="3">TP.HCM</option>
        </select>
        <select name="customerDistrict" id="customerDistrict">
          <option value="0">Quận/ Huyện</option>
          <option value="1">Hà Nội</option>
          <option value="2">Đà Nẵng</option>
          <option value="3">TP.HCM</option>
         </select>
         <select name="customerWard" id="customerWard">
          <option value="0">Phường/ Xã</option>
          <option value="1">Hà Nội</option>
          <option value="2">Đà Nẵng</option>
          <option value="3">TP.HCM</option>
         </select>
         <div class="info-holder">
          <input type="checkbox" name="" id="getInfo" class = "checkBox">
          <h4>Cập nhật các thông tin mới nhất về chương trình từ Aglet</h4>
         </div>
      <div class="form_title">PHƯƠNG THỨC GIAO HÀNG</div>
      <div class="info-holder">
        <input type="checkbox" name="" id="shippingType" class = "checkBox">
        <h4>Tốc độ tiêu chuẩn (2-5 tuần)</h4>
      </div>
      <div class="form_title">PHƯƠNG THỨC THANH TOÁN</div>
      <div class="info-holder">
        <input type="checkbox" name="" id="checkBox" class = "checkBox">
        <h4> Thanh toán trực tiếp khi giao hàng </h4>
      </div>
      <div class="info-holder">
        <input type="checkbox" name="" id="checkBox" class = "checkBox">
        <h4>Thanh toán bằng thẻ quốc tế và nội địa (ATM)</h4>
      </div>
      <div class="info-holder">
        <input type="checkbox" name="" id="checkBox" class = "checkBox">
        <h4>Thanh toán bằng ví MoMo</h4>
      </div>
     </form>
    </div>
    <div class="bill_container">
      <ul class="bill">
        <li class="group_title">ĐƠN HÀNG</li>
        <li class="divider"></li>
        <li class="group_item">asdasdasdsad</li>
        <li class="divider-dashed"></li>
        <li class="group_item total">
          <span>TỔNG CỘNG</span>
          <span id="price">2.000.000 VNĐ</span>
        </li>
        <li class="group_item">
          <input type="submit" value="HOÀN TẤT ĐẶT HÀNG" class = "submitBtn">
        </li>
      </ul>

    </div>

  </div>
</body>
</html>