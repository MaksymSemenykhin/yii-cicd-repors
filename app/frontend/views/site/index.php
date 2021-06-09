<?php

/* @var $this yii\web\View */
function unixToData($unixtime){
    $date = date_create();
    date_timestamp_set($date, $unixtime);
    return date_format($date, 'd-m');
}

$this->title = 'My Yii Application';
?>
<style>
    .rotate {
        color: yellowgreen;
        transform: rotate(-90deg);
        display: inline-block;
        width: 36px;
        margin-top: 20px;
        /* Legacy vendor prefixes that you probably don't need... */

        /* Safari */
        -webkit-transform: rotate(-90deg);

        /* Firefox */
        -moz-transform: rotate(-90deg);

        /* IE */
        -ms-transform: rotate(-90deg);

        /* Opera */
        -o-transform: rotate(-90deg);

        /* Internet Explorer */
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

    }
    .chart{
        height: 120px;
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
    .chart .line .yellow{
        display:inline-block;background-color: yellow;width: 25px;
    }
    .chart .line .red{
        display:inline-block;background-color: red;width: 25px;
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
                <h5 style="color: gray;font-style: italic;">
                    has each statement in the program been executed?
                </h5>
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

                    echo '<div class="line" title="'.$row['statements'].'" ><div class="'.$color.'" style="height:'.$value.'px" ></div><span>'.$value.'%</span><span class="rotate">'.unixToData($row['created_at']).'</span></div>';
                }
                ?>
            </div>

            <h2>
                branches
            </h2>
                <h5 style="color: gray;font-style: italic;">
                    has each branch of each control structure (such as in if and case statements) been executed? For example, given an if statement, have both the true and false branches been executed? This is a subset of edge coverage.
                </h5>
            <div class="chart">
                <?php
                foreach ($data as $row) {
                    $value = floor($row['branches']);
                    if($value>70){
                        $color = 'green' ;
                    }else{
                        if($value>50){
                            $color = 'yellow' ;
                        }else{
                            $color = 'red' ;
                        }
                    }

                    echo '<div class="line" title="'.$row['branches'].'"  ><div class="'.$color.'" style="height:'.$value.'px" ></div><span>'.$value.'%</span><span class="rotate">'.unixToData($row['created_at']).'</span></div>';
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
                    if($value>70){
                        $color = 'green' ;
                    }else{
                        if($value>50){
                            $color = 'yellow' ;
                        }else{
                            $color = 'red' ;
                        }
                    }

                    echo '<div class="line" title="'.$row['lines'].'" ><div class="'.$color.'" style="height:'.$value.'px" ></div><span>'.$value.'%</span><span class="rotate">'.unixToData($row['created_at']).'</span></div>';
                }
                ?>
            </div>


            <h2>
                functions
            </h2>
                <h5 style="color: gray;font-style: italic;">
                    has each function (or subroutine) in the program been called?
                </h5>
            <div class="chart">
                <?php
                foreach ($data as $row) {
                    $value = floor($row['functions']);
                    if($value>70){
                        $color = 'green' ;
                    }else{
                        if($value>50){
                            $color = 'yellow' ;
                        }else{
                            $color = 'red' ;
                        }
                    }

                    echo '<div class="line" title="'.$row['functions'].'"  ><div class="'.$color.'" style="height:'.$value.'px" ></div><span>'.$value.'%</span><span class="rotate">'.unixToData($row['created_at']).'</span></div>';
                }
                ?>
            </div>
            </div>
        </div>

    </div>
</div>
