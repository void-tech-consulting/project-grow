<div>
    <?php
      require 'inc/section_vars.php';   
      // get_example_data is in /inc/template_functions.php
      $data  = get_example_data($example_repeater);
      if(!empty( $data ) ) { 
        ?>
        <section class="example">
        <?php
          foreach ( $data as $k => $f ) {  
            // Make sure to use a semicolon; when using php on multiple lines
            $questionId = 'question'.$k;
            $answerContent = "<div id=\"".$questionId."\" class=\"answer-text\">";
            ?>
            <div class="questionbox" <?php echo "data-question-id=\"".$k."\"" ?>> 
              <span class="question-text"><?php echo $f['question']?> </span>
            </div>
            <div class="dropdown-line"></div>
            <?php echo $answerContent ?>
              <a href="<?php echo $f['link']; ?>">
                <div class= "answer-wrap">
                    <?php echo $f['answer']; ?>
                </div>
              </a>
            </div>
      <?php
          }
      ?>
        </section>
<?php } ?>

</div>