var ap1 = new APlayer({
    element: document.getElementById('player'),
    narrow: false,
    autoplay: true,
    showlrc: false,
    mutex: true,
    theme: '#e6d0b2',
    preload: 'metadata',
    mode: 'circulation',
    music: {
        title: $('#player-title').attr('value'),
        author: $('#player-author').attr('value'),
        url: $('#player-url').attr('value'),
        pic: $('#player-pic').attr('value')
    }
});
