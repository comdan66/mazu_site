<article id='article'>
  <nav>
    <div class='user _i'>
      <img src='<?php echo avatar_url ($video['user']['fbid']);?>'>
    </div>
    <a href='<?php echo facebook_url ($video['user']['fbid']);?>' class='name' target='_blank'><?php echo $video['user']['name'];?></a>
    <i class='icon-keyboard_arrow_right'></i>
    <a href='<?php echo URL_VIDEOS . 'index' . HTML;?>' class='tag'>影音紀錄</a>
    <i class='icon-keyboard_arrow_right'></i>
    <h1 class='title'><?php echo $video['title'];?></h1>
    <time><?php echo date ('Y.m.d', strtotime ($video['created_at']));?></time>
    <div class='fb-like' data-href='<?php echo $video['url'];?>' data-send='false' data-layout='button_count' data-action='like' data-show-faces='false' data-share='true'></div>
  </nav>

  <section class='section' data-pv='Youtube' data-id='<?php echo $video['id'];?>' data-url='<?php echo $video['url'];?>'>
    <?php echo $video['content'];?>
    <p class='split'></p>
    <iframe src="//www.youtube.com/embed/<?php echo $video['vid'];?>?autoplay=1" frameborder="0"></iframe>
  </section>

  <a class='icon-mail-forward share'></a>
</article>