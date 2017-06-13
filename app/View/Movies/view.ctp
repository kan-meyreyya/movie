
<div class="wrapper" id="view-blog">
    <div class="row">
        <div class="grid_8">
            <div class="ads-blog">
                <h1>Advertising</h1>
            </div>
            <div class="media-play border-box">
                <div class="p-wrap-top">
                    <p id="p-title">REASONABLE DOUBT</p>
                    <p id="p-date">13-06-2017</p>
                    <div class="clearfix"></div>
                </div>
                <div id="player"></div>
                <div id="p-thumb">
                    <div class="p-thumb-blog">
                        <?php
                            echo $this->Html->image('/img/thumbnails/thumb1.jpg', array(
                                'alt' => 'thumbnail 1',
                            ));
                        ?>
                    </div>
                    <div class="p-thumb-blog">
                        <?php
                            echo $this->Html->image('/img/thumbnails/thumb1.jpg', array(
                                'alt' => 'thumbnail 1',
                            ));
                        ?>
                    </div>
                    <div class="p-thumb-blog">
                        <?php
                            echo $this->Html->image('/img/thumbnails/thumb1.jpg', array(
                                'alt' => 'thumbnail 1',
                            ));
                        ?>
                    </div>
                    <div class="p-thumb-blog">
                        <?php
                            echo $this->Html->image('/img/thumbnails/thumb1.jpg', array(
                                'alt' => 'thumbnail 1',
                            ));
                        ?>
                    </div>
                    <div class="p-thumb-blog">
                        <?php
                            echo $this->Html->image('/img/thumbnails/thumb1.jpg', array(
                                'alt' => 'thumbnail 1',
                            ));
                        ?>
                    </div>
                    <div class="p-thumb-blog">
                        <?php
                            echo $this->Html->image('/img/thumbnails/thumb1.jpg', array(
                                'alt' => 'thumbnail 1',
                            ));
                        ?>
                    </div>
                    <div class="p-thumb-blog">
                        <?php
                            echo $this->Html->image('/img/thumbnails/thumb1.jpg', array(
                                'alt' => 'thumbnail 1',
                            ));
                        ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="comment-blog border-box">
                <p class="comment-title">Comments</p>
            </div>
        </div>
        <div class="grid_4"></div>
    </div>
</div>

<script type="text/javascript">
    $(function(e) {
        var player = jwplayer('player');
        player.setup({
            file: '//content.jwplatform.com/videos/xJ7Wcodt-cIp6U8lV.mp4',
            image: '//content.jwplatform.com/thumbs/xJ7Wcodt-720.jpg',
            width: '100%'
        });

        player.addButton(
            //This portion is what designates the graphic used for the button
            '//icons.jwplayer.com/icons/white/download.svg',
            //This portion determines the text that appears as a tooltip
            'Download Video',
            //This portion"Download Video", designates the functionality of the button itself
            function() {
                //With the below code, we're grabbing the file that's currently playing
                window.location.href = player.getPlaylistItem()['file'];
            },
            //And finally, here we set the unique ID of the button itself.
            'download'
        );
    });
</script>