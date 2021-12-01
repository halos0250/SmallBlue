<?php

class test
{
    public function SearchResults($a){
        $db_link=@mysqli_connect("127.0.0.1", "root", "ABC1283570", "電動車") or die("資料庫連結失敗");

        if($a['search']!=null)
        {
            $sql = "SELECT `電動車型號`, `顏色`, `內容`, `照片`, `價格` FROM `電動車` WHERE 電動車型號 LIKE '%".$a['search']."%'";
            mysqli_query($db_link);
            $result=mysqli_query($db_link, $sql);
            $row=mysqli_fetch_all($result);

            if($row == null)
                echo "查無結果";
            else
            {
                echo "<div class='row'>";
                for($x=0;$x<mysqli_num_rows($result);$x++)
                {
                    echo"
                        <div class='col-lg-4 col-sm-6 portfolio-item'>
                          <div class='card h-100'>
                            <a href='./images/test1.jfif'><img class='card-img-top' src='./images/test1.jfif' alt=''></a>
                            <div class='card-body'>
                              <h4 class='card-title'>
                                <a href='project-detail.php?modal=".$row[$x][0]."'>".$row[$x][0]."</a>
                              </h4>
                              <p class='card-text'>NT$ ".$row[$x][4]."<br>".$row[$x][2]."</p>
                            </div>
                          </div>
                        </div>
                        ";
                }
                echo "<hr>";
            }
        }
    }

    public function cart(){
        //
    }
}