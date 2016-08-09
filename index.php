<?php
    $file = fopen('跑步圣经茉莉跑团体报名表（20160401）VC.csv','r');
    while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
    //print_r($data); //此为一个数组，要获得每一个数据，访问数组下标即可
        $goods_list[] = array($data[0], $data[1],str_replace("`", "", $data[2]), $data[3],$data[4], $data[5],$data[6], $data[7],$data[8], $data[9], $data[10], $data[11], $data[12], $data[13]);
    }
    //print_r($goods_list);
    // $o = 0;
    // $p = 0;
    // echo "====================微信交易记录总条数（已付款）：".count($goods_list);
    // foreach ($goods_list as $arr){
    //     if ($arr[0]!=""){
    //         echo "<br />交易时间: ".$arr[0].", 商户订单号: ".$arr[2].", 下单用户: ".$arr[7].", 交易金额(元): ".$arr[11];
    //     }else
    //         echo "<br />数据为空";

    //     if($arr[11] === "100")
    //         $o++;
    //     else if($arr[11] === "200")
    //         $p++;
    // }

    // echo "<br/>====================其中100元: ".$o." 笔, 200元: ".$p." 笔";
    

    fclose($file);
?>