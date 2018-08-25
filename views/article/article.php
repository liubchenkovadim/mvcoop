
<main>
    <div class="main-content">

        <?php
        foreach ($argument as $data){
          echo $data['name'].'<br>';
          echo '<p>'. $data['text'].'</p>>';
          echo $data['time'].'<br>';
        }
        ?>
    </div>