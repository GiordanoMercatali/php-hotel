<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    

            <div class="">

            <?php foreach ($hotels as $curHotel) { ?>
                    <div class="row my-0 mx-auto">
                        <div class="col-2 border d-flex align-items-center justify-content-center">
                            <h2>
                                <?php echo $curHotel['name']; ?>
                            </h2>
                        </div>
                        
                        <div class="col-2 border d-flex align-items-center justify-content-center">
                            <p><?php echo $curHotel['description']; ?></p>
                        </div>
                        
                        <div class="col-2 border d-flex align-items-center justify-content-center">
                            <?php if ($curHotel['parking']) { ?>
                                <p>Yes</p>
                            <?php } else { ?>
                                <p>No</p>
                            <?php } ?>
                        </div>

                        <div class="col-2 border d-flex align-items-center justify-content-center">
                            <p><?php echo $curHotel['vote']; ?> / 5</p>
                        </div>

                        <div class="col-2 border d-flex align-items-center justify-content-center">
                            <p><?php echo $curHotel['distance_to_center']; ?> Km</p>
                        </div>

                    </div>
                <?php } ?>

            

</body>
</html>