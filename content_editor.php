<style>
  .editor_section {
    position: relative;
    @extend %pt_100;
    @extend %pb_100;

    .content {
      position: relative;

      :is(h1, h2, h3, h4, h5, h6, p, pre, ul, ol, li) {
        position: relative;
        margin-bottom: 15px;
      }
      :is(img, video) {
        margin-bottom: 20px;
      }
      :is(h1, h2, h3, h4, h5, h6, p, pre, li) {
        color: var(--editorTextColor);
      }
      h1 {
        @extend %fs_64;
        line-height: 1.2;
      }
      h2 {
        @extend %fs_40;
        line-height: 1.3;
      }
      h3 {
        @extend %fs_36;
        line-height: 1.3;
      }
      h4 {
        @extend %fs_30;
        line-height: 1.3;
      }
      h5 {
        @extend %fs_26;
        line-height: 1.3;
      }
      h6 {
        @extend %fs_22;
        line-height: 1.3;
      }
      p {
        @extend %fs_18;
        line-height: 1.5;
      }
      li {
        @extend %fs_18;
        line-height: 1.5;
      }
      ul {
        margin-bottom: 25px;
        padding-left: 10px;
        @media (max-width: 991.98px) {
          margin-bottom: 20px;
        }
        @media (max-width: 767.98px) {
          margin-bottom: 15px;
        }
        li {
          list-style: inside;
          @media (max-width: 767.98px) {
            margin-bottom: 10px;
          }
        }
      }
      ol {
        margin-bottom: 25px;
        @media (max-width: 991.98px) {
          margin-bottom: 20px;
        }
        @media (max-width: 767.98px) {
          margin-bottom: 15px;
        }
        li {
          list-style: decimal-leading-zero;
          @media (max-width: 767.98px) {
            margin-bottom: 10px;
          }
        }
      }
    }
  }
</style>

<!-- HTML data -->
<?php
$bg_clr = get_sub_field('background_color');
$editor_content = get_sub_field('content');
$text_color = get_sub_field('text_color');
$shapes = get_sub_field('shapes');
$tleft = get_sub_field('top_left_shape');
$tright = get_sub_field('top_right_shape');
$bleft = get_sub_field('bottom_left_shape');
$bright = get_sub_field('bottom_right_shape');
$lcenter = get_sub_field('left_center_shape');
$rcenter = get_sub_field('right_center_shape');
?>
<!-- editor_section -->
<section class="editor_section" style="background-color: <?php echo $bg_clr; ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content" style="--editorTextColor: <?php echo $text_color; ?>">
          <?php echo $editor_content; ?>
        </div>
      </div>
    </div>
  </div>
  <?php 
  if (!empty($shapes)) {
    foreach ($shapes as $shape) {
      if ($shape == 'Top Left') {
        echo '<img src="' . esc_url($tleft['url']) . '" alt="' . esc_attr($tleft['alt']) . '" class="top-left">';
      } elseif ($shape == 'Top Right') {
        echo '<img src="' . esc_url($tright['url']) . '" alt="' . esc_attr($tright['alt']) . '" class="top-right" />';
      } elseif ($shape == 'Bottom left') {
        echo '<img src="' . esc_url($bleft['url']) . '" alt="' . esc_attr($bleft['alt']) . '" class="bottom-left" />';
      } elseif ($shape == 'Bottom Right') {
        echo '<img src="' . esc_url($bright['url']) . '" alt="' . esc_attr($bright['alt']) . '" class="bottom-right" />';
      } elseif ($shape == 'Left Center') {
        echo '<img src="' . esc_url($lcenter['url']) . '" alt="' . esc_attr($lcenter['alt']) . '" class="middle-left" />';
      } elseif ($shape == 'Right Center') {
        echo '<img src="' . esc_url($rcenter['url']) . '" alt="' . esc_attr($rcenter['alt']) . '" class="middle-right" />';
      } else { // Handle other cases if needed
        echo "Found something else: $shape\n";
      }
    }
  } else {
    // echo "No shapes selected.";
  }
  ?>
</section>

<!-- Front end data -->
<div class="content" style="--editorTextColor: #292929">
  <h1>This is heading 1</h1>
  <h2>This is heading 2</h2>
  <h3>This is heading 3</h3>
  <h4>This is heading 4</h4>
  <h5>This is heading 5</h5>
  <h6>This is heading 6</h6>
  <p>
    <strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and
    typesetting industry. Lorem Ipsum has been the industry’s standard dummy
    text ever since the 1500s, when an unknown printer took a galley of type and
    scrambled it to make a type specimen book. It has survived not only five
    centuries, but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of
    Letraset sheets containing Lorem Ipsum passages, and more recently with
    desktop publishing software like Aldus PageMaker including versions of Lorem
    Ipsum.
  </p>
  <ul>
    <li>Unordered List item 1</li>
    <li>Unordered List item 2</li>
    <li>Unordered List item 3</li>
  </ul>
  <ol>
    <li>Ordered List item 1</li>
    <li>Ordered List item 2</li>
    <li>Ordered List item 3</li>
  </ol>
  <p>
    <img fetchpriority="high" decoding="async" class="alignnone size-medium wp-image-1047" src="http://52.64.249.237/wp-content/uploads/2024/04/news_person_10-300x192.png" alt="FASD Justice Employment Resources" width="300" height="192" srcset="http://52.64.249.237/wp-content/uploads/2024/04/news_person_10-300x192.png 300w, http://52.64.249.237/wp-content/uploads/2024/04/news_person_10.png         370w" sizes="(max-width: 300px) 100vw, 300px" />
  </p>
  <p>&nbsp;</p>
  <div style="width: 1280px" class="wp-video">
    <!--[if lt IE 9
      ]><script>
        document.createElement("video");
      </script><!
    [endif]-->
    <span class="mejs-offscreen">Video Player</span>
    <div id="mep_0" class="mejs-container mejs-container-keyboard-inactive wp-video-shortcode mejs-video" tabindex="0" role="application" aria-label="Video Player" style="width: 1280px; height: 720px; min-width: 217px">
      <div class="mejs-inner">
        <div class="mejs-mediaelement">
          <mediaelementwrapper id="video-2813-1">
            <video class="wp-video-shortcode" id="video-2813-1_html5" width="1280" height="720" preload="metadata" src="http://52.64.249.237/wp-content/uploads/2024/04/test.mp4?_=1" style="width: 1280px; height: 720px">
              <source type="video/mp4" src="http://52.64.249.237/wp-content/uploads/2024/04/test.mp4?_=1" />
              <a href="http://52.64.249.237/wp-content/uploads/2024/04/test.mp4">http://52.64.249.237/wp-content/uploads/2024/04/test.mp4</a>
            </video>
          </mediaelementwrapper>
        </div>
        <div class="mejs-layers">
          <div class="mejs-poster mejs-layer" style="display: none; width: 100%; height: 100%"></div>
          <div class="mejs-overlay mejs-layer" style="width: 100%; height: 100%; display: none">
            <div class="mejs-overlay-loading">
              <span class="mejs-overlay-loading-bg-img"></span>
            </div>
          </div>
          <div class="mejs-overlay mejs-layer" style="display: none; width: 100%; height: 100%">
            <div class="mejs-overlay-error"></div>
          </div>
          <div class="mejs-overlay mejs-layer mejs-overlay-play" style="width: 100%; height: 100%">
            <div class="mejs-overlay-button" role="button" tabindex="0" aria-label="Play" aria-pressed="false"></div>
          </div>
        </div>
        <div class="mejs-controls">
          <div class="mejs-button mejs-playpause-button mejs-play">
            <button type="button" aria-controls="mep_0" title="Play" aria-label="Play" tabindex="0"></button>
          </div>
          <div class="mejs-time mejs-currenttime-container" role="timer" aria-live="off">
            <span class="mejs-currenttime">00:00</span>
          </div>
          <div class="mejs-time-rail">
            <span class="mejs-time-total mejs-time-slider" role="slider" tabindex="0" aria-label="Time Slider" aria-valuemin="0" aria-valuemax="0" aria-valuenow="0" aria-valuetext="00:00">
              <span class="mejs-time-buffering" style="display: none"></span>
              <span class="mejs-time-loaded"></span>
              <span class="mejs-time-current" style="transform: scaleX(0)"></span>
              <span class="mejs-time-hovered no-hover"></span>
              <span class="mejs-time-handle" style="transform: translateX(0px)"><span class="mejs-time-handle-content"></span></span>
              <span class="mejs-time-float">
                <span class="mejs-time-float-current">00:00</span>
                <span class="mejs-time-float-corner"></span>
              </span>
            </span>
          </div>
          <div class="mejs-time mejs-duration-container">
            <span class="mejs-duration">01:13</span>
          </div>
          <div class="mejs-button mejs-volume-button mejs-mute">
            <button type="button" aria-controls="mep_0" title="Mute" aria-label="Mute" tabindex="0"></button>
            <a href="javascript:void(0);" class="mejs-volume-slider" aria-label="Volume Slider" aria-valuemin="0" aria-valuemax="100" role="slider" aria-orientation="vertical" aria-valuenow="80" aria-valuetext="80%">
              <span class="mejs-offscreen">Use Up/Down Arrow keys to increase or decrease volume.</span>
              <div class="mejs-volume-total">
                <div class="mejs-volume-current" style="bottom: 0px; height: 80%"></div>
                <div class="mejs-volume-handle" style="bottom: 80%; margin-bottom: -3px"></div>
              </div>
            </a>
          </div>
          <div class="mejs-button mejs-fullscreen-button">
            <button type="button" aria-controls="mep_0" title="Fullscreen" aria-label="Fullscreen" tabindex="0"></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
