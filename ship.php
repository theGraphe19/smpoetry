<?php
    try
    {
        $pin = $_GET['check_pin'];
        $api = '1ab6d33ce75218034fdc93935d6ebc6f1a6d7fe2';
        $url = 'https://staging-express.delhivery.com/c/api/pin-codes/json/?token='.$api.'&filter_codes='.$pin;
        
        $response = file_get_contents($url);
        $arr = json_decode($response, TRUE);
        if($response !== false)
        {
            if(empty($arr['delivery_codes']))
            {
                echo "Cash on Delivery : Not Available";
            }

            else
            {
                if($arr['delivery_codes']['0']['postal_code']['cod']==='Y')
                {
                    echo "City Code : ".$arr['delivery_codes']['0']['postal_code']['sort_code'];
                    echo "<br>";
                    echo "District : ".$arr['delivery_codes']['0']['postal_code']['district'];
                    echo "<br>";
                    echo "Cash on Delivery : Available";
                }
                else
                {
                    echo "Cash on Delivery : Not Available";
                }
            }
        }
    }

    catch(Exception $e){
        echo $e->getMessage();
    }
?>