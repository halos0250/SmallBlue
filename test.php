<?php

class test
{
    private $result;
    private $fetch_all;
    private $fetch_array;

    public function DBLink_Query($sql, $fetch = null)
    {// ( 輸入SQL語法, [選擇要fetch_all 還是fetch_array] )
        $db_link = mysqli_connect("127.0.0.1", "root", "ABC1283570", "enterprise") or die("資料庫連結失敗");
        mysqli_query($db_link, $sql);

        if($fetch == "fetch_all")
        {//回傳所有行(row)和列(column)的資料，Array[][]
            $this->result = mysqli_query($db_link, $sql);
            $this->fetch_all = mysqli_fetch_all($this->result, MYSQLI_ASSOC);//默認是數字
        }elseif ($fetch == "fetch_array")
        {//擷取第一行(row)的資料，Array[]
            $this->result = mysqli_query($db_link, $sql);
            $this->fetch_array = mysqli_fetch_array($this->result);
        }
    }

    public function SearchResults($search)
    {
        if($search['search']!=null)
        {
            $this->DBLink_Query("SELECT `p_id`, `id`, `p_name`, `p_des`, `p_image`, `p_categ`, `price`, `p_quan` 
                                    FROM `product` WHERE p_name LIKE '%123'", "fetch_all");

            if($this->fetch_all == null)
                echo "查無結果";
            else
            {
                echo "<div class='row'>";
                foreach ($this->fetch_all as $item)
                {
                    echo"
                        <div class='col-lg-3 col-sm-6 portfolio-item'>
                          <div class='card h-100'>
                            <img class='card-img-top' src='./images/".$item['p_image']."' alt='".$item['p_image']."'></a>
                            <div class='card-body'>
                              <h4 class='card-title'>
                                <a href='index.php'>".$item['p_name']."</a>
                              </h4>
                              <p class='card-text'>NT$ ".$item['price']."<br>".$item['p_des']."</p>
                            </div>
                          </div>
                        </div>
                        ";
                }
                echo "</div>";
                echo "<hr>";
            }
        }
    }

    public function Cart($act, $product_id, $customer_id)
    {
        //使用購物車
        switch ($act)
        {
            case "add":
                //要新增商品的ID
                $id = $this->DBLink_Query("SELECT `id` FROM `cart` order by id DESC", "fetch_array");
                $id = $this->fetch_array["id"] + 1;

                //新增至購物車
                $this->DBLink_Query("INSERT INTO `cart`(`cart_id`, `p_id`, `id`) VALUES ($id, $product_id, $customer_id)");
                break;
            case "delete":
                $this->DBLink_Query("DELETE FROM `cart` WHERE `p_id` = $product_id");
                break;
            case "display":
                $this->DBLink_Query("SELECT `p_name`, `p_des`, `p_image`, `price` FROM `product`, `cart`, `customer`
                                            WHERE `product`.`p_id` = `cart`.`p_id` AND `customer`.`id` = $customer_id", "fetch_all");
                echo "<div class='row'>";
                foreach ($this->fetch_all as $item)
                {
                    echo"
                        <div class='col-lg-3 col-sm-6 portfolio-item'>
                          <div class='card h-100'>
                            <img class='card-img-top' src='./images/".$item['p_image']."' alt='".$item['p_image']."'></a>
                            <div class='card-body'>
                              <h4 class='card-title'>
                                <a href='index.php'>".$item['p_name']."</a>
                              </h4>
                              <p class='card-text'>NT$ ".$item['price']."<br>".$item['p_des']."</p>
                            </div>
                          </div>
                        </div>
                        ";
                }
                echo "</div>";
                echo "<hr>";
                break;
        }
    }

    public function Login($name, $pwd)
    {
        session_start();
        if(isset($name, $pwd))
        {
            $_SESSION['name'] = $name;
            $_SESSION['pwd'] = $pwd;
        }

        if (isset($_SESSION['name'], $_SESSION['pwd']))
        {
            //搜尋帳號密碼是否正確
            $this->DBLink_Query("SELECT * FROM `customer` where c_name ='".$_SESSION['name']."' and c_pword ='".$_SESSION['pwd']."'", fetch_array);

            if(isset($this->fetch_array))
            {
                header("Location: index.php");
            }
            else
            {
                echo "查無此帳號";
                $_SESSION['name'] = null;
                $_SESSION['pwd'] = null;
            }
        }

    }

    public function Register($name, $pwd, $phone, $sex)
    {
        if(isset($name, $pwd, $phone, $sex))
        {
            //搜尋帳號是否已被申請
            $this->DBLink_Query("SELECT * FROM `customer` where c_name = '$name'", "fetch_array");

            if ($this->fetch_array == null)
            {
                //自動編號碼
                $this->DBLink_Query("SELECT id FROM `customer` order by id DESC", "fetch_array");
                $id = $this->fetch_array['id'] + 1;
                //註冊
                $this->DBLink_Query("INSERT INTO `customer`(`id`, `c_name`, `c_pword`, `phone`, `sex`, `level`) 
                                VALUES ('$id', '$name', '$pwd', '$phone', '$sex', '0')");

                session_start();
                $_SESSION['name'] = $name;
                $_SESSION['pwd'] = $pwd;
                header("Location: index.php");
            }
            else
            {
                echo "已經有人使用";
            }
        }
    }
}