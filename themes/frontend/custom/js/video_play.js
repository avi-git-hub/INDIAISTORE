const YouTube = {
    name: 'YouTube',
    props: {
      data: {
        type: Object
      }
    },
    template: `<figure>
      <iframe ref="iframe" width="100%" height="100%" :src="embedUrl" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen />
    </figure>`,
    computed: {
      embedUrl() {
        return `//www.youtube.com/embed/${this.data.id}?rel=0&playsinline=1&enablejsapi=1&origin=${window.location.origin}`;
      },
    },
    data() {
      return {
        player: null
      }
    },
    mounted() {
      this.$watch('$parent.youtubeApiReady', val => {
        if (val === true) {
          this.createPlayer();
        }
      })
    },
    beforeDestroy() {
      try {
        if (this.player) {
          this.player.destroy();
        }
      } catch (e) {
        //
      }
    },
    methods: {
        createPlayer() {
        this.player = new window.YT.Player(this.$refs.iframe, {
          events: {
            onReady: event => {
              this.$emit('ready', { player: event.target });
            },
            onStateChange: event => {
              this.$emit('change', {
                player: event.target,
                status: event.data
              });
            }
          }
        });
      }
    }
  }
  
  let playingVideo = null;
  
  new Vue({
    name: 'App',
    el: "#app",
    components: { YouTube },
    data() {
      return {
        youtubeApiReady: false,
        videos: [
          {id: 'rWh3snw0IIc'},
          {id: 'lhLHPH2c46U'},
          {id: 'RluLEaxUTNE'},
          {id: 'qrzrCVMtoHE'},
          {id: 'xLUpsISrjPs'},
          {id: 'Aqjfx4ORx4U'}
        ]
      }
    },
    created() {
      const tag = window.document.createElement('script');
      tag.src = '//www.youtube.com/iframe_api';
      tag.async = true;
      const firstScriptTag = document.querySelector('script');
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      window.onYouTubeIframeAPIReady = () => {
        console.log('YouTube API Ready')
        this.youtubeApiReady = true;
      };
    },
    
    methods: {
      onYouTubeStateChange({ player, status }) {
        if (status !== window.YT.PlayerState.PLAYING) {
          return;
        }
        if (playingVideo === null) {
          playingVideo = player;
          return;
        }
        if (playingVideo.getVideoUrl() !== player.getVideoUrl()) {
          try {
            playingVideo.stopVideo();
          } catch (e) {
            //
          }
          playingVideo = player;
        }
      }
    }
  })