//IFrame Player API の読み込み
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

//YouTubeの埋め込み
var ytPlayer;
var ytWidth = '100%';
var ytHeight = '100%';

$(document).ready(colorbox);
$(window).on('resize',colorbox);
function colorbox() {
    var baseWidth = $(window).width();
    var w = baseWidth*0.8;
    var h = w*0.5;

    // デバイス幅が640px以下の場合にスマホと判定する
    if (window.matchMedia && window.matchMedia('(max-device-width: 640px)').matches) {
        $(".youtube-modal").colorbox({
            inline: true,
            innerWidth: w,
            innerHeight: h,
            maxWidth: "100%",
            onComplete: function(){
                ytPlayer = new YT.Player(`${$(this).attr('data-id')}`, {
                    width: ytWidth,
                    height: ytHeight,
                    videoId: `${$(this).attr('data-y-id')}`,
                    playerVars: {
                        rel: 0, //再生動画と同じチャンネルから関連動画を選択
                        autoplay: 1
                    }
                });
            }
        });
    } else {
        $(".youtube-modal").colorbox({
            inline: true,
            innerWidth: w,
            innerHeight: h,
            maxWidth: "60%",
            onComplete: function(){
                ytPlayer = new YT.Player(`${$(this).attr('data-id')}`, {
                    width: ytWidth,
                    height: ytHeight,
                    videoId: `${$(this).attr('data-y-id')}`,
                    playerVars: {
                        rel: 0, //再生動画と同じチャンネルから関連動画を選択
                        autoplay: 1
                    }
                });
            }
        });
    }
}