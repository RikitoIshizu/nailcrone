<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>NAIL CRONE</title>
<link rel="stylesheet" type="text/css" href="css/reserve.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/naildesign.js"></script>
</head>
<body>
  <?php require_once "tpl/header.html"; ?>
  <div id="all">
    <img class="line_space_reserve" src="img/index/line.png" alt="space">
    <img class="picture" src="img/index/illust1_top.png">
    <img class="picture" src="img/index/course_select.png">

    <div class="care_course clearfix">
      <p>ケア＆コース</p>
      <div class="contents clearfix">
        <div class="button">
          <p>ジェルオフのみ</p>
          <p>30分</p>
          <p>2000円</p>
        </div>
        <div class="button">
          <p>スカルプオフのみ</p>
          <p>60分</p>
          <p>4000円</p>
        </div>
        <div class="button">
          <p>スカルプ付け替えオフ</p>
          <p>60分</p>
          <p>3000円</p>
        </div>
        <div class="button">
          <p>ジェル付け変えオフ他店</p>
          <p>30分</p>
          <p>1500円</p>
        </div>
        <div class="button">
          <p>ジェル付け変えオフ</p>
          <p>30分</p>
          <p>1000円</p>
        </div>
        <div class="button">
          <p>ウォーターケア</p>
          <p>0分</p>
          <p>1000円</p>
        </div>
      </div>
    </div>

    <div class="care_course clearfix">
      <div class="contents clearfix">
        <p>ジェル</p>
        <div class="button_a">
          <p>ワンカラー（ラメ・グラ）</p>
          <p>60分</p>
          <p>4500円</p>
        </div>
        <div class="button_a">
          <p>フレンチ（ラメ・ライン・カラグラ）</p>
          <p>90分</p>
          <p>5500円</p>
        </div>
      </div>
    </div>

    <div class="care_course clearfix">
      <div class="contents clearfix">
        <p>アート</p>
        <div class="button_b">
          <p>2本アート</p>
          <p>90分</p>
          <p>5980円</p>
        </div>
        <div class="button_b">
          <p>4本アート</p>
          <p>90分</p>
          <p>6980円</p>
        </div>
        <div class="button_b">
          <p>アート(多め)</p>
          <p>120分</p>
          <p>7980円</p>
        </div>
      </div>
    </div>

    <div class="care_course clearfix">
      <div class="contents clearfix">
        <p>フット</p>
        <div class="button_b">
          <p>シンプルコース</p>
          <p>60分</p>
          <p>5980円</p>
        </div>
        <div class="button_b">
          <p>親指アート</p>
          <p>90分</p>
          <p>6980円</p>
        </div>
        <div class="button_b">
          <p>4本アート</p>
          <p>90分</p>
          <p>7980円</p>
        </div>
      </div>
    </div>

    <div class="care_course clearfix">
      <div class="contents clearfix">
        <p>長さ出し</p>
        <div class="button_a">
          <p>スカルプ</p>
          <p>10分/本</p>
          <select id="length">
            <option value="-">- 本</option>
            <option value="1">1本</option>
            <option value="2">2本</option>
            <option value="3">3本</option>
            <option value="4">4本</option>
            <option value="5">5本</option>
            <option value="6">6本</option>
            <option value="7">7本</option>
            <option value="8">8本</option>
            <option value="9">9本</option>
            <option value="10">10本</option>
          </select>
        </div>
        <div class="button_a">
          <p>チップ</p>
          <p>5分 / 本　（10本 60分）</p>
          <select id="length">
            <option value="-">- 本</option>
            <option value="1">1本</option>
            <option value="2">2本</option>
            <option value="3">3本</option>
            <option value="4">4本</option>
            <option value="5">5本</option>
            <option value="6">6本</option>
            <option value="7">7本</option>
            <option value="8">8本</option>
            <option value="9">9本</option>
            <option value="10">10本</option>
          </select>
        </div>
      </div>
    </div>

  </div>

  </div>
  <?php require_once "tpl/footer2.html"; ?>
</body>
</html>
