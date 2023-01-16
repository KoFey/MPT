<div class="row col-1 py-3 ">
    <div class="col ">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <?php
                for ($i = 1; $i < 11; $i++) {
                    $id = $_GET['trainer']==$i?"active":null;
                    echo '<a class="nav-link border '.$id.'" style="padding-right:25px" id="v-pills-home-tab" href="/trainerPage?trainer='.$i.'">Умножение на '.$i.'</a>';

                }
               $id =$_GET['q'] == "examPage"?"active":null;
            ?>
            <a class="nav-link border <?php echo $id ?>" style="padding-right:25px" id="v-pills-home-tab" href="/examPage">Случайные варианты</a>
        </div>
    </div>
</div>
