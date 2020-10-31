var suffix = ".svg";
var monthEng = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];

function getNewMoon(julian) {
  var k = Math.floor((julian - 2451550.09765) / 29.530589);
  var t = k / 1236.85;
  var nmoon = 2451550.09765 +
      29.530589 * k +
      0.0001337 * t * t -
      0.40720 * Math.sin((201.5643 + 385.8169 * k) * 0.017453292519943) +
      0.17241 * Math.sin((2.5534 + 29.1054 * k) * 0.017453292519943);
  return (nmoon); // julian - nmoonが現在時刻の月齢
}
/*
    ユリウス通日計算
    引数　　時刻(Dateオブジェクト)
    戻り値　ユリウス通日(浮動小数点数)
*/
function getJulian(date) {
  return date.getTime() / 86400000.0 + 2440587.5;
}

/*
    0,1,2,3 ... を 00,01,02,03 ... に。
   （変な関数名だ）
*/
function maeZero(num) {
  if (num < 10) {
    return '0' + num;
  } else {
    return num;
  }
}


/*
    メイン処理
*/
function getImageid(date) {
  var moonage;
  var image;

  var appName = navigator.appName.charAt(0);
  var appVer = navigator.appVersion.charAt(0);

  julian = getJulian(date);
  var nmoon = getNewMoon(julian);

  if (nmoon > julian) {
    nmoon = getNewMoon(julian - 1.0);
  }

  var age = Math.round(julian - nmoon); // julian - nmoonが現在時刻の月齢

  if (appName == "N" && appVer == "2") {
    moonage = age;
  } else {
    moonage = new String(age);
  }

  // 月齢を表示用に編集（小数以下第一位まで表示）
  // 画像ファイル名を編集
  // でもこんな回りくどいことをしなくてもいいような気が。。。。
  if (age >= 0) {
    moonage = moonage + ".0"; // 小数部が0の時に備えた処理
    if (moonage.charAt(0) == ".") { // 整数部が飛ばされたときの処理
      moonage = "0" + moonage;
    }
    if (age >= 10) {
      moonage = moonage.substring(0, 4);
      var image = moonage.substring(0, 2);
    } else {
      moonage = moonage.substring(0, 3);
      image = moonage.substring(0, 1);
    }
  }
  return image == '30' ? '0' : image;
}
// メインmoon
function getHostname() {
  var protocol = location.protocol;
  var slashes = protocol.concat("//");
  var host = slashes.concat(window.location.hostname + (window.location.port ? ':' + window.location.port: ''));
  return host;
}
$("img.moon").attr("src", getHostname() + "/assets/img/moon/moon" + getImageid(new Date()) + suffix);
// 当月リスト作成
var dt = new Date();
var year = dt.getFullYear();
var month = dt.getMonth() + 1;
var nowdate = dt.getDate();
var lastdate = new Date(dt.getFullYear(), dt.getMonth() + 1, 0).getDate();
$(".moonmonth").html(monthEng[dt.getMonth()] + ' ' + nowdate + ' ' + year);

var colcount = 0;
var tabledoc = '';
for (var i = 1; i <= lastdate; i++) {
  var dt = new Date(year + '/' + month + '/' + i + ' 23:59:59');
  var image = getImageid(dt);

  if (colcount == 0) {
    if (tabledoc != '') tabledoc += '</tr>';
    tabledoc += '<tr>';
  }
  colcount++;
  tabledoc += '<td' + (nowdate == i ? ' id="noomnowtd"' : '') + '>';
  tabledoc += '<img border="' + (nowdate == i ? 2 : 0) + '" src="' + getHostname() + '/assets/img/moon/moon' + image + suffix + '" width="25" height="25">';
  tabledoc += '<br>' + i;
  tabledoc += '</td>';
  if (colcount >= 7) colcount = 0;
}
$("#moontablearea").html('<table class="moontable">' + tabledoc + '</table>');

$(".moonarea").click(function() {
  $('.moon').fadeOut(500);
  $('.moonlist').fadeIn(500);
});

$(".moonclose").click(function() {
  $('.moonlist').fadeOut(500);
  $('.moon').fadeIn(500);
});

$(window).on('scroll resize', function() {
  $('.moonlist').fadeOut(0);
  $('.moon').fadeIn(0);
})

deSVG('.moon', true);