<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style>
    .chart{
        height: 100px;
    }
    .chart .line{
        /*height: 100px;*/
        display:inline-block;width: 25px;margin: 10px
    }
    .chart .line .green{
        display:inline-block;background-color: green;width: 25px;
    }
    .chart .line .blue{
        display:inline-block;background-color: green;width: 25px;
    }
    .chart .line .yellew{
        display:inline-block;background-color: yellow;width: 25px;
    }
</style>
<div class="site-index">

<!--    <div class="jumbotron">-->
<!--        <h1>Congratulations!</h1>-->
<!---->
<!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
<!---->
<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
<!--    </div>-->



    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
            <h2>
                statements
            </h2>
            <div class="chart">
                <?php
                foreach ($data as $row) {
                    $value = floor($row['statements']);
                    if($value>70){
                        $color = 'green' ;
                    }else{
                        if($value>50){
                            $color = 'yellow' ;
                        }else{
                            $color = 'red' ;
                        }
                    }

                    echo '<div class="line" ><div class="'.$color.'" style="height:'.$value.'px" ></div><span>'.$row['statements'].'</span></div>';
                }
                ?>
            </div>

            <h2>
                branches
            </h2>
            <div class="chart">
                <?php
                foreach ($data as $row) {
                    $value = floor($row['branches']);
                    $value = floor($row['statements']);
                    if($value>70){
                        $color = 'green' ;
                    }else{
                        if($value>50){
                            $color = 'yellow' ;
                        }else{
                            $color = 'red' ;
                        }
                    }

                    echo '<div class="line" ><div class="'.$color.'"  style="height:'.$value.'px" ></div><span>'.$row['branches'].'</span></div>';
                }
                ?>
            </div>
            <h2>
                lines
            </h2>
            <div class="chart">
                <?php
                foreach ($data as $row) {
                    $value = floor($row['lines']);
                    $value = floor($row['statements']);
                    if($value>70){
                        $color = 'green' ;
                    }else{
                        if($value>50){
                            $color = 'yellow' ;
                        }else{
                            $color = 'red' ;
                        }
                    }

                    echo '<div class="line" ><div class="'.$color.'"  style="height:'.$value.'px" ></div><span>'.$row['lines'].'</span></div>';
                }
                ?>
            </div>


            <h2>
                functions
            </h2>
            <div class="chart">
                <?php
                foreach ($data as $row) {
                    $value = floor($row['functions']*10);
                    $value = floor($row['statements']);
                    if($value>70){
                        $color = 'green' ;
                    }else{
                        if($value>50){
                            $color = 'yellow' ;
                        }else{
                            $color = 'red' ;
                        }
                    }

                    echo '<div class="line" ><div class="'.$color.'"  style="height:'.$value.'px" ></div><span>'.$row['functions'].'</span></div>';
                }
                ?>
            </div>
            </div>
        </div>

    </div>
</div>
