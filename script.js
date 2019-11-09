// Mythium Archive: https://archive.org/details/mythium/

jQuery(function ($) {
    'use strict'
    var supportsAudio = !!document.createElement('audio').canPlayType;
    if (supportsAudio) {
        // initialize plyr
        var player = new Plyr('#audio1', {
            controls: [
                'restart',
                'play',
                'progress',
                'current-time',
                'duration',
                'mute',
                'volume',
                'download'
            ]
        });
        // initialize playlist and controls
        var index = 0,
            playing = false,
            tracks = [
   {
      "song":"Afreen Afreen",
      "url":"http://hck.re/Rh8KTk",
      "artists":"Rahat Fateh Ali Khan, Momina Mustehsan",
      "cover_image":"http://hck.re/kWWxUI"
   },
   {
      "song":"Aik Alif",
      "url":"http://hck.re/ZeSJFd",
      "artists":"Saieen Zahoor, Noori",
      "cover_image":"http://hck.re/3Cm0IX"
   },
   {
      "song":"Tajdar e haram",
      "url":"http://hck.re/wxlUcX",
      "artists":"Atif Aslam",
      "cover_image":"http://hck.re/5dh4D5"
   },
   {
      "song":"Aaj Rung",
      "url":"http://hck.re/H5nMm3",
      "artists":"Amjad Sabri,  Rahat Fateh Ali Khan",
      "cover_image":"http://hck.re/U1bRnt"
   },
   {
      "song":"Ae dil",
      "url":"http://hck.re/2nCncK",
      "artists":"Ali Zafar, Sara Haider",
      "cover_image":"http://hck.re/eLtjUb"
   },
   {
      "song":"Man Amadeh am",
      "url":"http://hck.re/epOzj9",
      "artists":"Atif Aslam, Gul Panrra",
      "cover_image":"http://hck.re/KvT2Vv"
   },
   {
      "song":"Bewajah",
      "url":"http://hck.re/YkbDDP",
      "artists":"Nabeel Shaukat Ali",
      "cover_image":"http://hck.re/N29EEt"
   },
   {
      "song":"Dinae Dinae",
      "url":"http://hck.re/dMquYY",
      "artists":"Harshadeep Kaur",
      "cover_image":"http://hck.re/6l9QqH"
   },
   {
      "song":"Tera woh pyar",
      "url":"http://hck.re/64Tzod",
      "artists":"Momina Mustehsan, Asim Azhar",
      "cover_image":"http://hck.re/rlYqJY"
   },
   {
      "song":"Shamaan Pai gaiyan",
      "url":"http://hck.re/VhtQGh",
      "artists":"Rachel Viccaji, Kashif Ali",
      "cover_image":"http://hck.re/gs0grk"
   }
],


            buildPlaylist = $.each(tracks, function(key, value) {
                var trackNumber = "",
                    trackName = value.song,

                    trackDuration = value.artists;



                $('#plList').append('<li> \
                    <div class="plItem"> \
                        <span class="plNum">' + '</span> \
                        <span class="plTitle">' + trackName + '</span> \
                    </div> \
                </li>');
            }),
            trackCount = tracks.length,
            npAction = $('#npAction'),
            npTitle = $('#npTitle'),
            npArtist = $('#npArtist'),
            nppicture = $('#album_picture'),
            audio = $('#audio1').on('play', function () {
                playing = true;
                npAction.text('Now Playing...');
            }).on('pause', function () {
                playing = false;
                npAction.text('Paused...');
            }).on('ended', function () {
                npAction.text('Paused...');
                if ((index + 1) < trackCount) {
                    index++;
                    loadTrack(index);
                    audio.play();
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }).get(0),
            btnPrev = $('#btnPrev').on('click', function () {
                if ((index - 1) > -1) {
                    index--;
                    loadTrack(index);
                    if (playing) {
                        audio.play();
                    }
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }),
            btnNext = $('#btnNext').on('click', function () {
                if ((index + 1) < trackCount) {
                    index++;
                    loadTrack(index);
                    if (playing) {
                        audio.play();
                    }
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }),
            li = $('#plList li').on('click', function () {
                var id = parseInt($(this).index());
                if (id !== index) {

                    playTrack(id);
                }
            }),
            loadTrack = function (id) {
                $('.plSel').removeClass('plSel');
                $('#plList li:eq(' + id + ')').addClass('plSel');
                npTitle.text(tracks[id].song);
                npArtist.text(tracks[id].artists);
                nppicture.attr("src", tracks[id].cover_image);
                // console.log(tracks[id].cover_image);

                index = id;
                audio.src = tracks[id].url;

                updateDownload(id, audio.src);
            },
            updateDownload = function (id, source) {
                player.on('loadedmetadata', function () {
                    $('a[data-plyr="download"]').attr('href', source);
                });
            },
            playTrack = function (id) {
                loadTrack(id);
                audio.play();
            };

        loadTrack(index);
    } else {
        // no audio support
        $('.column').addClass('hidden');
        var noSupport = $('#audio1').text();
        $('.container').append('<p class="no-support">' + noSupport + '</p>');
    }
});
