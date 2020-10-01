<head>
    <script src="jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#country_name').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'ajaxFile.php',
                    data:'country_name='+countryID,
                    success:function(html){
                        $('#country_price').html(html);
                    }
                }); 
            }else{
                $('#country_price').html('Select country first');
            }
        });
    });
    </script>
</head>

<select id="country_name" name="country_name" style="font-family:Helvetica;font-size:1.4rem; text-align: center;">
    <option value="">--------Select Country--------</option>
    <?php
        include('dbcon.php');
        $q = "select * from countries order by country_name ASC";
        $run = mysqli_query($connection, $q);

        while($row = mysqli_fetch_array($run))
        {
    ?>
    <option value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option>
    <?php
        }
    ?>
</select>

<div name="country_price" id="country_price"></div>