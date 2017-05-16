var ap1 = new APlayer({
    element: document.getElementById('player1'),
    narrow: false,
    autoplay: true,
    showlrc: false,
    mutex: true,
    theme: '#e6d0b2',
    preload: 'metadata',
    mode: 'circulation',
    music: {
        title: '糖果仙子之舞',
        author: '柴可夫斯基',
        url: '/audios/musics/candy-fairy-dance.mp3',
        pic: '/assets/images/music/candy-fairy-dance.png'
    }
});
// ap1.on('play', function () {
//     console.log('play');
// });
// ap1.on('play', function () {
//     console.log('play play');
// });
// ap1.on('pause', function () {
//     console.log('pause');
// });
// ap1.on('canplay', function () {
//     console.log('canplay');
// });
// ap1.on('playing', function () {
//     console.log('playing');
// });
// ap1.on('ended', function () {
//     console.log('ended');
// });
// ap1.on('error', function () {
//     console.log('error');
// });
