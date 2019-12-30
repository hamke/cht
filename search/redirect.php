<?php
if ($_GET['engine'] == 'baidu') {
      $key = $_GET['query'];
      header("Location:https://www.baidu.com/s?word=$key");
  } else if ($_GET['engine'] == 'weibo') {
        $key = $_GET['query'];
        header("Location:http://s.weibo.com/weibo/$key");
      } else if ($_GET['engine'] == 'wechat') {
            $key = $_GET['query'];
            header("Location:http://weixin.sogou.com/weixin?type=2&query=$key");
        } else if ($_GET['engine'] == 'google') {
              $key = $_GET['query'];
              header("Location:https://www.google.com/search?q=$key");
          } else if ($_GET['engine'] == 'yahoo_jp') {
                $key = $_GET['query'];
                header("Location:https://search.yahoo.co.jp/search?p=$key");
            } else if ($_GET['engine'] == 'yahoo_tw') {
                  $key = $_GET['query'];
                  header("Location:https://tw.search.yahoo.com/search?p=$key");
              } else if ($_GET['engine'] == 'naver') {
                    $key = $_GET['query'];
                    header("Location:https://search.naver.com/search.naver?ie=utf8&query=$key");
                } else if ($_GET['engine'] == 'daum') {
                      $key = $_GET['query'];
                      header("Location:https://search.daum.net/search?q=$key");
                  } else if ($_GET['engine'] == 'trendtalk') {
                        $key = $_GET['query'];
                        header("Location:https://www.google.com/search?q=site%3Atrendtalk.kr%20OR%20site:ttmkt.com+$key");
                    }                
?>
