<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>

<head>
  <!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
  <title>ADMIN</title>
</head>

<body>
  <div>
    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
      }

      .button {
        -moz-box-shadow: inset 0px 1px 0px 0px #ffffff;
        -webkit-box-shadow: inset 0px 1px 0px 0px #ffffff;
        box-shadow: inset 0px 1px 0px 0px #ffffff;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
        background: -moz-linear-gradient(center top, #ededed 5%, #dfdfdf 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
        background-color: #ededed;
        -webkit-border-top-left-radius: 6px;
        -moz-border-radius-topleft: 6px;
        border-top-left-radius: 6px;
        -webkit-border-top-right-radius: 6px;
        -moz-border-radius-topright: 6px;
        border-top-right-radius: 6px;
        -webkit-border-bottom-right-radius: 6px;
        -moz-border-radius-bottomright: 6px;
        border-bottom-right-radius: 6px;
        -webkit-border-bottom-left-radius: 6px;
        -moz-border-radius-bottomleft: 6px;
        border-bottom-left-radius: 6px;
        text-indent: 0;
        border: 1px solid #dcdcdc;
        display: inline-block;
        color: #777777;
        font-family: Times New Roman;
        font-size: 15px;
        font-weight: normal;
        font-style: normal;
        height: 25px;
        line-height: 25px;
        width: 100px;
        text-decoration: none;
        text-align: center;
        text-shadow: 1px 1px 0px #ffffff;
      }

      .button:hover {
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
        background: -moz-linear-gradient(center top, #dfdfdf 5%, #ededed 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
        background-color: #dfdfdf;
      }

      .button:active {
        position: relative;
        top: 1px;
      }

      /* This button was generated using http://tools.ngoisaoso.vn/css3button/ */


      #menu {
        font-size: 15px;
        color: white;
        padding: 5px 5px 0 5px;
        background-color: #FF6600;
        height: 30px;
        top: 89px;
        right: 0px;
        text-align: right;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
      }

      #menu a {
        color: white;
        padding: 5px;
        text-decoration: none;
        text-align: center;

        right: 5px;

      }

      .h1 {
        font-family: arial;
        width: 300px;
        height: 50px;
        padding-left: 10px;
        font-size: 20px;
        font-weight: bold;
        text-align: justify;
      }

      .h2 {
        font-family: arial;
        width: 700px;
        height: 150px;
        padding-left: 10px;
        font-size: 18px;
        text-align: justify;
        padding-top: 5px;
      }

      #news-block-title {
        font-size: 18px;
        border-bottom: 1px solid #cd2122;
        position: relative;
        left: 300px;
        font-size: 30px;
        top: 50px;

      }

      p {
        padding-top: 10px;
        font-size: 16px;
        font-weight: normal;
      }

      .a3 {
        font-size: 20px;
        text-decoration: none;
        font-style: bold;
        color: black;
        font-size: 20px;
      }

      .a3:hover {
        color: #CD2122;
      }

      .tr {
        margin: 0 0 30px;
        overflow: hidden;
        list-style-type: none;
      }
    </style>
    <div align="center">
      <a href="">
        <img width="100px" src="https://image.exam24h.com/public/exam24h-wiki/attribute/90211c9cca2c6ee1525ba51ba9f86b60.PNG">
      </a>
    </div>
    <div id="menu">

      <a href="trangchu2.php">Trang Ch???</a>
      |
      <a href="view/quanlysinhvien.php">Qu???n l?? sinh vi??n</a>
      |
      <a href="view/quanlymonhoc.php">Qu???n l?? m??n h???c</a>
      |

      B???n l?? ADMIN -
      <a href="login.php">tho??t</a>


    </div>
  </div>
  <div>
    <span style="z-index: -1; " id="news-block-title">TIN T???C S??? KI???N</span>

    <div align="center" style="padding-top: 20px">
      <table style="position: relative; top: 80px;" width="1000px">
        <tr class="tr">
          <td class="" rowspan="2"><img height="250px" src="img/h1.jpg" alt=""></td>
          <td class="h1"><a class="a3" href="http://www.utt.edu.vn/utt/tin-tuc-su-kien/tap-huan-nghiep-vu-va-cac-quy-dinh-phap-luat-cho-nguoi-dieu-hanh-van-tai-a11980.html">
              T???p hu???n Nghi???p v??? v?? c??c quy ?????nh ph??p lu???t cho ng?????i ??i???u h??nh v???n t???i</a>

            <p>16/11/2019</p>
          </td>
        <tr>
          <td class="h2">Ng??y 16/11/2019 t???i Ph??n hi???u H?? N???i, Trung t??m H??? tr??? sinh vi??n kh???i nghi???p v?? Quan h??? doanh nghi???p ph???i h???p v???i Hi???p h???i V???n t???i ?? t?? Vi???t Nam (VATA) t??? ch???c khai m???c Kh??a T???p hu???n nghi???p v??? v?? c??c quy ?????nh ph??p lu???t cho ng?????i...</td>
        </tr>
        </tr>

        <tr>
          <td class="" rowspan="2"><img height="250px" src="img/h2.jpg" alt=""></td>
          <td class="h1"><a class="a3" href="http://www.utt.edu.vn/utt/tin-tuc-su-kien/doan-bo-giao-duc-va-the-thao-lao-tham-va-lam-viec-tai-truong-dai-hoc-cong-nghe-gtvt-a11975.html">
              ??o??n B??? Gi??o d???c v?? Th??? thao L??o th??m v?? l??m vi???c t???i Tr?????ng ?????i h???c C??ng ngh??? GTVT
              ??o??n B??? Gi??o d???c v?? Th??? thao L??o th??m v?? l??m vi???c t???i Tr?????ng ?????i h???c C??ng ngh??? GTVT</a>

            <p>15/11/2019</p>
          </td>
        <tr>
          <td class="h2">Ng??y 13/11/2019, ??o??n c??ng t??c c???a B??? Gi??o d???c v?? Th??? thao N?????c CHDCND L??o do B?? Thongmy Duansakda - Ph?? V??? tr?????ng V??? C??ng t??c sinh vi??n - B??? Gi??o d???c v?? Th??? thao l??m Tr?????ng ??o??n ???? c?? bu???i l??m vi???c v???i Tr?????ng ?????i h???c C??ng ngh??? Giao...</td>
        </tr>
        </tr>
        <tr>
          <td class="" rowspan="2"><img height="250px" src="img/h3.jpg" alt=""></td>
          <td class="h1"><a class="a3" href="http://utt.edu.vn/utt/tin-tuc-su-kien/toa-dam-trao-doi-hoc-tap-kinh-nghiem-cong-tac-trong-boi-canh-toan-cau-hoa-giao-duc-dai-hoc-a11967.html">
              T???a ????m Trao ?????i, h???c t???p kinh nghi???m c??ng t??c trong b???i c???nh to??n c???u h??a gi??o d???c ?????i h???c
              T???a ????m Trao ?????i, h???c t???p kinh nghi???m c??ng t??c trong b???i c???nh to??n c???u h??a gi??o d???c ?????i h???c</a>

            <p>14/11/2019</p>
          </td>
        <tr>
          <td class="h2">V???i xu h?????ng h???i nh???p v?? to??n c???u h??a, c??c qu???c gia trong ???? c?? Vi???t Nam ??ang c?? nh???ng b?????c ??i thi???t th???c nh???t ????? ?????i m???i v?? n??ng cao ch???t l?????ng ng??nh ngh??? nh???m ????p ???ng c??c y??u c???u th???c ti???n v?? h???i nh???p qu???c t???. M???t trong...</td>
        </tr>
        </tr>

        <tr>
          <td class="" rowspan="2"><img height="250px" src="img/h4.jpg" alt=""></td>
          <td class="h1"><a class="a3" href="http://utt.edu.vn/utt/tin-tuc-su-kien/khai-giang-cao-hoc-khoa-51-va-trao-bang-thac-si-dot-2-2019-a11934.html">
              Khai gi???ng Cao h???c Kh??a 5.1 v?? trao b???ng Th???c s?? ?????t 2 - 2019
              Khai gi???ng Cao h???c Kh??a 5.1 v?? trao b???ng Th???c s?? ?????t 2 - 2019</a>

            <p>4/11/2019</p>
          </td>
        <tr>
          <td class="h2">H??a trong kh??ng kh?? HS-SV c??? n?????c ??ang n?? n???c ph???n kh???i b?????c v??o n??m h???c m???i, ch??o m???ng c??c ng??y l??? l???n c???a ?????t n?????c, c???a d??n t???c, h?????ng t???i k??? ni???m ng??y Nh?? gi??o Vi???t Nam 20/11. Ng??y 03/11/2019, Tr?????ng ?????i h???c C??ng ngh??? GTVT...</td>
        </tr>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>