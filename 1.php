
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Infinity Games</title>
    <link rel="shortcut icon" href="./imgs/game-ico.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/games.css">
    <script defer="true" src="./js/jquery.js"></script>
    <script defer="true" src="./js/element-resize-detector.min.js"></script>
    <script defer="true" src="./js/vue.min.js"></script>
    <script defer="true" src="./js/games-data.js"></script>
    <script defer="true" src="./js/games.js"></script>
</head>

<body id="all">
    <div class="top-out">
        <div class="top">
            <img class="logo" src="imgs/gamebox.png" alt="">
            <h1 class="title"><span style="color:#ff4e50;">In</span>fin<span>i</span>ty Games !</h1>
        </div>
    </div>
    <div class="bg">
    </div>
    <div class="main" id="games">
        <div class="game-item" v-for="game in games" @click="play(game)">
            <div class="game-img" style="display: none;" :style="'background-image:url('+game.imgSrc+');display:block;'">
            </div>
            <div class="game-title">
                <div class="game-tag" v-text="game.tags.join('/')"></div>
                <h3 class="game-text" v-text="game.name"></h3>
            </div>
        </div>
    </div>
    <div v-if="isShowBox" class="cover" :class="'cover cover-show-'+isShowBox">
        <div :class="'game-box game-box-full-'+isFullScreen">
            <div class="game-box-title">
                <div class="game-box-name" v-text="currentGame.name"></div>
                <div class="game-box-handle">
                    <div class="game-box-full-screen" @click="fullScreen()"></div>
                    <div class="game-box-close" @click="close()"></div>
                </div>
            </div>
            <div class="game-box-content">
                <div class="game-loading">
                    <div class="sk-cube-grid">
                        <div class="sk-cube sk-cube1"></div>
                        <div class="sk-cube sk-cube2"></div>
                        <div class="sk-cube sk-cube3"></div>
                        <div class="sk-cube sk-cube4"></div>
                        <div class="sk-cube sk-cube5"></div>
                        <div class="sk-cube sk-cube6"></div>
                        <div class="sk-cube sk-cube7"></div>
                        <div class="sk-cube sk-cube8"></div>
                        <div class="sk-cube sk-cube9"></div>
                    </div>
                </div>
                <iframe class="game-box-frame" :src="currentGame.url" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="bottom-in">
            Copyright© 2014-2018 infinitynewtab.com
        </div>
    </div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116475077-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-116475077-1');
    </script>
</body>

</html>
